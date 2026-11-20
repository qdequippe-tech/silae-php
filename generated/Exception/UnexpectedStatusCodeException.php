<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Exception;

use Psr\Http\Message\ResponseInterface;

class UnexpectedStatusCodeException extends \RuntimeException implements ClientException, WithResponseInterface
{
    public function __construct($status, $message = '', private readonly ?ResponseInterface $response = null)
    {
        parent::__construct($message, $status);
    }

    public function getResponse(): ?ResponseInterface
    {
        return $this->response;
    }
}
