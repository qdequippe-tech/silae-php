<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\Agence;
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
    class AgenceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return Agence::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && Agence::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new Agence();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('codeAgence', $data) && null !== $data['codeAgence']) {
                $object->setCodeAgence($data['codeAgence']);
            } elseif (\array_key_exists('codeAgence', $data) && null === $data['codeAgence']) {
                $object->setCodeAgence(null);
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

            if (\array_key_exists('codePostal', $data) && null !== $data['codePostal']) {
                $object->setCodePostal($data['codePostal']);
            } elseif (\array_key_exists('codePostal', $data) && null === $data['codePostal']) {
                $object->setCodePostal(null);
            }

            if (\array_key_exists('nomVille', $data) && null !== $data['nomVille']) {
                $object->setNomVille($data['nomVille']);
            } elseif (\array_key_exists('nomVille', $data) && null === $data['nomVille']) {
                $object->setNomVille(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('codeAgence') && null !== $object->getCodeAgence()) {
                $data['codeAgence'] = $object->getCodeAgence();
            }

            if ($object->isInitialized('raisonSociale') && null !== $object->getRaisonSociale()) {
                $data['raisonSociale'] = $object->getRaisonSociale();
            }

            if ($object->isInitialized('siret') && null !== $object->getSiret()) {
                $data['siret'] = $object->getSiret();
            }

            if ($object->isInitialized('codePostal') && null !== $object->getCodePostal()) {
                $data['codePostal'] = $object->getCodePostal();
            }

            if ($object->isInitialized('nomVille') && null !== $object->getNomVille()) {
                $data['nomVille'] = $object->getNomVille();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [Agence::class => false];
        }
    }
} else {
    class AgenceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return Agence::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && Agence::class === $data::class;
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

            $object = new Agence();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('codeAgence', $data) && null !== $data['codeAgence']) {
                $object->setCodeAgence($data['codeAgence']);
            } elseif (\array_key_exists('codeAgence', $data) && null === $data['codeAgence']) {
                $object->setCodeAgence(null);
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

            if (\array_key_exists('codePostal', $data) && null !== $data['codePostal']) {
                $object->setCodePostal($data['codePostal']);
            } elseif (\array_key_exists('codePostal', $data) && null === $data['codePostal']) {
                $object->setCodePostal(null);
            }

            if (\array_key_exists('nomVille', $data) && null !== $data['nomVille']) {
                $object->setNomVille($data['nomVille']);
            } elseif (\array_key_exists('nomVille', $data) && null === $data['nomVille']) {
                $object->setNomVille(null);
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

            if ($object->isInitialized('raisonSociale') && null !== $object->getRaisonSociale()) {
                $data['raisonSociale'] = $object->getRaisonSociale();
            }

            if ($object->isInitialized('siret') && null !== $object->getSiret()) {
                $data['siret'] = $object->getSiret();
            }

            if ($object->isInitialized('codePostal') && null !== $object->getCodePostal()) {
                $data['codePostal'] = $object->getCodePostal();
            }

            if ($object->isInitialized('nomVille') && null !== $object->getNomVille()) {
                $data['nomVille'] = $object->getNomVille();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [Agence::class => false];
        }
    }
}
