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

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\SaisieArret' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'QdequippeTech\\Silae\\Api\\Model\\SaisieArret' === $data::class;
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
            $object->setDateDemande(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['dateDemande']));
        } elseif (\array_key_exists('dateDemande', $data) && null === $data['dateDemande']) {
            $object->setDateDemande(null);
        }
        if (\array_key_exists('montantCreance', $data) && null !== $data['montantCreance']) {
            $object->setMontantCreance($data['montantCreance']);
        } elseif (\array_key_exists('montantCreance', $data) && null === $data['montantCreance']) {
            $object->setMontantCreance(null);
        }
        if (\array_key_exists('dateDebutPrelevement', $data) && null !== $data['dateDebutPrelevement']) {
            $object->setDateDebutPrelevement(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['dateDebutPrelevement']));
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

    /**
     * @param mixed|null $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('reference') && null !== $object->getReference()) {
            $data['reference'] = $object->getReference();
        }
        if ($object->isInitialized('demandeur') && null !== $object->getDemandeur()) {
            $data['demandeur'] = $object->getDemandeur();
        }
        if ($object->isInitialized('dateDemande') && null !== $object->getDateDemande()) {
            $data['dateDemande'] = $object->getDateDemande()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('montantCreance') && null !== $object->getMontantCreance()) {
            $data['montantCreance'] = $object->getMontantCreance();
        }
        if ($object->isInitialized('dateDebutPrelevement') && null !== $object->getDateDebutPrelevement()) {
            $data['dateDebutPrelevement'] = $object->getDateDebutPrelevement()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if ($object->isInitialized('priorite') && null !== $object->getPriorite()) {
            $data['priorite'] = $object->getPriorite();
        }
        if ($object->isInitialized('libelleBulletin') && null !== $object->getLibelleBulletin()) {
            $data['libelleBulletin'] = $object->getLibelleBulletin();
        }
        if ($object->isInitialized('montantsDejaVerses') && null !== $object->getMontantsDejaVerses()) {
            $data['montantsDejaVerses'] = $object->getMontantsDejaVerses();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\SaisieArret' => false];
    }
}
