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

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\Emploi' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof Emploi;
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
            $object->setDateDebut(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['dateDebut']));
        } elseif (\array_key_exists('dateDebut', $data) && null === $data['dateDebut']) {
            $object->setDateDebut(null);
        }
        if (\array_key_exists('dateFin', $data) && null !== $data['dateFin']) {
            $object->setDateFin(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['dateFin']));
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
            $object->setExonerationDebut(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['exonerationDebut']));
        } elseif (\array_key_exists('exonerationDebut', $data) && null === $data['exonerationDebut']) {
            $object->setExonerationDebut(null);
        }
        if (\array_key_exists('bExonerationDebut', $data) && null !== $data['bExonerationDebut']) {
            $object->setBExonerationDebut($data['bExonerationDebut']);
        } elseif (\array_key_exists('bExonerationDebut', $data) && null === $data['bExonerationDebut']) {
            $object->setBExonerationDebut(null);
        }
        if (\array_key_exists('exonerationFin', $data) && null !== $data['exonerationFin']) {
            $object->setExonerationFin(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['exonerationFin']));
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
        if ($object->isInitialized('identifiantEmploi') && null !== $object->getIdentifiantEmploi()) {
            $data['identifiantEmploi'] = $object->getIdentifiantEmploi();
        }
        if ($object->isInitialized('identifiantEmploiModele') && null !== $object->getIdentifiantEmploiModele()) {
            $data['identifiantEmploiModele'] = $object->getIdentifiantEmploiModele();
        }
        if ($object->isInitialized('envoiDUEEdi') && null !== $object->getEnvoiDUEEdi()) {
            $data['envoiDUEEdi'] = $object->getEnvoiDUEEdi();
        }
        if ($object->isInitialized('envoiDUEEdiSansCreerEmploi') && null !== $object->getEnvoiDUEEdiSansCreerEmploi()) {
            $data['envoiDUEEdiSansCreerEmploi'] = $object->getEnvoiDUEEdiSansCreerEmploi();
        }
        if ($object->isInitialized('nomInterneEtablissement') && null !== $object->getNomInterneEtablissement()) {
            $data['nomInterneEtablissement'] = $object->getNomInterneEtablissement();
        }
        if ($object->isInitialized('dateDebut') && null !== $object->getDateDebut()) {
            $data['dateDebut'] = $object->getDateDebut()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('dateFin') && null !== $object->getDateFin()) {
            $data['dateFin'] = $object->getDateFin()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('codeConventionCollective') && null !== $object->getCodeConventionCollective()) {
            $data['codeConventionCollective'] = $object->getCodeConventionCollective();
        }
        if ($object->isInitialized('bCodeConventionCollective') && null !== $object->getBCodeConventionCollective()) {
            $data['bCodeConventionCollective'] = $object->getBCodeConventionCollective();
        }
        if ($object->isInitialized('codeClassificationMetier') && null !== $object->getCodeClassificationMetier()) {
            $data['codeClassificationMetier'] = $object->getCodeClassificationMetier();
        }
        if ($object->isInitialized('bCodeClassificationMetier') && null !== $object->getBCodeClassificationMetier()) {
            $data['bCodeClassificationMetier'] = $object->getBCodeClassificationMetier();
        }
        if ($object->isInitialized('intituleEmploi') && null !== $object->getIntituleEmploi()) {
            $data['intituleEmploi'] = $object->getIntituleEmploi();
        }
        if ($object->isInitialized('bIntituleEmploi') && null !== $object->getBIntituleEmploi()) {
            $data['bIntituleEmploi'] = $object->getBIntituleEmploi();
        }
        if ($object->isInitialized('codeContratTravail') && null !== $object->getCodeContratTravail()) {
            $data['codeContratTravail'] = $object->getCodeContratTravail();
        }
        if ($object->isInitialized('bCodeContratTravail') && null !== $object->getBCodeContratTravail()) {
            $data['bCodeContratTravail'] = $object->getBCodeContratTravail();
        }
        if ($object->isInitialized('motifCDD') && null !== $object->getMotifCDD()) {
            $data['motifCDD'] = $object->getMotifCDD();
        }
        if ($object->isInitialized('bMotifCDD') && null !== $object->getBMotifCDD()) {
            $data['bMotifCDD'] = $object->getBMotifCDD();
        }
        if ($object->isInitialized('dureeInitialeCDD') && null !== $object->getDureeInitialeCDD()) {
            $data['dureeInitialeCDD'] = $object->getDureeInitialeCDD();
        }
        if ($object->isInitialized('bDureeInitialeCDD') && null !== $object->getBDureeInitialeCDD()) {
            $data['bDureeInitialeCDD'] = $object->getBDureeInitialeCDD();
        }
        if ($object->isInitialized('motifDebutEmploi') && null !== $object->getMotifDebutEmploi()) {
            $data['motifDebutEmploi'] = $object->getMotifDebutEmploi();
        }
        if ($object->isInitialized('bMotifDebutEmploi') && null !== $object->getBMotifDebutEmploi()) {
            $data['bMotifDebutEmploi'] = $object->getBMotifDebutEmploi();
        }
        if ($object->isInitialized('motifFinEmploi') && null !== $object->getMotifFinEmploi()) {
            $data['motifFinEmploi'] = $object->getMotifFinEmploi();
        }
        if ($object->isInitialized('bMotifFinEmploi') && null !== $object->getBMotifFinEmploi()) {
            $data['bMotifFinEmploi'] = $object->getBMotifFinEmploi();
        }
        if ($object->isInitialized('codeCaracteristiqueActivite') && null !== $object->getCodeCaracteristiqueActivite()) {
            $data['codeCaracteristiqueActivite'] = $object->getCodeCaracteristiqueActivite();
        }
        if ($object->isInitialized('bCodeCaracteristiqueActivite') && null !== $object->getBCodeCaracteristiqueActivite()) {
            $data['bCodeCaracteristiqueActivite'] = $object->getBCodeCaracteristiqueActivite();
        }
        if ($object->isInitialized('codeStatutProfessionnel') && null !== $object->getCodeStatutProfessionnel()) {
            $data['codeStatutProfessionnel'] = $object->getCodeStatutProfessionnel();
        }
        if ($object->isInitialized('bCodeStatutProfessionnel') && null !== $object->getBCodeStatutProfessionnel()) {
            $data['bCodeStatutProfessionnel'] = $object->getBCodeStatutProfessionnel();
        }
        if ($object->isInitialized('codeStatutCategoriel') && null !== $object->getCodeStatutCategoriel()) {
            $data['codeStatutCategoriel'] = $object->getCodeStatutCategoriel();
        }
        if ($object->isInitialized('bCodeStatutCategoriel') && null !== $object->getBCodeStatutCategoriel()) {
            $data['bCodeStatutCategoriel'] = $object->getBCodeStatutCategoriel();
        }
        if ($object->isInitialized('codeStatutCategorielAgircArrco') && null !== $object->getCodeStatutCategorielAgircArrco()) {
            $data['codeStatutCategorielAgircArrco'] = $object->getCodeStatutCategorielAgircArrco();
        }
        if ($object->isInitialized('bCodeStatutCategorielAgircArrco') && null !== $object->getBCodeStatutCategorielAgircArrco()) {
            $data['bCodeStatutCategorielAgircArrco'] = $object->getBCodeStatutCategorielAgircArrco();
        }
        if ($object->isInitialized('coefficient1') && null !== $object->getCoefficient1()) {
            $data['coefficient1'] = $object->getCoefficient1();
        }
        if ($object->isInitialized('bCoefficient1') && null !== $object->getBCoefficient1()) {
            $data['bCoefficient1'] = $object->getBCoefficient1();
        }
        if ($object->isInitialized('coefficient2') && null !== $object->getCoefficient2()) {
            $data['coefficient2'] = $object->getCoefficient2();
        }
        if ($object->isInitialized('bCoefficient2') && null !== $object->getBCoefficient2()) {
            $data['bCoefficient2'] = $object->getBCoefficient2();
        }
        if ($object->isInitialized('coefficient3') && null !== $object->getCoefficient3()) {
            $data['coefficient3'] = $object->getCoefficient3();
        }
        if ($object->isInitialized('bCoefficient3') && null !== $object->getBCoefficient3()) {
            $data['bCoefficient3'] = $object->getBCoefficient3();
        }
        if ($object->isInitialized('coefficient4') && null !== $object->getCoefficient4()) {
            $data['coefficient4'] = $object->getCoefficient4();
        }
        if ($object->isInitialized('bCoefficient4') && null !== $object->getBCoefficient4()) {
            $data['bCoefficient4'] = $object->getBCoefficient4();
        }
        if ($object->isInitialized('codeCSP') && null !== $object->getCodeCSP()) {
            $data['codeCSP'] = $object->getCodeCSP();
        }
        if ($object->isInitialized('bCodeCSP') && null !== $object->getBCodeCSP()) {
            $data['bCodeCSP'] = $object->getBCodeCSP();
        }
        if ($object->isInitialized('codeCPNDUC') && null !== $object->getCodeCPNDUC()) {
            $data['codeCPNDUC'] = $object->getCodeCPNDUC();
        }
        if ($object->isInitialized('bCodeCPNDUC') && null !== $object->getBCodeCPNDUC()) {
            $data['bCodeCPNDUC'] = $object->getBCodeCPNDUC();
        }
        if ($object->isInitialized('spectacleCodeEmploi') && null !== $object->getSpectacleCodeEmploi()) {
            $data['spectacleCodeEmploi'] = $object->getSpectacleCodeEmploi();
        }
        if ($object->isInitialized('bSpectacleCodeEmploi') && null !== $object->getBSpectacleCodeEmploi()) {
            $data['bSpectacleCodeEmploi'] = $object->getBSpectacleCodeEmploi();
        }
        if ($object->isInitialized('spectacleNumeroConges') && null !== $object->getSpectacleNumeroConges()) {
            $data['spectacleNumeroConges'] = $object->getSpectacleNumeroConges();
        }
        if ($object->isInitialized('bSpectacleNumeroConges') && null !== $object->getBSpectacleNumeroConges()) {
            $data['bSpectacleNumeroConges'] = $object->getBSpectacleNumeroConges();
        }
        if ($object->isInitialized('pctAbattement') && null !== $object->getPctAbattement()) {
            $data['pctAbattement'] = $object->getPctAbattement();
        }
        if ($object->isInitialized('bPctAbattement') && null !== $object->getBPctAbattement()) {
            $data['bPctAbattement'] = $object->getBPctAbattement();
        }
        if ($object->isInitialized('salaireDeBaseEstHoraire') && null !== $object->getSalaireDeBaseEstHoraire()) {
            $data['salaireDeBaseEstHoraire'] = $object->getSalaireDeBaseEstHoraire();
        }
        if ($object->isInitialized('bSalaireDeBaseEstHoraire') && null !== $object->getBSalaireDeBaseEstHoraire()) {
            $data['bSalaireDeBaseEstHoraire'] = $object->getBSalaireDeBaseEstHoraire();
        }
        if ($object->isInitialized('salaireDeBase') && null !== $object->getSalaireDeBase()) {
            $data['salaireDeBase'] = $object->getSalaireDeBase();
        }
        if ($object->isInitialized('bSalaireDeBase') && null !== $object->getBSalaireDeBase()) {
            $data['bSalaireDeBase'] = $object->getBSalaireDeBase();
        }
        if ($object->isInitialized('salaireNetGaranti') && null !== $object->getSalaireNetGaranti()) {
            $data['salaireNetGaranti'] = $object->getSalaireNetGaranti();
        }
        if ($object->isInitialized('bSalaireNetGaranti') && null !== $object->getBSalaireNetGaranti()) {
            $data['bSalaireNetGaranti'] = $object->getBSalaireNetGaranti();
        }
        if ($object->isInitialized('nbHeuresTravaillees') && null !== $object->getNbHeuresTravaillees()) {
            $values = [];
            foreach ($object->getNbHeuresTravaillees() as $value) {
                $values[] = $value;
            }
            $data['nbHeuresTravaillees'] = $values;
        }
        if ($object->isInitialized('nbHeuresDeNuitTravaillees') && null !== $object->getNbHeuresDeNuitTravaillees()) {
            $values_1 = [];
            foreach ($object->getNbHeuresDeNuitTravaillees() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['nbHeuresDeNuitTravaillees'] = $values_1;
        }
        if ($object->isInitialized('bNbHeuresTravaillees') && null !== $object->getBNbHeuresTravaillees()) {
            $data['bNbHeuresTravaillees'] = $object->getBNbHeuresTravaillees();
        }
        if ($object->isInitialized('nbHeuresMensuellesNormales') && null !== $object->getNbHeuresMensuellesNormales()) {
            $data['nbHeuresMensuellesNormales'] = $object->getNbHeuresMensuellesNormales();
        }
        if ($object->isInitialized('bNbHeuresMensuellesNormales') && null !== $object->getBNbHeuresMensuellesNormales()) {
            $data['bNbHeuresMensuellesNormales'] = $object->getBNbHeuresMensuellesNormales();
        }
        if ($object->isInitialized('nbHeuresMensuellesMajorees') && null !== $object->getNbHeuresMensuellesMajorees()) {
            $data['nbHeuresMensuellesMajorees'] = $object->getNbHeuresMensuellesMajorees();
        }
        if ($object->isInitialized('bNbHeuresMensuellesMajorees') && null !== $object->getBNbHeuresMensuellesMajorees()) {
            $data['bNbHeuresMensuellesMajorees'] = $object->getBNbHeuresMensuellesMajorees();
        }
        if ($object->isInitialized('pctHeuresMensuellesMajorees') && null !== $object->getPctHeuresMensuellesMajorees()) {
            $data['pctHeuresMensuellesMajorees'] = $object->getPctHeuresMensuellesMajorees();
        }
        if ($object->isInitialized('bPctHeuresMensuellesMajorees') && null !== $object->getBPctHeuresMensuellesMajorees()) {
            $data['bPctHeuresMensuellesMajorees'] = $object->getBPctHeuresMensuellesMajorees();
        }
        if ($object->isInitialized('nbHeuresMensuellesLibres') && null !== $object->getNbHeuresMensuellesLibres()) {
            $values_2 = [];
            foreach ($object->getNbHeuresMensuellesLibres() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['nbHeuresMensuellesLibres'] = $values_2;
        }
        if ($object->isInitialized('codesHeuresMensuellesLibres') && null !== $object->getCodesHeuresMensuellesLibres()) {
            $values_3 = [];
            foreach ($object->getCodesHeuresMensuellesLibres() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['codesHeuresMensuellesLibres'] = $values_3;
        }
        if ($object->isInitialized('bHeuresMensuellesLibres') && null !== $object->getBHeuresMensuellesLibres()) {
            $data['bHeuresMensuellesLibres'] = $object->getBHeuresMensuellesLibres();
        }
        if ($object->isInitialized('confirmationObligatoireDesHeures') && null !== $object->getConfirmationObligatoireDesHeures()) {
            $data['confirmationObligatoireDesHeures'] = $object->getConfirmationObligatoireDesHeures();
        }
        if ($object->isInitialized('bConfirmationObligatoireDesHeures') && null !== $object->getBConfirmationObligatoireDesHeures()) {
            $data['bConfirmationObligatoireDesHeures'] = $object->getBConfirmationObligatoireDesHeures();
        }
        if ($object->isInitialized('activerCalculKilometrique') && null !== $object->getActiverCalculKilometrique()) {
            $data['activerCalculKilometrique'] = $object->getActiverCalculKilometrique();
        }
        if ($object->isInitialized('bActiverCalculKilometrique') && null !== $object->getBActiverCalculKilometrique()) {
            $data['bActiverCalculKilometrique'] = $object->getBActiverCalculKilometrique();
        }
        if ($object->isInitialized('typeDeVehicule') && null !== $object->getTypeDeVehicule()) {
            $data['typeDeVehicule'] = $object->getTypeDeVehicule();
        }
        if ($object->isInitialized('bTypeDeVehicule') && null !== $object->getBTypeDeVehicule()) {
            $data['bTypeDeVehicule'] = $object->getBTypeDeVehicule();
        }
        if ($object->isInitialized('trancheKilometrique') && null !== $object->getTrancheKilometrique()) {
            $data['trancheKilometrique'] = $object->getTrancheKilometrique();
        }
        if ($object->isInitialized('bTrancheKilometrique') && null !== $object->getBTrancheKilometrique()) {
            $data['bTrancheKilometrique'] = $object->getBTrancheKilometrique();
        }
        if ($object->isInitialized('prixDuKilometre') && null !== $object->getPrixDuKilometre()) {
            $data['prixDuKilometre'] = $object->getPrixDuKilometre();
        }
        if ($object->isInitialized('bPrixDuKilometre') && null !== $object->getBPrixDuKilometre()) {
            $data['bPrixDuKilometre'] = $object->getBPrixDuKilometre();
        }
        if ($object->isInitialized('activerActiviteJournaliere') && null !== $object->getActiverActiviteJournaliere()) {
            $data['activerActiviteJournaliere'] = $object->getActiverActiviteJournaliere();
        }
        if ($object->isInitialized('bActiverActiviteJournaliere') && null !== $object->getBActiverActiviteJournaliere()) {
            $data['bActiverActiviteJournaliere'] = $object->getBActiverActiviteJournaliere();
        }
        if ($object->isInitialized('decoupageActiviteJournaliere') && null !== $object->getDecoupageActiviteJournaliere()) {
            $data['decoupageActiviteJournaliere'] = $object->getDecoupageActiviteJournaliere();
        }
        if ($object->isInitialized('bDecoupageActiviteJournaliere') && null !== $object->getBDecoupageActiviteJournaliere()) {
            $data['bDecoupageActiviteJournaliere'] = $object->getBDecoupageActiviteJournaliere();
        }
        if ($object->isInitialized('modeSaisieActiviteJournaliere') && null !== $object->getModeSaisieActiviteJournaliere()) {
            $data['modeSaisieActiviteJournaliere'] = $object->getModeSaisieActiviteJournaliere();
        }
        if ($object->isInitialized('bModeSaisieActiviteJournaliere') && null !== $object->getBModeSaisieActiviteJournaliere()) {
            $data['bModeSaisieActiviteJournaliere'] = $object->getBModeSaisieActiviteJournaliere();
        }
        if ($object->isInitialized('exonerationCode') && null !== $object->getExonerationCode()) {
            $data['exonerationCode'] = $object->getExonerationCode();
        }
        if ($object->isInitialized('bExonerationCode') && null !== $object->getBExonerationCode()) {
            $data['bExonerationCode'] = $object->getBExonerationCode();
        }
        if ($object->isInitialized('exonerationDebut') && null !== $object->getExonerationDebut()) {
            $data['exonerationDebut'] = $object->getExonerationDebut()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('bExonerationDebut') && null !== $object->getBExonerationDebut()) {
            $data['bExonerationDebut'] = $object->getBExonerationDebut();
        }
        if ($object->isInitialized('exonerationFin') && null !== $object->getExonerationFin()) {
            $data['exonerationFin'] = $object->getExonerationFin()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('bExonerationFin') && null !== $object->getBExonerationFin()) {
            $data['bExonerationFin'] = $object->getBExonerationFin();
        }
        if ($object->isInitialized('exonerationTaux') && null !== $object->getExonerationTaux()) {
            $data['exonerationTaux'] = $object->getExonerationTaux();
        }
        if ($object->isInitialized('bExonerationTaux') && null !== $object->getBExonerationTaux()) {
            $data['bExonerationTaux'] = $object->getBExonerationTaux();
        }
        if ($object->isInitialized('titreTransportCode') && null !== $object->getTitreTransportCode()) {
            $data['titreTransportCode'] = $object->getTitreTransportCode();
        }
        if ($object->isInitialized('bTitreTransportCode') && null !== $object->getBTitreTransportCode()) {
            $data['bTitreTransportCode'] = $object->getBTitreTransportCode();
        }
        if ($object->isInitialized('titreTransportRemboursement') && null !== $object->getTitreTransportRemboursement()) {
            $data['titreTransportRemboursement'] = $object->getTitreTransportRemboursement();
        }
        if ($object->isInitialized('bTitreTransportRemboursement') && null !== $object->getBTitreTransportRemboursement()) {
            $data['bTitreTransportRemboursement'] = $object->getBTitreTransportRemboursement();
        }
        if ($object->isInitialized('autreTitreTransportMontant') && null !== $object->getAutreTitreTransportMontant()) {
            $data['autreTitreTransportMontant'] = $object->getAutreTitreTransportMontant();
        }
        if ($object->isInitialized('bAutreTitreTransportMontant') && null !== $object->getBAutreTitreTransportMontant()) {
            $data['bAutreTitreTransportMontant'] = $object->getBAutreTitreTransportMontant();
        }
        if ($object->isInitialized('autreTitreTransportRemboursement') && null !== $object->getAutreTitreTransportRemboursement()) {
            $data['autreTitreTransportRemboursement'] = $object->getAutreTitreTransportRemboursement();
        }
        if ($object->isInitialized('bAutreTitreTransportRemboursement') && null !== $object->getBAutreTitreTransportRemboursement()) {
            $data['bAutreTitreTransportRemboursement'] = $object->getBAutreTitreTransportRemboursement();
        }
        if ($object->isInitialized('ticketRestaurant') && null !== $object->getTicketRestaurant()) {
            $data['ticketRestaurant'] = $object->getTicketRestaurant();
        }
        if ($object->isInitialized('bTicketRestaurant') && null !== $object->getBTicketRestaurant()) {
            $data['bTicketRestaurant'] = $object->getBTicketRestaurant();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\Emploi' => false];
    }
}
