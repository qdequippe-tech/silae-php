<?php

namespace QdequippeTech\Silae\Api\Model;

class AjouteCompteRenduEdi94Request
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
     * @var string|null
     */
    protected $numeroADS;
    /**
     * @var string|null
     */
    protected $adsacsars;
    /**
     * @var string|null
     */
    protected $statutDeclaration;
    /**
     * @var string|null
     */
    protected $statutTelepaiement;
    /**
     * @var string|null
     */
    protected $typeMessage;
    /**
     * @var string|null
     */
    protected $messageTexte;
    /**
     * @var string|null
     */
    protected $messageBa;
    /**
     * @var string|null
     */
    protected $crm94NomFichier;
    /**
     * @var string|null
     */
    protected $crm94Xml;

    public function getNumeroADS(): ?string
    {
        return $this->numeroADS;
    }

    public function setNumeroADS(?string $numeroADS): self
    {
        $this->initialized['numeroADS'] = true;
        $this->numeroADS = $numeroADS;

        return $this;
    }

    public function getAdsacsars(): ?string
    {
        return $this->adsacsars;
    }

    public function setAdsacsars(?string $adsacsars): self
    {
        $this->initialized['adsacsars'] = true;
        $this->adsacsars = $adsacsars;

        return $this;
    }

    public function getStatutDeclaration(): ?string
    {
        return $this->statutDeclaration;
    }

    public function setStatutDeclaration(?string $statutDeclaration): self
    {
        $this->initialized['statutDeclaration'] = true;
        $this->statutDeclaration = $statutDeclaration;

        return $this;
    }

    public function getStatutTelepaiement(): ?string
    {
        return $this->statutTelepaiement;
    }

    public function setStatutTelepaiement(?string $statutTelepaiement): self
    {
        $this->initialized['statutTelepaiement'] = true;
        $this->statutTelepaiement = $statutTelepaiement;

        return $this;
    }

    public function getTypeMessage(): ?string
    {
        return $this->typeMessage;
    }

    public function setTypeMessage(?string $typeMessage): self
    {
        $this->initialized['typeMessage'] = true;
        $this->typeMessage = $typeMessage;

        return $this;
    }

    public function getMessageTexte(): ?string
    {
        return $this->messageTexte;
    }

    public function setMessageTexte(?string $messageTexte): self
    {
        $this->initialized['messageTexte'] = true;
        $this->messageTexte = $messageTexte;

        return $this;
    }

    public function getMessageBa(): ?string
    {
        return $this->messageBa;
    }

    public function setMessageBa(?string $messageBa): self
    {
        $this->initialized['messageBa'] = true;
        $this->messageBa = $messageBa;

        return $this;
    }

    public function getCrm94NomFichier(): ?string
    {
        return $this->crm94NomFichier;
    }

    public function setCrm94NomFichier(?string $crm94NomFichier): self
    {
        $this->initialized['crm94NomFichier'] = true;
        $this->crm94NomFichier = $crm94NomFichier;

        return $this;
    }

    public function getCrm94Xml(): ?string
    {
        return $this->crm94Xml;
    }

    public function setCrm94Xml(?string $crm94Xml): self
    {
        $this->initialized['crm94Xml'] = true;
        $this->crm94Xml = $crm94Xml;

        return $this;
    }
}
