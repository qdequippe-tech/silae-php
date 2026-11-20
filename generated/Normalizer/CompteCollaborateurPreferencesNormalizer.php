<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use QdequippeTech\Silae\Api\Model\CompteCollaborateurPreferences;
use QdequippeTech\Silae\Api\Runtime\Normalizer\CheckArray;
use QdequippeTech\Silae\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CompteCollaborateurPreferencesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return CompteCollaborateurPreferences::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && CompteCollaborateurPreferences::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new CompteCollaborateurPreferences();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        if (\array_key_exists('splashscreensAlerte', $data) && \is_int($data['splashscreensAlerte'])) {
            $data['splashscreensAlerte'] = (bool) $data['splashscreensAlerte'];
        }

        if (\array_key_exists('splashscreensProduit', $data) && \is_int($data['splashscreensProduit'])) {
            $data['splashscreensProduit'] = (bool) $data['splashscreensProduit'];
        }

        if (\array_key_exists('splashscreensMarketing', $data) && \is_int($data['splashscreensMarketing'])) {
            $data['splashscreensMarketing'] = (bool) $data['splashscreensMarketing'];
        }

        if (\array_key_exists('splashscreensAlerte', $data) && null !== $data['splashscreensAlerte']) {
            $object->setSplashscreensAlerte($data['splashscreensAlerte']);
        } elseif (\array_key_exists('splashscreensAlerte', $data) && null === $data['splashscreensAlerte']) {
            $object->setSplashscreensAlerte(null);
        }

        if (\array_key_exists('splashscreensProduit', $data) && null !== $data['splashscreensProduit']) {
            $object->setSplashscreensProduit($data['splashscreensProduit']);
        } elseif (\array_key_exists('splashscreensProduit', $data) && null === $data['splashscreensProduit']) {
            $object->setSplashscreensProduit(null);
        }

        if (\array_key_exists('splashscreensMarketing', $data) && null !== $data['splashscreensMarketing']) {
            $object->setSplashscreensMarketing($data['splashscreensMarketing']);
        } elseif (\array_key_exists('splashscreensMarketing', $data) && null === $data['splashscreensMarketing']) {
            $object->setSplashscreensMarketing(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('splashscreensAlerte') && null !== $data->getSplashscreensAlerte()) {
            $dataArray['splashscreensAlerte'] = $data->getSplashscreensAlerte();
        }

        if ($data->isInitialized('splashscreensProduit') && null !== $data->getSplashscreensProduit()) {
            $dataArray['splashscreensProduit'] = $data->getSplashscreensProduit();
        }

        if ($data->isInitialized('splashscreensMarketing') && null !== $data->getSplashscreensMarketing()) {
            $dataArray['splashscreensMarketing'] = $data->getSplashscreensMarketing();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [CompteCollaborateurPreferences::class => false];
    }
}
