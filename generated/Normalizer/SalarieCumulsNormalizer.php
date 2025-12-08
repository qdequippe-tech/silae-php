<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\SalarieCumuls;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalarieCumulsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return SalarieCumuls::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && SalarieCumuls::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $object = new SalarieCumuls();
        if (\array_key_exists('cp_AcquisParReportN1', $data) && \is_int($data['cp_AcquisParReportN1'])) {
            $data['cp_AcquisParReportN1'] = (float) $data['cp_AcquisParReportN1'];
        }

        if (\array_key_exists('cp_AcquisParAncienneteN1', $data) && \is_int($data['cp_AcquisParAncienneteN1'])) {
            $data['cp_AcquisParAncienneteN1'] = (float) $data['cp_AcquisParAncienneteN1'];
        }

        if (\array_key_exists('cp_AcquisParFractionnementN1', $data) && \is_int($data['cp_AcquisParFractionnementN1'])) {
            $data['cp_AcquisParFractionnementN1'] = (float) $data['cp_AcquisParFractionnementN1'];
        }

        if (\array_key_exists('cp_TotalAcquisN1', $data) && \is_int($data['cp_TotalAcquisN1'])) {
            $data['cp_TotalAcquisN1'] = (float) $data['cp_TotalAcquisN1'];
        }

        if (\array_key_exists('cp_TotalPrisN1', $data) && \is_int($data['cp_TotalPrisN1'])) {
            $data['cp_TotalPrisN1'] = (float) $data['cp_TotalPrisN1'];
        }

        if (\array_key_exists('cp_ProvisionAcquiseParReportN1', $data) && \is_int($data['cp_ProvisionAcquiseParReportN1'])) {
            $data['cp_ProvisionAcquiseParReportN1'] = (float) $data['cp_ProvisionAcquiseParReportN1'];
        }

        if (\array_key_exists('cp_TotalProvisionAcquiseN1', $data) && \is_int($data['cp_TotalProvisionAcquiseN1'])) {
            $data['cp_TotalProvisionAcquiseN1'] = (float) $data['cp_TotalProvisionAcquiseN1'];
        }

        if (\array_key_exists('cp_TotalProvisionConsommeeN1', $data) && \is_int($data['cp_TotalProvisionConsommeeN1'])) {
            $data['cp_TotalProvisionConsommeeN1'] = (float) $data['cp_TotalProvisionConsommeeN1'];
        }

        if (\array_key_exists('cp_TotalAcquisN', $data) && \is_int($data['cp_TotalAcquisN'])) {
            $data['cp_TotalAcquisN'] = (float) $data['cp_TotalAcquisN'];
        }

        if (\array_key_exists('cp_TotalPrisN', $data) && \is_int($data['cp_TotalPrisN'])) {
            $data['cp_TotalPrisN'] = (float) $data['cp_TotalPrisN'];
        }

        if (\array_key_exists('cp_TotalProvisionAcquiseN', $data) && \is_int($data['cp_TotalProvisionAcquiseN'])) {
            $data['cp_TotalProvisionAcquiseN'] = (float) $data['cp_TotalProvisionAcquiseN'];
        }

        if (\array_key_exists('cp_TotalProvisionConsommeeN', $data) && \is_int($data['cp_TotalProvisionConsommeeN'])) {
            $data['cp_TotalProvisionConsommeeN'] = (float) $data['cp_TotalProvisionConsommeeN'];
        }

        if (\array_key_exists('rtt_JoursAcquis', $data) && \is_int($data['rtt_JoursAcquis'])) {
            $data['rtt_JoursAcquis'] = (float) $data['rtt_JoursAcquis'];
        }

        if (\array_key_exists('rtt_JoursPris', $data) && \is_int($data['rtt_JoursPris'])) {
            $data['rtt_JoursPris'] = (float) $data['rtt_JoursPris'];
        }

        if (\array_key_exists('rcr_HeuresAcquises', $data) && \is_int($data['rcr_HeuresAcquises'])) {
            $data['rcr_HeuresAcquises'] = (float) $data['rcr_HeuresAcquises'];
        }

        if (\array_key_exists('rcr_HeuresPrises', $data) && \is_int($data['rcr_HeuresPrises'])) {
            $data['rcr_HeuresPrises'] = (float) $data['rcr_HeuresPrises'];
        }

        if (\array_key_exists('rcc_HeuresAcquises', $data) && \is_int($data['rcc_HeuresAcquises'])) {
            $data['rcc_HeuresAcquises'] = (float) $data['rcc_HeuresAcquises'];
        }

        if (\array_key_exists('rcc_HeuresPrises', $data) && \is_int($data['rcc_HeuresPrises'])) {
            $data['rcc_HeuresPrises'] = (float) $data['rcc_HeuresPrises'];
        }

        if (\array_key_exists('rco_HeuresAcquises', $data) && \is_int($data['rco_HeuresAcquises'])) {
            $data['rco_HeuresAcquises'] = (float) $data['rco_HeuresAcquises'];
        }

        if (\array_key_exists('rco_HeuresPrises', $data) && \is_int($data['rco_HeuresPrises'])) {
            $data['rco_HeuresPrises'] = (float) $data['rco_HeuresPrises'];
        }

        if (\array_key_exists('cp_ModifierCumuls', $data) && \is_int($data['cp_ModifierCumuls'])) {
            $data['cp_ModifierCumuls'] = (bool) $data['cp_ModifierCumuls'];
        }

        if (\array_key_exists('rtt_ModifierCumuls', $data) && \is_int($data['rtt_ModifierCumuls'])) {
            $data['rtt_ModifierCumuls'] = (bool) $data['rtt_ModifierCumuls'];
        }

        if (\array_key_exists('rcr_ModifierCumuls', $data) && \is_int($data['rcr_ModifierCumuls'])) {
            $data['rcr_ModifierCumuls'] = (bool) $data['rcr_ModifierCumuls'];
        }

        if (\array_key_exists('rcc_ModifierCumuls', $data) && \is_int($data['rcc_ModifierCumuls'])) {
            $data['rcc_ModifierCumuls'] = (bool) $data['rcc_ModifierCumuls'];
        }

        if (\array_key_exists('rco_ModifierCumuls', $data) && \is_int($data['rco_ModifierCumuls'])) {
            $data['rco_ModifierCumuls'] = (bool) $data['rco_ModifierCumuls'];
        }

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('cp_ModifierCumuls', $data) && null !== $data['cp_ModifierCumuls']) {
            $object->setCpModifierCumuls($data['cp_ModifierCumuls']);
        } elseif (\array_key_exists('cp_ModifierCumuls', $data) && null === $data['cp_ModifierCumuls']) {
            $object->setCpModifierCumuls(null);
        }

        if (\array_key_exists('cp_AcquisParReportN1', $data) && null !== $data['cp_AcquisParReportN1']) {
            $object->setCpAcquisParReportN1($data['cp_AcquisParReportN1']);
        } elseif (\array_key_exists('cp_AcquisParReportN1', $data) && null === $data['cp_AcquisParReportN1']) {
            $object->setCpAcquisParReportN1(null);
        }

        if (\array_key_exists('cp_AcquisParAncienneteN1', $data) && null !== $data['cp_AcquisParAncienneteN1']) {
            $object->setCpAcquisParAncienneteN1($data['cp_AcquisParAncienneteN1']);
        } elseif (\array_key_exists('cp_AcquisParAncienneteN1', $data) && null === $data['cp_AcquisParAncienneteN1']) {
            $object->setCpAcquisParAncienneteN1(null);
        }

        if (\array_key_exists('cp_AcquisParFractionnementN1', $data) && null !== $data['cp_AcquisParFractionnementN1']) {
            $object->setCpAcquisParFractionnementN1($data['cp_AcquisParFractionnementN1']);
        } elseif (\array_key_exists('cp_AcquisParFractionnementN1', $data) && null === $data['cp_AcquisParFractionnementN1']) {
            $object->setCpAcquisParFractionnementN1(null);
        }

        if (\array_key_exists('cp_TotalAcquisN1', $data) && null !== $data['cp_TotalAcquisN1']) {
            $object->setCpTotalAcquisN1($data['cp_TotalAcquisN1']);
        } elseif (\array_key_exists('cp_TotalAcquisN1', $data) && null === $data['cp_TotalAcquisN1']) {
            $object->setCpTotalAcquisN1(null);
        }

        if (\array_key_exists('cp_TotalPrisN1', $data) && null !== $data['cp_TotalPrisN1']) {
            $object->setCpTotalPrisN1($data['cp_TotalPrisN1']);
        } elseif (\array_key_exists('cp_TotalPrisN1', $data) && null === $data['cp_TotalPrisN1']) {
            $object->setCpTotalPrisN1(null);
        }

        if (\array_key_exists('cp_ProvisionAcquiseParReportN1', $data) && null !== $data['cp_ProvisionAcquiseParReportN1']) {
            $object->setCpProvisionAcquiseParReportN1($data['cp_ProvisionAcquiseParReportN1']);
        } elseif (\array_key_exists('cp_ProvisionAcquiseParReportN1', $data) && null === $data['cp_ProvisionAcquiseParReportN1']) {
            $object->setCpProvisionAcquiseParReportN1(null);
        }

        if (\array_key_exists('cp_TotalProvisionAcquiseN1', $data) && null !== $data['cp_TotalProvisionAcquiseN1']) {
            $object->setCpTotalProvisionAcquiseN1($data['cp_TotalProvisionAcquiseN1']);
        } elseif (\array_key_exists('cp_TotalProvisionAcquiseN1', $data) && null === $data['cp_TotalProvisionAcquiseN1']) {
            $object->setCpTotalProvisionAcquiseN1(null);
        }

        if (\array_key_exists('cp_TotalProvisionConsommeeN1', $data) && null !== $data['cp_TotalProvisionConsommeeN1']) {
            $object->setCpTotalProvisionConsommeeN1($data['cp_TotalProvisionConsommeeN1']);
        } elseif (\array_key_exists('cp_TotalProvisionConsommeeN1', $data) && null === $data['cp_TotalProvisionConsommeeN1']) {
            $object->setCpTotalProvisionConsommeeN1(null);
        }

        if (\array_key_exists('cp_TotalAcquisN', $data) && null !== $data['cp_TotalAcquisN']) {
            $object->setCpTotalAcquisN($data['cp_TotalAcquisN']);
        } elseif (\array_key_exists('cp_TotalAcquisN', $data) && null === $data['cp_TotalAcquisN']) {
            $object->setCpTotalAcquisN(null);
        }

        if (\array_key_exists('cp_TotalPrisN', $data) && null !== $data['cp_TotalPrisN']) {
            $object->setCpTotalPrisN($data['cp_TotalPrisN']);
        } elseif (\array_key_exists('cp_TotalPrisN', $data) && null === $data['cp_TotalPrisN']) {
            $object->setCpTotalPrisN(null);
        }

        if (\array_key_exists('cp_TotalProvisionAcquiseN', $data) && null !== $data['cp_TotalProvisionAcquiseN']) {
            $object->setCpTotalProvisionAcquiseN($data['cp_TotalProvisionAcquiseN']);
        } elseif (\array_key_exists('cp_TotalProvisionAcquiseN', $data) && null === $data['cp_TotalProvisionAcquiseN']) {
            $object->setCpTotalProvisionAcquiseN(null);
        }

        if (\array_key_exists('cp_TotalProvisionConsommeeN', $data) && null !== $data['cp_TotalProvisionConsommeeN']) {
            $object->setCpTotalProvisionConsommeeN($data['cp_TotalProvisionConsommeeN']);
        } elseif (\array_key_exists('cp_TotalProvisionConsommeeN', $data) && null === $data['cp_TotalProvisionConsommeeN']) {
            $object->setCpTotalProvisionConsommeeN(null);
        }

        if (\array_key_exists('rtt_ModifierCumuls', $data) && null !== $data['rtt_ModifierCumuls']) {
            $object->setRttModifierCumuls($data['rtt_ModifierCumuls']);
        } elseif (\array_key_exists('rtt_ModifierCumuls', $data) && null === $data['rtt_ModifierCumuls']) {
            $object->setRttModifierCumuls(null);
        }

        if (\array_key_exists('rtt_JoursAcquis', $data) && null !== $data['rtt_JoursAcquis']) {
            $object->setRttJoursAcquis($data['rtt_JoursAcquis']);
        } elseif (\array_key_exists('rtt_JoursAcquis', $data) && null === $data['rtt_JoursAcquis']) {
            $object->setRttJoursAcquis(null);
        }

        if (\array_key_exists('rtt_JoursPris', $data) && null !== $data['rtt_JoursPris']) {
            $object->setRttJoursPris($data['rtt_JoursPris']);
        } elseif (\array_key_exists('rtt_JoursPris', $data) && null === $data['rtt_JoursPris']) {
            $object->setRttJoursPris(null);
        }

        if (\array_key_exists('rcr_ModifierCumuls', $data) && null !== $data['rcr_ModifierCumuls']) {
            $object->setRcrModifierCumuls($data['rcr_ModifierCumuls']);
        } elseif (\array_key_exists('rcr_ModifierCumuls', $data) && null === $data['rcr_ModifierCumuls']) {
            $object->setRcrModifierCumuls(null);
        }

        if (\array_key_exists('rcr_HeuresAcquises', $data) && null !== $data['rcr_HeuresAcquises']) {
            $object->setRcrHeuresAcquises($data['rcr_HeuresAcquises']);
        } elseif (\array_key_exists('rcr_HeuresAcquises', $data) && null === $data['rcr_HeuresAcquises']) {
            $object->setRcrHeuresAcquises(null);
        }

        if (\array_key_exists('rcr_HeuresPrises', $data) && null !== $data['rcr_HeuresPrises']) {
            $object->setRcrHeuresPrises($data['rcr_HeuresPrises']);
        } elseif (\array_key_exists('rcr_HeuresPrises', $data) && null === $data['rcr_HeuresPrises']) {
            $object->setRcrHeuresPrises(null);
        }

        if (\array_key_exists('rcc_ModifierCumuls', $data) && null !== $data['rcc_ModifierCumuls']) {
            $object->setRccModifierCumuls($data['rcc_ModifierCumuls']);
        } elseif (\array_key_exists('rcc_ModifierCumuls', $data) && null === $data['rcc_ModifierCumuls']) {
            $object->setRccModifierCumuls(null);
        }

        if (\array_key_exists('rcc_HeuresAcquises', $data) && null !== $data['rcc_HeuresAcquises']) {
            $object->setRccHeuresAcquises($data['rcc_HeuresAcquises']);
        } elseif (\array_key_exists('rcc_HeuresAcquises', $data) && null === $data['rcc_HeuresAcquises']) {
            $object->setRccHeuresAcquises(null);
        }

        if (\array_key_exists('rcc_HeuresPrises', $data) && null !== $data['rcc_HeuresPrises']) {
            $object->setRccHeuresPrises($data['rcc_HeuresPrises']);
        } elseif (\array_key_exists('rcc_HeuresPrises', $data) && null === $data['rcc_HeuresPrises']) {
            $object->setRccHeuresPrises(null);
        }

        if (\array_key_exists('rco_ModifierCumuls', $data) && null !== $data['rco_ModifierCumuls']) {
            $object->setRcoModifierCumuls($data['rco_ModifierCumuls']);
        } elseif (\array_key_exists('rco_ModifierCumuls', $data) && null === $data['rco_ModifierCumuls']) {
            $object->setRcoModifierCumuls(null);
        }

        if (\array_key_exists('rco_HeuresAcquises', $data) && null !== $data['rco_HeuresAcquises']) {
            $object->setRcoHeuresAcquises($data['rco_HeuresAcquises']);
        } elseif (\array_key_exists('rco_HeuresAcquises', $data) && null === $data['rco_HeuresAcquises']) {
            $object->setRcoHeuresAcquises(null);
        }

        if (\array_key_exists('rco_HeuresPrises', $data) && null !== $data['rco_HeuresPrises']) {
            $object->setRcoHeuresPrises($data['rco_HeuresPrises']);
        } elseif (\array_key_exists('rco_HeuresPrises', $data) && null === $data['rco_HeuresPrises']) {
            $object->setRcoHeuresPrises(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('cpModifierCumuls') && null !== $data->getCpModifierCumuls()) {
            $dataArray['cp_ModifierCumuls'] = $data->getCpModifierCumuls();
        }

        if ($data->isInitialized('cpAcquisParReportN1') && null !== $data->getCpAcquisParReportN1()) {
            $dataArray['cp_AcquisParReportN1'] = $data->getCpAcquisParReportN1();
        }

        if ($data->isInitialized('cpAcquisParAncienneteN1') && null !== $data->getCpAcquisParAncienneteN1()) {
            $dataArray['cp_AcquisParAncienneteN1'] = $data->getCpAcquisParAncienneteN1();
        }

        if ($data->isInitialized('cpAcquisParFractionnementN1') && null !== $data->getCpAcquisParFractionnementN1()) {
            $dataArray['cp_AcquisParFractionnementN1'] = $data->getCpAcquisParFractionnementN1();
        }

        if ($data->isInitialized('cpTotalAcquisN1') && null !== $data->getCpTotalAcquisN1()) {
            $dataArray['cp_TotalAcquisN1'] = $data->getCpTotalAcquisN1();
        }

        if ($data->isInitialized('cpTotalPrisN1') && null !== $data->getCpTotalPrisN1()) {
            $dataArray['cp_TotalPrisN1'] = $data->getCpTotalPrisN1();
        }

        if ($data->isInitialized('cpProvisionAcquiseParReportN1') && null !== $data->getCpProvisionAcquiseParReportN1()) {
            $dataArray['cp_ProvisionAcquiseParReportN1'] = $data->getCpProvisionAcquiseParReportN1();
        }

        if ($data->isInitialized('cpTotalProvisionAcquiseN1') && null !== $data->getCpTotalProvisionAcquiseN1()) {
            $dataArray['cp_TotalProvisionAcquiseN1'] = $data->getCpTotalProvisionAcquiseN1();
        }

        if ($data->isInitialized('cpTotalProvisionConsommeeN1') && null !== $data->getCpTotalProvisionConsommeeN1()) {
            $dataArray['cp_TotalProvisionConsommeeN1'] = $data->getCpTotalProvisionConsommeeN1();
        }

        if ($data->isInitialized('cpTotalAcquisN') && null !== $data->getCpTotalAcquisN()) {
            $dataArray['cp_TotalAcquisN'] = $data->getCpTotalAcquisN();
        }

        if ($data->isInitialized('cpTotalPrisN') && null !== $data->getCpTotalPrisN()) {
            $dataArray['cp_TotalPrisN'] = $data->getCpTotalPrisN();
        }

        if ($data->isInitialized('cpTotalProvisionAcquiseN') && null !== $data->getCpTotalProvisionAcquiseN()) {
            $dataArray['cp_TotalProvisionAcquiseN'] = $data->getCpTotalProvisionAcquiseN();
        }

        if ($data->isInitialized('cpTotalProvisionConsommeeN') && null !== $data->getCpTotalProvisionConsommeeN()) {
            $dataArray['cp_TotalProvisionConsommeeN'] = $data->getCpTotalProvisionConsommeeN();
        }

        if ($data->isInitialized('rttModifierCumuls') && null !== $data->getRttModifierCumuls()) {
            $dataArray['rtt_ModifierCumuls'] = $data->getRttModifierCumuls();
        }

        if ($data->isInitialized('rttJoursAcquis') && null !== $data->getRttJoursAcquis()) {
            $dataArray['rtt_JoursAcquis'] = $data->getRttJoursAcquis();
        }

        if ($data->isInitialized('rttJoursPris') && null !== $data->getRttJoursPris()) {
            $dataArray['rtt_JoursPris'] = $data->getRttJoursPris();
        }

        if ($data->isInitialized('rcrModifierCumuls') && null !== $data->getRcrModifierCumuls()) {
            $dataArray['rcr_ModifierCumuls'] = $data->getRcrModifierCumuls();
        }

        if ($data->isInitialized('rcrHeuresAcquises') && null !== $data->getRcrHeuresAcquises()) {
            $dataArray['rcr_HeuresAcquises'] = $data->getRcrHeuresAcquises();
        }

        if ($data->isInitialized('rcrHeuresPrises') && null !== $data->getRcrHeuresPrises()) {
            $dataArray['rcr_HeuresPrises'] = $data->getRcrHeuresPrises();
        }

        if ($data->isInitialized('rccModifierCumuls') && null !== $data->getRccModifierCumuls()) {
            $dataArray['rcc_ModifierCumuls'] = $data->getRccModifierCumuls();
        }

        if ($data->isInitialized('rccHeuresAcquises') && null !== $data->getRccHeuresAcquises()) {
            $dataArray['rcc_HeuresAcquises'] = $data->getRccHeuresAcquises();
        }

        if ($data->isInitialized('rccHeuresPrises') && null !== $data->getRccHeuresPrises()) {
            $dataArray['rcc_HeuresPrises'] = $data->getRccHeuresPrises();
        }

        if ($data->isInitialized('rcoModifierCumuls') && null !== $data->getRcoModifierCumuls()) {
            $dataArray['rco_ModifierCumuls'] = $data->getRcoModifierCumuls();
        }

        if ($data->isInitialized('rcoHeuresAcquises') && null !== $data->getRcoHeuresAcquises()) {
            $dataArray['rco_HeuresAcquises'] = $data->getRcoHeuresAcquises();
        }

        if ($data->isInitialized('rcoHeuresPrises') && null !== $data->getRcoHeuresPrises()) {
            $dataArray['rco_HeuresPrises'] = $data->getRcoHeuresPrises();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [SalarieCumuls::class => false];
    }
}
