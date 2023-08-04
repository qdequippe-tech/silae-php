<?php

namespace QdequippeTech\Silae\Api\Normalizer;

use QdequippeTech\Silae\Api\Model\SalarieCumuls;
use Jane\Component\JsonSchemaRuntime\Reference;
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

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'QdequippeTech\\Silae\\Api\\Model\\SalarieCumuls' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'QdequippeTech\\Silae\\Api\\Model\\SalarieCumuls' === $data::class;
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

    /**
     * @param mixed|null $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('cpModifierCumuls') && null !== $object->getCpModifierCumuls()) {
            $data['cp_ModifierCumuls'] = $object->getCpModifierCumuls();
        }
        if ($object->isInitialized('cpAcquisParReportN1') && null !== $object->getCpAcquisParReportN1()) {
            $data['cp_AcquisParReportN1'] = $object->getCpAcquisParReportN1();
        }
        if ($object->isInitialized('cpAcquisParAncienneteN1') && null !== $object->getCpAcquisParAncienneteN1()) {
            $data['cp_AcquisParAncienneteN1'] = $object->getCpAcquisParAncienneteN1();
        }
        if ($object->isInitialized('cpAcquisParFractionnementN1') && null !== $object->getCpAcquisParFractionnementN1()) {
            $data['cp_AcquisParFractionnementN1'] = $object->getCpAcquisParFractionnementN1();
        }
        if ($object->isInitialized('cpTotalAcquisN1') && null !== $object->getCpTotalAcquisN1()) {
            $data['cp_TotalAcquisN1'] = $object->getCpTotalAcquisN1();
        }
        if ($object->isInitialized('cpTotalPrisN1') && null !== $object->getCpTotalPrisN1()) {
            $data['cp_TotalPrisN1'] = $object->getCpTotalPrisN1();
        }
        if ($object->isInitialized('cpProvisionAcquiseParReportN1') && null !== $object->getCpProvisionAcquiseParReportN1()) {
            $data['cp_ProvisionAcquiseParReportN1'] = $object->getCpProvisionAcquiseParReportN1();
        }
        if ($object->isInitialized('cpTotalProvisionAcquiseN1') && null !== $object->getCpTotalProvisionAcquiseN1()) {
            $data['cp_TotalProvisionAcquiseN1'] = $object->getCpTotalProvisionAcquiseN1();
        }
        if ($object->isInitialized('cpTotalProvisionConsommeeN1') && null !== $object->getCpTotalProvisionConsommeeN1()) {
            $data['cp_TotalProvisionConsommeeN1'] = $object->getCpTotalProvisionConsommeeN1();
        }
        if ($object->isInitialized('cpTotalAcquisN') && null !== $object->getCpTotalAcquisN()) {
            $data['cp_TotalAcquisN'] = $object->getCpTotalAcquisN();
        }
        if ($object->isInitialized('cpTotalPrisN') && null !== $object->getCpTotalPrisN()) {
            $data['cp_TotalPrisN'] = $object->getCpTotalPrisN();
        }
        if ($object->isInitialized('cpTotalProvisionAcquiseN') && null !== $object->getCpTotalProvisionAcquiseN()) {
            $data['cp_TotalProvisionAcquiseN'] = $object->getCpTotalProvisionAcquiseN();
        }
        if ($object->isInitialized('cpTotalProvisionConsommeeN') && null !== $object->getCpTotalProvisionConsommeeN()) {
            $data['cp_TotalProvisionConsommeeN'] = $object->getCpTotalProvisionConsommeeN();
        }
        if ($object->isInitialized('rttModifierCumuls') && null !== $object->getRttModifierCumuls()) {
            $data['rtt_ModifierCumuls'] = $object->getRttModifierCumuls();
        }
        if ($object->isInitialized('rttJoursAcquis') && null !== $object->getRttJoursAcquis()) {
            $data['rtt_JoursAcquis'] = $object->getRttJoursAcquis();
        }
        if ($object->isInitialized('rttJoursPris') && null !== $object->getRttJoursPris()) {
            $data['rtt_JoursPris'] = $object->getRttJoursPris();
        }
        if ($object->isInitialized('rcrModifierCumuls') && null !== $object->getRcrModifierCumuls()) {
            $data['rcr_ModifierCumuls'] = $object->getRcrModifierCumuls();
        }
        if ($object->isInitialized('rcrHeuresAcquises') && null !== $object->getRcrHeuresAcquises()) {
            $data['rcr_HeuresAcquises'] = $object->getRcrHeuresAcquises();
        }
        if ($object->isInitialized('rcrHeuresPrises') && null !== $object->getRcrHeuresPrises()) {
            $data['rcr_HeuresPrises'] = $object->getRcrHeuresPrises();
        }
        if ($object->isInitialized('rccModifierCumuls') && null !== $object->getRccModifierCumuls()) {
            $data['rcc_ModifierCumuls'] = $object->getRccModifierCumuls();
        }
        if ($object->isInitialized('rccHeuresAcquises') && null !== $object->getRccHeuresAcquises()) {
            $data['rcc_HeuresAcquises'] = $object->getRccHeuresAcquises();
        }
        if ($object->isInitialized('rccHeuresPrises') && null !== $object->getRccHeuresPrises()) {
            $data['rcc_HeuresPrises'] = $object->getRccHeuresPrises();
        }
        if ($object->isInitialized('rcoModifierCumuls') && null !== $object->getRcoModifierCumuls()) {
            $data['rco_ModifierCumuls'] = $object->getRcoModifierCumuls();
        }
        if ($object->isInitialized('rcoHeuresAcquises') && null !== $object->getRcoHeuresAcquises()) {
            $data['rco_HeuresAcquises'] = $object->getRcoHeuresAcquises();
        }
        if ($object->isInitialized('rcoHeuresPrises') && null !== $object->getRcoHeuresPrises()) {
            $data['rco_HeuresPrises'] = $object->getRcoHeuresPrises();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['QdequippeTech\\Silae\\Api\\Model\\SalarieCumuls' => false];
    }
}
