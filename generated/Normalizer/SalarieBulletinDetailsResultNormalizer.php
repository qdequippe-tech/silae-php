<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SalarieBulletinDetailsResult;
use QdequippeTech\Silae\Api\Model\SalarieBulletinResult;
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
    class SalarieBulletinDetailsResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return SalarieBulletinDetailsResult::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && SalarieBulletinDetailsResult::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new SalarieBulletinDetailsResult();
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

            if (\array_key_exists('periode', $data) && null !== $data['periode']) {
                $object->setPeriode(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periode']));
            } elseif (\array_key_exists('periode', $data) && null === $data['periode']) {
                $object->setPeriode(null);
            }

            if (\array_key_exists('intituleEmploi', $data) && null !== $data['intituleEmploi']) {
                $object->setIntituleEmploi($data['intituleEmploi']);
            } elseif (\array_key_exists('intituleEmploi', $data) && null === $data['intituleEmploi']) {
                $object->setIntituleEmploi(null);
            }

            if (\array_key_exists('codeContratTravail', $data) && null !== $data['codeContratTravail']) {
                $object->setCodeContratTravail($data['codeContratTravail']);
            } elseif (\array_key_exists('codeContratTravail', $data) && null === $data['codeContratTravail']) {
                $object->setCodeContratTravail(null);
            }

            if (\array_key_exists('bulletins', $data) && null !== $data['bulletins']) {
                $values = [];
                foreach ($data['bulletins'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, SalarieBulletinResult::class, 'json', $context);
                }

                $object->setBulletins($values);
            } elseif (\array_key_exists('bulletins', $data) && null === $data['bulletins']) {
                $object->setBulletins(null);
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

            if ($object->isInitialized('periode') && null !== $object->getPeriode()) {
                $data['periode'] = $object->getPeriode()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('intituleEmploi') && null !== $object->getIntituleEmploi()) {
                $data['intituleEmploi'] = $object->getIntituleEmploi();
            }

            if ($object->isInitialized('codeContratTravail') && null !== $object->getCodeContratTravail()) {
                $data['codeContratTravail'] = $object->getCodeContratTravail();
            }

            if ($object->isInitialized('bulletins') && null !== $object->getBulletins()) {
                $values = [];
                foreach ($object->getBulletins() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['bulletins'] = $values;
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [SalarieBulletinDetailsResult::class => false];
        }
    }
} else {
    class SalarieBulletinDetailsResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return SalarieBulletinDetailsResult::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && SalarieBulletinDetailsResult::class === $data::class;
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

            $object = new SalarieBulletinDetailsResult();
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

            if (\array_key_exists('periode', $data) && null !== $data['periode']) {
                $object->setPeriode(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periode']));
            } elseif (\array_key_exists('periode', $data) && null === $data['periode']) {
                $object->setPeriode(null);
            }

            if (\array_key_exists('intituleEmploi', $data) && null !== $data['intituleEmploi']) {
                $object->setIntituleEmploi($data['intituleEmploi']);
            } elseif (\array_key_exists('intituleEmploi', $data) && null === $data['intituleEmploi']) {
                $object->setIntituleEmploi(null);
            }

            if (\array_key_exists('codeContratTravail', $data) && null !== $data['codeContratTravail']) {
                $object->setCodeContratTravail($data['codeContratTravail']);
            } elseif (\array_key_exists('codeContratTravail', $data) && null === $data['codeContratTravail']) {
                $object->setCodeContratTravail(null);
            }

            if (\array_key_exists('bulletins', $data) && null !== $data['bulletins']) {
                $values = [];
                foreach ($data['bulletins'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, SalarieBulletinResult::class, 'json', $context);
                }

                $object->setBulletins($values);
            } elseif (\array_key_exists('bulletins', $data) && null === $data['bulletins']) {
                $object->setBulletins(null);
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

            if ($object->isInitialized('periode') && null !== $object->getPeriode()) {
                $data['periode'] = $object->getPeriode()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('intituleEmploi') && null !== $object->getIntituleEmploi()) {
                $data['intituleEmploi'] = $object->getIntituleEmploi();
            }

            if ($object->isInitialized('codeContratTravail') && null !== $object->getCodeContratTravail()) {
                $data['codeContratTravail'] = $object->getCodeContratTravail();
            }

            if ($object->isInitialized('bulletins') && null !== $object->getBulletins()) {
                $values = [];
                foreach ($object->getBulletins() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['bulletins'] = $values;
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [SalarieBulletinDetailsResult::class => false];
        }
    }
}
