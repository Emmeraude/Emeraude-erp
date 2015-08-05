<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'e_plan_planning_manage_division' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EPlan\\PlanningBundle\\Controller\\DivisionController::managePresentationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/planning/manageDivision',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'e_plan_planning_show_one_grille' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EPlan\\PlanningBundle\\Controller\\DivisionController::viewGrilleAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/planning/showGrille',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'e_plan_planning_edit_one_grille' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EPlan\\PlanningBundle\\Controller\\DivisionController::editOneGrilleAction',    'id' => 0,  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/planning/editOneGrille',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'e_plan_planning_register_one_grille' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EPlan\\PlanningBundle\\Controller\\DivisionController::registerOneGrilleAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/planning/registertOneGrille',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'e_plan_planning_load_division' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EPlan\\PlanningBundle\\Controller\\DivisionController::loadDepartementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/planning/charger-les-departements',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'e_plan_planning_registrer_parcourt_type' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EPlan\\PlanningBundle\\Controller\\ParcourtTypeController::formViewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/planning/formCreateParcourtType',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'e_plan_planning_registrer_enseignant' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EPlan\\PlanningBundle\\Controller\\EnseignantController::createEnseignantAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/planning/Creer-un-Enseignant',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'e_plan_planning_consult_enseignant' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EPlan\\PlanningBundle\\Controller\\EnseignantController::consultEnseignantAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/planning/Consulter-un-Enseignant',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'e_plan_planning_index_enseignant' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EPlan\\PlanningBundle\\Controller\\EnseignantController::indexEnseignantAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/planning/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'e_plan_planning_attrib_ec_enseignant' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EPlan\\PlanningBundle\\Controller\\EnseignantController::attribEcEnseignantAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/planning/attrib-ec-enseignant',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'e_plan_planning_fiche_enseignant' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EPlan\\PlanningBundle\\Controller\\EnseignantController::ficheEnseignantAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/planning/fiche-enseignant',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'e_plan_planning_indexPlanManuel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EPlan\\PlanningBundle\\Controller\\PlanManuelController::indexPlanManuelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/planning/param-plan-manuel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'e_plan_planning_test' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EPlan\\PlanningBundle\\Controller\\PlanManuelController::gpePlanManuelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/planning/param-plan-manuel-gpe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'e_plan_planning_welcome' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EPlan\\PlanningBundle\\Controller\\PresentationController::welcomeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/planning/welcome',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'e_plan_planning_view_parcourt_Type' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EPlan\\PlanningBundle\\Controller\\DivisionController::viewParcourtTypeAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/planning/viewParcourtType',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'e_plan_planning_mention_ec' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EPlan\\PlanningBundle\\Controller\\PlanManuelController::ecMentionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/planning/param-plan-manuel-listEc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'e_plan_planning_modif_enseignant' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EPlan\\PlanningBundle\\Controller\\EnseignantController::modifEnseignantAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/planning/modif-enseignant',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
<<<<<<< HEAD
        'e_plan_planning_enregitrer_UE' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EPlan\\PlanningBundle\\Controller\\DivisionController::enregistrerUEAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/planning/enregUE',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'e_plan_planning_enregitrer_Ec' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EPlan\\PlanningBundle\\Controller\\DivisionController::enregistrerEcAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/planning/enregEc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
=======
>>>>>>> eea1c82c0eb0e23ab76a00fcf489ea99553eae9a
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
