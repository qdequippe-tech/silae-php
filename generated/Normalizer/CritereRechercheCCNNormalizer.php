<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\CritereRechercheCCN;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CritereRechercheCCNNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return CritereRechercheCCN::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && CritereRechercheCCN::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new CritereRechercheCCN();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('listeCodesNAF', $data) && null !== $data['listeCodesNAF']) {
            $values = [];
            foreach ($data['listeCodesNAF'] as $value) {
                $values[] = $value;
            }

            $object->setListeCodesNAF($values);
        } elseif (\array_key_exists('listeCodesNAF', $data) && null === $data['listeCodesNAF']) {
            $object->setListeCodesNAF(null);
        }

        if (\array_key_exists('codeIDCC', $data) && null !== $data['codeIDCC']) {
            $object->setCodeIDCC($data['codeIDCC']);
        } elseif (\array_key_exists('codeIDCC', $data) && null === $data['codeIDCC']) {
            $object->setCodeIDCC(null);
        }

        if (\array_key_exists('codeJO', $data) && null !== $data['codeJO']) {
            $object->setCodeJO($data['codeJO']);
        } elseif (\array_key_exists('codeJO', $data) && null === $data['codeJO']) {
            $object->setCodeJO(null);
        }

        if (\array_key_exists('texteLibre', $data) && null !== $data['texteLibre']) {
            $object->setTexteLibre($data['texteLibre']);
        } elseif (\array_key_exists('texteLibre', $data) && null === $data['texteLibre']) {
            $object->setTexteLibre(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('listeCodesNAF') && null !== $data->getListeCodesNAF()) {
            $values = [];
            foreach ($data->getListeCodesNAF() as $value) {
                $values[] = $value;
            }

            $dataArray['listeCodesNAF'] = $values;
        }

        if ($data->isInitialized('codeIDCC') && null !== $data->getCodeIDCC()) {
            $dataArray['codeIDCC'] = $data->getCodeIDCC();
        }

        if ($data->isInitialized('codeJO') && null !== $data->getCodeJO()) {
            $dataArray['codeJO'] = $data->getCodeJO();
        }

        if ($data->isInitialized('texteLibre') && null !== $data->getTexteLibre()) {
            $dataArray['texteLibre'] = $data->getTexteLibre();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [CritereRechercheCCN::class => false];
    }
}
