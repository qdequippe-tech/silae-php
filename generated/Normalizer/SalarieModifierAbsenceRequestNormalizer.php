<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalarieModifierAbsenceRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\SalarieModifierAbsenceRequest' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'QdequippeTech\\Silae\\Api\\Model\\SalarieModifierAbsenceRequest' === $data::class;
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
        $object = new \QdequippeTech\Silae\Api\Model\SalarieModifierAbsenceRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('dateDebutAbsence', $data) && null !== $data['dateDebutAbsence']) {
            $object->setDateDebutAbsence(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['dateDebutAbsence']));
        } elseif (\array_key_exists('dateDebutAbsence', $data) && null === $data['dateDebutAbsence']) {
            $object->setDateDebutAbsence(null);
        }
        if (\array_key_exists('dateFinAbsence', $data) && null !== $data['dateFinAbsence']) {
            $object->setDateFinAbsence(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['dateFinAbsence']));
        } elseif (\array_key_exists('dateFinAbsence', $data) && null === $data['dateFinAbsence']) {
            $object->setDateFinAbsence(null);
        }
        if (\array_key_exists('codeAbsence', $data) && null !== $data['codeAbsence']) {
            $object->setCodeAbsence($data['codeAbsence']);
        } elseif (\array_key_exists('codeAbsence', $data) && null === $data['codeAbsence']) {
            $object->setCodeAbsence(null);
        }
        if (\array_key_exists('absence_Modif', $data) && null !== $data['absence_Modif']) {
            $object->setAbsenceModif($this->denormalizer->denormalize($data['absence_Modif'], 'QdequippeTech\\Silae\\Api\\Model\\SalarieAbsenceV2', 'json', $context));
        } elseif (\array_key_exists('absence_Modif', $data) && null === $data['absence_Modif']) {
            $object->setAbsenceModif(null);
        }
        if (\array_key_exists('matriculeSalarie', $data) && null !== $data['matriculeSalarie']) {
            $object->setMatriculeSalarie($data['matriculeSalarie']);
        } elseif (\array_key_exists('matriculeSalarie', $data) && null === $data['matriculeSalarie']) {
            $object->setMatriculeSalarie(null);
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
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('dateDebutAbsence') && null !== $object->getDateDebutAbsence()) {
            $data['dateDebutAbsence'] = $object->getDateDebutAbsence()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('dateFinAbsence') && null !== $object->getDateFinAbsence()) {
            $data['dateFinAbsence'] = $object->getDateFinAbsence()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('codeAbsence') && null !== $object->getCodeAbsence()) {
            $data['codeAbsence'] = $object->getCodeAbsence();
        }
        if ($object->isInitialized('absenceModif') && null !== $object->getAbsenceModif()) {
            $data['absence_Modif'] = $this->normalizer->normalize($object->getAbsenceModif(), 'json', $context);
        }
        $data['matriculeSalarie'] = $object->getMatriculeSalarie();
        $data['numeroDossier'] = $object->getNumeroDossier();

        return $data;
    }
}
