<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\ProprietesDossier;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ProprietesDossierNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return ProprietesDossier::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && ProprietesDossier::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new ProprietesDossier();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('numero', $data) && null !== $data['numero']) {
            $object->setNumero($data['numero']);
        } elseif (\array_key_exists('numero', $data) && null === $data['numero']) {
            $object->setNumero(null);
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

        if (\array_key_exists('jourPaiementMaxSSOC', $data) && null !== $data['jourPaiementMaxSSOC']) {
            $object->setJourPaiementMaxSSOC($data['jourPaiementMaxSSOC']);
        } elseif (\array_key_exists('jourPaiementMaxSSOC', $data) && null === $data['jourPaiementMaxSSOC']) {
            $object->setJourPaiementMaxSSOC(null);
        }

        if (\array_key_exists('etatDossier', $data) && null !== $data['etatDossier']) {
            $object->setEtatDossier($data['etatDossier']);
        } elseif (\array_key_exists('etatDossier', $data) && null === $data['etatDossier']) {
            $object->setEtatDossier(null);
        }

        if (\array_key_exists('numeroInterne', $data) && null !== $data['numeroInterne']) {
            $object->setNumeroInterne($data['numeroInterne']);
        } elseif (\array_key_exists('numeroInterne', $data) && null === $data['numeroInterne']) {
            $object->setNumeroInterne(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('numero') && null !== $data->getNumero()) {
            $dataArray['numero'] = $data->getNumero();
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

        if ($data->isInitialized('jourPaiementMaxSSOC') && null !== $data->getJourPaiementMaxSSOC()) {
            $dataArray['jourPaiementMaxSSOC'] = $data->getJourPaiementMaxSSOC();
        }

        if ($data->isInitialized('etatDossier') && null !== $data->getEtatDossier()) {
            $dataArray['etatDossier'] = $data->getEtatDossier();
        }

        if ($data->isInitialized('numeroInterne') && null !== $data->getNumeroInterne()) {
            $dataArray['numeroInterne'] = $data->getNumeroInterne();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [ProprietesDossier::class => false];
    }
}
