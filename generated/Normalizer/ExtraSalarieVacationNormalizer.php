<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\ExtraSalarieVacation;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ExtraSalarieVacationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return ExtraSalarieVacation::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && ExtraSalarieVacation::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new ExtraSalarieVacation();
        if (\array_key_exists('tauxHoraire', $data) && \is_int($data['tauxHoraire'])) {
            $data['tauxHoraire'] = (float) $data['tauxHoraire'];
        }

        if (\array_key_exists('nbH', $data) && \is_int($data['nbH'])) {
            $data['nbH'] = (float) $data['nbH'];
        }

        if (\array_key_exists('nbJours', $data) && \is_int($data['nbJours'])) {
            $data['nbJours'] = (float) $data['nbJours'];
        }

        if (\array_key_exists('docsFinContrat', $data) && \is_int($data['docsFinContrat'])) {
            $data['docsFinContrat'] = (bool) $data['docsFinContrat'];
        }

        if (\array_key_exists('montantNet', $data) && \is_int($data['montantNet'])) {
            $data['montantNet'] = (bool) $data['montantNet'];
        }

        if (\array_key_exists('montantCoutGlobal', $data) && \is_int($data['montantCoutGlobal'])) {
            $data['montantCoutGlobal'] = (bool) $data['montantCoutGlobal'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('dateDebut', $data) && null !== $data['dateDebut']) {
            $object->setDateDebut(\DateTime::createFromFormat('Y-m-d', $data['dateDebut'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('dateDebut', $data) && null === $data['dateDebut']) {
            $object->setDateDebut(null);
        }

        if (\array_key_exists('dateFin', $data) && null !== $data['dateFin']) {
            $object->setDateFin(\DateTime::createFromFormat('Y-m-d', $data['dateFin'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('dateFin', $data) && null === $data['dateFin']) {
            $object->setDateFin(null);
        }

        if (\array_key_exists('referenceExterneManifestation', $data) && null !== $data['referenceExterneManifestation']) {
            $object->setReferenceExterneManifestation($data['referenceExterneManifestation']);
        } elseif (\array_key_exists('referenceExterneManifestation', $data) && null === $data['referenceExterneManifestation']) {
            $object->setReferenceExterneManifestation(null);
        }

        if (\array_key_exists('hEmbauche', $data) && null !== $data['hEmbauche']) {
            $object->setHEmbauche($data['hEmbauche']);
        } elseif (\array_key_exists('hEmbauche', $data) && null === $data['hEmbauche']) {
            $object->setHEmbauche(null);
        }

        if (\array_key_exists('mEmbauche', $data) && null !== $data['mEmbauche']) {
            $object->setMEmbauche($data['mEmbauche']);
        } elseif (\array_key_exists('mEmbauche', $data) && null === $data['mEmbauche']) {
            $object->setMEmbauche(null);
        }

        if (\array_key_exists('docsFinContrat', $data) && null !== $data['docsFinContrat']) {
            $object->setDocsFinContrat($data['docsFinContrat']);
        } elseif (\array_key_exists('docsFinContrat', $data) && null === $data['docsFinContrat']) {
            $object->setDocsFinContrat(null);
        }

        if (\array_key_exists('tauxHoraire', $data) && null !== $data['tauxHoraire']) {
            $object->setTauxHoraire($data['tauxHoraire']);
        } elseif (\array_key_exists('tauxHoraire', $data) && null === $data['tauxHoraire']) {
            $object->setTauxHoraire(null);
        }

        if (\array_key_exists('nbH', $data) && null !== $data['nbH']) {
            $object->setNbH($data['nbH']);
        } elseif (\array_key_exists('nbH', $data) && null === $data['nbH']) {
            $object->setNbH(null);
        }

        if (\array_key_exists('montantNet', $data) && null !== $data['montantNet']) {
            $object->setMontantNet($data['montantNet']);
        } elseif (\array_key_exists('montantNet', $data) && null === $data['montantNet']) {
            $object->setMontantNet(null);
        }

        if (\array_key_exists('montantCoutGlobal', $data) && null !== $data['montantCoutGlobal']) {
            $object->setMontantCoutGlobal($data['montantCoutGlobal']);
        } elseif (\array_key_exists('montantCoutGlobal', $data) && null === $data['montantCoutGlobal']) {
            $object->setMontantCoutGlobal(null);
        }

        if (\array_key_exists('nbJours', $data) && null !== $data['nbJours']) {
            $object->setNbJours($data['nbJours']);
        } elseif (\array_key_exists('nbJours', $data) && null === $data['nbJours']) {
            $object->setNbJours(null);
        }

        if (\array_key_exists('hLibresCodes', $data) && null !== $data['hLibresCodes']) {
            $values = [];
            foreach ($data['hLibresCodes'] as $value) {
                $values[] = $value;
            }

            $object->setHLibresCodes($values);
        } elseif (\array_key_exists('hLibresCodes', $data) && null === $data['hLibresCodes']) {
            $object->setHLibresCodes(null);
        }

        if (\array_key_exists('hLibresValeurs', $data) && null !== $data['hLibresValeurs']) {
            $values_1 = [];
            foreach ($data['hLibresValeurs'] as $value_1) {
                $values_1[] = $value_1;
            }

            $object->setHLibresValeurs($values_1);
        } elseif (\array_key_exists('hLibresValeurs', $data) && null === $data['hLibresValeurs']) {
            $object->setHLibresValeurs(null);
        }

        if (\array_key_exists('variablesCodes', $data) && null !== $data['variablesCodes']) {
            $values_2 = [];
            foreach ($data['variablesCodes'] as $value_2) {
                $values_2[] = $value_2;
            }

            $object->setVariablesCodes($values_2);
        } elseif (\array_key_exists('variablesCodes', $data) && null === $data['variablesCodes']) {
            $object->setVariablesCodes(null);
        }

        if (\array_key_exists('variablesValeurs', $data) && null !== $data['variablesValeurs']) {
            $values_3 = [];
            foreach ($data['variablesValeurs'] as $value_3) {
                $values_3[] = $value_3;
            }

            $object->setVariablesValeurs($values_3);
        } elseif (\array_key_exists('variablesValeurs', $data) && null === $data['variablesValeurs']) {
            $object->setVariablesValeurs(null);
        }

        if (\array_key_exists('valeurAxeAnalytique1', $data) && null !== $data['valeurAxeAnalytique1']) {
            $object->setValeurAxeAnalytique1($data['valeurAxeAnalytique1']);
        } elseif (\array_key_exists('valeurAxeAnalytique1', $data) && null === $data['valeurAxeAnalytique1']) {
            $object->setValeurAxeAnalytique1(null);
        }

        if (\array_key_exists('valeurAxeAnalytique2', $data) && null !== $data['valeurAxeAnalytique2']) {
            $object->setValeurAxeAnalytique2($data['valeurAxeAnalytique2']);
        } elseif (\array_key_exists('valeurAxeAnalytique2', $data) && null === $data['valeurAxeAnalytique2']) {
            $object->setValeurAxeAnalytique2(null);
        }

        if (\array_key_exists('valeurAxeAnalytique3', $data) && null !== $data['valeurAxeAnalytique3']) {
            $object->setValeurAxeAnalytique3($data['valeurAxeAnalytique3']);
        } elseif (\array_key_exists('valeurAxeAnalytique3', $data) && null === $data['valeurAxeAnalytique3']) {
            $object->setValeurAxeAnalytique3(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('dateDebut') && null !== $data->getDateDebut()) {
            $dataArray['dateDebut'] = $data->getDateDebut()->format('Y-m-d');
        }

        if ($data->isInitialized('dateFin') && null !== $data->getDateFin()) {
            $dataArray['dateFin'] = $data->getDateFin()->format('Y-m-d');
        }

        if ($data->isInitialized('referenceExterneManifestation') && null !== $data->getReferenceExterneManifestation()) {
            $dataArray['referenceExterneManifestation'] = $data->getReferenceExterneManifestation();
        }

        if ($data->isInitialized('hEmbauche') && null !== $data->getHEmbauche()) {
            $dataArray['hEmbauche'] = $data->getHEmbauche();
        }

        if ($data->isInitialized('mEmbauche') && null !== $data->getMEmbauche()) {
            $dataArray['mEmbauche'] = $data->getMEmbauche();
        }

        if ($data->isInitialized('docsFinContrat') && null !== $data->getDocsFinContrat()) {
            $dataArray['docsFinContrat'] = $data->getDocsFinContrat();
        }

        if ($data->isInitialized('tauxHoraire') && null !== $data->getTauxHoraire()) {
            $dataArray['tauxHoraire'] = $data->getTauxHoraire();
        }

        if ($data->isInitialized('nbH') && null !== $data->getNbH()) {
            $dataArray['nbH'] = $data->getNbH();
        }

        if ($data->isInitialized('montantNet') && null !== $data->getMontantNet()) {
            $dataArray['montantNet'] = $data->getMontantNet();
        }

        if ($data->isInitialized('montantCoutGlobal') && null !== $data->getMontantCoutGlobal()) {
            $dataArray['montantCoutGlobal'] = $data->getMontantCoutGlobal();
        }

        if ($data->isInitialized('nbJours') && null !== $data->getNbJours()) {
            $dataArray['nbJours'] = $data->getNbJours();
        }

        if ($data->isInitialized('hLibresCodes') && null !== $data->getHLibresCodes()) {
            $values = [];
            foreach ($data->getHLibresCodes() as $value) {
                $values[] = $value;
            }

            $dataArray['hLibresCodes'] = $values;
        }

        if ($data->isInitialized('hLibresValeurs') && null !== $data->getHLibresValeurs()) {
            $values_1 = [];
            foreach ($data->getHLibresValeurs() as $value_1) {
                $values_1[] = $value_1;
            }

            $dataArray['hLibresValeurs'] = $values_1;
        }

        if ($data->isInitialized('variablesCodes') && null !== $data->getVariablesCodes()) {
            $values_2 = [];
            foreach ($data->getVariablesCodes() as $value_2) {
                $values_2[] = $value_2;
            }

            $dataArray['variablesCodes'] = $values_2;
        }

        if ($data->isInitialized('variablesValeurs') && null !== $data->getVariablesValeurs()) {
            $values_3 = [];
            foreach ($data->getVariablesValeurs() as $value_3) {
                $values_3[] = $value_3;
            }

            $dataArray['variablesValeurs'] = $values_3;
        }

        if ($data->isInitialized('valeurAxeAnalytique1') && null !== $data->getValeurAxeAnalytique1()) {
            $dataArray['valeurAxeAnalytique1'] = $data->getValeurAxeAnalytique1();
        }

        if ($data->isInitialized('valeurAxeAnalytique2') && null !== $data->getValeurAxeAnalytique2()) {
            $dataArray['valeurAxeAnalytique2'] = $data->getValeurAxeAnalytique2();
        }

        if ($data->isInitialized('valeurAxeAnalytique3') && null !== $data->getValeurAxeAnalytique3()) {
            $dataArray['valeurAxeAnalytique3'] = $data->getValeurAxeAnalytique3();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [ExtraSalarieVacation::class => false];
    }
}
