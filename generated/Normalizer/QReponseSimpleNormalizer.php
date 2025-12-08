<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\QReponseSimple;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class QReponseSimpleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return QReponseSimple::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && QReponseSimple::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new QReponseSimple();
        if (\array_key_exists('valeurDOUBLE', $data) && \is_int($data['valeurDOUBLE'])) {
            $data['valeurDOUBLE'] = (float) $data['valeurDOUBLE'];
        }

        if (\array_key_exists('valeurBOOL', $data) && \is_int($data['valeurBOOL'])) {
            $data['valeurBOOL'] = (bool) $data['valeurBOOL'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('nomChamp', $data) && null !== $data['nomChamp']) {
            $object->setNomChamp($data['nomChamp']);
        } elseif (\array_key_exists('nomChamp', $data) && null === $data['nomChamp']) {
            $object->setNomChamp(null);
        }

        if (\array_key_exists('typeChamp', $data) && null !== $data['typeChamp']) {
            $object->setTypeChamp($data['typeChamp']);
        } elseif (\array_key_exists('typeChamp', $data) && null === $data['typeChamp']) {
            $object->setTypeChamp(null);
        }

        if (\array_key_exists('valeurINT32', $data) && null !== $data['valeurINT32']) {
            $object->setValeurINT32($data['valeurINT32']);
        } elseif (\array_key_exists('valeurINT32', $data) && null === $data['valeurINT32']) {
            $object->setValeurINT32(null);
        }

        if (\array_key_exists('valeurDOUBLE', $data) && null !== $data['valeurDOUBLE']) {
            $object->setValeurDOUBLE($data['valeurDOUBLE']);
        } elseif (\array_key_exists('valeurDOUBLE', $data) && null === $data['valeurDOUBLE']) {
            $object->setValeurDOUBLE(null);
        }

        if (\array_key_exists('valeurSTRING', $data) && null !== $data['valeurSTRING']) {
            $object->setValeurSTRING($data['valeurSTRING']);
        } elseif (\array_key_exists('valeurSTRING', $data) && null === $data['valeurSTRING']) {
            $object->setValeurSTRING(null);
        }

        if (\array_key_exists('valeurDATETIME', $data) && null !== $data['valeurDATETIME']) {
            $object->setValeurDATETIME(\DateTime::createFromFormat('Y-m-d\TH:i:s', $data['valeurDATETIME']));
        } elseif (\array_key_exists('valeurDATETIME', $data) && null === $data['valeurDATETIME']) {
            $object->setValeurDATETIME(null);
        }

        if (\array_key_exists('valeurBOOL', $data) && null !== $data['valeurBOOL']) {
            $object->setValeurBOOL($data['valeurBOOL']);
        } elseif (\array_key_exists('valeurBOOL', $data) && null === $data['valeurBOOL']) {
            $object->setValeurBOOL(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('nomChamp') && null !== $data->getNomChamp()) {
            $dataArray['nomChamp'] = $data->getNomChamp();
        }

        if ($data->isInitialized('typeChamp') && null !== $data->getTypeChamp()) {
            $dataArray['typeChamp'] = $data->getTypeChamp();
        }

        if ($data->isInitialized('valeurINT32') && null !== $data->getValeurINT32()) {
            $dataArray['valeurINT32'] = $data->getValeurINT32();
        }

        if ($data->isInitialized('valeurDOUBLE') && null !== $data->getValeurDOUBLE()) {
            $dataArray['valeurDOUBLE'] = $data->getValeurDOUBLE();
        }

        if ($data->isInitialized('valeurSTRING') && null !== $data->getValeurSTRING()) {
            $dataArray['valeurSTRING'] = $data->getValeurSTRING();
        }

        if ($data->isInitialized('valeurDATETIME') && null !== $data->getValeurDATETIME()) {
            $dataArray['valeurDATETIME'] = $data->getValeurDATETIME()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('valeurBOOL') && null !== $data->getValeurBOOL()) {
            $dataArray['valeurBOOL'] = $data->getValeurBOOL();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [QReponseSimple::class => false];
    }
}
