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

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return SalarieBulletinCumulsResult::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && SalarieBulletinCumulsResult::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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

        if (\array_key_exists('plafondSecuriteSocial', $data) && \is_int($data['plafondSecuriteSocial'])) {
            $data['plafondSecuriteSocial'] = (float) $data['plafondSecuriteSocial'];
        }

        if (\array_key_exists('nombreHeuresTravaillees', $data) && \is_int($data['nombreHeuresTravaillees'])) {
            $data['nombreHeuresTravaillees'] = (float) $data['nombreHeuresTravaillees'];
        }

        if (\array_key_exists('nombreJoursTravailees', $data) && \is_int($data['nombreJoursTravailees'])) {
            $data['nombreJoursTravailees'] = (float) $data['nombreJoursTravailees'];
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

        if (\array_key_exists('plafondSecuriteSocial', $data) && null !== $data['plafondSecuriteSocial']) {
            $object->setPlafondSecuriteSocial($data['plafondSecuriteSocial']);
        } elseif (\array_key_exists('plafondSecuriteSocial', $data) && null === $data['plafondSecuriteSocial']) {
            $object->setPlafondSecuriteSocial(null);
        }

        if (\array_key_exists('nombreHeuresTravaillees', $data) && null !== $data['nombreHeuresTravaillees']) {
            $object->setNombreHeuresTravaillees($data['nombreHeuresTravaillees']);
        } elseif (\array_key_exists('nombreHeuresTravaillees', $data) && null === $data['nombreHeuresTravaillees']) {
            $object->setNombreHeuresTravaillees(null);
        }

        if (\array_key_exists('nombreJoursTravailees', $data) && null !== $data['nombreJoursTravailees']) {
            $object->setNombreJoursTravailees($data['nombreJoursTravailees']);
        } elseif (\array_key_exists('nombreJoursTravailees', $data) && null === $data['nombreJoursTravailees']) {
            $object->setNombreJoursTravailees(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('salaireDeBase') && null !== $data->getSalaireDeBase()) {
            $dataArray['salaireDeBase'] = $data->getSalaireDeBase();
        }

        if ($data->isInitialized('brut') && null !== $data->getBrut()) {
            $dataArray['brut'] = $data->getBrut();
        }

        if ($data->isInitialized('cumulRetenuesSD') && null !== $data->getCumulRetenuesSD()) {
            $dataArray['cumulRetenuesSD'] = $data->getCumulRetenuesSD();
        }

        if ($data->isInitialized('cumulRetenuesSND') && null !== $data->getCumulRetenuesSND()) {
            $dataArray['cumulRetenuesSND'] = $data->getCumulRetenuesSND();
        }

        if ($data->isInitialized('netImposable') && null !== $data->getNetImposable()) {
            $dataArray['netImposable'] = $data->getNetImposable();
        }

        if ($data->isInitialized('netAPayerAvantImpot') && null !== $data->getNetAPayerAvantImpot()) {
            $dataArray['netAPayerAvantImpot'] = $data->getNetAPayerAvantImpot();
        }

        if ($data->isInitialized('netAPayer') && null !== $data->getNetAPayer()) {
            $dataArray['netAPayer'] = $data->getNetAPayer();
        }

        if ($data->isInitialized('impotSurLeRevenuPreleveALaSource') && null !== $data->getImpotSurLeRevenuPreleveALaSource()) {
            $dataArray['impotSurLeRevenuPreleveALaSource'] = $data->getImpotSurLeRevenuPreleveALaSource();
        }

        if ($data->isInitialized('plafondSecuriteSocial') && null !== $data->getPlafondSecuriteSocial()) {
            $dataArray['plafondSecuriteSocial'] = $data->getPlafondSecuriteSocial();
        }

        if ($data->isInitialized('nombreHeuresTravaillees') && null !== $data->getNombreHeuresTravaillees()) {
            $dataArray['nombreHeuresTravaillees'] = $data->getNombreHeuresTravaillees();
        }

        if ($data->isInitialized('nombreJoursTravailees') && null !== $data->getNombreJoursTravailees()) {
            $dataArray['nombreJoursTravailees'] = $data->getNombreJoursTravailees();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [SalarieBulletinCumulsResult::class => false];
    }
}
