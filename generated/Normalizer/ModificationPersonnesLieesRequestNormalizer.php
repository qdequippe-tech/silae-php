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

class ModificationPersonnesLieesRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\ModificationPersonnesLieesRequest' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'QdequippeTech\\Silae\\Api\\Model\\ModificationPersonnesLieesRequest' === $data::class;
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
        $object = new \QdequippeTech\Silae\Api\Model\ModificationPersonnesLieesRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('conjoint', $data) && null !== $data['conjoint']) {
            $object->setConjoint($this->denormalizer->denormalize($data['conjoint'], 'QdequippeTech\\Silae\\Api\\Model\\PersonneLiee', 'json', $context));
        } elseif (\array_key_exists('conjoint', $data) && null === $data['conjoint']) {
            $object->setConjoint(null);
        }
        if (\array_key_exists('personnesLiees', $data) && null !== $data['personnesLiees']) {
            $values = [];
            foreach ($data['personnesLiees'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'QdequippeTech\\Silae\\Api\\Model\\PersonneLiee', 'json', $context);
            }
            $object->setPersonnesLiees($values);
        } elseif (\array_key_exists('personnesLiees', $data) && null === $data['personnesLiees']) {
            $object->setPersonnesLiees(null);
        }
        if (\array_key_exists('matricule', $data) && null !== $data['matricule']) {
            $object->setMatricule($data['matricule']);
        } elseif (\array_key_exists('matricule', $data) && null === $data['matricule']) {
            $object->setMatricule(null);
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
        if ($object->isInitialized('conjoint') && null !== $object->getConjoint()) {
            $data['conjoint'] = $this->normalizer->normalize($object->getConjoint(), 'json', $context);
        }
        if ($object->isInitialized('personnesLiees') && null !== $object->getPersonnesLiees()) {
            $values = [];
            foreach ($object->getPersonnesLiees() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['personnesLiees'] = $values;
        }
        if ($object->isInitialized('matricule') && null !== $object->getMatricule()) {
            $data['matricule'] = $object->getMatricule();
        }
        $data['numeroDossier'] = $object->getNumeroDossier();

        return $data;
    }
}
