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

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\TaxeApprentissage' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof TaxeApprentissage;
    }

    /**
     * @param mixed|null $format
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new TaxeApprentissage();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('anneeMillesime', $data) && null !== $data['anneeMillesime']) {
            $object->setAnneeMillesime(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['anneeMillesime']));
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

    /**
     * @param mixed|null $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('anneeMillesime') && null !== $object->getAnneeMillesime()) {
            $data['anneeMillesime'] = $object->getAnneeMillesime()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('soumisTaxeApprentissage') && null !== $object->getSoumisTaxeApprentissage()) {
            $data['soumisTaxeApprentissage'] = $object->getSoumisTaxeApprentissage();
        }
        if ($object->isInitialized('motifNonAssujettissement') && null !== $object->getMotifNonAssujettissement()) {
            $data['motifNonAssujettissement'] = $object->getMotifNonAssujettissement();
        }
        if ($object->isInitialized('operateurCompetences') && null !== $object->getOperateurCompetences()) {
            $data['operateurCompetences'] = $object->getOperateurCompetences();
        }
        if ($object->isInitialized('soumisTaxeApprentissageAvecMajoration') && null !== $object->getSoumisTaxeApprentissageAvecMajoration()) {
            $data['soumisTaxeApprentissageAvecMajoration'] = $object->getSoumisTaxeApprentissageAvecMajoration();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\TaxeApprentissage' => false];
    }
}
