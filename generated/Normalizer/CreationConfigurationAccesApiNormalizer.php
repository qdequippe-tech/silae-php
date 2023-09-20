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

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\CreationConfigurationAccesApi' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof CreationConfigurationAccesApi;
    }

    /**
     * @param mixed|null $format
     */
    public function denormalize($data, $class, $format = null, array $context = [])
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

    /**
     * @param mixed|null $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('clientId') && null !== $object->getClientId()) {
            $data['clientId'] = $object->getClientId();
        }
        if ($object->isInitialized('identifiantUtilisateurSilae') && null !== $object->getIdentifiantUtilisateurSilae()) {
            $data['identifiantUtilisateurSilae'] = $object->getIdentifiantUtilisateurSilae();
        }
        if ($object->isInitialized('idConfiguration') && null !== $object->getIdConfiguration()) {
            $data['idConfiguration'] = $object->getIdConfiguration();
        }
        if ($object->isInitialized('niveauAcces') && null !== $object->getNiveauAcces()) {
            $data['niveauAcces'] = $object->getNiveauAcces();
        }
        if ($object->isInitialized('dossiers') && null !== $object->getDossiers()) {
            $values = [];
            foreach ($object->getDossiers() as $value) {
                $values[] = $value;
            }
            $data['dossiers'] = $values;
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\CreationConfigurationAccesApi' => false];
    }
}
