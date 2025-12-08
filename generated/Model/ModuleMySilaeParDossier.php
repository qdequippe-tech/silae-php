<?php

namespace QdequippeTech\Silae\Api\Model;

class ModuleMySilaeParDossier
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
    protected $codeModule;

    /**
     * @var int|null
     */
    protected $codeEtat;

    /**
     * @var string|null
     */
    protected $libelleEtat;

    /**
     * @var \DateTime|null
     */
    protected $dateDernierChangementEtat;

    /**
     * @var string|null
     */
    protected $utilisateurDernierChangementEtat;

    public function getCodeModule(): ?string
    {
        return $this->codeModule;
    }

    public function setCodeModule(?string $codeModule): self
    {
        $this->initialized['codeModule'] = true;
        $this->codeModule = $codeModule;

        return $this;
    }

    public function getCodeEtat(): ?int
    {
        return $this->codeEtat;
    }

    public function setCodeEtat(?int $codeEtat): self
    {
        $this->initialized['codeEtat'] = true;
        $this->codeEtat = $codeEtat;

        return $this;
    }

    public function getLibelleEtat(): ?string
    {
        return $this->libelleEtat;
    }

    public function setLibelleEtat(?string $libelleEtat): self
    {
        $this->initialized['libelleEtat'] = true;
        $this->libelleEtat = $libelleEtat;

        return $this;
    }

    public function getDateDernierChangementEtat(): ?\DateTime
    {
        return $this->dateDernierChangementEtat;
    }

    public function setDateDernierChangementEtat(?\DateTime $dateDernierChangementEtat): self
    {
        $this->initialized['dateDernierChangementEtat'] = true;
        $this->dateDernierChangementEtat = $dateDernierChangementEtat;

        return $this;
    }

    public function getUtilisateurDernierChangementEtat(): ?string
    {
        return $this->utilisateurDernierChangementEtat;
    }

    public function setUtilisateurDernierChangementEtat(?string $utilisateurDernierChangementEtat): self
    {
        $this->initialized['utilisateurDernierChangementEtat'] = true;
        $this->utilisateurDernierChangementEtat = $utilisateurDernierChangementEtat;

        return $this;
    }
}
