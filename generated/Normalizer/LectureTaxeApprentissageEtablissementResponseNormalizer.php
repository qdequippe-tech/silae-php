<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\LectureTaxeApprentissageEtablissementResponse;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class LectureTaxeApprentissageEtablissementResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\LectureTaxeApprentissageEtablissementResponse' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof LectureTaxeApprentissageEtablissementResponse;
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
        $object = new LectureTaxeApprentissageEtablissementResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('taxeApprentissage', $data) && null !== $data['taxeApprentissage']) {
            $values = [];
            foreach ($data['taxeApprentissage'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'QdequippeTech\\Silae\\Api\\Model\\TaxeApprentissage', 'json', $context);
            }
            $object->setTaxeApprentissage($values);
        } elseif (\array_key_exists('taxeApprentissage', $data) && null === $data['taxeApprentissage']) {
            $object->setTaxeApprentissage(null);
        }
        if (\array_key_exists('etablissementDiffereSociete', $data) && null !== $data['etablissementDiffereSociete']) {
            $object->setEtablissementDiffereSociete($data['etablissementDiffereSociete']);
        } elseif (\array_key_exists('etablissementDiffereSociete', $data) && null === $data['etablissementDiffereSociete']) {
            $object->setEtablissementDiffereSociete(null);
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
        if ($object->isInitialized('taxeApprentissage') && null !== $object->getTaxeApprentissage()) {
            $values = [];
            foreach ($object->getTaxeApprentissage() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['taxeApprentissage'] = $values;
        }
        if ($object->isInitialized('etablissementDiffereSociete') && null !== $object->getEtablissementDiffereSociete()) {
            $data['etablissementDiffereSociete'] = $object->getEtablissementDiffereSociete();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\LectureTaxeApprentissageEtablissementResponse' => false];
    }
}
