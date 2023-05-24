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

class QCCNNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\QCCN' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'QdequippeTech\\Silae\\Api\\Model\\QCCN' === $data::class;
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
        $object = new \QdequippeTech\Silae\Api\Model\QCCN();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('libelleQuestion', $data) && null !== $data['libelleQuestion']) {
            $object->setLibelleQuestion($data['libelleQuestion']);
        } elseif (\array_key_exists('libelleQuestion', $data) && null === $data['libelleQuestion']) {
            $object->setLibelleQuestion(null);
        }
        if (\array_key_exists('nomChamp', $data) && null !== $data['nomChamp']) {
            $object->setNomChamp($data['nomChamp']);
        } elseif (\array_key_exists('nomChamp', $data) && null === $data['nomChamp']) {
            $object->setNomChamp(null);
        }
        if (\array_key_exists('typeChamp', $data) && null !== $data['typeChamp']) {
            $object->setTypeChamp($data['typeChamp']);
        } elseif (\array_key_exists('typeChamp', $data) && null === $data['typeChamp']) {
            $object->setTypeChamp(null);
        }
        if (\array_key_exists('nombreEntier', $data) && null !== $data['nombreEntier']) {
            $object->setNombreEntier($data['nombreEntier']);
        } elseif (\array_key_exists('nombreEntier', $data) && null === $data['nombreEntier']) {
            $object->setNombreEntier(null);
        }
        if (\array_key_exists('nombreDecimale', $data) && null !== $data['nombreDecimale']) {
            $object->setNombreDecimale($data['nombreDecimale']);
        } elseif (\array_key_exists('nombreDecimale', $data) && null === $data['nombreDecimale']) {
            $object->setNombreDecimale(null);
        }
        if (\array_key_exists('listeChoix', $data) && null !== $data['listeChoix']) {
            $values = [];
            foreach ($data['listeChoix'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'QdequippeTech\\Silae\\Api\\Model\\LibelleValeur', 'json', $context);
            }
            $object->setListeChoix($values);
        } elseif (\array_key_exists('listeChoix', $data) && null === $data['listeChoix']) {
            $object->setListeChoix(null);
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
        if ($object->isInitialized('libelleQuestion') && null !== $object->getLibelleQuestion()) {
            $data['libelleQuestion'] = $object->getLibelleQuestion();
        }
        if ($object->isInitialized('nomChamp') && null !== $object->getNomChamp()) {
            $data['nomChamp'] = $object->getNomChamp();
        }
        if ($object->isInitialized('typeChamp') && null !== $object->getTypeChamp()) {
            $data['typeChamp'] = $object->getTypeChamp();
        }
        if ($object->isInitialized('nombreEntier') && null !== $object->getNombreEntier()) {
            $data['nombreEntier'] = $object->getNombreEntier();
        }
        if ($object->isInitialized('nombreDecimale') && null !== $object->getNombreDecimale()) {
            $data['nombreDecimale'] = $object->getNombreDecimale();
        }
        if ($object->isInitialized('listeChoix') && null !== $object->getListeChoix()) {
            $values = [];
            foreach ($object->getListeChoix() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['listeChoix'] = $values;
        }

        return $data;
    }
}
