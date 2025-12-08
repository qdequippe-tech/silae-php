<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\OngletProduction;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class OngletProductionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return OngletProduction::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && OngletProduction::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new OngletProduction();
        if (\array_key_exists('aSupprimer', $data) && \is_int($data['aSupprimer'])) {
            $data['aSupprimer'] = (bool) $data['aSupprimer'];
        }

        if (\array_key_exists('paramPaieGestion', $data) && \is_int($data['paramPaieGestion'])) {
            $data['paramPaieGestion'] = (bool) $data['paramPaieGestion'];
        }

        if (\array_key_exists('paramPaieLiaisonClient', $data) && \is_int($data['paramPaieLiaisonClient'])) {
            $data['paramPaieLiaisonClient'] = (bool) $data['paramPaieLiaisonClient'];
        }

        if (\array_key_exists('paramPaieComplet', $data) && \is_int($data['paramPaieComplet'])) {
            $data['paramPaieComplet'] = (bool) $data['paramPaieComplet'];
        }

        if (\array_key_exists('paramPaieSimplifie', $data) && \is_int($data['paramPaieSimplifie'])) {
            $data['paramPaieSimplifie'] = (bool) $data['paramPaieSimplifie'];
        }

        if (\array_key_exists('afficherLaListe', $data) && \is_int($data['afficherLaListe'])) {
            $data['afficherLaListe'] = (bool) $data['afficherLaListe'];
        }

        if (\array_key_exists('restreindreLaListe', $data) && \is_int($data['restreindreLaListe'])) {
            $data['restreindreLaListe'] = (bool) $data['restreindreLaListe'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('nomOnglet', $data) && null !== $data['nomOnglet']) {
            $object->setNomOnglet($data['nomOnglet']);
        } elseif (\array_key_exists('nomOnglet', $data) && null === $data['nomOnglet']) {
            $object->setNomOnglet(null);
        }

        if (\array_key_exists('aSupprimer', $data) && null !== $data['aSupprimer']) {
            $object->setASupprimer($data['aSupprimer']);
        } elseif (\array_key_exists('aSupprimer', $data) && null === $data['aSupprimer']) {
            $object->setASupprimer(null);
        }

        if (\array_key_exists('ordre', $data) && null !== $data['ordre']) {
            $object->setOrdre($data['ordre']);
        } elseif (\array_key_exists('ordre', $data) && null === $data['ordre']) {
            $object->setOrdre(null);
        }

        if (\array_key_exists('nouveauNomOnglet', $data) && null !== $data['nouveauNomOnglet']) {
            $object->setNouveauNomOnglet($data['nouveauNomOnglet']);
        } elseif (\array_key_exists('nouveauNomOnglet', $data) && null === $data['nouveauNomOnglet']) {
            $object->setNouveauNomOnglet(null);
        }

        if (\array_key_exists('paramPaieGestion', $data) && null !== $data['paramPaieGestion']) {
            $object->setParamPaieGestion($data['paramPaieGestion']);
        } elseif (\array_key_exists('paramPaieGestion', $data) && null === $data['paramPaieGestion']) {
            $object->setParamPaieGestion(null);
        }

        if (\array_key_exists('paramPaieLiaisonClient', $data) && null !== $data['paramPaieLiaisonClient']) {
            $object->setParamPaieLiaisonClient($data['paramPaieLiaisonClient']);
        } elseif (\array_key_exists('paramPaieLiaisonClient', $data) && null === $data['paramPaieLiaisonClient']) {
            $object->setParamPaieLiaisonClient(null);
        }

        if (\array_key_exists('paramPaieComplet', $data) && null !== $data['paramPaieComplet']) {
            $object->setParamPaieComplet($data['paramPaieComplet']);
        } elseif (\array_key_exists('paramPaieComplet', $data) && null === $data['paramPaieComplet']) {
            $object->setParamPaieComplet(null);
        }

        if (\array_key_exists('paramPaieSimplifie', $data) && null !== $data['paramPaieSimplifie']) {
            $object->setParamPaieSimplifie($data['paramPaieSimplifie']);
        } elseif (\array_key_exists('paramPaieSimplifie', $data) && null === $data['paramPaieSimplifie']) {
            $object->setParamPaieSimplifie(null);
        }

        if (\array_key_exists('afficherLaListe', $data) && null !== $data['afficherLaListe']) {
            $object->setAfficherLaListe($data['afficherLaListe']);
        } elseif (\array_key_exists('afficherLaListe', $data) && null === $data['afficherLaListe']) {
            $object->setAfficherLaListe(null);
        }

        if (\array_key_exists('restreindreLaListe', $data) && null !== $data['restreindreLaListe']) {
            $object->setRestreindreLaListe($data['restreindreLaListe']);
        } elseif (\array_key_exists('restreindreLaListe', $data) && null === $data['restreindreLaListe']) {
            $object->setRestreindreLaListe(null);
        }

        if (\array_key_exists('requeteFiltre', $data) && null !== $data['requeteFiltre']) {
            $object->setRequeteFiltre($data['requeteFiltre']);
        } elseif (\array_key_exists('requeteFiltre', $data) && null === $data['requeteFiltre']) {
            $object->setRequeteFiltre(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('nomOnglet') && null !== $data->getNomOnglet()) {
            $dataArray['nomOnglet'] = $data->getNomOnglet();
        }

        if ($data->isInitialized('aSupprimer') && null !== $data->getASupprimer()) {
            $dataArray['aSupprimer'] = $data->getASupprimer();
        }

        if ($data->isInitialized('ordre') && null !== $data->getOrdre()) {
            $dataArray['ordre'] = $data->getOrdre();
        }

        if ($data->isInitialized('nouveauNomOnglet') && null !== $data->getNouveauNomOnglet()) {
            $dataArray['nouveauNomOnglet'] = $data->getNouveauNomOnglet();
        }

        if ($data->isInitialized('paramPaieGestion') && null !== $data->getParamPaieGestion()) {
            $dataArray['paramPaieGestion'] = $data->getParamPaieGestion();
        }

        if ($data->isInitialized('paramPaieLiaisonClient') && null !== $data->getParamPaieLiaisonClient()) {
            $dataArray['paramPaieLiaisonClient'] = $data->getParamPaieLiaisonClient();
        }

        if ($data->isInitialized('paramPaieComplet') && null !== $data->getParamPaieComplet()) {
            $dataArray['paramPaieComplet'] = $data->getParamPaieComplet();
        }

        if ($data->isInitialized('paramPaieSimplifie') && null !== $data->getParamPaieSimplifie()) {
            $dataArray['paramPaieSimplifie'] = $data->getParamPaieSimplifie();
        }

        if ($data->isInitialized('afficherLaListe') && null !== $data->getAfficherLaListe()) {
            $dataArray['afficherLaListe'] = $data->getAfficherLaListe();
        }

        if ($data->isInitialized('restreindreLaListe') && null !== $data->getRestreindreLaListe()) {
            $dataArray['restreindreLaListe'] = $data->getRestreindreLaListe();
        }

        if ($data->isInitialized('requeteFiltre') && null !== $data->getRequeteFiltre()) {
            $dataArray['requeteFiltre'] = $data->getRequeteFiltre();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [OngletProduction::class => false];
    }
}
