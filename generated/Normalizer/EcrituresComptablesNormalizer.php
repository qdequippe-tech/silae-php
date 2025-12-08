<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\EcrituresComptables;
use QdequippeTech\Silae\Api\Model\EcrituresComptablesLigne;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EcrituresComptablesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return EcrituresComptables::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && EcrituresComptables::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new EcrituresComptables();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('numeroDossier', $data) && null !== $data['numeroDossier']) {
            $object->setNumeroDossier($data['numeroDossier']);
        } elseif (\array_key_exists('numeroDossier', $data) && null === $data['numeroDossier']) {
            $object->setNumeroDossier(null);
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

        if (\array_key_exists('ecritures', $data) && null !== $data['ecritures']) {
            $values = [];
            foreach ($data['ecritures'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, EcrituresComptablesLigne::class, 'json', $context);
            }

            $object->setEcritures($values);
        } elseif (\array_key_exists('ecritures', $data) && null === $data['ecritures']) {
            $object->setEcritures(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('numeroDossier') && null !== $data->getNumeroDossier()) {
            $dataArray['numeroDossier'] = $data->getNumeroDossier();
        }

        if ($data->isInitialized('periodeDebut') && null !== $data->getPeriodeDebut()) {
            $dataArray['periodeDebut'] = $data->getPeriodeDebut()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('periodeFin') && null !== $data->getPeriodeFin()) {
            $dataArray['periodeFin'] = $data->getPeriodeFin()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('ecritures') && null !== $data->getEcritures()) {
            $values = [];
            foreach ($data->getEcritures() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }

            $dataArray['ecritures'] = $values;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [EcrituresComptables::class => false];
    }
}
