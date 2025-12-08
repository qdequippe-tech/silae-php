<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\StatistiquesDADS;
use QdequippeTech\Silae\Api\Model\StatistiquesProductionV2;
use QdequippeTech\Silae\Api\Model\StatistiquesV2;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class StatistiquesV2Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return StatistiquesV2::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && StatistiquesV2::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new StatistiquesV2();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('numeroDossier', $data) && null !== $data['numeroDossier']) {
            $object->setNumeroDossier($data['numeroDossier']);
        } elseif (\array_key_exists('numeroDossier', $data) && null === $data['numeroDossier']) {
            $object->setNumeroDossier(null);
        }

        if (\array_key_exists('codeAgence', $data) && null !== $data['codeAgence']) {
            $object->setCodeAgence($data['codeAgence']);
        } elseif (\array_key_exists('codeAgence', $data) && null === $data['codeAgence']) {
            $object->setCodeAgence(null);
        }

        if (\array_key_exists('statistiquesProduction', $data) && null !== $data['statistiquesProduction']) {
            $values = [];
            foreach ($data['statistiquesProduction'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, StatistiquesProductionV2::class, 'json', $context);
            }

            $object->setStatistiquesProduction($values);
        } elseif (\array_key_exists('statistiquesProduction', $data) && null === $data['statistiquesProduction']) {
            $object->setStatistiquesProduction(null);
        }

        if (\array_key_exists('statistiquesDADS', $data) && null !== $data['statistiquesDADS']) {
            $values_1 = [];
            foreach ($data['statistiquesDADS'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, StatistiquesDADS::class, 'json', $context);
            }

            $object->setStatistiquesDADS($values_1);
        } elseif (\array_key_exists('statistiquesDADS', $data) && null === $data['statistiquesDADS']) {
            $object->setStatistiquesDADS(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('numeroDossier') && null !== $data->getNumeroDossier()) {
            $dataArray['numeroDossier'] = $data->getNumeroDossier();
        }

        if ($data->isInitialized('codeAgence') && null !== $data->getCodeAgence()) {
            $dataArray['codeAgence'] = $data->getCodeAgence();
        }

        if ($data->isInitialized('statistiquesProduction') && null !== $data->getStatistiquesProduction()) {
            $values = [];
            foreach ($data->getStatistiquesProduction() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }

            $dataArray['statistiquesProduction'] = $values;
        }

        if ($data->isInitialized('statistiquesDADS') && null !== $data->getStatistiquesDADS()) {
            $values_1 = [];
            foreach ($data->getStatistiquesDADS() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }

            $dataArray['statistiquesDADS'] = $values_1;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [StatistiquesV2::class => false];
    }
}
