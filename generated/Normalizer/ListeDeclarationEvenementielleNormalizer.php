<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\ListeDeclarationEvenementielle;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ListeDeclarationEvenementielleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return ListeDeclarationEvenementielle::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && ListeDeclarationEvenementielle::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new ListeDeclarationEvenementielle();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('dateDepot', $data) && null !== $data['dateDepot']) {
            $object->setDateDepot(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateDepot']));
        } elseif (\array_key_exists('dateDepot', $data) && null === $data['dateDepot']) {
            $object->setDateDepot(null);
        }

        if (\array_key_exists('typeDSN', $data) && null !== $data['typeDSN']) {
            $object->setTypeDSN($data['typeDSN']);
        } elseif (\array_key_exists('typeDSN', $data) && null === $data['typeDSN']) {
            $object->setTypeDSN(null);
        }

        if (\array_key_exists('salarieConcerne', $data) && null !== $data['salarieConcerne']) {
            $object->setSalarieConcerne($data['salarieConcerne']);
        } elseif (\array_key_exists('salarieConcerne', $data) && null === $data['salarieConcerne']) {
            $object->setSalarieConcerne(null);
        }

        if (\array_key_exists('periode', $data) && null !== $data['periode']) {
            $object->setPeriode($data['periode']);
        } elseif (\array_key_exists('periode', $data) && null === $data['periode']) {
            $object->setPeriode(null);
        }

        if (\array_key_exists('statut', $data) && null !== $data['statut']) {
            $object->setStatut($data['statut']);
        } elseif (\array_key_exists('statut', $data) && null === $data['statut']) {
            $object->setStatut(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('dateDepot') && null !== $data->getDateDepot()) {
            $dataArray['dateDepot'] = $data->getDateDepot()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('typeDSN') && null !== $data->getTypeDSN()) {
            $dataArray['typeDSN'] = $data->getTypeDSN();
        }

        if ($data->isInitialized('salarieConcerne') && null !== $data->getSalarieConcerne()) {
            $dataArray['salarieConcerne'] = $data->getSalarieConcerne();
        }

        if ($data->isInitialized('periode') && null !== $data->getPeriode()) {
            $dataArray['periode'] = $data->getPeriode();
        }

        if ($data->isInitialized('statut') && null !== $data->getStatut()) {
            $dataArray['statut'] = $data->getStatut();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [ListeDeclarationEvenementielle::class => false];
    }
}
