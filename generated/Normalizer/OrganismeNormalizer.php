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

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\Organisme' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof Organisme;
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
        $object = new Organisme();
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

    /**
     * @param mixed|null $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('codeOrganisme') && null !== $object->getCodeOrganisme()) {
            $data['codeOrganisme'] = $object->getCodeOrganisme();
        }
        if ($object->isInitialized('codeInterne') && null !== $object->getCodeInterne()) {
            $data['codeInterne'] = $object->getCodeInterne();
        }
        if ($object->isInitialized('codeNature') && null !== $object->getCodeNature()) {
            $data['codeNature'] = $object->getCodeNature();
        }
        if ($object->isInitialized('nomInterneEtablissement') && null !== $object->getNomInterneEtablissement()) {
            $data['nomInterneEtablissement'] = $object->getNomInterneEtablissement();
        }
        if ($object->isInitialized('numeroAffiliation') && null !== $object->getNumeroAffiliation()) {
            $data['numeroAffiliation'] = $object->getNumeroAffiliation();
        }
        if ($object->isInitialized('periodicite') && null !== $object->getPeriodicite()) {
            $data['periodicite'] = $object->getPeriodicite();
        }
        if ($object->isInitialized('jourPaiement') && null !== $object->getJourPaiement()) {
            $data['jourPaiement'] = $object->getJourPaiement();
        }
        if ($object->isInitialized('filtreSalaries') && null !== $object->getFiltreSalaries()) {
            $data['filtreSalaries'] = $object->getFiltreSalaries();
        }
        if ($object->isInitialized('filtreCodesLibelles') && null !== $object->getFiltreCodesLibelles()) {
            $data['filtreCodesLibelles'] = $object->getFiltreCodesLibelles();
        }
        if ($object->isInitialized('edi') && null !== $object->getEdi()) {
            $data['edi'] = $object->getEdi();
        }
        if ($object->isInitialized('ediModePaiement') && null !== $object->getEdiModePaiement()) {
            $data['ediModePaiement'] = $object->getEdiModePaiement();
        }
        if ($object->isInitialized('numeroRattachement') && null !== $object->getNumeroRattachement()) {
            $data['numeroRattachement'] = $object->getNumeroRattachement();
        }
        if ($object->isInitialized('codePopulation') && null !== $object->getCodePopulation()) {
            $data['codePopulation'] = $object->getCodePopulation();
        }
        if ($object->isInitialized('codeOption') && null !== $object->getCodeOption()) {
            $data['codeOption'] = $object->getCodeOption();
        }
        if ($object->isInitialized('codeDelegataireDeGestion') && null !== $object->getCodeDelegataireDeGestion()) {
            $data['codeDelegataireDeGestion'] = $object->getCodeDelegataireDeGestion();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\Organisme' => false];
    }
}
