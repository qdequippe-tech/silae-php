<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\EcrituresComptablesPaiementSalairesLotsVirementResponse;
use QdequippeTech\Silae\Api\Model\LotsVirement;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EcrituresComptablesPaiementSalairesLotsVirementResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return EcrituresComptablesPaiementSalairesLotsVirementResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && EcrituresComptablesPaiementSalairesLotsVirementResponse::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new EcrituresComptablesPaiementSalairesLotsVirementResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('listeLotsVirement', $data) && null !== $data['listeLotsVirement']) {
            $values = [];
            foreach ($data['listeLotsVirement'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, LotsVirement::class, 'json', $context);
            }

            $object->setListeLotsVirement($values);
        } elseif (\array_key_exists('listeLotsVirement', $data) && null === $data['listeLotsVirement']) {
            $object->setListeLotsVirement(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('listeLotsVirement') && null !== $data->getListeLotsVirement()) {
            $values = [];
            foreach ($data->getListeLotsVirement() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }

            $dataArray['listeLotsVirement'] = $values;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [EcrituresComptablesPaiementSalairesLotsVirementResponse::class => false];
    }
}
