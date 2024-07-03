<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\ModificationTaxeApprentissageEtablissementRequest;
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
    class ModificationTaxeApprentissageEtablissementRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return ModificationTaxeApprentissageEtablissementRequest::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof ModificationTaxeApprentissageEtablissementRequest;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new ModificationTaxeApprentissageEtablissementRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('nomInterneEtablissement', $data) && null !== $data['nomInterneEtablissement']) {
                $object->setNomInterneEtablissement($data['nomInterneEtablissement']);
            } elseif (\array_key_exists('nomInterneEtablissement', $data) && null === $data['nomInterneEtablissement']) {
                $object->setNomInterneEtablissement(null);
            }

            if (\array_key_exists('etablissementDiffereSociete', $data) && null !== $data['etablissementDiffereSociete']) {
                $object->setEtablissementDiffereSociete($data['etablissementDiffereSociete']);
            } elseif (\array_key_exists('etablissementDiffereSociete', $data) && null === $data['etablissementDiffereSociete']) {
                $object->setEtablissementDiffereSociete(null);
            }

            if (\array_key_exists('anneeMillesime', $data) && null !== $data['anneeMillesime']) {
                $object->setAnneeMillesime(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['anneeMillesime']));
            } elseif (\array_key_exists('anneeMillesime', $data) && null === $data['anneeMillesime']) {
                $object->setAnneeMillesime(null);
            }

            if (\array_key_exists('soumisTaxeApprentissage', $data) && null !== $data['soumisTaxeApprentissage']) {
                $object->setSoumisTaxeApprentissage($data['soumisTaxeApprentissage']);
            } elseif (\array_key_exists('soumisTaxeApprentissage', $data) && null === $data['soumisTaxeApprentissage']) {
                $object->setSoumisTaxeApprentissage(null);
            }

            if (\array_key_exists('motifNonAssujettissement', $data) && null !== $data['motifNonAssujettissement']) {
                $object->setMotifNonAssujettissement($data['motifNonAssujettissement']);
            } elseif (\array_key_exists('motifNonAssujettissement', $data) && null === $data['motifNonAssujettissement']) {
                $object->setMotifNonAssujettissement(null);
            }

            if (\array_key_exists('operateurCompetences', $data) && null !== $data['operateurCompetences']) {
                $object->setOperateurCompetences($data['operateurCompetences']);
            } elseif (\array_key_exists('operateurCompetences', $data) && null === $data['operateurCompetences']) {
                $object->setOperateurCompetences(null);
            }

            if (\array_key_exists('soumisTaxeApprentissageAvecMajoration', $data) && null !== $data['soumisTaxeApprentissageAvecMajoration']) {
                $object->setSoumisTaxeApprentissageAvecMajoration($data['soumisTaxeApprentissageAvecMajoration']);
            } elseif (\array_key_exists('soumisTaxeApprentissageAvecMajoration', $data) && null === $data['soumisTaxeApprentissageAvecMajoration']) {
                $object->setSoumisTaxeApprentissageAvecMajoration(null);
            }

            if (\array_key_exists('numeroDossier', $data) && null !== $data['numeroDossier']) {
                $object->setNumeroDossier($data['numeroDossier']);
            } elseif (\array_key_exists('numeroDossier', $data) && null === $data['numeroDossier']) {
                $object->setNumeroDossier(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['nomInterneEtablissement'] = $object->getNomInterneEtablissement();
            if ($object->isInitialized('etablissementDiffereSociete') && null !== $object->getEtablissementDiffereSociete()) {
                $data['etablissementDiffereSociete'] = $object->getEtablissementDiffereSociete();
            }

            $data['anneeMillesime'] = $object->getAnneeMillesime()->format('Y-m-d\TH:i:s');
            if ($object->isInitialized('soumisTaxeApprentissage') && null !== $object->getSoumisTaxeApprentissage()) {
                $data['soumisTaxeApprentissage'] = $object->getSoumisTaxeApprentissage();
            }

            if ($object->isInitialized('motifNonAssujettissement') && null !== $object->getMotifNonAssujettissement()) {
                $data['motifNonAssujettissement'] = $object->getMotifNonAssujettissement();
            }

            if ($object->isInitialized('operateurCompetences') && null !== $object->getOperateurCompetences()) {
                $data['operateurCompetences'] = $object->getOperateurCompetences();
            }

            if ($object->isInitialized('soumisTaxeApprentissageAvecMajoration') && null !== $object->getSoumisTaxeApprentissageAvecMajoration()) {
                $data['soumisTaxeApprentissageAvecMajoration'] = $object->getSoumisTaxeApprentissageAvecMajoration();
            }

            $data['numeroDossier'] = $object->getNumeroDossier();

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [ModificationTaxeApprentissageEtablissementRequest::class => false];
        }
    }
} else {
    class ModificationTaxeApprentissageEtablissementRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return ModificationTaxeApprentissageEtablissementRequest::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof ModificationTaxeApprentissageEtablissementRequest;
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

            $object = new ModificationTaxeApprentissageEtablissementRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('nomInterneEtablissement', $data) && null !== $data['nomInterneEtablissement']) {
                $object->setNomInterneEtablissement($data['nomInterneEtablissement']);
            } elseif (\array_key_exists('nomInterneEtablissement', $data) && null === $data['nomInterneEtablissement']) {
                $object->setNomInterneEtablissement(null);
            }

            if (\array_key_exists('etablissementDiffereSociete', $data) && null !== $data['etablissementDiffereSociete']) {
                $object->setEtablissementDiffereSociete($data['etablissementDiffereSociete']);
            } elseif (\array_key_exists('etablissementDiffereSociete', $data) && null === $data['etablissementDiffereSociete']) {
                $object->setEtablissementDiffereSociete(null);
            }

            if (\array_key_exists('anneeMillesime', $data) && null !== $data['anneeMillesime']) {
                $object->setAnneeMillesime(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['anneeMillesime']));
            } elseif (\array_key_exists('anneeMillesime', $data) && null === $data['anneeMillesime']) {
                $object->setAnneeMillesime(null);
            }

            if (\array_key_exists('soumisTaxeApprentissage', $data) && null !== $data['soumisTaxeApprentissage']) {
                $object->setSoumisTaxeApprentissage($data['soumisTaxeApprentissage']);
            } elseif (\array_key_exists('soumisTaxeApprentissage', $data) && null === $data['soumisTaxeApprentissage']) {
                $object->setSoumisTaxeApprentissage(null);
            }

            if (\array_key_exists('motifNonAssujettissement', $data) && null !== $data['motifNonAssujettissement']) {
                $object->setMotifNonAssujettissement($data['motifNonAssujettissement']);
            } elseif (\array_key_exists('motifNonAssujettissement', $data) && null === $data['motifNonAssujettissement']) {
                $object->setMotifNonAssujettissement(null);
            }

            if (\array_key_exists('operateurCompetences', $data) && null !== $data['operateurCompetences']) {
                $object->setOperateurCompetences($data['operateurCompetences']);
            } elseif (\array_key_exists('operateurCompetences', $data) && null === $data['operateurCompetences']) {
                $object->setOperateurCompetences(null);
            }

            if (\array_key_exists('soumisTaxeApprentissageAvecMajoration', $data) && null !== $data['soumisTaxeApprentissageAvecMajoration']) {
                $object->setSoumisTaxeApprentissageAvecMajoration($data['soumisTaxeApprentissageAvecMajoration']);
            } elseif (\array_key_exists('soumisTaxeApprentissageAvecMajoration', $data) && null === $data['soumisTaxeApprentissageAvecMajoration']) {
                $object->setSoumisTaxeApprentissageAvecMajoration(null);
            }

            if (\array_key_exists('numeroDossier', $data) && null !== $data['numeroDossier']) {
                $object->setNumeroDossier($data['numeroDossier']);
            } elseif (\array_key_exists('numeroDossier', $data) && null === $data['numeroDossier']) {
                $object->setNumeroDossier(null);
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
            $data['nomInterneEtablissement'] = $object->getNomInterneEtablissement();
            if ($object->isInitialized('etablissementDiffereSociete') && null !== $object->getEtablissementDiffereSociete()) {
                $data['etablissementDiffereSociete'] = $object->getEtablissementDiffereSociete();
            }

            $data['anneeMillesime'] = $object->getAnneeMillesime()->format('Y-m-d\TH:i:s');
            if ($object->isInitialized('soumisTaxeApprentissage') && null !== $object->getSoumisTaxeApprentissage()) {
                $data['soumisTaxeApprentissage'] = $object->getSoumisTaxeApprentissage();
            }

            if ($object->isInitialized('motifNonAssujettissement') && null !== $object->getMotifNonAssujettissement()) {
                $data['motifNonAssujettissement'] = $object->getMotifNonAssujettissement();
            }

            if ($object->isInitialized('operateurCompetences') && null !== $object->getOperateurCompetences()) {
                $data['operateurCompetences'] = $object->getOperateurCompetences();
            }

            if ($object->isInitialized('soumisTaxeApprentissageAvecMajoration') && null !== $object->getSoumisTaxeApprentissageAvecMajoration()) {
                $data['soumisTaxeApprentissageAvecMajoration'] = $object->getSoumisTaxeApprentissageAvecMajoration();
            }

            $data['numeroDossier'] = $object->getNumeroDossier();

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [ModificationTaxeApprentissageEtablissementRequest::class => false];
        }
    }
}
