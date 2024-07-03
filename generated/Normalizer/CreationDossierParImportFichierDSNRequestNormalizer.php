<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\CreationDossierParImportFichierDSNRequest;
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
    class CreationDossierParImportFichierDSNRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return CreationDossierParImportFichierDSNRequest::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof CreationDossierParImportFichierDSNRequest;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new CreationDossierParImportFichierDSNRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('dsnEnByteArray', $data) && null !== $data['dsnEnByteArray']) {
                $object->setDsnEnByteArray($data['dsnEnByteArray']);
            } elseif (\array_key_exists('dsnEnByteArray', $data) && null === $data['dsnEnByteArray']) {
                $object->setDsnEnByteArray(null);
            }

            if (\array_key_exists('periodeMin', $data) && null !== $data['periodeMin']) {
                $object->setPeriodeMin(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periodeMin']));
            } elseif (\array_key_exists('periodeMin', $data) && null === $data['periodeMin']) {
                $object->setPeriodeMin(null);
            }

            if (\array_key_exists('periodeMax', $data) && null !== $data['periodeMax']) {
                $object->setPeriodeMax(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periodeMax']));
            } elseif (\array_key_exists('periodeMax', $data) && null === $data['periodeMax']) {
                $object->setPeriodeMax(null);
            }

            if (\array_key_exists('dernierFichier', $data) && null !== $data['dernierFichier']) {
                $object->setDernierFichier($data['dernierFichier']);
            } elseif (\array_key_exists('dernierFichier', $data) && null === $data['dernierFichier']) {
                $object->setDernierFichier(null);
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
            if ($object->isInitialized('dsnEnByteArray') && null !== $object->getDsnEnByteArray()) {
                $data['dsnEnByteArray'] = $object->getDsnEnByteArray();
            }

            if ($object->isInitialized('periodeMin') && null !== $object->getPeriodeMin()) {
                $data['periodeMin'] = $object->getPeriodeMin()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('periodeMax') && null !== $object->getPeriodeMax()) {
                $data['periodeMax'] = $object->getPeriodeMax()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('dernierFichier') && null !== $object->getDernierFichier()) {
                $data['dernierFichier'] = $object->getDernierFichier();
            }

            $data['numeroDossier'] = $object->getNumeroDossier();

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [CreationDossierParImportFichierDSNRequest::class => false];
        }
    }
} else {
    class CreationDossierParImportFichierDSNRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return CreationDossierParImportFichierDSNRequest::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof CreationDossierParImportFichierDSNRequest;
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

            $object = new CreationDossierParImportFichierDSNRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('dsnEnByteArray', $data) && null !== $data['dsnEnByteArray']) {
                $object->setDsnEnByteArray($data['dsnEnByteArray']);
            } elseif (\array_key_exists('dsnEnByteArray', $data) && null === $data['dsnEnByteArray']) {
                $object->setDsnEnByteArray(null);
            }

            if (\array_key_exists('periodeMin', $data) && null !== $data['periodeMin']) {
                $object->setPeriodeMin(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periodeMin']));
            } elseif (\array_key_exists('periodeMin', $data) && null === $data['periodeMin']) {
                $object->setPeriodeMin(null);
            }

            if (\array_key_exists('periodeMax', $data) && null !== $data['periodeMax']) {
                $object->setPeriodeMax(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periodeMax']));
            } elseif (\array_key_exists('periodeMax', $data) && null === $data['periodeMax']) {
                $object->setPeriodeMax(null);
            }

            if (\array_key_exists('dernierFichier', $data) && null !== $data['dernierFichier']) {
                $object->setDernierFichier($data['dernierFichier']);
            } elseif (\array_key_exists('dernierFichier', $data) && null === $data['dernierFichier']) {
                $object->setDernierFichier(null);
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
            if ($object->isInitialized('dsnEnByteArray') && null !== $object->getDsnEnByteArray()) {
                $data['dsnEnByteArray'] = $object->getDsnEnByteArray();
            }

            if ($object->isInitialized('periodeMin') && null !== $object->getPeriodeMin()) {
                $data['periodeMin'] = $object->getPeriodeMin()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('periodeMax') && null !== $object->getPeriodeMax()) {
                $data['periodeMax'] = $object->getPeriodeMax()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('dernierFichier') && null !== $object->getDernierFichier()) {
                $data['dernierFichier'] = $object->getDernierFichier();
            }

            $data['numeroDossier'] = $object->getNumeroDossier();

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [CreationDossierParImportFichierDSNRequest::class => false];
        }
    }
}
