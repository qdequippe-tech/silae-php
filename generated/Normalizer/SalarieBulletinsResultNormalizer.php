<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SalarieBulletinsResult;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) || (Kernel::MAJOR_VERSION >= 7 || Kernel::MAJOR_VERSION === 6 && Kernel::MINOR_VERSION === 4)) {
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

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('matriculeSalarie') && null !== $object->getMatriculeSalarie()) {
                $data['matriculeSalarie'] = $object->getMatriculeSalarie();
            }

            if ($object->isInitialized('periode') && null !== $object->getPeriode()) {
                $data['periode'] = $object->getPeriode()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('arrIDPAIBULLETIN') && null !== $object->getArrIDPAIBULLETIN()) {
                $values = [];
                foreach ($object->getArrIDPAIBULLETIN() as $value) {
                    $values[] = $value;
                }

                $data['arr_ID_PAIBULLETIN'] = $values;
            }

            if ($object->isInitialized('arrPresenceAttestationPoleEmploi') && null !== $object->getArrPresenceAttestationPoleEmploi()) {
                $values_1 = [];
                foreach ($object->getArrPresenceAttestationPoleEmploi() as $value_1) {
                    $values_1[] = $value_1;
                }

                $data['arr_PresenceAttestationPoleEmploi'] = $values_1;
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [SalarieBulletinsResult::class => false];
        }
    }
} else {
    class SalarieBulletinsResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return SalarieBulletinsResult::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && SalarieBulletinsResult::class === $data::class;
        }

        /**
         * @param mixed|null $format
         */
        public function denormalize($data, $type, $format = null, array $context = [])
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

        /**
         * @param mixed|null $format
         *
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('matriculeSalarie') && null !== $object->getMatriculeSalarie()) {
                $data['matriculeSalarie'] = $object->getMatriculeSalarie();
            }

            if ($object->isInitialized('periode') && null !== $object->getPeriode()) {
                $data['periode'] = $object->getPeriode()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('arrIDPAIBULLETIN') && null !== $object->getArrIDPAIBULLETIN()) {
                $values = [];
                foreach ($object->getArrIDPAIBULLETIN() as $value) {
                    $values[] = $value;
                }

                $data['arr_ID_PAIBULLETIN'] = $values;
            }

            if ($object->isInitialized('arrPresenceAttestationPoleEmploi') && null !== $object->getArrPresenceAttestationPoleEmploi()) {
                $values_1 = [];
                foreach ($object->getArrPresenceAttestationPoleEmploi() as $value_1) {
                    $values_1[] = $value_1;
                }

                $data['arr_PresenceAttestationPoleEmploi'] = $values_1;
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [SalarieBulletinsResult::class => false];
        }
    }
}
