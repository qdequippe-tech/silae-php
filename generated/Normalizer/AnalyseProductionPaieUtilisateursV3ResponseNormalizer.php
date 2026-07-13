<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\AnalyseProductionPaieUtilisateursV3Response;
use QdequippeTech\Silae\Api\Model\StatistiquesUtilisateursV3;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AnalyseProductionPaieUtilisateursV3ResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return AnalyseProductionPaieUtilisateursV3Response::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && AnalyseProductionPaieUtilisateursV3Response::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new AnalyseProductionPaieUtilisateursV3Response();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        if (\array_key_exists('statistiquesUtilisateurs', $data) && null !== $data['statistiquesUtilisateurs']) {
            $values = [];
            foreach ($data['statistiquesUtilisateurs'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, StatistiquesUtilisateursV3::class, 'json', $context);
            }

            $object->setStatistiquesUtilisateurs($values);
        } elseif (\array_key_exists('statistiquesUtilisateurs', $data) && null === $data['statistiquesUtilisateurs']) {
            $object->setStatistiquesUtilisateurs(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('statistiquesUtilisateurs') && null !== $data->getStatistiquesUtilisateurs()) {
            $values = [];
            foreach ($data->getStatistiquesUtilisateurs() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }

            $dataArray['statistiquesUtilisateurs'] = $values;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [AnalyseProductionPaieUtilisateursV3Response::class => false];
    }
}
