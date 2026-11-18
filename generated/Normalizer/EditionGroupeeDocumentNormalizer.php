<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\EditionGroupeeDocument;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EditionGroupeeDocumentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return EditionGroupeeDocument::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && EditionGroupeeDocument::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new EditionGroupeeDocument();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        if (\array_key_exists('document', $data) && null !== $data['document']) {
            $object->setDocument($data['document']);
        } elseif (\array_key_exists('document', $data) && null === $data['document']) {
            $object->setDocument(null);
        }

        if (\array_key_exists('messageErreur', $data) && null !== $data['messageErreur']) {
            $object->setMessageErreur($data['messageErreur']);
        } elseif (\array_key_exists('messageErreur', $data) && null === $data['messageErreur']) {
            $object->setMessageErreur(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('document') && null !== $data->getDocument()) {
            $dataArray['document'] = $data->getDocument();
        }

        if ($data->isInitialized('messageErreur') && null !== $data->getMessageErreur()) {
            $dataArray['messageErreur'] = $data->getMessageErreur();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [EditionGroupeeDocument::class => false];
    }
}
