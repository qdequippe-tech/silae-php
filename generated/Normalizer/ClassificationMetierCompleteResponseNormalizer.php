<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\ClassificationMetierCompleteResponse;
use QdequippeTech\Silae\Api\Model\EmploiClassificationMetier;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ClassificationMetierCompleteResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return ClassificationMetierCompleteResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && ClassificationMetierCompleteResponse::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new ClassificationMetierCompleteResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('emploisClassificationsMetiers', $data) && null !== $data['emploisClassificationsMetiers']) {
            $values = [];
            foreach ($data['emploisClassificationsMetiers'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, EmploiClassificationMetier::class, 'json', $context);
            }

            $object->setEmploisClassificationsMetiers($values);
        } elseif (\array_key_exists('emploisClassificationsMetiers', $data) && null === $data['emploisClassificationsMetiers']) {
            $object->setEmploisClassificationsMetiers(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('emploisClassificationsMetiers') && null !== $data->getEmploisClassificationsMetiers()) {
            $values = [];
            foreach ($data->getEmploisClassificationsMetiers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }

            $dataArray['emploisClassificationsMetiers'] = $values;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [ClassificationMetierCompleteResponse::class => false];
    }
}
