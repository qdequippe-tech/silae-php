<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\ModuleMySilaeParDossier;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ModuleMySilaeParDossierNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return ModuleMySilaeParDossier::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && ModuleMySilaeParDossier::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new ModuleMySilaeParDossier();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('codeModule', $data) && null !== $data['codeModule']) {
            $object->setCodeModule($data['codeModule']);
        } elseif (\array_key_exists('codeModule', $data) && null === $data['codeModule']) {
            $object->setCodeModule(null);
        }

        if (\array_key_exists('codeEtat', $data) && null !== $data['codeEtat']) {
            $object->setCodeEtat($data['codeEtat']);
        } elseif (\array_key_exists('codeEtat', $data) && null === $data['codeEtat']) {
            $object->setCodeEtat(null);
        }

        if (\array_key_exists('libelleEtat', $data) && null !== $data['libelleEtat']) {
            $object->setLibelleEtat($data['libelleEtat']);
        } elseif (\array_key_exists('libelleEtat', $data) && null === $data['libelleEtat']) {
            $object->setLibelleEtat(null);
        }

        if (\array_key_exists('dateDernierChangementEtat', $data) && null !== $data['dateDernierChangementEtat']) {
            $object->setDateDernierChangementEtat(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateDernierChangementEtat']));
        } elseif (\array_key_exists('dateDernierChangementEtat', $data) && null === $data['dateDernierChangementEtat']) {
            $object->setDateDernierChangementEtat(null);
        }

        if (\array_key_exists('utilisateurDernierChangementEtat', $data) && null !== $data['utilisateurDernierChangementEtat']) {
            $object->setUtilisateurDernierChangementEtat($data['utilisateurDernierChangementEtat']);
        } elseif (\array_key_exists('utilisateurDernierChangementEtat', $data) && null === $data['utilisateurDernierChangementEtat']) {
            $object->setUtilisateurDernierChangementEtat(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('codeModule') && null !== $data->getCodeModule()) {
            $dataArray['codeModule'] = $data->getCodeModule();
        }

        if ($data->isInitialized('codeEtat') && null !== $data->getCodeEtat()) {
            $dataArray['codeEtat'] = $data->getCodeEtat();
        }

        if ($data->isInitialized('libelleEtat') && null !== $data->getLibelleEtat()) {
            $dataArray['libelleEtat'] = $data->getLibelleEtat();
        }

        if ($data->isInitialized('dateDernierChangementEtat') && null !== $data->getDateDernierChangementEtat()) {
            $dataArray['dateDernierChangementEtat'] = $data->getDateDernierChangementEtat()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('utilisateurDernierChangementEtat') && null !== $data->getUtilisateurDernierChangementEtat()) {
            $dataArray['utilisateurDernierChangementEtat'] = $data->getUtilisateurDernierChangementEtat();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [ModuleMySilaeParDossier::class => false];
    }
}
