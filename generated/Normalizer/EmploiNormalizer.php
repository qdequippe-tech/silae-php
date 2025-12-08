<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\Emploi;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EmploiNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return Emploi::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && Emploi::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new Emploi();
        if (\array_key_exists('pctAbattement', $data) && \is_int($data['pctAbattement'])) {
            $data['pctAbattement'] = (float) $data['pctAbattement'];
        }

        if (\array_key_exists('salaireNetGaranti', $data) && \is_int($data['salaireNetGaranti'])) {
            $data['salaireNetGaranti'] = (float) $data['salaireNetGaranti'];
        }

        if (\array_key_exists('nbHeuresMensuellesNormales', $data) && \is_int($data['nbHeuresMensuellesNormales'])) {
            $data['nbHeuresMensuellesNormales'] = (float) $data['nbHeuresMensuellesNormales'];
        }

        if (\array_key_exists('nbHeuresMensuellesMajorees', $data) && \is_int($data['nbHeuresMensuellesMajorees'])) {
            $data['nbHeuresMensuellesMajorees'] = (float) $data['nbHeuresMensuellesMajorees'];
        }

        if (\array_key_exists('pctHeuresMensuellesMajorees', $data) && \is_int($data['pctHeuresMensuellesMajorees'])) {
            $data['pctHeuresMensuellesMajorees'] = (float) $data['pctHeuresMensuellesMajorees'];
        }

        if (\array_key_exists('prixDuKilometre', $data) && \is_int($data['prixDuKilometre'])) {
            $data['prixDuKilometre'] = (float) $data['prixDuKilometre'];
        }

        if (\array_key_exists('exonerationTaux', $data) && \is_int($data['exonerationTaux'])) {
            $data['exonerationTaux'] = (float) $data['exonerationTaux'];
        }

        if (\array_key_exists('titreTransportRemboursement', $data) && \is_int($data['titreTransportRemboursement'])) {
            $data['titreTransportRemboursement'] = (float) $data['titreTransportRemboursement'];
        }

        if (\array_key_exists('autreTitreTransportMontant', $data) && \is_int($data['autreTitreTransportMontant'])) {
            $data['autreTitreTransportMontant'] = (float) $data['autreTitreTransportMontant'];
        }

        if (\array_key_exists('autreTitreTransportRemboursement', $data) && \is_int($data['autreTitreTransportRemboursement'])) {
            $data['autreTitreTransportRemboursement'] = (float) $data['autreTitreTransportRemboursement'];
        }

        if (\array_key_exists('fjNbJAn', $data) && \is_int($data['fjNbJAn'])) {
            $data['fjNbJAn'] = (float) $data['fjNbJAn'];
        }

        if (\array_key_exists('avnLMontantSal', $data) && \is_int($data['avnLMontantSal'])) {
            $data['avnLMontantSal'] = (float) $data['avnLMontantSal'];
        }

        if (\array_key_exists('envoiDUEEdi', $data) && \is_int($data['envoiDUEEdi'])) {
            $data['envoiDUEEdi'] = (bool) $data['envoiDUEEdi'];
        }

        if (\array_key_exists('envoiDUEEdiSansCreerEmploi', $data) && \is_int($data['envoiDUEEdiSansCreerEmploi'])) {
            $data['envoiDUEEdiSansCreerEmploi'] = (bool) $data['envoiDUEEdiSansCreerEmploi'];
        }

        if (\array_key_exists('bCodeConventionCollective', $data) && \is_int($data['bCodeConventionCollective'])) {
            $data['bCodeConventionCollective'] = (bool) $data['bCodeConventionCollective'];
        }

        if (\array_key_exists('bCodeClassificationMetier', $data) && \is_int($data['bCodeClassificationMetier'])) {
            $data['bCodeClassificationMetier'] = (bool) $data['bCodeClassificationMetier'];
        }

        if (\array_key_exists('bIntituleEmploi', $data) && \is_int($data['bIntituleEmploi'])) {
            $data['bIntituleEmploi'] = (bool) $data['bIntituleEmploi'];
        }

        if (\array_key_exists('bCodeContratTravail', $data) && \is_int($data['bCodeContratTravail'])) {
            $data['bCodeContratTravail'] = (bool) $data['bCodeContratTravail'];
        }

        if (\array_key_exists('bMotifCDD', $data) && \is_int($data['bMotifCDD'])) {
            $data['bMotifCDD'] = (bool) $data['bMotifCDD'];
        }

        if (\array_key_exists('bDureeInitialeCDD', $data) && \is_int($data['bDureeInitialeCDD'])) {
            $data['bDureeInitialeCDD'] = (bool) $data['bDureeInitialeCDD'];
        }

        if (\array_key_exists('bMotifDebutEmploi', $data) && \is_int($data['bMotifDebutEmploi'])) {
            $data['bMotifDebutEmploi'] = (bool) $data['bMotifDebutEmploi'];
        }

        if (\array_key_exists('bMotifFinEmploi', $data) && \is_int($data['bMotifFinEmploi'])) {
            $data['bMotifFinEmploi'] = (bool) $data['bMotifFinEmploi'];
        }

        if (\array_key_exists('bCodeCaracteristiqueActivite', $data) && \is_int($data['bCodeCaracteristiqueActivite'])) {
            $data['bCodeCaracteristiqueActivite'] = (bool) $data['bCodeCaracteristiqueActivite'];
        }

        if (\array_key_exists('bCodeStatutProfessionnel', $data) && \is_int($data['bCodeStatutProfessionnel'])) {
            $data['bCodeStatutProfessionnel'] = (bool) $data['bCodeStatutProfessionnel'];
        }

        if (\array_key_exists('bCodeStatutCategoriel', $data) && \is_int($data['bCodeStatutCategoriel'])) {
            $data['bCodeStatutCategoriel'] = (bool) $data['bCodeStatutCategoriel'];
        }

        if (\array_key_exists('bCodeStatutCategorielAgircArrco', $data) && \is_int($data['bCodeStatutCategorielAgircArrco'])) {
            $data['bCodeStatutCategorielAgircArrco'] = (bool) $data['bCodeStatutCategorielAgircArrco'];
        }

        if (\array_key_exists('bCoefficient1', $data) && \is_int($data['bCoefficient1'])) {
            $data['bCoefficient1'] = (bool) $data['bCoefficient1'];
        }

        if (\array_key_exists('bCoefficient2', $data) && \is_int($data['bCoefficient2'])) {
            $data['bCoefficient2'] = (bool) $data['bCoefficient2'];
        }

        if (\array_key_exists('bCoefficient3', $data) && \is_int($data['bCoefficient3'])) {
            $data['bCoefficient3'] = (bool) $data['bCoefficient3'];
        }

        if (\array_key_exists('bCoefficient4', $data) && \is_int($data['bCoefficient4'])) {
            $data['bCoefficient4'] = (bool) $data['bCoefficient4'];
        }

        if (\array_key_exists('bCodeCSP', $data) && \is_int($data['bCodeCSP'])) {
            $data['bCodeCSP'] = (bool) $data['bCodeCSP'];
        }

        if (\array_key_exists('bCodeCPNDUC', $data) && \is_int($data['bCodeCPNDUC'])) {
            $data['bCodeCPNDUC'] = (bool) $data['bCodeCPNDUC'];
        }

        if (\array_key_exists('bSpectacleCodeEmploi', $data) && \is_int($data['bSpectacleCodeEmploi'])) {
            $data['bSpectacleCodeEmploi'] = (bool) $data['bSpectacleCodeEmploi'];
        }

        if (\array_key_exists('bSpectacleNumeroConges', $data) && \is_int($data['bSpectacleNumeroConges'])) {
            $data['bSpectacleNumeroConges'] = (bool) $data['bSpectacleNumeroConges'];
        }

        if (\array_key_exists('bPctAbattement', $data) && \is_int($data['bPctAbattement'])) {
            $data['bPctAbattement'] = (bool) $data['bPctAbattement'];
        }

        if (\array_key_exists('salaireDeBaseEstHoraire', $data) && \is_int($data['salaireDeBaseEstHoraire'])) {
            $data['salaireDeBaseEstHoraire'] = (bool) $data['salaireDeBaseEstHoraire'];
        }

        if (\array_key_exists('bSalaireDeBaseEstHoraire', $data) && \is_int($data['bSalaireDeBaseEstHoraire'])) {
            $data['bSalaireDeBaseEstHoraire'] = (bool) $data['bSalaireDeBaseEstHoraire'];
        }

        if (\array_key_exists('bSalaireDeBase', $data) && \is_int($data['bSalaireDeBase'])) {
            $data['bSalaireDeBase'] = (bool) $data['bSalaireDeBase'];
        }

        if (\array_key_exists('bSalaireNetGaranti', $data) && \is_int($data['bSalaireNetGaranti'])) {
            $data['bSalaireNetGaranti'] = (bool) $data['bSalaireNetGaranti'];
        }

        if (\array_key_exists('bNbHeuresTravaillees', $data) && \is_int($data['bNbHeuresTravaillees'])) {
            $data['bNbHeuresTravaillees'] = (bool) $data['bNbHeuresTravaillees'];
        }

        if (\array_key_exists('bNbHeuresMensuellesNormales', $data) && \is_int($data['bNbHeuresMensuellesNormales'])) {
            $data['bNbHeuresMensuellesNormales'] = (bool) $data['bNbHeuresMensuellesNormales'];
        }

        if (\array_key_exists('bNbHeuresMensuellesMajorees', $data) && \is_int($data['bNbHeuresMensuellesMajorees'])) {
            $data['bNbHeuresMensuellesMajorees'] = (bool) $data['bNbHeuresMensuellesMajorees'];
        }

        if (\array_key_exists('bPctHeuresMensuellesMajorees', $data) && \is_int($data['bPctHeuresMensuellesMajorees'])) {
            $data['bPctHeuresMensuellesMajorees'] = (bool) $data['bPctHeuresMensuellesMajorees'];
        }

        if (\array_key_exists('bHeuresMensuellesLibres', $data) && \is_int($data['bHeuresMensuellesLibres'])) {
            $data['bHeuresMensuellesLibres'] = (bool) $data['bHeuresMensuellesLibres'];
        }

        if (\array_key_exists('confirmationObligatoireDesHeures', $data) && \is_int($data['confirmationObligatoireDesHeures'])) {
            $data['confirmationObligatoireDesHeures'] = (bool) $data['confirmationObligatoireDesHeures'];
        }

        if (\array_key_exists('bConfirmationObligatoireDesHeures', $data) && \is_int($data['bConfirmationObligatoireDesHeures'])) {
            $data['bConfirmationObligatoireDesHeures'] = (bool) $data['bConfirmationObligatoireDesHeures'];
        }

        if (\array_key_exists('activerCalculKilometrique', $data) && \is_int($data['activerCalculKilometrique'])) {
            $data['activerCalculKilometrique'] = (bool) $data['activerCalculKilometrique'];
        }

        if (\array_key_exists('bActiverCalculKilometrique', $data) && \is_int($data['bActiverCalculKilometrique'])) {
            $data['bActiverCalculKilometrique'] = (bool) $data['bActiverCalculKilometrique'];
        }

        if (\array_key_exists('bTypeDeVehicule', $data) && \is_int($data['bTypeDeVehicule'])) {
            $data['bTypeDeVehicule'] = (bool) $data['bTypeDeVehicule'];
        }

        if (\array_key_exists('bTrancheKilometrique', $data) && \is_int($data['bTrancheKilometrique'])) {
            $data['bTrancheKilometrique'] = (bool) $data['bTrancheKilometrique'];
        }

        if (\array_key_exists('bPrixDuKilometre', $data) && \is_int($data['bPrixDuKilometre'])) {
            $data['bPrixDuKilometre'] = (bool) $data['bPrixDuKilometre'];
        }

        if (\array_key_exists('activerActiviteJournaliere', $data) && \is_int($data['activerActiviteJournaliere'])) {
            $data['activerActiviteJournaliere'] = (bool) $data['activerActiviteJournaliere'];
        }

        if (\array_key_exists('bActiverActiviteJournaliere', $data) && \is_int($data['bActiverActiviteJournaliere'])) {
            $data['bActiverActiviteJournaliere'] = (bool) $data['bActiverActiviteJournaliere'];
        }

        if (\array_key_exists('bDecoupageActiviteJournaliere', $data) && \is_int($data['bDecoupageActiviteJournaliere'])) {
            $data['bDecoupageActiviteJournaliere'] = (bool) $data['bDecoupageActiviteJournaliere'];
        }

        if (\array_key_exists('bModeSaisieActiviteJournaliere', $data) && \is_int($data['bModeSaisieActiviteJournaliere'])) {
            $data['bModeSaisieActiviteJournaliere'] = (bool) $data['bModeSaisieActiviteJournaliere'];
        }

        if (\array_key_exists('bExonerationCode', $data) && \is_int($data['bExonerationCode'])) {
            $data['bExonerationCode'] = (bool) $data['bExonerationCode'];
        }

        if (\array_key_exists('bExonerationDebut', $data) && \is_int($data['bExonerationDebut'])) {
            $data['bExonerationDebut'] = (bool) $data['bExonerationDebut'];
        }

        if (\array_key_exists('bExonerationFin', $data) && \is_int($data['bExonerationFin'])) {
            $data['bExonerationFin'] = (bool) $data['bExonerationFin'];
        }

        if (\array_key_exists('bExonerationTaux', $data) && \is_int($data['bExonerationTaux'])) {
            $data['bExonerationTaux'] = (bool) $data['bExonerationTaux'];
        }

        if (\array_key_exists('bTitreTransportCode', $data) && \is_int($data['bTitreTransportCode'])) {
            $data['bTitreTransportCode'] = (bool) $data['bTitreTransportCode'];
        }

        if (\array_key_exists('bTitreTransportRemboursement', $data) && \is_int($data['bTitreTransportRemboursement'])) {
            $data['bTitreTransportRemboursement'] = (bool) $data['bTitreTransportRemboursement'];
        }

        if (\array_key_exists('bAutreTitreTransportMontant', $data) && \is_int($data['bAutreTitreTransportMontant'])) {
            $data['bAutreTitreTransportMontant'] = (bool) $data['bAutreTitreTransportMontant'];
        }

        if (\array_key_exists('bAutreTitreTransportRemboursement', $data) && \is_int($data['bAutreTitreTransportRemboursement'])) {
            $data['bAutreTitreTransportRemboursement'] = (bool) $data['bAutreTitreTransportRemboursement'];
        }

        if (\array_key_exists('bTicketRestaurant', $data) && \is_int($data['bTicketRestaurant'])) {
            $data['bTicketRestaurant'] = (bool) $data['bTicketRestaurant'];
        }

        if (\array_key_exists('bCodeTerritoire', $data) && \is_int($data['bCodeTerritoire'])) {
            $data['bCodeTerritoire'] = (bool) $data['bCodeTerritoire'];
        }

        if (\array_key_exists('bCodeSecteurDFS', $data) && \is_int($data['bCodeSecteurDFS'])) {
            $data['bCodeSecteurDFS'] = (bool) $data['bCodeSecteurDFS'];
        }

        if (\array_key_exists('pctAbattementLissage', $data) && \is_int($data['pctAbattementLissage'])) {
            $data['pctAbattementLissage'] = (bool) $data['pctAbattementLissage'];
        }

        if (\array_key_exists('bPctAbattementLissage', $data) && \is_int($data['bPctAbattementLissage'])) {
            $data['bPctAbattementLissage'] = (bool) $data['bPctAbattementLissage'];
        }

        if (\array_key_exists('bCodeStatutRegimeProtectionSociale', $data) && \is_int($data['bCodeStatutRegimeProtectionSociale'])) {
            $data['bCodeStatutRegimeProtectionSociale'] = (bool) $data['bCodeStatutRegimeProtectionSociale'];
        }

        if (\array_key_exists('emploiNonPrincipal', $data) && \is_int($data['emploiNonPrincipal'])) {
            $data['emploiNonPrincipal'] = (bool) $data['emploiNonPrincipal'];
        }

        if (\array_key_exists('bEmploiNonPrincipal', $data) && \is_int($data['bEmploiNonPrincipal'])) {
            $data['bEmploiNonPrincipal'] = (bool) $data['bEmploiNonPrincipal'];
        }

        if (\array_key_exists('bContratPartDtSignature', $data) && \is_int($data['bContratPartDtSignature'])) {
            $data['bContratPartDtSignature'] = (bool) $data['bContratPartDtSignature'];
        }

        if (\array_key_exists('bFJNbJAn', $data) && \is_int($data['bFJNbJAn'])) {
            $data['bFJNbJAn'] = (bool) $data['bFJNbJAn'];
        }

        if (\array_key_exists('nonSoumisHEta', $data) && \is_int($data['nonSoumisHEta'])) {
            $data['nonSoumisHEta'] = (bool) $data['nonSoumisHEta'];
        }

        if (\array_key_exists('bNonSoumisHEta', $data) && \is_int($data['bNonSoumisHEta'])) {
            $data['bNonSoumisHEta'] = (bool) $data['bNonSoumisHEta'];
        }

        if (\array_key_exists('bMotifRuptureContrat', $data) && \is_int($data['bMotifRuptureContrat'])) {
            $data['bMotifRuptureContrat'] = (bool) $data['bMotifRuptureContrat'];
        }

        if (\array_key_exists('docsFinContratInactifs', $data) && \is_int($data['docsFinContratInactifs'])) {
            $data['docsFinContratInactifs'] = (bool) $data['docsFinContratInactifs'];
        }

        if (\array_key_exists('bDocsFinContratInactifs', $data) && \is_int($data['bDocsFinContratInactifs'])) {
            $data['bDocsFinContratInactifs'] = (bool) $data['bDocsFinContratInactifs'];
        }

        if (\array_key_exists('bRTTTypeAcq', $data) && \is_int($data['bRTTTypeAcq'])) {
            $data['bRTTTypeAcq'] = (bool) $data['bRTTTypeAcq'];
        }

        if (\array_key_exists('bAvnLMontantSal', $data) && \is_int($data['bAvnLMontantSal'])) {
            $data['bAvnLMontantSal'] = (bool) $data['bAvnLMontantSal'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('identifiantEmploi', $data) && null !== $data['identifiantEmploi']) {
            $object->setIdentifiantEmploi($data['identifiantEmploi']);
        } elseif (\array_key_exists('identifiantEmploi', $data) && null === $data['identifiantEmploi']) {
            $object->setIdentifiantEmploi(null);
        }

        if (\array_key_exists('identifiantEmploiModele', $data) && null !== $data['identifiantEmploiModele']) {
            $object->setIdentifiantEmploiModele($data['identifiantEmploiModele']);
        } elseif (\array_key_exists('identifiantEmploiModele', $data) && null === $data['identifiantEmploiModele']) {
            $object->setIdentifiantEmploiModele(null);
        }

        if (\array_key_exists('envoiDUEEdi', $data) && null !== $data['envoiDUEEdi']) {
            $object->setEnvoiDUEEdi($data['envoiDUEEdi']);
        } elseif (\array_key_exists('envoiDUEEdi', $data) && null === $data['envoiDUEEdi']) {
            $object->setEnvoiDUEEdi(null);
        }

        if (\array_key_exists('envoiDUEEdiSansCreerEmploi', $data) && null !== $data['envoiDUEEdiSansCreerEmploi']) {
            $object->setEnvoiDUEEdiSansCreerEmploi($data['envoiDUEEdiSansCreerEmploi']);
        } elseif (\array_key_exists('envoiDUEEdiSansCreerEmploi', $data) && null === $data['envoiDUEEdiSansCreerEmploi']) {
            $object->setEnvoiDUEEdiSansCreerEmploi(null);
        }

        if (\array_key_exists('nomInterneEtablissement', $data) && null !== $data['nomInterneEtablissement']) {
            $object->setNomInterneEtablissement($data['nomInterneEtablissement']);
        } elseif (\array_key_exists('nomInterneEtablissement', $data) && null === $data['nomInterneEtablissement']) {
            $object->setNomInterneEtablissement(null);
        }

        if (\array_key_exists('dateDebut', $data) && null !== $data['dateDebut']) {
            $object->setDateDebut(\DateTime::createFromFormat('Y-m-d', $data['dateDebut'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('dateDebut', $data) && null === $data['dateDebut']) {
            $object->setDateDebut(null);
        }

        if (\array_key_exists('dateDebutContrat', $data) && null !== $data['dateDebutContrat']) {
            $object->setDateDebutContrat(\DateTime::createFromFormat('Y-m-d', $data['dateDebutContrat'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('dateDebutContrat', $data) && null === $data['dateDebutContrat']) {
            $object->setDateDebutContrat(null);
        }

        if (\array_key_exists('dateFin', $data) && null !== $data['dateFin']) {
            $object->setDateFin(\DateTime::createFromFormat('Y-m-d', $data['dateFin'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('dateFin', $data) && null === $data['dateFin']) {
            $object->setDateFin(null);
        }

        if (\array_key_exists('codeConventionCollective', $data) && null !== $data['codeConventionCollective']) {
            $object->setCodeConventionCollective($data['codeConventionCollective']);
        } elseif (\array_key_exists('codeConventionCollective', $data) && null === $data['codeConventionCollective']) {
            $object->setCodeConventionCollective(null);
        }

        if (\array_key_exists('bCodeConventionCollective', $data) && null !== $data['bCodeConventionCollective']) {
            $object->setBCodeConventionCollective($data['bCodeConventionCollective']);
        } elseif (\array_key_exists('bCodeConventionCollective', $data) && null === $data['bCodeConventionCollective']) {
            $object->setBCodeConventionCollective(null);
        }

        if (\array_key_exists('codeClassificationMetier', $data) && null !== $data['codeClassificationMetier']) {
            $object->setCodeClassificationMetier($data['codeClassificationMetier']);
        } elseif (\array_key_exists('codeClassificationMetier', $data) && null === $data['codeClassificationMetier']) {
            $object->setCodeClassificationMetier(null);
        }

        if (\array_key_exists('bCodeClassificationMetier', $data) && null !== $data['bCodeClassificationMetier']) {
            $object->setBCodeClassificationMetier($data['bCodeClassificationMetier']);
        } elseif (\array_key_exists('bCodeClassificationMetier', $data) && null === $data['bCodeClassificationMetier']) {
            $object->setBCodeClassificationMetier(null);
        }

        if (\array_key_exists('intituleEmploi', $data) && null !== $data['intituleEmploi']) {
            $object->setIntituleEmploi($data['intituleEmploi']);
        } elseif (\array_key_exists('intituleEmploi', $data) && null === $data['intituleEmploi']) {
            $object->setIntituleEmploi(null);
        }

        if (\array_key_exists('bIntituleEmploi', $data) && null !== $data['bIntituleEmploi']) {
            $object->setBIntituleEmploi($data['bIntituleEmploi']);
        } elseif (\array_key_exists('bIntituleEmploi', $data) && null === $data['bIntituleEmploi']) {
            $object->setBIntituleEmploi(null);
        }

        if (\array_key_exists('codeContratTravail', $data) && null !== $data['codeContratTravail']) {
            $object->setCodeContratTravail($data['codeContratTravail']);
        } elseif (\array_key_exists('codeContratTravail', $data) && null === $data['codeContratTravail']) {
            $object->setCodeContratTravail(null);
        }

        if (\array_key_exists('bCodeContratTravail', $data) && null !== $data['bCodeContratTravail']) {
            $object->setBCodeContratTravail($data['bCodeContratTravail']);
        } elseif (\array_key_exists('bCodeContratTravail', $data) && null === $data['bCodeContratTravail']) {
            $object->setBCodeContratTravail(null);
        }

        if (\array_key_exists('motifCDD', $data) && null !== $data['motifCDD']) {
            $object->setMotifCDD($data['motifCDD']);
        } elseif (\array_key_exists('motifCDD', $data) && null === $data['motifCDD']) {
            $object->setMotifCDD(null);
        }

        if (\array_key_exists('bMotifCDD', $data) && null !== $data['bMotifCDD']) {
            $object->setBMotifCDD($data['bMotifCDD']);
        } elseif (\array_key_exists('bMotifCDD', $data) && null === $data['bMotifCDD']) {
            $object->setBMotifCDD(null);
        }

        if (\array_key_exists('dureeInitialeCDD', $data) && null !== $data['dureeInitialeCDD']) {
            $object->setDureeInitialeCDD($data['dureeInitialeCDD']);
        } elseif (\array_key_exists('dureeInitialeCDD', $data) && null === $data['dureeInitialeCDD']) {
            $object->setDureeInitialeCDD(null);
        }

        if (\array_key_exists('bDureeInitialeCDD', $data) && null !== $data['bDureeInitialeCDD']) {
            $object->setBDureeInitialeCDD($data['bDureeInitialeCDD']);
        } elseif (\array_key_exists('bDureeInitialeCDD', $data) && null === $data['bDureeInitialeCDD']) {
            $object->setBDureeInitialeCDD(null);
        }

        if (\array_key_exists('motifDebutEmploi', $data) && null !== $data['motifDebutEmploi']) {
            $object->setMotifDebutEmploi($data['motifDebutEmploi']);
        } elseif (\array_key_exists('motifDebutEmploi', $data) && null === $data['motifDebutEmploi']) {
            $object->setMotifDebutEmploi(null);
        }

        if (\array_key_exists('bMotifDebutEmploi', $data) && null !== $data['bMotifDebutEmploi']) {
            $object->setBMotifDebutEmploi($data['bMotifDebutEmploi']);
        } elseif (\array_key_exists('bMotifDebutEmploi', $data) && null === $data['bMotifDebutEmploi']) {
            $object->setBMotifDebutEmploi(null);
        }

        if (\array_key_exists('motifFinEmploi', $data) && null !== $data['motifFinEmploi']) {
            $object->setMotifFinEmploi($data['motifFinEmploi']);
        } elseif (\array_key_exists('motifFinEmploi', $data) && null === $data['motifFinEmploi']) {
            $object->setMotifFinEmploi(null);
        }

        if (\array_key_exists('bMotifFinEmploi', $data) && null !== $data['bMotifFinEmploi']) {
            $object->setBMotifFinEmploi($data['bMotifFinEmploi']);
        } elseif (\array_key_exists('bMotifFinEmploi', $data) && null === $data['bMotifFinEmploi']) {
            $object->setBMotifFinEmploi(null);
        }

        if (\array_key_exists('codeCaracteristiqueActivite', $data) && null !== $data['codeCaracteristiqueActivite']) {
            $object->setCodeCaracteristiqueActivite($data['codeCaracteristiqueActivite']);
        } elseif (\array_key_exists('codeCaracteristiqueActivite', $data) && null === $data['codeCaracteristiqueActivite']) {
            $object->setCodeCaracteristiqueActivite(null);
        }

        if (\array_key_exists('bCodeCaracteristiqueActivite', $data) && null !== $data['bCodeCaracteristiqueActivite']) {
            $object->setBCodeCaracteristiqueActivite($data['bCodeCaracteristiqueActivite']);
        } elseif (\array_key_exists('bCodeCaracteristiqueActivite', $data) && null === $data['bCodeCaracteristiqueActivite']) {
            $object->setBCodeCaracteristiqueActivite(null);
        }

        if (\array_key_exists('codeStatutProfessionnel', $data) && null !== $data['codeStatutProfessionnel']) {
            $object->setCodeStatutProfessionnel($data['codeStatutProfessionnel']);
        } elseif (\array_key_exists('codeStatutProfessionnel', $data) && null === $data['codeStatutProfessionnel']) {
            $object->setCodeStatutProfessionnel(null);
        }

        if (\array_key_exists('bCodeStatutProfessionnel', $data) && null !== $data['bCodeStatutProfessionnel']) {
            $object->setBCodeStatutProfessionnel($data['bCodeStatutProfessionnel']);
        } elseif (\array_key_exists('bCodeStatutProfessionnel', $data) && null === $data['bCodeStatutProfessionnel']) {
            $object->setBCodeStatutProfessionnel(null);
        }

        if (\array_key_exists('codeStatutCategoriel', $data) && null !== $data['codeStatutCategoriel']) {
            $object->setCodeStatutCategoriel($data['codeStatutCategoriel']);
        } elseif (\array_key_exists('codeStatutCategoriel', $data) && null === $data['codeStatutCategoriel']) {
            $object->setCodeStatutCategoriel(null);
        }

        if (\array_key_exists('bCodeStatutCategoriel', $data) && null !== $data['bCodeStatutCategoriel']) {
            $object->setBCodeStatutCategoriel($data['bCodeStatutCategoriel']);
        } elseif (\array_key_exists('bCodeStatutCategoriel', $data) && null === $data['bCodeStatutCategoriel']) {
            $object->setBCodeStatutCategoriel(null);
        }

        if (\array_key_exists('codeStatutCategorielAgircArrco', $data) && null !== $data['codeStatutCategorielAgircArrco']) {
            $object->setCodeStatutCategorielAgircArrco($data['codeStatutCategorielAgircArrco']);
        } elseif (\array_key_exists('codeStatutCategorielAgircArrco', $data) && null === $data['codeStatutCategorielAgircArrco']) {
            $object->setCodeStatutCategorielAgircArrco(null);
        }

        if (\array_key_exists('bCodeStatutCategorielAgircArrco', $data) && null !== $data['bCodeStatutCategorielAgircArrco']) {
            $object->setBCodeStatutCategorielAgircArrco($data['bCodeStatutCategorielAgircArrco']);
        } elseif (\array_key_exists('bCodeStatutCategorielAgircArrco', $data) && null === $data['bCodeStatutCategorielAgircArrco']) {
            $object->setBCodeStatutCategorielAgircArrco(null);
        }

        if (\array_key_exists('coefficient1', $data) && null !== $data['coefficient1']) {
            $object->setCoefficient1($data['coefficient1']);
        } elseif (\array_key_exists('coefficient1', $data) && null === $data['coefficient1']) {
            $object->setCoefficient1(null);
        }

        if (\array_key_exists('bCoefficient1', $data) && null !== $data['bCoefficient1']) {
            $object->setBCoefficient1($data['bCoefficient1']);
        } elseif (\array_key_exists('bCoefficient1', $data) && null === $data['bCoefficient1']) {
            $object->setBCoefficient1(null);
        }

        if (\array_key_exists('coefficient2', $data) && null !== $data['coefficient2']) {
            $object->setCoefficient2($data['coefficient2']);
        } elseif (\array_key_exists('coefficient2', $data) && null === $data['coefficient2']) {
            $object->setCoefficient2(null);
        }

        if (\array_key_exists('bCoefficient2', $data) && null !== $data['bCoefficient2']) {
            $object->setBCoefficient2($data['bCoefficient2']);
        } elseif (\array_key_exists('bCoefficient2', $data) && null === $data['bCoefficient2']) {
            $object->setBCoefficient2(null);
        }

        if (\array_key_exists('coefficient3', $data) && null !== $data['coefficient3']) {
            $object->setCoefficient3($data['coefficient3']);
        } elseif (\array_key_exists('coefficient3', $data) && null === $data['coefficient3']) {
            $object->setCoefficient3(null);
        }

        if (\array_key_exists('bCoefficient3', $data) && null !== $data['bCoefficient3']) {
            $object->setBCoefficient3($data['bCoefficient3']);
        } elseif (\array_key_exists('bCoefficient3', $data) && null === $data['bCoefficient3']) {
            $object->setBCoefficient3(null);
        }

        if (\array_key_exists('coefficient4', $data) && null !== $data['coefficient4']) {
            $object->setCoefficient4($data['coefficient4']);
        } elseif (\array_key_exists('coefficient4', $data) && null === $data['coefficient4']) {
            $object->setCoefficient4(null);
        }

        if (\array_key_exists('bCoefficient4', $data) && null !== $data['bCoefficient4']) {
            $object->setBCoefficient4($data['bCoefficient4']);
        } elseif (\array_key_exists('bCoefficient4', $data) && null === $data['bCoefficient4']) {
            $object->setBCoefficient4(null);
        }

        if (\array_key_exists('codeCSP', $data) && null !== $data['codeCSP']) {
            $object->setCodeCSP($data['codeCSP']);
        } elseif (\array_key_exists('codeCSP', $data) && null === $data['codeCSP']) {
            $object->setCodeCSP(null);
        }

        if (\array_key_exists('bCodeCSP', $data) && null !== $data['bCodeCSP']) {
            $object->setBCodeCSP($data['bCodeCSP']);
        } elseif (\array_key_exists('bCodeCSP', $data) && null === $data['bCodeCSP']) {
            $object->setBCodeCSP(null);
        }

        if (\array_key_exists('codeCPNDUC', $data) && null !== $data['codeCPNDUC']) {
            $object->setCodeCPNDUC($data['codeCPNDUC']);
        } elseif (\array_key_exists('codeCPNDUC', $data) && null === $data['codeCPNDUC']) {
            $object->setCodeCPNDUC(null);
        }

        if (\array_key_exists('bCodeCPNDUC', $data) && null !== $data['bCodeCPNDUC']) {
            $object->setBCodeCPNDUC($data['bCodeCPNDUC']);
        } elseif (\array_key_exists('bCodeCPNDUC', $data) && null === $data['bCodeCPNDUC']) {
            $object->setBCodeCPNDUC(null);
        }

        if (\array_key_exists('spectacleCodeEmploi', $data) && null !== $data['spectacleCodeEmploi']) {
            $object->setSpectacleCodeEmploi($data['spectacleCodeEmploi']);
        } elseif (\array_key_exists('spectacleCodeEmploi', $data) && null === $data['spectacleCodeEmploi']) {
            $object->setSpectacleCodeEmploi(null);
        }

        if (\array_key_exists('bSpectacleCodeEmploi', $data) && null !== $data['bSpectacleCodeEmploi']) {
            $object->setBSpectacleCodeEmploi($data['bSpectacleCodeEmploi']);
        } elseif (\array_key_exists('bSpectacleCodeEmploi', $data) && null === $data['bSpectacleCodeEmploi']) {
            $object->setBSpectacleCodeEmploi(null);
        }

        if (\array_key_exists('spectacleNumeroConges', $data) && null !== $data['spectacleNumeroConges']) {
            $object->setSpectacleNumeroConges($data['spectacleNumeroConges']);
        } elseif (\array_key_exists('spectacleNumeroConges', $data) && null === $data['spectacleNumeroConges']) {
            $object->setSpectacleNumeroConges(null);
        }

        if (\array_key_exists('bSpectacleNumeroConges', $data) && null !== $data['bSpectacleNumeroConges']) {
            $object->setBSpectacleNumeroConges($data['bSpectacleNumeroConges']);
        } elseif (\array_key_exists('bSpectacleNumeroConges', $data) && null === $data['bSpectacleNumeroConges']) {
            $object->setBSpectacleNumeroConges(null);
        }

        if (\array_key_exists('pctAbattement', $data) && null !== $data['pctAbattement']) {
            $object->setPctAbattement($data['pctAbattement']);
        } elseif (\array_key_exists('pctAbattement', $data) && null === $data['pctAbattement']) {
            $object->setPctAbattement(null);
        }

        if (\array_key_exists('bPctAbattement', $data) && null !== $data['bPctAbattement']) {
            $object->setBPctAbattement($data['bPctAbattement']);
        } elseif (\array_key_exists('bPctAbattement', $data) && null === $data['bPctAbattement']) {
            $object->setBPctAbattement(null);
        }

        if (\array_key_exists('salaireDeBaseEstHoraire', $data) && null !== $data['salaireDeBaseEstHoraire']) {
            $object->setSalaireDeBaseEstHoraire($data['salaireDeBaseEstHoraire']);
        } elseif (\array_key_exists('salaireDeBaseEstHoraire', $data) && null === $data['salaireDeBaseEstHoraire']) {
            $object->setSalaireDeBaseEstHoraire(null);
        }

        if (\array_key_exists('bSalaireDeBaseEstHoraire', $data) && null !== $data['bSalaireDeBaseEstHoraire']) {
            $object->setBSalaireDeBaseEstHoraire($data['bSalaireDeBaseEstHoraire']);
        } elseif (\array_key_exists('bSalaireDeBaseEstHoraire', $data) && null === $data['bSalaireDeBaseEstHoraire']) {
            $object->setBSalaireDeBaseEstHoraire(null);
        }

        if (\array_key_exists('salaireDeBase', $data) && null !== $data['salaireDeBase']) {
            $object->setSalaireDeBase($data['salaireDeBase']);
        } elseif (\array_key_exists('salaireDeBase', $data) && null === $data['salaireDeBase']) {
            $object->setSalaireDeBase(null);
        }

        if (\array_key_exists('bSalaireDeBase', $data) && null !== $data['bSalaireDeBase']) {
            $object->setBSalaireDeBase($data['bSalaireDeBase']);
        } elseif (\array_key_exists('bSalaireDeBase', $data) && null === $data['bSalaireDeBase']) {
            $object->setBSalaireDeBase(null);
        }

        if (\array_key_exists('salaireNetGaranti', $data) && null !== $data['salaireNetGaranti']) {
            $object->setSalaireNetGaranti($data['salaireNetGaranti']);
        } elseif (\array_key_exists('salaireNetGaranti', $data) && null === $data['salaireNetGaranti']) {
            $object->setSalaireNetGaranti(null);
        }

        if (\array_key_exists('bSalaireNetGaranti', $data) && null !== $data['bSalaireNetGaranti']) {
            $object->setBSalaireNetGaranti($data['bSalaireNetGaranti']);
        } elseif (\array_key_exists('bSalaireNetGaranti', $data) && null === $data['bSalaireNetGaranti']) {
            $object->setBSalaireNetGaranti(null);
        }

        if (\array_key_exists('nbHeuresTravaillees', $data) && null !== $data['nbHeuresTravaillees']) {
            $values = [];
            foreach ($data['nbHeuresTravaillees'] as $value) {
                $values[] = $value;
            }

            $object->setNbHeuresTravaillees($values);
        } elseif (\array_key_exists('nbHeuresTravaillees', $data) && null === $data['nbHeuresTravaillees']) {
            $object->setNbHeuresTravaillees(null);
        }

        if (\array_key_exists('nbHeuresDeNuitTravaillees', $data) && null !== $data['nbHeuresDeNuitTravaillees']) {
            $values_1 = [];
            foreach ($data['nbHeuresDeNuitTravaillees'] as $value_1) {
                $values_1[] = $value_1;
            }

            $object->setNbHeuresDeNuitTravaillees($values_1);
        } elseif (\array_key_exists('nbHeuresDeNuitTravaillees', $data) && null === $data['nbHeuresDeNuitTravaillees']) {
            $object->setNbHeuresDeNuitTravaillees(null);
        }

        if (\array_key_exists('bNbHeuresTravaillees', $data) && null !== $data['bNbHeuresTravaillees']) {
            $object->setBNbHeuresTravaillees($data['bNbHeuresTravaillees']);
        } elseif (\array_key_exists('bNbHeuresTravaillees', $data) && null === $data['bNbHeuresTravaillees']) {
            $object->setBNbHeuresTravaillees(null);
        }

        if (\array_key_exists('nbHeuresMensuellesNormales', $data) && null !== $data['nbHeuresMensuellesNormales']) {
            $object->setNbHeuresMensuellesNormales($data['nbHeuresMensuellesNormales']);
        } elseif (\array_key_exists('nbHeuresMensuellesNormales', $data) && null === $data['nbHeuresMensuellesNormales']) {
            $object->setNbHeuresMensuellesNormales(null);
        }

        if (\array_key_exists('bNbHeuresMensuellesNormales', $data) && null !== $data['bNbHeuresMensuellesNormales']) {
            $object->setBNbHeuresMensuellesNormales($data['bNbHeuresMensuellesNormales']);
        } elseif (\array_key_exists('bNbHeuresMensuellesNormales', $data) && null === $data['bNbHeuresMensuellesNormales']) {
            $object->setBNbHeuresMensuellesNormales(null);
        }

        if (\array_key_exists('nbHeuresMensuellesMajorees', $data) && null !== $data['nbHeuresMensuellesMajorees']) {
            $object->setNbHeuresMensuellesMajorees($data['nbHeuresMensuellesMajorees']);
        } elseif (\array_key_exists('nbHeuresMensuellesMajorees', $data) && null === $data['nbHeuresMensuellesMajorees']) {
            $object->setNbHeuresMensuellesMajorees(null);
        }

        if (\array_key_exists('bNbHeuresMensuellesMajorees', $data) && null !== $data['bNbHeuresMensuellesMajorees']) {
            $object->setBNbHeuresMensuellesMajorees($data['bNbHeuresMensuellesMajorees']);
        } elseif (\array_key_exists('bNbHeuresMensuellesMajorees', $data) && null === $data['bNbHeuresMensuellesMajorees']) {
            $object->setBNbHeuresMensuellesMajorees(null);
        }

        if (\array_key_exists('pctHeuresMensuellesMajorees', $data) && null !== $data['pctHeuresMensuellesMajorees']) {
            $object->setPctHeuresMensuellesMajorees($data['pctHeuresMensuellesMajorees']);
        } elseif (\array_key_exists('pctHeuresMensuellesMajorees', $data) && null === $data['pctHeuresMensuellesMajorees']) {
            $object->setPctHeuresMensuellesMajorees(null);
        }

        if (\array_key_exists('bPctHeuresMensuellesMajorees', $data) && null !== $data['bPctHeuresMensuellesMajorees']) {
            $object->setBPctHeuresMensuellesMajorees($data['bPctHeuresMensuellesMajorees']);
        } elseif (\array_key_exists('bPctHeuresMensuellesMajorees', $data) && null === $data['bPctHeuresMensuellesMajorees']) {
            $object->setBPctHeuresMensuellesMajorees(null);
        }

        if (\array_key_exists('nbHeuresMensuellesLibres', $data) && null !== $data['nbHeuresMensuellesLibres']) {
            $values_2 = [];
            foreach ($data['nbHeuresMensuellesLibres'] as $value_2) {
                $values_2[] = $value_2;
            }

            $object->setNbHeuresMensuellesLibres($values_2);
        } elseif (\array_key_exists('nbHeuresMensuellesLibres', $data) && null === $data['nbHeuresMensuellesLibres']) {
            $object->setNbHeuresMensuellesLibres(null);
        }

        if (\array_key_exists('codesHeuresMensuellesLibres', $data) && null !== $data['codesHeuresMensuellesLibres']) {
            $values_3 = [];
            foreach ($data['codesHeuresMensuellesLibres'] as $value_3) {
                $values_3[] = $value_3;
            }

            $object->setCodesHeuresMensuellesLibres($values_3);
        } elseif (\array_key_exists('codesHeuresMensuellesLibres', $data) && null === $data['codesHeuresMensuellesLibres']) {
            $object->setCodesHeuresMensuellesLibres(null);
        }

        if (\array_key_exists('bHeuresMensuellesLibres', $data) && null !== $data['bHeuresMensuellesLibres']) {
            $object->setBHeuresMensuellesLibres($data['bHeuresMensuellesLibres']);
        } elseif (\array_key_exists('bHeuresMensuellesLibres', $data) && null === $data['bHeuresMensuellesLibres']) {
            $object->setBHeuresMensuellesLibres(null);
        }

        if (\array_key_exists('confirmationObligatoireDesHeures', $data) && null !== $data['confirmationObligatoireDesHeures']) {
            $object->setConfirmationObligatoireDesHeures($data['confirmationObligatoireDesHeures']);
        } elseif (\array_key_exists('confirmationObligatoireDesHeures', $data) && null === $data['confirmationObligatoireDesHeures']) {
            $object->setConfirmationObligatoireDesHeures(null);
        }

        if (\array_key_exists('bConfirmationObligatoireDesHeures', $data) && null !== $data['bConfirmationObligatoireDesHeures']) {
            $object->setBConfirmationObligatoireDesHeures($data['bConfirmationObligatoireDesHeures']);
        } elseif (\array_key_exists('bConfirmationObligatoireDesHeures', $data) && null === $data['bConfirmationObligatoireDesHeures']) {
            $object->setBConfirmationObligatoireDesHeures(null);
        }

        if (\array_key_exists('activerCalculKilometrique', $data) && null !== $data['activerCalculKilometrique']) {
            $object->setActiverCalculKilometrique($data['activerCalculKilometrique']);
        } elseif (\array_key_exists('activerCalculKilometrique', $data) && null === $data['activerCalculKilometrique']) {
            $object->setActiverCalculKilometrique(null);
        }

        if (\array_key_exists('bActiverCalculKilometrique', $data) && null !== $data['bActiverCalculKilometrique']) {
            $object->setBActiverCalculKilometrique($data['bActiverCalculKilometrique']);
        } elseif (\array_key_exists('bActiverCalculKilometrique', $data) && null === $data['bActiverCalculKilometrique']) {
            $object->setBActiverCalculKilometrique(null);
        }

        if (\array_key_exists('typeDeVehicule', $data) && null !== $data['typeDeVehicule']) {
            $object->setTypeDeVehicule($data['typeDeVehicule']);
        } elseif (\array_key_exists('typeDeVehicule', $data) && null === $data['typeDeVehicule']) {
            $object->setTypeDeVehicule(null);
        }

        if (\array_key_exists('bTypeDeVehicule', $data) && null !== $data['bTypeDeVehicule']) {
            $object->setBTypeDeVehicule($data['bTypeDeVehicule']);
        } elseif (\array_key_exists('bTypeDeVehicule', $data) && null === $data['bTypeDeVehicule']) {
            $object->setBTypeDeVehicule(null);
        }

        if (\array_key_exists('trancheKilometrique', $data) && null !== $data['trancheKilometrique']) {
            $object->setTrancheKilometrique($data['trancheKilometrique']);
        } elseif (\array_key_exists('trancheKilometrique', $data) && null === $data['trancheKilometrique']) {
            $object->setTrancheKilometrique(null);
        }

        if (\array_key_exists('bTrancheKilometrique', $data) && null !== $data['bTrancheKilometrique']) {
            $object->setBTrancheKilometrique($data['bTrancheKilometrique']);
        } elseif (\array_key_exists('bTrancheKilometrique', $data) && null === $data['bTrancheKilometrique']) {
            $object->setBTrancheKilometrique(null);
        }

        if (\array_key_exists('prixDuKilometre', $data) && null !== $data['prixDuKilometre']) {
            $object->setPrixDuKilometre($data['prixDuKilometre']);
        } elseif (\array_key_exists('prixDuKilometre', $data) && null === $data['prixDuKilometre']) {
            $object->setPrixDuKilometre(null);
        }

        if (\array_key_exists('bPrixDuKilometre', $data) && null !== $data['bPrixDuKilometre']) {
            $object->setBPrixDuKilometre($data['bPrixDuKilometre']);
        } elseif (\array_key_exists('bPrixDuKilometre', $data) && null === $data['bPrixDuKilometre']) {
            $object->setBPrixDuKilometre(null);
        }

        if (\array_key_exists('activerActiviteJournaliere', $data) && null !== $data['activerActiviteJournaliere']) {
            $object->setActiverActiviteJournaliere($data['activerActiviteJournaliere']);
        } elseif (\array_key_exists('activerActiviteJournaliere', $data) && null === $data['activerActiviteJournaliere']) {
            $object->setActiverActiviteJournaliere(null);
        }

        if (\array_key_exists('bActiverActiviteJournaliere', $data) && null !== $data['bActiverActiviteJournaliere']) {
            $object->setBActiverActiviteJournaliere($data['bActiverActiviteJournaliere']);
        } elseif (\array_key_exists('bActiverActiviteJournaliere', $data) && null === $data['bActiverActiviteJournaliere']) {
            $object->setBActiverActiviteJournaliere(null);
        }

        if (\array_key_exists('decoupageActiviteJournaliere', $data) && null !== $data['decoupageActiviteJournaliere']) {
            $object->setDecoupageActiviteJournaliere($data['decoupageActiviteJournaliere']);
        } elseif (\array_key_exists('decoupageActiviteJournaliere', $data) && null === $data['decoupageActiviteJournaliere']) {
            $object->setDecoupageActiviteJournaliere(null);
        }

        if (\array_key_exists('bDecoupageActiviteJournaliere', $data) && null !== $data['bDecoupageActiviteJournaliere']) {
            $object->setBDecoupageActiviteJournaliere($data['bDecoupageActiviteJournaliere']);
        } elseif (\array_key_exists('bDecoupageActiviteJournaliere', $data) && null === $data['bDecoupageActiviteJournaliere']) {
            $object->setBDecoupageActiviteJournaliere(null);
        }

        if (\array_key_exists('modeSaisieActiviteJournaliere', $data) && null !== $data['modeSaisieActiviteJournaliere']) {
            $object->setModeSaisieActiviteJournaliere($data['modeSaisieActiviteJournaliere']);
        } elseif (\array_key_exists('modeSaisieActiviteJournaliere', $data) && null === $data['modeSaisieActiviteJournaliere']) {
            $object->setModeSaisieActiviteJournaliere(null);
        }

        if (\array_key_exists('bModeSaisieActiviteJournaliere', $data) && null !== $data['bModeSaisieActiviteJournaliere']) {
            $object->setBModeSaisieActiviteJournaliere($data['bModeSaisieActiviteJournaliere']);
        } elseif (\array_key_exists('bModeSaisieActiviteJournaliere', $data) && null === $data['bModeSaisieActiviteJournaliere']) {
            $object->setBModeSaisieActiviteJournaliere(null);
        }

        if (\array_key_exists('exonerationCode', $data) && null !== $data['exonerationCode']) {
            $object->setExonerationCode($data['exonerationCode']);
        } elseif (\array_key_exists('exonerationCode', $data) && null === $data['exonerationCode']) {
            $object->setExonerationCode(null);
        }

        if (\array_key_exists('bExonerationCode', $data) && null !== $data['bExonerationCode']) {
            $object->setBExonerationCode($data['bExonerationCode']);
        } elseif (\array_key_exists('bExonerationCode', $data) && null === $data['bExonerationCode']) {
            $object->setBExonerationCode(null);
        }

        if (\array_key_exists('exonerationDebut', $data) && null !== $data['exonerationDebut']) {
            $object->setExonerationDebut(\DateTime::createFromFormat('Y-m-d', $data['exonerationDebut'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('exonerationDebut', $data) && null === $data['exonerationDebut']) {
            $object->setExonerationDebut(null);
        }

        if (\array_key_exists('bExonerationDebut', $data) && null !== $data['bExonerationDebut']) {
            $object->setBExonerationDebut($data['bExonerationDebut']);
        } elseif (\array_key_exists('bExonerationDebut', $data) && null === $data['bExonerationDebut']) {
            $object->setBExonerationDebut(null);
        }

        if (\array_key_exists('exonerationFin', $data) && null !== $data['exonerationFin']) {
            $object->setExonerationFin(\DateTime::createFromFormat('Y-m-d', $data['exonerationFin'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('exonerationFin', $data) && null === $data['exonerationFin']) {
            $object->setExonerationFin(null);
        }

        if (\array_key_exists('bExonerationFin', $data) && null !== $data['bExonerationFin']) {
            $object->setBExonerationFin($data['bExonerationFin']);
        } elseif (\array_key_exists('bExonerationFin', $data) && null === $data['bExonerationFin']) {
            $object->setBExonerationFin(null);
        }

        if (\array_key_exists('exonerationTaux', $data) && null !== $data['exonerationTaux']) {
            $object->setExonerationTaux($data['exonerationTaux']);
        } elseif (\array_key_exists('exonerationTaux', $data) && null === $data['exonerationTaux']) {
            $object->setExonerationTaux(null);
        }

        if (\array_key_exists('bExonerationTaux', $data) && null !== $data['bExonerationTaux']) {
            $object->setBExonerationTaux($data['bExonerationTaux']);
        } elseif (\array_key_exists('bExonerationTaux', $data) && null === $data['bExonerationTaux']) {
            $object->setBExonerationTaux(null);
        }

        if (\array_key_exists('titreTransportCode', $data) && null !== $data['titreTransportCode']) {
            $object->setTitreTransportCode($data['titreTransportCode']);
        } elseif (\array_key_exists('titreTransportCode', $data) && null === $data['titreTransportCode']) {
            $object->setTitreTransportCode(null);
        }

        if (\array_key_exists('bTitreTransportCode', $data) && null !== $data['bTitreTransportCode']) {
            $object->setBTitreTransportCode($data['bTitreTransportCode']);
        } elseif (\array_key_exists('bTitreTransportCode', $data) && null === $data['bTitreTransportCode']) {
            $object->setBTitreTransportCode(null);
        }

        if (\array_key_exists('titreTransportRemboursement', $data) && null !== $data['titreTransportRemboursement']) {
            $object->setTitreTransportRemboursement($data['titreTransportRemboursement']);
        } elseif (\array_key_exists('titreTransportRemboursement', $data) && null === $data['titreTransportRemboursement']) {
            $object->setTitreTransportRemboursement(null);
        }

        if (\array_key_exists('bTitreTransportRemboursement', $data) && null !== $data['bTitreTransportRemboursement']) {
            $object->setBTitreTransportRemboursement($data['bTitreTransportRemboursement']);
        } elseif (\array_key_exists('bTitreTransportRemboursement', $data) && null === $data['bTitreTransportRemboursement']) {
            $object->setBTitreTransportRemboursement(null);
        }

        if (\array_key_exists('autreTitreTransportMontant', $data) && null !== $data['autreTitreTransportMontant']) {
            $object->setAutreTitreTransportMontant($data['autreTitreTransportMontant']);
        } elseif (\array_key_exists('autreTitreTransportMontant', $data) && null === $data['autreTitreTransportMontant']) {
            $object->setAutreTitreTransportMontant(null);
        }

        if (\array_key_exists('bAutreTitreTransportMontant', $data) && null !== $data['bAutreTitreTransportMontant']) {
            $object->setBAutreTitreTransportMontant($data['bAutreTitreTransportMontant']);
        } elseif (\array_key_exists('bAutreTitreTransportMontant', $data) && null === $data['bAutreTitreTransportMontant']) {
            $object->setBAutreTitreTransportMontant(null);
        }

        if (\array_key_exists('autreTitreTransportRemboursement', $data) && null !== $data['autreTitreTransportRemboursement']) {
            $object->setAutreTitreTransportRemboursement($data['autreTitreTransportRemboursement']);
        } elseif (\array_key_exists('autreTitreTransportRemboursement', $data) && null === $data['autreTitreTransportRemboursement']) {
            $object->setAutreTitreTransportRemboursement(null);
        }

        if (\array_key_exists('bAutreTitreTransportRemboursement', $data) && null !== $data['bAutreTitreTransportRemboursement']) {
            $object->setBAutreTitreTransportRemboursement($data['bAutreTitreTransportRemboursement']);
        } elseif (\array_key_exists('bAutreTitreTransportRemboursement', $data) && null === $data['bAutreTitreTransportRemboursement']) {
            $object->setBAutreTitreTransportRemboursement(null);
        }

        if (\array_key_exists('ticketRestaurant', $data) && null !== $data['ticketRestaurant']) {
            $object->setTicketRestaurant($data['ticketRestaurant']);
        } elseif (\array_key_exists('ticketRestaurant', $data) && null === $data['ticketRestaurant']) {
            $object->setTicketRestaurant(null);
        }

        if (\array_key_exists('bTicketRestaurant', $data) && null !== $data['bTicketRestaurant']) {
            $object->setBTicketRestaurant($data['bTicketRestaurant']);
        } elseif (\array_key_exists('bTicketRestaurant', $data) && null === $data['bTicketRestaurant']) {
            $object->setBTicketRestaurant(null);
        }

        if (\array_key_exists('codeTerritoire', $data) && null !== $data['codeTerritoire']) {
            $object->setCodeTerritoire($data['codeTerritoire']);
        } elseif (\array_key_exists('codeTerritoire', $data) && null === $data['codeTerritoire']) {
            $object->setCodeTerritoire(null);
        }

        if (\array_key_exists('bCodeTerritoire', $data) && null !== $data['bCodeTerritoire']) {
            $object->setBCodeTerritoire($data['bCodeTerritoire']);
        } elseif (\array_key_exists('bCodeTerritoire', $data) && null === $data['bCodeTerritoire']) {
            $object->setBCodeTerritoire(null);
        }

        if (\array_key_exists('codeSecteurDFS', $data) && null !== $data['codeSecteurDFS']) {
            $object->setCodeSecteurDFS($data['codeSecteurDFS']);
        } elseif (\array_key_exists('codeSecteurDFS', $data) && null === $data['codeSecteurDFS']) {
            $object->setCodeSecteurDFS(null);
        }

        if (\array_key_exists('bCodeSecteurDFS', $data) && null !== $data['bCodeSecteurDFS']) {
            $object->setBCodeSecteurDFS($data['bCodeSecteurDFS']);
        } elseif (\array_key_exists('bCodeSecteurDFS', $data) && null === $data['bCodeSecteurDFS']) {
            $object->setBCodeSecteurDFS(null);
        }

        if (\array_key_exists('pctAbattementLissage', $data) && null !== $data['pctAbattementLissage']) {
            $object->setPctAbattementLissage($data['pctAbattementLissage']);
        } elseif (\array_key_exists('pctAbattementLissage', $data) && null === $data['pctAbattementLissage']) {
            $object->setPctAbattementLissage(null);
        }

        if (\array_key_exists('bPctAbattementLissage', $data) && null !== $data['bPctAbattementLissage']) {
            $object->setBPctAbattementLissage($data['bPctAbattementLissage']);
        } elseif (\array_key_exists('bPctAbattementLissage', $data) && null === $data['bPctAbattementLissage']) {
            $object->setBPctAbattementLissage(null);
        }

        if (\array_key_exists('codeStatutRegimeProtectionSociale', $data) && null !== $data['codeStatutRegimeProtectionSociale']) {
            $object->setCodeStatutRegimeProtectionSociale($data['codeStatutRegimeProtectionSociale']);
        } elseif (\array_key_exists('codeStatutRegimeProtectionSociale', $data) && null === $data['codeStatutRegimeProtectionSociale']) {
            $object->setCodeStatutRegimeProtectionSociale(null);
        }

        if (\array_key_exists('bCodeStatutRegimeProtectionSociale', $data) && null !== $data['bCodeStatutRegimeProtectionSociale']) {
            $object->setBCodeStatutRegimeProtectionSociale($data['bCodeStatutRegimeProtectionSociale']);
        } elseif (\array_key_exists('bCodeStatutRegimeProtectionSociale', $data) && null === $data['bCodeStatutRegimeProtectionSociale']) {
            $object->setBCodeStatutRegimeProtectionSociale(null);
        }

        if (\array_key_exists('emploiNonPrincipal', $data) && null !== $data['emploiNonPrincipal']) {
            $object->setEmploiNonPrincipal($data['emploiNonPrincipal']);
        } elseif (\array_key_exists('emploiNonPrincipal', $data) && null === $data['emploiNonPrincipal']) {
            $object->setEmploiNonPrincipal(null);
        }

        if (\array_key_exists('bEmploiNonPrincipal', $data) && null !== $data['bEmploiNonPrincipal']) {
            $object->setBEmploiNonPrincipal($data['bEmploiNonPrincipal']);
        } elseif (\array_key_exists('bEmploiNonPrincipal', $data) && null === $data['bEmploiNonPrincipal']) {
            $object->setBEmploiNonPrincipal(null);
        }

        if (\array_key_exists('contratPartDtSignature', $data) && null !== $data['contratPartDtSignature']) {
            $object->setContratPartDtSignature(\DateTime::createFromFormat('Y-m-d', $data['contratPartDtSignature'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('contratPartDtSignature', $data) && null === $data['contratPartDtSignature']) {
            $object->setContratPartDtSignature(null);
        }

        if (\array_key_exists('bContratPartDtSignature', $data) && null !== $data['bContratPartDtSignature']) {
            $object->setBContratPartDtSignature($data['bContratPartDtSignature']);
        } elseif (\array_key_exists('bContratPartDtSignature', $data) && null === $data['bContratPartDtSignature']) {
            $object->setBContratPartDtSignature(null);
        }

        if (\array_key_exists('fjNbJAn', $data) && null !== $data['fjNbJAn']) {
            $object->setFjNbJAn($data['fjNbJAn']);
        } elseif (\array_key_exists('fjNbJAn', $data) && null === $data['fjNbJAn']) {
            $object->setFjNbJAn(null);
        }

        if (\array_key_exists('bFJNbJAn', $data) && null !== $data['bFJNbJAn']) {
            $object->setBFJNbJAn($data['bFJNbJAn']);
        } elseif (\array_key_exists('bFJNbJAn', $data) && null === $data['bFJNbJAn']) {
            $object->setBFJNbJAn(null);
        }

        if (\array_key_exists('nonSoumisHEta', $data) && null !== $data['nonSoumisHEta']) {
            $object->setNonSoumisHEta($data['nonSoumisHEta']);
        } elseif (\array_key_exists('nonSoumisHEta', $data) && null === $data['nonSoumisHEta']) {
            $object->setNonSoumisHEta(null);
        }

        if (\array_key_exists('bNonSoumisHEta', $data) && null !== $data['bNonSoumisHEta']) {
            $object->setBNonSoumisHEta($data['bNonSoumisHEta']);
        } elseif (\array_key_exists('bNonSoumisHEta', $data) && null === $data['bNonSoumisHEta']) {
            $object->setBNonSoumisHEta(null);
        }

        if (\array_key_exists('motifRuptureContrat', $data) && null !== $data['motifRuptureContrat']) {
            $object->setMotifRuptureContrat($data['motifRuptureContrat']);
        } elseif (\array_key_exists('motifRuptureContrat', $data) && null === $data['motifRuptureContrat']) {
            $object->setMotifRuptureContrat(null);
        }

        if (\array_key_exists('bMotifRuptureContrat', $data) && null !== $data['bMotifRuptureContrat']) {
            $object->setBMotifRuptureContrat($data['bMotifRuptureContrat']);
        } elseif (\array_key_exists('bMotifRuptureContrat', $data) && null === $data['bMotifRuptureContrat']) {
            $object->setBMotifRuptureContrat(null);
        }

        if (\array_key_exists('docsFinContratInactifs', $data) && null !== $data['docsFinContratInactifs']) {
            $object->setDocsFinContratInactifs($data['docsFinContratInactifs']);
        } elseif (\array_key_exists('docsFinContratInactifs', $data) && null === $data['docsFinContratInactifs']) {
            $object->setDocsFinContratInactifs(null);
        }

        if (\array_key_exists('bDocsFinContratInactifs', $data) && null !== $data['bDocsFinContratInactifs']) {
            $object->setBDocsFinContratInactifs($data['bDocsFinContratInactifs']);
        } elseif (\array_key_exists('bDocsFinContratInactifs', $data) && null === $data['bDocsFinContratInactifs']) {
            $object->setBDocsFinContratInactifs(null);
        }

        if (\array_key_exists('rttTypeAcq', $data) && null !== $data['rttTypeAcq']) {
            $object->setRttTypeAcq($data['rttTypeAcq']);
        } elseif (\array_key_exists('rttTypeAcq', $data) && null === $data['rttTypeAcq']) {
            $object->setRttTypeAcq(null);
        }

        if (\array_key_exists('bRTTTypeAcq', $data) && null !== $data['bRTTTypeAcq']) {
            $object->setBRTTTypeAcq($data['bRTTTypeAcq']);
        } elseif (\array_key_exists('bRTTTypeAcq', $data) && null === $data['bRTTTypeAcq']) {
            $object->setBRTTTypeAcq(null);
        }

        if (\array_key_exists('avnLMontantSal', $data) && null !== $data['avnLMontantSal']) {
            $object->setAvnLMontantSal($data['avnLMontantSal']);
        } elseif (\array_key_exists('avnLMontantSal', $data) && null === $data['avnLMontantSal']) {
            $object->setAvnLMontantSal(null);
        }

        if (\array_key_exists('bAvnLMontantSal', $data) && null !== $data['bAvnLMontantSal']) {
            $object->setBAvnLMontantSal($data['bAvnLMontantSal']);
        } elseif (\array_key_exists('bAvnLMontantSal', $data) && null === $data['bAvnLMontantSal']) {
            $object->setBAvnLMontantSal(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('identifiantEmploi') && null !== $data->getIdentifiantEmploi()) {
            $dataArray['identifiantEmploi'] = $data->getIdentifiantEmploi();
        }

        if ($data->isInitialized('identifiantEmploiModele') && null !== $data->getIdentifiantEmploiModele()) {
            $dataArray['identifiantEmploiModele'] = $data->getIdentifiantEmploiModele();
        }

        if ($data->isInitialized('envoiDUEEdi') && null !== $data->getEnvoiDUEEdi()) {
            $dataArray['envoiDUEEdi'] = $data->getEnvoiDUEEdi();
        }

        if ($data->isInitialized('envoiDUEEdiSansCreerEmploi') && null !== $data->getEnvoiDUEEdiSansCreerEmploi()) {
            $dataArray['envoiDUEEdiSansCreerEmploi'] = $data->getEnvoiDUEEdiSansCreerEmploi();
        }

        if ($data->isInitialized('nomInterneEtablissement') && null !== $data->getNomInterneEtablissement()) {
            $dataArray['nomInterneEtablissement'] = $data->getNomInterneEtablissement();
        }

        if ($data->isInitialized('dateDebut') && null !== $data->getDateDebut()) {
            $dataArray['dateDebut'] = $data->getDateDebut()->format('Y-m-d');
        }

        if ($data->isInitialized('dateDebutContrat') && null !== $data->getDateDebutContrat()) {
            $dataArray['dateDebutContrat'] = $data->getDateDebutContrat()->format('Y-m-d');
        }

        if ($data->isInitialized('dateFin') && null !== $data->getDateFin()) {
            $dataArray['dateFin'] = $data->getDateFin()->format('Y-m-d');
        }

        if ($data->isInitialized('codeConventionCollective') && null !== $data->getCodeConventionCollective()) {
            $dataArray['codeConventionCollective'] = $data->getCodeConventionCollective();
        }

        if ($data->isInitialized('bCodeConventionCollective') && null !== $data->getBCodeConventionCollective()) {
            $dataArray['bCodeConventionCollective'] = $data->getBCodeConventionCollective();
        }

        if ($data->isInitialized('codeClassificationMetier') && null !== $data->getCodeClassificationMetier()) {
            $dataArray['codeClassificationMetier'] = $data->getCodeClassificationMetier();
        }

        if ($data->isInitialized('bCodeClassificationMetier') && null !== $data->getBCodeClassificationMetier()) {
            $dataArray['bCodeClassificationMetier'] = $data->getBCodeClassificationMetier();
        }

        if ($data->isInitialized('intituleEmploi') && null !== $data->getIntituleEmploi()) {
            $dataArray['intituleEmploi'] = $data->getIntituleEmploi();
        }

        if ($data->isInitialized('bIntituleEmploi') && null !== $data->getBIntituleEmploi()) {
            $dataArray['bIntituleEmploi'] = $data->getBIntituleEmploi();
        }

        if ($data->isInitialized('codeContratTravail') && null !== $data->getCodeContratTravail()) {
            $dataArray['codeContratTravail'] = $data->getCodeContratTravail();
        }

        if ($data->isInitialized('bCodeContratTravail') && null !== $data->getBCodeContratTravail()) {
            $dataArray['bCodeContratTravail'] = $data->getBCodeContratTravail();
        }

        if ($data->isInitialized('motifCDD') && null !== $data->getMotifCDD()) {
            $dataArray['motifCDD'] = $data->getMotifCDD();
        }

        if ($data->isInitialized('bMotifCDD') && null !== $data->getBMotifCDD()) {
            $dataArray['bMotifCDD'] = $data->getBMotifCDD();
        }

        if ($data->isInitialized('dureeInitialeCDD') && null !== $data->getDureeInitialeCDD()) {
            $dataArray['dureeInitialeCDD'] = $data->getDureeInitialeCDD();
        }

        if ($data->isInitialized('bDureeInitialeCDD') && null !== $data->getBDureeInitialeCDD()) {
            $dataArray['bDureeInitialeCDD'] = $data->getBDureeInitialeCDD();
        }

        if ($data->isInitialized('motifDebutEmploi') && null !== $data->getMotifDebutEmploi()) {
            $dataArray['motifDebutEmploi'] = $data->getMotifDebutEmploi();
        }

        if ($data->isInitialized('bMotifDebutEmploi') && null !== $data->getBMotifDebutEmploi()) {
            $dataArray['bMotifDebutEmploi'] = $data->getBMotifDebutEmploi();
        }

        if ($data->isInitialized('motifFinEmploi') && null !== $data->getMotifFinEmploi()) {
            $dataArray['motifFinEmploi'] = $data->getMotifFinEmploi();
        }

        if ($data->isInitialized('bMotifFinEmploi') && null !== $data->getBMotifFinEmploi()) {
            $dataArray['bMotifFinEmploi'] = $data->getBMotifFinEmploi();
        }

        if ($data->isInitialized('codeCaracteristiqueActivite') && null !== $data->getCodeCaracteristiqueActivite()) {
            $dataArray['codeCaracteristiqueActivite'] = $data->getCodeCaracteristiqueActivite();
        }

        if ($data->isInitialized('bCodeCaracteristiqueActivite') && null !== $data->getBCodeCaracteristiqueActivite()) {
            $dataArray['bCodeCaracteristiqueActivite'] = $data->getBCodeCaracteristiqueActivite();
        }

        if ($data->isInitialized('codeStatutProfessionnel') && null !== $data->getCodeStatutProfessionnel()) {
            $dataArray['codeStatutProfessionnel'] = $data->getCodeStatutProfessionnel();
        }

        if ($data->isInitialized('bCodeStatutProfessionnel') && null !== $data->getBCodeStatutProfessionnel()) {
            $dataArray['bCodeStatutProfessionnel'] = $data->getBCodeStatutProfessionnel();
        }

        if ($data->isInitialized('codeStatutCategoriel') && null !== $data->getCodeStatutCategoriel()) {
            $dataArray['codeStatutCategoriel'] = $data->getCodeStatutCategoriel();
        }

        if ($data->isInitialized('bCodeStatutCategoriel') && null !== $data->getBCodeStatutCategoriel()) {
            $dataArray['bCodeStatutCategoriel'] = $data->getBCodeStatutCategoriel();
        }

        if ($data->isInitialized('codeStatutCategorielAgircArrco') && null !== $data->getCodeStatutCategorielAgircArrco()) {
            $dataArray['codeStatutCategorielAgircArrco'] = $data->getCodeStatutCategorielAgircArrco();
        }

        if ($data->isInitialized('bCodeStatutCategorielAgircArrco') && null !== $data->getBCodeStatutCategorielAgircArrco()) {
            $dataArray['bCodeStatutCategorielAgircArrco'] = $data->getBCodeStatutCategorielAgircArrco();
        }

        if ($data->isInitialized('coefficient1') && null !== $data->getCoefficient1()) {
            $dataArray['coefficient1'] = $data->getCoefficient1();
        }

        if ($data->isInitialized('bCoefficient1') && null !== $data->getBCoefficient1()) {
            $dataArray['bCoefficient1'] = $data->getBCoefficient1();
        }

        if ($data->isInitialized('coefficient2') && null !== $data->getCoefficient2()) {
            $dataArray['coefficient2'] = $data->getCoefficient2();
        }

        if ($data->isInitialized('bCoefficient2') && null !== $data->getBCoefficient2()) {
            $dataArray['bCoefficient2'] = $data->getBCoefficient2();
        }

        if ($data->isInitialized('coefficient3') && null !== $data->getCoefficient3()) {
            $dataArray['coefficient3'] = $data->getCoefficient3();
        }

        if ($data->isInitialized('bCoefficient3') && null !== $data->getBCoefficient3()) {
            $dataArray['bCoefficient3'] = $data->getBCoefficient3();
        }

        if ($data->isInitialized('coefficient4') && null !== $data->getCoefficient4()) {
            $dataArray['coefficient4'] = $data->getCoefficient4();
        }

        if ($data->isInitialized('bCoefficient4') && null !== $data->getBCoefficient4()) {
            $dataArray['bCoefficient4'] = $data->getBCoefficient4();
        }

        if ($data->isInitialized('codeCSP') && null !== $data->getCodeCSP()) {
            $dataArray['codeCSP'] = $data->getCodeCSP();
        }

        if ($data->isInitialized('bCodeCSP') && null !== $data->getBCodeCSP()) {
            $dataArray['bCodeCSP'] = $data->getBCodeCSP();
        }

        if ($data->isInitialized('codeCPNDUC') && null !== $data->getCodeCPNDUC()) {
            $dataArray['codeCPNDUC'] = $data->getCodeCPNDUC();
        }

        if ($data->isInitialized('bCodeCPNDUC') && null !== $data->getBCodeCPNDUC()) {
            $dataArray['bCodeCPNDUC'] = $data->getBCodeCPNDUC();
        }

        if ($data->isInitialized('spectacleCodeEmploi') && null !== $data->getSpectacleCodeEmploi()) {
            $dataArray['spectacleCodeEmploi'] = $data->getSpectacleCodeEmploi();
        }

        if ($data->isInitialized('bSpectacleCodeEmploi') && null !== $data->getBSpectacleCodeEmploi()) {
            $dataArray['bSpectacleCodeEmploi'] = $data->getBSpectacleCodeEmploi();
        }

        if ($data->isInitialized('spectacleNumeroConges') && null !== $data->getSpectacleNumeroConges()) {
            $dataArray['spectacleNumeroConges'] = $data->getSpectacleNumeroConges();
        }

        if ($data->isInitialized('bSpectacleNumeroConges') && null !== $data->getBSpectacleNumeroConges()) {
            $dataArray['bSpectacleNumeroConges'] = $data->getBSpectacleNumeroConges();
        }

        if ($data->isInitialized('pctAbattement') && null !== $data->getPctAbattement()) {
            $dataArray['pctAbattement'] = $data->getPctAbattement();
        }

        if ($data->isInitialized('bPctAbattement') && null !== $data->getBPctAbattement()) {
            $dataArray['bPctAbattement'] = $data->getBPctAbattement();
        }

        if ($data->isInitialized('salaireDeBaseEstHoraire') && null !== $data->getSalaireDeBaseEstHoraire()) {
            $dataArray['salaireDeBaseEstHoraire'] = $data->getSalaireDeBaseEstHoraire();
        }

        if ($data->isInitialized('bSalaireDeBaseEstHoraire') && null !== $data->getBSalaireDeBaseEstHoraire()) {
            $dataArray['bSalaireDeBaseEstHoraire'] = $data->getBSalaireDeBaseEstHoraire();
        }

        if ($data->isInitialized('salaireDeBase') && null !== $data->getSalaireDeBase()) {
            $dataArray['salaireDeBase'] = $data->getSalaireDeBase();
        }

        if ($data->isInitialized('bSalaireDeBase') && null !== $data->getBSalaireDeBase()) {
            $dataArray['bSalaireDeBase'] = $data->getBSalaireDeBase();
        }

        if ($data->isInitialized('salaireNetGaranti') && null !== $data->getSalaireNetGaranti()) {
            $dataArray['salaireNetGaranti'] = $data->getSalaireNetGaranti();
        }

        if ($data->isInitialized('bSalaireNetGaranti') && null !== $data->getBSalaireNetGaranti()) {
            $dataArray['bSalaireNetGaranti'] = $data->getBSalaireNetGaranti();
        }

        if ($data->isInitialized('nbHeuresTravaillees') && null !== $data->getNbHeuresTravaillees()) {
            $values = [];
            foreach ($data->getNbHeuresTravaillees() as $value) {
                $values[] = $value;
            }

            $dataArray['nbHeuresTravaillees'] = $values;
        }

        if ($data->isInitialized('nbHeuresDeNuitTravaillees') && null !== $data->getNbHeuresDeNuitTravaillees()) {
            $values_1 = [];
            foreach ($data->getNbHeuresDeNuitTravaillees() as $value_1) {
                $values_1[] = $value_1;
            }

            $dataArray['nbHeuresDeNuitTravaillees'] = $values_1;
        }

        if ($data->isInitialized('bNbHeuresTravaillees') && null !== $data->getBNbHeuresTravaillees()) {
            $dataArray['bNbHeuresTravaillees'] = $data->getBNbHeuresTravaillees();
        }

        if ($data->isInitialized('nbHeuresMensuellesNormales') && null !== $data->getNbHeuresMensuellesNormales()) {
            $dataArray['nbHeuresMensuellesNormales'] = $data->getNbHeuresMensuellesNormales();
        }

        if ($data->isInitialized('bNbHeuresMensuellesNormales') && null !== $data->getBNbHeuresMensuellesNormales()) {
            $dataArray['bNbHeuresMensuellesNormales'] = $data->getBNbHeuresMensuellesNormales();
        }

        if ($data->isInitialized('nbHeuresMensuellesMajorees') && null !== $data->getNbHeuresMensuellesMajorees()) {
            $dataArray['nbHeuresMensuellesMajorees'] = $data->getNbHeuresMensuellesMajorees();
        }

        if ($data->isInitialized('bNbHeuresMensuellesMajorees') && null !== $data->getBNbHeuresMensuellesMajorees()) {
            $dataArray['bNbHeuresMensuellesMajorees'] = $data->getBNbHeuresMensuellesMajorees();
        }

        if ($data->isInitialized('pctHeuresMensuellesMajorees') && null !== $data->getPctHeuresMensuellesMajorees()) {
            $dataArray['pctHeuresMensuellesMajorees'] = $data->getPctHeuresMensuellesMajorees();
        }

        if ($data->isInitialized('bPctHeuresMensuellesMajorees') && null !== $data->getBPctHeuresMensuellesMajorees()) {
            $dataArray['bPctHeuresMensuellesMajorees'] = $data->getBPctHeuresMensuellesMajorees();
        }

        if ($data->isInitialized('nbHeuresMensuellesLibres') && null !== $data->getNbHeuresMensuellesLibres()) {
            $values_2 = [];
            foreach ($data->getNbHeuresMensuellesLibres() as $value_2) {
                $values_2[] = $value_2;
            }

            $dataArray['nbHeuresMensuellesLibres'] = $values_2;
        }

        if ($data->isInitialized('codesHeuresMensuellesLibres') && null !== $data->getCodesHeuresMensuellesLibres()) {
            $values_3 = [];
            foreach ($data->getCodesHeuresMensuellesLibres() as $value_3) {
                $values_3[] = $value_3;
            }

            $dataArray['codesHeuresMensuellesLibres'] = $values_3;
        }

        if ($data->isInitialized('bHeuresMensuellesLibres') && null !== $data->getBHeuresMensuellesLibres()) {
            $dataArray['bHeuresMensuellesLibres'] = $data->getBHeuresMensuellesLibres();
        }

        if ($data->isInitialized('confirmationObligatoireDesHeures') && null !== $data->getConfirmationObligatoireDesHeures()) {
            $dataArray['confirmationObligatoireDesHeures'] = $data->getConfirmationObligatoireDesHeures();
        }

        if ($data->isInitialized('bConfirmationObligatoireDesHeures') && null !== $data->getBConfirmationObligatoireDesHeures()) {
            $dataArray['bConfirmationObligatoireDesHeures'] = $data->getBConfirmationObligatoireDesHeures();
        }

        if ($data->isInitialized('activerCalculKilometrique') && null !== $data->getActiverCalculKilometrique()) {
            $dataArray['activerCalculKilometrique'] = $data->getActiverCalculKilometrique();
        }

        if ($data->isInitialized('bActiverCalculKilometrique') && null !== $data->getBActiverCalculKilometrique()) {
            $dataArray['bActiverCalculKilometrique'] = $data->getBActiverCalculKilometrique();
        }

        if ($data->isInitialized('typeDeVehicule') && null !== $data->getTypeDeVehicule()) {
            $dataArray['typeDeVehicule'] = $data->getTypeDeVehicule();
        }

        if ($data->isInitialized('bTypeDeVehicule') && null !== $data->getBTypeDeVehicule()) {
            $dataArray['bTypeDeVehicule'] = $data->getBTypeDeVehicule();
        }

        if ($data->isInitialized('trancheKilometrique') && null !== $data->getTrancheKilometrique()) {
            $dataArray['trancheKilometrique'] = $data->getTrancheKilometrique();
        }

        if ($data->isInitialized('bTrancheKilometrique') && null !== $data->getBTrancheKilometrique()) {
            $dataArray['bTrancheKilometrique'] = $data->getBTrancheKilometrique();
        }

        if ($data->isInitialized('prixDuKilometre') && null !== $data->getPrixDuKilometre()) {
            $dataArray['prixDuKilometre'] = $data->getPrixDuKilometre();
        }

        if ($data->isInitialized('bPrixDuKilometre') && null !== $data->getBPrixDuKilometre()) {
            $dataArray['bPrixDuKilometre'] = $data->getBPrixDuKilometre();
        }

        if ($data->isInitialized('activerActiviteJournaliere') && null !== $data->getActiverActiviteJournaliere()) {
            $dataArray['activerActiviteJournaliere'] = $data->getActiverActiviteJournaliere();
        }

        if ($data->isInitialized('bActiverActiviteJournaliere') && null !== $data->getBActiverActiviteJournaliere()) {
            $dataArray['bActiverActiviteJournaliere'] = $data->getBActiverActiviteJournaliere();
        }

        if ($data->isInitialized('decoupageActiviteJournaliere') && null !== $data->getDecoupageActiviteJournaliere()) {
            $dataArray['decoupageActiviteJournaliere'] = $data->getDecoupageActiviteJournaliere();
        }

        if ($data->isInitialized('bDecoupageActiviteJournaliere') && null !== $data->getBDecoupageActiviteJournaliere()) {
            $dataArray['bDecoupageActiviteJournaliere'] = $data->getBDecoupageActiviteJournaliere();
        }

        if ($data->isInitialized('modeSaisieActiviteJournaliere') && null !== $data->getModeSaisieActiviteJournaliere()) {
            $dataArray['modeSaisieActiviteJournaliere'] = $data->getModeSaisieActiviteJournaliere();
        }

        if ($data->isInitialized('bModeSaisieActiviteJournaliere') && null !== $data->getBModeSaisieActiviteJournaliere()) {
            $dataArray['bModeSaisieActiviteJournaliere'] = $data->getBModeSaisieActiviteJournaliere();
        }

        if ($data->isInitialized('exonerationCode') && null !== $data->getExonerationCode()) {
            $dataArray['exonerationCode'] = $data->getExonerationCode();
        }

        if ($data->isInitialized('bExonerationCode') && null !== $data->getBExonerationCode()) {
            $dataArray['bExonerationCode'] = $data->getBExonerationCode();
        }

        if ($data->isInitialized('exonerationDebut') && null !== $data->getExonerationDebut()) {
            $dataArray['exonerationDebut'] = $data->getExonerationDebut()->format('Y-m-d');
        }

        if ($data->isInitialized('bExonerationDebut') && null !== $data->getBExonerationDebut()) {
            $dataArray['bExonerationDebut'] = $data->getBExonerationDebut();
        }

        if ($data->isInitialized('exonerationFin') && null !== $data->getExonerationFin()) {
            $dataArray['exonerationFin'] = $data->getExonerationFin()->format('Y-m-d');
        }

        if ($data->isInitialized('bExonerationFin') && null !== $data->getBExonerationFin()) {
            $dataArray['bExonerationFin'] = $data->getBExonerationFin();
        }

        if ($data->isInitialized('exonerationTaux') && null !== $data->getExonerationTaux()) {
            $dataArray['exonerationTaux'] = $data->getExonerationTaux();
        }

        if ($data->isInitialized('bExonerationTaux') && null !== $data->getBExonerationTaux()) {
            $dataArray['bExonerationTaux'] = $data->getBExonerationTaux();
        }

        if ($data->isInitialized('titreTransportCode') && null !== $data->getTitreTransportCode()) {
            $dataArray['titreTransportCode'] = $data->getTitreTransportCode();
        }

        if ($data->isInitialized('bTitreTransportCode') && null !== $data->getBTitreTransportCode()) {
            $dataArray['bTitreTransportCode'] = $data->getBTitreTransportCode();
        }

        if ($data->isInitialized('titreTransportRemboursement') && null !== $data->getTitreTransportRemboursement()) {
            $dataArray['titreTransportRemboursement'] = $data->getTitreTransportRemboursement();
        }

        if ($data->isInitialized('bTitreTransportRemboursement') && null !== $data->getBTitreTransportRemboursement()) {
            $dataArray['bTitreTransportRemboursement'] = $data->getBTitreTransportRemboursement();
        }

        if ($data->isInitialized('autreTitreTransportMontant') && null !== $data->getAutreTitreTransportMontant()) {
            $dataArray['autreTitreTransportMontant'] = $data->getAutreTitreTransportMontant();
        }

        if ($data->isInitialized('bAutreTitreTransportMontant') && null !== $data->getBAutreTitreTransportMontant()) {
            $dataArray['bAutreTitreTransportMontant'] = $data->getBAutreTitreTransportMontant();
        }

        if ($data->isInitialized('autreTitreTransportRemboursement') && null !== $data->getAutreTitreTransportRemboursement()) {
            $dataArray['autreTitreTransportRemboursement'] = $data->getAutreTitreTransportRemboursement();
        }

        if ($data->isInitialized('bAutreTitreTransportRemboursement') && null !== $data->getBAutreTitreTransportRemboursement()) {
            $dataArray['bAutreTitreTransportRemboursement'] = $data->getBAutreTitreTransportRemboursement();
        }

        if ($data->isInitialized('ticketRestaurant') && null !== $data->getTicketRestaurant()) {
            $dataArray['ticketRestaurant'] = $data->getTicketRestaurant();
        }

        if ($data->isInitialized('bTicketRestaurant') && null !== $data->getBTicketRestaurant()) {
            $dataArray['bTicketRestaurant'] = $data->getBTicketRestaurant();
        }

        if ($data->isInitialized('codeTerritoire') && null !== $data->getCodeTerritoire()) {
            $dataArray['codeTerritoire'] = $data->getCodeTerritoire();
        }

        if ($data->isInitialized('bCodeTerritoire') && null !== $data->getBCodeTerritoire()) {
            $dataArray['bCodeTerritoire'] = $data->getBCodeTerritoire();
        }

        if ($data->isInitialized('codeSecteurDFS') && null !== $data->getCodeSecteurDFS()) {
            $dataArray['codeSecteurDFS'] = $data->getCodeSecteurDFS();
        }

        if ($data->isInitialized('bCodeSecteurDFS') && null !== $data->getBCodeSecteurDFS()) {
            $dataArray['bCodeSecteurDFS'] = $data->getBCodeSecteurDFS();
        }

        if ($data->isInitialized('pctAbattementLissage') && null !== $data->getPctAbattementLissage()) {
            $dataArray['pctAbattementLissage'] = $data->getPctAbattementLissage();
        }

        if ($data->isInitialized('bPctAbattementLissage') && null !== $data->getBPctAbattementLissage()) {
            $dataArray['bPctAbattementLissage'] = $data->getBPctAbattementLissage();
        }

        if ($data->isInitialized('codeStatutRegimeProtectionSociale') && null !== $data->getCodeStatutRegimeProtectionSociale()) {
            $dataArray['codeStatutRegimeProtectionSociale'] = $data->getCodeStatutRegimeProtectionSociale();
        }

        if ($data->isInitialized('bCodeStatutRegimeProtectionSociale') && null !== $data->getBCodeStatutRegimeProtectionSociale()) {
            $dataArray['bCodeStatutRegimeProtectionSociale'] = $data->getBCodeStatutRegimeProtectionSociale();
        }

        if ($data->isInitialized('emploiNonPrincipal') && null !== $data->getEmploiNonPrincipal()) {
            $dataArray['emploiNonPrincipal'] = $data->getEmploiNonPrincipal();
        }

        if ($data->isInitialized('bEmploiNonPrincipal') && null !== $data->getBEmploiNonPrincipal()) {
            $dataArray['bEmploiNonPrincipal'] = $data->getBEmploiNonPrincipal();
        }

        if ($data->isInitialized('contratPartDtSignature') && null !== $data->getContratPartDtSignature()) {
            $dataArray['contratPartDtSignature'] = $data->getContratPartDtSignature()->format('Y-m-d');
        }

        if ($data->isInitialized('bContratPartDtSignature') && null !== $data->getBContratPartDtSignature()) {
            $dataArray['bContratPartDtSignature'] = $data->getBContratPartDtSignature();
        }

        if ($data->isInitialized('fjNbJAn') && null !== $data->getFjNbJAn()) {
            $dataArray['fjNbJAn'] = $data->getFjNbJAn();
        }

        if ($data->isInitialized('bFJNbJAn') && null !== $data->getBFJNbJAn()) {
            $dataArray['bFJNbJAn'] = $data->getBFJNbJAn();
        }

        if ($data->isInitialized('nonSoumisHEta') && null !== $data->getNonSoumisHEta()) {
            $dataArray['nonSoumisHEta'] = $data->getNonSoumisHEta();
        }

        if ($data->isInitialized('bNonSoumisHEta') && null !== $data->getBNonSoumisHEta()) {
            $dataArray['bNonSoumisHEta'] = $data->getBNonSoumisHEta();
        }

        if ($data->isInitialized('motifRuptureContrat') && null !== $data->getMotifRuptureContrat()) {
            $dataArray['motifRuptureContrat'] = $data->getMotifRuptureContrat();
        }

        if ($data->isInitialized('bMotifRuptureContrat') && null !== $data->getBMotifRuptureContrat()) {
            $dataArray['bMotifRuptureContrat'] = $data->getBMotifRuptureContrat();
        }

        if ($data->isInitialized('docsFinContratInactifs') && null !== $data->getDocsFinContratInactifs()) {
            $dataArray['docsFinContratInactifs'] = $data->getDocsFinContratInactifs();
        }

        if ($data->isInitialized('bDocsFinContratInactifs') && null !== $data->getBDocsFinContratInactifs()) {
            $dataArray['bDocsFinContratInactifs'] = $data->getBDocsFinContratInactifs();
        }

        if ($data->isInitialized('rttTypeAcq') && null !== $data->getRttTypeAcq()) {
            $dataArray['rttTypeAcq'] = $data->getRttTypeAcq();
        }

        if ($data->isInitialized('bRTTTypeAcq') && null !== $data->getBRTTTypeAcq()) {
            $dataArray['bRTTTypeAcq'] = $data->getBRTTTypeAcq();
        }

        if ($data->isInitialized('avnLMontantSal') && null !== $data->getAvnLMontantSal()) {
            $dataArray['avnLMontantSal'] = $data->getAvnLMontantSal();
        }

        if ($data->isInitialized('bAvnLMontantSal') && null !== $data->getBAvnLMontantSal()) {
            $dataArray['bAvnLMontantSal'] = $data->getBAvnLMontantSal();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [Emploi::class => false];
    }
}
