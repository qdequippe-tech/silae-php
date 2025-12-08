<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SalarieBulletinEnteteResult;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalarieBulletinEnteteResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return SalarieBulletinEnteteResult::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && SalarieBulletinEnteteResult::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new SalarieBulletinEnteteResult();
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

        if (\array_key_exists('bulletinOriginal', $data) && \is_int($data['bulletinOriginal'])) {
            $data['bulletinOriginal'] = (bool) $data['bulletinOriginal'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('matriculeSalarie', $data) && null !== $data['matriculeSalarie']) {
            $object->setMatriculeSalarie($data['matriculeSalarie']);
        } elseif (\array_key_exists('matriculeSalarie', $data) && null === $data['matriculeSalarie']) {
            $object->setMatriculeSalarie(null);
        }

        if (\array_key_exists('identifiantEmploi', $data) && null !== $data['identifiantEmploi']) {
            $object->setIdentifiantEmploi($data['identifiantEmploi']);
        } elseif (\array_key_exists('identifiantEmploi', $data) && null === $data['identifiantEmploi']) {
            $object->setIdentifiantEmploi(null);
        }

        if (\array_key_exists('bulletinOriginal', $data) && null !== $data['bulletinOriginal']) {
            $object->setBulletinOriginal($data['bulletinOriginal']);
        } elseif (\array_key_exists('bulletinOriginal', $data) && null === $data['bulletinOriginal']) {
            $object->setBulletinOriginal(null);
        }

        if (\array_key_exists('periode', $data) && null !== $data['periode']) {
            $object->setPeriode(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periode']));
        } elseif (\array_key_exists('periode', $data) && null === $data['periode']) {
            $object->setPeriode(null);
        }

        if (\array_key_exists('intituleEmploi', $data) && null !== $data['intituleEmploi']) {
            $object->setIntituleEmploi($data['intituleEmploi']);
        } elseif (\array_key_exists('intituleEmploi', $data) && null === $data['intituleEmploi']) {
            $object->setIntituleEmploi(null);
        }

        if (\array_key_exists('codeContratTravail', $data) && null !== $data['codeContratTravail']) {
            $object->setCodeContratTravail($data['codeContratTravail']);
        } elseif (\array_key_exists('codeContratTravail', $data) && null === $data['codeContratTravail']) {
            $object->setCodeContratTravail(null);
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

        if (\array_key_exists('indicePeriode', $data) && null !== $data['indicePeriode']) {
            $object->setIndicePeriode($data['indicePeriode']);
        } elseif (\array_key_exists('indicePeriode', $data) && null === $data['indicePeriode']) {
            $object->setIndicePeriode(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('matriculeSalarie') && null !== $data->getMatriculeSalarie()) {
            $dataArray['matriculeSalarie'] = $data->getMatriculeSalarie();
        }

        if ($data->isInitialized('identifiantEmploi') && null !== $data->getIdentifiantEmploi()) {
            $dataArray['identifiantEmploi'] = $data->getIdentifiantEmploi();
        }

        if ($data->isInitialized('bulletinOriginal') && null !== $data->getBulletinOriginal()) {
            $dataArray['bulletinOriginal'] = $data->getBulletinOriginal();
        }

        if ($data->isInitialized('periode') && null !== $data->getPeriode()) {
            $dataArray['periode'] = $data->getPeriode()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('intituleEmploi') && null !== $data->getIntituleEmploi()) {
            $dataArray['intituleEmploi'] = $data->getIntituleEmploi();
        }

        if ($data->isInitialized('codeContratTravail') && null !== $data->getCodeContratTravail()) {
            $dataArray['codeContratTravail'] = $data->getCodeContratTravail();
        }

        if ($data->isInitialized('brut') && null !== $data->getBrut()) {
            $dataArray['brut'] = $data->getBrut();
        }

        if ($data->isInitialized('netAPayer') && null !== $data->getNetAPayer()) {
            $dataArray['netAPayer'] = $data->getNetAPayer();
        }

        if ($data->isInitialized('cumulRetenuesSD') && null !== $data->getCumulRetenuesSD()) {
            $dataArray['cumulRetenuesSD'] = $data->getCumulRetenuesSD();
        }

        if ($data->isInitialized('cumulRetenuesSND') && null !== $data->getCumulRetenuesSND()) {
            $dataArray['cumulRetenuesSND'] = $data->getCumulRetenuesSND();
        }

        if ($data->isInitialized('cumulRetenuesP') && null !== $data->getCumulRetenuesP()) {
            $dataArray['cumulRetenuesP'] = $data->getCumulRetenuesP();
        }

        if ($data->isInitialized('supplementCoutGlobal') && null !== $data->getSupplementCoutGlobal()) {
            $dataArray['supplementCoutGlobal'] = $data->getSupplementCoutGlobal();
        }

        if ($data->isInitialized('netImposable') && null !== $data->getNetImposable()) {
            $dataArray['netImposable'] = $data->getNetImposable();
        }

        if ($data->isInitialized('heuresNormales') && null !== $data->getHeuresNormales()) {
            $dataArray['heuresNormales'] = $data->getHeuresNormales();
        }

        if ($data->isInitialized('heuresMajorees') && null !== $data->getHeuresMajorees()) {
            $dataArray['heuresMajorees'] = $data->getHeuresMajorees();
        }

        if ($data->isInitialized('indicePeriode') && null !== $data->getIndicePeriode()) {
            $dataArray['indicePeriode'] = $data->getIndicePeriode();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [SalarieBulletinEnteteResult::class => false];
    }
}
