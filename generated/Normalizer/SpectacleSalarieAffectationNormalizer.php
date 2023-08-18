<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SpectacleSalarieAffectation;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SpectacleSalarieAffectationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\SpectacleSalarieAffectation' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof SpectacleSalarieAffectation;
    }

    /**
     * @param mixed|null $format
     * @param mixed      $data
     * @param mixed      $class
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new SpectacleSalarieAffectation();
        if (\array_key_exists('tauxHoraire', $data) && \is_int($data['tauxHoraire'])) {
            $data['tauxHoraire'] = (float) $data['tauxHoraire'];
        }
        if (\array_key_exists('nbH', $data) && \is_int($data['nbH'])) {
            $data['nbH'] = (float) $data['nbH'];
        }
        if (\array_key_exists('nbCachets', $data) && \is_int($data['nbCachets'])) {
            $data['nbCachets'] = (float) $data['nbCachets'];
        }
        if (\array_key_exists('puCachet', $data) && \is_int($data['puCachet'])) {
            $data['puCachet'] = (float) $data['puCachet'];
        }
        if (\array_key_exists('nbJours', $data) && \is_int($data['nbJours'])) {
            $data['nbJours'] = (float) $data['nbJours'];
        }
        if (\array_key_exists('nbHRepet', $data) && \is_int($data['nbHRepet'])) {
            $data['nbHRepet'] = (float) $data['nbHRepet'];
        }
        if (\array_key_exists('mtHRepet', $data) && \is_int($data['mtHRepet'])) {
            $data['mtHRepet'] = (float) $data['mtHRepet'];
        }
        if (\array_key_exists('hLibreValeur1', $data) && \is_int($data['hLibreValeur1'])) {
            $data['hLibreValeur1'] = (float) $data['hLibreValeur1'];
        }
        if (\array_key_exists('hLibreValeur2', $data) && \is_int($data['hLibreValeur2'])) {
            $data['hLibreValeur2'] = (float) $data['hLibreValeur2'];
        }
        if (\array_key_exists('hLibreValeur3', $data) && \is_int($data['hLibreValeur3'])) {
            $data['hLibreValeur3'] = (float) $data['hLibreValeur3'];
        }
        if (\array_key_exists('hLibreValeur4', $data) && \is_int($data['hLibreValeur4'])) {
            $data['hLibreValeur4'] = (float) $data['hLibreValeur4'];
        }
        if (\array_key_exists('hLibreValeur5', $data) && \is_int($data['hLibreValeur5'])) {
            $data['hLibreValeur5'] = (float) $data['hLibreValeur5'];
        }
        if (\array_key_exists('hLibreValeur6', $data) && \is_int($data['hLibreValeur6'])) {
            $data['hLibreValeur6'] = (float) $data['hLibreValeur6'];
        }
        if (\array_key_exists('variableValeur1', $data) && \is_int($data['variableValeur1'])) {
            $data['variableValeur1'] = (float) $data['variableValeur1'];
        }
        if (\array_key_exists('variableValeur2', $data) && \is_int($data['variableValeur2'])) {
            $data['variableValeur2'] = (float) $data['variableValeur2'];
        }
        if (\array_key_exists('variableValeur3', $data) && \is_int($data['variableValeur3'])) {
            $data['variableValeur3'] = (float) $data['variableValeur3'];
        }
        if (\array_key_exists('variableValeur4', $data) && \is_int($data['variableValeur4'])) {
            $data['variableValeur4'] = (float) $data['variableValeur4'];
        }
        if (\array_key_exists('variableValeur5', $data) && \is_int($data['variableValeur5'])) {
            $data['variableValeur5'] = (float) $data['variableValeur5'];
        }
        if (\array_key_exists('variableValeur6', $data) && \is_int($data['variableValeur6'])) {
            $data['variableValeur6'] = (float) $data['variableValeur6'];
        }
        if (\array_key_exists('variableValeur7', $data) && \is_int($data['variableValeur7'])) {
            $data['variableValeur7'] = (float) $data['variableValeur7'];
        }
        if (\array_key_exists('variableValeur8', $data) && \is_int($data['variableValeur8'])) {
            $data['variableValeur8'] = (float) $data['variableValeur8'];
        }
        if (\array_key_exists('variableValeur9', $data) && \is_int($data['variableValeur9'])) {
            $data['variableValeur9'] = (float) $data['variableValeur9'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('dateDebut', $data) && null !== $data['dateDebut']) {
            $object->setDateDebut(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['dateDebut']));
        } elseif (\array_key_exists('dateDebut', $data) && null === $data['dateDebut']) {
            $object->setDateDebut(null);
        }
        if (\array_key_exists('dateFin', $data) && null !== $data['dateFin']) {
            $object->setDateFin(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['dateFin']));
        } elseif (\array_key_exists('dateFin', $data) && null === $data['dateFin']) {
            $object->setDateFin(null);
        }
        if (\array_key_exists('numeroObjet', $data) && null !== $data['numeroObjet']) {
            $object->setNumeroObjet($data['numeroObjet']);
        } elseif (\array_key_exists('numeroObjet', $data) && null === $data['numeroObjet']) {
            $object->setNumeroObjet(null);
        }
        if (\array_key_exists('referenceExterneSpectacle', $data) && null !== $data['referenceExterneSpectacle']) {
            $object->setReferenceExterneSpectacle($data['referenceExterneSpectacle']);
        } elseif (\array_key_exists('referenceExterneSpectacle', $data) && null === $data['referenceExterneSpectacle']) {
            $object->setReferenceExterneSpectacle(null);
        }
        if (\array_key_exists('aemInitiale', $data) && null !== $data['aemInitiale']) {
            $object->setAemInitiale($data['aemInitiale']);
        } elseif (\array_key_exists('aemInitiale', $data) && null === $data['aemInitiale']) {
            $object->setAemInitiale(null);
        }
        if (\array_key_exists('aemComplementaire', $data) && null !== $data['aemComplementaire']) {
            $object->setAemComplementaire($data['aemComplementaire']);
        } elseif (\array_key_exists('aemComplementaire', $data) && null === $data['aemComplementaire']) {
            $object->setAemComplementaire(null);
        }
        if (\array_key_exists('dateDebut_AEMInitiale', $data) && null !== $data['dateDebut_AEMInitiale']) {
            $object->setDateDebutAEMInitiale(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['dateDebut_AEMInitiale']));
        } elseif (\array_key_exists('dateDebut_AEMInitiale', $data) && null === $data['dateDebut_AEMInitiale']) {
            $object->setDateDebutAEMInitiale(null);
        }
        if (\array_key_exists('dateFin_AEMInitiale', $data) && null !== $data['dateFin_AEMInitiale']) {
            $object->setDateFinAEMInitiale(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['dateFin_AEMInitiale']));
        } elseif (\array_key_exists('dateFin_AEMInitiale', $data) && null === $data['dateFin_AEMInitiale']) {
            $object->setDateFinAEMInitiale(null);
        }
        if (\array_key_exists('docsFinContrat', $data) && null !== $data['docsFinContrat']) {
            $object->setDocsFinContrat($data['docsFinContrat']);
        } elseif (\array_key_exists('docsFinContrat', $data) && null === $data['docsFinContrat']) {
            $object->setDocsFinContrat(null);
        }
        if (\array_key_exists('tauxHoraire', $data) && null !== $data['tauxHoraire']) {
            $object->setTauxHoraire($data['tauxHoraire']);
        } elseif (\array_key_exists('tauxHoraire', $data) && null === $data['tauxHoraire']) {
            $object->setTauxHoraire(null);
        }
        if (\array_key_exists('nbH', $data) && null !== $data['nbH']) {
            $object->setNbH($data['nbH']);
        } elseif (\array_key_exists('nbH', $data) && null === $data['nbH']) {
            $object->setNbH(null);
        }
        if (\array_key_exists('nbCachets', $data) && null !== $data['nbCachets']) {
            $object->setNbCachets($data['nbCachets']);
        } elseif (\array_key_exists('nbCachets', $data) && null === $data['nbCachets']) {
            $object->setNbCachets(null);
        }
        if (\array_key_exists('puCachet', $data) && null !== $data['puCachet']) {
            $object->setPuCachet($data['puCachet']);
        } elseif (\array_key_exists('puCachet', $data) && null === $data['puCachet']) {
            $object->setPuCachet(null);
        }
        if (\array_key_exists('typeCachet', $data) && null !== $data['typeCachet']) {
            $object->setTypeCachet($data['typeCachet']);
        } elseif (\array_key_exists('typeCachet', $data) && null === $data['typeCachet']) {
            $object->setTypeCachet(null);
        }
        if (\array_key_exists('montantNet', $data) && null !== $data['montantNet']) {
            $object->setMontantNet($data['montantNet']);
        } elseif (\array_key_exists('montantNet', $data) && null === $data['montantNet']) {
            $object->setMontantNet(null);
        }
        if (\array_key_exists('montantCoutGlobal', $data) && null !== $data['montantCoutGlobal']) {
            $object->setMontantCoutGlobal($data['montantCoutGlobal']);
        } elseif (\array_key_exists('montantCoutGlobal', $data) && null === $data['montantCoutGlobal']) {
            $object->setMontantCoutGlobal(null);
        }
        if (\array_key_exists('nbJours', $data) && null !== $data['nbJours']) {
            $object->setNbJours($data['nbJours']);
        } elseif (\array_key_exists('nbJours', $data) && null === $data['nbJours']) {
            $object->setNbJours(null);
        }
        if (\array_key_exists('nbHRepet', $data) && null !== $data['nbHRepet']) {
            $object->setNbHRepet($data['nbHRepet']);
        } elseif (\array_key_exists('nbHRepet', $data) && null === $data['nbHRepet']) {
            $object->setNbHRepet(null);
        }
        if (\array_key_exists('mtHRepet', $data) && null !== $data['mtHRepet']) {
            $object->setMtHRepet($data['mtHRepet']);
        } elseif (\array_key_exists('mtHRepet', $data) && null === $data['mtHRepet']) {
            $object->setMtHRepet(null);
        }
        if (\array_key_exists('hLibreCode1', $data) && null !== $data['hLibreCode1']) {
            $object->setHLibreCode1($data['hLibreCode1']);
        } elseif (\array_key_exists('hLibreCode1', $data) && null === $data['hLibreCode1']) {
            $object->setHLibreCode1(null);
        }
        if (\array_key_exists('hLibreValeur1', $data) && null !== $data['hLibreValeur1']) {
            $object->setHLibreValeur1($data['hLibreValeur1']);
        } elseif (\array_key_exists('hLibreValeur1', $data) && null === $data['hLibreValeur1']) {
            $object->setHLibreValeur1(null);
        }
        if (\array_key_exists('hLibreCode2', $data) && null !== $data['hLibreCode2']) {
            $object->setHLibreCode2($data['hLibreCode2']);
        } elseif (\array_key_exists('hLibreCode2', $data) && null === $data['hLibreCode2']) {
            $object->setHLibreCode2(null);
        }
        if (\array_key_exists('hLibreValeur2', $data) && null !== $data['hLibreValeur2']) {
            $object->setHLibreValeur2($data['hLibreValeur2']);
        } elseif (\array_key_exists('hLibreValeur2', $data) && null === $data['hLibreValeur2']) {
            $object->setHLibreValeur2(null);
        }
        if (\array_key_exists('hLibreCode3', $data) && null !== $data['hLibreCode3']) {
            $object->setHLibreCode3($data['hLibreCode3']);
        } elseif (\array_key_exists('hLibreCode3', $data) && null === $data['hLibreCode3']) {
            $object->setHLibreCode3(null);
        }
        if (\array_key_exists('hLibreValeur3', $data) && null !== $data['hLibreValeur3']) {
            $object->setHLibreValeur3($data['hLibreValeur3']);
        } elseif (\array_key_exists('hLibreValeur3', $data) && null === $data['hLibreValeur3']) {
            $object->setHLibreValeur3(null);
        }
        if (\array_key_exists('hLibreCode4', $data) && null !== $data['hLibreCode4']) {
            $object->setHLibreCode4($data['hLibreCode4']);
        } elseif (\array_key_exists('hLibreCode4', $data) && null === $data['hLibreCode4']) {
            $object->setHLibreCode4(null);
        }
        if (\array_key_exists('hLibreValeur4', $data) && null !== $data['hLibreValeur4']) {
            $object->setHLibreValeur4($data['hLibreValeur4']);
        } elseif (\array_key_exists('hLibreValeur4', $data) && null === $data['hLibreValeur4']) {
            $object->setHLibreValeur4(null);
        }
        if (\array_key_exists('hLibreCode5', $data) && null !== $data['hLibreCode5']) {
            $object->setHLibreCode5($data['hLibreCode5']);
        } elseif (\array_key_exists('hLibreCode5', $data) && null === $data['hLibreCode5']) {
            $object->setHLibreCode5(null);
        }
        if (\array_key_exists('hLibreValeur5', $data) && null !== $data['hLibreValeur5']) {
            $object->setHLibreValeur5($data['hLibreValeur5']);
        } elseif (\array_key_exists('hLibreValeur5', $data) && null === $data['hLibreValeur5']) {
            $object->setHLibreValeur5(null);
        }
        if (\array_key_exists('hLibreCode6', $data) && null !== $data['hLibreCode6']) {
            $object->setHLibreCode6($data['hLibreCode6']);
        } elseif (\array_key_exists('hLibreCode6', $data) && null === $data['hLibreCode6']) {
            $object->setHLibreCode6(null);
        }
        if (\array_key_exists('hLibreValeur6', $data) && null !== $data['hLibreValeur6']) {
            $object->setHLibreValeur6($data['hLibreValeur6']);
        } elseif (\array_key_exists('hLibreValeur6', $data) && null === $data['hLibreValeur6']) {
            $object->setHLibreValeur6(null);
        }
        if (\array_key_exists('variableCode1', $data) && null !== $data['variableCode1']) {
            $object->setVariableCode1($data['variableCode1']);
        } elseif (\array_key_exists('variableCode1', $data) && null === $data['variableCode1']) {
            $object->setVariableCode1(null);
        }
        if (\array_key_exists('variableValeur1', $data) && null !== $data['variableValeur1']) {
            $object->setVariableValeur1($data['variableValeur1']);
        } elseif (\array_key_exists('variableValeur1', $data) && null === $data['variableValeur1']) {
            $object->setVariableValeur1(null);
        }
        if (\array_key_exists('variableCode2', $data) && null !== $data['variableCode2']) {
            $object->setVariableCode2($data['variableCode2']);
        } elseif (\array_key_exists('variableCode2', $data) && null === $data['variableCode2']) {
            $object->setVariableCode2(null);
        }
        if (\array_key_exists('variableValeur2', $data) && null !== $data['variableValeur2']) {
            $object->setVariableValeur2($data['variableValeur2']);
        } elseif (\array_key_exists('variableValeur2', $data) && null === $data['variableValeur2']) {
            $object->setVariableValeur2(null);
        }
        if (\array_key_exists('variableCode3', $data) && null !== $data['variableCode3']) {
            $object->setVariableCode3($data['variableCode3']);
        } elseif (\array_key_exists('variableCode3', $data) && null === $data['variableCode3']) {
            $object->setVariableCode3(null);
        }
        if (\array_key_exists('variableValeur3', $data) && null !== $data['variableValeur3']) {
            $object->setVariableValeur3($data['variableValeur3']);
        } elseif (\array_key_exists('variableValeur3', $data) && null === $data['variableValeur3']) {
            $object->setVariableValeur3(null);
        }
        if (\array_key_exists('variableCode4', $data) && null !== $data['variableCode4']) {
            $object->setVariableCode4($data['variableCode4']);
        } elseif (\array_key_exists('variableCode4', $data) && null === $data['variableCode4']) {
            $object->setVariableCode4(null);
        }
        if (\array_key_exists('variableValeur4', $data) && null !== $data['variableValeur4']) {
            $object->setVariableValeur4($data['variableValeur4']);
        } elseif (\array_key_exists('variableValeur4', $data) && null === $data['variableValeur4']) {
            $object->setVariableValeur4(null);
        }
        if (\array_key_exists('variableCode5', $data) && null !== $data['variableCode5']) {
            $object->setVariableCode5($data['variableCode5']);
        } elseif (\array_key_exists('variableCode5', $data) && null === $data['variableCode5']) {
            $object->setVariableCode5(null);
        }
        if (\array_key_exists('variableValeur5', $data) && null !== $data['variableValeur5']) {
            $object->setVariableValeur5($data['variableValeur5']);
        } elseif (\array_key_exists('variableValeur5', $data) && null === $data['variableValeur5']) {
            $object->setVariableValeur5(null);
        }
        if (\array_key_exists('variableCode6', $data) && null !== $data['variableCode6']) {
            $object->setVariableCode6($data['variableCode6']);
        } elseif (\array_key_exists('variableCode6', $data) && null === $data['variableCode6']) {
            $object->setVariableCode6(null);
        }
        if (\array_key_exists('variableValeur6', $data) && null !== $data['variableValeur6']) {
            $object->setVariableValeur6($data['variableValeur6']);
        } elseif (\array_key_exists('variableValeur6', $data) && null === $data['variableValeur6']) {
            $object->setVariableValeur6(null);
        }
        if (\array_key_exists('variableCode7', $data) && null !== $data['variableCode7']) {
            $object->setVariableCode7($data['variableCode7']);
        } elseif (\array_key_exists('variableCode7', $data) && null === $data['variableCode7']) {
            $object->setVariableCode7(null);
        }
        if (\array_key_exists('variableValeur7', $data) && null !== $data['variableValeur7']) {
            $object->setVariableValeur7($data['variableValeur7']);
        } elseif (\array_key_exists('variableValeur7', $data) && null === $data['variableValeur7']) {
            $object->setVariableValeur7(null);
        }
        if (\array_key_exists('variableCode8', $data) && null !== $data['variableCode8']) {
            $object->setVariableCode8($data['variableCode8']);
        } elseif (\array_key_exists('variableCode8', $data) && null === $data['variableCode8']) {
            $object->setVariableCode8(null);
        }
        if (\array_key_exists('variableValeur8', $data) && null !== $data['variableValeur8']) {
            $object->setVariableValeur8($data['variableValeur8']);
        } elseif (\array_key_exists('variableValeur8', $data) && null === $data['variableValeur8']) {
            $object->setVariableValeur8(null);
        }
        if (\array_key_exists('variableCode9', $data) && null !== $data['variableCode9']) {
            $object->setVariableCode9($data['variableCode9']);
        } elseif (\array_key_exists('variableCode9', $data) && null === $data['variableCode9']) {
            $object->setVariableCode9(null);
        }
        if (\array_key_exists('variableValeur9', $data) && null !== $data['variableValeur9']) {
            $object->setVariableValeur9($data['variableValeur9']);
        } elseif (\array_key_exists('variableValeur9', $data) && null === $data['variableValeur9']) {
            $object->setVariableValeur9(null);
        }
        if (\array_key_exists('affectationAnalytique', $data) && null !== $data['affectationAnalytique']) {
            $object->setAffectationAnalytique($data['affectationAnalytique']);
        } elseif (\array_key_exists('affectationAnalytique', $data) && null === $data['affectationAnalytique']) {
            $object->setAffectationAnalytique(null);
        }
        if (\array_key_exists('affectationAnalytique2', $data) && null !== $data['affectationAnalytique2']) {
            $object->setAffectationAnalytique2($data['affectationAnalytique2']);
        } elseif (\array_key_exists('affectationAnalytique2', $data) && null === $data['affectationAnalytique2']) {
            $object->setAffectationAnalytique2(null);
        }
        if (\array_key_exists('affectationAnalytique3', $data) && null !== $data['affectationAnalytique3']) {
            $object->setAffectationAnalytique3($data['affectationAnalytique3']);
        } elseif (\array_key_exists('affectationAnalytique3', $data) && null === $data['affectationAnalytique3']) {
            $object->setAffectationAnalytique3(null);
        }

        return $object;
    }

    /**
     * @param mixed|null $format
     * @param mixed      $object
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('dateDebut') && null !== $object->getDateDebut()) {
            $data['dateDebut'] = $object->getDateDebut()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('dateFin') && null !== $object->getDateFin()) {
            $data['dateFin'] = $object->getDateFin()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('numeroObjet') && null !== $object->getNumeroObjet()) {
            $data['numeroObjet'] = $object->getNumeroObjet();
        }
        if ($object->isInitialized('referenceExterneSpectacle') && null !== $object->getReferenceExterneSpectacle()) {
            $data['referenceExterneSpectacle'] = $object->getReferenceExterneSpectacle();
        }
        if ($object->isInitialized('aemInitiale') && null !== $object->getAemInitiale()) {
            $data['aemInitiale'] = $object->getAemInitiale();
        }
        if ($object->isInitialized('aemComplementaire') && null !== $object->getAemComplementaire()) {
            $data['aemComplementaire'] = $object->getAemComplementaire();
        }
        if ($object->isInitialized('dateDebutAEMInitiale') && null !== $object->getDateDebutAEMInitiale()) {
            $data['dateDebut_AEMInitiale'] = $object->getDateDebutAEMInitiale()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('dateFinAEMInitiale') && null !== $object->getDateFinAEMInitiale()) {
            $data['dateFin_AEMInitiale'] = $object->getDateFinAEMInitiale()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('docsFinContrat') && null !== $object->getDocsFinContrat()) {
            $data['docsFinContrat'] = $object->getDocsFinContrat();
        }
        if ($object->isInitialized('tauxHoraire') && null !== $object->getTauxHoraire()) {
            $data['tauxHoraire'] = $object->getTauxHoraire();
        }
        if ($object->isInitialized('nbH') && null !== $object->getNbH()) {
            $data['nbH'] = $object->getNbH();
        }
        if ($object->isInitialized('nbCachets') && null !== $object->getNbCachets()) {
            $data['nbCachets'] = $object->getNbCachets();
        }
        if ($object->isInitialized('puCachet') && null !== $object->getPuCachet()) {
            $data['puCachet'] = $object->getPuCachet();
        }
        if ($object->isInitialized('typeCachet') && null !== $object->getTypeCachet()) {
            $data['typeCachet'] = $object->getTypeCachet();
        }
        if ($object->isInitialized('montantNet') && null !== $object->getMontantNet()) {
            $data['montantNet'] = $object->getMontantNet();
        }
        if ($object->isInitialized('montantCoutGlobal') && null !== $object->getMontantCoutGlobal()) {
            $data['montantCoutGlobal'] = $object->getMontantCoutGlobal();
        }
        if ($object->isInitialized('nbJours') && null !== $object->getNbJours()) {
            $data['nbJours'] = $object->getNbJours();
        }
        if ($object->isInitialized('nbHRepet') && null !== $object->getNbHRepet()) {
            $data['nbHRepet'] = $object->getNbHRepet();
        }
        if ($object->isInitialized('mtHRepet') && null !== $object->getMtHRepet()) {
            $data['mtHRepet'] = $object->getMtHRepet();
        }
        if ($object->isInitialized('hLibreCode1') && null !== $object->getHLibreCode1()) {
            $data['hLibreCode1'] = $object->getHLibreCode1();
        }
        if ($object->isInitialized('hLibreValeur1') && null !== $object->getHLibreValeur1()) {
            $data['hLibreValeur1'] = $object->getHLibreValeur1();
        }
        if ($object->isInitialized('hLibreCode2') && null !== $object->getHLibreCode2()) {
            $data['hLibreCode2'] = $object->getHLibreCode2();
        }
        if ($object->isInitialized('hLibreValeur2') && null !== $object->getHLibreValeur2()) {
            $data['hLibreValeur2'] = $object->getHLibreValeur2();
        }
        if ($object->isInitialized('hLibreCode3') && null !== $object->getHLibreCode3()) {
            $data['hLibreCode3'] = $object->getHLibreCode3();
        }
        if ($object->isInitialized('hLibreValeur3') && null !== $object->getHLibreValeur3()) {
            $data['hLibreValeur3'] = $object->getHLibreValeur3();
        }
        if ($object->isInitialized('hLibreCode4') && null !== $object->getHLibreCode4()) {
            $data['hLibreCode4'] = $object->getHLibreCode4();
        }
        if ($object->isInitialized('hLibreValeur4') && null !== $object->getHLibreValeur4()) {
            $data['hLibreValeur4'] = $object->getHLibreValeur4();
        }
        if ($object->isInitialized('hLibreCode5') && null !== $object->getHLibreCode5()) {
            $data['hLibreCode5'] = $object->getHLibreCode5();
        }
        if ($object->isInitialized('hLibreValeur5') && null !== $object->getHLibreValeur5()) {
            $data['hLibreValeur5'] = $object->getHLibreValeur5();
        }
        if ($object->isInitialized('hLibreCode6') && null !== $object->getHLibreCode6()) {
            $data['hLibreCode6'] = $object->getHLibreCode6();
        }
        if ($object->isInitialized('hLibreValeur6') && null !== $object->getHLibreValeur6()) {
            $data['hLibreValeur6'] = $object->getHLibreValeur6();
        }
        if ($object->isInitialized('variableCode1') && null !== $object->getVariableCode1()) {
            $data['variableCode1'] = $object->getVariableCode1();
        }
        if ($object->isInitialized('variableValeur1') && null !== $object->getVariableValeur1()) {
            $data['variableValeur1'] = $object->getVariableValeur1();
        }
        if ($object->isInitialized('variableCode2') && null !== $object->getVariableCode2()) {
            $data['variableCode2'] = $object->getVariableCode2();
        }
        if ($object->isInitialized('variableValeur2') && null !== $object->getVariableValeur2()) {
            $data['variableValeur2'] = $object->getVariableValeur2();
        }
        if ($object->isInitialized('variableCode3') && null !== $object->getVariableCode3()) {
            $data['variableCode3'] = $object->getVariableCode3();
        }
        if ($object->isInitialized('variableValeur3') && null !== $object->getVariableValeur3()) {
            $data['variableValeur3'] = $object->getVariableValeur3();
        }
        if ($object->isInitialized('variableCode4') && null !== $object->getVariableCode4()) {
            $data['variableCode4'] = $object->getVariableCode4();
        }
        if ($object->isInitialized('variableValeur4') && null !== $object->getVariableValeur4()) {
            $data['variableValeur4'] = $object->getVariableValeur4();
        }
        if ($object->isInitialized('variableCode5') && null !== $object->getVariableCode5()) {
            $data['variableCode5'] = $object->getVariableCode5();
        }
        if ($object->isInitialized('variableValeur5') && null !== $object->getVariableValeur5()) {
            $data['variableValeur5'] = $object->getVariableValeur5();
        }
        if ($object->isInitialized('variableCode6') && null !== $object->getVariableCode6()) {
            $data['variableCode6'] = $object->getVariableCode6();
        }
        if ($object->isInitialized('variableValeur6') && null !== $object->getVariableValeur6()) {
            $data['variableValeur6'] = $object->getVariableValeur6();
        }
        if ($object->isInitialized('variableCode7') && null !== $object->getVariableCode7()) {
            $data['variableCode7'] = $object->getVariableCode7();
        }
        if ($object->isInitialized('variableValeur7') && null !== $object->getVariableValeur7()) {
            $data['variableValeur7'] = $object->getVariableValeur7();
        }
        if ($object->isInitialized('variableCode8') && null !== $object->getVariableCode8()) {
            $data['variableCode8'] = $object->getVariableCode8();
        }
        if ($object->isInitialized('variableValeur8') && null !== $object->getVariableValeur8()) {
            $data['variableValeur8'] = $object->getVariableValeur8();
        }
        if ($object->isInitialized('variableCode9') && null !== $object->getVariableCode9()) {
            $data['variableCode9'] = $object->getVariableCode9();
        }
        if ($object->isInitialized('variableValeur9') && null !== $object->getVariableValeur9()) {
            $data['variableValeur9'] = $object->getVariableValeur9();
        }
        if ($object->isInitialized('affectationAnalytique') && null !== $object->getAffectationAnalytique()) {
            $data['affectationAnalytique'] = $object->getAffectationAnalytique();
        }
        if ($object->isInitialized('affectationAnalytique2') && null !== $object->getAffectationAnalytique2()) {
            $data['affectationAnalytique2'] = $object->getAffectationAnalytique2();
        }
        if ($object->isInitialized('affectationAnalytique3') && null !== $object->getAffectationAnalytique3()) {
            $data['affectationAnalytique3'] = $object->getAffectationAnalytique3();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\SpectacleSalarieAffectation' => false];
    }
}
