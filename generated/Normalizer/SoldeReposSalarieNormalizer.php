<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SoldeReposSalarie;
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

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return SoldeReposSalarie::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && SoldeReposSalarie::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('matricule') && null !== $data->getMatricule()) {
            $dataArray['matricule'] = $data->getMatricule();
        }

        if ($data->isInitialized('nomAffiche') && null !== $data->getNomAffiche()) {
            $dataArray['nomAffiche'] = $data->getNomAffiche();
        }

        if ($data->isInitialized('cpN1Acquis') && null !== $data->getCpN1Acquis()) {
            $dataArray['cpN1Acquis'] = $data->getCpN1Acquis();
        }

        if ($data->isInitialized('cpN1Pris') && null !== $data->getCpN1Pris()) {
            $dataArray['cpN1Pris'] = $data->getCpN1Pris();
        }

        if ($data->isInitialized('cpN1Solde') && null !== $data->getCpN1Solde()) {
            $dataArray['cpN1Solde'] = $data->getCpN1Solde();
        }

        if ($data->isInitialized('cpN1Provision') && null !== $data->getCpN1Provision()) {
            $dataArray['cpN1Provision'] = $data->getCpN1Provision();
        }

        if ($data->isInitialized('cpnAcquis') && null !== $data->getCpnAcquis()) {
            $dataArray['cpnAcquis'] = $data->getCpnAcquis();
        }

        if ($data->isInitialized('cpnPris') && null !== $data->getCpnPris()) {
            $dataArray['cpnPris'] = $data->getCpnPris();
        }

        if ($data->isInitialized('cpnSolde') && null !== $data->getCpnSolde()) {
            $dataArray['cpnSolde'] = $data->getCpnSolde();
        }

        if ($data->isInitialized('cpnProvision') && null !== $data->getCpnProvision()) {
            $dataArray['cpnProvision'] = $data->getCpnProvision();
        }

        if ($data->isInitialized('cpProvision') && null !== $data->getCpProvision()) {
            $dataArray['cpProvision'] = $data->getCpProvision();
        }

        if ($data->isInitialized('cpTauxChargesPatronales') && null !== $data->getCpTauxChargesPatronales()) {
            $dataArray['cpTauxChargesPatronales'] = $data->getCpTauxChargesPatronales();
        }

        if ($data->isInitialized('cpMontantChargesPatronales') && null !== $data->getCpMontantChargesPatronales()) {
            $dataArray['cpMontantChargesPatronales'] = $data->getCpMontantChargesPatronales();
        }

        if ($data->isInitialized('cpTotalProvision') && null !== $data->getCpTotalProvision()) {
            $dataArray['cpTotalProvision'] = $data->getCpTotalProvision();
        }

        if ($data->isInitialized('rttAcquis') && null !== $data->getRttAcquis()) {
            $dataArray['rttAcquis'] = $data->getRttAcquis();
        }

        if ($data->isInitialized('rttPris') && null !== $data->getRttPris()) {
            $dataArray['rttPris'] = $data->getRttPris();
        }

        if ($data->isInitialized('rttSolde') && null !== $data->getRttSolde()) {
            $dataArray['rttSolde'] = $data->getRttSolde();
        }

        if ($data->isInitialized('rttProvision') && null !== $data->getRttProvision()) {
            $dataArray['rttProvision'] = $data->getRttProvision();
        }

        if ($data->isInitialized('rttMontantChargesPatronales') && null !== $data->getRttMontantChargesPatronales()) {
            $dataArray['rttMontantChargesPatronales'] = $data->getRttMontantChargesPatronales();
        }

        if ($data->isInitialized('rttTotalProvision') && null !== $data->getRttTotalProvision()) {
            $dataArray['rttTotalProvision'] = $data->getRttTotalProvision();
        }

        if ($data->isInitialized('cpSupAcquis') && null !== $data->getCpSupAcquis()) {
            $dataArray['cpSupAcquis'] = $data->getCpSupAcquis();
        }

        if ($data->isInitialized('cpSupPris') && null !== $data->getCpSupPris()) {
            $dataArray['cpSupPris'] = $data->getCpSupPris();
        }

        if ($data->isInitialized('cpSupSolde') && null !== $data->getCpSupSolde()) {
            $dataArray['cpSupSolde'] = $data->getCpSupSolde();
        }

        if ($data->isInitialized('cpSupProvision') && null !== $data->getCpSupProvision()) {
            $dataArray['cpSupProvision'] = $data->getCpSupProvision();
        }

        if ($data->isInitialized('cpSupMontantChargesPatronales') && null !== $data->getCpSupMontantChargesPatronales()) {
            $dataArray['cpSupMontantChargesPatronales'] = $data->getCpSupMontantChargesPatronales();
        }

        if ($data->isInitialized('cpSupTotalProvision') && null !== $data->getCpSupTotalProvision()) {
            $dataArray['cpSupTotalProvision'] = $data->getCpSupTotalProvision();
        }

        if ($data->isInitialized('cpSup2Acquis') && null !== $data->getCpSup2Acquis()) {
            $dataArray['cpSup2Acquis'] = $data->getCpSup2Acquis();
        }

        if ($data->isInitialized('cpSup2Pris') && null !== $data->getCpSup2Pris()) {
            $dataArray['cpSup2Pris'] = $data->getCpSup2Pris();
        }

        if ($data->isInitialized('cpSup2Solde') && null !== $data->getCpSup2Solde()) {
            $dataArray['cpSup2Solde'] = $data->getCpSup2Solde();
        }

        if ($data->isInitialized('cpSup2Provision') && null !== $data->getCpSup2Provision()) {
            $dataArray['cpSup2Provision'] = $data->getCpSup2Provision();
        }

        if ($data->isInitialized('cpSup2MontantChargesPatronales') && null !== $data->getCpSup2MontantChargesPatronales()) {
            $dataArray['cpSup2MontantChargesPatronales'] = $data->getCpSup2MontantChargesPatronales();
        }

        if ($data->isInitialized('cpSup2TotalProvision') && null !== $data->getCpSup2TotalProvision()) {
            $dataArray['cpSup2TotalProvision'] = $data->getCpSup2TotalProvision();
        }

        if ($data->isInitialized('rcrAcquis') && null !== $data->getRcrAcquis()) {
            $dataArray['rcrAcquis'] = $data->getRcrAcquis();
        }

        if ($data->isInitialized('rcrPris') && null !== $data->getRcrPris()) {
            $dataArray['rcrPris'] = $data->getRcrPris();
        }

        if ($data->isInitialized('rcrSolde') && null !== $data->getRcrSolde()) {
            $dataArray['rcrSolde'] = $data->getRcrSolde();
        }

        if ($data->isInitialized('rcrProvision') && null !== $data->getRcrProvision()) {
            $dataArray['rcrProvision'] = $data->getRcrProvision();
        }

        if ($data->isInitialized('rccAcquis') && null !== $data->getRccAcquis()) {
            $dataArray['rccAcquis'] = $data->getRccAcquis();
        }

        if ($data->isInitialized('rccPris') && null !== $data->getRccPris()) {
            $dataArray['rccPris'] = $data->getRccPris();
        }

        if ($data->isInitialized('rccSolde') && null !== $data->getRccSolde()) {
            $dataArray['rccSolde'] = $data->getRccSolde();
        }

        if ($data->isInitialized('rccProvision') && null !== $data->getRccProvision()) {
            $dataArray['rccProvision'] = $data->getRccProvision();
        }

        if ($data->isInitialized('rcoAcquis') && null !== $data->getRcoAcquis()) {
            $dataArray['rcoAcquis'] = $data->getRcoAcquis();
        }

        if ($data->isInitialized('rcoPris') && null !== $data->getRcoPris()) {
            $dataArray['rcoPris'] = $data->getRcoPris();
        }

        if ($data->isInitialized('rcoSolde') && null !== $data->getRcoSolde()) {
            $dataArray['rcoSolde'] = $data->getRcoSolde();
        }

        if ($data->isInitialized('rcoProvision') && null !== $data->getRcoProvision()) {
            $dataArray['rcoProvision'] = $data->getRcoProvision();
        }

        if ($data->isInitialized('rcAcquis') && null !== $data->getRcAcquis()) {
            $dataArray['rcAcquis'] = $data->getRcAcquis();
        }

        if ($data->isInitialized('rcPris') && null !== $data->getRcPris()) {
            $dataArray['rcPris'] = $data->getRcPris();
        }

        if ($data->isInitialized('rcSolde') && null !== $data->getRcSolde()) {
            $dataArray['rcSolde'] = $data->getRcSolde();
        }

        if ($data->isInitialized('rcProvision') && null !== $data->getRcProvision()) {
            $dataArray['rcProvision'] = $data->getRcProvision();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [SoldeReposSalarie::class => false];
    }
}
