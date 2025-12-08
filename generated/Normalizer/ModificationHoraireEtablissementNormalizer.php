<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\ModificationHoraireEtablissement;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

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

        if (\array_key_exists('bNomGrilleHoraire', $data) && \is_int($data['bNomGrilleHoraire'])) {
            $data['bNomGrilleHoraire'] = (bool) $data['bNomGrilleHoraire'];
        }

        if (\array_key_exists('bHeuresTravaillees', $data) && \is_int($data['bHeuresTravaillees'])) {
            $data['bHeuresTravaillees'] = (bool) $data['bHeuresTravaillees'];
        }

        if (\array_key_exists('bHeuresPayees', $data) && \is_int($data['bHeuresPayees'])) {
            $data['bHeuresPayees'] = (bool) $data['bHeuresPayees'];
        }

        if (\array_key_exists('bHeuresLibres1', $data) && \is_int($data['bHeuresLibres1'])) {
            $data['bHeuresLibres1'] = (bool) $data['bHeuresLibres1'];
        }

        if (\array_key_exists('bHeuresLibres2', $data) && \is_int($data['bHeuresLibres2'])) {
            $data['bHeuresLibres2'] = (bool) $data['bHeuresLibres2'];
        }

        if (\array_key_exists('bHeuresLibres3', $data) && \is_int($data['bHeuresLibres3'])) {
            $data['bHeuresLibres3'] = (bool) $data['bHeuresLibres3'];
        }

        if (\array_key_exists('bTotalMensuelHeuresNormales', $data) && \is_int($data['bTotalMensuelHeuresNormales'])) {
            $data['bTotalMensuelHeuresNormales'] = (bool) $data['bTotalMensuelHeuresNormales'];
        }

        if (\array_key_exists('bTotalMensuelHeuresMajorees', $data) && \is_int($data['bTotalMensuelHeuresMajorees'])) {
            $data['bTotalMensuelHeuresMajorees'] = (bool) $data['bTotalMensuelHeuresMajorees'];
        }

        if (\array_key_exists('bTotalMensuelHeuresLibres1', $data) && \is_int($data['bTotalMensuelHeuresLibres1'])) {
            $data['bTotalMensuelHeuresLibres1'] = (bool) $data['bTotalMensuelHeuresLibres1'];
        }

        if (\array_key_exists('bTotalMensuelHeuresLibres2', $data) && \is_int($data['bTotalMensuelHeuresLibres2'])) {
            $data['bTotalMensuelHeuresLibres2'] = (bool) $data['bTotalMensuelHeuresLibres2'];
        }

        if (\array_key_exists('bTotalMensuelHeuresLibres3', $data) && \is_int($data['bTotalMensuelHeuresLibres3'])) {
            $data['bTotalMensuelHeuresLibres3'] = (bool) $data['bTotalMensuelHeuresLibres3'];
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

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('bNomGrilleHoraire') && null !== $data->getBNomGrilleHoraire()) {
            $dataArray['bNomGrilleHoraire'] = $data->getBNomGrilleHoraire();
        }

        if ($data->isInitialized('nomGrilleHoraire') && null !== $data->getNomGrilleHoraire()) {
            $dataArray['nomGrilleHoraire'] = $data->getNomGrilleHoraire();
        }

        if ($data->isInitialized('bHeuresTravaillees') && null !== $data->getBHeuresTravaillees()) {
            $dataArray['bHeuresTravaillees'] = $data->getBHeuresTravaillees();
        }

        if ($data->isInitialized('heuresTravaillees') && null !== $data->getHeuresTravaillees()) {
            $values = [];
            foreach ($data->getHeuresTravaillees() as $value) {
                $values[] = $value;
            }

            $dataArray['heuresTravaillees'] = $values;
        }

        if ($data->isInitialized('heuresDeNuit') && null !== $data->getHeuresDeNuit()) {
            $values_1 = [];
            foreach ($data->getHeuresDeNuit() as $value_1) {
                $values_1[] = $value_1;
            }

            $dataArray['heuresDeNuit'] = $values_1;
        }

        if ($data->isInitialized('bHeuresPayees') && null !== $data->getBHeuresPayees()) {
            $dataArray['bHeuresPayees'] = $data->getBHeuresPayees();
        }

        if ($data->isInitialized('heuresPayeesNormales') && null !== $data->getHeuresPayeesNormales()) {
            $values_2 = [];
            foreach ($data->getHeuresPayeesNormales() as $value_2) {
                $values_2[] = $value_2;
            }

            $dataArray['heuresPayeesNormales'] = $values_2;
        }

        if ($data->isInitialized('heuresPayeesMajorees') && null !== $data->getHeuresPayeesMajorees()) {
            $values_3 = [];
            foreach ($data->getHeuresPayeesMajorees() as $value_3) {
                $values_3[] = $value_3;
            }

            $dataArray['heuresPayeesMajorees'] = $values_3;
        }

        if ($data->isInitialized('bHeuresLibres1') && null !== $data->getBHeuresLibres1()) {
            $dataArray['bHeuresLibres1'] = $data->getBHeuresLibres1();
        }

        if ($data->isInitialized('codeHeuresLibres1') && null !== $data->getCodeHeuresLibres1()) {
            $dataArray['codeHeuresLibres1'] = $data->getCodeHeuresLibres1();
        }

        if ($data->isInitialized('heuresLibres1') && null !== $data->getHeuresLibres1()) {
            $values_4 = [];
            foreach ($data->getHeuresLibres1() as $value_4) {
                $values_4[] = $value_4;
            }

            $dataArray['heuresLibres1'] = $values_4;
        }

        if ($data->isInitialized('bHeuresLibres2') && null !== $data->getBHeuresLibres2()) {
            $dataArray['bHeuresLibres2'] = $data->getBHeuresLibres2();
        }

        if ($data->isInitialized('codeHeuresLibres2') && null !== $data->getCodeHeuresLibres2()) {
            $dataArray['codeHeuresLibres2'] = $data->getCodeHeuresLibres2();
        }

        if ($data->isInitialized('heuresLibres2') && null !== $data->getHeuresLibres2()) {
            $values_5 = [];
            foreach ($data->getHeuresLibres2() as $value_5) {
                $values_5[] = $value_5;
            }

            $dataArray['heuresLibres2'] = $values_5;
        }

        if ($data->isInitialized('bHeuresLibres3') && null !== $data->getBHeuresLibres3()) {
            $dataArray['bHeuresLibres3'] = $data->getBHeuresLibres3();
        }

        if ($data->isInitialized('codeHeuresLibres3') && null !== $data->getCodeHeuresLibres3()) {
            $dataArray['codeHeuresLibres3'] = $data->getCodeHeuresLibres3();
        }

        if ($data->isInitialized('heuresLibres3') && null !== $data->getHeuresLibres3()) {
            $values_6 = [];
            foreach ($data->getHeuresLibres3() as $value_6) {
                $values_6[] = $value_6;
            }

            $dataArray['heuresLibres3'] = $values_6;
        }

        if ($data->isInitialized('bTotalMensuelHeuresNormales') && null !== $data->getBTotalMensuelHeuresNormales()) {
            $dataArray['bTotalMensuelHeuresNormales'] = $data->getBTotalMensuelHeuresNormales();
        }

        if ($data->isInitialized('totalMensuelHeuresNormales') && null !== $data->getTotalMensuelHeuresNormales()) {
            $dataArray['totalMensuelHeuresNormales'] = $data->getTotalMensuelHeuresNormales();
        }

        if ($data->isInitialized('bTotalMensuelHeuresMajorees') && null !== $data->getBTotalMensuelHeuresMajorees()) {
            $dataArray['bTotalMensuelHeuresMajorees'] = $data->getBTotalMensuelHeuresMajorees();
        }

        if ($data->isInitialized('totalMensuelHeuresMajorees') && null !== $data->getTotalMensuelHeuresMajorees()) {
            $dataArray['totalMensuelHeuresMajorees'] = $data->getTotalMensuelHeuresMajorees();
        }

        if ($data->isInitialized('pourcentageHeuresMajorees') && null !== $data->getPourcentageHeuresMajorees()) {
            $dataArray['pourcentageHeuresMajorees'] = $data->getPourcentageHeuresMajorees();
        }

        if ($data->isInitialized('bTotalMensuelHeuresLibres1') && null !== $data->getBTotalMensuelHeuresLibres1()) {
            $dataArray['bTotalMensuelHeuresLibres1'] = $data->getBTotalMensuelHeuresLibres1();
        }

        if ($data->isInitialized('totalMensuelHeuresLibres1') && null !== $data->getTotalMensuelHeuresLibres1()) {
            $dataArray['totalMensuelHeuresLibres1'] = $data->getTotalMensuelHeuresLibres1();
        }

        if ($data->isInitialized('bTotalMensuelHeuresLibres2') && null !== $data->getBTotalMensuelHeuresLibres2()) {
            $dataArray['bTotalMensuelHeuresLibres2'] = $data->getBTotalMensuelHeuresLibres2();
        }

        if ($data->isInitialized('totalMensuelHeuresLibres2') && null !== $data->getTotalMensuelHeuresLibres2()) {
            $dataArray['totalMensuelHeuresLibres2'] = $data->getTotalMensuelHeuresLibres2();
        }

        if ($data->isInitialized('bTotalMensuelHeuresLibres3') && null !== $data->getBTotalMensuelHeuresLibres3()) {
            $dataArray['bTotalMensuelHeuresLibres3'] = $data->getBTotalMensuelHeuresLibres3();
        }

        if ($data->isInitialized('totalMensuelHeuresLibres3') && null !== $data->getTotalMensuelHeuresLibres3()) {
            $dataArray['totalMensuelHeuresLibres3'] = $data->getTotalMensuelHeuresLibres3();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [ModificationHoraireEtablissement::class => false];
    }
}
