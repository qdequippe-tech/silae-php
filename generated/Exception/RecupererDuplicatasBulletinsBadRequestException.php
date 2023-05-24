<?php

namespace QdequippeTech\Silae\Api\Exception;

class RecupererDuplicatasBulletinsBadRequestException extends BadRequestException
{
    /**
     * @var \QdequippeTech\Silae\Api\Model\ApiErrors
     */
    private $apiErrors;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\QdequippeTech\Silae\Api\Model\ApiErrors $apiErrors, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('BadRequest');
        $this->apiErrors = $apiErrors;
        $this->response = $response;
    }

    public function getApiErrors(): \QdequippeTech\Silae\Api\Model\ApiErrors
    {
        return $this->apiErrors;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
