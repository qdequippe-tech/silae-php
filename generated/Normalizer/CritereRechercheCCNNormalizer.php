<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\CritereRechercheCCN;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CritereRechercheCCNNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\CritereRechercheCCN' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'QdequippeTech\\Silae\\Api\\Model\\CritereRechercheCCN' === $data::class;
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
        $object = new CritereRechercheCCN();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('listeCodesNAF', $data) && null !== $data['listeCodesNAF']) {
            $values = [];
            foreach ($data['listeCodesNAF'] as $value) {
                $values[] = $value;
            }
            $object->setListeCodesNAF($values);
        } elseif (\array_key_exists('listeCodesNAF', $data) && null === $data['listeCodesNAF']) {
            $object->setListeCodesNAF(null);
        }
        if (\array_key_exists('codeIDCC', $data) && null !== $data['codeIDCC']) {
            $object->setCodeIDCC($data['codeIDCC']);
        } elseif (\array_key_exists('codeIDCC', $data) && null === $data['codeIDCC']) {
            $object->setCodeIDCC(null);
        }
        if (\array_key_exists('codeJO', $data) && null !== $data['codeJO']) {
            $object->setCodeJO($data['codeJO']);
        } elseif (\array_key_exists('codeJO', $data) && null === $data['codeJO']) {
            $object->setCodeJO(null);
        }
        if (\array_key_exists('texteLibre', $data) && null !== $data['texteLibre']) {
            $object->setTexteLibre($data['texteLibre']);
        } elseif (\array_key_exists('texteLibre', $data) && null === $data['texteLibre']) {
            $object->setTexteLibre(null);
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
        if ($object->isInitialized('listeCodesNAF') && null !== $object->getListeCodesNAF()) {
            $values = [];
            foreach ($object->getListeCodesNAF() as $value) {
                $values[] = $value;
            }
            $data['listeCodesNAF'] = $values;
        }
        if ($object->isInitialized('codeIDCC') && null !== $object->getCodeIDCC()) {
            $data['codeIDCC'] = $object->getCodeIDCC();
        }
        if ($object->isInitialized('codeJO') && null !== $object->getCodeJO()) {
            $data['codeJO'] = $object->getCodeJO();
        }
        if ($object->isInitialized('texteLibre') && null !== $object->getTexteLibre()) {
            $data['texteLibre'] = $object->getTexteLibre();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\CritereRechercheCCN' => false];
    }
}
