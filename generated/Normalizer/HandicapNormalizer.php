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

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\Handicap' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'QdequippeTech\\Silae\\Api\\Model\\Handicap' === $data::class;
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
        $object = new Handicap();
        if (\array_key_exists('cdapH_TauxIncapacite', $data) && \is_int($data['cdapH_TauxIncapacite'])) {
            $data['cdapH_TauxIncapacite'] = (float) $data['cdapH_TauxIncapacite'];
        }
        if (\array_key_exists('accident_TauxIPP', $data) && \is_int($data['accident_TauxIPP'])) {
            $data['accident_TauxIPP'] = (float) $data['accident_TauxIPP'];
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
            $object->setCdapHDateDebut(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['cdapH_DateDebut']));
        } elseif (\array_key_exists('cdapH_DateDebut', $data) && null === $data['cdapH_DateDebut']) {
            $object->setCdapHDateDebut(null);
        }
        if (\array_key_exists('cdapH_DateFin', $data) && null !== $data['cdapH_DateFin']) {
            $object->setCdapHDateFin(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['cdapH_DateFin']));
        } elseif (\array_key_exists('cdapH_DateFin', $data) && null === $data['cdapH_DateFin']) {
            $object->setCdapHDateFin(null);
        }
        if (\array_key_exists('cdapH_DtDepotRenouvellement', $data) && null !== $data['cdapH_DtDepotRenouvellement']) {
            $object->setCdapHDtDepotRenouvellement(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['cdapH_DtDepotRenouvellement']));
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
            $object->setAccidentDateDebut(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['accident_DateDebut']));
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
            $object->setAutreDateDebut(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['autre_DateDebut']));
        } elseif (\array_key_exists('autre_DateDebut', $data) && null === $data['autre_DateDebut']) {
            $object->setAutreDateDebut(null);
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
        if ($object->isInitialized('cdapHRQTH') && null !== $object->getCdapHRQTH()) {
            $data['cdapH_RQTH'] = $object->getCdapHRQTH();
        }
        if ($object->isInitialized('cdapHAAH') && null !== $object->getCdapHAAH()) {
            $data['cdapH_AAH'] = $object->getCdapHAAH();
        }
        if ($object->isInitialized('cdapHCarteInvalidite') && null !== $object->getCdapHCarteInvalidite()) {
            $data['cdapH_CarteInvalidite'] = $object->getCdapHCarteInvalidite();
        }
        if ($object->isInitialized('cdapHDateDebut') && null !== $object->getCdapHDateDebut()) {
            $data['cdapH_DateDebut'] = $object->getCdapHDateDebut()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('cdapHDateFin') && null !== $object->getCdapHDateFin()) {
            $data['cdapH_DateFin'] = $object->getCdapHDateFin()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('cdapHDtDepotRenouvellement') && null !== $object->getCdapHDtDepotRenouvellement()) {
            $data['cdapH_DtDepotRenouvellement'] = $object->getCdapHDtDepotRenouvellement()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('cdapHTauxIncapacite') && null !== $object->getCdapHTauxIncapacite()) {
            $data['cdapH_TauxIncapacite'] = $object->getCdapHTauxIncapacite();
        }
        if ($object->isInitialized('accidentNature') && null !== $object->getAccidentNature()) {
            $data['accident_Nature'] = $object->getAccidentNature();
        }
        if ($object->isInitialized('accidentDateDebut') && null !== $object->getAccidentDateDebut()) {
            $data['accident_DateDebut'] = $object->getAccidentDateDebut()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('accidentTauxIPP') && null !== $object->getAccidentTauxIPP()) {
            $data['accident_TauxIPP'] = $object->getAccidentTauxIPP();
        }
        if ($object->isInitialized('accidentCategoriePension') && null !== $object->getAccidentCategoriePension()) {
            $data['accident_CategoriePension'] = $object->getAccidentCategoriePension();
        }
        if ($object->isInitialized('autreCategorie') && null !== $object->getAutreCategorie()) {
            $data['autre_Categorie'] = $object->getAutreCategorie();
        }
        if ($object->isInitialized('autreDateDebut') && null !== $object->getAutreDateDebut()) {
            $data['autre_DateDebut'] = $object->getAutreDateDebut()->format('Y-m-d\\TH:i:sP');
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\Handicap' => false];
    }
}
