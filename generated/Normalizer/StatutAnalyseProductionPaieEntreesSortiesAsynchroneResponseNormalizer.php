<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\StatutAnalyseProductionPaieEntreesSortiesAsynchroneResponse;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class StatutAnalyseProductionPaieEntreesSortiesAsynchroneResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\StatutAnalyseProductionPaieEntreesSortiesAsynchroneResponse' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof StatutAnalyseProductionPaieEntreesSortiesAsynchroneResponse;
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
        $object = new StatutAnalyseProductionPaieEntreesSortiesAsynchroneResponse();
        if (\array_key_exists('progression', $data) && \is_int($data['progression'])) {
            $data['progression'] = (float) $data['progression'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('statistiquesEntreesSorties', $data) && null !== $data['statistiquesEntreesSorties']) {
            $values = [];
            foreach ($data['statistiquesEntreesSorties'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'QdequippeTech\\Silae\\Api\\Model\\StatistiquesEntreesSorties', 'json', $context);
            }
            $object->setStatistiquesEntreesSorties($values);
        } elseif (\array_key_exists('statistiquesEntreesSorties', $data) && null === $data['statistiquesEntreesSorties']) {
            $object->setStatistiquesEntreesSorties(null);
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

    /**
     * @param mixed|null $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('statistiquesEntreesSorties') && null !== $object->getStatistiquesEntreesSorties()) {
            $values = [];
            foreach ($object->getStatistiquesEntreesSorties() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['statistiquesEntreesSorties'] = $values;
        }
        if ($object->isInitialized('statut') && null !== $object->getStatut()) {
            $data['statut'] = $object->getStatut();
        }
        if ($object->isInitialized('messageErreur') && null !== $object->getMessageErreur()) {
            $data['messageErreur'] = $object->getMessageErreur();
        }
        if ($object->isInitialized('progression') && null !== $object->getProgression()) {
            $data['progression'] = $object->getProgression();
        }
        if ($object->isInitialized('dureeExecution') && null !== $object->getDureeExecution()) {
            $data['dureeExecution'] = $object->getDureeExecution();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\StatutAnalyseProductionPaieEntreesSortiesAsynchroneResponse' => false];
    }
}
