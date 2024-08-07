<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\LectureContactEmetteurDSN;
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
    class LectureContactEmetteurDSNNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return LectureContactEmetteurDSN::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && LectureContactEmetteurDSN::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new LectureContactEmetteurDSN();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('siret', $data) && null !== $data['siret']) {
                $object->setSiret($data['siret']);
            } elseif (\array_key_exists('siret', $data) && null === $data['siret']) {
                $object->setSiret(null);
            }

            if (\array_key_exists('nom', $data) && null !== $data['nom']) {
                $object->setNom($data['nom']);
            } elseif (\array_key_exists('nom', $data) && null === $data['nom']) {
                $object->setNom(null);
            }

            if (\array_key_exists('prenom', $data) && null !== $data['prenom']) {
                $object->setPrenom($data['prenom']);
            } elseif (\array_key_exists('prenom', $data) && null === $data['prenom']) {
                $object->setPrenom(null);
            }

            if (\array_key_exists('mail', $data) && null !== $data['mail']) {
                $object->setMail($data['mail']);
            } elseif (\array_key_exists('mail', $data) && null === $data['mail']) {
                $object->setMail(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('siret') && null !== $object->getSiret()) {
                $data['siret'] = $object->getSiret();
            }

            if ($object->isInitialized('nom') && null !== $object->getNom()) {
                $data['nom'] = $object->getNom();
            }

            if ($object->isInitialized('prenom') && null !== $object->getPrenom()) {
                $data['prenom'] = $object->getPrenom();
            }

            if ($object->isInitialized('mail') && null !== $object->getMail()) {
                $data['mail'] = $object->getMail();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [LectureContactEmetteurDSN::class => false];
        }
    }
} else {
    class LectureContactEmetteurDSNNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return LectureContactEmetteurDSN::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && LectureContactEmetteurDSN::class === $data::class;
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

            $object = new LectureContactEmetteurDSN();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('siret', $data) && null !== $data['siret']) {
                $object->setSiret($data['siret']);
            } elseif (\array_key_exists('siret', $data) && null === $data['siret']) {
                $object->setSiret(null);
            }

            if (\array_key_exists('nom', $data) && null !== $data['nom']) {
                $object->setNom($data['nom']);
            } elseif (\array_key_exists('nom', $data) && null === $data['nom']) {
                $object->setNom(null);
            }

            if (\array_key_exists('prenom', $data) && null !== $data['prenom']) {
                $object->setPrenom($data['prenom']);
            } elseif (\array_key_exists('prenom', $data) && null === $data['prenom']) {
                $object->setPrenom(null);
            }

            if (\array_key_exists('mail', $data) && null !== $data['mail']) {
                $object->setMail($data['mail']);
            } elseif (\array_key_exists('mail', $data) && null === $data['mail']) {
                $object->setMail(null);
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
            if ($object->isInitialized('siret') && null !== $object->getSiret()) {
                $data['siret'] = $object->getSiret();
            }

            if ($object->isInitialized('nom') && null !== $object->getNom()) {
                $data['nom'] = $object->getNom();
            }

            if ($object->isInitialized('prenom') && null !== $object->getPrenom()) {
                $data['prenom'] = $object->getPrenom();
            }

            if ($object->isInitialized('mail') && null !== $object->getMail()) {
                $data['mail'] = $object->getMail();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [LectureContactEmetteurDSN::class => false];
        }
    }
}
