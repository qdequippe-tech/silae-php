<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\ModificationChampValeursTypees;
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
    class ModificationChampValeursTypeesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return ModificationChampValeursTypees::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && ModificationChampValeursTypees::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new ModificationChampValeursTypees();
            if (\array_key_exists('valeurDOUBLE', $data) && \is_int($data['valeurDOUBLE'])) {
                $data['valeurDOUBLE'] = (float) $data['valeurDOUBLE'];
            }

            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('nomChamp', $data) && null !== $data['nomChamp']) {
                $object->setNomChamp($data['nomChamp']);
            } elseif (\array_key_exists('nomChamp', $data) && null === $data['nomChamp']) {
                $object->setNomChamp(null);
            }

            if (\array_key_exists('typeValeur', $data) && null !== $data['typeValeur']) {
                $object->setTypeValeur($data['typeValeur']);
            } elseif (\array_key_exists('typeValeur', $data) && null === $data['typeValeur']) {
                $object->setTypeValeur(null);
            }

            if (\array_key_exists('valeurINT32', $data) && null !== $data['valeurINT32']) {
                $object->setValeurINT32($data['valeurINT32']);
            } elseif (\array_key_exists('valeurINT32', $data) && null === $data['valeurINT32']) {
                $object->setValeurINT32(null);
            }

            if (\array_key_exists('valeurDOUBLE', $data) && null !== $data['valeurDOUBLE']) {
                $object->setValeurDOUBLE($data['valeurDOUBLE']);
            } elseif (\array_key_exists('valeurDOUBLE', $data) && null === $data['valeurDOUBLE']) {
                $object->setValeurDOUBLE(null);
            }

            if (\array_key_exists('valeurSTRING', $data) && null !== $data['valeurSTRING']) {
                $object->setValeurSTRING($data['valeurSTRING']);
            } elseif (\array_key_exists('valeurSTRING', $data) && null === $data['valeurSTRING']) {
                $object->setValeurSTRING(null);
            }

            if (\array_key_exists('valeurDATETIME', $data) && null !== $data['valeurDATETIME']) {
                $object->setValeurDATETIME(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['valeurDATETIME']));
            } elseif (\array_key_exists('valeurDATETIME', $data) && null === $data['valeurDATETIME']) {
                $object->setValeurDATETIME(null);
            }

            if (\array_key_exists('valeurBYTE', $data) && null !== $data['valeurBYTE']) {
                $object->setValeurBYTE($data['valeurBYTE']);
            } elseif (\array_key_exists('valeurBYTE', $data) && null === $data['valeurBYTE']) {
                $object->setValeurBYTE(null);
            }

            if (\array_key_exists('valeurBOOL', $data) && null !== $data['valeurBOOL']) {
                $object->setValeurBOOL($data['valeurBOOL']);
            } elseif (\array_key_exists('valeurBOOL', $data) && null === $data['valeurBOOL']) {
                $object->setValeurBOOL(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('nomChamp') && null !== $object->getNomChamp()) {
                $data['nomChamp'] = $object->getNomChamp();
            }

            if ($object->isInitialized('typeValeur') && null !== $object->getTypeValeur()) {
                $data['typeValeur'] = $object->getTypeValeur();
            }

            if ($object->isInitialized('valeurINT32') && null !== $object->getValeurINT32()) {
                $data['valeurINT32'] = $object->getValeurINT32();
            }

            if ($object->isInitialized('valeurDOUBLE') && null !== $object->getValeurDOUBLE()) {
                $data['valeurDOUBLE'] = $object->getValeurDOUBLE();
            }

            if ($object->isInitialized('valeurSTRING') && null !== $object->getValeurSTRING()) {
                $data['valeurSTRING'] = $object->getValeurSTRING();
            }

            if ($object->isInitialized('valeurDATETIME') && null !== $object->getValeurDATETIME()) {
                $data['valeurDATETIME'] = $object->getValeurDATETIME()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('valeurBYTE') && null !== $object->getValeurBYTE()) {
                $data['valeurBYTE'] = $object->getValeurBYTE();
            }

            if ($object->isInitialized('valeurBOOL') && null !== $object->getValeurBOOL()) {
                $data['valeurBOOL'] = $object->getValeurBOOL();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [ModificationChampValeursTypees::class => false];
        }
    }
} else {
    class ModificationChampValeursTypeesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return ModificationChampValeursTypees::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && ModificationChampValeursTypees::class === $data::class;
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

            $object = new ModificationChampValeursTypees();
            if (\array_key_exists('valeurDOUBLE', $data) && \is_int($data['valeurDOUBLE'])) {
                $data['valeurDOUBLE'] = (float) $data['valeurDOUBLE'];
            }

            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('nomChamp', $data) && null !== $data['nomChamp']) {
                $object->setNomChamp($data['nomChamp']);
            } elseif (\array_key_exists('nomChamp', $data) && null === $data['nomChamp']) {
                $object->setNomChamp(null);
            }

            if (\array_key_exists('typeValeur', $data) && null !== $data['typeValeur']) {
                $object->setTypeValeur($data['typeValeur']);
            } elseif (\array_key_exists('typeValeur', $data) && null === $data['typeValeur']) {
                $object->setTypeValeur(null);
            }

            if (\array_key_exists('valeurINT32', $data) && null !== $data['valeurINT32']) {
                $object->setValeurINT32($data['valeurINT32']);
            } elseif (\array_key_exists('valeurINT32', $data) && null === $data['valeurINT32']) {
                $object->setValeurINT32(null);
            }

            if (\array_key_exists('valeurDOUBLE', $data) && null !== $data['valeurDOUBLE']) {
                $object->setValeurDOUBLE($data['valeurDOUBLE']);
            } elseif (\array_key_exists('valeurDOUBLE', $data) && null === $data['valeurDOUBLE']) {
                $object->setValeurDOUBLE(null);
            }

            if (\array_key_exists('valeurSTRING', $data) && null !== $data['valeurSTRING']) {
                $object->setValeurSTRING($data['valeurSTRING']);
            } elseif (\array_key_exists('valeurSTRING', $data) && null === $data['valeurSTRING']) {
                $object->setValeurSTRING(null);
            }

            if (\array_key_exists('valeurDATETIME', $data) && null !== $data['valeurDATETIME']) {
                $object->setValeurDATETIME(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['valeurDATETIME']));
            } elseif (\array_key_exists('valeurDATETIME', $data) && null === $data['valeurDATETIME']) {
                $object->setValeurDATETIME(null);
            }

            if (\array_key_exists('valeurBYTE', $data) && null !== $data['valeurBYTE']) {
                $object->setValeurBYTE($data['valeurBYTE']);
            } elseif (\array_key_exists('valeurBYTE', $data) && null === $data['valeurBYTE']) {
                $object->setValeurBYTE(null);
            }

            if (\array_key_exists('valeurBOOL', $data) && null !== $data['valeurBOOL']) {
                $object->setValeurBOOL($data['valeurBOOL']);
            } elseif (\array_key_exists('valeurBOOL', $data) && null === $data['valeurBOOL']) {
                $object->setValeurBOOL(null);
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
            if ($object->isInitialized('nomChamp') && null !== $object->getNomChamp()) {
                $data['nomChamp'] = $object->getNomChamp();
            }

            if ($object->isInitialized('typeValeur') && null !== $object->getTypeValeur()) {
                $data['typeValeur'] = $object->getTypeValeur();
            }

            if ($object->isInitialized('valeurINT32') && null !== $object->getValeurINT32()) {
                $data['valeurINT32'] = $object->getValeurINT32();
            }

            if ($object->isInitialized('valeurDOUBLE') && null !== $object->getValeurDOUBLE()) {
                $data['valeurDOUBLE'] = $object->getValeurDOUBLE();
            }

            if ($object->isInitialized('valeurSTRING') && null !== $object->getValeurSTRING()) {
                $data['valeurSTRING'] = $object->getValeurSTRING();
            }

            if ($object->isInitialized('valeurDATETIME') && null !== $object->getValeurDATETIME()) {
                $data['valeurDATETIME'] = $object->getValeurDATETIME()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('valeurBYTE') && null !== $object->getValeurBYTE()) {
                $data['valeurBYTE'] = $object->getValeurBYTE();
            }

            if ($object->isInitialized('valeurBOOL') && null !== $object->getValeurBOOL()) {
                $data['valeurBOOL'] = $object->getValeurBOOL();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [ModificationChampValeursTypees::class => false];
        }
    }
}
