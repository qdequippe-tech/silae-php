<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\CompteCollaborateurDroits;
use QdequippeTech\Silae\Api\Model\CompteCollaborateurDroitsUtilisateur;
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

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return CompteCollaborateurDroits::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && CompteCollaborateurDroits::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new CompteCollaborateurDroits();
        if (\array_key_exists('administration', $data) && \is_int($data['administration'])) {
            $data['administration'] = (bool) $data['administration'];
        }

        if (\array_key_exists('administrationCollaborateur', $data) && \is_int($data['administrationCollaborateur'])) {
            $data['administrationCollaborateur'] = (bool) $data['administrationCollaborateur'];
        }

        if (\array_key_exists('analyseActivitePaie', $data) && \is_int($data['analyseActivitePaie'])) {
            $data['analyseActivitePaie'] = (bool) $data['analyseActivitePaie'];
        }

        if (\array_key_exists('gestionInterne', $data) && \is_int($data['gestionInterne'])) {
            $data['gestionInterne'] = (bool) $data['gestionInterne'];
        }

        if (\array_key_exists('gestionInterneSimplifiee', $data) && \is_int($data['gestionInterneSimplifiee'])) {
            $data['gestionInterneSimplifiee'] = (bool) $data['gestionInterneSimplifiee'];
        }

        if (\array_key_exists('outils', $data) && \is_int($data['outils'])) {
            $data['outils'] = (bool) $data['outils'];
        }

        if (\array_key_exists('parametragePaie', $data) && \is_int($data['parametragePaie'])) {
            $data['parametragePaie'] = (bool) $data['parametragePaie'];
        }

        if (\array_key_exists('production', $data) && \is_int($data['production'])) {
            $data['production'] = (bool) $data['production'];
        }

        if (\array_key_exists('robotPaie', $data) && \is_int($data['robotPaie'])) {
            $data['robotPaie'] = (bool) $data['robotPaie'];
        }

        if (\array_key_exists('pilotageProjet', $data) && \is_int($data['pilotageProjet'])) {
            $data['pilotageProjet'] = (bool) $data['pilotageProjet'];
        }

        if (\array_key_exists('centreNotifications', $data) && \is_int($data['centreNotifications'])) {
            $data['centreNotifications'] = (bool) $data['centreNotifications'];
        }

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
            $object->setDroitsUtilisateur($this->denormalizer->denormalize($data['droitsUtilisateur'], CompteCollaborateurDroitsUtilisateur::class, 'json', $context));
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

        if (\array_key_exists('pilotageProjet', $data) && null !== $data['pilotageProjet']) {
            $object->setPilotageProjet($data['pilotageProjet']);
        } elseif (\array_key_exists('pilotageProjet', $data) && null === $data['pilotageProjet']) {
            $object->setPilotageProjet(null);
        }

        if (\array_key_exists('centreNotifications', $data) && null !== $data['centreNotifications']) {
            $object->setCentreNotifications($data['centreNotifications']);
        } elseif (\array_key_exists('centreNotifications', $data) && null === $data['centreNotifications']) {
            $object->setCentreNotifications(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('administration') && null !== $data->getAdministration()) {
            $dataArray['administration'] = $data->getAdministration();
        }

        if ($data->isInitialized('administrationCollaborateur') && null !== $data->getAdministrationCollaborateur()) {
            $dataArray['administrationCollaborateur'] = $data->getAdministrationCollaborateur();
        }

        if ($data->isInitialized('analyseActivitePaie') && null !== $data->getAnalyseActivitePaie()) {
            $dataArray['analyseActivitePaie'] = $data->getAnalyseActivitePaie();
        }

        if ($data->isInitialized('droitsUtilisateur') && null !== $data->getDroitsUtilisateur()) {
            $dataArray['droitsUtilisateur'] = $this->normalizer->normalize($data->getDroitsUtilisateur(), 'json', $context);
        }

        if ($data->isInitialized('gestionInterne') && null !== $data->getGestionInterne()) {
            $dataArray['gestionInterne'] = $data->getGestionInterne();
        }

        if ($data->isInitialized('gestionInterneSimplifiee') && null !== $data->getGestionInterneSimplifiee()) {
            $dataArray['gestionInterneSimplifiee'] = $data->getGestionInterneSimplifiee();
        }

        if ($data->isInitialized('outils') && null !== $data->getOutils()) {
            $dataArray['outils'] = $data->getOutils();
        }

        if ($data->isInitialized('parametragePaie') && null !== $data->getParametragePaie()) {
            $dataArray['parametragePaie'] = $data->getParametragePaie();
        }

        if ($data->isInitialized('production') && null !== $data->getProduction()) {
            $dataArray['production'] = $data->getProduction();
        }

        if ($data->isInitialized('robotPaie') && null !== $data->getRobotPaie()) {
            $dataArray['robotPaie'] = $data->getRobotPaie();
        }

        if ($data->isInitialized('pilotageProjet') && null !== $data->getPilotageProjet()) {
            $dataArray['pilotageProjet'] = $data->getPilotageProjet();
        }

        if ($data->isInitialized('centreNotifications') && null !== $data->getCentreNotifications()) {
            $dataArray['centreNotifications'] = $data->getCentreNotifications();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [CompteCollaborateurDroits::class => false];
    }
}
