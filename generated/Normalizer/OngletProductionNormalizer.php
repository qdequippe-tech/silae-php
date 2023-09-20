<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\OngletProduction;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class OngletProductionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\OngletProduction' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof OngletProduction;
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
        $object = new OngletProduction();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('nomOnglet', $data) && null !== $data['nomOnglet']) {
            $object->setNomOnglet($data['nomOnglet']);
        } elseif (\array_key_exists('nomOnglet', $data) && null === $data['nomOnglet']) {
            $object->setNomOnglet(null);
        }
        if (\array_key_exists('aSupprimer', $data) && null !== $data['aSupprimer']) {
            $object->setASupprimer($data['aSupprimer']);
        } elseif (\array_key_exists('aSupprimer', $data) && null === $data['aSupprimer']) {
            $object->setASupprimer(null);
        }
        if (\array_key_exists('ordre', $data) && null !== $data['ordre']) {
            $object->setOrdre($data['ordre']);
        } elseif (\array_key_exists('ordre', $data) && null === $data['ordre']) {
            $object->setOrdre(null);
        }
        if (\array_key_exists('nouveauNomOnglet', $data) && null !== $data['nouveauNomOnglet']) {
            $object->setNouveauNomOnglet($data['nouveauNomOnglet']);
        } elseif (\array_key_exists('nouveauNomOnglet', $data) && null === $data['nouveauNomOnglet']) {
            $object->setNouveauNomOnglet(null);
        }
        if (\array_key_exists('paramPaieGestion', $data) && null !== $data['paramPaieGestion']) {
            $object->setParamPaieGestion($data['paramPaieGestion']);
        } elseif (\array_key_exists('paramPaieGestion', $data) && null === $data['paramPaieGestion']) {
            $object->setParamPaieGestion(null);
        }
        if (\array_key_exists('paramPaieLiaisonClient', $data) && null !== $data['paramPaieLiaisonClient']) {
            $object->setParamPaieLiaisonClient($data['paramPaieLiaisonClient']);
        } elseif (\array_key_exists('paramPaieLiaisonClient', $data) && null === $data['paramPaieLiaisonClient']) {
            $object->setParamPaieLiaisonClient(null);
        }
        if (\array_key_exists('paramPaieComplet', $data) && null !== $data['paramPaieComplet']) {
            $object->setParamPaieComplet($data['paramPaieComplet']);
        } elseif (\array_key_exists('paramPaieComplet', $data) && null === $data['paramPaieComplet']) {
            $object->setParamPaieComplet(null);
        }
        if (\array_key_exists('paramPaieSimplifie', $data) && null !== $data['paramPaieSimplifie']) {
            $object->setParamPaieSimplifie($data['paramPaieSimplifie']);
        } elseif (\array_key_exists('paramPaieSimplifie', $data) && null === $data['paramPaieSimplifie']) {
            $object->setParamPaieSimplifie(null);
        }
        if (\array_key_exists('afficherLaListe', $data) && null !== $data['afficherLaListe']) {
            $object->setAfficherLaListe($data['afficherLaListe']);
        } elseif (\array_key_exists('afficherLaListe', $data) && null === $data['afficherLaListe']) {
            $object->setAfficherLaListe(null);
        }
        if (\array_key_exists('restreindreLaListe', $data) && null !== $data['restreindreLaListe']) {
            $object->setRestreindreLaListe($data['restreindreLaListe']);
        } elseif (\array_key_exists('restreindreLaListe', $data) && null === $data['restreindreLaListe']) {
            $object->setRestreindreLaListe(null);
        }
        if (\array_key_exists('requeteFiltre', $data) && null !== $data['requeteFiltre']) {
            $object->setRequeteFiltre($data['requeteFiltre']);
        } elseif (\array_key_exists('requeteFiltre', $data) && null === $data['requeteFiltre']) {
            $object->setRequeteFiltre(null);
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
        if ($object->isInitialized('nomOnglet') && null !== $object->getNomOnglet()) {
            $data['nomOnglet'] = $object->getNomOnglet();
        }
        if ($object->isInitialized('aSupprimer') && null !== $object->getASupprimer()) {
            $data['aSupprimer'] = $object->getASupprimer();
        }
        if ($object->isInitialized('ordre') && null !== $object->getOrdre()) {
            $data['ordre'] = $object->getOrdre();
        }
        if ($object->isInitialized('nouveauNomOnglet') && null !== $object->getNouveauNomOnglet()) {
            $data['nouveauNomOnglet'] = $object->getNouveauNomOnglet();
        }
        if ($object->isInitialized('paramPaieGestion') && null !== $object->getParamPaieGestion()) {
            $data['paramPaieGestion'] = $object->getParamPaieGestion();
        }
        if ($object->isInitialized('paramPaieLiaisonClient') && null !== $object->getParamPaieLiaisonClient()) {
            $data['paramPaieLiaisonClient'] = $object->getParamPaieLiaisonClient();
        }
        if ($object->isInitialized('paramPaieComplet') && null !== $object->getParamPaieComplet()) {
            $data['paramPaieComplet'] = $object->getParamPaieComplet();
        }
        if ($object->isInitialized('paramPaieSimplifie') && null !== $object->getParamPaieSimplifie()) {
            $data['paramPaieSimplifie'] = $object->getParamPaieSimplifie();
        }
        if ($object->isInitialized('afficherLaListe') && null !== $object->getAfficherLaListe()) {
            $data['afficherLaListe'] = $object->getAfficherLaListe();
        }
        if ($object->isInitialized('restreindreLaListe') && null !== $object->getRestreindreLaListe()) {
            $data['restreindreLaListe'] = $object->getRestreindreLaListe();
        }
        if ($object->isInitialized('requeteFiltre') && null !== $object->getRequeteFiltre()) {
            $data['requeteFiltre'] = $object->getRequeteFiltre();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\OngletProduction' => false];
    }
}
