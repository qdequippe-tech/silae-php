<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\ContactInformations;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ContactInformationsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return ContactInformations::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && ContactInformations::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new ContactInformations();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('identifiant', $data) && null !== $data['identifiant']) {
            $object->setIdentifiant($data['identifiant']);
        } elseif (\array_key_exists('identifiant', $data) && null === $data['identifiant']) {
            $object->setIdentifiant(null);
        }

        if (\array_key_exists('nom', $data) && null !== $data['nom']) {
            $object->setNom($data['nom']);
        } elseif (\array_key_exists('nom', $data) && null === $data['nom']) {
            $object->setNom(null);
        }

        if (\array_key_exists('prenom', $data) && null !== $data['prenom']) {
            $object->setPrenom($data['prenom']);
        } elseif (\array_key_exists('prenom', $data) && null === $data['prenom']) {
            $object->setPrenom(null);
        }

        if (\array_key_exists('fonction', $data) && null !== $data['fonction']) {
            $object->setFonction($data['fonction']);
        } elseif (\array_key_exists('fonction', $data) && null === $data['fonction']) {
            $object->setFonction(null);
        }

        if (\array_key_exists('telBureau', $data) && null !== $data['telBureau']) {
            $object->setTelBureau($data['telBureau']);
        } elseif (\array_key_exists('telBureau', $data) && null === $data['telBureau']) {
            $object->setTelBureau(null);
        }

        if (\array_key_exists('eMail', $data) && null !== $data['eMail']) {
            $object->setEMail($data['eMail']);
        } elseif (\array_key_exists('eMail', $data) && null === $data['eMail']) {
            $object->setEMail(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('identifiant') && null !== $data->getIdentifiant()) {
            $dataArray['identifiant'] = $data->getIdentifiant();
        }

        if ($data->isInitialized('nom') && null !== $data->getNom()) {
            $dataArray['nom'] = $data->getNom();
        }

        if ($data->isInitialized('prenom') && null !== $data->getPrenom()) {
            $dataArray['prenom'] = $data->getPrenom();
        }

        if ($data->isInitialized('fonction') && null !== $data->getFonction()) {
            $dataArray['fonction'] = $data->getFonction();
        }

        if ($data->isInitialized('telBureau') && null !== $data->getTelBureau()) {
            $dataArray['telBureau'] = $data->getTelBureau();
        }

        if ($data->isInitialized('eMail') && null !== $data->getEMail()) {
            $dataArray['eMail'] = $data->getEMail();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [ContactInformations::class => false];
    }
}
