<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\AxesAnalytiqueSalarie;
use QdequippeTech\Silae\Api\Model\DonneesAxeAnalytiqueSalarie;
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

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('matriculeSalarie') && null !== $object->getMatriculeSalarie()) {
                $data['matriculeSalarie'] = $object->getMatriculeSalarie();
            }

            if ($object->isInitialized('nomAffiche') && null !== $object->getNomAffiche()) {
                $data['nomAffiche'] = $object->getNomAffiche();
            }

            if ($object->isInitialized('affectationAnalytique') && null !== $object->getAffectationAnalytique()) {
                $values = [];
                foreach ($object->getAffectationAnalytique() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['affectationAnalytique'] = $values;
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [AxesAnalytiqueSalarie::class => false];
        }
    }
} else {
    class AxesAnalytiqueSalarieNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return AxesAnalytiqueSalarie::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && AxesAnalytiqueSalarie::class === $data::class;
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

            if ($object->isInitialized('nomAffiche') && null !== $object->getNomAffiche()) {
                $data['nomAffiche'] = $object->getNomAffiche();
            }

            if ($object->isInitialized('affectationAnalytique') && null !== $object->getAffectationAnalytique()) {
                $values = [];
                foreach ($object->getAffectationAnalytique() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['affectationAnalytique'] = $values;
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [AxesAnalytiqueSalarie::class => false];
        }
    }
}
