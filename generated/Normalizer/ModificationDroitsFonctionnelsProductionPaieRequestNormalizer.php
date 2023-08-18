<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\ModificationDroitsFonctionnelsProductionPaieRequest;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ModificationDroitsFonctionnelsProductionPaieRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\ModificationDroitsFonctionnelsProductionPaieRequest' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof ModificationDroitsFonctionnelsProductionPaieRequest;
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
        $object = new ModificationDroitsFonctionnelsProductionPaieRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('loginUtilisateur', $data) && null !== $data['loginUtilisateur']) {
            $object->setLoginUtilisateur($data['loginUtilisateur']);
        } elseif (\array_key_exists('loginUtilisateur', $data) && null === $data['loginUtilisateur']) {
            $object->setLoginUtilisateur(null);
        }
        if (\array_key_exists('ongletProductionPaie', $data) && null !== $data['ongletProductionPaie']) {
            $object->setOngletProductionPaie($this->denormalizer->denormalize($data['ongletProductionPaie'], 'QdequippeTech\\Silae\\Api\\Model\\OngletProduction', 'json', $context));
        } elseif (\array_key_exists('ongletProductionPaie', $data) && null === $data['ongletProductionPaie']) {
            $object->setOngletProductionPaie(null);
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
        if ($object->isInitialized('loginUtilisateur') && null !== $object->getLoginUtilisateur()) {
            $data['loginUtilisateur'] = $object->getLoginUtilisateur();
        }
        if ($object->isInitialized('ongletProductionPaie') && null !== $object->getOngletProductionPaie()) {
            $data['ongletProductionPaie'] = $this->normalizer->normalize($object->getOngletProductionPaie(), 'json', $context);
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\ModificationDroitsFonctionnelsProductionPaieRequest' => false];
    }
}
