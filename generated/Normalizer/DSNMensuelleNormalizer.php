<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\DSNMensuelle;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class DSNMensuelleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\DSNMensuelle' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'QdequippeTech\\Silae\\Api\\Model\\DSNMensuelle' === $data::class;
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
        $object = new DSNMensuelle();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('etablissement', $data) && null !== $data['etablissement']) {
            $object->setEtablissement($data['etablissement']);
        } elseif (\array_key_exists('etablissement', $data) && null === $data['etablissement']) {
            $object->setEtablissement(null);
        }
        if (\array_key_exists('codeOrganisme', $data) && null !== $data['codeOrganisme']) {
            $object->setCodeOrganisme($data['codeOrganisme']);
        } elseif (\array_key_exists('codeOrganisme', $data) && null === $data['codeOrganisme']) {
            $object->setCodeOrganisme(null);
        }
        if (\array_key_exists('numeroAffiliation', $data) && null !== $data['numeroAffiliation']) {
            $object->setNumeroAffiliation($data['numeroAffiliation']);
        } elseif (\array_key_exists('numeroAffiliation', $data) && null === $data['numeroAffiliation']) {
            $object->setNumeroAffiliation(null);
        }
        if (\array_key_exists('typeDSN', $data) && null !== $data['typeDSN']) {
            $object->setTypeDSN($data['typeDSN']);
        } elseif (\array_key_exists('typeDSN', $data) && null === $data['typeDSN']) {
            $object->setTypeDSN(null);
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
        if ($object->isInitialized('etablissement') && null !== $object->getEtablissement()) {
            $data['etablissement'] = $object->getEtablissement();
        }
        if ($object->isInitialized('codeOrganisme') && null !== $object->getCodeOrganisme()) {
            $data['codeOrganisme'] = $object->getCodeOrganisme();
        }
        if ($object->isInitialized('numeroAffiliation') && null !== $object->getNumeroAffiliation()) {
            $data['numeroAffiliation'] = $object->getNumeroAffiliation();
        }
        if ($object->isInitialized('typeDSN') && null !== $object->getTypeDSN()) {
            $data['typeDSN'] = $object->getTypeDSN();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\DSNMensuelle' => false];
    }
}
