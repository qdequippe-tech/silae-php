<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SalarieElementVariable;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalarieElementVariableNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return SalarieElementVariable::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && SalarieElementVariable::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new SalarieElementVariable();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        if (\array_key_exists('montantElementVariable', $data) && \is_int($data['montantElementVariable'])) {
            $data['montantElementVariable'] = (float) $data['montantElementVariable'];
        }

        if (\array_key_exists('controleExistenceElementVariable', $data) && \is_int($data['controleExistenceElementVariable'])) {
            $data['controleExistenceElementVariable'] = (bool) $data['controleExistenceElementVariable'];
        }

        if (\array_key_exists('periodeElementVariable', $data) && null !== $data['periodeElementVariable']) {
            $object->setPeriodeElementVariable(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periodeElementVariable']));
        } elseif (\array_key_exists('periodeElementVariable', $data) && null === $data['periodeElementVariable']) {
            $object->setPeriodeElementVariable(null);
        }

        if (\array_key_exists('codeElementVariable', $data) && null !== $data['codeElementVariable']) {
            $object->setCodeElementVariable($data['codeElementVariable']);
        } elseif (\array_key_exists('codeElementVariable', $data) && null === $data['codeElementVariable']) {
            $object->setCodeElementVariable(null);
        }

        if (\array_key_exists('montantElementVariable', $data) && null !== $data['montantElementVariable']) {
            $object->setMontantElementVariable($data['montantElementVariable']);
        } elseif (\array_key_exists('montantElementVariable', $data) && null === $data['montantElementVariable']) {
            $object->setMontantElementVariable(null);
        }

        if (\array_key_exists('valeurChaineElementVariable', $data) && null !== $data['valeurChaineElementVariable']) {
            $object->setValeurChaineElementVariable($data['valeurChaineElementVariable']);
        } elseif (\array_key_exists('valeurChaineElementVariable', $data) && null === $data['valeurChaineElementVariable']) {
            $object->setValeurChaineElementVariable(null);
        }

        if (\array_key_exists('controleExistenceElementVariable', $data) && null !== $data['controleExistenceElementVariable']) {
            $object->setControleExistenceElementVariable($data['controleExistenceElementVariable']);
        } elseif (\array_key_exists('controleExistenceElementVariable', $data) && null === $data['controleExistenceElementVariable']) {
            $object->setControleExistenceElementVariable(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('periodeElementVariable') && null !== $data->getPeriodeElementVariable()) {
            $dataArray['periodeElementVariable'] = $data->getPeriodeElementVariable()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('codeElementVariable') && null !== $data->getCodeElementVariable()) {
            $dataArray['codeElementVariable'] = $data->getCodeElementVariable();
        }

        if ($data->isInitialized('montantElementVariable') && null !== $data->getMontantElementVariable()) {
            $dataArray['montantElementVariable'] = $data->getMontantElementVariable();
        }

        if ($data->isInitialized('valeurChaineElementVariable') && null !== $data->getValeurChaineElementVariable()) {
            $dataArray['valeurChaineElementVariable'] = $data->getValeurChaineElementVariable();
        }

        if ($data->isInitialized('controleExistenceElementVariable') && null !== $data->getControleExistenceElementVariable()) {
            $dataArray['controleExistenceElementVariable'] = $data->getControleExistenceElementVariable();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [SalarieElementVariable::class => false];
    }
}
