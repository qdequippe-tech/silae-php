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

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return EtablissementsAExclureCVAERequest::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && EtablissementsAExclureCVAERequest::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new EtablissementsAExclureCVAERequest();
        if (\array_key_exists('exclure', $data) && \is_int($data['exclure'])) {
            $data['exclure'] = (bool) $data['exclure'];
        }

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

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('nomsInterneEtablissements') && null !== $data->getNomsInterneEtablissements()) {
            $values = [];
            foreach ($data->getNomsInterneEtablissements() as $value) {
                $values[] = $value;
            }

            $dataArray['nomsInterneEtablissements'] = $values;
        }

        if ($data->isInitialized('exclure') && null !== $data->getExclure()) {
            $dataArray['exclure'] = $data->getExclure();
        }

        $dataArray['numeroDossier'] = $data->getNumeroDossier();

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [EtablissementsAExclureCVAERequest::class => false];
    }
}
