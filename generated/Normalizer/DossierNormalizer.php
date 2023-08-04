<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\Dossier;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class DossierNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\Dossier' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof Dossier;
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
        $object = new Dossier();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('numeroDossier', $data) && null !== $data['numeroDossier']) {
            $object->setNumeroDossier($data['numeroDossier']);
        } elseif (\array_key_exists('numeroDossier', $data) && null === $data['numeroDossier']) {
            $object->setNumeroDossier(null);
        }
        if (\array_key_exists('numeroDossierModele', $data) && null !== $data['numeroDossierModele']) {
            $object->setNumeroDossierModele($data['numeroDossierModele']);
        } elseif (\array_key_exists('numeroDossierModele', $data) && null === $data['numeroDossierModele']) {
            $object->setNumeroDossierModele(null);
        }
        if (\array_key_exists('dateDebutMontage', $data) && null !== $data['dateDebutMontage']) {
            $object->setDateDebutMontage(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['dateDebutMontage']));
        } elseif (\array_key_exists('dateDebutMontage', $data) && null === $data['dateDebutMontage']) {
            $object->setDateDebutMontage(null);
        }
        if (\array_key_exists('codeAgence', $data) && null !== $data['codeAgence']) {
            $object->setCodeAgence($data['codeAgence']);
        } elseif (\array_key_exists('codeAgence', $data) && null === $data['codeAgence']) {
            $object->setCodeAgence(null);
        }
        if (\array_key_exists('longueurMatricule', $data) && null !== $data['longueurMatricule']) {
            $object->setLongueurMatricule($data['longueurMatricule']);
        } elseif (\array_key_exists('longueurMatricule', $data) && null === $data['longueurMatricule']) {
            $object->setLongueurMatricule(null);
        }
        if (\array_key_exists('employeurCivilite', $data) && null !== $data['employeurCivilite']) {
            $object->setEmployeurCivilite($data['employeurCivilite']);
        } elseif (\array_key_exists('employeurCivilite', $data) && null === $data['employeurCivilite']) {
            $object->setEmployeurCivilite(null);
        }
        if (\array_key_exists('employeurNom', $data) && null !== $data['employeurNom']) {
            $object->setEmployeurNom($data['employeurNom']);
        } elseif (\array_key_exists('employeurNom', $data) && null === $data['employeurNom']) {
            $object->setEmployeurNom(null);
        }
        if (\array_key_exists('employeurPrenom', $data) && null !== $data['employeurPrenom']) {
            $object->setEmployeurPrenom($data['employeurPrenom']);
        } elseif (\array_key_exists('employeurPrenom', $data) && null === $data['employeurPrenom']) {
            $object->setEmployeurPrenom(null);
        }
        if (\array_key_exists('employeurQualite', $data) && null !== $data['employeurQualite']) {
            $object->setEmployeurQualite($data['employeurQualite']);
        } elseif (\array_key_exists('employeurQualite', $data) && null === $data['employeurQualite']) {
            $object->setEmployeurQualite(null);
        }
        if (\array_key_exists('employeurQualiteAutre', $data) && null !== $data['employeurQualiteAutre']) {
            $object->setEmployeurQualiteAutre($data['employeurQualiteAutre']);
        } elseif (\array_key_exists('employeurQualiteAutre', $data) && null === $data['employeurQualiteAutre']) {
            $object->setEmployeurQualiteAutre(null);
        }
        if (\array_key_exists('groupe', $data) && null !== $data['groupe']) {
            $object->setGroupe($data['groupe']);
        } elseif (\array_key_exists('groupe', $data) && null === $data['groupe']) {
            $object->setGroupe(null);
        }
        if (\array_key_exists('etablissements', $data) && null !== $data['etablissements']) {
            $values = [];
            foreach ($data['etablissements'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'QdequippeTech\\Silae\\Api\\Model\\Etablissement', 'json', $context);
            }
            $object->setEtablissements($values);
        } elseif (\array_key_exists('etablissements', $data) && null === $data['etablissements']) {
            $object->setEtablissements(null);
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
        if ($object->isInitialized('numeroDossier') && null !== $object->getNumeroDossier()) {
            $data['numeroDossier'] = $object->getNumeroDossier();
        }
        if ($object->isInitialized('numeroDossierModele') && null !== $object->getNumeroDossierModele()) {
            $data['numeroDossierModele'] = $object->getNumeroDossierModele();
        }
        if ($object->isInitialized('dateDebutMontage') && null !== $object->getDateDebutMontage()) {
            $data['dateDebutMontage'] = $object->getDateDebutMontage()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('codeAgence') && null !== $object->getCodeAgence()) {
            $data['codeAgence'] = $object->getCodeAgence();
        }
        if ($object->isInitialized('longueurMatricule') && null !== $object->getLongueurMatricule()) {
            $data['longueurMatricule'] = $object->getLongueurMatricule();
        }
        if ($object->isInitialized('employeurCivilite') && null !== $object->getEmployeurCivilite()) {
            $data['employeurCivilite'] = $object->getEmployeurCivilite();
        }
        if ($object->isInitialized('employeurNom') && null !== $object->getEmployeurNom()) {
            $data['employeurNom'] = $object->getEmployeurNom();
        }
        if ($object->isInitialized('employeurPrenom') && null !== $object->getEmployeurPrenom()) {
            $data['employeurPrenom'] = $object->getEmployeurPrenom();
        }
        if ($object->isInitialized('employeurQualite') && null !== $object->getEmployeurQualite()) {
            $data['employeurQualite'] = $object->getEmployeurQualite();
        }
        if ($object->isInitialized('employeurQualiteAutre') && null !== $object->getEmployeurQualiteAutre()) {
            $data['employeurQualiteAutre'] = $object->getEmployeurQualiteAutre();
        }
        if ($object->isInitialized('groupe') && null !== $object->getGroupe()) {
            $data['groupe'] = $object->getGroupe();
        }
        if ($object->isInitialized('etablissements') && null !== $object->getEtablissements()) {
            $values = [];
            foreach ($object->getEtablissements() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['etablissements'] = $values;
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\Dossier' => false];
    }
}
