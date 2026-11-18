<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\RequeteAnalyseProductionDetailV2;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\InvalidDateException;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class RequeteAnalyseProductionDetailV2Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return RequeteAnalyseProductionDetailV2::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && RequeteAnalyseProductionDetailV2::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new RequeteAnalyseProductionDetailV2();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        if (\array_key_exists('typePeriode', $data) && null !== $data['typePeriode']) {
            $object->setTypePeriode($data['typePeriode']);
        } elseif (\array_key_exists('typePeriode', $data) && null === $data['typePeriode']) {
            $object->setTypePeriode(null);
        }

        if (\array_key_exists('numeroDossier', $data) && null !== $data['numeroDossier']) {
            $object->setNumeroDossier($data['numeroDossier']);
        } elseif (\array_key_exists('numeroDossier', $data) && null === $data['numeroDossier']) {
            $object->setNumeroDossier(null);
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

        if (\array_key_exists('nomAnalyse', $data) && null !== $data['nomAnalyse']) {
            $object->setNomAnalyse($data['nomAnalyse']);
        } elseif (\array_key_exists('nomAnalyse', $data) && null === $data['nomAnalyse']) {
            $object->setNomAnalyse(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('typePeriode') && null !== $data->getTypePeriode()) {
            $dataArray['typePeriode'] = $data->getTypePeriode();
        }

        if ($data->isInitialized('numeroDossier') && null !== $data->getNumeroDossier()) {
            $dataArray['numeroDossier'] = $data->getNumeroDossier();
        }

        if ($data->isInitialized('periodeDebut') && null !== $data->getPeriodeDebut()) {
            $dataArray['periodeDebut'] = $data->getPeriodeDebut()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('periodeFin') && null !== $data->getPeriodeFin()) {
            $dataArray['periodeFin'] = $data->getPeriodeFin()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('nomAnalyse') && null !== $data->getNomAnalyse()) {
            $dataArray['nomAnalyse'] = $data->getNomAnalyse();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [RequeteAnalyseProductionDetailV2::class => false];
    }
}
