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

class RecupererImageResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\RecupererImageResponse' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'QdequippeTech\\Silae\\Api\\Model\\RecupererImageResponse' === $data::class;
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
        $object = new \QdequippeTech\Silae\Api\Model\RecupererImageResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('image', $data) && null !== $data['image']) {
            $object->setImage($data['image']);
        } elseif (\array_key_exists('image', $data) && null === $data['image']) {
            $object->setImage(null);
        }
        if (\array_key_exists('imagesAnnexes', $data) && null !== $data['imagesAnnexes']) {
            $values = [];
            foreach ($data['imagesAnnexes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'QdequippeTech\\Silae\\Api\\Model\\ImageAnnexe', 'json', $context);
            }
            $object->setImagesAnnexes($values);
        } elseif (\array_key_exists('imagesAnnexes', $data) && null === $data['imagesAnnexes']) {
            $object->setImagesAnnexes(null);
        }
        if (\array_key_exists('warning', $data) && null !== $data['warning']) {
            $object->setWarning($data['warning']);
        } elseif (\array_key_exists('warning', $data) && null === $data['warning']) {
            $object->setWarning(null);
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
        if ($object->isInitialized('image') && null !== $object->getImage()) {
            $data['image'] = $object->getImage();
        }
        if ($object->isInitialized('imagesAnnexes') && null !== $object->getImagesAnnexes()) {
            $values = [];
            foreach ($object->getImagesAnnexes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['imagesAnnexes'] = $values;
        }
        if ($object->isInitialized('warning') && null !== $object->getWarning()) {
            $data['warning'] = $object->getWarning();
        }

        return $data;
    }
}
