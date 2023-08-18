<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SalarieBulletinDetailsRequest;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalarieBulletinDetailsRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\SalarieBulletinDetailsRequest' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && $data instanceof SalarieBulletinDetailsRequest;
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
        $object = new SalarieBulletinDetailsRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('requeteSalarieBulletinDetails', $data) && null !== $data['requeteSalarieBulletinDetails']) {
            $object->setRequeteSalarieBulletinDetails($this->denormalizer->denormalize($data['requeteSalarieBulletinDetails'], 'QdequippeTech\\Silae\\Api\\Model\\RequeteSalarieBulletinDetails', 'json', $context));
        } elseif (\array_key_exists('requeteSalarieBulletinDetails', $data) && null === $data['requeteSalarieBulletinDetails']) {
            $object->setRequeteSalarieBulletinDetails(null);
        }
        if (\array_key_exists('requeteSalarieBulletinFiltres', $data) && null !== $data['requeteSalarieBulletinFiltres']) {
            $object->setRequeteSalarieBulletinFiltres($this->denormalizer->denormalize($data['requeteSalarieBulletinFiltres'], 'QdequippeTech\\Silae\\Api\\Model\\RequeteSalarieBulletinLignesFiltres', 'json', $context));
        } elseif (\array_key_exists('requeteSalarieBulletinFiltres', $data) && null === $data['requeteSalarieBulletinFiltres']) {
            $object->setRequeteSalarieBulletinFiltres(null);
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
     * @param mixed      $object
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('requeteSalarieBulletinDetails') && null !== $object->getRequeteSalarieBulletinDetails()) {
            $data['requeteSalarieBulletinDetails'] = $this->normalizer->normalize($object->getRequeteSalarieBulletinDetails(), 'json', $context);
        }
        if ($object->isInitialized('requeteSalarieBulletinFiltres') && null !== $object->getRequeteSalarieBulletinFiltres()) {
            $data['requeteSalarieBulletinFiltres'] = $this->normalizer->normalize($object->getRequeteSalarieBulletinFiltres(), 'json', $context);
        }
        $data['numeroDossier'] = $object->getNumeroDossier();

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\SalarieBulletinDetailsRequest' => false];
    }
}
