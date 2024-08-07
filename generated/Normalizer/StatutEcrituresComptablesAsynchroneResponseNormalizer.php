<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\EcrituresComptables;
use QdequippeTech\Silae\Api\Model\StatutEcrituresComptablesAsynchroneResponse;
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
    class StatutEcrituresComptablesAsynchroneResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return StatutEcrituresComptablesAsynchroneResponse::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && StatutEcrituresComptablesAsynchroneResponse::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new StatutEcrituresComptablesAsynchroneResponse();
            if (\array_key_exists('progression', $data) && \is_int($data['progression'])) {
                $data['progression'] = (float) $data['progression'];
            }

            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('ecrituresComptables', $data) && null !== $data['ecrituresComptables']) {
                $object->setEcrituresComptables($this->denormalizer->denormalize($data['ecrituresComptables'], EcrituresComptables::class, 'json', $context));
            } elseif (\array_key_exists('ecrituresComptables', $data) && null === $data['ecrituresComptables']) {
                $object->setEcrituresComptables(null);
            }

            if (\array_key_exists('statut', $data) && null !== $data['statut']) {
                $object->setStatut($data['statut']);
            } elseif (\array_key_exists('statut', $data) && null === $data['statut']) {
                $object->setStatut(null);
            }

            if (\array_key_exists('messageErreur', $data) && null !== $data['messageErreur']) {
                $object->setMessageErreur($data['messageErreur']);
            } elseif (\array_key_exists('messageErreur', $data) && null === $data['messageErreur']) {
                $object->setMessageErreur(null);
            }

            if (\array_key_exists('progression', $data) && null !== $data['progression']) {
                $object->setProgression($data['progression']);
            } elseif (\array_key_exists('progression', $data) && null === $data['progression']) {
                $object->setProgression(null);
            }

            if (\array_key_exists('dureeExecution', $data) && null !== $data['dureeExecution']) {
                $object->setDureeExecution($data['dureeExecution']);
            } elseif (\array_key_exists('dureeExecution', $data) && null === $data['dureeExecution']) {
                $object->setDureeExecution(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('ecrituresComptables') && null !== $object->getEcrituresComptables()) {
                $data['ecrituresComptables'] = $this->normalizer->normalize($object->getEcrituresComptables(), 'json', $context);
            }

            if ($object->isInitialized('statut') && null !== $object->getStatut()) {
                $data['statut'] = $object->getStatut();
            }

            if ($object->isInitialized('messageErreur') && null !== $object->getMessageErreur()) {
                $data['messageErreur'] = $object->getMessageErreur();
            }

            if ($object->isInitialized('progression') && null !== $object->getProgression()) {
                $data['progression'] = $object->getProgression();
            }

            if ($object->isInitialized('dureeExecution') && null !== $object->getDureeExecution()) {
                $data['dureeExecution'] = $object->getDureeExecution();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [StatutEcrituresComptablesAsynchroneResponse::class => false];
        }
    }
} else {
    class StatutEcrituresComptablesAsynchroneResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return StatutEcrituresComptablesAsynchroneResponse::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && StatutEcrituresComptablesAsynchroneResponse::class === $data::class;
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

            $object = new StatutEcrituresComptablesAsynchroneResponse();
            if (\array_key_exists('progression', $data) && \is_int($data['progression'])) {
                $data['progression'] = (float) $data['progression'];
            }

            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('ecrituresComptables', $data) && null !== $data['ecrituresComptables']) {
                $object->setEcrituresComptables($this->denormalizer->denormalize($data['ecrituresComptables'], EcrituresComptables::class, 'json', $context));
            } elseif (\array_key_exists('ecrituresComptables', $data) && null === $data['ecrituresComptables']) {
                $object->setEcrituresComptables(null);
            }

            if (\array_key_exists('statut', $data) && null !== $data['statut']) {
                $object->setStatut($data['statut']);
            } elseif (\array_key_exists('statut', $data) && null === $data['statut']) {
                $object->setStatut(null);
            }

            if (\array_key_exists('messageErreur', $data) && null !== $data['messageErreur']) {
                $object->setMessageErreur($data['messageErreur']);
            } elseif (\array_key_exists('messageErreur', $data) && null === $data['messageErreur']) {
                $object->setMessageErreur(null);
            }

            if (\array_key_exists('progression', $data) && null !== $data['progression']) {
                $object->setProgression($data['progression']);
            } elseif (\array_key_exists('progression', $data) && null === $data['progression']) {
                $object->setProgression(null);
            }

            if (\array_key_exists('dureeExecution', $data) && null !== $data['dureeExecution']) {
                $object->setDureeExecution($data['dureeExecution']);
            } elseif (\array_key_exists('dureeExecution', $data) && null === $data['dureeExecution']) {
                $object->setDureeExecution(null);
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
            if ($object->isInitialized('ecrituresComptables') && null !== $object->getEcrituresComptables()) {
                $data['ecrituresComptables'] = $this->normalizer->normalize($object->getEcrituresComptables(), 'json', $context);
            }

            if ($object->isInitialized('statut') && null !== $object->getStatut()) {
                $data['statut'] = $object->getStatut();
            }

            if ($object->isInitialized('messageErreur') && null !== $object->getMessageErreur()) {
                $data['messageErreur'] = $object->getMessageErreur();
            }

            if ($object->isInitialized('progression') && null !== $object->getProgression()) {
                $data['progression'] = $object->getProgression();
            }

            if ($object->isInitialized('dureeExecution') && null !== $object->getDureeExecution()) {
                $data['dureeExecution'] = $object->getDureeExecution();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [StatutEcrituresComptablesAsynchroneResponse::class => false];
        }
    }
}
