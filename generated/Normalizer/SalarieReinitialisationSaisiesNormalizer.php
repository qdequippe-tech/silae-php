<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SalarieReinitialisationSaisies;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalarieReinitialisationSaisiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return SalarieReinitialisationSaisies::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && SalarieReinitialisationSaisies::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new SalarieReinitialisationSaisies();
        if (\array_key_exists('reinitialiserHeures', $data) && \is_int($data['reinitialiserHeures'])) {
            $data['reinitialiserHeures'] = (bool) $data['reinitialiserHeures'];
        }

        if (\array_key_exists('reinitialiserPrimes', $data) && \is_int($data['reinitialiserPrimes'])) {
            $data['reinitialiserPrimes'] = (bool) $data['reinitialiserPrimes'];
        }

        if (\array_key_exists('reinitialiserAbsences', $data) && \is_int($data['reinitialiserAbsences'])) {
            $data['reinitialiserAbsences'] = (bool) $data['reinitialiserAbsences'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('periodeReinitialisation', $data) && null !== $data['periodeReinitialisation']) {
            $object->setPeriodeReinitialisation(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periodeReinitialisation']));
        } elseif (\array_key_exists('periodeReinitialisation', $data) && null === $data['periodeReinitialisation']) {
            $object->setPeriodeReinitialisation(null);
        }

        if (\array_key_exists('reinitialiserHeures', $data) && null !== $data['reinitialiserHeures']) {
            $object->setReinitialiserHeures($data['reinitialiserHeures']);
        } elseif (\array_key_exists('reinitialiserHeures', $data) && null === $data['reinitialiserHeures']) {
            $object->setReinitialiserHeures(null);
        }

        if (\array_key_exists('reinitialiserPrimes', $data) && null !== $data['reinitialiserPrimes']) {
            $object->setReinitialiserPrimes($data['reinitialiserPrimes']);
        } elseif (\array_key_exists('reinitialiserPrimes', $data) && null === $data['reinitialiserPrimes']) {
            $object->setReinitialiserPrimes(null);
        }

        if (\array_key_exists('reinitialiserAbsences', $data) && null !== $data['reinitialiserAbsences']) {
            $object->setReinitialiserAbsences($data['reinitialiserAbsences']);
        } elseif (\array_key_exists('reinitialiserAbsences', $data) && null === $data['reinitialiserAbsences']) {
            $object->setReinitialiserAbsences(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('periodeReinitialisation') && null !== $data->getPeriodeReinitialisation()) {
            $dataArray['periodeReinitialisation'] = $data->getPeriodeReinitialisation()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('reinitialiserHeures') && null !== $data->getReinitialiserHeures()) {
            $dataArray['reinitialiserHeures'] = $data->getReinitialiserHeures();
        }

        if ($data->isInitialized('reinitialiserPrimes') && null !== $data->getReinitialiserPrimes()) {
            $dataArray['reinitialiserPrimes'] = $data->getReinitialiserPrimes();
        }

        if ($data->isInitialized('reinitialiserAbsences') && null !== $data->getReinitialiserAbsences()) {
            $dataArray['reinitialiserAbsences'] = $data->getReinitialiserAbsences();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [SalarieReinitialisationSaisies::class => false];
    }
}
