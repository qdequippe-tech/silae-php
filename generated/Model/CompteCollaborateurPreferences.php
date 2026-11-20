<?php

declare(strict_types=1);

namespace QdequippeTech\Silae\Api\Model;

class CompteCollaborateurPreferences
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
     * @var bool|null
     */
    protected $splashscreensAlerte;

    /**
     * @var bool|null
     */
    protected $splashscreensProduit;

    /**
     * @var bool|null
     */
    protected $splashscreensMarketing;

    public function getSplashscreensAlerte(): ?bool
    {
        return $this->splashscreensAlerte;
    }

    public function setSplashscreensAlerte(?bool $splashscreensAlerte): self
    {
        $this->initialized['splashscreensAlerte'] = true;
        $this->splashscreensAlerte = $splashscreensAlerte;

        return $this;
    }

    public function getSplashscreensProduit(): ?bool
    {
        return $this->splashscreensProduit;
    }

    public function setSplashscreensProduit(?bool $splashscreensProduit): self
    {
        $this->initialized['splashscreensProduit'] = true;
        $this->splashscreensProduit = $splashscreensProduit;

        return $this;
    }

    public function getSplashscreensMarketing(): ?bool
    {
        return $this->splashscreensMarketing;
    }

    public function setSplashscreensMarketing(?bool $splashscreensMarketing): self
    {
        $this->initialized['splashscreensMarketing'] = true;
        $this->splashscreensMarketing = $splashscreensMarketing;

        return $this;
    }
}
