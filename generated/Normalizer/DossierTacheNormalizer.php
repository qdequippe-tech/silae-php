<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\DossierTache;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class DossierTacheNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return DossierTache::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && DossierTache::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new DossierTache();
        if (\array_key_exists('aFaireParLeClient', $data) && \is_int($data['aFaireParLeClient'])) {
            $data['aFaireParLeClient'] = (bool) $data['aFaireParLeClient'];
        }

        if (\array_key_exists('optionBool1', $data) && \is_int($data['optionBool1'])) {
            $data['optionBool1'] = (bool) $data['optionBool1'];
        }

        if (\array_key_exists('optionBool2', $data) && \is_int($data['optionBool2'])) {
            $data['optionBool2'] = (bool) $data['optionBool2'];
        }

        if (\array_key_exists('optionBool3', $data) && \is_int($data['optionBool3'])) {
            $data['optionBool3'] = (bool) $data['optionBool3'];
        }

        if (\array_key_exists('supprimerTache', $data) && \is_int($data['supprimerTache'])) {
            $data['supprimerTache'] = (bool) $data['supprimerTache'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('nature', $data) && null !== $data['nature']) {
            $object->setNature($data['nature']);
        } elseif (\array_key_exists('nature', $data) && null === $data['nature']) {
            $object->setNature(null);
        }

        if (\array_key_exists('jour', $data) && null !== $data['jour']) {
            $object->setJour($data['jour']);
        } elseif (\array_key_exists('jour', $data) && null === $data['jour']) {
            $object->setJour(null);
        }

        if (\array_key_exists('heure', $data) && null !== $data['heure']) {
            $object->setHeure($data['heure']);
        } elseif (\array_key_exists('heure', $data) && null === $data['heure']) {
            $object->setHeure(null);
        }

        if (\array_key_exists('minute', $data) && null !== $data['minute']) {
            $object->setMinute($data['minute']);
        } elseif (\array_key_exists('minute', $data) && null === $data['minute']) {
            $object->setMinute(null);
        }

        if (\array_key_exists('destinataire', $data) && null !== $data['destinataire']) {
            $object->setDestinataire($data['destinataire']);
        } elseif (\array_key_exists('destinataire', $data) && null === $data['destinataire']) {
            $object->setDestinataire(null);
        }

        if (\array_key_exists('aFaireParLeClient', $data) && null !== $data['aFaireParLeClient']) {
            $object->setAFaireParLeClient($data['aFaireParLeClient']);
        } elseif (\array_key_exists('aFaireParLeClient', $data) && null === $data['aFaireParLeClient']) {
            $object->setAFaireParLeClient(null);
        }

        if (\array_key_exists('optionBool1', $data) && null !== $data['optionBool1']) {
            $object->setOptionBool1($data['optionBool1']);
        } elseif (\array_key_exists('optionBool1', $data) && null === $data['optionBool1']) {
            $object->setOptionBool1(null);
        }

        if (\array_key_exists('optionBool2', $data) && null !== $data['optionBool2']) {
            $object->setOptionBool2($data['optionBool2']);
        } elseif (\array_key_exists('optionBool2', $data) && null === $data['optionBool2']) {
            $object->setOptionBool2(null);
        }

        if (\array_key_exists('optionBool3', $data) && null !== $data['optionBool3']) {
            $object->setOptionBool3($data['optionBool3']);
        } elseif (\array_key_exists('optionBool3', $data) && null === $data['optionBool3']) {
            $object->setOptionBool3(null);
        }

        if (\array_key_exists('optionString1', $data) && null !== $data['optionString1']) {
            $object->setOptionString1($data['optionString1']);
        } elseif (\array_key_exists('optionString1', $data) && null === $data['optionString1']) {
            $object->setOptionString1(null);
        }

        if (\array_key_exists('rappel1_Jour', $data) && null !== $data['rappel1_Jour']) {
            $object->setRappel1Jour($data['rappel1_Jour']);
        } elseif (\array_key_exists('rappel1_Jour', $data) && null === $data['rappel1_Jour']) {
            $object->setRappel1Jour(null);
        }

        if (\array_key_exists('rappel1_Heure', $data) && null !== $data['rappel1_Heure']) {
            $object->setRappel1Heure($data['rappel1_Heure']);
        } elseif (\array_key_exists('rappel1_Heure', $data) && null === $data['rappel1_Heure']) {
            $object->setRappel1Heure(null);
        }

        if (\array_key_exists('rappel1_Minute', $data) && null !== $data['rappel1_Minute']) {
            $object->setRappel1Minute($data['rappel1_Minute']);
        } elseif (\array_key_exists('rappel1_Minute', $data) && null === $data['rappel1_Minute']) {
            $object->setRappel1Minute(null);
        }

        if (\array_key_exists('rappel1_Destinataire', $data) && null !== $data['rappel1_Destinataire']) {
            $object->setRappel1Destinataire($data['rappel1_Destinataire']);
        } elseif (\array_key_exists('rappel1_Destinataire', $data) && null === $data['rappel1_Destinataire']) {
            $object->setRappel1Destinataire(null);
        }

        if (\array_key_exists('rappel2_Jour', $data) && null !== $data['rappel2_Jour']) {
            $object->setRappel2Jour($data['rappel2_Jour']);
        } elseif (\array_key_exists('rappel2_Jour', $data) && null === $data['rappel2_Jour']) {
            $object->setRappel2Jour(null);
        }

        if (\array_key_exists('rappel2_Heure', $data) && null !== $data['rappel2_Heure']) {
            $object->setRappel2Heure($data['rappel2_Heure']);
        } elseif (\array_key_exists('rappel2_Heure', $data) && null === $data['rappel2_Heure']) {
            $object->setRappel2Heure(null);
        }

        if (\array_key_exists('rappel2_Minute', $data) && null !== $data['rappel2_Minute']) {
            $object->setRappel2Minute($data['rappel2_Minute']);
        } elseif (\array_key_exists('rappel2_Minute', $data) && null === $data['rappel2_Minute']) {
            $object->setRappel2Minute(null);
        }

        if (\array_key_exists('rappel2_Destinataire', $data) && null !== $data['rappel2_Destinataire']) {
            $object->setRappel2Destinataire($data['rappel2_Destinataire']);
        } elseif (\array_key_exists('rappel2_Destinataire', $data) && null === $data['rappel2_Destinataire']) {
            $object->setRappel2Destinataire(null);
        }

        if (\array_key_exists('rappel3_Jour', $data) && null !== $data['rappel3_Jour']) {
            $object->setRappel3Jour($data['rappel3_Jour']);
        } elseif (\array_key_exists('rappel3_Jour', $data) && null === $data['rappel3_Jour']) {
            $object->setRappel3Jour(null);
        }

        if (\array_key_exists('rappel3_Heure', $data) && null !== $data['rappel3_Heure']) {
            $object->setRappel3Heure($data['rappel3_Heure']);
        } elseif (\array_key_exists('rappel3_Heure', $data) && null === $data['rappel3_Heure']) {
            $object->setRappel3Heure(null);
        }

        if (\array_key_exists('rappel3_Minute', $data) && null !== $data['rappel3_Minute']) {
            $object->setRappel3Minute($data['rappel3_Minute']);
        } elseif (\array_key_exists('rappel3_Minute', $data) && null === $data['rappel3_Minute']) {
            $object->setRappel3Minute(null);
        }

        if (\array_key_exists('rappel3_Destinataire', $data) && null !== $data['rappel3_Destinataire']) {
            $object->setRappel3Destinataire($data['rappel3_Destinataire']);
        } elseif (\array_key_exists('rappel3_Destinataire', $data) && null === $data['rappel3_Destinataire']) {
            $object->setRappel3Destinataire(null);
        }

        if (\array_key_exists('rappel4_Jour', $data) && null !== $data['rappel4_Jour']) {
            $object->setRappel4Jour($data['rappel4_Jour']);
        } elseif (\array_key_exists('rappel4_Jour', $data) && null === $data['rappel4_Jour']) {
            $object->setRappel4Jour(null);
        }

        if (\array_key_exists('rappel4_Heure', $data) && null !== $data['rappel4_Heure']) {
            $object->setRappel4Heure($data['rappel4_Heure']);
        } elseif (\array_key_exists('rappel4_Heure', $data) && null === $data['rappel4_Heure']) {
            $object->setRappel4Heure(null);
        }

        if (\array_key_exists('rappel4_Minute', $data) && null !== $data['rappel4_Minute']) {
            $object->setRappel4Minute($data['rappel4_Minute']);
        } elseif (\array_key_exists('rappel4_Minute', $data) && null === $data['rappel4_Minute']) {
            $object->setRappel4Minute(null);
        }

        if (\array_key_exists('rappel4_Destinataire', $data) && null !== $data['rappel4_Destinataire']) {
            $object->setRappel4Destinataire($data['rappel4_Destinataire']);
        } elseif (\array_key_exists('rappel4_Destinataire', $data) && null === $data['rappel4_Destinataire']) {
            $object->setRappel4Destinataire(null);
        }

        if (\array_key_exists('rappel5_Jour', $data) && null !== $data['rappel5_Jour']) {
            $object->setRappel5Jour($data['rappel5_Jour']);
        } elseif (\array_key_exists('rappel5_Jour', $data) && null === $data['rappel5_Jour']) {
            $object->setRappel5Jour(null);
        }

        if (\array_key_exists('rappel5_Heure', $data) && null !== $data['rappel5_Heure']) {
            $object->setRappel5Heure($data['rappel5_Heure']);
        } elseif (\array_key_exists('rappel5_Heure', $data) && null === $data['rappel5_Heure']) {
            $object->setRappel5Heure(null);
        }

        if (\array_key_exists('rappel5_Minute', $data) && null !== $data['rappel5_Minute']) {
            $object->setRappel5Minute($data['rappel5_Minute']);
        } elseif (\array_key_exists('rappel5_Minute', $data) && null === $data['rappel5_Minute']) {
            $object->setRappel5Minute(null);
        }

        if (\array_key_exists('rappel5_Destinataire', $data) && null !== $data['rappel5_Destinataire']) {
            $object->setRappel5Destinataire($data['rappel5_Destinataire']);
        } elseif (\array_key_exists('rappel5_Destinataire', $data) && null === $data['rappel5_Destinataire']) {
            $object->setRappel5Destinataire(null);
        }

        if (\array_key_exists('supprimerTache', $data) && null !== $data['supprimerTache']) {
            $object->setSupprimerTache($data['supprimerTache']);
        } elseif (\array_key_exists('supprimerTache', $data) && null === $data['supprimerTache']) {
            $object->setSupprimerTache(null);
        }

        if (\array_key_exists('nomServeur', $data) && null !== $data['nomServeur']) {
            $object->setNomServeur($data['nomServeur']);
        } elseif (\array_key_exists('nomServeur', $data) && null === $data['nomServeur']) {
            $object->setNomServeur(null);
        }

        if (\array_key_exists('nomRepertoire', $data) && null !== $data['nomRepertoire']) {
            $object->setNomRepertoire($data['nomRepertoire']);
        } elseif (\array_key_exists('nomRepertoire', $data) && null === $data['nomRepertoire']) {
            $object->setNomRepertoire(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('nature') && null !== $data->getNature()) {
            $dataArray['nature'] = $data->getNature();
        }

        if ($data->isInitialized('jour') && null !== $data->getJour()) {
            $dataArray['jour'] = $data->getJour();
        }

        if ($data->isInitialized('heure') && null !== $data->getHeure()) {
            $dataArray['heure'] = $data->getHeure();
        }

        if ($data->isInitialized('minute') && null !== $data->getMinute()) {
            $dataArray['minute'] = $data->getMinute();
        }

        if ($data->isInitialized('destinataire') && null !== $data->getDestinataire()) {
            $dataArray['destinataire'] = $data->getDestinataire();
        }

        if ($data->isInitialized('aFaireParLeClient') && null !== $data->getAFaireParLeClient()) {
            $dataArray['aFaireParLeClient'] = $data->getAFaireParLeClient();
        }

        if ($data->isInitialized('optionBool1') && null !== $data->getOptionBool1()) {
            $dataArray['optionBool1'] = $data->getOptionBool1();
        }

        if ($data->isInitialized('optionBool2') && null !== $data->getOptionBool2()) {
            $dataArray['optionBool2'] = $data->getOptionBool2();
        }

        if ($data->isInitialized('optionBool3') && null !== $data->getOptionBool3()) {
            $dataArray['optionBool3'] = $data->getOptionBool3();
        }

        if ($data->isInitialized('optionString1') && null !== $data->getOptionString1()) {
            $dataArray['optionString1'] = $data->getOptionString1();
        }

        if ($data->isInitialized('rappel1Jour') && null !== $data->getRappel1Jour()) {
            $dataArray['rappel1_Jour'] = $data->getRappel1Jour();
        }

        if ($data->isInitialized('rappel1Heure') && null !== $data->getRappel1Heure()) {
            $dataArray['rappel1_Heure'] = $data->getRappel1Heure();
        }

        if ($data->isInitialized('rappel1Minute') && null !== $data->getRappel1Minute()) {
            $dataArray['rappel1_Minute'] = $data->getRappel1Minute();
        }

        if ($data->isInitialized('rappel1Destinataire') && null !== $data->getRappel1Destinataire()) {
            $dataArray['rappel1_Destinataire'] = $data->getRappel1Destinataire();
        }

        if ($data->isInitialized('rappel2Jour') && null !== $data->getRappel2Jour()) {
            $dataArray['rappel2_Jour'] = $data->getRappel2Jour();
        }

        if ($data->isInitialized('rappel2Heure') && null !== $data->getRappel2Heure()) {
            $dataArray['rappel2_Heure'] = $data->getRappel2Heure();
        }

        if ($data->isInitialized('rappel2Minute') && null !== $data->getRappel2Minute()) {
            $dataArray['rappel2_Minute'] = $data->getRappel2Minute();
        }

        if ($data->isInitialized('rappel2Destinataire') && null !== $data->getRappel2Destinataire()) {
            $dataArray['rappel2_Destinataire'] = $data->getRappel2Destinataire();
        }

        if ($data->isInitialized('rappel3Jour') && null !== $data->getRappel3Jour()) {
            $dataArray['rappel3_Jour'] = $data->getRappel3Jour();
        }

        if ($data->isInitialized('rappel3Heure') && null !== $data->getRappel3Heure()) {
            $dataArray['rappel3_Heure'] = $data->getRappel3Heure();
        }

        if ($data->isInitialized('rappel3Minute') && null !== $data->getRappel3Minute()) {
            $dataArray['rappel3_Minute'] = $data->getRappel3Minute();
        }

        if ($data->isInitialized('rappel3Destinataire') && null !== $data->getRappel3Destinataire()) {
            $dataArray['rappel3_Destinataire'] = $data->getRappel3Destinataire();
        }

        if ($data->isInitialized('rappel4Jour') && null !== $data->getRappel4Jour()) {
            $dataArray['rappel4_Jour'] = $data->getRappel4Jour();
        }

        if ($data->isInitialized('rappel4Heure') && null !== $data->getRappel4Heure()) {
            $dataArray['rappel4_Heure'] = $data->getRappel4Heure();
        }

        if ($data->isInitialized('rappel4Minute') && null !== $data->getRappel4Minute()) {
            $dataArray['rappel4_Minute'] = $data->getRappel4Minute();
        }

        if ($data->isInitialized('rappel4Destinataire') && null !== $data->getRappel4Destinataire()) {
            $dataArray['rappel4_Destinataire'] = $data->getRappel4Destinataire();
        }

        if ($data->isInitialized('rappel5Jour') && null !== $data->getRappel5Jour()) {
            $dataArray['rappel5_Jour'] = $data->getRappel5Jour();
        }

        if ($data->isInitialized('rappel5Heure') && null !== $data->getRappel5Heure()) {
            $dataArray['rappel5_Heure'] = $data->getRappel5Heure();
        }

        if ($data->isInitialized('rappel5Minute') && null !== $data->getRappel5Minute()) {
            $dataArray['rappel5_Minute'] = $data->getRappel5Minute();
        }

        if ($data->isInitialized('rappel5Destinataire') && null !== $data->getRappel5Destinataire()) {
            $dataArray['rappel5_Destinataire'] = $data->getRappel5Destinataire();
        }

        if ($data->isInitialized('supprimerTache') && null !== $data->getSupprimerTache()) {
            $dataArray['supprimerTache'] = $data->getSupprimerTache();
        }

        if ($data->isInitialized('nomServeur') && null !== $data->getNomServeur()) {
            $dataArray['nomServeur'] = $data->getNomServeur();
        }

        if ($data->isInitialized('nomRepertoire') && null !== $data->getNomRepertoire()) {
            $dataArray['nomRepertoire'] = $data->getNomRepertoire();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [DossierTache::class => false];
    }
}
