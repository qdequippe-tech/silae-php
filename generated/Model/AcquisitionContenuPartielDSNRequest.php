<?php

namespace QdequippeTech\Silae\Api\Model;

class AcquisitionContenuPartielDSNRequest
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
    protected $codeOrganisme;

    /**
     * @var string|null
     */
    protected $numeroAffiliation;

    /**
     * @var int|null
     */
    protected $typeDSN;

    /**
     * @var list<string>|null
     */
    protected $segments;

    /**
     * @var int|null
     */
    protected $fraction;

    /**
     * @var \DateTime|null
     */
    protected $periode;

    /**
     * @var string|null
     */
    protected $numeroDossier;

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

    public function getCodeOrganisme(): ?string
    {
        return $this->codeOrganisme;
    }

    public function setCodeOrganisme(?string $codeOrganisme): self
    {
        $this->initialized['codeOrganisme'] = true;
        $this->codeOrganisme = $codeOrganisme;

        return $this;
    }

    public function getNumeroAffiliation(): ?string
    {
        return $this->numeroAffiliation;
    }

    public function setNumeroAffiliation(?string $numeroAffiliation): self
    {
        $this->initialized['numeroAffiliation'] = true;
        $this->numeroAffiliation = $numeroAffiliation;

        return $this;
    }

    public function getTypeDSN(): ?int
    {
        return $this->typeDSN;
    }

    public function setTypeDSN(?int $typeDSN): self
    {
        $this->initialized['typeDSN'] = true;
        $this->typeDSN = $typeDSN;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getSegments(): ?array
    {
        return $this->segments;
    }

    /**
     * @param list<string>|null $segments
     */
    public function setSegments(?array $segments): self
    {
        $this->initialized['segments'] = true;
        $this->segments = $segments;

        return $this;
    }

    public function getFraction(): ?int
    {
        return $this->fraction;
    }

    public function setFraction(?int $fraction): self
    {
        $this->initialized['fraction'] = true;
        $this->fraction = $fraction;

        return $this;
    }

    public function getPeriode(): ?\DateTime
    {
        return $this->periode;
    }

    public function setPeriode(?\DateTime $periode): self
    {
        $this->initialized['periode'] = true;
        $this->periode = $periode;

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
}
