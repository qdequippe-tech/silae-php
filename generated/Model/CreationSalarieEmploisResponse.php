<?php

namespace QdequippeTech\Silae\Api\Model;

class CreationSalarieEmploisResponse
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
     * @var list<CreationSalarieEmploiResult>|null
     */
    protected $resultatsCreationsEmplois;

    /**
     * @var string|null
     */
    protected $warning;

    /**
     * @var string|null
     */
    protected $matriculeSalarie;

    /**
     * @return list<CreationSalarieEmploiResult>|null
     */
    public function getResultatsCreationsEmplois(): ?array
    {
        return $this->resultatsCreationsEmplois;
    }

    /**
     * @param list<CreationSalarieEmploiResult>|null $resultatsCreationsEmplois
     */
    public function setResultatsCreationsEmplois(?array $resultatsCreationsEmplois): self
    {
        $this->initialized['resultatsCreationsEmplois'] = true;
        $this->resultatsCreationsEmplois = $resultatsCreationsEmplois;

        return $this;
    }

    public function getWarning(): ?string
    {
        return $this->warning;
    }

    public function setWarning(?string $warning): self
    {
        $this->initialized['warning'] = true;
        $this->warning = $warning;

        return $this;
    }

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
}
