<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\StatistiquesDADS;
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
    class StatistiquesDADSNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return StatistiquesDADS::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof StatistiquesDADS;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new StatistiquesDADS();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('annee', $data) && null !== $data['annee']) {
                $object->setAnnee($data['annee']);
            } elseif (\array_key_exists('annee', $data) && null === $data['annee']) {
                $object->setAnnee(null);
            }

            if (\array_key_exists('nbSalaries', $data) && null !== $data['nbSalaries']) {
                $object->setNbSalaries($data['nbSalaries']);
            } elseif (\array_key_exists('nbSalaries', $data) && null === $data['nbSalaries']) {
                $object->setNbSalaries(null);
            }

            if (\array_key_exists('effectif3112', $data) && null !== $data['effectif3112']) {
                $object->setEffectif3112($data['effectif3112']);
            } elseif (\array_key_exists('effectif3112', $data) && null === $data['effectif3112']) {
                $object->setEffectif3112(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('annee') && null !== $object->getAnnee()) {
                $data['annee'] = $object->getAnnee();
            }

            if ($object->isInitialized('nbSalaries') && null !== $object->getNbSalaries()) {
                $data['nbSalaries'] = $object->getNbSalaries();
            }

            if ($object->isInitialized('effectif3112') && null !== $object->getEffectif3112()) {
                $data['effectif3112'] = $object->getEffectif3112();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [StatistiquesDADS::class => false];
        }
    }
} else {
    class StatistiquesDADSNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return StatistiquesDADS::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof StatistiquesDADS;
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

            $object = new StatistiquesDADS();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('annee', $data) && null !== $data['annee']) {
                $object->setAnnee($data['annee']);
            } elseif (\array_key_exists('annee', $data) && null === $data['annee']) {
                $object->setAnnee(null);
            }

            if (\array_key_exists('nbSalaries', $data) && null !== $data['nbSalaries']) {
                $object->setNbSalaries($data['nbSalaries']);
            } elseif (\array_key_exists('nbSalaries', $data) && null === $data['nbSalaries']) {
                $object->setNbSalaries(null);
            }

            if (\array_key_exists('effectif3112', $data) && null !== $data['effectif3112']) {
                $object->setEffectif3112($data['effectif3112']);
            } elseif (\array_key_exists('effectif3112', $data) && null === $data['effectif3112']) {
                $object->setEffectif3112(null);
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
            if ($object->isInitialized('annee') && null !== $object->getAnnee()) {
                $data['annee'] = $object->getAnnee();
            }

            if ($object->isInitialized('nbSalaries') && null !== $object->getNbSalaries()) {
                $data['nbSalaries'] = $object->getNbSalaries();
            }

            if ($object->isInitialized('effectif3112') && null !== $object->getEffectif3112()) {
                $data['effectif3112'] = $object->getEffectif3112();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [StatistiquesDADS::class => false];
        }
    }
}
