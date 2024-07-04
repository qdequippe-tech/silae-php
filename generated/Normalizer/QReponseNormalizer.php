<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\LibelleValeur;
use QdequippeTech\Silae\Api\Model\QReponse;
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
    class QReponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return QReponse::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && QReponse::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new QReponse();
            if (\array_key_exists('valeurDOUBLE', $data) && \is_int($data['valeurDOUBLE'])) {
                $data['valeurDOUBLE'] = (float) $data['valeurDOUBLE'];
            }

            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('libelleQuestion', $data) && null !== $data['libelleQuestion']) {
                $object->setLibelleQuestion($data['libelleQuestion']);
            } elseif (\array_key_exists('libelleQuestion', $data) && null === $data['libelleQuestion']) {
                $object->setLibelleQuestion(null);
            }

            if (\array_key_exists('listeChoix', $data) && null !== $data['listeChoix']) {
                $values = [];
                foreach ($data['listeChoix'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, LibelleValeur::class, 'json', $context);
                }

                $object->setListeChoix($values);
            } elseif (\array_key_exists('listeChoix', $data) && null === $data['listeChoix']) {
                $object->setListeChoix(null);
            }

            if (\array_key_exists('nomChamp', $data) && null !== $data['nomChamp']) {
                $object->setNomChamp($data['nomChamp']);
            } elseif (\array_key_exists('nomChamp', $data) && null === $data['nomChamp']) {
                $object->setNomChamp(null);
            }

            if (\array_key_exists('typeChamp', $data) && null !== $data['typeChamp']) {
                $object->setTypeChamp($data['typeChamp']);
            } elseif (\array_key_exists('typeChamp', $data) && null === $data['typeChamp']) {
                $object->setTypeChamp(null);
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
            if ($object->isInitialized('libelleQuestion') && null !== $object->getLibelleQuestion()) {
                $data['libelleQuestion'] = $object->getLibelleQuestion();
            }

            if ($object->isInitialized('listeChoix') && null !== $object->getListeChoix()) {
                $values = [];
                foreach ($object->getListeChoix() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['listeChoix'] = $values;
            }

            if ($object->isInitialized('nomChamp') && null !== $object->getNomChamp()) {
                $data['nomChamp'] = $object->getNomChamp();
            }

            if ($object->isInitialized('typeChamp') && null !== $object->getTypeChamp()) {
                $data['typeChamp'] = $object->getTypeChamp();
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

            if ($object->isInitialized('valeurBOOL') && null !== $object->getValeurBOOL()) {
                $data['valeurBOOL'] = $object->getValeurBOOL();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [QReponse::class => false];
        }
    }
} else {
    class QReponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return QReponse::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && QReponse::class === $data::class;
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

            $object = new QReponse();
            if (\array_key_exists('valeurDOUBLE', $data) && \is_int($data['valeurDOUBLE'])) {
                $data['valeurDOUBLE'] = (float) $data['valeurDOUBLE'];
            }

            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('libelleQuestion', $data) && null !== $data['libelleQuestion']) {
                $object->setLibelleQuestion($data['libelleQuestion']);
            } elseif (\array_key_exists('libelleQuestion', $data) && null === $data['libelleQuestion']) {
                $object->setLibelleQuestion(null);
            }

            if (\array_key_exists('listeChoix', $data) && null !== $data['listeChoix']) {
                $values = [];
                foreach ($data['listeChoix'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, LibelleValeur::class, 'json', $context);
                }

                $object->setListeChoix($values);
            } elseif (\array_key_exists('listeChoix', $data) && null === $data['listeChoix']) {
                $object->setListeChoix(null);
            }

            if (\array_key_exists('nomChamp', $data) && null !== $data['nomChamp']) {
                $object->setNomChamp($data['nomChamp']);
            } elseif (\array_key_exists('nomChamp', $data) && null === $data['nomChamp']) {
                $object->setNomChamp(null);
            }

            if (\array_key_exists('typeChamp', $data) && null !== $data['typeChamp']) {
                $object->setTypeChamp($data['typeChamp']);
            } elseif (\array_key_exists('typeChamp', $data) && null === $data['typeChamp']) {
                $object->setTypeChamp(null);
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
            if ($object->isInitialized('libelleQuestion') && null !== $object->getLibelleQuestion()) {
                $data['libelleQuestion'] = $object->getLibelleQuestion();
            }

            if ($object->isInitialized('listeChoix') && null !== $object->getListeChoix()) {
                $values = [];
                foreach ($object->getListeChoix() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['listeChoix'] = $values;
            }

            if ($object->isInitialized('nomChamp') && null !== $object->getNomChamp()) {
                $data['nomChamp'] = $object->getNomChamp();
            }

            if ($object->isInitialized('typeChamp') && null !== $object->getTypeChamp()) {
                $data['typeChamp'] = $object->getTypeChamp();
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

            if ($object->isInitialized('valeurBOOL') && null !== $object->getValeurBOOL()) {
                $data['valeurBOOL'] = $object->getValeurBOOL();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [QReponse::class => false];
        }
    }
}
