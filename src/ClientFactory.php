<?php

declare(strict_types=1);

namespace QdequippeTech\Silae;

use Psr\Http\Client\ClientInterface;

final class ClientFactory
{
    public static function create(?ClientInterface $httpClient = null): Client
    {
        return Client::create($httpClient);
    }
}
