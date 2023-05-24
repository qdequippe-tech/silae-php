<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class StatistiquesProductionUtilisateurNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\StatistiquesProductionUtilisateur' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'QdequippeTech\\Silae\\Api\\Model\\StatistiquesProductionUtilisateur' === $data::class;
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
        $object = new \QdequippeTech\Silae\Api\Model\StatistiquesProductionUtilisateur();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('identifiantUtilisateur', $data) && null !== $data['identifiantUtilisateur']) {
            $object->setIdentifiantUtilisateur($data['identifiantUtilisateur']);
        } elseif (\array_key_exists('identifiantUtilisateur', $data) && null === $data['identifiantUtilisateur']) {
            $object->setIdentifiantUtilisateur(null);
        }
        if (\array_key_exists('periode', $data) && null !== $data['periode']) {
            $object->setPeriode(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['periode']));
        } elseif (\array_key_exists('periode', $data) && null === $data['periode']) {
            $object->setPeriode(null);
        }
        if (\array_key_exists('nbBulletins', $data) && null !== $data['nbBulletins']) {
            $object->setNbBulletins($data['nbBulletins']);
        } elseif (\array_key_exists('nbBulletins', $data) && null === $data['nbBulletins']) {
            $object->setNbBulletins(null);
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
        if ($object->isInitialized('identifiantUtilisateur') && null !== $object->getIdentifiantUtilisateur()) {
            $data['identifiantUtilisateur'] = $object->getIdentifiantUtilisateur();
        }
        if ($object->isInitialized('periode') && null !== $object->getPeriode()) {
            $data['periode'] = $object->getPeriode()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('nbBulletins') && null !== $object->getNbBulletins()) {
            $data['nbBulletins'] = $object->getNbBulletins();
        }

        return $data;
    }
}
