<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\ModificationTaxeApprentissageSocieteRequest;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ModificationTaxeApprentissageSocieteRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\ModificationTaxeApprentissageSocieteRequest' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof ModificationTaxeApprentissageSocieteRequest;
    }

    /**
     * @param mixed|null $format
     * @param mixed      $data
     * @param mixed      $class
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new ModificationTaxeApprentissageSocieteRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('anneeMillesime', $data) && null !== $data['anneeMillesime']) {
            $object->setAnneeMillesime(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['anneeMillesime']));
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
        if (\array_key_exists('numeroDossier', $data) && null !== $data['numeroDossier']) {
            $object->setNumeroDossier($data['numeroDossier']);
        } elseif (\array_key_exists('numeroDossier', $data) && null === $data['numeroDossier']) {
            $object->setNumeroDossier(null);
        }

        return $object;
    }

    /**
     * @param mixed|null $format
     * @param mixed      $object
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['anneeMillesime'] = $object->getAnneeMillesime()->format('Y-m-d\\TH:i:s');
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
        $data['numeroDossier'] = $object->getNumeroDossier();

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\ModificationTaxeApprentissageSocieteRequest' => false];
    }
}
