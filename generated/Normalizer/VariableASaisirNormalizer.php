<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\VariableASaisir;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class VariableASaisirNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\VariableASaisir' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof VariableASaisir;
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
        $object = new VariableASaisir();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('nom', $data) && null !== $data['nom']) {
            $object->setNom($data['nom']);
        } elseif (\array_key_exists('nom', $data) && null === $data['nom']) {
            $object->setNom(null);
        }
        if (\array_key_exists('famille', $data) && null !== $data['famille']) {
            $object->setFamille($data['famille']);
        } elseif (\array_key_exists('famille', $data) && null === $data['famille']) {
            $object->setFamille(null);
        }
        if (\array_key_exists('libelle_Long', $data) && null !== $data['libelle_Long']) {
            $object->setLibelleLong($data['libelle_Long']);
        } elseif (\array_key_exists('libelle_Long', $data) && null === $data['libelle_Long']) {
            $object->setLibelleLong(null);
        }
        if (\array_key_exists('libelle_Court', $data) && null !== $data['libelle_Court']) {
            $object->setLibelleCourt($data['libelle_Court']);
        } elseif (\array_key_exists('libelle_Court', $data) && null === $data['libelle_Court']) {
            $object->setLibelleCourt(null);
        }
        if (\array_key_exists('type_Variable', $data) && null !== $data['type_Variable']) {
            $object->setTypeVariable($data['type_Variable']);
        } elseif (\array_key_exists('type_Variable', $data) && null === $data['type_Variable']) {
            $object->setTypeVariable(null);
        }
        if (\array_key_exists('format', $data) && null !== $data['format']) {
            $object->setFormat($data['format']);
        } elseif (\array_key_exists('format', $data) && null === $data['format']) {
            $object->setFormat(null);
        }
        if (\array_key_exists('ordre', $data) && null !== $data['ordre']) {
            $object->setOrdre($data['ordre']);
        } elseif (\array_key_exists('ordre', $data) && null === $data['ordre']) {
            $object->setOrdre(null);
        }
        if (\array_key_exists('indiceCouleur', $data) && null !== $data['indiceCouleur']) {
            $object->setIndiceCouleur($data['indiceCouleur']);
        } elseif (\array_key_exists('indiceCouleur', $data) && null === $data['indiceCouleur']) {
            $object->setIndiceCouleur(null);
        }
        if (\array_key_exists('masquee', $data) && null !== $data['masquee']) {
            $object->setMasquee($data['masquee']);
        } elseif (\array_key_exists('masquee', $data) && null === $data['masquee']) {
            $object->setMasquee(null);
        }
        if (\array_key_exists('options', $data) && null !== $data['options']) {
            $object->setOptions($data['options']);
        } elseif (\array_key_exists('options', $data) && null === $data['options']) {
            $object->setOptions(null);
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
        if ($object->isInitialized('nom') && null !== $object->getNom()) {
            $data['nom'] = $object->getNom();
        }
        if ($object->isInitialized('famille') && null !== $object->getFamille()) {
            $data['famille'] = $object->getFamille();
        }
        if ($object->isInitialized('libelleLong') && null !== $object->getLibelleLong()) {
            $data['libelle_Long'] = $object->getLibelleLong();
        }
        if ($object->isInitialized('libelleCourt') && null !== $object->getLibelleCourt()) {
            $data['libelle_Court'] = $object->getLibelleCourt();
        }
        if ($object->isInitialized('typeVariable') && null !== $object->getTypeVariable()) {
            $data['type_Variable'] = $object->getTypeVariable();
        }
        if ($object->isInitialized('format') && null !== $object->getFormat()) {
            $data['format'] = $object->getFormat();
        }
        if ($object->isInitialized('ordre') && null !== $object->getOrdre()) {
            $data['ordre'] = $object->getOrdre();
        }
        if ($object->isInitialized('indiceCouleur') && null !== $object->getIndiceCouleur()) {
            $data['indiceCouleur'] = $object->getIndiceCouleur();
        }
        if ($object->isInitialized('masquee') && null !== $object->getMasquee()) {
            $data['masquee'] = $object->getMasquee();
        }
        if ($object->isInitialized('options') && null !== $object->getOptions()) {
            $data['options'] = $object->getOptions();
        }

        return $data;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\VariableASaisir' => false];
    }
}
