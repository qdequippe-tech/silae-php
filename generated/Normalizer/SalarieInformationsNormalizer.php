<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SalarieInformations;
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
    class SalarieInformationsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return SalarieInformations::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && SalarieInformations::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new SalarieInformations();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('matriculeSalarie', $data) && null !== $data['matriculeSalarie']) {
                $object->setMatriculeSalarie($data['matriculeSalarie']);
            } elseif (\array_key_exists('matriculeSalarie', $data) && null === $data['matriculeSalarie']) {
                $object->setMatriculeSalarie(null);
            }

            if (\array_key_exists('numeroSecuriteSociale', $data) && null !== $data['numeroSecuriteSociale']) {
                $object->setNumeroSecuriteSociale($data['numeroSecuriteSociale']);
            } elseif (\array_key_exists('numeroSecuriteSociale', $data) && null === $data['numeroSecuriteSociale']) {
                $object->setNumeroSecuriteSociale(null);
            }

            if (\array_key_exists('nomAffiche', $data) && null !== $data['nomAffiche']) {
                $object->setNomAffiche($data['nomAffiche']);
            } elseif (\array_key_exists('nomAffiche', $data) && null === $data['nomAffiche']) {
                $object->setNomAffiche(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('matriculeSalarie') && null !== $object->getMatriculeSalarie()) {
                $data['matriculeSalarie'] = $object->getMatriculeSalarie();
            }

            if ($object->isInitialized('numeroSecuriteSociale') && null !== $object->getNumeroSecuriteSociale()) {
                $data['numeroSecuriteSociale'] = $object->getNumeroSecuriteSociale();
            }

            if ($object->isInitialized('nomAffiche') && null !== $object->getNomAffiche()) {
                $data['nomAffiche'] = $object->getNomAffiche();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [SalarieInformations::class => false];
        }
    }
} else {
    class SalarieInformationsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return SalarieInformations::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && SalarieInformations::class === $data::class;
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

            $object = new SalarieInformations();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('matriculeSalarie', $data) && null !== $data['matriculeSalarie']) {
                $object->setMatriculeSalarie($data['matriculeSalarie']);
            } elseif (\array_key_exists('matriculeSalarie', $data) && null === $data['matriculeSalarie']) {
                $object->setMatriculeSalarie(null);
            }

            if (\array_key_exists('numeroSecuriteSociale', $data) && null !== $data['numeroSecuriteSociale']) {
                $object->setNumeroSecuriteSociale($data['numeroSecuriteSociale']);
            } elseif (\array_key_exists('numeroSecuriteSociale', $data) && null === $data['numeroSecuriteSociale']) {
                $object->setNumeroSecuriteSociale(null);
            }

            if (\array_key_exists('nomAffiche', $data) && null !== $data['nomAffiche']) {
                $object->setNomAffiche($data['nomAffiche']);
            } elseif (\array_key_exists('nomAffiche', $data) && null === $data['nomAffiche']) {
                $object->setNomAffiche(null);
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

            if ($object->isInitialized('numeroSecuriteSociale') && null !== $object->getNumeroSecuriteSociale()) {
                $data['numeroSecuriteSociale'] = $object->getNumeroSecuriteSociale();
            }

            if ($object->isInitialized('nomAffiche') && null !== $object->getNomAffiche()) {
                $data['nomAffiche'] = $object->getNomAffiche();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [SalarieInformations::class => false];
        }
    }
}
