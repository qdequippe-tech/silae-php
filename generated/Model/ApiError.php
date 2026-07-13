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
     * Le code de l'erreur. Cela permet de regrouper les erreurs dans des familles.
     *
     * @var string|null
     */
    protected $code;

    /**
     * Cette propriété contient des détails concernant l'erreur.
     *
     * @var string|null
     */
    protected $message;

    /**
     * Cette propriété contient des données supplémentaires concernant l'erreur.
     *
     * @var array<string, string>|null
     */
    protected $metadata;

    /**
     * Le code de l'erreur. Cela permet de regrouper les erreurs dans des familles.
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Le code de l'erreur. Cela permet de regrouper les erreurs dans des familles.
     */
    public function setCode(?string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    /**
     * Cette propriété contient des détails concernant l'erreur.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Cette propriété contient des détails concernant l'erreur.
     */
    public function setMessage(?string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;

        return $this;
    }

    /**
     * Cette propriété contient des données supplémentaires concernant l'erreur.
     *
     * @return array<string, string>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }

    /**
     * Cette propriété contient des données supplémentaires concernant l'erreur.
     *
     * @param array<string, string>|null $metadata
     */
    public function setMetadata(?iterable $metadata): self
    {
        $this->initialized['metadata'] = true;
        $this->metadata = $metadata;

        return $this;
    }
}
