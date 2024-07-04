<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\RequeteSalariesBulletins;
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
    class RequeteSalariesBulletinsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return RequeteSalariesBulletins::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && RequeteSalariesBulletins::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new RequeteSalariesBulletins();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('matriculeSalarie', $data) && null !== $data['matriculeSalarie']) {
                $object->setMatriculeSalarie($data['matriculeSalarie']);
            } elseif (\array_key_exists('matriculeSalarie', $data) && null === $data['matriculeSalarie']) {
                $object->setMatriculeSalarie(null);
            }

            if (\array_key_exists('identifiantEmploi', $data) && null !== $data['identifiantEmploi']) {
                $object->setIdentifiantEmploi($data['identifiantEmploi']);
            } elseif (\array_key_exists('identifiantEmploi', $data) && null === $data['identifiantEmploi']) {
                $object->setIdentifiantEmploi(null);
            }

            if (\array_key_exists('periodeDebut', $data) && null !== $data['periodeDebut']) {
                $object->setPeriodeDebut(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periodeDebut']));
            } elseif (\array_key_exists('periodeDebut', $data) && null === $data['periodeDebut']) {
                $object->setPeriodeDebut(null);
            }

            if (\array_key_exists('periodeFin', $data) && null !== $data['periodeFin']) {
                $object->setPeriodeFin(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periodeFin']));
            } elseif (\array_key_exists('periodeFin', $data) && null === $data['periodeFin']) {
                $object->setPeriodeFin(null);
            }

            if (\array_key_exists('bulletinsOriginauxSeulement', $data) && null !== $data['bulletinsOriginauxSeulement']) {
                $object->setBulletinsOriginauxSeulement($data['bulletinsOriginauxSeulement']);
            } elseif (\array_key_exists('bulletinsOriginauxSeulement', $data) && null === $data['bulletinsOriginauxSeulement']) {
                $object->setBulletinsOriginauxSeulement(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('matriculeSalarie') && null !== $object->getMatriculeSalarie()) {
                $data['matriculeSalarie'] = $object->getMatriculeSalarie();
            }

            if ($object->isInitialized('identifiantEmploi') && null !== $object->getIdentifiantEmploi()) {
                $data['identifiantEmploi'] = $object->getIdentifiantEmploi();
            }

            if ($object->isInitialized('periodeDebut') && null !== $object->getPeriodeDebut()) {
                $data['periodeDebut'] = $object->getPeriodeDebut()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('periodeFin') && null !== $object->getPeriodeFin()) {
                $data['periodeFin'] = $object->getPeriodeFin()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('bulletinsOriginauxSeulement') && null !== $object->getBulletinsOriginauxSeulement()) {
                $data['bulletinsOriginauxSeulement'] = $object->getBulletinsOriginauxSeulement();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [RequeteSalariesBulletins::class => false];
        }
    }
} else {
    class RequeteSalariesBulletinsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return RequeteSalariesBulletins::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && RequeteSalariesBulletins::class === $data::class;
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

            $object = new RequeteSalariesBulletins();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('matriculeSalarie', $data) && null !== $data['matriculeSalarie']) {
                $object->setMatriculeSalarie($data['matriculeSalarie']);
            } elseif (\array_key_exists('matriculeSalarie', $data) && null === $data['matriculeSalarie']) {
                $object->setMatriculeSalarie(null);
            }

            if (\array_key_exists('identifiantEmploi', $data) && null !== $data['identifiantEmploi']) {
                $object->setIdentifiantEmploi($data['identifiantEmploi']);
            } elseif (\array_key_exists('identifiantEmploi', $data) && null === $data['identifiantEmploi']) {
                $object->setIdentifiantEmploi(null);
            }

            if (\array_key_exists('periodeDebut', $data) && null !== $data['periodeDebut']) {
                $object->setPeriodeDebut(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periodeDebut']));
            } elseif (\array_key_exists('periodeDebut', $data) && null === $data['periodeDebut']) {
                $object->setPeriodeDebut(null);
            }

            if (\array_key_exists('periodeFin', $data) && null !== $data['periodeFin']) {
                $object->setPeriodeFin(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periodeFin']));
            } elseif (\array_key_exists('periodeFin', $data) && null === $data['periodeFin']) {
                $object->setPeriodeFin(null);
            }

            if (\array_key_exists('bulletinsOriginauxSeulement', $data) && null !== $data['bulletinsOriginauxSeulement']) {
                $object->setBulletinsOriginauxSeulement($data['bulletinsOriginauxSeulement']);
            } elseif (\array_key_exists('bulletinsOriginauxSeulement', $data) && null === $data['bulletinsOriginauxSeulement']) {
                $object->setBulletinsOriginauxSeulement(null);
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
            if ($object->isInitialized('matriculeSalarie') && null !== $object->getMatriculeSalarie()) {
                $data['matriculeSalarie'] = $object->getMatriculeSalarie();
            }

            if ($object->isInitialized('identifiantEmploi') && null !== $object->getIdentifiantEmploi()) {
                $data['identifiantEmploi'] = $object->getIdentifiantEmploi();
            }

            if ($object->isInitialized('periodeDebut') && null !== $object->getPeriodeDebut()) {
                $data['periodeDebut'] = $object->getPeriodeDebut()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('periodeFin') && null !== $object->getPeriodeFin()) {
                $data['periodeFin'] = $object->getPeriodeFin()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('bulletinsOriginauxSeulement') && null !== $object->getBulletinsOriginauxSeulement()) {
                $data['bulletinsOriginauxSeulement'] = $object->getBulletinsOriginauxSeulement();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [RequeteSalariesBulletins::class => false];
        }
    }
}
