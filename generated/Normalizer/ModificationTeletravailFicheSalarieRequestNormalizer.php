<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\ModificationTeletravailFicheSalarieRequest;
use QdequippeTech\Silae\Api\Model\TeletravailFicheSalarie;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ModificationTeletravailFicheSalarieRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return ModificationTeletravailFicheSalarieRequest::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && ModificationTeletravailFicheSalarieRequest::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new ModificationTeletravailFicheSalarieRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        if (\array_key_exists('identifiantEmploi', $data) && null !== $data['identifiantEmploi']) {
            $object->setIdentifiantEmploi($data['identifiantEmploi']);
        } elseif (\array_key_exists('identifiantEmploi', $data) && null === $data['identifiantEmploi']) {
            $object->setIdentifiantEmploi(null);
        }

        if (\array_key_exists('teletravail', $data) && null !== $data['teletravail']) {
            $object->setTeletravail($this->denormalizer->denormalize($data['teletravail'], TeletravailFicheSalarie::class, 'json', $context));
        } elseif (\array_key_exists('teletravail', $data) && null === $data['teletravail']) {
            $object->setTeletravail(null);
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
        if ($data->isInitialized('identifiantEmploi') && null !== $data->getIdentifiantEmploi()) {
            $dataArray['identifiantEmploi'] = $data->getIdentifiantEmploi();
        }

        if ($data->isInitialized('teletravail') && null !== $data->getTeletravail()) {
            $dataArray['teletravail'] = $this->normalizer->normalize($data->getTeletravail(), 'json', $context);
        }

        $dataArray['matriculeSalarie'] = $data->getMatriculeSalarie();
        $dataArray['numeroDossier'] = $data->getNumeroDossier();

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [ModificationTeletravailFicheSalarieRequest::class => false];
    }
}
