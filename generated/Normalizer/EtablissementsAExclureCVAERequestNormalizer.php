<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\EtablissementsAExclureCVAERequest;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EtablissementsAExclureCVAERequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\EtablissementsAExclureCVAERequest' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'QdequippeTech\\Silae\\Api\\Model\\EtablissementsAExclureCVAERequest' === $data::class;
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
        $object = new EtablissementsAExclureCVAERequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('nomsInterneEtablissements', $data) && null !== $data['nomsInterneEtablissements']) {
            $values = [];
            foreach ($data['nomsInterneEtablissements'] as $value) {
                $values[] = $value;
            }
            $object->setNomsInterneEtablissements($values);
        } elseif (\array_key_exists('nomsInterneEtablissements', $data) && null === $data['nomsInterneEtablissements']) {
            $object->setNomsInterneEtablissements(null);
        }
        if (\array_key_exists('exclure', $data) && null !== $data['exclure']) {
            $object->setExclure($data['exclure']);
        } elseif (\array_key_exists('exclure', $data) && null === $data['exclure']) {
            $object->setExclure(null);
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
        if ($object->isInitialized('nomsInterneEtablissements') && null !== $object->getNomsInterneEtablissements()) {
            $values = [];
            foreach ($object->getNomsInterneEtablissements() as $value) {
                $values[] = $value;
            }
            $data['nomsInterneEtablissements'] = $values;
        }
        if ($object->isInitialized('exclure') && null !== $object->getExclure()) {
            $data['exclure'] = $object->getExclure();
        }
        $data['numeroDossier'] = $object->getNumeroDossier();

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\EtablissementsAExclureCVAERequest' => false];
    }
}
