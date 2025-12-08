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

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return SalariePrime::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && SalariePrime::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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

        if (\array_key_exists('primeNette', $data) && \is_int($data['primeNette'])) {
            $data['primeNette'] = (bool) $data['primeNette'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('periodePrime', $data) && null !== $data['periodePrime']) {
            $object->setPeriodePrime(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periodePrime']));
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

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('periodePrime') && null !== $data->getPeriodePrime()) {
            $dataArray['periodePrime'] = $data->getPeriodePrime()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('codePrime') && null !== $data->getCodePrime()) {
            $dataArray['codePrime'] = $data->getCodePrime();
        }

        if ($data->isInitialized('montantPrime') && null !== $data->getMontantPrime()) {
            $dataArray['montantPrime'] = $data->getMontantPrime();
        }

        if ($data->isInitialized('valeurChainePrime') && null !== $data->getValeurChainePrime()) {
            $dataArray['valeurChainePrime'] = $data->getValeurChainePrime();
        }

        if ($data->isInitialized('primeNette') && null !== $data->getPrimeNette()) {
            $dataArray['primeNette'] = $data->getPrimeNette();
        }

        if ($data->isInitialized('intituleBulletin') && null !== $data->getIntituleBulletin()) {
            $dataArray['intituleBulletin'] = $data->getIntituleBulletin();
        }

        if ($data->isInitialized('intituleCourt') && null !== $data->getIntituleCourt()) {
            $dataArray['intituleCourt'] = $data->getIntituleCourt();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [SalariePrime::class => false];
    }
}
