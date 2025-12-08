<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SalarieActiviteJournaliere;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalarieActiviteJournaliereNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return SalarieActiviteJournaliere::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && SalarieActiviteJournaliere::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new SalarieActiviteJournaliere();
        if (\array_key_exists('nombreHeures', $data) && \is_int($data['nombreHeures'])) {
            $data['nombreHeures'] = (float) $data['nombreHeures'];
        }

        if (\array_key_exists('heureDebut1', $data) && \is_int($data['heureDebut1'])) {
            $data['heureDebut1'] = (float) $data['heureDebut1'];
        }

        if (\array_key_exists('heureFin1', $data) && \is_int($data['heureFin1'])) {
            $data['heureFin1'] = (float) $data['heureFin1'];
        }

        if (\array_key_exists('heureDebut2', $data) && \is_int($data['heureDebut2'])) {
            $data['heureDebut2'] = (float) $data['heureDebut2'];
        }

        if (\array_key_exists('heureFin2', $data) && \is_int($data['heureFin2'])) {
            $data['heureFin2'] = (float) $data['heureFin2'];
        }

        if (\array_key_exists('heureDebut3', $data) && \is_int($data['heureDebut3'])) {
            $data['heureDebut3'] = (float) $data['heureDebut3'];
        }

        if (\array_key_exists('heureFin3', $data) && \is_int($data['heureFin3'])) {
            $data['heureFin3'] = (float) $data['heureFin3'];
        }

        if (\array_key_exists('reinitialiserJournee', $data) && \is_int($data['reinitialiserJournee'])) {
            $data['reinitialiserJournee'] = (bool) $data['reinitialiserJournee'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('jour', $data) && null !== $data['jour']) {
            $object->setJour(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['jour']));
        } elseif (\array_key_exists('jour', $data) && null === $data['jour']) {
            $object->setJour(null);
        }

        if (\array_key_exists('nombreHeures', $data) && null !== $data['nombreHeures']) {
            $object->setNombreHeures($data['nombreHeures']);
        } elseif (\array_key_exists('nombreHeures', $data) && null === $data['nombreHeures']) {
            $object->setNombreHeures(null);
        }

        if (\array_key_exists('heureDebut1', $data) && null !== $data['heureDebut1']) {
            $object->setHeureDebut1($data['heureDebut1']);
        } elseif (\array_key_exists('heureDebut1', $data) && null === $data['heureDebut1']) {
            $object->setHeureDebut1(null);
        }

        if (\array_key_exists('heureFin1', $data) && null !== $data['heureFin1']) {
            $object->setHeureFin1($data['heureFin1']);
        } elseif (\array_key_exists('heureFin1', $data) && null === $data['heureFin1']) {
            $object->setHeureFin1(null);
        }

        if (\array_key_exists('heureDebut2', $data) && null !== $data['heureDebut2']) {
            $object->setHeureDebut2($data['heureDebut2']);
        } elseif (\array_key_exists('heureDebut2', $data) && null === $data['heureDebut2']) {
            $object->setHeureDebut2(null);
        }

        if (\array_key_exists('heureFin2', $data) && null !== $data['heureFin2']) {
            $object->setHeureFin2($data['heureFin2']);
        } elseif (\array_key_exists('heureFin2', $data) && null === $data['heureFin2']) {
            $object->setHeureFin2(null);
        }

        if (\array_key_exists('heureDebut3', $data) && null !== $data['heureDebut3']) {
            $object->setHeureDebut3($data['heureDebut3']);
        } elseif (\array_key_exists('heureDebut3', $data) && null === $data['heureDebut3']) {
            $object->setHeureDebut3(null);
        }

        if (\array_key_exists('heureFin3', $data) && null !== $data['heureFin3']) {
            $object->setHeureFin3($data['heureFin3']);
        } elseif (\array_key_exists('heureFin3', $data) && null === $data['heureFin3']) {
            $object->setHeureFin3(null);
        }

        if (\array_key_exists('reinitialiserJournee', $data) && null !== $data['reinitialiserJournee']) {
            $object->setReinitialiserJournee($data['reinitialiserJournee']);
        } elseif (\array_key_exists('reinitialiserJournee', $data) && null === $data['reinitialiserJournee']) {
            $object->setReinitialiserJournee(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('jour') && null !== $data->getJour()) {
            $dataArray['jour'] = $data->getJour()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('nombreHeures') && null !== $data->getNombreHeures()) {
            $dataArray['nombreHeures'] = $data->getNombreHeures();
        }

        if ($data->isInitialized('heureDebut1') && null !== $data->getHeureDebut1()) {
            $dataArray['heureDebut1'] = $data->getHeureDebut1();
        }

        if ($data->isInitialized('heureFin1') && null !== $data->getHeureFin1()) {
            $dataArray['heureFin1'] = $data->getHeureFin1();
        }

        if ($data->isInitialized('heureDebut2') && null !== $data->getHeureDebut2()) {
            $dataArray['heureDebut2'] = $data->getHeureDebut2();
        }

        if ($data->isInitialized('heureFin2') && null !== $data->getHeureFin2()) {
            $dataArray['heureFin2'] = $data->getHeureFin2();
        }

        if ($data->isInitialized('heureDebut3') && null !== $data->getHeureDebut3()) {
            $dataArray['heureDebut3'] = $data->getHeureDebut3();
        }

        if ($data->isInitialized('heureFin3') && null !== $data->getHeureFin3()) {
            $dataArray['heureFin3'] = $data->getHeureFin3();
        }

        if ($data->isInitialized('reinitialiserJournee') && null !== $data->getReinitialiserJournee()) {
            $dataArray['reinitialiserJournee'] = $data->getReinitialiserJournee();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [SalarieActiviteJournaliere::class => false];
    }
}
