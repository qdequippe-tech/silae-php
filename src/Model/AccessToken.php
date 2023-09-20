<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Model;

final class AccessToken implements \Stringable
{
    public function __construct(
        public readonly string $accessToken,
        public readonly string $tokenType,
        public readonly int $notBefore,
        public readonly int $expiresIn,
        public readonly int $expiresOn,
        public readonly string $resource,
    ) {}

    public function __toString(): string
    {
        return $this->accessToken;
    }

    public function isExpired(): bool
    {
        return time() > $this->expiresOn;
    }
}
