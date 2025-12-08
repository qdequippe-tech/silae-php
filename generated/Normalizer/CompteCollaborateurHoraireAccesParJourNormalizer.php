<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\CompteCollaborateurHoraireAccesParJour;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CompteCollaborateurHoraireAccesParJourNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return CompteCollaborateurHoraireAccesParJour::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && CompteCollaborateurHoraireAccesParJour::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new CompteCollaborateurHoraireAccesParJour();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('jourSemaine', $data) && null !== $data['jourSemaine']) {
            $object->setJourSemaine($data['jourSemaine']);
        } elseif (\array_key_exists('jourSemaine', $data) && null === $data['jourSemaine']) {
            $object->setJourSemaine(null);
        }

        if (\array_key_exists('horaires', $data) && null !== $data['horaires']) {
            $object->setHoraires($data['horaires']);
        } elseif (\array_key_exists('horaires', $data) && null === $data['horaires']) {
            $object->setHoraires(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('jourSemaine') && null !== $data->getJourSemaine()) {
            $dataArray['jourSemaine'] = $data->getJourSemaine();
        }

        if ($data->isInitialized('horaires') && null !== $data->getHoraires()) {
            $dataArray['horaires'] = $data->getHoraires();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [CompteCollaborateurHoraireAccesParJour::class => false];
    }
}
