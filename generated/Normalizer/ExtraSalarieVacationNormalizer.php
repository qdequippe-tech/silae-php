<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
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

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\ExtraSalarieVacation' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'QdequippeTech\\Silae\\Api\\Model\\ExtraSalarieVacation' === $data::class;
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
        $object = new \QdequippeTech\Silae\Api\Model\ExtraSalarieVacation();
        if (\array_key_exists('tauxHoraire', $data) && \is_int($data['tauxHoraire'])) {
            $data['tauxHoraire'] = (float) $data['tauxHoraire'];
        }
        if (\array_key_exists('nbH', $data) && \is_int($data['nbH'])) {
            $data['nbH'] = (float) $data['nbH'];
        }
        if (\array_key_exists('nbJours', $data) && \is_int($data['nbJours'])) {
            $data['nbJours'] = (float) $data['nbJours'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        if ($object->isInitialized('dateDebut') && null !== $object->getDateDebut()) {
            $data['dateDebut'] = $object->getDateDebut()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('dateFin') && null !== $object->getDateFin()) {
            $data['dateFin'] = $object->getDateFin()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('referenceExterneManifestation') && null !== $object->getReferenceExterneManifestation()) {
            $data['referenceExterneManifestation'] = $object->getReferenceExterneManifestation();
        }
        if ($object->isInitialized('hEmbauche') && null !== $object->getHEmbauche()) {
            $data['hEmbauche'] = $object->getHEmbauche();
        }
        if ($object->isInitialized('mEmbauche') && null !== $object->getMEmbauche()) {
            $data['mEmbauche'] = $object->getMEmbauche();
        }
        if ($object->isInitialized('docsFinContrat') && null !== $object->getDocsFinContrat()) {
            $data['docsFinContrat'] = $object->getDocsFinContrat();
        }
        if ($object->isInitialized('tauxHoraire') && null !== $object->getTauxHoraire()) {
            $data['tauxHoraire'] = $object->getTauxHoraire();
        }
        if ($object->isInitialized('nbH') && null !== $object->getNbH()) {
            $data['nbH'] = $object->getNbH();
        }
        if ($object->isInitialized('montantNet') && null !== $object->getMontantNet()) {
            $data['montantNet'] = $object->getMontantNet();
        }
        if ($object->isInitialized('montantCoutGlobal') && null !== $object->getMontantCoutGlobal()) {
            $data['montantCoutGlobal'] = $object->getMontantCoutGlobal();
        }
        if ($object->isInitialized('nbJours') && null !== $object->getNbJours()) {
            $data['nbJours'] = $object->getNbJours();
        }
        if ($object->isInitialized('hLibresCodes') && null !== $object->getHLibresCodes()) {
            $values = [];
            foreach ($object->getHLibresCodes() as $value) {
                $values[] = $value;
            }
            $data['hLibresCodes'] = $values;
        }
        if ($object->isInitialized('hLibresValeurs') && null !== $object->getHLibresValeurs()) {
            $values_1 = [];
            foreach ($object->getHLibresValeurs() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['hLibresValeurs'] = $values_1;
        }
        if ($object->isInitialized('variablesCodes') && null !== $object->getVariablesCodes()) {
            $values_2 = [];
            foreach ($object->getVariablesCodes() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['variablesCodes'] = $values_2;
        }
        if ($object->isInitialized('variablesValeurs') && null !== $object->getVariablesValeurs()) {
            $values_3 = [];
            foreach ($object->getVariablesValeurs() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['variablesValeurs'] = $values_3;
        }

        return $data;
    }
}
