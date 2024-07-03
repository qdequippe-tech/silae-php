<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\ProprietesChiffrement;
use QdequippeTech\Silae\Api\Model\RecupererFichiersVirementChiffresRequest;
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
    class RecupererFichiersVirementChiffresRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return RecupererFichiersVirementChiffresRequest::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof RecupererFichiersVirementChiffresRequest;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new RecupererFichiersVirementChiffresRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('proprietesChiffrement', $data) && null !== $data['proprietesChiffrement']) {
                $object->setProprietesChiffrement($this->denormalizer->denormalize($data['proprietesChiffrement'], ProprietesChiffrement::class, 'json', $context));
            } elseif (\array_key_exists('proprietesChiffrement', $data) && null === $data['proprietesChiffrement']) {
                $object->setProprietesChiffrement(null);
            }

            if (\array_key_exists('dateValeur', $data) && null !== $data['dateValeur']) {
                $object->setDateValeur(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateValeur']));
            } elseif (\array_key_exists('dateValeur', $data) && null === $data['dateValeur']) {
                $object->setDateValeur(null);
            }

            if (\array_key_exists('libelleVirement', $data) && null !== $data['libelleVirement']) {
                $object->setLibelleVirement($data['libelleVirement']);
            } elseif (\array_key_exists('libelleVirement', $data) && null === $data['libelleVirement']) {
                $object->setLibelleVirement(null);
            }

            if (\array_key_exists('matriculeSalaries', $data) && null !== $data['matriculeSalaries']) {
                $values = [];
                foreach ($data['matriculeSalaries'] as $value) {
                    $values[] = $value;
                }

                $object->setMatriculeSalaries($values);
            } elseif (\array_key_exists('matriculeSalaries', $data) && null === $data['matriculeSalaries']) {
                $object->setMatriculeSalaries(null);
            }

            if (\array_key_exists('periode', $data) && null !== $data['periode']) {
                $object->setPeriode(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periode']));
            } elseif (\array_key_exists('periode', $data) && null === $data['periode']) {
                $object->setPeriode(null);
            }

            if (\array_key_exists('numeroDossier', $data) && null !== $data['numeroDossier']) {
                $object->setNumeroDossier($data['numeroDossier']);
            } elseif (\array_key_exists('numeroDossier', $data) && null === $data['numeroDossier']) {
                $object->setNumeroDossier(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('proprietesChiffrement') && null !== $object->getProprietesChiffrement()) {
                $data['proprietesChiffrement'] = $this->normalizer->normalize($object->getProprietesChiffrement(), 'json', $context);
            }

            if ($object->isInitialized('dateValeur') && null !== $object->getDateValeur()) {
                $data['dateValeur'] = $object->getDateValeur()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('libelleVirement') && null !== $object->getLibelleVirement()) {
                $data['libelleVirement'] = $object->getLibelleVirement();
            }

            if ($object->isInitialized('matriculeSalaries') && null !== $object->getMatriculeSalaries()) {
                $values = [];
                foreach ($object->getMatriculeSalaries() as $value) {
                    $values[] = $value;
                }

                $data['matriculeSalaries'] = $values;
            }

            if ($object->isInitialized('periode') && null !== $object->getPeriode()) {
                $data['periode'] = $object->getPeriode()->format('Y-m-d\TH:i:s');
            }

            $data['numeroDossier'] = $object->getNumeroDossier();

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [RecupererFichiersVirementChiffresRequest::class => false];
        }
    }
} else {
    class RecupererFichiersVirementChiffresRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return RecupererFichiersVirementChiffresRequest::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof RecupererFichiersVirementChiffresRequest;
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

            $object = new RecupererFichiersVirementChiffresRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('proprietesChiffrement', $data) && null !== $data['proprietesChiffrement']) {
                $object->setProprietesChiffrement($this->denormalizer->denormalize($data['proprietesChiffrement'], ProprietesChiffrement::class, 'json', $context));
            } elseif (\array_key_exists('proprietesChiffrement', $data) && null === $data['proprietesChiffrement']) {
                $object->setProprietesChiffrement(null);
            }

            if (\array_key_exists('dateValeur', $data) && null !== $data['dateValeur']) {
                $object->setDateValeur(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateValeur']));
            } elseif (\array_key_exists('dateValeur', $data) && null === $data['dateValeur']) {
                $object->setDateValeur(null);
            }

            if (\array_key_exists('libelleVirement', $data) && null !== $data['libelleVirement']) {
                $object->setLibelleVirement($data['libelleVirement']);
            } elseif (\array_key_exists('libelleVirement', $data) && null === $data['libelleVirement']) {
                $object->setLibelleVirement(null);
            }

            if (\array_key_exists('matriculeSalaries', $data) && null !== $data['matriculeSalaries']) {
                $values = [];
                foreach ($data['matriculeSalaries'] as $value) {
                    $values[] = $value;
                }

                $object->setMatriculeSalaries($values);
            } elseif (\array_key_exists('matriculeSalaries', $data) && null === $data['matriculeSalaries']) {
                $object->setMatriculeSalaries(null);
            }

            if (\array_key_exists('periode', $data) && null !== $data['periode']) {
                $object->setPeriode(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periode']));
            } elseif (\array_key_exists('periode', $data) && null === $data['periode']) {
                $object->setPeriode(null);
            }

            if (\array_key_exists('numeroDossier', $data) && null !== $data['numeroDossier']) {
                $object->setNumeroDossier($data['numeroDossier']);
            } elseif (\array_key_exists('numeroDossier', $data) && null === $data['numeroDossier']) {
                $object->setNumeroDossier(null);
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
            if ($object->isInitialized('proprietesChiffrement') && null !== $object->getProprietesChiffrement()) {
                $data['proprietesChiffrement'] = $this->normalizer->normalize($object->getProprietesChiffrement(), 'json', $context);
            }

            if ($object->isInitialized('dateValeur') && null !== $object->getDateValeur()) {
                $data['dateValeur'] = $object->getDateValeur()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('libelleVirement') && null !== $object->getLibelleVirement()) {
                $data['libelleVirement'] = $object->getLibelleVirement();
            }

            if ($object->isInitialized('matriculeSalaries') && null !== $object->getMatriculeSalaries()) {
                $values = [];
                foreach ($object->getMatriculeSalaries() as $value) {
                    $values[] = $value;
                }

                $data['matriculeSalaries'] = $values;
            }

            if ($object->isInitialized('periode') && null !== $object->getPeriode()) {
                $data['periode'] = $object->getPeriode()->format('Y-m-d\TH:i:s');
            }

            $data['numeroDossier'] = $object->getNumeroDossier();

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [RecupererFichiersVirementChiffresRequest::class => false];
        }
    }
}
