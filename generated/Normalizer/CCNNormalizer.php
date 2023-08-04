<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\CCN;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CCNNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\CCN' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof CCN;
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
        $object = new CCN();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('codeCCN', $data) && null !== $data['codeCCN']) {
            $object->setCodeCCN($data['codeCCN']);
        } elseif (\array_key_exists('codeCCN', $data) && null === $data['codeCCN']) {
            $object->setCodeCCN(null);
        }
        if (\array_key_exists('libelleCCN', $data) && null !== $data['libelleCCN']) {
            $object->setLibelleCCN($data['libelleCCN']);
        } elseif (\array_key_exists('libelleCCN', $data) && null === $data['libelleCCN']) {
            $object->setLibelleCCN(null);
        }
        if (\array_key_exists('codeIDCC', $data) && null !== $data['codeIDCC']) {
            $object->setCodeIDCC($data['codeIDCC']);
        } elseif (\array_key_exists('codeIDCC', $data) && null === $data['codeIDCC']) {
            $object->setCodeIDCC(null);
        }
        if (\array_key_exists('libelleIDCC', $data) && null !== $data['libelleIDCC']) {
            $object->setLibelleIDCC($data['libelleIDCC']);
        } elseif (\array_key_exists('libelleIDCC', $data) && null === $data['libelleIDCC']) {
            $object->setLibelleIDCC(null);
        }
        if (\array_key_exists('codeJO', $data) && null !== $data['codeJO']) {
            $object->setCodeJO($data['codeJO']);
        } elseif (\array_key_exists('codeJO', $data) && null === $data['codeJO']) {
            $object->setCodeJO(null);
        }
        if (\array_key_exists('libelleJO', $data) && null !== $data['libelleJO']) {
            $object->setLibelleJO($data['libelleJO']);
        } elseif (\array_key_exists('libelleJO', $data) && null === $data['libelleJO']) {
            $object->setLibelleJO(null);
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
        if ($object->isInitialized('codeCCN') && null !== $object->getCodeCCN()) {
            $data['codeCCN'] = $object->getCodeCCN();
        }
        if ($object->isInitialized('libelleCCN') && null !== $object->getLibelleCCN()) {
            $data['libelleCCN'] = $object->getLibelleCCN();
        }
        if ($object->isInitialized('codeIDCC') && null !== $object->getCodeIDCC()) {
            $data['codeIDCC'] = $object->getCodeIDCC();
        }
        if ($object->isInitialized('libelleIDCC') && null !== $object->getLibelleIDCC()) {
            $data['libelleIDCC'] = $object->getLibelleIDCC();
        }
        if ($object->isInitialized('codeJO') && null !== $object->getCodeJO()) {
            $data['codeJO'] = $object->getCodeJO();
        }
        if ($object->isInitialized('libelleJO') && null !== $object->getLibelleJO()) {
            $data['libelleJO'] = $object->getLibelleJO();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\CCN' => false];
    }
}
