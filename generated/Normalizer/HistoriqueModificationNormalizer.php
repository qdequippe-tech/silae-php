<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\HistoriqueModification;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class HistoriqueModificationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return HistoriqueModification::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && HistoriqueModification::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new HistoriqueModification();
        if (\array_key_exists('modifAPI', $data) && \is_int($data['modifAPI'])) {
            $data['modifAPI'] = (bool) $data['modifAPI'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('date', $data) && null !== $data['date']) {
            $object->setDate(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['date']));
        } elseif (\array_key_exists('date', $data) && null === $data['date']) {
            $object->setDate(null);
        }

        if (\array_key_exists('identifiantUtilisateur', $data) && null !== $data['identifiantUtilisateur']) {
            $object->setIdentifiantUtilisateur($data['identifiantUtilisateur']);
        } elseif (\array_key_exists('identifiantUtilisateur', $data) && null === $data['identifiantUtilisateur']) {
            $object->setIdentifiantUtilisateur(null);
        }

        if (\array_key_exists('modifAPI', $data) && null !== $data['modifAPI']) {
            $object->setModifAPI($data['modifAPI']);
        } elseif (\array_key_exists('modifAPI', $data) && null === $data['modifAPI']) {
            $object->setModifAPI(null);
        }

        if (\array_key_exists('element', $data) && null !== $data['element']) {
            $object->setElement($data['element']);
        } elseif (\array_key_exists('element', $data) && null === $data['element']) {
            $object->setElement(null);
        }

        if (\array_key_exists('action', $data) && null !== $data['action']) {
            $object->setAction($data['action']);
        } elseif (\array_key_exists('action', $data) && null === $data['action']) {
            $object->setAction(null);
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

        if (\array_key_exists('descriptionModification', $data) && null !== $data['descriptionModification']) {
            $object->setDescriptionModification($data['descriptionModification']);
        } elseif (\array_key_exists('descriptionModification', $data) && null === $data['descriptionModification']) {
            $object->setDescriptionModification(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('date') && null !== $data->getDate()) {
            $dataArray['date'] = $data->getDate()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('identifiantUtilisateur') && null !== $data->getIdentifiantUtilisateur()) {
            $dataArray['identifiantUtilisateur'] = $data->getIdentifiantUtilisateur();
        }

        if ($data->isInitialized('modifAPI') && null !== $data->getModifAPI()) {
            $dataArray['modifAPI'] = $data->getModifAPI();
        }

        if ($data->isInitialized('element') && null !== $data->getElement()) {
            $dataArray['element'] = $data->getElement();
        }

        if ($data->isInitialized('action') && null !== $data->getAction()) {
            $dataArray['action'] = $data->getAction();
        }

        if ($data->isInitialized('numeroDossier') && null !== $data->getNumeroDossier()) {
            $dataArray['numeroDossier'] = $data->getNumeroDossier();
        }

        if ($data->isInitialized('matriculeSalarie') && null !== $data->getMatriculeSalarie()) {
            $dataArray['matriculeSalarie'] = $data->getMatriculeSalarie();
        }

        if ($data->isInitialized('descriptionModification') && null !== $data->getDescriptionModification()) {
            $dataArray['descriptionModification'] = $data->getDescriptionModification();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [HistoriqueModification::class => false];
    }
}
