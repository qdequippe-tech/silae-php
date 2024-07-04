<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\RequeteLectureInfos;
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
    class RequeteLectureInfosNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return RequeteLectureInfos::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && RequeteLectureInfos::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new RequeteLectureInfos();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('tableInformations', $data) && null !== $data['tableInformations']) {
                $object->setTableInformations($data['tableInformations']);
            } elseif (\array_key_exists('tableInformations', $data) && null === $data['tableInformations']) {
                $object->setTableInformations(null);
            }

            if (\array_key_exists('numeroDossier', $data) && null !== $data['numeroDossier']) {
                $object->setNumeroDossier($data['numeroDossier']);
            } elseif (\array_key_exists('numeroDossier', $data) && null === $data['numeroDossier']) {
                $object->setNumeroDossier(null);
            }

            if (\array_key_exists('nomInterneEtablissement', $data) && null !== $data['nomInterneEtablissement']) {
                $object->setNomInterneEtablissement($data['nomInterneEtablissement']);
            } elseif (\array_key_exists('nomInterneEtablissement', $data) && null === $data['nomInterneEtablissement']) {
                $object->setNomInterneEtablissement(null);
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

            if (\array_key_exists('champs', $data) && null !== $data['champs']) {
                $values = [];
                foreach ($data['champs'] as $value) {
                    $values[] = $value;
                }

                $object->setChamps($values);
            } elseif (\array_key_exists('champs', $data) && null === $data['champs']) {
                $object->setChamps(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('tableInformations') && null !== $object->getTableInformations()) {
                $data['tableInformations'] = $object->getTableInformations();
            }

            if ($object->isInitialized('numeroDossier') && null !== $object->getNumeroDossier()) {
                $data['numeroDossier'] = $object->getNumeroDossier();
            }

            if ($object->isInitialized('nomInterneEtablissement') && null !== $object->getNomInterneEtablissement()) {
                $data['nomInterneEtablissement'] = $object->getNomInterneEtablissement();
            }

            if ($object->isInitialized('matriculeSalarie') && null !== $object->getMatriculeSalarie()) {
                $data['matriculeSalarie'] = $object->getMatriculeSalarie();
            }

            if ($object->isInitialized('identifiantEmploi') && null !== $object->getIdentifiantEmploi()) {
                $data['identifiantEmploi'] = $object->getIdentifiantEmploi();
            }

            if ($object->isInitialized('champs') && null !== $object->getChamps()) {
                $values = [];
                foreach ($object->getChamps() as $value) {
                    $values[] = $value;
                }

                $data['champs'] = $values;
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [RequeteLectureInfos::class => false];
        }
    }
} else {
    class RequeteLectureInfosNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return RequeteLectureInfos::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && RequeteLectureInfos::class === $data::class;
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

            $object = new RequeteLectureInfos();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('tableInformations', $data) && null !== $data['tableInformations']) {
                $object->setTableInformations($data['tableInformations']);
            } elseif (\array_key_exists('tableInformations', $data) && null === $data['tableInformations']) {
                $object->setTableInformations(null);
            }

            if (\array_key_exists('numeroDossier', $data) && null !== $data['numeroDossier']) {
                $object->setNumeroDossier($data['numeroDossier']);
            } elseif (\array_key_exists('numeroDossier', $data) && null === $data['numeroDossier']) {
                $object->setNumeroDossier(null);
            }

            if (\array_key_exists('nomInterneEtablissement', $data) && null !== $data['nomInterneEtablissement']) {
                $object->setNomInterneEtablissement($data['nomInterneEtablissement']);
            } elseif (\array_key_exists('nomInterneEtablissement', $data) && null === $data['nomInterneEtablissement']) {
                $object->setNomInterneEtablissement(null);
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

            if (\array_key_exists('champs', $data) && null !== $data['champs']) {
                $values = [];
                foreach ($data['champs'] as $value) {
                    $values[] = $value;
                }

                $object->setChamps($values);
            } elseif (\array_key_exists('champs', $data) && null === $data['champs']) {
                $object->setChamps(null);
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
            if ($object->isInitialized('tableInformations') && null !== $object->getTableInformations()) {
                $data['tableInformations'] = $object->getTableInformations();
            }

            if ($object->isInitialized('numeroDossier') && null !== $object->getNumeroDossier()) {
                $data['numeroDossier'] = $object->getNumeroDossier();
            }

            if ($object->isInitialized('nomInterneEtablissement') && null !== $object->getNomInterneEtablissement()) {
                $data['nomInterneEtablissement'] = $object->getNomInterneEtablissement();
            }

            if ($object->isInitialized('matriculeSalarie') && null !== $object->getMatriculeSalarie()) {
                $data['matriculeSalarie'] = $object->getMatriculeSalarie();
            }

            if ($object->isInitialized('identifiantEmploi') && null !== $object->getIdentifiantEmploi()) {
                $data['identifiantEmploi'] = $object->getIdentifiantEmploi();
            }

            if ($object->isInitialized('champs') && null !== $object->getChamps()) {
                $values = [];
                foreach ($object->getChamps() as $value) {
                    $values[] = $value;
                }

                $data['champs'] = $values;
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [RequeteLectureInfos::class => false];
        }
    }
}
