<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\AjouteCompteRenduEdi94Request;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AjouteCompteRenduEdi94RequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\AjouteCompteRenduEdi94Request' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof AjouteCompteRenduEdi94Request;
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
        $object = new AjouteCompteRenduEdi94Request();
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
        if (\array_key_exists('crm94NomFichier', $data) && null !== $data['crm94NomFichier']) {
            $object->setCrm94NomFichier($data['crm94NomFichier']);
        } elseif (\array_key_exists('crm94NomFichier', $data) && null === $data['crm94NomFichier']) {
            $object->setCrm94NomFichier(null);
        }
        if (\array_key_exists('crm94Xml', $data) && null !== $data['crm94Xml']) {
            $object->setCrm94Xml($data['crm94Xml']);
        } elseif (\array_key_exists('crm94Xml', $data) && null === $data['crm94Xml']) {
            $object->setCrm94Xml(null);
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
        if ($object->isInitialized('numeroADS') && null !== $object->getNumeroADS()) {
            $data['numeroADS'] = $object->getNumeroADS();
        }
        if ($object->isInitialized('adsacsars') && null !== $object->getAdsacsars()) {
            $data['adsacsars'] = $object->getAdsacsars();
        }
        if ($object->isInitialized('statutDeclaration') && null !== $object->getStatutDeclaration()) {
            $data['statutDeclaration'] = $object->getStatutDeclaration();
        }
        if ($object->isInitialized('statutTelepaiement') && null !== $object->getStatutTelepaiement()) {
            $data['statutTelepaiement'] = $object->getStatutTelepaiement();
        }
        if ($object->isInitialized('typeMessage') && null !== $object->getTypeMessage()) {
            $data['typeMessage'] = $object->getTypeMessage();
        }
        if ($object->isInitialized('messageTexte') && null !== $object->getMessageTexte()) {
            $data['messageTexte'] = $object->getMessageTexte();
        }
        if ($object->isInitialized('messageBa') && null !== $object->getMessageBa()) {
            $data['messageBa'] = $object->getMessageBa();
        }
        if ($object->isInitialized('crm94NomFichier') && null !== $object->getCrm94NomFichier()) {
            $data['crm94NomFichier'] = $object->getCrm94NomFichier();
        }
        if ($object->isInitialized('crm94Xml') && null !== $object->getCrm94Xml()) {
            $data['crm94Xml'] = $object->getCrm94Xml();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\AjouteCompteRenduEdi94Request' => false];
    }
}
