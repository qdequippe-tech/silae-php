<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\DSNMensuelle;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class DSNMensuelleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return DSNMensuelle::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && DSNMensuelle::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new DSNMensuelle();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('etablissement', $data) && null !== $data['etablissement']) {
            $object->setEtablissement($data['etablissement']);
        } elseif (\array_key_exists('etablissement', $data) && null === $data['etablissement']) {
            $object->setEtablissement(null);
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

        if (\array_key_exists('siret', $data) && null !== $data['siret']) {
            $object->setSiret($data['siret']);
        } elseif (\array_key_exists('siret', $data) && null === $data['siret']) {
            $object->setSiret(null);
        }

        if (\array_key_exists('fraction', $data) && null !== $data['fraction']) {
            $object->setFraction($data['fraction']);
        } elseif (\array_key_exists('fraction', $data) && null === $data['fraction']) {
            $object->setFraction(null);
        }

        if (\array_key_exists('dateEnvoiDSN', $data) && null !== $data['dateEnvoiDSN']) {
            $object->setDateEnvoiDSN(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateEnvoiDSN']));
        } elseif (\array_key_exists('dateEnvoiDSN', $data) && null === $data['dateEnvoiDSN']) {
            $object->setDateEnvoiDSN(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('etablissement') && null !== $data->getEtablissement()) {
            $dataArray['etablissement'] = $data->getEtablissement();
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

        if ($data->isInitialized('siret') && null !== $data->getSiret()) {
            $dataArray['siret'] = $data->getSiret();
        }

        if ($data->isInitialized('fraction') && null !== $data->getFraction()) {
            $dataArray['fraction'] = $data->getFraction();
        }

        if ($data->isInitialized('dateEnvoiDSN') && null !== $data->getDateEnvoiDSN()) {
            $dataArray['dateEnvoiDSN'] = $data->getDateEnvoiDSN()->format('Y-m-d\TH:i:s');
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [DSNMensuelle::class => false];
    }
}
