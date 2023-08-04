<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\EtatDeclaration;
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

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\EtatDeclaration' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'QdequippeTech\\Silae\\Api\\Model\\EtatDeclaration' === $data::class;
    }

    /**
     * @param mixed|null $format
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new EtatDeclaration();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('numeroADS', $data) && null !== $data['numeroADS']) {
            $object->setNumeroADS($data['numeroADS']);
        } elseif (\array_key_exists('numeroADS', $data) && null === $data['numeroADS']) {
            $object->setNumeroADS(null);
        }
        if (\array_key_exists('date', $data) && null !== $data['date']) {
            $object->setDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['date']));
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
                $values[] = $this->denormalizer->denormalize($value, 'QdequippeTech\\Silae\\Api\\Model\\EtatDeclarationRetour', 'json', $context);
            }
            $object->setRetour($values);
        } elseif (\array_key_exists('retour', $data) && null === $data['retour']) {
            $object->setRetour(null);
        }

        return $object;
    }

    /**
     * @param mixed|null $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('numeroADS') && null !== $object->getNumeroADS()) {
            $data['numeroADS'] = $object->getNumeroADS();
        }
        if ($object->isInitialized('date') && null !== $object->getDate()) {
            $data['date'] = $object->getDate()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('typeDeclaration') && null !== $object->getTypeDeclaration()) {
            $data['typeDeclaration'] = $object->getTypeDeclaration();
        }
        if ($object->isInitialized('nomInterneEtablissement') && null !== $object->getNomInterneEtablissement()) {
            $data['nomInterneEtablissement'] = $object->getNomInterneEtablissement();
        }
        if ($object->isInitialized('destinataire') && null !== $object->getDestinataire()) {
            $data['destinataire'] = $object->getDestinataire();
        }
        if ($object->isInitialized('obsolete') && null !== $object->getObsolete()) {
            $data['obsolete'] = $object->getObsolete();
        }
        if ($object->isInitialized('test') && null !== $object->getTest()) {
            $data['test'] = $object->getTest();
        }
        if ($object->isInitialized('retour') && null !== $object->getRetour()) {
            $values = [];
            foreach ($object->getRetour() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['retour'] = $values;
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\EtatDeclaration' => false];
    }
}
