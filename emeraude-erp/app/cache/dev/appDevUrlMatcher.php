<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/planning')) {
            // e_plan_planning_manage_division
            if ($pathinfo === '/planning/manageDivision') {
                return array (  '_controller' => 'EPlan\\PlanningBundle\\Controller\\DivisionController::managePresentationAction',  '_route' => 'e_plan_planning_manage_division',);
            }

            // e_plan_planning_show_one_grille
            if (0 === strpos($pathinfo, '/planning/showGrille') && preg_match('#^/planning/showGrille/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'e_plan_planning_show_one_grille')), array (  '_controller' => 'EPlan\\PlanningBundle\\Controller\\DivisionController::viewGrilleAction',));
            }

            // e_plan_planning_edit_one_grille
            if (0 === strpos($pathinfo, '/planning/editOneGrille') && preg_match('#^/planning/editOneGrille(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'e_plan_planning_edit_one_grille')), array (  '_controller' => 'EPlan\\PlanningBundle\\Controller\\DivisionController::editOneGrilleAction',  'id' => 0,));
            }

            // e_plan_planning_register_one_grille
            if (0 === strpos($pathinfo, '/planning/registertOneGrille') && preg_match('#^/planning/registertOneGrille/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'e_plan_planning_register_one_grille')), array (  '_controller' => 'EPlan\\PlanningBundle\\Controller\\DivisionController::registerOneGrilleAction',));
            }

            // e_plan_planning_load_division
            if ($pathinfo === '/planning/charger-les-departements') {
                return array (  '_controller' => 'EPlan\\PlanningBundle\\Controller\\DivisionController::loadDepartementAction',  '_route' => 'e_plan_planning_load_division',);
            }

            // e_plan_planning_registrer_parcourt_type
            if ($pathinfo === '/planning/formCreateParcourtType') {
                return array (  '_controller' => 'EPlan\\PlanningBundle\\Controller\\ParcourtTypeController::formViewAction',  '_route' => 'e_plan_planning_registrer_parcourt_type',);
            }

            if (0 === strpos($pathinfo, '/planning/C')) {
                // e_plan_planning_registrer_enseignant
                if ($pathinfo === '/planning/Creer-un-Enseignant') {
                    return array (  '_controller' => 'EPlan\\PlanningBundle\\Controller\\EnseignantController::createEnseignantAction',  '_route' => 'e_plan_planning_registrer_enseignant',);
                }

                // e_plan_planning_consult_enseignant
                if ($pathinfo === '/planning/Consulter-un-Enseignant') {
                    return array (  '_controller' => 'EPlan\\PlanningBundle\\Controller\\EnseignantController::consultEnseignantAction',  '_route' => 'e_plan_planning_consult_enseignant',);
                }

            }

            // e_plan_planning_index_enseignant
            if (rtrim($pathinfo, '/') === '/planning') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'e_plan_planning_index_enseignant');
                }

                return array (  '_controller' => 'EPlan\\PlanningBundle\\Controller\\EnseignantController::indexEnseignantAction',  '_route' => 'e_plan_planning_index_enseignant',);
            }

            // e_plan_planning_attrib_ec_enseignant
            if ($pathinfo === '/planning/attrib-ec-enseignant') {
                return array (  '_controller' => 'EPlan\\PlanningBundle\\Controller\\EnseignantController::attribEcEnseignantAction',  '_route' => 'e_plan_planning_attrib_ec_enseignant',);
            }

            // e_plan_planning_fiche_enseignant
            if ($pathinfo === '/planning/fiche-enseignant') {
                return array (  '_controller' => 'EPlan\\PlanningBundle\\Controller\\EnseignantController::ficheEnseignantAction',  '_route' => 'e_plan_planning_fiche_enseignant',);
            }

            if (0 === strpos($pathinfo, '/planning/param-plan-manuel')) {
                // e_plan_planning_indexPlanManuel
                if ($pathinfo === '/planning/param-plan-manuel') {
                    return array (  '_controller' => 'EPlan\\PlanningBundle\\Controller\\PlanManuelController::indexPlanManuelAction',  '_route' => 'e_plan_planning_indexPlanManuel',);
                }

                // e_plan_planning_test
                if ($pathinfo === '/planning/param-plan-manuel-gpe') {
                    return array (  '_controller' => 'EPlan\\PlanningBundle\\Controller\\PlanManuelController::gpePlanManuelAction',  '_route' => 'e_plan_planning_test',);
                }

            }

            // e_plan_planning_welcome
            if ($pathinfo === '/planning/welcome') {
                return array (  '_controller' => 'EPlan\\PlanningBundle\\Controller\\PresentationController::welcomeAction',  '_route' => 'e_plan_planning_welcome',);
            }

<<<<<<< HEAD
            // e_plan_planning_view_parcourt_Type
            if (0 === strpos($pathinfo, '/planning/viewParcourtType') && preg_match('#^/planning/viewParcourtType/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'e_plan_planning_view_parcourt_Type')), array (  '_controller' => 'EPlan\\PlanningBundle\\Controller\\DivisionController::viewParcourtTypeAction',));
=======
            // e_plan_planning_mention_ec
            if ($pathinfo === '/planning/param-plan-manuel-listEc') {
                return array (  '_controller' => 'EPlan\\PlanningBundle\\Controller\\PlanManuelController::ecMentionAction',  '_route' => 'e_plan_planning_mention_ec',);
            }

            // e_plan_planning_modif_enseignant
            if ($pathinfo === '/planning/modif-enseignant') {
                return array (  '_controller' => 'EPlan\\PlanningBundle\\Controller\\EnseignantController::modifEnseignantAction',  '_route' => 'e_plan_planning_modif_enseignant',);
>>>>>>> a4eba665dcabdbba3b7546a63787330435c0f30f
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
