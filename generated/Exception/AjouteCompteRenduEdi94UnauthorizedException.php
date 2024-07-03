<?php

namespace QdequippeTech\Silae\Api\Exception;

use Psr\Http\Message\ResponseInterface;
use QdequippeTech\Silae\Api\Model\ApiErrors;

class AjouteCompteRenduEdi94UnauthorizedException extends UnauthorizedException
{
    public function __construct(private readonly ApiErrors $apiErrors, private readonly ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
    }

    public function getApiErrors(): ApiErrors
    {
        return $this->apiErrors;
    }

    public function getResponse(): ResponseInterface
    {
        return $this->response;
    }
}
