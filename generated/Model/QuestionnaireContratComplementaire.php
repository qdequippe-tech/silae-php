<?php

namespace QdequippeTech\Silae\Api\Model;

class QuestionnaireContratComplementaire
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
    protected $code;
    /**
     * @var string|null
     */
    protected $libelle;
    /**
     * @var LibelleValeurComplete[]|null
     */
    protected $listeChoix;
    /**
     * @var string|null
     */
    protected $codeLibelleCotisation;
    /**
     * @var int|null
     */
    protected $selectionSalarie;
    /**
     * @var int|null
     */
    protected $action;

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->initialized['libelle'] = true;
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * @return LibelleValeurComplete[]|null
     */
    public function getListeChoix(): ?array
    {
        return $this->listeChoix;
    }

    /**
     * @param LibelleValeurComplete[]|null $listeChoix
     */
    public function setListeChoix(?array $listeChoix): self
    {
        $this->initialized['listeChoix'] = true;
        $this->listeChoix = $listeChoix;

        return $this;
    }

    public function getCodeLibelleCotisation(): ?string
    {
        return $this->codeLibelleCotisation;
    }

    public function setCodeLibelleCotisation(?string $codeLibelleCotisation): self
    {
        $this->initialized['codeLibelleCotisation'] = true;
        $this->codeLibelleCotisation = $codeLibelleCotisation;

        return $this;
    }

    public function getSelectionSalarie(): ?int
    {
        return $this->selectionSalarie;
    }

    public function setSelectionSalarie(?int $selectionSalarie): self
    {
        $this->initialized['selectionSalarie'] = true;
        $this->selectionSalarie = $selectionSalarie;

        return $this;
    }

    public function getAction(): ?int
    {
        return $this->action;
    }

    public function setAction(?int $action): self
    {
        $this->initialized['action'] = true;
        $this->action = $action;

        return $this;
    }
}
