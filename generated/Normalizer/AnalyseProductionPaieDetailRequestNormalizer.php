<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\AnalyseProductionPaieDetailRequest;
use QdequippeTech\Silae\Api\Model\RequeteAnalyseProductionDetailV2;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AnalyseProductionPaieDetailRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return AnalyseProductionPaieDetailRequest::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && AnalyseProductionPaieDetailRequest::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new AnalyseProductionPaieDetailRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        if (\array_key_exists('requeteAnalyseProductionDetail', $data) && null !== $data['requeteAnalyseProductionDetail']) {
            $object->setRequeteAnalyseProductionDetail($this->denormalizer->denormalize($data['requeteAnalyseProductionDetail'], RequeteAnalyseProductionDetailV2::class, 'json', $context));
        } elseif (\array_key_exists('requeteAnalyseProductionDetail', $data) && null === $data['requeteAnalyseProductionDetail']) {
            $object->setRequeteAnalyseProductionDetail(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('requeteAnalyseProductionDetail') && null !== $data->getRequeteAnalyseProductionDetail()) {
            $dataArray['requeteAnalyseProductionDetail'] = $this->normalizer->normalize($data->getRequeteAnalyseProductionDetail(), 'json', $context);
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [AnalyseProductionPaieDetailRequest::class => false];
    }
}
