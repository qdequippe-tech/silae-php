<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\ModificationQuestionnaireCCNEtablissementRequest;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ModificationQuestionnaireCCNEtablissementRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\ModificationQuestionnaireCCNEtablissementRequest' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof ModificationQuestionnaireCCNEtablissementRequest;
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
        $object = new ModificationQuestionnaireCCNEtablissementRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('nomInterneEtablissement', $data) && null !== $data['nomInterneEtablissement']) {
            $object->setNomInterneEtablissement($data['nomInterneEtablissement']);
        } elseif (\array_key_exists('nomInterneEtablissement', $data) && null === $data['nomInterneEtablissement']) {
            $object->setNomInterneEtablissement(null);
        }
        if (\array_key_exists('code_CCN', $data) && null !== $data['code_CCN']) {
            $object->setCodeCCN($data['code_CCN']);
        } elseif (\array_key_exists('code_CCN', $data) && null === $data['code_CCN']) {
            $object->setCodeCCN(null);
        }
        if (\array_key_exists('listeChamps', $data) && null !== $data['listeChamps']) {
            $values = [];
            foreach ($data['listeChamps'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'QdequippeTech\\Silae\\Api\\Model\\ModificationChampValeursTypees', 'json', $context);
            }
            $object->setListeChamps($values);
        } elseif (\array_key_exists('listeChamps', $data) && null === $data['listeChamps']) {
            $object->setListeChamps(null);
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
     * @param mixed      $object
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('nomInterneEtablissement') && null !== $object->getNomInterneEtablissement()) {
            $data['nomInterneEtablissement'] = $object->getNomInterneEtablissement();
        }
        if ($object->isInitialized('codeCCN') && null !== $object->getCodeCCN()) {
            $data['code_CCN'] = $object->getCodeCCN();
        }
        if ($object->isInitialized('listeChamps') && null !== $object->getListeChamps()) {
            $values = [];
            foreach ($object->getListeChamps() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['listeChamps'] = $values;
        }
        $data['numeroDossier'] = $object->getNumeroDossier();

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\ModificationQuestionnaireCCNEtablissementRequest' => false];
    }
}
