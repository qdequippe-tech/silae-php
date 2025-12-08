<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\AjouteCompteRenduEdiRequest;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AjouteCompteRenduEdiRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return AjouteCompteRenduEdiRequest::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && AjouteCompteRenduEdiRequest::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new AjouteCompteRenduEdiRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('numeroADS', $data) && null !== $data['numeroADS']) {
            $object->setNumeroADS($data['numeroADS']);
        } elseif (\array_key_exists('numeroADS', $data) && null === $data['numeroADS']) {
            $object->setNumeroADS(null);
        }

        if (\array_key_exists('adsacsars', $data) && null !== $data['adsacsars']) {
            $object->setAdsacsars($data['adsacsars']);
        } elseif (\array_key_exists('adsacsars', $data) && null === $data['adsacsars']) {
            $object->setAdsacsars(null);
        }

        if (\array_key_exists('statutDeclaration', $data) && null !== $data['statutDeclaration']) {
            $object->setStatutDeclaration($data['statutDeclaration']);
        } elseif (\array_key_exists('statutDeclaration', $data) && null === $data['statutDeclaration']) {
            $object->setStatutDeclaration(null);
        }

        if (\array_key_exists('statutTelepaiement', $data) && null !== $data['statutTelepaiement']) {
            $object->setStatutTelepaiement($data['statutTelepaiement']);
        } elseif (\array_key_exists('statutTelepaiement', $data) && null === $data['statutTelepaiement']) {
            $object->setStatutTelepaiement(null);
        }

        if (\array_key_exists('typeMessage', $data) && null !== $data['typeMessage']) {
            $object->setTypeMessage($data['typeMessage']);
        } elseif (\array_key_exists('typeMessage', $data) && null === $data['typeMessage']) {
            $object->setTypeMessage(null);
        }

        if (\array_key_exists('messageTexte', $data) && null !== $data['messageTexte']) {
            $object->setMessageTexte($data['messageTexte']);
        } elseif (\array_key_exists('messageTexte', $data) && null === $data['messageTexte']) {
            $object->setMessageTexte(null);
        }

        if (\array_key_exists('messageBa', $data) && null !== $data['messageBa']) {
            $object->setMessageBa($data['messageBa']);
        } elseif (\array_key_exists('messageBa', $data) && null === $data['messageBa']) {
            $object->setMessageBa(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('numeroADS') && null !== $data->getNumeroADS()) {
            $dataArray['numeroADS'] = $data->getNumeroADS();
        }

        if ($data->isInitialized('adsacsars') && null !== $data->getAdsacsars()) {
            $dataArray['adsacsars'] = $data->getAdsacsars();
        }

        if ($data->isInitialized('statutDeclaration') && null !== $data->getStatutDeclaration()) {
            $dataArray['statutDeclaration'] = $data->getStatutDeclaration();
        }

        if ($data->isInitialized('statutTelepaiement') && null !== $data->getStatutTelepaiement()) {
            $dataArray['statutTelepaiement'] = $data->getStatutTelepaiement();
        }

        if ($data->isInitialized('typeMessage') && null !== $data->getTypeMessage()) {
            $dataArray['typeMessage'] = $data->getTypeMessage();
        }

        if ($data->isInitialized('messageTexte') && null !== $data->getMessageTexte()) {
            $dataArray['messageTexte'] = $data->getMessageTexte();
        }

        if ($data->isInitialized('messageBa') && null !== $data->getMessageBa()) {
            $dataArray['messageBa'] = $data->getMessageBa();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [AjouteCompteRenduEdiRequest::class => false];
    }
}
