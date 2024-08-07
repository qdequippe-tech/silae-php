<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SalarieStockVarResult;
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
    class SalarieStockVarResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return SalarieStockVarResult::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && SalarieStockVarResult::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new SalarieStockVarResult();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('matriculeSalarie', $data) && null !== $data['matriculeSalarie']) {
                $object->setMatriculeSalarie($data['matriculeSalarie']);
            } elseif (\array_key_exists('matriculeSalarie', $data) && null === $data['matriculeSalarie']) {
                $object->setMatriculeSalarie(null);
            }

            if (\array_key_exists('codesStockVar', $data) && null !== $data['codesStockVar']) {
                $values = [];
                foreach ($data['codesStockVar'] as $value) {
                    $values[] = $value;
                }

                $object->setCodesStockVar($values);
            } elseif (\array_key_exists('codesStockVar', $data) && null === $data['codesStockVar']) {
                $object->setCodesStockVar(null);
            }

            if (\array_key_exists('valeursStockVar', $data) && null !== $data['valeursStockVar']) {
                $values_1 = [];
                foreach ($data['valeursStockVar'] as $value_1) {
                    $values_1[] = $value_1;
                }

                $object->setValeursStockVar($values_1);
            } elseif (\array_key_exists('valeursStockVar', $data) && null === $data['valeursStockVar']) {
                $object->setValeursStockVar(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('matriculeSalarie') && null !== $object->getMatriculeSalarie()) {
                $data['matriculeSalarie'] = $object->getMatriculeSalarie();
            }

            if ($object->isInitialized('codesStockVar') && null !== $object->getCodesStockVar()) {
                $values = [];
                foreach ($object->getCodesStockVar() as $value) {
                    $values[] = $value;
                }

                $data['codesStockVar'] = $values;
            }

            if ($object->isInitialized('valeursStockVar') && null !== $object->getValeursStockVar()) {
                $values_1 = [];
                foreach ($object->getValeursStockVar() as $value_1) {
                    $values_1[] = $value_1;
                }

                $data['valeursStockVar'] = $values_1;
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [SalarieStockVarResult::class => false];
        }
    }
} else {
    class SalarieStockVarResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return SalarieStockVarResult::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && SalarieStockVarResult::class === $data::class;
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

            $object = new SalarieStockVarResult();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('matriculeSalarie', $data) && null !== $data['matriculeSalarie']) {
                $object->setMatriculeSalarie($data['matriculeSalarie']);
            } elseif (\array_key_exists('matriculeSalarie', $data) && null === $data['matriculeSalarie']) {
                $object->setMatriculeSalarie(null);
            }

            if (\array_key_exists('codesStockVar', $data) && null !== $data['codesStockVar']) {
                $values = [];
                foreach ($data['codesStockVar'] as $value) {
                    $values[] = $value;
                }

                $object->setCodesStockVar($values);
            } elseif (\array_key_exists('codesStockVar', $data) && null === $data['codesStockVar']) {
                $object->setCodesStockVar(null);
            }

            if (\array_key_exists('valeursStockVar', $data) && null !== $data['valeursStockVar']) {
                $values_1 = [];
                foreach ($data['valeursStockVar'] as $value_1) {
                    $values_1[] = $value_1;
                }

                $object->setValeursStockVar($values_1);
            } elseif (\array_key_exists('valeursStockVar', $data) && null === $data['valeursStockVar']) {
                $object->setValeursStockVar(null);
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

            if ($object->isInitialized('codesStockVar') && null !== $object->getCodesStockVar()) {
                $values = [];
                foreach ($object->getCodesStockVar() as $value) {
                    $values[] = $value;
                }

                $data['codesStockVar'] = $values;
            }

            if ($object->isInitialized('valeursStockVar') && null !== $object->getValeursStockVar()) {
                $values_1 = [];
                foreach ($object->getValeursStockVar() as $value_1) {
                    $values_1[] = $value_1;
                }

                $data['valeursStockVar'] = $values_1;
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [SalarieStockVarResult::class => false];
        }
    }
}
