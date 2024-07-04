<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\Spectacle;
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
    class SpectacleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return Spectacle::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && Spectacle::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new Spectacle();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('nomInterneEtablissement', $data) && null !== $data['nomInterneEtablissement']) {
                $object->setNomInterneEtablissement($data['nomInterneEtablissement']);
            } elseif (\array_key_exists('nomInterneEtablissement', $data) && null === $data['nomInterneEtablissement']) {
                $object->setNomInterneEtablissement(null);
            }

            if (\array_key_exists('axeAnalytique', $data) && null !== $data['axeAnalytique']) {
                $object->setAxeAnalytique($data['axeAnalytique']);
            } elseif (\array_key_exists('axeAnalytique', $data) && null === $data['axeAnalytique']) {
                $object->setAxeAnalytique(null);
            }

            if (\array_key_exists('valeurAxeAnalytique', $data) && null !== $data['valeurAxeAnalytique']) {
                $object->setValeurAxeAnalytique($data['valeurAxeAnalytique']);
            } elseif (\array_key_exists('valeurAxeAnalytique', $data) && null === $data['valeurAxeAnalytique']) {
                $object->setValeurAxeAnalytique(null);
            }

            if (\array_key_exists('axeAnalytique2', $data) && null !== $data['axeAnalytique2']) {
                $object->setAxeAnalytique2($data['axeAnalytique2']);
            } elseif (\array_key_exists('axeAnalytique2', $data) && null === $data['axeAnalytique2']) {
                $object->setAxeAnalytique2(null);
            }

            if (\array_key_exists('valeurAxeAnalytique2', $data) && null !== $data['valeurAxeAnalytique2']) {
                $object->setValeurAxeAnalytique2($data['valeurAxeAnalytique2']);
            } elseif (\array_key_exists('valeurAxeAnalytique2', $data) && null === $data['valeurAxeAnalytique2']) {
                $object->setValeurAxeAnalytique2(null);
            }

            if (\array_key_exists('axeAnalytique3', $data) && null !== $data['axeAnalytique3']) {
                $object->setAxeAnalytique3($data['axeAnalytique3']);
            } elseif (\array_key_exists('axeAnalytique3', $data) && null === $data['axeAnalytique3']) {
                $object->setAxeAnalytique3(null);
            }

            if (\array_key_exists('valeurAxeAnalytique3', $data) && null !== $data['valeurAxeAnalytique3']) {
                $object->setValeurAxeAnalytique3($data['valeurAxeAnalytique3']);
            } elseif (\array_key_exists('valeurAxeAnalytique3', $data) && null === $data['valeurAxeAnalytique3']) {
                $object->setValeurAxeAnalytique3(null);
            }

            if (\array_key_exists('referenceExterneSpectacle', $data) && null !== $data['referenceExterneSpectacle']) {
                $object->setReferenceExterneSpectacle($data['referenceExterneSpectacle']);
            } elseif (\array_key_exists('referenceExterneSpectacle', $data) && null === $data['referenceExterneSpectacle']) {
                $object->setReferenceExterneSpectacle(null);
            }

            if (\array_key_exists('numeroObjet', $data) && null !== $data['numeroObjet']) {
                $object->setNumeroObjet($data['numeroObjet']);
            } elseif (\array_key_exists('numeroObjet', $data) && null === $data['numeroObjet']) {
                $object->setNumeroObjet(null);
            }

            if (\array_key_exists('intituleSpectacle', $data) && null !== $data['intituleSpectacle']) {
                $object->setIntituleSpectacle($data['intituleSpectacle']);
            } elseif (\array_key_exists('intituleSpectacle', $data) && null === $data['intituleSpectacle']) {
                $object->setIntituleSpectacle(null);
            }

            if (\array_key_exists('dateDebut', $data) && null !== $data['dateDebut']) {
                $object->setDateDebut(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateDebut']));
            } elseif (\array_key_exists('dateDebut', $data) && null === $data['dateDebut']) {
                $object->setDateDebut(null);
            }

            if (\array_key_exists('dateFin', $data) && null !== $data['dateFin']) {
                $object->setDateFin(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateFin']));
            } elseif (\array_key_exists('dateFin', $data) && null === $data['dateFin']) {
                $object->setDateFin(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('nomInterneEtablissement') && null !== $object->getNomInterneEtablissement()) {
                $data['nomInterneEtablissement'] = $object->getNomInterneEtablissement();
            }

            if ($object->isInitialized('axeAnalytique') && null !== $object->getAxeAnalytique()) {
                $data['axeAnalytique'] = $object->getAxeAnalytique();
            }

            if ($object->isInitialized('valeurAxeAnalytique') && null !== $object->getValeurAxeAnalytique()) {
                $data['valeurAxeAnalytique'] = $object->getValeurAxeAnalytique();
            }

            if ($object->isInitialized('axeAnalytique2') && null !== $object->getAxeAnalytique2()) {
                $data['axeAnalytique2'] = $object->getAxeAnalytique2();
            }

            if ($object->isInitialized('valeurAxeAnalytique2') && null !== $object->getValeurAxeAnalytique2()) {
                $data['valeurAxeAnalytique2'] = $object->getValeurAxeAnalytique2();
            }

            if ($object->isInitialized('axeAnalytique3') && null !== $object->getAxeAnalytique3()) {
                $data['axeAnalytique3'] = $object->getAxeAnalytique3();
            }

            if ($object->isInitialized('valeurAxeAnalytique3') && null !== $object->getValeurAxeAnalytique3()) {
                $data['valeurAxeAnalytique3'] = $object->getValeurAxeAnalytique3();
            }

            if ($object->isInitialized('referenceExterneSpectacle') && null !== $object->getReferenceExterneSpectacle()) {
                $data['referenceExterneSpectacle'] = $object->getReferenceExterneSpectacle();
            }

            if ($object->isInitialized('numeroObjet') && null !== $object->getNumeroObjet()) {
                $data['numeroObjet'] = $object->getNumeroObjet();
            }

            if ($object->isInitialized('intituleSpectacle') && null !== $object->getIntituleSpectacle()) {
                $data['intituleSpectacle'] = $object->getIntituleSpectacle();
            }

            if ($object->isInitialized('dateDebut') && null !== $object->getDateDebut()) {
                $data['dateDebut'] = $object->getDateDebut()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('dateFin') && null !== $object->getDateFin()) {
                $data['dateFin'] = $object->getDateFin()->format('Y-m-d\TH:i:s');
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [Spectacle::class => false];
        }
    }
} else {
    class SpectacleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return Spectacle::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && Spectacle::class === $data::class;
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

            $object = new Spectacle();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('nomInterneEtablissement', $data) && null !== $data['nomInterneEtablissement']) {
                $object->setNomInterneEtablissement($data['nomInterneEtablissement']);
            } elseif (\array_key_exists('nomInterneEtablissement', $data) && null === $data['nomInterneEtablissement']) {
                $object->setNomInterneEtablissement(null);
            }

            if (\array_key_exists('axeAnalytique', $data) && null !== $data['axeAnalytique']) {
                $object->setAxeAnalytique($data['axeAnalytique']);
            } elseif (\array_key_exists('axeAnalytique', $data) && null === $data['axeAnalytique']) {
                $object->setAxeAnalytique(null);
            }

            if (\array_key_exists('valeurAxeAnalytique', $data) && null !== $data['valeurAxeAnalytique']) {
                $object->setValeurAxeAnalytique($data['valeurAxeAnalytique']);
            } elseif (\array_key_exists('valeurAxeAnalytique', $data) && null === $data['valeurAxeAnalytique']) {
                $object->setValeurAxeAnalytique(null);
            }

            if (\array_key_exists('axeAnalytique2', $data) && null !== $data['axeAnalytique2']) {
                $object->setAxeAnalytique2($data['axeAnalytique2']);
            } elseif (\array_key_exists('axeAnalytique2', $data) && null === $data['axeAnalytique2']) {
                $object->setAxeAnalytique2(null);
            }

            if (\array_key_exists('valeurAxeAnalytique2', $data) && null !== $data['valeurAxeAnalytique2']) {
                $object->setValeurAxeAnalytique2($data['valeurAxeAnalytique2']);
            } elseif (\array_key_exists('valeurAxeAnalytique2', $data) && null === $data['valeurAxeAnalytique2']) {
                $object->setValeurAxeAnalytique2(null);
            }

            if (\array_key_exists('axeAnalytique3', $data) && null !== $data['axeAnalytique3']) {
                $object->setAxeAnalytique3($data['axeAnalytique3']);
            } elseif (\array_key_exists('axeAnalytique3', $data) && null === $data['axeAnalytique3']) {
                $object->setAxeAnalytique3(null);
            }

            if (\array_key_exists('valeurAxeAnalytique3', $data) && null !== $data['valeurAxeAnalytique3']) {
                $object->setValeurAxeAnalytique3($data['valeurAxeAnalytique3']);
            } elseif (\array_key_exists('valeurAxeAnalytique3', $data) && null === $data['valeurAxeAnalytique3']) {
                $object->setValeurAxeAnalytique3(null);
            }

            if (\array_key_exists('referenceExterneSpectacle', $data) && null !== $data['referenceExterneSpectacle']) {
                $object->setReferenceExterneSpectacle($data['referenceExterneSpectacle']);
            } elseif (\array_key_exists('referenceExterneSpectacle', $data) && null === $data['referenceExterneSpectacle']) {
                $object->setReferenceExterneSpectacle(null);
            }

            if (\array_key_exists('numeroObjet', $data) && null !== $data['numeroObjet']) {
                $object->setNumeroObjet($data['numeroObjet']);
            } elseif (\array_key_exists('numeroObjet', $data) && null === $data['numeroObjet']) {
                $object->setNumeroObjet(null);
            }

            if (\array_key_exists('intituleSpectacle', $data) && null !== $data['intituleSpectacle']) {
                $object->setIntituleSpectacle($data['intituleSpectacle']);
            } elseif (\array_key_exists('intituleSpectacle', $data) && null === $data['intituleSpectacle']) {
                $object->setIntituleSpectacle(null);
            }

            if (\array_key_exists('dateDebut', $data) && null !== $data['dateDebut']) {
                $object->setDateDebut(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateDebut']));
            } elseif (\array_key_exists('dateDebut', $data) && null === $data['dateDebut']) {
                $object->setDateDebut(null);
            }

            if (\array_key_exists('dateFin', $data) && null !== $data['dateFin']) {
                $object->setDateFin(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateFin']));
            } elseif (\array_key_exists('dateFin', $data) && null === $data['dateFin']) {
                $object->setDateFin(null);
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

            if ($object->isInitialized('axeAnalytique') && null !== $object->getAxeAnalytique()) {
                $data['axeAnalytique'] = $object->getAxeAnalytique();
            }

            if ($object->isInitialized('valeurAxeAnalytique') && null !== $object->getValeurAxeAnalytique()) {
                $data['valeurAxeAnalytique'] = $object->getValeurAxeAnalytique();
            }

            if ($object->isInitialized('axeAnalytique2') && null !== $object->getAxeAnalytique2()) {
                $data['axeAnalytique2'] = $object->getAxeAnalytique2();
            }

            if ($object->isInitialized('valeurAxeAnalytique2') && null !== $object->getValeurAxeAnalytique2()) {
                $data['valeurAxeAnalytique2'] = $object->getValeurAxeAnalytique2();
            }

            if ($object->isInitialized('axeAnalytique3') && null !== $object->getAxeAnalytique3()) {
                $data['axeAnalytique3'] = $object->getAxeAnalytique3();
            }

            if ($object->isInitialized('valeurAxeAnalytique3') && null !== $object->getValeurAxeAnalytique3()) {
                $data['valeurAxeAnalytique3'] = $object->getValeurAxeAnalytique3();
            }

            if ($object->isInitialized('referenceExterneSpectacle') && null !== $object->getReferenceExterneSpectacle()) {
                $data['referenceExterneSpectacle'] = $object->getReferenceExterneSpectacle();
            }

            if ($object->isInitialized('numeroObjet') && null !== $object->getNumeroObjet()) {
                $data['numeroObjet'] = $object->getNumeroObjet();
            }

            if ($object->isInitialized('intituleSpectacle') && null !== $object->getIntituleSpectacle()) {
                $data['intituleSpectacle'] = $object->getIntituleSpectacle();
            }

            if ($object->isInitialized('dateDebut') && null !== $object->getDateDebut()) {
                $data['dateDebut'] = $object->getDateDebut()->format('Y-m-d\TH:i:s');
            }

            if ($object->isInitialized('dateFin') && null !== $object->getDateFin()) {
                $data['dateFin'] = $object->getDateFin()->format('Y-m-d\TH:i:s');
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [Spectacle::class => false];
        }
    }
}
