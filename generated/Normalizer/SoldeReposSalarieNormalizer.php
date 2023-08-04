<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use QdequippeTech\Silae\Api\Model\SoldeReposSalarie;
use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SoldeReposSalarieNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\SoldeReposSalarie' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'QdequippeTech\\Silae\\Api\\Model\\SoldeReposSalarie' === $data::class;
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
        $object = new SoldeReposSalarie();
        if (\array_key_exists('cpN1Acquis', $data) && \is_int($data['cpN1Acquis'])) {
            $data['cpN1Acquis'] = (float) $data['cpN1Acquis'];
        }
        if (\array_key_exists('cpN1Pris', $data) && \is_int($data['cpN1Pris'])) {
            $data['cpN1Pris'] = (float) $data['cpN1Pris'];
        }
        if (\array_key_exists('cpN1Solde', $data) && \is_int($data['cpN1Solde'])) {
            $data['cpN1Solde'] = (float) $data['cpN1Solde'];
        }
        if (\array_key_exists('cpN1Provision', $data) && \is_int($data['cpN1Provision'])) {
            $data['cpN1Provision'] = (float) $data['cpN1Provision'];
        }
        if (\array_key_exists('cpnAcquis', $data) && \is_int($data['cpnAcquis'])) {
            $data['cpnAcquis'] = (float) $data['cpnAcquis'];
        }
        if (\array_key_exists('cpnPris', $data) && \is_int($data['cpnPris'])) {
            $data['cpnPris'] = (float) $data['cpnPris'];
        }
        if (\array_key_exists('cpnSolde', $data) && \is_int($data['cpnSolde'])) {
            $data['cpnSolde'] = (float) $data['cpnSolde'];
        }
        if (\array_key_exists('cpnProvision', $data) && \is_int($data['cpnProvision'])) {
            $data['cpnProvision'] = (float) $data['cpnProvision'];
        }
        if (\array_key_exists('cpProvision', $data) && \is_int($data['cpProvision'])) {
            $data['cpProvision'] = (float) $data['cpProvision'];
        }
        if (\array_key_exists('cpTauxChargesPatronales', $data) && \is_int($data['cpTauxChargesPatronales'])) {
            $data['cpTauxChargesPatronales'] = (float) $data['cpTauxChargesPatronales'];
        }
        if (\array_key_exists('cpMontantChargesPatronales', $data) && \is_int($data['cpMontantChargesPatronales'])) {
            $data['cpMontantChargesPatronales'] = (float) $data['cpMontantChargesPatronales'];
        }
        if (\array_key_exists('cpTotalProvision', $data) && \is_int($data['cpTotalProvision'])) {
            $data['cpTotalProvision'] = (float) $data['cpTotalProvision'];
        }
        if (\array_key_exists('rttAcquis', $data) && \is_int($data['rttAcquis'])) {
            $data['rttAcquis'] = (float) $data['rttAcquis'];
        }
        if (\array_key_exists('rttPris', $data) && \is_int($data['rttPris'])) {
            $data['rttPris'] = (float) $data['rttPris'];
        }
        if (\array_key_exists('rttSolde', $data) && \is_int($data['rttSolde'])) {
            $data['rttSolde'] = (float) $data['rttSolde'];
        }
        if (\array_key_exists('rttProvision', $data) && \is_int($data['rttProvision'])) {
            $data['rttProvision'] = (float) $data['rttProvision'];
        }
        if (\array_key_exists('rttMontantChargesPatronales', $data) && \is_int($data['rttMontantChargesPatronales'])) {
            $data['rttMontantChargesPatronales'] = (float) $data['rttMontantChargesPatronales'];
        }
        if (\array_key_exists('rttTotalProvision', $data) && \is_int($data['rttTotalProvision'])) {
            $data['rttTotalProvision'] = (float) $data['rttTotalProvision'];
        }
        if (\array_key_exists('cpSupAcquis', $data) && \is_int($data['cpSupAcquis'])) {
            $data['cpSupAcquis'] = (float) $data['cpSupAcquis'];
        }
        if (\array_key_exists('cpSupPris', $data) && \is_int($data['cpSupPris'])) {
            $data['cpSupPris'] = (float) $data['cpSupPris'];
        }
        if (\array_key_exists('cpSupSolde', $data) && \is_int($data['cpSupSolde'])) {
            $data['cpSupSolde'] = (float) $data['cpSupSolde'];
        }
        if (\array_key_exists('cpSupProvision', $data) && \is_int($data['cpSupProvision'])) {
            $data['cpSupProvision'] = (float) $data['cpSupProvision'];
        }
        if (\array_key_exists('cpSupMontantChargesPatronales', $data) && \is_int($data['cpSupMontantChargesPatronales'])) {
            $data['cpSupMontantChargesPatronales'] = (float) $data['cpSupMontantChargesPatronales'];
        }
        if (\array_key_exists('cpSupTotalProvision', $data) && \is_int($data['cpSupTotalProvision'])) {
            $data['cpSupTotalProvision'] = (float) $data['cpSupTotalProvision'];
        }
        if (\array_key_exists('cpSup2Acquis', $data) && \is_int($data['cpSup2Acquis'])) {
            $data['cpSup2Acquis'] = (float) $data['cpSup2Acquis'];
        }
        if (\array_key_exists('cpSup2Pris', $data) && \is_int($data['cpSup2Pris'])) {
            $data['cpSup2Pris'] = (float) $data['cpSup2Pris'];
        }
        if (\array_key_exists('cpSup2Solde', $data) && \is_int($data['cpSup2Solde'])) {
            $data['cpSup2Solde'] = (float) $data['cpSup2Solde'];
        }
        if (\array_key_exists('cpSup2Provision', $data) && \is_int($data['cpSup2Provision'])) {
            $data['cpSup2Provision'] = (float) $data['cpSup2Provision'];
        }
        if (\array_key_exists('cpSup2MontantChargesPatronales', $data) && \is_int($data['cpSup2MontantChargesPatronales'])) {
            $data['cpSup2MontantChargesPatronales'] = (float) $data['cpSup2MontantChargesPatronales'];
        }
        if (\array_key_exists('cpSup2TotalProvision', $data) && \is_int($data['cpSup2TotalProvision'])) {
            $data['cpSup2TotalProvision'] = (float) $data['cpSup2TotalProvision'];
        }
        if (\array_key_exists('rcrAcquis', $data) && \is_int($data['rcrAcquis'])) {
            $data['rcrAcquis'] = (float) $data['rcrAcquis'];
        }
        if (\array_key_exists('rcrPris', $data) && \is_int($data['rcrPris'])) {
            $data['rcrPris'] = (float) $data['rcrPris'];
        }
        if (\array_key_exists('rcrSolde', $data) && \is_int($data['rcrSolde'])) {
            $data['rcrSolde'] = (float) $data['rcrSolde'];
        }
        if (\array_key_exists('rcrProvision', $data) && \is_int($data['rcrProvision'])) {
            $data['rcrProvision'] = (float) $data['rcrProvision'];
        }
        if (\array_key_exists('rccAcquis', $data) && \is_int($data['rccAcquis'])) {
            $data['rccAcquis'] = (float) $data['rccAcquis'];
        }
        if (\array_key_exists('rccPris', $data) && \is_int($data['rccPris'])) {
            $data['rccPris'] = (float) $data['rccPris'];
        }
        if (\array_key_exists('rccSolde', $data) && \is_int($data['rccSolde'])) {
            $data['rccSolde'] = (float) $data['rccSolde'];
        }
        if (\array_key_exists('rccProvision', $data) && \is_int($data['rccProvision'])) {
            $data['rccProvision'] = (float) $data['rccProvision'];
        }
        if (\array_key_exists('rcoAcquis', $data) && \is_int($data['rcoAcquis'])) {
            $data['rcoAcquis'] = (float) $data['rcoAcquis'];
        }
        if (\array_key_exists('rcoPris', $data) && \is_int($data['rcoPris'])) {
            $data['rcoPris'] = (float) $data['rcoPris'];
        }
        if (\array_key_exists('rcoSolde', $data) && \is_int($data['rcoSolde'])) {
            $data['rcoSolde'] = (float) $data['rcoSolde'];
        }
        if (\array_key_exists('rcoProvision', $data) && \is_int($data['rcoProvision'])) {
            $data['rcoProvision'] = (float) $data['rcoProvision'];
        }
        if (\array_key_exists('rcAcquis', $data) && \is_int($data['rcAcquis'])) {
            $data['rcAcquis'] = (float) $data['rcAcquis'];
        }
        if (\array_key_exists('rcPris', $data) && \is_int($data['rcPris'])) {
            $data['rcPris'] = (float) $data['rcPris'];
        }
        if (\array_key_exists('rcSolde', $data) && \is_int($data['rcSolde'])) {
            $data['rcSolde'] = (float) $data['rcSolde'];
        }
        if (\array_key_exists('rcProvision', $data) && \is_int($data['rcProvision'])) {
            $data['rcProvision'] = (float) $data['rcProvision'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('matricule', $data) && null !== $data['matricule']) {
            $object->setMatricule($data['matricule']);
        } elseif (\array_key_exists('matricule', $data) && null === $data['matricule']) {
            $object->setMatricule(null);
        }
        if (\array_key_exists('nomAffiche', $data) && null !== $data['nomAffiche']) {
            $object->setNomAffiche($data['nomAffiche']);
        } elseif (\array_key_exists('nomAffiche', $data) && null === $data['nomAffiche']) {
            $object->setNomAffiche(null);
        }
        if (\array_key_exists('cpN1Acquis', $data) && null !== $data['cpN1Acquis']) {
            $object->setCpN1Acquis($data['cpN1Acquis']);
        } elseif (\array_key_exists('cpN1Acquis', $data) && null === $data['cpN1Acquis']) {
            $object->setCpN1Acquis(null);
        }
        if (\array_key_exists('cpN1Pris', $data) && null !== $data['cpN1Pris']) {
            $object->setCpN1Pris($data['cpN1Pris']);
        } elseif (\array_key_exists('cpN1Pris', $data) && null === $data['cpN1Pris']) {
            $object->setCpN1Pris(null);
        }
        if (\array_key_exists('cpN1Solde', $data) && null !== $data['cpN1Solde']) {
            $object->setCpN1Solde($data['cpN1Solde']);
        } elseif (\array_key_exists('cpN1Solde', $data) && null === $data['cpN1Solde']) {
            $object->setCpN1Solde(null);
        }
        if (\array_key_exists('cpN1Provision', $data) && null !== $data['cpN1Provision']) {
            $object->setCpN1Provision($data['cpN1Provision']);
        } elseif (\array_key_exists('cpN1Provision', $data) && null === $data['cpN1Provision']) {
            $object->setCpN1Provision(null);
        }
        if (\array_key_exists('cpnAcquis', $data) && null !== $data['cpnAcquis']) {
            $object->setCpnAcquis($data['cpnAcquis']);
        } elseif (\array_key_exists('cpnAcquis', $data) && null === $data['cpnAcquis']) {
            $object->setCpnAcquis(null);
        }
        if (\array_key_exists('cpnPris', $data) && null !== $data['cpnPris']) {
            $object->setCpnPris($data['cpnPris']);
        } elseif (\array_key_exists('cpnPris', $data) && null === $data['cpnPris']) {
            $object->setCpnPris(null);
        }
        if (\array_key_exists('cpnSolde', $data) && null !== $data['cpnSolde']) {
            $object->setCpnSolde($data['cpnSolde']);
        } elseif (\array_key_exists('cpnSolde', $data) && null === $data['cpnSolde']) {
            $object->setCpnSolde(null);
        }
        if (\array_key_exists('cpnProvision', $data) && null !== $data['cpnProvision']) {
            $object->setCpnProvision($data['cpnProvision']);
        } elseif (\array_key_exists('cpnProvision', $data) && null === $data['cpnProvision']) {
            $object->setCpnProvision(null);
        }
        if (\array_key_exists('cpProvision', $data) && null !== $data['cpProvision']) {
            $object->setCpProvision($data['cpProvision']);
        } elseif (\array_key_exists('cpProvision', $data) && null === $data['cpProvision']) {
            $object->setCpProvision(null);
        }
        if (\array_key_exists('cpTauxChargesPatronales', $data) && null !== $data['cpTauxChargesPatronales']) {
            $object->setCpTauxChargesPatronales($data['cpTauxChargesPatronales']);
        } elseif (\array_key_exists('cpTauxChargesPatronales', $data) && null === $data['cpTauxChargesPatronales']) {
            $object->setCpTauxChargesPatronales(null);
        }
        if (\array_key_exists('cpMontantChargesPatronales', $data) && null !== $data['cpMontantChargesPatronales']) {
            $object->setCpMontantChargesPatronales($data['cpMontantChargesPatronales']);
        } elseif (\array_key_exists('cpMontantChargesPatronales', $data) && null === $data['cpMontantChargesPatronales']) {
            $object->setCpMontantChargesPatronales(null);
        }
        if (\array_key_exists('cpTotalProvision', $data) && null !== $data['cpTotalProvision']) {
            $object->setCpTotalProvision($data['cpTotalProvision']);
        } elseif (\array_key_exists('cpTotalProvision', $data) && null === $data['cpTotalProvision']) {
            $object->setCpTotalProvision(null);
        }
        if (\array_key_exists('rttAcquis', $data) && null !== $data['rttAcquis']) {
            $object->setRttAcquis($data['rttAcquis']);
        } elseif (\array_key_exists('rttAcquis', $data) && null === $data['rttAcquis']) {
            $object->setRttAcquis(null);
        }
        if (\array_key_exists('rttPris', $data) && null !== $data['rttPris']) {
            $object->setRttPris($data['rttPris']);
        } elseif (\array_key_exists('rttPris', $data) && null === $data['rttPris']) {
            $object->setRttPris(null);
        }
        if (\array_key_exists('rttSolde', $data) && null !== $data['rttSolde']) {
            $object->setRttSolde($data['rttSolde']);
        } elseif (\array_key_exists('rttSolde', $data) && null === $data['rttSolde']) {
            $object->setRttSolde(null);
        }
        if (\array_key_exists('rttProvision', $data) && null !== $data['rttProvision']) {
            $object->setRttProvision($data['rttProvision']);
        } elseif (\array_key_exists('rttProvision', $data) && null === $data['rttProvision']) {
            $object->setRttProvision(null);
        }
        if (\array_key_exists('rttMontantChargesPatronales', $data) && null !== $data['rttMontantChargesPatronales']) {
            $object->setRttMontantChargesPatronales($data['rttMontantChargesPatronales']);
        } elseif (\array_key_exists('rttMontantChargesPatronales', $data) && null === $data['rttMontantChargesPatronales']) {
            $object->setRttMontantChargesPatronales(null);
        }
        if (\array_key_exists('rttTotalProvision', $data) && null !== $data['rttTotalProvision']) {
            $object->setRttTotalProvision($data['rttTotalProvision']);
        } elseif (\array_key_exists('rttTotalProvision', $data) && null === $data['rttTotalProvision']) {
            $object->setRttTotalProvision(null);
        }
        if (\array_key_exists('cpSupAcquis', $data) && null !== $data['cpSupAcquis']) {
            $object->setCpSupAcquis($data['cpSupAcquis']);
        } elseif (\array_key_exists('cpSupAcquis', $data) && null === $data['cpSupAcquis']) {
            $object->setCpSupAcquis(null);
        }
        if (\array_key_exists('cpSupPris', $data) && null !== $data['cpSupPris']) {
            $object->setCpSupPris($data['cpSupPris']);
        } elseif (\array_key_exists('cpSupPris', $data) && null === $data['cpSupPris']) {
            $object->setCpSupPris(null);
        }
        if (\array_key_exists('cpSupSolde', $data) && null !== $data['cpSupSolde']) {
            $object->setCpSupSolde($data['cpSupSolde']);
        } elseif (\array_key_exists('cpSupSolde', $data) && null === $data['cpSupSolde']) {
            $object->setCpSupSolde(null);
        }
        if (\array_key_exists('cpSupProvision', $data) && null !== $data['cpSupProvision']) {
            $object->setCpSupProvision($data['cpSupProvision']);
        } elseif (\array_key_exists('cpSupProvision', $data) && null === $data['cpSupProvision']) {
            $object->setCpSupProvision(null);
        }
        if (\array_key_exists('cpSupMontantChargesPatronales', $data) && null !== $data['cpSupMontantChargesPatronales']) {
            $object->setCpSupMontantChargesPatronales($data['cpSupMontantChargesPatronales']);
        } elseif (\array_key_exists('cpSupMontantChargesPatronales', $data) && null === $data['cpSupMontantChargesPatronales']) {
            $object->setCpSupMontantChargesPatronales(null);
        }
        if (\array_key_exists('cpSupTotalProvision', $data) && null !== $data['cpSupTotalProvision']) {
            $object->setCpSupTotalProvision($data['cpSupTotalProvision']);
        } elseif (\array_key_exists('cpSupTotalProvision', $data) && null === $data['cpSupTotalProvision']) {
            $object->setCpSupTotalProvision(null);
        }
        if (\array_key_exists('cpSup2Acquis', $data) && null !== $data['cpSup2Acquis']) {
            $object->setCpSup2Acquis($data['cpSup2Acquis']);
        } elseif (\array_key_exists('cpSup2Acquis', $data) && null === $data['cpSup2Acquis']) {
            $object->setCpSup2Acquis(null);
        }
        if (\array_key_exists('cpSup2Pris', $data) && null !== $data['cpSup2Pris']) {
            $object->setCpSup2Pris($data['cpSup2Pris']);
        } elseif (\array_key_exists('cpSup2Pris', $data) && null === $data['cpSup2Pris']) {
            $object->setCpSup2Pris(null);
        }
        if (\array_key_exists('cpSup2Solde', $data) && null !== $data['cpSup2Solde']) {
            $object->setCpSup2Solde($data['cpSup2Solde']);
        } elseif (\array_key_exists('cpSup2Solde', $data) && null === $data['cpSup2Solde']) {
            $object->setCpSup2Solde(null);
        }
        if (\array_key_exists('cpSup2Provision', $data) && null !== $data['cpSup2Provision']) {
            $object->setCpSup2Provision($data['cpSup2Provision']);
        } elseif (\array_key_exists('cpSup2Provision', $data) && null === $data['cpSup2Provision']) {
            $object->setCpSup2Provision(null);
        }
        if (\array_key_exists('cpSup2MontantChargesPatronales', $data) && null !== $data['cpSup2MontantChargesPatronales']) {
            $object->setCpSup2MontantChargesPatronales($data['cpSup2MontantChargesPatronales']);
        } elseif (\array_key_exists('cpSup2MontantChargesPatronales', $data) && null === $data['cpSup2MontantChargesPatronales']) {
            $object->setCpSup2MontantChargesPatronales(null);
        }
        if (\array_key_exists('cpSup2TotalProvision', $data) && null !== $data['cpSup2TotalProvision']) {
            $object->setCpSup2TotalProvision($data['cpSup2TotalProvision']);
        } elseif (\array_key_exists('cpSup2TotalProvision', $data) && null === $data['cpSup2TotalProvision']) {
            $object->setCpSup2TotalProvision(null);
        }
        if (\array_key_exists('rcrAcquis', $data) && null !== $data['rcrAcquis']) {
            $object->setRcrAcquis($data['rcrAcquis']);
        } elseif (\array_key_exists('rcrAcquis', $data) && null === $data['rcrAcquis']) {
            $object->setRcrAcquis(null);
        }
        if (\array_key_exists('rcrPris', $data) && null !== $data['rcrPris']) {
            $object->setRcrPris($data['rcrPris']);
        } elseif (\array_key_exists('rcrPris', $data) && null === $data['rcrPris']) {
            $object->setRcrPris(null);
        }
        if (\array_key_exists('rcrSolde', $data) && null !== $data['rcrSolde']) {
            $object->setRcrSolde($data['rcrSolde']);
        } elseif (\array_key_exists('rcrSolde', $data) && null === $data['rcrSolde']) {
            $object->setRcrSolde(null);
        }
        if (\array_key_exists('rcrProvision', $data) && null !== $data['rcrProvision']) {
            $object->setRcrProvision($data['rcrProvision']);
        } elseif (\array_key_exists('rcrProvision', $data) && null === $data['rcrProvision']) {
            $object->setRcrProvision(null);
        }
        if (\array_key_exists('rccAcquis', $data) && null !== $data['rccAcquis']) {
            $object->setRccAcquis($data['rccAcquis']);
        } elseif (\array_key_exists('rccAcquis', $data) && null === $data['rccAcquis']) {
            $object->setRccAcquis(null);
        }
        if (\array_key_exists('rccPris', $data) && null !== $data['rccPris']) {
            $object->setRccPris($data['rccPris']);
        } elseif (\array_key_exists('rccPris', $data) && null === $data['rccPris']) {
            $object->setRccPris(null);
        }
        if (\array_key_exists('rccSolde', $data) && null !== $data['rccSolde']) {
            $object->setRccSolde($data['rccSolde']);
        } elseif (\array_key_exists('rccSolde', $data) && null === $data['rccSolde']) {
            $object->setRccSolde(null);
        }
        if (\array_key_exists('rccProvision', $data) && null !== $data['rccProvision']) {
            $object->setRccProvision($data['rccProvision']);
        } elseif (\array_key_exists('rccProvision', $data) && null === $data['rccProvision']) {
            $object->setRccProvision(null);
        }
        if (\array_key_exists('rcoAcquis', $data) && null !== $data['rcoAcquis']) {
            $object->setRcoAcquis($data['rcoAcquis']);
        } elseif (\array_key_exists('rcoAcquis', $data) && null === $data['rcoAcquis']) {
            $object->setRcoAcquis(null);
        }
        if (\array_key_exists('rcoPris', $data) && null !== $data['rcoPris']) {
            $object->setRcoPris($data['rcoPris']);
        } elseif (\array_key_exists('rcoPris', $data) && null === $data['rcoPris']) {
            $object->setRcoPris(null);
        }
        if (\array_key_exists('rcoSolde', $data) && null !== $data['rcoSolde']) {
            $object->setRcoSolde($data['rcoSolde']);
        } elseif (\array_key_exists('rcoSolde', $data) && null === $data['rcoSolde']) {
            $object->setRcoSolde(null);
        }
        if (\array_key_exists('rcoProvision', $data) && null !== $data['rcoProvision']) {
            $object->setRcoProvision($data['rcoProvision']);
        } elseif (\array_key_exists('rcoProvision', $data) && null === $data['rcoProvision']) {
            $object->setRcoProvision(null);
        }
        if (\array_key_exists('rcAcquis', $data) && null !== $data['rcAcquis']) {
            $object->setRcAcquis($data['rcAcquis']);
        } elseif (\array_key_exists('rcAcquis', $data) && null === $data['rcAcquis']) {
            $object->setRcAcquis(null);
        }
        if (\array_key_exists('rcPris', $data) && null !== $data['rcPris']) {
            $object->setRcPris($data['rcPris']);
        } elseif (\array_key_exists('rcPris', $data) && null === $data['rcPris']) {
            $object->setRcPris(null);
        }
        if (\array_key_exists('rcSolde', $data) && null !== $data['rcSolde']) {
            $object->setRcSolde($data['rcSolde']);
        } elseif (\array_key_exists('rcSolde', $data) && null === $data['rcSolde']) {
            $object->setRcSolde(null);
        }
        if (\array_key_exists('rcProvision', $data) && null !== $data['rcProvision']) {
            $object->setRcProvision($data['rcProvision']);
        } elseif (\array_key_exists('rcProvision', $data) && null === $data['rcProvision']) {
            $object->setRcProvision(null);
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
        if ($object->isInitialized('matricule') && null !== $object->getMatricule()) {
            $data['matricule'] = $object->getMatricule();
        }
        if ($object->isInitialized('nomAffiche') && null !== $object->getNomAffiche()) {
            $data['nomAffiche'] = $object->getNomAffiche();
        }
        if ($object->isInitialized('cpN1Acquis') && null !== $object->getCpN1Acquis()) {
            $data['cpN1Acquis'] = $object->getCpN1Acquis();
        }
        if ($object->isInitialized('cpN1Pris') && null !== $object->getCpN1Pris()) {
            $data['cpN1Pris'] = $object->getCpN1Pris();
        }
        if ($object->isInitialized('cpN1Solde') && null !== $object->getCpN1Solde()) {
            $data['cpN1Solde'] = $object->getCpN1Solde();
        }
        if ($object->isInitialized('cpN1Provision') && null !== $object->getCpN1Provision()) {
            $data['cpN1Provision'] = $object->getCpN1Provision();
        }
        if ($object->isInitialized('cpnAcquis') && null !== $object->getCpnAcquis()) {
            $data['cpnAcquis'] = $object->getCpnAcquis();
        }
        if ($object->isInitialized('cpnPris') && null !== $object->getCpnPris()) {
            $data['cpnPris'] = $object->getCpnPris();
        }
        if ($object->isInitialized('cpnSolde') && null !== $object->getCpnSolde()) {
            $data['cpnSolde'] = $object->getCpnSolde();
        }
        if ($object->isInitialized('cpnProvision') && null !== $object->getCpnProvision()) {
            $data['cpnProvision'] = $object->getCpnProvision();
        }
        if ($object->isInitialized('cpProvision') && null !== $object->getCpProvision()) {
            $data['cpProvision'] = $object->getCpProvision();
        }
        if ($object->isInitialized('cpTauxChargesPatronales') && null !== $object->getCpTauxChargesPatronales()) {
            $data['cpTauxChargesPatronales'] = $object->getCpTauxChargesPatronales();
        }
        if ($object->isInitialized('cpMontantChargesPatronales') && null !== $object->getCpMontantChargesPatronales()) {
            $data['cpMontantChargesPatronales'] = $object->getCpMontantChargesPatronales();
        }
        if ($object->isInitialized('cpTotalProvision') && null !== $object->getCpTotalProvision()) {
            $data['cpTotalProvision'] = $object->getCpTotalProvision();
        }
        if ($object->isInitialized('rttAcquis') && null !== $object->getRttAcquis()) {
            $data['rttAcquis'] = $object->getRttAcquis();
        }
        if ($object->isInitialized('rttPris') && null !== $object->getRttPris()) {
            $data['rttPris'] = $object->getRttPris();
        }
        if ($object->isInitialized('rttSolde') && null !== $object->getRttSolde()) {
            $data['rttSolde'] = $object->getRttSolde();
        }
        if ($object->isInitialized('rttProvision') && null !== $object->getRttProvision()) {
            $data['rttProvision'] = $object->getRttProvision();
        }
        if ($object->isInitialized('rttMontantChargesPatronales') && null !== $object->getRttMontantChargesPatronales()) {
            $data['rttMontantChargesPatronales'] = $object->getRttMontantChargesPatronales();
        }
        if ($object->isInitialized('rttTotalProvision') && null !== $object->getRttTotalProvision()) {
            $data['rttTotalProvision'] = $object->getRttTotalProvision();
        }
        if ($object->isInitialized('cpSupAcquis') && null !== $object->getCpSupAcquis()) {
            $data['cpSupAcquis'] = $object->getCpSupAcquis();
        }
        if ($object->isInitialized('cpSupPris') && null !== $object->getCpSupPris()) {
            $data['cpSupPris'] = $object->getCpSupPris();
        }
        if ($object->isInitialized('cpSupSolde') && null !== $object->getCpSupSolde()) {
            $data['cpSupSolde'] = $object->getCpSupSolde();
        }
        if ($object->isInitialized('cpSupProvision') && null !== $object->getCpSupProvision()) {
            $data['cpSupProvision'] = $object->getCpSupProvision();
        }
        if ($object->isInitialized('cpSupMontantChargesPatronales') && null !== $object->getCpSupMontantChargesPatronales()) {
            $data['cpSupMontantChargesPatronales'] = $object->getCpSupMontantChargesPatronales();
        }
        if ($object->isInitialized('cpSupTotalProvision') && null !== $object->getCpSupTotalProvision()) {
            $data['cpSupTotalProvision'] = $object->getCpSupTotalProvision();
        }
        if ($object->isInitialized('cpSup2Acquis') && null !== $object->getCpSup2Acquis()) {
            $data['cpSup2Acquis'] = $object->getCpSup2Acquis();
        }
        if ($object->isInitialized('cpSup2Pris') && null !== $object->getCpSup2Pris()) {
            $data['cpSup2Pris'] = $object->getCpSup2Pris();
        }
        if ($object->isInitialized('cpSup2Solde') && null !== $object->getCpSup2Solde()) {
            $data['cpSup2Solde'] = $object->getCpSup2Solde();
        }
        if ($object->isInitialized('cpSup2Provision') && null !== $object->getCpSup2Provision()) {
            $data['cpSup2Provision'] = $object->getCpSup2Provision();
        }
        if ($object->isInitialized('cpSup2MontantChargesPatronales') && null !== $object->getCpSup2MontantChargesPatronales()) {
            $data['cpSup2MontantChargesPatronales'] = $object->getCpSup2MontantChargesPatronales();
        }
        if ($object->isInitialized('cpSup2TotalProvision') && null !== $object->getCpSup2TotalProvision()) {
            $data['cpSup2TotalProvision'] = $object->getCpSup2TotalProvision();
        }
        if ($object->isInitialized('rcrAcquis') && null !== $object->getRcrAcquis()) {
            $data['rcrAcquis'] = $object->getRcrAcquis();
        }
        if ($object->isInitialized('rcrPris') && null !== $object->getRcrPris()) {
            $data['rcrPris'] = $object->getRcrPris();
        }
        if ($object->isInitialized('rcrSolde') && null !== $object->getRcrSolde()) {
            $data['rcrSolde'] = $object->getRcrSolde();
        }
        if ($object->isInitialized('rcrProvision') && null !== $object->getRcrProvision()) {
            $data['rcrProvision'] = $object->getRcrProvision();
        }
        if ($object->isInitialized('rccAcquis') && null !== $object->getRccAcquis()) {
            $data['rccAcquis'] = $object->getRccAcquis();
        }
        if ($object->isInitialized('rccPris') && null !== $object->getRccPris()) {
            $data['rccPris'] = $object->getRccPris();
        }
        if ($object->isInitialized('rccSolde') && null !== $object->getRccSolde()) {
            $data['rccSolde'] = $object->getRccSolde();
        }
        if ($object->isInitialized('rccProvision') && null !== $object->getRccProvision()) {
            $data['rccProvision'] = $object->getRccProvision();
        }
        if ($object->isInitialized('rcoAcquis') && null !== $object->getRcoAcquis()) {
            $data['rcoAcquis'] = $object->getRcoAcquis();
        }
        if ($object->isInitialized('rcoPris') && null !== $object->getRcoPris()) {
            $data['rcoPris'] = $object->getRcoPris();
        }
        if ($object->isInitialized('rcoSolde') && null !== $object->getRcoSolde()) {
            $data['rcoSolde'] = $object->getRcoSolde();
        }
        if ($object->isInitialized('rcoProvision') && null !== $object->getRcoProvision()) {
            $data['rcoProvision'] = $object->getRcoProvision();
        }
        if ($object->isInitialized('rcAcquis') && null !== $object->getRcAcquis()) {
            $data['rcAcquis'] = $object->getRcAcquis();
        }
        if ($object->isInitialized('rcPris') && null !== $object->getRcPris()) {
            $data['rcPris'] = $object->getRcPris();
        }
        if ($object->isInitialized('rcSolde') && null !== $object->getRcSolde()) {
            $data['rcSolde'] = $object->getRcSolde();
        }
        if ($object->isInitialized('rcProvision') && null !== $object->getRcProvision()) {
            $data['rcProvision'] = $object->getRcProvision();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\SoldeReposSalarie' => false];
    }
}
