<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use QdequippeTech\Silae\Api\Model\SalarieActiviteJournalierePeriode;
use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalarieActiviteJournalierePeriodeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\SalarieActiviteJournalierePeriode' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'QdequippeTech\\Silae\\Api\\Model\\SalarieActiviteJournalierePeriode' === $data::class;
    }

    /**
     * @param mixed|null $format
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new SalarieActiviteJournalierePeriode();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('periodeActivite', $data) && null !== $data['periodeActivite']) {
            $object->setPeriodeActivite(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['periodeActivite']));
        } elseif (\array_key_exists('periodeActivite', $data) && null === $data['periodeActivite']) {
            $object->setPeriodeActivite(null);
        }
        if (\array_key_exists('calendrier', $data) && null !== $data['calendrier']) {
            $values = [];
            foreach ($data['calendrier'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'QdequippeTech\\Silae\\Api\\Model\\SalarieActiviteJournaliere', 'json', $context);
            }
            $object->setCalendrier($values);
        } elseif (\array_key_exists('calendrier', $data) && null === $data['calendrier']) {
            $object->setCalendrier(null);
        }

        return $object;
    }

    /**
     * @param mixed|null $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('periodeActivite') && null !== $object->getPeriodeActivite()) {
            $data['periodeActivite'] = $object->getPeriodeActivite()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('calendrier') && null !== $object->getCalendrier()) {
            $values = [];
            foreach ($object->getCalendrier() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['calendrier'] = $values;
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\SalarieActiviteJournalierePeriode' => false];
    }
}
