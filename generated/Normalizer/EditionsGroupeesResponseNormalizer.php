<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\EditionGroupeeDocument;
use QdequippeTech\Silae\Api\Model\EditionsGroupeesResponse;
use QdequippeTech\Silae\Api\Runtime\JsonObject;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EditionsGroupeesResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return EditionsGroupeesResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && EditionsGroupeesResponse::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new EditionsGroupeesResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        if (\array_key_exists('numeroDossier', $data) && null !== $data['numeroDossier']) {
            $object->setNumeroDossier($data['numeroDossier']);
        } elseif (\array_key_exists('numeroDossier', $data) && null === $data['numeroDossier']) {
            $object->setNumeroDossier(null);
        }

        if (\array_key_exists('codeEditionsGroupees', $data) && null !== $data['codeEditionsGroupees']) {
            $object->setCodeEditionsGroupees($data['codeEditionsGroupees']);
        } elseif (\array_key_exists('codeEditionsGroupees', $data) && null === $data['codeEditionsGroupees']) {
            $object->setCodeEditionsGroupees(null);
        }

        if (\array_key_exists('documents', $data) && null !== $data['documents']) {
            $values = new JsonObject();
            foreach ($data['documents'] as $key => $value) {
                $values[$key] = $this->denormalizer->denormalize($value, EditionGroupeeDocument::class, 'json', $context);
            }

            $object->setDocuments($values);
        } elseif (\array_key_exists('documents', $data) && null === $data['documents']) {
            $object->setDocuments(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('numeroDossier') && null !== $data->getNumeroDossier()) {
            $dataArray['numeroDossier'] = $data->getNumeroDossier();
        }

        if ($data->isInitialized('codeEditionsGroupees') && null !== $data->getCodeEditionsGroupees()) {
            $dataArray['codeEditionsGroupees'] = $data->getCodeEditionsGroupees();
        }

        if ($data->isInitialized('documents') && null !== $data->getDocuments()) {
            $values = new JsonObject();
            foreach ($data->getDocuments() as $key => $value) {
                $values[$key] = null === $value ? null : new JsonObject($this->normalizer->normalize($value, 'json', $context));
            }

            $dataArray['documents'] = $values;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [EditionsGroupeesResponse::class => false];
    }
}
