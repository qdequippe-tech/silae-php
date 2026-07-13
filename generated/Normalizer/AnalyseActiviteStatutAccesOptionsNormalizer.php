<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\AnalyseActiviteStatutAccesOptions;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AnalyseActiviteStatutAccesOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return AnalyseActiviteStatutAccesOptions::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && AnalyseActiviteStatutAccesOptions::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new AnalyseActiviteStatutAccesOptions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        if (\array_key_exists('loginsActifs', $data) && \is_int($data['loginsActifs'])) {
            $data['loginsActifs'] = (float) $data['loginsActifs'];
        }

        if (\array_key_exists('mySilaeActif', $data) && \is_int($data['mySilaeActif'])) {
            $data['mySilaeActif'] = (bool) $data['mySilaeActif'];
        }

        if (\array_key_exists('absencesMobiliteActif', $data) && \is_int($data['absencesMobiliteActif'])) {
            $data['absencesMobiliteActif'] = (bool) $data['absencesMobiliteActif'];
        }

        if (\array_key_exists('gestionTempsActif', $data) && \is_int($data['gestionTempsActif'])) {
            $data['gestionTempsActif'] = (bool) $data['gestionTempsActif'];
        }

        if (\array_key_exists('saisieVariableActif', $data) && \is_int($data['saisieVariableActif'])) {
            $data['saisieVariableActif'] = (bool) $data['saisieVariableActif'];
        }

        if (\array_key_exists('accesBulletinActif', $data) && \is_int($data['accesBulletinActif'])) {
            $data['accesBulletinActif'] = (bool) $data['accesBulletinActif'];
        }

        if (\array_key_exists('accesVirementActif', $data) && \is_int($data['accesVirementActif'])) {
            $data['accesVirementActif'] = (bool) $data['accesVirementActif'];
        }

        if (\array_key_exists('signatureElectroniqueActif', $data) && \is_int($data['signatureElectroniqueActif'])) {
            $data['signatureElectroniqueActif'] = (bool) $data['signatureElectroniqueActif'];
        }

        if (\array_key_exists('entretiensActif', $data) && \is_int($data['entretiensActif'])) {
            $data['entretiensActif'] = (bool) $data['entretiensActif'];
        }

        if (\array_key_exists('acomptesActif', $data) && \is_int($data['acomptesActif'])) {
            $data['acomptesActif'] = (bool) $data['acomptesActif'];
        }

        if (\array_key_exists('gestionSalariesActif', $data) && \is_int($data['gestionSalariesActif'])) {
            $data['gestionSalariesActif'] = (bool) $data['gestionSalariesActif'];
        }

        if (\array_key_exists('visitesMedicalesActif', $data) && \is_int($data['visitesMedicalesActif'])) {
            $data['visitesMedicalesActif'] = (bool) $data['visitesMedicalesActif'];
        }

        if (\array_key_exists('mySilaeSanteActif', $data) && \is_int($data['mySilaeSanteActif'])) {
            $data['mySilaeSanteActif'] = (bool) $data['mySilaeSanteActif'];
        }

        if (\array_key_exists('mySilaeExpenseActif', $data) && \is_int($data['mySilaeExpenseActif'])) {
            $data['mySilaeExpenseActif'] = (bool) $data['mySilaeExpenseActif'];
        }

        if (\array_key_exists('numeroDossier', $data) && null !== $data['numeroDossier']) {
            $object->setNumeroDossier($data['numeroDossier']);
        } elseif (\array_key_exists('numeroDossier', $data) && null === $data['numeroDossier']) {
            $object->setNumeroDossier(null);
        }

        if (\array_key_exists('mySilaeActif', $data) && null !== $data['mySilaeActif']) {
            $object->setMySilaeActif($data['mySilaeActif']);
        } elseif (\array_key_exists('mySilaeActif', $data) && null === $data['mySilaeActif']) {
            $object->setMySilaeActif(null);
        }

        if (\array_key_exists('loginsActifs', $data) && null !== $data['loginsActifs']) {
            $object->setLoginsActifs($data['loginsActifs']);
        } elseif (\array_key_exists('loginsActifs', $data) && null === $data['loginsActifs']) {
            $object->setLoginsActifs(null);
        }

        if (\array_key_exists('absencesMobiliteActif', $data) && null !== $data['absencesMobiliteActif']) {
            $object->setAbsencesMobiliteActif($data['absencesMobiliteActif']);
        } elseif (\array_key_exists('absencesMobiliteActif', $data) && null === $data['absencesMobiliteActif']) {
            $object->setAbsencesMobiliteActif(null);
        }

        if (\array_key_exists('gestionTempsActif', $data) && null !== $data['gestionTempsActif']) {
            $object->setGestionTempsActif($data['gestionTempsActif']);
        } elseif (\array_key_exists('gestionTempsActif', $data) && null === $data['gestionTempsActif']) {
            $object->setGestionTempsActif(null);
        }

        if (\array_key_exists('saisieVariableActif', $data) && null !== $data['saisieVariableActif']) {
            $object->setSaisieVariableActif($data['saisieVariableActif']);
        } elseif (\array_key_exists('saisieVariableActif', $data) && null === $data['saisieVariableActif']) {
            $object->setSaisieVariableActif(null);
        }

        if (\array_key_exists('accesBulletinActif', $data) && null !== $data['accesBulletinActif']) {
            $object->setAccesBulletinActif($data['accesBulletinActif']);
        } elseif (\array_key_exists('accesBulletinActif', $data) && null === $data['accesBulletinActif']) {
            $object->setAccesBulletinActif(null);
        }

        if (\array_key_exists('accesVirementActif', $data) && null !== $data['accesVirementActif']) {
            $object->setAccesVirementActif($data['accesVirementActif']);
        } elseif (\array_key_exists('accesVirementActif', $data) && null === $data['accesVirementActif']) {
            $object->setAccesVirementActif(null);
        }

        if (\array_key_exists('signatureElectroniqueActif', $data) && null !== $data['signatureElectroniqueActif']) {
            $object->setSignatureElectroniqueActif($data['signatureElectroniqueActif']);
        } elseif (\array_key_exists('signatureElectroniqueActif', $data) && null === $data['signatureElectroniqueActif']) {
            $object->setSignatureElectroniqueActif(null);
        }

        if (\array_key_exists('entretiensActif', $data) && null !== $data['entretiensActif']) {
            $object->setEntretiensActif($data['entretiensActif']);
        } elseif (\array_key_exists('entretiensActif', $data) && null === $data['entretiensActif']) {
            $object->setEntretiensActif(null);
        }

        if (\array_key_exists('acomptesActif', $data) && null !== $data['acomptesActif']) {
            $object->setAcomptesActif($data['acomptesActif']);
        } elseif (\array_key_exists('acomptesActif', $data) && null === $data['acomptesActif']) {
            $object->setAcomptesActif(null);
        }

        if (\array_key_exists('gestionSalariesActif', $data) && null !== $data['gestionSalariesActif']) {
            $object->setGestionSalariesActif($data['gestionSalariesActif']);
        } elseif (\array_key_exists('gestionSalariesActif', $data) && null === $data['gestionSalariesActif']) {
            $object->setGestionSalariesActif(null);
        }

        if (\array_key_exists('visitesMedicalesActif', $data) && null !== $data['visitesMedicalesActif']) {
            $object->setVisitesMedicalesActif($data['visitesMedicalesActif']);
        } elseif (\array_key_exists('visitesMedicalesActif', $data) && null === $data['visitesMedicalesActif']) {
            $object->setVisitesMedicalesActif(null);
        }

        if (\array_key_exists('mySilaeSanteActif', $data) && null !== $data['mySilaeSanteActif']) {
            $object->setMySilaeSanteActif($data['mySilaeSanteActif']);
        } elseif (\array_key_exists('mySilaeSanteActif', $data) && null === $data['mySilaeSanteActif']) {
            $object->setMySilaeSanteActif(null);
        }

        if (\array_key_exists('mySilaeExpenseActif', $data) && null !== $data['mySilaeExpenseActif']) {
            $object->setMySilaeExpenseActif($data['mySilaeExpenseActif']);
        } elseif (\array_key_exists('mySilaeExpenseActif', $data) && null === $data['mySilaeExpenseActif']) {
            $object->setMySilaeExpenseActif(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('numeroDossier') && null !== $data->getNumeroDossier()) {
            $dataArray['numeroDossier'] = $data->getNumeroDossier();
        }

        if ($data->isInitialized('mySilaeActif') && null !== $data->getMySilaeActif()) {
            $dataArray['mySilaeActif'] = $data->getMySilaeActif();
        }

        if ($data->isInitialized('loginsActifs') && null !== $data->getLoginsActifs()) {
            $dataArray['loginsActifs'] = $data->getLoginsActifs();
        }

        if ($data->isInitialized('absencesMobiliteActif') && null !== $data->getAbsencesMobiliteActif()) {
            $dataArray['absencesMobiliteActif'] = $data->getAbsencesMobiliteActif();
        }

        if ($data->isInitialized('gestionTempsActif') && null !== $data->getGestionTempsActif()) {
            $dataArray['gestionTempsActif'] = $data->getGestionTempsActif();
        }

        if ($data->isInitialized('saisieVariableActif') && null !== $data->getSaisieVariableActif()) {
            $dataArray['saisieVariableActif'] = $data->getSaisieVariableActif();
        }

        if ($data->isInitialized('accesBulletinActif') && null !== $data->getAccesBulletinActif()) {
            $dataArray['accesBulletinActif'] = $data->getAccesBulletinActif();
        }

        if ($data->isInitialized('accesVirementActif') && null !== $data->getAccesVirementActif()) {
            $dataArray['accesVirementActif'] = $data->getAccesVirementActif();
        }

        if ($data->isInitialized('signatureElectroniqueActif') && null !== $data->getSignatureElectroniqueActif()) {
            $dataArray['signatureElectroniqueActif'] = $data->getSignatureElectroniqueActif();
        }

        if ($data->isInitialized('entretiensActif') && null !== $data->getEntretiensActif()) {
            $dataArray['entretiensActif'] = $data->getEntretiensActif();
        }

        if ($data->isInitialized('acomptesActif') && null !== $data->getAcomptesActif()) {
            $dataArray['acomptesActif'] = $data->getAcomptesActif();
        }

        if ($data->isInitialized('gestionSalariesActif') && null !== $data->getGestionSalariesActif()) {
            $dataArray['gestionSalariesActif'] = $data->getGestionSalariesActif();
        }

        if ($data->isInitialized('visitesMedicalesActif') && null !== $data->getVisitesMedicalesActif()) {
            $dataArray['visitesMedicalesActif'] = $data->getVisitesMedicalesActif();
        }

        if ($data->isInitialized('mySilaeSanteActif') && null !== $data->getMySilaeSanteActif()) {
            $dataArray['mySilaeSanteActif'] = $data->getMySilaeSanteActif();
        }

        if ($data->isInitialized('mySilaeExpenseActif') && null !== $data->getMySilaeExpenseActif()) {
            $dataArray['mySilaeExpenseActif'] = $data->getMySilaeExpenseActif();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [AnalyseActiviteStatutAccesOptions::class => false];
    }
}
