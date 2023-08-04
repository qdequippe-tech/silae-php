<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use QdequippeTech\Silae\Api\Model\QuestionnaireContratComplementaire;
use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class QuestionnaireContratComplementaireNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\QuestionnaireContratComplementaire' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'QdequippeTech\\Silae\\Api\\Model\\QuestionnaireContratComplementaire' === $data::class;
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
        $object = new QuestionnaireContratComplementaire();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('code', $data) && null !== $data['code']) {
            $object->setCode($data['code']);
        } elseif (\array_key_exists('code', $data) && null === $data['code']) {
            $object->setCode(null);
        }
        if (\array_key_exists('libelle', $data) && null !== $data['libelle']) {
            $object->setLibelle($data['libelle']);
        } elseif (\array_key_exists('libelle', $data) && null === $data['libelle']) {
            $object->setLibelle(null);
        }
        if (\array_key_exists('listeChoix', $data) && null !== $data['listeChoix']) {
            $values = [];
            foreach ($data['listeChoix'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'QdequippeTech\\Silae\\Api\\Model\\LibelleValeurComplete', 'json', $context);
            }
            $object->setListeChoix($values);
        } elseif (\array_key_exists('listeChoix', $data) && null === $data['listeChoix']) {
            $object->setListeChoix(null);
        }
        if (\array_key_exists('codeLibelleCotisation', $data) && null !== $data['codeLibelleCotisation']) {
            $object->setCodeLibelleCotisation($data['codeLibelleCotisation']);
        } elseif (\array_key_exists('codeLibelleCotisation', $data) && null === $data['codeLibelleCotisation']) {
            $object->setCodeLibelleCotisation(null);
        }
        if (\array_key_exists('selectionSalarie', $data) && null !== $data['selectionSalarie']) {
            $object->setSelectionSalarie($data['selectionSalarie']);
        } elseif (\array_key_exists('selectionSalarie', $data) && null === $data['selectionSalarie']) {
            $object->setSelectionSalarie(null);
        }
        if (\array_key_exists('action', $data) && null !== $data['action']) {
            $object->setAction($data['action']);
        } elseif (\array_key_exists('action', $data) && null === $data['action']) {
            $object->setAction(null);
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
        if ($object->isInitialized('code') && null !== $object->getCode()) {
            $data['code'] = $object->getCode();
        }
        if ($object->isInitialized('libelle') && null !== $object->getLibelle()) {
            $data['libelle'] = $object->getLibelle();
        }
        if ($object->isInitialized('listeChoix') && null !== $object->getListeChoix()) {
            $values = [];
            foreach ($object->getListeChoix() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['listeChoix'] = $values;
        }
        if ($object->isInitialized('codeLibelleCotisation') && null !== $object->getCodeLibelleCotisation()) {
            $data['codeLibelleCotisation'] = $object->getCodeLibelleCotisation();
        }
        if ($object->isInitialized('selectionSalarie') && null !== $object->getSelectionSalarie()) {
            $data['selectionSalarie'] = $object->getSelectionSalarie();
        }
        if ($object->isInitialized('action') && null !== $object->getAction()) {
            $data['action'] = $object->getAction();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\QuestionnaireContratComplementaire' => false];
    }
}
