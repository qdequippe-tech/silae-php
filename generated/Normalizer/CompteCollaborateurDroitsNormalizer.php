<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\CompteCollaborateurDroits;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CompteCollaborateurDroitsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\CompteCollaborateurDroits' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof CompteCollaborateurDroits;
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
        $object = new CompteCollaborateurDroits();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('administration', $data) && null !== $data['administration']) {
            $object->setAdministration($data['administration']);
        } elseif (\array_key_exists('administration', $data) && null === $data['administration']) {
            $object->setAdministration(null);
        }
        if (\array_key_exists('administrationCollaborateur', $data) && null !== $data['administrationCollaborateur']) {
            $object->setAdministrationCollaborateur($data['administrationCollaborateur']);
        } elseif (\array_key_exists('administrationCollaborateur', $data) && null === $data['administrationCollaborateur']) {
            $object->setAdministrationCollaborateur(null);
        }
        if (\array_key_exists('analyseActivitePaie', $data) && null !== $data['analyseActivitePaie']) {
            $object->setAnalyseActivitePaie($data['analyseActivitePaie']);
        } elseif (\array_key_exists('analyseActivitePaie', $data) && null === $data['analyseActivitePaie']) {
            $object->setAnalyseActivitePaie(null);
        }
        if (\array_key_exists('droitsUtilisateur', $data) && null !== $data['droitsUtilisateur']) {
            $object->setDroitsUtilisateur($this->denormalizer->denormalize($data['droitsUtilisateur'], 'QdequippeTech\\Silae\\Api\\Model\\CompteCollaborateurDroitsUtilisateur', 'json', $context));
        } elseif (\array_key_exists('droitsUtilisateur', $data) && null === $data['droitsUtilisateur']) {
            $object->setDroitsUtilisateur(null);
        }
        if (\array_key_exists('gestionInterne', $data) && null !== $data['gestionInterne']) {
            $object->setGestionInterne($data['gestionInterne']);
        } elseif (\array_key_exists('gestionInterne', $data) && null === $data['gestionInterne']) {
            $object->setGestionInterne(null);
        }
        if (\array_key_exists('gestionInterneSimplifiee', $data) && null !== $data['gestionInterneSimplifiee']) {
            $object->setGestionInterneSimplifiee($data['gestionInterneSimplifiee']);
        } elseif (\array_key_exists('gestionInterneSimplifiee', $data) && null === $data['gestionInterneSimplifiee']) {
            $object->setGestionInterneSimplifiee(null);
        }
        if (\array_key_exists('outils', $data) && null !== $data['outils']) {
            $object->setOutils($data['outils']);
        } elseif (\array_key_exists('outils', $data) && null === $data['outils']) {
            $object->setOutils(null);
        }
        if (\array_key_exists('parametragePaie', $data) && null !== $data['parametragePaie']) {
            $object->setParametragePaie($data['parametragePaie']);
        } elseif (\array_key_exists('parametragePaie', $data) && null === $data['parametragePaie']) {
            $object->setParametragePaie(null);
        }
        if (\array_key_exists('production', $data) && null !== $data['production']) {
            $object->setProduction($data['production']);
        } elseif (\array_key_exists('production', $data) && null === $data['production']) {
            $object->setProduction(null);
        }
        if (\array_key_exists('robotPaie', $data) && null !== $data['robotPaie']) {
            $object->setRobotPaie($data['robotPaie']);
        } elseif (\array_key_exists('robotPaie', $data) && null === $data['robotPaie']) {
            $object->setRobotPaie(null);
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
        if ($object->isInitialized('administration') && null !== $object->getAdministration()) {
            $data['administration'] = $object->getAdministration();
        }
        if ($object->isInitialized('administrationCollaborateur') && null !== $object->getAdministrationCollaborateur()) {
            $data['administrationCollaborateur'] = $object->getAdministrationCollaborateur();
        }
        if ($object->isInitialized('analyseActivitePaie') && null !== $object->getAnalyseActivitePaie()) {
            $data['analyseActivitePaie'] = $object->getAnalyseActivitePaie();
        }
        if ($object->isInitialized('droitsUtilisateur') && null !== $object->getDroitsUtilisateur()) {
            $data['droitsUtilisateur'] = $this->normalizer->normalize($object->getDroitsUtilisateur(), 'json', $context);
        }
        if ($object->isInitialized('gestionInterne') && null !== $object->getGestionInterne()) {
            $data['gestionInterne'] = $object->getGestionInterne();
        }
        if ($object->isInitialized('gestionInterneSimplifiee') && null !== $object->getGestionInterneSimplifiee()) {
            $data['gestionInterneSimplifiee'] = $object->getGestionInterneSimplifiee();
        }
        if ($object->isInitialized('outils') && null !== $object->getOutils()) {
            $data['outils'] = $object->getOutils();
        }
        if ($object->isInitialized('parametragePaie') && null !== $object->getParametragePaie()) {
            $data['parametragePaie'] = $object->getParametragePaie();
        }
        if ($object->isInitialized('production') && null !== $object->getProduction()) {
            $data['production'] = $object->getProduction();
        }
        if ($object->isInitialized('robotPaie') && null !== $object->getRobotPaie()) {
            $data['robotPaie'] = $object->getRobotPaie();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\CompteCollaborateurDroits' => false];
    }
}
