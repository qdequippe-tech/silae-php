<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieCumuls
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
    protected $cpModifierCumuls;
    /**
     * @var float|null
     */
    protected $cpAcquisParReportN1;
    /**
     * @var float|null
     */
    protected $cpAcquisParAncienneteN1;
    /**
     * @var float|null
     */
    protected $cpAcquisParFractionnementN1;
    /**
     * @var float|null
     */
    protected $cpTotalAcquisN1;
    /**
     * @var float|null
     */
    protected $cpTotalPrisN1;
    /**
     * @var float|null
     */
    protected $cpProvisionAcquiseParReportN1;
    /**
     * @var float|null
     */
    protected $cpTotalProvisionAcquiseN1;
    /**
     * @var float|null
     */
    protected $cpTotalProvisionConsommeeN1;
    /**
     * @var float|null
     */
    protected $cpTotalAcquisN;
    /**
     * @var float|null
     */
    protected $cpTotalPrisN;
    /**
     * @var float|null
     */
    protected $cpTotalProvisionAcquiseN;
    /**
     * @var float|null
     */
    protected $cpTotalProvisionConsommeeN;
    /**
     * @var bool|null
     */
    protected $rttModifierCumuls;
    /**
     * @var float|null
     */
    protected $rttJoursAcquis;
    /**
     * @var float|null
     */
    protected $rttJoursPris;
    /**
     * @var bool|null
     */
    protected $rcrModifierCumuls;
    /**
     * @var float|null
     */
    protected $rcrHeuresAcquises;
    /**
     * @var float|null
     */
    protected $rcrHeuresPrises;
    /**
     * @var bool|null
     */
    protected $rccModifierCumuls;
    /**
     * @var float|null
     */
    protected $rccHeuresAcquises;
    /**
     * @var float|null
     */
    protected $rccHeuresPrises;
    /**
     * @var bool|null
     */
    protected $rcoModifierCumuls;
    /**
     * @var float|null
     */
    protected $rcoHeuresAcquises;
    /**
     * @var float|null
     */
    protected $rcoHeuresPrises;

    public function getCpModifierCumuls(): ?bool
    {
        return $this->cpModifierCumuls;
    }

    public function setCpModifierCumuls(?bool $cpModifierCumuls): self
    {
        $this->initialized['cpModifierCumuls'] = true;
        $this->cpModifierCumuls = $cpModifierCumuls;

        return $this;
    }

    public function getCpAcquisParReportN1(): ?float
    {
        return $this->cpAcquisParReportN1;
    }

    public function setCpAcquisParReportN1(?float $cpAcquisParReportN1): self
    {
        $this->initialized['cpAcquisParReportN1'] = true;
        $this->cpAcquisParReportN1 = $cpAcquisParReportN1;

        return $this;
    }

    public function getCpAcquisParAncienneteN1(): ?float
    {
        return $this->cpAcquisParAncienneteN1;
    }

    public function setCpAcquisParAncienneteN1(?float $cpAcquisParAncienneteN1): self
    {
        $this->initialized['cpAcquisParAncienneteN1'] = true;
        $this->cpAcquisParAncienneteN1 = $cpAcquisParAncienneteN1;

        return $this;
    }

    public function getCpAcquisParFractionnementN1(): ?float
    {
        return $this->cpAcquisParFractionnementN1;
    }

    public function setCpAcquisParFractionnementN1(?float $cpAcquisParFractionnementN1): self
    {
        $this->initialized['cpAcquisParFractionnementN1'] = true;
        $this->cpAcquisParFractionnementN1 = $cpAcquisParFractionnementN1;

        return $this;
    }

    public function getCpTotalAcquisN1(): ?float
    {
        return $this->cpTotalAcquisN1;
    }

    public function setCpTotalAcquisN1(?float $cpTotalAcquisN1): self
    {
        $this->initialized['cpTotalAcquisN1'] = true;
        $this->cpTotalAcquisN1 = $cpTotalAcquisN1;

        return $this;
    }

    public function getCpTotalPrisN1(): ?float
    {
        return $this->cpTotalPrisN1;
    }

    public function setCpTotalPrisN1(?float $cpTotalPrisN1): self
    {
        $this->initialized['cpTotalPrisN1'] = true;
        $this->cpTotalPrisN1 = $cpTotalPrisN1;

        return $this;
    }

    public function getCpProvisionAcquiseParReportN1(): ?float
    {
        return $this->cpProvisionAcquiseParReportN1;
    }

    public function setCpProvisionAcquiseParReportN1(?float $cpProvisionAcquiseParReportN1): self
    {
        $this->initialized['cpProvisionAcquiseParReportN1'] = true;
        $this->cpProvisionAcquiseParReportN1 = $cpProvisionAcquiseParReportN1;

        return $this;
    }

    public function getCpTotalProvisionAcquiseN1(): ?float
    {
        return $this->cpTotalProvisionAcquiseN1;
    }

    public function setCpTotalProvisionAcquiseN1(?float $cpTotalProvisionAcquiseN1): self
    {
        $this->initialized['cpTotalProvisionAcquiseN1'] = true;
        $this->cpTotalProvisionAcquiseN1 = $cpTotalProvisionAcquiseN1;

        return $this;
    }

    public function getCpTotalProvisionConsommeeN1(): ?float
    {
        return $this->cpTotalProvisionConsommeeN1;
    }

    public function setCpTotalProvisionConsommeeN1(?float $cpTotalProvisionConsommeeN1): self
    {
        $this->initialized['cpTotalProvisionConsommeeN1'] = true;
        $this->cpTotalProvisionConsommeeN1 = $cpTotalProvisionConsommeeN1;

        return $this;
    }

    public function getCpTotalAcquisN(): ?float
    {
        return $this->cpTotalAcquisN;
    }

    public function setCpTotalAcquisN(?float $cpTotalAcquisN): self
    {
        $this->initialized['cpTotalAcquisN'] = true;
        $this->cpTotalAcquisN = $cpTotalAcquisN;

        return $this;
    }

    public function getCpTotalPrisN(): ?float
    {
        return $this->cpTotalPrisN;
    }

    public function setCpTotalPrisN(?float $cpTotalPrisN): self
    {
        $this->initialized['cpTotalPrisN'] = true;
        $this->cpTotalPrisN = $cpTotalPrisN;

        return $this;
    }

    public function getCpTotalProvisionAcquiseN(): ?float
    {
        return $this->cpTotalProvisionAcquiseN;
    }

    public function setCpTotalProvisionAcquiseN(?float $cpTotalProvisionAcquiseN): self
    {
        $this->initialized['cpTotalProvisionAcquiseN'] = true;
        $this->cpTotalProvisionAcquiseN = $cpTotalProvisionAcquiseN;

        return $this;
    }

    public function getCpTotalProvisionConsommeeN(): ?float
    {
        return $this->cpTotalProvisionConsommeeN;
    }

    public function setCpTotalProvisionConsommeeN(?float $cpTotalProvisionConsommeeN): self
    {
        $this->initialized['cpTotalProvisionConsommeeN'] = true;
        $this->cpTotalProvisionConsommeeN = $cpTotalProvisionConsommeeN;

        return $this;
    }

    public function getRttModifierCumuls(): ?bool
    {
        return $this->rttModifierCumuls;
    }

    public function setRttModifierCumuls(?bool $rttModifierCumuls): self
    {
        $this->initialized['rttModifierCumuls'] = true;
        $this->rttModifierCumuls = $rttModifierCumuls;

        return $this;
    }

    public function getRttJoursAcquis(): ?float
    {
        return $this->rttJoursAcquis;
    }

    public function setRttJoursAcquis(?float $rttJoursAcquis): self
    {
        $this->initialized['rttJoursAcquis'] = true;
        $this->rttJoursAcquis = $rttJoursAcquis;

        return $this;
    }

    public function getRttJoursPris(): ?float
    {
        return $this->rttJoursPris;
    }

    public function setRttJoursPris(?float $rttJoursPris): self
    {
        $this->initialized['rttJoursPris'] = true;
        $this->rttJoursPris = $rttJoursPris;

        return $this;
    }

    public function getRcrModifierCumuls(): ?bool
    {
        return $this->rcrModifierCumuls;
    }

    public function setRcrModifierCumuls(?bool $rcrModifierCumuls): self
    {
        $this->initialized['rcrModifierCumuls'] = true;
        $this->rcrModifierCumuls = $rcrModifierCumuls;

        return $this;
    }

    public function getRcrHeuresAcquises(): ?float
    {
        return $this->rcrHeuresAcquises;
    }

    public function setRcrHeuresAcquises(?float $rcrHeuresAcquises): self
    {
        $this->initialized['rcrHeuresAcquises'] = true;
        $this->rcrHeuresAcquises = $rcrHeuresAcquises;

        return $this;
    }

    public function getRcrHeuresPrises(): ?float
    {
        return $this->rcrHeuresPrises;
    }

    public function setRcrHeuresPrises(?float $rcrHeuresPrises): self
    {
        $this->initialized['rcrHeuresPrises'] = true;
        $this->rcrHeuresPrises = $rcrHeuresPrises;

        return $this;
    }

    public function getRccModifierCumuls(): ?bool
    {
        return $this->rccModifierCumuls;
    }

    public function setRccModifierCumuls(?bool $rccModifierCumuls): self
    {
        $this->initialized['rccModifierCumuls'] = true;
        $this->rccModifierCumuls = $rccModifierCumuls;

        return $this;
    }

    public function getRccHeuresAcquises(): ?float
    {
        return $this->rccHeuresAcquises;
    }

    public function setRccHeuresAcquises(?float $rccHeuresAcquises): self
    {
        $this->initialized['rccHeuresAcquises'] = true;
        $this->rccHeuresAcquises = $rccHeuresAcquises;

        return $this;
    }

    public function getRccHeuresPrises(): ?float
    {
        return $this->rccHeuresPrises;
    }

    public function setRccHeuresPrises(?float $rccHeuresPrises): self
    {
        $this->initialized['rccHeuresPrises'] = true;
        $this->rccHeuresPrises = $rccHeuresPrises;

        return $this;
    }

    public function getRcoModifierCumuls(): ?bool
    {
        return $this->rcoModifierCumuls;
    }

    public function setRcoModifierCumuls(?bool $rcoModifierCumuls): self
    {
        $this->initialized['rcoModifierCumuls'] = true;
        $this->rcoModifierCumuls = $rcoModifierCumuls;

        return $this;
    }

    public function getRcoHeuresAcquises(): ?float
    {
        return $this->rcoHeuresAcquises;
    }

    public function setRcoHeuresAcquises(?float $rcoHeuresAcquises): self
    {
        $this->initialized['rcoHeuresAcquises'] = true;
        $this->rcoHeuresAcquises = $rcoHeuresAcquises;

        return $this;
    }

    public function getRcoHeuresPrises(): ?float
    {
        return $this->rcoHeuresPrises;
    }

    public function setRcoHeuresPrises(?float $rcoHeuresPrises): self
    {
        $this->initialized['rcoHeuresPrises'] = true;
        $this->rcoHeuresPrises = $rcoHeuresPrises;

        return $this;
    }
}
