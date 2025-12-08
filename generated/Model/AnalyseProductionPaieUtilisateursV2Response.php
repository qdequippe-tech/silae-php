<?php

namespace QdequippeTech\Silae\Api\Model;

class AnalyseProductionPaieUtilisateursV2Response
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
     * @var list<StatistiquesUtilisateursV2>|null
     */
    protected $statistiquesUtilisateurs;

    /**
     * @return list<StatistiquesUtilisateursV2>|null
     */
    public function getStatistiquesUtilisateurs(): ?array
    {
        return $this->statistiquesUtilisateurs;
    }

    /**
     * @param list<StatistiquesUtilisateursV2>|null $statistiquesUtilisateurs
     */
    public function setStatistiquesUtilisateurs(?array $statistiquesUtilisateurs): self
    {
        $this->initialized['statistiquesUtilisateurs'] = true;
        $this->statistiquesUtilisateurs = $statistiquesUtilisateurs;

        return $this;
    }
}
