<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\RequeteAnalyseProductionDetail;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class RequeteAnalyseProductionDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\RequeteAnalyseProductionDetail' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof RequeteAnalyseProductionDetail;
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
        $object = new RequeteAnalyseProductionDetail();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('numeroDossier', $data) && null !== $data['numeroDossier']) {
            $object->setNumeroDossier($data['numeroDossier']);
        } elseif (\array_key_exists('numeroDossier', $data) && null === $data['numeroDossier']) {
            $object->setNumeroDossier(null);
        }
        if (\array_key_exists('periodeDebut', $data) && null !== $data['periodeDebut']) {
            $object->setPeriodeDebut(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['periodeDebut']));
        } elseif (\array_key_exists('periodeDebut', $data) && null === $data['periodeDebut']) {
            $object->setPeriodeDebut(null);
        }
        if (\array_key_exists('periodeFin', $data) && null !== $data['periodeFin']) {
            $object->setPeriodeFin(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['periodeFin']));
        } elseif (\array_key_exists('periodeFin', $data) && null === $data['periodeFin']) {
            $object->setPeriodeFin(null);
        }
        if (\array_key_exists('nomAnalyse', $data) && null !== $data['nomAnalyse']) {
            $object->setNomAnalyse($data['nomAnalyse']);
        } elseif (\array_key_exists('nomAnalyse', $data) && null === $data['nomAnalyse']) {
            $object->setNomAnalyse(null);
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
        if ($object->isInitialized('numeroDossier') && null !== $object->getNumeroDossier()) {
            $data['numeroDossier'] = $object->getNumeroDossier();
        }
        if ($object->isInitialized('periodeDebut') && null !== $object->getPeriodeDebut()) {
            $data['periodeDebut'] = $object->getPeriodeDebut()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('periodeFin') && null !== $object->getPeriodeFin()) {
            $data['periodeFin'] = $object->getPeriodeFin()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('nomAnalyse') && null !== $object->getNomAnalyse()) {
            $data['nomAnalyse'] = $object->getNomAnalyse();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\RequeteAnalyseProductionDetail' => false];
    }
}
