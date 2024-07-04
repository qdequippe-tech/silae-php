<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\AffectationsDossier;
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
    class AffectationsDossierNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return AffectationsDossier::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && AffectationsDossier::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new AffectationsDossier();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('codeAgence', $data) && null !== $data['codeAgence']) {
                $object->setCodeAgence($data['codeAgence']);
            } elseif (\array_key_exists('codeAgence', $data) && null === $data['codeAgence']) {
                $object->setCodeAgence(null);
            }

            if (\array_key_exists('rG1', $data) && null !== $data['rG1']) {
                $object->setRG1($data['rG1']);
            } elseif (\array_key_exists('rG1', $data) && null === $data['rG1']) {
                $object->setRG1(null);
            }

            if (\array_key_exists('rG2', $data) && null !== $data['rG2']) {
                $object->setRG2($data['rG2']);
            } elseif (\array_key_exists('rG2', $data) && null === $data['rG2']) {
                $object->setRG2(null);
            }

            if (\array_key_exists('rG3', $data) && null !== $data['rG3']) {
                $object->setRG3($data['rG3']);
            } elseif (\array_key_exists('rG3', $data) && null === $data['rG3']) {
                $object->setRG3(null);
            }

            if (\array_key_exists('rG4', $data) && null !== $data['rG4']) {
                $object->setRG4($data['rG4']);
            } elseif (\array_key_exists('rG4', $data) && null === $data['rG4']) {
                $object->setRG4(null);
            }

            if (\array_key_exists('rG5', $data) && null !== $data['rG5']) {
                $object->setRG5($data['rG5']);
            } elseif (\array_key_exists('rG5', $data) && null === $data['rG5']) {
                $object->setRG5(null);
            }

            if (\array_key_exists('rG6', $data) && null !== $data['rG6']) {
                $object->setRG6($data['rG6']);
            } elseif (\array_key_exists('rG6', $data) && null === $data['rG6']) {
                $object->setRG6(null);
            }

            if (\array_key_exists('rG7', $data) && null !== $data['rG7']) {
                $object->setRG7($data['rG7']);
            } elseif (\array_key_exists('rG7', $data) && null === $data['rG7']) {
                $object->setRG7(null);
            }

            if (\array_key_exists('rG8', $data) && null !== $data['rG8']) {
                $object->setRG8($data['rG8']);
            } elseif (\array_key_exists('rG8', $data) && null === $data['rG8']) {
                $object->setRG8(null);
            }

            if (\array_key_exists('rG9', $data) && null !== $data['rG9']) {
                $object->setRG9($data['rG9']);
            } elseif (\array_key_exists('rG9', $data) && null === $data['rG9']) {
                $object->setRG9(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('codeAgence') && null !== $object->getCodeAgence()) {
                $data['codeAgence'] = $object->getCodeAgence();
            }

            if ($object->isInitialized('rG1') && null !== $object->getRG1()) {
                $data['rG1'] = $object->getRG1();
            }

            if ($object->isInitialized('rG2') && null !== $object->getRG2()) {
                $data['rG2'] = $object->getRG2();
            }

            if ($object->isInitialized('rG3') && null !== $object->getRG3()) {
                $data['rG3'] = $object->getRG3();
            }

            if ($object->isInitialized('rG4') && null !== $object->getRG4()) {
                $data['rG4'] = $object->getRG4();
            }

            if ($object->isInitialized('rG5') && null !== $object->getRG5()) {
                $data['rG5'] = $object->getRG5();
            }

            if ($object->isInitialized('rG6') && null !== $object->getRG6()) {
                $data['rG6'] = $object->getRG6();
            }

            if ($object->isInitialized('rG7') && null !== $object->getRG7()) {
                $data['rG7'] = $object->getRG7();
            }

            if ($object->isInitialized('rG8') && null !== $object->getRG8()) {
                $data['rG8'] = $object->getRG8();
            }

            if ($object->isInitialized('rG9') && null !== $object->getRG9()) {
                $data['rG9'] = $object->getRG9();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [AffectationsDossier::class => false];
        }
    }
} else {
    class AffectationsDossierNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return AffectationsDossier::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && AffectationsDossier::class === $data::class;
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

            $object = new AffectationsDossier();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('codeAgence', $data) && null !== $data['codeAgence']) {
                $object->setCodeAgence($data['codeAgence']);
            } elseif (\array_key_exists('codeAgence', $data) && null === $data['codeAgence']) {
                $object->setCodeAgence(null);
            }

            if (\array_key_exists('rG1', $data) && null !== $data['rG1']) {
                $object->setRG1($data['rG1']);
            } elseif (\array_key_exists('rG1', $data) && null === $data['rG1']) {
                $object->setRG1(null);
            }

            if (\array_key_exists('rG2', $data) && null !== $data['rG2']) {
                $object->setRG2($data['rG2']);
            } elseif (\array_key_exists('rG2', $data) && null === $data['rG2']) {
                $object->setRG2(null);
            }

            if (\array_key_exists('rG3', $data) && null !== $data['rG3']) {
                $object->setRG3($data['rG3']);
            } elseif (\array_key_exists('rG3', $data) && null === $data['rG3']) {
                $object->setRG3(null);
            }

            if (\array_key_exists('rG4', $data) && null !== $data['rG4']) {
                $object->setRG4($data['rG4']);
            } elseif (\array_key_exists('rG4', $data) && null === $data['rG4']) {
                $object->setRG4(null);
            }

            if (\array_key_exists('rG5', $data) && null !== $data['rG5']) {
                $object->setRG5($data['rG5']);
            } elseif (\array_key_exists('rG5', $data) && null === $data['rG5']) {
                $object->setRG5(null);
            }

            if (\array_key_exists('rG6', $data) && null !== $data['rG6']) {
                $object->setRG6($data['rG6']);
            } elseif (\array_key_exists('rG6', $data) && null === $data['rG6']) {
                $object->setRG6(null);
            }

            if (\array_key_exists('rG7', $data) && null !== $data['rG7']) {
                $object->setRG7($data['rG7']);
            } elseif (\array_key_exists('rG7', $data) && null === $data['rG7']) {
                $object->setRG7(null);
            }

            if (\array_key_exists('rG8', $data) && null !== $data['rG8']) {
                $object->setRG8($data['rG8']);
            } elseif (\array_key_exists('rG8', $data) && null === $data['rG8']) {
                $object->setRG8(null);
            }

            if (\array_key_exists('rG9', $data) && null !== $data['rG9']) {
                $object->setRG9($data['rG9']);
            } elseif (\array_key_exists('rG9', $data) && null === $data['rG9']) {
                $object->setRG9(null);
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
            if ($object->isInitialized('codeAgence') && null !== $object->getCodeAgence()) {
                $data['codeAgence'] = $object->getCodeAgence();
            }

            if ($object->isInitialized('rG1') && null !== $object->getRG1()) {
                $data['rG1'] = $object->getRG1();
            }

            if ($object->isInitialized('rG2') && null !== $object->getRG2()) {
                $data['rG2'] = $object->getRG2();
            }

            if ($object->isInitialized('rG3') && null !== $object->getRG3()) {
                $data['rG3'] = $object->getRG3();
            }

            if ($object->isInitialized('rG4') && null !== $object->getRG4()) {
                $data['rG4'] = $object->getRG4();
            }

            if ($object->isInitialized('rG5') && null !== $object->getRG5()) {
                $data['rG5'] = $object->getRG5();
            }

            if ($object->isInitialized('rG6') && null !== $object->getRG6()) {
                $data['rG6'] = $object->getRG6();
            }

            if ($object->isInitialized('rG7') && null !== $object->getRG7()) {
                $data['rG7'] = $object->getRG7();
            }

            if ($object->isInitialized('rG8') && null !== $object->getRG8()) {
                $data['rG8'] = $object->getRG8();
            }

            if ($object->isInitialized('rG9') && null !== $object->getRG9()) {
                $data['rG9'] = $object->getRG9();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [AffectationsDossier::class => false];
        }
    }
}
