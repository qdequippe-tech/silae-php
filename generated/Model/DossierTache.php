<?php

namespace QdequippeTech\Silae\Api\Model;

class DossierTache
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
     * @var int|null
     */
    protected $nature;
    /**
     * @var int|null
     */
    protected $jour;
    /**
     * @var int|null
     */
    protected $heure;
    /**
     * @var int|null
     */
    protected $minute;
    /**
     * @var string|null
     */
    protected $destinataire;
    /**
     * @var bool|null
     */
    protected $aFaireParLeClient;
    /**
     * @var bool|null
     */
    protected $optionBool1;
    /**
     * @var bool|null
     */
    protected $optionBool2;
    /**
     * @var bool|null
     */
    protected $optionBool3;
    /**
     * @var string|null
     */
    protected $optionString1;
    /**
     * @var int|null
     */
    protected $rappel1Jour;
    /**
     * @var int|null
     */
    protected $rappel1Heure;
    /**
     * @var int|null
     */
    protected $rappel1Minute;
    /**
     * @var string|null
     */
    protected $rappel1Destinataire;
    /**
     * @var int|null
     */
    protected $rappel2Jour;
    /**
     * @var int|null
     */
    protected $rappel2Heure;
    /**
     * @var int|null
     */
    protected $rappel2Minute;
    /**
     * @var string|null
     */
    protected $rappel2Destinataire;
    /**
     * @var int|null
     */
    protected $rappel3Jour;
    /**
     * @var int|null
     */
    protected $rappel3Heure;
    /**
     * @var int|null
     */
    protected $rappel3Minute;
    /**
     * @var string|null
     */
    protected $rappel3Destinataire;
    /**
     * @var int|null
     */
    protected $rappel4Jour;
    /**
     * @var int|null
     */
    protected $rappel4Heure;
    /**
     * @var int|null
     */
    protected $rappel4Minute;
    /**
     * @var string|null
     */
    protected $rappel4Destinataire;
    /**
     * @var int|null
     */
    protected $rappel5Jour;
    /**
     * @var int|null
     */
    protected $rappel5Heure;
    /**
     * @var int|null
     */
    protected $rappel5Minute;
    /**
     * @var string|null
     */
    protected $rappel5Destinataire;
    /**
     * @var bool|null
     */
    protected $supprimerTache;
    /**
     * @var string|null
     */
    protected $nomServeur;
    /**
     * @var string|null
     */
    protected $nomRepertoire;

    public function getNature(): ?int
    {
        return $this->nature;
    }

    public function setNature(?int $nature): self
    {
        $this->initialized['nature'] = true;
        $this->nature = $nature;

        return $this;
    }

    public function getJour(): ?int
    {
        return $this->jour;
    }

    public function setJour(?int $jour): self
    {
        $this->initialized['jour'] = true;
        $this->jour = $jour;

        return $this;
    }

    public function getHeure(): ?int
    {
        return $this->heure;
    }

    public function setHeure(?int $heure): self
    {
        $this->initialized['heure'] = true;
        $this->heure = $heure;

        return $this;
    }

    public function getMinute(): ?int
    {
        return $this->minute;
    }

    public function setMinute(?int $minute): self
    {
        $this->initialized['minute'] = true;
        $this->minute = $minute;

        return $this;
    }

    public function getDestinataire(): ?string
    {
        return $this->destinataire;
    }

    public function setDestinataire(?string $destinataire): self
    {
        $this->initialized['destinataire'] = true;
        $this->destinataire = $destinataire;

        return $this;
    }

    public function getAFaireParLeClient(): ?bool
    {
        return $this->aFaireParLeClient;
    }

    public function setAFaireParLeClient(?bool $aFaireParLeClient): self
    {
        $this->initialized['aFaireParLeClient'] = true;
        $this->aFaireParLeClient = $aFaireParLeClient;

        return $this;
    }

    public function getOptionBool1(): ?bool
    {
        return $this->optionBool1;
    }

    public function setOptionBool1(?bool $optionBool1): self
    {
        $this->initialized['optionBool1'] = true;
        $this->optionBool1 = $optionBool1;

        return $this;
    }

    public function getOptionBool2(): ?bool
    {
        return $this->optionBool2;
    }

    public function setOptionBool2(?bool $optionBool2): self
    {
        $this->initialized['optionBool2'] = true;
        $this->optionBool2 = $optionBool2;

        return $this;
    }

    public function getOptionBool3(): ?bool
    {
        return $this->optionBool3;
    }

    public function setOptionBool3(?bool $optionBool3): self
    {
        $this->initialized['optionBool3'] = true;
        $this->optionBool3 = $optionBool3;

        return $this;
    }

    public function getOptionString1(): ?string
    {
        return $this->optionString1;
    }

    public function setOptionString1(?string $optionString1): self
    {
        $this->initialized['optionString1'] = true;
        $this->optionString1 = $optionString1;

        return $this;
    }

    public function getRappel1Jour(): ?int
    {
        return $this->rappel1Jour;
    }

    public function setRappel1Jour(?int $rappel1Jour): self
    {
        $this->initialized['rappel1Jour'] = true;
        $this->rappel1Jour = $rappel1Jour;

        return $this;
    }

    public function getRappel1Heure(): ?int
    {
        return $this->rappel1Heure;
    }

    public function setRappel1Heure(?int $rappel1Heure): self
    {
        $this->initialized['rappel1Heure'] = true;
        $this->rappel1Heure = $rappel1Heure;

        return $this;
    }

    public function getRappel1Minute(): ?int
    {
        return $this->rappel1Minute;
    }

    public function setRappel1Minute(?int $rappel1Minute): self
    {
        $this->initialized['rappel1Minute'] = true;
        $this->rappel1Minute = $rappel1Minute;

        return $this;
    }

    public function getRappel1Destinataire(): ?string
    {
        return $this->rappel1Destinataire;
    }

    public function setRappel1Destinataire(?string $rappel1Destinataire): self
    {
        $this->initialized['rappel1Destinataire'] = true;
        $this->rappel1Destinataire = $rappel1Destinataire;

        return $this;
    }

    public function getRappel2Jour(): ?int
    {
        return $this->rappel2Jour;
    }

    public function setRappel2Jour(?int $rappel2Jour): self
    {
        $this->initialized['rappel2Jour'] = true;
        $this->rappel2Jour = $rappel2Jour;

        return $this;
    }

    public function getRappel2Heure(): ?int
    {
        return $this->rappel2Heure;
    }

    public function setRappel2Heure(?int $rappel2Heure): self
    {
        $this->initialized['rappel2Heure'] = true;
        $this->rappel2Heure = $rappel2Heure;

        return $this;
    }

    public function getRappel2Minute(): ?int
    {
        return $this->rappel2Minute;
    }

    public function setRappel2Minute(?int $rappel2Minute): self
    {
        $this->initialized['rappel2Minute'] = true;
        $this->rappel2Minute = $rappel2Minute;

        return $this;
    }

    public function getRappel2Destinataire(): ?string
    {
        return $this->rappel2Destinataire;
    }

    public function setRappel2Destinataire(?string $rappel2Destinataire): self
    {
        $this->initialized['rappel2Destinataire'] = true;
        $this->rappel2Destinataire = $rappel2Destinataire;

        return $this;
    }

    public function getRappel3Jour(): ?int
    {
        return $this->rappel3Jour;
    }

    public function setRappel3Jour(?int $rappel3Jour): self
    {
        $this->initialized['rappel3Jour'] = true;
        $this->rappel3Jour = $rappel3Jour;

        return $this;
    }

    public function getRappel3Heure(): ?int
    {
        return $this->rappel3Heure;
    }

    public function setRappel3Heure(?int $rappel3Heure): self
    {
        $this->initialized['rappel3Heure'] = true;
        $this->rappel3Heure = $rappel3Heure;

        return $this;
    }

    public function getRappel3Minute(): ?int
    {
        return $this->rappel3Minute;
    }

    public function setRappel3Minute(?int $rappel3Minute): self
    {
        $this->initialized['rappel3Minute'] = true;
        $this->rappel3Minute = $rappel3Minute;

        return $this;
    }

    public function getRappel3Destinataire(): ?string
    {
        return $this->rappel3Destinataire;
    }

    public function setRappel3Destinataire(?string $rappel3Destinataire): self
    {
        $this->initialized['rappel3Destinataire'] = true;
        $this->rappel3Destinataire = $rappel3Destinataire;

        return $this;
    }

    public function getRappel4Jour(): ?int
    {
        return $this->rappel4Jour;
    }

    public function setRappel4Jour(?int $rappel4Jour): self
    {
        $this->initialized['rappel4Jour'] = true;
        $this->rappel4Jour = $rappel4Jour;

        return $this;
    }

    public function getRappel4Heure(): ?int
    {
        return $this->rappel4Heure;
    }

    public function setRappel4Heure(?int $rappel4Heure): self
    {
        $this->initialized['rappel4Heure'] = true;
        $this->rappel4Heure = $rappel4Heure;

        return $this;
    }

    public function getRappel4Minute(): ?int
    {
        return $this->rappel4Minute;
    }

    public function setRappel4Minute(?int $rappel4Minute): self
    {
        $this->initialized['rappel4Minute'] = true;
        $this->rappel4Minute = $rappel4Minute;

        return $this;
    }

    public function getRappel4Destinataire(): ?string
    {
        return $this->rappel4Destinataire;
    }

    public function setRappel4Destinataire(?string $rappel4Destinataire): self
    {
        $this->initialized['rappel4Destinataire'] = true;
        $this->rappel4Destinataire = $rappel4Destinataire;

        return $this;
    }

    public function getRappel5Jour(): ?int
    {
        return $this->rappel5Jour;
    }

    public function setRappel5Jour(?int $rappel5Jour): self
    {
        $this->initialized['rappel5Jour'] = true;
        $this->rappel5Jour = $rappel5Jour;

        return $this;
    }

    public function getRappel5Heure(): ?int
    {
        return $this->rappel5Heure;
    }

    public function setRappel5Heure(?int $rappel5Heure): self
    {
        $this->initialized['rappel5Heure'] = true;
        $this->rappel5Heure = $rappel5Heure;

        return $this;
    }

    public function getRappel5Minute(): ?int
    {
        return $this->rappel5Minute;
    }

    public function setRappel5Minute(?int $rappel5Minute): self
    {
        $this->initialized['rappel5Minute'] = true;
        $this->rappel5Minute = $rappel5Minute;

        return $this;
    }

    public function getRappel5Destinataire(): ?string
    {
        return $this->rappel5Destinataire;
    }

    public function setRappel5Destinataire(?string $rappel5Destinataire): self
    {
        $this->initialized['rappel5Destinataire'] = true;
        $this->rappel5Destinataire = $rappel5Destinataire;

        return $this;
    }

    public function getSupprimerTache(): ?bool
    {
        return $this->supprimerTache;
    }

    public function setSupprimerTache(?bool $supprimerTache): self
    {
        $this->initialized['supprimerTache'] = true;
        $this->supprimerTache = $supprimerTache;

        return $this;
    }

    public function getNomServeur(): ?string
    {
        return $this->nomServeur;
    }

    public function setNomServeur(?string $nomServeur): self
    {
        $this->initialized['nomServeur'] = true;
        $this->nomServeur = $nomServeur;

        return $this;
    }

    public function getNomRepertoire(): ?string
    {
        return $this->nomRepertoire;
    }

    public function setNomRepertoire(?string $nomRepertoire): self
    {
        $this->initialized['nomRepertoire'] = true;
        $this->nomRepertoire = $nomRepertoire;

        return $this;
    }
}
