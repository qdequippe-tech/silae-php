<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\DossierAgence;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class DossierAgenceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return DossierAgence::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && DossierAgence::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new DossierAgence();
        if (\array_key_exists('dossierInterne', $data) && \is_int($data['dossierInterne'])) {
            $data['dossierInterne'] = (bool) $data['dossierInterne'];
        }

        if (\array_key_exists('miseADisposition', $data) && \is_int($data['miseADisposition'])) {
            $data['miseADisposition'] = (bool) $data['miseADisposition'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('numeroDossier', $data) && null !== $data['numeroDossier']) {
            $object->setNumeroDossier($data['numeroDossier']);
        } elseif (\array_key_exists('numeroDossier', $data) && null === $data['numeroDossier']) {
            $object->setNumeroDossier(null);
        }

        if (\array_key_exists('raisonSociale', $data) && null !== $data['raisonSociale']) {
            $object->setRaisonSociale($data['raisonSociale']);
        } elseif (\array_key_exists('raisonSociale', $data) && null === $data['raisonSociale']) {
            $object->setRaisonSociale(null);
        }

        if (\array_key_exists('siret', $data) && null !== $data['siret']) {
            $object->setSiret($data['siret']);
        } elseif (\array_key_exists('siret', $data) && null === $data['siret']) {
            $object->setSiret(null);
        }

        if (\array_key_exists('groupe', $data) && null !== $data['groupe']) {
            $object->setGroupe($data['groupe']);
        } elseif (\array_key_exists('groupe', $data) && null === $data['groupe']) {
            $object->setGroupe(null);
        }

        if (\array_key_exists('dateCreation', $data) && null !== $data['dateCreation']) {
            $object->setDateCreation(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateCreation']));
        } elseif (\array_key_exists('dateCreation', $data) && null === $data['dateCreation']) {
            $object->setDateCreation(null);
        }

        if (\array_key_exists('dossierInterne', $data) && null !== $data['dossierInterne']) {
            $object->setDossierInterne($data['dossierInterne']);
        } elseif (\array_key_exists('dossierInterne', $data) && null === $data['dossierInterne']) {
            $object->setDossierInterne(null);
        }

        if (\array_key_exists('miseADisposition', $data) && null !== $data['miseADisposition']) {
            $object->setMiseADisposition($data['miseADisposition']);
        } elseif (\array_key_exists('miseADisposition', $data) && null === $data['miseADisposition']) {
            $object->setMiseADisposition(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('numeroDossier') && null !== $data->getNumeroDossier()) {
            $dataArray['numeroDossier'] = $data->getNumeroDossier();
        }

        if ($data->isInitialized('raisonSociale') && null !== $data->getRaisonSociale()) {
            $dataArray['raisonSociale'] = $data->getRaisonSociale();
        }

        if ($data->isInitialized('siret') && null !== $data->getSiret()) {
            $dataArray['siret'] = $data->getSiret();
        }

        if ($data->isInitialized('groupe') && null !== $data->getGroupe()) {
            $dataArray['groupe'] = $data->getGroupe();
        }

        if ($data->isInitialized('dateCreation') && null !== $data->getDateCreation()) {
            $dataArray['dateCreation'] = $data->getDateCreation()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('dossierInterne') && null !== $data->getDossierInterne()) {
            $dataArray['dossierInterne'] = $data->getDossierInterne();
        }

        if ($data->isInitialized('miseADisposition') && null !== $data->getMiseADisposition()) {
            $dataArray['miseADisposition'] = $data->getMiseADisposition();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [DossierAgence::class => false];
    }
}
