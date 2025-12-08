<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\ListeSalariesOptions;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ListeSalariesOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return ListeSalariesOptions::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && ListeSalariesOptions::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new ListeSalariesOptions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('optionActifSurPeriode', $data) && null !== $data['optionActifSurPeriode']) {
            $object->setOptionActifSurPeriode(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['optionActifSurPeriode']));
        } elseif (\array_key_exists('optionActifSurPeriode', $data) && null === $data['optionActifSurPeriode']) {
            $object->setOptionActifSurPeriode(null);
        }

        if (\array_key_exists('optionActifALaDate', $data) && null !== $data['optionActifALaDate']) {
            $object->setOptionActifALaDate(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['optionActifALaDate']));
        } elseif (\array_key_exists('optionActifALaDate', $data) && null === $data['optionActifALaDate']) {
            $object->setOptionActifALaDate(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('optionActifSurPeriode') && null !== $data->getOptionActifSurPeriode()) {
            $dataArray['optionActifSurPeriode'] = $data->getOptionActifSurPeriode()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('optionActifALaDate') && null !== $data->getOptionActifALaDate()) {
            $dataArray['optionActifALaDate'] = $data->getOptionActifALaDate()->format('Y-m-d\TH:i:s');
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [ListeSalariesOptions::class => false];
    }
}
