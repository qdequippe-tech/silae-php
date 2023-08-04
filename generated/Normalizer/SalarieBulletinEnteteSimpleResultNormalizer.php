<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SalarieBulletinEnteteSimpleResult;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalarieBulletinEnteteSimpleResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\SalarieBulletinEnteteSimpleResult' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'QdequippeTech\\Silae\\Api\\Model\\SalarieBulletinEnteteSimpleResult' === $data::class;
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
        $object = new SalarieBulletinEnteteSimpleResult();
        if (\array_key_exists('brut', $data) && \is_int($data['brut'])) {
            $data['brut'] = (float) $data['brut'];
        }
        if (\array_key_exists('netAPayer', $data) && \is_int($data['netAPayer'])) {
            $data['netAPayer'] = (float) $data['netAPayer'];
        }
        if (\array_key_exists('cumulRetenuesSD', $data) && \is_int($data['cumulRetenuesSD'])) {
            $data['cumulRetenuesSD'] = (float) $data['cumulRetenuesSD'];
        }
        if (\array_key_exists('cumulRetenuesSND', $data) && \is_int($data['cumulRetenuesSND'])) {
            $data['cumulRetenuesSND'] = (float) $data['cumulRetenuesSND'];
        }
        if (\array_key_exists('cumulRetenuesP', $data) && \is_int($data['cumulRetenuesP'])) {
            $data['cumulRetenuesP'] = (float) $data['cumulRetenuesP'];
        }
        if (\array_key_exists('supplementCoutGlobal', $data) && \is_int($data['supplementCoutGlobal'])) {
            $data['supplementCoutGlobal'] = (float) $data['supplementCoutGlobal'];
        }
        if (\array_key_exists('netImposable', $data) && \is_int($data['netImposable'])) {
            $data['netImposable'] = (float) $data['netImposable'];
        }
        if (\array_key_exists('heuresNormales', $data) && \is_int($data['heuresNormales'])) {
            $data['heuresNormales'] = (float) $data['heuresNormales'];
        }
        if (\array_key_exists('heuresMajorees', $data) && \is_int($data['heuresMajorees'])) {
            $data['heuresMajorees'] = (float) $data['heuresMajorees'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('bulletinOriginal', $data) && null !== $data['bulletinOriginal']) {
            $object->setBulletinOriginal($data['bulletinOriginal']);
        } elseif (\array_key_exists('bulletinOriginal', $data) && null === $data['bulletinOriginal']) {
            $object->setBulletinOriginal(null);
        }
        if (\array_key_exists('brut', $data) && null !== $data['brut']) {
            $object->setBrut($data['brut']);
        } elseif (\array_key_exists('brut', $data) && null === $data['brut']) {
            $object->setBrut(null);
        }
        if (\array_key_exists('netAPayer', $data) && null !== $data['netAPayer']) {
            $object->setNetAPayer($data['netAPayer']);
        } elseif (\array_key_exists('netAPayer', $data) && null === $data['netAPayer']) {
            $object->setNetAPayer(null);
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
        if (\array_key_exists('cumulRetenuesP', $data) && null !== $data['cumulRetenuesP']) {
            $object->setCumulRetenuesP($data['cumulRetenuesP']);
        } elseif (\array_key_exists('cumulRetenuesP', $data) && null === $data['cumulRetenuesP']) {
            $object->setCumulRetenuesP(null);
        }
        if (\array_key_exists('supplementCoutGlobal', $data) && null !== $data['supplementCoutGlobal']) {
            $object->setSupplementCoutGlobal($data['supplementCoutGlobal']);
        } elseif (\array_key_exists('supplementCoutGlobal', $data) && null === $data['supplementCoutGlobal']) {
            $object->setSupplementCoutGlobal(null);
        }
        if (\array_key_exists('netImposable', $data) && null !== $data['netImposable']) {
            $object->setNetImposable($data['netImposable']);
        } elseif (\array_key_exists('netImposable', $data) && null === $data['netImposable']) {
            $object->setNetImposable(null);
        }
        if (\array_key_exists('heuresNormales', $data) && null !== $data['heuresNormales']) {
            $object->setHeuresNormales($data['heuresNormales']);
        } elseif (\array_key_exists('heuresNormales', $data) && null === $data['heuresNormales']) {
            $object->setHeuresNormales(null);
        }
        if (\array_key_exists('heuresMajorees', $data) && null !== $data['heuresMajorees']) {
            $object->setHeuresMajorees($data['heuresMajorees']);
        } elseif (\array_key_exists('heuresMajorees', $data) && null === $data['heuresMajorees']) {
            $object->setHeuresMajorees(null);
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
        if ($object->isInitialized('bulletinOriginal') && null !== $object->getBulletinOriginal()) {
            $data['bulletinOriginal'] = $object->getBulletinOriginal();
        }
        if ($object->isInitialized('brut') && null !== $object->getBrut()) {
            $data['brut'] = $object->getBrut();
        }
        if ($object->isInitialized('netAPayer') && null !== $object->getNetAPayer()) {
            $data['netAPayer'] = $object->getNetAPayer();
        }
        if ($object->isInitialized('cumulRetenuesSD') && null !== $object->getCumulRetenuesSD()) {
            $data['cumulRetenuesSD'] = $object->getCumulRetenuesSD();
        }
        if ($object->isInitialized('cumulRetenuesSND') && null !== $object->getCumulRetenuesSND()) {
            $data['cumulRetenuesSND'] = $object->getCumulRetenuesSND();
        }
        if ($object->isInitialized('cumulRetenuesP') && null !== $object->getCumulRetenuesP()) {
            $data['cumulRetenuesP'] = $object->getCumulRetenuesP();
        }
        if ($object->isInitialized('supplementCoutGlobal') && null !== $object->getSupplementCoutGlobal()) {
            $data['supplementCoutGlobal'] = $object->getSupplementCoutGlobal();
        }
        if ($object->isInitialized('netImposable') && null !== $object->getNetImposable()) {
            $data['netImposable'] = $object->getNetImposable();
        }
        if ($object->isInitialized('heuresNormales') && null !== $object->getHeuresNormales()) {
            $data['heuresNormales'] = $object->getHeuresNormales();
        }
        if ($object->isInitialized('heuresMajorees') && null !== $object->getHeuresMajorees()) {
            $data['heuresMajorees'] = $object->getHeuresMajorees();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\SalarieBulletinEnteteSimpleResult' => false];
    }
}
