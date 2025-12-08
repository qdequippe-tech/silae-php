<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\EcrituresComptablesLigneRupture;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EcrituresComptablesLigneRuptureNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return EcrituresComptablesLigneRupture::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && EcrituresComptablesLigneRupture::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new EcrituresComptablesLigneRupture();
        if (\array_key_exists('valeur', $data) && \is_int($data['valeur'])) {
            $data['valeur'] = (float) $data['valeur'];
        }

        if (\array_key_exists('pctRepartition', $data) && \is_int($data['pctRepartition'])) {
            $data['pctRepartition'] = (float) $data['pctRepartition'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('codeJournal', $data) && null !== $data['codeJournal']) {
            $object->setCodeJournal($data['codeJournal']);
        } elseif (\array_key_exists('codeJournal', $data) && null === $data['codeJournal']) {
            $object->setCodeJournal(null);
        }

        if (\array_key_exists('periode', $data) && null !== $data['periode']) {
            $object->setPeriode(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periode']));
        } elseif (\array_key_exists('periode', $data) && null === $data['periode']) {
            $object->setPeriode(null);
        }

        if (\array_key_exists('compte', $data) && null !== $data['compte']) {
            $object->setCompte($data['compte']);
        } elseif (\array_key_exists('compte', $data) && null === $data['compte']) {
            $object->setCompte(null);
        }

        if (\array_key_exists('libelle', $data) && null !== $data['libelle']) {
            $object->setLibelle($data['libelle']);
        } elseif (\array_key_exists('libelle', $data) && null === $data['libelle']) {
            $object->setLibelle(null);
        }

        if (\array_key_exists('sens', $data) && null !== $data['sens']) {
            $object->setSens($data['sens']);
        } elseif (\array_key_exists('sens', $data) && null === $data['sens']) {
            $object->setSens(null);
        }

        if (\array_key_exists('indexRepartition', $data) && null !== $data['indexRepartition']) {
            $object->setIndexRepartition($data['indexRepartition']);
        } elseif (\array_key_exists('indexRepartition', $data) && null === $data['indexRepartition']) {
            $object->setIndexRepartition(null);
        }

        if (\array_key_exists('valeur', $data) && null !== $data['valeur']) {
            $object->setValeur($data['valeur']);
        } elseif (\array_key_exists('valeur', $data) && null === $data['valeur']) {
            $object->setValeur(null);
        }

        if (\array_key_exists('pctRepartition', $data) && null !== $data['pctRepartition']) {
            $object->setPctRepartition($data['pctRepartition']);
        } elseif (\array_key_exists('pctRepartition', $data) && null === $data['pctRepartition']) {
            $object->setPctRepartition(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('codeJournal') && null !== $data->getCodeJournal()) {
            $dataArray['codeJournal'] = $data->getCodeJournal();
        }

        if ($data->isInitialized('periode') && null !== $data->getPeriode()) {
            $dataArray['periode'] = $data->getPeriode()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('compte') && null !== $data->getCompte()) {
            $dataArray['compte'] = $data->getCompte();
        }

        if ($data->isInitialized('libelle') && null !== $data->getLibelle()) {
            $dataArray['libelle'] = $data->getLibelle();
        }

        if ($data->isInitialized('sens') && null !== $data->getSens()) {
            $dataArray['sens'] = $data->getSens();
        }

        if ($data->isInitialized('indexRepartition') && null !== $data->getIndexRepartition()) {
            $dataArray['indexRepartition'] = $data->getIndexRepartition();
        }

        if ($data->isInitialized('valeur') && null !== $data->getValeur()) {
            $dataArray['valeur'] = $data->getValeur();
        }

        if ($data->isInitialized('pctRepartition') && null !== $data->getPctRepartition()) {
            $dataArray['pctRepartition'] = $data->getPctRepartition();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [EcrituresComptablesLigneRupture::class => false];
    }
}
