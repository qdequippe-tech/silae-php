<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\ListeDSNEvenementiellesRequest;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ListeDSNEvenementiellesRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return ListeDSNEvenementiellesRequest::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && ListeDSNEvenementiellesRequest::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new ListeDSNEvenementiellesRequest();
        if (\array_key_exists('afficherDSIJ', $data) && \is_int($data['afficherDSIJ'])) {
            $data['afficherDSIJ'] = (bool) $data['afficherDSIJ'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('dateDebut', $data) && null !== $data['dateDebut']) {
            $object->setDateDebut(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateDebut']));
        } elseif (\array_key_exists('dateDebut', $data) && null === $data['dateDebut']) {
            $object->setDateDebut(null);
        }

        if (\array_key_exists('dateFin', $data) && null !== $data['dateFin']) {
            $object->setDateFin(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateFin']));
        } elseif (\array_key_exists('dateFin', $data) && null === $data['dateFin']) {
            $object->setDateFin(null);
        }

        if (\array_key_exists('dateDebutDepot', $data) && null !== $data['dateDebutDepot']) {
            $object->setDateDebutDepot(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateDebutDepot']));
        } elseif (\array_key_exists('dateDebutDepot', $data) && null === $data['dateDebutDepot']) {
            $object->setDateDebutDepot(null);
        }

        if (\array_key_exists('dateFinDepot', $data) && null !== $data['dateFinDepot']) {
            $object->setDateFinDepot(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateFinDepot']));
        } elseif (\array_key_exists('dateFinDepot', $data) && null === $data['dateFinDepot']) {
            $object->setDateFinDepot(null);
        }

        if (\array_key_exists('typeDSN', $data) && null !== $data['typeDSN']) {
            $object->setTypeDSN($data['typeDSN']);
        } elseif (\array_key_exists('typeDSN', $data) && null === $data['typeDSN']) {
            $object->setTypeDSN(null);
        }

        if (\array_key_exists('afficherDSIJ', $data) && null !== $data['afficherDSIJ']) {
            $object->setAfficherDSIJ($data['afficherDSIJ']);
        } elseif (\array_key_exists('afficherDSIJ', $data) && null === $data['afficherDSIJ']) {
            $object->setAfficherDSIJ(null);
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
        if ($data->isInitialized('dateDebut') && null !== $data->getDateDebut()) {
            $dataArray['dateDebut'] = $data->getDateDebut()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('dateFin') && null !== $data->getDateFin()) {
            $dataArray['dateFin'] = $data->getDateFin()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('dateDebutDepot') && null !== $data->getDateDebutDepot()) {
            $dataArray['dateDebutDepot'] = $data->getDateDebutDepot()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('dateFinDepot') && null !== $data->getDateFinDepot()) {
            $dataArray['dateFinDepot'] = $data->getDateFinDepot()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('typeDSN') && null !== $data->getTypeDSN()) {
            $dataArray['typeDSN'] = $data->getTypeDSN();
        }

        if ($data->isInitialized('afficherDSIJ') && null !== $data->getAfficherDSIJ()) {
            $dataArray['afficherDSIJ'] = $data->getAfficherDSIJ();
        }

        $dataArray['numeroDossier'] = $data->getNumeroDossier();

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [ListeDSNEvenementiellesRequest::class => false];
    }
}
