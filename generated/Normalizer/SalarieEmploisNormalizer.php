<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\Emploi;
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

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return SalarieEmplois::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && SalarieEmplois::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new SalarieEmplois();
        if (\array_key_exists('ribVersementPlafond', $data) && \is_int($data['ribVersementPlafond'])) {
            $data['ribVersementPlafond'] = (float) $data['ribVersementPlafond'];
        }

        if (\array_key_exists('rib2VersementPlafond', $data) && \is_int($data['rib2VersementPlafond'])) {
            $data['rib2VersementPlafond'] = (float) $data['rib2VersementPlafond'];
        }

        if (\array_key_exists('rib3VersementPlafond', $data) && \is_int($data['rib3VersementPlafond'])) {
            $data['rib3VersementPlafond'] = (float) $data['rib3VersementPlafond'];
        }

        if (\array_key_exists('copieIntegraleSalarieModele', $data) && \is_int($data['copieIntegraleSalarieModele'])) {
            $data['copieIntegraleSalarieModele'] = (bool) $data['copieIntegraleSalarieModele'];
        }

        if (\array_key_exists('calculerElementsNaissance', $data) && \is_int($data['calculerElementsNaissance'])) {
            $data['calculerElementsNaissance'] = (bool) $data['calculerElementsNaissance'];
        }

        if (\array_key_exists('calculerCommune', $data) && \is_int($data['calculerCommune'])) {
            $data['calculerCommune'] = (bool) $data['calculerCommune'];
        }

        if (\array_key_exists('bMatriculeInterne', $data) && \is_int($data['bMatriculeInterne'])) {
            $data['bMatriculeInterne'] = (bool) $data['bMatriculeInterne'];
        }

        if (\array_key_exists('bNomNaissance', $data) && \is_int($data['bNomNaissance'])) {
            $data['bNomNaissance'] = (bool) $data['bNomNaissance'];
        }

        if (\array_key_exists('bNomMarital', $data) && \is_int($data['bNomMarital'])) {
            $data['bNomMarital'] = (bool) $data['bNomMarital'];
        }

        if (\array_key_exists('bNomUsuel', $data) && \is_int($data['bNomUsuel'])) {
            $data['bNomUsuel'] = (bool) $data['bNomUsuel'];
        }

        if (\array_key_exists('bPrenom', $data) && \is_int($data['bPrenom'])) {
            $data['bPrenom'] = (bool) $data['bPrenom'];
        }

        if (\array_key_exists('bCivilite', $data) && \is_int($data['bCivilite'])) {
            $data['bCivilite'] = (bool) $data['bCivilite'];
        }

        if (\array_key_exists('bSituationFamiliale', $data) && \is_int($data['bSituationFamiliale'])) {
            $data['bSituationFamiliale'] = (bool) $data['bSituationFamiliale'];
        }

        if (\array_key_exists('bDateNaissance', $data) && \is_int($data['bDateNaissance'])) {
            $data['bDateNaissance'] = (bool) $data['bDateNaissance'];
        }

        if (\array_key_exists('bDepartementNaissance', $data) && \is_int($data['bDepartementNaissance'])) {
            $data['bDepartementNaissance'] = (bool) $data['bDepartementNaissance'];
        }

        if (\array_key_exists('bCommuneNaissance', $data) && \is_int($data['bCommuneNaissance'])) {
            $data['bCommuneNaissance'] = (bool) $data['bCommuneNaissance'];
        }

        if (\array_key_exists('bCodePaysNaissance', $data) && \is_int($data['bCodePaysNaissance'])) {
            $data['bCodePaysNaissance'] = (bool) $data['bCodePaysNaissance'];
        }

        if (\array_key_exists('bPaysNaissance', $data) && \is_int($data['bPaysNaissance'])) {
            $data['bPaysNaissance'] = (bool) $data['bPaysNaissance'];
        }

        if (\array_key_exists('bCodePaysNationalite', $data) && \is_int($data['bCodePaysNationalite'])) {
            $data['bCodePaysNationalite'] = (bool) $data['bCodePaysNationalite'];
        }

        if (\array_key_exists('bPaysNationalite', $data) && \is_int($data['bPaysNationalite'])) {
            $data['bPaysNationalite'] = (bool) $data['bPaysNationalite'];
        }

        if (\array_key_exists('bTitreSejourType', $data) && \is_int($data['bTitreSejourType'])) {
            $data['bTitreSejourType'] = (bool) $data['bTitreSejourType'];
        }

        if (\array_key_exists('bTitreSejourNumeroOrdre', $data) && \is_int($data['bTitreSejourNumeroOrdre'])) {
            $data['bTitreSejourNumeroOrdre'] = (bool) $data['bTitreSejourNumeroOrdre'];
        }

        if (\array_key_exists('bTitreSejourDebut', $data) && \is_int($data['bTitreSejourDebut'])) {
            $data['bTitreSejourDebut'] = (bool) $data['bTitreSejourDebut'];
        }

        if (\array_key_exists('bTitreSejourFin', $data) && \is_int($data['bTitreSejourFin'])) {
            $data['bTitreSejourFin'] = (bool) $data['bTitreSejourFin'];
        }

        if (\array_key_exists('bNumVoie', $data) && \is_int($data['bNumVoie'])) {
            $data['bNumVoie'] = (bool) $data['bNumVoie'];
        }

        if (\array_key_exists('bBTQC', $data) && \is_int($data['bBTQC'])) {
            $data['bBTQC'] = (bool) $data['bBTQC'];
        }

        if (\array_key_exists('bNomVoie', $data) && \is_int($data['bNomVoie'])) {
            $data['bNomVoie'] = (bool) $data['bNomVoie'];
        }

        if (\array_key_exists('bComplement', $data) && \is_int($data['bComplement'])) {
            $data['bComplement'] = (bool) $data['bComplement'];
        }

        if (\array_key_exists('bCodePostal', $data) && \is_int($data['bCodePostal'])) {
            $data['bCodePostal'] = (bool) $data['bCodePostal'];
        }

        if (\array_key_exists('bNomVille', $data) && \is_int($data['bNomVille'])) {
            $data['bNomVille'] = (bool) $data['bNomVille'];
        }

        if (\array_key_exists('bCodeOfficielCommune', $data) && \is_int($data['bCodeOfficielCommune'])) {
            $data['bCodeOfficielCommune'] = (bool) $data['bCodeOfficielCommune'];
        }

        if (\array_key_exists('bCommune', $data) && \is_int($data['bCommune'])) {
            $data['bCommune'] = (bool) $data['bCommune'];
        }

        if (\array_key_exists('bCodePays', $data) && \is_int($data['bCodePays'])) {
            $data['bCodePays'] = (bool) $data['bCodePays'];
        }

        if (\array_key_exists('bPays', $data) && \is_int($data['bPays'])) {
            $data['bPays'] = (bool) $data['bPays'];
        }

        if (\array_key_exists('domicilieFiscalementHorsFrance', $data) && \is_int($data['domicilieFiscalementHorsFrance'])) {
            $data['domicilieFiscalementHorsFrance'] = (bool) $data['domicilieFiscalementHorsFrance'];
        }

        if (\array_key_exists('bDomicilieFiscalementHorsFrance', $data) && \is_int($data['bDomicilieFiscalementHorsFrance'])) {
            $data['bDomicilieFiscalementHorsFrance'] = (bool) $data['bDomicilieFiscalementHorsFrance'];
        }

        if (\array_key_exists('bTelDomicile', $data) && \is_int($data['bTelDomicile'])) {
            $data['bTelDomicile'] = (bool) $data['bTelDomicile'];
        }

        if (\array_key_exists('bTelPortable', $data) && \is_int($data['bTelPortable'])) {
            $data['bTelPortable'] = (bool) $data['bTelPortable'];
        }

        if (\array_key_exists('bEMail', $data) && \is_int($data['bEMail'])) {
            $data['bEMail'] = (bool) $data['bEMail'];
        }

        if (\array_key_exists('bRib', $data) && \is_int($data['bRib'])) {
            $data['bRib'] = (bool) $data['bRib'];
        }

        if (\array_key_exists('bIBan', $data) && \is_int($data['bIBan'])) {
            $data['bIBan'] = (bool) $data['bIBan'];
        }

        if (\array_key_exists('bBic', $data) && \is_int($data['bBic'])) {
            $data['bBic'] = (bool) $data['bBic'];
        }

        if (\array_key_exists('bAffectation1', $data) && \is_int($data['bAffectation1'])) {
            $data['bAffectation1'] = (bool) $data['bAffectation1'];
        }

        if (\array_key_exists('bAffectation2', $data) && \is_int($data['bAffectation2'])) {
            $data['bAffectation2'] = (bool) $data['bAffectation2'];
        }

        if (\array_key_exists('bAffectation3', $data) && \is_int($data['bAffectation3'])) {
            $data['bAffectation3'] = (bool) $data['bAffectation3'];
        }

        if (\array_key_exists('bAffectation4', $data) && \is_int($data['bAffectation4'])) {
            $data['bAffectation4'] = (bool) $data['bAffectation4'];
        }

        if (\array_key_exists('bAffectation5', $data) && \is_int($data['bAffectation5'])) {
            $data['bAffectation5'] = (bool) $data['bAffectation5'];
        }

        if (\array_key_exists('bAffectation6', $data) && \is_int($data['bAffectation6'])) {
            $data['bAffectation6'] = (bool) $data['bAffectation6'];
        }

        if (\array_key_exists('bAffectation7', $data) && \is_int($data['bAffectation7'])) {
            $data['bAffectation7'] = (bool) $data['bAffectation7'];
        }

        if (\array_key_exists('bAnneeNaissance', $data) && \is_int($data['bAnneeNaissance'])) {
            $data['bAnneeNaissance'] = (bool) $data['bAnneeNaissance'];
        }

        if (\array_key_exists('bEMailPro', $data) && \is_int($data['bEMailPro'])) {
            $data['bEMailPro'] = (bool) $data['bEMailPro'];
        }

        if (\array_key_exists('bPersonneAContacterUrgenceNom', $data) && \is_int($data['bPersonneAContacterUrgenceNom'])) {
            $data['bPersonneAContacterUrgenceNom'] = (bool) $data['bPersonneAContacterUrgenceNom'];
        }

        if (\array_key_exists('bPersonneAContacterUrgencePrenom', $data) && \is_int($data['bPersonneAContacterUrgencePrenom'])) {
            $data['bPersonneAContacterUrgencePrenom'] = (bool) $data['bPersonneAContacterUrgencePrenom'];
        }

        if (\array_key_exists('bPersonneAContacterUrgenceTel', $data) && \is_int($data['bPersonneAContacterUrgenceTel'])) {
            $data['bPersonneAContacterUrgenceTel'] = (bool) $data['bPersonneAContacterUrgenceTel'];
        }

        if (\array_key_exists('bPersonneAContacterUrgenceMel', $data) && \is_int($data['bPersonneAContacterUrgenceMel'])) {
            $data['bPersonneAContacterUrgenceMel'] = (bool) $data['bPersonneAContacterUrgenceMel'];
        }

        if (\array_key_exists('ribPourVirements', $data) && \is_int($data['ribPourVirements'])) {
            $data['ribPourVirements'] = (bool) $data['ribPourVirements'];
        }

        if (\array_key_exists('bRibPourVirements', $data) && \is_int($data['bRibPourVirements'])) {
            $data['bRibPourVirements'] = (bool) $data['bRibPourVirements'];
        }

        if (\array_key_exists('bRibVersementPlafond', $data) && \is_int($data['bRibVersementPlafond'])) {
            $data['bRibVersementPlafond'] = (bool) $data['bRibVersementPlafond'];
        }

        if (\array_key_exists('paiementEspeces', $data) && \is_int($data['paiementEspeces'])) {
            $data['paiementEspeces'] = (bool) $data['paiementEspeces'];
        }

        if (\array_key_exists('bPaiementEspeces', $data) && \is_int($data['bPaiementEspeces'])) {
            $data['bPaiementEspeces'] = (bool) $data['bPaiementEspeces'];
        }

        if (\array_key_exists('bDureePeriodeEssai1', $data) && \is_int($data['bDureePeriodeEssai1'])) {
            $data['bDureePeriodeEssai1'] = (bool) $data['bDureePeriodeEssai1'];
        }

        if (\array_key_exists('bDureePeriodeEssai2', $data) && \is_int($data['bDureePeriodeEssai2'])) {
            $data['bDureePeriodeEssai2'] = (bool) $data['bDureePeriodeEssai2'];
        }

        if (\array_key_exists('bNbPersACharge', $data) && \is_int($data['bNbPersACharge'])) {
            $data['bNbPersACharge'] = (bool) $data['bNbPersACharge'];
        }

        if (\array_key_exists('bRib2', $data) && \is_int($data['bRib2'])) {
            $data['bRib2'] = (bool) $data['bRib2'];
        }

        if (\array_key_exists('bIBan2', $data) && \is_int($data['bIBan2'])) {
            $data['bIBan2'] = (bool) $data['bIBan2'];
        }

        if (\array_key_exists('bBic2', $data) && \is_int($data['bBic2'])) {
            $data['bBic2'] = (bool) $data['bBic2'];
        }

        if (\array_key_exists('rib2PourVirements', $data) && \is_int($data['rib2PourVirements'])) {
            $data['rib2PourVirements'] = (bool) $data['rib2PourVirements'];
        }

        if (\array_key_exists('bRib2PourVirements', $data) && \is_int($data['bRib2PourVirements'])) {
            $data['bRib2PourVirements'] = (bool) $data['bRib2PourVirements'];
        }

        if (\array_key_exists('bRib2VersementPlafond', $data) && \is_int($data['bRib2VersementPlafond'])) {
            $data['bRib2VersementPlafond'] = (bool) $data['bRib2VersementPlafond'];
        }

        if (\array_key_exists('bRib3', $data) && \is_int($data['bRib3'])) {
            $data['bRib3'] = (bool) $data['bRib3'];
        }

        if (\array_key_exists('bIBan3', $data) && \is_int($data['bIBan3'])) {
            $data['bIBan3'] = (bool) $data['bIBan3'];
        }

        if (\array_key_exists('bBic3', $data) && \is_int($data['bBic3'])) {
            $data['bBic3'] = (bool) $data['bBic3'];
        }

        if (\array_key_exists('rib3PourVirements', $data) && \is_int($data['rib3PourVirements'])) {
            $data['rib3PourVirements'] = (bool) $data['rib3PourVirements'];
        }

        if (\array_key_exists('bRib3PourVirements', $data) && \is_int($data['bRib3PourVirements'])) {
            $data['bRib3PourVirements'] = (bool) $data['bRib3PourVirements'];
        }

        if (\array_key_exists('bRib3VersementPlafond', $data) && \is_int($data['bRib3VersementPlafond'])) {
            $data['bRib3VersementPlafond'] = (bool) $data['bRib3VersementPlafond'];
        }

        if (\array_key_exists('bSexe', $data) && \is_int($data['bSexe'])) {
            $data['bSexe'] = (bool) $data['bSexe'];
        }

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
            $object->setDateNaissance(\DateTime::createFromFormat('Y-m-d', $data['dateNaissance'])->setTime(0, 0, 0));
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
            $object->setTitreSejourDebut(\DateTime::createFromFormat('Y-m-d', $data['titreSejourDebut'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('titreSejourDebut', $data) && null === $data['titreSejourDebut']) {
            $object->setTitreSejourDebut(null);
        }

        if (\array_key_exists('bTitreSejourDebut', $data) && null !== $data['bTitreSejourDebut']) {
            $object->setBTitreSejourDebut($data['bTitreSejourDebut']);
        } elseif (\array_key_exists('bTitreSejourDebut', $data) && null === $data['bTitreSejourDebut']) {
            $object->setBTitreSejourDebut(null);
        }

        if (\array_key_exists('titreSejourFin', $data) && null !== $data['titreSejourFin']) {
            $object->setTitreSejourFin(\DateTime::createFromFormat('Y-m-d', $data['titreSejourFin'])->setTime(0, 0, 0));
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
                $values[] = $this->denormalizer->denormalize($value, Emploi::class, 'json', $context);
            }

            $object->setEmplois($values);
        } elseif (\array_key_exists('emplois', $data) && null === $data['emplois']) {
            $object->setEmplois(null);
        }

        if (\array_key_exists('anneeNaissance', $data) && null !== $data['anneeNaissance']) {
            $object->setAnneeNaissance($data['anneeNaissance']);
        } elseif (\array_key_exists('anneeNaissance', $data) && null === $data['anneeNaissance']) {
            $object->setAnneeNaissance(null);
        }

        if (\array_key_exists('bAnneeNaissance', $data) && null !== $data['bAnneeNaissance']) {
            $object->setBAnneeNaissance($data['bAnneeNaissance']);
        } elseif (\array_key_exists('bAnneeNaissance', $data) && null === $data['bAnneeNaissance']) {
            $object->setBAnneeNaissance(null);
        }

        if (\array_key_exists('eMailPro', $data) && null !== $data['eMailPro']) {
            $object->setEMailPro($data['eMailPro']);
        } elseif (\array_key_exists('eMailPro', $data) && null === $data['eMailPro']) {
            $object->setEMailPro(null);
        }

        if (\array_key_exists('bEMailPro', $data) && null !== $data['bEMailPro']) {
            $object->setBEMailPro($data['bEMailPro']);
        } elseif (\array_key_exists('bEMailPro', $data) && null === $data['bEMailPro']) {
            $object->setBEMailPro(null);
        }

        if (\array_key_exists('personneAContacterUrgenceNom', $data) && null !== $data['personneAContacterUrgenceNom']) {
            $object->setPersonneAContacterUrgenceNom($data['personneAContacterUrgenceNom']);
        } elseif (\array_key_exists('personneAContacterUrgenceNom', $data) && null === $data['personneAContacterUrgenceNom']) {
            $object->setPersonneAContacterUrgenceNom(null);
        }

        if (\array_key_exists('bPersonneAContacterUrgenceNom', $data) && null !== $data['bPersonneAContacterUrgenceNom']) {
            $object->setBPersonneAContacterUrgenceNom($data['bPersonneAContacterUrgenceNom']);
        } elseif (\array_key_exists('bPersonneAContacterUrgenceNom', $data) && null === $data['bPersonneAContacterUrgenceNom']) {
            $object->setBPersonneAContacterUrgenceNom(null);
        }

        if (\array_key_exists('personneAContacterUrgencePrenom', $data) && null !== $data['personneAContacterUrgencePrenom']) {
            $object->setPersonneAContacterUrgencePrenom($data['personneAContacterUrgencePrenom']);
        } elseif (\array_key_exists('personneAContacterUrgencePrenom', $data) && null === $data['personneAContacterUrgencePrenom']) {
            $object->setPersonneAContacterUrgencePrenom(null);
        }

        if (\array_key_exists('bPersonneAContacterUrgencePrenom', $data) && null !== $data['bPersonneAContacterUrgencePrenom']) {
            $object->setBPersonneAContacterUrgencePrenom($data['bPersonneAContacterUrgencePrenom']);
        } elseif (\array_key_exists('bPersonneAContacterUrgencePrenom', $data) && null === $data['bPersonneAContacterUrgencePrenom']) {
            $object->setBPersonneAContacterUrgencePrenom(null);
        }

        if (\array_key_exists('personneAContacterUrgenceTel', $data) && null !== $data['personneAContacterUrgenceTel']) {
            $object->setPersonneAContacterUrgenceTel($data['personneAContacterUrgenceTel']);
        } elseif (\array_key_exists('personneAContacterUrgenceTel', $data) && null === $data['personneAContacterUrgenceTel']) {
            $object->setPersonneAContacterUrgenceTel(null);
        }

        if (\array_key_exists('bPersonneAContacterUrgenceTel', $data) && null !== $data['bPersonneAContacterUrgenceTel']) {
            $object->setBPersonneAContacterUrgenceTel($data['bPersonneAContacterUrgenceTel']);
        } elseif (\array_key_exists('bPersonneAContacterUrgenceTel', $data) && null === $data['bPersonneAContacterUrgenceTel']) {
            $object->setBPersonneAContacterUrgenceTel(null);
        }

        if (\array_key_exists('personneAContacterUrgenceMel', $data) && null !== $data['personneAContacterUrgenceMel']) {
            $object->setPersonneAContacterUrgenceMel($data['personneAContacterUrgenceMel']);
        } elseif (\array_key_exists('personneAContacterUrgenceMel', $data) && null === $data['personneAContacterUrgenceMel']) {
            $object->setPersonneAContacterUrgenceMel(null);
        }

        if (\array_key_exists('bPersonneAContacterUrgenceMel', $data) && null !== $data['bPersonneAContacterUrgenceMel']) {
            $object->setBPersonneAContacterUrgenceMel($data['bPersonneAContacterUrgenceMel']);
        } elseif (\array_key_exists('bPersonneAContacterUrgenceMel', $data) && null === $data['bPersonneAContacterUrgenceMel']) {
            $object->setBPersonneAContacterUrgenceMel(null);
        }

        if (\array_key_exists('ribPourVirements', $data) && null !== $data['ribPourVirements']) {
            $object->setRibPourVirements($data['ribPourVirements']);
        } elseif (\array_key_exists('ribPourVirements', $data) && null === $data['ribPourVirements']) {
            $object->setRibPourVirements(null);
        }

        if (\array_key_exists('bRibPourVirements', $data) && null !== $data['bRibPourVirements']) {
            $object->setBRibPourVirements($data['bRibPourVirements']);
        } elseif (\array_key_exists('bRibPourVirements', $data) && null === $data['bRibPourVirements']) {
            $object->setBRibPourVirements(null);
        }

        if (\array_key_exists('ribVersementPlafond', $data) && null !== $data['ribVersementPlafond']) {
            $object->setRibVersementPlafond($data['ribVersementPlafond']);
        } elseif (\array_key_exists('ribVersementPlafond', $data) && null === $data['ribVersementPlafond']) {
            $object->setRibVersementPlafond(null);
        }

        if (\array_key_exists('bRibVersementPlafond', $data) && null !== $data['bRibVersementPlafond']) {
            $object->setBRibVersementPlafond($data['bRibVersementPlafond']);
        } elseif (\array_key_exists('bRibVersementPlafond', $data) && null === $data['bRibVersementPlafond']) {
            $object->setBRibVersementPlafond(null);
        }

        if (\array_key_exists('paiementEspeces', $data) && null !== $data['paiementEspeces']) {
            $object->setPaiementEspeces($data['paiementEspeces']);
        } elseif (\array_key_exists('paiementEspeces', $data) && null === $data['paiementEspeces']) {
            $object->setPaiementEspeces(null);
        }

        if (\array_key_exists('bPaiementEspeces', $data) && null !== $data['bPaiementEspeces']) {
            $object->setBPaiementEspeces($data['bPaiementEspeces']);
        } elseif (\array_key_exists('bPaiementEspeces', $data) && null === $data['bPaiementEspeces']) {
            $object->setBPaiementEspeces(null);
        }

        if (\array_key_exists('dureePeriodeEssai1', $data) && null !== $data['dureePeriodeEssai1']) {
            $object->setDureePeriodeEssai1($data['dureePeriodeEssai1']);
        } elseif (\array_key_exists('dureePeriodeEssai1', $data) && null === $data['dureePeriodeEssai1']) {
            $object->setDureePeriodeEssai1(null);
        }

        if (\array_key_exists('bDureePeriodeEssai1', $data) && null !== $data['bDureePeriodeEssai1']) {
            $object->setBDureePeriodeEssai1($data['bDureePeriodeEssai1']);
        } elseif (\array_key_exists('bDureePeriodeEssai1', $data) && null === $data['bDureePeriodeEssai1']) {
            $object->setBDureePeriodeEssai1(null);
        }

        if (\array_key_exists('dureePeriodeEssai2', $data) && null !== $data['dureePeriodeEssai2']) {
            $object->setDureePeriodeEssai2($data['dureePeriodeEssai2']);
        } elseif (\array_key_exists('dureePeriodeEssai2', $data) && null === $data['dureePeriodeEssai2']) {
            $object->setDureePeriodeEssai2(null);
        }

        if (\array_key_exists('bDureePeriodeEssai2', $data) && null !== $data['bDureePeriodeEssai2']) {
            $object->setBDureePeriodeEssai2($data['bDureePeriodeEssai2']);
        } elseif (\array_key_exists('bDureePeriodeEssai2', $data) && null === $data['bDureePeriodeEssai2']) {
            $object->setBDureePeriodeEssai2(null);
        }

        if (\array_key_exists('nbPersACharge', $data) && null !== $data['nbPersACharge']) {
            $object->setNbPersACharge($data['nbPersACharge']);
        } elseif (\array_key_exists('nbPersACharge', $data) && null === $data['nbPersACharge']) {
            $object->setNbPersACharge(null);
        }

        if (\array_key_exists('bNbPersACharge', $data) && null !== $data['bNbPersACharge']) {
            $object->setBNbPersACharge($data['bNbPersACharge']);
        } elseif (\array_key_exists('bNbPersACharge', $data) && null === $data['bNbPersACharge']) {
            $object->setBNbPersACharge(null);
        }

        if (\array_key_exists('rib2', $data) && null !== $data['rib2']) {
            $object->setRib2($data['rib2']);
        } elseif (\array_key_exists('rib2', $data) && null === $data['rib2']) {
            $object->setRib2(null);
        }

        if (\array_key_exists('bRib2', $data) && null !== $data['bRib2']) {
            $object->setBRib2($data['bRib2']);
        } elseif (\array_key_exists('bRib2', $data) && null === $data['bRib2']) {
            $object->setBRib2(null);
        }

        if (\array_key_exists('iBan2', $data) && null !== $data['iBan2']) {
            $object->setIBan2($data['iBan2']);
        } elseif (\array_key_exists('iBan2', $data) && null === $data['iBan2']) {
            $object->setIBan2(null);
        }

        if (\array_key_exists('bIBan2', $data) && null !== $data['bIBan2']) {
            $object->setBIBan2($data['bIBan2']);
        } elseif (\array_key_exists('bIBan2', $data) && null === $data['bIBan2']) {
            $object->setBIBan2(null);
        }

        if (\array_key_exists('bic2', $data) && null !== $data['bic2']) {
            $object->setBic2($data['bic2']);
        } elseif (\array_key_exists('bic2', $data) && null === $data['bic2']) {
            $object->setBic2(null);
        }

        if (\array_key_exists('bBic2', $data) && null !== $data['bBic2']) {
            $object->setBBic2($data['bBic2']);
        } elseif (\array_key_exists('bBic2', $data) && null === $data['bBic2']) {
            $object->setBBic2(null);
        }

        if (\array_key_exists('rib2PourVirements', $data) && null !== $data['rib2PourVirements']) {
            $object->setRib2PourVirements($data['rib2PourVirements']);
        } elseif (\array_key_exists('rib2PourVirements', $data) && null === $data['rib2PourVirements']) {
            $object->setRib2PourVirements(null);
        }

        if (\array_key_exists('bRib2PourVirements', $data) && null !== $data['bRib2PourVirements']) {
            $object->setBRib2PourVirements($data['bRib2PourVirements']);
        } elseif (\array_key_exists('bRib2PourVirements', $data) && null === $data['bRib2PourVirements']) {
            $object->setBRib2PourVirements(null);
        }

        if (\array_key_exists('rib2VersementPlafond', $data) && null !== $data['rib2VersementPlafond']) {
            $object->setRib2VersementPlafond($data['rib2VersementPlafond']);
        } elseif (\array_key_exists('rib2VersementPlafond', $data) && null === $data['rib2VersementPlafond']) {
            $object->setRib2VersementPlafond(null);
        }

        if (\array_key_exists('bRib2VersementPlafond', $data) && null !== $data['bRib2VersementPlafond']) {
            $object->setBRib2VersementPlafond($data['bRib2VersementPlafond']);
        } elseif (\array_key_exists('bRib2VersementPlafond', $data) && null === $data['bRib2VersementPlafond']) {
            $object->setBRib2VersementPlafond(null);
        }

        if (\array_key_exists('rib3', $data) && null !== $data['rib3']) {
            $object->setRib3($data['rib3']);
        } elseif (\array_key_exists('rib3', $data) && null === $data['rib3']) {
            $object->setRib3(null);
        }

        if (\array_key_exists('bRib3', $data) && null !== $data['bRib3']) {
            $object->setBRib3($data['bRib3']);
        } elseif (\array_key_exists('bRib3', $data) && null === $data['bRib3']) {
            $object->setBRib3(null);
        }

        if (\array_key_exists('iBan3', $data) && null !== $data['iBan3']) {
            $object->setIBan3($data['iBan3']);
        } elseif (\array_key_exists('iBan3', $data) && null === $data['iBan3']) {
            $object->setIBan3(null);
        }

        if (\array_key_exists('bIBan3', $data) && null !== $data['bIBan3']) {
            $object->setBIBan3($data['bIBan3']);
        } elseif (\array_key_exists('bIBan3', $data) && null === $data['bIBan3']) {
            $object->setBIBan3(null);
        }

        if (\array_key_exists('bic3', $data) && null !== $data['bic3']) {
            $object->setBic3($data['bic3']);
        } elseif (\array_key_exists('bic3', $data) && null === $data['bic3']) {
            $object->setBic3(null);
        }

        if (\array_key_exists('bBic3', $data) && null !== $data['bBic3']) {
            $object->setBBic3($data['bBic3']);
        } elseif (\array_key_exists('bBic3', $data) && null === $data['bBic3']) {
            $object->setBBic3(null);
        }

        if (\array_key_exists('rib3PourVirements', $data) && null !== $data['rib3PourVirements']) {
            $object->setRib3PourVirements($data['rib3PourVirements']);
        } elseif (\array_key_exists('rib3PourVirements', $data) && null === $data['rib3PourVirements']) {
            $object->setRib3PourVirements(null);
        }

        if (\array_key_exists('bRib3PourVirements', $data) && null !== $data['bRib3PourVirements']) {
            $object->setBRib3PourVirements($data['bRib3PourVirements']);
        } elseif (\array_key_exists('bRib3PourVirements', $data) && null === $data['bRib3PourVirements']) {
            $object->setBRib3PourVirements(null);
        }

        if (\array_key_exists('rib3VersementPlafond', $data) && null !== $data['rib3VersementPlafond']) {
            $object->setRib3VersementPlafond($data['rib3VersementPlafond']);
        } elseif (\array_key_exists('rib3VersementPlafond', $data) && null === $data['rib3VersementPlafond']) {
            $object->setRib3VersementPlafond(null);
        }

        if (\array_key_exists('bRib3VersementPlafond', $data) && null !== $data['bRib3VersementPlafond']) {
            $object->setBRib3VersementPlafond($data['bRib3VersementPlafond']);
        } elseif (\array_key_exists('bRib3VersementPlafond', $data) && null === $data['bRib3VersementPlafond']) {
            $object->setBRib3VersementPlafond(null);
        }

        if (\array_key_exists('sexe', $data) && null !== $data['sexe']) {
            $object->setSexe($data['sexe']);
        } elseif (\array_key_exists('sexe', $data) && null === $data['sexe']) {
            $object->setSexe(null);
        }

        if (\array_key_exists('bSexe', $data) && null !== $data['bSexe']) {
            $object->setBSexe($data['bSexe']);
        } elseif (\array_key_exists('bSexe', $data) && null === $data['bSexe']) {
            $object->setBSexe(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('matriculeSalarie') && null !== $data->getMatriculeSalarie()) {
            $dataArray['matriculeSalarie'] = $data->getMatriculeSalarie();
        }

        if ($data->isInitialized('numeroSecuriteSociale') && null !== $data->getNumeroSecuriteSociale()) {
            $dataArray['numeroSecuriteSociale'] = $data->getNumeroSecuriteSociale();
        }

        if ($data->isInitialized('matriculeSalarieModele') && null !== $data->getMatriculeSalarieModele()) {
            $dataArray['matriculeSalarieModele'] = $data->getMatriculeSalarieModele();
        }

        if ($data->isInitialized('numeroDossierSalarieModele') && null !== $data->getNumeroDossierSalarieModele()) {
            $dataArray['numeroDossierSalarieModele'] = $data->getNumeroDossierSalarieModele();
        }

        if ($data->isInitialized('copieIntegraleSalarieModele') && null !== $data->getCopieIntegraleSalarieModele()) {
            $dataArray['copieIntegraleSalarieModele'] = $data->getCopieIntegraleSalarieModele();
        }

        if ($data->isInitialized('calculerElementsNaissance') && null !== $data->getCalculerElementsNaissance()) {
            $dataArray['calculerElementsNaissance'] = $data->getCalculerElementsNaissance();
        }

        if ($data->isInitialized('calculerCommune') && null !== $data->getCalculerCommune()) {
            $dataArray['calculerCommune'] = $data->getCalculerCommune();
        }

        if ($data->isInitialized('matriculeInterne') && null !== $data->getMatriculeInterne()) {
            $dataArray['matriculeInterne'] = $data->getMatriculeInterne();
        }

        if ($data->isInitialized('bMatriculeInterne') && null !== $data->getBMatriculeInterne()) {
            $dataArray['bMatriculeInterne'] = $data->getBMatriculeInterne();
        }

        if ($data->isInitialized('nomNaissance') && null !== $data->getNomNaissance()) {
            $dataArray['nomNaissance'] = $data->getNomNaissance();
        }

        if ($data->isInitialized('bNomNaissance') && null !== $data->getBNomNaissance()) {
            $dataArray['bNomNaissance'] = $data->getBNomNaissance();
        }

        if ($data->isInitialized('nomMarital') && null !== $data->getNomMarital()) {
            $dataArray['nomMarital'] = $data->getNomMarital();
        }

        if ($data->isInitialized('bNomMarital') && null !== $data->getBNomMarital()) {
            $dataArray['bNomMarital'] = $data->getBNomMarital();
        }

        if ($data->isInitialized('nomUsuel') && null !== $data->getNomUsuel()) {
            $dataArray['nomUsuel'] = $data->getNomUsuel();
        }

        if ($data->isInitialized('bNomUsuel') && null !== $data->getBNomUsuel()) {
            $dataArray['bNomUsuel'] = $data->getBNomUsuel();
        }

        if ($data->isInitialized('prenom') && null !== $data->getPrenom()) {
            $dataArray['prenom'] = $data->getPrenom();
        }

        if ($data->isInitialized('bPrenom') && null !== $data->getBPrenom()) {
            $dataArray['bPrenom'] = $data->getBPrenom();
        }

        if ($data->isInitialized('civilite') && null !== $data->getCivilite()) {
            $dataArray['civilite'] = $data->getCivilite();
        }

        if ($data->isInitialized('bCivilite') && null !== $data->getBCivilite()) {
            $dataArray['bCivilite'] = $data->getBCivilite();
        }

        if ($data->isInitialized('situationFamiliale') && null !== $data->getSituationFamiliale()) {
            $dataArray['situationFamiliale'] = $data->getSituationFamiliale();
        }

        if ($data->isInitialized('bSituationFamiliale') && null !== $data->getBSituationFamiliale()) {
            $dataArray['bSituationFamiliale'] = $data->getBSituationFamiliale();
        }

        if ($data->isInitialized('dateNaissance') && null !== $data->getDateNaissance()) {
            $dataArray['dateNaissance'] = $data->getDateNaissance()->format('Y-m-d');
        }

        if ($data->isInitialized('bDateNaissance') && null !== $data->getBDateNaissance()) {
            $dataArray['bDateNaissance'] = $data->getBDateNaissance();
        }

        if ($data->isInitialized('departementNaissance') && null !== $data->getDepartementNaissance()) {
            $dataArray['departementNaissance'] = $data->getDepartementNaissance();
        }

        if ($data->isInitialized('bDepartementNaissance') && null !== $data->getBDepartementNaissance()) {
            $dataArray['bDepartementNaissance'] = $data->getBDepartementNaissance();
        }

        if ($data->isInitialized('communeNaissance') && null !== $data->getCommuneNaissance()) {
            $dataArray['communeNaissance'] = $data->getCommuneNaissance();
        }

        if ($data->isInitialized('bCommuneNaissance') && null !== $data->getBCommuneNaissance()) {
            $dataArray['bCommuneNaissance'] = $data->getBCommuneNaissance();
        }

        if ($data->isInitialized('codePaysNaissance') && null !== $data->getCodePaysNaissance()) {
            $dataArray['codePaysNaissance'] = $data->getCodePaysNaissance();
        }

        if ($data->isInitialized('bCodePaysNaissance') && null !== $data->getBCodePaysNaissance()) {
            $dataArray['bCodePaysNaissance'] = $data->getBCodePaysNaissance();
        }

        if ($data->isInitialized('paysNaissance') && null !== $data->getPaysNaissance()) {
            $dataArray['paysNaissance'] = $data->getPaysNaissance();
        }

        if ($data->isInitialized('bPaysNaissance') && null !== $data->getBPaysNaissance()) {
            $dataArray['bPaysNaissance'] = $data->getBPaysNaissance();
        }

        if ($data->isInitialized('codePaysNationalite') && null !== $data->getCodePaysNationalite()) {
            $dataArray['codePaysNationalite'] = $data->getCodePaysNationalite();
        }

        if ($data->isInitialized('bCodePaysNationalite') && null !== $data->getBCodePaysNationalite()) {
            $dataArray['bCodePaysNationalite'] = $data->getBCodePaysNationalite();
        }

        if ($data->isInitialized('paysNationalite') && null !== $data->getPaysNationalite()) {
            $dataArray['paysNationalite'] = $data->getPaysNationalite();
        }

        if ($data->isInitialized('bPaysNationalite') && null !== $data->getBPaysNationalite()) {
            $dataArray['bPaysNationalite'] = $data->getBPaysNationalite();
        }

        if ($data->isInitialized('titreSejourType') && null !== $data->getTitreSejourType()) {
            $dataArray['titreSejourType'] = $data->getTitreSejourType();
        }

        if ($data->isInitialized('bTitreSejourType') && null !== $data->getBTitreSejourType()) {
            $dataArray['bTitreSejourType'] = $data->getBTitreSejourType();
        }

        if ($data->isInitialized('titreSejourNumeroOrdre') && null !== $data->getTitreSejourNumeroOrdre()) {
            $dataArray['titreSejourNumeroOrdre'] = $data->getTitreSejourNumeroOrdre();
        }

        if ($data->isInitialized('bTitreSejourNumeroOrdre') && null !== $data->getBTitreSejourNumeroOrdre()) {
            $dataArray['bTitreSejourNumeroOrdre'] = $data->getBTitreSejourNumeroOrdre();
        }

        if ($data->isInitialized('titreSejourDebut') && null !== $data->getTitreSejourDebut()) {
            $dataArray['titreSejourDebut'] = $data->getTitreSejourDebut()->format('Y-m-d');
        }

        if ($data->isInitialized('bTitreSejourDebut') && null !== $data->getBTitreSejourDebut()) {
            $dataArray['bTitreSejourDebut'] = $data->getBTitreSejourDebut();
        }

        if ($data->isInitialized('titreSejourFin') && null !== $data->getTitreSejourFin()) {
            $dataArray['titreSejourFin'] = $data->getTitreSejourFin()->format('Y-m-d');
        }

        if ($data->isInitialized('bTitreSejourFin') && null !== $data->getBTitreSejourFin()) {
            $dataArray['bTitreSejourFin'] = $data->getBTitreSejourFin();
        }

        if ($data->isInitialized('numVoie') && null !== $data->getNumVoie()) {
            $dataArray['numVoie'] = $data->getNumVoie();
        }

        if ($data->isInitialized('bNumVoie') && null !== $data->getBNumVoie()) {
            $dataArray['bNumVoie'] = $data->getBNumVoie();
        }

        if ($data->isInitialized('btqc') && null !== $data->getBtqc()) {
            $dataArray['btqc'] = $data->getBtqc();
        }

        if ($data->isInitialized('bBTQC') && null !== $data->getBBTQC()) {
            $dataArray['bBTQC'] = $data->getBBTQC();
        }

        if ($data->isInitialized('nomVoie') && null !== $data->getNomVoie()) {
            $dataArray['nomVoie'] = $data->getNomVoie();
        }

        if ($data->isInitialized('bNomVoie') && null !== $data->getBNomVoie()) {
            $dataArray['bNomVoie'] = $data->getBNomVoie();
        }

        if ($data->isInitialized('complement') && null !== $data->getComplement()) {
            $dataArray['complement'] = $data->getComplement();
        }

        if ($data->isInitialized('bComplement') && null !== $data->getBComplement()) {
            $dataArray['bComplement'] = $data->getBComplement();
        }

        if ($data->isInitialized('codePostal') && null !== $data->getCodePostal()) {
            $dataArray['codePostal'] = $data->getCodePostal();
        }

        if ($data->isInitialized('bCodePostal') && null !== $data->getBCodePostal()) {
            $dataArray['bCodePostal'] = $data->getBCodePostal();
        }

        if ($data->isInitialized('nomVille') && null !== $data->getNomVille()) {
            $dataArray['nomVille'] = $data->getNomVille();
        }

        if ($data->isInitialized('bNomVille') && null !== $data->getBNomVille()) {
            $dataArray['bNomVille'] = $data->getBNomVille();
        }

        if ($data->isInitialized('codeOfficielCommune') && null !== $data->getCodeOfficielCommune()) {
            $dataArray['codeOfficielCommune'] = $data->getCodeOfficielCommune();
        }

        if ($data->isInitialized('bCodeOfficielCommune') && null !== $data->getBCodeOfficielCommune()) {
            $dataArray['bCodeOfficielCommune'] = $data->getBCodeOfficielCommune();
        }

        if ($data->isInitialized('commune') && null !== $data->getCommune()) {
            $dataArray['commune'] = $data->getCommune();
        }

        if ($data->isInitialized('bCommune') && null !== $data->getBCommune()) {
            $dataArray['bCommune'] = $data->getBCommune();
        }

        if ($data->isInitialized('codePays') && null !== $data->getCodePays()) {
            $dataArray['codePays'] = $data->getCodePays();
        }

        if ($data->isInitialized('bCodePays') && null !== $data->getBCodePays()) {
            $dataArray['bCodePays'] = $data->getBCodePays();
        }

        if ($data->isInitialized('pays') && null !== $data->getPays()) {
            $dataArray['pays'] = $data->getPays();
        }

        if ($data->isInitialized('bPays') && null !== $data->getBPays()) {
            $dataArray['bPays'] = $data->getBPays();
        }

        if ($data->isInitialized('domicilieFiscalementHorsFrance') && null !== $data->getDomicilieFiscalementHorsFrance()) {
            $dataArray['domicilieFiscalementHorsFrance'] = $data->getDomicilieFiscalementHorsFrance();
        }

        if ($data->isInitialized('bDomicilieFiscalementHorsFrance') && null !== $data->getBDomicilieFiscalementHorsFrance()) {
            $dataArray['bDomicilieFiscalementHorsFrance'] = $data->getBDomicilieFiscalementHorsFrance();
        }

        if ($data->isInitialized('telDomicile') && null !== $data->getTelDomicile()) {
            $dataArray['telDomicile'] = $data->getTelDomicile();
        }

        if ($data->isInitialized('bTelDomicile') && null !== $data->getBTelDomicile()) {
            $dataArray['bTelDomicile'] = $data->getBTelDomicile();
        }

        if ($data->isInitialized('telPortable') && null !== $data->getTelPortable()) {
            $dataArray['telPortable'] = $data->getTelPortable();
        }

        if ($data->isInitialized('bTelPortable') && null !== $data->getBTelPortable()) {
            $dataArray['bTelPortable'] = $data->getBTelPortable();
        }

        if ($data->isInitialized('eMail') && null !== $data->getEMail()) {
            $dataArray['eMail'] = $data->getEMail();
        }

        if ($data->isInitialized('bEMail') && null !== $data->getBEMail()) {
            $dataArray['bEMail'] = $data->getBEMail();
        }

        if ($data->isInitialized('rib') && null !== $data->getRib()) {
            $dataArray['rib'] = $data->getRib();
        }

        if ($data->isInitialized('bRib') && null !== $data->getBRib()) {
            $dataArray['bRib'] = $data->getBRib();
        }

        if ($data->isInitialized('iBan') && null !== $data->getIBan()) {
            $dataArray['iBan'] = $data->getIBan();
        }

        if ($data->isInitialized('bIBan') && null !== $data->getBIBan()) {
            $dataArray['bIBan'] = $data->getBIBan();
        }

        if ($data->isInitialized('bic') && null !== $data->getBic()) {
            $dataArray['bic'] = $data->getBic();
        }

        if ($data->isInitialized('bBic') && null !== $data->getBBic()) {
            $dataArray['bBic'] = $data->getBBic();
        }

        if ($data->isInitialized('affectation1') && null !== $data->getAffectation1()) {
            $dataArray['affectation1'] = $data->getAffectation1();
        }

        if ($data->isInitialized('bAffectation1') && null !== $data->getBAffectation1()) {
            $dataArray['bAffectation1'] = $data->getBAffectation1();
        }

        if ($data->isInitialized('affectation2') && null !== $data->getAffectation2()) {
            $dataArray['affectation2'] = $data->getAffectation2();
        }

        if ($data->isInitialized('bAffectation2') && null !== $data->getBAffectation2()) {
            $dataArray['bAffectation2'] = $data->getBAffectation2();
        }

        if ($data->isInitialized('affectation3') && null !== $data->getAffectation3()) {
            $dataArray['affectation3'] = $data->getAffectation3();
        }

        if ($data->isInitialized('bAffectation3') && null !== $data->getBAffectation3()) {
            $dataArray['bAffectation3'] = $data->getBAffectation3();
        }

        if ($data->isInitialized('affectation4') && null !== $data->getAffectation4()) {
            $dataArray['affectation4'] = $data->getAffectation4();
        }

        if ($data->isInitialized('bAffectation4') && null !== $data->getBAffectation4()) {
            $dataArray['bAffectation4'] = $data->getBAffectation4();
        }

        if ($data->isInitialized('affectation5') && null !== $data->getAffectation5()) {
            $dataArray['affectation5'] = $data->getAffectation5();
        }

        if ($data->isInitialized('bAffectation5') && null !== $data->getBAffectation5()) {
            $dataArray['bAffectation5'] = $data->getBAffectation5();
        }

        if ($data->isInitialized('affectation6') && null !== $data->getAffectation6()) {
            $dataArray['affectation6'] = $data->getAffectation6();
        }

        if ($data->isInitialized('bAffectation6') && null !== $data->getBAffectation6()) {
            $dataArray['bAffectation6'] = $data->getBAffectation6();
        }

        if ($data->isInitialized('affectation7') && null !== $data->getAffectation7()) {
            $dataArray['affectation7'] = $data->getAffectation7();
        }

        if ($data->isInitialized('bAffectation7') && null !== $data->getBAffectation7()) {
            $dataArray['bAffectation7'] = $data->getBAffectation7();
        }

        if ($data->isInitialized('emplois') && null !== $data->getEmplois()) {
            $values = [];
            foreach ($data->getEmplois() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }

            $dataArray['emplois'] = $values;
        }

        if ($data->isInitialized('anneeNaissance') && null !== $data->getAnneeNaissance()) {
            $dataArray['anneeNaissance'] = $data->getAnneeNaissance();
        }

        if ($data->isInitialized('bAnneeNaissance') && null !== $data->getBAnneeNaissance()) {
            $dataArray['bAnneeNaissance'] = $data->getBAnneeNaissance();
        }

        if ($data->isInitialized('eMailPro') && null !== $data->getEMailPro()) {
            $dataArray['eMailPro'] = $data->getEMailPro();
        }

        if ($data->isInitialized('bEMailPro') && null !== $data->getBEMailPro()) {
            $dataArray['bEMailPro'] = $data->getBEMailPro();
        }

        if ($data->isInitialized('personneAContacterUrgenceNom') && null !== $data->getPersonneAContacterUrgenceNom()) {
            $dataArray['personneAContacterUrgenceNom'] = $data->getPersonneAContacterUrgenceNom();
        }

        if ($data->isInitialized('bPersonneAContacterUrgenceNom') && null !== $data->getBPersonneAContacterUrgenceNom()) {
            $dataArray['bPersonneAContacterUrgenceNom'] = $data->getBPersonneAContacterUrgenceNom();
        }

        if ($data->isInitialized('personneAContacterUrgencePrenom') && null !== $data->getPersonneAContacterUrgencePrenom()) {
            $dataArray['personneAContacterUrgencePrenom'] = $data->getPersonneAContacterUrgencePrenom();
        }

        if ($data->isInitialized('bPersonneAContacterUrgencePrenom') && null !== $data->getBPersonneAContacterUrgencePrenom()) {
            $dataArray['bPersonneAContacterUrgencePrenom'] = $data->getBPersonneAContacterUrgencePrenom();
        }

        if ($data->isInitialized('personneAContacterUrgenceTel') && null !== $data->getPersonneAContacterUrgenceTel()) {
            $dataArray['personneAContacterUrgenceTel'] = $data->getPersonneAContacterUrgenceTel();
        }

        if ($data->isInitialized('bPersonneAContacterUrgenceTel') && null !== $data->getBPersonneAContacterUrgenceTel()) {
            $dataArray['bPersonneAContacterUrgenceTel'] = $data->getBPersonneAContacterUrgenceTel();
        }

        if ($data->isInitialized('personneAContacterUrgenceMel') && null !== $data->getPersonneAContacterUrgenceMel()) {
            $dataArray['personneAContacterUrgenceMel'] = $data->getPersonneAContacterUrgenceMel();
        }

        if ($data->isInitialized('bPersonneAContacterUrgenceMel') && null !== $data->getBPersonneAContacterUrgenceMel()) {
            $dataArray['bPersonneAContacterUrgenceMel'] = $data->getBPersonneAContacterUrgenceMel();
        }

        if ($data->isInitialized('ribPourVirements') && null !== $data->getRibPourVirements()) {
            $dataArray['ribPourVirements'] = $data->getRibPourVirements();
        }

        if ($data->isInitialized('bRibPourVirements') && null !== $data->getBRibPourVirements()) {
            $dataArray['bRibPourVirements'] = $data->getBRibPourVirements();
        }

        if ($data->isInitialized('ribVersementPlafond') && null !== $data->getRibVersementPlafond()) {
            $dataArray['ribVersementPlafond'] = $data->getRibVersementPlafond();
        }

        if ($data->isInitialized('bRibVersementPlafond') && null !== $data->getBRibVersementPlafond()) {
            $dataArray['bRibVersementPlafond'] = $data->getBRibVersementPlafond();
        }

        if ($data->isInitialized('paiementEspeces') && null !== $data->getPaiementEspeces()) {
            $dataArray['paiementEspeces'] = $data->getPaiementEspeces();
        }

        if ($data->isInitialized('bPaiementEspeces') && null !== $data->getBPaiementEspeces()) {
            $dataArray['bPaiementEspeces'] = $data->getBPaiementEspeces();
        }

        if ($data->isInitialized('dureePeriodeEssai1') && null !== $data->getDureePeriodeEssai1()) {
            $dataArray['dureePeriodeEssai1'] = $data->getDureePeriodeEssai1();
        }

        if ($data->isInitialized('bDureePeriodeEssai1') && null !== $data->getBDureePeriodeEssai1()) {
            $dataArray['bDureePeriodeEssai1'] = $data->getBDureePeriodeEssai1();
        }

        if ($data->isInitialized('dureePeriodeEssai2') && null !== $data->getDureePeriodeEssai2()) {
            $dataArray['dureePeriodeEssai2'] = $data->getDureePeriodeEssai2();
        }

        if ($data->isInitialized('bDureePeriodeEssai2') && null !== $data->getBDureePeriodeEssai2()) {
            $dataArray['bDureePeriodeEssai2'] = $data->getBDureePeriodeEssai2();
        }

        if ($data->isInitialized('nbPersACharge') && null !== $data->getNbPersACharge()) {
            $dataArray['nbPersACharge'] = $data->getNbPersACharge();
        }

        if ($data->isInitialized('bNbPersACharge') && null !== $data->getBNbPersACharge()) {
            $dataArray['bNbPersACharge'] = $data->getBNbPersACharge();
        }

        if ($data->isInitialized('rib2') && null !== $data->getRib2()) {
            $dataArray['rib2'] = $data->getRib2();
        }

        if ($data->isInitialized('bRib2') && null !== $data->getBRib2()) {
            $dataArray['bRib2'] = $data->getBRib2();
        }

        if ($data->isInitialized('iBan2') && null !== $data->getIBan2()) {
            $dataArray['iBan2'] = $data->getIBan2();
        }

        if ($data->isInitialized('bIBan2') && null !== $data->getBIBan2()) {
            $dataArray['bIBan2'] = $data->getBIBan2();
        }

        if ($data->isInitialized('bic2') && null !== $data->getBic2()) {
            $dataArray['bic2'] = $data->getBic2();
        }

        if ($data->isInitialized('bBic2') && null !== $data->getBBic2()) {
            $dataArray['bBic2'] = $data->getBBic2();
        }

        if ($data->isInitialized('rib2PourVirements') && null !== $data->getRib2PourVirements()) {
            $dataArray['rib2PourVirements'] = $data->getRib2PourVirements();
        }

        if ($data->isInitialized('bRib2PourVirements') && null !== $data->getBRib2PourVirements()) {
            $dataArray['bRib2PourVirements'] = $data->getBRib2PourVirements();
        }

        if ($data->isInitialized('rib2VersementPlafond') && null !== $data->getRib2VersementPlafond()) {
            $dataArray['rib2VersementPlafond'] = $data->getRib2VersementPlafond();
        }

        if ($data->isInitialized('bRib2VersementPlafond') && null !== $data->getBRib2VersementPlafond()) {
            $dataArray['bRib2VersementPlafond'] = $data->getBRib2VersementPlafond();
        }

        if ($data->isInitialized('rib3') && null !== $data->getRib3()) {
            $dataArray['rib3'] = $data->getRib3();
        }

        if ($data->isInitialized('bRib3') && null !== $data->getBRib3()) {
            $dataArray['bRib3'] = $data->getBRib3();
        }

        if ($data->isInitialized('iBan3') && null !== $data->getIBan3()) {
            $dataArray['iBan3'] = $data->getIBan3();
        }

        if ($data->isInitialized('bIBan3') && null !== $data->getBIBan3()) {
            $dataArray['bIBan3'] = $data->getBIBan3();
        }

        if ($data->isInitialized('bic3') && null !== $data->getBic3()) {
            $dataArray['bic3'] = $data->getBic3();
        }

        if ($data->isInitialized('bBic3') && null !== $data->getBBic3()) {
            $dataArray['bBic3'] = $data->getBBic3();
        }

        if ($data->isInitialized('rib3PourVirements') && null !== $data->getRib3PourVirements()) {
            $dataArray['rib3PourVirements'] = $data->getRib3PourVirements();
        }

        if ($data->isInitialized('bRib3PourVirements') && null !== $data->getBRib3PourVirements()) {
            $dataArray['bRib3PourVirements'] = $data->getBRib3PourVirements();
        }

        if ($data->isInitialized('rib3VersementPlafond') && null !== $data->getRib3VersementPlafond()) {
            $dataArray['rib3VersementPlafond'] = $data->getRib3VersementPlafond();
        }

        if ($data->isInitialized('bRib3VersementPlafond') && null !== $data->getBRib3VersementPlafond()) {
            $dataArray['bRib3VersementPlafond'] = $data->getBRib3VersementPlafond();
        }

        if ($data->isInitialized('sexe') && null !== $data->getSexe()) {
            $dataArray['sexe'] = $data->getSexe();
        }

        if ($data->isInitialized('bSexe') && null !== $data->getBSexe()) {
            $dataArray['bSexe'] = $data->getBSexe();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [SalarieEmplois::class => false];
    }
}
