<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
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

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\DossierTache' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'QdequippeTech\\Silae\\Api\\Model\\DossierTache' === $data::class;
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
        $object = new \QdequippeTech\Silae\Api\Model\DossierTache();
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
        if ($object->isInitialized('nature') && null !== $object->getNature()) {
            $data['nature'] = $object->getNature();
        }
        if ($object->isInitialized('jour') && null !== $object->getJour()) {
            $data['jour'] = $object->getJour();
        }
        if ($object->isInitialized('heure') && null !== $object->getHeure()) {
            $data['heure'] = $object->getHeure();
        }
        if ($object->isInitialized('minute') && null !== $object->getMinute()) {
            $data['minute'] = $object->getMinute();
        }
        if ($object->isInitialized('destinataire') && null !== $object->getDestinataire()) {
            $data['destinataire'] = $object->getDestinataire();
        }
        if ($object->isInitialized('aFaireParLeClient') && null !== $object->getAFaireParLeClient()) {
            $data['aFaireParLeClient'] = $object->getAFaireParLeClient();
        }
        if ($object->isInitialized('optionBool1') && null !== $object->getOptionBool1()) {
            $data['optionBool1'] = $object->getOptionBool1();
        }
        if ($object->isInitialized('optionBool2') && null !== $object->getOptionBool2()) {
            $data['optionBool2'] = $object->getOptionBool2();
        }
        if ($object->isInitialized('optionBool3') && null !== $object->getOptionBool3()) {
            $data['optionBool3'] = $object->getOptionBool3();
        }
        if ($object->isInitialized('optionString1') && null !== $object->getOptionString1()) {
            $data['optionString1'] = $object->getOptionString1();
        }
        if ($object->isInitialized('rappel1Jour') && null !== $object->getRappel1Jour()) {
            $data['rappel1_Jour'] = $object->getRappel1Jour();
        }
        if ($object->isInitialized('rappel1Heure') && null !== $object->getRappel1Heure()) {
            $data['rappel1_Heure'] = $object->getRappel1Heure();
        }
        if ($object->isInitialized('rappel1Minute') && null !== $object->getRappel1Minute()) {
            $data['rappel1_Minute'] = $object->getRappel1Minute();
        }
        if ($object->isInitialized('rappel1Destinataire') && null !== $object->getRappel1Destinataire()) {
            $data['rappel1_Destinataire'] = $object->getRappel1Destinataire();
        }
        if ($object->isInitialized('rappel2Jour') && null !== $object->getRappel2Jour()) {
            $data['rappel2_Jour'] = $object->getRappel2Jour();
        }
        if ($object->isInitialized('rappel2Heure') && null !== $object->getRappel2Heure()) {
            $data['rappel2_Heure'] = $object->getRappel2Heure();
        }
        if ($object->isInitialized('rappel2Minute') && null !== $object->getRappel2Minute()) {
            $data['rappel2_Minute'] = $object->getRappel2Minute();
        }
        if ($object->isInitialized('rappel2Destinataire') && null !== $object->getRappel2Destinataire()) {
            $data['rappel2_Destinataire'] = $object->getRappel2Destinataire();
        }
        if ($object->isInitialized('rappel3Jour') && null !== $object->getRappel3Jour()) {
            $data['rappel3_Jour'] = $object->getRappel3Jour();
        }
        if ($object->isInitialized('rappel3Heure') && null !== $object->getRappel3Heure()) {
            $data['rappel3_Heure'] = $object->getRappel3Heure();
        }
        if ($object->isInitialized('rappel3Minute') && null !== $object->getRappel3Minute()) {
            $data['rappel3_Minute'] = $object->getRappel3Minute();
        }
        if ($object->isInitialized('rappel3Destinataire') && null !== $object->getRappel3Destinataire()) {
            $data['rappel3_Destinataire'] = $object->getRappel3Destinataire();
        }
        if ($object->isInitialized('rappel4Jour') && null !== $object->getRappel4Jour()) {
            $data['rappel4_Jour'] = $object->getRappel4Jour();
        }
        if ($object->isInitialized('rappel4Heure') && null !== $object->getRappel4Heure()) {
            $data['rappel4_Heure'] = $object->getRappel4Heure();
        }
        if ($object->isInitialized('rappel4Minute') && null !== $object->getRappel4Minute()) {
            $data['rappel4_Minute'] = $object->getRappel4Minute();
        }
        if ($object->isInitialized('rappel4Destinataire') && null !== $object->getRappel4Destinataire()) {
            $data['rappel4_Destinataire'] = $object->getRappel4Destinataire();
        }
        if ($object->isInitialized('rappel5Jour') && null !== $object->getRappel5Jour()) {
            $data['rappel5_Jour'] = $object->getRappel5Jour();
        }
        if ($object->isInitialized('rappel5Heure') && null !== $object->getRappel5Heure()) {
            $data['rappel5_Heure'] = $object->getRappel5Heure();
        }
        if ($object->isInitialized('rappel5Minute') && null !== $object->getRappel5Minute()) {
            $data['rappel5_Minute'] = $object->getRappel5Minute();
        }
        if ($object->isInitialized('rappel5Destinataire') && null !== $object->getRappel5Destinataire()) {
            $data['rappel5_Destinataire'] = $object->getRappel5Destinataire();
        }
        if ($object->isInitialized('supprimerTache') && null !== $object->getSupprimerTache()) {
            $data['supprimerTache'] = $object->getSupprimerTache();
        }

        return $data;
    }
}
