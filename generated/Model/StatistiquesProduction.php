<?php

namespace QdequippeTech\Silae\Api\Model;

class StatistiquesProduction
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
     * @var \DateTime|null
     */
    protected $periode;

    /**
     * @var int|null
     */
    protected $nbBulletinsOriginaux;

    /**
     * @var int|null
     */
    protected $nbBulletinsOriginauxACalculer;

    /**
     * @var int|null
     */
    protected $nbEntrees;

    /**
     * @var int|null
     */
    protected $nbSorties;

    /**
     * @var int|null
     */
    protected $nbDeclarations;

    /**
     * @var int|null
     */
    protected $nbDUE;

    /**
     * @var int|null
     */
    protected $nbAttestationsPoleEmploi;

    /**
     * @var int|null
     */
    protected $nbIJSS;

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

    public function getNbBulletinsOriginaux(): ?int
    {
        return $this->nbBulletinsOriginaux;
    }

    public function setNbBulletinsOriginaux(?int $nbBulletinsOriginaux): self
    {
        $this->initialized['nbBulletinsOriginaux'] = true;
        $this->nbBulletinsOriginaux = $nbBulletinsOriginaux;

        return $this;
    }

    public function getNbBulletinsOriginauxACalculer(): ?int
    {
        return $this->nbBulletinsOriginauxACalculer;
    }

    public function setNbBulletinsOriginauxACalculer(?int $nbBulletinsOriginauxACalculer): self
    {
        $this->initialized['nbBulletinsOriginauxACalculer'] = true;
        $this->nbBulletinsOriginauxACalculer = $nbBulletinsOriginauxACalculer;

        return $this;
    }

    public function getNbEntrees(): ?int
    {
        return $this->nbEntrees;
    }

    public function setNbEntrees(?int $nbEntrees): self
    {
        $this->initialized['nbEntrees'] = true;
        $this->nbEntrees = $nbEntrees;

        return $this;
    }

    public function getNbSorties(): ?int
    {
        return $this->nbSorties;
    }

    public function setNbSorties(?int $nbSorties): self
    {
        $this->initialized['nbSorties'] = true;
        $this->nbSorties = $nbSorties;

        return $this;
    }

    public function getNbDeclarations(): ?int
    {
        return $this->nbDeclarations;
    }

    public function setNbDeclarations(?int $nbDeclarations): self
    {
        $this->initialized['nbDeclarations'] = true;
        $this->nbDeclarations = $nbDeclarations;

        return $this;
    }

    public function getNbDUE(): ?int
    {
        return $this->nbDUE;
    }

    public function setNbDUE(?int $nbDUE): self
    {
        $this->initialized['nbDUE'] = true;
        $this->nbDUE = $nbDUE;

        return $this;
    }

    public function getNbAttestationsPoleEmploi(): ?int
    {
        return $this->nbAttestationsPoleEmploi;
    }

    public function setNbAttestationsPoleEmploi(?int $nbAttestationsPoleEmploi): self
    {
        $this->initialized['nbAttestationsPoleEmploi'] = true;
        $this->nbAttestationsPoleEmploi = $nbAttestationsPoleEmploi;

        return $this;
    }

    public function getNbIJSS(): ?int
    {
        return $this->nbIJSS;
    }

    public function setNbIJSS(?int $nbIJSS): self
    {
        $this->initialized['nbIJSS'] = true;
        $this->nbIJSS = $nbIJSS;

        return $this;
    }
}
