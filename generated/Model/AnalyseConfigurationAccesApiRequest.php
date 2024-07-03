<?php

namespace QdequippeTech\Silae\Api\Model;

class AnalyseConfigurationAccesApiRequest
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
    protected $nomCompteAPI;

    /**
     * @var string|null
     */
    protected $identifiantUtilisateurSilae;

    /**
     * @var string|null
     */
    protected $numeroDossier;

    /**
     * @var string|null
     */
    protected $statutConfiguration;

    public function getNomCompteAPI(): ?string
    {
        return $this->nomCompteAPI;
    }

    public function setNomCompteAPI(?string $nomCompteAPI): self
    {
        $this->initialized['nomCompteAPI'] = true;
        $this->nomCompteAPI = $nomCompteAPI;

        return $this;
    }

    public function getIdentifiantUtilisateurSilae(): ?string
    {
        return $this->identifiantUtilisateurSilae;
    }

    public function setIdentifiantUtilisateurSilae(?string $identifiantUtilisateurSilae): self
    {
        $this->initialized['identifiantUtilisateurSilae'] = true;
        $this->identifiantUtilisateurSilae = $identifiantUtilisateurSilae;

        return $this;
    }

    public function getNumeroDossier(): ?string
    {
        return $this->numeroDossier;
    }

    public function setNumeroDossier(?string $numeroDossier): self
    {
        $this->initialized['numeroDossier'] = true;
        $this->numeroDossier = $numeroDossier;

        return $this;
    }

    public function getStatutConfiguration(): ?string
    {
        return $this->statutConfiguration;
    }

    public function setStatutConfiguration(?string $statutConfiguration): self
    {
        $this->initialized['statutConfiguration'] = true;
        $this->statutConfiguration = $statutConfiguration;

        return $this;
    }
}
