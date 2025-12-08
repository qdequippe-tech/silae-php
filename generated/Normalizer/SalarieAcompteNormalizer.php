<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SalarieAcompte;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalarieAcompteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return SalarieAcompte::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && SalarieAcompte::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new SalarieAcompte();
        if (\array_key_exists('montantAcompte', $data) && \is_int($data['montantAcompte'])) {
            $data['montantAcompte'] = (float) $data['montantAcompte'];
        }

        if (\array_key_exists('jourNonSignificatif', $data) && \is_int($data['jourNonSignificatif'])) {
            $data['jourNonSignificatif'] = (bool) $data['jourNonSignificatif'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('dateAcompte', $data) && null !== $data['dateAcompte']) {
            $object->setDateAcompte(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateAcompte']));
        } elseif (\array_key_exists('dateAcompte', $data) && null === $data['dateAcompte']) {
            $object->setDateAcompte(null);
        }

        if (\array_key_exists('jourNonSignificatif', $data) && null !== $data['jourNonSignificatif']) {
            $object->setJourNonSignificatif($data['jourNonSignificatif']);
        } elseif (\array_key_exists('jourNonSignificatif', $data) && null === $data['jourNonSignificatif']) {
            $object->setJourNonSignificatif(null);
        }

        if (\array_key_exists('montantAcompte', $data) && null !== $data['montantAcompte']) {
            $object->setMontantAcompte($data['montantAcompte']);
        } elseif (\array_key_exists('montantAcompte', $data) && null === $data['montantAcompte']) {
            $object->setMontantAcompte(null);
        }

        if (\array_key_exists('libelleAcompte', $data) && null !== $data['libelleAcompte']) {
            $object->setLibelleAcompte($data['libelleAcompte']);
        } elseif (\array_key_exists('libelleAcompte', $data) && null === $data['libelleAcompte']) {
            $object->setLibelleAcompte(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('dateAcompte') && null !== $data->getDateAcompte()) {
            $dataArray['dateAcompte'] = $data->getDateAcompte()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('jourNonSignificatif') && null !== $data->getJourNonSignificatif()) {
            $dataArray['jourNonSignificatif'] = $data->getJourNonSignificatif();
        }

        if ($data->isInitialized('montantAcompte') && null !== $data->getMontantAcompte()) {
            $dataArray['montantAcompte'] = $data->getMontantAcompte();
        }

        if ($data->isInitialized('libelleAcompte') && null !== $data->getLibelleAcompte()) {
            $dataArray['libelleAcompte'] = $data->getLibelleAcompte();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [SalarieAcompte::class => false];
    }
}
