<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SalarieActiviteJournalierePeriodeSaisie;
use QdequippeTech\Silae\Api\Model\SalarieActiviteJournaliereSaisie;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalarieActiviteJournalierePeriodeSaisieNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return SalarieActiviteJournalierePeriodeSaisie::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && SalarieActiviteJournalierePeriodeSaisie::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new SalarieActiviteJournalierePeriodeSaisie();
        if (\array_key_exists('classique', $data) && \is_int($data['classique'])) {
            $data['classique'] = (bool) $data['classique'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('periodeActivite', $data) && null !== $data['periodeActivite']) {
            $object->setPeriodeActivite(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periodeActivite']));
        } elseif (\array_key_exists('periodeActivite', $data) && null === $data['periodeActivite']) {
            $object->setPeriodeActivite(null);
        }

        if (\array_key_exists('classique', $data) && null !== $data['classique']) {
            $object->setClassique($data['classique']);
        } elseif (\array_key_exists('classique', $data) && null === $data['classique']) {
            $object->setClassique(null);
        }

        if (\array_key_exists('calendrier', $data) && null !== $data['calendrier']) {
            $values = [];
            foreach ($data['calendrier'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, SalarieActiviteJournaliereSaisie::class, 'json', $context);
            }

            $object->setCalendrier($values);
        } elseif (\array_key_exists('calendrier', $data) && null === $data['calendrier']) {
            $object->setCalendrier(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('periodeActivite') && null !== $data->getPeriodeActivite()) {
            $dataArray['periodeActivite'] = $data->getPeriodeActivite()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('classique') && null !== $data->getClassique()) {
            $dataArray['classique'] = $data->getClassique();
        }

        if ($data->isInitialized('calendrier') && null !== $data->getCalendrier()) {
            $values = [];
            foreach ($data->getCalendrier() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }

            $dataArray['calendrier'] = $values;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [SalarieActiviteJournalierePeriodeSaisie::class => false];
    }
}
