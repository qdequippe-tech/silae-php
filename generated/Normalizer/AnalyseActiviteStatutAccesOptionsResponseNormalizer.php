<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\AnalyseActiviteStatutAccesOptions;
use QdequippeTech\Silae\Api\Model\AnalyseActiviteStatutAccesOptionsResponse;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AnalyseActiviteStatutAccesOptionsResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return AnalyseActiviteStatutAccesOptionsResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && AnalyseActiviteStatutAccesOptionsResponse::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new AnalyseActiviteStatutAccesOptionsResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        if (\array_key_exists('statutAccesOptions', $data) && null !== $data['statutAccesOptions']) {
            $values = [];
            foreach ($data['statutAccesOptions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, AnalyseActiviteStatutAccesOptions::class, 'json', $context);
            }

            $object->setStatutAccesOptions($values);
        } elseif (\array_key_exists('statutAccesOptions', $data) && null === $data['statutAccesOptions']) {
            $object->setStatutAccesOptions(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('statutAccesOptions') && null !== $data->getStatutAccesOptions()) {
            $values = [];
            foreach ($data->getStatutAccesOptions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }

            $dataArray['statutAccesOptions'] = $values;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [AnalyseActiviteStatutAccesOptionsResponse::class => false];
    }
}
