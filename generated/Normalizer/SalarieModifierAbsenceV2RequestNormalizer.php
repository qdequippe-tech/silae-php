<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SalarieAbsenceV3;
use QdequippeTech\Silae\Api\Model\SalarieModifierAbsenceV2Request;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalarieModifierAbsenceV2RequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return SalarieModifierAbsenceV2Request::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && SalarieModifierAbsenceV2Request::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new SalarieModifierAbsenceV2Request();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('dateDebutAbsence', $data) && null !== $data['dateDebutAbsence']) {
            $object->setDateDebutAbsence(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateDebutAbsence']));
        } elseif (\array_key_exists('dateDebutAbsence', $data) && null === $data['dateDebutAbsence']) {
            $object->setDateDebutAbsence(null);
        }

        if (\array_key_exists('dateFinAbsence', $data) && null !== $data['dateFinAbsence']) {
            $object->setDateFinAbsence(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateFinAbsence']));
        } elseif (\array_key_exists('dateFinAbsence', $data) && null === $data['dateFinAbsence']) {
            $object->setDateFinAbsence(null);
        }

        if (\array_key_exists('codeAbsence', $data) && null !== $data['codeAbsence']) {
            $object->setCodeAbsence($data['codeAbsence']);
        } elseif (\array_key_exists('codeAbsence', $data) && null === $data['codeAbsence']) {
            $object->setCodeAbsence(null);
        }

        if (\array_key_exists('absence_Modif', $data) && null !== $data['absence_Modif']) {
            $object->setAbsenceModif($this->denormalizer->denormalize($data['absence_Modif'], SalarieAbsenceV3::class, 'json', $context));
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

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('dateDebutAbsence') && null !== $data->getDateDebutAbsence()) {
            $dataArray['dateDebutAbsence'] = $data->getDateDebutAbsence()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('dateFinAbsence') && null !== $data->getDateFinAbsence()) {
            $dataArray['dateFinAbsence'] = $data->getDateFinAbsence()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('codeAbsence') && null !== $data->getCodeAbsence()) {
            $dataArray['codeAbsence'] = $data->getCodeAbsence();
        }

        if ($data->isInitialized('absenceModif') && null !== $data->getAbsenceModif()) {
            $dataArray['absence_Modif'] = $this->normalizer->normalize($data->getAbsenceModif(), 'json', $context);
        }

        $dataArray['matriculeSalarie'] = $data->getMatriculeSalarie();
        $dataArray['numeroDossier'] = $data->getNumeroDossier();

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [SalarieModifierAbsenceV2Request::class => false];
    }
}
