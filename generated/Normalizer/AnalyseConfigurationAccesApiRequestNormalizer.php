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

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return AnalyseConfigurationAccesApiRequest::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && AnalyseConfigurationAccesApiRequest::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('nomCompteAPI') && null !== $data->getNomCompteAPI()) {
            $dataArray['nomCompteAPI'] = $data->getNomCompteAPI();
        }

        if ($data->isInitialized('identifiantUtilisateurSilae') && null !== $data->getIdentifiantUtilisateurSilae()) {
            $dataArray['identifiantUtilisateurSilae'] = $data->getIdentifiantUtilisateurSilae();
        }

        if ($data->isInitialized('numeroDossier') && null !== $data->getNumeroDossier()) {
            $dataArray['numeroDossier'] = $data->getNumeroDossier();
        }

        if ($data->isInitialized('statutConfiguration') && null !== $data->getStatutConfiguration()) {
            $dataArray['statutConfiguration'] = $data->getStatutConfiguration();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [AnalyseConfigurationAccesApiRequest::class => false];
    }
}
