<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\EcrituresComptablesPaiementSalairesRequest;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\InvalidDateException;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EcrituresComptablesPaiementSalairesRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return EcrituresComptablesPaiementSalairesRequest::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && EcrituresComptablesPaiementSalairesRequest::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new EcrituresComptablesPaiementSalairesRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        if (\array_key_exists('numeroLotVirement', $data) && null !== $data['numeroLotVirement']) {
            $object->setNumeroLotVirement($data['numeroLotVirement']);
        } elseif (\array_key_exists('numeroLotVirement', $data) && null === $data['numeroLotVirement']) {
            $object->setNumeroLotVirement(null);
        }

        if (\array_key_exists('periodeDebut', $data) && null !== $data['periodeDebut']) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periodeDebut']);
            if (false === $date) {
                throw new InvalidDateException($data['periodeDebut'], 'Y-m-d\TH:i:s');
            }

            $object->setPeriodeDebut($date);
        } elseif (\array_key_exists('periodeDebut', $data) && null === $data['periodeDebut']) {
            $object->setPeriodeDebut(null);
        }

        if (\array_key_exists('periodeFin', $data) && null !== $data['periodeFin']) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periodeFin']);
            if (false === $date_1) {
                throw new InvalidDateException($data['periodeFin'], 'Y-m-d\TH:i:s');
            }

            $object->setPeriodeFin($date_1);
        } elseif (\array_key_exists('periodeFin', $data) && null === $data['periodeFin']) {
            $object->setPeriodeFin(null);
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
        if ($data->isInitialized('numeroLotVirement') && null !== $data->getNumeroLotVirement()) {
            $dataArray['numeroLotVirement'] = $data->getNumeroLotVirement();
        }

        if ($data->isInitialized('periodeDebut') && null !== $data->getPeriodeDebut()) {
            $dataArray['periodeDebut'] = $data->getPeriodeDebut()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('periodeFin') && null !== $data->getPeriodeFin()) {
            $dataArray['periodeFin'] = $data->getPeriodeFin()->format('Y-m-d\TH:i:s');
        }

        $dataArray['numeroDossier'] = $data->getNumeroDossier();

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [EcrituresComptablesPaiementSalairesRequest::class => false];
    }
}
