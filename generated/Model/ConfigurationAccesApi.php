<?php

namespace QdequippeTech\Silae\Api\Model;

class ConfigurationAccesApi
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
    protected $idConfiguration;

    /**
     * @var string|null
     */
    protected $niveauAcces;

    /**
     * @var string|null
     */
    protected $statutConfiguration;

    /**
     * @var \DateTime|null
     */
    protected $dateCreation;

    /**
     * @var \DateTime|null
     */
    protected $dateModification;

    /**
     * @var list<ConfigurationAccesApiDossier>|null
     */
    protected $dossiers;

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

    public function getDateCreation(): ?\DateTime
    {
        return $this->dateCreation;
    }

    public function setDateCreation(?\DateTime $dateCreation): self
    {
        $this->initialized['dateCreation'] = true;
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getDateModification(): ?\DateTime
    {
        return $this->dateModification;
    }

    public function setDateModification(?\DateTime $dateModification): self
    {
        $this->initialized['dateModification'] = true;
        $this->dateModification = $dateModification;

        return $this;
    }

    /**
     * @return list<ConfigurationAccesApiDossier>|null
     */
    public function getDossiers(): ?array
    {
        return $this->dossiers;
    }

    /**
     * @param list<ConfigurationAccesApiDossier>|null $dossiers
     */
    public function setDossiers(?array $dossiers): self
    {
        $this->initialized['dossiers'] = true;
        $this->dossiers = $dossiers;

        return $this;
    }
}
