<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AxeAnalytiqueNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\AxeAnalytique' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'QdequippeTech\\Silae\\Api\\Model\\AxeAnalytique' === $data::class;
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
        $object = new \QdequippeTech\Silae\Api\Model\AxeAnalytique();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('titreCategorie', $data) && null !== $data['titreCategorie']) {
            $object->setTitreCategorie($data['titreCategorie']);
        } elseif (\array_key_exists('titreCategorie', $data) && null === $data['titreCategorie']) {
            $object->setTitreCategorie(null);
        }
        if (\array_key_exists('sousCategorie', $data) && null !== $data['sousCategorie']) {
            $values = [];
            foreach ($data['sousCategorie'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'QdequippeTech\\Silae\\Api\\Model\\SousCategorie', 'json', $context);
            }
            $object->setSousCategorie($values);
        } elseif (\array_key_exists('sousCategorie', $data) && null === $data['sousCategorie']) {
            $object->setSousCategorie(null);
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
        if ($object->isInitialized('titreCategorie') && null !== $object->getTitreCategorie()) {
            $data['titreCategorie'] = $object->getTitreCategorie();
        }
        if ($object->isInitialized('sousCategorie') && null !== $object->getSousCategorie()) {
            $values = [];
            foreach ($object->getSousCategorie() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['sousCategorie'] = $values;
        }

        return $data;
    }
}
