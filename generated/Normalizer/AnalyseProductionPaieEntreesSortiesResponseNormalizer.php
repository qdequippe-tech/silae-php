<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\AnalyseProductionPaieEntreesSortiesResponse;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AnalyseProductionPaieEntreesSortiesResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\AnalyseProductionPaieEntreesSortiesResponse' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof AnalyseProductionPaieEntreesSortiesResponse;
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
        $object = new AnalyseProductionPaieEntreesSortiesResponse();
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

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\AnalyseProductionPaieEntreesSortiesResponse' => false];
    }
}
