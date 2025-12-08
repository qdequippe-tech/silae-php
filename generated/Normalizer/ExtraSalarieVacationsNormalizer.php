<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\ExtraSalarieVacation;
use QdequippeTech\Silae\Api\Model\ExtraSalarieVacations;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ExtraSalarieVacationsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return ExtraSalarieVacations::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && ExtraSalarieVacations::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new ExtraSalarieVacations();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('matriculeSalarie', $data) && null !== $data['matriculeSalarie']) {
            $object->setMatriculeSalarie($data['matriculeSalarie']);
        } elseif (\array_key_exists('matriculeSalarie', $data) && null === $data['matriculeSalarie']) {
            $object->setMatriculeSalarie(null);
        }

        if (\array_key_exists('identifiantEmploi', $data) && null !== $data['identifiantEmploi']) {
            $object->setIdentifiantEmploi($data['identifiantEmploi']);
        } elseif (\array_key_exists('identifiantEmploi', $data) && null === $data['identifiantEmploi']) {
            $object->setIdentifiantEmploi(null);
        }

        if (\array_key_exists('periode', $data) && null !== $data['periode']) {
            $object->setPeriode(\DateTime::createFromFormat('Y-m-d', $data['periode'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('periode', $data) && null === $data['periode']) {
            $object->setPeriode(null);
        }

        if (\array_key_exists('nomInterneEtablissement', $data) && null !== $data['nomInterneEtablissement']) {
            $object->setNomInterneEtablissement($data['nomInterneEtablissement']);
        } elseif (\array_key_exists('nomInterneEtablissement', $data) && null === $data['nomInterneEtablissement']) {
            $object->setNomInterneEtablissement(null);
        }

        if (\array_key_exists('vacations', $data) && null !== $data['vacations']) {
            $values = [];
            foreach ($data['vacations'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, ExtraSalarieVacation::class, 'json', $context);
            }

            $object->setVacations($values);
        } elseif (\array_key_exists('vacations', $data) && null === $data['vacations']) {
            $object->setVacations(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('matriculeSalarie') && null !== $data->getMatriculeSalarie()) {
            $dataArray['matriculeSalarie'] = $data->getMatriculeSalarie();
        }

        if ($data->isInitialized('identifiantEmploi') && null !== $data->getIdentifiantEmploi()) {
            $dataArray['identifiantEmploi'] = $data->getIdentifiantEmploi();
        }

        if ($data->isInitialized('periode') && null !== $data->getPeriode()) {
            $dataArray['periode'] = $data->getPeriode()->format('Y-m-d');
        }

        if ($data->isInitialized('nomInterneEtablissement') && null !== $data->getNomInterneEtablissement()) {
            $dataArray['nomInterneEtablissement'] = $data->getNomInterneEtablissement();
        }

        if ($data->isInitialized('vacations') && null !== $data->getVacations()) {
            $values = [];
            foreach ($data->getVacations() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }

            $dataArray['vacations'] = $values;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [ExtraSalarieVacations::class => false];
    }
}
