<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SalarieSupprimerAbsenceRequest;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalarieSupprimerAbsenceRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\SalarieSupprimerAbsenceRequest' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof SalarieSupprimerAbsenceRequest;
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
        $object = new SalarieSupprimerAbsenceRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('dateDebutAbsence', $data) && null !== $data['dateDebutAbsence']) {
            $object->setDateDebutAbsence(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['dateDebutAbsence']));
        } elseif (\array_key_exists('dateDebutAbsence', $data) && null === $data['dateDebutAbsence']) {
            $object->setDateDebutAbsence(null);
        }
        if (\array_key_exists('dateFinAbsence', $data) && null !== $data['dateFinAbsence']) {
            $object->setDateFinAbsence(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['dateFinAbsence']));
        } elseif (\array_key_exists('dateFinAbsence', $data) && null === $data['dateFinAbsence']) {
            $object->setDateFinAbsence(null);
        }
        if (\array_key_exists('codeAbsence', $data) && null !== $data['codeAbsence']) {
            $object->setCodeAbsence($data['codeAbsence']);
        } elseif (\array_key_exists('codeAbsence', $data) && null === $data['codeAbsence']) {
            $object->setCodeAbsence(null);
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
            $data['dateDebutAbsence'] = $object->getDateDebutAbsence()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('dateFinAbsence') && null !== $object->getDateFinAbsence()) {
            $data['dateFinAbsence'] = $object->getDateFinAbsence()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('codeAbsence') && null !== $object->getCodeAbsence()) {
            $data['codeAbsence'] = $object->getCodeAbsence();
        }
        $data['matriculeSalarie'] = $object->getMatriculeSalarie();
        $data['numeroDossier'] = $object->getNumeroDossier();

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\SalarieSupprimerAbsenceRequest' => false];
    }
}
