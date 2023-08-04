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

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\RetourImportDSN' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'QdequippeTech\\Silae\\Api\\Model\\RetourImportDSN' === $data::class;
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
        $object = new RetourImportDSN();
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

    /**
     * @param mixed|null $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('existenceErreur') && null !== $object->getExistenceErreur()) {
            $data['existenceErreur'] = $object->getExistenceErreur();
        }
        if ($object->isInitialized('importDansDossier') && null !== $object->getImportDansDossier()) {
            $data['importDansDossier'] = $object->getImportDansDossier();
        }
        if ($object->isInitialized('importDansDomaine') && null !== $object->getImportDansDomaine()) {
            $data['importDansDomaine'] = $object->getImportDansDomaine();
        }
        if ($object->isInitialized('importDansEtablissement') && null !== $object->getImportDansEtablissement()) {
            $data['importDansEtablissement'] = $object->getImportDansEtablissement();
        }
        if ($object->isInitialized('dsnMensuelleExistante') && null !== $object->getDsnMensuelleExistante()) {
            $data['dsnMensuelleExistante'] = $object->getDsnMensuelleExistante();
        }
        if ($object->isInitialized('erreurAnalyse') && null !== $object->getErreurAnalyse()) {
            $data['erreurAnalyse'] = $object->getErreurAnalyse();
        }
        if ($object->isInitialized('erreurImport') && null !== $object->getErreurImport()) {
            $data['erreurImport'] = $object->getErreurImport();
        }
        if ($object->isInitialized('erreurBlocanteImport') && null !== $object->getErreurBlocanteImport()) {
            $data['erreurBlocanteImport'] = $object->getErreurBlocanteImport();
        }
        if ($object->isInitialized('compteRendu') && null !== $object->getCompteRendu()) {
            $values = [];
            foreach ($object->getCompteRendu() as $value) {
                $values[] = $value;
            }
            $data['compteRendu'] = $values;
        }
        if ($object->isInitialized('numeroDossier') && null !== $object->getNumeroDossier()) {
            $data['numeroDossier'] = $object->getNumeroDossier();
        }
        if ($object->isInitialized('nomInterneEtablissementPricipal') && null !== $object->getNomInterneEtablissementPricipal()) {
            $data['nomInterneEtablissementPricipal'] = $object->getNomInterneEtablissementPricipal();
        }
        if ($object->isInitialized('nomInterneEtablissementDeclare') && null !== $object->getNomInterneEtablissementDeclare()) {
            $data['nomInterneEtablissementDeclare'] = $object->getNomInterneEtablissementDeclare();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\RetourImportDSN' => false];
    }
}
