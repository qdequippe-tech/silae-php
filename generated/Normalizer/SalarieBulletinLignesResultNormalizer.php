<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SalarieBulletinLignesResult;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalarieBulletinLignesResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\SalarieBulletinLignesResult' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof SalarieBulletinLignesResult;
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
        $object = new SalarieBulletinLignesResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('matriculeSalarie', $data) && null !== $data['matriculeSalarie']) {
            $object->setMatriculeSalarie($data['matriculeSalarie']);
        } elseif (\array_key_exists('matriculeSalarie', $data) && null === $data['matriculeSalarie']) {
            $object->setMatriculeSalarie(null);
        }
        if (\array_key_exists('identifiantEmploi', $data) && null !== $data['identifiantEmploi']) {
            $object->setIdentifiantEmploi($data['identifiantEmploi']);
        } elseif (\array_key_exists('identifiantEmploi', $data) && null === $data['identifiantEmploi']) {
            $object->setIdentifiantEmploi(null);
        }
        if (\array_key_exists('periode', $data) && null !== $data['periode']) {
            $object->setPeriode(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['periode']));
        } elseif (\array_key_exists('periode', $data) && null === $data['periode']) {
            $object->setPeriode(null);
        }
        if (\array_key_exists('intituleEmploi', $data) && null !== $data['intituleEmploi']) {
            $object->setIntituleEmploi($data['intituleEmploi']);
        } elseif (\array_key_exists('intituleEmploi', $data) && null === $data['intituleEmploi']) {
            $object->setIntituleEmploi(null);
        }
        if (\array_key_exists('lignesBulletin', $data) && null !== $data['lignesBulletin']) {
            $values = [];
            foreach ($data['lignesBulletin'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'QdequippeTech\\Silae\\Api\\Model\\LigneBulletin', 'json', $context);
            }
            $object->setLignesBulletin($values);
        } elseif (\array_key_exists('lignesBulletin', $data) && null === $data['lignesBulletin']) {
            $object->setLignesBulletin(null);
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
        if ($object->isInitialized('matriculeSalarie') && null !== $object->getMatriculeSalarie()) {
            $data['matriculeSalarie'] = $object->getMatriculeSalarie();
        }
        if ($object->isInitialized('identifiantEmploi') && null !== $object->getIdentifiantEmploi()) {
            $data['identifiantEmploi'] = $object->getIdentifiantEmploi();
        }
        if ($object->isInitialized('periode') && null !== $object->getPeriode()) {
            $data['periode'] = $object->getPeriode()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('intituleEmploi') && null !== $object->getIntituleEmploi()) {
            $data['intituleEmploi'] = $object->getIntituleEmploi();
        }
        if ($object->isInitialized('lignesBulletin') && null !== $object->getLignesBulletin()) {
            $values = [];
            foreach ($object->getLignesBulletin() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['lignesBulletin'] = $values;
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\SalarieBulletinLignesResult' => false];
    }
}
