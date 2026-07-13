<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\TeletravailFicheSalarie;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TeletravailFicheSalarieNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return TeletravailFicheSalarie::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && TeletravailFicheSalarie::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new TeletravailFicheSalarie();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        if (\array_key_exists('lundi', $data) && \is_int($data['lundi'])) {
            $data['lundi'] = (bool) $data['lundi'];
        }

        if (\array_key_exists('mardi', $data) && \is_int($data['mardi'])) {
            $data['mardi'] = (bool) $data['mardi'];
        }

        if (\array_key_exists('mercredi', $data) && \is_int($data['mercredi'])) {
            $data['mercredi'] = (bool) $data['mercredi'];
        }

        if (\array_key_exists('jeudi', $data) && \is_int($data['jeudi'])) {
            $data['jeudi'] = (bool) $data['jeudi'];
        }

        if (\array_key_exists('vendredi', $data) && \is_int($data['vendredi'])) {
            $data['vendredi'] = (bool) $data['vendredi'];
        }

        if (\array_key_exists('samedi', $data) && \is_int($data['samedi'])) {
            $data['samedi'] = (bool) $data['samedi'];
        }

        if (\array_key_exists('dimanche', $data) && \is_int($data['dimanche'])) {
            $data['dimanche'] = (bool) $data['dimanche'];
        }

        if (\array_key_exists('teletravailChoixParametrage', $data) && null !== $data['teletravailChoixParametrage']) {
            $object->setTeletravailChoixParametrage($data['teletravailChoixParametrage']);
        } elseif (\array_key_exists('teletravailChoixParametrage', $data) && null === $data['teletravailChoixParametrage']) {
            $object->setTeletravailChoixParametrage(null);
        }

        if (\array_key_exists('modeSaisieTeletravail', $data) && null !== $data['modeSaisieTeletravail']) {
            $object->setModeSaisieTeletravail($data['modeSaisieTeletravail']);
        } elseif (\array_key_exists('modeSaisieTeletravail', $data) && null === $data['modeSaisieTeletravail']) {
            $object->setModeSaisieTeletravail(null);
        }

        if (\array_key_exists('limite', $data) && null !== $data['limite']) {
            $object->setLimite($data['limite']);
        } elseif (\array_key_exists('limite', $data) && null === $data['limite']) {
            $object->setLimite(null);
        }

        if (\array_key_exists('periode', $data) && null !== $data['periode']) {
            $object->setPeriode($data['periode']);
        } elseif (\array_key_exists('periode', $data) && null === $data['periode']) {
            $object->setPeriode(null);
        }

        if (\array_key_exists('lundi', $data) && null !== $data['lundi']) {
            $object->setLundi($data['lundi']);
        } elseif (\array_key_exists('lundi', $data) && null === $data['lundi']) {
            $object->setLundi(null);
        }

        if (\array_key_exists('mardi', $data) && null !== $data['mardi']) {
            $object->setMardi($data['mardi']);
        } elseif (\array_key_exists('mardi', $data) && null === $data['mardi']) {
            $object->setMardi(null);
        }

        if (\array_key_exists('mercredi', $data) && null !== $data['mercredi']) {
            $object->setMercredi($data['mercredi']);
        } elseif (\array_key_exists('mercredi', $data) && null === $data['mercredi']) {
            $object->setMercredi(null);
        }

        if (\array_key_exists('jeudi', $data) && null !== $data['jeudi']) {
            $object->setJeudi($data['jeudi']);
        } elseif (\array_key_exists('jeudi', $data) && null === $data['jeudi']) {
            $object->setJeudi(null);
        }

        if (\array_key_exists('vendredi', $data) && null !== $data['vendredi']) {
            $object->setVendredi($data['vendredi']);
        } elseif (\array_key_exists('vendredi', $data) && null === $data['vendredi']) {
            $object->setVendredi(null);
        }

        if (\array_key_exists('samedi', $data) && null !== $data['samedi']) {
            $object->setSamedi($data['samedi']);
        } elseif (\array_key_exists('samedi', $data) && null === $data['samedi']) {
            $object->setSamedi(null);
        }

        if (\array_key_exists('dimanche', $data) && null !== $data['dimanche']) {
            $object->setDimanche($data['dimanche']);
        } elseif (\array_key_exists('dimanche', $data) && null === $data['dimanche']) {
            $object->setDimanche(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('teletravailChoixParametrage') && null !== $data->getTeletravailChoixParametrage()) {
            $dataArray['teletravailChoixParametrage'] = $data->getTeletravailChoixParametrage();
        }

        if ($data->isInitialized('modeSaisieTeletravail') && null !== $data->getModeSaisieTeletravail()) {
            $dataArray['modeSaisieTeletravail'] = $data->getModeSaisieTeletravail();
        }

        if ($data->isInitialized('limite') && null !== $data->getLimite()) {
            $dataArray['limite'] = $data->getLimite();
        }

        if ($data->isInitialized('periode') && null !== $data->getPeriode()) {
            $dataArray['periode'] = $data->getPeriode();
        }

        if ($data->isInitialized('lundi') && null !== $data->getLundi()) {
            $dataArray['lundi'] = $data->getLundi();
        }

        if ($data->isInitialized('mardi') && null !== $data->getMardi()) {
            $dataArray['mardi'] = $data->getMardi();
        }

        if ($data->isInitialized('mercredi') && null !== $data->getMercredi()) {
            $dataArray['mercredi'] = $data->getMercredi();
        }

        if ($data->isInitialized('jeudi') && null !== $data->getJeudi()) {
            $dataArray['jeudi'] = $data->getJeudi();
        }

        if ($data->isInitialized('vendredi') && null !== $data->getVendredi()) {
            $dataArray['vendredi'] = $data->getVendredi();
        }

        if ($data->isInitialized('samedi') && null !== $data->getSamedi()) {
            $dataArray['samedi'] = $data->getSamedi();
        }

        if ($data->isInitialized('dimanche') && null !== $data->getDimanche()) {
            $dataArray['dimanche'] = $data->getDimanche();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [TeletravailFicheSalarie::class => false];
    }
}
