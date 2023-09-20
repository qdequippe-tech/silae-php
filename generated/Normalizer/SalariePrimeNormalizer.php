<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SalariePrime;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalariePrimeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\SalariePrime' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof SalariePrime;
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
        $object = new SalariePrime();
        if (\array_key_exists('montantPrime', $data) && \is_int($data['montantPrime'])) {
            $data['montantPrime'] = (float) $data['montantPrime'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('periodePrime', $data) && null !== $data['periodePrime']) {
            $object->setPeriodePrime(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['periodePrime']));
        } elseif (\array_key_exists('periodePrime', $data) && null === $data['periodePrime']) {
            $object->setPeriodePrime(null);
        }
        if (\array_key_exists('codePrime', $data) && null !== $data['codePrime']) {
            $object->setCodePrime($data['codePrime']);
        } elseif (\array_key_exists('codePrime', $data) && null === $data['codePrime']) {
            $object->setCodePrime(null);
        }
        if (\array_key_exists('montantPrime', $data) && null !== $data['montantPrime']) {
            $object->setMontantPrime($data['montantPrime']);
        } elseif (\array_key_exists('montantPrime', $data) && null === $data['montantPrime']) {
            $object->setMontantPrime(null);
        }
        if (\array_key_exists('valeurChainePrime', $data) && null !== $data['valeurChainePrime']) {
            $object->setValeurChainePrime($data['valeurChainePrime']);
        } elseif (\array_key_exists('valeurChainePrime', $data) && null === $data['valeurChainePrime']) {
            $object->setValeurChainePrime(null);
        }
        if (\array_key_exists('primeNette', $data) && null !== $data['primeNette']) {
            $object->setPrimeNette($data['primeNette']);
        } elseif (\array_key_exists('primeNette', $data) && null === $data['primeNette']) {
            $object->setPrimeNette(null);
        }
        if (\array_key_exists('intituleBulletin', $data) && null !== $data['intituleBulletin']) {
            $object->setIntituleBulletin($data['intituleBulletin']);
        } elseif (\array_key_exists('intituleBulletin', $data) && null === $data['intituleBulletin']) {
            $object->setIntituleBulletin(null);
        }
        if (\array_key_exists('intituleCourt', $data) && null !== $data['intituleCourt']) {
            $object->setIntituleCourt($data['intituleCourt']);
        } elseif (\array_key_exists('intituleCourt', $data) && null === $data['intituleCourt']) {
            $object->setIntituleCourt(null);
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
        if ($object->isInitialized('periodePrime') && null !== $object->getPeriodePrime()) {
            $data['periodePrime'] = $object->getPeriodePrime()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('codePrime') && null !== $object->getCodePrime()) {
            $data['codePrime'] = $object->getCodePrime();
        }
        if ($object->isInitialized('montantPrime') && null !== $object->getMontantPrime()) {
            $data['montantPrime'] = $object->getMontantPrime();
        }
        if ($object->isInitialized('valeurChainePrime') && null !== $object->getValeurChainePrime()) {
            $data['valeurChainePrime'] = $object->getValeurChainePrime();
        }
        if ($object->isInitialized('primeNette') && null !== $object->getPrimeNette()) {
            $data['primeNette'] = $object->getPrimeNette();
        }
        if ($object->isInitialized('intituleBulletin') && null !== $object->getIntituleBulletin()) {
            $data['intituleBulletin'] = $object->getIntituleBulletin();
        }
        if ($object->isInitialized('intituleCourt') && null !== $object->getIntituleCourt()) {
            $data['intituleCourt'] = $object->getIntituleCourt();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\SalariePrime' => false];
    }
}
