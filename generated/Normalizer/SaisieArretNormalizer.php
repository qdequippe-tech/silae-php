<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SaisieArret;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SaisieArretNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return SaisieArret::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && SaisieArret::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new SaisieArret();
        if (\array_key_exists('montantCreance', $data) && \is_int($data['montantCreance'])) {
            $data['montantCreance'] = (float) $data['montantCreance'];
        }

        if (\array_key_exists('montantsDejaVerses', $data) && \is_int($data['montantsDejaVerses'])) {
            $data['montantsDejaVerses'] = (float) $data['montantsDejaVerses'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('reference', $data) && null !== $data['reference']) {
            $object->setReference($data['reference']);
        } elseif (\array_key_exists('reference', $data) && null === $data['reference']) {
            $object->setReference(null);
        }

        if (\array_key_exists('demandeur', $data) && null !== $data['demandeur']) {
            $object->setDemandeur($data['demandeur']);
        } elseif (\array_key_exists('demandeur', $data) && null === $data['demandeur']) {
            $object->setDemandeur(null);
        }

        if (\array_key_exists('dateDemande', $data) && null !== $data['dateDemande']) {
            $object->setDateDemande(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateDemande']));
        } elseif (\array_key_exists('dateDemande', $data) && null === $data['dateDemande']) {
            $object->setDateDemande(null);
        }

        if (\array_key_exists('montantCreance', $data) && null !== $data['montantCreance']) {
            $object->setMontantCreance($data['montantCreance']);
        } elseif (\array_key_exists('montantCreance', $data) && null === $data['montantCreance']) {
            $object->setMontantCreance(null);
        }

        if (\array_key_exists('dateDebutPrelevement', $data) && null !== $data['dateDebutPrelevement']) {
            $object->setDateDebutPrelevement(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateDebutPrelevement']));
        } elseif (\array_key_exists('dateDebutPrelevement', $data) && null === $data['dateDebutPrelevement']) {
            $object->setDateDebutPrelevement(null);
        }

        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
        }

        if (\array_key_exists('priorite', $data) && null !== $data['priorite']) {
            $object->setPriorite($data['priorite']);
        } elseif (\array_key_exists('priorite', $data) && null === $data['priorite']) {
            $object->setPriorite(null);
        }

        if (\array_key_exists('libelleBulletin', $data) && null !== $data['libelleBulletin']) {
            $object->setLibelleBulletin($data['libelleBulletin']);
        } elseif (\array_key_exists('libelleBulletin', $data) && null === $data['libelleBulletin']) {
            $object->setLibelleBulletin(null);
        }

        if (\array_key_exists('montantsDejaVerses', $data) && null !== $data['montantsDejaVerses']) {
            $object->setMontantsDejaVerses($data['montantsDejaVerses']);
        } elseif (\array_key_exists('montantsDejaVerses', $data) && null === $data['montantsDejaVerses']) {
            $object->setMontantsDejaVerses(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('reference') && null !== $data->getReference()) {
            $dataArray['reference'] = $data->getReference();
        }

        if ($data->isInitialized('demandeur') && null !== $data->getDemandeur()) {
            $dataArray['demandeur'] = $data->getDemandeur();
        }

        if ($data->isInitialized('dateDemande') && null !== $data->getDateDemande()) {
            $dataArray['dateDemande'] = $data->getDateDemande()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('montantCreance') && null !== $data->getMontantCreance()) {
            $dataArray['montantCreance'] = $data->getMontantCreance();
        }

        if ($data->isInitialized('dateDebutPrelevement') && null !== $data->getDateDebutPrelevement()) {
            $dataArray['dateDebutPrelevement'] = $data->getDateDebutPrelevement()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }

        if ($data->isInitialized('priorite') && null !== $data->getPriorite()) {
            $dataArray['priorite'] = $data->getPriorite();
        }

        if ($data->isInitialized('libelleBulletin') && null !== $data->getLibelleBulletin()) {
            $dataArray['libelleBulletin'] = $data->getLibelleBulletin();
        }

        if ($data->isInitialized('montantsDejaVerses') && null !== $data->getMontantsDejaVerses()) {
            $dataArray['montantsDejaVerses'] = $data->getMontantsDejaVerses();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [SaisieArret::class => false];
    }
}
