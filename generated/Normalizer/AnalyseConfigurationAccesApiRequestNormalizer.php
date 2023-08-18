<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\AnalyseConfigurationAccesApiRequest;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AnalyseConfigurationAccesApiRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\AnalyseConfigurationAccesApiRequest' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof AnalyseConfigurationAccesApiRequest;
    }

    /**
     * @param mixed|null $format
     * @param mixed      $data
     * @param mixed      $class
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new AnalyseConfigurationAccesApiRequest();
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
        if (\array_key_exists('numeroDossier', $data) && null !== $data['numeroDossier']) {
            $object->setNumeroDossier($data['numeroDossier']);
        } elseif (\array_key_exists('numeroDossier', $data) && null === $data['numeroDossier']) {
            $object->setNumeroDossier(null);
        }
        if (\array_key_exists('statutConfiguration', $data) && null !== $data['statutConfiguration']) {
            $object->setStatutConfiguration($data['statutConfiguration']);
        } elseif (\array_key_exists('statutConfiguration', $data) && null === $data['statutConfiguration']) {
            $object->setStatutConfiguration(null);
        }

        return $object;
    }

    /**
     * @param mixed|null $format
     * @param mixed      $object
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('nomCompteAPI') && null !== $object->getNomCompteAPI()) {
            $data['nomCompteAPI'] = $object->getNomCompteAPI();
        }
        if ($object->isInitialized('identifiantUtilisateurSilae') && null !== $object->getIdentifiantUtilisateurSilae()) {
            $data['identifiantUtilisateurSilae'] = $object->getIdentifiantUtilisateurSilae();
        }
        if ($object->isInitialized('numeroDossier') && null !== $object->getNumeroDossier()) {
            $data['numeroDossier'] = $object->getNumeroDossier();
        }
        if ($object->isInitialized('statutConfiguration') && null !== $object->getStatutConfiguration()) {
            $data['statutConfiguration'] = $object->getStatutConfiguration();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\AnalyseConfigurationAccesApiRequest' => false];
    }
}
