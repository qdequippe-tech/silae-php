<?php

namespace QdequippeTech\Silae\Api;

class Client extends \QdequippeTech\Silae\Api\Runtime\Client\Client
{
    /**
     * @param \QdequippeTech\Silae\Api\Model\SalarieSupprimerAbsenceRequest $request
     * @param array                                                         $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieSupprimerAbsenceBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieSupprimerAbsenceUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieSupprimerAbsenceInternalServerErrorException
     */
    public function salarieSupprimerAbsence(Model\SalarieSupprimerAbsenceRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SalarieSupprimerAbsence($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\SalarieAjouterAbsenceRequest $request
     * @param array                                                       $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieAjouterAbsenceBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieAjouterAbsenceUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieAjouterAbsenceInternalServerErrorException
     */
    public function salarieAjouterAbsence(Model\SalarieAjouterAbsenceRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SalarieAjouterAbsence($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\SalarieModifierAbsenceRequest $request
     * @param array                                                        $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieModifierAbsenceBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieModifierAbsenceUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieModifierAbsenceInternalServerErrorException
     */
    public function salarieModifierAbsence(Model\SalarieModifierAbsenceRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SalarieModifierAbsence($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\SalarieAbsencesRequest $request
     * @param array                                                 $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\SalarieAbsencesResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieAbsencesBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieAbsencesUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieAbsencesInternalServerErrorException
     */
    public function salarieAbsences(Model\SalarieAbsencesRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SalarieAbsences($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\SalarieAjouterHeuresRequest $request
     * @param array                                                      $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieAjouterHeuresBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieAjouterHeuresUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieAjouterHeuresInternalServerErrorException
     */
    public function salarieAjouterHeures(Model\SalarieAjouterHeuresRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SalarieAjouterHeures($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\SalarieAjouterHeuresSurEmploiRequest $request
     * @param array                                                               $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieAjouterHeuresSurEmploiBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieAjouterHeuresSurEmploiUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieAjouterHeuresSurEmploiInternalServerErrorException
     */
    public function salarieAjouterHeuresSurEmploi(Model\SalarieAjouterHeuresSurEmploiRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SalarieAjouterHeuresSurEmploi($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\SalarieAjouterActiviteJournaliereRequest $request
     * @param array                                                                   $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieAjouterActiviteJournaliereBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieAjouterActiviteJournaliereUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieAjouterActiviteJournaliereInternalServerErrorException
     */
    public function salarieAjouterActiviteJournaliere(Model\SalarieAjouterActiviteJournaliereRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SalarieAjouterActiviteJournaliere($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\SalarieAjouterActiviteJournaliereSurEmploiRequest $request
     * @param array                                                                            $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieAjouterActiviteJournaliereSurEmploiBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieAjouterActiviteJournaliereSurEmploiUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieAjouterActiviteJournaliereSurEmploiInternalServerErrorException
     */
    public function salarieAjouterActiviteJournaliereSurEmploi(Model\SalarieAjouterActiviteJournaliereSurEmploiRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SalarieAjouterActiviteJournaliereSurEmploi($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\SalarieAjouterHeuresNativesRequest $request
     * @param array                                                             $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieAjouterHeuresNativesBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieAjouterHeuresNativesUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieAjouterHeuresNativesInternalServerErrorException
     */
    public function salarieAjouterHeuresNatives(Model\SalarieAjouterHeuresNativesRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SalarieAjouterHeuresNatives($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\SalarieAjouterHeuresNativesSurEmploiRequest $request
     * @param array                                                                      $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieAjouterHeuresNativesSurEmploiBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieAjouterHeuresNativesSurEmploiUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieAjouterHeuresNativesSurEmploiInternalServerErrorException
     */
    public function salarieAjouterHeuresNativesSurEmploi(Model\SalarieAjouterHeuresNativesSurEmploiRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SalarieAjouterHeuresNativesSurEmploi($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\SalarieReinitialiserSaisiesRequest $request
     * @param array                                                             $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\SalarieReinitialiserSaisiesResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieReinitialiserSaisiesBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieReinitialiserSaisiesUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieReinitialiserSaisiesInternalServerErrorException
     */
    public function salarieReinitialiserSaisies(Model\SalarieReinitialiserSaisiesRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SalarieReinitialiserSaisies($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\AffectationDossierPaieRequest $request
     * @param array                                                        $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\AffectationDossierPaieBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\AffectationDossierPaieUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\AffectationDossierPaieInternalServerErrorException
     */
    public function affectationDossierPaie(Model\AffectationDossierPaieRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\AffectationDossierPaie($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierRequest $request
     * @param array                                         $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\AffectationDossierPaieLectureResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\AffectationDossierPaieLectureBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\AffectationDossierPaieLectureUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\AffectationDossierPaieLectureInternalServerErrorException
     */
    public function affectationDossierPaieLecture(Model\DossierRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\AffectationDossierPaieLecture($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\AdministrationCollaborateurLectureRequest $request
     * @param array                                                                    $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\UtilisateurCollaborateur|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\AdministrationCollaborateurLectureBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\AdministrationCollaborateurLectureUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\AdministrationCollaborateurLectureInternalServerErrorException
     */
    public function administrationCollaborateurLecture(Model\AdministrationCollaborateurLectureRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\AdministrationCollaborateurLecture($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\AdministrationCollaborateurLectureParIdentifiantRequest $request
     * @param array                                                                                  $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\UtilisateurCollaborateur|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\AdministrationCollaborateurLectureParIdentifiantBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\AdministrationCollaborateurLectureParIdentifiantUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\AdministrationCollaborateurLectureParIdentifiantInternalServerErrorException
     */
    public function administrationCollaborateurLectureParIdentifiant(Model\AdministrationCollaborateurLectureParIdentifiantRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\AdministrationCollaborateurLectureParIdentifiant($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\AdministrationCollaborateurEnregistrementRequest $request
     * @param array                                                                           $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\AdministrationCollaborateurEnregistrementBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\AdministrationCollaborateurEnregistrementUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\AdministrationCollaborateurEnregistrementInternalServerErrorException
     */
    public function administrationCollaborateurEnregistrement(Model\AdministrationCollaborateurEnregistrementRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\AdministrationCollaborateurEnregistrement($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\ModificationDroitsFonctionnelsProductionPaieRequest $request
     * @param array                                                                              $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationDroitsFonctionnelsProductionPaieBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationDroitsFonctionnelsProductionPaieUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationDroitsFonctionnelsProductionPaieInternalServerErrorException
     */
    public function modificationDroitsFonctionnelsProductionPaie(Model\ModificationDroitsFonctionnelsProductionPaieRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ModificationDroitsFonctionnelsProductionPaie($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\LectureCompteCollaborateurRequest $request
     * @param array                                                            $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\CompteCollaborateur|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\LectureCompteCollaborateurBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\LectureCompteCollaborateurUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\LectureCompteCollaborateurInternalServerErrorException
     */
    public function lectureCompteCollaborateur(Model\LectureCompteCollaborateurRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\LectureCompteCollaborateur($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\CreationCompteCollaborateurRequest $request
     * @param array                                                             $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\CompteCollaborateur|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\CreationCompteCollaborateurBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\CreationCompteCollaborateurUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\CreationCompteCollaborateurInternalServerErrorException
     */
    public function creationCompteCollaborateur(Model\CreationCompteCollaborateurRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\CreationCompteCollaborateur($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\AffecterCleDossierRequest $request
     * @param array                                                    $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\AffecterCleDossierBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\AffecterCleDossierUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\AffecterCleDossierInternalServerErrorException
     */
    public function affecterCleDossier(Model\AffecterCleDossierRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\AffecterCleDossier($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\GererEtatDossierPaieRequest $request
     * @param array                                                      $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\GererEtatDossierPaieBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\GererEtatDossierPaieUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\GererEtatDossierPaieInternalServerErrorException
     */
    public function gererEtatDossierPaie(Model\GererEtatDossierPaieRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\GererEtatDossierPaie($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\GererEtatRobotDePaieRequest $request
     * @param array                                                      $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\GererEtatRobotDePaieBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\GererEtatRobotDePaieUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\GererEtatRobotDePaieInternalServerErrorException
     */
    public function gererEtatRobotDePaie(Model\GererEtatRobotDePaieRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\GererEtatRobotDePaie($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\GererCycleDePaieRequest $request
     * @param array                                                  $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\GererCycleDePaieBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\GererCycleDePaieUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\GererCycleDePaieInternalServerErrorException
     */
    public function gererCycleDePaie(Model\GererCycleDePaieRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\GererCycleDePaie($request, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int $idEntite
     *          }
     *
     * @param array $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\Domain[]|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\DomainesBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\DomainesUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\DomainesInternalServerErrorException
     */
    public function domaines(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\Domaines($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\Entity[]|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\EntitesBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\EntitesUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\EntitesInternalServerErrorException
     */
    public function entites(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\Entites($headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $domNomBase
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\Agency[]|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\AgenciesBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\AgenciesUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\AgenciesInternalServerErrorException
     */
    public function agencies(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\Agencies($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\AnalyseProductionPaieRequest $request
     * @param array                                                       $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\AnalyseProductionPaieResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\AnalyseProductionPaieBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\AnalyseProductionPaieUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\AnalyseProductionPaieInternalServerErrorException
     */
    public function analyseProductionPaie(Model\AnalyseProductionPaieRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\AnalyseProductionPaie($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\AnalyseProductionPaieRequest $request
     * @param array                                                       $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\TraitementAsynchroneResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\AnalyseProductionPaieAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\AnalyseProductionPaieAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\AnalyseProductionPaieAsynchroneInternalServerErrorException
     */
    public function analyseProductionPaieAsynchrone(Model\AnalyseProductionPaieRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\AnalyseProductionPaieAsynchrone($request, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $guidTache
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\StatutAnalyseProductionPaieAsynchroneResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\StatutAnalyseProductionPaieAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutAnalyseProductionPaieAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutAnalyseProductionPaieAsynchroneInternalServerErrorException
     */
    public function statutAnalyseProductionPaieAsynchrone(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\StatutAnalyseProductionPaieAsynchrone($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\AnalyseProductionPaieDetailRequest $request
     * @param array                                                             $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\AnalyseProductionPaieDetailResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\AnalyseProductionPaieDetailBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\AnalyseProductionPaieDetailUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\AnalyseProductionPaieDetailInternalServerErrorException
     */
    public function analyseProductionPaieDetail(Model\AnalyseProductionPaieDetailRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\AnalyseProductionPaieDetail($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\AnalyseProductionPaieUtilisateursRequest $request
     * @param array                                                                   $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\AnalyseProductionPaieUtilisateursResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\AnalyseProductionPaieUtilisateursBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\AnalyseProductionPaieUtilisateursUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\AnalyseProductionPaieUtilisateursInternalServerErrorException
     */
    public function analyseProductionPaieUtilisateurs(Model\AnalyseProductionPaieUtilisateursRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\AnalyseProductionPaieUtilisateurs($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\AnalyseProductionPaieEntreesSortiesRequest $request
     * @param array                                                                     $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\AnalyseProductionPaieEntreesSortiesResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\AnalyseProductionPaieEntreesSortiesBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\AnalyseProductionPaieEntreesSortiesUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\AnalyseProductionPaieEntreesSortiesInternalServerErrorException
     */
    public function analyseProductionPaieEntreesSorties(Model\AnalyseProductionPaieEntreesSortiesRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\AnalyseProductionPaieEntreesSorties($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\AnalyseProductionPaieRequest $request
     * @param array                                                       $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\TraitementAsynchroneResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\AnalyseProductionPaieEntreesSortiesAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\AnalyseProductionPaieEntreesSortiesAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\AnalyseProductionPaieEntreesSortiesAsynchroneInternalServerErrorException
     */
    public function analyseProductionPaieEntreesSortiesAsynchrone(Model\AnalyseProductionPaieRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\AnalyseProductionPaieEntreesSortiesAsynchrone($request, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $guidTache
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\StatutAnalyseProductionPaieEntreesSortiesAsynchroneResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\StatutAnalyseProductionPaieEntreesSortiesAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutAnalyseProductionPaieEntreesSortiesAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutAnalyseProductionPaieEntreesSortiesAsynchroneInternalServerErrorException
     */
    public function statutAnalyseProductionPaieEntreesSortiesAsynchrone(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\StatutAnalyseProductionPaieEntreesSortiesAsynchrone($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\BureautiquePaieNombreDocumentsCreesRequest $request
     * @param array                                                                     $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\BureautiquePaieNombreDocumentsCreesResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\BureautiquePaieNombreDocumentsCreesBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\BureautiquePaieNombreDocumentsCreesUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\BureautiquePaieNombreDocumentsCreesInternalServerErrorException
     */
    public function bureautiquePaieNombreDocumentsCrees(Model\BureautiquePaieNombreDocumentsCreesRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\BureautiquePaieNombreDocumentsCrees($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\AnalyseConfigurationAccesApiRequest $request
     * @param array                                                              $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\AnalyseConfigurationAccesApiResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\AnalyseConfigurationAccesApiBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\AnalyseConfigurationAccesApiUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\AnalyseConfigurationAccesApiInternalServerErrorException
     */
    public function analyseConfigurationAccesApi(Model\AnalyseConfigurationAccesApiRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\AnalyseConfigurationAccesApi($request, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\ListeModulesActifsResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ListeModulesActifsBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ListeModulesActifsUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ListeModulesActifsInternalServerErrorException
     */
    public function listeModulesActifs(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ListeModulesActifs($headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierRequest $request
     * @param array                                         $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\LectureAxesAnalytiquesResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\LectureAxesAnalytiquesBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\LectureAxesAnalytiquesUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\LectureAxesAnalytiquesInternalServerErrorException
     */
    public function lectureAxesAnalytiques(Model\DossierRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\LectureAxesAnalytiques($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\AjoutSousCategorieAxeAnalytiqueRequest $request
     * @param array                                                                 $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\AjoutSousCategorieAxeAnalytiqueBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\AjoutSousCategorieAxeAnalytiqueUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\AjoutSousCategorieAxeAnalytiqueInternalServerErrorException
     */
    public function ajoutSousCategorieAxeAnalytique(Model\AjoutSousCategorieAxeAnalytiqueRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\AjoutSousCategorieAxeAnalytique($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\LectureAxesAnalytiquesSalariesRequest $request
     * @param array                                                                $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\LectureAxesAnalytiquesSalariesResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\LectureAxesAnalytiquesSalariesBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\LectureAxesAnalytiquesSalariesUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\LectureAxesAnalytiquesSalariesInternalServerErrorException
     */
    public function lectureAxesAnalytiquesSalaries(Model\LectureAxesAnalytiquesSalariesRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\LectureAxesAnalytiquesSalaries($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\SalarieEmploiClassificationMetierRequest $request
     * @param array                                                                   $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\EmploiClassificationMetier|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieEmploiClassificationMetierBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieEmploiClassificationMetierUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieEmploiClassificationMetierInternalServerErrorException
     */
    public function salarieEmploiClassificationMetier(Model\SalarieEmploiClassificationMetierRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SalarieEmploiClassificationMetier($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\ClassificationMetierCompleteRequest $request
     * @param array                                                              $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\ClassificationMetierCompleteResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ClassificationMetierCompleteBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ClassificationMetierCompleteUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ClassificationMetierCompleteInternalServerErrorException
     */
    public function classificationMetierComplete(Model\ClassificationMetierCompleteRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ClassificationMetierComplete($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\AjouteCompteRenduEdiRequest $request
     * @param array                                                      $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\AjouteCompteRenduEdiBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\AjouteCompteRenduEdiUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\AjouteCompteRenduEdiInternalServerErrorException
     */
    public function ajouteCompteRenduEdi(Model\AjouteCompteRenduEdiRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\AjouteCompteRenduEdi($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\AjouteCompteRenduEdi94Request $request
     * @param array                                                        $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\AjouteCompteRenduEdi94Response|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\AjouteCompteRenduEdi94BadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\AjouteCompteRenduEdi94UnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\AjouteCompteRenduEdi94InternalServerErrorException
     */
    public function ajouteCompteRenduEdi94(Model\AjouteCompteRenduEdi94Request $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\AjouteCompteRenduEdi94($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\CreationEmetteurDSNRequest $request
     * @param array                                                     $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\CreationEmetteurDSNBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\CreationEmetteurDSNUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\CreationEmetteurDSNInternalServerErrorException
     */
    public function creationEmetteurDSN(Model\CreationEmetteurDSNRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\CreationEmetteurDSN($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\LectureContactEmetteurDSNRequest $request
     * @param array                                                           $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\LectureContactEmetteurDSNResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\LectureContactEmetteurDSNBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\LectureContactEmetteurDSNUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\LectureContactEmetteurDSNInternalServerErrorException
     */
    public function lectureContactEmetteurDSN(Model\LectureContactEmetteurDSNRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\LectureContactEmetteurDSN($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\ImportXmlParametrageOrganismeDSNRequest $request
     * @param array                                                                  $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\ImportXmlParametrageOrganismeDSNResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ImportXmlParametrageOrganismeDSNBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ImportXmlParametrageOrganismeDSNUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ImportXmlParametrageOrganismeDSNInternalServerErrorException
     */
    public function importXmlParametrageOrganismeDSN(Model\ImportXmlParametrageOrganismeDSNRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ImportXmlParametrageOrganismeDSN($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\InitialisationAncienNumeroContratDSNRequest $request
     * @param array                                                                      $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\InitialisationAncienNumeroContratDSNBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\InitialisationAncienNumeroContratDSNUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\InitialisationAncienNumeroContratDSNInternalServerErrorException
     */
    public function initialisationAncienNumeroContratDSN(Model\InitialisationAncienNumeroContratDSNRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\InitialisationAncienNumeroContratDSN($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\ActivationDSNRequest $request
     * @param array                                               $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ActivationDSNBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ActivationDSNUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ActivationDSNInternalServerErrorException
     */
    public function activationDSN(Model\ActivationDSNRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ActivationDSN($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\ValideCleDossierRequest $request
     * @param array                                                  $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ValideCleDossierBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ValideCleDossierUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ValideCleDossierInternalServerErrorException
     */
    public function valideCleDossier(Model\ValideCleDossierRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ValideCleDossier($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\CreationUtilisateurClientPaieRequest $request
     * @param array                                                               $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\CreationUtilisateurClientPaieBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\CreationUtilisateurClientPaieUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\CreationUtilisateurClientPaieInternalServerErrorException
     */
    public function creationUtilisateurClientPaie(Model\CreationUtilisateurClientPaieRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\CreationUtilisateurClientPaie($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierRequest $request
     * @param array                                         $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\ListeUtilisateursDossierPaieResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ListeUtilisateursDossierPaieBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ListeUtilisateursDossierPaieUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ListeUtilisateursDossierPaieInternalServerErrorException
     */
    public function listeUtilisateursDossierPaie(Model\DossierRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ListeUtilisateursDossierPaie($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\AcquisitionQuestionnaireContratComplementaireRequest $request
     * @param array                                                                               $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\AcquisitionQuestionnaireContratComplementaireResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\AcquisitionQuestionnaireContratComplementaireBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\AcquisitionQuestionnaireContratComplementaireUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\AcquisitionQuestionnaireContratComplementaireInternalServerErrorException
     */
    public function acquisitionQuestionnaireContratComplementaire(Model\AcquisitionQuestionnaireContratComplementaireRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\AcquisitionQuestionnaireContratComplementaire($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\ControlerBulletinsPeriodeRequest $request
     * @param array                                                           $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\ControlerBulletinsPeriodeResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ControlerBulletinsPeriodeBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ControlerBulletinsPeriodeUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ControlerBulletinsPeriodeInternalServerErrorException
     */
    public function controlerBulletinsPeriode(Model\ControlerBulletinsPeriodeRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ControlerBulletinsPeriode($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\CreationDossierPaieRequest $request
     * @param array                                                     $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\CreationDossierPaieResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\CreationDossierPaieBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\CreationDossierPaieUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\CreationDossierPaieInternalServerErrorException
     */
    public function creationDossierPaie(Model\CreationDossierPaieRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\CreationDossierPaie($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\ImportFichierDSNRequest $request
     * @param array                                                  $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\RetourImportDSN|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ImportFichierDSNBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ImportFichierDSNUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ImportFichierDSNInternalServerErrorException
     */
    public function importFichierDSN(Model\ImportFichierDSNRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ImportFichierDSN($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\CreationDossierParImportFichierDSNRequest $request
     * @param array                                                                    $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\RetourImportDSN|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\CreationDossierParImportFichierDSNBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\CreationDossierParImportFichierDSNUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\CreationDossierParImportFichierDSNInternalServerErrorException
     */
    public function creationDossierParImportFichierDSN(Model\CreationDossierParImportFichierDSNRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\CreationDossierParImportFichierDSN($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\SalarieInitialiserCumulsRequest $request
     * @param array                                                          $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieInitialiserCumulsBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieInitialiserCumulsUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieInitialiserCumulsInternalServerErrorException
     */
    public function salarieInitialiserCumuls(Model\SalarieInitialiserCumulsRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SalarieInitialiserCumuls($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierPeriodeRequest $request
     * @param array                                                $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\RecupererDeclarationsResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\RecupererDeclarationsBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\RecupererDeclarationsUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\RecupererDeclarationsInternalServerErrorException
     */
    public function recupererDeclarations(Model\DossierPeriodeRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\RecupererDeclarations($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierPeriodeRequest $request
     * @param array                                                $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\TraitementAsynchroneResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\RecupererDeclarationsAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\RecupererDeclarationsAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\RecupererDeclarationsAsynchroneInternalServerErrorException
     */
    public function recupererDeclarationsAsynchrone(Model\DossierPeriodeRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\RecupererDeclarationsAsynchrone($request, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $guidTache
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\StatutAsynchroneDocumentResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\StatutRecupererDeclarationsAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutRecupererDeclarationsAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutRecupererDeclarationsAsynchroneInternalServerErrorException
     */
    public function statutRecupererDeclarationsAsynchrone(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\StatutRecupererDeclarationsAsynchrone($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierPeriodeRangeRequest $request
     * @param array                                                     $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\EcrituresComptables|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\EcrituresComptablesBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\EcrituresComptablesUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\EcrituresComptablesInternalServerErrorException
     */
    public function ecrituresComptables(Model\DossierPeriodeRangeRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\EcrituresComptables($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\EcrituresComptables2Request $request
     * @param array                                                      $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\EcrituresComptables|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\EcrituresComptables2BadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\EcrituresComptables2UnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\EcrituresComptables2InternalServerErrorException
     */
    public function ecrituresComptables2(Model\EcrituresComptables2Request $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\EcrituresComptables2($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\EcrituresComptables3Request $request
     * @param array                                                      $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\EcrituresComptables|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\EcrituresComptables3BadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\EcrituresComptables3UnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\EcrituresComptables3InternalServerErrorException
     */
    public function ecrituresComptables3(Model\EcrituresComptables3Request $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\EcrituresComptables3($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\EcrituresComptables3Request $request
     * @param array                                                      $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\TraitementAsynchroneResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\EcrituresComptablesAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\EcrituresComptablesAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\EcrituresComptablesAsynchroneInternalServerErrorException
     */
    public function ecrituresComptablesAsynchrone(Model\EcrituresComptables3Request $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\EcrituresComptablesAsynchrone($request, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $guidTache
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\StatutEcrituresComptablesAsynchroneResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\StatutEcrituresComptablesAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutEcrituresComptablesAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutEcrituresComptablesAsynchroneInternalServerErrorException
     */
    public function statutEcrituresComptablesAsynchrone(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\StatutEcrituresComptablesAsynchrone($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierPeriodeRangeRequest $request
     * @param array                                                     $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\RecupererFichiersEcrituresComptablesResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\RecupererFichiersEcrituresComptablesBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\RecupererFichiersEcrituresComptablesUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\RecupererFichiersEcrituresComptablesInternalServerErrorException
     */
    public function recupererFichiersEcrituresComptables(Model\DossierPeriodeRangeRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\RecupererFichiersEcrituresComptables($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierPeriodeRequest $request
     * @param array                                                $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\SoldeRepos|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SoldeReposBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SoldeReposUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SoldeReposInternalServerErrorException
     */
    public function soldeRepos(Model\DossierPeriodeRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SoldeRepos($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierPeriodeRequest $request
     * @param array                                                $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\TraitementAsynchroneResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SoldeReposAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SoldeReposAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SoldeReposAsynchroneInternalServerErrorException
     */
    public function soldeReposAsynchrone(Model\DossierPeriodeRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SoldeReposAsynchrone($request, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $guidTache
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\StatutSoldeReposResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\StatutSoldeReposAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutSoldeReposAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutSoldeReposAsynchroneInternalServerErrorException
     */
    public function statutSoldeReposAsynchrone(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\StatutSoldeReposAsynchrone($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierPeriodeRangeRequest $request
     * @param array                                                     $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\EditionJournalDePaieResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\EditionJournalDePaieBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\EditionJournalDePaieUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\EditionJournalDePaieInternalServerErrorException
     */
    public function editionJournalDePaie(Model\DossierPeriodeRangeRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\EditionJournalDePaie($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierPeriodeRangeRequest $request
     * @param array                                                     $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\TraitementAsynchroneResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\EditionJournalDePaieAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\EditionJournalDePaieAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\EditionJournalDePaieAsynchroneInternalServerErrorException
     */
    public function editionJournalDePaieAsynchrone(Model\DossierPeriodeRangeRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\EditionJournalDePaieAsynchrone($request, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $guidTache
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\StatutAsynchroneDocumentResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\StatutEditionJournalDePaieAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutEditionJournalDePaieAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutEditionJournalDePaieAsynchroneInternalServerErrorException
     */
    public function statutEditionJournalDePaieAsynchrone(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\StatutEditionJournalDePaieAsynchrone($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierPeriodeRangeRequest $request
     * @param array                                                     $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\EditionTableauDesChargesResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\EditionTableauDesChargesBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\EditionTableauDesChargesUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\EditionTableauDesChargesInternalServerErrorException
     */
    public function editionTableauDesCharges(Model\DossierPeriodeRangeRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\EditionTableauDesCharges($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierPeriodeRangeRequest $request
     * @param array                                                     $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\TraitementAsynchroneResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\EditionTableauDesChargesAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\EditionTableauDesChargesAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\EditionTableauDesChargesAsynchroneInternalServerErrorException
     */
    public function editionTableauDesChargesAsynchrone(Model\DossierPeriodeRangeRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\EditionTableauDesChargesAsynchrone($request, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $guidTache
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\StatutAsynchroneDocumentResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\StatutEditionTableauDesChargesAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutEditionTableauDesChargesAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutEditionTableauDesChargesAsynchroneInternalServerErrorException
     */
    public function statutEditionTableauDesChargesAsynchrone(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\StatutEditionTableauDesChargesAsynchrone($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierPeriodeRangeRequest $request
     * @param array                                                     $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\EditionEtatDesPaiementsResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\EditionEtatDesPaiementsBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\EditionEtatDesPaiementsUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\EditionEtatDesPaiementsInternalServerErrorException
     */
    public function editionEtatDesPaiements(Model\DossierPeriodeRangeRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\EditionEtatDesPaiements($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierPeriodeRangeRequest $request
     * @param array                                                     $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\TraitementAsynchroneResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\EditionEtatDesPaiementsAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\EditionEtatDesPaiementsAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\EditionEtatDesPaiementsAsynchroneInternalServerErrorException
     */
    public function editionEtatDesPaiementsAsynchrone(Model\DossierPeriodeRangeRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\EditionEtatDesPaiementsAsynchrone($request, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $guidTache
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\StatutAsynchroneDocumentResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\StatutEditionEtatDesPaiementsAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutEditionEtatDesPaiementsAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutEditionEtatDesPaiementsAsynchroneInternalServerErrorException
     */
    public function statutEditionEtatDesPaiementsAsynchrone(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\StatutEditionEtatDesPaiementsAsynchrone($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierPeriodeRangeRequest $request
     * @param array                                                     $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\EditionRecapDePaieResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\EditionRecapDePaieBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\EditionRecapDePaieUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\EditionRecapDePaieInternalServerErrorException
     */
    public function editionRecapDePaie(Model\DossierPeriodeRangeRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\EditionRecapDePaie($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierPeriodeRangeRequest $request
     * @param array                                                     $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\TraitementAsynchroneResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\EditionRecapDePaieAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\EditionRecapDePaieAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\EditionRecapDePaieAsynchroneInternalServerErrorException
     */
    public function editionRecapDePaieAsynchrone(Model\DossierPeriodeRangeRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\EditionRecapDePaieAsynchrone($request, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $guidTache
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\StatutAsynchroneDocumentResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\StatutEditionRecapDePaieAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutEditionRecapDePaieAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutEditionRecapDePaieAsynchroneInternalServerErrorException
     */
    public function statutEditionRecapDePaieAsynchrone(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\StatutEditionRecapDePaieAsynchrone($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierPeriodeRangeRequest $request
     * @param array                                                     $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\EditionSoldeDeReposResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\EditionSoldeDeReposBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\EditionSoldeDeReposUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\EditionSoldeDeReposInternalServerErrorException
     */
    public function editionSoldeDeRepos(Model\DossierPeriodeRangeRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\EditionSoldeDeRepos($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierPeriodeRangeRequest $request
     * @param array                                                     $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\TraitementAsynchroneResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\EditionSoldeDeReposAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\EditionSoldeDeReposAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\EditionSoldeDeReposAsynchroneInternalServerErrorException
     */
    public function editionSoldeDeReposAsynchrone(Model\DossierPeriodeRangeRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\EditionSoldeDeReposAsynchrone($request, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $guidTache
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\StatutAsynchroneDocumentResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\StatutEditionSoldeDeReposAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutEditionSoldeDeReposAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutEditionSoldeDeReposAsynchroneInternalServerErrorException
     */
    public function statutEditionSoldeDeReposAsynchrone(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\StatutEditionSoldeDeReposAsynchrone($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierPeriodeRangeRequest $request
     * @param array                                                     $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\EditionControleCICEResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\EditionControleCICEBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\EditionControleCICEUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\EditionControleCICEInternalServerErrorException
     */
    public function editionControleCICE(Model\DossierPeriodeRangeRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\EditionControleCICE($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierPeriodeRangeRequest $request
     * @param array                                                     $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\TraitementAsynchroneResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\EditionControleCICEAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\EditionControleCICEAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\EditionControleCICEAsynchroneInternalServerErrorException
     */
    public function editionControleCICEAsynchrone(Model\DossierPeriodeRangeRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\EditionControleCICEAsynchrone($request, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $guidTache
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\StatutAsynchroneDocumentResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\StatutEditionControleCICEAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutEditionControleCICEAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutEditionControleCICEAsynchroneInternalServerErrorException
     */
    public function statutEditionControleCICEAsynchrone(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\StatutEditionControleCICEAsynchrone($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierPeriodeRangeRequest $request
     * @param array                                                     $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\EditionDetailDesCotisationsResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\EditionDetailDesCotisationsBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\EditionDetailDesCotisationsUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\EditionDetailDesCotisationsInternalServerErrorException
     */
    public function editionDetailDesCotisations(Model\DossierPeriodeRangeRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\EditionDetailDesCotisations($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierPeriodeRangeRequest $request
     * @param array                                                     $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\TraitementAsynchroneResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\EditionDetailDesCotisationsAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\EditionDetailDesCotisationsAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\EditionDetailDesCotisationsAsynchroneInternalServerErrorException
     */
    public function editionDetailDesCotisationsAsynchrone(Model\DossierPeriodeRangeRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\EditionDetailDesCotisationsAsynchrone($request, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $guidTache
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\StatutAsynchroneDocumentResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\StatutEditionDetailDesCotisationsAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutEditionDetailDesCotisationsAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutEditionDetailDesCotisationsAsynchroneInternalServerErrorException
     */
    public function statutEditionDetailDesCotisationsAsynchrone(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\StatutEditionDetailDesCotisationsAsynchrone($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierPeriodeRangeRequest $request
     * @param array                                                     $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\EditionCoutsSalariauxResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\EditionCoutsSalariauxBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\EditionCoutsSalariauxUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\EditionCoutsSalariauxInternalServerErrorException
     */
    public function editionCoutsSalariaux(Model\DossierPeriodeRangeRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\EditionCoutsSalariaux($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierPeriodeRangeRequest $request
     * @param array                                                     $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\TraitementAsynchroneResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\EditionCoutsSalariauxAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\EditionCoutsSalariauxAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\EditionCoutsSalariauxAsynchroneInternalServerErrorException
     */
    public function editionCoutsSalariauxAsynchrone(Model\DossierPeriodeRangeRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\EditionCoutsSalariauxAsynchrone($request, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $guidTache
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\StatutAsynchroneDocumentResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\StatutEditionCoutsSalariauxAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutEditionCoutsSalariauxAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutEditionCoutsSalariauxAsynchroneInternalServerErrorException
     */
    public function statutEditionCoutsSalariauxAsynchrone(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\StatutEditionCoutsSalariauxAsynchrone($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\GenerationFichierTRRequest $request
     * @param array                                                     $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\GenererFichierTRResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\GenerationFichierTRBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\GenerationFichierTRUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\GenerationFichierTRInternalServerErrorException
     */
    public function generationFichierTR(Model\GenerationFichierTRRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\GenerationFichierTR($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\EditionHistoriqueRequest $request
     * @param array                                                   $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\EditionHistoriqueResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\EditionHistoriqueBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\EditionHistoriqueUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\EditionHistoriqueInternalServerErrorException
     */
    public function editionHistorique(Model\EditionHistoriqueRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\EditionHistorique($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\EditionHistoriqueRequest $request
     * @param array                                                   $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\TraitementAsynchroneResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\EditionHistoriqueAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\EditionHistoriqueAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\EditionHistoriqueAsynchroneInternalServerErrorException
     */
    public function editionHistoriqueAsynchrone(Model\EditionHistoriqueRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\EditionHistoriqueAsynchrone($request, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $guidTache
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\StatutAsynchroneDocumentResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\StatutEditionHistoriqueAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutEditionHistoriqueAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutEditionHistoriqueAsynchroneInternalServerErrorException
     */
    public function statutEditionHistoriqueAsynchrone(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\StatutEditionHistoriqueAsynchrone($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\SalarieAjouterPrimeRequest $request
     * @param array                                                     $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieAjouterPrimeBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieAjouterPrimeUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieAjouterPrimeInternalServerErrorException
     */
    public function salarieAjouterPrime(Model\SalarieAjouterPrimeRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SalarieAjouterPrime($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\SalarieAjouterPrimeSurEmploiRequest $request
     * @param array                                                              $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieAjouterPrimeSurEmploiBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieAjouterPrimeSurEmploiUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieAjouterPrimeSurEmploiInternalServerErrorException
     */
    public function salarieAjouterPrimeSurEmploi(Model\SalarieAjouterPrimeSurEmploiRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SalarieAjouterPrimeSurEmploi($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\SalarieAjouterElementVariableRequest $request
     * @param array                                                               $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieAjouterElementVariableBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieAjouterElementVariableUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieAjouterElementVariableInternalServerErrorException
     */
    public function salarieAjouterElementVariable(Model\SalarieAjouterElementVariableRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SalarieAjouterElementVariable($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\SalarieAjouterElementVariableSurEmploiRequest $request
     * @param array                                                                        $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieAjouterElementVariableSurEmploiBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieAjouterElementVariableSurEmploiUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieAjouterElementVariableSurEmploiInternalServerErrorException
     */
    public function salarieAjouterElementVariableSurEmploi(Model\SalarieAjouterElementVariableSurEmploiRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SalarieAjouterElementVariableSurEmploi($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\SalarieAjouterAcompteRequest $request
     * @param array                                                       $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieAjouterAcompteBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieAjouterAcompteUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieAjouterAcompteInternalServerErrorException
     */
    public function salarieAjouterAcompte(Model\SalarieAjouterAcompteRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SalarieAjouterAcompte($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\SalariesConfirmerSaisiesRequest $request
     * @param array                                                          $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\SalariesConfirmerSaisiesResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SalariesConfirmerSaisiesBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SalariesConfirmerSaisiesUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SalariesConfirmerSaisiesInternalServerErrorException
     */
    public function salariesConfirmerSaisies(Model\SalariesConfirmerSaisiesRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SalariesConfirmerSaisies($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\SalariesConfirmerSaisiesRequest $request
     * @param array                                                          $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\TraitementAsynchroneResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SalariesConfirmerSaisiesAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SalariesConfirmerSaisiesAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SalariesConfirmerSaisiesAsynchroneInternalServerErrorException
     */
    public function salariesConfirmerSaisiesAsynchrone(Model\SalariesConfirmerSaisiesRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SalariesConfirmerSaisiesAsynchrone($request, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $guidTache
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\StatutSalariesConfirmerSaisiesResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\StatutSalariesConfirmerSaisiesAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutSalariesConfirmerSaisiesAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutSalariesConfirmerSaisiesAsynchroneInternalServerErrorException
     */
    public function statutSalariesConfirmerSaisiesAsynchrone(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\StatutSalariesConfirmerSaisiesAsynchrone($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\EtatDeclarationsRequest $request
     * @param array                                                  $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\EtatDeclarationsResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\EtatDeclarationsBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\EtatDeclarationsUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\EtatDeclarationsInternalServerErrorException
     */
    public function etatDeclarations(Model\EtatDeclarationsRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\EtatDeclarations($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierRequest $request
     * @param array                                         $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\ListeEtablissementsDossierPaieResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ListeEtablissementsDossierPaieBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ListeEtablissementsDossierPaieUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ListeEtablissementsDossierPaieInternalServerErrorException
     */
    public function listeEtablissementsDossierPaie(Model\DossierRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ListeEtablissementsDossierPaie($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\EtablissementsAExclureCVAERequest $request
     * @param array                                                            $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\EtablissementsAExclureCVAEResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\EtablissementsAExclureCVAEBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\EtablissementsAExclureCVAEUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\EtablissementsAExclureCVAEInternalServerErrorException
     */
    public function etablissementsAExclureCVAE(Model\EtablissementsAExclureCVAERequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\EtablissementsAExclureCVAE($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\MiseAJourFicheSocieteRequest $request
     * @param array                                                       $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\MiseAJourFicheSocieteBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\MiseAJourFicheSocieteUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\MiseAJourFicheSocieteInternalServerErrorException
     */
    public function miseAJourFicheSociete(Model\MiseAJourFicheSocieteRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\MiseAJourFicheSociete($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\MiseAJourFicheEtablissementRequest $request
     * @param array                                                             $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\MiseAJourFicheEtablissementBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\MiseAJourFicheEtablissementUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\MiseAJourFicheEtablissementInternalServerErrorException
     */
    public function miseAJourFicheEtablissement(Model\MiseAJourFicheEtablissementRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\MiseAJourFicheEtablissement($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\ModificationEffectifSocieteRequest $request
     * @param array                                                             $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationEffectifSocieteBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationEffectifSocieteUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationEffectifSocieteInternalServerErrorException
     */
    public function modificationEffectifSociete(Model\ModificationEffectifSocieteRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ModificationEffectifSociete($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\ModificationCCNSocieteRequest $request
     * @param array                                                        $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationCCNSocieteBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationCCNSocieteUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationCCNSocieteInternalServerErrorException
     */
    public function modificationCCNSociete(Model\ModificationCCNSocieteRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ModificationCCNSociete($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\ModificationEffortConstructionRequest $request
     * @param array                                                                $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationEffortConstructionBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationEffortConstructionUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationEffortConstructionInternalServerErrorException
     */
    public function modificationEffortConstruction(Model\ModificationEffortConstructionRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ModificationEffortConstruction($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\ModificationFNALRequest $request
     * @param array                                                  $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationFNALBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationFNALUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationFNALInternalServerErrorException
     */
    public function modificationFNAL(Model\ModificationFNALRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ModificationFNAL($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\ModificationInformationBancaireSocieteRequest $request
     * @param array                                                                        $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationInformationBancaireSocieteBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationInformationBancaireSocieteUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationInformationBancaireSocieteInternalServerErrorException
     */
    public function modificationInformationBancaireSociete(Model\ModificationInformationBancaireSocieteRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ModificationInformationBancaireSociete($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\ModificationTaxeTransportRequest $request
     * @param array                                                           $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationTaxeTransportBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationTaxeTransportUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationTaxeTransportInternalServerErrorException
     */
    public function modificationTaxeTransport(Model\ModificationTaxeTransportRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ModificationTaxeTransport($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\ModificationTaxeApprentissageEtablissementRequest $request
     * @param array                                                                            $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\ModificationTaxeApprentissageEtablissementResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationTaxeApprentissageEtablissementBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationTaxeApprentissageEtablissementUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationTaxeApprentissageEtablissementInternalServerErrorException
     */
    public function modificationTaxeApprentissageEtablissement(Model\ModificationTaxeApprentissageEtablissementRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ModificationTaxeApprentissageEtablissement($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\ModificationTaxeApprentissageSocieteRequest $request
     * @param array                                                                      $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\ModificationTaxeApprentissageSocieteResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationTaxeApprentissageSocieteBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationTaxeApprentissageSocieteUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationTaxeApprentissageSocieteInternalServerErrorException
     */
    public function modificationTaxeApprentissageSociete(Model\ModificationTaxeApprentissageSocieteRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ModificationTaxeApprentissageSociete($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\ModificationEffectifEtablissementRequest $request
     * @param array                                                                   $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationEffectifEtablissementBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationEffectifEtablissementUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationEffectifEtablissementInternalServerErrorException
     */
    public function modificationEffectifEtablissement(Model\ModificationEffectifEtablissementRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ModificationEffectifEtablissement($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\ModificationQuestionnaireCCNEtablissementRequest $request
     * @param array                                                                           $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationQuestionnaireCCNEtablissementBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationQuestionnaireCCNEtablissementUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationQuestionnaireCCNEtablissementInternalServerErrorException
     */
    public function modificationQuestionnaireCCNEtablissement(Model\ModificationQuestionnaireCCNEtablissementRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ModificationQuestionnaireCCNEtablissement($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\ModificationGrilleHoraireEtablissementRequest $request
     * @param array                                                                        $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationGrilleHoraireEtablissementBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationGrilleHoraireEtablissementUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationGrilleHoraireEtablissementInternalServerErrorException
     */
    public function modificationGrilleHoraireEtablissement(Model\ModificationGrilleHoraireEtablissementRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ModificationGrilleHoraireEtablissement($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierRequest $request
     * @param array                                         $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\LectureEffectifSocieteResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\LectureEffectifSocieteBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\LectureEffectifSocieteUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\LectureEffectifSocieteInternalServerErrorException
     */
    public function lectureEffectifSociete(Model\DossierRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\LectureEffectifSociete($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierRequest $request
     * @param array                                         $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\LectureCCNSocieteResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\LectureCCNSocieteBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\LectureCCNSocieteUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\LectureCCNSocieteInternalServerErrorException
     */
    public function lectureCCNSociete(Model\DossierRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\LectureCCNSociete($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierRequest $request
     * @param array                                         $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\EffortConstruction|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\LectureEffortConstructionBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\LectureEffortConstructionUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\LectureEffortConstructionInternalServerErrorException
     */
    public function lectureEffortConstruction(Model\DossierRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\LectureEffortConstruction($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierRequest $request
     * @param array                                         $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\FNAL|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\LectureFNALBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\LectureFNALUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\LectureFNALInternalServerErrorException
     */
    public function lectureFNAL(Model\DossierRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\LectureFNAL($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierRequest $request
     * @param array                                         $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\LectureInformationBancaireSocieteResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\LectureInformationBancaireSocieteBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\LectureInformationBancaireSocieteUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\LectureInformationBancaireSocieteInternalServerErrorException
     */
    public function lectureInformationBancaireSociete(Model\DossierRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\LectureInformationBancaireSociete($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\LectureTaxeTransportRequest $request
     * @param array                                                      $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\LectureTaxeTransportResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\LectureTaxeTransportBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\LectureTaxeTransportUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\LectureTaxeTransportInternalServerErrorException
     */
    public function lectureTaxeTransport(Model\LectureTaxeTransportRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\LectureTaxeTransport($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\LectureTaxeApprentissageSocieteRequest $request
     * @param array                                                                 $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\LectureTaxeApprentissageSocieteResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\LectureTaxeApprentissageSocieteBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\LectureTaxeApprentissageSocieteUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\LectureTaxeApprentissageSocieteInternalServerErrorException
     */
    public function lectureTaxeApprentissageSociete(Model\LectureTaxeApprentissageSocieteRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\LectureTaxeApprentissageSociete($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\LectureTaxeApprentissageEtablissementRequest $request
     * @param array                                                                       $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\LectureTaxeApprentissageEtablissementResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\LectureTaxeApprentissageEtablissementBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\LectureTaxeApprentissageEtablissementUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\LectureTaxeApprentissageEtablissementInternalServerErrorException
     */
    public function lectureTaxeApprentissageEtablissement(Model\LectureTaxeApprentissageEtablissementRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\LectureTaxeApprentissageEtablissement($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\LectureEffectifEtablissementRequest $request
     * @param array                                                              $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\LectureEffectifEtablissementResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\LectureEffectifEtablissementBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\LectureEffectifEtablissementUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\LectureEffectifEtablissementInternalServerErrorException
     */
    public function lectureEffectifEtablissement(Model\LectureEffectifEtablissementRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\LectureEffectifEtablissement($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierMatriculeSalarieRequest $request
     * @param array                                                         $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\SalarieRecupererDUEResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieRecupererDUEBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieRecupererDUEUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieRecupererDUEInternalServerErrorException
     */
    public function salarieRecupererDUE(Model\DossierMatriculeSalarieRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SalarieRecupererDUE($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierMatriculeSalarieRequest $request
     * @param array                                                         $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\SalarieRecupererRecuDPAEResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieRecupererRecuDPAEBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieRecupererRecuDPAEUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieRecupererRecuDPAEInternalServerErrorException
     */
    public function salarieRecupererRecuDPAE(Model\DossierMatriculeSalarieRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SalarieRecupererRecuDPAE($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\SalarieDUERequest $request
     * @param array                                            $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieDUEBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieDUEUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieDUEInternalServerErrorException
     */
    public function salarieDUE(Model\SalarieDUERequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SalarieDUE($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\SalarieDUERequest $request
     * @param array                                            $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\TraitementAsynchroneResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieDUEAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieDUEAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieDUEAsynchroneInternalServerErrorException
     */
    public function salarieDUEAsynchrone(Model\SalarieDUERequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SalarieDUEAsynchrone($request, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $guidTache
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\StatutSalariesDUEAsynchroneResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\StatutSalarieDUEAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutSalarieDUEAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutSalarieDUEAsynchroneInternalServerErrorException
     */
    public function statutSalarieDUEAsynchrone(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\StatutSalarieDUEAsynchrone($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\SalariesDUERequest $request
     * @param array                                             $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\SalariesDUEResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SalariesDUEBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SalariesDUEUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SalariesDUEInternalServerErrorException
     */
    public function salariesDUE(Model\SalariesDUERequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SalariesDUE($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\RechercheCCNRequest $request
     * @param array                                              $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\RechercheCCNResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\RechercheCCNBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\RechercheCCNUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\RechercheCCNInternalServerErrorException
     */
    public function rechercheCCN(Model\RechercheCCNRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\RechercheCCN($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\RechercheCCNParCodeRequest $request
     * @param array                                                     $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\CCN|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\RechercheCCNParCodeBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\RechercheCCNParCodeUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\RechercheCCNParCodeInternalServerErrorException
     */
    public function rechercheCCNParCode(Model\RechercheCCNParCodeRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\RechercheCCNParCode($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\SalarieBulletinEnteteRequest $request
     * @param array                                                       $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\SalarieBulletinEnteteResult|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieBulletinEnteteBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieBulletinEnteteUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieBulletinEnteteInternalServerErrorException
     */
    public function salarieBulletinEntete(Model\SalarieBulletinEnteteRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SalarieBulletinEntete($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\SalarieBulletinLignesRequest $request
     * @param array                                                       $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\SalarieBulletinLignesResult|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieBulletinLignesBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieBulletinLignesUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieBulletinLignesInternalServerErrorException
     */
    public function salarieBulletinLignes(Model\SalarieBulletinLignesRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SalarieBulletinLignes($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\SalarieBulletinLignesSelonFiltresRequest $request
     * @param array                                                                   $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\SalarieBulletinLignesResult|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieBulletinLignesSelonFiltresBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieBulletinLignesSelonFiltresUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieBulletinLignesSelonFiltresInternalServerErrorException
     */
    public function salarieBulletinLignesSelonFiltres(Model\SalarieBulletinLignesSelonFiltresRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SalarieBulletinLignesSelonFiltres($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\SalarieBulletinDetailsRequest $request
     * @param array                                                        $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\SalarieBulletinDetailsResult|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieBulletinDetailsBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieBulletinDetailsUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieBulletinDetailsInternalServerErrorException
     */
    public function salarieBulletinDetails(Model\SalarieBulletinDetailsRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SalarieBulletinDetails($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\SalarieBulletinCumulsRequest $request
     * @param array                                                       $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\SalarieBulletinCumulsResult|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieBulletinCumulsBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieBulletinCumulsUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieBulletinCumulsInternalServerErrorException
     */
    public function salarieBulletinCumuls(Model\SalarieBulletinCumulsRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SalarieBulletinCumuls($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\SalariesStockVarRequest $request
     * @param array                                                  $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\SalariesStockVarResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SalariesStockVarBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SalariesStockVarUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SalariesStockVarInternalServerErrorException
     */
    public function salariesStockVar(Model\SalariesStockVarRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SalariesStockVar($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierPeriodeRequest $request
     * @param array                                                $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\ListeDSNMensuellesResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ListeDSNMensuellesBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ListeDSNMensuellesUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ListeDSNMensuellesInternalServerErrorException
     */
    public function listeDSNMensuelles(Model\DossierPeriodeRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ListeDSNMensuelles($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\AcquisitionContenuPartielDSNRequest $request
     * @param array                                                              $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\AcquisitionContenuPartielDSNResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\AcquisitionContenuPartielDSNBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\AcquisitionContenuPartielDSNUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\AcquisitionContenuPartielDSNInternalServerErrorException
     */
    public function acquisitionContenuPartielDSN(Model\AcquisitionContenuPartielDSNRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\AcquisitionContenuPartielDSN($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\RechercheDeclarationEvenementielleRequest $request
     * @param array                                                                    $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\RechercheDeclarationEvenementielleResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\RechercheDeclarationEvenementielleBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\RechercheDeclarationEvenementielleUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\RechercheDeclarationEvenementielleInternalServerErrorException
     */
    public function rechercheDeclarationEvenementielle(Model\RechercheDeclarationEvenementielleRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\RechercheDeclarationEvenementielle($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierMatriculeSalarieRequest $request
     * @param array                                                         $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\SalarieRecupererPeriodeDernierBulletinCalculeResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieRecupererPeriodeDernierBulletinCalculeBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieRecupererPeriodeDernierBulletinCalculeUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieRecupererPeriodeDernierBulletinCalculeInternalServerErrorException
     */
    public function salarieRecupererPeriodeDernierBulletinCalcule(Model\DossierMatriculeSalarieRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SalarieRecupererPeriodeDernierBulletinCalcule($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\LectureInformationsPaieRequest $request
     * @param array                                                         $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\LectureInformationsPaieResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\LectureInformationsPaieBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\LectureInformationsPaieUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\LectureInformationsPaieInternalServerErrorException
     */
    public function lectureInformationsPaie(Model\LectureInformationsPaieRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\LectureInformationsPaie($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\SalariesBulletinsRequest $request
     * @param array                                                   $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\SalariesBulletinsResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SalariesBulletinsBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SalariesBulletinsUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SalariesBulletinsInternalServerErrorException
     */
    public function salariesBulletins(Model\SalariesBulletinsRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SalariesBulletins($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\SalariesBulletinsRequest $request
     * @param array                                                   $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\TraitementAsynchroneResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SalariesBulletinsAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SalariesBulletinsAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SalariesBulletinsAsynchroneInternalServerErrorException
     */
    public function salariesBulletinsAsynchrone(Model\SalariesBulletinsRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SalariesBulletinsAsynchrone($request, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $guidTache
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\StatutSalariesBulletinsResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\StatutSalariesBulletinsAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutSalariesBulletinsAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutSalariesBulletinsAsynchroneInternalServerErrorException
     */
    public function statutSalariesBulletinsAsynchrone(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\StatutSalariesBulletinsAsynchrone($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\ListeSalariesRequest $request
     * @param array                                               $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\ListeSalariesResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ListeSalariesBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ListeSalariesUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ListeSalariesInternalServerErrorException
     */
    public function listeSalaries(Model\ListeSalariesRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ListeSalaries($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\ListeSalariesExternesRequest $request
     * @param array                                                       $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\ListeSalariesExternesResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ListeSalariesExternesBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ListeSalariesExternesUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ListeSalariesExternesInternalServerErrorException
     */
    public function listeSalariesExternes(Model\ListeSalariesExternesRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ListeSalariesExternes($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\SalarieSalaireDeBaseRequest $request
     * @param array                                                      $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\SalarieSalaireDeBaseResult|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieSalaireDeBaseBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieSalaireDeBaseUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieSalaireDeBaseInternalServerErrorException
     */
    public function salarieSalaireDeBase(Model\SalarieSalaireDeBaseRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SalarieSalaireDeBase($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierMatriculeSalarieRequest $request
     * @param array                                                         $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\SalarieSyntheseCarriereResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieSyntheseCarriereBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieSyntheseCarriereUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieSyntheseCarriereInternalServerErrorException
     */
    public function salarieSyntheseCarriere(Model\DossierMatriculeSalarieRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SalarieSyntheseCarriere($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierMatriculeSalarieRequest $request
     * @param array                                                         $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\TraitementAsynchroneResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieSyntheseCarriereAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieSyntheseCarriereAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieSyntheseCarriereAsynchroneInternalServerErrorException
     */
    public function salarieSyntheseCarriereAsynchrone(Model\DossierMatriculeSalarieRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SalarieSyntheseCarriereAsynchrone($request, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $guidTache
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\StatutSalarieSyntheseCarriereResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\StatutSalarieSyntheseCarriereAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutSalarieSyntheseCarriereAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutSalarieSyntheseCarriereAsynchroneInternalServerErrorException
     */
    public function statutSalarieSyntheseCarriereAsynchrone(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\StatutSalarieSyntheseCarriereAsynchrone($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierMatriculeRequest $request
     * @param array                                                  $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\LecturePersonnesLieesResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\LecturePersonnesLieesBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\LecturePersonnesLieesUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\LecturePersonnesLieesInternalServerErrorException
     */
    public function lecturePersonnesLiees(Model\DossierMatriculeRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\LecturePersonnesLiees($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierMatriculeRequest $request
     * @param array                                                  $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\LectureHandicapResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\LectureHandicapBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\LectureHandicapUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\LectureHandicapInternalServerErrorException
     */
    public function lectureHandicap(Model\DossierMatriculeRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\LectureHandicap($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierMatriculeRequest $request
     * @param array                                                  $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\LectureSalarieProtegeResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\LectureSalarieProtegeBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\LectureSalarieProtegeUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\LectureSalarieProtegeInternalServerErrorException
     */
    public function lectureSalarieProtege(Model\DossierMatriculeRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\LectureSalarieProtege($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierMatriculeRequest $request
     * @param array                                                  $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\LectureSaisieArretResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\LectureSaisieArretBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\LectureSaisieArretUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\LectureSaisieArretInternalServerErrorException
     */
    public function lectureSaisieArret(Model\DossierMatriculeRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\LectureSaisieArret($request, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\ListeNumerosDossiersResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ListeNumerosDossiersBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ListeNumerosDossiersUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ListeNumerosDossiersInternalServerErrorException
     */
    public function listeNumerosDossiers(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ListeNumerosDossiers($headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\ListeDossiersRequest $request
     * @param array                                               $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\ListeDossiersResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ListeDossiersBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ListeDossiersUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ListeDossiersInternalServerErrorException
     */
    public function listeDossiers(Model\ListeDossiersRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ListeDossiers($request, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\ListeInformationsDossiersPaieResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ListeInformationsDossiersPaieBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ListeInformationsDossiersPaieUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ListeInformationsDossiersPaieInternalServerErrorException
     */
    public function listeInformationsDossiersPaie(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ListeInformationsDossiersPaie($headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierRequest $request
     * @param array                                         $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\DossierRecupererPeriodeEnCoursResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\DossierRecupererPeriodeEnCoursBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\DossierRecupererPeriodeEnCoursUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\DossierRecupererPeriodeEnCoursInternalServerErrorException
     */
    public function dossierRecupererPeriodeEnCours(Model\DossierRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\DossierRecupererPeriodeEnCours($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\MatriculeSalarieRequest $request
     * @param array                                                  $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\MatriculeSalarieResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\MatriculeSalarieBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\MatriculeSalarieUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\MatriculeSalarieInternalServerErrorException
     */
    public function matriculeSalarie(Model\MatriculeSalarieRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\MatriculeSalarie($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\ListeMatriculesDupliquesRequest $request
     * @param array                                                          $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\ListeMatriculesDupliquesResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ListeMatriculesDupliquesBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ListeMatriculesDupliquesUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ListeMatriculesDupliquesInternalServerErrorException
     */
    public function listeMatriculesDupliques(Model\ListeMatriculesDupliquesRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ListeMatriculesDupliques($request, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\ListeMatriculesDupliquesDansDomaineResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ListeMatriculesDupliquesDansDomaineBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ListeMatriculesDupliquesDansDomaineUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ListeMatriculesDupliquesDansDomaineInternalServerErrorException
     */
    public function listeMatriculesDupliquesDansDomaine(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ListeMatriculesDupliquesDansDomaine($headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierMatriculeRequest $request
     * @param array                                                  $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\ExistenceMatriculeResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ExistenceMatriculeBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ExistenceMatriculeUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ExistenceMatriculeInternalServerErrorException
     */
    public function existenceMatricule(Model\DossierMatriculeRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ExistenceMatricule($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\ExtraListeManifestationsRequest $request
     * @param array                                                          $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\ExtraListeManifestationsResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ExtraListeManifestationsBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ExtraListeManifestationsUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ExtraListeManifestationsInternalServerErrorException
     */
    public function extraListeManifestations(Model\ExtraListeManifestationsRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ExtraListeManifestations($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\ExtraCreationManifestationRequest $request
     * @param array                                                            $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ExtraCreationManifestationBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ExtraCreationManifestationUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ExtraCreationManifestationInternalServerErrorException
     */
    public function extraCreationManifestation(Model\ExtraCreationManifestationRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ExtraCreationManifestation($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\ExtraSalarieAcquisitionVacationsRequest $request
     * @param array                                                                  $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\ExtraSalarieVacations|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ExtraSalarieAcquisitionVacationsBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ExtraSalarieAcquisitionVacationsUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ExtraSalarieAcquisitionVacationsInternalServerErrorException
     */
    public function extraSalarieAcquisitionVacations(Model\ExtraSalarieAcquisitionVacationsRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ExtraSalarieAcquisitionVacations($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\ExtraSalarieAjouterVacationsRequest $request
     * @param array                                                              $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ExtraSalarieAjouterVacationsBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ExtraSalarieAjouterVacationsUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ExtraSalarieAjouterVacationsInternalServerErrorException
     */
    public function extraSalarieAjouterVacations(Model\ExtraSalarieAjouterVacationsRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ExtraSalarieAjouterVacations($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\ExtraSalarieReinitialiserVacationsRequest $request
     * @param array                                                                    $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\ExtraSalarieReinitialiserVacationsResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ExtraSalarieReinitialiserVacationsBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ExtraSalarieReinitialiserVacationsUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ExtraSalarieReinitialiserVacationsInternalServerErrorException
     */
    public function extraSalarieReinitialiserVacations(Model\ExtraSalarieReinitialiserVacationsRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ExtraSalarieReinitialiserVacations($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\ExtraSalarieCalculerBulletinRequest $request
     * @param array                                                              $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ExtraSalarieCalculerBulletinBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ExtraSalarieCalculerBulletinUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ExtraSalarieCalculerBulletinInternalServerErrorException
     */
    public function extraSalarieCalculerBulletin(Model\ExtraSalarieCalculerBulletinRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ExtraSalarieCalculerBulletin($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\SpectacleListeRequest $request
     * @param array                                                $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\SpectacleListeResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SpectacleListeBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SpectacleListeUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SpectacleListeInternalServerErrorException
     */
    public function spectacleListe(Model\SpectacleListeRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SpectacleListe($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\SpectacleCreationRequest $request
     * @param array                                                   $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SpectacleCreationBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SpectacleCreationUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SpectacleCreationInternalServerErrorException
     */
    public function spectacleCreation(Model\SpectacleCreationRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SpectacleCreation($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\SpectacleSalarieAcquisitionAffectationsRequest $request
     * @param array                                                                         $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\SpectacleSalarieAffectations|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SpectacleSalarieAcquisitionAffectationsBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SpectacleSalarieAcquisitionAffectationsUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SpectacleSalarieAcquisitionAffectationsInternalServerErrorException
     */
    public function spectacleSalarieAcquisitionAffectations(Model\SpectacleSalarieAcquisitionAffectationsRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SpectacleSalarieAcquisitionAffectations($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\SpectacleSalarieAjouterAffectationsRequest $request
     * @param array                                                                     $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SpectacleSalarieAjouterAffectationsBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SpectacleSalarieAjouterAffectationsUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SpectacleSalarieAjouterAffectationsInternalServerErrorException
     */
    public function spectacleSalarieAjouterAffectations(Model\SpectacleSalarieAjouterAffectationsRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SpectacleSalarieAjouterAffectations($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\SpectacleSalarieReinitialiserAffectationsRequest $request
     * @param array                                                                           $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\SpectacleSalarieReinitialiserAffectationsResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SpectacleSalarieReinitialiserAffectationsBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SpectacleSalarieReinitialiserAffectationsUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SpectacleSalarieReinitialiserAffectationsInternalServerErrorException
     */
    public function spectacleSalarieReinitialiserAffectations(Model\SpectacleSalarieReinitialiserAffectationsRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SpectacleSalarieReinitialiserAffectations($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\SpectacleSalarieCalculerBulletinRequest $request
     * @param array                                                                  $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SpectacleSalarieCalculerBulletinBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SpectacleSalarieCalculerBulletinUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SpectacleSalarieCalculerBulletinInternalServerErrorException
     */
    public function spectacleSalarieCalculerBulletin(Model\SpectacleSalarieCalculerBulletinRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SpectacleSalarieCalculerBulletin($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\SpectacleSalarieCalculerBulletinRequest $request
     * @param array                                                                  $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\TraitementAsynchroneResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SpectacleSalarieCalculerBulletinAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SpectacleSalarieCalculerBulletinAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SpectacleSalarieCalculerBulletinAsynchroneInternalServerErrorException
     */
    public function spectacleSalarieCalculerBulletinAsynchrone(Model\SpectacleSalarieCalculerBulletinRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SpectacleSalarieCalculerBulletinAsynchrone($request, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $guidTache
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\StatutAsynchroneResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\StatutSpectacleSalarieCalculerBulletinAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutSpectacleSalarieCalculerBulletinAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutSpectacleSalarieCalculerBulletinAsynchroneInternalServerErrorException
     */
    public function statutSpectacleSalarieCalculerBulletinAsynchrone(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\StatutSpectacleSalarieCalculerBulletinAsynchrone($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\CreationOrganismeRequest $request
     * @param array                                                   $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\CreationOrganismeBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\CreationOrganismeUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\CreationOrganismeInternalServerErrorException
     */
    public function creationOrganisme(Model\CreationOrganismeRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\CreationOrganisme($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\RecupererFichiersVirementRequest $request
     * @param array                                                           $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\RecupererFichiersVirementResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\RecupererFichiersVirementBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\RecupererFichiersVirementUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\RecupererFichiersVirementInternalServerErrorException
     */
    public function recupererFichiersVirement(Model\RecupererFichiersVirementRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\RecupererFichiersVirement($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\RecupererFichiersVirementChiffresRequest $request
     * @param array                                                                   $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\RecupererFichiersVirementResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\RecupererFichiersVirementChiffresBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\RecupererFichiersVirementChiffresUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\RecupererFichiersVirementChiffresInternalServerErrorException
     */
    public function recupererFichiersVirementChiffres(Model\RecupererFichiersVirementChiffresRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\RecupererFichiersVirementChiffres($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\RecupererFichiersVirementHorsBulletinRequest $request
     * @param array                                                                       $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\RecupererFichiersVirementResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\RecupererFichiersVirementHorsBulletinBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\RecupererFichiersVirementHorsBulletinUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\RecupererFichiersVirementHorsBulletinInternalServerErrorException
     */
    public function recupererFichiersVirementHorsBulletin(Model\RecupererFichiersVirementHorsBulletinRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\RecupererFichiersVirementHorsBulletin($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\RecupererFichiersVirementHorsBulletinChiffresRequest $request
     * @param array                                                                               $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\RecupererFichiersVirementResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\RecupererFichiersVirementHorsBulletinChiffresBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\RecupererFichiersVirementHorsBulletinChiffresUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\RecupererFichiersVirementHorsBulletinChiffresInternalServerErrorException
     */
    public function recupererFichiersVirementHorsBulletinChiffres(Model\RecupererFichiersVirementHorsBulletinChiffresRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\RecupererFichiersVirementHorsBulletinChiffres($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\AcquisitionQuestionnaireCCNRequest $request
     * @param array                                                             $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\AcquisitionQuestionnaireCCNResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\AcquisitionQuestionnaireEtablissementCCNBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\AcquisitionQuestionnaireEtablissementCCNUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\AcquisitionQuestionnaireEtablissementCCNInternalServerErrorException
     */
    public function acquisitionQuestionnaireEtablissementCCN(Model\AcquisitionQuestionnaireCCNRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\AcquisitionQuestionnaireEtablissementCCN($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\AcquisitionQuestionnaireCCNRequest $request
     * @param array                                                             $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\AcquisitionQuestionnaireCCNResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\AcquisitionQuestionnaireEtablissementCCNAvecTexteBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\AcquisitionQuestionnaireEtablissementCCNAvecTexteUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\AcquisitionQuestionnaireEtablissementCCNAvecTexteInternalServerErrorException
     */
    public function acquisitionQuestionnaireEtablissementCCNAvecTexte(Model\AcquisitionQuestionnaireCCNRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\AcquisitionQuestionnaireEtablissementCCNAvecTexte($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\AcquisitionQuestionnaireCCNRequest $request
     * @param array                                                             $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\AcquisitionQuestionnaireCCNResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\AcquisitionQuestionnaireSalarieCCNBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\AcquisitionQuestionnaireSalarieCCNUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\AcquisitionQuestionnaireSalarieCCNInternalServerErrorException
     */
    public function acquisitionQuestionnaireSalarieCCN(Model\AcquisitionQuestionnaireCCNRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\AcquisitionQuestionnaireSalarieCCN($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\AcquisitionQuestionnaireCCNRequest $request
     * @param array                                                             $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\AcquisitionQuestionnaireCCNResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\AcquisitionQuestionnaireSalarieCCNAvecTexteBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\AcquisitionQuestionnaireSalarieCCNAvecTexteUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\AcquisitionQuestionnaireSalarieCCNAvecTexteInternalServerErrorException
     */
    public function acquisitionQuestionnaireSalarieCCNAvecTexte(Model\AcquisitionQuestionnaireCCNRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\AcquisitionQuestionnaireSalarieCCNAvecTexte($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\RecupererImageRequest $request
     * @param array                                                $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\RecupererImageResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\RecupererImageBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\RecupererImageUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\RecupererImageInternalServerErrorException
     */
    public function recupererImage(Model\RecupererImageRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\RecupererImage($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\RecupererImageRequest $request
     * @param array                                                $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\TraitementAsynchroneResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\RecupererImageAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\RecupererImageAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\RecupererImageAsynchroneInternalServerErrorException
     */
    public function recupererImageAsynchrone(Model\RecupererImageRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\RecupererImageAsynchrone($request, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $guidTache
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\StatutRecupererImageAsynchroneResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\StatutRecupererImageAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutRecupererImageAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutRecupererImageAsynchroneInternalServerErrorException
     */
    public function statutRecupererImageAsynchrone(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\StatutRecupererImageAsynchrone($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\RecupererDuplicatasBulletinsRequest $request
     * @param array                                                              $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\RecupererDuplicatasBulletinsResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\RecupererDuplicatasBulletinsBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\RecupererDuplicatasBulletinsUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\RecupererDuplicatasBulletinsInternalServerErrorException
     */
    public function recupererDuplicatasBulletins(Model\RecupererDuplicatasBulletinsRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\RecupererDuplicatasBulletins($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\RecupererDuplicatasBulletinsRequest $request
     * @param array                                                              $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\TraitementAsynchroneResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\RecupererDuplicatasBulletinsAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\RecupererDuplicatasBulletinsAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\RecupererDuplicatasBulletinsAsynchroneInternalServerErrorException
     */
    public function recupererDuplicatasBulletinsAsynchrone(Model\RecupererDuplicatasBulletinsRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\RecupererDuplicatasBulletinsAsynchrone($request, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $guidTache
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\StatutAsynchroneDocumentResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\StatutRecupererDuplicatasBulletinsAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutRecupererDuplicatasBulletinsAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutRecupererDuplicatasBulletinsAsynchroneInternalServerErrorException
     */
    public function statutRecupererDuplicatasBulletinsAsynchrone(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\StatutRecupererDuplicatasBulletinsAsynchrone($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\CreationSalarieEmploisRequest $request
     * @param array                                                        $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\CreationSalarieEmploisResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\CreationSalarieEmploisBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\CreationSalarieEmploisUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\CreationSalarieEmploisInternalServerErrorException
     */
    public function creationSalarieEmplois(Model\CreationSalarieEmploisRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\CreationSalarieEmplois($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\CreationSalarieEmploisRequest $request
     * @param array                                                        $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\TraitementAsynchroneResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\CreationSalarieEmploisAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\CreationSalarieEmploisAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\CreationSalarieEmploisAsynchroneInternalServerErrorException
     */
    public function creationSalarieEmploisAsynchrone(Model\CreationSalarieEmploisRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\CreationSalarieEmploisAsynchrone($request, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $guidTache
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\StatutCreationSalarieEmploisAsynchroneResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\StatutCreationSalarieEmploisAsynchroneBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutCreationSalarieEmploisAsynchroneUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\StatutCreationSalarieEmploisAsynchroneInternalServerErrorException
     */
    public function statutCreationSalarieEmploisAsynchrone(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\StatutCreationSalarieEmploisAsynchrone($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\ListeSalarieEmploisRequest $request
     * @param array                                                     $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\ListeSalarieEmploisResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ListeSalarieEmploisBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ListeSalarieEmploisUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ListeSalarieEmploisInternalServerErrorException
     */
    public function listeSalarieEmplois(Model\ListeSalarieEmploisRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ListeSalarieEmplois($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierMatriculeSalarieRequest $request
     * @param array                                                         $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieReinitialiserIdentifiantsEmploisBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieReinitialiserIdentifiantsEmploisUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieReinitialiserIdentifiantsEmploisInternalServerErrorException
     */
    public function salarieReinitialiserIdentifiantsEmplois(Model\DossierMatriculeSalarieRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SalarieReinitialiserIdentifiantsEmplois($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierMatriculeSalarieRequest $request
     * @param array                                                         $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\ListeSalarieEmploisExternesResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ListeSalarieEmploisExternesBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ListeSalarieEmploisExternesUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ListeSalarieEmploisExternesInternalServerErrorException
     */
    public function listeSalarieEmploisExternes(Model\DossierMatriculeSalarieRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ListeSalarieEmploisExternes($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierMatriculeSalarieRequest $request
     * @param array                                                         $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieReinitialiserIdentifiantsEmploisExternesBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieReinitialiserIdentifiantsEmploisExternesUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SalarieReinitialiserIdentifiantsEmploisExternesInternalServerErrorException
     */
    public function salarieReinitialiserIdentifiantsEmploisExternes(Model\DossierMatriculeSalarieRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SalarieReinitialiserIdentifiantsEmploisExternes($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\ModificationChampSalarieRequest $request
     * @param array                                                          $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\ModificationChamp|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationChampSalarieBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationChampSalarieUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationChampSalarieInternalServerErrorException
     */
    public function modificationChampSalarie(Model\ModificationChampSalarieRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ModificationChampSalarie($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\ModificationPersonnesLieesRequest $request
     * @param array                                                            $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationPersonnesLieesBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationPersonnesLieesUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationPersonnesLieesInternalServerErrorException
     */
    public function modificationPersonnesLiees(Model\ModificationPersonnesLieesRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ModificationPersonnesLiees($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\ModificationHandicapRequest $request
     * @param array                                                      $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationHandicapBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationHandicapUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationHandicapInternalServerErrorException
     */
    public function modificationHandicap(Model\ModificationHandicapRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ModificationHandicap($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\ModificationSalarieProtegeRequest $request
     * @param array                                                            $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationSalarieProtegeBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationSalarieProtegeUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationSalarieProtegeInternalServerErrorException
     */
    public function modificationSalarieProtege(Model\ModificationSalarieProtegeRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ModificationSalarieProtege($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\ModificationSaisieArretRequest $request
     * @param array                                                         $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationSaisieArretBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationSaisieArretUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationSaisieArretInternalServerErrorException
     */
    public function modificationSaisieArret(Model\ModificationSaisieArretRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ModificationSaisieArret($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\ModificationQuestionnaireContratComplementaireRequest $request
     * @param array                                                                                $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationQuestionnaireContratComplementaireBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationQuestionnaireContratComplementaireUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationQuestionnaireContratComplementaireInternalServerErrorException
     */
    public function modificationQuestionnaireContratComplementaire(Model\ModificationQuestionnaireContratComplementaireRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ModificationQuestionnaireContratComplementaire($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\ModificationGrilleHoraireSalarieRequest $request
     * @param array                                                                  $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationGrilleHoraireSalarieBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationGrilleHoraireSalarieUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ModificationGrilleHoraireSalarieInternalServerErrorException
     */
    public function modificationGrilleHoraireSalarie(Model\ModificationGrilleHoraireSalarieRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ModificationGrilleHoraireSalarie($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\SiteGenereMotDePasseAlternatifRequest $request
     * @param array                                                                $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\SiteGenereMotDePasseAlternatifResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\SiteGenereMotDePasseAlternatifBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\SiteGenereMotDePasseAlternatifUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\SiteGenereMotDePasseAlternatifInternalServerErrorException
     */
    public function siteGenereMotDePasseAlternatif(Model\SiteGenereMotDePasseAlternatifRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\SiteGenereMotDePasseAlternatif($request, $headerParameters), $fetch);
    }

    /**
     * @param \QdequippeTech\Silae\Api\Model\DossierRequest $request
     * @param array                                         $headerParameters {
     *
     * @var string $Ocp-Apim-Subscription-Key
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \QdequippeTech\Silae\Api\Model\ListeVariablesASaisirResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \QdequippeTech\Silae\Api\Exception\ListeVariablesASaisirBadRequestException
     * @throws \QdequippeTech\Silae\Api\Exception\ListeVariablesASaisirUnauthorizedException
     * @throws \QdequippeTech\Silae\Api\Exception\ListeVariablesASaisirInternalServerErrorException
     */
    public function listeVariablesASaisir(Model\DossierRequest $request, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \QdequippeTech\Silae\Api\Endpoint\ListeVariablesASaisir($request, $headerParameters), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://payroll-api.silae.fr/payroll');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (\count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \QdequippeTech\Silae\Api\Normalizer\JaneObjectNormalizer()];
        if (\count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);

        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
