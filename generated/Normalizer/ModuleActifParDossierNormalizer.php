<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\ModuleActifParDossier;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ModuleActifParDossierNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return ModuleActifParDossier::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && ModuleActifParDossier::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new ModuleActifParDossier();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('codeModule', $data) && null !== $data['codeModule']) {
            $object->setCodeModule($data['codeModule']);
        } elseif (\array_key_exists('codeModule', $data) && null === $data['codeModule']) {
            $object->setCodeModule(null);
        }

        if (\array_key_exists('libelleModule', $data) && null !== $data['libelleModule']) {
            $object->setLibelleModule($data['libelleModule']);
        } elseif (\array_key_exists('libelleModule', $data) && null === $data['libelleModule']) {
            $object->setLibelleModule(null);
        }

        if (\array_key_exists('dateDerniereModification', $data) && null !== $data['dateDerniereModification']) {
            $object->setDateDerniereModification(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateDerniereModification']));
        } elseif (\array_key_exists('dateDerniereModification', $data) && null === $data['dateDerniereModification']) {
            $object->setDateDerniereModification(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('codeModule') && null !== $data->getCodeModule()) {
            $dataArray['codeModule'] = $data->getCodeModule();
        }

        if ($data->isInitialized('libelleModule') && null !== $data->getLibelleModule()) {
            $dataArray['libelleModule'] = $data->getLibelleModule();
        }

        if ($data->isInitialized('dateDerniereModification') && null !== $data->getDateDerniereModification()) {
            $dataArray['dateDerniereModification'] = $data->getDateDerniereModification()->format('Y-m-d\TH:i:s');
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [ModuleActifParDossier::class => false];
    }
}
