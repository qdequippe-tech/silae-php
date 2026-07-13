<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\StatistiquesProductionUtilisateurV3;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class StatistiquesProductionUtilisateurV3Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return StatistiquesProductionUtilisateurV3::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && StatistiquesProductionUtilisateurV3::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new StatistiquesProductionUtilisateurV3();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        if (\array_key_exists('identifiantUtilisateur', $data) && null !== $data['identifiantUtilisateur']) {
            $object->setIdentifiantUtilisateur($data['identifiantUtilisateur']);
        } elseif (\array_key_exists('identifiantUtilisateur', $data) && null === $data['identifiantUtilisateur']) {
            $object->setIdentifiantUtilisateur(null);
        }

        if (\array_key_exists('periodePaie', $data) && null !== $data['periodePaie']) {
            $object->setPeriodePaie(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periodePaie']));
        } elseif (\array_key_exists('periodePaie', $data) && null === $data['periodePaie']) {
            $object->setPeriodePaie(null);
        }

        if (\array_key_exists('dateEdition', $data) && null !== $data['dateEdition']) {
            $object->setDateEdition(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateEdition']));
        } elseif (\array_key_exists('dateEdition', $data) && null === $data['dateEdition']) {
            $object->setDateEdition(null);
        }

        if (\array_key_exists('nbBulletins', $data) && null !== $data['nbBulletins']) {
            $object->setNbBulletins($data['nbBulletins']);
        } elseif (\array_key_exists('nbBulletins', $data) && null === $data['nbBulletins']) {
            $object->setNbBulletins(null);
        }

        if (\array_key_exists('nbEntrees', $data) && null !== $data['nbEntrees']) {
            $object->setNbEntrees($data['nbEntrees']);
        } elseif (\array_key_exists('nbEntrees', $data) && null === $data['nbEntrees']) {
            $object->setNbEntrees(null);
        }

        if (\array_key_exists('nbEntreesCDI', $data) && null !== $data['nbEntreesCDI']) {
            $object->setNbEntreesCDI($data['nbEntreesCDI']);
        } elseif (\array_key_exists('nbEntreesCDI', $data) && null === $data['nbEntreesCDI']) {
            $object->setNbEntreesCDI(null);
        }

        if (\array_key_exists('nbEntreesCDD', $data) && null !== $data['nbEntreesCDD']) {
            $object->setNbEntreesCDD($data['nbEntreesCDD']);
        } elseif (\array_key_exists('nbEntreesCDD', $data) && null === $data['nbEntreesCDD']) {
            $object->setNbEntreesCDD(null);
        }

        if (\array_key_exists('nbEntreesAutres', $data) && null !== $data['nbEntreesAutres']) {
            $object->setNbEntreesAutres($data['nbEntreesAutres']);
        } elseif (\array_key_exists('nbEntreesAutres', $data) && null === $data['nbEntreesAutres']) {
            $object->setNbEntreesAutres(null);
        }

        if (\array_key_exists('nbSorties', $data) && null !== $data['nbSorties']) {
            $object->setNbSorties($data['nbSorties']);
        } elseif (\array_key_exists('nbSorties', $data) && null === $data['nbSorties']) {
            $object->setNbSorties(null);
        }

        if (\array_key_exists('nbSortiesCDI', $data) && null !== $data['nbSortiesCDI']) {
            $object->setNbSortiesCDI($data['nbSortiesCDI']);
        } elseif (\array_key_exists('nbSortiesCDI', $data) && null === $data['nbSortiesCDI']) {
            $object->setNbSortiesCDI(null);
        }

        if (\array_key_exists('nbSortiesCDD', $data) && null !== $data['nbSortiesCDD']) {
            $object->setNbSortiesCDD($data['nbSortiesCDD']);
        } elseif (\array_key_exists('nbSortiesCDD', $data) && null === $data['nbSortiesCDD']) {
            $object->setNbSortiesCDD(null);
        }

        if (\array_key_exists('nbSortiesDemission', $data) && null !== $data['nbSortiesDemission']) {
            $object->setNbSortiesDemission($data['nbSortiesDemission']);
        } elseif (\array_key_exists('nbSortiesDemission', $data) && null === $data['nbSortiesDemission']) {
            $object->setNbSortiesDemission(null);
        }

        if (\array_key_exists('nbSortiesRuptureConventionnelle', $data) && null !== $data['nbSortiesRuptureConventionnelle']) {
            $object->setNbSortiesRuptureConventionnelle($data['nbSortiesRuptureConventionnelle']);
        } elseif (\array_key_exists('nbSortiesRuptureConventionnelle', $data) && null === $data['nbSortiesRuptureConventionnelle']) {
            $object->setNbSortiesRuptureConventionnelle(null);
        }

        if (\array_key_exists('nbSortiesLicenciement', $data) && null !== $data['nbSortiesLicenciement']) {
            $object->setNbSortiesLicenciement($data['nbSortiesLicenciement']);
        } elseif (\array_key_exists('nbSortiesLicenciement', $data) && null === $data['nbSortiesLicenciement']) {
            $object->setNbSortiesLicenciement(null);
        }

        if (\array_key_exists('nbSortiesAutres', $data) && null !== $data['nbSortiesAutres']) {
            $object->setNbSortiesAutres($data['nbSortiesAutres']);
        } elseif (\array_key_exists('nbSortiesAutres', $data) && null === $data['nbSortiesAutres']) {
            $object->setNbSortiesAutres(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('identifiantUtilisateur') && null !== $data->getIdentifiantUtilisateur()) {
            $dataArray['identifiantUtilisateur'] = $data->getIdentifiantUtilisateur();
        }

        if ($data->isInitialized('periodePaie') && null !== $data->getPeriodePaie()) {
            $dataArray['periodePaie'] = $data->getPeriodePaie()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('dateEdition') && null !== $data->getDateEdition()) {
            $dataArray['dateEdition'] = $data->getDateEdition()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('nbBulletins') && null !== $data->getNbBulletins()) {
            $dataArray['nbBulletins'] = $data->getNbBulletins();
        }

        if ($data->isInitialized('nbEntrees') && null !== $data->getNbEntrees()) {
            $dataArray['nbEntrees'] = $data->getNbEntrees();
        }

        if ($data->isInitialized('nbEntreesCDI') && null !== $data->getNbEntreesCDI()) {
            $dataArray['nbEntreesCDI'] = $data->getNbEntreesCDI();
        }

        if ($data->isInitialized('nbEntreesCDD') && null !== $data->getNbEntreesCDD()) {
            $dataArray['nbEntreesCDD'] = $data->getNbEntreesCDD();
        }

        if ($data->isInitialized('nbEntreesAutres') && null !== $data->getNbEntreesAutres()) {
            $dataArray['nbEntreesAutres'] = $data->getNbEntreesAutres();
        }

        if ($data->isInitialized('nbSorties') && null !== $data->getNbSorties()) {
            $dataArray['nbSorties'] = $data->getNbSorties();
        }

        if ($data->isInitialized('nbSortiesCDI') && null !== $data->getNbSortiesCDI()) {
            $dataArray['nbSortiesCDI'] = $data->getNbSortiesCDI();
        }

        if ($data->isInitialized('nbSortiesCDD') && null !== $data->getNbSortiesCDD()) {
            $dataArray['nbSortiesCDD'] = $data->getNbSortiesCDD();
        }

        if ($data->isInitialized('nbSortiesDemission') && null !== $data->getNbSortiesDemission()) {
            $dataArray['nbSortiesDemission'] = $data->getNbSortiesDemission();
        }

        if ($data->isInitialized('nbSortiesRuptureConventionnelle') && null !== $data->getNbSortiesRuptureConventionnelle()) {
            $dataArray['nbSortiesRuptureConventionnelle'] = $data->getNbSortiesRuptureConventionnelle();
        }

        if ($data->isInitialized('nbSortiesLicenciement') && null !== $data->getNbSortiesLicenciement()) {
            $dataArray['nbSortiesLicenciement'] = $data->getNbSortiesLicenciement();
        }

        if ($data->isInitialized('nbSortiesAutres') && null !== $data->getNbSortiesAutres()) {
            $dataArray['nbSortiesAutres'] = $data->getNbSortiesAutres();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [StatistiquesProductionUtilisateurV3::class => false];
    }
}
