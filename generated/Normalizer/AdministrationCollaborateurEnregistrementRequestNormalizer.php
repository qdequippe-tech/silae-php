<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\AdministrationCollaborateurEnregistrementRequest;
use QdequippeTech\Silae\Api\Model\UtilisateurCollaborateur;
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
    class AdministrationCollaborateurEnregistrementRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return AdministrationCollaborateurEnregistrementRequest::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof AdministrationCollaborateurEnregistrementRequest;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new AdministrationCollaborateurEnregistrementRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('utilisateurCollaborateur', $data) && null !== $data['utilisateurCollaborateur']) {
                $object->setUtilisateurCollaborateur($this->denormalizer->denormalize($data['utilisateurCollaborateur'], UtilisateurCollaborateur::class, 'json', $context));
            } elseif (\array_key_exists('utilisateurCollaborateur', $data) && null === $data['utilisateurCollaborateur']) {
                $object->setUtilisateurCollaborateur(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('utilisateurCollaborateur') && null !== $object->getUtilisateurCollaborateur()) {
                $data['utilisateurCollaborateur'] = $this->normalizer->normalize($object->getUtilisateurCollaborateur(), 'json', $context);
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [AdministrationCollaborateurEnregistrementRequest::class => false];
        }
    }
} else {
    class AdministrationCollaborateurEnregistrementRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return AdministrationCollaborateurEnregistrementRequest::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof AdministrationCollaborateurEnregistrementRequest;
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

            $object = new AdministrationCollaborateurEnregistrementRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('utilisateurCollaborateur', $data) && null !== $data['utilisateurCollaborateur']) {
                $object->setUtilisateurCollaborateur($this->denormalizer->denormalize($data['utilisateurCollaborateur'], UtilisateurCollaborateur::class, 'json', $context));
            } elseif (\array_key_exists('utilisateurCollaborateur', $data) && null === $data['utilisateurCollaborateur']) {
                $object->setUtilisateurCollaborateur(null);
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
            if ($object->isInitialized('utilisateurCollaborateur') && null !== $object->getUtilisateurCollaborateur()) {
                $data['utilisateurCollaborateur'] = $this->normalizer->normalize($object->getUtilisateurCollaborateur(), 'json', $context);
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [AdministrationCollaborateurEnregistrementRequest::class => false];
        }
    }
}
