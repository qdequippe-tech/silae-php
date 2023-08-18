<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\DonneesAxeAnalytiqueSalarie;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class DonneesAxeAnalytiqueSalarieNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\DonneesAxeAnalytiqueSalarie' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof DonneesAxeAnalytiqueSalarie;
    }

    /**
     * @param mixed|null $format
     * @param mixed      $data
     * @param mixed      $class
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new DonneesAxeAnalytiqueSalarie();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('titreCategorie', $data) && null !== $data['titreCategorie']) {
            $object->setTitreCategorie($data['titreCategorie']);
        } elseif (\array_key_exists('titreCategorie', $data) && null === $data['titreCategorie']) {
            $object->setTitreCategorie(null);
        }
        if (\array_key_exists('sousCategorieParDefaut', $data) && null !== $data['sousCategorieParDefaut']) {
            $object->setSousCategorieParDefaut($data['sousCategorieParDefaut']);
        } elseif (\array_key_exists('sousCategorieParDefaut', $data) && null === $data['sousCategorieParDefaut']) {
            $object->setSousCategorieParDefaut(null);
        }
        if (\array_key_exists('sousCategoriesEnPC', $data) && null !== $data['sousCategoriesEnPC']) {
            $values = [];
            foreach ($data['sousCategoriesEnPC'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'QdequippeTech\\Silae\\Api\\Model\\SousCategoriesEnPC', 'json', $context);
            }
            $object->setSousCategoriesEnPC($values);
        } elseif (\array_key_exists('sousCategoriesEnPC', $data) && null === $data['sousCategoriesEnPC']) {
            $object->setSousCategoriesEnPC(null);
        }

        return $object;
    }

    /**
     * @param mixed|null $format
     * @param mixed      $object
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('titreCategorie') && null !== $object->getTitreCategorie()) {
            $data['titreCategorie'] = $object->getTitreCategorie();
        }
        if ($object->isInitialized('sousCategorieParDefaut') && null !== $object->getSousCategorieParDefaut()) {
            $data['sousCategorieParDefaut'] = $object->getSousCategorieParDefaut();
        }
        if ($object->isInitialized('sousCategoriesEnPC') && null !== $object->getSousCategoriesEnPC()) {
            $values = [];
            foreach ($object->getSousCategoriesEnPC() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['sousCategoriesEnPC'] = $values;
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\DonneesAxeAnalytiqueSalarie' => false];
    }
}
