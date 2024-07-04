<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\RequeteSalariesDUE;
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
    class RequeteSalariesDUENormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return RequeteSalariesDUE::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && RequeteSalariesDUE::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new RequeteSalariesDUE();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('matriculesSalaries', $data) && null !== $data['matriculesSalaries']) {
                $values = [];
                foreach ($data['matriculesSalaries'] as $value) {
                    $values[] = $value;
                }

                $object->setMatriculesSalaries($values);
            } elseif (\array_key_exists('matriculesSalaries', $data) && null === $data['matriculesSalaries']) {
                $object->setMatriculesSalaries(null);
            }

            if (\array_key_exists('dateMinEmploi', $data) && null !== $data['dateMinEmploi']) {
                $object->setDateMinEmploi(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateMinEmploi']));
            } elseif (\array_key_exists('dateMinEmploi', $data) && null === $data['dateMinEmploi']) {
                $object->setDateMinEmploi(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('matriculesSalaries') && null !== $object->getMatriculesSalaries()) {
                $values = [];
                foreach ($object->getMatriculesSalaries() as $value) {
                    $values[] = $value;
                }

                $data['matriculesSalaries'] = $values;
            }

            if ($object->isInitialized('dateMinEmploi') && null !== $object->getDateMinEmploi()) {
                $data['dateMinEmploi'] = $object->getDateMinEmploi()->format('Y-m-d\TH:i:s');
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [RequeteSalariesDUE::class => false];
        }
    }
} else {
    class RequeteSalariesDUENormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return RequeteSalariesDUE::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && RequeteSalariesDUE::class === $data::class;
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

            $object = new RequeteSalariesDUE();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('matriculesSalaries', $data) && null !== $data['matriculesSalaries']) {
                $values = [];
                foreach ($data['matriculesSalaries'] as $value) {
                    $values[] = $value;
                }

                $object->setMatriculesSalaries($values);
            } elseif (\array_key_exists('matriculesSalaries', $data) && null === $data['matriculesSalaries']) {
                $object->setMatriculesSalaries(null);
            }

            if (\array_key_exists('dateMinEmploi', $data) && null !== $data['dateMinEmploi']) {
                $object->setDateMinEmploi(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateMinEmploi']));
            } elseif (\array_key_exists('dateMinEmploi', $data) && null === $data['dateMinEmploi']) {
                $object->setDateMinEmploi(null);
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
            if ($object->isInitialized('matriculesSalaries') && null !== $object->getMatriculesSalaries()) {
                $values = [];
                foreach ($object->getMatriculesSalaries() as $value) {
                    $values[] = $value;
                }

                $data['matriculesSalaries'] = $values;
            }

            if ($object->isInitialized('dateMinEmploi') && null !== $object->getDateMinEmploi()) {
                $data['dateMinEmploi'] = $object->getDateMinEmploi()->format('Y-m-d\TH:i:s');
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [RequeteSalariesDUE::class => false];
        }
    }
}
