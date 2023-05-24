<?php

namespace QdequippeTech\Silae\Api\Model;

class Etablissement
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
    protected $nomInterne;
    /**
     * @var string|null
     */
    protected $raisonSociale;
    /**
     * @var string|null
     */
    protected $numVoie;
    /**
     * @var string|null
     */
    protected $btqc;
    /**
     * @var string|null
     */
    protected $nomVoie;
    /**
     * @var string|null
     */
    protected $complement;
    /**
     * @var string|null
     */
    protected $codePostal;
    /**
     * @var string|null
     */
    protected $nomVille;
    /**
     * @var string|null
     */
    protected $codeOfficielCommune;
    /**
     * @var string|null
     */
    protected $commune;
    /**
     * @var string|null
     */
    protected $siret;
    /**
     * @var string|null
     */
    protected $codeNaf;
    /**
     * @var string|null
     */
    protected $paysISO;
    /**
     * @var string|null
     */
    protected $nomPays;
    /**
     * @var string|null
     */
    protected $tel;
    /**
     * @var string|null
     */
    protected $fax;
    /**
     * @var string|null
     */
    protected $numeroAffiliationURSSAF;
    /**
     * @var float[]|null
     */
    protected $nbHeuresTravaillees;
    /**
     * @var float[]|null
     */
    protected $nbHeuresDeNuitTravaillees;
    /**
     * @var bool|null
     */
    protected $bNbHeuresTravaillees;
    /**
     * @var int|null
     */
    protected $employeurCivilite;
    /**
     * @var string|null
     */
    protected $employeurNom;
    /**
     * @var string|null
     */
    protected $employeurPrenom;
    /**
     * @var int|null
     */
    protected $employeurQualite;
    /**
     * @var string|null
     */
    protected $employeurQualiteAutre;

    public function getNomInterne(): ?string
    {
        return $this->nomInterne;
    }

    public function setNomInterne(?string $nomInterne): self
    {
        $this->initialized['nomInterne'] = true;
        $this->nomInterne = $nomInterne;

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

    public function getNumVoie(): ?string
    {
        return $this->numVoie;
    }

    public function setNumVoie(?string $numVoie): self
    {
        $this->initialized['numVoie'] = true;
        $this->numVoie = $numVoie;

        return $this;
    }

    public function getBtqc(): ?string
    {
        return $this->btqc;
    }

    public function setBtqc(?string $btqc): self
    {
        $this->initialized['btqc'] = true;
        $this->btqc = $btqc;

        return $this;
    }

    public function getNomVoie(): ?string
    {
        return $this->nomVoie;
    }

    public function setNomVoie(?string $nomVoie): self
    {
        $this->initialized['nomVoie'] = true;
        $this->nomVoie = $nomVoie;

        return $this;
    }

    public function getComplement(): ?string
    {
        return $this->complement;
    }

    public function setComplement(?string $complement): self
    {
        $this->initialized['complement'] = true;
        $this->complement = $complement;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    public function setCodePostal(?string $codePostal): self
    {
        $this->initialized['codePostal'] = true;
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getNomVille(): ?string
    {
        return $this->nomVille;
    }

    public function setNomVille(?string $nomVille): self
    {
        $this->initialized['nomVille'] = true;
        $this->nomVille = $nomVille;

        return $this;
    }

    public function getCodeOfficielCommune(): ?string
    {
        return $this->codeOfficielCommune;
    }

    public function setCodeOfficielCommune(?string $codeOfficielCommune): self
    {
        $this->initialized['codeOfficielCommune'] = true;
        $this->codeOfficielCommune = $codeOfficielCommune;

        return $this;
    }

    public function getCommune(): ?string
    {
        return $this->commune;
    }

    public function setCommune(?string $commune): self
    {
        $this->initialized['commune'] = true;
        $this->commune = $commune;

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

    public function getCodeNaf(): ?string
    {
        return $this->codeNaf;
    }

    public function setCodeNaf(?string $codeNaf): self
    {
        $this->initialized['codeNaf'] = true;
        $this->codeNaf = $codeNaf;

        return $this;
    }

    public function getPaysISO(): ?string
    {
        return $this->paysISO;
    }

    public function setPaysISO(?string $paysISO): self
    {
        $this->initialized['paysISO'] = true;
        $this->paysISO = $paysISO;

        return $this;
    }

    public function getNomPays(): ?string
    {
        return $this->nomPays;
    }

    public function setNomPays(?string $nomPays): self
    {
        $this->initialized['nomPays'] = true;
        $this->nomPays = $nomPays;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(?string $tel): self
    {
        $this->initialized['tel'] = true;
        $this->tel = $tel;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(?string $fax): self
    {
        $this->initialized['fax'] = true;
        $this->fax = $fax;

        return $this;
    }

    public function getNumeroAffiliationURSSAF(): ?string
    {
        return $this->numeroAffiliationURSSAF;
    }

    public function setNumeroAffiliationURSSAF(?string $numeroAffiliationURSSAF): self
    {
        $this->initialized['numeroAffiliationURSSAF'] = true;
        $this->numeroAffiliationURSSAF = $numeroAffiliationURSSAF;

        return $this;
    }

    /**
     * @return float[]|null
     */
    public function getNbHeuresTravaillees(): ?array
    {
        return $this->nbHeuresTravaillees;
    }

    /**
     * @param float[]|null $nbHeuresTravaillees
     */
    public function setNbHeuresTravaillees(?array $nbHeuresTravaillees): self
    {
        $this->initialized['nbHeuresTravaillees'] = true;
        $this->nbHeuresTravaillees = $nbHeuresTravaillees;

        return $this;
    }

    /**
     * @return float[]|null
     */
    public function getNbHeuresDeNuitTravaillees(): ?array
    {
        return $this->nbHeuresDeNuitTravaillees;
    }

    /**
     * @param float[]|null $nbHeuresDeNuitTravaillees
     */
    public function setNbHeuresDeNuitTravaillees(?array $nbHeuresDeNuitTravaillees): self
    {
        $this->initialized['nbHeuresDeNuitTravaillees'] = true;
        $this->nbHeuresDeNuitTravaillees = $nbHeuresDeNuitTravaillees;

        return $this;
    }

    public function getBNbHeuresTravaillees(): ?bool
    {
        return $this->bNbHeuresTravaillees;
    }

    public function setBNbHeuresTravaillees(?bool $bNbHeuresTravaillees): self
    {
        $this->initialized['bNbHeuresTravaillees'] = true;
        $this->bNbHeuresTravaillees = $bNbHeuresTravaillees;

        return $this;
    }

    public function getEmployeurCivilite(): ?int
    {
        return $this->employeurCivilite;
    }

    public function setEmployeurCivilite(?int $employeurCivilite): self
    {
        $this->initialized['employeurCivilite'] = true;
        $this->employeurCivilite = $employeurCivilite;

        return $this;
    }

    public function getEmployeurNom(): ?string
    {
        return $this->employeurNom;
    }

    public function setEmployeurNom(?string $employeurNom): self
    {
        $this->initialized['employeurNom'] = true;
        $this->employeurNom = $employeurNom;

        return $this;
    }

    public function getEmployeurPrenom(): ?string
    {
        return $this->employeurPrenom;
    }

    public function setEmployeurPrenom(?string $employeurPrenom): self
    {
        $this->initialized['employeurPrenom'] = true;
        $this->employeurPrenom = $employeurPrenom;

        return $this;
    }

    public function getEmployeurQualite(): ?int
    {
        return $this->employeurQualite;
    }

    public function setEmployeurQualite(?int $employeurQualite): self
    {
        $this->initialized['employeurQualite'] = true;
        $this->employeurQualite = $employeurQualite;

        return $this;
    }

    public function getEmployeurQualiteAutre(): ?string
    {
        return $this->employeurQualiteAutre;
    }

    public function setEmployeurQualiteAutre(?string $employeurQualiteAutre): self
    {
        $this->initialized['employeurQualiteAutre'] = true;
        $this->employeurQualiteAutre = $employeurQualiteAutre;

        return $this;
    }
}
