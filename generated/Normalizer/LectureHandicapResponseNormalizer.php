<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class LectureHandicapResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\LectureHandicapResponse' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'QdequippeTech\\Silae\\Api\\Model\\LectureHandicapResponse' === $data::class;
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
        $object = new \QdequippeTech\Silae\Api\Model\LectureHandicapResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('salarieHandicape', $data) && null !== $data['salarieHandicape']) {
            $object->setSalarieHandicape($data['salarieHandicape']);
        } elseif (\array_key_exists('salarieHandicape', $data) && null === $data['salarieHandicape']) {
            $object->setSalarieHandicape(null);
        }
        if (\array_key_exists('handicap', $data) && null !== $data['handicap']) {
            $values = [];
            foreach ($data['handicap'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'QdequippeTech\\Silae\\Api\\Model\\Handicap', 'json', $context);
            }
            $object->setHandicap($values);
        } elseif (\array_key_exists('handicap', $data) && null === $data['handicap']) {
            $object->setHandicap(null);
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
        if ($object->isInitialized('salarieHandicape') && null !== $object->getSalarieHandicape()) {
            $data['salarieHandicape'] = $object->getSalarieHandicape();
        }
        if ($object->isInitialized('handicap') && null !== $object->getHandicap()) {
            $values = [];
            foreach ($object->getHandicap() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['handicap'] = $values;
        }

        return $data;
    }
}
