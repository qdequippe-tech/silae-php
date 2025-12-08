<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\ConfigurationAccesApi;
use QdequippeTech\Silae\Api\Model\ConfigurationAccesApiDossier;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ConfigurationAccesApiNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return ConfigurationAccesApi::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && ConfigurationAccesApi::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new ConfigurationAccesApi();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('nomCompteAPI', $data) && null !== $data['nomCompteAPI']) {
            $object->setNomCompteAPI($data['nomCompteAPI']);
        } elseif (\array_key_exists('nomCompteAPI', $data) && null === $data['nomCompteAPI']) {
            $object->setNomCompteAPI(null);
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

        if (\array_key_exists('statutConfiguration', $data) && null !== $data['statutConfiguration']) {
            $object->setStatutConfiguration($data['statutConfiguration']);
        } elseif (\array_key_exists('statutConfiguration', $data) && null === $data['statutConfiguration']) {
            $object->setStatutConfiguration(null);
        }

        if (\array_key_exists('dateCreation', $data) && null !== $data['dateCreation']) {
            $object->setDateCreation(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateCreation']));
        } elseif (\array_key_exists('dateCreation', $data) && null === $data['dateCreation']) {
            $object->setDateCreation(null);
        }

        if (\array_key_exists('dateModification', $data) && null !== $data['dateModification']) {
            $object->setDateModification(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateModification']));
        } elseif (\array_key_exists('dateModification', $data) && null === $data['dateModification']) {
            $object->setDateModification(null);
        }

        if (\array_key_exists('dossiers', $data) && null !== $data['dossiers']) {
            $values = [];
            foreach ($data['dossiers'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, ConfigurationAccesApiDossier::class, 'json', $context);
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
        if ($data->isInitialized('nomCompteAPI') && null !== $data->getNomCompteAPI()) {
            $dataArray['nomCompteAPI'] = $data->getNomCompteAPI();
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

        if ($data->isInitialized('statutConfiguration') && null !== $data->getStatutConfiguration()) {
            $dataArray['statutConfiguration'] = $data->getStatutConfiguration();
        }

        if ($data->isInitialized('dateCreation') && null !== $data->getDateCreation()) {
            $dataArray['dateCreation'] = $data->getDateCreation()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('dateModification') && null !== $data->getDateModification()) {
            $dataArray['dateModification'] = $data->getDateModification()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('dossiers') && null !== $data->getDossiers()) {
            $values = [];
            foreach ($data->getDossiers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }

            $dataArray['dossiers'] = $values;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [ConfigurationAccesApi::class => false];
    }
}
