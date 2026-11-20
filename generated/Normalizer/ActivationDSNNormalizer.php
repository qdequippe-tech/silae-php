<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\ActivationDSN;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\InvalidDateException;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ActivationDSNNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return ActivationDSN::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && ActivationDSN::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new ActivationDSN();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        if (\array_key_exists('numeroDossier', $data) && null !== $data['numeroDossier']) {
            $object->setNumeroDossier($data['numeroDossier']);
        } elseif (\array_key_exists('numeroDossier', $data) && null === $data['numeroDossier']) {
            $object->setNumeroDossier(null);
        }

        if (\array_key_exists('periodeDemarrageDsnMensuelle', $data) && null !== $data['periodeDemarrageDsnMensuelle']) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periodeDemarrageDsnMensuelle']);
            if (false === $date) {
                throw new InvalidDateException($data['periodeDemarrageDsnMensuelle'], 'Y-m-d\TH:i:s');
            }

            $object->setPeriodeDemarrageDsnMensuelle($date);
        } elseif (\array_key_exists('periodeDemarrageDsnMensuelle', $data) && null === $data['periodeDemarrageDsnMensuelle']) {
            $object->setPeriodeDemarrageDsnMensuelle(null);
        }

        if (\array_key_exists('periodeDemarrageDsnArretDeTravail', $data) && null !== $data['periodeDemarrageDsnArretDeTravail']) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periodeDemarrageDsnArretDeTravail']);
            if (false === $date_1) {
                throw new InvalidDateException($data['periodeDemarrageDsnArretDeTravail'], 'Y-m-d\TH:i:s');
            }

            $object->setPeriodeDemarrageDsnArretDeTravail($date_1);
        } elseif (\array_key_exists('periodeDemarrageDsnArretDeTravail', $data) && null === $data['periodeDemarrageDsnArretDeTravail']) {
            $object->setPeriodeDemarrageDsnArretDeTravail(null);
        }

        if (\array_key_exists('periodeDemarrageDsnFinDeContrat', $data) && null !== $data['periodeDemarrageDsnFinDeContrat']) {
            $date_2 = \DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periodeDemarrageDsnFinDeContrat']);
            if (false === $date_2) {
                throw new InvalidDateException($data['periodeDemarrageDsnFinDeContrat'], 'Y-m-d\TH:i:s');
            }

            $object->setPeriodeDemarrageDsnFinDeContrat($date_2);
        } elseif (\array_key_exists('periodeDemarrageDsnFinDeContrat', $data) && null === $data['periodeDemarrageDsnFinDeContrat']) {
            $object->setPeriodeDemarrageDsnFinDeContrat(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('numeroDossier') && null !== $data->getNumeroDossier()) {
            $dataArray['numeroDossier'] = $data->getNumeroDossier();
        }

        if ($data->isInitialized('periodeDemarrageDsnMensuelle') && null !== $data->getPeriodeDemarrageDsnMensuelle()) {
            $dataArray['periodeDemarrageDsnMensuelle'] = $data->getPeriodeDemarrageDsnMensuelle()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('periodeDemarrageDsnArretDeTravail') && null !== $data->getPeriodeDemarrageDsnArretDeTravail()) {
            $dataArray['periodeDemarrageDsnArretDeTravail'] = $data->getPeriodeDemarrageDsnArretDeTravail()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('periodeDemarrageDsnFinDeContrat') && null !== $data->getPeriodeDemarrageDsnFinDeContrat()) {
            $dataArray['periodeDemarrageDsnFinDeContrat'] = $data->getPeriodeDemarrageDsnFinDeContrat()->format('Y-m-d\TH:i:s');
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [ActivationDSN::class => false];
    }
}
