<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\AjoutSousCategorieAxeAnalytiqueRequest;
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
    class AjoutSousCategorieAxeAnalytiqueRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return AjoutSousCategorieAxeAnalytiqueRequest::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof AjoutSousCategorieAxeAnalytiqueRequest;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new AjoutSousCategorieAxeAnalytiqueRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('nomAxe', $data) && null !== $data['nomAxe']) {
                $object->setNomAxe($data['nomAxe']);
            } elseif (\array_key_exists('nomAxe', $data) && null === $data['nomAxe']) {
                $object->setNomAxe(null);
            }

            if (\array_key_exists('nomSousCategorie', $data) && null !== $data['nomSousCategorie']) {
                $object->setNomSousCategorie($data['nomSousCategorie']);
            } elseif (\array_key_exists('nomSousCategorie', $data) && null === $data['nomSousCategorie']) {
                $object->setNomSousCategorie(null);
            }

            if (\array_key_exists('numeroDossier', $data) && null !== $data['numeroDossier']) {
                $object->setNumeroDossier($data['numeroDossier']);
            } elseif (\array_key_exists('numeroDossier', $data) && null === $data['numeroDossier']) {
                $object->setNumeroDossier(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('nomAxe') && null !== $object->getNomAxe()) {
                $data['nomAxe'] = $object->getNomAxe();
            }

            if ($object->isInitialized('nomSousCategorie') && null !== $object->getNomSousCategorie()) {
                $data['nomSousCategorie'] = $object->getNomSousCategorie();
            }

            $data['numeroDossier'] = $object->getNumeroDossier();

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [AjoutSousCategorieAxeAnalytiqueRequest::class => false];
        }
    }
} else {
    class AjoutSousCategorieAxeAnalytiqueRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return AjoutSousCategorieAxeAnalytiqueRequest::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof AjoutSousCategorieAxeAnalytiqueRequest;
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

            $object = new AjoutSousCategorieAxeAnalytiqueRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('nomAxe', $data) && null !== $data['nomAxe']) {
                $object->setNomAxe($data['nomAxe']);
            } elseif (\array_key_exists('nomAxe', $data) && null === $data['nomAxe']) {
                $object->setNomAxe(null);
            }

            if (\array_key_exists('nomSousCategorie', $data) && null !== $data['nomSousCategorie']) {
                $object->setNomSousCategorie($data['nomSousCategorie']);
            } elseif (\array_key_exists('nomSousCategorie', $data) && null === $data['nomSousCategorie']) {
                $object->setNomSousCategorie(null);
            }

            if (\array_key_exists('numeroDossier', $data) && null !== $data['numeroDossier']) {
                $object->setNumeroDossier($data['numeroDossier']);
            } elseif (\array_key_exists('numeroDossier', $data) && null === $data['numeroDossier']) {
                $object->setNumeroDossier(null);
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
            if ($object->isInitialized('nomAxe') && null !== $object->getNomAxe()) {
                $data['nomAxe'] = $object->getNomAxe();
            }

            if ($object->isInitialized('nomSousCategorie') && null !== $object->getNomSousCategorie()) {
                $data['nomSousCategorie'] = $object->getNomSousCategorie();
            }

            $data['numeroDossier'] = $object->getNumeroDossier();

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [AjoutSousCategorieAxeAnalytiqueRequest::class => false];
        }
    }
}
