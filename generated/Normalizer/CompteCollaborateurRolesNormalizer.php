<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\CompteCollaborateurRoles;
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
    class CompteCollaborateurRolesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return CompteCollaborateurRoles::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && CompteCollaborateurRoles::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new CompteCollaborateurRoles();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('dataProtectionOfficier', $data) && null !== $data['dataProtectionOfficier']) {
                $object->setDataProtectionOfficier($data['dataProtectionOfficier']);
            } elseif (\array_key_exists('dataProtectionOfficier', $data) && null === $data['dataProtectionOfficier']) {
                $object->setDataProtectionOfficier(null);
            }

            if (\array_key_exists('dirigeant', $data) && null !== $data['dirigeant']) {
                $object->setDirigeant($data['dirigeant']);
            } elseif (\array_key_exists('dirigeant', $data) && null === $data['dirigeant']) {
                $object->setDirigeant(null);
            }

            if (\array_key_exists('referentPoleSocial', $data) && null !== $data['referentPoleSocial']) {
                $object->setReferentPoleSocial($data['referentPoleSocial']);
            } elseif (\array_key_exists('referentPoleSocial', $data) && null === $data['referentPoleSocial']) {
                $object->setReferentPoleSocial(null);
            }

            if (\array_key_exists('responsableCommercial', $data) && null !== $data['responsableCommercial']) {
                $object->setResponsableCommercial($data['responsableCommercial']);
            } elseif (\array_key_exists('responsableCommercial', $data) && null === $data['responsableCommercial']) {
                $object->setResponsableCommercial(null);
            }

            if (\array_key_exists('responsableFacturation', $data) && null !== $data['responsableFacturation']) {
                $object->setResponsableFacturation($data['responsableFacturation']);
            } elseif (\array_key_exists('responsableFacturation', $data) && null === $data['responsableFacturation']) {
                $object->setResponsableFacturation(null);
            }

            if (\array_key_exists('responsableFormation', $data) && null !== $data['responsableFormation']) {
                $object->setResponsableFormation($data['responsableFormation']);
            } elseif (\array_key_exists('responsableFormation', $data) && null === $data['responsableFormation']) {
                $object->setResponsableFormation(null);
            }

            if (\array_key_exists('responsableInformatique', $data) && null !== $data['responsableInformatique']) {
                $object->setResponsableInformatique($data['responsableInformatique']);
            } elseif (\array_key_exists('responsableInformatique', $data) && null === $data['responsableInformatique']) {
                $object->setResponsableInformatique(null);
            }

            if (\array_key_exists('responsableJuridique', $data) && null !== $data['responsableJuridique']) {
                $object->setResponsableJuridique($data['responsableJuridique']);
            } elseif (\array_key_exists('responsableJuridique', $data) && null === $data['responsableJuridique']) {
                $object->setResponsableJuridique(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('dataProtectionOfficier') && null !== $object->getDataProtectionOfficier()) {
                $data['dataProtectionOfficier'] = $object->getDataProtectionOfficier();
            }

            if ($object->isInitialized('dirigeant') && null !== $object->getDirigeant()) {
                $data['dirigeant'] = $object->getDirigeant();
            }

            if ($object->isInitialized('referentPoleSocial') && null !== $object->getReferentPoleSocial()) {
                $data['referentPoleSocial'] = $object->getReferentPoleSocial();
            }

            if ($object->isInitialized('responsableCommercial') && null !== $object->getResponsableCommercial()) {
                $data['responsableCommercial'] = $object->getResponsableCommercial();
            }

            if ($object->isInitialized('responsableFacturation') && null !== $object->getResponsableFacturation()) {
                $data['responsableFacturation'] = $object->getResponsableFacturation();
            }

            if ($object->isInitialized('responsableFormation') && null !== $object->getResponsableFormation()) {
                $data['responsableFormation'] = $object->getResponsableFormation();
            }

            if ($object->isInitialized('responsableInformatique') && null !== $object->getResponsableInformatique()) {
                $data['responsableInformatique'] = $object->getResponsableInformatique();
            }

            if ($object->isInitialized('responsableJuridique') && null !== $object->getResponsableJuridique()) {
                $data['responsableJuridique'] = $object->getResponsableJuridique();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [CompteCollaborateurRoles::class => false];
        }
    }
} else {
    class CompteCollaborateurRolesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return CompteCollaborateurRoles::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && CompteCollaborateurRoles::class === $data::class;
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

            $object = new CompteCollaborateurRoles();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('dataProtectionOfficier', $data) && null !== $data['dataProtectionOfficier']) {
                $object->setDataProtectionOfficier($data['dataProtectionOfficier']);
            } elseif (\array_key_exists('dataProtectionOfficier', $data) && null === $data['dataProtectionOfficier']) {
                $object->setDataProtectionOfficier(null);
            }

            if (\array_key_exists('dirigeant', $data) && null !== $data['dirigeant']) {
                $object->setDirigeant($data['dirigeant']);
            } elseif (\array_key_exists('dirigeant', $data) && null === $data['dirigeant']) {
                $object->setDirigeant(null);
            }

            if (\array_key_exists('referentPoleSocial', $data) && null !== $data['referentPoleSocial']) {
                $object->setReferentPoleSocial($data['referentPoleSocial']);
            } elseif (\array_key_exists('referentPoleSocial', $data) && null === $data['referentPoleSocial']) {
                $object->setReferentPoleSocial(null);
            }

            if (\array_key_exists('responsableCommercial', $data) && null !== $data['responsableCommercial']) {
                $object->setResponsableCommercial($data['responsableCommercial']);
            } elseif (\array_key_exists('responsableCommercial', $data) && null === $data['responsableCommercial']) {
                $object->setResponsableCommercial(null);
            }

            if (\array_key_exists('responsableFacturation', $data) && null !== $data['responsableFacturation']) {
                $object->setResponsableFacturation($data['responsableFacturation']);
            } elseif (\array_key_exists('responsableFacturation', $data) && null === $data['responsableFacturation']) {
                $object->setResponsableFacturation(null);
            }

            if (\array_key_exists('responsableFormation', $data) && null !== $data['responsableFormation']) {
                $object->setResponsableFormation($data['responsableFormation']);
            } elseif (\array_key_exists('responsableFormation', $data) && null === $data['responsableFormation']) {
                $object->setResponsableFormation(null);
            }

            if (\array_key_exists('responsableInformatique', $data) && null !== $data['responsableInformatique']) {
                $object->setResponsableInformatique($data['responsableInformatique']);
            } elseif (\array_key_exists('responsableInformatique', $data) && null === $data['responsableInformatique']) {
                $object->setResponsableInformatique(null);
            }

            if (\array_key_exists('responsableJuridique', $data) && null !== $data['responsableJuridique']) {
                $object->setResponsableJuridique($data['responsableJuridique']);
            } elseif (\array_key_exists('responsableJuridique', $data) && null === $data['responsableJuridique']) {
                $object->setResponsableJuridique(null);
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
            if ($object->isInitialized('dataProtectionOfficier') && null !== $object->getDataProtectionOfficier()) {
                $data['dataProtectionOfficier'] = $object->getDataProtectionOfficier();
            }

            if ($object->isInitialized('dirigeant') && null !== $object->getDirigeant()) {
                $data['dirigeant'] = $object->getDirigeant();
            }

            if ($object->isInitialized('referentPoleSocial') && null !== $object->getReferentPoleSocial()) {
                $data['referentPoleSocial'] = $object->getReferentPoleSocial();
            }

            if ($object->isInitialized('responsableCommercial') && null !== $object->getResponsableCommercial()) {
                $data['responsableCommercial'] = $object->getResponsableCommercial();
            }

            if ($object->isInitialized('responsableFacturation') && null !== $object->getResponsableFacturation()) {
                $data['responsableFacturation'] = $object->getResponsableFacturation();
            }

            if ($object->isInitialized('responsableFormation') && null !== $object->getResponsableFormation()) {
                $data['responsableFormation'] = $object->getResponsableFormation();
            }

            if ($object->isInitialized('responsableInformatique') && null !== $object->getResponsableInformatique()) {
                $data['responsableInformatique'] = $object->getResponsableInformatique();
            }

            if ($object->isInitialized('responsableJuridique') && null !== $object->getResponsableJuridique()) {
                $data['responsableJuridique'] = $object->getResponsableJuridique();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [CompteCollaborateurRoles::class => false];
        }
    }
}
