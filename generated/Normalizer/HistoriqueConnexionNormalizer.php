<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\HistoriqueConnexion;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class HistoriqueConnexionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return HistoriqueConnexion::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && HistoriqueConnexion::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new HistoriqueConnexion();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        if (\array_key_exists('modifAPI', $data) && \is_int($data['modifAPI'])) {
            $data['modifAPI'] = (bool) $data['modifAPI'];
        }

        if (\array_key_exists('date', $data) && null !== $data['date']) {
            $object->setDate(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['date']));
        } elseif (\array_key_exists('date', $data) && null === $data['date']) {
            $object->setDate(null);
        }

        if (\array_key_exists('deconnexion', $data) && null !== $data['deconnexion']) {
            $object->setDeconnexion(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['deconnexion']));
        } elseif (\array_key_exists('deconnexion', $data) && null === $data['deconnexion']) {
            $object->setDeconnexion(null);
        }

        if (\array_key_exists('identifiantUtilisateur', $data) && null !== $data['identifiantUtilisateur']) {
            $object->setIdentifiantUtilisateur($data['identifiantUtilisateur']);
        } elseif (\array_key_exists('identifiantUtilisateur', $data) && null === $data['identifiantUtilisateur']) {
            $object->setIdentifiantUtilisateur(null);
        }

        if (\array_key_exists('modifAPI', $data) && null !== $data['modifAPI']) {
            $object->setModifAPI($data['modifAPI']);
        } elseif (\array_key_exists('modifAPI', $data) && null === $data['modifAPI']) {
            $object->setModifAPI(null);
        }

        if (\array_key_exists('identifiantMachine', $data) && null !== $data['identifiantMachine']) {
            $object->setIdentifiantMachine($data['identifiantMachine']);
        } elseif (\array_key_exists('identifiantMachine', $data) && null === $data['identifiantMachine']) {
            $object->setIdentifiantMachine(null);
        }

        if (\array_key_exists('retourConnexion', $data) && null !== $data['retourConnexion']) {
            $object->setRetourConnexion($data['retourConnexion']);
        } elseif (\array_key_exists('retourConnexion', $data) && null === $data['retourConnexion']) {
            $object->setRetourConnexion(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('date') && null !== $data->getDate()) {
            $dataArray['date'] = $data->getDate()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('deconnexion') && null !== $data->getDeconnexion()) {
            $dataArray['deconnexion'] = $data->getDeconnexion()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('identifiantUtilisateur') && null !== $data->getIdentifiantUtilisateur()) {
            $dataArray['identifiantUtilisateur'] = $data->getIdentifiantUtilisateur();
        }

        if ($data->isInitialized('modifAPI') && null !== $data->getModifAPI()) {
            $dataArray['modifAPI'] = $data->getModifAPI();
        }

        if ($data->isInitialized('identifiantMachine') && null !== $data->getIdentifiantMachine()) {
            $dataArray['identifiantMachine'] = $data->getIdentifiantMachine();
        }

        if ($data->isInitialized('retourConnexion') && null !== $data->getRetourConnexion()) {
            $dataArray['retourConnexion'] = $data->getRetourConnexion();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [HistoriqueConnexion::class => false];
    }
}
