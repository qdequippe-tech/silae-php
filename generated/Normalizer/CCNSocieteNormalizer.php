<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\CCNSociete;
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
    class CCNSocieteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return CCNSociete::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && CCNSociete::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new CCNSociete();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('codeCCN', $data) && null !== $data['codeCCN']) {
                $object->setCodeCCN($data['codeCCN']);
            } elseif (\array_key_exists('codeCCN', $data) && null === $data['codeCCN']) {
                $object->setCodeCCN(null);
            }

            if (\array_key_exists('idcc', $data) && null !== $data['idcc']) {
                $object->setIdcc($data['idcc']);
            } elseif (\array_key_exists('idcc', $data) && null === $data['idcc']) {
                $object->setIdcc(null);
            }

            if (\array_key_exists('codeJO', $data) && null !== $data['codeJO']) {
                $object->setCodeJO($data['codeJO']);
            } elseif (\array_key_exists('codeJO', $data) && null === $data['codeJO']) {
                $object->setCodeJO(null);
            }

            if (\array_key_exists('forceApplicationExtension', $data) && null !== $data['forceApplicationExtension']) {
                $object->setForceApplicationExtension($data['forceApplicationExtension']);
            } elseif (\array_key_exists('forceApplicationExtension', $data) && null === $data['forceApplicationExtension']) {
                $object->setForceApplicationExtension(null);
            }

            if (\array_key_exists('syndicat', $data) && null !== $data['syndicat']) {
                $object->setSyndicat($data['syndicat']);
            } elseif (\array_key_exists('syndicat', $data) && null === $data['syndicat']) {
                $object->setSyndicat(null);
            }

            if (\array_key_exists('ccSiege', $data) && null !== $data['ccSiege']) {
                $object->setCcSiege($data['ccSiege']);
            } elseif (\array_key_exists('ccSiege', $data) && null === $data['ccSiege']) {
                $object->setCcSiege(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('codeCCN') && null !== $object->getCodeCCN()) {
                $data['codeCCN'] = $object->getCodeCCN();
            }

            if ($object->isInitialized('idcc') && null !== $object->getIdcc()) {
                $data['idcc'] = $object->getIdcc();
            }

            if ($object->isInitialized('codeJO') && null !== $object->getCodeJO()) {
                $data['codeJO'] = $object->getCodeJO();
            }

            if ($object->isInitialized('forceApplicationExtension') && null !== $object->getForceApplicationExtension()) {
                $data['forceApplicationExtension'] = $object->getForceApplicationExtension();
            }

            if ($object->isInitialized('syndicat') && null !== $object->getSyndicat()) {
                $data['syndicat'] = $object->getSyndicat();
            }

            if ($object->isInitialized('ccSiege') && null !== $object->getCcSiege()) {
                $data['ccSiege'] = $object->getCcSiege();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [CCNSociete::class => false];
        }
    }
} else {
    class CCNSocieteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return CCNSociete::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && CCNSociete::class === $data::class;
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

            $object = new CCNSociete();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('codeCCN', $data) && null !== $data['codeCCN']) {
                $object->setCodeCCN($data['codeCCN']);
            } elseif (\array_key_exists('codeCCN', $data) && null === $data['codeCCN']) {
                $object->setCodeCCN(null);
            }

            if (\array_key_exists('idcc', $data) && null !== $data['idcc']) {
                $object->setIdcc($data['idcc']);
            } elseif (\array_key_exists('idcc', $data) && null === $data['idcc']) {
                $object->setIdcc(null);
            }

            if (\array_key_exists('codeJO', $data) && null !== $data['codeJO']) {
                $object->setCodeJO($data['codeJO']);
            } elseif (\array_key_exists('codeJO', $data) && null === $data['codeJO']) {
                $object->setCodeJO(null);
            }

            if (\array_key_exists('forceApplicationExtension', $data) && null !== $data['forceApplicationExtension']) {
                $object->setForceApplicationExtension($data['forceApplicationExtension']);
            } elseif (\array_key_exists('forceApplicationExtension', $data) && null === $data['forceApplicationExtension']) {
                $object->setForceApplicationExtension(null);
            }

            if (\array_key_exists('syndicat', $data) && null !== $data['syndicat']) {
                $object->setSyndicat($data['syndicat']);
            } elseif (\array_key_exists('syndicat', $data) && null === $data['syndicat']) {
                $object->setSyndicat(null);
            }

            if (\array_key_exists('ccSiege', $data) && null !== $data['ccSiege']) {
                $object->setCcSiege($data['ccSiege']);
            } elseif (\array_key_exists('ccSiege', $data) && null === $data['ccSiege']) {
                $object->setCcSiege(null);
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

            if ($object->isInitialized('idcc') && null !== $object->getIdcc()) {
                $data['idcc'] = $object->getIdcc();
            }

            if ($object->isInitialized('codeJO') && null !== $object->getCodeJO()) {
                $data['codeJO'] = $object->getCodeJO();
            }

            if ($object->isInitialized('forceApplicationExtension') && null !== $object->getForceApplicationExtension()) {
                $data['forceApplicationExtension'] = $object->getForceApplicationExtension();
            }

            if ($object->isInitialized('syndicat') && null !== $object->getSyndicat()) {
                $data['syndicat'] = $object->getSyndicat();
            }

            if ($object->isInitialized('ccSiege') && null !== $object->getCcSiege()) {
                $data['ccSiege'] = $object->getCcSiege();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [CCNSociete::class => false];
        }
    }
}
