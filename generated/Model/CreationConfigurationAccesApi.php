<?php

namespace QdequippeTech\Silae\Api\Model;

class CreationConfigurationAccesApi
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
    protected $clientId;

    /**
     * @var string|null
     */
    protected $identifiantUtilisateurSilae;

    /**
     * @var string|null
     */
    protected $idConfiguration;

    /**
     * @var string|null
     */
    protected $niveauAcces;

    /**
     * @var list<string>|null
     */
    protected $dossiers;

    public function getClientId(): ?string
    {
        return $this->clientId;
    }

    public function setClientId(?string $clientId): self
    {
        $this->initialized['clientId'] = true;
        $this->clientId = $clientId;

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

    public function getIdConfiguration(): ?string
    {
        return $this->idConfiguration;
    }

    public function setIdConfiguration(?string $idConfiguration): self
    {
        $this->initialized['idConfiguration'] = true;
        $this->idConfiguration = $idConfiguration;

        return $this;
    }

    public function getNiveauAcces(): ?string
    {
        return $this->niveauAcces;
    }

    public function setNiveauAcces(?string $niveauAcces): self
    {
        $this->initialized['niveauAcces'] = true;
        $this->niveauAcces = $niveauAcces;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getDossiers(): ?array
    {
        return $this->dossiers;
    }

    /**
     * @param list<string>|null $dossiers
     */
    public function setDossiers(?array $dossiers): self
    {
        $this->initialized['dossiers'] = true;
        $this->dossiers = $dossiers;

        return $this;
    }
}
