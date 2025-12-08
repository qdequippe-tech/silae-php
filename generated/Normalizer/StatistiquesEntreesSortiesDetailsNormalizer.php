<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\StatistiquesEntreesSortiesDetails;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

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
        return \is_object($data) && StatistiquesEntreesSortiesDetails::class === $data::class;
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

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('periode') && null !== $data->getPeriode()) {
            $dataArray['periode'] = $data->getPeriode()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('entreesCDINouveauSalarie') && null !== $data->getEntreesCDINouveauSalarie()) {
            $dataArray['entreesCDI_NouveauSalarie'] = $data->getEntreesCDINouveauSalarie();
        }

        if ($data->isInitialized('entreesCDDNouveauSalarie') && null !== $data->getEntreesCDDNouveauSalarie()) {
            $dataArray['entreesCDD_NouveauSalarie'] = $data->getEntreesCDDNouveauSalarie();
        }

        if ($data->isInitialized('entreesAutreNouveauSalarie') && null !== $data->getEntreesAutreNouveauSalarie()) {
            $dataArray['entreesAutre_NouveauSalarie'] = $data->getEntreesAutreNouveauSalarie();
        }

        if ($data->isInitialized('entreesCDINouvelEmploi') && null !== $data->getEntreesCDINouvelEmploi()) {
            $dataArray['entreesCDI_NouvelEmploi'] = $data->getEntreesCDINouvelEmploi();
        }

        if ($data->isInitialized('entreesCDDNouvelEmploi') && null !== $data->getEntreesCDDNouvelEmploi()) {
            $dataArray['entreesCDD_NouvelEmploi'] = $data->getEntreesCDDNouvelEmploi();
        }

        if ($data->isInitialized('entreesAutreNouvelEmploi') && null !== $data->getEntreesAutreNouvelEmploi()) {
            $dataArray['entreesAutre_NouvelEmploi'] = $data->getEntreesAutreNouvelEmploi();
        }

        if ($data->isInitialized('sortiesFinCDD') && null !== $data->getSortiesFinCDD()) {
            $dataArray['sorties_FinCDD'] = $data->getSortiesFinCDD();
        }

        if ($data->isInitialized('sortiesDemission') && null !== $data->getSortiesDemission()) {
            $dataArray['sorties_Demission'] = $data->getSortiesDemission();
        }

        if ($data->isInitialized('sortiesRuptureConventionnelle') && null !== $data->getSortiesRuptureConventionnelle()) {
            $dataArray['sorties_RuptureConventionnelle'] = $data->getSortiesRuptureConventionnelle();
        }

        if ($data->isInitialized('sortiesLicenciement') && null !== $data->getSortiesLicenciement()) {
            $dataArray['sorties_Licenciement'] = $data->getSortiesLicenciement();
        }

        if ($data->isInitialized('sortiesAutre') && null !== $data->getSortiesAutre()) {
            $dataArray['sorties_Autre'] = $data->getSortiesAutre();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [StatistiquesEntreesSortiesDetails::class => false];
    }
}
