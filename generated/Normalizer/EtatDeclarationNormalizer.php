<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\EtatDeclaration;
use QdequippeTech\Silae\Api\Model\EtatDeclarationRetour;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EtatDeclarationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return EtatDeclaration::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && EtatDeclaration::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new EtatDeclaration();
        if (\array_key_exists('obsolete', $data) && \is_int($data['obsolete'])) {
            $data['obsolete'] = (bool) $data['obsolete'];
        }

        if (\array_key_exists('test', $data) && \is_int($data['test'])) {
            $data['test'] = (bool) $data['test'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('numeroADS', $data) && null !== $data['numeroADS']) {
            $object->setNumeroADS($data['numeroADS']);
        } elseif (\array_key_exists('numeroADS', $data) && null === $data['numeroADS']) {
            $object->setNumeroADS(null);
        }

        if (\array_key_exists('date', $data) && null !== $data['date']) {
            $object->setDate(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['date']));
        } elseif (\array_key_exists('date', $data) && null === $data['date']) {
            $object->setDate(null);
        }

        if (\array_key_exists('typeDeclaration', $data) && null !== $data['typeDeclaration']) {
            $object->setTypeDeclaration($data['typeDeclaration']);
        } elseif (\array_key_exists('typeDeclaration', $data) && null === $data['typeDeclaration']) {
            $object->setTypeDeclaration(null);
        }

        if (\array_key_exists('nomInterneEtablissement', $data) && null !== $data['nomInterneEtablissement']) {
            $object->setNomInterneEtablissement($data['nomInterneEtablissement']);
        } elseif (\array_key_exists('nomInterneEtablissement', $data) && null === $data['nomInterneEtablissement']) {
            $object->setNomInterneEtablissement(null);
        }

        if (\array_key_exists('destinataire', $data) && null !== $data['destinataire']) {
            $object->setDestinataire($data['destinataire']);
        } elseif (\array_key_exists('destinataire', $data) && null === $data['destinataire']) {
            $object->setDestinataire(null);
        }

        if (\array_key_exists('obsolete', $data) && null !== $data['obsolete']) {
            $object->setObsolete($data['obsolete']);
        } elseif (\array_key_exists('obsolete', $data) && null === $data['obsolete']) {
            $object->setObsolete(null);
        }

        if (\array_key_exists('test', $data) && null !== $data['test']) {
            $object->setTest($data['test']);
        } elseif (\array_key_exists('test', $data) && null === $data['test']) {
            $object->setTest(null);
        }

        if (\array_key_exists('retour', $data) && null !== $data['retour']) {
            $values = [];
            foreach ($data['retour'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, EtatDeclarationRetour::class, 'json', $context);
            }

            $object->setRetour($values);
        } elseif (\array_key_exists('retour', $data) && null === $data['retour']) {
            $object->setRetour(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('numeroADS') && null !== $data->getNumeroADS()) {
            $dataArray['numeroADS'] = $data->getNumeroADS();
        }

        if ($data->isInitialized('date') && null !== $data->getDate()) {
            $dataArray['date'] = $data->getDate()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('typeDeclaration') && null !== $data->getTypeDeclaration()) {
            $dataArray['typeDeclaration'] = $data->getTypeDeclaration();
        }

        if ($data->isInitialized('nomInterneEtablissement') && null !== $data->getNomInterneEtablissement()) {
            $dataArray['nomInterneEtablissement'] = $data->getNomInterneEtablissement();
        }

        if ($data->isInitialized('destinataire') && null !== $data->getDestinataire()) {
            $dataArray['destinataire'] = $data->getDestinataire();
        }

        if ($data->isInitialized('obsolete') && null !== $data->getObsolete()) {
            $dataArray['obsolete'] = $data->getObsolete();
        }

        if ($data->isInitialized('test') && null !== $data->getTest()) {
            $dataArray['test'] = $data->getTest();
        }

        if ($data->isInitialized('retour') && null !== $data->getRetour()) {
            $values = [];
            foreach ($data->getRetour() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }

            $dataArray['retour'] = $values;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [EtatDeclaration::class => false];
    }
}
