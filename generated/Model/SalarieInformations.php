<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieInformations
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
     * @var string|null
     */
    protected $numeroSecuriteSociale;

    /**
     * @var string|null
     */
    protected $nomAffiche;

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

    public function getNumeroSecuriteSociale(): ?string
    {
        return $this->numeroSecuriteSociale;
    }

    public function setNumeroSecuriteSociale(?string $numeroSecuriteSociale): self
    {
        $this->initialized['numeroSecuriteSociale'] = true;
        $this->numeroSecuriteSociale = $numeroSecuriteSociale;

        return $this;
    }

    public function getNomAffiche(): ?string
    {
        return $this->nomAffiche;
    }

    public function setNomAffiche(?string $nomAffiche): self
    {
        $this->initialized['nomAffiche'] = true;
        $this->nomAffiche = $nomAffiche;

        return $this;
    }
}
