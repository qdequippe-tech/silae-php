<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\LigneBulletin;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class LigneBulletinNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return LigneBulletin::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && LigneBulletin::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new LigneBulletin();
        if (\array_key_exists('baseSalariale', $data) && \is_int($data['baseSalariale'])) {
            $data['baseSalariale'] = (float) $data['baseSalariale'];
        }

        if (\array_key_exists('tauxOuMontantSalarial', $data) && \is_int($data['tauxOuMontantSalarial'])) {
            $data['tauxOuMontantSalarial'] = (float) $data['tauxOuMontantSalarial'];
        }

        if (\array_key_exists('resultatSalarial', $data) && \is_int($data['resultatSalarial'])) {
            $data['resultatSalarial'] = (float) $data['resultatSalarial'];
        }

        if (\array_key_exists('basePatronale', $data) && \is_int($data['basePatronale'])) {
            $data['basePatronale'] = (float) $data['basePatronale'];
        }

        if (\array_key_exists('tauxOuMontantPatronal', $data) && \is_int($data['tauxOuMontantPatronal'])) {
            $data['tauxOuMontantPatronal'] = (float) $data['tauxOuMontantPatronal'];
        }

        if (\array_key_exists('resultatPatronal', $data) && \is_int($data['resultatPatronal'])) {
            $data['resultatPatronal'] = (float) $data['resultatPatronal'];
        }

        if (\array_key_exists('csg', $data) && \is_int($data['csg'])) {
            $data['csg'] = (float) $data['csg'];
        }

        if (\array_key_exists('taxe8pc', $data) && \is_int($data['taxe8pc'])) {
            $data['taxe8pc'] = (float) $data['taxe8pc'];
        }

        if (\array_key_exists('rs', $data) && \is_int($data['rs'])) {
            $data['rs'] = (float) $data['rs'];
        }

        if (\array_key_exists('rf', $data) && \is_int($data['rf'])) {
            $data['rf'] = (float) $data['rf'];
        }

        if (\array_key_exists('fs', $data) && \is_int($data['fs'])) {
            $data['fs'] = (float) $data['fs'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('codeLibelle', $data) && null !== $data['codeLibelle']) {
            $object->setCodeLibelle($data['codeLibelle']);
        } elseif (\array_key_exists('codeLibelle', $data) && null === $data['codeLibelle']) {
            $object->setCodeLibelle(null);
        }

        if (\array_key_exists('libelle', $data) && null !== $data['libelle']) {
            $object->setLibelle($data['libelle']);
        } elseif (\array_key_exists('libelle', $data) && null === $data['libelle']) {
            $object->setLibelle(null);
        }

        if (\array_key_exists('baseSalariale', $data) && null !== $data['baseSalariale']) {
            $object->setBaseSalariale($data['baseSalariale']);
        } elseif (\array_key_exists('baseSalariale', $data) && null === $data['baseSalariale']) {
            $object->setBaseSalariale(null);
        }

        if (\array_key_exists('tauxOuMontantSalarial', $data) && null !== $data['tauxOuMontantSalarial']) {
            $object->setTauxOuMontantSalarial($data['tauxOuMontantSalarial']);
        } elseif (\array_key_exists('tauxOuMontantSalarial', $data) && null === $data['tauxOuMontantSalarial']) {
            $object->setTauxOuMontantSalarial(null);
        }

        if (\array_key_exists('resultatSalarial', $data) && null !== $data['resultatSalarial']) {
            $object->setResultatSalarial($data['resultatSalarial']);
        } elseif (\array_key_exists('resultatSalarial', $data) && null === $data['resultatSalarial']) {
            $object->setResultatSalarial(null);
        }

        if (\array_key_exists('basePatronale', $data) && null !== $data['basePatronale']) {
            $object->setBasePatronale($data['basePatronale']);
        } elseif (\array_key_exists('basePatronale', $data) && null === $data['basePatronale']) {
            $object->setBasePatronale(null);
        }

        if (\array_key_exists('tauxOuMontantPatronal', $data) && null !== $data['tauxOuMontantPatronal']) {
            $object->setTauxOuMontantPatronal($data['tauxOuMontantPatronal']);
        } elseif (\array_key_exists('tauxOuMontantPatronal', $data) && null === $data['tauxOuMontantPatronal']) {
            $object->setTauxOuMontantPatronal(null);
        }

        if (\array_key_exists('resultatPatronal', $data) && null !== $data['resultatPatronal']) {
            $object->setResultatPatronal($data['resultatPatronal']);
        } elseif (\array_key_exists('resultatPatronal', $data) && null === $data['resultatPatronal']) {
            $object->setResultatPatronal(null);
        }

        if (\array_key_exists('codeDucs', $data) && null !== $data['codeDucs']) {
            $object->setCodeDucs($data['codeDucs']);
        } elseif (\array_key_exists('codeDucs', $data) && null === $data['codeDucs']) {
            $object->setCodeDucs(null);
        }

        if (\array_key_exists('csg', $data) && null !== $data['csg']) {
            $object->setCsg($data['csg']);
        } elseif (\array_key_exists('csg', $data) && null === $data['csg']) {
            $object->setCsg(null);
        }

        if (\array_key_exists('taxe8pc', $data) && null !== $data['taxe8pc']) {
            $object->setTaxe8pc($data['taxe8pc']);
        } elseif (\array_key_exists('taxe8pc', $data) && null === $data['taxe8pc']) {
            $object->setTaxe8pc(null);
        }

        if (\array_key_exists('rs', $data) && null !== $data['rs']) {
            $object->setRs($data['rs']);
        } elseif (\array_key_exists('rs', $data) && null === $data['rs']) {
            $object->setRs(null);
        }

        if (\array_key_exists('rf', $data) && null !== $data['rf']) {
            $object->setRf($data['rf']);
        } elseif (\array_key_exists('rf', $data) && null === $data['rf']) {
            $object->setRf(null);
        }

        if (\array_key_exists('fs', $data) && null !== $data['fs']) {
            $object->setFs($data['fs']);
        } elseif (\array_key_exists('fs', $data) && null === $data['fs']) {
            $object->setFs(null);
        }

        if (\array_key_exists('tauxReference', $data) && null !== $data['tauxReference']) {
            $object->setTauxReference($data['tauxReference']);
        } elseif (\array_key_exists('tauxReference', $data) && null === $data['tauxReference']) {
            $object->setTauxReference(null);
        }

        if (\array_key_exists('marqueCodeCCN', $data) && null !== $data['marqueCodeCCN']) {
            $object->setMarqueCodeCCN($data['marqueCodeCCN']);
        } elseif (\array_key_exists('marqueCodeCCN', $data) && null === $data['marqueCodeCCN']) {
            $object->setMarqueCodeCCN(null);
        }

        if (\array_key_exists('marque1', $data) && null !== $data['marque1']) {
            $object->setMarque1($data['marque1']);
        } elseif (\array_key_exists('marque1', $data) && null === $data['marque1']) {
            $object->setMarque1(null);
        }

        if (\array_key_exists('marque2', $data) && null !== $data['marque2']) {
            $object->setMarque2($data['marque2']);
        } elseif (\array_key_exists('marque2', $data) && null === $data['marque2']) {
            $object->setMarque2(null);
        }

        if (\array_key_exists('periodeDebut', $data) && null !== $data['periodeDebut']) {
            $object->setPeriodeDebut(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periodeDebut']));
        } elseif (\array_key_exists('periodeDebut', $data) && null === $data['periodeDebut']) {
            $object->setPeriodeDebut(null);
        }

        if (\array_key_exists('periodeFin', $data) && null !== $data['periodeFin']) {
            $object->setPeriodeFin(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periodeFin']));
        } elseif (\array_key_exists('periodeFin', $data) && null === $data['periodeFin']) {
            $object->setPeriodeFin(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('codeLibelle') && null !== $data->getCodeLibelle()) {
            $dataArray['codeLibelle'] = $data->getCodeLibelle();
        }

        if ($data->isInitialized('libelle') && null !== $data->getLibelle()) {
            $dataArray['libelle'] = $data->getLibelle();
        }

        if ($data->isInitialized('baseSalariale') && null !== $data->getBaseSalariale()) {
            $dataArray['baseSalariale'] = $data->getBaseSalariale();
        }

        if ($data->isInitialized('tauxOuMontantSalarial') && null !== $data->getTauxOuMontantSalarial()) {
            $dataArray['tauxOuMontantSalarial'] = $data->getTauxOuMontantSalarial();
        }

        if ($data->isInitialized('resultatSalarial') && null !== $data->getResultatSalarial()) {
            $dataArray['resultatSalarial'] = $data->getResultatSalarial();
        }

        if ($data->isInitialized('basePatronale') && null !== $data->getBasePatronale()) {
            $dataArray['basePatronale'] = $data->getBasePatronale();
        }

        if ($data->isInitialized('tauxOuMontantPatronal') && null !== $data->getTauxOuMontantPatronal()) {
            $dataArray['tauxOuMontantPatronal'] = $data->getTauxOuMontantPatronal();
        }

        if ($data->isInitialized('resultatPatronal') && null !== $data->getResultatPatronal()) {
            $dataArray['resultatPatronal'] = $data->getResultatPatronal();
        }

        if ($data->isInitialized('codeDucs') && null !== $data->getCodeDucs()) {
            $dataArray['codeDucs'] = $data->getCodeDucs();
        }

        if ($data->isInitialized('csg') && null !== $data->getCsg()) {
            $dataArray['csg'] = $data->getCsg();
        }

        if ($data->isInitialized('taxe8pc') && null !== $data->getTaxe8pc()) {
            $dataArray['taxe8pc'] = $data->getTaxe8pc();
        }

        if ($data->isInitialized('rs') && null !== $data->getRs()) {
            $dataArray['rs'] = $data->getRs();
        }

        if ($data->isInitialized('rf') && null !== $data->getRf()) {
            $dataArray['rf'] = $data->getRf();
        }

        if ($data->isInitialized('fs') && null !== $data->getFs()) {
            $dataArray['fs'] = $data->getFs();
        }

        if ($data->isInitialized('tauxReference') && null !== $data->getTauxReference()) {
            $dataArray['tauxReference'] = $data->getTauxReference();
        }

        if ($data->isInitialized('marqueCodeCCN') && null !== $data->getMarqueCodeCCN()) {
            $dataArray['marqueCodeCCN'] = $data->getMarqueCodeCCN();
        }

        if ($data->isInitialized('marque1') && null !== $data->getMarque1()) {
            $dataArray['marque1'] = $data->getMarque1();
        }

        if ($data->isInitialized('marque2') && null !== $data->getMarque2()) {
            $dataArray['marque2'] = $data->getMarque2();
        }

        if ($data->isInitialized('periodeDebut') && null !== $data->getPeriodeDebut()) {
            $dataArray['periodeDebut'] = $data->getPeriodeDebut()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('periodeFin') && null !== $data->getPeriodeFin()) {
            $dataArray['periodeFin'] = $data->getPeriodeFin()->format('Y-m-d\TH:i:s');
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [LigneBulletin::class => false];
    }
}
