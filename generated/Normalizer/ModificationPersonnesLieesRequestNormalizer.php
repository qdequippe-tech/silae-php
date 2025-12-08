<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\ModificationPersonnesLieesRequest;
use QdequippeTech\Silae\Api\Model\PersonneLieeV2;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ModificationPersonnesLieesRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return ModificationPersonnesLieesRequest::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && ModificationPersonnesLieesRequest::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new ModificationPersonnesLieesRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('conjoint', $data) && null !== $data['conjoint']) {
            $object->setConjoint($this->denormalizer->denormalize($data['conjoint'], PersonneLieeV2::class, 'json', $context));
        } elseif (\array_key_exists('conjoint', $data) && null === $data['conjoint']) {
            $object->setConjoint(null);
        }

        if (\array_key_exists('personnesLiees', $data) && null !== $data['personnesLiees']) {
            $values = [];
            foreach ($data['personnesLiees'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, PersonneLieeV2::class, 'json', $context);
            }

            $object->setPersonnesLiees($values);
        } elseif (\array_key_exists('personnesLiees', $data) && null === $data['personnesLiees']) {
            $object->setPersonnesLiees(null);
        }

        if (\array_key_exists('matricule', $data) && null !== $data['matricule']) {
            $object->setMatricule($data['matricule']);
        } elseif (\array_key_exists('matricule', $data) && null === $data['matricule']) {
            $object->setMatricule(null);
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
        if ($data->isInitialized('conjoint') && null !== $data->getConjoint()) {
            $dataArray['conjoint'] = $this->normalizer->normalize($data->getConjoint(), 'json', $context);
        }

        if ($data->isInitialized('personnesLiees') && null !== $data->getPersonnesLiees()) {
            $values = [];
            foreach ($data->getPersonnesLiees() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }

            $dataArray['personnesLiees'] = $values;
        }

        if ($data->isInitialized('matricule') && null !== $data->getMatricule()) {
            $dataArray['matricule'] = $data->getMatricule();
        }

        $dataArray['numeroDossier'] = $data->getNumeroDossier();

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [ModificationPersonnesLieesRequest::class => false];
    }
}
