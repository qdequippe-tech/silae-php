<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\AcquisitionQuestionnaireCCNRequest;
use QdequippeTech\Silae\Api\Model\ModificationChampValeursTypees;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AcquisitionQuestionnaireCCNRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return AcquisitionQuestionnaireCCNRequest::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && AcquisitionQuestionnaireCCNRequest::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new AcquisitionQuestionnaireCCNRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('code_CCN', $data) && null !== $data['code_CCN']) {
            $object->setCodeCCN($data['code_CCN']);
        } elseif (\array_key_exists('code_CCN', $data) && null === $data['code_CCN']) {
            $object->setCodeCCN(null);
        }

        if (\array_key_exists('listeChamps', $data) && null !== $data['listeChamps']) {
            $values = [];
            foreach ($data['listeChamps'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, ModificationChampValeursTypees::class, 'json', $context);
            }

            $object->setListeChamps($values);
        } elseif (\array_key_exists('listeChamps', $data) && null === $data['listeChamps']) {
            $object->setListeChamps(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('codeCCN') && null !== $data->getCodeCCN()) {
            $dataArray['code_CCN'] = $data->getCodeCCN();
        }

        if ($data->isInitialized('listeChamps') && null !== $data->getListeChamps()) {
            $values = [];
            foreach ($data->getListeChamps() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }

            $dataArray['listeChamps'] = $values;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [AcquisitionQuestionnaireCCNRequest::class => false];
    }
}
