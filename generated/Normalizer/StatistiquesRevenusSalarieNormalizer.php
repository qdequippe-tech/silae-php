<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\StatistiquesRevenusSalarie;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class StatistiquesRevenusSalarieNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return StatistiquesRevenusSalarie::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && StatistiquesRevenusSalarie::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new StatistiquesRevenusSalarie();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        if (\array_key_exists('netImposableN', $data) && \is_int($data['netImposableN'])) {
            $data['netImposableN'] = (float) $data['netImposableN'];
        }

        if (\array_key_exists('totalDeclareN', $data) && \is_int($data['totalDeclareN'])) {
            $data['totalDeclareN'] = (float) $data['totalDeclareN'];
        }

        if (\array_key_exists('pasN', $data) && \is_int($data['pasN'])) {
            $data['pasN'] = (float) $data['pasN'];
        }

        if (\array_key_exists('pasDeclareN', $data) && \is_int($data['pasDeclareN'])) {
            $data['pasDeclareN'] = (float) $data['pasDeclareN'];
        }

        if (\array_key_exists('brutALN', $data) && \is_int($data['brutALN'])) {
            $data['brutALN'] = (float) $data['brutALN'];
        }

        if (\array_key_exists('brutALDeclareN', $data) && \is_int($data['brutALDeclareN'])) {
            $data['brutALDeclareN'] = (float) $data['brutALDeclareN'];
        }

        if (\array_key_exists('netImposableN1', $data) && \is_int($data['netImposableN1'])) {
            $data['netImposableN1'] = (float) $data['netImposableN1'];
        }

        if (\array_key_exists('totalDeclareN1', $data) && \is_int($data['totalDeclareN1'])) {
            $data['totalDeclareN1'] = (float) $data['totalDeclareN1'];
        }

        if (\array_key_exists('pasN1', $data) && \is_int($data['pasN1'])) {
            $data['pasN1'] = (float) $data['pasN1'];
        }

        if (\array_key_exists('pasDeclareN1', $data) && \is_int($data['pasDeclareN1'])) {
            $data['pasDeclareN1'] = (float) $data['pasDeclareN1'];
        }

        if (\array_key_exists('brutALN1', $data) && \is_int($data['brutALN1'])) {
            $data['brutALN1'] = (float) $data['brutALN1'];
        }

        if (\array_key_exists('brutALDeclareN1', $data) && \is_int($data['brutALDeclareN1'])) {
            $data['brutALDeclareN1'] = (float) $data['brutALDeclareN1'];
        }

        if (\array_key_exists('matricule', $data) && null !== $data['matricule']) {
            $object->setMatricule($data['matricule']);
        } elseif (\array_key_exists('matricule', $data) && null === $data['matricule']) {
            $object->setMatricule(null);
        }

        if (\array_key_exists('nomUsuel', $data) && null !== $data['nomUsuel']) {
            $object->setNomUsuel($data['nomUsuel']);
        } elseif (\array_key_exists('nomUsuel', $data) && null === $data['nomUsuel']) {
            $object->setNomUsuel(null);
        }

        if (\array_key_exists('prenom', $data) && null !== $data['prenom']) {
            $object->setPrenom($data['prenom']);
        } elseif (\array_key_exists('prenom', $data) && null === $data['prenom']) {
            $object->setPrenom(null);
        }

        if (\array_key_exists('netImposableN', $data) && null !== $data['netImposableN']) {
            $object->setNetImposableN($data['netImposableN']);
        } elseif (\array_key_exists('netImposableN', $data) && null === $data['netImposableN']) {
            $object->setNetImposableN(null);
        }

        if (\array_key_exists('totalDeclareN', $data) && null !== $data['totalDeclareN']) {
            $object->setTotalDeclareN($data['totalDeclareN']);
        } elseif (\array_key_exists('totalDeclareN', $data) && null === $data['totalDeclareN']) {
            $object->setTotalDeclareN(null);
        }

        if (\array_key_exists('pasN', $data) && null !== $data['pasN']) {
            $object->setPasN($data['pasN']);
        } elseif (\array_key_exists('pasN', $data) && null === $data['pasN']) {
            $object->setPasN(null);
        }

        if (\array_key_exists('pasDeclareN', $data) && null !== $data['pasDeclareN']) {
            $object->setPasDeclareN($data['pasDeclareN']);
        } elseif (\array_key_exists('pasDeclareN', $data) && null === $data['pasDeclareN']) {
            $object->setPasDeclareN(null);
        }

        if (\array_key_exists('brutALN', $data) && null !== $data['brutALN']) {
            $object->setBrutALN($data['brutALN']);
        } elseif (\array_key_exists('brutALN', $data) && null === $data['brutALN']) {
            $object->setBrutALN(null);
        }

        if (\array_key_exists('brutALDeclareN', $data) && null !== $data['brutALDeclareN']) {
            $object->setBrutALDeclareN($data['brutALDeclareN']);
        } elseif (\array_key_exists('brutALDeclareN', $data) && null === $data['brutALDeclareN']) {
            $object->setBrutALDeclareN(null);
        }

        if (\array_key_exists('netImposableN1', $data) && null !== $data['netImposableN1']) {
            $object->setNetImposableN1($data['netImposableN1']);
        } elseif (\array_key_exists('netImposableN1', $data) && null === $data['netImposableN1']) {
            $object->setNetImposableN1(null);
        }

        if (\array_key_exists('totalDeclareN1', $data) && null !== $data['totalDeclareN1']) {
            $object->setTotalDeclareN1($data['totalDeclareN1']);
        } elseif (\array_key_exists('totalDeclareN1', $data) && null === $data['totalDeclareN1']) {
            $object->setTotalDeclareN1(null);
        }

        if (\array_key_exists('pasN1', $data) && null !== $data['pasN1']) {
            $object->setPasN1($data['pasN1']);
        } elseif (\array_key_exists('pasN1', $data) && null === $data['pasN1']) {
            $object->setPasN1(null);
        }

        if (\array_key_exists('pasDeclareN1', $data) && null !== $data['pasDeclareN1']) {
            $object->setPasDeclareN1($data['pasDeclareN1']);
        } elseif (\array_key_exists('pasDeclareN1', $data) && null === $data['pasDeclareN1']) {
            $object->setPasDeclareN1(null);
        }

        if (\array_key_exists('brutALN1', $data) && null !== $data['brutALN1']) {
            $object->setBrutALN1($data['brutALN1']);
        } elseif (\array_key_exists('brutALN1', $data) && null === $data['brutALN1']) {
            $object->setBrutALN1(null);
        }

        if (\array_key_exists('brutALDeclareN1', $data) && null !== $data['brutALDeclareN1']) {
            $object->setBrutALDeclareN1($data['brutALDeclareN1']);
        } elseif (\array_key_exists('brutALDeclareN1', $data) && null === $data['brutALDeclareN1']) {
            $object->setBrutALDeclareN1(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('matricule') && null !== $data->getMatricule()) {
            $dataArray['matricule'] = $data->getMatricule();
        }

        if ($data->isInitialized('nomUsuel') && null !== $data->getNomUsuel()) {
            $dataArray['nomUsuel'] = $data->getNomUsuel();
        }

        if ($data->isInitialized('prenom') && null !== $data->getPrenom()) {
            $dataArray['prenom'] = $data->getPrenom();
        }

        if ($data->isInitialized('netImposableN') && null !== $data->getNetImposableN()) {
            $dataArray['netImposableN'] = $data->getNetImposableN();
        }

        if ($data->isInitialized('totalDeclareN') && null !== $data->getTotalDeclareN()) {
            $dataArray['totalDeclareN'] = $data->getTotalDeclareN();
        }

        if ($data->isInitialized('pasN') && null !== $data->getPasN()) {
            $dataArray['pasN'] = $data->getPasN();
        }

        if ($data->isInitialized('pasDeclareN') && null !== $data->getPasDeclareN()) {
            $dataArray['pasDeclareN'] = $data->getPasDeclareN();
        }

        if ($data->isInitialized('brutALN') && null !== $data->getBrutALN()) {
            $dataArray['brutALN'] = $data->getBrutALN();
        }

        if ($data->isInitialized('brutALDeclareN') && null !== $data->getBrutALDeclareN()) {
            $dataArray['brutALDeclareN'] = $data->getBrutALDeclareN();
        }

        if ($data->isInitialized('netImposableN1') && null !== $data->getNetImposableN1()) {
            $dataArray['netImposableN1'] = $data->getNetImposableN1();
        }

        if ($data->isInitialized('totalDeclareN1') && null !== $data->getTotalDeclareN1()) {
            $dataArray['totalDeclareN1'] = $data->getTotalDeclareN1();
        }

        if ($data->isInitialized('pasN1') && null !== $data->getPasN1()) {
            $dataArray['pasN1'] = $data->getPasN1();
        }

        if ($data->isInitialized('pasDeclareN1') && null !== $data->getPasDeclareN1()) {
            $dataArray['pasDeclareN1'] = $data->getPasDeclareN1();
        }

        if ($data->isInitialized('brutALN1') && null !== $data->getBrutALN1()) {
            $dataArray['brutALN1'] = $data->getBrutALN1();
        }

        if ($data->isInitialized('brutALDeclareN1') && null !== $data->getBrutALDeclareN1()) {
            $dataArray['brutALDeclareN1'] = $data->getBrutALDeclareN1();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [StatistiquesRevenusSalarie::class => false];
    }
}
