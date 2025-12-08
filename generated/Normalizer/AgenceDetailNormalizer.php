<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\AgenceDetail;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AgenceDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return AgenceDetail::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && AgenceDetail::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new AgenceDetail();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('telBureau', $data) && null !== $data['telBureau']) {
            $object->setTelBureau($data['telBureau']);
        } elseif (\array_key_exists('telBureau', $data) && null === $data['telBureau']) {
            $object->setTelBureau(null);
        }

        if (\array_key_exists('mel', $data) && null !== $data['mel']) {
            $object->setMel($data['mel']);
        } elseif (\array_key_exists('mel', $data) && null === $data['mel']) {
            $object->setMel(null);
        }

        if (\array_key_exists('affectationExpediteurCollab', $data) && null !== $data['affectationExpediteurCollab']) {
            $object->setAffectationExpediteurCollab($data['affectationExpediteurCollab']);
        } elseif (\array_key_exists('affectationExpediteurCollab', $data) && null === $data['affectationExpediteurCollab']) {
            $object->setAffectationExpediteurCollab(null);
        }

        if (\array_key_exists('ediMethode', $data) && null !== $data['ediMethode']) {
            $object->setEdiMethode($data['ediMethode']);
        } elseif (\array_key_exists('ediMethode', $data) && null === $data['ediMethode']) {
            $object->setEdiMethode(null);
        }

        if (\array_key_exists('ediJdcLogin', $data) && null !== $data['ediJdcLogin']) {
            $object->setEdiJdcLogin($data['ediJdcLogin']);
        } elseif (\array_key_exists('ediJdcLogin', $data) && null === $data['ediJdcLogin']) {
            $object->setEdiJdcLogin(null);
        }

        if (\array_key_exists('ediAspOneLogin', $data) && null !== $data['ediAspOneLogin']) {
            $object->setEdiAspOneLogin($data['ediAspOneLogin']);
        } elseif (\array_key_exists('ediAspOneLogin', $data) && null === $data['ediAspOneLogin']) {
            $object->setEdiAspOneLogin(null);
        }

        if (\array_key_exists('ediAutreLogin', $data) && null !== $data['ediAutreLogin']) {
            $object->setEdiAutreLogin($data['ediAutreLogin']);
        } elseif (\array_key_exists('ediAutreLogin', $data) && null === $data['ediAutreLogin']) {
            $object->setEdiAutreLogin(null);
        }

        if (\array_key_exists('codeAgence', $data) && null !== $data['codeAgence']) {
            $object->setCodeAgence($data['codeAgence']);
        } elseif (\array_key_exists('codeAgence', $data) && null === $data['codeAgence']) {
            $object->setCodeAgence(null);
        }

        if (\array_key_exists('raisonSociale', $data) && null !== $data['raisonSociale']) {
            $object->setRaisonSociale($data['raisonSociale']);
        } elseif (\array_key_exists('raisonSociale', $data) && null === $data['raisonSociale']) {
            $object->setRaisonSociale(null);
        }

        if (\array_key_exists('siret', $data) && null !== $data['siret']) {
            $object->setSiret($data['siret']);
        } elseif (\array_key_exists('siret', $data) && null === $data['siret']) {
            $object->setSiret(null);
        }

        if (\array_key_exists('codePostal', $data) && null !== $data['codePostal']) {
            $object->setCodePostal($data['codePostal']);
        } elseif (\array_key_exists('codePostal', $data) && null === $data['codePostal']) {
            $object->setCodePostal(null);
        }

        if (\array_key_exists('nomVille', $data) && null !== $data['nomVille']) {
            $object->setNomVille($data['nomVille']);
        } elseif (\array_key_exists('nomVille', $data) && null === $data['nomVille']) {
            $object->setNomVille(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('telBureau') && null !== $data->getTelBureau()) {
            $dataArray['telBureau'] = $data->getTelBureau();
        }

        if ($data->isInitialized('mel') && null !== $data->getMel()) {
            $dataArray['mel'] = $data->getMel();
        }

        if ($data->isInitialized('affectationExpediteurCollab') && null !== $data->getAffectationExpediteurCollab()) {
            $dataArray['affectationExpediteurCollab'] = $data->getAffectationExpediteurCollab();
        }

        if ($data->isInitialized('ediMethode') && null !== $data->getEdiMethode()) {
            $dataArray['ediMethode'] = $data->getEdiMethode();
        }

        if ($data->isInitialized('ediJdcLogin') && null !== $data->getEdiJdcLogin()) {
            $dataArray['ediJdcLogin'] = $data->getEdiJdcLogin();
        }

        if ($data->isInitialized('ediAspOneLogin') && null !== $data->getEdiAspOneLogin()) {
            $dataArray['ediAspOneLogin'] = $data->getEdiAspOneLogin();
        }

        if ($data->isInitialized('ediAutreLogin') && null !== $data->getEdiAutreLogin()) {
            $dataArray['ediAutreLogin'] = $data->getEdiAutreLogin();
        }

        if ($data->isInitialized('codeAgence') && null !== $data->getCodeAgence()) {
            $dataArray['codeAgence'] = $data->getCodeAgence();
        }

        if ($data->isInitialized('raisonSociale') && null !== $data->getRaisonSociale()) {
            $dataArray['raisonSociale'] = $data->getRaisonSociale();
        }

        if ($data->isInitialized('siret') && null !== $data->getSiret()) {
            $dataArray['siret'] = $data->getSiret();
        }

        if ($data->isInitialized('codePostal') && null !== $data->getCodePostal()) {
            $dataArray['codePostal'] = $data->getCodePostal();
        }

        if ($data->isInitialized('nomVille') && null !== $data->getNomVille()) {
            $dataArray['nomVille'] = $data->getNomVille();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [AgenceDetail::class => false];
    }
}
