<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\BilanMatricules;
use QdequippeTech\Silae\Api\Model\RecupererFichiersVirementResponse;
use QdequippeTech\Silae\Api\Model\RecupererFichierVirementResult;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class RecupererFichiersVirementResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return RecupererFichiersVirementResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && RecupererFichiersVirementResponse::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new RecupererFichiersVirementResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('bilanMatricules', $data) && null !== $data['bilanMatricules']) {
            $object->setBilanMatricules($this->denormalizer->denormalize($data['bilanMatricules'], BilanMatricules::class, 'json', $context));
        } elseif (\array_key_exists('bilanMatricules', $data) && null === $data['bilanMatricules']) {
            $object->setBilanMatricules(null);
        }

        if (\array_key_exists('fichiersVirements', $data) && null !== $data['fichiersVirements']) {
            $values = [];
            foreach ($data['fichiersVirements'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, RecupererFichierVirementResult::class, 'json', $context);
            }

            $object->setFichiersVirements($values);
        } elseif (\array_key_exists('fichiersVirements', $data) && null === $data['fichiersVirements']) {
            $object->setFichiersVirements(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('bilanMatricules') && null !== $data->getBilanMatricules()) {
            $dataArray['bilanMatricules'] = $this->normalizer->normalize($data->getBilanMatricules(), 'json', $context);
        }

        if ($data->isInitialized('fichiersVirements') && null !== $data->getFichiersVirements()) {
            $values = [];
            foreach ($data->getFichiersVirements() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }

            $dataArray['fichiersVirements'] = $values;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [RecupererFichiersVirementResponse::class => false];
    }
}
