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

class SpectacleSalarieReinitialiserAffectationsRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\SpectacleSalarieReinitialiserAffectationsRequest' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'QdequippeTech\\Silae\\Api\\Model\\SpectacleSalarieReinitialiserAffectationsRequest' === $data::class;
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
        $object = new \QdequippeTech\Silae\Api\Model\SpectacleSalarieReinitialiserAffectationsRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('requeteSpectacleSalarieAffectations', $data) && null !== $data['requeteSpectacleSalarieAffectations']) {
            $object->setRequeteSpectacleSalarieAffectations($this->denormalizer->denormalize($data['requeteSpectacleSalarieAffectations'], 'QdequippeTech\\Silae\\Api\\Model\\RequeteSpectacleSalarieAffectations', 'json', $context));
        } elseif (\array_key_exists('requeteSpectacleSalarieAffectations', $data) && null === $data['requeteSpectacleSalarieAffectations']) {
            $object->setRequeteSpectacleSalarieAffectations(null);
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
        if ($object->isInitialized('requeteSpectacleSalarieAffectations') && null !== $object->getRequeteSpectacleSalarieAffectations()) {
            $data['requeteSpectacleSalarieAffectations'] = $this->normalizer->normalize($object->getRequeteSpectacleSalarieAffectations(), 'json', $context);
        }
        $data['numeroDossier'] = $object->getNumeroDossier();

        return $data;
    }
}
