<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SalarieAbsence;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalarieAbsenceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return SalarieAbsence::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && SalarieAbsence::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new SalarieAbsence();
        if (\array_key_exists('dureeEnHeuresSiJourUnique', $data) && \is_int($data['dureeEnHeuresSiJourUnique'])) {
            $data['dureeEnHeuresSiJourUnique'] = (float) $data['dureeEnHeuresSiJourUnique'];
        }

        if (\array_key_exists('dureeEnJoursSiJourUnique', $data) && \is_int($data['dureeEnJoursSiJourUnique'])) {
            $data['dureeEnJoursSiJourUnique'] = (float) $data['dureeEnJoursSiJourUnique'];
        }

        if (\array_key_exists('valeur1', $data) && \is_int($data['valeur1'])) {
            $data['valeur1'] = (float) $data['valeur1'];
        }

        if (\array_key_exists('valeur2', $data) && \is_int($data['valeur2'])) {
            $data['valeur2'] = (float) $data['valeur2'];
        }

        if (\array_key_exists('valeur3', $data) && \is_int($data['valeur3'])) {
            $data['valeur3'] = (float) $data['valeur3'];
        }

        if (\array_key_exists('valeur4', $data) && \is_int($data['valeur4'])) {
            $data['valeur4'] = (float) $data['valeur4'];
        }

        if (\array_key_exists('valeur5', $data) && \is_int($data['valeur5'])) {
            $data['valeur5'] = (float) $data['valeur5'];
        }

        if (\array_key_exists('bValeur1', $data) && \is_int($data['bValeur1'])) {
            $data['bValeur1'] = (bool) $data['bValeur1'];
        }

        if (\array_key_exists('bValeur2', $data) && \is_int($data['bValeur2'])) {
            $data['bValeur2'] = (bool) $data['bValeur2'];
        }

        if (\array_key_exists('bValeur3', $data) && \is_int($data['bValeur3'])) {
            $data['bValeur3'] = (bool) $data['bValeur3'];
        }

        if (\array_key_exists('bValeur4', $data) && \is_int($data['bValeur4'])) {
            $data['bValeur4'] = (bool) $data['bValeur4'];
        }

        if (\array_key_exists('bValeur5', $data) && \is_int($data['bValeur5'])) {
            $data['bValeur5'] = (bool) $data['bValeur5'];
        }

        if (\array_key_exists('absenceRectificative', $data) && \is_int($data['absenceRectificative'])) {
            $data['absenceRectificative'] = (bool) $data['absenceRectificative'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('dateDebutAbsence', $data) && null !== $data['dateDebutAbsence']) {
            $object->setDateDebutAbsence(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateDebutAbsence']));
        } elseif (\array_key_exists('dateDebutAbsence', $data) && null === $data['dateDebutAbsence']) {
            $object->setDateDebutAbsence(null);
        }

        if (\array_key_exists('dateFinAbsence', $data) && null !== $data['dateFinAbsence']) {
            $object->setDateFinAbsence(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateFinAbsence']));
        } elseif (\array_key_exists('dateFinAbsence', $data) && null === $data['dateFinAbsence']) {
            $object->setDateFinAbsence(null);
        }

        if (\array_key_exists('codeAbsence', $data) && null !== $data['codeAbsence']) {
            $object->setCodeAbsence($data['codeAbsence']);
        } elseif (\array_key_exists('codeAbsence', $data) && null === $data['codeAbsence']) {
            $object->setCodeAbsence(null);
        }

        if (\array_key_exists('dureeEnHeuresSiJourUnique', $data) && null !== $data['dureeEnHeuresSiJourUnique']) {
            $object->setDureeEnHeuresSiJourUnique($data['dureeEnHeuresSiJourUnique']);
        } elseif (\array_key_exists('dureeEnHeuresSiJourUnique', $data) && null === $data['dureeEnHeuresSiJourUnique']) {
            $object->setDureeEnHeuresSiJourUnique(null);
        }

        if (\array_key_exists('dureeEnJoursSiJourUnique', $data) && null !== $data['dureeEnJoursSiJourUnique']) {
            $object->setDureeEnJoursSiJourUnique($data['dureeEnJoursSiJourUnique']);
        } elseif (\array_key_exists('dureeEnJoursSiJourUnique', $data) && null === $data['dureeEnJoursSiJourUnique']) {
            $object->setDureeEnJoursSiJourUnique(null);
        }

        if (\array_key_exists('valeur1', $data) && null !== $data['valeur1']) {
            $object->setValeur1($data['valeur1']);
        } elseif (\array_key_exists('valeur1', $data) && null === $data['valeur1']) {
            $object->setValeur1(null);
        }

        if (\array_key_exists('bValeur1', $data) && null !== $data['bValeur1']) {
            $object->setBValeur1($data['bValeur1']);
        } elseif (\array_key_exists('bValeur1', $data) && null === $data['bValeur1']) {
            $object->setBValeur1(null);
        }

        if (\array_key_exists('valeur2', $data) && null !== $data['valeur2']) {
            $object->setValeur2($data['valeur2']);
        } elseif (\array_key_exists('valeur2', $data) && null === $data['valeur2']) {
            $object->setValeur2(null);
        }

        if (\array_key_exists('bValeur2', $data) && null !== $data['bValeur2']) {
            $object->setBValeur2($data['bValeur2']);
        } elseif (\array_key_exists('bValeur2', $data) && null === $data['bValeur2']) {
            $object->setBValeur2(null);
        }

        if (\array_key_exists('valeur3', $data) && null !== $data['valeur3']) {
            $object->setValeur3($data['valeur3']);
        } elseif (\array_key_exists('valeur3', $data) && null === $data['valeur3']) {
            $object->setValeur3(null);
        }

        if (\array_key_exists('bValeur3', $data) && null !== $data['bValeur3']) {
            $object->setBValeur3($data['bValeur3']);
        } elseif (\array_key_exists('bValeur3', $data) && null === $data['bValeur3']) {
            $object->setBValeur3(null);
        }

        if (\array_key_exists('valeur4', $data) && null !== $data['valeur4']) {
            $object->setValeur4($data['valeur4']);
        } elseif (\array_key_exists('valeur4', $data) && null === $data['valeur4']) {
            $object->setValeur4(null);
        }

        if (\array_key_exists('bValeur4', $data) && null !== $data['bValeur4']) {
            $object->setBValeur4($data['bValeur4']);
        } elseif (\array_key_exists('bValeur4', $data) && null === $data['bValeur4']) {
            $object->setBValeur4(null);
        }

        if (\array_key_exists('valeur5', $data) && null !== $data['valeur5']) {
            $object->setValeur5($data['valeur5']);
        } elseif (\array_key_exists('valeur5', $data) && null === $data['valeur5']) {
            $object->setValeur5(null);
        }

        if (\array_key_exists('bValeur5', $data) && null !== $data['bValeur5']) {
            $object->setBValeur5($data['bValeur5']);
        } elseif (\array_key_exists('bValeur5', $data) && null === $data['bValeur5']) {
            $object->setBValeur5(null);
        }

        if (\array_key_exists('commentaire', $data) && null !== $data['commentaire']) {
            $object->setCommentaire($data['commentaire']);
        } elseif (\array_key_exists('commentaire', $data) && null === $data['commentaire']) {
            $object->setCommentaire(null);
        }

        if (\array_key_exists('absenceRectificative', $data) && null !== $data['absenceRectificative']) {
            $object->setAbsenceRectificative($data['absenceRectificative']);
        } elseif (\array_key_exists('absenceRectificative', $data) && null === $data['absenceRectificative']) {
            $object->setAbsenceRectificative(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('dateDebutAbsence') && null !== $data->getDateDebutAbsence()) {
            $dataArray['dateDebutAbsence'] = $data->getDateDebutAbsence()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('dateFinAbsence') && null !== $data->getDateFinAbsence()) {
            $dataArray['dateFinAbsence'] = $data->getDateFinAbsence()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('codeAbsence') && null !== $data->getCodeAbsence()) {
            $dataArray['codeAbsence'] = $data->getCodeAbsence();
        }

        if ($data->isInitialized('dureeEnHeuresSiJourUnique') && null !== $data->getDureeEnHeuresSiJourUnique()) {
            $dataArray['dureeEnHeuresSiJourUnique'] = $data->getDureeEnHeuresSiJourUnique();
        }

        if ($data->isInitialized('dureeEnJoursSiJourUnique') && null !== $data->getDureeEnJoursSiJourUnique()) {
            $dataArray['dureeEnJoursSiJourUnique'] = $data->getDureeEnJoursSiJourUnique();
        }

        if ($data->isInitialized('valeur1') && null !== $data->getValeur1()) {
            $dataArray['valeur1'] = $data->getValeur1();
        }

        if ($data->isInitialized('bValeur1') && null !== $data->getBValeur1()) {
            $dataArray['bValeur1'] = $data->getBValeur1();
        }

        if ($data->isInitialized('valeur2') && null !== $data->getValeur2()) {
            $dataArray['valeur2'] = $data->getValeur2();
        }

        if ($data->isInitialized('bValeur2') && null !== $data->getBValeur2()) {
            $dataArray['bValeur2'] = $data->getBValeur2();
        }

        if ($data->isInitialized('valeur3') && null !== $data->getValeur3()) {
            $dataArray['valeur3'] = $data->getValeur3();
        }

        if ($data->isInitialized('bValeur3') && null !== $data->getBValeur3()) {
            $dataArray['bValeur3'] = $data->getBValeur3();
        }

        if ($data->isInitialized('valeur4') && null !== $data->getValeur4()) {
            $dataArray['valeur4'] = $data->getValeur4();
        }

        if ($data->isInitialized('bValeur4') && null !== $data->getBValeur4()) {
            $dataArray['bValeur4'] = $data->getBValeur4();
        }

        if ($data->isInitialized('valeur5') && null !== $data->getValeur5()) {
            $dataArray['valeur5'] = $data->getValeur5();
        }

        if ($data->isInitialized('bValeur5') && null !== $data->getBValeur5()) {
            $dataArray['bValeur5'] = $data->getBValeur5();
        }

        if ($data->isInitialized('commentaire') && null !== $data->getCommentaire()) {
            $dataArray['commentaire'] = $data->getCommentaire();
        }

        if ($data->isInitialized('absenceRectificative') && null !== $data->getAbsenceRectificative()) {
            $dataArray['absenceRectificative'] = $data->getAbsenceRectificative();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [SalarieAbsence::class => false];
    }
}
