<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\StatistiquesProductionV2;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class StatistiquesProductionV2Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return StatistiquesProductionV2::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && StatistiquesProductionV2::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new StatistiquesProductionV2();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('nbBulletinsCoffresForts', $data) && null !== $data['nbBulletinsCoffresForts']) {
            $object->setNbBulletinsCoffresForts($data['nbBulletinsCoffresForts']);
        } elseif (\array_key_exists('nbBulletinsCoffresForts', $data) && null === $data['nbBulletinsCoffresForts']) {
            $object->setNbBulletinsCoffresForts(null);
        }

        if (\array_key_exists('nbBulletinsCoffresFortsEditique', $data) && null !== $data['nbBulletinsCoffresFortsEditique']) {
            $object->setNbBulletinsCoffresFortsEditique($data['nbBulletinsCoffresFortsEditique']);
        } elseif (\array_key_exists('nbBulletinsCoffresFortsEditique', $data) && null === $data['nbBulletinsCoffresFortsEditique']) {
            $object->setNbBulletinsCoffresFortsEditique(null);
        }

        if (\array_key_exists('nbDocsSortieCoffresForts', $data) && null !== $data['nbDocsSortieCoffresForts']) {
            $object->setNbDocsSortieCoffresForts($data['nbDocsSortieCoffresForts']);
        } elseif (\array_key_exists('nbDocsSortieCoffresForts', $data) && null === $data['nbDocsSortieCoffresForts']) {
            $object->setNbDocsSortieCoffresForts(null);
        }

        if (\array_key_exists('periode', $data) && null !== $data['periode']) {
            $object->setPeriode(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periode']));
        } elseif (\array_key_exists('periode', $data) && null === $data['periode']) {
            $object->setPeriode(null);
        }

        if (\array_key_exists('nbBulletinsOriginaux', $data) && null !== $data['nbBulletinsOriginaux']) {
            $object->setNbBulletinsOriginaux($data['nbBulletinsOriginaux']);
        } elseif (\array_key_exists('nbBulletinsOriginaux', $data) && null === $data['nbBulletinsOriginaux']) {
            $object->setNbBulletinsOriginaux(null);
        }

        if (\array_key_exists('nbBulletinsOriginauxACalculer', $data) && null !== $data['nbBulletinsOriginauxACalculer']) {
            $object->setNbBulletinsOriginauxACalculer($data['nbBulletinsOriginauxACalculer']);
        } elseif (\array_key_exists('nbBulletinsOriginauxACalculer', $data) && null === $data['nbBulletinsOriginauxACalculer']) {
            $object->setNbBulletinsOriginauxACalculer(null);
        }

        if (\array_key_exists('nbEntrees', $data) && null !== $data['nbEntrees']) {
            $object->setNbEntrees($data['nbEntrees']);
        } elseif (\array_key_exists('nbEntrees', $data) && null === $data['nbEntrees']) {
            $object->setNbEntrees(null);
        }

        if (\array_key_exists('nbSorties', $data) && null !== $data['nbSorties']) {
            $object->setNbSorties($data['nbSorties']);
        } elseif (\array_key_exists('nbSorties', $data) && null === $data['nbSorties']) {
            $object->setNbSorties(null);
        }

        if (\array_key_exists('nbDeclarations', $data) && null !== $data['nbDeclarations']) {
            $object->setNbDeclarations($data['nbDeclarations']);
        } elseif (\array_key_exists('nbDeclarations', $data) && null === $data['nbDeclarations']) {
            $object->setNbDeclarations(null);
        }

        if (\array_key_exists('nbDUE', $data) && null !== $data['nbDUE']) {
            $object->setNbDUE($data['nbDUE']);
        } elseif (\array_key_exists('nbDUE', $data) && null === $data['nbDUE']) {
            $object->setNbDUE(null);
        }

        if (\array_key_exists('nbAttestationsPoleEmploi', $data) && null !== $data['nbAttestationsPoleEmploi']) {
            $object->setNbAttestationsPoleEmploi($data['nbAttestationsPoleEmploi']);
        } elseif (\array_key_exists('nbAttestationsPoleEmploi', $data) && null === $data['nbAttestationsPoleEmploi']) {
            $object->setNbAttestationsPoleEmploi(null);
        }

        if (\array_key_exists('nbIJSS', $data) && null !== $data['nbIJSS']) {
            $object->setNbIJSS($data['nbIJSS']);
        } elseif (\array_key_exists('nbIJSS', $data) && null === $data['nbIJSS']) {
            $object->setNbIJSS(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('nbBulletinsCoffresForts') && null !== $data->getNbBulletinsCoffresForts()) {
            $dataArray['nbBulletinsCoffresForts'] = $data->getNbBulletinsCoffresForts();
        }

        if ($data->isInitialized('nbBulletinsCoffresFortsEditique') && null !== $data->getNbBulletinsCoffresFortsEditique()) {
            $dataArray['nbBulletinsCoffresFortsEditique'] = $data->getNbBulletinsCoffresFortsEditique();
        }

        if ($data->isInitialized('nbDocsSortieCoffresForts') && null !== $data->getNbDocsSortieCoffresForts()) {
            $dataArray['nbDocsSortieCoffresForts'] = $data->getNbDocsSortieCoffresForts();
        }

        if ($data->isInitialized('periode') && null !== $data->getPeriode()) {
            $dataArray['periode'] = $data->getPeriode()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('nbBulletinsOriginaux') && null !== $data->getNbBulletinsOriginaux()) {
            $dataArray['nbBulletinsOriginaux'] = $data->getNbBulletinsOriginaux();
        }

        if ($data->isInitialized('nbBulletinsOriginauxACalculer') && null !== $data->getNbBulletinsOriginauxACalculer()) {
            $dataArray['nbBulletinsOriginauxACalculer'] = $data->getNbBulletinsOriginauxACalculer();
        }

        if ($data->isInitialized('nbEntrees') && null !== $data->getNbEntrees()) {
            $dataArray['nbEntrees'] = $data->getNbEntrees();
        }

        if ($data->isInitialized('nbSorties') && null !== $data->getNbSorties()) {
            $dataArray['nbSorties'] = $data->getNbSorties();
        }

        if ($data->isInitialized('nbDeclarations') && null !== $data->getNbDeclarations()) {
            $dataArray['nbDeclarations'] = $data->getNbDeclarations();
        }

        if ($data->isInitialized('nbDUE') && null !== $data->getNbDUE()) {
            $dataArray['nbDUE'] = $data->getNbDUE();
        }

        if ($data->isInitialized('nbAttestationsPoleEmploi') && null !== $data->getNbAttestationsPoleEmploi()) {
            $dataArray['nbAttestationsPoleEmploi'] = $data->getNbAttestationsPoleEmploi();
        }

        if ($data->isInitialized('nbIJSS') && null !== $data->getNbIJSS()) {
            $dataArray['nbIJSS'] = $data->getNbIJSS();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [StatistiquesProductionV2::class => false];
    }
}
