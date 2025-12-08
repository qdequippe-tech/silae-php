<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\AffectationsDossier;
use QdequippeTech\Silae\Api\Model\ImportDossierDemoRequest;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ImportDossierDemoRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return ImportDossierDemoRequest::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && ImportDossierDemoRequest::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new ImportDossierDemoRequest();
        if (\array_key_exists('changerAffectations', $data) && \is_int($data['changerAffectations'])) {
            $data['changerAffectations'] = (bool) $data['changerAffectations'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('tokenDossierDemo', $data) && null !== $data['tokenDossierDemo']) {
            $object->setTokenDossierDemo($data['tokenDossierDemo']);
        } elseif (\array_key_exists('tokenDossierDemo', $data) && null === $data['tokenDossierDemo']) {
            $object->setTokenDossierDemo(null);
        }

        if (\array_key_exists('nouveauNumeroDossier', $data) && null !== $data['nouveauNumeroDossier']) {
            $object->setNouveauNumeroDossier($data['nouveauNumeroDossier']);
        } elseif (\array_key_exists('nouveauNumeroDossier', $data) && null === $data['nouveauNumeroDossier']) {
            $object->setNouveauNumeroDossier(null);
        }

        if (\array_key_exists('changerAffectations', $data) && null !== $data['changerAffectations']) {
            $object->setChangerAffectations($data['changerAffectations']);
        } elseif (\array_key_exists('changerAffectations', $data) && null === $data['changerAffectations']) {
            $object->setChangerAffectations(null);
        }

        if (\array_key_exists('affectations', $data) && null !== $data['affectations']) {
            $object->setAffectations($this->denormalizer->denormalize($data['affectations'], AffectationsDossier::class, 'json', $context));
        } elseif (\array_key_exists('affectations', $data) && null === $data['affectations']) {
            $object->setAffectations(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('tokenDossierDemo') && null !== $data->getTokenDossierDemo()) {
            $dataArray['tokenDossierDemo'] = $data->getTokenDossierDemo();
        }

        if ($data->isInitialized('nouveauNumeroDossier') && null !== $data->getNouveauNumeroDossier()) {
            $dataArray['nouveauNumeroDossier'] = $data->getNouveauNumeroDossier();
        }

        if ($data->isInitialized('changerAffectations') && null !== $data->getChangerAffectations()) {
            $dataArray['changerAffectations'] = $data->getChangerAffectations();
        }

        if ($data->isInitialized('affectations') && null !== $data->getAffectations()) {
            $dataArray['affectations'] = $this->normalizer->normalize($data->getAffectations(), 'json', $context);
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [ImportDossierDemoRequest::class => false];
    }
}
