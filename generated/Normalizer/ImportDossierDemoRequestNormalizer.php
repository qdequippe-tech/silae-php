<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\ImportDossierDemoRequest;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ImportDossierDemoRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\ImportDossierDemoRequest' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof ImportDossierDemoRequest;
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
        $object = new ImportDossierDemoRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('tokenDossierDemo', $data) && null !== $data['tokenDossierDemo']) {
            $object->setTokenDossierDemo($data['tokenDossierDemo']);
        } elseif (\array_key_exists('tokenDossierDemo', $data) && null === $data['tokenDossierDemo']) {
            $object->setTokenDossierDemo(null);
        }
        if (\array_key_exists('nouveauNumeroDossier', $data) && null !== $data['nouveauNumeroDossier']) {
            $object->setNouveauNumeroDossier($data['nouveauNumeroDossier']);
        } elseif (\array_key_exists('nouveauNumeroDossier', $data) && null === $data['nouveauNumeroDossier']) {
            $object->setNouveauNumeroDossier(null);
        }
        if (\array_key_exists('changerAffectations', $data) && null !== $data['changerAffectations']) {
            $object->setChangerAffectations($data['changerAffectations']);
        } elseif (\array_key_exists('changerAffectations', $data) && null === $data['changerAffectations']) {
            $object->setChangerAffectations(null);
        }
        if (\array_key_exists('affectations', $data) && null !== $data['affectations']) {
            $object->setAffectations($this->denormalizer->denormalize($data['affectations'], 'QdequippeTech\\Silae\\Api\\Model\\AffectationsDossier', 'json', $context));
        } elseif (\array_key_exists('affectations', $data) && null === $data['affectations']) {
            $object->setAffectations(null);
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
        if ($object->isInitialized('tokenDossierDemo') && null !== $object->getTokenDossierDemo()) {
            $data['tokenDossierDemo'] = $object->getTokenDossierDemo();
        }
        if ($object->isInitialized('nouveauNumeroDossier') && null !== $object->getNouveauNumeroDossier()) {
            $data['nouveauNumeroDossier'] = $object->getNouveauNumeroDossier();
        }
        if ($object->isInitialized('changerAffectations') && null !== $object->getChangerAffectations()) {
            $data['changerAffectations'] = $object->getChangerAffectations();
        }
        if ($object->isInitialized('affectations') && null !== $object->getAffectations()) {
            $data['affectations'] = $this->normalizer->normalize($object->getAffectations(), 'json', $context);
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\ImportDossierDemoRequest' => false];
    }
}
