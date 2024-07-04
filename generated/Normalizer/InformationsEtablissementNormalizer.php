<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\InformationsEtablissement;
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
    class InformationsEtablissementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return InformationsEtablissement::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && InformationsEtablissement::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new InformationsEtablissement();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('nomInterne', $data) && null !== $data['nomInterne']) {
                $object->setNomInterne($data['nomInterne']);
            } elseif (\array_key_exists('nomInterne', $data) && null === $data['nomInterne']) {
                $object->setNomInterne(null);
            }

            if (\array_key_exists('siret', $data) && null !== $data['siret']) {
                $object->setSiret($data['siret']);
            } elseif (\array_key_exists('siret', $data) && null === $data['siret']) {
                $object->setSiret(null);
            }

            if (\array_key_exists('etablissementPrincipal', $data) && null !== $data['etablissementPrincipal']) {
                $object->setEtablissementPrincipal($data['etablissementPrincipal']);
            } elseif (\array_key_exists('etablissementPrincipal', $data) && null === $data['etablissementPrincipal']) {
                $object->setEtablissementPrincipal(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('nomInterne') && null !== $object->getNomInterne()) {
                $data['nomInterne'] = $object->getNomInterne();
            }

            if ($object->isInitialized('siret') && null !== $object->getSiret()) {
                $data['siret'] = $object->getSiret();
            }

            if ($object->isInitialized('etablissementPrincipal') && null !== $object->getEtablissementPrincipal()) {
                $data['etablissementPrincipal'] = $object->getEtablissementPrincipal();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [InformationsEtablissement::class => false];
        }
    }
} else {
    class InformationsEtablissementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return InformationsEtablissement::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && InformationsEtablissement::class === $data::class;
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

            $object = new InformationsEtablissement();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('nomInterne', $data) && null !== $data['nomInterne']) {
                $object->setNomInterne($data['nomInterne']);
            } elseif (\array_key_exists('nomInterne', $data) && null === $data['nomInterne']) {
                $object->setNomInterne(null);
            }

            if (\array_key_exists('siret', $data) && null !== $data['siret']) {
                $object->setSiret($data['siret']);
            } elseif (\array_key_exists('siret', $data) && null === $data['siret']) {
                $object->setSiret(null);
            }

            if (\array_key_exists('etablissementPrincipal', $data) && null !== $data['etablissementPrincipal']) {
                $object->setEtablissementPrincipal($data['etablissementPrincipal']);
            } elseif (\array_key_exists('etablissementPrincipal', $data) && null === $data['etablissementPrincipal']) {
                $object->setEtablissementPrincipal(null);
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
            if ($object->isInitialized('nomInterne') && null !== $object->getNomInterne()) {
                $data['nomInterne'] = $object->getNomInterne();
            }

            if ($object->isInitialized('siret') && null !== $object->getSiret()) {
                $data['siret'] = $object->getSiret();
            }

            if ($object->isInitialized('etablissementPrincipal') && null !== $object->getEtablissementPrincipal()) {
                $data['etablissementPrincipal'] = $object->getEtablissementPrincipal();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [InformationsEtablissement::class => false];
        }
    }
}
