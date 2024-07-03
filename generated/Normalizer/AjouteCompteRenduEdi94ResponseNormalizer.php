<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\AjouteCompteRenduEdi94Response;
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
    class AjouteCompteRenduEdi94ResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return AjouteCompteRenduEdi94Response::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof AjouteCompteRenduEdi94Response;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new AjouteCompteRenduEdi94Response();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('nbSalariesPresentsXML', $data) && null !== $data['nbSalariesPresentsXML']) {
                $object->setNbSalariesPresentsXML($data['nbSalariesPresentsXML']);
            } elseif (\array_key_exists('nbSalariesPresentsXML', $data) && null === $data['nbSalariesPresentsXML']) {
                $object->setNbSalariesPresentsXML(null);
            }

            if (\array_key_exists('nbSalariesTrouves', $data) && null !== $data['nbSalariesTrouves']) {
                $object->setNbSalariesTrouves($data['nbSalariesTrouves']);
            } elseif (\array_key_exists('nbSalariesTrouves', $data) && null === $data['nbSalariesTrouves']) {
                $object->setNbSalariesTrouves(null);
            }

            if (\array_key_exists('nbTauxSalariesCrees', $data) && null !== $data['nbTauxSalariesCrees']) {
                $object->setNbTauxSalariesCrees($data['nbTauxSalariesCrees']);
            } elseif (\array_key_exists('nbTauxSalariesCrees', $data) && null === $data['nbTauxSalariesCrees']) {
                $object->setNbTauxSalariesCrees(null);
            }

            if (\array_key_exists('nbTauxSalariesMisAJour', $data) && null !== $data['nbTauxSalariesMisAJour']) {
                $object->setNbTauxSalariesMisAJour($data['nbTauxSalariesMisAJour']);
            } elseif (\array_key_exists('nbTauxSalariesMisAJour', $data) && null === $data['nbTauxSalariesMisAJour']) {
                $object->setNbTauxSalariesMisAJour(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('nbSalariesPresentsXML') && null !== $object->getNbSalariesPresentsXML()) {
                $data['nbSalariesPresentsXML'] = $object->getNbSalariesPresentsXML();
            }

            if ($object->isInitialized('nbSalariesTrouves') && null !== $object->getNbSalariesTrouves()) {
                $data['nbSalariesTrouves'] = $object->getNbSalariesTrouves();
            }

            if ($object->isInitialized('nbTauxSalariesCrees') && null !== $object->getNbTauxSalariesCrees()) {
                $data['nbTauxSalariesCrees'] = $object->getNbTauxSalariesCrees();
            }

            if ($object->isInitialized('nbTauxSalariesMisAJour') && null !== $object->getNbTauxSalariesMisAJour()) {
                $data['nbTauxSalariesMisAJour'] = $object->getNbTauxSalariesMisAJour();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [AjouteCompteRenduEdi94Response::class => false];
        }
    }
} else {
    class AjouteCompteRenduEdi94ResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return AjouteCompteRenduEdi94Response::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof AjouteCompteRenduEdi94Response;
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

            $object = new AjouteCompteRenduEdi94Response();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('nbSalariesPresentsXML', $data) && null !== $data['nbSalariesPresentsXML']) {
                $object->setNbSalariesPresentsXML($data['nbSalariesPresentsXML']);
            } elseif (\array_key_exists('nbSalariesPresentsXML', $data) && null === $data['nbSalariesPresentsXML']) {
                $object->setNbSalariesPresentsXML(null);
            }

            if (\array_key_exists('nbSalariesTrouves', $data) && null !== $data['nbSalariesTrouves']) {
                $object->setNbSalariesTrouves($data['nbSalariesTrouves']);
            } elseif (\array_key_exists('nbSalariesTrouves', $data) && null === $data['nbSalariesTrouves']) {
                $object->setNbSalariesTrouves(null);
            }

            if (\array_key_exists('nbTauxSalariesCrees', $data) && null !== $data['nbTauxSalariesCrees']) {
                $object->setNbTauxSalariesCrees($data['nbTauxSalariesCrees']);
            } elseif (\array_key_exists('nbTauxSalariesCrees', $data) && null === $data['nbTauxSalariesCrees']) {
                $object->setNbTauxSalariesCrees(null);
            }

            if (\array_key_exists('nbTauxSalariesMisAJour', $data) && null !== $data['nbTauxSalariesMisAJour']) {
                $object->setNbTauxSalariesMisAJour($data['nbTauxSalariesMisAJour']);
            } elseif (\array_key_exists('nbTauxSalariesMisAJour', $data) && null === $data['nbTauxSalariesMisAJour']) {
                $object->setNbTauxSalariesMisAJour(null);
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
            if ($object->isInitialized('nbSalariesPresentsXML') && null !== $object->getNbSalariesPresentsXML()) {
                $data['nbSalariesPresentsXML'] = $object->getNbSalariesPresentsXML();
            }

            if ($object->isInitialized('nbSalariesTrouves') && null !== $object->getNbSalariesTrouves()) {
                $data['nbSalariesTrouves'] = $object->getNbSalariesTrouves();
            }

            if ($object->isInitialized('nbTauxSalariesCrees') && null !== $object->getNbTauxSalariesCrees()) {
                $data['nbTauxSalariesCrees'] = $object->getNbTauxSalariesCrees();
            }

            if ($object->isInitialized('nbTauxSalariesMisAJour') && null !== $object->getNbTauxSalariesMisAJour()) {
                $data['nbTauxSalariesMisAJour'] = $object->getNbTauxSalariesMisAJour();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [AjouteCompteRenduEdi94Response::class => false];
        }
    }
}
