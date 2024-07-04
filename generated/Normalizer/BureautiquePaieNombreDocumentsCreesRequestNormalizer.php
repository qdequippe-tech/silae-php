<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\BureautiquePaieNombreDocumentsCreesRequest;
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
    class BureautiquePaieNombreDocumentsCreesRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return BureautiquePaieNombreDocumentsCreesRequest::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && BureautiquePaieNombreDocumentsCreesRequest::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new BureautiquePaieNombreDocumentsCreesRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('nomDocument', $data) && null !== $data['nomDocument']) {
                $object->setNomDocument($data['nomDocument']);
            } elseif (\array_key_exists('nomDocument', $data) && null === $data['nomDocument']) {
                $object->setNomDocument(null);
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
            if ($object->isInitialized('nomDocument') && null !== $object->getNomDocument()) {
                $data['nomDocument'] = $object->getNomDocument();
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
            return [BureautiquePaieNombreDocumentsCreesRequest::class => false];
        }
    }
} else {
    class BureautiquePaieNombreDocumentsCreesRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return BureautiquePaieNombreDocumentsCreesRequest::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && BureautiquePaieNombreDocumentsCreesRequest::class === $data::class;
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

            $object = new BureautiquePaieNombreDocumentsCreesRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('nomDocument', $data) && null !== $data['nomDocument']) {
                $object->setNomDocument($data['nomDocument']);
            } elseif (\array_key_exists('nomDocument', $data) && null === $data['nomDocument']) {
                $object->setNomDocument(null);
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
            if ($object->isInitialized('nomDocument') && null !== $object->getNomDocument()) {
                $data['nomDocument'] = $object->getNomDocument();
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
            return [BureautiquePaieNombreDocumentsCreesRequest::class => false];
        }
    }
}
