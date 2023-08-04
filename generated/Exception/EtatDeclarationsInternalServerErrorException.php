<?php

namespace QdequippeTech\Silae\Api\Exception;

use Psr\Http\Message\ResponseInterface;
use QdequippeTech\Silae\Api\Model\ApiErrors;

class EtatDeclarationsInternalServerErrorException extends InternalServerErrorException
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
        parent::__construct('InternalServerError');
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
