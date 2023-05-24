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

class SalarieAjouterElementVariableRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\SalarieAjouterElementVariableRequest' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'QdequippeTech\\Silae\\Api\\Model\\SalarieAjouterElementVariableRequest' === $data::class;
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
        $object = new \QdequippeTech\Silae\Api\Model\SalarieAjouterElementVariableRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('elementVariable', $data) && null !== $data['elementVariable']) {
            $object->setElementVariable($this->denormalizer->denormalize($data['elementVariable'], 'QdequippeTech\\Silae\\Api\\Model\\SalarieElementVariable', 'json', $context));
        } elseif (\array_key_exists('elementVariable', $data) && null === $data['elementVariable']) {
            $object->setElementVariable(null);
        }
        if (\array_key_exists('matriculeSalarie', $data) && null !== $data['matriculeSalarie']) {
            $object->setMatriculeSalarie($data['matriculeSalarie']);
        } elseif (\array_key_exists('matriculeSalarie', $data) && null === $data['matriculeSalarie']) {
            $object->setMatriculeSalarie(null);
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
        if ($object->isInitialized('elementVariable') && null !== $object->getElementVariable()) {
            $data['elementVariable'] = $this->normalizer->normalize($object->getElementVariable(), 'json', $context);
        }
        $data['matriculeSalarie'] = $object->getMatriculeSalarie();
        $data['numeroDossier'] = $object->getNumeroDossier();

        return $data;
    }
}
