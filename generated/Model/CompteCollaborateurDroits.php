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
     * Droits à l'onglet administration             SILAE_SYS.DROIT.DRT_SysDroitAdministration.
     *
     * @var bool|null
     */
    protected $administration;

    /**
     * Droits à l'onglet Admin. Collaborateurs             SILAE_SYS.DROIT.DRT_SysDroitAdminCollaborateur.
     *
     * @var bool|null
     */
    protected $administrationCollaborateur;

    /**
     * Droits à l'onglet Analyse de l’activité sur la paie             SILAE_SYS.DROIT.DRT_SysDroitAnalyseActivitePAI.
     *
     * @var bool|null
     */
    protected $analyseActivitePaie;

    /**
     * @var CompteCollaborateurDroitsUtilisateur|null
     */
    protected $droitsUtilisateur;

    /**
     * Droits à l'onglet Gestion interne             SILAE_SYS.DROIT.DRT_SysDroitGi.
     *
     * @var bool|null
     */
    protected $gestionInterne;

    /**
     * Droits à l'onglet Gestion interne simplifié             SILAE_SYS.DROIT.DRT_SysDroitGiSimplifiee.
     *
     * @var bool|null
     */
    protected $gestionInterneSimplifiee;

    /**
     * Droits à l'onglet Outils             SILAE_SYS.DROIT.DRT_SysDroitOutils.
     *
     * @var bool|null
     */
    protected $outils;

    /**
     * Droits à l'onglet Paramétrage de paie commun à tous les dossiers             SILAE_SYS.DROIT.DRT_SysDroitParamPaie.
     *
     * @var bool|null
     */
    protected $parametragePaie;

    /**
     * Droits à l'onglet Production             SILAE_SYS.DROIT.DRT_SysDroitProd.
     *
     * @var bool|null
     */
    protected $production;

    /**
     * Droits à l'onglet Robot de paie             SILAE_SYS.DROIT.DRT_SysDroitPaiRobot.
     *
     * @var bool|null
     */
    protected $robotPaie;

    /**
     * @var bool|null
     */
    protected $pilotageProjet;

    /**
     * @var bool|null
     */
    protected $centreNotifications;

    /**
     * Droits à l'onglet administration             SILAE_SYS.DROIT.DRT_SysDroitAdministration.
     */
    public function getAdministration(): ?bool
    {
        return $this->administration;
    }

    /**
     * Droits à l'onglet administration             SILAE_SYS.DROIT.DRT_SysDroitAdministration.
     */
    public function setAdministration(?bool $administration): self
    {
        $this->initialized['administration'] = true;
        $this->administration = $administration;

        return $this;
    }

    /**
     * Droits à l'onglet Admin. Collaborateurs             SILAE_SYS.DROIT.DRT_SysDroitAdminCollaborateur.
     */
    public function getAdministrationCollaborateur(): ?bool
    {
        return $this->administrationCollaborateur;
    }

    /**
     * Droits à l'onglet Admin. Collaborateurs             SILAE_SYS.DROIT.DRT_SysDroitAdminCollaborateur.
     */
    public function setAdministrationCollaborateur(?bool $administrationCollaborateur): self
    {
        $this->initialized['administrationCollaborateur'] = true;
        $this->administrationCollaborateur = $administrationCollaborateur;

        return $this;
    }

    /**
     * Droits à l'onglet Analyse de l’activité sur la paie             SILAE_SYS.DROIT.DRT_SysDroitAnalyseActivitePAI.
     */
    public function getAnalyseActivitePaie(): ?bool
    {
        return $this->analyseActivitePaie;
    }

    /**
     * Droits à l'onglet Analyse de l’activité sur la paie             SILAE_SYS.DROIT.DRT_SysDroitAnalyseActivitePAI.
     */
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

    /**
     * Droits à l'onglet Gestion interne             SILAE_SYS.DROIT.DRT_SysDroitGi.
     */
    public function getGestionInterne(): ?bool
    {
        return $this->gestionInterne;
    }

    /**
     * Droits à l'onglet Gestion interne             SILAE_SYS.DROIT.DRT_SysDroitGi.
     */
    public function setGestionInterne(?bool $gestionInterne): self
    {
        $this->initialized['gestionInterne'] = true;
        $this->gestionInterne = $gestionInterne;

        return $this;
    }

    /**
     * Droits à l'onglet Gestion interne simplifié             SILAE_SYS.DROIT.DRT_SysDroitGiSimplifiee.
     */
    public function getGestionInterneSimplifiee(): ?bool
    {
        return $this->gestionInterneSimplifiee;
    }

    /**
     * Droits à l'onglet Gestion interne simplifié             SILAE_SYS.DROIT.DRT_SysDroitGiSimplifiee.
     */
    public function setGestionInterneSimplifiee(?bool $gestionInterneSimplifiee): self
    {
        $this->initialized['gestionInterneSimplifiee'] = true;
        $this->gestionInterneSimplifiee = $gestionInterneSimplifiee;

        return $this;
    }

    /**
     * Droits à l'onglet Outils             SILAE_SYS.DROIT.DRT_SysDroitOutils.
     */
    public function getOutils(): ?bool
    {
        return $this->outils;
    }

    /**
     * Droits à l'onglet Outils             SILAE_SYS.DROIT.DRT_SysDroitOutils.
     */
    public function setOutils(?bool $outils): self
    {
        $this->initialized['outils'] = true;
        $this->outils = $outils;

        return $this;
    }

    /**
     * Droits à l'onglet Paramétrage de paie commun à tous les dossiers             SILAE_SYS.DROIT.DRT_SysDroitParamPaie.
     */
    public function getParametragePaie(): ?bool
    {
        return $this->parametragePaie;
    }

    /**
     * Droits à l'onglet Paramétrage de paie commun à tous les dossiers             SILAE_SYS.DROIT.DRT_SysDroitParamPaie.
     */
    public function setParametragePaie(?bool $parametragePaie): self
    {
        $this->initialized['parametragePaie'] = true;
        $this->parametragePaie = $parametragePaie;

        return $this;
    }

    /**
     * Droits à l'onglet Production             SILAE_SYS.DROIT.DRT_SysDroitProd.
     */
    public function getProduction(): ?bool
    {
        return $this->production;
    }

    /**
     * Droits à l'onglet Production             SILAE_SYS.DROIT.DRT_SysDroitProd.
     */
    public function setProduction(?bool $production): self
    {
        $this->initialized['production'] = true;
        $this->production = $production;

        return $this;
    }

    /**
     * Droits à l'onglet Robot de paie             SILAE_SYS.DROIT.DRT_SysDroitPaiRobot.
     */
    public function getRobotPaie(): ?bool
    {
        return $this->robotPaie;
    }

    /**
     * Droits à l'onglet Robot de paie             SILAE_SYS.DROIT.DRT_SysDroitPaiRobot.
     */
    public function setRobotPaie(?bool $robotPaie): self
    {
        $this->initialized['robotPaie'] = true;
        $this->robotPaie = $robotPaie;

        return $this;
    }

    public function getPilotageProjet(): ?bool
    {
        return $this->pilotageProjet;
    }

    public function setPilotageProjet(?bool $pilotageProjet): self
    {
        $this->initialized['pilotageProjet'] = true;
        $this->pilotageProjet = $pilotageProjet;

        return $this;
    }

    public function getCentreNotifications(): ?bool
    {
        return $this->centreNotifications;
    }

    public function setCentreNotifications(?bool $centreNotifications): self
    {
        $this->initialized['centreNotifications'] = true;
        $this->centreNotifications = $centreNotifications;

        return $this;
    }
}
