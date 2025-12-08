<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\CompteCollaborateurHoraireAccesParJour;
use QdequippeTech\Silae\Api\Model\CompteCollaborateurHorairesAcces;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CompteCollaborateurHorairesAccesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return CompteCollaborateurHorairesAcces::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && CompteCollaborateurHorairesAcces::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new CompteCollaborateurHorairesAcces();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('accesJours', $data) && null !== $data['accesJours']) {
            $values = [];
            foreach ($data['accesJours'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, CompteCollaborateurHoraireAccesParJour::class, 'json', $context);
            }

            $object->setAccesJours($values);
        } elseif (\array_key_exists('accesJours', $data) && null === $data['accesJours']) {
            $object->setAccesJours(null);
        }

        if (\array_key_exists('accesJoursFeries', $data) && null !== $data['accesJoursFeries']) {
            $object->setAccesJoursFeries($data['accesJoursFeries']);
        } elseif (\array_key_exists('accesJoursFeries', $data) && null === $data['accesJoursFeries']) {
            $object->setAccesJoursFeries(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('accesJours') && null !== $data->getAccesJours()) {
            $values = [];
            foreach ($data->getAccesJours() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }

            $dataArray['accesJours'] = $values;
        }

        if ($data->isInitialized('accesJoursFeries') && null !== $data->getAccesJoursFeries()) {
            $dataArray['accesJoursFeries'] = $data->getAccesJoursFeries();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [CompteCollaborateurHorairesAcces::class => false];
    }
}
