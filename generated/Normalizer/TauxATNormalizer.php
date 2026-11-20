<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\TauxAT;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\InvalidDateException;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TauxATNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return TauxAT::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && TauxAT::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new TauxAT();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        if (\array_key_exists('taux', $data) && \is_int($data['taux'])) {
            $data['taux'] = (float) $data['taux'];
        }

        if (\array_key_exists('dateEffet', $data) && null !== $data['dateEffet']) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateEffet']);
            if (false === $date) {
                throw new InvalidDateException($data['dateEffet'], 'Y-m-d\TH:i:s');
            }

            $object->setDateEffet($date);
        } elseif (\array_key_exists('dateEffet', $data) && null === $data['dateEffet']) {
            $object->setDateEffet(null);
        }

        if (\array_key_exists('taux', $data) && null !== $data['taux']) {
            $object->setTaux($data['taux']);
        } elseif (\array_key_exists('taux', $data) && null === $data['taux']) {
            $object->setTaux(null);
        }

        if (\array_key_exists('numeroADS', $data) && null !== $data['numeroADS']) {
            $object->setNumeroADS($data['numeroADS']);
        } elseif (\array_key_exists('numeroADS', $data) && null === $data['numeroADS']) {
            $object->setNumeroADS(null);
        }

        if (\array_key_exists('dateModification', $data) && null !== $data['dateModification']) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateModification']);
            if (false === $date_1) {
                throw new InvalidDateException($data['dateModification'], 'Y-m-d\TH:i:s');
            }

            $object->setDateModification($date_1);
        } elseif (\array_key_exists('dateModification', $data) && null === $data['dateModification']) {
            $object->setDateModification(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('dateEffet') && null !== $data->getDateEffet()) {
            $dataArray['dateEffet'] = $data->getDateEffet()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('taux') && null !== $data->getTaux()) {
            $dataArray['taux'] = $data->getTaux();
        }

        if ($data->isInitialized('numeroADS') && null !== $data->getNumeroADS()) {
            $dataArray['numeroADS'] = $data->getNumeroADS();
        }

        if ($data->isInitialized('dateModification') && null !== $data->getDateModification()) {
            $dataArray['dateModification'] = $data->getDateModification()->format('Y-m-d\TH:i:s');
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [TauxAT::class => false];
    }
}
