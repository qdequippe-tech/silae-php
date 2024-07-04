<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\QCCNReponses;
use QdequippeTech\Silae\Api\Model\QReponse;
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
    class QCCNReponsesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return QCCNReponses::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && QCCNReponses::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new QCCNReponses();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('codeCCN', $data) && null !== $data['codeCCN']) {
                $object->setCodeCCN($data['codeCCN']);
            } elseif (\array_key_exists('codeCCN', $data) && null === $data['codeCCN']) {
                $object->setCodeCCN(null);
            }

            if (\array_key_exists('reponses', $data) && null !== $data['reponses']) {
                $values = [];
                foreach ($data['reponses'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, QReponse::class, 'json', $context);
                }

                $object->setReponses($values);
            } elseif (\array_key_exists('reponses', $data) && null === $data['reponses']) {
                $object->setReponses(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('codeCCN') && null !== $object->getCodeCCN()) {
                $data['codeCCN'] = $object->getCodeCCN();
            }

            if ($object->isInitialized('reponses') && null !== $object->getReponses()) {
                $values = [];
                foreach ($object->getReponses() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['reponses'] = $values;
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [QCCNReponses::class => false];
        }
    }
} else {
    class QCCNReponsesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return QCCNReponses::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && QCCNReponses::class === $data::class;
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

            $object = new QCCNReponses();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('codeCCN', $data) && null !== $data['codeCCN']) {
                $object->setCodeCCN($data['codeCCN']);
            } elseif (\array_key_exists('codeCCN', $data) && null === $data['codeCCN']) {
                $object->setCodeCCN(null);
            }

            if (\array_key_exists('reponses', $data) && null !== $data['reponses']) {
                $values = [];
                foreach ($data['reponses'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, QReponse::class, 'json', $context);
                }

                $object->setReponses($values);
            } elseif (\array_key_exists('reponses', $data) && null === $data['reponses']) {
                $object->setReponses(null);
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
            if ($object->isInitialized('codeCCN') && null !== $object->getCodeCCN()) {
                $data['codeCCN'] = $object->getCodeCCN();
            }

            if ($object->isInitialized('reponses') && null !== $object->getReponses()) {
                $values = [];
                foreach ($object->getReponses() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['reponses'] = $values;
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [QCCNReponses::class => false];
        }
    }
}
