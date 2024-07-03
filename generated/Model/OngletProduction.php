<?php

namespace QdequippeTech\Silae\Api\Model;

class OngletProduction
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
    protected $nomOnglet;

    /**
     * @var bool|null
     */
    protected $aSupprimer;

    /**
     * @var int|null
     */
    protected $ordre;

    /**
     * @var string|null
     */
    protected $nouveauNomOnglet;

    /**
     * @var bool|null
     */
    protected $paramPaieGestion;

    /**
     * @var bool|null
     */
    protected $paramPaieLiaisonClient;

    /**
     * @var bool|null
     */
    protected $paramPaieComplet;

    /**
     * @var bool|null
     */
    protected $paramPaieSimplifie;

    /**
     * @var bool|null
     */
    protected $afficherLaListe;

    /**
     * @var bool|null
     */
    protected $restreindreLaListe;

    /**
     * @var string|null
     */
    protected $requeteFiltre;

    public function getNomOnglet(): ?string
    {
        return $this->nomOnglet;
    }

    public function setNomOnglet(?string $nomOnglet): self
    {
        $this->initialized['nomOnglet'] = true;
        $this->nomOnglet = $nomOnglet;

        return $this;
    }

    public function getASupprimer(): ?bool
    {
        return $this->aSupprimer;
    }

    public function setASupprimer(?bool $aSupprimer): self
    {
        $this->initialized['aSupprimer'] = true;
        $this->aSupprimer = $aSupprimer;

        return $this;
    }

    public function getOrdre(): ?int
    {
        return $this->ordre;
    }

    public function setOrdre(?int $ordre): self
    {
        $this->initialized['ordre'] = true;
        $this->ordre = $ordre;

        return $this;
    }

    public function getNouveauNomOnglet(): ?string
    {
        return $this->nouveauNomOnglet;
    }

    public function setNouveauNomOnglet(?string $nouveauNomOnglet): self
    {
        $this->initialized['nouveauNomOnglet'] = true;
        $this->nouveauNomOnglet = $nouveauNomOnglet;

        return $this;
    }

    public function getParamPaieGestion(): ?bool
    {
        return $this->paramPaieGestion;
    }

    public function setParamPaieGestion(?bool $paramPaieGestion): self
    {
        $this->initialized['paramPaieGestion'] = true;
        $this->paramPaieGestion = $paramPaieGestion;

        return $this;
    }

    public function getParamPaieLiaisonClient(): ?bool
    {
        return $this->paramPaieLiaisonClient;
    }

    public function setParamPaieLiaisonClient(?bool $paramPaieLiaisonClient): self
    {
        $this->initialized['paramPaieLiaisonClient'] = true;
        $this->paramPaieLiaisonClient = $paramPaieLiaisonClient;

        return $this;
    }

    public function getParamPaieComplet(): ?bool
    {
        return $this->paramPaieComplet;
    }

    public function setParamPaieComplet(?bool $paramPaieComplet): self
    {
        $this->initialized['paramPaieComplet'] = true;
        $this->paramPaieComplet = $paramPaieComplet;

        return $this;
    }

    public function getParamPaieSimplifie(): ?bool
    {
        return $this->paramPaieSimplifie;
    }

    public function setParamPaieSimplifie(?bool $paramPaieSimplifie): self
    {
        $this->initialized['paramPaieSimplifie'] = true;
        $this->paramPaieSimplifie = $paramPaieSimplifie;

        return $this;
    }

    public function getAfficherLaListe(): ?bool
    {
        return $this->afficherLaListe;
    }

    public function setAfficherLaListe(?bool $afficherLaListe): self
    {
        $this->initialized['afficherLaListe'] = true;
        $this->afficherLaListe = $afficherLaListe;

        return $this;
    }

    public function getRestreindreLaListe(): ?bool
    {
        return $this->restreindreLaListe;
    }

    public function setRestreindreLaListe(?bool $restreindreLaListe): self
    {
        $this->initialized['restreindreLaListe'] = true;
        $this->restreindreLaListe = $restreindreLaListe;

        return $this;
    }

    public function getRequeteFiltre(): ?string
    {
        return $this->requeteFiltre;
    }

    public function setRequeteFiltre(?string $requeteFiltre): self
    {
        $this->initialized['requeteFiltre'] = true;
        $this->requeteFiltre = $requeteFiltre;

        return $this;
    }
}
