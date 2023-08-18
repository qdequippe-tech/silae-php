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

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\RequeteSalarieBulletinLignesFiltres' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof RequeteSalarieBulletinLignesFiltres;
    }

    /**
     * @param mixed|null $format
     * @param mixed      $data
     * @param mixed      $class
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new RequeteSalarieBulletinLignesFiltres();
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
            $object->setMarqueDtDeb(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['marqueDtDeb']));
        } elseif (\array_key_exists('marqueDtDeb', $data) && null === $data['marqueDtDeb']) {
            $object->setMarqueDtDeb(null);
        }
        if (\array_key_exists('marqueDtFin', $data) && null !== $data['marqueDtFin']) {
            $object->setMarqueDtFin(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['marqueDtFin']));
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

    /**
     * @param mixed|null $format
     * @param mixed      $object
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('codeLibelle') && null !== $object->getCodeLibelle()) {
            $data['codeLibelle'] = $object->getCodeLibelle();
        }
        if ($object->isInitialized('libelle') && null !== $object->getLibelle()) {
            $data['libelle'] = $object->getLibelle();
        }
        if ($object->isInitialized('codeDucs') && null !== $object->getCodeDucs()) {
            $data['codeDucs'] = $object->getCodeDucs();
        }
        if ($object->isInitialized('zone') && null !== $object->getZone()) {
            $data['zone'] = $object->getZone();
        }
        if ($object->isInitialized('marqueInterne') && null !== $object->getMarqueInterne()) {
            $data['marqueInterne'] = $object->getMarqueInterne();
        }
        if ($object->isInitialized('marque1') && null !== $object->getMarque1()) {
            $data['marque1'] = $object->getMarque1();
        }
        if ($object->isInitialized('marque2') && null !== $object->getMarque2()) {
            $data['marque2'] = $object->getMarque2();
        }
        if ($object->isInitialized('marqueDtDeb') && null !== $object->getMarqueDtDeb()) {
            $data['marqueDtDeb'] = $object->getMarqueDtDeb()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('marqueDtFin') && null !== $object->getMarqueDtFin()) {
            $data['marqueDtFin'] = $object->getMarqueDtFin()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('compte4') && null !== $object->getCompte4()) {
            $data['compte4'] = $object->getCompte4();
        }
        if ($object->isInitialized('compte6') && null !== $object->getCompte6()) {
            $data['compte6'] = $object->getCompte6();
        }
        if ($object->isInitialized('exclureLignesNeutres') && null !== $object->getExclureLignesNeutres()) {
            $data['exclureLignesNeutres'] = $object->getExclureLignesNeutres();
        }
        if ($object->isInitialized('exclureLignesNonNeutres') && null !== $object->getExclureLignesNonNeutres()) {
            $data['exclureLignesNonNeutres'] = $object->getExclureLignesNonNeutres();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\RequeteSalarieBulletinLignesFiltres' => false];
    }
}
