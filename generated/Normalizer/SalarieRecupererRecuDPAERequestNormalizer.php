<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SalarieRecupererRecuDPAERequest;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalarieRecupererRecuDPAERequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return SalarieRecupererRecuDPAERequest::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && SalarieRecupererRecuDPAERequest::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new SalarieRecupererRecuDPAERequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        if (\array_key_exists('emploiArchive', $data) && \is_int($data['emploiArchive'])) {
            $data['emploiArchive'] = (bool) $data['emploiArchive'];
        }

        if (\array_key_exists('emploiArchive', $data) && null !== $data['emploiArchive']) {
            $object->setEmploiArchive($data['emploiArchive']);
        } elseif (\array_key_exists('emploiArchive', $data) && null === $data['emploiArchive']) {
            $object->setEmploiArchive(null);
        }

        if (\array_key_exists('matriculeSalarie', $data) && null !== $data['matriculeSalarie']) {
            $object->setMatriculeSalarie($data['matriculeSalarie']);
        } elseif (\array_key_exists('matriculeSalarie', $data) && null === $data['matriculeSalarie']) {
            $object->setMatriculeSalarie(null);
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
        if ($data->isInitialized('emploiArchive') && null !== $data->getEmploiArchive()) {
            $dataArray['emploiArchive'] = $data->getEmploiArchive();
        }

        $dataArray['matriculeSalarie'] = $data->getMatriculeSalarie();
        $dataArray['numeroDossier'] = $data->getNumeroDossier();

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [SalarieRecupererRecuDPAERequest::class => false];
    }
}
