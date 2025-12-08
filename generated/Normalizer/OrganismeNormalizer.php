<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\Organisme;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class OrganismeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return Organisme::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && Organisme::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new Organisme();
        if (\array_key_exists('edi', $data) && \is_int($data['edi'])) {
            $data['edi'] = (bool) $data['edi'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('codeOrganisme', $data) && null !== $data['codeOrganisme']) {
            $object->setCodeOrganisme($data['codeOrganisme']);
        } elseif (\array_key_exists('codeOrganisme', $data) && null === $data['codeOrganisme']) {
            $object->setCodeOrganisme(null);
        }

        if (\array_key_exists('codeInterne', $data) && null !== $data['codeInterne']) {
            $object->setCodeInterne($data['codeInterne']);
        } elseif (\array_key_exists('codeInterne', $data) && null === $data['codeInterne']) {
            $object->setCodeInterne(null);
        }

        if (\array_key_exists('codeNature', $data) && null !== $data['codeNature']) {
            $object->setCodeNature($data['codeNature']);
        } elseif (\array_key_exists('codeNature', $data) && null === $data['codeNature']) {
            $object->setCodeNature(null);
        }

        if (\array_key_exists('nomInterneEtablissement', $data) && null !== $data['nomInterneEtablissement']) {
            $object->setNomInterneEtablissement($data['nomInterneEtablissement']);
        } elseif (\array_key_exists('nomInterneEtablissement', $data) && null === $data['nomInterneEtablissement']) {
            $object->setNomInterneEtablissement(null);
        }

        if (\array_key_exists('numeroAffiliation', $data) && null !== $data['numeroAffiliation']) {
            $object->setNumeroAffiliation($data['numeroAffiliation']);
        } elseif (\array_key_exists('numeroAffiliation', $data) && null === $data['numeroAffiliation']) {
            $object->setNumeroAffiliation(null);
        }

        if (\array_key_exists('periodicite', $data) && null !== $data['periodicite']) {
            $object->setPeriodicite($data['periodicite']);
        } elseif (\array_key_exists('periodicite', $data) && null === $data['periodicite']) {
            $object->setPeriodicite(null);
        }

        if (\array_key_exists('jourPaiement', $data) && null !== $data['jourPaiement']) {
            $object->setJourPaiement($data['jourPaiement']);
        } elseif (\array_key_exists('jourPaiement', $data) && null === $data['jourPaiement']) {
            $object->setJourPaiement(null);
        }

        if (\array_key_exists('filtreSalaries', $data) && null !== $data['filtreSalaries']) {
            $object->setFiltreSalaries($data['filtreSalaries']);
        } elseif (\array_key_exists('filtreSalaries', $data) && null === $data['filtreSalaries']) {
            $object->setFiltreSalaries(null);
        }

        if (\array_key_exists('filtreCodesLibelles', $data) && null !== $data['filtreCodesLibelles']) {
            $object->setFiltreCodesLibelles($data['filtreCodesLibelles']);
        } elseif (\array_key_exists('filtreCodesLibelles', $data) && null === $data['filtreCodesLibelles']) {
            $object->setFiltreCodesLibelles(null);
        }

        if (\array_key_exists('edi', $data) && null !== $data['edi']) {
            $object->setEdi($data['edi']);
        } elseif (\array_key_exists('edi', $data) && null === $data['edi']) {
            $object->setEdi(null);
        }

        if (\array_key_exists('ediModePaiement', $data) && null !== $data['ediModePaiement']) {
            $object->setEdiModePaiement($data['ediModePaiement']);
        } elseif (\array_key_exists('ediModePaiement', $data) && null === $data['ediModePaiement']) {
            $object->setEdiModePaiement(null);
        }

        if (\array_key_exists('numeroRattachement', $data) && null !== $data['numeroRattachement']) {
            $object->setNumeroRattachement($data['numeroRattachement']);
        } elseif (\array_key_exists('numeroRattachement', $data) && null === $data['numeroRattachement']) {
            $object->setNumeroRattachement(null);
        }

        if (\array_key_exists('codePopulation', $data) && null !== $data['codePopulation']) {
            $object->setCodePopulation($data['codePopulation']);
        } elseif (\array_key_exists('codePopulation', $data) && null === $data['codePopulation']) {
            $object->setCodePopulation(null);
        }

        if (\array_key_exists('codeOption', $data) && null !== $data['codeOption']) {
            $object->setCodeOption($data['codeOption']);
        } elseif (\array_key_exists('codeOption', $data) && null === $data['codeOption']) {
            $object->setCodeOption(null);
        }

        if (\array_key_exists('codeDelegataireDeGestion', $data) && null !== $data['codeDelegataireDeGestion']) {
            $object->setCodeDelegataireDeGestion($data['codeDelegataireDeGestion']);
        } elseif (\array_key_exists('codeDelegataireDeGestion', $data) && null === $data['codeDelegataireDeGestion']) {
            $object->setCodeDelegataireDeGestion(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('codeOrganisme') && null !== $data->getCodeOrganisme()) {
            $dataArray['codeOrganisme'] = $data->getCodeOrganisme();
        }

        if ($data->isInitialized('codeInterne') && null !== $data->getCodeInterne()) {
            $dataArray['codeInterne'] = $data->getCodeInterne();
        }

        if ($data->isInitialized('codeNature') && null !== $data->getCodeNature()) {
            $dataArray['codeNature'] = $data->getCodeNature();
        }

        if ($data->isInitialized('nomInterneEtablissement') && null !== $data->getNomInterneEtablissement()) {
            $dataArray['nomInterneEtablissement'] = $data->getNomInterneEtablissement();
        }

        if ($data->isInitialized('numeroAffiliation') && null !== $data->getNumeroAffiliation()) {
            $dataArray['numeroAffiliation'] = $data->getNumeroAffiliation();
        }

        if ($data->isInitialized('periodicite') && null !== $data->getPeriodicite()) {
            $dataArray['periodicite'] = $data->getPeriodicite();
        }

        if ($data->isInitialized('jourPaiement') && null !== $data->getJourPaiement()) {
            $dataArray['jourPaiement'] = $data->getJourPaiement();
        }

        if ($data->isInitialized('filtreSalaries') && null !== $data->getFiltreSalaries()) {
            $dataArray['filtreSalaries'] = $data->getFiltreSalaries();
        }

        if ($data->isInitialized('filtreCodesLibelles') && null !== $data->getFiltreCodesLibelles()) {
            $dataArray['filtreCodesLibelles'] = $data->getFiltreCodesLibelles();
        }

        if ($data->isInitialized('edi') && null !== $data->getEdi()) {
            $dataArray['edi'] = $data->getEdi();
        }

        if ($data->isInitialized('ediModePaiement') && null !== $data->getEdiModePaiement()) {
            $dataArray['ediModePaiement'] = $data->getEdiModePaiement();
        }

        if ($data->isInitialized('numeroRattachement') && null !== $data->getNumeroRattachement()) {
            $dataArray['numeroRattachement'] = $data->getNumeroRattachement();
        }

        if ($data->isInitialized('codePopulation') && null !== $data->getCodePopulation()) {
            $dataArray['codePopulation'] = $data->getCodePopulation();
        }

        if ($data->isInitialized('codeOption') && null !== $data->getCodeOption()) {
            $dataArray['codeOption'] = $data->getCodeOption();
        }

        if ($data->isInitialized('codeDelegataireDeGestion') && null !== $data->getCodeDelegataireDeGestion()) {
            $dataArray['codeDelegataireDeGestion'] = $data->getCodeDelegataireDeGestion();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [Organisme::class => false];
    }
}
