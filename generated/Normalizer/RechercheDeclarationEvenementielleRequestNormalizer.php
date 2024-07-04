<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\RechercheDeclarationEvenementielleRequest;
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
    class RechercheDeclarationEvenementielleRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return RechercheDeclarationEvenementielleRequest::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && RechercheDeclarationEvenementielleRequest::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new RechercheDeclarationEvenementielleRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('etatDeclaration', $data) && null !== $data['etatDeclaration']) {
                $object->setEtatDeclaration($data['etatDeclaration']);
            } elseif (\array_key_exists('etatDeclaration', $data) && null === $data['etatDeclaration']) {
                $object->setEtatDeclaration(null);
            }

            if (\array_key_exists('periode', $data) && null !== $data['periode']) {
                $object->setPeriode(\DateTime::createFromFormat('Y-m-d', $data['periode'])->setTime(0, 0, 0));
            } elseif (\array_key_exists('periode', $data) && null === $data['periode']) {
                $object->setPeriode(null);
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
            if ($object->isInitialized('etatDeclaration') && null !== $object->getEtatDeclaration()) {
                $data['etatDeclaration'] = $object->getEtatDeclaration();
            }

            if ($object->isInitialized('periode') && null !== $object->getPeriode()) {
                $data['periode'] = $object->getPeriode()->format('Y-m-d');
            }

            $data['numeroDossier'] = $object->getNumeroDossier();

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [RechercheDeclarationEvenementielleRequest::class => false];
        }
    }
} else {
    class RechercheDeclarationEvenementielleRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return RechercheDeclarationEvenementielleRequest::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && RechercheDeclarationEvenementielleRequest::class === $data::class;
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

            $object = new RechercheDeclarationEvenementielleRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('etatDeclaration', $data) && null !== $data['etatDeclaration']) {
                $object->setEtatDeclaration($data['etatDeclaration']);
            } elseif (\array_key_exists('etatDeclaration', $data) && null === $data['etatDeclaration']) {
                $object->setEtatDeclaration(null);
            }

            if (\array_key_exists('periode', $data) && null !== $data['periode']) {
                $object->setPeriode(\DateTime::createFromFormat('Y-m-d', $data['periode'])->setTime(0, 0, 0));
            } elseif (\array_key_exists('periode', $data) && null === $data['periode']) {
                $object->setPeriode(null);
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
            if ($object->isInitialized('etatDeclaration') && null !== $object->getEtatDeclaration()) {
                $data['etatDeclaration'] = $object->getEtatDeclaration();
            }

            if ($object->isInitialized('periode') && null !== $object->getPeriode()) {
                $data['periode'] = $object->getPeriode()->format('Y-m-d');
            }

            $data['numeroDossier'] = $object->getNumeroDossier();

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [RechercheDeclarationEvenementielleRequest::class => false];
        }
    }
}
