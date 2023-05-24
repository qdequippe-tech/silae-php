<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieDUE
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
    protected $nomInterneEtablissement;
    /**
     * @var \DateTime|null
     */
    protected $dateEmbauche;
    /**
     * @var \DateTime|null
     */
    protected $dateFinContrat;
    /**
     * @var int|null
     */
    protected $typeContrat;

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

    public function getDateEmbauche(): ?\DateTime
    {
        return $this->dateEmbauche;
    }

    public function setDateEmbauche(?\DateTime $dateEmbauche): self
    {
        $this->initialized['dateEmbauche'] = true;
        $this->dateEmbauche = $dateEmbauche;

        return $this;
    }

    public function getDateFinContrat(): ?\DateTime
    {
        return $this->dateFinContrat;
    }

    public function setDateFinContrat(?\DateTime $dateFinContrat): self
    {
        $this->initialized['dateFinContrat'] = true;
        $this->dateFinContrat = $dateFinContrat;

        return $this;
    }

    public function getTypeContrat(): ?int
    {
        return $this->typeContrat;
    }

    public function setTypeContrat(?int $typeContrat): self
    {
        $this->initialized['typeContrat'] = true;
        $this->typeContrat = $typeContrat;

        return $this;
    }
}
