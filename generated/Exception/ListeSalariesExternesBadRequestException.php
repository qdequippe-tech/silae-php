<?php

namespace QdequippeTech\Silae\Api\Exception;

use QdequippeTech\Silae\Api\Model\ApiErrors;
use Psr\Http\Message\ResponseInterface;
class ListeSalariesExternesBadRequestException extends BadRequestException
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
