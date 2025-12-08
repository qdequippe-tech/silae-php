<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\PersonneLiee;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PersonneLieeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return PersonneLiee::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && PersonneLiee::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new PersonneLiee();
        if (\array_key_exists('aCharge', $data) && \is_int($data['aCharge'])) {
            $data['aCharge'] = (bool) $data['aCharge'];
        }

        if (\array_key_exists('handicape', $data) && \is_int($data['handicape'])) {
            $data['handicape'] = (bool) $data['handicape'];
        }

        if (\array_key_exists('bDateDeces', $data) && \is_int($data['bDateDeces'])) {
            $data['bDateDeces'] = (bool) $data['bDateDeces'];
        }

        if (\array_key_exists('bDateDebutRattachement', $data) && \is_int($data['bDateDebutRattachement'])) {
            $data['bDateDebutRattachement'] = (bool) $data['bDateDebutRattachement'];
        }

        if (\array_key_exists('bDateFinRattachement', $data) && \is_int($data['bDateFinRattachement'])) {
            $data['bDateFinRattachement'] = (bool) $data['bDateFinRattachement'];
        }

        if (\array_key_exists('alsaceMoselle', $data) && \is_int($data['alsaceMoselle'])) {
            $data['alsaceMoselle'] = (bool) $data['alsaceMoselle'];
        }

        if (\array_key_exists('bCivilite', $data) && \is_int($data['bCivilite'])) {
            $data['bCivilite'] = (bool) $data['bCivilite'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('prenom', $data) && null !== $data['prenom']) {
            $object->setPrenom($data['prenom']);
        } elseif (\array_key_exists('prenom', $data) && null === $data['prenom']) {
            $object->setPrenom(null);
        }

        if (\array_key_exists('nomUsuel', $data) && null !== $data['nomUsuel']) {
            $object->setNomUsuel($data['nomUsuel']);
        } elseif (\array_key_exists('nomUsuel', $data) && null === $data['nomUsuel']) {
            $object->setNomUsuel(null);
        }

        if (\array_key_exists('typeLien', $data) && null !== $data['typeLien']) {
            $object->setTypeLien($data['typeLien']);
        } elseif (\array_key_exists('typeLien', $data) && null === $data['typeLien']) {
            $object->setTypeLien(null);
        }

        if (\array_key_exists('dateNaissance', $data) && null !== $data['dateNaissance']) {
            $object->setDateNaissance(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateNaissance']));
        } elseif (\array_key_exists('dateNaissance', $data) && null === $data['dateNaissance']) {
            $object->setDateNaissance(null);
        }

        if (\array_key_exists('numeroSS', $data) && null !== $data['numeroSS']) {
            $object->setNumeroSS($data['numeroSS']);
        } elseif (\array_key_exists('numeroSS', $data) && null === $data['numeroSS']) {
            $object->setNumeroSS(null);
        }

        if (\array_key_exists('sexe', $data) && null !== $data['sexe']) {
            $object->setSexe($data['sexe']);
        } elseif (\array_key_exists('sexe', $data) && null === $data['sexe']) {
            $object->setSexe(null);
        }

        if (\array_key_exists('aCharge', $data) && null !== $data['aCharge']) {
            $object->setACharge($data['aCharge']);
        } elseif (\array_key_exists('aCharge', $data) && null === $data['aCharge']) {
            $object->setACharge(null);
        }

        if (\array_key_exists('dateDeces', $data) && null !== $data['dateDeces']) {
            $object->setDateDeces(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateDeces']));
        } elseif (\array_key_exists('dateDeces', $data) && null === $data['dateDeces']) {
            $object->setDateDeces(null);
        }

        if (\array_key_exists('handicape', $data) && null !== $data['handicape']) {
            $object->setHandicape($data['handicape']);
        } elseif (\array_key_exists('handicape', $data) && null === $data['handicape']) {
            $object->setHandicape(null);
        }

        if (\array_key_exists('bDateDeces', $data) && null !== $data['bDateDeces']) {
            $object->setBDateDeces($data['bDateDeces']);
        } elseif (\array_key_exists('bDateDeces', $data) && null === $data['bDateDeces']) {
            $object->setBDateDeces(null);
        }

        if (\array_key_exists('dateDebutRattachement', $data) && null !== $data['dateDebutRattachement']) {
            $object->setDateDebutRattachement(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateDebutRattachement']));
        } elseif (\array_key_exists('dateDebutRattachement', $data) && null === $data['dateDebutRattachement']) {
            $object->setDateDebutRattachement(null);
        }

        if (\array_key_exists('bDateDebutRattachement', $data) && null !== $data['bDateDebutRattachement']) {
            $object->setBDateDebutRattachement($data['bDateDebutRattachement']);
        } elseif (\array_key_exists('bDateDebutRattachement', $data) && null === $data['bDateDebutRattachement']) {
            $object->setBDateDebutRattachement(null);
        }

        if (\array_key_exists('dateFinRattachement', $data) && null !== $data['dateFinRattachement']) {
            $object->setDateFinRattachement(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateFinRattachement']));
        } elseif (\array_key_exists('dateFinRattachement', $data) && null === $data['dateFinRattachement']) {
            $object->setDateFinRattachement(null);
        }

        if (\array_key_exists('bDateFinRattachement', $data) && null !== $data['bDateFinRattachement']) {
            $object->setBDateFinRattachement($data['bDateFinRattachement']);
        } elseif (\array_key_exists('bDateFinRattachement', $data) && null === $data['bDateFinRattachement']) {
            $object->setBDateFinRattachement(null);
        }

        if (\array_key_exists('codeOrganismeAM', $data) && null !== $data['codeOrganismeAM']) {
            $object->setCodeOrganismeAM($data['codeOrganismeAM']);
        } elseif (\array_key_exists('codeOrganismeAM', $data) && null === $data['codeOrganismeAM']) {
            $object->setCodeOrganismeAM(null);
        }

        if (\array_key_exists('alsaceMoselle', $data) && null !== $data['alsaceMoselle']) {
            $object->setAlsaceMoselle($data['alsaceMoselle']);
        } elseif (\array_key_exists('alsaceMoselle', $data) && null === $data['alsaceMoselle']) {
            $object->setAlsaceMoselle(null);
        }

        if (\array_key_exists('bCivilite', $data) && null !== $data['bCivilite']) {
            $object->setBCivilite($data['bCivilite']);
        } elseif (\array_key_exists('bCivilite', $data) && null === $data['bCivilite']) {
            $object->setBCivilite(null);
        }

        if (\array_key_exists('civilite', $data) && null !== $data['civilite']) {
            $object->setCivilite($data['civilite']);
        } elseif (\array_key_exists('civilite', $data) && null === $data['civilite']) {
            $object->setCivilite(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('prenom') && null !== $data->getPrenom()) {
            $dataArray['prenom'] = $data->getPrenom();
        }

        if ($data->isInitialized('nomUsuel') && null !== $data->getNomUsuel()) {
            $dataArray['nomUsuel'] = $data->getNomUsuel();
        }

        if ($data->isInitialized('typeLien') && null !== $data->getTypeLien()) {
            $dataArray['typeLien'] = $data->getTypeLien();
        }

        if ($data->isInitialized('dateNaissance') && null !== $data->getDateNaissance()) {
            $dataArray['dateNaissance'] = $data->getDateNaissance()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('numeroSS') && null !== $data->getNumeroSS()) {
            $dataArray['numeroSS'] = $data->getNumeroSS();
        }

        if ($data->isInitialized('sexe') && null !== $data->getSexe()) {
            $dataArray['sexe'] = $data->getSexe();
        }

        if ($data->isInitialized('aCharge') && null !== $data->getACharge()) {
            $dataArray['aCharge'] = $data->getACharge();
        }

        if ($data->isInitialized('dateDeces') && null !== $data->getDateDeces()) {
            $dataArray['dateDeces'] = $data->getDateDeces()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('handicape') && null !== $data->getHandicape()) {
            $dataArray['handicape'] = $data->getHandicape();
        }

        if ($data->isInitialized('bDateDeces') && null !== $data->getBDateDeces()) {
            $dataArray['bDateDeces'] = $data->getBDateDeces();
        }

        if ($data->isInitialized('dateDebutRattachement') && null !== $data->getDateDebutRattachement()) {
            $dataArray['dateDebutRattachement'] = $data->getDateDebutRattachement()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('bDateDebutRattachement') && null !== $data->getBDateDebutRattachement()) {
            $dataArray['bDateDebutRattachement'] = $data->getBDateDebutRattachement();
        }

        if ($data->isInitialized('dateFinRattachement') && null !== $data->getDateFinRattachement()) {
            $dataArray['dateFinRattachement'] = $data->getDateFinRattachement()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('bDateFinRattachement') && null !== $data->getBDateFinRattachement()) {
            $dataArray['bDateFinRattachement'] = $data->getBDateFinRattachement();
        }

        if ($data->isInitialized('codeOrganismeAM') && null !== $data->getCodeOrganismeAM()) {
            $dataArray['codeOrganismeAM'] = $data->getCodeOrganismeAM();
        }

        if ($data->isInitialized('alsaceMoselle') && null !== $data->getAlsaceMoselle()) {
            $dataArray['alsaceMoselle'] = $data->getAlsaceMoselle();
        }

        if ($data->isInitialized('bCivilite') && null !== $data->getBCivilite()) {
            $dataArray['bCivilite'] = $data->getBCivilite();
        }

        if ($data->isInitialized('civilite') && null !== $data->getCivilite()) {
            $dataArray['civilite'] = $data->getCivilite();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [PersonneLiee::class => false];
    }
}
