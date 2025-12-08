<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\InformationBancaireSociete;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class InformationBancaireSocieteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return InformationBancaireSociete::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && InformationBancaireSociete::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new InformationBancaireSociete();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('nomInterneEtablissement', $data) && null !== $data['nomInterneEtablissement']) {
            $object->setNomInterneEtablissement($data['nomInterneEtablissement']);
        } elseif (\array_key_exists('nomInterneEtablissement', $data) && null === $data['nomInterneEtablissement']) {
            $object->setNomInterneEtablissement(null);
        }

        if (\array_key_exists('rib', $data) && null !== $data['rib']) {
            $object->setRib($data['rib']);
        } elseif (\array_key_exists('rib', $data) && null === $data['rib']) {
            $object->setRib(null);
        }

        if (\array_key_exists('formatFichiers', $data) && null !== $data['formatFichiers']) {
            $object->setFormatFichiers($data['formatFichiers']);
        } elseif (\array_key_exists('formatFichiers', $data) && null === $data['formatFichiers']) {
            $object->setFormatFichiers(null);
        }

        if (\array_key_exists('iban', $data) && null !== $data['iban']) {
            $object->setIban($data['iban']);
        } elseif (\array_key_exists('iban', $data) && null === $data['iban']) {
            $object->setIban(null);
        }

        if (\array_key_exists('bic', $data) && null !== $data['bic']) {
            $object->setBic($data['bic']);
        } elseif (\array_key_exists('bic', $data) && null === $data['bic']) {
            $object->setBic(null);
        }

        if (\array_key_exists('numeroEmetteur', $data) && null !== $data['numeroEmetteur']) {
            $object->setNumeroEmetteur($data['numeroEmetteur']);
        } elseif (\array_key_exists('numeroEmetteur', $data) && null === $data['numeroEmetteur']) {
            $object->setNumeroEmetteur(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('nomInterneEtablissement') && null !== $data->getNomInterneEtablissement()) {
            $dataArray['nomInterneEtablissement'] = $data->getNomInterneEtablissement();
        }

        if ($data->isInitialized('rib') && null !== $data->getRib()) {
            $dataArray['rib'] = $data->getRib();
        }

        if ($data->isInitialized('formatFichiers') && null !== $data->getFormatFichiers()) {
            $dataArray['formatFichiers'] = $data->getFormatFichiers();
        }

        if ($data->isInitialized('iban') && null !== $data->getIban()) {
            $dataArray['iban'] = $data->getIban();
        }

        if ($data->isInitialized('bic') && null !== $data->getBic()) {
            $dataArray['bic'] = $data->getBic();
        }

        if ($data->isInitialized('numeroEmetteur') && null !== $data->getNumeroEmetteur()) {
            $dataArray['numeroEmetteur'] = $data->getNumeroEmetteur();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [InformationBancaireSociete::class => false];
    }
}
