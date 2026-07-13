<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Exception;

final class UnexpectedStatusCodeException extends \RuntimeException implements ClientException
{
    public function __construct($status, $message = '')
    {
        parent::__construct($message, $status);
    }
}
