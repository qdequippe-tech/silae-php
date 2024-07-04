<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\EmetteurDSN;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) || (Kernel::MAJOR_VERSION >= 7 || Kernel::MAJOR_VERSION === 6 && Kernel::MINOR_VERSION === 4)) {
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

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('numeroDossier') && null !== $object->getNumeroDossier()) {
                $data['numeroDossier'] = $object->getNumeroDossier();
            }

            if ($object->isInitialized('civilite') && null !== $object->getCivilite()) {
                $data['civilite'] = $object->getCivilite();
            }

            if ($object->isInitialized('nom') && null !== $object->getNom()) {
                $data['nom'] = $object->getNom();
            }

            if ($object->isInitialized('prenom') && null !== $object->getPrenom()) {
                $data['prenom'] = $object->getPrenom();
            }

            if ($object->isInitialized('siret') && null !== $object->getSiret()) {
                $data['siret'] = $object->getSiret();
            }

            if ($object->isInitialized('affectation') && null !== $object->getAffectation()) {
                $data['affectation'] = $object->getAffectation();
            }

            if ($object->isInitialized('mail') && null !== $object->getMail()) {
                $data['mail'] = $object->getMail();
            }

            if ($object->isInitialized('telephone') && null !== $object->getTelephone()) {
                $data['telephone'] = $object->getTelephone();
            }

            if ($object->isInitialized('choixAdresse') && null !== $object->getChoixAdresse()) {
                $data['choixAdresse'] = $object->getChoixAdresse();
            }

            if ($object->isInitialized('codeAgence') && null !== $object->getCodeAgence()) {
                $data['codeAgence'] = $object->getCodeAgence();
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

            if ($object->isInitialized('codePostal') && null !== $object->getCodePostal()) {
                $data['codePostal'] = $object->getCodePostal();
            }

            if ($object->isInitialized('nomVille') && null !== $object->getNomVille()) {
                $data['nomVille'] = $object->getNomVille();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [EmetteurDSN::class => false];
        }
    }
} else {
    class EmetteurDSNNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return EmetteurDSN::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && EmetteurDSN::class === $data::class;
        }

        /**
         * @param mixed|null $format
         */
        public function denormalize($data, $type, $format = null, array $context = [])
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

        /**
         * @param mixed|null $format
         *
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('numeroDossier') && null !== $object->getNumeroDossier()) {
                $data['numeroDossier'] = $object->getNumeroDossier();
            }

            if ($object->isInitialized('civilite') && null !== $object->getCivilite()) {
                $data['civilite'] = $object->getCivilite();
            }

            if ($object->isInitialized('nom') && null !== $object->getNom()) {
                $data['nom'] = $object->getNom();
            }

            if ($object->isInitialized('prenom') && null !== $object->getPrenom()) {
                $data['prenom'] = $object->getPrenom();
            }

            if ($object->isInitialized('siret') && null !== $object->getSiret()) {
                $data['siret'] = $object->getSiret();
            }

            if ($object->isInitialized('affectation') && null !== $object->getAffectation()) {
                $data['affectation'] = $object->getAffectation();
            }

            if ($object->isInitialized('mail') && null !== $object->getMail()) {
                $data['mail'] = $object->getMail();
            }

            if ($object->isInitialized('telephone') && null !== $object->getTelephone()) {
                $data['telephone'] = $object->getTelephone();
            }

            if ($object->isInitialized('choixAdresse') && null !== $object->getChoixAdresse()) {
                $data['choixAdresse'] = $object->getChoixAdresse();
            }

            if ($object->isInitialized('codeAgence') && null !== $object->getCodeAgence()) {
                $data['codeAgence'] = $object->getCodeAgence();
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

            if ($object->isInitialized('codePostal') && null !== $object->getCodePostal()) {
                $data['codePostal'] = $object->getCodePostal();
            }

            if ($object->isInitialized('nomVille') && null !== $object->getNomVille()) {
                $data['nomVille'] = $object->getNomVille();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [EmetteurDSN::class => false];
        }
    }
}
