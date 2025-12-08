<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SalarieHeures;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalarieHeuresNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return SalarieHeures::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && SalarieHeures::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new SalarieHeures();
        if (\array_key_exists('nombreHeures', $data) && \is_int($data['nombreHeures'])) {
            $data['nombreHeures'] = (float) $data['nombreHeures'];
        }

        if (\array_key_exists('ajouter', $data) && \is_int($data['ajouter'])) {
            $data['ajouter'] = (bool) $data['ajouter'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('periodeHeures', $data) && null !== $data['periodeHeures']) {
            $object->setPeriodeHeures(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periodeHeures']));
        } elseif (\array_key_exists('periodeHeures', $data) && null === $data['periodeHeures']) {
            $object->setPeriodeHeures(null);
        }

        if (\array_key_exists('codeHeures', $data) && null !== $data['codeHeures']) {
            $object->setCodeHeures($data['codeHeures']);
        } elseif (\array_key_exists('codeHeures', $data) && null === $data['codeHeures']) {
            $object->setCodeHeures(null);
        }

        if (\array_key_exists('nombreHeures', $data) && null !== $data['nombreHeures']) {
            $object->setNombreHeures($data['nombreHeures']);
        } elseif (\array_key_exists('nombreHeures', $data) && null === $data['nombreHeures']) {
            $object->setNombreHeures(null);
        }

        if (\array_key_exists('ajouter', $data) && null !== $data['ajouter']) {
            $object->setAjouter($data['ajouter']);
        } elseif (\array_key_exists('ajouter', $data) && null === $data['ajouter']) {
            $object->setAjouter(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('periodeHeures') && null !== $data->getPeriodeHeures()) {
            $dataArray['periodeHeures'] = $data->getPeriodeHeures()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('codeHeures') && null !== $data->getCodeHeures()) {
            $dataArray['codeHeures'] = $data->getCodeHeures();
        }

        if ($data->isInitialized('nombreHeures') && null !== $data->getNombreHeures()) {
            $dataArray['nombreHeures'] = $data->getNombreHeures();
        }

        if ($data->isInitialized('ajouter') && null !== $data->getAjouter()) {
            $dataArray['ajouter'] = $data->getAjouter();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [SalarieHeures::class => false];
    }
}
