<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\AcquisitionContenuPartielDSNRequest;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AcquisitionContenuPartielDSNRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return AcquisitionContenuPartielDSNRequest::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && AcquisitionContenuPartielDSNRequest::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new AcquisitionContenuPartielDSNRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('nomInterneEtablissement', $data) && null !== $data['nomInterneEtablissement']) {
            $object->setNomInterneEtablissement($data['nomInterneEtablissement']);
        } elseif (\array_key_exists('nomInterneEtablissement', $data) && null === $data['nomInterneEtablissement']) {
            $object->setNomInterneEtablissement(null);
        }

        if (\array_key_exists('codeOrganisme', $data) && null !== $data['codeOrganisme']) {
            $object->setCodeOrganisme($data['codeOrganisme']);
        } elseif (\array_key_exists('codeOrganisme', $data) && null === $data['codeOrganisme']) {
            $object->setCodeOrganisme(null);
        }

        if (\array_key_exists('numeroAffiliation', $data) && null !== $data['numeroAffiliation']) {
            $object->setNumeroAffiliation($data['numeroAffiliation']);
        } elseif (\array_key_exists('numeroAffiliation', $data) && null === $data['numeroAffiliation']) {
            $object->setNumeroAffiliation(null);
        }

        if (\array_key_exists('typeDSN', $data) && null !== $data['typeDSN']) {
            $object->setTypeDSN($data['typeDSN']);
        } elseif (\array_key_exists('typeDSN', $data) && null === $data['typeDSN']) {
            $object->setTypeDSN(null);
        }

        if (\array_key_exists('segments', $data) && null !== $data['segments']) {
            $values = [];
            foreach ($data['segments'] as $value) {
                $values[] = $value;
            }

            $object->setSegments($values);
        } elseif (\array_key_exists('segments', $data) && null === $data['segments']) {
            $object->setSegments(null);
        }

        if (\array_key_exists('fraction', $data) && null !== $data['fraction']) {
            $object->setFraction($data['fraction']);
        } elseif (\array_key_exists('fraction', $data) && null === $data['fraction']) {
            $object->setFraction(null);
        }

        if (\array_key_exists('periode', $data) && null !== $data['periode']) {
            $object->setPeriode(\DateTime::createFromFormat('Y-m-d', $data['periode'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('periode', $data) && null === $data['periode']) {
            $object->setPeriode(null);
        }

        if (\array_key_exists('numeroDossier', $data) && null !== $data['numeroDossier']) {
            $object->setNumeroDossier($data['numeroDossier']);
        } elseif (\array_key_exists('numeroDossier', $data) && null === $data['numeroDossier']) {
            $object->setNumeroDossier(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('nomInterneEtablissement') && null !== $data->getNomInterneEtablissement()) {
            $dataArray['nomInterneEtablissement'] = $data->getNomInterneEtablissement();
        }

        if ($data->isInitialized('codeOrganisme') && null !== $data->getCodeOrganisme()) {
            $dataArray['codeOrganisme'] = $data->getCodeOrganisme();
        }

        if ($data->isInitialized('numeroAffiliation') && null !== $data->getNumeroAffiliation()) {
            $dataArray['numeroAffiliation'] = $data->getNumeroAffiliation();
        }

        if ($data->isInitialized('typeDSN') && null !== $data->getTypeDSN()) {
            $dataArray['typeDSN'] = $data->getTypeDSN();
        }

        if ($data->isInitialized('segments') && null !== $data->getSegments()) {
            $values = [];
            foreach ($data->getSegments() as $value) {
                $values[] = $value;
            }

            $dataArray['segments'] = $values;
        }

        if ($data->isInitialized('fraction') && null !== $data->getFraction()) {
            $dataArray['fraction'] = $data->getFraction();
        }

        if ($data->isInitialized('periode') && null !== $data->getPeriode()) {
            $dataArray['periode'] = $data->getPeriode()->format('Y-m-d');
        }

        $dataArray['numeroDossier'] = $data->getNumeroDossier();

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [AcquisitionContenuPartielDSNRequest::class => false];
    }
}
