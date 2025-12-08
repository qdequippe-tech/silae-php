<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\Handicap;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class HandicapNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return Handicap::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && Handicap::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new Handicap();
        if (\array_key_exists('cdapH_TauxIncapacite', $data) && \is_int($data['cdapH_TauxIncapacite'])) {
            $data['cdapH_TauxIncapacite'] = (float) $data['cdapH_TauxIncapacite'];
        }

        if (\array_key_exists('accident_TauxIPP', $data) && \is_int($data['accident_TauxIPP'])) {
            $data['accident_TauxIPP'] = (float) $data['accident_TauxIPP'];
        }

        if (\array_key_exists('cdapH_RQTH', $data) && \is_int($data['cdapH_RQTH'])) {
            $data['cdapH_RQTH'] = (bool) $data['cdapH_RQTH'];
        }

        if (\array_key_exists('cdapH_AAH', $data) && \is_int($data['cdapH_AAH'])) {
            $data['cdapH_AAH'] = (bool) $data['cdapH_AAH'];
        }

        if (\array_key_exists('cdapH_CarteInvalidite', $data) && \is_int($data['cdapH_CarteInvalidite'])) {
            $data['cdapH_CarteInvalidite'] = (bool) $data['cdapH_CarteInvalidite'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('cdapH_RQTH', $data) && null !== $data['cdapH_RQTH']) {
            $object->setCdapHRQTH($data['cdapH_RQTH']);
        } elseif (\array_key_exists('cdapH_RQTH', $data) && null === $data['cdapH_RQTH']) {
            $object->setCdapHRQTH(null);
        }

        if (\array_key_exists('cdapH_AAH', $data) && null !== $data['cdapH_AAH']) {
            $object->setCdapHAAH($data['cdapH_AAH']);
        } elseif (\array_key_exists('cdapH_AAH', $data) && null === $data['cdapH_AAH']) {
            $object->setCdapHAAH(null);
        }

        if (\array_key_exists('cdapH_CarteInvalidite', $data) && null !== $data['cdapH_CarteInvalidite']) {
            $object->setCdapHCarteInvalidite($data['cdapH_CarteInvalidite']);
        } elseif (\array_key_exists('cdapH_CarteInvalidite', $data) && null === $data['cdapH_CarteInvalidite']) {
            $object->setCdapHCarteInvalidite(null);
        }

        if (\array_key_exists('cdapH_DateDebut', $data) && null !== $data['cdapH_DateDebut']) {
            $object->setCdapHDateDebut(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['cdapH_DateDebut']));
        } elseif (\array_key_exists('cdapH_DateDebut', $data) && null === $data['cdapH_DateDebut']) {
            $object->setCdapHDateDebut(null);
        }

        if (\array_key_exists('cdapH_DateFin', $data) && null !== $data['cdapH_DateFin']) {
            $object->setCdapHDateFin(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['cdapH_DateFin']));
        } elseif (\array_key_exists('cdapH_DateFin', $data) && null === $data['cdapH_DateFin']) {
            $object->setCdapHDateFin(null);
        }

        if (\array_key_exists('cdapH_DtDepotRenouvellement', $data) && null !== $data['cdapH_DtDepotRenouvellement']) {
            $object->setCdapHDtDepotRenouvellement(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['cdapH_DtDepotRenouvellement']));
        } elseif (\array_key_exists('cdapH_DtDepotRenouvellement', $data) && null === $data['cdapH_DtDepotRenouvellement']) {
            $object->setCdapHDtDepotRenouvellement(null);
        }

        if (\array_key_exists('cdapH_TauxIncapacite', $data) && null !== $data['cdapH_TauxIncapacite']) {
            $object->setCdapHTauxIncapacite($data['cdapH_TauxIncapacite']);
        } elseif (\array_key_exists('cdapH_TauxIncapacite', $data) && null === $data['cdapH_TauxIncapacite']) {
            $object->setCdapHTauxIncapacite(null);
        }

        if (\array_key_exists('accident_Nature', $data) && null !== $data['accident_Nature']) {
            $object->setAccidentNature($data['accident_Nature']);
        } elseif (\array_key_exists('accident_Nature', $data) && null === $data['accident_Nature']) {
            $object->setAccidentNature(null);
        }

        if (\array_key_exists('accident_DateDebut', $data) && null !== $data['accident_DateDebut']) {
            $object->setAccidentDateDebut(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['accident_DateDebut']));
        } elseif (\array_key_exists('accident_DateDebut', $data) && null === $data['accident_DateDebut']) {
            $object->setAccidentDateDebut(null);
        }

        if (\array_key_exists('accident_TauxIPP', $data) && null !== $data['accident_TauxIPP']) {
            $object->setAccidentTauxIPP($data['accident_TauxIPP']);
        } elseif (\array_key_exists('accident_TauxIPP', $data) && null === $data['accident_TauxIPP']) {
            $object->setAccidentTauxIPP(null);
        }

        if (\array_key_exists('accident_CategoriePension', $data) && null !== $data['accident_CategoriePension']) {
            $object->setAccidentCategoriePension($data['accident_CategoriePension']);
        } elseif (\array_key_exists('accident_CategoriePension', $data) && null === $data['accident_CategoriePension']) {
            $object->setAccidentCategoriePension(null);
        }

        if (\array_key_exists('autre_Categorie', $data) && null !== $data['autre_Categorie']) {
            $object->setAutreCategorie($data['autre_Categorie']);
        } elseif (\array_key_exists('autre_Categorie', $data) && null === $data['autre_Categorie']) {
            $object->setAutreCategorie(null);
        }

        if (\array_key_exists('autre_DateDebut', $data) && null !== $data['autre_DateDebut']) {
            $object->setAutreDateDebut(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['autre_DateDebut']));
        } elseif (\array_key_exists('autre_DateDebut', $data) && null === $data['autre_DateDebut']) {
            $object->setAutreDateDebut(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('cdapHRQTH') && null !== $data->getCdapHRQTH()) {
            $dataArray['cdapH_RQTH'] = $data->getCdapHRQTH();
        }

        if ($data->isInitialized('cdapHAAH') && null !== $data->getCdapHAAH()) {
            $dataArray['cdapH_AAH'] = $data->getCdapHAAH();
        }

        if ($data->isInitialized('cdapHCarteInvalidite') && null !== $data->getCdapHCarteInvalidite()) {
            $dataArray['cdapH_CarteInvalidite'] = $data->getCdapHCarteInvalidite();
        }

        if ($data->isInitialized('cdapHDateDebut') && null !== $data->getCdapHDateDebut()) {
            $dataArray['cdapH_DateDebut'] = $data->getCdapHDateDebut()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('cdapHDateFin') && null !== $data->getCdapHDateFin()) {
            $dataArray['cdapH_DateFin'] = $data->getCdapHDateFin()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('cdapHDtDepotRenouvellement') && null !== $data->getCdapHDtDepotRenouvellement()) {
            $dataArray['cdapH_DtDepotRenouvellement'] = $data->getCdapHDtDepotRenouvellement()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('cdapHTauxIncapacite') && null !== $data->getCdapHTauxIncapacite()) {
            $dataArray['cdapH_TauxIncapacite'] = $data->getCdapHTauxIncapacite();
        }

        if ($data->isInitialized('accidentNature') && null !== $data->getAccidentNature()) {
            $dataArray['accident_Nature'] = $data->getAccidentNature();
        }

        if ($data->isInitialized('accidentDateDebut') && null !== $data->getAccidentDateDebut()) {
            $dataArray['accident_DateDebut'] = $data->getAccidentDateDebut()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('accidentTauxIPP') && null !== $data->getAccidentTauxIPP()) {
            $dataArray['accident_TauxIPP'] = $data->getAccidentTauxIPP();
        }

        if ($data->isInitialized('accidentCategoriePension') && null !== $data->getAccidentCategoriePension()) {
            $dataArray['accident_CategoriePension'] = $data->getAccidentCategoriePension();
        }

        if ($data->isInitialized('autreCategorie') && null !== $data->getAutreCategorie()) {
            $dataArray['autre_Categorie'] = $data->getAutreCategorie();
        }

        if ($data->isInitialized('autreDateDebut') && null !== $data->getAutreDateDebut()) {
            $dataArray['autre_DateDebut'] = $data->getAutreDateDebut()->format('Y-m-d\TH:i:s');
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [Handicap::class => false];
    }
}
