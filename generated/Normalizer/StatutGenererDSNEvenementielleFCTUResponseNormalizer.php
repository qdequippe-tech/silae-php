<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\FichierResult;
use QdequippeTech\Silae\Api\Model\StatutGenererDSNEvenementielleFCTUResponse;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class StatutGenererDSNEvenementielleFCTUResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return StatutGenererDSNEvenementielleFCTUResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && StatutGenererDSNEvenementielleFCTUResponse::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new StatutGenererDSNEvenementielleFCTUResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        if (\array_key_exists('progression', $data) && \is_int($data['progression'])) {
            $data['progression'] = (float) $data['progression'];
        }

        if (\array_key_exists('fichiers', $data) && null !== $data['fichiers']) {
            $values = [];
            foreach ($data['fichiers'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, FichierResult::class, 'json', $context);
            }

            $object->setFichiers($values);
        } elseif (\array_key_exists('fichiers', $data) && null === $data['fichiers']) {
            $object->setFichiers(null);
        }

        if (\array_key_exists('erreurs', $data) && null !== $data['erreurs']) {
            $values_1 = [];
            foreach ($data['erreurs'] as $value_1) {
                $values_1[] = $value_1;
            }

            $object->setErreurs($values_1);
        } elseif (\array_key_exists('erreurs', $data) && null === $data['erreurs']) {
            $object->setErreurs(null);
        }

        if (\array_key_exists('message', $data) && null !== $data['message']) {
            $object->setMessage($data['message']);
        } elseif (\array_key_exists('message', $data) && null === $data['message']) {
            $object->setMessage(null);
        }

        if (\array_key_exists('statut', $data) && null !== $data['statut']) {
            $object->setStatut($data['statut']);
        } elseif (\array_key_exists('statut', $data) && null === $data['statut']) {
            $object->setStatut(null);
        }

        if (\array_key_exists('messageErreur', $data) && null !== $data['messageErreur']) {
            $object->setMessageErreur($data['messageErreur']);
        } elseif (\array_key_exists('messageErreur', $data) && null === $data['messageErreur']) {
            $object->setMessageErreur(null);
        }

        if (\array_key_exists('progression', $data) && null !== $data['progression']) {
            $object->setProgression($data['progression']);
        } elseif (\array_key_exists('progression', $data) && null === $data['progression']) {
            $object->setProgression(null);
        }

        if (\array_key_exists('dureeExecution', $data) && null !== $data['dureeExecution']) {
            $object->setDureeExecution($data['dureeExecution']);
        } elseif (\array_key_exists('dureeExecution', $data) && null === $data['dureeExecution']) {
            $object->setDureeExecution(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('fichiers') && null !== $data->getFichiers()) {
            $values = [];
            foreach ($data->getFichiers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }

            $dataArray['fichiers'] = $values;
        }

        if ($data->isInitialized('erreurs') && null !== $data->getErreurs()) {
            $values_1 = [];
            foreach ($data->getErreurs() as $value_1) {
                $values_1[] = $value_1;
            }

            $dataArray['erreurs'] = $values_1;
        }

        if ($data->isInitialized('message') && null !== $data->getMessage()) {
            $dataArray['message'] = $data->getMessage();
        }

        if ($data->isInitialized('statut') && null !== $data->getStatut()) {
            $dataArray['statut'] = $data->getStatut();
        }

        if ($data->isInitialized('messageErreur') && null !== $data->getMessageErreur()) {
            $dataArray['messageErreur'] = $data->getMessageErreur();
        }

        if ($data->isInitialized('progression') && null !== $data->getProgression()) {
            $dataArray['progression'] = $data->getProgression();
        }

        if ($data->isInitialized('dureeExecution') && null !== $data->getDureeExecution()) {
            $dataArray['dureeExecution'] = $data->getDureeExecution();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [StatutGenererDSNEvenementielleFCTUResponse::class => false];
    }
}
