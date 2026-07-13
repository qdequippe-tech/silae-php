<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\StatistiquesUtilisateursV3;
use QdequippeTech\Silae\Api\Model\StatutAnalyseProductionPaieUtilisateursV3AsynchroneResponse;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class StatutAnalyseProductionPaieUtilisateursV3AsynchroneResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return StatutAnalyseProductionPaieUtilisateursV3AsynchroneResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && StatutAnalyseProductionPaieUtilisateursV3AsynchroneResponse::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new StatutAnalyseProductionPaieUtilisateursV3AsynchroneResponse();
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

        if (\array_key_exists('statistiqueUtilisateurs', $data) && null !== $data['statistiqueUtilisateurs']) {
            $values = [];
            foreach ($data['statistiqueUtilisateurs'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, StatistiquesUtilisateursV3::class, 'json', $context);
            }

            $object->setStatistiqueUtilisateurs($values);
        } elseif (\array_key_exists('statistiqueUtilisateurs', $data) && null === $data['statistiqueUtilisateurs']) {
            $object->setStatistiqueUtilisateurs(null);
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
        if ($data->isInitialized('statistiqueUtilisateurs') && null !== $data->getStatistiqueUtilisateurs()) {
            $values = [];
            foreach ($data->getStatistiqueUtilisateurs() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }

            $dataArray['statistiqueUtilisateurs'] = $values;
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
        return [StatutAnalyseProductionPaieUtilisateursV3AsynchroneResponse::class => false];
    }
}
