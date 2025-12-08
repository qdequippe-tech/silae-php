<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\AppliquerModeleCollaborateurRequest;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AppliquerModeleCollaborateurRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return AppliquerModeleCollaborateurRequest::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && AppliquerModeleCollaborateurRequest::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new AppliquerModeleCollaborateurRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('identifiantCollaborateur', $data) && null !== $data['identifiantCollaborateur']) {
            $object->setIdentifiantCollaborateur($data['identifiantCollaborateur']);
        } elseif (\array_key_exists('identifiantCollaborateur', $data) && null === $data['identifiantCollaborateur']) {
            $object->setIdentifiantCollaborateur(null);
        }

        if (\array_key_exists('nomModele', $data) && null !== $data['nomModele']) {
            $object->setNomModele($data['nomModele']);
        } elseif (\array_key_exists('nomModele', $data) && null === $data['nomModele']) {
            $object->setNomModele(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('identifiantCollaborateur') && null !== $data->getIdentifiantCollaborateur()) {
            $dataArray['identifiantCollaborateur'] = $data->getIdentifiantCollaborateur();
        }

        if ($data->isInitialized('nomModele') && null !== $data->getNomModele()) {
            $dataArray['nomModele'] = $data->getNomModele();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [AppliquerModeleCollaborateurRequest::class => false];
    }
}
