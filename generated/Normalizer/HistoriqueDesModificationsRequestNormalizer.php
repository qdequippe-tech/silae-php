<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\HistoriqueDesModificationsRequest;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class HistoriqueDesModificationsRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return HistoriqueDesModificationsRequest::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && HistoriqueDesModificationsRequest::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new HistoriqueDesModificationsRequest();
        if (\array_key_exists('modifAPI', $data) && \is_int($data['modifAPI'])) {
            $data['modifAPI'] = (bool) $data['modifAPI'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('numeroDossier', $data) && null !== $data['numeroDossier']) {
            $object->setNumeroDossier($data['numeroDossier']);
        } elseif (\array_key_exists('numeroDossier', $data) && null === $data['numeroDossier']) {
            $object->setNumeroDossier(null);
        }

        if (\array_key_exists('dateDebut', $data) && null !== $data['dateDebut']) {
            $object->setDateDebut(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateDebut']));
        } elseif (\array_key_exists('dateDebut', $data) && null === $data['dateDebut']) {
            $object->setDateDebut(null);
        }

        if (\array_key_exists('dateFin', $data) && null !== $data['dateFin']) {
            $object->setDateFin(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateFin']));
        } elseif (\array_key_exists('dateFin', $data) && null === $data['dateFin']) {
            $object->setDateFin(null);
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

        if (\array_key_exists('elements', $data) && null !== $data['elements']) {
            $values = [];
            foreach ($data['elements'] as $value) {
                $values[] = $value;
            }

            $object->setElements($values);
        } elseif (\array_key_exists('elements', $data) && null === $data['elements']) {
            $object->setElements(null);
        }

        if (\array_key_exists('actions', $data) && null !== $data['actions']) {
            $values_1 = [];
            foreach ($data['actions'] as $value_1) {
                $values_1[] = $value_1;
            }

            $object->setActions($values_1);
        } elseif (\array_key_exists('actions', $data) && null === $data['actions']) {
            $object->setActions(null);
        }

        if (\array_key_exists('matriculeSalarie', $data) && null !== $data['matriculeSalarie']) {
            $object->setMatriculeSalarie($data['matriculeSalarie']);
        } elseif (\array_key_exists('matriculeSalarie', $data) && null === $data['matriculeSalarie']) {
            $object->setMatriculeSalarie(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('numeroDossier') && null !== $data->getNumeroDossier()) {
            $dataArray['numeroDossier'] = $data->getNumeroDossier();
        }

        if ($data->isInitialized('dateDebut') && null !== $data->getDateDebut()) {
            $dataArray['dateDebut'] = $data->getDateDebut()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('dateFin') && null !== $data->getDateFin()) {
            $dataArray['dateFin'] = $data->getDateFin()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('identifiantUtilisateur') && null !== $data->getIdentifiantUtilisateur()) {
            $dataArray['identifiantUtilisateur'] = $data->getIdentifiantUtilisateur();
        }

        if ($data->isInitialized('modifAPI') && null !== $data->getModifAPI()) {
            $dataArray['modifAPI'] = $data->getModifAPI();
        }

        if ($data->isInitialized('elements') && null !== $data->getElements()) {
            $values = [];
            foreach ($data->getElements() as $value) {
                $values[] = $value;
            }

            $dataArray['elements'] = $values;
        }

        if ($data->isInitialized('actions') && null !== $data->getActions()) {
            $values_1 = [];
            foreach ($data->getActions() as $value_1) {
                $values_1[] = $value_1;
            }

            $dataArray['actions'] = $values_1;
        }

        if ($data->isInitialized('matriculeSalarie') && null !== $data->getMatriculeSalarie()) {
            $dataArray['matriculeSalarie'] = $data->getMatriculeSalarie();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [HistoriqueDesModificationsRequest::class => false];
    }
}
