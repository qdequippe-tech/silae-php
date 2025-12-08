<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\LectureInformationsPaieResponse;
use QdequippeTech\Silae\Api\Model\LectureInfosResult;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class LectureInformationsPaieResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return LectureInformationsPaieResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && LectureInformationsPaieResponse::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new LectureInformationsPaieResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('reponsesInfosPaie', $data) && null !== $data['reponsesInfosPaie']) {
            $values = [];
            foreach ($data['reponsesInfosPaie'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, LectureInfosResult::class, 'json', $context);
            }

            $object->setReponsesInfosPaie($values);
        } elseif (\array_key_exists('reponsesInfosPaie', $data) && null === $data['reponsesInfosPaie']) {
            $object->setReponsesInfosPaie(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('reponsesInfosPaie') && null !== $data->getReponsesInfosPaie()) {
            $values = [];
            foreach ($data->getReponsesInfosPaie() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }

            $dataArray['reponsesInfosPaie'] = $values;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [LectureInformationsPaieResponse::class => false];
    }
}
