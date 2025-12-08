<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\CCNSociete;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CCNSocieteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return CCNSociete::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && CCNSociete::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new CCNSociete();
        if (\array_key_exists('forceApplicationExtension', $data) && \is_int($data['forceApplicationExtension'])) {
            $data['forceApplicationExtension'] = (bool) $data['forceApplicationExtension'];
        }

        if (\array_key_exists('ccSiege', $data) && \is_int($data['ccSiege'])) {
            $data['ccSiege'] = (bool) $data['ccSiege'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('codeCCN', $data) && null !== $data['codeCCN']) {
            $object->setCodeCCN($data['codeCCN']);
        } elseif (\array_key_exists('codeCCN', $data) && null === $data['codeCCN']) {
            $object->setCodeCCN(null);
        }

        if (\array_key_exists('idcc', $data) && null !== $data['idcc']) {
            $object->setIdcc($data['idcc']);
        } elseif (\array_key_exists('idcc', $data) && null === $data['idcc']) {
            $object->setIdcc(null);
        }

        if (\array_key_exists('codeJO', $data) && null !== $data['codeJO']) {
            $object->setCodeJO($data['codeJO']);
        } elseif (\array_key_exists('codeJO', $data) && null === $data['codeJO']) {
            $object->setCodeJO(null);
        }

        if (\array_key_exists('forceApplicationExtension', $data) && null !== $data['forceApplicationExtension']) {
            $object->setForceApplicationExtension($data['forceApplicationExtension']);
        } elseif (\array_key_exists('forceApplicationExtension', $data) && null === $data['forceApplicationExtension']) {
            $object->setForceApplicationExtension(null);
        }

        if (\array_key_exists('syndicat', $data) && null !== $data['syndicat']) {
            $object->setSyndicat($data['syndicat']);
        } elseif (\array_key_exists('syndicat', $data) && null === $data['syndicat']) {
            $object->setSyndicat(null);
        }

        if (\array_key_exists('ccSiege', $data) && null !== $data['ccSiege']) {
            $object->setCcSiege($data['ccSiege']);
        } elseif (\array_key_exists('ccSiege', $data) && null === $data['ccSiege']) {
            $object->setCcSiege(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('codeCCN') && null !== $data->getCodeCCN()) {
            $dataArray['codeCCN'] = $data->getCodeCCN();
        }

        if ($data->isInitialized('idcc') && null !== $data->getIdcc()) {
            $dataArray['idcc'] = $data->getIdcc();
        }

        if ($data->isInitialized('codeJO') && null !== $data->getCodeJO()) {
            $dataArray['codeJO'] = $data->getCodeJO();
        }

        if ($data->isInitialized('forceApplicationExtension') && null !== $data->getForceApplicationExtension()) {
            $dataArray['forceApplicationExtension'] = $data->getForceApplicationExtension();
        }

        if ($data->isInitialized('syndicat') && null !== $data->getSyndicat()) {
            $dataArray['syndicat'] = $data->getSyndicat();
        }

        if ($data->isInitialized('ccSiege') && null !== $data->getCcSiege()) {
            $dataArray['ccSiege'] = $data->getCcSiege();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [CCNSociete::class => false];
    }
}
