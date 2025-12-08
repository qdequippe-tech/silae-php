<?php

namespace QdequippeTech\Silae\Api\Model;

class SalarieBulletinStatutEtatAvancementResponse
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
     * @var list<SalarieBulletinStatutEtatAvancementReponse>|null
     */
    protected $listeSalarieBulletinStatutEtatAvancement;

    /**
     * @return list<SalarieBulletinStatutEtatAvancementReponse>|null
     */
    public function getListeSalarieBulletinStatutEtatAvancement(): ?array
    {
        return $this->listeSalarieBulletinStatutEtatAvancement;
    }

    /**
     * @param list<SalarieBulletinStatutEtatAvancementReponse>|null $listeSalarieBulletinStatutEtatAvancement
     */
    public function setListeSalarieBulletinStatutEtatAvancement(?array $listeSalarieBulletinStatutEtatAvancement): self
    {
        $this->initialized['listeSalarieBulletinStatutEtatAvancement'] = true;
        $this->listeSalarieBulletinStatutEtatAvancement = $listeSalarieBulletinStatutEtatAvancement;

        return $this;
    }
}
