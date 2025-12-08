<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\RequeteSalarieBulletinLignes;
use QdequippeTech\Silae\Api\Model\RequeteSalarieBulletinLignesFiltres;
use QdequippeTech\Silae\Api\Model\SalarieBulletinLignesSelonFiltresRequest;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalarieBulletinLignesSelonFiltresRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return SalarieBulletinLignesSelonFiltresRequest::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && SalarieBulletinLignesSelonFiltresRequest::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new SalarieBulletinLignesSelonFiltresRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('requeteSalarieBulletinLignes', $data) && null !== $data['requeteSalarieBulletinLignes']) {
            $object->setRequeteSalarieBulletinLignes($this->denormalizer->denormalize($data['requeteSalarieBulletinLignes'], RequeteSalarieBulletinLignes::class, 'json', $context));
        } elseif (\array_key_exists('requeteSalarieBulletinLignes', $data) && null === $data['requeteSalarieBulletinLignes']) {
            $object->setRequeteSalarieBulletinLignes(null);
        }

        if (\array_key_exists('requeteSalarieBulletinLignesFiltres', $data) && null !== $data['requeteSalarieBulletinLignesFiltres']) {
            $object->setRequeteSalarieBulletinLignesFiltres($this->denormalizer->denormalize($data['requeteSalarieBulletinLignesFiltres'], RequeteSalarieBulletinLignesFiltres::class, 'json', $context));
        } elseif (\array_key_exists('requeteSalarieBulletinLignesFiltres', $data) && null === $data['requeteSalarieBulletinLignesFiltres']) {
            $object->setRequeteSalarieBulletinLignesFiltres(null);
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
        if ($data->isInitialized('requeteSalarieBulletinLignes') && null !== $data->getRequeteSalarieBulletinLignes()) {
            $dataArray['requeteSalarieBulletinLignes'] = $this->normalizer->normalize($data->getRequeteSalarieBulletinLignes(), 'json', $context);
        }

        if ($data->isInitialized('requeteSalarieBulletinLignesFiltres') && null !== $data->getRequeteSalarieBulletinLignesFiltres()) {
            $dataArray['requeteSalarieBulletinLignesFiltres'] = $this->normalizer->normalize($data->getRequeteSalarieBulletinLignesFiltres(), 'json', $context);
        }

        $dataArray['numeroDossier'] = $data->getNumeroDossier();

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [SalarieBulletinLignesSelonFiltresRequest::class => false];
    }
}
