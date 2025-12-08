<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\CCNSociete;
use QdequippeTech\Silae\Api\Model\ModificationCCNSocieteRequest;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ModificationCCNSocieteRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return ModificationCCNSocieteRequest::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && ModificationCCNSocieteRequest::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new ModificationCCNSocieteRequest();
        if (\array_key_exists('pasDeCCSiege', $data) && \is_int($data['pasDeCCSiege'])) {
            $data['pasDeCCSiege'] = (bool) $data['pasDeCCSiege'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('pasDeCCSiege', $data) && null !== $data['pasDeCCSiege']) {
            $object->setPasDeCCSiege($data['pasDeCCSiege']);
        } elseif (\array_key_exists('pasDeCCSiege', $data) && null === $data['pasDeCCSiege']) {
            $object->setPasDeCCSiege(null);
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

        if (\array_key_exists('numeroDossier', $data) && null !== $data['numeroDossier']) {
            $object->setNumeroDossier($data['numeroDossier']);
        } elseif (\array_key_exists('numeroDossier', $data) && null === $data['numeroDossier']) {
            $object->setNumeroDossier(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('pasDeCCSiege') && null !== $data->getPasDeCCSiege()) {
            $dataArray['pasDeCCSiege'] = $data->getPasDeCCSiege();
        }

        if ($data->isInitialized('ccnSociete') && null !== $data->getCcnSociete()) {
            $values = [];
            foreach ($data->getCcnSociete() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }

            $dataArray['ccnSociete'] = $values;
        }

        $dataArray['numeroDossier'] = $data->getNumeroDossier();

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [ModificationCCNSocieteRequest::class => false];
    }
}
