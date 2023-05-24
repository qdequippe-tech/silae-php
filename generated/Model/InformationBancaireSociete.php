<?php

namespace QdequippeTech\Silae\Api\Model;

class InformationBancaireSociete
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
    protected $nomInterneEtablissement;
    /**
     * @var string|null
     */
    protected $rib;
    /**
     * @var int|null
     */
    protected $formatFichiers;
    /**
     * @var string|null
     */
    protected $iban;
    /**
     * @var string|null
     */
    protected $bic;
    /**
     * @var string|null
     */
    protected $numeroEmetteur;

    public function getNomInterneEtablissement(): ?string
    {
        return $this->nomInterneEtablissement;
    }

    public function setNomInterneEtablissement(?string $nomInterneEtablissement): self
    {
        $this->initialized['nomInterneEtablissement'] = true;
        $this->nomInterneEtablissement = $nomInterneEtablissement;

        return $this;
    }

    public function getRib(): ?string
    {
        return $this->rib;
    }

    public function setRib(?string $rib): self
    {
        $this->initialized['rib'] = true;
        $this->rib = $rib;

        return $this;
    }

    public function getFormatFichiers(): ?int
    {
        return $this->formatFichiers;
    }

    public function setFormatFichiers(?int $formatFichiers): self
    {
        $this->initialized['formatFichiers'] = true;
        $this->formatFichiers = $formatFichiers;

        return $this;
    }

    public function getIban(): ?string
    {
        return $this->iban;
    }

    public function setIban(?string $iban): self
    {
        $this->initialized['iban'] = true;
        $this->iban = $iban;

        return $this;
    }

    public function getBic(): ?string
    {
        return $this->bic;
    }

    public function setBic(?string $bic): self
    {
        $this->initialized['bic'] = true;
        $this->bic = $bic;

        return $this;
    }

    public function getNumeroEmetteur(): ?string
    {
        return $this->numeroEmetteur;
    }

    public function setNumeroEmetteur(?string $numeroEmetteur): self
    {
        $this->initialized['numeroEmetteur'] = true;
        $this->numeroEmetteur = $numeroEmetteur;

        return $this;
    }
}
