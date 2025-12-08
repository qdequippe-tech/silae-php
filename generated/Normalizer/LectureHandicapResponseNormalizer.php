<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\Handicap;
use QdequippeTech\Silae\Api\Model\LectureHandicapResponse;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class LectureHandicapResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return LectureHandicapResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && LectureHandicapResponse::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new LectureHandicapResponse();
        if (\array_key_exists('salarieHandicape', $data) && \is_int($data['salarieHandicape'])) {
            $data['salarieHandicape'] = (bool) $data['salarieHandicape'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('salarieHandicape', $data) && null !== $data['salarieHandicape']) {
            $object->setSalarieHandicape($data['salarieHandicape']);
        } elseif (\array_key_exists('salarieHandicape', $data) && null === $data['salarieHandicape']) {
            $object->setSalarieHandicape(null);
        }

        if (\array_key_exists('handicap', $data) && null !== $data['handicap']) {
            $values = [];
            foreach ($data['handicap'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, Handicap::class, 'json', $context);
            }

            $object->setHandicap($values);
        } elseif (\array_key_exists('handicap', $data) && null === $data['handicap']) {
            $object->setHandicap(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('salarieHandicape') && null !== $data->getSalarieHandicape()) {
            $dataArray['salarieHandicape'] = $data->getSalarieHandicape();
        }

        if ($data->isInitialized('handicap') && null !== $data->getHandicap()) {
            $values = [];
            foreach ($data->getHandicap() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }

            $dataArray['handicap'] = $values;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [LectureHandicapResponse::class => false];
    }
}
