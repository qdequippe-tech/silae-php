<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\CreationConfigurationAccesApi;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CreationConfigurationAccesApiNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return CreationConfigurationAccesApi::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && CreationConfigurationAccesApi::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new CreationConfigurationAccesApi();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('clientId', $data) && null !== $data['clientId']) {
            $object->setClientId($data['clientId']);
        } elseif (\array_key_exists('clientId', $data) && null === $data['clientId']) {
            $object->setClientId(null);
        }

        if (\array_key_exists('identifiantUtilisateurSilae', $data) && null !== $data['identifiantUtilisateurSilae']) {
            $object->setIdentifiantUtilisateurSilae($data['identifiantUtilisateurSilae']);
        } elseif (\array_key_exists('identifiantUtilisateurSilae', $data) && null === $data['identifiantUtilisateurSilae']) {
            $object->setIdentifiantUtilisateurSilae(null);
        }

        if (\array_key_exists('idConfiguration', $data) && null !== $data['idConfiguration']) {
            $object->setIdConfiguration($data['idConfiguration']);
        } elseif (\array_key_exists('idConfiguration', $data) && null === $data['idConfiguration']) {
            $object->setIdConfiguration(null);
        }

        if (\array_key_exists('niveauAcces', $data) && null !== $data['niveauAcces']) {
            $object->setNiveauAcces($data['niveauAcces']);
        } elseif (\array_key_exists('niveauAcces', $data) && null === $data['niveauAcces']) {
            $object->setNiveauAcces(null);
        }

        if (\array_key_exists('dossiers', $data) && null !== $data['dossiers']) {
            $values = [];
            foreach ($data['dossiers'] as $value) {
                $values[] = $value;
            }

            $object->setDossiers($values);
        } elseif (\array_key_exists('dossiers', $data) && null === $data['dossiers']) {
            $object->setDossiers(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('clientId') && null !== $data->getClientId()) {
            $dataArray['clientId'] = $data->getClientId();
        }

        if ($data->isInitialized('identifiantUtilisateurSilae') && null !== $data->getIdentifiantUtilisateurSilae()) {
            $dataArray['identifiantUtilisateurSilae'] = $data->getIdentifiantUtilisateurSilae();
        }

        if ($data->isInitialized('idConfiguration') && null !== $data->getIdConfiguration()) {
            $dataArray['idConfiguration'] = $data->getIdConfiguration();
        }

        if ($data->isInitialized('niveauAcces') && null !== $data->getNiveauAcces()) {
            $dataArray['niveauAcces'] = $data->getNiveauAcces();
        }

        if ($data->isInitialized('dossiers') && null !== $data->getDossiers()) {
            $values = [];
            foreach ($data->getDossiers() as $value) {
                $values[] = $value;
            }

            $dataArray['dossiers'] = $values;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [CreationConfigurationAccesApi::class => false];
    }
}
