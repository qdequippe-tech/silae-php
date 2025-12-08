<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\ProprietesChiffrement;
use QdequippeTech\Silae\Api\Model\RecupererFichiersVirementChiffresRequest;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class RecupererFichiersVirementChiffresRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return RecupererFichiersVirementChiffresRequest::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && RecupererFichiersVirementChiffresRequest::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new RecupererFichiersVirementChiffresRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('proprietesChiffrement', $data) && null !== $data['proprietesChiffrement']) {
            $object->setProprietesChiffrement($this->denormalizer->denormalize($data['proprietesChiffrement'], ProprietesChiffrement::class, 'json', $context));
        } elseif (\array_key_exists('proprietesChiffrement', $data) && null === $data['proprietesChiffrement']) {
            $object->setProprietesChiffrement(null);
        }

        if (\array_key_exists('dateValeur', $data) && null !== $data['dateValeur']) {
            $object->setDateValeur(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateValeur']));
        } elseif (\array_key_exists('dateValeur', $data) && null === $data['dateValeur']) {
            $object->setDateValeur(null);
        }

        if (\array_key_exists('libelleVirement', $data) && null !== $data['libelleVirement']) {
            $object->setLibelleVirement($data['libelleVirement']);
        } elseif (\array_key_exists('libelleVirement', $data) && null === $data['libelleVirement']) {
            $object->setLibelleVirement(null);
        }

        if (\array_key_exists('matriculeSalaries', $data) && null !== $data['matriculeSalaries']) {
            $values = [];
            foreach ($data['matriculeSalaries'] as $value) {
                $values[] = $value;
            }

            $object->setMatriculeSalaries($values);
        } elseif (\array_key_exists('matriculeSalaries', $data) && null === $data['matriculeSalaries']) {
            $object->setMatriculeSalaries(null);
        }

        if (\array_key_exists('periode', $data) && null !== $data['periode']) {
            $object->setPeriode(\DateTime::createFromFormat('Y-m-d', $data['periode'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('periode', $data) && null === $data['periode']) {
            $object->setPeriode(null);
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
        if ($data->isInitialized('proprietesChiffrement') && null !== $data->getProprietesChiffrement()) {
            $dataArray['proprietesChiffrement'] = $this->normalizer->normalize($data->getProprietesChiffrement(), 'json', $context);
        }

        if ($data->isInitialized('dateValeur') && null !== $data->getDateValeur()) {
            $dataArray['dateValeur'] = $data->getDateValeur()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('libelleVirement') && null !== $data->getLibelleVirement()) {
            $dataArray['libelleVirement'] = $data->getLibelleVirement();
        }

        if ($data->isInitialized('matriculeSalaries') && null !== $data->getMatriculeSalaries()) {
            $values = [];
            foreach ($data->getMatriculeSalaries() as $value) {
                $values[] = $value;
            }

            $dataArray['matriculeSalaries'] = $values;
        }

        if ($data->isInitialized('periode') && null !== $data->getPeriode()) {
            $dataArray['periode'] = $data->getPeriode()->format('Y-m-d');
        }

        $dataArray['numeroDossier'] = $data->getNumeroDossier();

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [RecupererFichiersVirementChiffresRequest::class => false];
    }
}
