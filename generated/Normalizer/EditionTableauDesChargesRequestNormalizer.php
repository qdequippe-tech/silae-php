<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\EditionTableauDesChargesRequest;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EditionTableauDesChargesRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return EditionTableauDesChargesRequest::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && EditionTableauDesChargesRequest::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new EditionTableauDesChargesRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('format', $data) && null !== $data['format']) {
            $object->setFormat($data['format']);
        } elseif (\array_key_exists('format', $data) && null === $data['format']) {
            $object->setFormat(null);
        }

        if (\array_key_exists('periodeDebut', $data) && null !== $data['periodeDebut']) {
            $object->setPeriodeDebut(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periodeDebut']));
        } elseif (\array_key_exists('periodeDebut', $data) && null === $data['periodeDebut']) {
            $object->setPeriodeDebut(null);
        }

        if (\array_key_exists('periodeFin', $data) && null !== $data['periodeFin']) {
            $object->setPeriodeFin(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periodeFin']));
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
        if ($data->isInitialized('format') && null !== $data->getFormat()) {
            $dataArray['format'] = $data->getFormat();
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
        return [EditionTableauDesChargesRequest::class => false];
    }
}
