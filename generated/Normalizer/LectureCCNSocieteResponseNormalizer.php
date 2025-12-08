<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\CCNSociete;
use QdequippeTech\Silae\Api\Model\LectureCCNSocieteResponse;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class LectureCCNSocieteResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return LectureCCNSocieteResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && LectureCCNSocieteResponse::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new LectureCCNSocieteResponse();
        if (\array_key_exists('pasDeCCSiege', $data) && \is_int($data['pasDeCCSiege'])) {
            $data['pasDeCCSiege'] = (bool) $data['pasDeCCSiege'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('ccnSociete', $data) && null !== $data['ccnSociete']) {
            $values = [];
            foreach ($data['ccnSociete'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, CCNSociete::class, 'json', $context);
            }

            $object->setCcnSociete($values);
        } elseif (\array_key_exists('ccnSociete', $data) && null === $data['ccnSociete']) {
            $object->setCcnSociete(null);
        }

        if (\array_key_exists('pasDeCCSiege', $data) && null !== $data['pasDeCCSiege']) {
            $object->setPasDeCCSiege($data['pasDeCCSiege']);
        } elseif (\array_key_exists('pasDeCCSiege', $data) && null === $data['pasDeCCSiege']) {
            $object->setPasDeCCSiege(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('ccnSociete') && null !== $data->getCcnSociete()) {
            $values = [];
            foreach ($data->getCcnSociete() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }

            $dataArray['ccnSociete'] = $values;
        }

        if ($data->isInitialized('pasDeCCSiege') && null !== $data->getPasDeCCSiege()) {
            $dataArray['pasDeCCSiege'] = $data->getPasDeCCSiege();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [LectureCCNSocieteResponse::class => false];
    }
}
