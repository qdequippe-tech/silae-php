<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SalarieBulletinCumulsResult;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalarieBulletinCumulsResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\SalarieBulletinCumulsResult' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof SalarieBulletinCumulsResult;
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
        $object = new SalarieBulletinCumulsResult();
        if (\array_key_exists('salaireDeBase', $data) && \is_int($data['salaireDeBase'])) {
            $data['salaireDeBase'] = (float) $data['salaireDeBase'];
        }
        if (\array_key_exists('brut', $data) && \is_int($data['brut'])) {
            $data['brut'] = (float) $data['brut'];
        }
        if (\array_key_exists('cumulRetenuesSD', $data) && \is_int($data['cumulRetenuesSD'])) {
            $data['cumulRetenuesSD'] = (float) $data['cumulRetenuesSD'];
        }
        if (\array_key_exists('cumulRetenuesSND', $data) && \is_int($data['cumulRetenuesSND'])) {
            $data['cumulRetenuesSND'] = (float) $data['cumulRetenuesSND'];
        }
        if (\array_key_exists('netImposable', $data) && \is_int($data['netImposable'])) {
            $data['netImposable'] = (float) $data['netImposable'];
        }
        if (\array_key_exists('netAPayerAvantImpot', $data) && \is_int($data['netAPayerAvantImpot'])) {
            $data['netAPayerAvantImpot'] = (float) $data['netAPayerAvantImpot'];
        }
        if (\array_key_exists('netAPayer', $data) && \is_int($data['netAPayer'])) {
            $data['netAPayer'] = (float) $data['netAPayer'];
        }
        if (\array_key_exists('impotSurLeRevenuPreleveALaSource', $data) && \is_int($data['impotSurLeRevenuPreleveALaSource'])) {
            $data['impotSurLeRevenuPreleveALaSource'] = (float) $data['impotSurLeRevenuPreleveALaSource'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('salaireDeBase', $data) && null !== $data['salaireDeBase']) {
            $object->setSalaireDeBase($data['salaireDeBase']);
        } elseif (\array_key_exists('salaireDeBase', $data) && null === $data['salaireDeBase']) {
            $object->setSalaireDeBase(null);
        }
        if (\array_key_exists('brut', $data) && null !== $data['brut']) {
            $object->setBrut($data['brut']);
        } elseif (\array_key_exists('brut', $data) && null === $data['brut']) {
            $object->setBrut(null);
        }
        if (\array_key_exists('cumulRetenuesSD', $data) && null !== $data['cumulRetenuesSD']) {
            $object->setCumulRetenuesSD($data['cumulRetenuesSD']);
        } elseif (\array_key_exists('cumulRetenuesSD', $data) && null === $data['cumulRetenuesSD']) {
            $object->setCumulRetenuesSD(null);
        }
        if (\array_key_exists('cumulRetenuesSND', $data) && null !== $data['cumulRetenuesSND']) {
            $object->setCumulRetenuesSND($data['cumulRetenuesSND']);
        } elseif (\array_key_exists('cumulRetenuesSND', $data) && null === $data['cumulRetenuesSND']) {
            $object->setCumulRetenuesSND(null);
        }
        if (\array_key_exists('netImposable', $data) && null !== $data['netImposable']) {
            $object->setNetImposable($data['netImposable']);
        } elseif (\array_key_exists('netImposable', $data) && null === $data['netImposable']) {
            $object->setNetImposable(null);
        }
        if (\array_key_exists('netAPayerAvantImpot', $data) && null !== $data['netAPayerAvantImpot']) {
            $object->setNetAPayerAvantImpot($data['netAPayerAvantImpot']);
        } elseif (\array_key_exists('netAPayerAvantImpot', $data) && null === $data['netAPayerAvantImpot']) {
            $object->setNetAPayerAvantImpot(null);
        }
        if (\array_key_exists('netAPayer', $data) && null !== $data['netAPayer']) {
            $object->setNetAPayer($data['netAPayer']);
        } elseif (\array_key_exists('netAPayer', $data) && null === $data['netAPayer']) {
            $object->setNetAPayer(null);
        }
        if (\array_key_exists('impotSurLeRevenuPreleveALaSource', $data) && null !== $data['impotSurLeRevenuPreleveALaSource']) {
            $object->setImpotSurLeRevenuPreleveALaSource($data['impotSurLeRevenuPreleveALaSource']);
        } elseif (\array_key_exists('impotSurLeRevenuPreleveALaSource', $data) && null === $data['impotSurLeRevenuPreleveALaSource']) {
            $object->setImpotSurLeRevenuPreleveALaSource(null);
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
        if ($object->isInitialized('salaireDeBase') && null !== $object->getSalaireDeBase()) {
            $data['salaireDeBase'] = $object->getSalaireDeBase();
        }
        if ($object->isInitialized('brut') && null !== $object->getBrut()) {
            $data['brut'] = $object->getBrut();
        }
        if ($object->isInitialized('cumulRetenuesSD') && null !== $object->getCumulRetenuesSD()) {
            $data['cumulRetenuesSD'] = $object->getCumulRetenuesSD();
        }
        if ($object->isInitialized('cumulRetenuesSND') && null !== $object->getCumulRetenuesSND()) {
            $data['cumulRetenuesSND'] = $object->getCumulRetenuesSND();
        }
        if ($object->isInitialized('netImposable') && null !== $object->getNetImposable()) {
            $data['netImposable'] = $object->getNetImposable();
        }
        if ($object->isInitialized('netAPayerAvantImpot') && null !== $object->getNetAPayerAvantImpot()) {
            $data['netAPayerAvantImpot'] = $object->getNetAPayerAvantImpot();
        }
        if ($object->isInitialized('netAPayer') && null !== $object->getNetAPayer()) {
            $data['netAPayer'] = $object->getNetAPayer();
        }
        if ($object->isInitialized('impotSurLeRevenuPreleveALaSource') && null !== $object->getImpotSurLeRevenuPreleveALaSource()) {
            $data['impotSurLeRevenuPreleveALaSource'] = $object->getImpotSurLeRevenuPreleveALaSource();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\SalarieBulletinCumulsResult' => false];
    }
}
