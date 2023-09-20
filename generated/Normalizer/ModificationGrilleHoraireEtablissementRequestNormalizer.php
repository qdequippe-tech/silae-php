<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\ModificationGrilleHoraireEtablissementRequest;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ModificationGrilleHoraireEtablissementRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\ModificationGrilleHoraireEtablissementRequest' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof ModificationGrilleHoraireEtablissementRequest;
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
        $object = new ModificationGrilleHoraireEtablissementRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('nomEtablissement', $data) && null !== $data['nomEtablissement']) {
            $object->setNomEtablissement($data['nomEtablissement']);
        } elseif (\array_key_exists('nomEtablissement', $data) && null === $data['nomEtablissement']) {
            $object->setNomEtablissement(null);
        }
        if (\array_key_exists('horaire', $data) && null !== $data['horaire']) {
            $object->setHoraire($this->denormalizer->denormalize($data['horaire'], 'QdequippeTech\\Silae\\Api\\Model\\ModificationHoraireEtablissement', 'json', $context));
        } elseif (\array_key_exists('horaire', $data) && null === $data['horaire']) {
            $object->setHoraire(null);
        }
        if (\array_key_exists('numeroDossier', $data) && null !== $data['numeroDossier']) {
            $object->setNumeroDossier($data['numeroDossier']);
        } elseif (\array_key_exists('numeroDossier', $data) && null === $data['numeroDossier']) {
            $object->setNumeroDossier(null);
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
        if ($object->isInitialized('nomEtablissement') && null !== $object->getNomEtablissement()) {
            $data['nomEtablissement'] = $object->getNomEtablissement();
        }
        if ($object->isInitialized('horaire') && null !== $object->getHoraire()) {
            $data['horaire'] = $this->normalizer->normalize($object->getHoraire(), 'json', $context);
        }
        $data['numeroDossier'] = $object->getNumeroDossier();

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\ModificationGrilleHoraireEtablissementRequest' => false];
    }
}
