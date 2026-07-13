<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\LectureInformationsSalarie;
use QdequippeTech\Silae\Api\Model\LectureInformationsSalarieEmploi;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class LectureInformationsSalarieNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return LectureInformationsSalarie::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && LectureInformationsSalarie::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new LectureInformationsSalarie();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        if (\array_key_exists('frontalier', $data) && \is_int($data['frontalier'])) {
            $data['frontalier'] = (bool) $data['frontalier'];
        }

        if (\array_key_exists('surveillanceMedRenforcee', $data) && \is_int($data['surveillanceMedRenforcee'])) {
            $data['surveillanceMedRenforcee'] = (bool) $data['surveillanceMedRenforcee'];
        }

        if (\array_key_exists('matriculeSalarie', $data) && null !== $data['matriculeSalarie']) {
            $object->setMatriculeSalarie($data['matriculeSalarie']);
        } elseif (\array_key_exists('matriculeSalarie', $data) && null === $data['matriculeSalarie']) {
            $object->setMatriculeSalarie(null);
        }

        if (\array_key_exists('matriculeInterne', $data) && null !== $data['matriculeInterne']) {
            $object->setMatriculeInterne($data['matriculeInterne']);
        } elseif (\array_key_exists('matriculeInterne', $data) && null === $data['matriculeInterne']) {
            $object->setMatriculeInterne(null);
        }

        if (\array_key_exists('civilite', $data) && null !== $data['civilite']) {
            $object->setCivilite($data['civilite']);
        } elseif (\array_key_exists('civilite', $data) && null === $data['civilite']) {
            $object->setCivilite(null);
        }

        if (\array_key_exists('sexe', $data) && null !== $data['sexe']) {
            $object->setSexe($data['sexe']);
        } elseif (\array_key_exists('sexe', $data) && null === $data['sexe']) {
            $object->setSexe(null);
        }

        if (\array_key_exists('nomNaissance', $data) && null !== $data['nomNaissance']) {
            $object->setNomNaissance($data['nomNaissance']);
        } elseif (\array_key_exists('nomNaissance', $data) && null === $data['nomNaissance']) {
            $object->setNomNaissance(null);
        }

        if (\array_key_exists('nomMarital', $data) && null !== $data['nomMarital']) {
            $object->setNomMarital($data['nomMarital']);
        } elseif (\array_key_exists('nomMarital', $data) && null === $data['nomMarital']) {
            $object->setNomMarital(null);
        }

        if (\array_key_exists('nomUsuel', $data) && null !== $data['nomUsuel']) {
            $object->setNomUsuel($data['nomUsuel']);
        } elseif (\array_key_exists('nomUsuel', $data) && null === $data['nomUsuel']) {
            $object->setNomUsuel(null);
        }

        if (\array_key_exists('prenom', $data) && null !== $data['prenom']) {
            $object->setPrenom($data['prenom']);
        } elseif (\array_key_exists('prenom', $data) && null === $data['prenom']) {
            $object->setPrenom(null);
        }

        if (\array_key_exists('numeroSecuriteSociale', $data) && null !== $data['numeroSecuriteSociale']) {
            $object->setNumeroSecuriteSociale($data['numeroSecuriteSociale']);
        } elseif (\array_key_exists('numeroSecuriteSociale', $data) && null === $data['numeroSecuriteSociale']) {
            $object->setNumeroSecuriteSociale(null);
        }

        if (\array_key_exists('situationFamiliale', $data) && null !== $data['situationFamiliale']) {
            $object->setSituationFamiliale($data['situationFamiliale']);
        } elseif (\array_key_exists('situationFamiliale', $data) && null === $data['situationFamiliale']) {
            $object->setSituationFamiliale(null);
        }

        if (\array_key_exists('dateNaissance', $data) && null !== $data['dateNaissance']) {
            $object->setDateNaissance(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateNaissance']));
        } elseif (\array_key_exists('dateNaissance', $data) && null === $data['dateNaissance']) {
            $object->setDateNaissance(null);
        }

        if (\array_key_exists('anneeNaissance', $data) && null !== $data['anneeNaissance']) {
            $object->setAnneeNaissance($data['anneeNaissance']);
        } elseif (\array_key_exists('anneeNaissance', $data) && null === $data['anneeNaissance']) {
            $object->setAnneeNaissance(null);
        }

        if (\array_key_exists('departementNaissance', $data) && null !== $data['departementNaissance']) {
            $object->setDepartementNaissance($data['departementNaissance']);
        } elseif (\array_key_exists('departementNaissance', $data) && null === $data['departementNaissance']) {
            $object->setDepartementNaissance(null);
        }

        if (\array_key_exists('communeNaissance', $data) && null !== $data['communeNaissance']) {
            $object->setCommuneNaissance($data['communeNaissance']);
        } elseif (\array_key_exists('communeNaissance', $data) && null === $data['communeNaissance']) {
            $object->setCommuneNaissance(null);
        }

        if (\array_key_exists('paysNaissanceISO', $data) && null !== $data['paysNaissanceISO']) {
            $object->setPaysNaissanceISO($data['paysNaissanceISO']);
        } elseif (\array_key_exists('paysNaissanceISO', $data) && null === $data['paysNaissanceISO']) {
            $object->setPaysNaissanceISO(null);
        }

        if (\array_key_exists('paysNaissance', $data) && null !== $data['paysNaissance']) {
            $object->setPaysNaissance($data['paysNaissance']);
        } elseif (\array_key_exists('paysNaissance', $data) && null === $data['paysNaissance']) {
            $object->setPaysNaissance(null);
        }

        if (\array_key_exists('paysNationaliteISO', $data) && null !== $data['paysNationaliteISO']) {
            $object->setPaysNationaliteISO($data['paysNationaliteISO']);
        } elseif (\array_key_exists('paysNationaliteISO', $data) && null === $data['paysNationaliteISO']) {
            $object->setPaysNationaliteISO(null);
        }

        if (\array_key_exists('paysNationalite', $data) && null !== $data['paysNationalite']) {
            $object->setPaysNationalite($data['paysNationalite']);
        } elseif (\array_key_exists('paysNationalite', $data) && null === $data['paysNationalite']) {
            $object->setPaysNationalite(null);
        }

        if (\array_key_exists('numVoie', $data) && null !== $data['numVoie']) {
            $object->setNumVoie($data['numVoie']);
        } elseif (\array_key_exists('numVoie', $data) && null === $data['numVoie']) {
            $object->setNumVoie(null);
        }

        if (\array_key_exists('btqc', $data) && null !== $data['btqc']) {
            $object->setBtqc($data['btqc']);
        } elseif (\array_key_exists('btqc', $data) && null === $data['btqc']) {
            $object->setBtqc(null);
        }

        if (\array_key_exists('nomVoie', $data) && null !== $data['nomVoie']) {
            $object->setNomVoie($data['nomVoie']);
        } elseif (\array_key_exists('nomVoie', $data) && null === $data['nomVoie']) {
            $object->setNomVoie(null);
        }

        if (\array_key_exists('complementAdresse', $data) && null !== $data['complementAdresse']) {
            $object->setComplementAdresse($data['complementAdresse']);
        } elseif (\array_key_exists('complementAdresse', $data) && null === $data['complementAdresse']) {
            $object->setComplementAdresse(null);
        }

        if (\array_key_exists('codePostal', $data) && null !== $data['codePostal']) {
            $object->setCodePostal($data['codePostal']);
        } elseif (\array_key_exists('codePostal', $data) && null === $data['codePostal']) {
            $object->setCodePostal(null);
        }

        if (\array_key_exists('nomVille', $data) && null !== $data['nomVille']) {
            $object->setNomVille($data['nomVille']);
        } elseif (\array_key_exists('nomVille', $data) && null === $data['nomVille']) {
            $object->setNomVille(null);
        }

        if (\array_key_exists('frontalier', $data) && null !== $data['frontalier']) {
            $object->setFrontalier($data['frontalier']);
        } elseif (\array_key_exists('frontalier', $data) && null === $data['frontalier']) {
            $object->setFrontalier(null);
        }

        if (\array_key_exists('communeINSEE', $data) && null !== $data['communeINSEE']) {
            $object->setCommuneINSEE($data['communeINSEE']);
        } elseif (\array_key_exists('communeINSEE', $data) && null === $data['communeINSEE']) {
            $object->setCommuneINSEE(null);
        }

        if (\array_key_exists('commune', $data) && null !== $data['commune']) {
            $object->setCommune($data['commune']);
        } elseif (\array_key_exists('commune', $data) && null === $data['commune']) {
            $object->setCommune(null);
        }

        if (\array_key_exists('paysISO', $data) && null !== $data['paysISO']) {
            $object->setPaysISO($data['paysISO']);
        } elseif (\array_key_exists('paysISO', $data) && null === $data['paysISO']) {
            $object->setPaysISO(null);
        }

        if (\array_key_exists('nomPays', $data) && null !== $data['nomPays']) {
            $object->setNomPays($data['nomPays']);
        } elseif (\array_key_exists('nomPays', $data) && null === $data['nomPays']) {
            $object->setNomPays(null);
        }

        if (\array_key_exists('telDomicile', $data) && null !== $data['telDomicile']) {
            $object->setTelDomicile($data['telDomicile']);
        } elseif (\array_key_exists('telDomicile', $data) && null === $data['telDomicile']) {
            $object->setTelDomicile(null);
        }

        if (\array_key_exists('telPortable', $data) && null !== $data['telPortable']) {
            $object->setTelPortable($data['telPortable']);
        } elseif (\array_key_exists('telPortable', $data) && null === $data['telPortable']) {
            $object->setTelPortable(null);
        }

        if (\array_key_exists('telBureau', $data) && null !== $data['telBureau']) {
            $object->setTelBureau($data['telBureau']);
        } elseif (\array_key_exists('telBureau', $data) && null === $data['telBureau']) {
            $object->setTelBureau(null);
        }

        if (\array_key_exists('telPortablePro', $data) && null !== $data['telPortablePro']) {
            $object->setTelPortablePro($data['telPortablePro']);
        } elseif (\array_key_exists('telPortablePro', $data) && null === $data['telPortablePro']) {
            $object->setTelPortablePro(null);
        }

        if (\array_key_exists('melPerso', $data) && null !== $data['melPerso']) {
            $object->setMelPerso($data['melPerso']);
        } elseif (\array_key_exists('melPerso', $data) && null === $data['melPerso']) {
            $object->setMelPerso(null);
        }

        if (\array_key_exists('mel', $data) && null !== $data['mel']) {
            $object->setMel($data['mel']);
        } elseif (\array_key_exists('mel', $data) && null === $data['mel']) {
            $object->setMel(null);
        }

        if (\array_key_exists('personneAContacterUrgenceNom', $data) && null !== $data['personneAContacterUrgenceNom']) {
            $object->setPersonneAContacterUrgenceNom($data['personneAContacterUrgenceNom']);
        } elseif (\array_key_exists('personneAContacterUrgenceNom', $data) && null === $data['personneAContacterUrgenceNom']) {
            $object->setPersonneAContacterUrgenceNom(null);
        }

        if (\array_key_exists('personneAContacterUrgencePrenom', $data) && null !== $data['personneAContacterUrgencePrenom']) {
            $object->setPersonneAContacterUrgencePrenom($data['personneAContacterUrgencePrenom']);
        } elseif (\array_key_exists('personneAContacterUrgencePrenom', $data) && null === $data['personneAContacterUrgencePrenom']) {
            $object->setPersonneAContacterUrgencePrenom(null);
        }

        if (\array_key_exists('personneAContacterUrgenceTel', $data) && null !== $data['personneAContacterUrgenceTel']) {
            $object->setPersonneAContacterUrgenceTel($data['personneAContacterUrgenceTel']);
        } elseif (\array_key_exists('personneAContacterUrgenceTel', $data) && null === $data['personneAContacterUrgenceTel']) {
            $object->setPersonneAContacterUrgenceTel(null);
        }

        if (\array_key_exists('personneAContacterUrgenceMel', $data) && null !== $data['personneAContacterUrgenceMel']) {
            $object->setPersonneAContacterUrgenceMel($data['personneAContacterUrgenceMel']);
        } elseif (\array_key_exists('personneAContacterUrgenceMel', $data) && null === $data['personneAContacterUrgenceMel']) {
            $object->setPersonneAContacterUrgenceMel(null);
        }

        if (\array_key_exists('enT_Code', $data) && null !== $data['enT_Code']) {
            $object->setEnTCode($data['enT_Code']);
        } elseif (\array_key_exists('enT_Code', $data) && null === $data['enT_Code']) {
            $object->setEnTCode(null);
        }

        if (\array_key_exists('enV_Code', $data) && null !== $data['enV_Code']) {
            $object->setEnVCode($data['enV_Code']);
        } elseif (\array_key_exists('enV_Code', $data) && null === $data['enV_Code']) {
            $object->setEnVCode(null);
        }

        if (\array_key_exists('edP_Code', $data) && null !== $data['edP_Code']) {
            $object->setEdPCode($data['edP_Code']);
        } elseif (\array_key_exists('edP_Code', $data) && null === $data['edP_Code']) {
            $object->setEdPCode(null);
        }

        if (\array_key_exists('etudesInfosComplementaires', $data) && null !== $data['etudesInfosComplementaires']) {
            $object->setEtudesInfosComplementaires($data['etudesInfosComplementaires']);
        } elseif (\array_key_exists('etudesInfosComplementaires', $data) && null === $data['etudesInfosComplementaires']) {
            $object->setEtudesInfosComplementaires(null);
        }

        if (\array_key_exists('formationPlusEleve', $data) && null !== $data['formationPlusEleve']) {
            $object->setFormationPlusEleve($data['formationPlusEleve']);
        } elseif (\array_key_exists('formationPlusEleve', $data) && null === $data['formationPlusEleve']) {
            $object->setFormationPlusEleve(null);
        }

        if (\array_key_exists('diplomePrepare', $data) && null !== $data['diplomePrepare']) {
            $object->setDiplomePrepare($data['diplomePrepare']);
        } elseif (\array_key_exists('diplomePrepare', $data) && null === $data['diplomePrepare']) {
            $object->setDiplomePrepare(null);
        }

        if (\array_key_exists('situationAvantEmbauche', $data) && null !== $data['situationAvantEmbauche']) {
            $object->setSituationAvantEmbauche($data['situationAvantEmbauche']);
        } elseif (\array_key_exists('situationAvantEmbauche', $data) && null === $data['situationAvantEmbauche']) {
            $object->setSituationAvantEmbauche(null);
        }

        if (\array_key_exists('dureePeriodeEssai1', $data) && null !== $data['dureePeriodeEssai1']) {
            $object->setDureePeriodeEssai1($data['dureePeriodeEssai1']);
        } elseif (\array_key_exists('dureePeriodeEssai1', $data) && null === $data['dureePeriodeEssai1']) {
            $object->setDureePeriodeEssai1(null);
        }

        if (\array_key_exists('dureePeriodeEssai2', $data) && null !== $data['dureePeriodeEssai2']) {
            $object->setDureePeriodeEssai2($data['dureePeriodeEssai2']);
        } elseif (\array_key_exists('dureePeriodeEssai2', $data) && null === $data['dureePeriodeEssai2']) {
            $object->setDureePeriodeEssai2(null);
        }

        if (\array_key_exists('pointure', $data) && null !== $data['pointure']) {
            $object->setPointure($data['pointure']);
        } elseif (\array_key_exists('pointure', $data) && null === $data['pointure']) {
            $object->setPointure(null);
        }

        if (\array_key_exists('tailleHaut', $data) && null !== $data['tailleHaut']) {
            $object->setTailleHaut($data['tailleHaut']);
        } elseif (\array_key_exists('tailleHaut', $data) && null === $data['tailleHaut']) {
            $object->setTailleHaut(null);
        }

        if (\array_key_exists('taillePantalon', $data) && null !== $data['taillePantalon']) {
            $object->setTaillePantalon($data['taillePantalon']);
        } elseif (\array_key_exists('taillePantalon', $data) && null === $data['taillePantalon']) {
            $object->setTaillePantalon(null);
        }

        if (\array_key_exists('tourDeTete', $data) && null !== $data['tourDeTete']) {
            $object->setTourDeTete($data['tourDeTete']);
        } elseif (\array_key_exists('tourDeTete', $data) && null === $data['tourDeTete']) {
            $object->setTourDeTete(null);
        }

        if (\array_key_exists('tourDeCou', $data) && null !== $data['tourDeCou']) {
            $object->setTourDeCou($data['tourDeCou']);
        } elseif (\array_key_exists('tourDeCou', $data) && null === $data['tourDeCou']) {
            $object->setTourDeCou(null);
        }

        if (\array_key_exists('titreSejourType', $data) && null !== $data['titreSejourType']) {
            $object->setTitreSejourType($data['titreSejourType']);
        } elseif (\array_key_exists('titreSejourType', $data) && null === $data['titreSejourType']) {
            $object->setTitreSejourType(null);
        }

        if (\array_key_exists('titreSejourNumOrdre', $data) && null !== $data['titreSejourNumOrdre']) {
            $object->setTitreSejourNumOrdre($data['titreSejourNumOrdre']);
        } elseif (\array_key_exists('titreSejourNumOrdre', $data) && null === $data['titreSejourNumOrdre']) {
            $object->setTitreSejourNumOrdre(null);
        }

        if (\array_key_exists('titreSejourDebut', $data) && null !== $data['titreSejourDebut']) {
            $object->setTitreSejourDebut(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['titreSejourDebut']));
        } elseif (\array_key_exists('titreSejourDebut', $data) && null === $data['titreSejourDebut']) {
            $object->setTitreSejourDebut(null);
        }

        if (\array_key_exists('titreSejourFin', $data) && null !== $data['titreSejourFin']) {
            $object->setTitreSejourFin(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['titreSejourFin']));
        } elseif (\array_key_exists('titreSejourFin', $data) && null === $data['titreSejourFin']) {
            $object->setTitreSejourFin(null);
        }

        if (\array_key_exists('surveillanceMedRenforcee', $data) && null !== $data['surveillanceMedRenforcee']) {
            $object->setSurveillanceMedRenforcee($data['surveillanceMedRenforcee']);
        } elseif (\array_key_exists('surveillanceMedRenforcee', $data) && null === $data['surveillanceMedRenforcee']) {
            $object->setSurveillanceMedRenforcee(null);
        }

        if (\array_key_exists('emplois', $data) && null !== $data['emplois']) {
            $values = [];
            foreach ($data['emplois'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, LectureInformationsSalarieEmploi::class, 'json', $context);
            }

            $object->setEmplois($values);
        } elseif (\array_key_exists('emplois', $data) && null === $data['emplois']) {
            $object->setEmplois(null);
        }

        if (\array_key_exists('numeroDossier', $data) && null !== $data['numeroDossier']) {
            $object->setNumeroDossier($data['numeroDossier']);
        } elseif (\array_key_exists('numeroDossier', $data) && null === $data['numeroDossier']) {
            $object->setNumeroDossier(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('matriculeSalarie') && null !== $data->getMatriculeSalarie()) {
            $dataArray['matriculeSalarie'] = $data->getMatriculeSalarie();
        }

        if ($data->isInitialized('matriculeInterne') && null !== $data->getMatriculeInterne()) {
            $dataArray['matriculeInterne'] = $data->getMatriculeInterne();
        }

        if ($data->isInitialized('civilite') && null !== $data->getCivilite()) {
            $dataArray['civilite'] = $data->getCivilite();
        }

        if ($data->isInitialized('sexe') && null !== $data->getSexe()) {
            $dataArray['sexe'] = $data->getSexe();
        }

        if ($data->isInitialized('nomNaissance') && null !== $data->getNomNaissance()) {
            $dataArray['nomNaissance'] = $data->getNomNaissance();
        }

        if ($data->isInitialized('nomMarital') && null !== $data->getNomMarital()) {
            $dataArray['nomMarital'] = $data->getNomMarital();
        }

        if ($data->isInitialized('nomUsuel') && null !== $data->getNomUsuel()) {
            $dataArray['nomUsuel'] = $data->getNomUsuel();
        }

        if ($data->isInitialized('prenom') && null !== $data->getPrenom()) {
            $dataArray['prenom'] = $data->getPrenom();
        }

        if ($data->isInitialized('numeroSecuriteSociale') && null !== $data->getNumeroSecuriteSociale()) {
            $dataArray['numeroSecuriteSociale'] = $data->getNumeroSecuriteSociale();
        }

        if ($data->isInitialized('situationFamiliale') && null !== $data->getSituationFamiliale()) {
            $dataArray['situationFamiliale'] = $data->getSituationFamiliale();
        }

        if ($data->isInitialized('dateNaissance') && null !== $data->getDateNaissance()) {
            $dataArray['dateNaissance'] = $data->getDateNaissance()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('anneeNaissance') && null !== $data->getAnneeNaissance()) {
            $dataArray['anneeNaissance'] = $data->getAnneeNaissance();
        }

        if ($data->isInitialized('departementNaissance') && null !== $data->getDepartementNaissance()) {
            $dataArray['departementNaissance'] = $data->getDepartementNaissance();
        }

        if ($data->isInitialized('communeNaissance') && null !== $data->getCommuneNaissance()) {
            $dataArray['communeNaissance'] = $data->getCommuneNaissance();
        }

        if ($data->isInitialized('paysNaissanceISO') && null !== $data->getPaysNaissanceISO()) {
            $dataArray['paysNaissanceISO'] = $data->getPaysNaissanceISO();
        }

        if ($data->isInitialized('paysNaissance') && null !== $data->getPaysNaissance()) {
            $dataArray['paysNaissance'] = $data->getPaysNaissance();
        }

        if ($data->isInitialized('paysNationaliteISO') && null !== $data->getPaysNationaliteISO()) {
            $dataArray['paysNationaliteISO'] = $data->getPaysNationaliteISO();
        }

        if ($data->isInitialized('paysNationalite') && null !== $data->getPaysNationalite()) {
            $dataArray['paysNationalite'] = $data->getPaysNationalite();
        }

        if ($data->isInitialized('numVoie') && null !== $data->getNumVoie()) {
            $dataArray['numVoie'] = $data->getNumVoie();
        }

        if ($data->isInitialized('btqc') && null !== $data->getBtqc()) {
            $dataArray['btqc'] = $data->getBtqc();
        }

        if ($data->isInitialized('nomVoie') && null !== $data->getNomVoie()) {
            $dataArray['nomVoie'] = $data->getNomVoie();
        }

        if ($data->isInitialized('complementAdresse') && null !== $data->getComplementAdresse()) {
            $dataArray['complementAdresse'] = $data->getComplementAdresse();
        }

        if ($data->isInitialized('codePostal') && null !== $data->getCodePostal()) {
            $dataArray['codePostal'] = $data->getCodePostal();
        }

        if ($data->isInitialized('nomVille') && null !== $data->getNomVille()) {
            $dataArray['nomVille'] = $data->getNomVille();
        }

        if ($data->isInitialized('frontalier') && null !== $data->getFrontalier()) {
            $dataArray['frontalier'] = $data->getFrontalier();
        }

        if ($data->isInitialized('communeINSEE') && null !== $data->getCommuneINSEE()) {
            $dataArray['communeINSEE'] = $data->getCommuneINSEE();
        }

        if ($data->isInitialized('commune') && null !== $data->getCommune()) {
            $dataArray['commune'] = $data->getCommune();
        }

        if ($data->isInitialized('paysISO') && null !== $data->getPaysISO()) {
            $dataArray['paysISO'] = $data->getPaysISO();
        }

        if ($data->isInitialized('nomPays') && null !== $data->getNomPays()) {
            $dataArray['nomPays'] = $data->getNomPays();
        }

        if ($data->isInitialized('telDomicile') && null !== $data->getTelDomicile()) {
            $dataArray['telDomicile'] = $data->getTelDomicile();
        }

        if ($data->isInitialized('telPortable') && null !== $data->getTelPortable()) {
            $dataArray['telPortable'] = $data->getTelPortable();
        }

        if ($data->isInitialized('telBureau') && null !== $data->getTelBureau()) {
            $dataArray['telBureau'] = $data->getTelBureau();
        }

        if ($data->isInitialized('telPortablePro') && null !== $data->getTelPortablePro()) {
            $dataArray['telPortablePro'] = $data->getTelPortablePro();
        }

        if ($data->isInitialized('melPerso') && null !== $data->getMelPerso()) {
            $dataArray['melPerso'] = $data->getMelPerso();
        }

        if ($data->isInitialized('mel') && null !== $data->getMel()) {
            $dataArray['mel'] = $data->getMel();
        }

        if ($data->isInitialized('personneAContacterUrgenceNom') && null !== $data->getPersonneAContacterUrgenceNom()) {
            $dataArray['personneAContacterUrgenceNom'] = $data->getPersonneAContacterUrgenceNom();
        }

        if ($data->isInitialized('personneAContacterUrgencePrenom') && null !== $data->getPersonneAContacterUrgencePrenom()) {
            $dataArray['personneAContacterUrgencePrenom'] = $data->getPersonneAContacterUrgencePrenom();
        }

        if ($data->isInitialized('personneAContacterUrgenceTel') && null !== $data->getPersonneAContacterUrgenceTel()) {
            $dataArray['personneAContacterUrgenceTel'] = $data->getPersonneAContacterUrgenceTel();
        }

        if ($data->isInitialized('personneAContacterUrgenceMel') && null !== $data->getPersonneAContacterUrgenceMel()) {
            $dataArray['personneAContacterUrgenceMel'] = $data->getPersonneAContacterUrgenceMel();
        }

        if ($data->isInitialized('enTCode') && null !== $data->getEnTCode()) {
            $dataArray['enT_Code'] = $data->getEnTCode();
        }

        if ($data->isInitialized('enVCode') && null !== $data->getEnVCode()) {
            $dataArray['enV_Code'] = $data->getEnVCode();
        }

        if ($data->isInitialized('edPCode') && null !== $data->getEdPCode()) {
            $dataArray['edP_Code'] = $data->getEdPCode();
        }

        if ($data->isInitialized('etudesInfosComplementaires') && null !== $data->getEtudesInfosComplementaires()) {
            $dataArray['etudesInfosComplementaires'] = $data->getEtudesInfosComplementaires();
        }

        if ($data->isInitialized('formationPlusEleve') && null !== $data->getFormationPlusEleve()) {
            $dataArray['formationPlusEleve'] = $data->getFormationPlusEleve();
        }

        if ($data->isInitialized('diplomePrepare') && null !== $data->getDiplomePrepare()) {
            $dataArray['diplomePrepare'] = $data->getDiplomePrepare();
        }

        if ($data->isInitialized('situationAvantEmbauche') && null !== $data->getSituationAvantEmbauche()) {
            $dataArray['situationAvantEmbauche'] = $data->getSituationAvantEmbauche();
        }

        if ($data->isInitialized('dureePeriodeEssai1') && null !== $data->getDureePeriodeEssai1()) {
            $dataArray['dureePeriodeEssai1'] = $data->getDureePeriodeEssai1();
        }

        if ($data->isInitialized('dureePeriodeEssai2') && null !== $data->getDureePeriodeEssai2()) {
            $dataArray['dureePeriodeEssai2'] = $data->getDureePeriodeEssai2();
        }

        if ($data->isInitialized('pointure') && null !== $data->getPointure()) {
            $dataArray['pointure'] = $data->getPointure();
        }

        if ($data->isInitialized('tailleHaut') && null !== $data->getTailleHaut()) {
            $dataArray['tailleHaut'] = $data->getTailleHaut();
        }

        if ($data->isInitialized('taillePantalon') && null !== $data->getTaillePantalon()) {
            $dataArray['taillePantalon'] = $data->getTaillePantalon();
        }

        if ($data->isInitialized('tourDeTete') && null !== $data->getTourDeTete()) {
            $dataArray['tourDeTete'] = $data->getTourDeTete();
        }

        if ($data->isInitialized('tourDeCou') && null !== $data->getTourDeCou()) {
            $dataArray['tourDeCou'] = $data->getTourDeCou();
        }

        if ($data->isInitialized('titreSejourType') && null !== $data->getTitreSejourType()) {
            $dataArray['titreSejourType'] = $data->getTitreSejourType();
        }

        if ($data->isInitialized('titreSejourNumOrdre') && null !== $data->getTitreSejourNumOrdre()) {
            $dataArray['titreSejourNumOrdre'] = $data->getTitreSejourNumOrdre();
        }

        if ($data->isInitialized('titreSejourDebut') && null !== $data->getTitreSejourDebut()) {
            $dataArray['titreSejourDebut'] = $data->getTitreSejourDebut()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('titreSejourFin') && null !== $data->getTitreSejourFin()) {
            $dataArray['titreSejourFin'] = $data->getTitreSejourFin()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('surveillanceMedRenforcee') && null !== $data->getSurveillanceMedRenforcee()) {
            $dataArray['surveillanceMedRenforcee'] = $data->getSurveillanceMedRenforcee();
        }

        if ($data->isInitialized('emplois') && null !== $data->getEmplois()) {
            $values = [];
            foreach ($data->getEmplois() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }

            $dataArray['emplois'] = $values;
        }

        if ($data->isInitialized('numeroDossier') && null !== $data->getNumeroDossier()) {
            $dataArray['numeroDossier'] = $data->getNumeroDossier();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [LectureInformationsSalarie::class => false];
    }
}
