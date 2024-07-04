<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SpectacleSalarieAffectation;
use QdequippeTech\Silae\Api\Model\SpectacleSalarieAffectations;
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
    class SpectacleSalarieAffectationsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return SpectacleSalarieAffectations::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && SpectacleSalarieAffectations::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new SpectacleSalarieAffectations();
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

            if (\array_key_exists('nomInterneEtablissement', $data) && null !== $data['nomInterneEtablissement']) {
                $object->setNomInterneEtablissement($data['nomInterneEtablissement']);
            } elseif (\array_key_exists('nomInterneEtablissement', $data) && null === $data['nomInterneEtablissement']) {
                $object->setNomInterneEtablissement(null);
            }

            if (\array_key_exists('affectations', $data) && null !== $data['affectations']) {
                $values = [];
                foreach ($data['affectations'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, SpectacleSalarieAffectation::class, 'json', $context);
                }

                $object->setAffectations($values);
            } elseif (\array_key_exists('affectations', $data) && null === $data['affectations']) {
                $object->setAffectations(null);
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

            if ($object->isInitialized('nomInterneEtablissement') && null !== $object->getNomInterneEtablissement()) {
                $data['nomInterneEtablissement'] = $object->getNomInterneEtablissement();
            }

            if ($object->isInitialized('affectations') && null !== $object->getAffectations()) {
                $values = [];
                foreach ($object->getAffectations() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['affectations'] = $values;
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [SpectacleSalarieAffectations::class => false];
        }
    }
} else {
    class SpectacleSalarieAffectationsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return SpectacleSalarieAffectations::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && SpectacleSalarieAffectations::class === $data::class;
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

            $object = new SpectacleSalarieAffectations();
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

            if (\array_key_exists('nomInterneEtablissement', $data) && null !== $data['nomInterneEtablissement']) {
                $object->setNomInterneEtablissement($data['nomInterneEtablissement']);
            } elseif (\array_key_exists('nomInterneEtablissement', $data) && null === $data['nomInterneEtablissement']) {
                $object->setNomInterneEtablissement(null);
            }

            if (\array_key_exists('affectations', $data) && null !== $data['affectations']) {
                $values = [];
                foreach ($data['affectations'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, SpectacleSalarieAffectation::class, 'json', $context);
                }

                $object->setAffectations($values);
            } elseif (\array_key_exists('affectations', $data) && null === $data['affectations']) {
                $object->setAffectations(null);
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

            if ($object->isInitialized('nomInterneEtablissement') && null !== $object->getNomInterneEtablissement()) {
                $data['nomInterneEtablissement'] = $object->getNomInterneEtablissement();
            }

            if ($object->isInitialized('affectations') && null !== $object->getAffectations()) {
                $values = [];
                foreach ($object->getAffectations() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['affectations'] = $values;
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [SpectacleSalarieAffectations::class => false];
        }
    }
}
