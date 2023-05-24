<?php

namespace QdequippeTech\Silae\Api\Model;

class RequeteSalariesBulletins
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
    protected $matriculeSalarie;
    /**
     * @var int|null
     */
    protected $identifiantEmploi;
    /**
     * @var \DateTime|null
     */
    protected $periodeDebut;
    /**
     * @var \DateTime|null
     */
    protected $periodeFin;
    /**
     * @var bool|null
     */
    protected $bulletinsOriginauxSeulement;

    public function getMatriculeSalarie(): ?string
    {
        return $this->matriculeSalarie;
    }

    public function setMatriculeSalarie(?string $matriculeSalarie): self
    {
        $this->initialized['matriculeSalarie'] = true;
        $this->matriculeSalarie = $matriculeSalarie;

        return $this;
    }

    public function getIdentifiantEmploi(): ?int
    {
        return $this->identifiantEmploi;
    }

    public function setIdentifiantEmploi(?int $identifiantEmploi): self
    {
        $this->initialized['identifiantEmploi'] = true;
        $this->identifiantEmploi = $identifiantEmploi;

        return $this;
    }

    public function getPeriodeDebut(): ?\DateTime
    {
        return $this->periodeDebut;
    }

    public function setPeriodeDebut(?\DateTime $periodeDebut): self
    {
        $this->initialized['periodeDebut'] = true;
        $this->periodeDebut = $periodeDebut;

        return $this;
    }

    public function getPeriodeFin(): ?\DateTime
    {
        return $this->periodeFin;
    }

    public function setPeriodeFin(?\DateTime $periodeFin): self
    {
        $this->initialized['periodeFin'] = true;
        $this->periodeFin = $periodeFin;

        return $this;
    }

    public function getBulletinsOriginauxSeulement(): ?bool
    {
        return $this->bulletinsOriginauxSeulement;
    }

    public function setBulletinsOriginauxSeulement(?bool $bulletinsOriginauxSeulement): self
    {
        $this->initialized['bulletinsOriginauxSeulement'] = true;
        $this->bulletinsOriginauxSeulement = $bulletinsOriginauxSeulement;

        return $this;
    }
}
