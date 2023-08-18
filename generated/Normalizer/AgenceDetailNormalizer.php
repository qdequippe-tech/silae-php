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

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\AgenceDetail' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof AgenceDetail;
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

    /**
     * @param mixed|null $format
     * @param mixed      $object
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('telBureau') && null !== $object->getTelBureau()) {
            $data['telBureau'] = $object->getTelBureau();
        }
        if ($object->isInitialized('mel') && null !== $object->getMel()) {
            $data['mel'] = $object->getMel();
        }
        if ($object->isInitialized('affectationExpediteurCollab') && null !== $object->getAffectationExpediteurCollab()) {
            $data['affectationExpediteurCollab'] = $object->getAffectationExpediteurCollab();
        }
        if ($object->isInitialized('ediMethode') && null !== $object->getEdiMethode()) {
            $data['ediMethode'] = $object->getEdiMethode();
        }
        if ($object->isInitialized('ediJdcLogin') && null !== $object->getEdiJdcLogin()) {
            $data['ediJdcLogin'] = $object->getEdiJdcLogin();
        }
        if ($object->isInitialized('ediAspOneLogin') && null !== $object->getEdiAspOneLogin()) {
            $data['ediAspOneLogin'] = $object->getEdiAspOneLogin();
        }
        if ($object->isInitialized('ediAutreLogin') && null !== $object->getEdiAutreLogin()) {
            $data['ediAutreLogin'] = $object->getEdiAutreLogin();
        }
        if ($object->isInitialized('codeAgence') && null !== $object->getCodeAgence()) {
            $data['codeAgence'] = $object->getCodeAgence();
        }
        if ($object->isInitialized('raisonSociale') && null !== $object->getRaisonSociale()) {
            $data['raisonSociale'] = $object->getRaisonSociale();
        }
        if ($object->isInitialized('siret') && null !== $object->getSiret()) {
            $data['siret'] = $object->getSiret();
        }
        if ($object->isInitialized('codePostal') && null !== $object->getCodePostal()) {
            $data['codePostal'] = $object->getCodePostal();
        }
        if ($object->isInitialized('nomVille') && null !== $object->getNomVille()) {
            $data['nomVille'] = $object->getNomVille();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\AgenceDetail' => false];
    }
}
