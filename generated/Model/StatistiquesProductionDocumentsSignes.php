<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Model;

class StatistiquesProductionDocumentsSignes
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
    protected $docSignes;

    /**
     * @var int|null
     */
    protected $docSortie;

    /**
     * @var int|null
     */
    protected $docSignesSantePrevoyance;

    /**
     * @var int|null
     */
    protected $signaturesFactures;

    /**
     * @var int|null
     */
    protected $signatairesFactures;

    /**
     * @var int|null
     */
    protected $signatairesFacturesDocSortie;

    /**
     * @var int|null
     */
    protected $signatairesFacturesDocSantePrevoyance;

    /**
     * @var int|null
     */
    protected $zoneSignature;

    /**
     * @var int|null
     */
    protected $zoneSignatureDocSortie;

    /**
     * @var int|null
     */
    protected $zoneSignatureDocSantePrevoyance;

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

    public function getDocSignes(): ?int
    {
        return $this->docSignes;
    }

    public function setDocSignes(?int $docSignes): self
    {
        $this->initialized['docSignes'] = true;
        $this->docSignes = $docSignes;

        return $this;
    }

    public function getDocSortie(): ?int
    {
        return $this->docSortie;
    }

    public function setDocSortie(?int $docSortie): self
    {
        $this->initialized['docSortie'] = true;
        $this->docSortie = $docSortie;

        return $this;
    }

    public function getDocSignesSantePrevoyance(): ?int
    {
        return $this->docSignesSantePrevoyance;
    }

    public function setDocSignesSantePrevoyance(?int $docSignesSantePrevoyance): self
    {
        $this->initialized['docSignesSantePrevoyance'] = true;
        $this->docSignesSantePrevoyance = $docSignesSantePrevoyance;

        return $this;
    }

    public function getSignaturesFactures(): ?int
    {
        return $this->signaturesFactures;
    }

    public function setSignaturesFactures(?int $signaturesFactures): self
    {
        $this->initialized['signaturesFactures'] = true;
        $this->signaturesFactures = $signaturesFactures;

        return $this;
    }

    public function getSignatairesFactures(): ?int
    {
        return $this->signatairesFactures;
    }

    public function setSignatairesFactures(?int $signatairesFactures): self
    {
        $this->initialized['signatairesFactures'] = true;
        $this->signatairesFactures = $signatairesFactures;

        return $this;
    }

    public function getSignatairesFacturesDocSortie(): ?int
    {
        return $this->signatairesFacturesDocSortie;
    }

    public function setSignatairesFacturesDocSortie(?int $signatairesFacturesDocSortie): self
    {
        $this->initialized['signatairesFacturesDocSortie'] = true;
        $this->signatairesFacturesDocSortie = $signatairesFacturesDocSortie;

        return $this;
    }

    public function getSignatairesFacturesDocSantePrevoyance(): ?int
    {
        return $this->signatairesFacturesDocSantePrevoyance;
    }

    public function setSignatairesFacturesDocSantePrevoyance(?int $signatairesFacturesDocSantePrevoyance): self
    {
        $this->initialized['signatairesFacturesDocSantePrevoyance'] = true;
        $this->signatairesFacturesDocSantePrevoyance = $signatairesFacturesDocSantePrevoyance;

        return $this;
    }

    public function getZoneSignature(): ?int
    {
        return $this->zoneSignature;
    }

    public function setZoneSignature(?int $zoneSignature): self
    {
        $this->initialized['zoneSignature'] = true;
        $this->zoneSignature = $zoneSignature;

        return $this;
    }

    public function getZoneSignatureDocSortie(): ?int
    {
        return $this->zoneSignatureDocSortie;
    }

    public function setZoneSignatureDocSortie(?int $zoneSignatureDocSortie): self
    {
        $this->initialized['zoneSignatureDocSortie'] = true;
        $this->zoneSignatureDocSortie = $zoneSignatureDocSortie;

        return $this;
    }

    public function getZoneSignatureDocSantePrevoyance(): ?int
    {
        return $this->zoneSignatureDocSantePrevoyance;
    }

    public function setZoneSignatureDocSantePrevoyance(?int $zoneSignatureDocSantePrevoyance): self
    {
        $this->initialized['zoneSignatureDocSantePrevoyance'] = true;
        $this->zoneSignatureDocSantePrevoyance = $zoneSignatureDocSantePrevoyance;

        return $this;
    }
}
