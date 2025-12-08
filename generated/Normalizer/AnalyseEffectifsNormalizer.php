<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\AnalyseEffectifs;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AnalyseEffectifsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return AnalyseEffectifs::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && AnalyseEffectifs::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new AnalyseEffectifs();
        if (\array_key_exists('effectifSecuriteSociale', $data) && \is_int($data['effectifSecuriteSociale'])) {
            $data['effectifSecuriteSociale'] = (float) $data['effectifSecuriteSociale'];
        }

        if (\array_key_exists('effectifCodeDuTravail', $data) && \is_int($data['effectifCodeDuTravail'])) {
            $data['effectifCodeDuTravail'] = (float) $data['effectifCodeDuTravail'];
        }

        if (\array_key_exists('effectifOeth', $data) && \is_int($data['effectifOeth'])) {
            $data['effectifOeth'] = (float) $data['effectifOeth'];
        }

        if (\array_key_exists('effectifBoeth', $data) && \is_int($data['effectifBoeth'])) {
            $data['effectifBoeth'] = (float) $data['effectifBoeth'];
        }

        if (\array_key_exists('effectifEcap', $data) && \is_int($data['effectifEcap'])) {
            $data['effectifEcap'] = (float) $data['effectifEcap'];
        }

        if (\array_key_exists('effectifCsa', $data) && \is_int($data['effectifCsa'])) {
            $data['effectifCsa'] = (float) $data['effectifCsa'];
        }

        if (\array_key_exists('effectifCsaCfip', $data) && \is_int($data['effectifCsaCfip'])) {
            $data['effectifCsaCfip'] = (float) $data['effectifCsaCfip'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('numeroDossier', $data) && null !== $data['numeroDossier']) {
            $object->setNumeroDossier($data['numeroDossier']);
        } elseif (\array_key_exists('numeroDossier', $data) && null === $data['numeroDossier']) {
            $object->setNumeroDossier(null);
        }

        if (\array_key_exists('codeAgence', $data) && null !== $data['codeAgence']) {
            $object->setCodeAgence($data['codeAgence']);
        } elseif (\array_key_exists('codeAgence', $data) && null === $data['codeAgence']) {
            $object->setCodeAgence(null);
        }

        if (\array_key_exists('effectifSecuriteSociale', $data) && null !== $data['effectifSecuriteSociale']) {
            $object->setEffectifSecuriteSociale($data['effectifSecuriteSociale']);
        } elseif (\array_key_exists('effectifSecuriteSociale', $data) && null === $data['effectifSecuriteSociale']) {
            $object->setEffectifSecuriteSociale(null);
        }

        if (\array_key_exists('effectifCodeDuTravail', $data) && null !== $data['effectifCodeDuTravail']) {
            $object->setEffectifCodeDuTravail($data['effectifCodeDuTravail']);
        } elseif (\array_key_exists('effectifCodeDuTravail', $data) && null === $data['effectifCodeDuTravail']) {
            $object->setEffectifCodeDuTravail(null);
        }

        if (\array_key_exists('effectifOeth', $data) && null !== $data['effectifOeth']) {
            $object->setEffectifOeth($data['effectifOeth']);
        } elseif (\array_key_exists('effectifOeth', $data) && null === $data['effectifOeth']) {
            $object->setEffectifOeth(null);
        }

        if (\array_key_exists('effectifBoeth', $data) && null !== $data['effectifBoeth']) {
            $object->setEffectifBoeth($data['effectifBoeth']);
        } elseif (\array_key_exists('effectifBoeth', $data) && null === $data['effectifBoeth']) {
            $object->setEffectifBoeth(null);
        }

        if (\array_key_exists('effectifEcap', $data) && null !== $data['effectifEcap']) {
            $object->setEffectifEcap($data['effectifEcap']);
        } elseif (\array_key_exists('effectifEcap', $data) && null === $data['effectifEcap']) {
            $object->setEffectifEcap(null);
        }

        if (\array_key_exists('effectifCsa', $data) && null !== $data['effectifCsa']) {
            $object->setEffectifCsa($data['effectifCsa']);
        } elseif (\array_key_exists('effectifCsa', $data) && null === $data['effectifCsa']) {
            $object->setEffectifCsa(null);
        }

        if (\array_key_exists('effectifCsaCfip', $data) && null !== $data['effectifCsaCfip']) {
            $object->setEffectifCsaCfip($data['effectifCsaCfip']);
        } elseif (\array_key_exists('effectifCsaCfip', $data) && null === $data['effectifCsaCfip']) {
            $object->setEffectifCsaCfip(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('numeroDossier') && null !== $data->getNumeroDossier()) {
            $dataArray['numeroDossier'] = $data->getNumeroDossier();
        }

        if ($data->isInitialized('codeAgence') && null !== $data->getCodeAgence()) {
            $dataArray['codeAgence'] = $data->getCodeAgence();
        }

        if ($data->isInitialized('effectifSecuriteSociale') && null !== $data->getEffectifSecuriteSociale()) {
            $dataArray['effectifSecuriteSociale'] = $data->getEffectifSecuriteSociale();
        }

        if ($data->isInitialized('effectifCodeDuTravail') && null !== $data->getEffectifCodeDuTravail()) {
            $dataArray['effectifCodeDuTravail'] = $data->getEffectifCodeDuTravail();
        }

        if ($data->isInitialized('effectifOeth') && null !== $data->getEffectifOeth()) {
            $dataArray['effectifOeth'] = $data->getEffectifOeth();
        }

        if ($data->isInitialized('effectifBoeth') && null !== $data->getEffectifBoeth()) {
            $dataArray['effectifBoeth'] = $data->getEffectifBoeth();
        }

        if ($data->isInitialized('effectifEcap') && null !== $data->getEffectifEcap()) {
            $dataArray['effectifEcap'] = $data->getEffectifEcap();
        }

        if ($data->isInitialized('effectifCsa') && null !== $data->getEffectifCsa()) {
            $dataArray['effectifCsa'] = $data->getEffectifCsa();
        }

        if ($data->isInitialized('effectifCsaCfip') && null !== $data->getEffectifCsaCfip()) {
            $dataArray['effectifCsaCfip'] = $data->getEffectifCsaCfip();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [AnalyseEffectifs::class => false];
    }
}
