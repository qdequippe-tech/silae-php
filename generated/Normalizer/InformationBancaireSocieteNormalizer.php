<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\InformationBancaireSociete;
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
    class InformationBancaireSocieteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return InformationBancaireSociete::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof InformationBancaireSociete;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new InformationBancaireSociete();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('nomInterneEtablissement', $data) && null !== $data['nomInterneEtablissement']) {
                $object->setNomInterneEtablissement($data['nomInterneEtablissement']);
            } elseif (\array_key_exists('nomInterneEtablissement', $data) && null === $data['nomInterneEtablissement']) {
                $object->setNomInterneEtablissement(null);
            }

            if (\array_key_exists('rib', $data) && null !== $data['rib']) {
                $object->setRib($data['rib']);
            } elseif (\array_key_exists('rib', $data) && null === $data['rib']) {
                $object->setRib(null);
            }

            if (\array_key_exists('formatFichiers', $data) && null !== $data['formatFichiers']) {
                $object->setFormatFichiers($data['formatFichiers']);
            } elseif (\array_key_exists('formatFichiers', $data) && null === $data['formatFichiers']) {
                $object->setFormatFichiers(null);
            }

            if (\array_key_exists('iban', $data) && null !== $data['iban']) {
                $object->setIban($data['iban']);
            } elseif (\array_key_exists('iban', $data) && null === $data['iban']) {
                $object->setIban(null);
            }

            if (\array_key_exists('bic', $data) && null !== $data['bic']) {
                $object->setBic($data['bic']);
            } elseif (\array_key_exists('bic', $data) && null === $data['bic']) {
                $object->setBic(null);
            }

            if (\array_key_exists('numeroEmetteur', $data) && null !== $data['numeroEmetteur']) {
                $object->setNumeroEmetteur($data['numeroEmetteur']);
            } elseif (\array_key_exists('numeroEmetteur', $data) && null === $data['numeroEmetteur']) {
                $object->setNumeroEmetteur(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('nomInterneEtablissement') && null !== $object->getNomInterneEtablissement()) {
                $data['nomInterneEtablissement'] = $object->getNomInterneEtablissement();
            }

            if ($object->isInitialized('rib') && null !== $object->getRib()) {
                $data['rib'] = $object->getRib();
            }

            if ($object->isInitialized('formatFichiers') && null !== $object->getFormatFichiers()) {
                $data['formatFichiers'] = $object->getFormatFichiers();
            }

            if ($object->isInitialized('iban') && null !== $object->getIban()) {
                $data['iban'] = $object->getIban();
            }

            if ($object->isInitialized('bic') && null !== $object->getBic()) {
                $data['bic'] = $object->getBic();
            }

            if ($object->isInitialized('numeroEmetteur') && null !== $object->getNumeroEmetteur()) {
                $data['numeroEmetteur'] = $object->getNumeroEmetteur();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [InformationBancaireSociete::class => false];
        }
    }
} else {
    class InformationBancaireSocieteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return InformationBancaireSociete::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof InformationBancaireSociete;
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

            $object = new InformationBancaireSociete();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('nomInterneEtablissement', $data) && null !== $data['nomInterneEtablissement']) {
                $object->setNomInterneEtablissement($data['nomInterneEtablissement']);
            } elseif (\array_key_exists('nomInterneEtablissement', $data) && null === $data['nomInterneEtablissement']) {
                $object->setNomInterneEtablissement(null);
            }

            if (\array_key_exists('rib', $data) && null !== $data['rib']) {
                $object->setRib($data['rib']);
            } elseif (\array_key_exists('rib', $data) && null === $data['rib']) {
                $object->setRib(null);
            }

            if (\array_key_exists('formatFichiers', $data) && null !== $data['formatFichiers']) {
                $object->setFormatFichiers($data['formatFichiers']);
            } elseif (\array_key_exists('formatFichiers', $data) && null === $data['formatFichiers']) {
                $object->setFormatFichiers(null);
            }

            if (\array_key_exists('iban', $data) && null !== $data['iban']) {
                $object->setIban($data['iban']);
            } elseif (\array_key_exists('iban', $data) && null === $data['iban']) {
                $object->setIban(null);
            }

            if (\array_key_exists('bic', $data) && null !== $data['bic']) {
                $object->setBic($data['bic']);
            } elseif (\array_key_exists('bic', $data) && null === $data['bic']) {
                $object->setBic(null);
            }

            if (\array_key_exists('numeroEmetteur', $data) && null !== $data['numeroEmetteur']) {
                $object->setNumeroEmetteur($data['numeroEmetteur']);
            } elseif (\array_key_exists('numeroEmetteur', $data) && null === $data['numeroEmetteur']) {
                $object->setNumeroEmetteur(null);
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
            if ($object->isInitialized('nomInterneEtablissement') && null !== $object->getNomInterneEtablissement()) {
                $data['nomInterneEtablissement'] = $object->getNomInterneEtablissement();
            }

            if ($object->isInitialized('rib') && null !== $object->getRib()) {
                $data['rib'] = $object->getRib();
            }

            if ($object->isInitialized('formatFichiers') && null !== $object->getFormatFichiers()) {
                $data['formatFichiers'] = $object->getFormatFichiers();
            }

            if ($object->isInitialized('iban') && null !== $object->getIban()) {
                $data['iban'] = $object->getIban();
            }

            if ($object->isInitialized('bic') && null !== $object->getBic()) {
                $data['bic'] = $object->getBic();
            }

            if ($object->isInitialized('numeroEmetteur') && null !== $object->getNumeroEmetteur()) {
                $data['numeroEmetteur'] = $object->getNumeroEmetteur();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [InformationBancaireSociete::class => false];
        }
    }
}
