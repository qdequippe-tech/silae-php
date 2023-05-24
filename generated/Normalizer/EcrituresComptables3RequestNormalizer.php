<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EcrituresComptables3RequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\EcrituresComptables3Request' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'QdequippeTech\\Silae\\Api\\Model\\EcrituresComptables3Request' === $data::class;
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
        $object = new \QdequippeTech\Silae\Api\Model\EcrituresComptables3Request();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('avecLibelleParDefautDesEcritures', $data) && null !== $data['avecLibelleParDefautDesEcritures']) {
            $object->setAvecLibelleParDefautDesEcritures($data['avecLibelleParDefautDesEcritures']);
        } elseif (\array_key_exists('avecLibelleParDefautDesEcritures', $data) && null === $data['avecLibelleParDefautDesEcritures']) {
            $object->setAvecLibelleParDefautDesEcritures(null);
        }
        if (\array_key_exists('avecToutesLesRepartitionsAnalytiques', $data) && null !== $data['avecToutesLesRepartitionsAnalytiques']) {
            $object->setAvecToutesLesRepartitionsAnalytiques($data['avecToutesLesRepartitionsAnalytiques']);
        } elseif (\array_key_exists('avecToutesLesRepartitionsAnalytiques', $data) && null === $data['avecToutesLesRepartitionsAnalytiques']) {
            $object->setAvecToutesLesRepartitionsAnalytiques(null);
        }
        if (\array_key_exists('periodeDebut', $data) && null !== $data['periodeDebut']) {
            $object->setPeriodeDebut(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['periodeDebut']));
        } elseif (\array_key_exists('periodeDebut', $data) && null === $data['periodeDebut']) {
            $object->setPeriodeDebut(null);
        }
        if (\array_key_exists('periodeFin', $data) && null !== $data['periodeFin']) {
            $object->setPeriodeFin(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['periodeFin']));
        } elseif (\array_key_exists('periodeFin', $data) && null === $data['periodeFin']) {
            $object->setPeriodeFin(null);
        }
        if (\array_key_exists('numeroDossier', $data) && null !== $data['numeroDossier']) {
            $object->setNumeroDossier($data['numeroDossier']);
        } elseif (\array_key_exists('numeroDossier', $data) && null === $data['numeroDossier']) {
            $object->setNumeroDossier(null);
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
        if ($object->isInitialized('avecLibelleParDefautDesEcritures') && null !== $object->getAvecLibelleParDefautDesEcritures()) {
            $data['avecLibelleParDefautDesEcritures'] = $object->getAvecLibelleParDefautDesEcritures();
        }
        if ($object->isInitialized('avecToutesLesRepartitionsAnalytiques') && null !== $object->getAvecToutesLesRepartitionsAnalytiques()) {
            $data['avecToutesLesRepartitionsAnalytiques'] = $object->getAvecToutesLesRepartitionsAnalytiques();
        }
        if ($object->isInitialized('periodeDebut') && null !== $object->getPeriodeDebut()) {
            $data['periodeDebut'] = $object->getPeriodeDebut()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('periodeFin') && null !== $object->getPeriodeFin()) {
            $data['periodeFin'] = $object->getPeriodeFin()->format('Y-m-d\\TH:i:sP');
        }
        $data['numeroDossier'] = $object->getNumeroDossier();

        return $data;
    }
}
