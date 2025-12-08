<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\CreationSalarieEmploiResult;
use QdequippeTech\Silae\Api\Model\CreationSalarieEmploisResponse;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CreationSalarieEmploisResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return CreationSalarieEmploisResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && CreationSalarieEmploisResponse::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new CreationSalarieEmploisResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('resultatsCreationsEmplois', $data) && null !== $data['resultatsCreationsEmplois']) {
            $values = [];
            foreach ($data['resultatsCreationsEmplois'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, CreationSalarieEmploiResult::class, 'json', $context);
            }

            $object->setResultatsCreationsEmplois($values);
        } elseif (\array_key_exists('resultatsCreationsEmplois', $data) && null === $data['resultatsCreationsEmplois']) {
            $object->setResultatsCreationsEmplois(null);
        }

        if (\array_key_exists('warning', $data) && null !== $data['warning']) {
            $object->setWarning($data['warning']);
        } elseif (\array_key_exists('warning', $data) && null === $data['warning']) {
            $object->setWarning(null);
        }

        if (\array_key_exists('matriculeSalarie', $data) && null !== $data['matriculeSalarie']) {
            $object->setMatriculeSalarie($data['matriculeSalarie']);
        } elseif (\array_key_exists('matriculeSalarie', $data) && null === $data['matriculeSalarie']) {
            $object->setMatriculeSalarie(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('resultatsCreationsEmplois') && null !== $data->getResultatsCreationsEmplois()) {
            $values = [];
            foreach ($data->getResultatsCreationsEmplois() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }

            $dataArray['resultatsCreationsEmplois'] = $values;
        }

        if ($data->isInitialized('warning') && null !== $data->getWarning()) {
            $dataArray['warning'] = $data->getWarning();
        }

        if ($data->isInitialized('matriculeSalarie') && null !== $data->getMatriculeSalarie()) {
            $dataArray['matriculeSalarie'] = $data->getMatriculeSalarie();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [CreationSalarieEmploisResponse::class => false];
    }
}
