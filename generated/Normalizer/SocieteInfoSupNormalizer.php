<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SocieteInfoSup;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SocieteInfoSupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\SocieteInfoSup' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof SocieteInfoSup;
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
        $object = new SocieteInfoSup();
        if (\array_key_exists('clI_MethodeSuiviCPAcqMois', $data) && \is_int($data['clI_MethodeSuiviCPAcqMois'])) {
            $data['clI_MethodeSuiviCPAcqMois'] = (float) $data['clI_MethodeSuiviCPAcqMois'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('bCLI_AffilieCCP', $data) && null !== $data['bCLI_AffilieCCP']) {
            $object->setBCLIAffilieCCP($data['bCLI_AffilieCCP']);
        } elseif (\array_key_exists('bCLI_AffilieCCP', $data) && null === $data['bCLI_AffilieCCP']) {
            $object->setBCLIAffilieCCP(null);
        }
        if (\array_key_exists('clI_AffilieCCP', $data) && null !== $data['clI_AffilieCCP']) {
            $object->setClIAffilieCCP($data['clI_AffilieCCP']);
        } elseif (\array_key_exists('clI_AffilieCCP', $data) && null === $data['clI_AffilieCCP']) {
            $object->setClIAffilieCCP(null);
        }
        if (\array_key_exists('bCLI_BaseCalculAnciennete', $data) && null !== $data['bCLI_BaseCalculAnciennete']) {
            $object->setBCLIBaseCalculAnciennete($data['bCLI_BaseCalculAnciennete']);
        } elseif (\array_key_exists('bCLI_BaseCalculAnciennete', $data) && null === $data['bCLI_BaseCalculAnciennete']) {
            $object->setBCLIBaseCalculAnciennete(null);
        }
        if (\array_key_exists('clI_BaseCalculAnciennete', $data) && null !== $data['clI_BaseCalculAnciennete']) {
            $object->setClIBaseCalculAnciennete($data['clI_BaseCalculAnciennete']);
        } elseif (\array_key_exists('clI_BaseCalculAnciennete', $data) && null === $data['clI_BaseCalculAnciennete']) {
            $object->setClIBaseCalculAnciennete(null);
        }
        if (\array_key_exists('bCLI_CalcAutoESInactif', $data) && null !== $data['bCLI_CalcAutoESInactif']) {
            $object->setBCLICalcAutoESInactif($data['bCLI_CalcAutoESInactif']);
        } elseif (\array_key_exists('bCLI_CalcAutoESInactif', $data) && null === $data['bCLI_CalcAutoESInactif']) {
            $object->setBCLICalcAutoESInactif(null);
        }
        if (\array_key_exists('clI_CalcAutoESInactif', $data) && null !== $data['clI_CalcAutoESInactif']) {
            $object->setClICalcAutoESInactif($data['clI_CalcAutoESInactif']);
        } elseif (\array_key_exists('clI_CalcAutoESInactif', $data) && null === $data['clI_CalcAutoESInactif']) {
            $object->setClICalcAutoESInactif(null);
        }
        if (\array_key_exists('bCLI_CalcAutoIJSSInactif', $data) && null !== $data['bCLI_CalcAutoIJSSInactif']) {
            $object->setBCLICalcAutoIJSSInactif($data['bCLI_CalcAutoIJSSInactif']);
        } elseif (\array_key_exists('bCLI_CalcAutoIJSSInactif', $data) && null === $data['bCLI_CalcAutoIJSSInactif']) {
            $object->setBCLICalcAutoIJSSInactif(null);
        }
        if (\array_key_exists('clI_CalcAutoIJSSInactif', $data) && null !== $data['clI_CalcAutoIJSSInactif']) {
            $object->setClICalcAutoIJSSInactif($data['clI_CalcAutoIJSSInactif']);
        } elseif (\array_key_exists('clI_CalcAutoIJSSInactif', $data) && null === $data['clI_CalcAutoIJSSInactif']) {
            $object->setClICalcAutoIJSSInactif(null);
        }
        if (\array_key_exists('bCLI_CalcAutoMaintienInactif', $data) && null !== $data['bCLI_CalcAutoMaintienInactif']) {
            $object->setBCLICalcAutoMaintienInactif($data['bCLI_CalcAutoMaintienInactif']);
        } elseif (\array_key_exists('bCLI_CalcAutoMaintienInactif', $data) && null === $data['bCLI_CalcAutoMaintienInactif']) {
            $object->setBCLICalcAutoMaintienInactif(null);
        }
        if (\array_key_exists('clI_CalcAutoMaintienInactif', $data) && null !== $data['clI_CalcAutoMaintienInactif']) {
            $object->setClICalcAutoMaintienInactif($data['clI_CalcAutoMaintienInactif']);
        } elseif (\array_key_exists('clI_CalcAutoMaintienInactif', $data) && null === $data['clI_CalcAutoMaintienInactif']) {
            $object->setClICalcAutoMaintienInactif(null);
        }
        if (\array_key_exists('bCLI_CalcAutoRegulInactif', $data) && null !== $data['bCLI_CalcAutoRegulInactif']) {
            $object->setBCLICalcAutoRegulInactif($data['bCLI_CalcAutoRegulInactif']);
        } elseif (\array_key_exists('bCLI_CalcAutoRegulInactif', $data) && null === $data['bCLI_CalcAutoRegulInactif']) {
            $object->setBCLICalcAutoRegulInactif(null);
        }
        if (\array_key_exists('clI_CalcAutoRegulInactif', $data) && null !== $data['clI_CalcAutoRegulInactif']) {
            $object->setClICalcAutoRegulInactif($data['clI_CalcAutoRegulInactif']);
        } elseif (\array_key_exists('clI_CalcAutoRegulInactif', $data) && null === $data['clI_CalcAutoRegulInactif']) {
            $object->setClICalcAutoRegulInactif(null);
        }
        if (\array_key_exists('bCLI_ChaineFabricationDateLimiteAbsences', $data) && null !== $data['bCLI_ChaineFabricationDateLimiteAbsences']) {
            $object->setBCLIChaineFabricationDateLimiteAbsences($data['bCLI_ChaineFabricationDateLimiteAbsences']);
        } elseif (\array_key_exists('bCLI_ChaineFabricationDateLimiteAbsences', $data) && null === $data['bCLI_ChaineFabricationDateLimiteAbsences']) {
            $object->setBCLIChaineFabricationDateLimiteAbsences(null);
        }
        if (\array_key_exists('clI_ChaineFabricationDateLimiteAbsences', $data) && null !== $data['clI_ChaineFabricationDateLimiteAbsences']) {
            $object->setClIChaineFabricationDateLimiteAbsences($data['clI_ChaineFabricationDateLimiteAbsences']);
        } elseif (\array_key_exists('clI_ChaineFabricationDateLimiteAbsences', $data) && null === $data['clI_ChaineFabricationDateLimiteAbsences']) {
            $object->setClIChaineFabricationDateLimiteAbsences(null);
        }
        if (\array_key_exists('bCLI_ConfSalActive', $data) && null !== $data['bCLI_ConfSalActive']) {
            $object->setBCLIConfSalActive($data['bCLI_ConfSalActive']);
        } elseif (\array_key_exists('bCLI_ConfSalActive', $data) && null === $data['bCLI_ConfSalActive']) {
            $object->setBCLIConfSalActive(null);
        }
        if (\array_key_exists('clI_ConfSalActive', $data) && null !== $data['clI_ConfSalActive']) {
            $object->setClIConfSalActive($data['clI_ConfSalActive']);
        } elseif (\array_key_exists('clI_ConfSalActive', $data) && null === $data['clI_ConfSalActive']) {
            $object->setClIConfSalActive(null);
        }
        if (\array_key_exists('bCLI_DFPTepa', $data) && null !== $data['bCLI_DFPTepa']) {
            $object->setBCLIDFPTepa($data['bCLI_DFPTepa']);
        } elseif (\array_key_exists('bCLI_DFPTepa', $data) && null === $data['bCLI_DFPTepa']) {
            $object->setBCLIDFPTepa(null);
        }
        if (\array_key_exists('clI_DFPTepa', $data) && null !== $data['clI_DFPTepa']) {
            $object->setClIDFPTepa($data['clI_DFPTepa']);
        } elseif (\array_key_exists('clI_DFPTepa', $data) && null === $data['clI_DFPTepa']) {
            $object->setClIDFPTepa(null);
        }
        if (\array_key_exists('bCLI_DFPTepaDebut', $data) && null !== $data['bCLI_DFPTepaDebut']) {
            $object->setBCLIDFPTepaDebut($data['bCLI_DFPTepaDebut']);
        } elseif (\array_key_exists('bCLI_DFPTepaDebut', $data) && null === $data['bCLI_DFPTepaDebut']) {
            $object->setBCLIDFPTepaDebut(null);
        }
        if (\array_key_exists('clI_DFPTepaDebut', $data) && null !== $data['clI_DFPTepaDebut']) {
            $object->setClIDFPTepaDebut(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['clI_DFPTepaDebut']));
        } elseif (\array_key_exists('clI_DFPTepaDebut', $data) && null === $data['clI_DFPTepaDebut']) {
            $object->setClIDFPTepaDebut(null);
        }
        if (\array_key_exists('bCLI_DtDebChangePaieDecalee', $data) && null !== $data['bCLI_DtDebChangePaieDecalee']) {
            $object->setBCLIDtDebChangePaieDecalee($data['bCLI_DtDebChangePaieDecalee']);
        } elseif (\array_key_exists('bCLI_DtDebChangePaieDecalee', $data) && null === $data['bCLI_DtDebChangePaieDecalee']) {
            $object->setBCLIDtDebChangePaieDecalee(null);
        }
        if (\array_key_exists('clI_DtDebChangePaieDecalee', $data) && null !== $data['clI_DtDebChangePaieDecalee']) {
            $object->setClIDtDebChangePaieDecalee(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['clI_DtDebChangePaieDecalee']));
        } elseif (\array_key_exists('clI_DtDebChangePaieDecalee', $data) && null === $data['clI_DtDebChangePaieDecalee']) {
            $object->setClIDtDebChangePaieDecalee(null);
        }
        if (\array_key_exists('bCLI_DtDebExerciceComptable', $data) && null !== $data['bCLI_DtDebExerciceComptable']) {
            $object->setBCLIDtDebExerciceComptable($data['bCLI_DtDebExerciceComptable']);
        } elseif (\array_key_exists('bCLI_DtDebExerciceComptable', $data) && null === $data['bCLI_DtDebExerciceComptable']) {
            $object->setBCLIDtDebExerciceComptable(null);
        }
        if (\array_key_exists('clI_DtDebExerciceComptable', $data) && null !== $data['clI_DtDebExerciceComptable']) {
            $object->setClIDtDebExerciceComptable(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['clI_DtDebExerciceComptable']));
        } elseif (\array_key_exists('clI_DtDebExerciceComptable', $data) && null === $data['clI_DtDebExerciceComptable']) {
            $object->setClIDtDebExerciceComptable(null);
        }
        if (\array_key_exists('bCLI_DtFinExerciceComptable', $data) && null !== $data['bCLI_DtFinExerciceComptable']) {
            $object->setBCLIDtFinExerciceComptable($data['bCLI_DtFinExerciceComptable']);
        } elseif (\array_key_exists('bCLI_DtFinExerciceComptable', $data) && null === $data['bCLI_DtFinExerciceComptable']) {
            $object->setBCLIDtFinExerciceComptable(null);
        }
        if (\array_key_exists('clI_DtFinExerciceComptable', $data) && null !== $data['clI_DtFinExerciceComptable']) {
            $object->setClIDtFinExerciceComptable(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['clI_DtFinExerciceComptable']));
        } elseif (\array_key_exists('clI_DtFinExerciceComptable', $data) && null === $data['clI_DtFinExerciceComptable']) {
            $object->setClIDtFinExerciceComptable(null);
        }
        if (\array_key_exists('bCLI_EmployeurCivilite', $data) && null !== $data['bCLI_EmployeurCivilite']) {
            $object->setBCLIEmployeurCivilite($data['bCLI_EmployeurCivilite']);
        } elseif (\array_key_exists('bCLI_EmployeurCivilite', $data) && null === $data['bCLI_EmployeurCivilite']) {
            $object->setBCLIEmployeurCivilite(null);
        }
        if (\array_key_exists('clI_EmployeurCivilite', $data) && null !== $data['clI_EmployeurCivilite']) {
            $object->setClIEmployeurCivilite($data['clI_EmployeurCivilite']);
        } elseif (\array_key_exists('clI_EmployeurCivilite', $data) && null === $data['clI_EmployeurCivilite']) {
            $object->setClIEmployeurCivilite(null);
        }
        if (\array_key_exists('bCLI_EmployeurNom', $data) && null !== $data['bCLI_EmployeurNom']) {
            $object->setBCLIEmployeurNom($data['bCLI_EmployeurNom']);
        } elseif (\array_key_exists('bCLI_EmployeurNom', $data) && null === $data['bCLI_EmployeurNom']) {
            $object->setBCLIEmployeurNom(null);
        }
        if (\array_key_exists('clI_EmployeurNom', $data) && null !== $data['clI_EmployeurNom']) {
            $object->setClIEmployeurNom($data['clI_EmployeurNom']);
        } elseif (\array_key_exists('clI_EmployeurNom', $data) && null === $data['clI_EmployeurNom']) {
            $object->setClIEmployeurNom(null);
        }
        if (\array_key_exists('bCLI_EmployeurPrenom', $data) && null !== $data['bCLI_EmployeurPrenom']) {
            $object->setBCLIEmployeurPrenom($data['bCLI_EmployeurPrenom']);
        } elseif (\array_key_exists('bCLI_EmployeurPrenom', $data) && null === $data['bCLI_EmployeurPrenom']) {
            $object->setBCLIEmployeurPrenom(null);
        }
        if (\array_key_exists('clI_EmployeurPrenom', $data) && null !== $data['clI_EmployeurPrenom']) {
            $object->setClIEmployeurPrenom($data['clI_EmployeurPrenom']);
        } elseif (\array_key_exists('clI_EmployeurPrenom', $data) && null === $data['clI_EmployeurPrenom']) {
            $object->setClIEmployeurPrenom(null);
        }
        if (\array_key_exists('bCLI_EmployeurQualite', $data) && null !== $data['bCLI_EmployeurQualite']) {
            $object->setBCLIEmployeurQualite($data['bCLI_EmployeurQualite']);
        } elseif (\array_key_exists('bCLI_EmployeurQualite', $data) && null === $data['bCLI_EmployeurQualite']) {
            $object->setBCLIEmployeurQualite(null);
        }
        if (\array_key_exists('clI_EmployeurQualite', $data) && null !== $data['clI_EmployeurQualite']) {
            $object->setClIEmployeurQualite($data['clI_EmployeurQualite']);
        } elseif (\array_key_exists('clI_EmployeurQualite', $data) && null === $data['clI_EmployeurQualite']) {
            $object->setClIEmployeurQualite(null);
        }
        if (\array_key_exists('bCLI_EmployeurQualiteAutre', $data) && null !== $data['bCLI_EmployeurQualiteAutre']) {
            $object->setBCLIEmployeurQualiteAutre($data['bCLI_EmployeurQualiteAutre']);
        } elseif (\array_key_exists('bCLI_EmployeurQualiteAutre', $data) && null === $data['bCLI_EmployeurQualiteAutre']) {
            $object->setBCLIEmployeurQualiteAutre(null);
        }
        if (\array_key_exists('clI_EmployeurQualiteAutre', $data) && null !== $data['clI_EmployeurQualiteAutre']) {
            $object->setClIEmployeurQualiteAutre($data['clI_EmployeurQualiteAutre']);
        } elseif (\array_key_exists('clI_EmployeurQualiteAutre', $data) && null === $data['clI_EmployeurQualiteAutre']) {
            $object->setClIEmployeurQualiteAutre(null);
        }
        if (\array_key_exists('bCLI_EtatDossierPaie', $data) && null !== $data['bCLI_EtatDossierPaie']) {
            $object->setBCLIEtatDossierPaie($data['bCLI_EtatDossierPaie']);
        } elseif (\array_key_exists('bCLI_EtatDossierPaie', $data) && null === $data['bCLI_EtatDossierPaie']) {
            $object->setBCLIEtatDossierPaie(null);
        }
        if (\array_key_exists('clI_EtatDossierPaie', $data) && null !== $data['clI_EtatDossierPaie']) {
            $object->setClIEtatDossierPaie($data['clI_EtatDossierPaie']);
        } elseif (\array_key_exists('clI_EtatDossierPaie', $data) && null === $data['clI_EtatDossierPaie']) {
            $object->setClIEtatDossierPaie(null);
        }
        if (\array_key_exists('bCLI_FormaProfTranche', $data) && null !== $data['bCLI_FormaProfTranche']) {
            $object->setBCLIFormaProfTranche($data['bCLI_FormaProfTranche']);
        } elseif (\array_key_exists('bCLI_FormaProfTranche', $data) && null === $data['bCLI_FormaProfTranche']) {
            $object->setBCLIFormaProfTranche(null);
        }
        if (\array_key_exists('clI_FormaProfTranche', $data) && null !== $data['clI_FormaProfTranche']) {
            $object->setClIFormaProfTranche($data['clI_FormaProfTranche']);
        } elseif (\array_key_exists('clI_FormaProfTranche', $data) && null === $data['clI_FormaProfTranche']) {
            $object->setClIFormaProfTranche(null);
        }
        if (\array_key_exists('bCLI_FormaProfTrancheAnnee', $data) && null !== $data['bCLI_FormaProfTrancheAnnee']) {
            $object->setBCLIFormaProfTrancheAnnee($data['bCLI_FormaProfTrancheAnnee']);
        } elseif (\array_key_exists('bCLI_FormaProfTrancheAnnee', $data) && null === $data['bCLI_FormaProfTrancheAnnee']) {
            $object->setBCLIFormaProfTrancheAnnee(null);
        }
        if (\array_key_exists('clI_FormaProfTrancheAnnee', $data) && null !== $data['clI_FormaProfTrancheAnnee']) {
            $object->setClIFormaProfTrancheAnnee(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['clI_FormaProfTrancheAnnee']));
        } elseif (\array_key_exists('clI_FormaProfTrancheAnnee', $data) && null === $data['clI_FormaProfTrancheAnnee']) {
            $object->setClIFormaProfTrancheAnnee(null);
        }
        if (\array_key_exists('bCLI_FormaProfTrancheAnnee2', $data) && null !== $data['bCLI_FormaProfTrancheAnnee2']) {
            $object->setBCLIFormaProfTrancheAnnee2($data['bCLI_FormaProfTrancheAnnee2']);
        } elseif (\array_key_exists('bCLI_FormaProfTrancheAnnee2', $data) && null === $data['bCLI_FormaProfTrancheAnnee2']) {
            $object->setBCLIFormaProfTrancheAnnee2(null);
        }
        if (\array_key_exists('clI_FormaProfTrancheAnnee2', $data) && null !== $data['clI_FormaProfTrancheAnnee2']) {
            $object->setClIFormaProfTrancheAnnee2(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['clI_FormaProfTrancheAnnee2']));
        } elseif (\array_key_exists('clI_FormaProfTrancheAnnee2', $data) && null === $data['clI_FormaProfTrancheAnnee2']) {
            $object->setClIFormaProfTrancheAnnee2(null);
        }
        if (\array_key_exists('bCLI_FormaProfTrancheAnnee3', $data) && null !== $data['bCLI_FormaProfTrancheAnnee3']) {
            $object->setBCLIFormaProfTrancheAnnee3($data['bCLI_FormaProfTrancheAnnee3']);
        } elseif (\array_key_exists('bCLI_FormaProfTrancheAnnee3', $data) && null === $data['bCLI_FormaProfTrancheAnnee3']) {
            $object->setBCLIFormaProfTrancheAnnee3(null);
        }
        if (\array_key_exists('clI_FormaProfTrancheAnnee3', $data) && null !== $data['clI_FormaProfTrancheAnnee3']) {
            $object->setClIFormaProfTrancheAnnee3(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['clI_FormaProfTrancheAnnee3']));
        } elseif (\array_key_exists('clI_FormaProfTrancheAnnee3', $data) && null === $data['clI_FormaProfTrancheAnnee3']) {
            $object->setClIFormaProfTrancheAnnee3(null);
        }
        if (\array_key_exists('bCLI_FormaProfTrancheAnnee4', $data) && null !== $data['bCLI_FormaProfTrancheAnnee4']) {
            $object->setBCLIFormaProfTrancheAnnee4($data['bCLI_FormaProfTrancheAnnee4']);
        } elseif (\array_key_exists('bCLI_FormaProfTrancheAnnee4', $data) && null === $data['bCLI_FormaProfTrancheAnnee4']) {
            $object->setBCLIFormaProfTrancheAnnee4(null);
        }
        if (\array_key_exists('clI_FormaProfTrancheAnnee4', $data) && null !== $data['clI_FormaProfTrancheAnnee4']) {
            $object->setClIFormaProfTrancheAnnee4(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['clI_FormaProfTrancheAnnee4']));
        } elseif (\array_key_exists('clI_FormaProfTrancheAnnee4', $data) && null === $data['clI_FormaProfTrancheAnnee4']) {
            $object->setClIFormaProfTrancheAnnee4(null);
        }
        if (\array_key_exists('bCLI_GestionCPExclEnJours', $data) && null !== $data['bCLI_GestionCPExclEnJours']) {
            $object->setBCLIGestionCPExclEnJours($data['bCLI_GestionCPExclEnJours']);
        } elseif (\array_key_exists('bCLI_GestionCPExclEnJours', $data) && null === $data['bCLI_GestionCPExclEnJours']) {
            $object->setBCLIGestionCPExclEnJours(null);
        }
        if (\array_key_exists('clI_GestionCPExclEnJours', $data) && null !== $data['clI_GestionCPExclEnJours']) {
            $object->setClIGestionCPExclEnJours($data['clI_GestionCPExclEnJours']);
        } elseif (\array_key_exists('clI_GestionCPExclEnJours', $data) && null === $data['clI_GestionCPExclEnJours']) {
            $object->setClIGestionCPExclEnJours(null);
        }
        if (\array_key_exists('bCLI_JourVersementSalaires', $data) && null !== $data['bCLI_JourVersementSalaires']) {
            $object->setBCLIJourVersementSalaires($data['bCLI_JourVersementSalaires']);
        } elseif (\array_key_exists('bCLI_JourVersementSalaires', $data) && null === $data['bCLI_JourVersementSalaires']) {
            $object->setBCLIJourVersementSalaires(null);
        }
        if (\array_key_exists('clI_JourVersementSalaires', $data) && null !== $data['clI_JourVersementSalaires']) {
            $object->setClIJourVersementSalaires($data['clI_JourVersementSalaires']);
        } elseif (\array_key_exists('clI_JourVersementSalaires', $data) && null === $data['clI_JourVersementSalaires']) {
            $object->setClIJourVersementSalaires(null);
        }
        if (\array_key_exists('bCLI_ListesTriSalaries', $data) && null !== $data['bCLI_ListesTriSalaries']) {
            $object->setBCLIListesTriSalaries($data['bCLI_ListesTriSalaries']);
        } elseif (\array_key_exists('bCLI_ListesTriSalaries', $data) && null === $data['bCLI_ListesTriSalaries']) {
            $object->setBCLIListesTriSalaries(null);
        }
        if (\array_key_exists('clI_ListesTriSalaries', $data) && null !== $data['clI_ListesTriSalaries']) {
            $object->setClIListesTriSalaries($data['clI_ListesTriSalaries']);
        } elseif (\array_key_exists('clI_ListesTriSalaries', $data) && null === $data['clI_ListesTriSalaries']) {
            $object->setClIListesTriSalaries(null);
        }
        if (\array_key_exists('bCLI_MatriculeAuto', $data) && null !== $data['bCLI_MatriculeAuto']) {
            $object->setBCLIMatriculeAuto($data['bCLI_MatriculeAuto']);
        } elseif (\array_key_exists('bCLI_MatriculeAuto', $data) && null === $data['bCLI_MatriculeAuto']) {
            $object->setBCLIMatriculeAuto(null);
        }
        if (\array_key_exists('clI_MatriculeAuto', $data) && null !== $data['clI_MatriculeAuto']) {
            $object->setClIMatriculeAuto($data['clI_MatriculeAuto']);
        } elseif (\array_key_exists('clI_MatriculeAuto', $data) && null === $data['clI_MatriculeAuto']) {
            $object->setClIMatriculeAuto(null);
        }
        if (\array_key_exists('bCLI_MatriculeLongueur', $data) && null !== $data['bCLI_MatriculeLongueur']) {
            $object->setBCLIMatriculeLongueur($data['bCLI_MatriculeLongueur']);
        } elseif (\array_key_exists('bCLI_MatriculeLongueur', $data) && null === $data['bCLI_MatriculeLongueur']) {
            $object->setBCLIMatriculeLongueur(null);
        }
        if (\array_key_exists('clI_MatriculeLongueur', $data) && null !== $data['clI_MatriculeLongueur']) {
            $object->setClIMatriculeLongueur($data['clI_MatriculeLongueur']);
        } elseif (\array_key_exists('clI_MatriculeLongueur', $data) && null === $data['clI_MatriculeLongueur']) {
            $object->setClIMatriculeLongueur(null);
        }
        if (\array_key_exists('bCLI_MethodeArbitrage', $data) && null !== $data['bCLI_MethodeArbitrage']) {
            $object->setBCLIMethodeArbitrage($data['bCLI_MethodeArbitrage']);
        } elseif (\array_key_exists('bCLI_MethodeArbitrage', $data) && null === $data['bCLI_MethodeArbitrage']) {
            $object->setBCLIMethodeArbitrage(null);
        }
        if (\array_key_exists('clI_MethodeArbitrage', $data) && null !== $data['clI_MethodeArbitrage']) {
            $object->setClIMethodeArbitrage($data['clI_MethodeArbitrage']);
        } elseif (\array_key_exists('clI_MethodeArbitrage', $data) && null === $data['clI_MethodeArbitrage']) {
            $object->setClIMethodeArbitrage(null);
        }
        if (\array_key_exists('bCLI_MethodeCalculMaintien', $data) && null !== $data['bCLI_MethodeCalculMaintien']) {
            $object->setBCLIMethodeCalculMaintien($data['bCLI_MethodeCalculMaintien']);
        } elseif (\array_key_exists('bCLI_MethodeCalculMaintien', $data) && null === $data['bCLI_MethodeCalculMaintien']) {
            $object->setBCLIMethodeCalculMaintien(null);
        }
        if (\array_key_exists('clI_MethodeCalculMaintien', $data) && null !== $data['clI_MethodeCalculMaintien']) {
            $object->setClIMethodeCalculMaintien($data['clI_MethodeCalculMaintien']);
        } elseif (\array_key_exists('clI_MethodeCalculMaintien', $data) && null === $data['clI_MethodeCalculMaintien']) {
            $object->setClIMethodeCalculMaintien(null);
        }
        if (\array_key_exists('bCLI_MethodeCalculMaintienNbM', $data) && null !== $data['bCLI_MethodeCalculMaintienNbM']) {
            $object->setBCLIMethodeCalculMaintienNbM($data['bCLI_MethodeCalculMaintienNbM']);
        } elseif (\array_key_exists('bCLI_MethodeCalculMaintienNbM', $data) && null === $data['bCLI_MethodeCalculMaintienNbM']) {
            $object->setBCLIMethodeCalculMaintienNbM(null);
        }
        if (\array_key_exists('clI_MethodeCalculMaintienNbM', $data) && null !== $data['clI_MethodeCalculMaintienNbM']) {
            $object->setClIMethodeCalculMaintienNbM($data['clI_MethodeCalculMaintienNbM']);
        } elseif (\array_key_exists('clI_MethodeCalculMaintienNbM', $data) && null === $data['clI_MethodeCalculMaintienNbM']) {
            $object->setClIMethodeCalculMaintienNbM(null);
        }
        if (\array_key_exists('bCLI_MethodeRetenueCP', $data) && null !== $data['bCLI_MethodeRetenueCP']) {
            $object->setBCLIMethodeRetenueCP($data['bCLI_MethodeRetenueCP']);
        } elseif (\array_key_exists('bCLI_MethodeRetenueCP', $data) && null === $data['bCLI_MethodeRetenueCP']) {
            $object->setBCLIMethodeRetenueCP(null);
        }
        if (\array_key_exists('clI_MethodeRetenueCP', $data) && null !== $data['clI_MethodeRetenueCP']) {
            $object->setClIMethodeRetenueCP($data['clI_MethodeRetenueCP']);
        } elseif (\array_key_exists('clI_MethodeRetenueCP', $data) && null === $data['clI_MethodeRetenueCP']) {
            $object->setClIMethodeRetenueCP(null);
        }
        if (\array_key_exists('bCLI_MethodesSuiviAbsencesDansEta', $data) && null !== $data['bCLI_MethodesSuiviAbsencesDansEta']) {
            $object->setBCLIMethodesSuiviAbsencesDansEta($data['bCLI_MethodesSuiviAbsencesDansEta']);
        } elseif (\array_key_exists('bCLI_MethodesSuiviAbsencesDansEta', $data) && null === $data['bCLI_MethodesSuiviAbsencesDansEta']) {
            $object->setBCLIMethodesSuiviAbsencesDansEta(null);
        }
        if (\array_key_exists('clI_MethodesSuiviAbsencesDansEta', $data) && null !== $data['clI_MethodesSuiviAbsencesDansEta']) {
            $object->setClIMethodesSuiviAbsencesDansEta($data['clI_MethodesSuiviAbsencesDansEta']);
        } elseif (\array_key_exists('clI_MethodesSuiviAbsencesDansEta', $data) && null === $data['clI_MethodesSuiviAbsencesDansEta']) {
            $object->setClIMethodesSuiviAbsencesDansEta(null);
        }
        if (\array_key_exists('bCLI_MethodeSuiviAbsences', $data) && null !== $data['bCLI_MethodeSuiviAbsences']) {
            $object->setBCLIMethodeSuiviAbsences($data['bCLI_MethodeSuiviAbsences']);
        } elseif (\array_key_exists('bCLI_MethodeSuiviAbsences', $data) && null === $data['bCLI_MethodeSuiviAbsences']) {
            $object->setBCLIMethodeSuiviAbsences(null);
        }
        if (\array_key_exists('clI_MethodeSuiviAbsences', $data) && null !== $data['clI_MethodeSuiviAbsences']) {
            $object->setClIMethodeSuiviAbsences($data['clI_MethodeSuiviAbsences']);
        } elseif (\array_key_exists('clI_MethodeSuiviAbsences', $data) && null === $data['clI_MethodeSuiviAbsences']) {
            $object->setClIMethodeSuiviAbsences(null);
        }
        if (\array_key_exists('bCLI_MethodeSuiviAbsencesDeductionHM', $data) && null !== $data['bCLI_MethodeSuiviAbsencesDeductionHM']) {
            $object->setBCLIMethodeSuiviAbsencesDeductionHM($data['bCLI_MethodeSuiviAbsencesDeductionHM']);
        } elseif (\array_key_exists('bCLI_MethodeSuiviAbsencesDeductionHM', $data) && null === $data['bCLI_MethodeSuiviAbsencesDeductionHM']) {
            $object->setBCLIMethodeSuiviAbsencesDeductionHM(null);
        }
        if (\array_key_exists('clI_MethodeSuiviAbsencesDeductionHM', $data) && null !== $data['clI_MethodeSuiviAbsencesDeductionHM']) {
            $object->setClIMethodeSuiviAbsencesDeductionHM($data['clI_MethodeSuiviAbsencesDeductionHM']);
        } elseif (\array_key_exists('clI_MethodeSuiviAbsencesDeductionHM', $data) && null === $data['clI_MethodeSuiviAbsencesDeductionHM']) {
            $object->setClIMethodeSuiviAbsencesDeductionHM(null);
        }
        if (\array_key_exists('bCLI_MethodeSuiviAbsencesJC', $data) && null !== $data['bCLI_MethodeSuiviAbsencesJC']) {
            $object->setBCLIMethodeSuiviAbsencesJC($data['bCLI_MethodeSuiviAbsencesJC']);
        } elseif (\array_key_exists('bCLI_MethodeSuiviAbsencesJC', $data) && null === $data['bCLI_MethodeSuiviAbsencesJC']) {
            $object->setBCLIMethodeSuiviAbsencesJC(null);
        }
        if (\array_key_exists('clI_MethodeSuiviAbsencesJC', $data) && null !== $data['clI_MethodeSuiviAbsencesJC']) {
            $object->setClIMethodeSuiviAbsencesJC($data['clI_MethodeSuiviAbsencesJC']);
        } elseif (\array_key_exists('clI_MethodeSuiviAbsencesJC', $data) && null === $data['clI_MethodeSuiviAbsencesJC']) {
            $object->setClIMethodeSuiviAbsencesJC(null);
        }
        if (\array_key_exists('bCLI_MethodeSuiviCP', $data) && null !== $data['bCLI_MethodeSuiviCP']) {
            $object->setBCLIMethodeSuiviCP($data['bCLI_MethodeSuiviCP']);
        } elseif (\array_key_exists('bCLI_MethodeSuiviCP', $data) && null === $data['bCLI_MethodeSuiviCP']) {
            $object->setBCLIMethodeSuiviCP(null);
        }
        if (\array_key_exists('clI_MethodeSuiviCP', $data) && null !== $data['clI_MethodeSuiviCP']) {
            $object->setClIMethodeSuiviCP($data['clI_MethodeSuiviCP']);
        } elseif (\array_key_exists('clI_MethodeSuiviCP', $data) && null === $data['clI_MethodeSuiviCP']) {
            $object->setClIMethodeSuiviCP(null);
        }
        if (\array_key_exists('bCLI_MethodeSuiviCPAcqMois', $data) && null !== $data['bCLI_MethodeSuiviCPAcqMois']) {
            $object->setBCLIMethodeSuiviCPAcqMois($data['bCLI_MethodeSuiviCPAcqMois']);
        } elseif (\array_key_exists('bCLI_MethodeSuiviCPAcqMois', $data) && null === $data['bCLI_MethodeSuiviCPAcqMois']) {
            $object->setBCLIMethodeSuiviCPAcqMois(null);
        }
        if (\array_key_exists('clI_MethodeSuiviCPAcqMois', $data) && null !== $data['clI_MethodeSuiviCPAcqMois']) {
            $object->setClIMethodeSuiviCPAcqMois($data['clI_MethodeSuiviCPAcqMois']);
        } elseif (\array_key_exists('clI_MethodeSuiviCPAcqMois', $data) && null === $data['clI_MethodeSuiviCPAcqMois']) {
            $object->setClIMethodeSuiviCPAcqMois(null);
        }
        if (\array_key_exists('bCLI_ModuleCTCDActif', $data) && null !== $data['bCLI_ModuleCTCDActif']) {
            $object->setBCLIModuleCTCDActif($data['bCLI_ModuleCTCDActif']);
        } elseif (\array_key_exists('bCLI_ModuleCTCDActif', $data) && null === $data['bCLI_ModuleCTCDActif']) {
            $object->setBCLIModuleCTCDActif(null);
        }
        if (\array_key_exists('clI_ModuleCTCDActif', $data) && null !== $data['clI_ModuleCTCDActif']) {
            $object->setClIModuleCTCDActif($data['clI_ModuleCTCDActif']);
        } elseif (\array_key_exists('clI_ModuleCTCDActif', $data) && null === $data['clI_ModuleCTCDActif']) {
            $object->setClIModuleCTCDActif(null);
        }
        if (\array_key_exists('bCLI_MontagePaiePeriodeDebut', $data) && null !== $data['bCLI_MontagePaiePeriodeDebut']) {
            $object->setBCLIMontagePaiePeriodeDebut($data['bCLI_MontagePaiePeriodeDebut']);
        } elseif (\array_key_exists('bCLI_MontagePaiePeriodeDebut', $data) && null === $data['bCLI_MontagePaiePeriodeDebut']) {
            $object->setBCLIMontagePaiePeriodeDebut(null);
        }
        if (\array_key_exists('clI_MontagePaiePeriodeDebut', $data) && null !== $data['clI_MontagePaiePeriodeDebut']) {
            $object->setClIMontagePaiePeriodeDebut(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['clI_MontagePaiePeriodeDebut']));
        } elseif (\array_key_exists('clI_MontagePaiePeriodeDebut', $data) && null === $data['clI_MontagePaiePeriodeDebut']) {
            $object->setClIMontagePaiePeriodeDebut(null);
        }
        if (\array_key_exists('bCLI_PaieDecalee', $data) && null !== $data['bCLI_PaieDecalee']) {
            $object->setBCLIPaieDecalee($data['bCLI_PaieDecalee']);
        } elseif (\array_key_exists('bCLI_PaieDecalee', $data) && null === $data['bCLI_PaieDecalee']) {
            $object->setBCLIPaieDecalee(null);
        }
        if (\array_key_exists('clI_PaieDecalee', $data) && null !== $data['clI_PaieDecalee']) {
            $object->setClIPaieDecalee($data['clI_PaieDecalee']);
        } elseif (\array_key_exists('clI_PaieDecalee', $data) && null === $data['clI_PaieDecalee']) {
            $object->setClIPaieDecalee(null);
        }
        if (\array_key_exists('bCLI_PersonneAContacterMel', $data) && null !== $data['bCLI_PersonneAContacterMel']) {
            $object->setBCLIPersonneAContacterMel($data['bCLI_PersonneAContacterMel']);
        } elseif (\array_key_exists('bCLI_PersonneAContacterMel', $data) && null === $data['bCLI_PersonneAContacterMel']) {
            $object->setBCLIPersonneAContacterMel(null);
        }
        if (\array_key_exists('clI_PersonneAContacterMel', $data) && null !== $data['clI_PersonneAContacterMel']) {
            $object->setClIPersonneAContacterMel($data['clI_PersonneAContacterMel']);
        } elseif (\array_key_exists('clI_PersonneAContacterMel', $data) && null === $data['clI_PersonneAContacterMel']) {
            $object->setClIPersonneAContacterMel(null);
        }
        if (\array_key_exists('bCLI_PersonneAContacterNom', $data) && null !== $data['bCLI_PersonneAContacterNom']) {
            $object->setBCLIPersonneAContacterNom($data['bCLI_PersonneAContacterNom']);
        } elseif (\array_key_exists('bCLI_PersonneAContacterNom', $data) && null === $data['bCLI_PersonneAContacterNom']) {
            $object->setBCLIPersonneAContacterNom(null);
        }
        if (\array_key_exists('clI_PersonneAContacterNom', $data) && null !== $data['clI_PersonneAContacterNom']) {
            $object->setClIPersonneAContacterNom($data['clI_PersonneAContacterNom']);
        } elseif (\array_key_exists('clI_PersonneAContacterNom', $data) && null === $data['clI_PersonneAContacterNom']) {
            $object->setClIPersonneAContacterNom(null);
        }
        if (\array_key_exists('bCLI_PersonneAContacterPrenom', $data) && null !== $data['bCLI_PersonneAContacterPrenom']) {
            $object->setBCLIPersonneAContacterPrenom($data['bCLI_PersonneAContacterPrenom']);
        } elseif (\array_key_exists('bCLI_PersonneAContacterPrenom', $data) && null === $data['bCLI_PersonneAContacterPrenom']) {
            $object->setBCLIPersonneAContacterPrenom(null);
        }
        if (\array_key_exists('clI_PersonneAContacterPrenom', $data) && null !== $data['clI_PersonneAContacterPrenom']) {
            $object->setClIPersonneAContacterPrenom($data['clI_PersonneAContacterPrenom']);
        } elseif (\array_key_exists('clI_PersonneAContacterPrenom', $data) && null === $data['clI_PersonneAContacterPrenom']) {
            $object->setClIPersonneAContacterPrenom(null);
        }
        if (\array_key_exists('bCLI_PersonneAContacterTel', $data) && null !== $data['bCLI_PersonneAContacterTel']) {
            $object->setBCLIPersonneAContacterTel($data['bCLI_PersonneAContacterTel']);
        } elseif (\array_key_exists('bCLI_PersonneAContacterTel', $data) && null === $data['bCLI_PersonneAContacterTel']) {
            $object->setBCLIPersonneAContacterTel(null);
        }
        if (\array_key_exists('clI_PersonneAContacterTel', $data) && null !== $data['clI_PersonneAContacterTel']) {
            $object->setClIPersonneAContacterTel($data['clI_PersonneAContacterTel']);
        } elseif (\array_key_exists('clI_PersonneAContacterTel', $data) && null === $data['clI_PersonneAContacterTel']) {
            $object->setClIPersonneAContacterTel(null);
        }
        if (\array_key_exists('bCLI_ReductionFillon19', $data) && null !== $data['bCLI_ReductionFillon19']) {
            $object->setBCLIReductionFillon19($data['bCLI_ReductionFillon19']);
        } elseif (\array_key_exists('bCLI_ReductionFillon19', $data) && null === $data['bCLI_ReductionFillon19']) {
            $object->setBCLIReductionFillon19(null);
        }
        if (\array_key_exists('clI_ReductionFillon19', $data) && null !== $data['clI_ReductionFillon19']) {
            $object->setClIReductionFillon19($data['clI_ReductionFillon19']);
        } elseif (\array_key_exists('clI_ReductionFillon19', $data) && null === $data['clI_ReductionFillon19']) {
            $object->setClIReductionFillon19(null);
        }
        if (\array_key_exists('bCLI_ReductionFillon19Debut', $data) && null !== $data['bCLI_ReductionFillon19Debut']) {
            $object->setBCLIReductionFillon19Debut($data['bCLI_ReductionFillon19Debut']);
        } elseif (\array_key_exists('bCLI_ReductionFillon19Debut', $data) && null === $data['bCLI_ReductionFillon19Debut']) {
            $object->setBCLIReductionFillon19Debut(null);
        }
        if (\array_key_exists('clI_ReductionFillon19Debut', $data) && null !== $data['clI_ReductionFillon19Debut']) {
            $object->setClIReductionFillon19Debut(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['clI_ReductionFillon19Debut']));
        } elseif (\array_key_exists('clI_ReductionFillon19Debut', $data) && null === $data['clI_ReductionFillon19Debut']) {
            $object->setClIReductionFillon19Debut(null);
        }
        if (\array_key_exists('bCLI_SepaModeComptabilisation', $data) && null !== $data['bCLI_SepaModeComptabilisation']) {
            $object->setBCLISepaModeComptabilisation($data['bCLI_SepaModeComptabilisation']);
        } elseif (\array_key_exists('bCLI_SepaModeComptabilisation', $data) && null === $data['bCLI_SepaModeComptabilisation']) {
            $object->setBCLISepaModeComptabilisation(null);
        }
        if (\array_key_exists('clI_SepaModeComptabilisation', $data) && null !== $data['clI_SepaModeComptabilisation']) {
            $object->setClISepaModeComptabilisation($data['clI_SepaModeComptabilisation']);
        } elseif (\array_key_exists('clI_SepaModeComptabilisation', $data) && null === $data['clI_SepaModeComptabilisation']) {
            $object->setClISepaModeComptabilisation(null);
        }
        if (\array_key_exists('bCLI_SortieAppliJourVersementSalaires', $data) && null !== $data['bCLI_SortieAppliJourVersementSalaires']) {
            $object->setBCLISortieAppliJourVersementSalaires($data['bCLI_SortieAppliJourVersementSalaires']);
        } elseif (\array_key_exists('bCLI_SortieAppliJourVersementSalaires', $data) && null === $data['bCLI_SortieAppliJourVersementSalaires']) {
            $object->setBCLISortieAppliJourVersementSalaires(null);
        }
        if (\array_key_exists('clI_SortieAppliJourVersementSalaires', $data) && null !== $data['clI_SortieAppliJourVersementSalaires']) {
            $object->setClISortieAppliJourVersementSalaires($data['clI_SortieAppliJourVersementSalaires']);
        } elseif (\array_key_exists('clI_SortieAppliJourVersementSalaires', $data) && null === $data['clI_SortieAppliJourVersementSalaires']) {
            $object->setClISortieAppliJourVersementSalaires(null);
        }
        if (\array_key_exists('bCLI_SortieAppliModeReglementNormal', $data) && null !== $data['bCLI_SortieAppliModeReglementNormal']) {
            $object->setBCLISortieAppliModeReglementNormal($data['bCLI_SortieAppliModeReglementNormal']);
        } elseif (\array_key_exists('bCLI_SortieAppliModeReglementNormal', $data) && null === $data['bCLI_SortieAppliModeReglementNormal']) {
            $object->setBCLISortieAppliModeReglementNormal(null);
        }
        if (\array_key_exists('clI_SortieAppliModeReglementNormal', $data) && null !== $data['clI_SortieAppliModeReglementNormal']) {
            $object->setClISortieAppliModeReglementNormal($data['clI_SortieAppliModeReglementNormal']);
        } elseif (\array_key_exists('clI_SortieAppliModeReglementNormal', $data) && null === $data['clI_SortieAppliModeReglementNormal']) {
            $object->setClISortieAppliModeReglementNormal(null);
        }
        if (\array_key_exists('bCLI_SousMethodeSuiviAbsences', $data) && null !== $data['bCLI_SousMethodeSuiviAbsences']) {
            $object->setBCLISousMethodeSuiviAbsences($data['bCLI_SousMethodeSuiviAbsences']);
        } elseif (\array_key_exists('bCLI_SousMethodeSuiviAbsences', $data) && null === $data['bCLI_SousMethodeSuiviAbsences']) {
            $object->setBCLISousMethodeSuiviAbsences(null);
        }
        if (\array_key_exists('clI_SousMethodeSuiviAbsences', $data) && null !== $data['clI_SousMethodeSuiviAbsences']) {
            $object->setClISousMethodeSuiviAbsences($data['clI_SousMethodeSuiviAbsences']);
        } elseif (\array_key_exists('clI_SousMethodeSuiviAbsences', $data) && null === $data['clI_SousMethodeSuiviAbsences']) {
            $object->setClISousMethodeSuiviAbsences(null);
        }
        if (\array_key_exists('bCLI_SousMethodeSuiviAbsencesFJ', $data) && null !== $data['bCLI_SousMethodeSuiviAbsencesFJ']) {
            $object->setBCLISousMethodeSuiviAbsencesFJ($data['bCLI_SousMethodeSuiviAbsencesFJ']);
        } elseif (\array_key_exists('bCLI_SousMethodeSuiviAbsencesFJ', $data) && null === $data['bCLI_SousMethodeSuiviAbsencesFJ']) {
            $object->setBCLISousMethodeSuiviAbsencesFJ(null);
        }
        if (\array_key_exists('clI_SousMethodeSuiviAbsencesFJ', $data) && null !== $data['clI_SousMethodeSuiviAbsencesFJ']) {
            $object->setClISousMethodeSuiviAbsencesFJ($data['clI_SousMethodeSuiviAbsencesFJ']);
        } elseif (\array_key_exists('clI_SousMethodeSuiviAbsencesFJ', $data) && null === $data['clI_SousMethodeSuiviAbsencesFJ']) {
            $object->setClISousMethodeSuiviAbsencesFJ(null);
        }
        if (\array_key_exists('bCLI_Subrogation', $data) && null !== $data['bCLI_Subrogation']) {
            $object->setBCLISubrogation($data['bCLI_Subrogation']);
        } elseif (\array_key_exists('bCLI_Subrogation', $data) && null === $data['bCLI_Subrogation']) {
            $object->setBCLISubrogation(null);
        }
        if (\array_key_exists('clI_Subrogation', $data) && null !== $data['clI_Subrogation']) {
            $object->setClISubrogation($data['clI_Subrogation']);
        } elseif (\array_key_exists('clI_Subrogation', $data) && null === $data['clI_Subrogation']) {
            $object->setClISubrogation(null);
        }
        if (\array_key_exists('bCLI_SubrogationVersEtaPrincipal', $data) && null !== $data['bCLI_SubrogationVersEtaPrincipal']) {
            $object->setBCLISubrogationVersEtaPrincipal($data['bCLI_SubrogationVersEtaPrincipal']);
        } elseif (\array_key_exists('bCLI_SubrogationVersEtaPrincipal', $data) && null === $data['bCLI_SubrogationVersEtaPrincipal']) {
            $object->setBCLISubrogationVersEtaPrincipal(null);
        }
        if (\array_key_exists('clI_SubrogationVersEtaPrincipal', $data) && null !== $data['clI_SubrogationVersEtaPrincipal']) {
            $object->setClISubrogationVersEtaPrincipal($data['clI_SubrogationVersEtaPrincipal']);
        } elseif (\array_key_exists('clI_SubrogationVersEtaPrincipal', $data) && null === $data['clI_SubrogationVersEtaPrincipal']) {
            $object->setClISubrogationVersEtaPrincipal(null);
        }
        if (\array_key_exists('bCLI_TassageAbsencesJours', $data) && null !== $data['bCLI_TassageAbsencesJours']) {
            $object->setBCLITassageAbsencesJours($data['bCLI_TassageAbsencesJours']);
        } elseif (\array_key_exists('bCLI_TassageAbsencesJours', $data) && null === $data['bCLI_TassageAbsencesJours']) {
            $object->setBCLITassageAbsencesJours(null);
        }
        if (\array_key_exists('clI_TassageAbsencesJours', $data) && null !== $data['clI_TassageAbsencesJours']) {
            $object->setClITassageAbsencesJours($data['clI_TassageAbsencesJours']);
        } elseif (\array_key_exists('clI_TassageAbsencesJours', $data) && null === $data['clI_TassageAbsencesJours']) {
            $object->setClITassageAbsencesJours(null);
        }
        if (\array_key_exists('bCLI_TaxeApprentissagePayeeCCP', $data) && null !== $data['bCLI_TaxeApprentissagePayeeCCP']) {
            $object->setBCLITaxeApprentissagePayeeCCP($data['bCLI_TaxeApprentissagePayeeCCP']);
        } elseif (\array_key_exists('bCLI_TaxeApprentissagePayeeCCP', $data) && null === $data['bCLI_TaxeApprentissagePayeeCCP']) {
            $object->setBCLITaxeApprentissagePayeeCCP(null);
        }
        if (\array_key_exists('clI_TaxeApprentissagePayeeCCP', $data) && null !== $data['clI_TaxeApprentissagePayeeCCP']) {
            $object->setClITaxeApprentissagePayeeCCP($data['clI_TaxeApprentissagePayeeCCP']);
        } elseif (\array_key_exists('clI_TaxeApprentissagePayeeCCP', $data) && null === $data['clI_TaxeApprentissagePayeeCCP']) {
            $object->setClITaxeApprentissagePayeeCCP(null);
        }
        if (\array_key_exists('bCLI_TaxeCotPPrev', $data) && null !== $data['bCLI_TaxeCotPPrev']) {
            $object->setBCLITaxeCotPPrev($data['bCLI_TaxeCotPPrev']);
        } elseif (\array_key_exists('bCLI_TaxeCotPPrev', $data) && null === $data['bCLI_TaxeCotPPrev']) {
            $object->setBCLITaxeCotPPrev(null);
        }
        if (\array_key_exists('clI_TaxeCotPPrev', $data) && null !== $data['clI_TaxeCotPPrev']) {
            $object->setClITaxeCotPPrev($data['clI_TaxeCotPPrev']);
        } elseif (\array_key_exists('clI_TaxeCotPPrev', $data) && null === $data['clI_TaxeCotPPrev']) {
            $object->setClITaxeCotPPrev(null);
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
        if ($object->isInitialized('bCLIAffilieCCP') && null !== $object->getBCLIAffilieCCP()) {
            $data['bCLI_AffilieCCP'] = $object->getBCLIAffilieCCP();
        }
        if ($object->isInitialized('clIAffilieCCP') && null !== $object->getClIAffilieCCP()) {
            $data['clI_AffilieCCP'] = $object->getClIAffilieCCP();
        }
        if ($object->isInitialized('bCLIBaseCalculAnciennete') && null !== $object->getBCLIBaseCalculAnciennete()) {
            $data['bCLI_BaseCalculAnciennete'] = $object->getBCLIBaseCalculAnciennete();
        }
        if ($object->isInitialized('clIBaseCalculAnciennete') && null !== $object->getClIBaseCalculAnciennete()) {
            $data['clI_BaseCalculAnciennete'] = $object->getClIBaseCalculAnciennete();
        }
        if ($object->isInitialized('bCLICalcAutoESInactif') && null !== $object->getBCLICalcAutoESInactif()) {
            $data['bCLI_CalcAutoESInactif'] = $object->getBCLICalcAutoESInactif();
        }
        if ($object->isInitialized('clICalcAutoESInactif') && null !== $object->getClICalcAutoESInactif()) {
            $data['clI_CalcAutoESInactif'] = $object->getClICalcAutoESInactif();
        }
        if ($object->isInitialized('bCLICalcAutoIJSSInactif') && null !== $object->getBCLICalcAutoIJSSInactif()) {
            $data['bCLI_CalcAutoIJSSInactif'] = $object->getBCLICalcAutoIJSSInactif();
        }
        if ($object->isInitialized('clICalcAutoIJSSInactif') && null !== $object->getClICalcAutoIJSSInactif()) {
            $data['clI_CalcAutoIJSSInactif'] = $object->getClICalcAutoIJSSInactif();
        }
        if ($object->isInitialized('bCLICalcAutoMaintienInactif') && null !== $object->getBCLICalcAutoMaintienInactif()) {
            $data['bCLI_CalcAutoMaintienInactif'] = $object->getBCLICalcAutoMaintienInactif();
        }
        if ($object->isInitialized('clICalcAutoMaintienInactif') && null !== $object->getClICalcAutoMaintienInactif()) {
            $data['clI_CalcAutoMaintienInactif'] = $object->getClICalcAutoMaintienInactif();
        }
        if ($object->isInitialized('bCLICalcAutoRegulInactif') && null !== $object->getBCLICalcAutoRegulInactif()) {
            $data['bCLI_CalcAutoRegulInactif'] = $object->getBCLICalcAutoRegulInactif();
        }
        if ($object->isInitialized('clICalcAutoRegulInactif') && null !== $object->getClICalcAutoRegulInactif()) {
            $data['clI_CalcAutoRegulInactif'] = $object->getClICalcAutoRegulInactif();
        }
        if ($object->isInitialized('bCLIChaineFabricationDateLimiteAbsences') && null !== $object->getBCLIChaineFabricationDateLimiteAbsences()) {
            $data['bCLI_ChaineFabricationDateLimiteAbsences'] = $object->getBCLIChaineFabricationDateLimiteAbsences();
        }
        if ($object->isInitialized('clIChaineFabricationDateLimiteAbsences') && null !== $object->getClIChaineFabricationDateLimiteAbsences()) {
            $data['clI_ChaineFabricationDateLimiteAbsences'] = $object->getClIChaineFabricationDateLimiteAbsences();
        }
        if ($object->isInitialized('bCLIConfSalActive') && null !== $object->getBCLIConfSalActive()) {
            $data['bCLI_ConfSalActive'] = $object->getBCLIConfSalActive();
        }
        if ($object->isInitialized('clIConfSalActive') && null !== $object->getClIConfSalActive()) {
            $data['clI_ConfSalActive'] = $object->getClIConfSalActive();
        }
        if ($object->isInitialized('bCLIDFPTepa') && null !== $object->getBCLIDFPTepa()) {
            $data['bCLI_DFPTepa'] = $object->getBCLIDFPTepa();
        }
        if ($object->isInitialized('clIDFPTepa') && null !== $object->getClIDFPTepa()) {
            $data['clI_DFPTepa'] = $object->getClIDFPTepa();
        }
        if ($object->isInitialized('bCLIDFPTepaDebut') && null !== $object->getBCLIDFPTepaDebut()) {
            $data['bCLI_DFPTepaDebut'] = $object->getBCLIDFPTepaDebut();
        }
        if ($object->isInitialized('clIDFPTepaDebut') && null !== $object->getClIDFPTepaDebut()) {
            $data['clI_DFPTepaDebut'] = $object->getClIDFPTepaDebut()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('bCLIDtDebChangePaieDecalee') && null !== $object->getBCLIDtDebChangePaieDecalee()) {
            $data['bCLI_DtDebChangePaieDecalee'] = $object->getBCLIDtDebChangePaieDecalee();
        }
        if ($object->isInitialized('clIDtDebChangePaieDecalee') && null !== $object->getClIDtDebChangePaieDecalee()) {
            $data['clI_DtDebChangePaieDecalee'] = $object->getClIDtDebChangePaieDecalee()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('bCLIDtDebExerciceComptable') && null !== $object->getBCLIDtDebExerciceComptable()) {
            $data['bCLI_DtDebExerciceComptable'] = $object->getBCLIDtDebExerciceComptable();
        }
        if ($object->isInitialized('clIDtDebExerciceComptable') && null !== $object->getClIDtDebExerciceComptable()) {
            $data['clI_DtDebExerciceComptable'] = $object->getClIDtDebExerciceComptable()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('bCLIDtFinExerciceComptable') && null !== $object->getBCLIDtFinExerciceComptable()) {
            $data['bCLI_DtFinExerciceComptable'] = $object->getBCLIDtFinExerciceComptable();
        }
        if ($object->isInitialized('clIDtFinExerciceComptable') && null !== $object->getClIDtFinExerciceComptable()) {
            $data['clI_DtFinExerciceComptable'] = $object->getClIDtFinExerciceComptable()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('bCLIEmployeurCivilite') && null !== $object->getBCLIEmployeurCivilite()) {
            $data['bCLI_EmployeurCivilite'] = $object->getBCLIEmployeurCivilite();
        }
        if ($object->isInitialized('clIEmployeurCivilite') && null !== $object->getClIEmployeurCivilite()) {
            $data['clI_EmployeurCivilite'] = $object->getClIEmployeurCivilite();
        }
        if ($object->isInitialized('bCLIEmployeurNom') && null !== $object->getBCLIEmployeurNom()) {
            $data['bCLI_EmployeurNom'] = $object->getBCLIEmployeurNom();
        }
        if ($object->isInitialized('clIEmployeurNom') && null !== $object->getClIEmployeurNom()) {
            $data['clI_EmployeurNom'] = $object->getClIEmployeurNom();
        }
        if ($object->isInitialized('bCLIEmployeurPrenom') && null !== $object->getBCLIEmployeurPrenom()) {
            $data['bCLI_EmployeurPrenom'] = $object->getBCLIEmployeurPrenom();
        }
        if ($object->isInitialized('clIEmployeurPrenom') && null !== $object->getClIEmployeurPrenom()) {
            $data['clI_EmployeurPrenom'] = $object->getClIEmployeurPrenom();
        }
        if ($object->isInitialized('bCLIEmployeurQualite') && null !== $object->getBCLIEmployeurQualite()) {
            $data['bCLI_EmployeurQualite'] = $object->getBCLIEmployeurQualite();
        }
        if ($object->isInitialized('clIEmployeurQualite') && null !== $object->getClIEmployeurQualite()) {
            $data['clI_EmployeurQualite'] = $object->getClIEmployeurQualite();
        }
        if ($object->isInitialized('bCLIEmployeurQualiteAutre') && null !== $object->getBCLIEmployeurQualiteAutre()) {
            $data['bCLI_EmployeurQualiteAutre'] = $object->getBCLIEmployeurQualiteAutre();
        }
        if ($object->isInitialized('clIEmployeurQualiteAutre') && null !== $object->getClIEmployeurQualiteAutre()) {
            $data['clI_EmployeurQualiteAutre'] = $object->getClIEmployeurQualiteAutre();
        }
        if ($object->isInitialized('bCLIEtatDossierPaie') && null !== $object->getBCLIEtatDossierPaie()) {
            $data['bCLI_EtatDossierPaie'] = $object->getBCLIEtatDossierPaie();
        }
        if ($object->isInitialized('clIEtatDossierPaie') && null !== $object->getClIEtatDossierPaie()) {
            $data['clI_EtatDossierPaie'] = $object->getClIEtatDossierPaie();
        }
        if ($object->isInitialized('bCLIFormaProfTranche') && null !== $object->getBCLIFormaProfTranche()) {
            $data['bCLI_FormaProfTranche'] = $object->getBCLIFormaProfTranche();
        }
        if ($object->isInitialized('clIFormaProfTranche') && null !== $object->getClIFormaProfTranche()) {
            $data['clI_FormaProfTranche'] = $object->getClIFormaProfTranche();
        }
        if ($object->isInitialized('bCLIFormaProfTrancheAnnee') && null !== $object->getBCLIFormaProfTrancheAnnee()) {
            $data['bCLI_FormaProfTrancheAnnee'] = $object->getBCLIFormaProfTrancheAnnee();
        }
        if ($object->isInitialized('clIFormaProfTrancheAnnee') && null !== $object->getClIFormaProfTrancheAnnee()) {
            $data['clI_FormaProfTrancheAnnee'] = $object->getClIFormaProfTrancheAnnee()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('bCLIFormaProfTrancheAnnee2') && null !== $object->getBCLIFormaProfTrancheAnnee2()) {
            $data['bCLI_FormaProfTrancheAnnee2'] = $object->getBCLIFormaProfTrancheAnnee2();
        }
        if ($object->isInitialized('clIFormaProfTrancheAnnee2') && null !== $object->getClIFormaProfTrancheAnnee2()) {
            $data['clI_FormaProfTrancheAnnee2'] = $object->getClIFormaProfTrancheAnnee2()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('bCLIFormaProfTrancheAnnee3') && null !== $object->getBCLIFormaProfTrancheAnnee3()) {
            $data['bCLI_FormaProfTrancheAnnee3'] = $object->getBCLIFormaProfTrancheAnnee3();
        }
        if ($object->isInitialized('clIFormaProfTrancheAnnee3') && null !== $object->getClIFormaProfTrancheAnnee3()) {
            $data['clI_FormaProfTrancheAnnee3'] = $object->getClIFormaProfTrancheAnnee3()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('bCLIFormaProfTrancheAnnee4') && null !== $object->getBCLIFormaProfTrancheAnnee4()) {
            $data['bCLI_FormaProfTrancheAnnee4'] = $object->getBCLIFormaProfTrancheAnnee4();
        }
        if ($object->isInitialized('clIFormaProfTrancheAnnee4') && null !== $object->getClIFormaProfTrancheAnnee4()) {
            $data['clI_FormaProfTrancheAnnee4'] = $object->getClIFormaProfTrancheAnnee4()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('bCLIGestionCPExclEnJours') && null !== $object->getBCLIGestionCPExclEnJours()) {
            $data['bCLI_GestionCPExclEnJours'] = $object->getBCLIGestionCPExclEnJours();
        }
        if ($object->isInitialized('clIGestionCPExclEnJours') && null !== $object->getClIGestionCPExclEnJours()) {
            $data['clI_GestionCPExclEnJours'] = $object->getClIGestionCPExclEnJours();
        }
        if ($object->isInitialized('bCLIJourVersementSalaires') && null !== $object->getBCLIJourVersementSalaires()) {
            $data['bCLI_JourVersementSalaires'] = $object->getBCLIJourVersementSalaires();
        }
        if ($object->isInitialized('clIJourVersementSalaires') && null !== $object->getClIJourVersementSalaires()) {
            $data['clI_JourVersementSalaires'] = $object->getClIJourVersementSalaires();
        }
        if ($object->isInitialized('bCLIListesTriSalaries') && null !== $object->getBCLIListesTriSalaries()) {
            $data['bCLI_ListesTriSalaries'] = $object->getBCLIListesTriSalaries();
        }
        if ($object->isInitialized('clIListesTriSalaries') && null !== $object->getClIListesTriSalaries()) {
            $data['clI_ListesTriSalaries'] = $object->getClIListesTriSalaries();
        }
        if ($object->isInitialized('bCLIMatriculeAuto') && null !== $object->getBCLIMatriculeAuto()) {
            $data['bCLI_MatriculeAuto'] = $object->getBCLIMatriculeAuto();
        }
        if ($object->isInitialized('clIMatriculeAuto') && null !== $object->getClIMatriculeAuto()) {
            $data['clI_MatriculeAuto'] = $object->getClIMatriculeAuto();
        }
        if ($object->isInitialized('bCLIMatriculeLongueur') && null !== $object->getBCLIMatriculeLongueur()) {
            $data['bCLI_MatriculeLongueur'] = $object->getBCLIMatriculeLongueur();
        }
        if ($object->isInitialized('clIMatriculeLongueur') && null !== $object->getClIMatriculeLongueur()) {
            $data['clI_MatriculeLongueur'] = $object->getClIMatriculeLongueur();
        }
        if ($object->isInitialized('bCLIMethodeArbitrage') && null !== $object->getBCLIMethodeArbitrage()) {
            $data['bCLI_MethodeArbitrage'] = $object->getBCLIMethodeArbitrage();
        }
        if ($object->isInitialized('clIMethodeArbitrage') && null !== $object->getClIMethodeArbitrage()) {
            $data['clI_MethodeArbitrage'] = $object->getClIMethodeArbitrage();
        }
        if ($object->isInitialized('bCLIMethodeCalculMaintien') && null !== $object->getBCLIMethodeCalculMaintien()) {
            $data['bCLI_MethodeCalculMaintien'] = $object->getBCLIMethodeCalculMaintien();
        }
        if ($object->isInitialized('clIMethodeCalculMaintien') && null !== $object->getClIMethodeCalculMaintien()) {
            $data['clI_MethodeCalculMaintien'] = $object->getClIMethodeCalculMaintien();
        }
        if ($object->isInitialized('bCLIMethodeCalculMaintienNbM') && null !== $object->getBCLIMethodeCalculMaintienNbM()) {
            $data['bCLI_MethodeCalculMaintienNbM'] = $object->getBCLIMethodeCalculMaintienNbM();
        }
        if ($object->isInitialized('clIMethodeCalculMaintienNbM') && null !== $object->getClIMethodeCalculMaintienNbM()) {
            $data['clI_MethodeCalculMaintienNbM'] = $object->getClIMethodeCalculMaintienNbM();
        }
        if ($object->isInitialized('bCLIMethodeRetenueCP') && null !== $object->getBCLIMethodeRetenueCP()) {
            $data['bCLI_MethodeRetenueCP'] = $object->getBCLIMethodeRetenueCP();
        }
        if ($object->isInitialized('clIMethodeRetenueCP') && null !== $object->getClIMethodeRetenueCP()) {
            $data['clI_MethodeRetenueCP'] = $object->getClIMethodeRetenueCP();
        }
        if ($object->isInitialized('bCLIMethodesSuiviAbsencesDansEta') && null !== $object->getBCLIMethodesSuiviAbsencesDansEta()) {
            $data['bCLI_MethodesSuiviAbsencesDansEta'] = $object->getBCLIMethodesSuiviAbsencesDansEta();
        }
        if ($object->isInitialized('clIMethodesSuiviAbsencesDansEta') && null !== $object->getClIMethodesSuiviAbsencesDansEta()) {
            $data['clI_MethodesSuiviAbsencesDansEta'] = $object->getClIMethodesSuiviAbsencesDansEta();
        }
        if ($object->isInitialized('bCLIMethodeSuiviAbsences') && null !== $object->getBCLIMethodeSuiviAbsences()) {
            $data['bCLI_MethodeSuiviAbsences'] = $object->getBCLIMethodeSuiviAbsences();
        }
        if ($object->isInitialized('clIMethodeSuiviAbsences') && null !== $object->getClIMethodeSuiviAbsences()) {
            $data['clI_MethodeSuiviAbsences'] = $object->getClIMethodeSuiviAbsences();
        }
        if ($object->isInitialized('bCLIMethodeSuiviAbsencesDeductionHM') && null !== $object->getBCLIMethodeSuiviAbsencesDeductionHM()) {
            $data['bCLI_MethodeSuiviAbsencesDeductionHM'] = $object->getBCLIMethodeSuiviAbsencesDeductionHM();
        }
        if ($object->isInitialized('clIMethodeSuiviAbsencesDeductionHM') && null !== $object->getClIMethodeSuiviAbsencesDeductionHM()) {
            $data['clI_MethodeSuiviAbsencesDeductionHM'] = $object->getClIMethodeSuiviAbsencesDeductionHM();
        }
        if ($object->isInitialized('bCLIMethodeSuiviAbsencesJC') && null !== $object->getBCLIMethodeSuiviAbsencesJC()) {
            $data['bCLI_MethodeSuiviAbsencesJC'] = $object->getBCLIMethodeSuiviAbsencesJC();
        }
        if ($object->isInitialized('clIMethodeSuiviAbsencesJC') && null !== $object->getClIMethodeSuiviAbsencesJC()) {
            $data['clI_MethodeSuiviAbsencesJC'] = $object->getClIMethodeSuiviAbsencesJC();
        }
        if ($object->isInitialized('bCLIMethodeSuiviCP') && null !== $object->getBCLIMethodeSuiviCP()) {
            $data['bCLI_MethodeSuiviCP'] = $object->getBCLIMethodeSuiviCP();
        }
        if ($object->isInitialized('clIMethodeSuiviCP') && null !== $object->getClIMethodeSuiviCP()) {
            $data['clI_MethodeSuiviCP'] = $object->getClIMethodeSuiviCP();
        }
        if ($object->isInitialized('bCLIMethodeSuiviCPAcqMois') && null !== $object->getBCLIMethodeSuiviCPAcqMois()) {
            $data['bCLI_MethodeSuiviCPAcqMois'] = $object->getBCLIMethodeSuiviCPAcqMois();
        }
        if ($object->isInitialized('clIMethodeSuiviCPAcqMois') && null !== $object->getClIMethodeSuiviCPAcqMois()) {
            $data['clI_MethodeSuiviCPAcqMois'] = $object->getClIMethodeSuiviCPAcqMois();
        }
        if ($object->isInitialized('bCLIModuleCTCDActif') && null !== $object->getBCLIModuleCTCDActif()) {
            $data['bCLI_ModuleCTCDActif'] = $object->getBCLIModuleCTCDActif();
        }
        if ($object->isInitialized('clIModuleCTCDActif') && null !== $object->getClIModuleCTCDActif()) {
            $data['clI_ModuleCTCDActif'] = $object->getClIModuleCTCDActif();
        }
        if ($object->isInitialized('bCLIMontagePaiePeriodeDebut') && null !== $object->getBCLIMontagePaiePeriodeDebut()) {
            $data['bCLI_MontagePaiePeriodeDebut'] = $object->getBCLIMontagePaiePeriodeDebut();
        }
        if ($object->isInitialized('clIMontagePaiePeriodeDebut') && null !== $object->getClIMontagePaiePeriodeDebut()) {
            $data['clI_MontagePaiePeriodeDebut'] = $object->getClIMontagePaiePeriodeDebut()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('bCLIPaieDecalee') && null !== $object->getBCLIPaieDecalee()) {
            $data['bCLI_PaieDecalee'] = $object->getBCLIPaieDecalee();
        }
        if ($object->isInitialized('clIPaieDecalee') && null !== $object->getClIPaieDecalee()) {
            $data['clI_PaieDecalee'] = $object->getClIPaieDecalee();
        }
        if ($object->isInitialized('bCLIPersonneAContacterMel') && null !== $object->getBCLIPersonneAContacterMel()) {
            $data['bCLI_PersonneAContacterMel'] = $object->getBCLIPersonneAContacterMel();
        }
        if ($object->isInitialized('clIPersonneAContacterMel') && null !== $object->getClIPersonneAContacterMel()) {
            $data['clI_PersonneAContacterMel'] = $object->getClIPersonneAContacterMel();
        }
        if ($object->isInitialized('bCLIPersonneAContacterNom') && null !== $object->getBCLIPersonneAContacterNom()) {
            $data['bCLI_PersonneAContacterNom'] = $object->getBCLIPersonneAContacterNom();
        }
        if ($object->isInitialized('clIPersonneAContacterNom') && null !== $object->getClIPersonneAContacterNom()) {
            $data['clI_PersonneAContacterNom'] = $object->getClIPersonneAContacterNom();
        }
        if ($object->isInitialized('bCLIPersonneAContacterPrenom') && null !== $object->getBCLIPersonneAContacterPrenom()) {
            $data['bCLI_PersonneAContacterPrenom'] = $object->getBCLIPersonneAContacterPrenom();
        }
        if ($object->isInitialized('clIPersonneAContacterPrenom') && null !== $object->getClIPersonneAContacterPrenom()) {
            $data['clI_PersonneAContacterPrenom'] = $object->getClIPersonneAContacterPrenom();
        }
        if ($object->isInitialized('bCLIPersonneAContacterTel') && null !== $object->getBCLIPersonneAContacterTel()) {
            $data['bCLI_PersonneAContacterTel'] = $object->getBCLIPersonneAContacterTel();
        }
        if ($object->isInitialized('clIPersonneAContacterTel') && null !== $object->getClIPersonneAContacterTel()) {
            $data['clI_PersonneAContacterTel'] = $object->getClIPersonneAContacterTel();
        }
        if ($object->isInitialized('bCLIReductionFillon19') && null !== $object->getBCLIReductionFillon19()) {
            $data['bCLI_ReductionFillon19'] = $object->getBCLIReductionFillon19();
        }
        if ($object->isInitialized('clIReductionFillon19') && null !== $object->getClIReductionFillon19()) {
            $data['clI_ReductionFillon19'] = $object->getClIReductionFillon19();
        }
        if ($object->isInitialized('bCLIReductionFillon19Debut') && null !== $object->getBCLIReductionFillon19Debut()) {
            $data['bCLI_ReductionFillon19Debut'] = $object->getBCLIReductionFillon19Debut();
        }
        if ($object->isInitialized('clIReductionFillon19Debut') && null !== $object->getClIReductionFillon19Debut()) {
            $data['clI_ReductionFillon19Debut'] = $object->getClIReductionFillon19Debut()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('bCLISepaModeComptabilisation') && null !== $object->getBCLISepaModeComptabilisation()) {
            $data['bCLI_SepaModeComptabilisation'] = $object->getBCLISepaModeComptabilisation();
        }
        if ($object->isInitialized('clISepaModeComptabilisation') && null !== $object->getClISepaModeComptabilisation()) {
            $data['clI_SepaModeComptabilisation'] = $object->getClISepaModeComptabilisation();
        }
        if ($object->isInitialized('bCLISortieAppliJourVersementSalaires') && null !== $object->getBCLISortieAppliJourVersementSalaires()) {
            $data['bCLI_SortieAppliJourVersementSalaires'] = $object->getBCLISortieAppliJourVersementSalaires();
        }
        if ($object->isInitialized('clISortieAppliJourVersementSalaires') && null !== $object->getClISortieAppliJourVersementSalaires()) {
            $data['clI_SortieAppliJourVersementSalaires'] = $object->getClISortieAppliJourVersementSalaires();
        }
        if ($object->isInitialized('bCLISortieAppliModeReglementNormal') && null !== $object->getBCLISortieAppliModeReglementNormal()) {
            $data['bCLI_SortieAppliModeReglementNormal'] = $object->getBCLISortieAppliModeReglementNormal();
        }
        if ($object->isInitialized('clISortieAppliModeReglementNormal') && null !== $object->getClISortieAppliModeReglementNormal()) {
            $data['clI_SortieAppliModeReglementNormal'] = $object->getClISortieAppliModeReglementNormal();
        }
        if ($object->isInitialized('bCLISousMethodeSuiviAbsences') && null !== $object->getBCLISousMethodeSuiviAbsences()) {
            $data['bCLI_SousMethodeSuiviAbsences'] = $object->getBCLISousMethodeSuiviAbsences();
        }
        if ($object->isInitialized('clISousMethodeSuiviAbsences') && null !== $object->getClISousMethodeSuiviAbsences()) {
            $data['clI_SousMethodeSuiviAbsences'] = $object->getClISousMethodeSuiviAbsences();
        }
        if ($object->isInitialized('bCLISousMethodeSuiviAbsencesFJ') && null !== $object->getBCLISousMethodeSuiviAbsencesFJ()) {
            $data['bCLI_SousMethodeSuiviAbsencesFJ'] = $object->getBCLISousMethodeSuiviAbsencesFJ();
        }
        if ($object->isInitialized('clISousMethodeSuiviAbsencesFJ') && null !== $object->getClISousMethodeSuiviAbsencesFJ()) {
            $data['clI_SousMethodeSuiviAbsencesFJ'] = $object->getClISousMethodeSuiviAbsencesFJ();
        }
        if ($object->isInitialized('bCLISubrogation') && null !== $object->getBCLISubrogation()) {
            $data['bCLI_Subrogation'] = $object->getBCLISubrogation();
        }
        if ($object->isInitialized('clISubrogation') && null !== $object->getClISubrogation()) {
            $data['clI_Subrogation'] = $object->getClISubrogation();
        }
        if ($object->isInitialized('bCLISubrogationVersEtaPrincipal') && null !== $object->getBCLISubrogationVersEtaPrincipal()) {
            $data['bCLI_SubrogationVersEtaPrincipal'] = $object->getBCLISubrogationVersEtaPrincipal();
        }
        if ($object->isInitialized('clISubrogationVersEtaPrincipal') && null !== $object->getClISubrogationVersEtaPrincipal()) {
            $data['clI_SubrogationVersEtaPrincipal'] = $object->getClISubrogationVersEtaPrincipal();
        }
        if ($object->isInitialized('bCLITassageAbsencesJours') && null !== $object->getBCLITassageAbsencesJours()) {
            $data['bCLI_TassageAbsencesJours'] = $object->getBCLITassageAbsencesJours();
        }
        if ($object->isInitialized('clITassageAbsencesJours') && null !== $object->getClITassageAbsencesJours()) {
            $data['clI_TassageAbsencesJours'] = $object->getClITassageAbsencesJours();
        }
        if ($object->isInitialized('bCLITaxeApprentissagePayeeCCP') && null !== $object->getBCLITaxeApprentissagePayeeCCP()) {
            $data['bCLI_TaxeApprentissagePayeeCCP'] = $object->getBCLITaxeApprentissagePayeeCCP();
        }
        if ($object->isInitialized('clITaxeApprentissagePayeeCCP') && null !== $object->getClITaxeApprentissagePayeeCCP()) {
            $data['clI_TaxeApprentissagePayeeCCP'] = $object->getClITaxeApprentissagePayeeCCP();
        }
        if ($object->isInitialized('bCLITaxeCotPPrev') && null !== $object->getBCLITaxeCotPPrev()) {
            $data['bCLI_TaxeCotPPrev'] = $object->getBCLITaxeCotPPrev();
        }
        if ($object->isInitialized('clITaxeCotPPrev') && null !== $object->getClITaxeCotPPrev()) {
            $data['clI_TaxeCotPPrev'] = $object->getClITaxeCotPPrev();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\SocieteInfoSup' => false];
    }
}
