<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\LigneBulletin;
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
    class LigneBulletinNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return LigneBulletin::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof LigneBulletin;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new LigneBulletin();
            if (\array_key_exists('baseSalariale', $data) && \is_int($data['baseSalariale'])) {
                $data['baseSalariale'] = (float) $data['baseSalariale'];
            }

            if (\array_key_exists('tauxOuMontantSalarial', $data) && \is_int($data['tauxOuMontantSalarial'])) {
                $data['tauxOuMontantSalarial'] = (float) $data['tauxOuMontantSalarial'];
            }

            if (\array_key_exists('resultatSalarial', $data) && \is_int($data['resultatSalarial'])) {
                $data['resultatSalarial'] = (float) $data['resultatSalarial'];
            }

            if (\array_key_exists('basePatronale', $data) && \is_int($data['basePatronale'])) {
                $data['basePatronale'] = (float) $data['basePatronale'];
            }

            if (\array_key_exists('tauxOuMontantPatronal', $data) && \is_int($data['tauxOuMontantPatronal'])) {
                $data['tauxOuMontantPatronal'] = (float) $data['tauxOuMontantPatronal'];
            }

            if (\array_key_exists('resultatPatronal', $data) && \is_int($data['resultatPatronal'])) {
                $data['resultatPatronal'] = (float) $data['resultatPatronal'];
            }

            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('codeLibelle', $data) && null !== $data['codeLibelle']) {
                $object->setCodeLibelle($data['codeLibelle']);
            } elseif (\array_key_exists('codeLibelle', $data) && null === $data['codeLibelle']) {
                $object->setCodeLibelle(null);
            }

            if (\array_key_exists('libelle', $data) && null !== $data['libelle']) {
                $object->setLibelle($data['libelle']);
            } elseif (\array_key_exists('libelle', $data) && null === $data['libelle']) {
                $object->setLibelle(null);
            }

            if (\array_key_exists('baseSalariale', $data) && null !== $data['baseSalariale']) {
                $object->setBaseSalariale($data['baseSalariale']);
            } elseif (\array_key_exists('baseSalariale', $data) && null === $data['baseSalariale']) {
                $object->setBaseSalariale(null);
            }

            if (\array_key_exists('tauxOuMontantSalarial', $data) && null !== $data['tauxOuMontantSalarial']) {
                $object->setTauxOuMontantSalarial($data['tauxOuMontantSalarial']);
            } elseif (\array_key_exists('tauxOuMontantSalarial', $data) && null === $data['tauxOuMontantSalarial']) {
                $object->setTauxOuMontantSalarial(null);
            }

            if (\array_key_exists('resultatSalarial', $data) && null !== $data['resultatSalarial']) {
                $object->setResultatSalarial($data['resultatSalarial']);
            } elseif (\array_key_exists('resultatSalarial', $data) && null === $data['resultatSalarial']) {
                $object->setResultatSalarial(null);
            }

            if (\array_key_exists('basePatronale', $data) && null !== $data['basePatronale']) {
                $object->setBasePatronale($data['basePatronale']);
            } elseif (\array_key_exists('basePatronale', $data) && null === $data['basePatronale']) {
                $object->setBasePatronale(null);
            }

            if (\array_key_exists('tauxOuMontantPatronal', $data) && null !== $data['tauxOuMontantPatronal']) {
                $object->setTauxOuMontantPatronal($data['tauxOuMontantPatronal']);
            } elseif (\array_key_exists('tauxOuMontantPatronal', $data) && null === $data['tauxOuMontantPatronal']) {
                $object->setTauxOuMontantPatronal(null);
            }

            if (\array_key_exists('resultatPatronal', $data) && null !== $data['resultatPatronal']) {
                $object->setResultatPatronal($data['resultatPatronal']);
            } elseif (\array_key_exists('resultatPatronal', $data) && null === $data['resultatPatronal']) {
                $object->setResultatPatronal(null);
            }

            if (\array_key_exists('codeDucs', $data) && null !== $data['codeDucs']) {
                $object->setCodeDucs($data['codeDucs']);
            } elseif (\array_key_exists('codeDucs', $data) && null === $data['codeDucs']) {
                $object->setCodeDucs(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('codeLibelle') && null !== $object->getCodeLibelle()) {
                $data['codeLibelle'] = $object->getCodeLibelle();
            }

            if ($object->isInitialized('libelle') && null !== $object->getLibelle()) {
                $data['libelle'] = $object->getLibelle();
            }

            if ($object->isInitialized('baseSalariale') && null !== $object->getBaseSalariale()) {
                $data['baseSalariale'] = $object->getBaseSalariale();
            }

            if ($object->isInitialized('tauxOuMontantSalarial') && null !== $object->getTauxOuMontantSalarial()) {
                $data['tauxOuMontantSalarial'] = $object->getTauxOuMontantSalarial();
            }

            if ($object->isInitialized('resultatSalarial') && null !== $object->getResultatSalarial()) {
                $data['resultatSalarial'] = $object->getResultatSalarial();
            }

            if ($object->isInitialized('basePatronale') && null !== $object->getBasePatronale()) {
                $data['basePatronale'] = $object->getBasePatronale();
            }

            if ($object->isInitialized('tauxOuMontantPatronal') && null !== $object->getTauxOuMontantPatronal()) {
                $data['tauxOuMontantPatronal'] = $object->getTauxOuMontantPatronal();
            }

            if ($object->isInitialized('resultatPatronal') && null !== $object->getResultatPatronal()) {
                $data['resultatPatronal'] = $object->getResultatPatronal();
            }

            if ($object->isInitialized('codeDucs') && null !== $object->getCodeDucs()) {
                $data['codeDucs'] = $object->getCodeDucs();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [LigneBulletin::class => false];
        }
    }
} else {
    class LigneBulletinNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return LigneBulletin::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof LigneBulletin;
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

            $object = new LigneBulletin();
            if (\array_key_exists('baseSalariale', $data) && \is_int($data['baseSalariale'])) {
                $data['baseSalariale'] = (float) $data['baseSalariale'];
            }

            if (\array_key_exists('tauxOuMontantSalarial', $data) && \is_int($data['tauxOuMontantSalarial'])) {
                $data['tauxOuMontantSalarial'] = (float) $data['tauxOuMontantSalarial'];
            }

            if (\array_key_exists('resultatSalarial', $data) && \is_int($data['resultatSalarial'])) {
                $data['resultatSalarial'] = (float) $data['resultatSalarial'];
            }

            if (\array_key_exists('basePatronale', $data) && \is_int($data['basePatronale'])) {
                $data['basePatronale'] = (float) $data['basePatronale'];
            }

            if (\array_key_exists('tauxOuMontantPatronal', $data) && \is_int($data['tauxOuMontantPatronal'])) {
                $data['tauxOuMontantPatronal'] = (float) $data['tauxOuMontantPatronal'];
            }

            if (\array_key_exists('resultatPatronal', $data) && \is_int($data['resultatPatronal'])) {
                $data['resultatPatronal'] = (float) $data['resultatPatronal'];
            }

            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('codeLibelle', $data) && null !== $data['codeLibelle']) {
                $object->setCodeLibelle($data['codeLibelle']);
            } elseif (\array_key_exists('codeLibelle', $data) && null === $data['codeLibelle']) {
                $object->setCodeLibelle(null);
            }

            if (\array_key_exists('libelle', $data) && null !== $data['libelle']) {
                $object->setLibelle($data['libelle']);
            } elseif (\array_key_exists('libelle', $data) && null === $data['libelle']) {
                $object->setLibelle(null);
            }

            if (\array_key_exists('baseSalariale', $data) && null !== $data['baseSalariale']) {
                $object->setBaseSalariale($data['baseSalariale']);
            } elseif (\array_key_exists('baseSalariale', $data) && null === $data['baseSalariale']) {
                $object->setBaseSalariale(null);
            }

            if (\array_key_exists('tauxOuMontantSalarial', $data) && null !== $data['tauxOuMontantSalarial']) {
                $object->setTauxOuMontantSalarial($data['tauxOuMontantSalarial']);
            } elseif (\array_key_exists('tauxOuMontantSalarial', $data) && null === $data['tauxOuMontantSalarial']) {
                $object->setTauxOuMontantSalarial(null);
            }

            if (\array_key_exists('resultatSalarial', $data) && null !== $data['resultatSalarial']) {
                $object->setResultatSalarial($data['resultatSalarial']);
            } elseif (\array_key_exists('resultatSalarial', $data) && null === $data['resultatSalarial']) {
                $object->setResultatSalarial(null);
            }

            if (\array_key_exists('basePatronale', $data) && null !== $data['basePatronale']) {
                $object->setBasePatronale($data['basePatronale']);
            } elseif (\array_key_exists('basePatronale', $data) && null === $data['basePatronale']) {
                $object->setBasePatronale(null);
            }

            if (\array_key_exists('tauxOuMontantPatronal', $data) && null !== $data['tauxOuMontantPatronal']) {
                $object->setTauxOuMontantPatronal($data['tauxOuMontantPatronal']);
            } elseif (\array_key_exists('tauxOuMontantPatronal', $data) && null === $data['tauxOuMontantPatronal']) {
                $object->setTauxOuMontantPatronal(null);
            }

            if (\array_key_exists('resultatPatronal', $data) && null !== $data['resultatPatronal']) {
                $object->setResultatPatronal($data['resultatPatronal']);
            } elseif (\array_key_exists('resultatPatronal', $data) && null === $data['resultatPatronal']) {
                $object->setResultatPatronal(null);
            }

            if (\array_key_exists('codeDucs', $data) && null !== $data['codeDucs']) {
                $object->setCodeDucs($data['codeDucs']);
            } elseif (\array_key_exists('codeDucs', $data) && null === $data['codeDucs']) {
                $object->setCodeDucs(null);
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
            if ($object->isInitialized('codeLibelle') && null !== $object->getCodeLibelle()) {
                $data['codeLibelle'] = $object->getCodeLibelle();
            }

            if ($object->isInitialized('libelle') && null !== $object->getLibelle()) {
                $data['libelle'] = $object->getLibelle();
            }

            if ($object->isInitialized('baseSalariale') && null !== $object->getBaseSalariale()) {
                $data['baseSalariale'] = $object->getBaseSalariale();
            }

            if ($object->isInitialized('tauxOuMontantSalarial') && null !== $object->getTauxOuMontantSalarial()) {
                $data['tauxOuMontantSalarial'] = $object->getTauxOuMontantSalarial();
            }

            if ($object->isInitialized('resultatSalarial') && null !== $object->getResultatSalarial()) {
                $data['resultatSalarial'] = $object->getResultatSalarial();
            }

            if ($object->isInitialized('basePatronale') && null !== $object->getBasePatronale()) {
                $data['basePatronale'] = $object->getBasePatronale();
            }

            if ($object->isInitialized('tauxOuMontantPatronal') && null !== $object->getTauxOuMontantPatronal()) {
                $data['tauxOuMontantPatronal'] = $object->getTauxOuMontantPatronal();
            }

            if ($object->isInitialized('resultatPatronal') && null !== $object->getResultatPatronal()) {
                $data['resultatPatronal'] = $object->getResultatPatronal();
            }

            if ($object->isInitialized('codeDucs') && null !== $object->getCodeDucs()) {
                $data['codeDucs'] = $object->getCodeDucs();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [LigneBulletin::class => false];
        }
    }
}
