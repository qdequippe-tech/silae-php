<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\InitialisationAncienNumeroContratDSN;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class InitialisationAncienNumeroContratDSNNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\InitialisationAncienNumeroContratDSN' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof InitialisationAncienNumeroContratDSN;
    }

    /**
     * @param mixed|null $format
     * @param mixed      $data
     * @param mixed      $class
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new InitialisationAncienNumeroContratDSN();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('numeroDossier', $data) && null !== $data['numeroDossier']) {
            $object->setNumeroDossier($data['numeroDossier']);
        } elseif (\array_key_exists('numeroDossier', $data) && null === $data['numeroDossier']) {
            $object->setNumeroDossier(null);
        }
        if (\array_key_exists('matriculeSalarie', $data) && null !== $data['matriculeSalarie']) {
            $object->setMatriculeSalarie($data['matriculeSalarie']);
        } elseif (\array_key_exists('matriculeSalarie', $data) && null === $data['matriculeSalarie']) {
            $object->setMatriculeSalarie(null);
        }
        if (\array_key_exists('identifiantEmploi', $data) && null !== $data['identifiantEmploi']) {
            $object->setIdentifiantEmploi($data['identifiantEmploi']);
        } elseif (\array_key_exists('identifiantEmploi', $data) && null === $data['identifiantEmploi']) {
            $object->setIdentifiantEmploi(null);
        }
        if (\array_key_exists('numeroContratDSN', $data) && null !== $data['numeroContratDSN']) {
            $object->setNumeroContratDSN($data['numeroContratDSN']);
        } elseif (\array_key_exists('numeroContratDSN', $data) && null === $data['numeroContratDSN']) {
            $object->setNumeroContratDSN(null);
        }
        if (\array_key_exists('siretDOrigine', $data) && null !== $data['siretDOrigine']) {
            $object->setSiretDOrigine($data['siretDOrigine']);
        } elseif (\array_key_exists('siretDOrigine', $data) && null === $data['siretDOrigine']) {
            $object->setSiretDOrigine(null);
        }
        if (\array_key_exists('periodeDeclaration', $data) && null !== $data['periodeDeclaration']) {
            $object->setPeriodeDeclaration(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['periodeDeclaration']));
        } elseif (\array_key_exists('periodeDeclaration', $data) && null === $data['periodeDeclaration']) {
            $object->setPeriodeDeclaration(null);
        }

        return $object;
    }

    /**
     * @param mixed|null $format
     * @param mixed      $object
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('numeroDossier') && null !== $object->getNumeroDossier()) {
            $data['numeroDossier'] = $object->getNumeroDossier();
        }
        if ($object->isInitialized('matriculeSalarie') && null !== $object->getMatriculeSalarie()) {
            $data['matriculeSalarie'] = $object->getMatriculeSalarie();
        }
        if ($object->isInitialized('identifiantEmploi') && null !== $object->getIdentifiantEmploi()) {
            $data['identifiantEmploi'] = $object->getIdentifiantEmploi();
        }
        if ($object->isInitialized('numeroContratDSN') && null !== $object->getNumeroContratDSN()) {
            $data['numeroContratDSN'] = $object->getNumeroContratDSN();
        }
        if ($object->isInitialized('siretDOrigine') && null !== $object->getSiretDOrigine()) {
            $data['siretDOrigine'] = $object->getSiretDOrigine();
        }
        if ($object->isInitialized('periodeDeclaration') && null !== $object->getPeriodeDeclaration()) {
            $data['periodeDeclaration'] = $object->getPeriodeDeclaration()->format('Y-m-d\\TH:i:s');
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\InitialisationAncienNumeroContratDSN' => false];
    }
}
