<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\ImageAnnexe;
use QdequippeTech\Silae\Api\Model\RecupererImageResponse;
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

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return RecupererImageResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && RecupererImageResponse::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new RecupererImageResponse();
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
                $values[] = $this->denormalizer->denormalize($value, ImageAnnexe::class, 'json', $context);
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

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('image') && null !== $data->getImage()) {
            $dataArray['image'] = $data->getImage();
        }

        if ($data->isInitialized('imagesAnnexes') && null !== $data->getImagesAnnexes()) {
            $values = [];
            foreach ($data->getImagesAnnexes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }

            $dataArray['imagesAnnexes'] = $values;
        }

        if ($data->isInitialized('warning') && null !== $data->getWarning()) {
            $dataArray['warning'] = $data->getWarning();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [RecupererImageResponse::class => false];
    }
}
