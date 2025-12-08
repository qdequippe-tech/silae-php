<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\InitialisationAncienNumeroContratDSN;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class InitialisationAncienNumeroContratDSNNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return InitialisationAncienNumeroContratDSN::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && InitialisationAncienNumeroContratDSN::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new InitialisationAncienNumeroContratDSN();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('numeroDossier', $data) && null !== $data['numeroDossier']) {
            $object->setNumeroDossier($data['numeroDossier']);
        } elseif (\array_key_exists('numeroDossier', $data) && null === $data['numeroDossier']) {
            $object->setNumeroDossier(null);
        }

        if (\array_key_exists('matriculeSalarie', $data) && null !== $data['matriculeSalarie']) {
            $object->setMatriculeSalarie($data['matriculeSalarie']);
        } elseif (\array_key_exists('matriculeSalarie', $data) && null === $data['matriculeSalarie']) {
            $object->setMatriculeSalarie(null);
        }

        if (\array_key_exists('identifiantEmploi', $data) && null !== $data['identifiantEmploi']) {
            $object->setIdentifiantEmploi($data['identifiantEmploi']);
        } elseif (\array_key_exists('identifiantEmploi', $data) && null === $data['identifiantEmploi']) {
            $object->setIdentifiantEmploi(null);
        }

        if (\array_key_exists('numeroContratDSN', $data) && null !== $data['numeroContratDSN']) {
            $object->setNumeroContratDSN($data['numeroContratDSN']);
        } elseif (\array_key_exists('numeroContratDSN', $data) && null === $data['numeroContratDSN']) {
            $object->setNumeroContratDSN(null);
        }

        if (\array_key_exists('siretDOrigine', $data) && null !== $data['siretDOrigine']) {
            $object->setSiretDOrigine($data['siretDOrigine']);
        } elseif (\array_key_exists('siretDOrigine', $data) && null === $data['siretDOrigine']) {
            $object->setSiretDOrigine(null);
        }

        if (\array_key_exists('periodeDeclaration', $data) && null !== $data['periodeDeclaration']) {
            $object->setPeriodeDeclaration(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periodeDeclaration']));
        } elseif (\array_key_exists('periodeDeclaration', $data) && null === $data['periodeDeclaration']) {
            $object->setPeriodeDeclaration(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('numeroDossier') && null !== $data->getNumeroDossier()) {
            $dataArray['numeroDossier'] = $data->getNumeroDossier();
        }

        if ($data->isInitialized('matriculeSalarie') && null !== $data->getMatriculeSalarie()) {
            $dataArray['matriculeSalarie'] = $data->getMatriculeSalarie();
        }

        if ($data->isInitialized('identifiantEmploi') && null !== $data->getIdentifiantEmploi()) {
            $dataArray['identifiantEmploi'] = $data->getIdentifiantEmploi();
        }

        if ($data->isInitialized('numeroContratDSN') && null !== $data->getNumeroContratDSN()) {
            $dataArray['numeroContratDSN'] = $data->getNumeroContratDSN();
        }

        if ($data->isInitialized('siretDOrigine') && null !== $data->getSiretDOrigine()) {
            $dataArray['siretDOrigine'] = $data->getSiretDOrigine();
        }

        if ($data->isInitialized('periodeDeclaration') && null !== $data->getPeriodeDeclaration()) {
            $dataArray['periodeDeclaration'] = $data->getPeriodeDeclaration()->format('Y-m-d\TH:i:s');
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [InitialisationAncienNumeroContratDSN::class => false];
    }
}
