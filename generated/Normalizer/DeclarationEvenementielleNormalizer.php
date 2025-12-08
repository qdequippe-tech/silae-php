<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\DeclarationEvenementielle;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class DeclarationEvenementielleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return DeclarationEvenementielle::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && DeclarationEvenementielle::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new DeclarationEvenementielle();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('typeDeclaration', $data) && null !== $data['typeDeclaration']) {
            $object->setTypeDeclaration($data['typeDeclaration']);
        } elseif (\array_key_exists('typeDeclaration', $data) && null === $data['typeDeclaration']) {
            $object->setTypeDeclaration(null);
        }

        if (\array_key_exists('etatDeclaration', $data) && null !== $data['etatDeclaration']) {
            $object->setEtatDeclaration($data['etatDeclaration']);
        } elseif (\array_key_exists('etatDeclaration', $data) && null === $data['etatDeclaration']) {
            $object->setEtatDeclaration(null);
        }

        if (\array_key_exists('etatEnvoi', $data) && null !== $data['etatEnvoi']) {
            $object->setEtatEnvoi($data['etatEnvoi']);
        } elseif (\array_key_exists('etatEnvoi', $data) && null === $data['etatEnvoi']) {
            $object->setEtatEnvoi(null);
        }

        if (\array_key_exists('libelleEtat', $data) && null !== $data['libelleEtat']) {
            $object->setLibelleEtat($data['libelleEtat']);
        } elseif (\array_key_exists('libelleEtat', $data) && null === $data['libelleEtat']) {
            $object->setLibelleEtat(null);
        }

        if (\array_key_exists('matricule', $data) && null !== $data['matricule']) {
            $object->setMatricule($data['matricule']);
        } elseif (\array_key_exists('matricule', $data) && null === $data['matricule']) {
            $object->setMatricule(null);
        }

        if (\array_key_exists('nomSalarie', $data) && null !== $data['nomSalarie']) {
            $object->setNomSalarie($data['nomSalarie']);
        } elseif (\array_key_exists('nomSalarie', $data) && null === $data['nomSalarie']) {
            $object->setNomSalarie(null);
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

        if (\array_key_exists('codeAbsence', $data) && null !== $data['codeAbsence']) {
            $object->setCodeAbsence($data['codeAbsence']);
        } elseif (\array_key_exists('codeAbsence', $data) && null === $data['codeAbsence']) {
            $object->setCodeAbsence(null);
        }

        if (\array_key_exists('libelleAbsence', $data) && null !== $data['libelleAbsence']) {
            $object->setLibelleAbsence($data['libelleAbsence']);
        } elseif (\array_key_exists('libelleAbsence', $data) && null === $data['libelleAbsence']) {
            $object->setLibelleAbsence(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('typeDeclaration') && null !== $data->getTypeDeclaration()) {
            $dataArray['typeDeclaration'] = $data->getTypeDeclaration();
        }

        if ($data->isInitialized('etatDeclaration') && null !== $data->getEtatDeclaration()) {
            $dataArray['etatDeclaration'] = $data->getEtatDeclaration();
        }

        if ($data->isInitialized('etatEnvoi') && null !== $data->getEtatEnvoi()) {
            $dataArray['etatEnvoi'] = $data->getEtatEnvoi();
        }

        if ($data->isInitialized('libelleEtat') && null !== $data->getLibelleEtat()) {
            $dataArray['libelleEtat'] = $data->getLibelleEtat();
        }

        if ($data->isInitialized('matricule') && null !== $data->getMatricule()) {
            $dataArray['matricule'] = $data->getMatricule();
        }

        if ($data->isInitialized('nomSalarie') && null !== $data->getNomSalarie()) {
            $dataArray['nomSalarie'] = $data->getNomSalarie();
        }

        if ($data->isInitialized('dateDebut') && null !== $data->getDateDebut()) {
            $dataArray['dateDebut'] = $data->getDateDebut()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('dateFin') && null !== $data->getDateFin()) {
            $dataArray['dateFin'] = $data->getDateFin()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('codeAbsence') && null !== $data->getCodeAbsence()) {
            $dataArray['codeAbsence'] = $data->getCodeAbsence();
        }

        if ($data->isInitialized('libelleAbsence') && null !== $data->getLibelleAbsence()) {
            $dataArray['libelleAbsence'] = $data->getLibelleAbsence();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [DeclarationEvenementielle::class => false];
    }
}
