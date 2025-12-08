<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\CompteCollaborateurRoles;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CompteCollaborateurRolesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return CompteCollaborateurRoles::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && CompteCollaborateurRoles::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new CompteCollaborateurRoles();
        if (\array_key_exists('dataProtectionOfficier', $data) && \is_int($data['dataProtectionOfficier'])) {
            $data['dataProtectionOfficier'] = (bool) $data['dataProtectionOfficier'];
        }

        if (\array_key_exists('dirigeant', $data) && \is_int($data['dirigeant'])) {
            $data['dirigeant'] = (bool) $data['dirigeant'];
        }

        if (\array_key_exists('referentPoleSocial', $data) && \is_int($data['referentPoleSocial'])) {
            $data['referentPoleSocial'] = (bool) $data['referentPoleSocial'];
        }

        if (\array_key_exists('responsableCommercial', $data) && \is_int($data['responsableCommercial'])) {
            $data['responsableCommercial'] = (bool) $data['responsableCommercial'];
        }

        if (\array_key_exists('responsableFacturation', $data) && \is_int($data['responsableFacturation'])) {
            $data['responsableFacturation'] = (bool) $data['responsableFacturation'];
        }

        if (\array_key_exists('responsableFormation', $data) && \is_int($data['responsableFormation'])) {
            $data['responsableFormation'] = (bool) $data['responsableFormation'];
        }

        if (\array_key_exists('responsableInformatique', $data) && \is_int($data['responsableInformatique'])) {
            $data['responsableInformatique'] = (bool) $data['responsableInformatique'];
        }

        if (\array_key_exists('responsableJuridique', $data) && \is_int($data['responsableJuridique'])) {
            $data['responsableJuridique'] = (bool) $data['responsableJuridique'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('dataProtectionOfficier', $data) && null !== $data['dataProtectionOfficier']) {
            $object->setDataProtectionOfficier($data['dataProtectionOfficier']);
        } elseif (\array_key_exists('dataProtectionOfficier', $data) && null === $data['dataProtectionOfficier']) {
            $object->setDataProtectionOfficier(null);
        }

        if (\array_key_exists('dirigeant', $data) && null !== $data['dirigeant']) {
            $object->setDirigeant($data['dirigeant']);
        } elseif (\array_key_exists('dirigeant', $data) && null === $data['dirigeant']) {
            $object->setDirigeant(null);
        }

        if (\array_key_exists('referentPoleSocial', $data) && null !== $data['referentPoleSocial']) {
            $object->setReferentPoleSocial($data['referentPoleSocial']);
        } elseif (\array_key_exists('referentPoleSocial', $data) && null === $data['referentPoleSocial']) {
            $object->setReferentPoleSocial(null);
        }

        if (\array_key_exists('responsableCommercial', $data) && null !== $data['responsableCommercial']) {
            $object->setResponsableCommercial($data['responsableCommercial']);
        } elseif (\array_key_exists('responsableCommercial', $data) && null === $data['responsableCommercial']) {
            $object->setResponsableCommercial(null);
        }

        if (\array_key_exists('responsableFacturation', $data) && null !== $data['responsableFacturation']) {
            $object->setResponsableFacturation($data['responsableFacturation']);
        } elseif (\array_key_exists('responsableFacturation', $data) && null === $data['responsableFacturation']) {
            $object->setResponsableFacturation(null);
        }

        if (\array_key_exists('responsableFormation', $data) && null !== $data['responsableFormation']) {
            $object->setResponsableFormation($data['responsableFormation']);
        } elseif (\array_key_exists('responsableFormation', $data) && null === $data['responsableFormation']) {
            $object->setResponsableFormation(null);
        }

        if (\array_key_exists('responsableInformatique', $data) && null !== $data['responsableInformatique']) {
            $object->setResponsableInformatique($data['responsableInformatique']);
        } elseif (\array_key_exists('responsableInformatique', $data) && null === $data['responsableInformatique']) {
            $object->setResponsableInformatique(null);
        }

        if (\array_key_exists('responsableJuridique', $data) && null !== $data['responsableJuridique']) {
            $object->setResponsableJuridique($data['responsableJuridique']);
        } elseif (\array_key_exists('responsableJuridique', $data) && null === $data['responsableJuridique']) {
            $object->setResponsableJuridique(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('dataProtectionOfficier') && null !== $data->getDataProtectionOfficier()) {
            $dataArray['dataProtectionOfficier'] = $data->getDataProtectionOfficier();
        }

        if ($data->isInitialized('dirigeant') && null !== $data->getDirigeant()) {
            $dataArray['dirigeant'] = $data->getDirigeant();
        }

        if ($data->isInitialized('referentPoleSocial') && null !== $data->getReferentPoleSocial()) {
            $dataArray['referentPoleSocial'] = $data->getReferentPoleSocial();
        }

        if ($data->isInitialized('responsableCommercial') && null !== $data->getResponsableCommercial()) {
            $dataArray['responsableCommercial'] = $data->getResponsableCommercial();
        }

        if ($data->isInitialized('responsableFacturation') && null !== $data->getResponsableFacturation()) {
            $dataArray['responsableFacturation'] = $data->getResponsableFacturation();
        }

        if ($data->isInitialized('responsableFormation') && null !== $data->getResponsableFormation()) {
            $dataArray['responsableFormation'] = $data->getResponsableFormation();
        }

        if ($data->isInitialized('responsableInformatique') && null !== $data->getResponsableInformatique()) {
            $dataArray['responsableInformatique'] = $data->getResponsableInformatique();
        }

        if ($data->isInitialized('responsableJuridique') && null !== $data->getResponsableJuridique()) {
            $dataArray['responsableJuridique'] = $data->getResponsableJuridique();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [CompteCollaborateurRoles::class => false];
    }
}
