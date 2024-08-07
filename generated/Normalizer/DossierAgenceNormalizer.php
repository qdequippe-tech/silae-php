<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\DossierAgence;
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
    class DossierAgenceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return DossierAgence::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && DossierAgence::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new DossierAgence();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('numeroDossier', $data) && null !== $data['numeroDossier']) {
                $object->setNumeroDossier($data['numeroDossier']);
            } elseif (\array_key_exists('numeroDossier', $data) && null === $data['numeroDossier']) {
                $object->setNumeroDossier(null);
            }

            if (\array_key_exists('raisonSociale', $data) && null !== $data['raisonSociale']) {
                $object->setRaisonSociale($data['raisonSociale']);
            } elseif (\array_key_exists('raisonSociale', $data) && null === $data['raisonSociale']) {
                $object->setRaisonSociale(null);
            }

            if (\array_key_exists('siret', $data) && null !== $data['siret']) {
                $object->setSiret($data['siret']);
            } elseif (\array_key_exists('siret', $data) && null === $data['siret']) {
                $object->setSiret(null);
            }

            if (\array_key_exists('groupe', $data) && null !== $data['groupe']) {
                $object->setGroupe($data['groupe']);
            } elseif (\array_key_exists('groupe', $data) && null === $data['groupe']) {
                $object->setGroupe(null);
            }

            if (\array_key_exists('dateCreation', $data) && null !== $data['dateCreation']) {
                $object->setDateCreation(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateCreation']));
            } elseif (\array_key_exists('dateCreation', $data) && null === $data['dateCreation']) {
                $object->setDateCreation(null);
            }

            if (\array_key_exists('dossierInterne', $data) && null !== $data['dossierInterne']) {
                $object->setDossierInterne($data['dossierInterne']);
            } elseif (\array_key_exists('dossierInterne', $data) && null === $data['dossierInterne']) {
                $object->setDossierInterne(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('numeroDossier') && null !== $object->getNumeroDossier()) {
                $data['numeroDossier'] = $object->getNumeroDossier();
            }

            if ($object->isInitialized('raisonSociale') && null !== $object->getRaisonSociale()) {
                $data['raisonSociale'] = $object->getRaisonSociale();
            }

            if ($object->isInitialized('siret') && null !== $object->getSiret()) {
                $data['siret'] = $object->getSiret();
            }

            if ($object->isInitialized('groupe') && null !== $object->getGroupe()) {
                $data['groupe'] = $object->getGroupe();
            }

            if ($object->isInitialized('dateCreation') && null !== $object->getDateCreation()) {
                $data['dateCreation'] = $object->getDateCreation()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('dossierInterne') && null !== $object->getDossierInterne()) {
                $data['dossierInterne'] = $object->getDossierInterne();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [DossierAgence::class => false];
        }
    }
} else {
    class DossierAgenceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return DossierAgence::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && DossierAgence::class === $data::class;
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

            $object = new DossierAgence();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('numeroDossier', $data) && null !== $data['numeroDossier']) {
                $object->setNumeroDossier($data['numeroDossier']);
            } elseif (\array_key_exists('numeroDossier', $data) && null === $data['numeroDossier']) {
                $object->setNumeroDossier(null);
            }

            if (\array_key_exists('raisonSociale', $data) && null !== $data['raisonSociale']) {
                $object->setRaisonSociale($data['raisonSociale']);
            } elseif (\array_key_exists('raisonSociale', $data) && null === $data['raisonSociale']) {
                $object->setRaisonSociale(null);
            }

            if (\array_key_exists('siret', $data) && null !== $data['siret']) {
                $object->setSiret($data['siret']);
            } elseif (\array_key_exists('siret', $data) && null === $data['siret']) {
                $object->setSiret(null);
            }

            if (\array_key_exists('groupe', $data) && null !== $data['groupe']) {
                $object->setGroupe($data['groupe']);
            } elseif (\array_key_exists('groupe', $data) && null === $data['groupe']) {
                $object->setGroupe(null);
            }

            if (\array_key_exists('dateCreation', $data) && null !== $data['dateCreation']) {
                $object->setDateCreation(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateCreation']));
            } elseif (\array_key_exists('dateCreation', $data) && null === $data['dateCreation']) {
                $object->setDateCreation(null);
            }

            if (\array_key_exists('dossierInterne', $data) && null !== $data['dossierInterne']) {
                $object->setDossierInterne($data['dossierInterne']);
            } elseif (\array_key_exists('dossierInterne', $data) && null === $data['dossierInterne']) {
                $object->setDossierInterne(null);
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

            if ($object->isInitialized('raisonSociale') && null !== $object->getRaisonSociale()) {
                $data['raisonSociale'] = $object->getRaisonSociale();
            }

            if ($object->isInitialized('siret') && null !== $object->getSiret()) {
                $data['siret'] = $object->getSiret();
            }

            if ($object->isInitialized('groupe') && null !== $object->getGroupe()) {
                $data['groupe'] = $object->getGroupe();
            }

            if ($object->isInitialized('dateCreation') && null !== $object->getDateCreation()) {
                $data['dateCreation'] = $object->getDateCreation()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('dossierInterne') && null !== $object->getDossierInterne()) {
                $data['dossierInterne'] = $object->getDossierInterne();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [DossierAgence::class => false];
        }
    }
}
