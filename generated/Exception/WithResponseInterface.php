<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Exception;

use Psr\Http\Message\ResponseInterface;

interface WithResponseInterface
{
    public function getResponse(): ?ResponseInterface;
}
