<?php

namespace QdequippeTech\Silae\Api\Model;

class CompteCollaborateurDroits
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
     * @var bool|null
     */
    protected $administration;
    /**
     * @var bool|null
     */
    protected $administrationCollaborateur;
    /**
     * @var bool|null
     */
    protected $analyseActivitePaie;
    /**
     * @var CompteCollaborateurDroitsUtilisateur|null
     */
    protected $droitsUtilisateur;
    /**
     * @var bool|null
     */
    protected $gestionInterne;
    /**
     * @var bool|null
     */
    protected $gestionInterneSimplifiee;
    /**
     * @var bool|null
     */
    protected $outils;
    /**
     * @var bool|null
     */
    protected $parametragePaie;
    /**
     * @var bool|null
     */
    protected $production;
    /**
     * @var bool|null
     */
    protected $robotPaie;

    public function getAdministration(): ?bool
    {
        return $this->administration;
    }

    public function setAdministration(?bool $administration): self
    {
        $this->initialized['administration'] = true;
        $this->administration = $administration;

        return $this;
    }

    public function getAdministrationCollaborateur(): ?bool
    {
        return $this->administrationCollaborateur;
    }

    public function setAdministrationCollaborateur(?bool $administrationCollaborateur): self
    {
        $this->initialized['administrationCollaborateur'] = true;
        $this->administrationCollaborateur = $administrationCollaborateur;

        return $this;
    }

    public function getAnalyseActivitePaie(): ?bool
    {
        return $this->analyseActivitePaie;
    }

    public function setAnalyseActivitePaie(?bool $analyseActivitePaie): self
    {
        $this->initialized['analyseActivitePaie'] = true;
        $this->analyseActivitePaie = $analyseActivitePaie;

        return $this;
    }

    public function getDroitsUtilisateur(): ?CompteCollaborateurDroitsUtilisateur
    {
        return $this->droitsUtilisateur;
    }

    public function setDroitsUtilisateur(?CompteCollaborateurDroitsUtilisateur $droitsUtilisateur): self
    {
        $this->initialized['droitsUtilisateur'] = true;
        $this->droitsUtilisateur = $droitsUtilisateur;

        return $this;
    }

    public function getGestionInterne(): ?bool
    {
        return $this->gestionInterne;
    }

    public function setGestionInterne(?bool $gestionInterne): self
    {
        $this->initialized['gestionInterne'] = true;
        $this->gestionInterne = $gestionInterne;

        return $this;
    }

    public function getGestionInterneSimplifiee(): ?bool
    {
        return $this->gestionInterneSimplifiee;
    }

    public function setGestionInterneSimplifiee(?bool $gestionInterneSimplifiee): self
    {
        $this->initialized['gestionInterneSimplifiee'] = true;
        $this->gestionInterneSimplifiee = $gestionInterneSimplifiee;

        return $this;
    }

    public function getOutils(): ?bool
    {
        return $this->outils;
    }

    public function setOutils(?bool $outils): self
    {
        $this->initialized['outils'] = true;
        $this->outils = $outils;

        return $this;
    }

    public function getParametragePaie(): ?bool
    {
        return $this->parametragePaie;
    }

    public function setParametragePaie(?bool $parametragePaie): self
    {
        $this->initialized['parametragePaie'] = true;
        $this->parametragePaie = $parametragePaie;

        return $this;
    }

    public function getProduction(): ?bool
    {
        return $this->production;
    }

    public function setProduction(?bool $production): self
    {
        $this->initialized['production'] = true;
        $this->production = $production;

        return $this;
    }

    public function getRobotPaie(): ?bool
    {
        return $this->robotPaie;
    }

    public function setRobotPaie(?bool $robotPaie): self
    {
        $this->initialized['robotPaie'] = true;
        $this->robotPaie = $robotPaie;

        return $this;
    }
}
