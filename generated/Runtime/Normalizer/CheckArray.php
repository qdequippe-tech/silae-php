<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Runtime\Normalizer;

trait CheckArray
{
    public function isOnlyNumericKeys(array $array): bool
    {
        return \count(array_filter($array, is_numeric(...), \ARRAY_FILTER_USE_KEY)) === \count($array);
    }
}
