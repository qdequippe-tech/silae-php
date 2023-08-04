<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\DeclarationEvenementielle;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class DeclarationEvenementielleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\DeclarationEvenementielle' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof DeclarationEvenementielle;
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
        $object = new DeclarationEvenementielle();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('typeDeclaration', $data) && null !== $data['typeDeclaration']) {
            $object->setTypeDeclaration($data['typeDeclaration']);
        } elseif (\array_key_exists('typeDeclaration', $data) && null === $data['typeDeclaration']) {
            $object->setTypeDeclaration(null);
        }
        if (\array_key_exists('etatDeclaration', $data) && null !== $data['etatDeclaration']) {
            $object->setEtatDeclaration($data['etatDeclaration']);
        } elseif (\array_key_exists('etatDeclaration', $data) && null === $data['etatDeclaration']) {
            $object->setEtatDeclaration(null);
        }
        if (\array_key_exists('etatEnvoi', $data) && null !== $data['etatEnvoi']) {
            $object->setEtatEnvoi($data['etatEnvoi']);
        } elseif (\array_key_exists('etatEnvoi', $data) && null === $data['etatEnvoi']) {
            $object->setEtatEnvoi(null);
        }
        if (\array_key_exists('libelleEtat', $data) && null !== $data['libelleEtat']) {
            $object->setLibelleEtat($data['libelleEtat']);
        } elseif (\array_key_exists('libelleEtat', $data) && null === $data['libelleEtat']) {
            $object->setLibelleEtat(null);
        }
        if (\array_key_exists('matricule', $data) && null !== $data['matricule']) {
            $object->setMatricule($data['matricule']);
        } elseif (\array_key_exists('matricule', $data) && null === $data['matricule']) {
            $object->setMatricule(null);
        }
        if (\array_key_exists('nomSalarie', $data) && null !== $data['nomSalarie']) {
            $object->setNomSalarie($data['nomSalarie']);
        } elseif (\array_key_exists('nomSalarie', $data) && null === $data['nomSalarie']) {
            $object->setNomSalarie(null);
        }
        if (\array_key_exists('dateDebut', $data) && null !== $data['dateDebut']) {
            $object->setDateDebut(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['dateDebut']));
        } elseif (\array_key_exists('dateDebut', $data) && null === $data['dateDebut']) {
            $object->setDateDebut(null);
        }
        if (\array_key_exists('dateFin', $data) && null !== $data['dateFin']) {
            $object->setDateFin(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['dateFin']));
        } elseif (\array_key_exists('dateFin', $data) && null === $data['dateFin']) {
            $object->setDateFin(null);
        }
        if (\array_key_exists('codeAbsence', $data) && null !== $data['codeAbsence']) {
            $object->setCodeAbsence($data['codeAbsence']);
        } elseif (\array_key_exists('codeAbsence', $data) && null === $data['codeAbsence']) {
            $object->setCodeAbsence(null);
        }
        if (\array_key_exists('libelleAbsence', $data) && null !== $data['libelleAbsence']) {
            $object->setLibelleAbsence($data['libelleAbsence']);
        } elseif (\array_key_exists('libelleAbsence', $data) && null === $data['libelleAbsence']) {
            $object->setLibelleAbsence(null);
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
        if ($object->isInitialized('typeDeclaration') && null !== $object->getTypeDeclaration()) {
            $data['typeDeclaration'] = $object->getTypeDeclaration();
        }
        if ($object->isInitialized('etatDeclaration') && null !== $object->getEtatDeclaration()) {
            $data['etatDeclaration'] = $object->getEtatDeclaration();
        }
        if ($object->isInitialized('etatEnvoi') && null !== $object->getEtatEnvoi()) {
            $data['etatEnvoi'] = $object->getEtatEnvoi();
        }
        if ($object->isInitialized('libelleEtat') && null !== $object->getLibelleEtat()) {
            $data['libelleEtat'] = $object->getLibelleEtat();
        }
        if ($object->isInitialized('matricule') && null !== $object->getMatricule()) {
            $data['matricule'] = $object->getMatricule();
        }
        if ($object->isInitialized('nomSalarie') && null !== $object->getNomSalarie()) {
            $data['nomSalarie'] = $object->getNomSalarie();
        }
        if ($object->isInitialized('dateDebut') && null !== $object->getDateDebut()) {
            $data['dateDebut'] = $object->getDateDebut()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('dateFin') && null !== $object->getDateFin()) {
            $data['dateFin'] = $object->getDateFin()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('codeAbsence') && null !== $object->getCodeAbsence()) {
            $data['codeAbsence'] = $object->getCodeAbsence();
        }
        if ($object->isInitialized('libelleAbsence') && null !== $object->getLibelleAbsence()) {
            $data['libelleAbsence'] = $object->getLibelleAbsence();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\DeclarationEvenementielle' => false];
    }
}
