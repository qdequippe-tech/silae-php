<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\EmetteurDSN;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EmetteurDSNNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return EmetteurDSN::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && EmetteurDSN::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new EmetteurDSN();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('numeroDossier', $data) && null !== $data['numeroDossier']) {
            $object->setNumeroDossier($data['numeroDossier']);
        } elseif (\array_key_exists('numeroDossier', $data) && null === $data['numeroDossier']) {
            $object->setNumeroDossier(null);
        }

        if (\array_key_exists('civilite', $data) && null !== $data['civilite']) {
            $object->setCivilite($data['civilite']);
        } elseif (\array_key_exists('civilite', $data) && null === $data['civilite']) {
            $object->setCivilite(null);
        }

        if (\array_key_exists('nom', $data) && null !== $data['nom']) {
            $object->setNom($data['nom']);
        } elseif (\array_key_exists('nom', $data) && null === $data['nom']) {
            $object->setNom(null);
        }

        if (\array_key_exists('prenom', $data) && null !== $data['prenom']) {
            $object->setPrenom($data['prenom']);
        } elseif (\array_key_exists('prenom', $data) && null === $data['prenom']) {
            $object->setPrenom(null);
        }

        if (\array_key_exists('siret', $data) && null !== $data['siret']) {
            $object->setSiret($data['siret']);
        } elseif (\array_key_exists('siret', $data) && null === $data['siret']) {
            $object->setSiret(null);
        }

        if (\array_key_exists('affectation', $data) && null !== $data['affectation']) {
            $object->setAffectation($data['affectation']);
        } elseif (\array_key_exists('affectation', $data) && null === $data['affectation']) {
            $object->setAffectation(null);
        }

        if (\array_key_exists('mail', $data) && null !== $data['mail']) {
            $object->setMail($data['mail']);
        } elseif (\array_key_exists('mail', $data) && null === $data['mail']) {
            $object->setMail(null);
        }

        if (\array_key_exists('telephone', $data) && null !== $data['telephone']) {
            $object->setTelephone($data['telephone']);
        } elseif (\array_key_exists('telephone', $data) && null === $data['telephone']) {
            $object->setTelephone(null);
        }

        if (\array_key_exists('choixAdresse', $data) && null !== $data['choixAdresse']) {
            $object->setChoixAdresse($data['choixAdresse']);
        } elseif (\array_key_exists('choixAdresse', $data) && null === $data['choixAdresse']) {
            $object->setChoixAdresse(null);
        }

        if (\array_key_exists('codeAgence', $data) && null !== $data['codeAgence']) {
            $object->setCodeAgence($data['codeAgence']);
        } elseif (\array_key_exists('codeAgence', $data) && null === $data['codeAgence']) {
            $object->setCodeAgence(null);
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

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('numeroDossier') && null !== $data->getNumeroDossier()) {
            $dataArray['numeroDossier'] = $data->getNumeroDossier();
        }

        if ($data->isInitialized('civilite') && null !== $data->getCivilite()) {
            $dataArray['civilite'] = $data->getCivilite();
        }

        if ($data->isInitialized('nom') && null !== $data->getNom()) {
            $dataArray['nom'] = $data->getNom();
        }

        if ($data->isInitialized('prenom') && null !== $data->getPrenom()) {
            $dataArray['prenom'] = $data->getPrenom();
        }

        if ($data->isInitialized('siret') && null !== $data->getSiret()) {
            $dataArray['siret'] = $data->getSiret();
        }

        if ($data->isInitialized('affectation') && null !== $data->getAffectation()) {
            $dataArray['affectation'] = $data->getAffectation();
        }

        if ($data->isInitialized('mail') && null !== $data->getMail()) {
            $dataArray['mail'] = $data->getMail();
        }

        if ($data->isInitialized('telephone') && null !== $data->getTelephone()) {
            $dataArray['telephone'] = $data->getTelephone();
        }

        if ($data->isInitialized('choixAdresse') && null !== $data->getChoixAdresse()) {
            $dataArray['choixAdresse'] = $data->getChoixAdresse();
        }

        if ($data->isInitialized('codeAgence') && null !== $data->getCodeAgence()) {
            $dataArray['codeAgence'] = $data->getCodeAgence();
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

        if ($data->isInitialized('codePostal') && null !== $data->getCodePostal()) {
            $dataArray['codePostal'] = $data->getCodePostal();
        }

        if ($data->isInitialized('nomVille') && null !== $data->getNomVille()) {
            $dataArray['nomVille'] = $data->getNomVille();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [EmetteurDSN::class => false];
    }
}
