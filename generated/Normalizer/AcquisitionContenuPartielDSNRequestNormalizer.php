<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\AcquisitionContenuPartielDSNRequest;
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
    class AcquisitionContenuPartielDSNRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return AcquisitionContenuPartielDSNRequest::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && AcquisitionContenuPartielDSNRequest::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new AcquisitionContenuPartielDSNRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('nomInterneEtablissement', $data) && null !== $data['nomInterneEtablissement']) {
                $object->setNomInterneEtablissement($data['nomInterneEtablissement']);
            } elseif (\array_key_exists('nomInterneEtablissement', $data) && null === $data['nomInterneEtablissement']) {
                $object->setNomInterneEtablissement(null);
            }

            if (\array_key_exists('codeOrganisme', $data) && null !== $data['codeOrganisme']) {
                $object->setCodeOrganisme($data['codeOrganisme']);
            } elseif (\array_key_exists('codeOrganisme', $data) && null === $data['codeOrganisme']) {
                $object->setCodeOrganisme(null);
            }

            if (\array_key_exists('numeroAffiliation', $data) && null !== $data['numeroAffiliation']) {
                $object->setNumeroAffiliation($data['numeroAffiliation']);
            } elseif (\array_key_exists('numeroAffiliation', $data) && null === $data['numeroAffiliation']) {
                $object->setNumeroAffiliation(null);
            }

            if (\array_key_exists('typeDSN', $data) && null !== $data['typeDSN']) {
                $object->setTypeDSN($data['typeDSN']);
            } elseif (\array_key_exists('typeDSN', $data) && null === $data['typeDSN']) {
                $object->setTypeDSN(null);
            }

            if (\array_key_exists('segments', $data) && null !== $data['segments']) {
                $values = [];
                foreach ($data['segments'] as $value) {
                    $values[] = $value;
                }

                $object->setSegments($values);
            } elseif (\array_key_exists('segments', $data) && null === $data['segments']) {
                $object->setSegments(null);
            }

            if (\array_key_exists('periode', $data) && null !== $data['periode']) {
                $object->setPeriode(\DateTime::createFromFormat('Y-m-d', $data['periode'])->setTime(0, 0, 0));
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
            if ($object->isInitialized('nomInterneEtablissement') && null !== $object->getNomInterneEtablissement()) {
                $data['nomInterneEtablissement'] = $object->getNomInterneEtablissement();
            }

            if ($object->isInitialized('codeOrganisme') && null !== $object->getCodeOrganisme()) {
                $data['codeOrganisme'] = $object->getCodeOrganisme();
            }

            if ($object->isInitialized('numeroAffiliation') && null !== $object->getNumeroAffiliation()) {
                $data['numeroAffiliation'] = $object->getNumeroAffiliation();
            }

            if ($object->isInitialized('typeDSN') && null !== $object->getTypeDSN()) {
                $data['typeDSN'] = $object->getTypeDSN();
            }

            if ($object->isInitialized('segments') && null !== $object->getSegments()) {
                $values = [];
                foreach ($object->getSegments() as $value) {
                    $values[] = $value;
                }

                $data['segments'] = $values;
            }

            if ($object->isInitialized('periode') && null !== $object->getPeriode()) {
                $data['periode'] = $object->getPeriode()->format('Y-m-d');
            }

            $data['numeroDossier'] = $object->getNumeroDossier();

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [AcquisitionContenuPartielDSNRequest::class => false];
        }
    }
} else {
    class AcquisitionContenuPartielDSNRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return AcquisitionContenuPartielDSNRequest::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && AcquisitionContenuPartielDSNRequest::class === $data::class;
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

            $object = new AcquisitionContenuPartielDSNRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('nomInterneEtablissement', $data) && null !== $data['nomInterneEtablissement']) {
                $object->setNomInterneEtablissement($data['nomInterneEtablissement']);
            } elseif (\array_key_exists('nomInterneEtablissement', $data) && null === $data['nomInterneEtablissement']) {
                $object->setNomInterneEtablissement(null);
            }

            if (\array_key_exists('codeOrganisme', $data) && null !== $data['codeOrganisme']) {
                $object->setCodeOrganisme($data['codeOrganisme']);
            } elseif (\array_key_exists('codeOrganisme', $data) && null === $data['codeOrganisme']) {
                $object->setCodeOrganisme(null);
            }

            if (\array_key_exists('numeroAffiliation', $data) && null !== $data['numeroAffiliation']) {
                $object->setNumeroAffiliation($data['numeroAffiliation']);
            } elseif (\array_key_exists('numeroAffiliation', $data) && null === $data['numeroAffiliation']) {
                $object->setNumeroAffiliation(null);
            }

            if (\array_key_exists('typeDSN', $data) && null !== $data['typeDSN']) {
                $object->setTypeDSN($data['typeDSN']);
            } elseif (\array_key_exists('typeDSN', $data) && null === $data['typeDSN']) {
                $object->setTypeDSN(null);
            }

            if (\array_key_exists('segments', $data) && null !== $data['segments']) {
                $values = [];
                foreach ($data['segments'] as $value) {
                    $values[] = $value;
                }

                $object->setSegments($values);
            } elseif (\array_key_exists('segments', $data) && null === $data['segments']) {
                $object->setSegments(null);
            }

            if (\array_key_exists('periode', $data) && null !== $data['periode']) {
                $object->setPeriode(\DateTime::createFromFormat('Y-m-d', $data['periode'])->setTime(0, 0, 0));
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
            if ($object->isInitialized('nomInterneEtablissement') && null !== $object->getNomInterneEtablissement()) {
                $data['nomInterneEtablissement'] = $object->getNomInterneEtablissement();
            }

            if ($object->isInitialized('codeOrganisme') && null !== $object->getCodeOrganisme()) {
                $data['codeOrganisme'] = $object->getCodeOrganisme();
            }

            if ($object->isInitialized('numeroAffiliation') && null !== $object->getNumeroAffiliation()) {
                $data['numeroAffiliation'] = $object->getNumeroAffiliation();
            }

            if ($object->isInitialized('typeDSN') && null !== $object->getTypeDSN()) {
                $data['typeDSN'] = $object->getTypeDSN();
            }

            if ($object->isInitialized('segments') && null !== $object->getSegments()) {
                $values = [];
                foreach ($object->getSegments() as $value) {
                    $values[] = $value;
                }

                $data['segments'] = $values;
            }

            if ($object->isInitialized('periode') && null !== $object->getPeriode()) {
                $data['periode'] = $object->getPeriode()->format('Y-m-d');
            }

            $data['numeroDossier'] = $object->getNumeroDossier();

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [AcquisitionContenuPartielDSNRequest::class => false];
        }
    }
}
