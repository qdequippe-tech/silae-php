<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\RecupererRecuDPAEResult;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class RecupererRecuDPAEResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return RecupererRecuDPAEResult::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && RecupererRecuDPAEResult::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new RecupererRecuDPAEResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('idEmploi', $data) && null !== $data['idEmploi']) {
            $object->setIdEmploi($data['idEmploi']);
        } elseif (\array_key_exists('idEmploi', $data) && null === $data['idEmploi']) {
            $object->setIdEmploi(null);
        }

        if (\array_key_exists('recuDPAE', $data) && null !== $data['recuDPAE']) {
            $object->setRecuDPAE($data['recuDPAE']);
        } elseif (\array_key_exists('recuDPAE', $data) && null === $data['recuDPAE']) {
            $object->setRecuDPAE(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('idEmploi') && null !== $data->getIdEmploi()) {
            $dataArray['idEmploi'] = $data->getIdEmploi();
        }

        if ($data->isInitialized('recuDPAE') && null !== $data->getRecuDPAE()) {
            $dataArray['recuDPAE'] = $data->getRecuDPAE();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [RecupererRecuDPAEResult::class => false];
    }
}
