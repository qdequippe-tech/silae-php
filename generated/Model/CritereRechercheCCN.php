<?php

namespace QdequippeTech\Silae\Api\Model;

class CritereRechercheCCN
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
     * @var list<string>|null
     */
    protected $listeCodesNAF;

    /**
     * @var string|null
     */
    protected $codeIDCC;

    /**
     * @var string|null
     */
    protected $codeJO;

    /**
     * @var string|null
     */
    protected $texteLibre;

    /**
     * @return list<string>|null
     */
    public function getListeCodesNAF(): ?array
    {
        return $this->listeCodesNAF;
    }

    /**
     * @param list<string>|null $listeCodesNAF
     */
    public function setListeCodesNAF(?array $listeCodesNAF): self
    {
        $this->initialized['listeCodesNAF'] = true;
        $this->listeCodesNAF = $listeCodesNAF;

        return $this;
    }

    public function getCodeIDCC(): ?string
    {
        return $this->codeIDCC;
    }

    public function setCodeIDCC(?string $codeIDCC): self
    {
        $this->initialized['codeIDCC'] = true;
        $this->codeIDCC = $codeIDCC;

        return $this;
    }

    public function getCodeJO(): ?string
    {
        return $this->codeJO;
    }

    public function setCodeJO(?string $codeJO): self
    {
        $this->initialized['codeJO'] = true;
        $this->codeJO = $codeJO;

        return $this;
    }

    public function getTexteLibre(): ?string
    {
        return $this->texteLibre;
    }

    public function setTexteLibre(?string $texteLibre): self
    {
        $this->initialized['texteLibre'] = true;
        $this->texteLibre = $texteLibre;

        return $this;
    }
}
