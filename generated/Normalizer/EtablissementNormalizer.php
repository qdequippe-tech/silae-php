<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\Etablissement;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EtablissementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return Etablissement::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && Etablissement::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new Etablissement();
        if (\array_key_exists('bNbHeuresTravaillees', $data) && \is_int($data['bNbHeuresTravaillees'])) {
            $data['bNbHeuresTravaillees'] = (bool) $data['bNbHeuresTravaillees'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('nomInterne', $data) && null !== $data['nomInterne']) {
            $object->setNomInterne($data['nomInterne']);
        } elseif (\array_key_exists('nomInterne', $data) && null === $data['nomInterne']) {
            $object->setNomInterne(null);
        }

        if (\array_key_exists('raisonSociale', $data) && null !== $data['raisonSociale']) {
            $object->setRaisonSociale($data['raisonSociale']);
        } elseif (\array_key_exists('raisonSociale', $data) && null === $data['raisonSociale']) {
            $object->setRaisonSociale(null);
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

        if (\array_key_exists('complement', $data) && null !== $data['complement']) {
            $object->setComplement($data['complement']);
        } elseif (\array_key_exists('complement', $data) && null === $data['complement']) {
            $object->setComplement(null);
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

        if (\array_key_exists('codeOfficielCommune', $data) && null !== $data['codeOfficielCommune']) {
            $object->setCodeOfficielCommune($data['codeOfficielCommune']);
        } elseif (\array_key_exists('codeOfficielCommune', $data) && null === $data['codeOfficielCommune']) {
            $object->setCodeOfficielCommune(null);
        }

        if (\array_key_exists('commune', $data) && null !== $data['commune']) {
            $object->setCommune($data['commune']);
        } elseif (\array_key_exists('commune', $data) && null === $data['commune']) {
            $object->setCommune(null);
        }

        if (\array_key_exists('siret', $data) && null !== $data['siret']) {
            $object->setSiret($data['siret']);
        } elseif (\array_key_exists('siret', $data) && null === $data['siret']) {
            $object->setSiret(null);
        }

        if (\array_key_exists('codeNaf', $data) && null !== $data['codeNaf']) {
            $object->setCodeNaf($data['codeNaf']);
        } elseif (\array_key_exists('codeNaf', $data) && null === $data['codeNaf']) {
            $object->setCodeNaf(null);
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

        if (\array_key_exists('tel', $data) && null !== $data['tel']) {
            $object->setTel($data['tel']);
        } elseif (\array_key_exists('tel', $data) && null === $data['tel']) {
            $object->setTel(null);
        }

        if (\array_key_exists('fax', $data) && null !== $data['fax']) {
            $object->setFax($data['fax']);
        } elseif (\array_key_exists('fax', $data) && null === $data['fax']) {
            $object->setFax(null);
        }

        if (\array_key_exists('numeroAffiliationURSSAF', $data) && null !== $data['numeroAffiliationURSSAF']) {
            $object->setNumeroAffiliationURSSAF($data['numeroAffiliationURSSAF']);
        } elseif (\array_key_exists('numeroAffiliationURSSAF', $data) && null === $data['numeroAffiliationURSSAF']) {
            $object->setNumeroAffiliationURSSAF(null);
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

        if (\array_key_exists('employeurCivilite', $data) && null !== $data['employeurCivilite']) {
            $object->setEmployeurCivilite($data['employeurCivilite']);
        } elseif (\array_key_exists('employeurCivilite', $data) && null === $data['employeurCivilite']) {
            $object->setEmployeurCivilite(null);
        }

        if (\array_key_exists('employeurNom', $data) && null !== $data['employeurNom']) {
            $object->setEmployeurNom($data['employeurNom']);
        } elseif (\array_key_exists('employeurNom', $data) && null === $data['employeurNom']) {
            $object->setEmployeurNom(null);
        }

        if (\array_key_exists('employeurPrenom', $data) && null !== $data['employeurPrenom']) {
            $object->setEmployeurPrenom($data['employeurPrenom']);
        } elseif (\array_key_exists('employeurPrenom', $data) && null === $data['employeurPrenom']) {
            $object->setEmployeurPrenom(null);
        }

        if (\array_key_exists('employeurQualite', $data) && null !== $data['employeurQualite']) {
            $object->setEmployeurQualite($data['employeurQualite']);
        } elseif (\array_key_exists('employeurQualite', $data) && null === $data['employeurQualite']) {
            $object->setEmployeurQualite(null);
        }

        if (\array_key_exists('employeurQualiteAutre', $data) && null !== $data['employeurQualiteAutre']) {
            $object->setEmployeurQualiteAutre($data['employeurQualiteAutre']);
        } elseif (\array_key_exists('employeurQualiteAutre', $data) && null === $data['employeurQualiteAutre']) {
            $object->setEmployeurQualiteAutre(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('nomInterne') && null !== $data->getNomInterne()) {
            $dataArray['nomInterne'] = $data->getNomInterne();
        }

        if ($data->isInitialized('raisonSociale') && null !== $data->getRaisonSociale()) {
            $dataArray['raisonSociale'] = $data->getRaisonSociale();
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

        if ($data->isInitialized('complement') && null !== $data->getComplement()) {
            $dataArray['complement'] = $data->getComplement();
        }

        if ($data->isInitialized('codePostal') && null !== $data->getCodePostal()) {
            $dataArray['codePostal'] = $data->getCodePostal();
        }

        if ($data->isInitialized('nomVille') && null !== $data->getNomVille()) {
            $dataArray['nomVille'] = $data->getNomVille();
        }

        if ($data->isInitialized('codeOfficielCommune') && null !== $data->getCodeOfficielCommune()) {
            $dataArray['codeOfficielCommune'] = $data->getCodeOfficielCommune();
        }

        if ($data->isInitialized('commune') && null !== $data->getCommune()) {
            $dataArray['commune'] = $data->getCommune();
        }

        if ($data->isInitialized('siret') && null !== $data->getSiret()) {
            $dataArray['siret'] = $data->getSiret();
        }

        if ($data->isInitialized('codeNaf') && null !== $data->getCodeNaf()) {
            $dataArray['codeNaf'] = $data->getCodeNaf();
        }

        if ($data->isInitialized('paysISO') && null !== $data->getPaysISO()) {
            $dataArray['paysISO'] = $data->getPaysISO();
        }

        if ($data->isInitialized('nomPays') && null !== $data->getNomPays()) {
            $dataArray['nomPays'] = $data->getNomPays();
        }

        if ($data->isInitialized('tel') && null !== $data->getTel()) {
            $dataArray['tel'] = $data->getTel();
        }

        if ($data->isInitialized('fax') && null !== $data->getFax()) {
            $dataArray['fax'] = $data->getFax();
        }

        if ($data->isInitialized('numeroAffiliationURSSAF') && null !== $data->getNumeroAffiliationURSSAF()) {
            $dataArray['numeroAffiliationURSSAF'] = $data->getNumeroAffiliationURSSAF();
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

        if ($data->isInitialized('employeurCivilite') && null !== $data->getEmployeurCivilite()) {
            $dataArray['employeurCivilite'] = $data->getEmployeurCivilite();
        }

        if ($data->isInitialized('employeurNom') && null !== $data->getEmployeurNom()) {
            $dataArray['employeurNom'] = $data->getEmployeurNom();
        }

        if ($data->isInitialized('employeurPrenom') && null !== $data->getEmployeurPrenom()) {
            $dataArray['employeurPrenom'] = $data->getEmployeurPrenom();
        }

        if ($data->isInitialized('employeurQualite') && null !== $data->getEmployeurQualite()) {
            $dataArray['employeurQualite'] = $data->getEmployeurQualite();
        }

        if ($data->isInitialized('employeurQualiteAutre') && null !== $data->getEmployeurQualiteAutre()) {
            $dataArray['employeurQualiteAutre'] = $data->getEmployeurQualiteAutre();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [Etablissement::class => false];
    }
}
