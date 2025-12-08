<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\RequeteSalarieBulletinDetails;
use QdequippeTech\Silae\Api\Model\RequeteSalarieBulletinLignesFiltres;
use QdequippeTech\Silae\Api\Model\SalarieBulletinDetailsRequest;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalarieBulletinDetailsRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return SalarieBulletinDetailsRequest::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && SalarieBulletinDetailsRequest::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new SalarieBulletinDetailsRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('requeteSalarieBulletinDetails', $data) && null !== $data['requeteSalarieBulletinDetails']) {
            $object->setRequeteSalarieBulletinDetails($this->denormalizer->denormalize($data['requeteSalarieBulletinDetails'], RequeteSalarieBulletinDetails::class, 'json', $context));
        } elseif (\array_key_exists('requeteSalarieBulletinDetails', $data) && null === $data['requeteSalarieBulletinDetails']) {
            $object->setRequeteSalarieBulletinDetails(null);
        }

        if (\array_key_exists('requeteSalarieBulletinFiltres', $data) && null !== $data['requeteSalarieBulletinFiltres']) {
            $object->setRequeteSalarieBulletinFiltres($this->denormalizer->denormalize($data['requeteSalarieBulletinFiltres'], RequeteSalarieBulletinLignesFiltres::class, 'json', $context));
        } elseif (\array_key_exists('requeteSalarieBulletinFiltres', $data) && null === $data['requeteSalarieBulletinFiltres']) {
            $object->setRequeteSalarieBulletinFiltres(null);
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
        if ($data->isInitialized('requeteSalarieBulletinDetails') && null !== $data->getRequeteSalarieBulletinDetails()) {
            $dataArray['requeteSalarieBulletinDetails'] = $this->normalizer->normalize($data->getRequeteSalarieBulletinDetails(), 'json', $context);
        }

        if ($data->isInitialized('requeteSalarieBulletinFiltres') && null !== $data->getRequeteSalarieBulletinFiltres()) {
            $dataArray['requeteSalarieBulletinFiltres'] = $this->normalizer->normalize($data->getRequeteSalarieBulletinFiltres(), 'json', $context);
        }

        $dataArray['numeroDossier'] = $data->getNumeroDossier();

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [SalarieBulletinDetailsRequest::class => false];
    }
}
