<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\EffectifSociete;
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
    class EffectifSocieteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return EffectifSociete::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof EffectifSociete;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new EffectifSociete();
            if (\array_key_exists('effectif1_GlobalURSSAF', $data) && \is_int($data['effectif1_GlobalURSSAF'])) {
                $data['effectif1_GlobalURSSAF'] = (float) $data['effectif1_GlobalURSSAF'];
            }

            if (\array_key_exists('effectif2_MoyenURSAFF', $data) && \is_int($data['effectif2_MoyenURSAFF'])) {
                $data['effectif2_MoyenURSAFF'] = (float) $data['effectif2_MoyenURSAFF'];
            }

            if (\array_key_exists('effectif_DADSU', $data) && \is_int($data['effectif_DADSU'])) {
                $data['effectif_DADSU'] = (float) $data['effectif_DADSU'];
            }

            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('annee', $data) && null !== $data['annee']) {
                $object->setAnnee(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['annee']));
            } elseif (\array_key_exists('annee', $data) && null === $data['annee']) {
                $object->setAnnee(null);
            }

            if (\array_key_exists('effectif1_GlobalURSSAF', $data) && null !== $data['effectif1_GlobalURSSAF']) {
                $object->setEffectif1GlobalURSSAF($data['effectif1_GlobalURSSAF']);
            } elseif (\array_key_exists('effectif1_GlobalURSSAF', $data) && null === $data['effectif1_GlobalURSSAF']) {
                $object->setEffectif1GlobalURSSAF(null);
            }

            if (\array_key_exists('effectif2_MoyenURSAFF', $data) && null !== $data['effectif2_MoyenURSAFF']) {
                $object->setEffectif2MoyenURSAFF($data['effectif2_MoyenURSAFF']);
            } elseif (\array_key_exists('effectif2_MoyenURSAFF', $data) && null === $data['effectif2_MoyenURSAFF']) {
                $object->setEffectif2MoyenURSAFF(null);
            }

            if (\array_key_exists('effectif_DADSU', $data) && null !== $data['effectif_DADSU']) {
                $object->setEffectifDADSU($data['effectif_DADSU']);
            } elseif (\array_key_exists('effectif_DADSU', $data) && null === $data['effectif_DADSU']) {
                $object->setEffectifDADSU(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('annee') && null !== $object->getAnnee()) {
                $data['annee'] = $object->getAnnee()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('effectif1GlobalURSSAF') && null !== $object->getEffectif1GlobalURSSAF()) {
                $data['effectif1_GlobalURSSAF'] = $object->getEffectif1GlobalURSSAF();
            }

            if ($object->isInitialized('effectif2MoyenURSAFF') && null !== $object->getEffectif2MoyenURSAFF()) {
                $data['effectif2_MoyenURSAFF'] = $object->getEffectif2MoyenURSAFF();
            }

            if ($object->isInitialized('effectifDADSU') && null !== $object->getEffectifDADSU()) {
                $data['effectif_DADSU'] = $object->getEffectifDADSU();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [EffectifSociete::class => false];
        }
    }
} else {
    class EffectifSocieteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return EffectifSociete::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof EffectifSociete;
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

            $object = new EffectifSociete();
            if (\array_key_exists('effectif1_GlobalURSSAF', $data) && \is_int($data['effectif1_GlobalURSSAF'])) {
                $data['effectif1_GlobalURSSAF'] = (float) $data['effectif1_GlobalURSSAF'];
            }

            if (\array_key_exists('effectif2_MoyenURSAFF', $data) && \is_int($data['effectif2_MoyenURSAFF'])) {
                $data['effectif2_MoyenURSAFF'] = (float) $data['effectif2_MoyenURSAFF'];
            }

            if (\array_key_exists('effectif_DADSU', $data) && \is_int($data['effectif_DADSU'])) {
                $data['effectif_DADSU'] = (float) $data['effectif_DADSU'];
            }

            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('annee', $data) && null !== $data['annee']) {
                $object->setAnnee(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['annee']));
            } elseif (\array_key_exists('annee', $data) && null === $data['annee']) {
                $object->setAnnee(null);
            }

            if (\array_key_exists('effectif1_GlobalURSSAF', $data) && null !== $data['effectif1_GlobalURSSAF']) {
                $object->setEffectif1GlobalURSSAF($data['effectif1_GlobalURSSAF']);
            } elseif (\array_key_exists('effectif1_GlobalURSSAF', $data) && null === $data['effectif1_GlobalURSSAF']) {
                $object->setEffectif1GlobalURSSAF(null);
            }

            if (\array_key_exists('effectif2_MoyenURSAFF', $data) && null !== $data['effectif2_MoyenURSAFF']) {
                $object->setEffectif2MoyenURSAFF($data['effectif2_MoyenURSAFF']);
            } elseif (\array_key_exists('effectif2_MoyenURSAFF', $data) && null === $data['effectif2_MoyenURSAFF']) {
                $object->setEffectif2MoyenURSAFF(null);
            }

            if (\array_key_exists('effectif_DADSU', $data) && null !== $data['effectif_DADSU']) {
                $object->setEffectifDADSU($data['effectif_DADSU']);
            } elseif (\array_key_exists('effectif_DADSU', $data) && null === $data['effectif_DADSU']) {
                $object->setEffectifDADSU(null);
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
                $data['annee'] = $object->getAnnee()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('effectif1GlobalURSSAF') && null !== $object->getEffectif1GlobalURSSAF()) {
                $data['effectif1_GlobalURSSAF'] = $object->getEffectif1GlobalURSSAF();
            }

            if ($object->isInitialized('effectif2MoyenURSAFF') && null !== $object->getEffectif2MoyenURSAFF()) {
                $data['effectif2_MoyenURSAFF'] = $object->getEffectif2MoyenURSAFF();
            }

            if ($object->isInitialized('effectifDADSU') && null !== $object->getEffectifDADSU()) {
                $data['effectif_DADSU'] = $object->getEffectifDADSU();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [EffectifSociete::class => false];
        }
    }
}
