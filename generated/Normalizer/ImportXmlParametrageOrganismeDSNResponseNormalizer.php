<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\ImportXmlParametrageOrganismeDSNResponse;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ImportXmlParametrageOrganismeDSNResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\ImportXmlParametrageOrganismeDSNResponse' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof ImportXmlParametrageOrganismeDSNResponse;
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
        $object = new ImportXmlParametrageOrganismeDSNResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('compteRendu', $data) && null !== $data['compteRendu']) {
            $object->setCompteRendu($data['compteRendu']);
        } elseif (\array_key_exists('compteRendu', $data) && null === $data['compteRendu']) {
            $object->setCompteRendu(null);
        }
        if (\array_key_exists('traitementGlobal', $data) && null !== $data['traitementGlobal']) {
            $object->setTraitementGlobal($data['traitementGlobal']);
        } elseif (\array_key_exists('traitementGlobal', $data) && null === $data['traitementGlobal']) {
            $object->setTraitementGlobal(null);
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
        if ($object->isInitialized('compteRendu') && null !== $object->getCompteRendu()) {
            $data['compteRendu'] = $object->getCompteRendu();
        }
        if ($object->isInitialized('traitementGlobal') && null !== $object->getTraitementGlobal()) {
            $data['traitementGlobal'] = $object->getTraitementGlobal();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\ImportXmlParametrageOrganismeDSNResponse' => false];
    }
}
