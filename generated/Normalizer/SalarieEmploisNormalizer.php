<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SalarieEmplois;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalarieEmploisNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\SalarieEmplois' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof SalarieEmplois;
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
        $object = new SalarieEmplois();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('matriculeSalarie', $data) && null !== $data['matriculeSalarie']) {
            $object->setMatriculeSalarie($data['matriculeSalarie']);
        } elseif (\array_key_exists('matriculeSalarie', $data) && null === $data['matriculeSalarie']) {
            $object->setMatriculeSalarie(null);
        }
        if (\array_key_exists('numeroSecuriteSociale', $data) && null !== $data['numeroSecuriteSociale']) {
            $object->setNumeroSecuriteSociale($data['numeroSecuriteSociale']);
        } elseif (\array_key_exists('numeroSecuriteSociale', $data) && null === $data['numeroSecuriteSociale']) {
            $object->setNumeroSecuriteSociale(null);
        }
        if (\array_key_exists('matriculeSalarieModele', $data) && null !== $data['matriculeSalarieModele']) {
            $object->setMatriculeSalarieModele($data['matriculeSalarieModele']);
        } elseif (\array_key_exists('matriculeSalarieModele', $data) && null === $data['matriculeSalarieModele']) {
            $object->setMatriculeSalarieModele(null);
        }
        if (\array_key_exists('numeroDossierSalarieModele', $data) && null !== $data['numeroDossierSalarieModele']) {
            $object->setNumeroDossierSalarieModele($data['numeroDossierSalarieModele']);
        } elseif (\array_key_exists('numeroDossierSalarieModele', $data) && null === $data['numeroDossierSalarieModele']) {
            $object->setNumeroDossierSalarieModele(null);
        }
        if (\array_key_exists('copieIntegraleSalarieModele', $data) && null !== $data['copieIntegraleSalarieModele']) {
            $object->setCopieIntegraleSalarieModele($data['copieIntegraleSalarieModele']);
        } elseif (\array_key_exists('copieIntegraleSalarieModele', $data) && null === $data['copieIntegraleSalarieModele']) {
            $object->setCopieIntegraleSalarieModele(null);
        }
        if (\array_key_exists('calculerElementsNaissance', $data) && null !== $data['calculerElementsNaissance']) {
            $object->setCalculerElementsNaissance($data['calculerElementsNaissance']);
        } elseif (\array_key_exists('calculerElementsNaissance', $data) && null === $data['calculerElementsNaissance']) {
            $object->setCalculerElementsNaissance(null);
        }
        if (\array_key_exists('calculerCommune', $data) && null !== $data['calculerCommune']) {
            $object->setCalculerCommune($data['calculerCommune']);
        } elseif (\array_key_exists('calculerCommune', $data) && null === $data['calculerCommune']) {
            $object->setCalculerCommune(null);
        }
        if (\array_key_exists('matriculeInterne', $data) && null !== $data['matriculeInterne']) {
            $object->setMatriculeInterne($data['matriculeInterne']);
        } elseif (\array_key_exists('matriculeInterne', $data) && null === $data['matriculeInterne']) {
            $object->setMatriculeInterne(null);
        }
        if (\array_key_exists('bMatriculeInterne', $data) && null !== $data['bMatriculeInterne']) {
            $object->setBMatriculeInterne($data['bMatriculeInterne']);
        } elseif (\array_key_exists('bMatriculeInterne', $data) && null === $data['bMatriculeInterne']) {
            $object->setBMatriculeInterne(null);
        }
        if (\array_key_exists('nomNaissance', $data) && null !== $data['nomNaissance']) {
            $object->setNomNaissance($data['nomNaissance']);
        } elseif (\array_key_exists('nomNaissance', $data) && null === $data['nomNaissance']) {
            $object->setNomNaissance(null);
        }
        if (\array_key_exists('bNomNaissance', $data) && null !== $data['bNomNaissance']) {
            $object->setBNomNaissance($data['bNomNaissance']);
        } elseif (\array_key_exists('bNomNaissance', $data) && null === $data['bNomNaissance']) {
            $object->setBNomNaissance(null);
        }
        if (\array_key_exists('nomMarital', $data) && null !== $data['nomMarital']) {
            $object->setNomMarital($data['nomMarital']);
        } elseif (\array_key_exists('nomMarital', $data) && null === $data['nomMarital']) {
            $object->setNomMarital(null);
        }
        if (\array_key_exists('bNomMarital', $data) && null !== $data['bNomMarital']) {
            $object->setBNomMarital($data['bNomMarital']);
        } elseif (\array_key_exists('bNomMarital', $data) && null === $data['bNomMarital']) {
            $object->setBNomMarital(null);
        }
        if (\array_key_exists('nomUsuel', $data) && null !== $data['nomUsuel']) {
            $object->setNomUsuel($data['nomUsuel']);
        } elseif (\array_key_exists('nomUsuel', $data) && null === $data['nomUsuel']) {
            $object->setNomUsuel(null);
        }
        if (\array_key_exists('bNomUsuel', $data) && null !== $data['bNomUsuel']) {
            $object->setBNomUsuel($data['bNomUsuel']);
        } elseif (\array_key_exists('bNomUsuel', $data) && null === $data['bNomUsuel']) {
            $object->setBNomUsuel(null);
        }
        if (\array_key_exists('prenom', $data) && null !== $data['prenom']) {
            $object->setPrenom($data['prenom']);
        } elseif (\array_key_exists('prenom', $data) && null === $data['prenom']) {
            $object->setPrenom(null);
        }
        if (\array_key_exists('bPrenom', $data) && null !== $data['bPrenom']) {
            $object->setBPrenom($data['bPrenom']);
        } elseif (\array_key_exists('bPrenom', $data) && null === $data['bPrenom']) {
            $object->setBPrenom(null);
        }
        if (\array_key_exists('civilite', $data) && null !== $data['civilite']) {
            $object->setCivilite($data['civilite']);
        } elseif (\array_key_exists('civilite', $data) && null === $data['civilite']) {
            $object->setCivilite(null);
        }
        if (\array_key_exists('bCivilite', $data) && null !== $data['bCivilite']) {
            $object->setBCivilite($data['bCivilite']);
        } elseif (\array_key_exists('bCivilite', $data) && null === $data['bCivilite']) {
            $object->setBCivilite(null);
        }
        if (\array_key_exists('situationFamiliale', $data) && null !== $data['situationFamiliale']) {
            $object->setSituationFamiliale($data['situationFamiliale']);
        } elseif (\array_key_exists('situationFamiliale', $data) && null === $data['situationFamiliale']) {
            $object->setSituationFamiliale(null);
        }
        if (\array_key_exists('bSituationFamiliale', $data) && null !== $data['bSituationFamiliale']) {
            $object->setBSituationFamiliale($data['bSituationFamiliale']);
        } elseif (\array_key_exists('bSituationFamiliale', $data) && null === $data['bSituationFamiliale']) {
            $object->setBSituationFamiliale(null);
        }
        if (\array_key_exists('dateNaissance', $data) && null !== $data['dateNaissance']) {
            $object->setDateNaissance(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['dateNaissance']));
        } elseif (\array_key_exists('dateNaissance', $data) && null === $data['dateNaissance']) {
            $object->setDateNaissance(null);
        }
        if (\array_key_exists('bDateNaissance', $data) && null !== $data['bDateNaissance']) {
            $object->setBDateNaissance($data['bDateNaissance']);
        } elseif (\array_key_exists('bDateNaissance', $data) && null === $data['bDateNaissance']) {
            $object->setBDateNaissance(null);
        }
        if (\array_key_exists('departementNaissance', $data) && null !== $data['departementNaissance']) {
            $object->setDepartementNaissance($data['departementNaissance']);
        } elseif (\array_key_exists('departementNaissance', $data) && null === $data['departementNaissance']) {
            $object->setDepartementNaissance(null);
        }
        if (\array_key_exists('bDepartementNaissance', $data) && null !== $data['bDepartementNaissance']) {
            $object->setBDepartementNaissance($data['bDepartementNaissance']);
        } elseif (\array_key_exists('bDepartementNaissance', $data) && null === $data['bDepartementNaissance']) {
            $object->setBDepartementNaissance(null);
        }
        if (\array_key_exists('communeNaissance', $data) && null !== $data['communeNaissance']) {
            $object->setCommuneNaissance($data['communeNaissance']);
        } elseif (\array_key_exists('communeNaissance', $data) && null === $data['communeNaissance']) {
            $object->setCommuneNaissance(null);
        }
        if (\array_key_exists('bCommuneNaissance', $data) && null !== $data['bCommuneNaissance']) {
            $object->setBCommuneNaissance($data['bCommuneNaissance']);
        } elseif (\array_key_exists('bCommuneNaissance', $data) && null === $data['bCommuneNaissance']) {
            $object->setBCommuneNaissance(null);
        }
        if (\array_key_exists('codePaysNaissance', $data) && null !== $data['codePaysNaissance']) {
            $object->setCodePaysNaissance($data['codePaysNaissance']);
        } elseif (\array_key_exists('codePaysNaissance', $data) && null === $data['codePaysNaissance']) {
            $object->setCodePaysNaissance(null);
        }
        if (\array_key_exists('bCodePaysNaissance', $data) && null !== $data['bCodePaysNaissance']) {
            $object->setBCodePaysNaissance($data['bCodePaysNaissance']);
        } elseif (\array_key_exists('bCodePaysNaissance', $data) && null === $data['bCodePaysNaissance']) {
            $object->setBCodePaysNaissance(null);
        }
        if (\array_key_exists('paysNaissance', $data) && null !== $data['paysNaissance']) {
            $object->setPaysNaissance($data['paysNaissance']);
        } elseif (\array_key_exists('paysNaissance', $data) && null === $data['paysNaissance']) {
            $object->setPaysNaissance(null);
        }
        if (\array_key_exists('bPaysNaissance', $data) && null !== $data['bPaysNaissance']) {
            $object->setBPaysNaissance($data['bPaysNaissance']);
        } elseif (\array_key_exists('bPaysNaissance', $data) && null === $data['bPaysNaissance']) {
            $object->setBPaysNaissance(null);
        }
        if (\array_key_exists('codePaysNationalite', $data) && null !== $data['codePaysNationalite']) {
            $object->setCodePaysNationalite($data['codePaysNationalite']);
        } elseif (\array_key_exists('codePaysNationalite', $data) && null === $data['codePaysNationalite']) {
            $object->setCodePaysNationalite(null);
        }
        if (\array_key_exists('bCodePaysNationalite', $data) && null !== $data['bCodePaysNationalite']) {
            $object->setBCodePaysNationalite($data['bCodePaysNationalite']);
        } elseif (\array_key_exists('bCodePaysNationalite', $data) && null === $data['bCodePaysNationalite']) {
            $object->setBCodePaysNationalite(null);
        }
        if (\array_key_exists('paysNationalite', $data) && null !== $data['paysNationalite']) {
            $object->setPaysNationalite($data['paysNationalite']);
        } elseif (\array_key_exists('paysNationalite', $data) && null === $data['paysNationalite']) {
            $object->setPaysNationalite(null);
        }
        if (\array_key_exists('bPaysNationalite', $data) && null !== $data['bPaysNationalite']) {
            $object->setBPaysNationalite($data['bPaysNationalite']);
        } elseif (\array_key_exists('bPaysNationalite', $data) && null === $data['bPaysNationalite']) {
            $object->setBPaysNationalite(null);
        }
        if (\array_key_exists('titreSejourType', $data) && null !== $data['titreSejourType']) {
            $object->setTitreSejourType($data['titreSejourType']);
        } elseif (\array_key_exists('titreSejourType', $data) && null === $data['titreSejourType']) {
            $object->setTitreSejourType(null);
        }
        if (\array_key_exists('bTitreSejourType', $data) && null !== $data['bTitreSejourType']) {
            $object->setBTitreSejourType($data['bTitreSejourType']);
        } elseif (\array_key_exists('bTitreSejourType', $data) && null === $data['bTitreSejourType']) {
            $object->setBTitreSejourType(null);
        }
        if (\array_key_exists('titreSejourNumeroOrdre', $data) && null !== $data['titreSejourNumeroOrdre']) {
            $object->setTitreSejourNumeroOrdre($data['titreSejourNumeroOrdre']);
        } elseif (\array_key_exists('titreSejourNumeroOrdre', $data) && null === $data['titreSejourNumeroOrdre']) {
            $object->setTitreSejourNumeroOrdre(null);
        }
        if (\array_key_exists('bTitreSejourNumeroOrdre', $data) && null !== $data['bTitreSejourNumeroOrdre']) {
            $object->setBTitreSejourNumeroOrdre($data['bTitreSejourNumeroOrdre']);
        } elseif (\array_key_exists('bTitreSejourNumeroOrdre', $data) && null === $data['bTitreSejourNumeroOrdre']) {
            $object->setBTitreSejourNumeroOrdre(null);
        }
        if (\array_key_exists('titreSejourDebut', $data) && null !== $data['titreSejourDebut']) {
            $object->setTitreSejourDebut(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['titreSejourDebut']));
        } elseif (\array_key_exists('titreSejourDebut', $data) && null === $data['titreSejourDebut']) {
            $object->setTitreSejourDebut(null);
        }
        if (\array_key_exists('bTitreSejourDebut', $data) && null !== $data['bTitreSejourDebut']) {
            $object->setBTitreSejourDebut($data['bTitreSejourDebut']);
        } elseif (\array_key_exists('bTitreSejourDebut', $data) && null === $data['bTitreSejourDebut']) {
            $object->setBTitreSejourDebut(null);
        }
        if (\array_key_exists('titreSejourFin', $data) && null !== $data['titreSejourFin']) {
            $object->setTitreSejourFin(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['titreSejourFin']));
        } elseif (\array_key_exists('titreSejourFin', $data) && null === $data['titreSejourFin']) {
            $object->setTitreSejourFin(null);
        }
        if (\array_key_exists('bTitreSejourFin', $data) && null !== $data['bTitreSejourFin']) {
            $object->setBTitreSejourFin($data['bTitreSejourFin']);
        } elseif (\array_key_exists('bTitreSejourFin', $data) && null === $data['bTitreSejourFin']) {
            $object->setBTitreSejourFin(null);
        }
        if (\array_key_exists('numVoie', $data) && null !== $data['numVoie']) {
            $object->setNumVoie($data['numVoie']);
        } elseif (\array_key_exists('numVoie', $data) && null === $data['numVoie']) {
            $object->setNumVoie(null);
        }
        if (\array_key_exists('bNumVoie', $data) && null !== $data['bNumVoie']) {
            $object->setBNumVoie($data['bNumVoie']);
        } elseif (\array_key_exists('bNumVoie', $data) && null === $data['bNumVoie']) {
            $object->setBNumVoie(null);
        }
        if (\array_key_exists('btqc', $data) && null !== $data['btqc']) {
            $object->setBtqc($data['btqc']);
        } elseif (\array_key_exists('btqc', $data) && null === $data['btqc']) {
            $object->setBtqc(null);
        }
        if (\array_key_exists('bBTQC', $data) && null !== $data['bBTQC']) {
            $object->setBBTQC($data['bBTQC']);
        } elseif (\array_key_exists('bBTQC', $data) && null === $data['bBTQC']) {
            $object->setBBTQC(null);
        }
        if (\array_key_exists('nomVoie', $data) && null !== $data['nomVoie']) {
            $object->setNomVoie($data['nomVoie']);
        } elseif (\array_key_exists('nomVoie', $data) && null === $data['nomVoie']) {
            $object->setNomVoie(null);
        }
        if (\array_key_exists('bNomVoie', $data) && null !== $data['bNomVoie']) {
            $object->setBNomVoie($data['bNomVoie']);
        } elseif (\array_key_exists('bNomVoie', $data) && null === $data['bNomVoie']) {
            $object->setBNomVoie(null);
        }
        if (\array_key_exists('complement', $data) && null !== $data['complement']) {
            $object->setComplement($data['complement']);
        } elseif (\array_key_exists('complement', $data) && null === $data['complement']) {
            $object->setComplement(null);
        }
        if (\array_key_exists('bComplement', $data) && null !== $data['bComplement']) {
            $object->setBComplement($data['bComplement']);
        } elseif (\array_key_exists('bComplement', $data) && null === $data['bComplement']) {
            $object->setBComplement(null);
        }
        if (\array_key_exists('codePostal', $data) && null !== $data['codePostal']) {
            $object->setCodePostal($data['codePostal']);
        } elseif (\array_key_exists('codePostal', $data) && null === $data['codePostal']) {
            $object->setCodePostal(null);
        }
        if (\array_key_exists('bCodePostal', $data) && null !== $data['bCodePostal']) {
            $object->setBCodePostal($data['bCodePostal']);
        } elseif (\array_key_exists('bCodePostal', $data) && null === $data['bCodePostal']) {
            $object->setBCodePostal(null);
        }
        if (\array_key_exists('nomVille', $data) && null !== $data['nomVille']) {
            $object->setNomVille($data['nomVille']);
        } elseif (\array_key_exists('nomVille', $data) && null === $data['nomVille']) {
            $object->setNomVille(null);
        }
        if (\array_key_exists('bNomVille', $data) && null !== $data['bNomVille']) {
            $object->setBNomVille($data['bNomVille']);
        } elseif (\array_key_exists('bNomVille', $data) && null === $data['bNomVille']) {
            $object->setBNomVille(null);
        }
        if (\array_key_exists('codeOfficielCommune', $data) && null !== $data['codeOfficielCommune']) {
            $object->setCodeOfficielCommune($data['codeOfficielCommune']);
        } elseif (\array_key_exists('codeOfficielCommune', $data) && null === $data['codeOfficielCommune']) {
            $object->setCodeOfficielCommune(null);
        }
        if (\array_key_exists('bCodeOfficielCommune', $data) && null !== $data['bCodeOfficielCommune']) {
            $object->setBCodeOfficielCommune($data['bCodeOfficielCommune']);
        } elseif (\array_key_exists('bCodeOfficielCommune', $data) && null === $data['bCodeOfficielCommune']) {
            $object->setBCodeOfficielCommune(null);
        }
        if (\array_key_exists('commune', $data) && null !== $data['commune']) {
            $object->setCommune($data['commune']);
        } elseif (\array_key_exists('commune', $data) && null === $data['commune']) {
            $object->setCommune(null);
        }
        if (\array_key_exists('bCommune', $data) && null !== $data['bCommune']) {
            $object->setBCommune($data['bCommune']);
        } elseif (\array_key_exists('bCommune', $data) && null === $data['bCommune']) {
            $object->setBCommune(null);
        }
        if (\array_key_exists('codePays', $data) && null !== $data['codePays']) {
            $object->setCodePays($data['codePays']);
        } elseif (\array_key_exists('codePays', $data) && null === $data['codePays']) {
            $object->setCodePays(null);
        }
        if (\array_key_exists('bCodePays', $data) && null !== $data['bCodePays']) {
            $object->setBCodePays($data['bCodePays']);
        } elseif (\array_key_exists('bCodePays', $data) && null === $data['bCodePays']) {
            $object->setBCodePays(null);
        }
        if (\array_key_exists('pays', $data) && null !== $data['pays']) {
            $object->setPays($data['pays']);
        } elseif (\array_key_exists('pays', $data) && null === $data['pays']) {
            $object->setPays(null);
        }
        if (\array_key_exists('bPays', $data) && null !== $data['bPays']) {
            $object->setBPays($data['bPays']);
        } elseif (\array_key_exists('bPays', $data) && null === $data['bPays']) {
            $object->setBPays(null);
        }
        if (\array_key_exists('domicilieFiscalementHorsFrance', $data) && null !== $data['domicilieFiscalementHorsFrance']) {
            $object->setDomicilieFiscalementHorsFrance($data['domicilieFiscalementHorsFrance']);
        } elseif (\array_key_exists('domicilieFiscalementHorsFrance', $data) && null === $data['domicilieFiscalementHorsFrance']) {
            $object->setDomicilieFiscalementHorsFrance(null);
        }
        if (\array_key_exists('bDomicilieFiscalementHorsFrance', $data) && null !== $data['bDomicilieFiscalementHorsFrance']) {
            $object->setBDomicilieFiscalementHorsFrance($data['bDomicilieFiscalementHorsFrance']);
        } elseif (\array_key_exists('bDomicilieFiscalementHorsFrance', $data) && null === $data['bDomicilieFiscalementHorsFrance']) {
            $object->setBDomicilieFiscalementHorsFrance(null);
        }
        if (\array_key_exists('telDomicile', $data) && null !== $data['telDomicile']) {
            $object->setTelDomicile($data['telDomicile']);
        } elseif (\array_key_exists('telDomicile', $data) && null === $data['telDomicile']) {
            $object->setTelDomicile(null);
        }
        if (\array_key_exists('bTelDomicile', $data) && null !== $data['bTelDomicile']) {
            $object->setBTelDomicile($data['bTelDomicile']);
        } elseif (\array_key_exists('bTelDomicile', $data) && null === $data['bTelDomicile']) {
            $object->setBTelDomicile(null);
        }
        if (\array_key_exists('telPortable', $data) && null !== $data['telPortable']) {
            $object->setTelPortable($data['telPortable']);
        } elseif (\array_key_exists('telPortable', $data) && null === $data['telPortable']) {
            $object->setTelPortable(null);
        }
        if (\array_key_exists('bTelPortable', $data) && null !== $data['bTelPortable']) {
            $object->setBTelPortable($data['bTelPortable']);
        } elseif (\array_key_exists('bTelPortable', $data) && null === $data['bTelPortable']) {
            $object->setBTelPortable(null);
        }
        if (\array_key_exists('eMail', $data) && null !== $data['eMail']) {
            $object->setEMail($data['eMail']);
        } elseif (\array_key_exists('eMail', $data) && null === $data['eMail']) {
            $object->setEMail(null);
        }
        if (\array_key_exists('bEMail', $data) && null !== $data['bEMail']) {
            $object->setBEMail($data['bEMail']);
        } elseif (\array_key_exists('bEMail', $data) && null === $data['bEMail']) {
            $object->setBEMail(null);
        }
        if (\array_key_exists('rib', $data) && null !== $data['rib']) {
            $object->setRib($data['rib']);
        } elseif (\array_key_exists('rib', $data) && null === $data['rib']) {
            $object->setRib(null);
        }
        if (\array_key_exists('bRib', $data) && null !== $data['bRib']) {
            $object->setBRib($data['bRib']);
        } elseif (\array_key_exists('bRib', $data) && null === $data['bRib']) {
            $object->setBRib(null);
        }
        if (\array_key_exists('iBan', $data) && null !== $data['iBan']) {
            $object->setIBan($data['iBan']);
        } elseif (\array_key_exists('iBan', $data) && null === $data['iBan']) {
            $object->setIBan(null);
        }
        if (\array_key_exists('bIBan', $data) && null !== $data['bIBan']) {
            $object->setBIBan($data['bIBan']);
        } elseif (\array_key_exists('bIBan', $data) && null === $data['bIBan']) {
            $object->setBIBan(null);
        }
        if (\array_key_exists('bic', $data) && null !== $data['bic']) {
            $object->setBic($data['bic']);
        } elseif (\array_key_exists('bic', $data) && null === $data['bic']) {
            $object->setBic(null);
        }
        if (\array_key_exists('bBic', $data) && null !== $data['bBic']) {
            $object->setBBic($data['bBic']);
        } elseif (\array_key_exists('bBic', $data) && null === $data['bBic']) {
            $object->setBBic(null);
        }
        if (\array_key_exists('affectation1', $data) && null !== $data['affectation1']) {
            $object->setAffectation1($data['affectation1']);
        } elseif (\array_key_exists('affectation1', $data) && null === $data['affectation1']) {
            $object->setAffectation1(null);
        }
        if (\array_key_exists('bAffectation1', $data) && null !== $data['bAffectation1']) {
            $object->setBAffectation1($data['bAffectation1']);
        } elseif (\array_key_exists('bAffectation1', $data) && null === $data['bAffectation1']) {
            $object->setBAffectation1(null);
        }
        if (\array_key_exists('affectation2', $data) && null !== $data['affectation2']) {
            $object->setAffectation2($data['affectation2']);
        } elseif (\array_key_exists('affectation2', $data) && null === $data['affectation2']) {
            $object->setAffectation2(null);
        }
        if (\array_key_exists('bAffectation2', $data) && null !== $data['bAffectation2']) {
            $object->setBAffectation2($data['bAffectation2']);
        } elseif (\array_key_exists('bAffectation2', $data) && null === $data['bAffectation2']) {
            $object->setBAffectation2(null);
        }
        if (\array_key_exists('affectation3', $data) && null !== $data['affectation3']) {
            $object->setAffectation3($data['affectation3']);
        } elseif (\array_key_exists('affectation3', $data) && null === $data['affectation3']) {
            $object->setAffectation3(null);
        }
        if (\array_key_exists('bAffectation3', $data) && null !== $data['bAffectation3']) {
            $object->setBAffectation3($data['bAffectation3']);
        } elseif (\array_key_exists('bAffectation3', $data) && null === $data['bAffectation3']) {
            $object->setBAffectation3(null);
        }
        if (\array_key_exists('affectation4', $data) && null !== $data['affectation4']) {
            $object->setAffectation4($data['affectation4']);
        } elseif (\array_key_exists('affectation4', $data) && null === $data['affectation4']) {
            $object->setAffectation4(null);
        }
        if (\array_key_exists('bAffectation4', $data) && null !== $data['bAffectation4']) {
            $object->setBAffectation4($data['bAffectation4']);
        } elseif (\array_key_exists('bAffectation4', $data) && null === $data['bAffectation4']) {
            $object->setBAffectation4(null);
        }
        if (\array_key_exists('affectation5', $data) && null !== $data['affectation5']) {
            $object->setAffectation5($data['affectation5']);
        } elseif (\array_key_exists('affectation5', $data) && null === $data['affectation5']) {
            $object->setAffectation5(null);
        }
        if (\array_key_exists('bAffectation5', $data) && null !== $data['bAffectation5']) {
            $object->setBAffectation5($data['bAffectation5']);
        } elseif (\array_key_exists('bAffectation5', $data) && null === $data['bAffectation5']) {
            $object->setBAffectation5(null);
        }
        if (\array_key_exists('affectation6', $data) && null !== $data['affectation6']) {
            $object->setAffectation6($data['affectation6']);
        } elseif (\array_key_exists('affectation6', $data) && null === $data['affectation6']) {
            $object->setAffectation6(null);
        }
        if (\array_key_exists('bAffectation6', $data) && null !== $data['bAffectation6']) {
            $object->setBAffectation6($data['bAffectation6']);
        } elseif (\array_key_exists('bAffectation6', $data) && null === $data['bAffectation6']) {
            $object->setBAffectation6(null);
        }
        if (\array_key_exists('affectation7', $data) && null !== $data['affectation7']) {
            $object->setAffectation7($data['affectation7']);
        } elseif (\array_key_exists('affectation7', $data) && null === $data['affectation7']) {
            $object->setAffectation7(null);
        }
        if (\array_key_exists('bAffectation7', $data) && null !== $data['bAffectation7']) {
            $object->setBAffectation7($data['bAffectation7']);
        } elseif (\array_key_exists('bAffectation7', $data) && null === $data['bAffectation7']) {
            $object->setBAffectation7(null);
        }
        if (\array_key_exists('emplois', $data) && null !== $data['emplois']) {
            $values = [];
            foreach ($data['emplois'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'QdequippeTech\\Silae\\Api\\Model\\Emploi', 'json', $context);
            }
            $object->setEmplois($values);
        } elseif (\array_key_exists('emplois', $data) && null === $data['emplois']) {
            $object->setEmplois(null);
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
        if ($object->isInitialized('matriculeSalarie') && null !== $object->getMatriculeSalarie()) {
            $data['matriculeSalarie'] = $object->getMatriculeSalarie();
        }
        if ($object->isInitialized('numeroSecuriteSociale') && null !== $object->getNumeroSecuriteSociale()) {
            $data['numeroSecuriteSociale'] = $object->getNumeroSecuriteSociale();
        }
        if ($object->isInitialized('matriculeSalarieModele') && null !== $object->getMatriculeSalarieModele()) {
            $data['matriculeSalarieModele'] = $object->getMatriculeSalarieModele();
        }
        if ($object->isInitialized('numeroDossierSalarieModele') && null !== $object->getNumeroDossierSalarieModele()) {
            $data['numeroDossierSalarieModele'] = $object->getNumeroDossierSalarieModele();
        }
        if ($object->isInitialized('copieIntegraleSalarieModele') && null !== $object->getCopieIntegraleSalarieModele()) {
            $data['copieIntegraleSalarieModele'] = $object->getCopieIntegraleSalarieModele();
        }
        if ($object->isInitialized('calculerElementsNaissance') && null !== $object->getCalculerElementsNaissance()) {
            $data['calculerElementsNaissance'] = $object->getCalculerElementsNaissance();
        }
        if ($object->isInitialized('calculerCommune') && null !== $object->getCalculerCommune()) {
            $data['calculerCommune'] = $object->getCalculerCommune();
        }
        if ($object->isInitialized('matriculeInterne') && null !== $object->getMatriculeInterne()) {
            $data['matriculeInterne'] = $object->getMatriculeInterne();
        }
        if ($object->isInitialized('bMatriculeInterne') && null !== $object->getBMatriculeInterne()) {
            $data['bMatriculeInterne'] = $object->getBMatriculeInterne();
        }
        if ($object->isInitialized('nomNaissance') && null !== $object->getNomNaissance()) {
            $data['nomNaissance'] = $object->getNomNaissance();
        }
        if ($object->isInitialized('bNomNaissance') && null !== $object->getBNomNaissance()) {
            $data['bNomNaissance'] = $object->getBNomNaissance();
        }
        if ($object->isInitialized('nomMarital') && null !== $object->getNomMarital()) {
            $data['nomMarital'] = $object->getNomMarital();
        }
        if ($object->isInitialized('bNomMarital') && null !== $object->getBNomMarital()) {
            $data['bNomMarital'] = $object->getBNomMarital();
        }
        if ($object->isInitialized('nomUsuel') && null !== $object->getNomUsuel()) {
            $data['nomUsuel'] = $object->getNomUsuel();
        }
        if ($object->isInitialized('bNomUsuel') && null !== $object->getBNomUsuel()) {
            $data['bNomUsuel'] = $object->getBNomUsuel();
        }
        if ($object->isInitialized('prenom') && null !== $object->getPrenom()) {
            $data['prenom'] = $object->getPrenom();
        }
        if ($object->isInitialized('bPrenom') && null !== $object->getBPrenom()) {
            $data['bPrenom'] = $object->getBPrenom();
        }
        if ($object->isInitialized('civilite') && null !== $object->getCivilite()) {
            $data['civilite'] = $object->getCivilite();
        }
        if ($object->isInitialized('bCivilite') && null !== $object->getBCivilite()) {
            $data['bCivilite'] = $object->getBCivilite();
        }
        if ($object->isInitialized('situationFamiliale') && null !== $object->getSituationFamiliale()) {
            $data['situationFamiliale'] = $object->getSituationFamiliale();
        }
        if ($object->isInitialized('bSituationFamiliale') && null !== $object->getBSituationFamiliale()) {
            $data['bSituationFamiliale'] = $object->getBSituationFamiliale();
        }
        if ($object->isInitialized('dateNaissance') && null !== $object->getDateNaissance()) {
            $data['dateNaissance'] = $object->getDateNaissance()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('bDateNaissance') && null !== $object->getBDateNaissance()) {
            $data['bDateNaissance'] = $object->getBDateNaissance();
        }
        if ($object->isInitialized('departementNaissance') && null !== $object->getDepartementNaissance()) {
            $data['departementNaissance'] = $object->getDepartementNaissance();
        }
        if ($object->isInitialized('bDepartementNaissance') && null !== $object->getBDepartementNaissance()) {
            $data['bDepartementNaissance'] = $object->getBDepartementNaissance();
        }
        if ($object->isInitialized('communeNaissance') && null !== $object->getCommuneNaissance()) {
            $data['communeNaissance'] = $object->getCommuneNaissance();
        }
        if ($object->isInitialized('bCommuneNaissance') && null !== $object->getBCommuneNaissance()) {
            $data['bCommuneNaissance'] = $object->getBCommuneNaissance();
        }
        if ($object->isInitialized('codePaysNaissance') && null !== $object->getCodePaysNaissance()) {
            $data['codePaysNaissance'] = $object->getCodePaysNaissance();
        }
        if ($object->isInitialized('bCodePaysNaissance') && null !== $object->getBCodePaysNaissance()) {
            $data['bCodePaysNaissance'] = $object->getBCodePaysNaissance();
        }
        if ($object->isInitialized('paysNaissance') && null !== $object->getPaysNaissance()) {
            $data['paysNaissance'] = $object->getPaysNaissance();
        }
        if ($object->isInitialized('bPaysNaissance') && null !== $object->getBPaysNaissance()) {
            $data['bPaysNaissance'] = $object->getBPaysNaissance();
        }
        if ($object->isInitialized('codePaysNationalite') && null !== $object->getCodePaysNationalite()) {
            $data['codePaysNationalite'] = $object->getCodePaysNationalite();
        }
        if ($object->isInitialized('bCodePaysNationalite') && null !== $object->getBCodePaysNationalite()) {
            $data['bCodePaysNationalite'] = $object->getBCodePaysNationalite();
        }
        if ($object->isInitialized('paysNationalite') && null !== $object->getPaysNationalite()) {
            $data['paysNationalite'] = $object->getPaysNationalite();
        }
        if ($object->isInitialized('bPaysNationalite') && null !== $object->getBPaysNationalite()) {
            $data['bPaysNationalite'] = $object->getBPaysNationalite();
        }
        if ($object->isInitialized('titreSejourType') && null !== $object->getTitreSejourType()) {
            $data['titreSejourType'] = $object->getTitreSejourType();
        }
        if ($object->isInitialized('bTitreSejourType') && null !== $object->getBTitreSejourType()) {
            $data['bTitreSejourType'] = $object->getBTitreSejourType();
        }
        if ($object->isInitialized('titreSejourNumeroOrdre') && null !== $object->getTitreSejourNumeroOrdre()) {
            $data['titreSejourNumeroOrdre'] = $object->getTitreSejourNumeroOrdre();
        }
        if ($object->isInitialized('bTitreSejourNumeroOrdre') && null !== $object->getBTitreSejourNumeroOrdre()) {
            $data['bTitreSejourNumeroOrdre'] = $object->getBTitreSejourNumeroOrdre();
        }
        if ($object->isInitialized('titreSejourDebut') && null !== $object->getTitreSejourDebut()) {
            $data['titreSejourDebut'] = $object->getTitreSejourDebut()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('bTitreSejourDebut') && null !== $object->getBTitreSejourDebut()) {
            $data['bTitreSejourDebut'] = $object->getBTitreSejourDebut();
        }
        if ($object->isInitialized('titreSejourFin') && null !== $object->getTitreSejourFin()) {
            $data['titreSejourFin'] = $object->getTitreSejourFin()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('bTitreSejourFin') && null !== $object->getBTitreSejourFin()) {
            $data['bTitreSejourFin'] = $object->getBTitreSejourFin();
        }
        if ($object->isInitialized('numVoie') && null !== $object->getNumVoie()) {
            $data['numVoie'] = $object->getNumVoie();
        }
        if ($object->isInitialized('bNumVoie') && null !== $object->getBNumVoie()) {
            $data['bNumVoie'] = $object->getBNumVoie();
        }
        if ($object->isInitialized('btqc') && null !== $object->getBtqc()) {
            $data['btqc'] = $object->getBtqc();
        }
        if ($object->isInitialized('bBTQC') && null !== $object->getBBTQC()) {
            $data['bBTQC'] = $object->getBBTQC();
        }
        if ($object->isInitialized('nomVoie') && null !== $object->getNomVoie()) {
            $data['nomVoie'] = $object->getNomVoie();
        }
        if ($object->isInitialized('bNomVoie') && null !== $object->getBNomVoie()) {
            $data['bNomVoie'] = $object->getBNomVoie();
        }
        if ($object->isInitialized('complement') && null !== $object->getComplement()) {
            $data['complement'] = $object->getComplement();
        }
        if ($object->isInitialized('bComplement') && null !== $object->getBComplement()) {
            $data['bComplement'] = $object->getBComplement();
        }
        if ($object->isInitialized('codePostal') && null !== $object->getCodePostal()) {
            $data['codePostal'] = $object->getCodePostal();
        }
        if ($object->isInitialized('bCodePostal') && null !== $object->getBCodePostal()) {
            $data['bCodePostal'] = $object->getBCodePostal();
        }
        if ($object->isInitialized('nomVille') && null !== $object->getNomVille()) {
            $data['nomVille'] = $object->getNomVille();
        }
        if ($object->isInitialized('bNomVille') && null !== $object->getBNomVille()) {
            $data['bNomVille'] = $object->getBNomVille();
        }
        if ($object->isInitialized('codeOfficielCommune') && null !== $object->getCodeOfficielCommune()) {
            $data['codeOfficielCommune'] = $object->getCodeOfficielCommune();
        }
        if ($object->isInitialized('bCodeOfficielCommune') && null !== $object->getBCodeOfficielCommune()) {
            $data['bCodeOfficielCommune'] = $object->getBCodeOfficielCommune();
        }
        if ($object->isInitialized('commune') && null !== $object->getCommune()) {
            $data['commune'] = $object->getCommune();
        }
        if ($object->isInitialized('bCommune') && null !== $object->getBCommune()) {
            $data['bCommune'] = $object->getBCommune();
        }
        if ($object->isInitialized('codePays') && null !== $object->getCodePays()) {
            $data['codePays'] = $object->getCodePays();
        }
        if ($object->isInitialized('bCodePays') && null !== $object->getBCodePays()) {
            $data['bCodePays'] = $object->getBCodePays();
        }
        if ($object->isInitialized('pays') && null !== $object->getPays()) {
            $data['pays'] = $object->getPays();
        }
        if ($object->isInitialized('bPays') && null !== $object->getBPays()) {
            $data['bPays'] = $object->getBPays();
        }
        if ($object->isInitialized('domicilieFiscalementHorsFrance') && null !== $object->getDomicilieFiscalementHorsFrance()) {
            $data['domicilieFiscalementHorsFrance'] = $object->getDomicilieFiscalementHorsFrance();
        }
        if ($object->isInitialized('bDomicilieFiscalementHorsFrance') && null !== $object->getBDomicilieFiscalementHorsFrance()) {
            $data['bDomicilieFiscalementHorsFrance'] = $object->getBDomicilieFiscalementHorsFrance();
        }
        if ($object->isInitialized('telDomicile') && null !== $object->getTelDomicile()) {
            $data['telDomicile'] = $object->getTelDomicile();
        }
        if ($object->isInitialized('bTelDomicile') && null !== $object->getBTelDomicile()) {
            $data['bTelDomicile'] = $object->getBTelDomicile();
        }
        if ($object->isInitialized('telPortable') && null !== $object->getTelPortable()) {
            $data['telPortable'] = $object->getTelPortable();
        }
        if ($object->isInitialized('bTelPortable') && null !== $object->getBTelPortable()) {
            $data['bTelPortable'] = $object->getBTelPortable();
        }
        if ($object->isInitialized('eMail') && null !== $object->getEMail()) {
            $data['eMail'] = $object->getEMail();
        }
        if ($object->isInitialized('bEMail') && null !== $object->getBEMail()) {
            $data['bEMail'] = $object->getBEMail();
        }
        if ($object->isInitialized('rib') && null !== $object->getRib()) {
            $data['rib'] = $object->getRib();
        }
        if ($object->isInitialized('bRib') && null !== $object->getBRib()) {
            $data['bRib'] = $object->getBRib();
        }
        if ($object->isInitialized('iBan') && null !== $object->getIBan()) {
            $data['iBan'] = $object->getIBan();
        }
        if ($object->isInitialized('bIBan') && null !== $object->getBIBan()) {
            $data['bIBan'] = $object->getBIBan();
        }
        if ($object->isInitialized('bic') && null !== $object->getBic()) {
            $data['bic'] = $object->getBic();
        }
        if ($object->isInitialized('bBic') && null !== $object->getBBic()) {
            $data['bBic'] = $object->getBBic();
        }
        if ($object->isInitialized('affectation1') && null !== $object->getAffectation1()) {
            $data['affectation1'] = $object->getAffectation1();
        }
        if ($object->isInitialized('bAffectation1') && null !== $object->getBAffectation1()) {
            $data['bAffectation1'] = $object->getBAffectation1();
        }
        if ($object->isInitialized('affectation2') && null !== $object->getAffectation2()) {
            $data['affectation2'] = $object->getAffectation2();
        }
        if ($object->isInitialized('bAffectation2') && null !== $object->getBAffectation2()) {
            $data['bAffectation2'] = $object->getBAffectation2();
        }
        if ($object->isInitialized('affectation3') && null !== $object->getAffectation3()) {
            $data['affectation3'] = $object->getAffectation3();
        }
        if ($object->isInitialized('bAffectation3') && null !== $object->getBAffectation3()) {
            $data['bAffectation3'] = $object->getBAffectation3();
        }
        if ($object->isInitialized('affectation4') && null !== $object->getAffectation4()) {
            $data['affectation4'] = $object->getAffectation4();
        }
        if ($object->isInitialized('bAffectation4') && null !== $object->getBAffectation4()) {
            $data['bAffectation4'] = $object->getBAffectation4();
        }
        if ($object->isInitialized('affectation5') && null !== $object->getAffectation5()) {
            $data['affectation5'] = $object->getAffectation5();
        }
        if ($object->isInitialized('bAffectation5') && null !== $object->getBAffectation5()) {
            $data['bAffectation5'] = $object->getBAffectation5();
        }
        if ($object->isInitialized('affectation6') && null !== $object->getAffectation6()) {
            $data['affectation6'] = $object->getAffectation6();
        }
        if ($object->isInitialized('bAffectation6') && null !== $object->getBAffectation6()) {
            $data['bAffectation6'] = $object->getBAffectation6();
        }
        if ($object->isInitialized('affectation7') && null !== $object->getAffectation7()) {
            $data['affectation7'] = $object->getAffectation7();
        }
        if ($object->isInitialized('bAffectation7') && null !== $object->getBAffectation7()) {
            $data['bAffectation7'] = $object->getBAffectation7();
        }
        if ($object->isInitialized('emplois') && null !== $object->getEmplois()) {
            $values = [];
            foreach ($object->getEmplois() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['emplois'] = $values;
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\SalarieEmplois' => false];
    }
}
