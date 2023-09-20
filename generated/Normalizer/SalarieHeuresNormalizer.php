<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SalarieHeures;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalarieHeuresNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\SalarieHeures' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof SalarieHeures;
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
        $object = new SalarieHeures();
        if (\array_key_exists('nombreHeures', $data) && \is_int($data['nombreHeures'])) {
            $data['nombreHeures'] = (float) $data['nombreHeures'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('periodeHeures', $data) && null !== $data['periodeHeures']) {
            $object->setPeriodeHeures(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['periodeHeures']));
        } elseif (\array_key_exists('periodeHeures', $data) && null === $data['periodeHeures']) {
            $object->setPeriodeHeures(null);
        }
        if (\array_key_exists('codeHeures', $data) && null !== $data['codeHeures']) {
            $object->setCodeHeures($data['codeHeures']);
        } elseif (\array_key_exists('codeHeures', $data) && null === $data['codeHeures']) {
            $object->setCodeHeures(null);
        }
        if (\array_key_exists('nombreHeures', $data) && null !== $data['nombreHeures']) {
            $object->setNombreHeures($data['nombreHeures']);
        } elseif (\array_key_exists('nombreHeures', $data) && null === $data['nombreHeures']) {
            $object->setNombreHeures(null);
        }
        if (\array_key_exists('ajouter', $data) && null !== $data['ajouter']) {
            $object->setAjouter($data['ajouter']);
        } elseif (\array_key_exists('ajouter', $data) && null === $data['ajouter']) {
            $object->setAjouter(null);
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
        if ($object->isInitialized('periodeHeures') && null !== $object->getPeriodeHeures()) {
            $data['periodeHeures'] = $object->getPeriodeHeures()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('codeHeures') && null !== $object->getCodeHeures()) {
            $data['codeHeures'] = $object->getCodeHeures();
        }
        if ($object->isInitialized('nombreHeures') && null !== $object->getNombreHeures()) {
            $data['nombreHeures'] = $object->getNombreHeures();
        }
        if ($object->isInitialized('ajouter') && null !== $object->getAjouter()) {
            $data['ajouter'] = $object->getAjouter();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\SalarieHeures' => false];
    }
}
