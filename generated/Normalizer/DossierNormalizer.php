<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\Dossier;
use QdequippeTech\Silae\Api\Model\Etablissement;
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

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return Dossier::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && Dossier::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new Dossier();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        if (\array_key_exists('miseADisposition', $data) && \is_int($data['miseADisposition'])) {
            $data['miseADisposition'] = (bool) $data['miseADisposition'];
        }

        if (\array_key_exists('bMiseADisposition', $data) && \is_int($data['bMiseADisposition'])) {
            $data['bMiseADisposition'] = (bool) $data['bMiseADisposition'];
        }

        if (\array_key_exists('dossierInterne', $data) && \is_int($data['dossierInterne'])) {
            $data['dossierInterne'] = (bool) $data['dossierInterne'];
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
            $object->setDateDebutMontage(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['dateDebutMontage']));
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

        if (\array_key_exists('numeroInterne', $data) && null !== $data['numeroInterne']) {
            $object->setNumeroInterne($data['numeroInterne']);
        } elseif (\array_key_exists('numeroInterne', $data) && null === $data['numeroInterne']) {
            $object->setNumeroInterne(null);
        }

        if (\array_key_exists('miseADisposition', $data) && null !== $data['miseADisposition']) {
            $object->setMiseADisposition($data['miseADisposition']);
        } elseif (\array_key_exists('miseADisposition', $data) && null === $data['miseADisposition']) {
            $object->setMiseADisposition(null);
        }

        if (\array_key_exists('bMiseADisposition', $data) && null !== $data['bMiseADisposition']) {
            $object->setBMiseADisposition($data['bMiseADisposition']);
        } elseif (\array_key_exists('bMiseADisposition', $data) && null === $data['bMiseADisposition']) {
            $object->setBMiseADisposition(null);
        }

        if (\array_key_exists('dossierInterne', $data) && null !== $data['dossierInterne']) {
            $object->setDossierInterne($data['dossierInterne']);
        } elseif (\array_key_exists('dossierInterne', $data) && null === $data['dossierInterne']) {
            $object->setDossierInterne(null);
        }

        if (\array_key_exists('referenceFacturation', $data) && null !== $data['referenceFacturation']) {
            $object->setReferenceFacturation($data['referenceFacturation']);
        } elseif (\array_key_exists('referenceFacturation', $data) && null === $data['referenceFacturation']) {
            $object->setReferenceFacturation(null);
        }

        if (\array_key_exists('etablissements', $data) && null !== $data['etablissements']) {
            $values = [];
            foreach ($data['etablissements'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, Etablissement::class, 'json', $context);
            }

            $object->setEtablissements($values);
        } elseif (\array_key_exists('etablissements', $data) && null === $data['etablissements']) {
            $object->setEtablissements(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('numeroDossier') && null !== $data->getNumeroDossier()) {
            $dataArray['numeroDossier'] = $data->getNumeroDossier();
        }

        if ($data->isInitialized('numeroDossierModele') && null !== $data->getNumeroDossierModele()) {
            $dataArray['numeroDossierModele'] = $data->getNumeroDossierModele();
        }

        if ($data->isInitialized('dateDebutMontage') && null !== $data->getDateDebutMontage()) {
            $dataArray['dateDebutMontage'] = $data->getDateDebutMontage()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('codeAgence') && null !== $data->getCodeAgence()) {
            $dataArray['codeAgence'] = $data->getCodeAgence();
        }

        if ($data->isInitialized('longueurMatricule') && null !== $data->getLongueurMatricule()) {
            $dataArray['longueurMatricule'] = $data->getLongueurMatricule();
        }

        if ($data->isInitialized('employeurCivilite') && null !== $data->getEmployeurCivilite()) {
            $dataArray['employeurCivilite'] = $data->getEmployeurCivilite();
        }

        if ($data->isInitialized('employeurNom') && null !== $data->getEmployeurNom()) {
            $dataArray['employeurNom'] = $data->getEmployeurNom();
        }

        if ($data->isInitialized('employeurPrenom') && null !== $data->getEmployeurPrenom()) {
            $dataArray['employeurPrenom'] = $data->getEmployeurPrenom();
        }

        if ($data->isInitialized('employeurQualite') && null !== $data->getEmployeurQualite()) {
            $dataArray['employeurQualite'] = $data->getEmployeurQualite();
        }

        if ($data->isInitialized('employeurQualiteAutre') && null !== $data->getEmployeurQualiteAutre()) {
            $dataArray['employeurQualiteAutre'] = $data->getEmployeurQualiteAutre();
        }

        if ($data->isInitialized('groupe') && null !== $data->getGroupe()) {
            $dataArray['groupe'] = $data->getGroupe();
        }

        if ($data->isInitialized('numeroInterne') && null !== $data->getNumeroInterne()) {
            $dataArray['numeroInterne'] = $data->getNumeroInterne();
        }

        if ($data->isInitialized('miseADisposition') && null !== $data->getMiseADisposition()) {
            $dataArray['miseADisposition'] = $data->getMiseADisposition();
        }

        if ($data->isInitialized('bMiseADisposition') && null !== $data->getBMiseADisposition()) {
            $dataArray['bMiseADisposition'] = $data->getBMiseADisposition();
        }

        if ($data->isInitialized('dossierInterne') && null !== $data->getDossierInterne()) {
            $dataArray['dossierInterne'] = $data->getDossierInterne();
        }

        if ($data->isInitialized('referenceFacturation') && null !== $data->getReferenceFacturation()) {
            $dataArray['referenceFacturation'] = $data->getReferenceFacturation();
        }

        if ($data->isInitialized('etablissements') && null !== $data->getEtablissements()) {
            $values = [];
            foreach ($data->getEtablissements() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }

            $dataArray['etablissements'] = $values;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [Dossier::class => false];
    }
}
