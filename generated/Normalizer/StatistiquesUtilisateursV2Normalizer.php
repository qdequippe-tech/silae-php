<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\StatistiquesProductionUtilisateurV2;
use QdequippeTech\Silae\Api\Model\StatistiquesUtilisateursV2;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class StatistiquesUtilisateursV2Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return StatistiquesUtilisateursV2::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && StatistiquesUtilisateursV2::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new StatistiquesUtilisateursV2();
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

        if (\array_key_exists('statistiquesProductionUtilisateurs', $data) && null !== $data['statistiquesProductionUtilisateurs']) {
            $values = [];
            foreach ($data['statistiquesProductionUtilisateurs'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, StatistiquesProductionUtilisateurV2::class, 'json', $context);
            }

            $object->setStatistiquesProductionUtilisateurs($values);
        } elseif (\array_key_exists('statistiquesProductionUtilisateurs', $data) && null === $data['statistiquesProductionUtilisateurs']) {
            $object->setStatistiquesProductionUtilisateurs(null);
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

        if ($data->isInitialized('statistiquesProductionUtilisateurs') && null !== $data->getStatistiquesProductionUtilisateurs()) {
            $values = [];
            foreach ($data->getStatistiquesProductionUtilisateurs() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }

            $dataArray['statistiquesProductionUtilisateurs'] = $values;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [StatistiquesUtilisateursV2::class => false];
    }
}
