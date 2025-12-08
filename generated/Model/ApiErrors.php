<?php

namespace QdequippeTech\Silae\Api\Model;

class ApiErrors
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
     * @var list<ApiError>|null
     */
    protected $errors;

    /**
     * L'erreur irrécupérable (Recoverable=false) permet de prévenir API Management que la configuration utilisée pour appeler l'api contient une erreur qui empêchent le bon fonctionnement des appels.
     * Lorsqu'API Management reçoit cette erreur il apelle un endpoint de l'api portail pour passer le statut de la configuration en "erreur".
     * Les appels suivants seront bloqués au niveau d'API Management grace au statut "erreur" de la configuration API.
     *
     * @var bool|null
     */
    protected $recoverable;

    /**
     * Cette propriété permet d'indiquer si les erreurs proviennent de l'api ou de silaeservice.
     *
     * @var string|null
     */
    protected $source;

    /**
     * @return list<ApiError>|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * @param list<ApiError>|null $errors
     */
    public function setErrors(?array $errors): self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;

        return $this;
    }

    /**
     * L'erreur irrécupérable (Recoverable=false) permet de prévenir API Management que la configuration utilisée pour appeler l'api contient une erreur qui empêchent le bon fonctionnement des appels.
     * Lorsqu'API Management reçoit cette erreur il apelle un endpoint de l'api portail pour passer le statut de la configuration en "erreur".
     * Les appels suivants seront bloqués au niveau d'API Management grace au statut "erreur" de la configuration API.
     */
    public function getRecoverable(): ?bool
    {
        return $this->recoverable;
    }

    /**
     * L'erreur irrécupérable (Recoverable=false) permet de prévenir API Management que la configuration utilisée pour appeler l'api contient une erreur qui empêchent le bon fonctionnement des appels.
     * Lorsqu'API Management reçoit cette erreur il apelle un endpoint de l'api portail pour passer le statut de la configuration en "erreur".
     * Les appels suivants seront bloqués au niveau d'API Management grace au statut "erreur" de la configuration API.
     */
    public function setRecoverable(?bool $recoverable): self
    {
        $this->initialized['recoverable'] = true;
        $this->recoverable = $recoverable;

        return $this;
    }

    /**
     * Cette propriété permet d'indiquer si les erreurs proviennent de l'api ou de silaeservice.
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * Cette propriété permet d'indiquer si les erreurs proviennent de l'api ou de silaeservice.
     */
    public function setSource(?string $source): self
    {
        $this->initialized['source'] = true;
        $this->source = $source;

        return $this;
    }
}
