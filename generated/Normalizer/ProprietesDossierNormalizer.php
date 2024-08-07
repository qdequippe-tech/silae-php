<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\ProprietesDossier;
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
    class ProprietesDossierNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return ProprietesDossier::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && ProprietesDossier::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new ProprietesDossier();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('numero', $data) && null !== $data['numero']) {
                $object->setNumero($data['numero']);
            } elseif (\array_key_exists('numero', $data) && null === $data['numero']) {
                $object->setNumero(null);
            }

            if (\array_key_exists('raisonSociale', $data) && null !== $data['raisonSociale']) {
                $object->setRaisonSociale($data['raisonSociale']);
            } elseif (\array_key_exists('raisonSociale', $data) && null === $data['raisonSociale']) {
                $object->setRaisonSociale(null);
            }

            if (\array_key_exists('siret', $data) && null !== $data['siret']) {
                $object->setSiret($data['siret']);
            } elseif (\array_key_exists('siret', $data) && null === $data['siret']) {
                $object->setSiret(null);
            }

            if (\array_key_exists('groupe', $data) && null !== $data['groupe']) {
                $object->setGroupe($data['groupe']);
            } elseif (\array_key_exists('groupe', $data) && null === $data['groupe']) {
                $object->setGroupe(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('numero') && null !== $object->getNumero()) {
                $data['numero'] = $object->getNumero();
            }

            if ($object->isInitialized('raisonSociale') && null !== $object->getRaisonSociale()) {
                $data['raisonSociale'] = $object->getRaisonSociale();
            }

            if ($object->isInitialized('siret') && null !== $object->getSiret()) {
                $data['siret'] = $object->getSiret();
            }

            if ($object->isInitialized('groupe') && null !== $object->getGroupe()) {
                $data['groupe'] = $object->getGroupe();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [ProprietesDossier::class => false];
        }
    }
} else {
    class ProprietesDossierNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return ProprietesDossier::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && ProprietesDossier::class === $data::class;
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

            $object = new ProprietesDossier();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('numero', $data) && null !== $data['numero']) {
                $object->setNumero($data['numero']);
            } elseif (\array_key_exists('numero', $data) && null === $data['numero']) {
                $object->setNumero(null);
            }

            if (\array_key_exists('raisonSociale', $data) && null !== $data['raisonSociale']) {
                $object->setRaisonSociale($data['raisonSociale']);
            } elseif (\array_key_exists('raisonSociale', $data) && null === $data['raisonSociale']) {
                $object->setRaisonSociale(null);
            }

            if (\array_key_exists('siret', $data) && null !== $data['siret']) {
                $object->setSiret($data['siret']);
            } elseif (\array_key_exists('siret', $data) && null === $data['siret']) {
                $object->setSiret(null);
            }

            if (\array_key_exists('groupe', $data) && null !== $data['groupe']) {
                $object->setGroupe($data['groupe']);
            } elseif (\array_key_exists('groupe', $data) && null === $data['groupe']) {
                $object->setGroupe(null);
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
            if ($object->isInitialized('numero') && null !== $object->getNumero()) {
                $data['numero'] = $object->getNumero();
            }

            if ($object->isInitialized('raisonSociale') && null !== $object->getRaisonSociale()) {
                $data['raisonSociale'] = $object->getRaisonSociale();
            }

            if ($object->isInitialized('siret') && null !== $object->getSiret()) {
                $data['siret'] = $object->getSiret();
            }

            if ($object->isInitialized('groupe') && null !== $object->getGroupe()) {
                $data['groupe'] = $object->getGroupe();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [ProprietesDossier::class => false];
        }
    }
}
