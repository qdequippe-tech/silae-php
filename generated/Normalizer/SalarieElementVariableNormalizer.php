<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SalarieElementVariable;
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
    class SalarieElementVariableNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return SalarieElementVariable::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof SalarieElementVariable;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new SalarieElementVariable();
            if (\array_key_exists('montantElementVariable', $data) && \is_int($data['montantElementVariable'])) {
                $data['montantElementVariable'] = (float) $data['montantElementVariable'];
            }

            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('periodeElementVariable', $data) && null !== $data['periodeElementVariable']) {
                $object->setPeriodeElementVariable(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periodeElementVariable']));
            } elseif (\array_key_exists('periodeElementVariable', $data) && null === $data['periodeElementVariable']) {
                $object->setPeriodeElementVariable(null);
            }

            if (\array_key_exists('codeElementVariable', $data) && null !== $data['codeElementVariable']) {
                $object->setCodeElementVariable($data['codeElementVariable']);
            } elseif (\array_key_exists('codeElementVariable', $data) && null === $data['codeElementVariable']) {
                $object->setCodeElementVariable(null);
            }

            if (\array_key_exists('montantElementVariable', $data) && null !== $data['montantElementVariable']) {
                $object->setMontantElementVariable($data['montantElementVariable']);
            } elseif (\array_key_exists('montantElementVariable', $data) && null === $data['montantElementVariable']) {
                $object->setMontantElementVariable(null);
            }

            if (\array_key_exists('valeurChaineElementVariable', $data) && null !== $data['valeurChaineElementVariable']) {
                $object->setValeurChaineElementVariable($data['valeurChaineElementVariable']);
            } elseif (\array_key_exists('valeurChaineElementVariable', $data) && null === $data['valeurChaineElementVariable']) {
                $object->setValeurChaineElementVariable(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('periodeElementVariable') && null !== $object->getPeriodeElementVariable()) {
                $data['periodeElementVariable'] = $object->getPeriodeElementVariable()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('codeElementVariable') && null !== $object->getCodeElementVariable()) {
                $data['codeElementVariable'] = $object->getCodeElementVariable();
            }

            if ($object->isInitialized('montantElementVariable') && null !== $object->getMontantElementVariable()) {
                $data['montantElementVariable'] = $object->getMontantElementVariable();
            }

            if ($object->isInitialized('valeurChaineElementVariable') && null !== $object->getValeurChaineElementVariable()) {
                $data['valeurChaineElementVariable'] = $object->getValeurChaineElementVariable();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [SalarieElementVariable::class => false];
        }
    }
} else {
    class SalarieElementVariableNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return SalarieElementVariable::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof SalarieElementVariable;
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

            $object = new SalarieElementVariable();
            if (\array_key_exists('montantElementVariable', $data) && \is_int($data['montantElementVariable'])) {
                $data['montantElementVariable'] = (float) $data['montantElementVariable'];
            }

            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('periodeElementVariable', $data) && null !== $data['periodeElementVariable']) {
                $object->setPeriodeElementVariable(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periodeElementVariable']));
            } elseif (\array_key_exists('periodeElementVariable', $data) && null === $data['periodeElementVariable']) {
                $object->setPeriodeElementVariable(null);
            }

            if (\array_key_exists('codeElementVariable', $data) && null !== $data['codeElementVariable']) {
                $object->setCodeElementVariable($data['codeElementVariable']);
            } elseif (\array_key_exists('codeElementVariable', $data) && null === $data['codeElementVariable']) {
                $object->setCodeElementVariable(null);
            }

            if (\array_key_exists('montantElementVariable', $data) && null !== $data['montantElementVariable']) {
                $object->setMontantElementVariable($data['montantElementVariable']);
            } elseif (\array_key_exists('montantElementVariable', $data) && null === $data['montantElementVariable']) {
                $object->setMontantElementVariable(null);
            }

            if (\array_key_exists('valeurChaineElementVariable', $data) && null !== $data['valeurChaineElementVariable']) {
                $object->setValeurChaineElementVariable($data['valeurChaineElementVariable']);
            } elseif (\array_key_exists('valeurChaineElementVariable', $data) && null === $data['valeurChaineElementVariable']) {
                $object->setValeurChaineElementVariable(null);
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
            if ($object->isInitialized('periodeElementVariable') && null !== $object->getPeriodeElementVariable()) {
                $data['periodeElementVariable'] = $object->getPeriodeElementVariable()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('codeElementVariable') && null !== $object->getCodeElementVariable()) {
                $data['codeElementVariable'] = $object->getCodeElementVariable();
            }

            if ($object->isInitialized('montantElementVariable') && null !== $object->getMontantElementVariable()) {
                $data['montantElementVariable'] = $object->getMontantElementVariable();
            }

            if ($object->isInitialized('valeurChaineElementVariable') && null !== $object->getValeurChaineElementVariable()) {
                $data['valeurChaineElementVariable'] = $object->getValeurChaineElementVariable();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [SalarieElementVariable::class => false];
        }
    }
}
