<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\UtilisateurClient;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class UtilisateurClientNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return UtilisateurClient::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && UtilisateurClient::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new UtilisateurClient();
        if (\array_key_exists('accesComplet', $data) && \is_int($data['accesComplet'])) {
            $data['accesComplet'] = (bool) $data['accesComplet'];
        }

        if (\array_key_exists('accesComplet_AvecParametrageSimplifie', $data) && \is_int($data['accesComplet_AvecParametrageSimplifie'])) {
            $data['accesComplet_AvecParametrageSimplifie'] = (bool) $data['accesComplet_AvecParametrageSimplifie'];
        }

        if (\array_key_exists('accesComplet_AvecParametrageComplet', $data) && \is_int($data['accesComplet_AvecParametrageComplet'])) {
            $data['accesComplet_AvecParametrageComplet'] = (bool) $data['accesComplet_AvecParametrageComplet'];
        }

        if (\array_key_exists('accesComplet_AccesBureautique', $data) && \is_int($data['accesComplet_AccesBureautique'])) {
            $data['accesComplet_AccesBureautique'] = (bool) $data['accesComplet_AccesBureautique'];
        }

        if (\array_key_exists('accesComplet_AccesRelationClient', $data) && \is_int($data['accesComplet_AccesRelationClient'])) {
            $data['accesComplet_AccesRelationClient'] = (bool) $data['accesComplet_AccesRelationClient'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
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

        if (\array_key_exists('mail', $data) && null !== $data['mail']) {
            $object->setMail($data['mail']);
        } elseif (\array_key_exists('mail', $data) && null === $data['mail']) {
            $object->setMail(null);
        }

        if (\array_key_exists('identifiant', $data) && null !== $data['identifiant']) {
            $object->setIdentifiant($data['identifiant']);
        } elseif (\array_key_exists('identifiant', $data) && null === $data['identifiant']) {
            $object->setIdentifiant(null);
        }

        if (\array_key_exists('debutValidite', $data) && null !== $data['debutValidite']) {
            $object->setDebutValidite(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['debutValidite']));
        } elseif (\array_key_exists('debutValidite', $data) && null === $data['debutValidite']) {
            $object->setDebutValidite(null);
        }

        if (\array_key_exists('finValidite', $data) && null !== $data['finValidite']) {
            $object->setFinValidite(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['finValidite']));
        } elseif (\array_key_exists('finValidite', $data) && null === $data['finValidite']) {
            $object->setFinValidite(null);
        }

        if (\array_key_exists('accesComplet', $data) && null !== $data['accesComplet']) {
            $object->setAccesComplet($data['accesComplet']);
        } elseif (\array_key_exists('accesComplet', $data) && null === $data['accesComplet']) {
            $object->setAccesComplet(null);
        }

        if (\array_key_exists('accesComplet_AvecParametrageSimplifie', $data) && null !== $data['accesComplet_AvecParametrageSimplifie']) {
            $object->setAccesCompletAvecParametrageSimplifie($data['accesComplet_AvecParametrageSimplifie']);
        } elseif (\array_key_exists('accesComplet_AvecParametrageSimplifie', $data) && null === $data['accesComplet_AvecParametrageSimplifie']) {
            $object->setAccesCompletAvecParametrageSimplifie(null);
        }

        if (\array_key_exists('accesComplet_AvecParametrageComplet', $data) && null !== $data['accesComplet_AvecParametrageComplet']) {
            $object->setAccesCompletAvecParametrageComplet($data['accesComplet_AvecParametrageComplet']);
        } elseif (\array_key_exists('accesComplet_AvecParametrageComplet', $data) && null === $data['accesComplet_AvecParametrageComplet']) {
            $object->setAccesCompletAvecParametrageComplet(null);
        }

        if (\array_key_exists('accesComplet_AccesBureautique', $data) && null !== $data['accesComplet_AccesBureautique']) {
            $object->setAccesCompletAccesBureautique($data['accesComplet_AccesBureautique']);
        } elseif (\array_key_exists('accesComplet_AccesBureautique', $data) && null === $data['accesComplet_AccesBureautique']) {
            $object->setAccesCompletAccesBureautique(null);
        }

        if (\array_key_exists('accesComplet_AccesRelationClient', $data) && null !== $data['accesComplet_AccesRelationClient']) {
            $object->setAccesCompletAccesRelationClient($data['accesComplet_AccesRelationClient']);
        } elseif (\array_key_exists('accesComplet_AccesRelationClient', $data) && null === $data['accesComplet_AccesRelationClient']) {
            $object->setAccesCompletAccesRelationClient(null);
        }

        if (\array_key_exists('telBureau', $data) && null !== $data['telBureau']) {
            $object->setTelBureau($data['telBureau']);
        } elseif (\array_key_exists('telBureau', $data) && null === $data['telBureau']) {
            $object->setTelBureau(null);
        }

        if (\array_key_exists('fonction', $data) && null !== $data['fonction']) {
            $object->setFonction($data['fonction']);
        } elseif (\array_key_exists('fonction', $data) && null === $data['fonction']) {
            $object->setFonction(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('nom') && null !== $data->getNom()) {
            $dataArray['nom'] = $data->getNom();
        }

        if ($data->isInitialized('prenom') && null !== $data->getPrenom()) {
            $dataArray['prenom'] = $data->getPrenom();
        }

        if ($data->isInitialized('mail') && null !== $data->getMail()) {
            $dataArray['mail'] = $data->getMail();
        }

        if ($data->isInitialized('identifiant') && null !== $data->getIdentifiant()) {
            $dataArray['identifiant'] = $data->getIdentifiant();
        }

        if ($data->isInitialized('debutValidite') && null !== $data->getDebutValidite()) {
            $dataArray['debutValidite'] = $data->getDebutValidite()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('finValidite') && null !== $data->getFinValidite()) {
            $dataArray['finValidite'] = $data->getFinValidite()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('accesComplet') && null !== $data->getAccesComplet()) {
            $dataArray['accesComplet'] = $data->getAccesComplet();
        }

        if ($data->isInitialized('accesCompletAvecParametrageSimplifie') && null !== $data->getAccesCompletAvecParametrageSimplifie()) {
            $dataArray['accesComplet_AvecParametrageSimplifie'] = $data->getAccesCompletAvecParametrageSimplifie();
        }

        if ($data->isInitialized('accesCompletAvecParametrageComplet') && null !== $data->getAccesCompletAvecParametrageComplet()) {
            $dataArray['accesComplet_AvecParametrageComplet'] = $data->getAccesCompletAvecParametrageComplet();
        }

        if ($data->isInitialized('accesCompletAccesBureautique') && null !== $data->getAccesCompletAccesBureautique()) {
            $dataArray['accesComplet_AccesBureautique'] = $data->getAccesCompletAccesBureautique();
        }

        if ($data->isInitialized('accesCompletAccesRelationClient') && null !== $data->getAccesCompletAccesRelationClient()) {
            $dataArray['accesComplet_AccesRelationClient'] = $data->getAccesCompletAccesRelationClient();
        }

        if ($data->isInitialized('telBureau') && null !== $data->getTelBureau()) {
            $dataArray['telBureau'] = $data->getTelBureau();
        }

        if ($data->isInitialized('fonction') && null !== $data->getFonction()) {
            $dataArray['fonction'] = $data->getFonction();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [UtilisateurClient::class => false];
    }
}
