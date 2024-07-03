<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\StatistiquesEntreesSortiesDetails;
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
    class StatistiquesEntreesSortiesDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return StatistiquesEntreesSortiesDetails::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof StatistiquesEntreesSortiesDetails;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new StatistiquesEntreesSortiesDetails();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('periode', $data) && null !== $data['periode']) {
                $object->setPeriode(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periode']));
            } elseif (\array_key_exists('periode', $data) && null === $data['periode']) {
                $object->setPeriode(null);
            }

            if (\array_key_exists('entreesCDI_NouveauSalarie', $data) && null !== $data['entreesCDI_NouveauSalarie']) {
                $object->setEntreesCDINouveauSalarie($data['entreesCDI_NouveauSalarie']);
            } elseif (\array_key_exists('entreesCDI_NouveauSalarie', $data) && null === $data['entreesCDI_NouveauSalarie']) {
                $object->setEntreesCDINouveauSalarie(null);
            }

            if (\array_key_exists('entreesCDD_NouveauSalarie', $data) && null !== $data['entreesCDD_NouveauSalarie']) {
                $object->setEntreesCDDNouveauSalarie($data['entreesCDD_NouveauSalarie']);
            } elseif (\array_key_exists('entreesCDD_NouveauSalarie', $data) && null === $data['entreesCDD_NouveauSalarie']) {
                $object->setEntreesCDDNouveauSalarie(null);
            }

            if (\array_key_exists('entreesAutre_NouveauSalarie', $data) && null !== $data['entreesAutre_NouveauSalarie']) {
                $object->setEntreesAutreNouveauSalarie($data['entreesAutre_NouveauSalarie']);
            } elseif (\array_key_exists('entreesAutre_NouveauSalarie', $data) && null === $data['entreesAutre_NouveauSalarie']) {
                $object->setEntreesAutreNouveauSalarie(null);
            }

            if (\array_key_exists('entreesCDI_NouvelEmploi', $data) && null !== $data['entreesCDI_NouvelEmploi']) {
                $object->setEntreesCDINouvelEmploi($data['entreesCDI_NouvelEmploi']);
            } elseif (\array_key_exists('entreesCDI_NouvelEmploi', $data) && null === $data['entreesCDI_NouvelEmploi']) {
                $object->setEntreesCDINouvelEmploi(null);
            }

            if (\array_key_exists('entreesCDD_NouvelEmploi', $data) && null !== $data['entreesCDD_NouvelEmploi']) {
                $object->setEntreesCDDNouvelEmploi($data['entreesCDD_NouvelEmploi']);
            } elseif (\array_key_exists('entreesCDD_NouvelEmploi', $data) && null === $data['entreesCDD_NouvelEmploi']) {
                $object->setEntreesCDDNouvelEmploi(null);
            }

            if (\array_key_exists('entreesAutre_NouvelEmploi', $data) && null !== $data['entreesAutre_NouvelEmploi']) {
                $object->setEntreesAutreNouvelEmploi($data['entreesAutre_NouvelEmploi']);
            } elseif (\array_key_exists('entreesAutre_NouvelEmploi', $data) && null === $data['entreesAutre_NouvelEmploi']) {
                $object->setEntreesAutreNouvelEmploi(null);
            }

            if (\array_key_exists('sorties_FinCDD', $data) && null !== $data['sorties_FinCDD']) {
                $object->setSortiesFinCDD($data['sorties_FinCDD']);
            } elseif (\array_key_exists('sorties_FinCDD', $data) && null === $data['sorties_FinCDD']) {
                $object->setSortiesFinCDD(null);
            }

            if (\array_key_exists('sorties_Demission', $data) && null !== $data['sorties_Demission']) {
                $object->setSortiesDemission($data['sorties_Demission']);
            } elseif (\array_key_exists('sorties_Demission', $data) && null === $data['sorties_Demission']) {
                $object->setSortiesDemission(null);
            }

            if (\array_key_exists('sorties_RuptureConventionnelle', $data) && null !== $data['sorties_RuptureConventionnelle']) {
                $object->setSortiesRuptureConventionnelle($data['sorties_RuptureConventionnelle']);
            } elseif (\array_key_exists('sorties_RuptureConventionnelle', $data) && null === $data['sorties_RuptureConventionnelle']) {
                $object->setSortiesRuptureConventionnelle(null);
            }

            if (\array_key_exists('sorties_Licenciement', $data) && null !== $data['sorties_Licenciement']) {
                $object->setSortiesLicenciement($data['sorties_Licenciement']);
            } elseif (\array_key_exists('sorties_Licenciement', $data) && null === $data['sorties_Licenciement']) {
                $object->setSortiesLicenciement(null);
            }

            if (\array_key_exists('sorties_Autre', $data) && null !== $data['sorties_Autre']) {
                $object->setSortiesAutre($data['sorties_Autre']);
            } elseif (\array_key_exists('sorties_Autre', $data) && null === $data['sorties_Autre']) {
                $object->setSortiesAutre(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('periode') && null !== $object->getPeriode()) {
                $data['periode'] = $object->getPeriode()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('entreesCDINouveauSalarie') && null !== $object->getEntreesCDINouveauSalarie()) {
                $data['entreesCDI_NouveauSalarie'] = $object->getEntreesCDINouveauSalarie();
            }

            if ($object->isInitialized('entreesCDDNouveauSalarie') && null !== $object->getEntreesCDDNouveauSalarie()) {
                $data['entreesCDD_NouveauSalarie'] = $object->getEntreesCDDNouveauSalarie();
            }

            if ($object->isInitialized('entreesAutreNouveauSalarie') && null !== $object->getEntreesAutreNouveauSalarie()) {
                $data['entreesAutre_NouveauSalarie'] = $object->getEntreesAutreNouveauSalarie();
            }

            if ($object->isInitialized('entreesCDINouvelEmploi') && null !== $object->getEntreesCDINouvelEmploi()) {
                $data['entreesCDI_NouvelEmploi'] = $object->getEntreesCDINouvelEmploi();
            }

            if ($object->isInitialized('entreesCDDNouvelEmploi') && null !== $object->getEntreesCDDNouvelEmploi()) {
                $data['entreesCDD_NouvelEmploi'] = $object->getEntreesCDDNouvelEmploi();
            }

            if ($object->isInitialized('entreesAutreNouvelEmploi') && null !== $object->getEntreesAutreNouvelEmploi()) {
                $data['entreesAutre_NouvelEmploi'] = $object->getEntreesAutreNouvelEmploi();
            }

            if ($object->isInitialized('sortiesFinCDD') && null !== $object->getSortiesFinCDD()) {
                $data['sorties_FinCDD'] = $object->getSortiesFinCDD();
            }

            if ($object->isInitialized('sortiesDemission') && null !== $object->getSortiesDemission()) {
                $data['sorties_Demission'] = $object->getSortiesDemission();
            }

            if ($object->isInitialized('sortiesRuptureConventionnelle') && null !== $object->getSortiesRuptureConventionnelle()) {
                $data['sorties_RuptureConventionnelle'] = $object->getSortiesRuptureConventionnelle();
            }

            if ($object->isInitialized('sortiesLicenciement') && null !== $object->getSortiesLicenciement()) {
                $data['sorties_Licenciement'] = $object->getSortiesLicenciement();
            }

            if ($object->isInitialized('sortiesAutre') && null !== $object->getSortiesAutre()) {
                $data['sorties_Autre'] = $object->getSortiesAutre();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [StatistiquesEntreesSortiesDetails::class => false];
        }
    }
} else {
    class StatistiquesEntreesSortiesDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return StatistiquesEntreesSortiesDetails::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof StatistiquesEntreesSortiesDetails;
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

            $object = new StatistiquesEntreesSortiesDetails();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('periode', $data) && null !== $data['periode']) {
                $object->setPeriode(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periode']));
            } elseif (\array_key_exists('periode', $data) && null === $data['periode']) {
                $object->setPeriode(null);
            }

            if (\array_key_exists('entreesCDI_NouveauSalarie', $data) && null !== $data['entreesCDI_NouveauSalarie']) {
                $object->setEntreesCDINouveauSalarie($data['entreesCDI_NouveauSalarie']);
            } elseif (\array_key_exists('entreesCDI_NouveauSalarie', $data) && null === $data['entreesCDI_NouveauSalarie']) {
                $object->setEntreesCDINouveauSalarie(null);
            }

            if (\array_key_exists('entreesCDD_NouveauSalarie', $data) && null !== $data['entreesCDD_NouveauSalarie']) {
                $object->setEntreesCDDNouveauSalarie($data['entreesCDD_NouveauSalarie']);
            } elseif (\array_key_exists('entreesCDD_NouveauSalarie', $data) && null === $data['entreesCDD_NouveauSalarie']) {
                $object->setEntreesCDDNouveauSalarie(null);
            }

            if (\array_key_exists('entreesAutre_NouveauSalarie', $data) && null !== $data['entreesAutre_NouveauSalarie']) {
                $object->setEntreesAutreNouveauSalarie($data['entreesAutre_NouveauSalarie']);
            } elseif (\array_key_exists('entreesAutre_NouveauSalarie', $data) && null === $data['entreesAutre_NouveauSalarie']) {
                $object->setEntreesAutreNouveauSalarie(null);
            }

            if (\array_key_exists('entreesCDI_NouvelEmploi', $data) && null !== $data['entreesCDI_NouvelEmploi']) {
                $object->setEntreesCDINouvelEmploi($data['entreesCDI_NouvelEmploi']);
            } elseif (\array_key_exists('entreesCDI_NouvelEmploi', $data) && null === $data['entreesCDI_NouvelEmploi']) {
                $object->setEntreesCDINouvelEmploi(null);
            }

            if (\array_key_exists('entreesCDD_NouvelEmploi', $data) && null !== $data['entreesCDD_NouvelEmploi']) {
                $object->setEntreesCDDNouvelEmploi($data['entreesCDD_NouvelEmploi']);
            } elseif (\array_key_exists('entreesCDD_NouvelEmploi', $data) && null === $data['entreesCDD_NouvelEmploi']) {
                $object->setEntreesCDDNouvelEmploi(null);
            }

            if (\array_key_exists('entreesAutre_NouvelEmploi', $data) && null !== $data['entreesAutre_NouvelEmploi']) {
                $object->setEntreesAutreNouvelEmploi($data['entreesAutre_NouvelEmploi']);
            } elseif (\array_key_exists('entreesAutre_NouvelEmploi', $data) && null === $data['entreesAutre_NouvelEmploi']) {
                $object->setEntreesAutreNouvelEmploi(null);
            }

            if (\array_key_exists('sorties_FinCDD', $data) && null !== $data['sorties_FinCDD']) {
                $object->setSortiesFinCDD($data['sorties_FinCDD']);
            } elseif (\array_key_exists('sorties_FinCDD', $data) && null === $data['sorties_FinCDD']) {
                $object->setSortiesFinCDD(null);
            }

            if (\array_key_exists('sorties_Demission', $data) && null !== $data['sorties_Demission']) {
                $object->setSortiesDemission($data['sorties_Demission']);
            } elseif (\array_key_exists('sorties_Demission', $data) && null === $data['sorties_Demission']) {
                $object->setSortiesDemission(null);
            }

            if (\array_key_exists('sorties_RuptureConventionnelle', $data) && null !== $data['sorties_RuptureConventionnelle']) {
                $object->setSortiesRuptureConventionnelle($data['sorties_RuptureConventionnelle']);
            } elseif (\array_key_exists('sorties_RuptureConventionnelle', $data) && null === $data['sorties_RuptureConventionnelle']) {
                $object->setSortiesRuptureConventionnelle(null);
            }

            if (\array_key_exists('sorties_Licenciement', $data) && null !== $data['sorties_Licenciement']) {
                $object->setSortiesLicenciement($data['sorties_Licenciement']);
            } elseif (\array_key_exists('sorties_Licenciement', $data) && null === $data['sorties_Licenciement']) {
                $object->setSortiesLicenciement(null);
            }

            if (\array_key_exists('sorties_Autre', $data) && null !== $data['sorties_Autre']) {
                $object->setSortiesAutre($data['sorties_Autre']);
            } elseif (\array_key_exists('sorties_Autre', $data) && null === $data['sorties_Autre']) {
                $object->setSortiesAutre(null);
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
            if ($object->isInitialized('periode') && null !== $object->getPeriode()) {
                $data['periode'] = $object->getPeriode()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('entreesCDINouveauSalarie') && null !== $object->getEntreesCDINouveauSalarie()) {
                $data['entreesCDI_NouveauSalarie'] = $object->getEntreesCDINouveauSalarie();
            }

            if ($object->isInitialized('entreesCDDNouveauSalarie') && null !== $object->getEntreesCDDNouveauSalarie()) {
                $data['entreesCDD_NouveauSalarie'] = $object->getEntreesCDDNouveauSalarie();
            }

            if ($object->isInitialized('entreesAutreNouveauSalarie') && null !== $object->getEntreesAutreNouveauSalarie()) {
                $data['entreesAutre_NouveauSalarie'] = $object->getEntreesAutreNouveauSalarie();
            }

            if ($object->isInitialized('entreesCDINouvelEmploi') && null !== $object->getEntreesCDINouvelEmploi()) {
                $data['entreesCDI_NouvelEmploi'] = $object->getEntreesCDINouvelEmploi();
            }

            if ($object->isInitialized('entreesCDDNouvelEmploi') && null !== $object->getEntreesCDDNouvelEmploi()) {
                $data['entreesCDD_NouvelEmploi'] = $object->getEntreesCDDNouvelEmploi();
            }

            if ($object->isInitialized('entreesAutreNouvelEmploi') && null !== $object->getEntreesAutreNouvelEmploi()) {
                $data['entreesAutre_NouvelEmploi'] = $object->getEntreesAutreNouvelEmploi();
            }

            if ($object->isInitialized('sortiesFinCDD') && null !== $object->getSortiesFinCDD()) {
                $data['sorties_FinCDD'] = $object->getSortiesFinCDD();
            }

            if ($object->isInitialized('sortiesDemission') && null !== $object->getSortiesDemission()) {
                $data['sorties_Demission'] = $object->getSortiesDemission();
            }

            if ($object->isInitialized('sortiesRuptureConventionnelle') && null !== $object->getSortiesRuptureConventionnelle()) {
                $data['sorties_RuptureConventionnelle'] = $object->getSortiesRuptureConventionnelle();
            }

            if ($object->isInitialized('sortiesLicenciement') && null !== $object->getSortiesLicenciement()) {
                $data['sorties_Licenciement'] = $object->getSortiesLicenciement();
            }

            if ($object->isInitialized('sortiesAutre') && null !== $object->getSortiesAutre()) {
                $data['sorties_Autre'] = $object->getSortiesAutre();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [StatistiquesEntreesSortiesDetails::class => false];
        }
    }
}
