<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\ExtraSalarieAjouterVacationsRequest;
use QdequippeTech\Silae\Api\Model\ExtraSalarieVacations;
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
    class ExtraSalarieAjouterVacationsRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return ExtraSalarieAjouterVacationsRequest::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof ExtraSalarieAjouterVacationsRequest;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new ExtraSalarieAjouterVacationsRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('categorie', $data) && null !== $data['categorie']) {
                $object->setCategorie($data['categorie']);
            } elseif (\array_key_exists('categorie', $data) && null === $data['categorie']) {
                $object->setCategorie(null);
            }

            if (\array_key_exists('extraSalarieVacations', $data) && null !== $data['extraSalarieVacations']) {
                $object->setExtraSalarieVacations($this->denormalizer->denormalize($data['extraSalarieVacations'], ExtraSalarieVacations::class, 'json', $context));
            } elseif (\array_key_exists('extraSalarieVacations', $data) && null === $data['extraSalarieVacations']) {
                $object->setExtraSalarieVacations(null);
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
            if ($object->isInitialized('categorie') && null !== $object->getCategorie()) {
                $data['categorie'] = $object->getCategorie();
            }

            if ($object->isInitialized('extraSalarieVacations') && null !== $object->getExtraSalarieVacations()) {
                $data['extraSalarieVacations'] = $this->normalizer->normalize($object->getExtraSalarieVacations(), 'json', $context);
            }

            $data['numeroDossier'] = $object->getNumeroDossier();

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [ExtraSalarieAjouterVacationsRequest::class => false];
        }
    }
} else {
    class ExtraSalarieAjouterVacationsRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return ExtraSalarieAjouterVacationsRequest::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof ExtraSalarieAjouterVacationsRequest;
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

            $object = new ExtraSalarieAjouterVacationsRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('categorie', $data) && null !== $data['categorie']) {
                $object->setCategorie($data['categorie']);
            } elseif (\array_key_exists('categorie', $data) && null === $data['categorie']) {
                $object->setCategorie(null);
            }

            if (\array_key_exists('extraSalarieVacations', $data) && null !== $data['extraSalarieVacations']) {
                $object->setExtraSalarieVacations($this->denormalizer->denormalize($data['extraSalarieVacations'], ExtraSalarieVacations::class, 'json', $context));
            } elseif (\array_key_exists('extraSalarieVacations', $data) && null === $data['extraSalarieVacations']) {
                $object->setExtraSalarieVacations(null);
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
            if ($object->isInitialized('categorie') && null !== $object->getCategorie()) {
                $data['categorie'] = $object->getCategorie();
            }

            if ($object->isInitialized('extraSalarieVacations') && null !== $object->getExtraSalarieVacations()) {
                $data['extraSalarieVacations'] = $this->normalizer->normalize($object->getExtraSalarieVacations(), 'json', $context);
            }

            $data['numeroDossier'] = $object->getNumeroDossier();

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [ExtraSalarieAjouterVacationsRequest::class => false];
        }
    }
}
