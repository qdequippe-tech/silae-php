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

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\SalarieAbsence' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof SalarieAbsence;
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
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('dateDebutAbsence', $data) && null !== $data['dateDebutAbsence']) {
            $object->setDateDebutAbsence(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['dateDebutAbsence']));
        } elseif (\array_key_exists('dateDebutAbsence', $data) && null === $data['dateDebutAbsence']) {
            $object->setDateDebutAbsence(null);
        }
        if (\array_key_exists('dateFinAbsence', $data) && null !== $data['dateFinAbsence']) {
            $object->setDateFinAbsence(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['dateFinAbsence']));
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

    /**
     * @param mixed|null $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('dateDebutAbsence') && null !== $object->getDateDebutAbsence()) {
            $data['dateDebutAbsence'] = $object->getDateDebutAbsence()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('dateFinAbsence') && null !== $object->getDateFinAbsence()) {
            $data['dateFinAbsence'] = $object->getDateFinAbsence()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('codeAbsence') && null !== $object->getCodeAbsence()) {
            $data['codeAbsence'] = $object->getCodeAbsence();
        }
        if ($object->isInitialized('dureeEnHeuresSiJourUnique') && null !== $object->getDureeEnHeuresSiJourUnique()) {
            $data['dureeEnHeuresSiJourUnique'] = $object->getDureeEnHeuresSiJourUnique();
        }
        if ($object->isInitialized('dureeEnJoursSiJourUnique') && null !== $object->getDureeEnJoursSiJourUnique()) {
            $data['dureeEnJoursSiJourUnique'] = $object->getDureeEnJoursSiJourUnique();
        }
        if ($object->isInitialized('valeur1') && null !== $object->getValeur1()) {
            $data['valeur1'] = $object->getValeur1();
        }
        if ($object->isInitialized('bValeur1') && null !== $object->getBValeur1()) {
            $data['bValeur1'] = $object->getBValeur1();
        }
        if ($object->isInitialized('valeur2') && null !== $object->getValeur2()) {
            $data['valeur2'] = $object->getValeur2();
        }
        if ($object->isInitialized('bValeur2') && null !== $object->getBValeur2()) {
            $data['bValeur2'] = $object->getBValeur2();
        }
        if ($object->isInitialized('valeur3') && null !== $object->getValeur3()) {
            $data['valeur3'] = $object->getValeur3();
        }
        if ($object->isInitialized('bValeur3') && null !== $object->getBValeur3()) {
            $data['bValeur3'] = $object->getBValeur3();
        }
        if ($object->isInitialized('valeur4') && null !== $object->getValeur4()) {
            $data['valeur4'] = $object->getValeur4();
        }
        if ($object->isInitialized('bValeur4') && null !== $object->getBValeur4()) {
            $data['bValeur4'] = $object->getBValeur4();
        }
        if ($object->isInitialized('valeur5') && null !== $object->getValeur5()) {
            $data['valeur5'] = $object->getValeur5();
        }
        if ($object->isInitialized('bValeur5') && null !== $object->getBValeur5()) {
            $data['bValeur5'] = $object->getBValeur5();
        }
        if ($object->isInitialized('commentaire') && null !== $object->getCommentaire()) {
            $data['commentaire'] = $object->getCommentaire();
        }
        if ($object->isInitialized('absenceRectificative') && null !== $object->getAbsenceRectificative()) {
            $data['absenceRectificative'] = $object->getAbsenceRectificative();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\SalarieAbsence' => false];
    }
}
