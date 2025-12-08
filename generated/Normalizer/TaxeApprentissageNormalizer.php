<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\TaxeApprentissage;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TaxeApprentissageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return TaxeApprentissage::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && TaxeApprentissage::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new TaxeApprentissage();
        if (\array_key_exists('soumisTaxeApprentissage', $data) && \is_int($data['soumisTaxeApprentissage'])) {
            $data['soumisTaxeApprentissage'] = (bool) $data['soumisTaxeApprentissage'];
        }

        if (\array_key_exists('soumisTaxeApprentissageAvecMajoration', $data) && \is_int($data['soumisTaxeApprentissageAvecMajoration'])) {
            $data['soumisTaxeApprentissageAvecMajoration'] = (bool) $data['soumisTaxeApprentissageAvecMajoration'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('anneeMillesime', $data) && null !== $data['anneeMillesime']) {
            $object->setAnneeMillesime(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['anneeMillesime']));
        } elseif (\array_key_exists('anneeMillesime', $data) && null === $data['anneeMillesime']) {
            $object->setAnneeMillesime(null);
        }

        if (\array_key_exists('soumisTaxeApprentissage', $data) && null !== $data['soumisTaxeApprentissage']) {
            $object->setSoumisTaxeApprentissage($data['soumisTaxeApprentissage']);
        } elseif (\array_key_exists('soumisTaxeApprentissage', $data) && null === $data['soumisTaxeApprentissage']) {
            $object->setSoumisTaxeApprentissage(null);
        }

        if (\array_key_exists('motifNonAssujettissement', $data) && null !== $data['motifNonAssujettissement']) {
            $object->setMotifNonAssujettissement($data['motifNonAssujettissement']);
        } elseif (\array_key_exists('motifNonAssujettissement', $data) && null === $data['motifNonAssujettissement']) {
            $object->setMotifNonAssujettissement(null);
        }

        if (\array_key_exists('operateurCompetences', $data) && null !== $data['operateurCompetences']) {
            $object->setOperateurCompetences($data['operateurCompetences']);
        } elseif (\array_key_exists('operateurCompetences', $data) && null === $data['operateurCompetences']) {
            $object->setOperateurCompetences(null);
        }

        if (\array_key_exists('soumisTaxeApprentissageAvecMajoration', $data) && null !== $data['soumisTaxeApprentissageAvecMajoration']) {
            $object->setSoumisTaxeApprentissageAvecMajoration($data['soumisTaxeApprentissageAvecMajoration']);
        } elseif (\array_key_exists('soumisTaxeApprentissageAvecMajoration', $data) && null === $data['soumisTaxeApprentissageAvecMajoration']) {
            $object->setSoumisTaxeApprentissageAvecMajoration(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('anneeMillesime') && null !== $data->getAnneeMillesime()) {
            $dataArray['anneeMillesime'] = $data->getAnneeMillesime()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('soumisTaxeApprentissage') && null !== $data->getSoumisTaxeApprentissage()) {
            $dataArray['soumisTaxeApprentissage'] = $data->getSoumisTaxeApprentissage();
        }

        if ($data->isInitialized('motifNonAssujettissement') && null !== $data->getMotifNonAssujettissement()) {
            $dataArray['motifNonAssujettissement'] = $data->getMotifNonAssujettissement();
        }

        if ($data->isInitialized('operateurCompetences') && null !== $data->getOperateurCompetences()) {
            $dataArray['operateurCompetences'] = $data->getOperateurCompetences();
        }

        if ($data->isInitialized('soumisTaxeApprentissageAvecMajoration') && null !== $data->getSoumisTaxeApprentissageAvecMajoration()) {
            $dataArray['soumisTaxeApprentissageAvecMajoration'] = $data->getSoumisTaxeApprentissageAvecMajoration();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [TaxeApprentissage::class => false];
    }
}
