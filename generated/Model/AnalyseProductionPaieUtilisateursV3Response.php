<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Model;

class AnalyseProductionPaieUtilisateursV3Response
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
     * @var list<StatistiquesUtilisateursV3>|null
     */
    protected $statistiquesUtilisateurs;

    /**
     * @return list<StatistiquesUtilisateursV3>|null
     */
    public function getStatistiquesUtilisateurs(): ?array
    {
        return $this->statistiquesUtilisateurs;
    }

    /**
     * @param list<StatistiquesUtilisateursV3>|null $statistiquesUtilisateurs
     */
    public function setStatistiquesUtilisateurs(?array $statistiquesUtilisateurs): self
    {
        $this->initialized['statistiquesUtilisateurs'] = true;
        $this->statistiquesUtilisateurs = $statistiquesUtilisateurs;

        return $this;
    }
}
