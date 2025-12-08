<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\LectureCompteCollaborateurRequest;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class LectureCompteCollaborateurRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return LectureCompteCollaborateurRequest::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && LectureCompteCollaborateurRequest::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new LectureCompteCollaborateurRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('idUtilisateur', $data) && null !== $data['idUtilisateur']) {
            $object->setIdUtilisateur($data['idUtilisateur']);
        } elseif (\array_key_exists('idUtilisateur', $data) && null === $data['idUtilisateur']) {
            $object->setIdUtilisateur(null);
        }

        if (\array_key_exists('codeCollaborateur', $data) && null !== $data['codeCollaborateur']) {
            $object->setCodeCollaborateur($data['codeCollaborateur']);
        } elseif (\array_key_exists('codeCollaborateur', $data) && null === $data['codeCollaborateur']) {
            $object->setCodeCollaborateur(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('idUtilisateur') && null !== $data->getIdUtilisateur()) {
            $dataArray['idUtilisateur'] = $data->getIdUtilisateur();
        }

        if ($data->isInitialized('codeCollaborateur') && null !== $data->getCodeCollaborateur()) {
            $dataArray['codeCollaborateur'] = $data->getCodeCollaborateur();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [LectureCompteCollaborateurRequest::class => false];
    }
}
