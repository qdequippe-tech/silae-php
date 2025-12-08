<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SalarieDUE;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalarieDUENormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return SalarieDUE::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && SalarieDUE::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new SalarieDUE();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('matriculeSalarie', $data) && null !== $data['matriculeSalarie']) {
            $object->setMatriculeSalarie($data['matriculeSalarie']);
        } elseif (\array_key_exists('matriculeSalarie', $data) && null === $data['matriculeSalarie']) {
            $object->setMatriculeSalarie(null);
        }

        if (\array_key_exists('nomInterneEtablissement', $data) && null !== $data['nomInterneEtablissement']) {
            $object->setNomInterneEtablissement($data['nomInterneEtablissement']);
        } elseif (\array_key_exists('nomInterneEtablissement', $data) && null === $data['nomInterneEtablissement']) {
            $object->setNomInterneEtablissement(null);
        }

        if (\array_key_exists('dateEmbauche', $data) && null !== $data['dateEmbauche']) {
            $object->setDateEmbauche(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateEmbauche']));
        } elseif (\array_key_exists('dateEmbauche', $data) && null === $data['dateEmbauche']) {
            $object->setDateEmbauche(null);
        }

        if (\array_key_exists('dateFinContrat', $data) && null !== $data['dateFinContrat']) {
            $object->setDateFinContrat(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateFinContrat']));
        } elseif (\array_key_exists('dateFinContrat', $data) && null === $data['dateFinContrat']) {
            $object->setDateFinContrat(null);
        }

        if (\array_key_exists('typeContrat', $data) && null !== $data['typeContrat']) {
            $object->setTypeContrat($data['typeContrat']);
        } elseif (\array_key_exists('typeContrat', $data) && null === $data['typeContrat']) {
            $object->setTypeContrat(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('matriculeSalarie') && null !== $data->getMatriculeSalarie()) {
            $dataArray['matriculeSalarie'] = $data->getMatriculeSalarie();
        }

        if ($data->isInitialized('nomInterneEtablissement') && null !== $data->getNomInterneEtablissement()) {
            $dataArray['nomInterneEtablissement'] = $data->getNomInterneEtablissement();
        }

        if ($data->isInitialized('dateEmbauche') && null !== $data->getDateEmbauche()) {
            $dataArray['dateEmbauche'] = $data->getDateEmbauche()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('dateFinContrat') && null !== $data->getDateFinContrat()) {
            $dataArray['dateFinContrat'] = $data->getDateFinContrat()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('typeContrat') && null !== $data->getTypeContrat()) {
            $dataArray['typeContrat'] = $data->getTypeContrat();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [SalarieDUE::class => false];
    }
}
