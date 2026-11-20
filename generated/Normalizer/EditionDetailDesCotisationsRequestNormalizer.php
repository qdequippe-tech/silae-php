<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\EditionDetailDesCotisationsRequest;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\InvalidDateException;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EditionDetailDesCotisationsRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return EditionDetailDesCotisationsRequest::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && EditionDetailDesCotisationsRequest::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new EditionDetailDesCotisationsRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        if (\array_key_exists('detailSalaries', $data) && \is_int($data['detailSalaries'])) {
            $data['detailSalaries'] = (bool) $data['detailSalaries'];
        }

        if (\array_key_exists('grouperParOrganismes', $data) && \is_int($data['grouperParOrganismes'])) {
            $data['grouperParOrganismes'] = (bool) $data['grouperParOrganismes'];
        }

        if (\array_key_exists('grouperEnIgnorantLesCodesDucs', $data) && \is_int($data['grouperEnIgnorantLesCodesDucs'])) {
            $data['grouperEnIgnorantLesCodesDucs'] = (bool) $data['grouperEnIgnorantLesCodesDucs'];
        }

        if (\array_key_exists('detailParNatureDeCotisation', $data) && \is_int($data['detailParNatureDeCotisation'])) {
            $data['detailParNatureDeCotisation'] = (bool) $data['detailParNatureDeCotisation'];
        }

        if (\array_key_exists('detailSalaries', $data) && null !== $data['detailSalaries']) {
            $object->setDetailSalaries($data['detailSalaries']);
        } elseif (\array_key_exists('detailSalaries', $data) && null === $data['detailSalaries']) {
            $object->setDetailSalaries(null);
        }

        if (\array_key_exists('format', $data) && null !== $data['format']) {
            $object->setFormat($data['format']);
        } elseif (\array_key_exists('format', $data) && null === $data['format']) {
            $object->setFormat(null);
        }

        if (\array_key_exists('axeAnalytique', $data) && null !== $data['axeAnalytique']) {
            $object->setAxeAnalytique($data['axeAnalytique']);
        } elseif (\array_key_exists('axeAnalytique', $data) && null === $data['axeAnalytique']) {
            $object->setAxeAnalytique(null);
        }

        if (\array_key_exists('grouperParOrganismes', $data) && null !== $data['grouperParOrganismes']) {
            $object->setGrouperParOrganismes($data['grouperParOrganismes']);
        } elseif (\array_key_exists('grouperParOrganismes', $data) && null === $data['grouperParOrganismes']) {
            $object->setGrouperParOrganismes(null);
        }

        if (\array_key_exists('grouperEnIgnorantLesCodesDucs', $data) && null !== $data['grouperEnIgnorantLesCodesDucs']) {
            $object->setGrouperEnIgnorantLesCodesDucs($data['grouperEnIgnorantLesCodesDucs']);
        } elseif (\array_key_exists('grouperEnIgnorantLesCodesDucs', $data) && null === $data['grouperEnIgnorantLesCodesDucs']) {
            $object->setGrouperEnIgnorantLesCodesDucs(null);
        }

        if (\array_key_exists('grouperPar', $data) && null !== $data['grouperPar']) {
            $object->setGrouperPar($data['grouperPar']);
        } elseif (\array_key_exists('grouperPar', $data) && null === $data['grouperPar']) {
            $object->setGrouperPar(null);
        }

        if (\array_key_exists('detailParNatureDeCotisation', $data) && null !== $data['detailParNatureDeCotisation']) {
            $object->setDetailParNatureDeCotisation($data['detailParNatureDeCotisation']);
        } elseif (\array_key_exists('detailParNatureDeCotisation', $data) && null === $data['detailParNatureDeCotisation']) {
            $object->setDetailParNatureDeCotisation(null);
        }

        if (\array_key_exists('periodeDebut', $data) && null !== $data['periodeDebut']) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periodeDebut']);
            if (false === $date) {
                throw new InvalidDateException($data['periodeDebut'], 'Y-m-d\TH:i:s');
            }

            $object->setPeriodeDebut($date);
        } elseif (\array_key_exists('periodeDebut', $data) && null === $data['periodeDebut']) {
            $object->setPeriodeDebut(null);
        }

        if (\array_key_exists('periodeFin', $data) && null !== $data['periodeFin']) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:s', $data['periodeFin']);
            if (false === $date_1) {
                throw new InvalidDateException($data['periodeFin'], 'Y-m-d\TH:i:s');
            }

            $object->setPeriodeFin($date_1);
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

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('detailSalaries') && null !== $data->getDetailSalaries()) {
            $dataArray['detailSalaries'] = $data->getDetailSalaries();
        }

        if ($data->isInitialized('format') && null !== $data->getFormat()) {
            $dataArray['format'] = $data->getFormat();
        }

        if ($data->isInitialized('axeAnalytique') && null !== $data->getAxeAnalytique()) {
            $dataArray['axeAnalytique'] = $data->getAxeAnalytique();
        }

        if ($data->isInitialized('grouperParOrganismes') && null !== $data->getGrouperParOrganismes()) {
            $dataArray['grouperParOrganismes'] = $data->getGrouperParOrganismes();
        }

        if ($data->isInitialized('grouperEnIgnorantLesCodesDucs') && null !== $data->getGrouperEnIgnorantLesCodesDucs()) {
            $dataArray['grouperEnIgnorantLesCodesDucs'] = $data->getGrouperEnIgnorantLesCodesDucs();
        }

        if ($data->isInitialized('grouperPar') && null !== $data->getGrouperPar()) {
            $dataArray['grouperPar'] = $data->getGrouperPar();
        }

        if ($data->isInitialized('detailParNatureDeCotisation') && null !== $data->getDetailParNatureDeCotisation()) {
            $dataArray['detailParNatureDeCotisation'] = $data->getDetailParNatureDeCotisation();
        }

        if ($data->isInitialized('periodeDebut') && null !== $data->getPeriodeDebut()) {
            $dataArray['periodeDebut'] = $data->getPeriodeDebut()->format('Y-m-d\TH:i:s');
        }

        if ($data->isInitialized('periodeFin') && null !== $data->getPeriodeFin()) {
            $dataArray['periodeFin'] = $data->getPeriodeFin()->format('Y-m-d\TH:i:s');
        }

        $dataArray['numeroDossier'] = $data->getNumeroDossier();

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [EditionDetailDesCotisationsRequest::class => false];
    }
}
