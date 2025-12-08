<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\LectureReponsesQuestionnaireConventionnelSalarieResponse;
use QdequippeTech\Silae\Api\Model\QCCNReponses;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class LectureReponsesQuestionnaireConventionnelSalarieResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return LectureReponsesQuestionnaireConventionnelSalarieResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && LectureReponsesQuestionnaireConventionnelSalarieResponse::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new LectureReponsesQuestionnaireConventionnelSalarieResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('qccn', $data) && null !== $data['qccn']) {
            $values = [];
            foreach ($data['qccn'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, QCCNReponses::class, 'json', $context);
            }

            $object->setQccn($values);
        } elseif (\array_key_exists('qccn', $data) && null === $data['qccn']) {
            $object->setQccn(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('qccn') && null !== $data->getQccn()) {
            $values = [];
            foreach ($data->getQccn() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }

            $dataArray['qccn'] = $values;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [LectureReponsesQuestionnaireConventionnelSalarieResponse::class => false];
    }
}
