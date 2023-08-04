<?php

namespace QdequippeTech\Silae\Api\Runtime\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ReferenceNormalizer implements NormalizerInterface
{
    public function normalize($object, $format = null, array $context = [])
    {
        return ['$ref' => (string) $object->getReferenceUri()];
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return $data instanceof Reference;
    }
}
