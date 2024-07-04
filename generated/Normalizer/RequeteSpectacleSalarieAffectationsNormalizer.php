<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\RequeteSpectacleSalarieAffectations;
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
    class RequeteSpectacleSalarieAffectationsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return RequeteSpectacleSalarieAffectations::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && RequeteSpectacleSalarieAffectations::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new RequeteSpectacleSalarieAffectations();
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

            if (\array_key_exists('verifierDisponibiliteEmploi', $data) && null !== $data['verifierDisponibiliteEmploi']) {
                $object->setVerifierDisponibiliteEmploi($data['verifierDisponibiliteEmploi']);
            } elseif (\array_key_exists('verifierDisponibiliteEmploi', $data) && null === $data['verifierDisponibiliteEmploi']) {
                $object->setVerifierDisponibiliteEmploi(null);
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

            if ($object->isInitialized('verifierDisponibiliteEmploi') && null !== $object->getVerifierDisponibiliteEmploi()) {
                $data['verifierDisponibiliteEmploi'] = $object->getVerifierDisponibiliteEmploi();
            }

            if ($object->isInitialized('periode') && null !== $object->getPeriode()) {
                $data['periode'] = $object->getPeriode()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('nomInterneEtablissement') && null !== $object->getNomInterneEtablissement()) {
                $data['nomInterneEtablissement'] = $object->getNomInterneEtablissement();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [RequeteSpectacleSalarieAffectations::class => false];
        }
    }
} else {
    class RequeteSpectacleSalarieAffectationsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return RequeteSpectacleSalarieAffectations::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && RequeteSpectacleSalarieAffectations::class === $data::class;
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

            $object = new RequeteSpectacleSalarieAffectations();
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

            if (\array_key_exists('verifierDisponibiliteEmploi', $data) && null !== $data['verifierDisponibiliteEmploi']) {
                $object->setVerifierDisponibiliteEmploi($data['verifierDisponibiliteEmploi']);
            } elseif (\array_key_exists('verifierDisponibiliteEmploi', $data) && null === $data['verifierDisponibiliteEmploi']) {
                $object->setVerifierDisponibiliteEmploi(null);
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

            if ($object->isInitialized('verifierDisponibiliteEmploi') && null !== $object->getVerifierDisponibiliteEmploi()) {
                $data['verifierDisponibiliteEmploi'] = $object->getVerifierDisponibiliteEmploi();
            }

            if ($object->isInitialized('periode') && null !== $object->getPeriode()) {
                $data['periode'] = $object->getPeriode()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('nomInterneEtablissement') && null !== $object->getNomInterneEtablissement()) {
                $data['nomInterneEtablissement'] = $object->getNomInterneEtablissement();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [RequeteSpectacleSalarieAffectations::class => false];
        }
    }
}
