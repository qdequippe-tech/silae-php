<?php

namespace QdequippeTech\Silae\Api\Exception;

use Psr\Http\Message\ResponseInterface;
use QdequippeTech\Silae\Api\Model\ApiErrors;

class CreationUtilisateurClientPaieBadRequestException extends BadRequestException
{
    /**
     * @var ApiErrors
     */
    private $apiErrors;
    /**
     * @var ResponseInterface
     */
    private $response;

    public function __construct(ApiErrors $apiErrors, ResponseInterface $response)
    {
        parent::__construct('BadRequest');
        $this->apiErrors = $apiErrors;
        $this->response = $response;
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
