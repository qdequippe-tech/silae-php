<?php

namespace QdequippeTech\Silae\Api\Runtime\Normalizer;

use Symfony\Component\Validator\ConstraintViolationListInterface;

class ValidationException extends \RuntimeException
{
    public function __construct(private readonly ConstraintViolationListInterface $violationList)
    {
        parent::__construct(\sprintf('Model validation failed with %d errors.', $this->violationList->count()), 400);
    }

    public function getViolationList(): ConstraintViolationListInterface
    {
        return $this->violationList;
    }
}
