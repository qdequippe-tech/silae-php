<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\ImportFichierDSNRequest;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ImportFichierDSNRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return ImportFichierDSNRequest::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && ImportFichierDSNRequest::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new ImportFichierDSNRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('dsnEnByteArray', $data) && null !== $data['dsnEnByteArray']) {
            $object->setDsnEnByteArray($data['dsnEnByteArray']);
        } elseif (\array_key_exists('dsnEnByteArray', $data) && null === $data['dsnEnByteArray']) {
            $object->setDsnEnByteArray(null);
        }

        if (\array_key_exists('numeroDossierSiCreation', $data) && null !== $data['numeroDossierSiCreation']) {
            $object->setNumeroDossierSiCreation($data['numeroDossierSiCreation']);
        } elseif (\array_key_exists('numeroDossierSiCreation', $data) && null === $data['numeroDossierSiCreation']) {
            $object->setNumeroDossierSiCreation(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('dsnEnByteArray') && null !== $data->getDsnEnByteArray()) {
            $dataArray['dsnEnByteArray'] = $data->getDsnEnByteArray();
        }

        if ($data->isInitialized('numeroDossierSiCreation') && null !== $data->getNumeroDossierSiCreation()) {
            $dataArray['numeroDossierSiCreation'] = $data->getNumeroDossierSiCreation();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [ImportFichierDSNRequest::class => false];
    }
}
