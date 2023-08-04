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

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\SalarieActiviteJournaliere' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof SalarieActiviteJournaliere;
    }

    /**
     * @param mixed|null $format
     */
    public function denormalize($data, $class, $format = null, array $context = [])
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
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('jour', $data) && null !== $data['jour']) {
            $object->setJour(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['jour']));
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

    /**
     * @param mixed|null $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('jour') && null !== $object->getJour()) {
            $data['jour'] = $object->getJour()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('nombreHeures') && null !== $object->getNombreHeures()) {
            $data['nombreHeures'] = $object->getNombreHeures();
        }
        if ($object->isInitialized('heureDebut1') && null !== $object->getHeureDebut1()) {
            $data['heureDebut1'] = $object->getHeureDebut1();
        }
        if ($object->isInitialized('heureFin1') && null !== $object->getHeureFin1()) {
            $data['heureFin1'] = $object->getHeureFin1();
        }
        if ($object->isInitialized('heureDebut2') && null !== $object->getHeureDebut2()) {
            $data['heureDebut2'] = $object->getHeureDebut2();
        }
        if ($object->isInitialized('heureFin2') && null !== $object->getHeureFin2()) {
            $data['heureFin2'] = $object->getHeureFin2();
        }
        if ($object->isInitialized('heureDebut3') && null !== $object->getHeureDebut3()) {
            $data['heureDebut3'] = $object->getHeureDebut3();
        }
        if ($object->isInitialized('heureFin3') && null !== $object->getHeureFin3()) {
            $data['heureFin3'] = $object->getHeureFin3();
        }
        if ($object->isInitialized('reinitialiserJournee') && null !== $object->getReinitialiserJournee()) {
            $data['reinitialiserJournee'] = $object->getReinitialiserJournee();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\SalarieActiviteJournaliere' => false];
    }
}
