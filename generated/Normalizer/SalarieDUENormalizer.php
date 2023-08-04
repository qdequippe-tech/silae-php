<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use QdequippeTech\Silae\Api\Model\SalarieDUE;
use Jane\Component\JsonSchemaRuntime\Reference;
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

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\SalarieDUE' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'QdequippeTech\\Silae\\Api\\Model\\SalarieDUE' === $data::class;
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
            $object->setDateEmbauche(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['dateEmbauche']));
        } elseif (\array_key_exists('dateEmbauche', $data) && null === $data['dateEmbauche']) {
            $object->setDateEmbauche(null);
        }
        if (\array_key_exists('dateFinContrat', $data) && null !== $data['dateFinContrat']) {
            $object->setDateFinContrat(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['dateFinContrat']));
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

    /**
     * @param mixed|null $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('matriculeSalarie') && null !== $object->getMatriculeSalarie()) {
            $data['matriculeSalarie'] = $object->getMatriculeSalarie();
        }
        if ($object->isInitialized('nomInterneEtablissement') && null !== $object->getNomInterneEtablissement()) {
            $data['nomInterneEtablissement'] = $object->getNomInterneEtablissement();
        }
        if ($object->isInitialized('dateEmbauche') && null !== $object->getDateEmbauche()) {
            $data['dateEmbauche'] = $object->getDateEmbauche()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('dateFinContrat') && null !== $object->getDateFinContrat()) {
            $data['dateFinContrat'] = $object->getDateFinContrat()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('typeContrat') && null !== $object->getTypeContrat()) {
            $data['typeContrat'] = $object->getTypeContrat();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\SalarieDUE' => false];
    }
}
