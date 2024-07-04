<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\ModificationHoraireEtablissement;
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
    class ModificationHoraireEtablissementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return ModificationHoraireEtablissement::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && ModificationHoraireEtablissement::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new ModificationHoraireEtablissement();
            if (\array_key_exists('totalMensuelHeuresNormales', $data) && \is_int($data['totalMensuelHeuresNormales'])) {
                $data['totalMensuelHeuresNormales'] = (float) $data['totalMensuelHeuresNormales'];
            }

            if (\array_key_exists('totalMensuelHeuresMajorees', $data) && \is_int($data['totalMensuelHeuresMajorees'])) {
                $data['totalMensuelHeuresMajorees'] = (float) $data['totalMensuelHeuresMajorees'];
            }

            if (\array_key_exists('pourcentageHeuresMajorees', $data) && \is_int($data['pourcentageHeuresMajorees'])) {
                $data['pourcentageHeuresMajorees'] = (float) $data['pourcentageHeuresMajorees'];
            }

            if (\array_key_exists('totalMensuelHeuresLibres1', $data) && \is_int($data['totalMensuelHeuresLibres1'])) {
                $data['totalMensuelHeuresLibres1'] = (float) $data['totalMensuelHeuresLibres1'];
            }

            if (\array_key_exists('totalMensuelHeuresLibres2', $data) && \is_int($data['totalMensuelHeuresLibres2'])) {
                $data['totalMensuelHeuresLibres2'] = (float) $data['totalMensuelHeuresLibres2'];
            }

            if (\array_key_exists('totalMensuelHeuresLibres3', $data) && \is_int($data['totalMensuelHeuresLibres3'])) {
                $data['totalMensuelHeuresLibres3'] = (float) $data['totalMensuelHeuresLibres3'];
            }

            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('bNomGrilleHoraire', $data) && null !== $data['bNomGrilleHoraire']) {
                $object->setBNomGrilleHoraire($data['bNomGrilleHoraire']);
            } elseif (\array_key_exists('bNomGrilleHoraire', $data) && null === $data['bNomGrilleHoraire']) {
                $object->setBNomGrilleHoraire(null);
            }

            if (\array_key_exists('nomGrilleHoraire', $data) && null !== $data['nomGrilleHoraire']) {
                $object->setNomGrilleHoraire($data['nomGrilleHoraire']);
            } elseif (\array_key_exists('nomGrilleHoraire', $data) && null === $data['nomGrilleHoraire']) {
                $object->setNomGrilleHoraire(null);
            }

            if (\array_key_exists('bHeuresTravaillees', $data) && null !== $data['bHeuresTravaillees']) {
                $object->setBHeuresTravaillees($data['bHeuresTravaillees']);
            } elseif (\array_key_exists('bHeuresTravaillees', $data) && null === $data['bHeuresTravaillees']) {
                $object->setBHeuresTravaillees(null);
            }

            if (\array_key_exists('heuresTravaillees', $data) && null !== $data['heuresTravaillees']) {
                $values = [];
                foreach ($data['heuresTravaillees'] as $value) {
                    $values[] = $value;
                }

                $object->setHeuresTravaillees($values);
            } elseif (\array_key_exists('heuresTravaillees', $data) && null === $data['heuresTravaillees']) {
                $object->setHeuresTravaillees(null);
            }

            if (\array_key_exists('heuresDeNuit', $data) && null !== $data['heuresDeNuit']) {
                $values_1 = [];
                foreach ($data['heuresDeNuit'] as $value_1) {
                    $values_1[] = $value_1;
                }

                $object->setHeuresDeNuit($values_1);
            } elseif (\array_key_exists('heuresDeNuit', $data) && null === $data['heuresDeNuit']) {
                $object->setHeuresDeNuit(null);
            }

            if (\array_key_exists('bHeuresPayees', $data) && null !== $data['bHeuresPayees']) {
                $object->setBHeuresPayees($data['bHeuresPayees']);
            } elseif (\array_key_exists('bHeuresPayees', $data) && null === $data['bHeuresPayees']) {
                $object->setBHeuresPayees(null);
            }

            if (\array_key_exists('heuresPayeesNormales', $data) && null !== $data['heuresPayeesNormales']) {
                $values_2 = [];
                foreach ($data['heuresPayeesNormales'] as $value_2) {
                    $values_2[] = $value_2;
                }

                $object->setHeuresPayeesNormales($values_2);
            } elseif (\array_key_exists('heuresPayeesNormales', $data) && null === $data['heuresPayeesNormales']) {
                $object->setHeuresPayeesNormales(null);
            }

            if (\array_key_exists('heuresPayeesMajorees', $data) && null !== $data['heuresPayeesMajorees']) {
                $values_3 = [];
                foreach ($data['heuresPayeesMajorees'] as $value_3) {
                    $values_3[] = $value_3;
                }

                $object->setHeuresPayeesMajorees($values_3);
            } elseif (\array_key_exists('heuresPayeesMajorees', $data) && null === $data['heuresPayeesMajorees']) {
                $object->setHeuresPayeesMajorees(null);
            }

            if (\array_key_exists('bHeuresLibres1', $data) && null !== $data['bHeuresLibres1']) {
                $object->setBHeuresLibres1($data['bHeuresLibres1']);
            } elseif (\array_key_exists('bHeuresLibres1', $data) && null === $data['bHeuresLibres1']) {
                $object->setBHeuresLibres1(null);
            }

            if (\array_key_exists('codeHeuresLibres1', $data) && null !== $data['codeHeuresLibres1']) {
                $object->setCodeHeuresLibres1($data['codeHeuresLibres1']);
            } elseif (\array_key_exists('codeHeuresLibres1', $data) && null === $data['codeHeuresLibres1']) {
                $object->setCodeHeuresLibres1(null);
            }

            if (\array_key_exists('heuresLibres1', $data) && null !== $data['heuresLibres1']) {
                $values_4 = [];
                foreach ($data['heuresLibres1'] as $value_4) {
                    $values_4[] = $value_4;
                }

                $object->setHeuresLibres1($values_4);
            } elseif (\array_key_exists('heuresLibres1', $data) && null === $data['heuresLibres1']) {
                $object->setHeuresLibres1(null);
            }

            if (\array_key_exists('bHeuresLibres2', $data) && null !== $data['bHeuresLibres2']) {
                $object->setBHeuresLibres2($data['bHeuresLibres2']);
            } elseif (\array_key_exists('bHeuresLibres2', $data) && null === $data['bHeuresLibres2']) {
                $object->setBHeuresLibres2(null);
            }

            if (\array_key_exists('codeHeuresLibres2', $data) && null !== $data['codeHeuresLibres2']) {
                $object->setCodeHeuresLibres2($data['codeHeuresLibres2']);
            } elseif (\array_key_exists('codeHeuresLibres2', $data) && null === $data['codeHeuresLibres2']) {
                $object->setCodeHeuresLibres2(null);
            }

            if (\array_key_exists('heuresLibres2', $data) && null !== $data['heuresLibres2']) {
                $values_5 = [];
                foreach ($data['heuresLibres2'] as $value_5) {
                    $values_5[] = $value_5;
                }

                $object->setHeuresLibres2($values_5);
            } elseif (\array_key_exists('heuresLibres2', $data) && null === $data['heuresLibres2']) {
                $object->setHeuresLibres2(null);
            }

            if (\array_key_exists('bHeuresLibres3', $data) && null !== $data['bHeuresLibres3']) {
                $object->setBHeuresLibres3($data['bHeuresLibres3']);
            } elseif (\array_key_exists('bHeuresLibres3', $data) && null === $data['bHeuresLibres3']) {
                $object->setBHeuresLibres3(null);
            }

            if (\array_key_exists('codeHeuresLibres3', $data) && null !== $data['codeHeuresLibres3']) {
                $object->setCodeHeuresLibres3($data['codeHeuresLibres3']);
            } elseif (\array_key_exists('codeHeuresLibres3', $data) && null === $data['codeHeuresLibres3']) {
                $object->setCodeHeuresLibres3(null);
            }

            if (\array_key_exists('heuresLibres3', $data) && null !== $data['heuresLibres3']) {
                $values_6 = [];
                foreach ($data['heuresLibres3'] as $value_6) {
                    $values_6[] = $value_6;
                }

                $object->setHeuresLibres3($values_6);
            } elseif (\array_key_exists('heuresLibres3', $data) && null === $data['heuresLibres3']) {
                $object->setHeuresLibres3(null);
            }

            if (\array_key_exists('bTotalMensuelHeuresNormales', $data) && null !== $data['bTotalMensuelHeuresNormales']) {
                $object->setBTotalMensuelHeuresNormales($data['bTotalMensuelHeuresNormales']);
            } elseif (\array_key_exists('bTotalMensuelHeuresNormales', $data) && null === $data['bTotalMensuelHeuresNormales']) {
                $object->setBTotalMensuelHeuresNormales(null);
            }

            if (\array_key_exists('totalMensuelHeuresNormales', $data) && null !== $data['totalMensuelHeuresNormales']) {
                $object->setTotalMensuelHeuresNormales($data['totalMensuelHeuresNormales']);
            } elseif (\array_key_exists('totalMensuelHeuresNormales', $data) && null === $data['totalMensuelHeuresNormales']) {
                $object->setTotalMensuelHeuresNormales(null);
            }

            if (\array_key_exists('bTotalMensuelHeuresMajorees', $data) && null !== $data['bTotalMensuelHeuresMajorees']) {
                $object->setBTotalMensuelHeuresMajorees($data['bTotalMensuelHeuresMajorees']);
            } elseif (\array_key_exists('bTotalMensuelHeuresMajorees', $data) && null === $data['bTotalMensuelHeuresMajorees']) {
                $object->setBTotalMensuelHeuresMajorees(null);
            }

            if (\array_key_exists('totalMensuelHeuresMajorees', $data) && null !== $data['totalMensuelHeuresMajorees']) {
                $object->setTotalMensuelHeuresMajorees($data['totalMensuelHeuresMajorees']);
            } elseif (\array_key_exists('totalMensuelHeuresMajorees', $data) && null === $data['totalMensuelHeuresMajorees']) {
                $object->setTotalMensuelHeuresMajorees(null);
            }

            if (\array_key_exists('pourcentageHeuresMajorees', $data) && null !== $data['pourcentageHeuresMajorees']) {
                $object->setPourcentageHeuresMajorees($data['pourcentageHeuresMajorees']);
            } elseif (\array_key_exists('pourcentageHeuresMajorees', $data) && null === $data['pourcentageHeuresMajorees']) {
                $object->setPourcentageHeuresMajorees(null);
            }

            if (\array_key_exists('bTotalMensuelHeuresLibres1', $data) && null !== $data['bTotalMensuelHeuresLibres1']) {
                $object->setBTotalMensuelHeuresLibres1($data['bTotalMensuelHeuresLibres1']);
            } elseif (\array_key_exists('bTotalMensuelHeuresLibres1', $data) && null === $data['bTotalMensuelHeuresLibres1']) {
                $object->setBTotalMensuelHeuresLibres1(null);
            }

            if (\array_key_exists('totalMensuelHeuresLibres1', $data) && null !== $data['totalMensuelHeuresLibres1']) {
                $object->setTotalMensuelHeuresLibres1($data['totalMensuelHeuresLibres1']);
            } elseif (\array_key_exists('totalMensuelHeuresLibres1', $data) && null === $data['totalMensuelHeuresLibres1']) {
                $object->setTotalMensuelHeuresLibres1(null);
            }

            if (\array_key_exists('bTotalMensuelHeuresLibres2', $data) && null !== $data['bTotalMensuelHeuresLibres2']) {
                $object->setBTotalMensuelHeuresLibres2($data['bTotalMensuelHeuresLibres2']);
            } elseif (\array_key_exists('bTotalMensuelHeuresLibres2', $data) && null === $data['bTotalMensuelHeuresLibres2']) {
                $object->setBTotalMensuelHeuresLibres2(null);
            }

            if (\array_key_exists('totalMensuelHeuresLibres2', $data) && null !== $data['totalMensuelHeuresLibres2']) {
                $object->setTotalMensuelHeuresLibres2($data['totalMensuelHeuresLibres2']);
            } elseif (\array_key_exists('totalMensuelHeuresLibres2', $data) && null === $data['totalMensuelHeuresLibres2']) {
                $object->setTotalMensuelHeuresLibres2(null);
            }

            if (\array_key_exists('bTotalMensuelHeuresLibres3', $data) && null !== $data['bTotalMensuelHeuresLibres3']) {
                $object->setBTotalMensuelHeuresLibres3($data['bTotalMensuelHeuresLibres3']);
            } elseif (\array_key_exists('bTotalMensuelHeuresLibres3', $data) && null === $data['bTotalMensuelHeuresLibres3']) {
                $object->setBTotalMensuelHeuresLibres3(null);
            }

            if (\array_key_exists('totalMensuelHeuresLibres3', $data) && null !== $data['totalMensuelHeuresLibres3']) {
                $object->setTotalMensuelHeuresLibres3($data['totalMensuelHeuresLibres3']);
            } elseif (\array_key_exists('totalMensuelHeuresLibres3', $data) && null === $data['totalMensuelHeuresLibres3']) {
                $object->setTotalMensuelHeuresLibres3(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('bNomGrilleHoraire') && null !== $object->getBNomGrilleHoraire()) {
                $data['bNomGrilleHoraire'] = $object->getBNomGrilleHoraire();
            }

            if ($object->isInitialized('nomGrilleHoraire') && null !== $object->getNomGrilleHoraire()) {
                $data['nomGrilleHoraire'] = $object->getNomGrilleHoraire();
            }

            if ($object->isInitialized('bHeuresTravaillees') && null !== $object->getBHeuresTravaillees()) {
                $data['bHeuresTravaillees'] = $object->getBHeuresTravaillees();
            }

            if ($object->isInitialized('heuresTravaillees') && null !== $object->getHeuresTravaillees()) {
                $values = [];
                foreach ($object->getHeuresTravaillees() as $value) {
                    $values[] = $value;
                }

                $data['heuresTravaillees'] = $values;
            }

            if ($object->isInitialized('heuresDeNuit') && null !== $object->getHeuresDeNuit()) {
                $values_1 = [];
                foreach ($object->getHeuresDeNuit() as $value_1) {
                    $values_1[] = $value_1;
                }

                $data['heuresDeNuit'] = $values_1;
            }

            if ($object->isInitialized('bHeuresPayees') && null !== $object->getBHeuresPayees()) {
                $data['bHeuresPayees'] = $object->getBHeuresPayees();
            }

            if ($object->isInitialized('heuresPayeesNormales') && null !== $object->getHeuresPayeesNormales()) {
                $values_2 = [];
                foreach ($object->getHeuresPayeesNormales() as $value_2) {
                    $values_2[] = $value_2;
                }

                $data['heuresPayeesNormales'] = $values_2;
            }

            if ($object->isInitialized('heuresPayeesMajorees') && null !== $object->getHeuresPayeesMajorees()) {
                $values_3 = [];
                foreach ($object->getHeuresPayeesMajorees() as $value_3) {
                    $values_3[] = $value_3;
                }

                $data['heuresPayeesMajorees'] = $values_3;
            }

            if ($object->isInitialized('bHeuresLibres1') && null !== $object->getBHeuresLibres1()) {
                $data['bHeuresLibres1'] = $object->getBHeuresLibres1();
            }

            if ($object->isInitialized('codeHeuresLibres1') && null !== $object->getCodeHeuresLibres1()) {
                $data['codeHeuresLibres1'] = $object->getCodeHeuresLibres1();
            }

            if ($object->isInitialized('heuresLibres1') && null !== $object->getHeuresLibres1()) {
                $values_4 = [];
                foreach ($object->getHeuresLibres1() as $value_4) {
                    $values_4[] = $value_4;
                }

                $data['heuresLibres1'] = $values_4;
            }

            if ($object->isInitialized('bHeuresLibres2') && null !== $object->getBHeuresLibres2()) {
                $data['bHeuresLibres2'] = $object->getBHeuresLibres2();
            }

            if ($object->isInitialized('codeHeuresLibres2') && null !== $object->getCodeHeuresLibres2()) {
                $data['codeHeuresLibres2'] = $object->getCodeHeuresLibres2();
            }

            if ($object->isInitialized('heuresLibres2') && null !== $object->getHeuresLibres2()) {
                $values_5 = [];
                foreach ($object->getHeuresLibres2() as $value_5) {
                    $values_5[] = $value_5;
                }

                $data['heuresLibres2'] = $values_5;
            }

            if ($object->isInitialized('bHeuresLibres3') && null !== $object->getBHeuresLibres3()) {
                $data['bHeuresLibres3'] = $object->getBHeuresLibres3();
            }

            if ($object->isInitialized('codeHeuresLibres3') && null !== $object->getCodeHeuresLibres3()) {
                $data['codeHeuresLibres3'] = $object->getCodeHeuresLibres3();
            }

            if ($object->isInitialized('heuresLibres3') && null !== $object->getHeuresLibres3()) {
                $values_6 = [];
                foreach ($object->getHeuresLibres3() as $value_6) {
                    $values_6[] = $value_6;
                }

                $data['heuresLibres3'] = $values_6;
            }

            if ($object->isInitialized('bTotalMensuelHeuresNormales') && null !== $object->getBTotalMensuelHeuresNormales()) {
                $data['bTotalMensuelHeuresNormales'] = $object->getBTotalMensuelHeuresNormales();
            }

            if ($object->isInitialized('totalMensuelHeuresNormales') && null !== $object->getTotalMensuelHeuresNormales()) {
                $data['totalMensuelHeuresNormales'] = $object->getTotalMensuelHeuresNormales();
            }

            if ($object->isInitialized('bTotalMensuelHeuresMajorees') && null !== $object->getBTotalMensuelHeuresMajorees()) {
                $data['bTotalMensuelHeuresMajorees'] = $object->getBTotalMensuelHeuresMajorees();
            }

            if ($object->isInitialized('totalMensuelHeuresMajorees') && null !== $object->getTotalMensuelHeuresMajorees()) {
                $data['totalMensuelHeuresMajorees'] = $object->getTotalMensuelHeuresMajorees();
            }

            if ($object->isInitialized('pourcentageHeuresMajorees') && null !== $object->getPourcentageHeuresMajorees()) {
                $data['pourcentageHeuresMajorees'] = $object->getPourcentageHeuresMajorees();
            }

            if ($object->isInitialized('bTotalMensuelHeuresLibres1') && null !== $object->getBTotalMensuelHeuresLibres1()) {
                $data['bTotalMensuelHeuresLibres1'] = $object->getBTotalMensuelHeuresLibres1();
            }

            if ($object->isInitialized('totalMensuelHeuresLibres1') && null !== $object->getTotalMensuelHeuresLibres1()) {
                $data['totalMensuelHeuresLibres1'] = $object->getTotalMensuelHeuresLibres1();
            }

            if ($object->isInitialized('bTotalMensuelHeuresLibres2') && null !== $object->getBTotalMensuelHeuresLibres2()) {
                $data['bTotalMensuelHeuresLibres2'] = $object->getBTotalMensuelHeuresLibres2();
            }

            if ($object->isInitialized('totalMensuelHeuresLibres2') && null !== $object->getTotalMensuelHeuresLibres2()) {
                $data['totalMensuelHeuresLibres2'] = $object->getTotalMensuelHeuresLibres2();
            }

            if ($object->isInitialized('bTotalMensuelHeuresLibres3') && null !== $object->getBTotalMensuelHeuresLibres3()) {
                $data['bTotalMensuelHeuresLibres3'] = $object->getBTotalMensuelHeuresLibres3();
            }

            if ($object->isInitialized('totalMensuelHeuresLibres3') && null !== $object->getTotalMensuelHeuresLibres3()) {
                $data['totalMensuelHeuresLibres3'] = $object->getTotalMensuelHeuresLibres3();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [ModificationHoraireEtablissement::class => false];
        }
    }
} else {
    class ModificationHoraireEtablissementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return ModificationHoraireEtablissement::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && ModificationHoraireEtablissement::class === $data::class;
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

            $object = new ModificationHoraireEtablissement();
            if (\array_key_exists('totalMensuelHeuresNormales', $data) && \is_int($data['totalMensuelHeuresNormales'])) {
                $data['totalMensuelHeuresNormales'] = (float) $data['totalMensuelHeuresNormales'];
            }

            if (\array_key_exists('totalMensuelHeuresMajorees', $data) && \is_int($data['totalMensuelHeuresMajorees'])) {
                $data['totalMensuelHeuresMajorees'] = (float) $data['totalMensuelHeuresMajorees'];
            }

            if (\array_key_exists('pourcentageHeuresMajorees', $data) && \is_int($data['pourcentageHeuresMajorees'])) {
                $data['pourcentageHeuresMajorees'] = (float) $data['pourcentageHeuresMajorees'];
            }

            if (\array_key_exists('totalMensuelHeuresLibres1', $data) && \is_int($data['totalMensuelHeuresLibres1'])) {
                $data['totalMensuelHeuresLibres1'] = (float) $data['totalMensuelHeuresLibres1'];
            }

            if (\array_key_exists('totalMensuelHeuresLibres2', $data) && \is_int($data['totalMensuelHeuresLibres2'])) {
                $data['totalMensuelHeuresLibres2'] = (float) $data['totalMensuelHeuresLibres2'];
            }

            if (\array_key_exists('totalMensuelHeuresLibres3', $data) && \is_int($data['totalMensuelHeuresLibres3'])) {
                $data['totalMensuelHeuresLibres3'] = (float) $data['totalMensuelHeuresLibres3'];
            }

            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('bNomGrilleHoraire', $data) && null !== $data['bNomGrilleHoraire']) {
                $object->setBNomGrilleHoraire($data['bNomGrilleHoraire']);
            } elseif (\array_key_exists('bNomGrilleHoraire', $data) && null === $data['bNomGrilleHoraire']) {
                $object->setBNomGrilleHoraire(null);
            }

            if (\array_key_exists('nomGrilleHoraire', $data) && null !== $data['nomGrilleHoraire']) {
                $object->setNomGrilleHoraire($data['nomGrilleHoraire']);
            } elseif (\array_key_exists('nomGrilleHoraire', $data) && null === $data['nomGrilleHoraire']) {
                $object->setNomGrilleHoraire(null);
            }

            if (\array_key_exists('bHeuresTravaillees', $data) && null !== $data['bHeuresTravaillees']) {
                $object->setBHeuresTravaillees($data['bHeuresTravaillees']);
            } elseif (\array_key_exists('bHeuresTravaillees', $data) && null === $data['bHeuresTravaillees']) {
                $object->setBHeuresTravaillees(null);
            }

            if (\array_key_exists('heuresTravaillees', $data) && null !== $data['heuresTravaillees']) {
                $values = [];
                foreach ($data['heuresTravaillees'] as $value) {
                    $values[] = $value;
                }

                $object->setHeuresTravaillees($values);
            } elseif (\array_key_exists('heuresTravaillees', $data) && null === $data['heuresTravaillees']) {
                $object->setHeuresTravaillees(null);
            }

            if (\array_key_exists('heuresDeNuit', $data) && null !== $data['heuresDeNuit']) {
                $values_1 = [];
                foreach ($data['heuresDeNuit'] as $value_1) {
                    $values_1[] = $value_1;
                }

                $object->setHeuresDeNuit($values_1);
            } elseif (\array_key_exists('heuresDeNuit', $data) && null === $data['heuresDeNuit']) {
                $object->setHeuresDeNuit(null);
            }

            if (\array_key_exists('bHeuresPayees', $data) && null !== $data['bHeuresPayees']) {
                $object->setBHeuresPayees($data['bHeuresPayees']);
            } elseif (\array_key_exists('bHeuresPayees', $data) && null === $data['bHeuresPayees']) {
                $object->setBHeuresPayees(null);
            }

            if (\array_key_exists('heuresPayeesNormales', $data) && null !== $data['heuresPayeesNormales']) {
                $values_2 = [];
                foreach ($data['heuresPayeesNormales'] as $value_2) {
                    $values_2[] = $value_2;
                }

                $object->setHeuresPayeesNormales($values_2);
            } elseif (\array_key_exists('heuresPayeesNormales', $data) && null === $data['heuresPayeesNormales']) {
                $object->setHeuresPayeesNormales(null);
            }

            if (\array_key_exists('heuresPayeesMajorees', $data) && null !== $data['heuresPayeesMajorees']) {
                $values_3 = [];
                foreach ($data['heuresPayeesMajorees'] as $value_3) {
                    $values_3[] = $value_3;
                }

                $object->setHeuresPayeesMajorees($values_3);
            } elseif (\array_key_exists('heuresPayeesMajorees', $data) && null === $data['heuresPayeesMajorees']) {
                $object->setHeuresPayeesMajorees(null);
            }

            if (\array_key_exists('bHeuresLibres1', $data) && null !== $data['bHeuresLibres1']) {
                $object->setBHeuresLibres1($data['bHeuresLibres1']);
            } elseif (\array_key_exists('bHeuresLibres1', $data) && null === $data['bHeuresLibres1']) {
                $object->setBHeuresLibres1(null);
            }

            if (\array_key_exists('codeHeuresLibres1', $data) && null !== $data['codeHeuresLibres1']) {
                $object->setCodeHeuresLibres1($data['codeHeuresLibres1']);
            } elseif (\array_key_exists('codeHeuresLibres1', $data) && null === $data['codeHeuresLibres1']) {
                $object->setCodeHeuresLibres1(null);
            }

            if (\array_key_exists('heuresLibres1', $data) && null !== $data['heuresLibres1']) {
                $values_4 = [];
                foreach ($data['heuresLibres1'] as $value_4) {
                    $values_4[] = $value_4;
                }

                $object->setHeuresLibres1($values_4);
            } elseif (\array_key_exists('heuresLibres1', $data) && null === $data['heuresLibres1']) {
                $object->setHeuresLibres1(null);
            }

            if (\array_key_exists('bHeuresLibres2', $data) && null !== $data['bHeuresLibres2']) {
                $object->setBHeuresLibres2($data['bHeuresLibres2']);
            } elseif (\array_key_exists('bHeuresLibres2', $data) && null === $data['bHeuresLibres2']) {
                $object->setBHeuresLibres2(null);
            }

            if (\array_key_exists('codeHeuresLibres2', $data) && null !== $data['codeHeuresLibres2']) {
                $object->setCodeHeuresLibres2($data['codeHeuresLibres2']);
            } elseif (\array_key_exists('codeHeuresLibres2', $data) && null === $data['codeHeuresLibres2']) {
                $object->setCodeHeuresLibres2(null);
            }

            if (\array_key_exists('heuresLibres2', $data) && null !== $data['heuresLibres2']) {
                $values_5 = [];
                foreach ($data['heuresLibres2'] as $value_5) {
                    $values_5[] = $value_5;
                }

                $object->setHeuresLibres2($values_5);
            } elseif (\array_key_exists('heuresLibres2', $data) && null === $data['heuresLibres2']) {
                $object->setHeuresLibres2(null);
            }

            if (\array_key_exists('bHeuresLibres3', $data) && null !== $data['bHeuresLibres3']) {
                $object->setBHeuresLibres3($data['bHeuresLibres3']);
            } elseif (\array_key_exists('bHeuresLibres3', $data) && null === $data['bHeuresLibres3']) {
                $object->setBHeuresLibres3(null);
            }

            if (\array_key_exists('codeHeuresLibres3', $data) && null !== $data['codeHeuresLibres3']) {
                $object->setCodeHeuresLibres3($data['codeHeuresLibres3']);
            } elseif (\array_key_exists('codeHeuresLibres3', $data) && null === $data['codeHeuresLibres3']) {
                $object->setCodeHeuresLibres3(null);
            }

            if (\array_key_exists('heuresLibres3', $data) && null !== $data['heuresLibres3']) {
                $values_6 = [];
                foreach ($data['heuresLibres3'] as $value_6) {
                    $values_6[] = $value_6;
                }

                $object->setHeuresLibres3($values_6);
            } elseif (\array_key_exists('heuresLibres3', $data) && null === $data['heuresLibres3']) {
                $object->setHeuresLibres3(null);
            }

            if (\array_key_exists('bTotalMensuelHeuresNormales', $data) && null !== $data['bTotalMensuelHeuresNormales']) {
                $object->setBTotalMensuelHeuresNormales($data['bTotalMensuelHeuresNormales']);
            } elseif (\array_key_exists('bTotalMensuelHeuresNormales', $data) && null === $data['bTotalMensuelHeuresNormales']) {
                $object->setBTotalMensuelHeuresNormales(null);
            }

            if (\array_key_exists('totalMensuelHeuresNormales', $data) && null !== $data['totalMensuelHeuresNormales']) {
                $object->setTotalMensuelHeuresNormales($data['totalMensuelHeuresNormales']);
            } elseif (\array_key_exists('totalMensuelHeuresNormales', $data) && null === $data['totalMensuelHeuresNormales']) {
                $object->setTotalMensuelHeuresNormales(null);
            }

            if (\array_key_exists('bTotalMensuelHeuresMajorees', $data) && null !== $data['bTotalMensuelHeuresMajorees']) {
                $object->setBTotalMensuelHeuresMajorees($data['bTotalMensuelHeuresMajorees']);
            } elseif (\array_key_exists('bTotalMensuelHeuresMajorees', $data) && null === $data['bTotalMensuelHeuresMajorees']) {
                $object->setBTotalMensuelHeuresMajorees(null);
            }

            if (\array_key_exists('totalMensuelHeuresMajorees', $data) && null !== $data['totalMensuelHeuresMajorees']) {
                $object->setTotalMensuelHeuresMajorees($data['totalMensuelHeuresMajorees']);
            } elseif (\array_key_exists('totalMensuelHeuresMajorees', $data) && null === $data['totalMensuelHeuresMajorees']) {
                $object->setTotalMensuelHeuresMajorees(null);
            }

            if (\array_key_exists('pourcentageHeuresMajorees', $data) && null !== $data['pourcentageHeuresMajorees']) {
                $object->setPourcentageHeuresMajorees($data['pourcentageHeuresMajorees']);
            } elseif (\array_key_exists('pourcentageHeuresMajorees', $data) && null === $data['pourcentageHeuresMajorees']) {
                $object->setPourcentageHeuresMajorees(null);
            }

            if (\array_key_exists('bTotalMensuelHeuresLibres1', $data) && null !== $data['bTotalMensuelHeuresLibres1']) {
                $object->setBTotalMensuelHeuresLibres1($data['bTotalMensuelHeuresLibres1']);
            } elseif (\array_key_exists('bTotalMensuelHeuresLibres1', $data) && null === $data['bTotalMensuelHeuresLibres1']) {
                $object->setBTotalMensuelHeuresLibres1(null);
            }

            if (\array_key_exists('totalMensuelHeuresLibres1', $data) && null !== $data['totalMensuelHeuresLibres1']) {
                $object->setTotalMensuelHeuresLibres1($data['totalMensuelHeuresLibres1']);
            } elseif (\array_key_exists('totalMensuelHeuresLibres1', $data) && null === $data['totalMensuelHeuresLibres1']) {
                $object->setTotalMensuelHeuresLibres1(null);
            }

            if (\array_key_exists('bTotalMensuelHeuresLibres2', $data) && null !== $data['bTotalMensuelHeuresLibres2']) {
                $object->setBTotalMensuelHeuresLibres2($data['bTotalMensuelHeuresLibres2']);
            } elseif (\array_key_exists('bTotalMensuelHeuresLibres2', $data) && null === $data['bTotalMensuelHeuresLibres2']) {
                $object->setBTotalMensuelHeuresLibres2(null);
            }

            if (\array_key_exists('totalMensuelHeuresLibres2', $data) && null !== $data['totalMensuelHeuresLibres2']) {
                $object->setTotalMensuelHeuresLibres2($data['totalMensuelHeuresLibres2']);
            } elseif (\array_key_exists('totalMensuelHeuresLibres2', $data) && null === $data['totalMensuelHeuresLibres2']) {
                $object->setTotalMensuelHeuresLibres2(null);
            }

            if (\array_key_exists('bTotalMensuelHeuresLibres3', $data) && null !== $data['bTotalMensuelHeuresLibres3']) {
                $object->setBTotalMensuelHeuresLibres3($data['bTotalMensuelHeuresLibres3']);
            } elseif (\array_key_exists('bTotalMensuelHeuresLibres3', $data) && null === $data['bTotalMensuelHeuresLibres3']) {
                $object->setBTotalMensuelHeuresLibres3(null);
            }

            if (\array_key_exists('totalMensuelHeuresLibres3', $data) && null !== $data['totalMensuelHeuresLibres3']) {
                $object->setTotalMensuelHeuresLibres3($data['totalMensuelHeuresLibres3']);
            } elseif (\array_key_exists('totalMensuelHeuresLibres3', $data) && null === $data['totalMensuelHeuresLibres3']) {
                $object->setTotalMensuelHeuresLibres3(null);
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
            if ($object->isInitialized('bNomGrilleHoraire') && null !== $object->getBNomGrilleHoraire()) {
                $data['bNomGrilleHoraire'] = $object->getBNomGrilleHoraire();
            }

            if ($object->isInitialized('nomGrilleHoraire') && null !== $object->getNomGrilleHoraire()) {
                $data['nomGrilleHoraire'] = $object->getNomGrilleHoraire();
            }

            if ($object->isInitialized('bHeuresTravaillees') && null !== $object->getBHeuresTravaillees()) {
                $data['bHeuresTravaillees'] = $object->getBHeuresTravaillees();
            }

            if ($object->isInitialized('heuresTravaillees') && null !== $object->getHeuresTravaillees()) {
                $values = [];
                foreach ($object->getHeuresTravaillees() as $value) {
                    $values[] = $value;
                }

                $data['heuresTravaillees'] = $values;
            }

            if ($object->isInitialized('heuresDeNuit') && null !== $object->getHeuresDeNuit()) {
                $values_1 = [];
                foreach ($object->getHeuresDeNuit() as $value_1) {
                    $values_1[] = $value_1;
                }

                $data['heuresDeNuit'] = $values_1;
            }

            if ($object->isInitialized('bHeuresPayees') && null !== $object->getBHeuresPayees()) {
                $data['bHeuresPayees'] = $object->getBHeuresPayees();
            }

            if ($object->isInitialized('heuresPayeesNormales') && null !== $object->getHeuresPayeesNormales()) {
                $values_2 = [];
                foreach ($object->getHeuresPayeesNormales() as $value_2) {
                    $values_2[] = $value_2;
                }

                $data['heuresPayeesNormales'] = $values_2;
            }

            if ($object->isInitialized('heuresPayeesMajorees') && null !== $object->getHeuresPayeesMajorees()) {
                $values_3 = [];
                foreach ($object->getHeuresPayeesMajorees() as $value_3) {
                    $values_3[] = $value_3;
                }

                $data['heuresPayeesMajorees'] = $values_3;
            }

            if ($object->isInitialized('bHeuresLibres1') && null !== $object->getBHeuresLibres1()) {
                $data['bHeuresLibres1'] = $object->getBHeuresLibres1();
            }

            if ($object->isInitialized('codeHeuresLibres1') && null !== $object->getCodeHeuresLibres1()) {
                $data['codeHeuresLibres1'] = $object->getCodeHeuresLibres1();
            }

            if ($object->isInitialized('heuresLibres1') && null !== $object->getHeuresLibres1()) {
                $values_4 = [];
                foreach ($object->getHeuresLibres1() as $value_4) {
                    $values_4[] = $value_4;
                }

                $data['heuresLibres1'] = $values_4;
            }

            if ($object->isInitialized('bHeuresLibres2') && null !== $object->getBHeuresLibres2()) {
                $data['bHeuresLibres2'] = $object->getBHeuresLibres2();
            }

            if ($object->isInitialized('codeHeuresLibres2') && null !== $object->getCodeHeuresLibres2()) {
                $data['codeHeuresLibres2'] = $object->getCodeHeuresLibres2();
            }

            if ($object->isInitialized('heuresLibres2') && null !== $object->getHeuresLibres2()) {
                $values_5 = [];
                foreach ($object->getHeuresLibres2() as $value_5) {
                    $values_5[] = $value_5;
                }

                $data['heuresLibres2'] = $values_5;
            }

            if ($object->isInitialized('bHeuresLibres3') && null !== $object->getBHeuresLibres3()) {
                $data['bHeuresLibres3'] = $object->getBHeuresLibres3();
            }

            if ($object->isInitialized('codeHeuresLibres3') && null !== $object->getCodeHeuresLibres3()) {
                $data['codeHeuresLibres3'] = $object->getCodeHeuresLibres3();
            }

            if ($object->isInitialized('heuresLibres3') && null !== $object->getHeuresLibres3()) {
                $values_6 = [];
                foreach ($object->getHeuresLibres3() as $value_6) {
                    $values_6[] = $value_6;
                }

                $data['heuresLibres3'] = $values_6;
            }

            if ($object->isInitialized('bTotalMensuelHeuresNormales') && null !== $object->getBTotalMensuelHeuresNormales()) {
                $data['bTotalMensuelHeuresNormales'] = $object->getBTotalMensuelHeuresNormales();
            }

            if ($object->isInitialized('totalMensuelHeuresNormales') && null !== $object->getTotalMensuelHeuresNormales()) {
                $data['totalMensuelHeuresNormales'] = $object->getTotalMensuelHeuresNormales();
            }

            if ($object->isInitialized('bTotalMensuelHeuresMajorees') && null !== $object->getBTotalMensuelHeuresMajorees()) {
                $data['bTotalMensuelHeuresMajorees'] = $object->getBTotalMensuelHeuresMajorees();
            }

            if ($object->isInitialized('totalMensuelHeuresMajorees') && null !== $object->getTotalMensuelHeuresMajorees()) {
                $data['totalMensuelHeuresMajorees'] = $object->getTotalMensuelHeuresMajorees();
            }

            if ($object->isInitialized('pourcentageHeuresMajorees') && null !== $object->getPourcentageHeuresMajorees()) {
                $data['pourcentageHeuresMajorees'] = $object->getPourcentageHeuresMajorees();
            }

            if ($object->isInitialized('bTotalMensuelHeuresLibres1') && null !== $object->getBTotalMensuelHeuresLibres1()) {
                $data['bTotalMensuelHeuresLibres1'] = $object->getBTotalMensuelHeuresLibres1();
            }

            if ($object->isInitialized('totalMensuelHeuresLibres1') && null !== $object->getTotalMensuelHeuresLibres1()) {
                $data['totalMensuelHeuresLibres1'] = $object->getTotalMensuelHeuresLibres1();
            }

            if ($object->isInitialized('bTotalMensuelHeuresLibres2') && null !== $object->getBTotalMensuelHeuresLibres2()) {
                $data['bTotalMensuelHeuresLibres2'] = $object->getBTotalMensuelHeuresLibres2();
            }

            if ($object->isInitialized('totalMensuelHeuresLibres2') && null !== $object->getTotalMensuelHeuresLibres2()) {
                $data['totalMensuelHeuresLibres2'] = $object->getTotalMensuelHeuresLibres2();
            }

            if ($object->isInitialized('bTotalMensuelHeuresLibres3') && null !== $object->getBTotalMensuelHeuresLibres3()) {
                $data['bTotalMensuelHeuresLibres3'] = $object->getBTotalMensuelHeuresLibres3();
            }

            if ($object->isInitialized('totalMensuelHeuresLibres3') && null !== $object->getTotalMensuelHeuresLibres3()) {
                $data['totalMensuelHeuresLibres3'] = $object->getTotalMensuelHeuresLibres3();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [ModificationHoraireEtablissement::class => false];
        }
    }
}
