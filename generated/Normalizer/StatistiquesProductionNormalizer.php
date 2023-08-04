<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use QdequippeTech\Silae\Api\Model\StatistiquesProduction;
use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class StatistiquesProductionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\StatistiquesProduction' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'QdequippeTech\\Silae\\Api\\Model\\StatistiquesProduction' === $data::class;
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
        $object = new StatistiquesProduction();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('periode', $data) && null !== $data['periode']) {
            $object->setPeriode(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['periode']));
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

    /**
     * @param mixed|null $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('periode') && null !== $object->getPeriode()) {
            $data['periode'] = $object->getPeriode()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('nbBulletinsOriginaux') && null !== $object->getNbBulletinsOriginaux()) {
            $data['nbBulletinsOriginaux'] = $object->getNbBulletinsOriginaux();
        }
        if ($object->isInitialized('nbBulletinsOriginauxACalculer') && null !== $object->getNbBulletinsOriginauxACalculer()) {
            $data['nbBulletinsOriginauxACalculer'] = $object->getNbBulletinsOriginauxACalculer();
        }
        if ($object->isInitialized('nbEntrees') && null !== $object->getNbEntrees()) {
            $data['nbEntrees'] = $object->getNbEntrees();
        }
        if ($object->isInitialized('nbSorties') && null !== $object->getNbSorties()) {
            $data['nbSorties'] = $object->getNbSorties();
        }
        if ($object->isInitialized('nbDeclarations') && null !== $object->getNbDeclarations()) {
            $data['nbDeclarations'] = $object->getNbDeclarations();
        }
        if ($object->isInitialized('nbDUE') && null !== $object->getNbDUE()) {
            $data['nbDUE'] = $object->getNbDUE();
        }
        if ($object->isInitialized('nbAttestationsPoleEmploi') && null !== $object->getNbAttestationsPoleEmploi()) {
            $data['nbAttestationsPoleEmploi'] = $object->getNbAttestationsPoleEmploi();
        }
        if ($object->isInitialized('nbIJSS') && null !== $object->getNbIJSS()) {
            $data['nbIJSS'] = $object->getNbIJSS();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\StatistiquesProduction' => false];
    }
}
