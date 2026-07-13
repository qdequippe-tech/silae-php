<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\StatistiquesProductionDocumentsSignes;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class StatistiquesProductionDocumentsSignesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return StatistiquesProductionDocumentsSignes::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && StatistiquesProductionDocumentsSignes::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new StatistiquesProductionDocumentsSignes();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        if (\array_key_exists('periode', $data) && null !== $data['periode']) {
            $object->setPeriode(\DateTime::createFromFormat('Y-m-d', $data['periode'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('periode', $data) && null === $data['periode']) {
            $object->setPeriode(null);
        }

        if (\array_key_exists('docSignes', $data) && null !== $data['docSignes']) {
            $object->setDocSignes($data['docSignes']);
        } elseif (\array_key_exists('docSignes', $data) && null === $data['docSignes']) {
            $object->setDocSignes(null);
        }

        if (\array_key_exists('docSortie', $data) && null !== $data['docSortie']) {
            $object->setDocSortie($data['docSortie']);
        } elseif (\array_key_exists('docSortie', $data) && null === $data['docSortie']) {
            $object->setDocSortie(null);
        }

        if (\array_key_exists('docSignesSantePrevoyance', $data) && null !== $data['docSignesSantePrevoyance']) {
            $object->setDocSignesSantePrevoyance($data['docSignesSantePrevoyance']);
        } elseif (\array_key_exists('docSignesSantePrevoyance', $data) && null === $data['docSignesSantePrevoyance']) {
            $object->setDocSignesSantePrevoyance(null);
        }

        if (\array_key_exists('signaturesFactures', $data) && null !== $data['signaturesFactures']) {
            $object->setSignaturesFactures($data['signaturesFactures']);
        } elseif (\array_key_exists('signaturesFactures', $data) && null === $data['signaturesFactures']) {
            $object->setSignaturesFactures(null);
        }

        if (\array_key_exists('signatairesFactures', $data) && null !== $data['signatairesFactures']) {
            $object->setSignatairesFactures($data['signatairesFactures']);
        } elseif (\array_key_exists('signatairesFactures', $data) && null === $data['signatairesFactures']) {
            $object->setSignatairesFactures(null);
        }

        if (\array_key_exists('signatairesFacturesDocSortie', $data) && null !== $data['signatairesFacturesDocSortie']) {
            $object->setSignatairesFacturesDocSortie($data['signatairesFacturesDocSortie']);
        } elseif (\array_key_exists('signatairesFacturesDocSortie', $data) && null === $data['signatairesFacturesDocSortie']) {
            $object->setSignatairesFacturesDocSortie(null);
        }

        if (\array_key_exists('signatairesFacturesDocSantePrevoyance', $data) && null !== $data['signatairesFacturesDocSantePrevoyance']) {
            $object->setSignatairesFacturesDocSantePrevoyance($data['signatairesFacturesDocSantePrevoyance']);
        } elseif (\array_key_exists('signatairesFacturesDocSantePrevoyance', $data) && null === $data['signatairesFacturesDocSantePrevoyance']) {
            $object->setSignatairesFacturesDocSantePrevoyance(null);
        }

        if (\array_key_exists('zoneSignature', $data) && null !== $data['zoneSignature']) {
            $object->setZoneSignature($data['zoneSignature']);
        } elseif (\array_key_exists('zoneSignature', $data) && null === $data['zoneSignature']) {
            $object->setZoneSignature(null);
        }

        if (\array_key_exists('zoneSignatureDocSortie', $data) && null !== $data['zoneSignatureDocSortie']) {
            $object->setZoneSignatureDocSortie($data['zoneSignatureDocSortie']);
        } elseif (\array_key_exists('zoneSignatureDocSortie', $data) && null === $data['zoneSignatureDocSortie']) {
            $object->setZoneSignatureDocSortie(null);
        }

        if (\array_key_exists('zoneSignatureDocSantePrevoyance', $data) && null !== $data['zoneSignatureDocSantePrevoyance']) {
            $object->setZoneSignatureDocSantePrevoyance($data['zoneSignatureDocSantePrevoyance']);
        } elseif (\array_key_exists('zoneSignatureDocSantePrevoyance', $data) && null === $data['zoneSignatureDocSantePrevoyance']) {
            $object->setZoneSignatureDocSantePrevoyance(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('periode') && null !== $data->getPeriode()) {
            $dataArray['periode'] = $data->getPeriode()->format('Y-m-d');
        }

        if ($data->isInitialized('docSignes') && null !== $data->getDocSignes()) {
            $dataArray['docSignes'] = $data->getDocSignes();
        }

        if ($data->isInitialized('docSortie') && null !== $data->getDocSortie()) {
            $dataArray['docSortie'] = $data->getDocSortie();
        }

        if ($data->isInitialized('docSignesSantePrevoyance') && null !== $data->getDocSignesSantePrevoyance()) {
            $dataArray['docSignesSantePrevoyance'] = $data->getDocSignesSantePrevoyance();
        }

        if ($data->isInitialized('signaturesFactures') && null !== $data->getSignaturesFactures()) {
            $dataArray['signaturesFactures'] = $data->getSignaturesFactures();
        }

        if ($data->isInitialized('signatairesFactures') && null !== $data->getSignatairesFactures()) {
            $dataArray['signatairesFactures'] = $data->getSignatairesFactures();
        }

        if ($data->isInitialized('signatairesFacturesDocSortie') && null !== $data->getSignatairesFacturesDocSortie()) {
            $dataArray['signatairesFacturesDocSortie'] = $data->getSignatairesFacturesDocSortie();
        }

        if ($data->isInitialized('signatairesFacturesDocSantePrevoyance') && null !== $data->getSignatairesFacturesDocSantePrevoyance()) {
            $dataArray['signatairesFacturesDocSantePrevoyance'] = $data->getSignatairesFacturesDocSantePrevoyance();
        }

        if ($data->isInitialized('zoneSignature') && null !== $data->getZoneSignature()) {
            $dataArray['zoneSignature'] = $data->getZoneSignature();
        }

        if ($data->isInitialized('zoneSignatureDocSortie') && null !== $data->getZoneSignatureDocSortie()) {
            $dataArray['zoneSignatureDocSortie'] = $data->getZoneSignatureDocSortie();
        }

        if ($data->isInitialized('zoneSignatureDocSantePrevoyance') && null !== $data->getZoneSignatureDocSantePrevoyance()) {
            $dataArray['zoneSignatureDocSantePrevoyance'] = $data->getZoneSignatureDocSantePrevoyance();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [StatistiquesProductionDocumentsSignes::class => false];
    }
}
