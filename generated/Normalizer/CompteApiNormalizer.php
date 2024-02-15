<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\CompteApi;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CompteApiNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\CompteApi' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof CompteApi;
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
        $object = new CompteApi();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('clientId', $data) && null !== $data['clientId']) {
            $object->setClientId($data['clientId']);
        } elseif (\array_key_exists('clientId', $data) && null === $data['clientId']) {
            $object->setClientId(null);
        }
        if (\array_key_exists('nomCompteAPI', $data) && null !== $data['nomCompteAPI']) {
            $object->setNomCompteAPI($data['nomCompteAPI']);
        } elseif (\array_key_exists('nomCompteAPI', $data) && null === $data['nomCompteAPI']) {
            $object->setNomCompteAPI(null);
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
        if ($object->isInitialized('clientId') && null !== $object->getClientId()) {
            $data['clientId'] = $object->getClientId();
        }
        if ($object->isInitialized('nomCompteAPI') && null !== $object->getNomCompteAPI()) {
            $data['nomCompteAPI'] = $object->getNomCompteAPI();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\CompteApi' => false];
    }
}
