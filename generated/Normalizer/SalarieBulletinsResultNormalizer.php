<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SalarieBulletinsResult;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalarieBulletinsResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return SalarieBulletinsResult::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && SalarieBulletinsResult::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new SalarieBulletinsResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('matriculeSalarie', $data) && null !== $data['matriculeSalarie']) {
            $object->setMatriculeSalarie($data['matriculeSalarie']);
        } elseif (\array_key_exists('matriculeSalarie', $data) && null === $data['matriculeSalarie']) {
            $object->setMatriculeSalarie(null);
        }

        if (\array_key_exists('periode', $data) && null !== $data['periode']) {
            $object->setPeriode(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periode']));
        } elseif (\array_key_exists('periode', $data) && null === $data['periode']) {
            $object->setPeriode(null);
        }

        if (\array_key_exists('arr_ID_PAIBULLETIN', $data) && null !== $data['arr_ID_PAIBULLETIN']) {
            $values = [];
            foreach ($data['arr_ID_PAIBULLETIN'] as $value) {
                $values[] = $value;
            }

            $object->setArrIDPAIBULLETIN($values);
        } elseif (\array_key_exists('arr_ID_PAIBULLETIN', $data) && null === $data['arr_ID_PAIBULLETIN']) {
            $object->setArrIDPAIBULLETIN(null);
        }

        if (\array_key_exists('arr_PresenceAttestationPoleEmploi', $data) && null !== $data['arr_PresenceAttestationPoleEmploi']) {
            $values_1 = [];
            foreach ($data['arr_PresenceAttestationPoleEmploi'] as $value_1) {
                $values_1[] = $value_1;
            }

            $object->setArrPresenceAttestationPoleEmploi($values_1);
        } elseif (\array_key_exists('arr_PresenceAttestationPoleEmploi', $data) && null === $data['arr_PresenceAttestationPoleEmploi']) {
            $object->setArrPresenceAttestationPoleEmploi(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('matriculeSalarie') && null !== $data->getMatriculeSalarie()) {
            $dataArray['matriculeSalarie'] = $data->getMatriculeSalarie();
        }

        if ($data->isInitialized('periode') && null !== $data->getPeriode()) {
            $dataArray['periode'] = $data->getPeriode()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('arrIDPAIBULLETIN') && null !== $data->getArrIDPAIBULLETIN()) {
            $values = [];
            foreach ($data->getArrIDPAIBULLETIN() as $value) {
                $values[] = $value;
            }

            $dataArray['arr_ID_PAIBULLETIN'] = $values;
        }

        if ($data->isInitialized('arrPresenceAttestationPoleEmploi') && null !== $data->getArrPresenceAttestationPoleEmploi()) {
            $values_1 = [];
            foreach ($data->getArrPresenceAttestationPoleEmploi() as $value_1) {
                $values_1[] = $value_1;
            }

            $dataArray['arr_PresenceAttestationPoleEmploi'] = $values_1;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [SalarieBulletinsResult::class => false];
    }
}
