<?php

namespace QdequippeTech\Silae\Api\Model;

class EtatDeclarationRetour
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
    protected $date;

    /**
     * @var string|null
     */
    protected $nature;

    /**
     * @var string|null
     */
    protected $etat;

    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    public function setDate(?\DateTime $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }

    public function getNature(): ?string
    {
        return $this->nature;
    }

    public function setNature(?string $nature): self
    {
        $this->initialized['nature'] = true;
        $this->nature = $nature;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(?string $etat): self
    {
        $this->initialized['etat'] = true;
        $this->etat = $etat;

        return $this;
    }
}
