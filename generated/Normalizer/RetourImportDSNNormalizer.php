<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\RetourImportDSN;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class RetourImportDSNNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return RetourImportDSN::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && RetourImportDSN::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new RetourImportDSN();
        if (\array_key_exists('existenceErreur', $data) && \is_int($data['existenceErreur'])) {
            $data['existenceErreur'] = (bool) $data['existenceErreur'];
        }

        if (\array_key_exists('importDansDossier', $data) && \is_int($data['importDansDossier'])) {
            $data['importDansDossier'] = (bool) $data['importDansDossier'];
        }

        if (\array_key_exists('importDansDomaine', $data) && \is_int($data['importDansDomaine'])) {
            $data['importDansDomaine'] = (bool) $data['importDansDomaine'];
        }

        if (\array_key_exists('importDansEtablissement', $data) && \is_int($data['importDansEtablissement'])) {
            $data['importDansEtablissement'] = (bool) $data['importDansEtablissement'];
        }

        if (\array_key_exists('dsnMensuelleExistante', $data) && \is_int($data['dsnMensuelleExistante'])) {
            $data['dsnMensuelleExistante'] = (bool) $data['dsnMensuelleExistante'];
        }

        if (\array_key_exists('erreurImport', $data) && \is_int($data['erreurImport'])) {
            $data['erreurImport'] = (bool) $data['erreurImport'];
        }

        if (\array_key_exists('erreurBlocanteImport', $data) && \is_int($data['erreurBlocanteImport'])) {
            $data['erreurBlocanteImport'] = (bool) $data['erreurBlocanteImport'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('existenceErreur', $data) && null !== $data['existenceErreur']) {
            $object->setExistenceErreur($data['existenceErreur']);
        } elseif (\array_key_exists('existenceErreur', $data) && null === $data['existenceErreur']) {
            $object->setExistenceErreur(null);
        }

        if (\array_key_exists('importDansDossier', $data) && null !== $data['importDansDossier']) {
            $object->setImportDansDossier($data['importDansDossier']);
        } elseif (\array_key_exists('importDansDossier', $data) && null === $data['importDansDossier']) {
            $object->setImportDansDossier(null);
        }

        if (\array_key_exists('importDansDomaine', $data) && null !== $data['importDansDomaine']) {
            $object->setImportDansDomaine($data['importDansDomaine']);
        } elseif (\array_key_exists('importDansDomaine', $data) && null === $data['importDansDomaine']) {
            $object->setImportDansDomaine(null);
        }

        if (\array_key_exists('importDansEtablissement', $data) && null !== $data['importDansEtablissement']) {
            $object->setImportDansEtablissement($data['importDansEtablissement']);
        } elseif (\array_key_exists('importDansEtablissement', $data) && null === $data['importDansEtablissement']) {
            $object->setImportDansEtablissement(null);
        }

        if (\array_key_exists('dsnMensuelleExistante', $data) && null !== $data['dsnMensuelleExistante']) {
            $object->setDsnMensuelleExistante($data['dsnMensuelleExistante']);
        } elseif (\array_key_exists('dsnMensuelleExistante', $data) && null === $data['dsnMensuelleExistante']) {
            $object->setDsnMensuelleExistante(null);
        }

        if (\array_key_exists('erreurAnalyse', $data) && null !== $data['erreurAnalyse']) {
            $object->setErreurAnalyse($data['erreurAnalyse']);
        } elseif (\array_key_exists('erreurAnalyse', $data) && null === $data['erreurAnalyse']) {
            $object->setErreurAnalyse(null);
        }

        if (\array_key_exists('erreurImport', $data) && null !== $data['erreurImport']) {
            $object->setErreurImport($data['erreurImport']);
        } elseif (\array_key_exists('erreurImport', $data) && null === $data['erreurImport']) {
            $object->setErreurImport(null);
        }

        if (\array_key_exists('erreurBlocanteImport', $data) && null !== $data['erreurBlocanteImport']) {
            $object->setErreurBlocanteImport($data['erreurBlocanteImport']);
        } elseif (\array_key_exists('erreurBlocanteImport', $data) && null === $data['erreurBlocanteImport']) {
            $object->setErreurBlocanteImport(null);
        }

        if (\array_key_exists('compteRendu', $data) && null !== $data['compteRendu']) {
            $values = [];
            foreach ($data['compteRendu'] as $value) {
                $values[] = $value;
            }

            $object->setCompteRendu($values);
        } elseif (\array_key_exists('compteRendu', $data) && null === $data['compteRendu']) {
            $object->setCompteRendu(null);
        }

        if (\array_key_exists('numeroDossier', $data) && null !== $data['numeroDossier']) {
            $object->setNumeroDossier($data['numeroDossier']);
        } elseif (\array_key_exists('numeroDossier', $data) && null === $data['numeroDossier']) {
            $object->setNumeroDossier(null);
        }

        if (\array_key_exists('nomInterneEtablissementPricipal', $data) && null !== $data['nomInterneEtablissementPricipal']) {
            $object->setNomInterneEtablissementPricipal($data['nomInterneEtablissementPricipal']);
        } elseif (\array_key_exists('nomInterneEtablissementPricipal', $data) && null === $data['nomInterneEtablissementPricipal']) {
            $object->setNomInterneEtablissementPricipal(null);
        }

        if (\array_key_exists('nomInterneEtablissementDeclare', $data) && null !== $data['nomInterneEtablissementDeclare']) {
            $object->setNomInterneEtablissementDeclare($data['nomInterneEtablissementDeclare']);
        } elseif (\array_key_exists('nomInterneEtablissementDeclare', $data) && null === $data['nomInterneEtablissementDeclare']) {
            $object->setNomInterneEtablissementDeclare(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('existenceErreur') && null !== $data->getExistenceErreur()) {
            $dataArray['existenceErreur'] = $data->getExistenceErreur();
        }

        if ($data->isInitialized('importDansDossier') && null !== $data->getImportDansDossier()) {
            $dataArray['importDansDossier'] = $data->getImportDansDossier();
        }

        if ($data->isInitialized('importDansDomaine') && null !== $data->getImportDansDomaine()) {
            $dataArray['importDansDomaine'] = $data->getImportDansDomaine();
        }

        if ($data->isInitialized('importDansEtablissement') && null !== $data->getImportDansEtablissement()) {
            $dataArray['importDansEtablissement'] = $data->getImportDansEtablissement();
        }

        if ($data->isInitialized('dsnMensuelleExistante') && null !== $data->getDsnMensuelleExistante()) {
            $dataArray['dsnMensuelleExistante'] = $data->getDsnMensuelleExistante();
        }

        if ($data->isInitialized('erreurAnalyse') && null !== $data->getErreurAnalyse()) {
            $dataArray['erreurAnalyse'] = $data->getErreurAnalyse();
        }

        if ($data->isInitialized('erreurImport') && null !== $data->getErreurImport()) {
            $dataArray['erreurImport'] = $data->getErreurImport();
        }

        if ($data->isInitialized('erreurBlocanteImport') && null !== $data->getErreurBlocanteImport()) {
            $dataArray['erreurBlocanteImport'] = $data->getErreurBlocanteImport();
        }

        if ($data->isInitialized('compteRendu') && null !== $data->getCompteRendu()) {
            $values = [];
            foreach ($data->getCompteRendu() as $value) {
                $values[] = $value;
            }

            $dataArray['compteRendu'] = $values;
        }

        if ($data->isInitialized('numeroDossier') && null !== $data->getNumeroDossier()) {
            $dataArray['numeroDossier'] = $data->getNumeroDossier();
        }

        if ($data->isInitialized('nomInterneEtablissementPricipal') && null !== $data->getNomInterneEtablissementPricipal()) {
            $dataArray['nomInterneEtablissementPricipal'] = $data->getNomInterneEtablissementPricipal();
        }

        if ($data->isInitialized('nomInterneEtablissementDeclare') && null !== $data->getNomInterneEtablissementDeclare()) {
            $dataArray['nomInterneEtablissementDeclare'] = $data->getNomInterneEtablissementDeclare();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [RetourImportDSN::class => false];
    }
}
