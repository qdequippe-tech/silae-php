<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\EmploiClassificationMetier;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EmploiClassificationMetierNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return EmploiClassificationMetier::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && EmploiClassificationMetier::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new EmploiClassificationMetier();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('codeClassificationMetier', $data) && null !== $data['codeClassificationMetier']) {
            $object->setCodeClassificationMetier($data['codeClassificationMetier']);
        } elseif (\array_key_exists('codeClassificationMetier', $data) && null === $data['codeClassificationMetier']) {
            $object->setCodeClassificationMetier(null);
        }

        if (\array_key_exists('clM_Libelle', $data) && null !== $data['clM_Libelle']) {
            $object->setClMLibelle($data['clM_Libelle']);
        } elseif (\array_key_exists('clM_Libelle', $data) && null === $data['clM_Libelle']) {
            $object->setClMLibelle(null);
        }

        if (\array_key_exists('clM_CodeConventionCollective', $data) && null !== $data['clM_CodeConventionCollective']) {
            $object->setClMCodeConventionCollective($data['clM_CodeConventionCollective']);
        } elseif (\array_key_exists('clM_CodeConventionCollective', $data) && null === $data['clM_CodeConventionCollective']) {
            $object->setClMCodeConventionCollective(null);
        }

        if (\array_key_exists('clM_CodesCSP', $data) && null !== $data['clM_CodesCSP']) {
            $values = [];
            foreach ($data['clM_CodesCSP'] as $value) {
                $values[] = $value;
            }

            $object->setClMCodesCSP($values);
        } elseif (\array_key_exists('clM_CodesCSP', $data) && null === $data['clM_CodesCSP']) {
            $object->setClMCodesCSP(null);
        }

        if (\array_key_exists('clM_CodesStatutProfessionnel', $data) && null !== $data['clM_CodesStatutProfessionnel']) {
            $values_1 = [];
            foreach ($data['clM_CodesStatutProfessionnel'] as $value_1) {
                $values_1[] = $value_1;
            }

            $object->setClMCodesStatutProfessionnel($values_1);
        } elseif (\array_key_exists('clM_CodesStatutProfessionnel', $data) && null === $data['clM_CodesStatutProfessionnel']) {
            $object->setClMCodesStatutProfessionnel(null);
        }

        if (\array_key_exists('clM_CodesStatutCategoriel', $data) && null !== $data['clM_CodesStatutCategoriel']) {
            $values_2 = [];
            foreach ($data['clM_CodesStatutCategoriel'] as $value_2) {
                $values_2[] = $value_2;
            }

            $object->setClMCodesStatutCategoriel($values_2);
        } elseif (\array_key_exists('clM_CodesStatutCategoriel', $data) && null === $data['clM_CodesStatutCategoriel']) {
            $object->setClMCodesStatutCategoriel(null);
        }

        if (\array_key_exists('clM_CodesStatutCategorielAgircArrco', $data) && null !== $data['clM_CodesStatutCategorielAgircArrco']) {
            $values_3 = [];
            foreach ($data['clM_CodesStatutCategorielAgircArrco'] as $value_3) {
                $values_3[] = $value_3;
            }

            $object->setClMCodesStatutCategorielAgircArrco($values_3);
        } elseif (\array_key_exists('clM_CodesStatutCategorielAgircArrco', $data) && null === $data['clM_CodesStatutCategorielAgircArrco']) {
            $object->setClMCodesStatutCategorielAgircArrco(null);
        }

        if (\array_key_exists('clM_CodesCPNDUC', $data) && null !== $data['clM_CodesCPNDUC']) {
            $values_4 = [];
            foreach ($data['clM_CodesCPNDUC'] as $value_4) {
                $values_4[] = $value_4;
            }

            $object->setClMCodesCPNDUC($values_4);
        } elseif (\array_key_exists('clM_CodesCPNDUC', $data) && null === $data['clM_CodesCPNDUC']) {
            $object->setClMCodesCPNDUC(null);
        }

        if (\array_key_exists('clM_Coefficients1', $data) && null !== $data['clM_Coefficients1']) {
            $values_5 = [];
            foreach ($data['clM_Coefficients1'] as $value_5) {
                $values_5[] = $value_5;
            }

            $object->setClMCoefficients1($values_5);
        } elseif (\array_key_exists('clM_Coefficients1', $data) && null === $data['clM_Coefficients1']) {
            $object->setClMCoefficients1(null);
        }

        if (\array_key_exists('clM_Coefficients2', $data) && null !== $data['clM_Coefficients2']) {
            $values_6 = [];
            foreach ($data['clM_Coefficients2'] as $value_6) {
                $values_6[] = $value_6;
            }

            $object->setClMCoefficients2($values_6);
        } elseif (\array_key_exists('clM_Coefficients2', $data) && null === $data['clM_Coefficients2']) {
            $object->setClMCoefficients2(null);
        }

        if (\array_key_exists('clM_Coefficients3', $data) && null !== $data['clM_Coefficients3']) {
            $values_7 = [];
            foreach ($data['clM_Coefficients3'] as $value_7) {
                $values_7[] = $value_7;
            }

            $object->setClMCoefficients3($values_7);
        } elseif (\array_key_exists('clM_Coefficients3', $data) && null === $data['clM_Coefficients3']) {
            $object->setClMCoefficients3(null);
        }

        if (\array_key_exists('clM_Coefficients4', $data) && null !== $data['clM_Coefficients4']) {
            $values_8 = [];
            foreach ($data['clM_Coefficients4'] as $value_8) {
                $values_8[] = $value_8;
            }

            $object->setClMCoefficients4($values_8);
        } elseif (\array_key_exists('clM_Coefficients4', $data) && null === $data['clM_Coefficients4']) {
            $object->setClMCoefficients4(null);
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

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('codeClassificationMetier') && null !== $data->getCodeClassificationMetier()) {
            $dataArray['codeClassificationMetier'] = $data->getCodeClassificationMetier();
        }

        if ($data->isInitialized('clMLibelle') && null !== $data->getClMLibelle()) {
            $dataArray['clM_Libelle'] = $data->getClMLibelle();
        }

        if ($data->isInitialized('clMCodeConventionCollective') && null !== $data->getClMCodeConventionCollective()) {
            $dataArray['clM_CodeConventionCollective'] = $data->getClMCodeConventionCollective();
        }

        if ($data->isInitialized('clMCodesCSP') && null !== $data->getClMCodesCSP()) {
            $values = [];
            foreach ($data->getClMCodesCSP() as $value) {
                $values[] = $value;
            }

            $dataArray['clM_CodesCSP'] = $values;
        }

        if ($data->isInitialized('clMCodesStatutProfessionnel') && null !== $data->getClMCodesStatutProfessionnel()) {
            $values_1 = [];
            foreach ($data->getClMCodesStatutProfessionnel() as $value_1) {
                $values_1[] = $value_1;
            }

            $dataArray['clM_CodesStatutProfessionnel'] = $values_1;
        }

        if ($data->isInitialized('clMCodesStatutCategoriel') && null !== $data->getClMCodesStatutCategoriel()) {
            $values_2 = [];
            foreach ($data->getClMCodesStatutCategoriel() as $value_2) {
                $values_2[] = $value_2;
            }

            $dataArray['clM_CodesStatutCategoriel'] = $values_2;
        }

        if ($data->isInitialized('clMCodesStatutCategorielAgircArrco') && null !== $data->getClMCodesStatutCategorielAgircArrco()) {
            $values_3 = [];
            foreach ($data->getClMCodesStatutCategorielAgircArrco() as $value_3) {
                $values_3[] = $value_3;
            }

            $dataArray['clM_CodesStatutCategorielAgircArrco'] = $values_3;
        }

        if ($data->isInitialized('clMCodesCPNDUC') && null !== $data->getClMCodesCPNDUC()) {
            $values_4 = [];
            foreach ($data->getClMCodesCPNDUC() as $value_4) {
                $values_4[] = $value_4;
            }

            $dataArray['clM_CodesCPNDUC'] = $values_4;
        }

        if ($data->isInitialized('clMCoefficients1') && null !== $data->getClMCoefficients1()) {
            $values_5 = [];
            foreach ($data->getClMCoefficients1() as $value_5) {
                $values_5[] = $value_5;
            }

            $dataArray['clM_Coefficients1'] = $values_5;
        }

        if ($data->isInitialized('clMCoefficients2') && null !== $data->getClMCoefficients2()) {
            $values_6 = [];
            foreach ($data->getClMCoefficients2() as $value_6) {
                $values_6[] = $value_6;
            }

            $dataArray['clM_Coefficients2'] = $values_6;
        }

        if ($data->isInitialized('clMCoefficients3') && null !== $data->getClMCoefficients3()) {
            $values_7 = [];
            foreach ($data->getClMCoefficients3() as $value_7) {
                $values_7[] = $value_7;
            }

            $dataArray['clM_Coefficients3'] = $values_7;
        }

        if ($data->isInitialized('clMCoefficients4') && null !== $data->getClMCoefficients4()) {
            $values_8 = [];
            foreach ($data->getClMCoefficients4() as $value_8) {
                $values_8[] = $value_8;
            }

            $dataArray['clM_Coefficients4'] = $values_8;
        }

        if ($data->isInitialized('dateDebut') && null !== $data->getDateDebut()) {
            $dataArray['dateDebut'] = $data->getDateDebut()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('dateFin') && null !== $data->getDateFin()) {
            $dataArray['dateFin'] = $data->getDateFin()->format('Y-m-d\TH:i:s');
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [EmploiClassificationMetier::class => false];
    }
}
