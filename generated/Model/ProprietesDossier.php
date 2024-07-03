<?php

namespace QdequippeTech\Silae\Api\Model;

class ProprietesDossier
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
    protected $numero;

    /**
     * @var string|null
     */
    protected $raisonSociale;

    /**
     * @var string|null
     */
    protected $siret;

    /**
     * @var string|null
     */
    protected $groupe;

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(?string $numero): self
    {
        $this->initialized['numero'] = true;
        $this->numero = $numero;

        return $this;
    }

    public function getRaisonSociale(): ?string
    {
        return $this->raisonSociale;
    }

    public function setRaisonSociale(?string $raisonSociale): self
    {
        $this->initialized['raisonSociale'] = true;
        $this->raisonSociale = $raisonSociale;

        return $this;
    }

    public function getSiret(): ?string
    {
        return $this->siret;
    }

    public function setSiret(?string $siret): self
    {
        $this->initialized['siret'] = true;
        $this->siret = $siret;

        return $this;
    }

    public function getGroupe(): ?string
    {
        return $this->groupe;
    }

    public function setGroupe(?string $groupe): self
    {
        $this->initialized['groupe'] = true;
        $this->groupe = $groupe;

        return $this;
    }
}
