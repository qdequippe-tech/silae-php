<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\AffectationsDossier;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AffectationsDossierNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return AffectationsDossier::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && AffectationsDossier::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new AffectationsDossier();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('codeAgence', $data) && null !== $data['codeAgence']) {
            $object->setCodeAgence($data['codeAgence']);
        } elseif (\array_key_exists('codeAgence', $data) && null === $data['codeAgence']) {
            $object->setCodeAgence(null);
        }

        if (\array_key_exists('rG1', $data) && null !== $data['rG1']) {
            $object->setRG1($data['rG1']);
        } elseif (\array_key_exists('rG1', $data) && null === $data['rG1']) {
            $object->setRG1(null);
        }

        if (\array_key_exists('rG2', $data) && null !== $data['rG2']) {
            $object->setRG2($data['rG2']);
        } elseif (\array_key_exists('rG2', $data) && null === $data['rG2']) {
            $object->setRG2(null);
        }

        if (\array_key_exists('rG3', $data) && null !== $data['rG3']) {
            $object->setRG3($data['rG3']);
        } elseif (\array_key_exists('rG3', $data) && null === $data['rG3']) {
            $object->setRG3(null);
        }

        if (\array_key_exists('rG4', $data) && null !== $data['rG4']) {
            $object->setRG4($data['rG4']);
        } elseif (\array_key_exists('rG4', $data) && null === $data['rG4']) {
            $object->setRG4(null);
        }

        if (\array_key_exists('rG5', $data) && null !== $data['rG5']) {
            $object->setRG5($data['rG5']);
        } elseif (\array_key_exists('rG5', $data) && null === $data['rG5']) {
            $object->setRG5(null);
        }

        if (\array_key_exists('rG6', $data) && null !== $data['rG6']) {
            $object->setRG6($data['rG6']);
        } elseif (\array_key_exists('rG6', $data) && null === $data['rG6']) {
            $object->setRG6(null);
        }

        if (\array_key_exists('rG7', $data) && null !== $data['rG7']) {
            $object->setRG7($data['rG7']);
        } elseif (\array_key_exists('rG7', $data) && null === $data['rG7']) {
            $object->setRG7(null);
        }

        if (\array_key_exists('rG8', $data) && null !== $data['rG8']) {
            $object->setRG8($data['rG8']);
        } elseif (\array_key_exists('rG8', $data) && null === $data['rG8']) {
            $object->setRG8(null);
        }

        if (\array_key_exists('rG9', $data) && null !== $data['rG9']) {
            $object->setRG9($data['rG9']);
        } elseif (\array_key_exists('rG9', $data) && null === $data['rG9']) {
            $object->setRG9(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('codeAgence') && null !== $data->getCodeAgence()) {
            $dataArray['codeAgence'] = $data->getCodeAgence();
        }

        if ($data->isInitialized('rG1') && null !== $data->getRG1()) {
            $dataArray['rG1'] = $data->getRG1();
        }

        if ($data->isInitialized('rG2') && null !== $data->getRG2()) {
            $dataArray['rG2'] = $data->getRG2();
        }

        if ($data->isInitialized('rG3') && null !== $data->getRG3()) {
            $dataArray['rG3'] = $data->getRG3();
        }

        if ($data->isInitialized('rG4') && null !== $data->getRG4()) {
            $dataArray['rG4'] = $data->getRG4();
        }

        if ($data->isInitialized('rG5') && null !== $data->getRG5()) {
            $dataArray['rG5'] = $data->getRG5();
        }

        if ($data->isInitialized('rG6') && null !== $data->getRG6()) {
            $dataArray['rG6'] = $data->getRG6();
        }

        if ($data->isInitialized('rG7') && null !== $data->getRG7()) {
            $dataArray['rG7'] = $data->getRG7();
        }

        if ($data->isInitialized('rG8') && null !== $data->getRG8()) {
            $dataArray['rG8'] = $data->getRG8();
        }

        if ($data->isInitialized('rG9') && null !== $data->getRG9()) {
            $dataArray['rG9'] = $data->getRG9();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [AffectationsDossier::class => false];
    }
}
