<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\RequeteSalarieBulletinLignesFiltres;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class RequeteSalarieBulletinLignesFiltresNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return RequeteSalarieBulletinLignesFiltres::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && RequeteSalarieBulletinLignesFiltres::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new RequeteSalarieBulletinLignesFiltres();
        if (\array_key_exists('exclureLignesNeutres', $data) && \is_int($data['exclureLignesNeutres'])) {
            $data['exclureLignesNeutres'] = (bool) $data['exclureLignesNeutres'];
        }

        if (\array_key_exists('exclureLignesNonNeutres', $data) && \is_int($data['exclureLignesNonNeutres'])) {
            $data['exclureLignesNonNeutres'] = (bool) $data['exclureLignesNonNeutres'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('codeLibelle', $data) && null !== $data['codeLibelle']) {
            $object->setCodeLibelle($data['codeLibelle']);
        } elseif (\array_key_exists('codeLibelle', $data) && null === $data['codeLibelle']) {
            $object->setCodeLibelle(null);
        }

        if (\array_key_exists('libelle', $data) && null !== $data['libelle']) {
            $object->setLibelle($data['libelle']);
        } elseif (\array_key_exists('libelle', $data) && null === $data['libelle']) {
            $object->setLibelle(null);
        }

        if (\array_key_exists('codeDucs', $data) && null !== $data['codeDucs']) {
            $object->setCodeDucs($data['codeDucs']);
        } elseif (\array_key_exists('codeDucs', $data) && null === $data['codeDucs']) {
            $object->setCodeDucs(null);
        }

        if (\array_key_exists('zone', $data) && null !== $data['zone']) {
            $object->setZone($data['zone']);
        } elseif (\array_key_exists('zone', $data) && null === $data['zone']) {
            $object->setZone(null);
        }

        if (\array_key_exists('marqueInterne', $data) && null !== $data['marqueInterne']) {
            $object->setMarqueInterne($data['marqueInterne']);
        } elseif (\array_key_exists('marqueInterne', $data) && null === $data['marqueInterne']) {
            $object->setMarqueInterne(null);
        }

        if (\array_key_exists('marque1', $data) && null !== $data['marque1']) {
            $object->setMarque1($data['marque1']);
        } elseif (\array_key_exists('marque1', $data) && null === $data['marque1']) {
            $object->setMarque1(null);
        }

        if (\array_key_exists('marque2', $data) && null !== $data['marque2']) {
            $object->setMarque2($data['marque2']);
        } elseif (\array_key_exists('marque2', $data) && null === $data['marque2']) {
            $object->setMarque2(null);
        }

        if (\array_key_exists('marqueDtDeb', $data) && null !== $data['marqueDtDeb']) {
            $object->setMarqueDtDeb(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['marqueDtDeb']));
        } elseif (\array_key_exists('marqueDtDeb', $data) && null === $data['marqueDtDeb']) {
            $object->setMarqueDtDeb(null);
        }

        if (\array_key_exists('marqueDtFin', $data) && null !== $data['marqueDtFin']) {
            $object->setMarqueDtFin(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['marqueDtFin']));
        } elseif (\array_key_exists('marqueDtFin', $data) && null === $data['marqueDtFin']) {
            $object->setMarqueDtFin(null);
        }

        if (\array_key_exists('compte4', $data) && null !== $data['compte4']) {
            $object->setCompte4($data['compte4']);
        } elseif (\array_key_exists('compte4', $data) && null === $data['compte4']) {
            $object->setCompte4(null);
        }

        if (\array_key_exists('compte6', $data) && null !== $data['compte6']) {
            $object->setCompte6($data['compte6']);
        } elseif (\array_key_exists('compte6', $data) && null === $data['compte6']) {
            $object->setCompte6(null);
        }

        if (\array_key_exists('exclureLignesNeutres', $data) && null !== $data['exclureLignesNeutres']) {
            $object->setExclureLignesNeutres($data['exclureLignesNeutres']);
        } elseif (\array_key_exists('exclureLignesNeutres', $data) && null === $data['exclureLignesNeutres']) {
            $object->setExclureLignesNeutres(null);
        }

        if (\array_key_exists('exclureLignesNonNeutres', $data) && null !== $data['exclureLignesNonNeutres']) {
            $object->setExclureLignesNonNeutres($data['exclureLignesNonNeutres']);
        } elseif (\array_key_exists('exclureLignesNonNeutres', $data) && null === $data['exclureLignesNonNeutres']) {
            $object->setExclureLignesNonNeutres(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('codeLibelle') && null !== $data->getCodeLibelle()) {
            $dataArray['codeLibelle'] = $data->getCodeLibelle();
        }

        if ($data->isInitialized('libelle') && null !== $data->getLibelle()) {
            $dataArray['libelle'] = $data->getLibelle();
        }

        if ($data->isInitialized('codeDucs') && null !== $data->getCodeDucs()) {
            $dataArray['codeDucs'] = $data->getCodeDucs();
        }

        if ($data->isInitialized('zone') && null !== $data->getZone()) {
            $dataArray['zone'] = $data->getZone();
        }

        if ($data->isInitialized('marqueInterne') && null !== $data->getMarqueInterne()) {
            $dataArray['marqueInterne'] = $data->getMarqueInterne();
        }

        if ($data->isInitialized('marque1') && null !== $data->getMarque1()) {
            $dataArray['marque1'] = $data->getMarque1();
        }

        if ($data->isInitialized('marque2') && null !== $data->getMarque2()) {
            $dataArray['marque2'] = $data->getMarque2();
        }

        if ($data->isInitialized('marqueDtDeb') && null !== $data->getMarqueDtDeb()) {
            $dataArray['marqueDtDeb'] = $data->getMarqueDtDeb()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('marqueDtFin') && null !== $data->getMarqueDtFin()) {
            $dataArray['marqueDtFin'] = $data->getMarqueDtFin()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('compte4') && null !== $data->getCompte4()) {
            $dataArray['compte4'] = $data->getCompte4();
        }

        if ($data->isInitialized('compte6') && null !== $data->getCompte6()) {
            $dataArray['compte6'] = $data->getCompte6();
        }

        if ($data->isInitialized('exclureLignesNeutres') && null !== $data->getExclureLignesNeutres()) {
            $dataArray['exclureLignesNeutres'] = $data->getExclureLignesNeutres();
        }

        if ($data->isInitialized('exclureLignesNonNeutres') && null !== $data->getExclureLignesNonNeutres()) {
            $dataArray['exclureLignesNonNeutres'] = $data->getExclureLignesNonNeutres();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [RequeteSalarieBulletinLignesFiltres::class => false];
    }
}
