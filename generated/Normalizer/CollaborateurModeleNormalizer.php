<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\CollaborateurModele;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CollaborateurModeleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return CollaborateurModele::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && CollaborateurModele::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new CollaborateurModele();
        if (\array_key_exists('defaut', $data) && \is_int($data['defaut'])) {
            $data['defaut'] = (bool) $data['defaut'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('nomModele', $data) && null !== $data['nomModele']) {
            $object->setNomModele($data['nomModele']);
        } elseif (\array_key_exists('nomModele', $data) && null === $data['nomModele']) {
            $object->setNomModele(null);
        }

        if (\array_key_exists('defaut', $data) && null !== $data['defaut']) {
            $object->setDefaut($data['defaut']);
        } elseif (\array_key_exists('defaut', $data) && null === $data['defaut']) {
            $object->setDefaut(null);
        }

        if (\array_key_exists('dateCreation', $data) && null !== $data['dateCreation']) {
            $object->setDateCreation(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateCreation']));
        } elseif (\array_key_exists('dateCreation', $data) && null === $data['dateCreation']) {
            $object->setDateCreation(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('nomModele') && null !== $data->getNomModele()) {
            $dataArray['nomModele'] = $data->getNomModele();
        }

        if ($data->isInitialized('defaut') && null !== $data->getDefaut()) {
            $dataArray['defaut'] = $data->getDefaut();
        }

        if ($data->isInitialized('dateCreation') && null !== $data->getDateCreation()) {
            $dataArray['dateCreation'] = $data->getDateCreation()->format('Y-m-d\TH:i:s');
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [CollaborateurModele::class => false];
    }
}
