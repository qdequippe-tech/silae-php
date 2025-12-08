<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\AjouteCompteRenduEdi94Response;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AjouteCompteRenduEdi94ResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return AjouteCompteRenduEdi94Response::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && AjouteCompteRenduEdi94Response::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new AjouteCompteRenduEdi94Response();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('nbSalariesPresentsXML', $data) && null !== $data['nbSalariesPresentsXML']) {
            $object->setNbSalariesPresentsXML($data['nbSalariesPresentsXML']);
        } elseif (\array_key_exists('nbSalariesPresentsXML', $data) && null === $data['nbSalariesPresentsXML']) {
            $object->setNbSalariesPresentsXML(null);
        }

        if (\array_key_exists('nbSalariesTrouves', $data) && null !== $data['nbSalariesTrouves']) {
            $object->setNbSalariesTrouves($data['nbSalariesTrouves']);
        } elseif (\array_key_exists('nbSalariesTrouves', $data) && null === $data['nbSalariesTrouves']) {
            $object->setNbSalariesTrouves(null);
        }

        if (\array_key_exists('nbTauxSalariesCrees', $data) && null !== $data['nbTauxSalariesCrees']) {
            $object->setNbTauxSalariesCrees($data['nbTauxSalariesCrees']);
        } elseif (\array_key_exists('nbTauxSalariesCrees', $data) && null === $data['nbTauxSalariesCrees']) {
            $object->setNbTauxSalariesCrees(null);
        }

        if (\array_key_exists('nbTauxSalariesMisAJour', $data) && null !== $data['nbTauxSalariesMisAJour']) {
            $object->setNbTauxSalariesMisAJour($data['nbTauxSalariesMisAJour']);
        } elseif (\array_key_exists('nbTauxSalariesMisAJour', $data) && null === $data['nbTauxSalariesMisAJour']) {
            $object->setNbTauxSalariesMisAJour(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('nbSalariesPresentsXML') && null !== $data->getNbSalariesPresentsXML()) {
            $dataArray['nbSalariesPresentsXML'] = $data->getNbSalariesPresentsXML();
        }

        if ($data->isInitialized('nbSalariesTrouves') && null !== $data->getNbSalariesTrouves()) {
            $dataArray['nbSalariesTrouves'] = $data->getNbSalariesTrouves();
        }

        if ($data->isInitialized('nbTauxSalariesCrees') && null !== $data->getNbTauxSalariesCrees()) {
            $dataArray['nbTauxSalariesCrees'] = $data->getNbTauxSalariesCrees();
        }

        if ($data->isInitialized('nbTauxSalariesMisAJour') && null !== $data->getNbTauxSalariesMisAJour()) {
            $dataArray['nbTauxSalariesMisAJour'] = $data->getNbTauxSalariesMisAJour();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [AjouteCompteRenduEdi94Response::class => false];
    }
}
