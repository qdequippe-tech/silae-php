<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\CreationUtilisateurClientPaieRequest;
use QdequippeTech\Silae\Api\Model\UtilisateurClient;
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
    class CreationUtilisateurClientPaieRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return CreationUtilisateurClientPaieRequest::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof CreationUtilisateurClientPaieRequest;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new CreationUtilisateurClientPaieRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('utilisateurClient', $data) && null !== $data['utilisateurClient']) {
                $object->setUtilisateurClient($this->denormalizer->denormalize($data['utilisateurClient'], UtilisateurClient::class, 'json', $context));
            } elseif (\array_key_exists('utilisateurClient', $data) && null === $data['utilisateurClient']) {
                $object->setUtilisateurClient(null);
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
            if ($object->isInitialized('utilisateurClient') && null !== $object->getUtilisateurClient()) {
                $data['utilisateurClient'] = $this->normalizer->normalize($object->getUtilisateurClient(), 'json', $context);
            }

            $data['numeroDossier'] = $object->getNumeroDossier();

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [CreationUtilisateurClientPaieRequest::class => false];
        }
    }
} else {
    class CreationUtilisateurClientPaieRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return CreationUtilisateurClientPaieRequest::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof CreationUtilisateurClientPaieRequest;
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

            $object = new CreationUtilisateurClientPaieRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('utilisateurClient', $data) && null !== $data['utilisateurClient']) {
                $object->setUtilisateurClient($this->denormalizer->denormalize($data['utilisateurClient'], UtilisateurClient::class, 'json', $context));
            } elseif (\array_key_exists('utilisateurClient', $data) && null === $data['utilisateurClient']) {
                $object->setUtilisateurClient(null);
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
            if ($object->isInitialized('utilisateurClient') && null !== $object->getUtilisateurClient()) {
                $data['utilisateurClient'] = $this->normalizer->normalize($object->getUtilisateurClient(), 'json', $context);
            }

            $data['numeroDossier'] = $object->getNumeroDossier();

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [CreationUtilisateurClientPaieRequest::class => false];
        }
    }
}
