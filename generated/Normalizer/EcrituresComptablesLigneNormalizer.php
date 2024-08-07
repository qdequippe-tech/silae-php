<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\EcrituresComptablesLigne;
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
    class EcrituresComptablesLigneNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return EcrituresComptablesLigne::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && EcrituresComptablesLigne::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new EcrituresComptablesLigne();
            if (\array_key_exists('valeur', $data) && \is_int($data['valeur'])) {
                $data['valeur'] = (float) $data['valeur'];
            }

            if (\array_key_exists('pctRepartition', $data) && \is_int($data['pctRepartition'])) {
                $data['pctRepartition'] = (float) $data['pctRepartition'];
            }

            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('periode', $data) && null !== $data['periode']) {
                $object->setPeriode(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periode']));
            } elseif (\array_key_exists('periode', $data) && null === $data['periode']) {
                $object->setPeriode(null);
            }

            if (\array_key_exists('compte', $data) && null !== $data['compte']) {
                $object->setCompte($data['compte']);
            } elseif (\array_key_exists('compte', $data) && null === $data['compte']) {
                $object->setCompte(null);
            }

            if (\array_key_exists('libelle', $data) && null !== $data['libelle']) {
                $object->setLibelle($data['libelle']);
            } elseif (\array_key_exists('libelle', $data) && null === $data['libelle']) {
                $object->setLibelle(null);
            }

            if (\array_key_exists('sens', $data) && null !== $data['sens']) {
                $object->setSens($data['sens']);
            } elseif (\array_key_exists('sens', $data) && null === $data['sens']) {
                $object->setSens(null);
            }

            if (\array_key_exists('indexRepartition', $data) && null !== $data['indexRepartition']) {
                $object->setIndexRepartition($data['indexRepartition']);
            } elseif (\array_key_exists('indexRepartition', $data) && null === $data['indexRepartition']) {
                $object->setIndexRepartition(null);
            }

            if (\array_key_exists('valeur', $data) && null !== $data['valeur']) {
                $object->setValeur($data['valeur']);
            } elseif (\array_key_exists('valeur', $data) && null === $data['valeur']) {
                $object->setValeur(null);
            }

            if (\array_key_exists('pctRepartition', $data) && null !== $data['pctRepartition']) {
                $object->setPctRepartition($data['pctRepartition']);
            } elseif (\array_key_exists('pctRepartition', $data) && null === $data['pctRepartition']) {
                $object->setPctRepartition(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('periode') && null !== $object->getPeriode()) {
                $data['periode'] = $object->getPeriode()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('compte') && null !== $object->getCompte()) {
                $data['compte'] = $object->getCompte();
            }

            if ($object->isInitialized('libelle') && null !== $object->getLibelle()) {
                $data['libelle'] = $object->getLibelle();
            }

            if ($object->isInitialized('sens') && null !== $object->getSens()) {
                $data['sens'] = $object->getSens();
            }

            if ($object->isInitialized('indexRepartition') && null !== $object->getIndexRepartition()) {
                $data['indexRepartition'] = $object->getIndexRepartition();
            }

            if ($object->isInitialized('valeur') && null !== $object->getValeur()) {
                $data['valeur'] = $object->getValeur();
            }

            if ($object->isInitialized('pctRepartition') && null !== $object->getPctRepartition()) {
                $data['pctRepartition'] = $object->getPctRepartition();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [EcrituresComptablesLigne::class => false];
        }
    }
} else {
    class EcrituresComptablesLigneNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return EcrituresComptablesLigne::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && EcrituresComptablesLigne::class === $data::class;
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

            $object = new EcrituresComptablesLigne();
            if (\array_key_exists('valeur', $data) && \is_int($data['valeur'])) {
                $data['valeur'] = (float) $data['valeur'];
            }

            if (\array_key_exists('pctRepartition', $data) && \is_int($data['pctRepartition'])) {
                $data['pctRepartition'] = (float) $data['pctRepartition'];
            }

            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('periode', $data) && null !== $data['periode']) {
                $object->setPeriode(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periode']));
            } elseif (\array_key_exists('periode', $data) && null === $data['periode']) {
                $object->setPeriode(null);
            }

            if (\array_key_exists('compte', $data) && null !== $data['compte']) {
                $object->setCompte($data['compte']);
            } elseif (\array_key_exists('compte', $data) && null === $data['compte']) {
                $object->setCompte(null);
            }

            if (\array_key_exists('libelle', $data) && null !== $data['libelle']) {
                $object->setLibelle($data['libelle']);
            } elseif (\array_key_exists('libelle', $data) && null === $data['libelle']) {
                $object->setLibelle(null);
            }

            if (\array_key_exists('sens', $data) && null !== $data['sens']) {
                $object->setSens($data['sens']);
            } elseif (\array_key_exists('sens', $data) && null === $data['sens']) {
                $object->setSens(null);
            }

            if (\array_key_exists('indexRepartition', $data) && null !== $data['indexRepartition']) {
                $object->setIndexRepartition($data['indexRepartition']);
            } elseif (\array_key_exists('indexRepartition', $data) && null === $data['indexRepartition']) {
                $object->setIndexRepartition(null);
            }

            if (\array_key_exists('valeur', $data) && null !== $data['valeur']) {
                $object->setValeur($data['valeur']);
            } elseif (\array_key_exists('valeur', $data) && null === $data['valeur']) {
                $object->setValeur(null);
            }

            if (\array_key_exists('pctRepartition', $data) && null !== $data['pctRepartition']) {
                $object->setPctRepartition($data['pctRepartition']);
            } elseif (\array_key_exists('pctRepartition', $data) && null === $data['pctRepartition']) {
                $object->setPctRepartition(null);
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
            if ($object->isInitialized('periode') && null !== $object->getPeriode()) {
                $data['periode'] = $object->getPeriode()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('compte') && null !== $object->getCompte()) {
                $data['compte'] = $object->getCompte();
            }

            if ($object->isInitialized('libelle') && null !== $object->getLibelle()) {
                $data['libelle'] = $object->getLibelle();
            }

            if ($object->isInitialized('sens') && null !== $object->getSens()) {
                $data['sens'] = $object->getSens();
            }

            if ($object->isInitialized('indexRepartition') && null !== $object->getIndexRepartition()) {
                $data['indexRepartition'] = $object->getIndexRepartition();
            }

            if ($object->isInitialized('valeur') && null !== $object->getValeur()) {
                $data['valeur'] = $object->getValeur();
            }

            if ($object->isInitialized('pctRepartition') && null !== $object->getPctRepartition()) {
                $data['pctRepartition'] = $object->getPctRepartition();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [EcrituresComptablesLigne::class => false];
        }
    }
}
