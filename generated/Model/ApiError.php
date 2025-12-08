<?php

namespace QdequippeTech\Silae\Api\Model;

class ApiError
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Le code de l'erreur. Cela permet de regourper les erreurs dans des familles.
     *
     * @var string|null
     */
    protected $code;

    /**
     * Cette propriété contient des détails concernant l'errreur.
     *
     * @var string|null
     */
    protected $message;

    /**
     * Le code de l'erreur. Cela permet de regourper les erreurs dans des familles.
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Le code de l'erreur. Cela permet de regourper les erreurs dans des familles.
     */
    public function setCode(?string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    /**
     * Cette propriété contient des détails concernant l'errreur.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Cette propriété contient des détails concernant l'errreur.
     */
    public function setMessage(?string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;

        return $this;
    }
}
