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

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\EmploiClassificationMetier' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof EmploiClassificationMetier;
    }

    /**
     * @param mixed|null $format
     */
    public function denormalize($data, $class, $format = null, array $context = [])
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
            $object->setDateDebut(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['dateDebut']));
        } elseif (\array_key_exists('dateDebut', $data) && null === $data['dateDebut']) {
            $object->setDateDebut(null);
        }
        if (\array_key_exists('dateFin', $data) && null !== $data['dateFin']) {
            $object->setDateFin(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['dateFin']));
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
        if ($object->isInitialized('codeClassificationMetier') && null !== $object->getCodeClassificationMetier()) {
            $data['codeClassificationMetier'] = $object->getCodeClassificationMetier();
        }
        if ($object->isInitialized('clMLibelle') && null !== $object->getClMLibelle()) {
            $data['clM_Libelle'] = $object->getClMLibelle();
        }
        if ($object->isInitialized('clMCodeConventionCollective') && null !== $object->getClMCodeConventionCollective()) {
            $data['clM_CodeConventionCollective'] = $object->getClMCodeConventionCollective();
        }
        if ($object->isInitialized('clMCodesCSP') && null !== $object->getClMCodesCSP()) {
            $values = [];
            foreach ($object->getClMCodesCSP() as $value) {
                $values[] = $value;
            }
            $data['clM_CodesCSP'] = $values;
        }
        if ($object->isInitialized('clMCodesStatutProfessionnel') && null !== $object->getClMCodesStatutProfessionnel()) {
            $values_1 = [];
            foreach ($object->getClMCodesStatutProfessionnel() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['clM_CodesStatutProfessionnel'] = $values_1;
        }
        if ($object->isInitialized('clMCodesStatutCategoriel') && null !== $object->getClMCodesStatutCategoriel()) {
            $values_2 = [];
            foreach ($object->getClMCodesStatutCategoriel() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['clM_CodesStatutCategoriel'] = $values_2;
        }
        if ($object->isInitialized('clMCodesStatutCategorielAgircArrco') && null !== $object->getClMCodesStatutCategorielAgircArrco()) {
            $values_3 = [];
            foreach ($object->getClMCodesStatutCategorielAgircArrco() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['clM_CodesStatutCategorielAgircArrco'] = $values_3;
        }
        if ($object->isInitialized('clMCodesCPNDUC') && null !== $object->getClMCodesCPNDUC()) {
            $values_4 = [];
            foreach ($object->getClMCodesCPNDUC() as $value_4) {
                $values_4[] = $value_4;
            }
            $data['clM_CodesCPNDUC'] = $values_4;
        }
        if ($object->isInitialized('clMCoefficients1') && null !== $object->getClMCoefficients1()) {
            $values_5 = [];
            foreach ($object->getClMCoefficients1() as $value_5) {
                $values_5[] = $value_5;
            }
            $data['clM_Coefficients1'] = $values_5;
        }
        if ($object->isInitialized('clMCoefficients2') && null !== $object->getClMCoefficients2()) {
            $values_6 = [];
            foreach ($object->getClMCoefficients2() as $value_6) {
                $values_6[] = $value_6;
            }
            $data['clM_Coefficients2'] = $values_6;
        }
        if ($object->isInitialized('clMCoefficients3') && null !== $object->getClMCoefficients3()) {
            $values_7 = [];
            foreach ($object->getClMCoefficients3() as $value_7) {
                $values_7[] = $value_7;
            }
            $data['clM_Coefficients3'] = $values_7;
        }
        if ($object->isInitialized('clMCoefficients4') && null !== $object->getClMCoefficients4()) {
            $values_8 = [];
            foreach ($object->getClMCoefficients4() as $value_8) {
                $values_8[] = $value_8;
            }
            $data['clM_Coefficients4'] = $values_8;
        }
        if ($object->isInitialized('dateDebut') && null !== $object->getDateDebut()) {
            $data['dateDebut'] = $object->getDateDebut()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('dateFin') && null !== $object->getDateFin()) {
            $data['dateFin'] = $object->getDateFin()->format('Y-m-d\\TH:i:sP');
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\EmploiClassificationMetier' => false];
    }
}
