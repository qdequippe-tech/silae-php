<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\ExistenceMatriculeRequest;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ExistenceMatriculeRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return ExistenceMatriculeRequest::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && ExistenceMatriculeRequest::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new ExistenceMatriculeRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('numeroSecuriteSociale', $data) && null !== $data['numeroSecuriteSociale']) {
            $object->setNumeroSecuriteSociale($data['numeroSecuriteSociale']);
        } elseif (\array_key_exists('numeroSecuriteSociale', $data) && null === $data['numeroSecuriteSociale']) {
            $object->setNumeroSecuriteSociale(null);
        }

        if (\array_key_exists('nomNaissance', $data) && null !== $data['nomNaissance']) {
            $object->setNomNaissance($data['nomNaissance']);
        } elseif (\array_key_exists('nomNaissance', $data) && null === $data['nomNaissance']) {
            $object->setNomNaissance(null);
        }

        if (\array_key_exists('nomUsuel', $data) && null !== $data['nomUsuel']) {
            $object->setNomUsuel($data['nomUsuel']);
        } elseif (\array_key_exists('nomUsuel', $data) && null === $data['nomUsuel']) {
            $object->setNomUsuel(null);
        }

        if (\array_key_exists('mel', $data) && null !== $data['mel']) {
            $object->setMel($data['mel']);
        } elseif (\array_key_exists('mel', $data) && null === $data['mel']) {
            $object->setMel(null);
        }

        if (\array_key_exists('melPerso', $data) && null !== $data['melPerso']) {
            $object->setMelPerso($data['melPerso']);
        } elseif (\array_key_exists('melPerso', $data) && null === $data['melPerso']) {
            $object->setMelPerso(null);
        }

        if (\array_key_exists('matricule', $data) && null !== $data['matricule']) {
            $object->setMatricule($data['matricule']);
        } elseif (\array_key_exists('matricule', $data) && null === $data['matricule']) {
            $object->setMatricule(null);
        }

        if (\array_key_exists('numeroDossier', $data) && null !== $data['numeroDossier']) {
            $object->setNumeroDossier($data['numeroDossier']);
        } elseif (\array_key_exists('numeroDossier', $data) && null === $data['numeroDossier']) {
            $object->setNumeroDossier(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('numeroSecuriteSociale') && null !== $data->getNumeroSecuriteSociale()) {
            $dataArray['numeroSecuriteSociale'] = $data->getNumeroSecuriteSociale();
        }

        if ($data->isInitialized('nomNaissance') && null !== $data->getNomNaissance()) {
            $dataArray['nomNaissance'] = $data->getNomNaissance();
        }

        if ($data->isInitialized('nomUsuel') && null !== $data->getNomUsuel()) {
            $dataArray['nomUsuel'] = $data->getNomUsuel();
        }

        if ($data->isInitialized('mel') && null !== $data->getMel()) {
            $dataArray['mel'] = $data->getMel();
        }

        if ($data->isInitialized('melPerso') && null !== $data->getMelPerso()) {
            $dataArray['melPerso'] = $data->getMelPerso();
        }

        if ($data->isInitialized('matricule') && null !== $data->getMatricule()) {
            $dataArray['matricule'] = $data->getMatricule();
        }

        $dataArray['numeroDossier'] = $data->getNumeroDossier();

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [ExistenceMatriculeRequest::class => false];
    }
}
