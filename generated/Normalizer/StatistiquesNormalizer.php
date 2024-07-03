<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\Statistiques;
use QdequippeTech\Silae\Api\Model\StatistiquesDADS;
use QdequippeTech\Silae\Api\Model\StatistiquesProduction;
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
    class StatistiquesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return Statistiques::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof Statistiques;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new Statistiques();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('numeroDossier', $data) && null !== $data['numeroDossier']) {
                $object->setNumeroDossier($data['numeroDossier']);
            } elseif (\array_key_exists('numeroDossier', $data) && null === $data['numeroDossier']) {
                $object->setNumeroDossier(null);
            }

            if (\array_key_exists('codeAgence', $data) && null !== $data['codeAgence']) {
                $object->setCodeAgence($data['codeAgence']);
            } elseif (\array_key_exists('codeAgence', $data) && null === $data['codeAgence']) {
                $object->setCodeAgence(null);
            }

            if (\array_key_exists('statistiquesProduction', $data) && null !== $data['statistiquesProduction']) {
                $values = [];
                foreach ($data['statistiquesProduction'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, StatistiquesProduction::class, 'json', $context);
                }

                $object->setStatistiquesProduction($values);
            } elseif (\array_key_exists('statistiquesProduction', $data) && null === $data['statistiquesProduction']) {
                $object->setStatistiquesProduction(null);
            }

            if (\array_key_exists('statistiquesDADS', $data) && null !== $data['statistiquesDADS']) {
                $values_1 = [];
                foreach ($data['statistiquesDADS'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, StatistiquesDADS::class, 'json', $context);
                }

                $object->setStatistiquesDADS($values_1);
            } elseif (\array_key_exists('statistiquesDADS', $data) && null === $data['statistiquesDADS']) {
                $object->setStatistiquesDADS(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('numeroDossier') && null !== $object->getNumeroDossier()) {
                $data['numeroDossier'] = $object->getNumeroDossier();
            }

            if ($object->isInitialized('codeAgence') && null !== $object->getCodeAgence()) {
                $data['codeAgence'] = $object->getCodeAgence();
            }

            if ($object->isInitialized('statistiquesProduction') && null !== $object->getStatistiquesProduction()) {
                $values = [];
                foreach ($object->getStatistiquesProduction() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['statistiquesProduction'] = $values;
            }

            if ($object->isInitialized('statistiquesDADS') && null !== $object->getStatistiquesDADS()) {
                $values_1 = [];
                foreach ($object->getStatistiquesDADS() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }

                $data['statistiquesDADS'] = $values_1;
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [Statistiques::class => false];
        }
    }
} else {
    class StatistiquesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return Statistiques::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof Statistiques;
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

            $object = new Statistiques();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('numeroDossier', $data) && null !== $data['numeroDossier']) {
                $object->setNumeroDossier($data['numeroDossier']);
            } elseif (\array_key_exists('numeroDossier', $data) && null === $data['numeroDossier']) {
                $object->setNumeroDossier(null);
            }

            if (\array_key_exists('codeAgence', $data) && null !== $data['codeAgence']) {
                $object->setCodeAgence($data['codeAgence']);
            } elseif (\array_key_exists('codeAgence', $data) && null === $data['codeAgence']) {
                $object->setCodeAgence(null);
            }

            if (\array_key_exists('statistiquesProduction', $data) && null !== $data['statistiquesProduction']) {
                $values = [];
                foreach ($data['statistiquesProduction'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, StatistiquesProduction::class, 'json', $context);
                }

                $object->setStatistiquesProduction($values);
            } elseif (\array_key_exists('statistiquesProduction', $data) && null === $data['statistiquesProduction']) {
                $object->setStatistiquesProduction(null);
            }

            if (\array_key_exists('statistiquesDADS', $data) && null !== $data['statistiquesDADS']) {
                $values_1 = [];
                foreach ($data['statistiquesDADS'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, StatistiquesDADS::class, 'json', $context);
                }

                $object->setStatistiquesDADS($values_1);
            } elseif (\array_key_exists('statistiquesDADS', $data) && null === $data['statistiquesDADS']) {
                $object->setStatistiquesDADS(null);
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
            if ($object->isInitialized('numeroDossier') && null !== $object->getNumeroDossier()) {
                $data['numeroDossier'] = $object->getNumeroDossier();
            }

            if ($object->isInitialized('codeAgence') && null !== $object->getCodeAgence()) {
                $data['codeAgence'] = $object->getCodeAgence();
            }

            if ($object->isInitialized('statistiquesProduction') && null !== $object->getStatistiquesProduction()) {
                $values = [];
                foreach ($object->getStatistiquesProduction() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['statistiquesProduction'] = $values;
            }

            if ($object->isInitialized('statistiquesDADS') && null !== $object->getStatistiquesDADS()) {
                $values_1 = [];
                foreach ($object->getStatistiquesDADS() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }

                $data['statistiquesDADS'] = $values_1;
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [Statistiques::class => false];
        }
    }
}
