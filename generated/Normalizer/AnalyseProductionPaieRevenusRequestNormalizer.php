<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\AnalyseProductionPaieRevenusRequest;
use QdequippeTech\Silae\Api\Model\RequeteAnalyseProductionRevenus;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AnalyseProductionPaieRevenusRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return AnalyseProductionPaieRevenusRequest::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && AnalyseProductionPaieRevenusRequest::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new AnalyseProductionPaieRevenusRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        if (\array_key_exists('requeteAnalyseProductionRevenus', $data) && null !== $data['requeteAnalyseProductionRevenus']) {
            $object->setRequeteAnalyseProductionRevenus($this->denormalizer->denormalize($data['requeteAnalyseProductionRevenus'], RequeteAnalyseProductionRevenus::class, 'json', $context));
        } elseif (\array_key_exists('requeteAnalyseProductionRevenus', $data) && null === $data['requeteAnalyseProductionRevenus']) {
            $object->setRequeteAnalyseProductionRevenus(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('requeteAnalyseProductionRevenus') && null !== $data->getRequeteAnalyseProductionRevenus()) {
            $dataArray['requeteAnalyseProductionRevenus'] = $this->normalizer->normalize($data->getRequeteAnalyseProductionRevenus(), 'json', $context);
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [AnalyseProductionPaieRevenusRequest::class => false];
    }
}
