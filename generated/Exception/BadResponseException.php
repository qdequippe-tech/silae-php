<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Exception;

use Psr\Http\Message\ResponseInterface;

class BadResponseException extends UnexpectedStatusCodeException
{
    public function __construct($status, $message = '', ?ResponseInterface $response = null)
    {
        parent::__construct($status, $message, $response);
    }
}
