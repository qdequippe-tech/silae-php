<?php

namespace QdequippeTech\Silae\Api\Model;

class AnalyseProductionPaieUtilisateursResponse
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
     * @var StatistiquesUtilisateurs[]|null
     */
    protected $statistiquesUtilisateurs;

    /**
     * @return StatistiquesUtilisateurs[]|null
     */
    public function getStatistiquesUtilisateurs(): ?array
    {
        return $this->statistiquesUtilisateurs;
    }

    /**
     * @param StatistiquesUtilisateurs[]|null $statistiquesUtilisateurs
     */
    public function setStatistiquesUtilisateurs(?array $statistiquesUtilisateurs): self
    {
        $this->initialized['statistiquesUtilisateurs'] = true;
        $this->statistiquesUtilisateurs = $statistiquesUtilisateurs;

        return $this;
    }
}
