<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\AxesAnalytiqueSalarie;
use QdequippeTech\Silae\Api\Model\DonneesAxeAnalytiqueSalarie;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AxesAnalytiqueSalarieNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return AxesAnalytiqueSalarie::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && AxesAnalytiqueSalarie::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new AxesAnalytiqueSalarie();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('matriculeSalarie', $data) && null !== $data['matriculeSalarie']) {
            $object->setMatriculeSalarie($data['matriculeSalarie']);
        } elseif (\array_key_exists('matriculeSalarie', $data) && null === $data['matriculeSalarie']) {
            $object->setMatriculeSalarie(null);
        }

        if (\array_key_exists('nomAffiche', $data) && null !== $data['nomAffiche']) {
            $object->setNomAffiche($data['nomAffiche']);
        } elseif (\array_key_exists('nomAffiche', $data) && null === $data['nomAffiche']) {
            $object->setNomAffiche(null);
        }

        if (\array_key_exists('affectationAnalytique', $data) && null !== $data['affectationAnalytique']) {
            $values = [];
            foreach ($data['affectationAnalytique'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, DonneesAxeAnalytiqueSalarie::class, 'json', $context);
            }

            $object->setAffectationAnalytique($values);
        } elseif (\array_key_exists('affectationAnalytique', $data) && null === $data['affectationAnalytique']) {
            $object->setAffectationAnalytique(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('matriculeSalarie') && null !== $data->getMatriculeSalarie()) {
            $dataArray['matriculeSalarie'] = $data->getMatriculeSalarie();
        }

        if ($data->isInitialized('nomAffiche') && null !== $data->getNomAffiche()) {
            $dataArray['nomAffiche'] = $data->getNomAffiche();
        }

        if ($data->isInitialized('affectationAnalytique') && null !== $data->getAffectationAnalytique()) {
            $values = [];
            foreach ($data->getAffectationAnalytique() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }

            $dataArray['affectationAnalytique'] = $values;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [AxesAnalytiqueSalarie::class => false];
    }
}
