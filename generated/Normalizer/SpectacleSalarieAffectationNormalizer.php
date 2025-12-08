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

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return SpectacleSalarieAffectation::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && SpectacleSalarieAffectation::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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

        if (\array_key_exists('aemInitiale', $data) && \is_int($data['aemInitiale'])) {
            $data['aemInitiale'] = (bool) $data['aemInitiale'];
        }

        if (\array_key_exists('aemComplementaire', $data) && \is_int($data['aemComplementaire'])) {
            $data['aemComplementaire'] = (bool) $data['aemComplementaire'];
        }

        if (\array_key_exists('docsFinContrat', $data) && \is_int($data['docsFinContrat'])) {
            $data['docsFinContrat'] = (bool) $data['docsFinContrat'];
        }

        if (\array_key_exists('montantNet', $data) && \is_int($data['montantNet'])) {
            $data['montantNet'] = (bool) $data['montantNet'];
        }

        if (\array_key_exists('montantCoutGlobal', $data) && \is_int($data['montantCoutGlobal'])) {
            $data['montantCoutGlobal'] = (bool) $data['montantCoutGlobal'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('dateDebut', $data) && null !== $data['dateDebut']) {
            $object->setDateDebut(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateDebut']));
        } elseif (\array_key_exists('dateDebut', $data) && null === $data['dateDebut']) {
            $object->setDateDebut(null);
        }

        if (\array_key_exists('dateFin', $data) && null !== $data['dateFin']) {
            $object->setDateFin(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateFin']));
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
            $object->setDateDebutAEMInitiale(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateDebut_AEMInitiale']));
        } elseif (\array_key_exists('dateDebut_AEMInitiale', $data) && null === $data['dateDebut_AEMInitiale']) {
            $object->setDateDebutAEMInitiale(null);
        }

        if (\array_key_exists('dateFin_AEMInitiale', $data) && null !== $data['dateFin_AEMInitiale']) {
            $object->setDateFinAEMInitiale(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateFin_AEMInitiale']));
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

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('dateDebut') && null !== $data->getDateDebut()) {
            $dataArray['dateDebut'] = $data->getDateDebut()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('dateFin') && null !== $data->getDateFin()) {
            $dataArray['dateFin'] = $data->getDateFin()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('numeroObjet') && null !== $data->getNumeroObjet()) {
            $dataArray['numeroObjet'] = $data->getNumeroObjet();
        }

        if ($data->isInitialized('referenceExterneSpectacle') && null !== $data->getReferenceExterneSpectacle()) {
            $dataArray['referenceExterneSpectacle'] = $data->getReferenceExterneSpectacle();
        }

        if ($data->isInitialized('aemInitiale') && null !== $data->getAemInitiale()) {
            $dataArray['aemInitiale'] = $data->getAemInitiale();
        }

        if ($data->isInitialized('aemComplementaire') && null !== $data->getAemComplementaire()) {
            $dataArray['aemComplementaire'] = $data->getAemComplementaire();
        }

        if ($data->isInitialized('dateDebutAEMInitiale') && null !== $data->getDateDebutAEMInitiale()) {
            $dataArray['dateDebut_AEMInitiale'] = $data->getDateDebutAEMInitiale()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('dateFinAEMInitiale') && null !== $data->getDateFinAEMInitiale()) {
            $dataArray['dateFin_AEMInitiale'] = $data->getDateFinAEMInitiale()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('docsFinContrat') && null !== $data->getDocsFinContrat()) {
            $dataArray['docsFinContrat'] = $data->getDocsFinContrat();
        }

        if ($data->isInitialized('tauxHoraire') && null !== $data->getTauxHoraire()) {
            $dataArray['tauxHoraire'] = $data->getTauxHoraire();
        }

        if ($data->isInitialized('nbH') && null !== $data->getNbH()) {
            $dataArray['nbH'] = $data->getNbH();
        }

        if ($data->isInitialized('nbCachets') && null !== $data->getNbCachets()) {
            $dataArray['nbCachets'] = $data->getNbCachets();
        }

        if ($data->isInitialized('puCachet') && null !== $data->getPuCachet()) {
            $dataArray['puCachet'] = $data->getPuCachet();
        }

        if ($data->isInitialized('typeCachet') && null !== $data->getTypeCachet()) {
            $dataArray['typeCachet'] = $data->getTypeCachet();
        }

        if ($data->isInitialized('montantNet') && null !== $data->getMontantNet()) {
            $dataArray['montantNet'] = $data->getMontantNet();
        }

        if ($data->isInitialized('montantCoutGlobal') && null !== $data->getMontantCoutGlobal()) {
            $dataArray['montantCoutGlobal'] = $data->getMontantCoutGlobal();
        }

        if ($data->isInitialized('nbJours') && null !== $data->getNbJours()) {
            $dataArray['nbJours'] = $data->getNbJours();
        }

        if ($data->isInitialized('nbHRepet') && null !== $data->getNbHRepet()) {
            $dataArray['nbHRepet'] = $data->getNbHRepet();
        }

        if ($data->isInitialized('mtHRepet') && null !== $data->getMtHRepet()) {
            $dataArray['mtHRepet'] = $data->getMtHRepet();
        }

        if ($data->isInitialized('hLibreCode1') && null !== $data->getHLibreCode1()) {
            $dataArray['hLibreCode1'] = $data->getHLibreCode1();
        }

        if ($data->isInitialized('hLibreValeur1') && null !== $data->getHLibreValeur1()) {
            $dataArray['hLibreValeur1'] = $data->getHLibreValeur1();
        }

        if ($data->isInitialized('hLibreCode2') && null !== $data->getHLibreCode2()) {
            $dataArray['hLibreCode2'] = $data->getHLibreCode2();
        }

        if ($data->isInitialized('hLibreValeur2') && null !== $data->getHLibreValeur2()) {
            $dataArray['hLibreValeur2'] = $data->getHLibreValeur2();
        }

        if ($data->isInitialized('hLibreCode3') && null !== $data->getHLibreCode3()) {
            $dataArray['hLibreCode3'] = $data->getHLibreCode3();
        }

        if ($data->isInitialized('hLibreValeur3') && null !== $data->getHLibreValeur3()) {
            $dataArray['hLibreValeur3'] = $data->getHLibreValeur3();
        }

        if ($data->isInitialized('hLibreCode4') && null !== $data->getHLibreCode4()) {
            $dataArray['hLibreCode4'] = $data->getHLibreCode4();
        }

        if ($data->isInitialized('hLibreValeur4') && null !== $data->getHLibreValeur4()) {
            $dataArray['hLibreValeur4'] = $data->getHLibreValeur4();
        }

        if ($data->isInitialized('hLibreCode5') && null !== $data->getHLibreCode5()) {
            $dataArray['hLibreCode5'] = $data->getHLibreCode5();
        }

        if ($data->isInitialized('hLibreValeur5') && null !== $data->getHLibreValeur5()) {
            $dataArray['hLibreValeur5'] = $data->getHLibreValeur5();
        }

        if ($data->isInitialized('hLibreCode6') && null !== $data->getHLibreCode6()) {
            $dataArray['hLibreCode6'] = $data->getHLibreCode6();
        }

        if ($data->isInitialized('hLibreValeur6') && null !== $data->getHLibreValeur6()) {
            $dataArray['hLibreValeur6'] = $data->getHLibreValeur6();
        }

        if ($data->isInitialized('variableCode1') && null !== $data->getVariableCode1()) {
            $dataArray['variableCode1'] = $data->getVariableCode1();
        }

        if ($data->isInitialized('variableValeur1') && null !== $data->getVariableValeur1()) {
            $dataArray['variableValeur1'] = $data->getVariableValeur1();
        }

        if ($data->isInitialized('variableCode2') && null !== $data->getVariableCode2()) {
            $dataArray['variableCode2'] = $data->getVariableCode2();
        }

        if ($data->isInitialized('variableValeur2') && null !== $data->getVariableValeur2()) {
            $dataArray['variableValeur2'] = $data->getVariableValeur2();
        }

        if ($data->isInitialized('variableCode3') && null !== $data->getVariableCode3()) {
            $dataArray['variableCode3'] = $data->getVariableCode3();
        }

        if ($data->isInitialized('variableValeur3') && null !== $data->getVariableValeur3()) {
            $dataArray['variableValeur3'] = $data->getVariableValeur3();
        }

        if ($data->isInitialized('variableCode4') && null !== $data->getVariableCode4()) {
            $dataArray['variableCode4'] = $data->getVariableCode4();
        }

        if ($data->isInitialized('variableValeur4') && null !== $data->getVariableValeur4()) {
            $dataArray['variableValeur4'] = $data->getVariableValeur4();
        }

        if ($data->isInitialized('variableCode5') && null !== $data->getVariableCode5()) {
            $dataArray['variableCode5'] = $data->getVariableCode5();
        }

        if ($data->isInitialized('variableValeur5') && null !== $data->getVariableValeur5()) {
            $dataArray['variableValeur5'] = $data->getVariableValeur5();
        }

        if ($data->isInitialized('variableCode6') && null !== $data->getVariableCode6()) {
            $dataArray['variableCode6'] = $data->getVariableCode6();
        }

        if ($data->isInitialized('variableValeur6') && null !== $data->getVariableValeur6()) {
            $dataArray['variableValeur6'] = $data->getVariableValeur6();
        }

        if ($data->isInitialized('variableCode7') && null !== $data->getVariableCode7()) {
            $dataArray['variableCode7'] = $data->getVariableCode7();
        }

        if ($data->isInitialized('variableValeur7') && null !== $data->getVariableValeur7()) {
            $dataArray['variableValeur7'] = $data->getVariableValeur7();
        }

        if ($data->isInitialized('variableCode8') && null !== $data->getVariableCode8()) {
            $dataArray['variableCode8'] = $data->getVariableCode8();
        }

        if ($data->isInitialized('variableValeur8') && null !== $data->getVariableValeur8()) {
            $dataArray['variableValeur8'] = $data->getVariableValeur8();
        }

        if ($data->isInitialized('variableCode9') && null !== $data->getVariableCode9()) {
            $dataArray['variableCode9'] = $data->getVariableCode9();
        }

        if ($data->isInitialized('variableValeur9') && null !== $data->getVariableValeur9()) {
            $dataArray['variableValeur9'] = $data->getVariableValeur9();
        }

        if ($data->isInitialized('affectationAnalytique') && null !== $data->getAffectationAnalytique()) {
            $dataArray['affectationAnalytique'] = $data->getAffectationAnalytique();
        }

        if ($data->isInitialized('affectationAnalytique2') && null !== $data->getAffectationAnalytique2()) {
            $dataArray['affectationAnalytique2'] = $data->getAffectationAnalytique2();
        }

        if ($data->isInitialized('affectationAnalytique3') && null !== $data->getAffectationAnalytique3()) {
            $dataArray['affectationAnalytique3'] = $data->getAffectationAnalytique3();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [SpectacleSalarieAffectation::class => false];
    }
}
