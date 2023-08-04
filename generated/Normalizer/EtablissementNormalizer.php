<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use QdequippeTech\Silae\Api\Model\Etablissement;
use Jane\Component\JsonSchemaRuntime\Reference;
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

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\Etablissement' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'QdequippeTech\\Silae\\Api\\Model\\Etablissement' === $data::class;
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
        $object = new Etablissement();
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

    /**
     * @param mixed|null $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('nomInterne') && null !== $object->getNomInterne()) {
            $data['nomInterne'] = $object->getNomInterne();
        }
        if ($object->isInitialized('raisonSociale') && null !== $object->getRaisonSociale()) {
            $data['raisonSociale'] = $object->getRaisonSociale();
        }
        if ($object->isInitialized('numVoie') && null !== $object->getNumVoie()) {
            $data['numVoie'] = $object->getNumVoie();
        }
        if ($object->isInitialized('btqc') && null !== $object->getBtqc()) {
            $data['btqc'] = $object->getBtqc();
        }
        if ($object->isInitialized('nomVoie') && null !== $object->getNomVoie()) {
            $data['nomVoie'] = $object->getNomVoie();
        }
        if ($object->isInitialized('complement') && null !== $object->getComplement()) {
            $data['complement'] = $object->getComplement();
        }
        if ($object->isInitialized('codePostal') && null !== $object->getCodePostal()) {
            $data['codePostal'] = $object->getCodePostal();
        }
        if ($object->isInitialized('nomVille') && null !== $object->getNomVille()) {
            $data['nomVille'] = $object->getNomVille();
        }
        if ($object->isInitialized('codeOfficielCommune') && null !== $object->getCodeOfficielCommune()) {
            $data['codeOfficielCommune'] = $object->getCodeOfficielCommune();
        }
        if ($object->isInitialized('commune') && null !== $object->getCommune()) {
            $data['commune'] = $object->getCommune();
        }
        if ($object->isInitialized('siret') && null !== $object->getSiret()) {
            $data['siret'] = $object->getSiret();
        }
        if ($object->isInitialized('codeNaf') && null !== $object->getCodeNaf()) {
            $data['codeNaf'] = $object->getCodeNaf();
        }
        if ($object->isInitialized('paysISO') && null !== $object->getPaysISO()) {
            $data['paysISO'] = $object->getPaysISO();
        }
        if ($object->isInitialized('nomPays') && null !== $object->getNomPays()) {
            $data['nomPays'] = $object->getNomPays();
        }
        if ($object->isInitialized('tel') && null !== $object->getTel()) {
            $data['tel'] = $object->getTel();
        }
        if ($object->isInitialized('fax') && null !== $object->getFax()) {
            $data['fax'] = $object->getFax();
        }
        if ($object->isInitialized('numeroAffiliationURSSAF') && null !== $object->getNumeroAffiliationURSSAF()) {
            $data['numeroAffiliationURSSAF'] = $object->getNumeroAffiliationURSSAF();
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
        if ($object->isInitialized('employeurCivilite') && null !== $object->getEmployeurCivilite()) {
            $data['employeurCivilite'] = $object->getEmployeurCivilite();
        }
        if ($object->isInitialized('employeurNom') && null !== $object->getEmployeurNom()) {
            $data['employeurNom'] = $object->getEmployeurNom();
        }
        if ($object->isInitialized('employeurPrenom') && null !== $object->getEmployeurPrenom()) {
            $data['employeurPrenom'] = $object->getEmployeurPrenom();
        }
        if ($object->isInitialized('employeurQualite') && null !== $object->getEmployeurQualite()) {
            $data['employeurQualite'] = $object->getEmployeurQualite();
        }
        if ($object->isInitialized('employeurQualiteAutre') && null !== $object->getEmployeurQualiteAutre()) {
            $data['employeurQualiteAutre'] = $object->getEmployeurQualiteAutre();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\Etablissement' => false];
    }
}
