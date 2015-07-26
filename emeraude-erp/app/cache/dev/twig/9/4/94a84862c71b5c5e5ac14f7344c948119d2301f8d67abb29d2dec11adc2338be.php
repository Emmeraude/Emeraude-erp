<?php

/* EPlanPlanningBundle:Enseignant:consultEnseignant.html.twig */
class __TwigTemplate_94a84862c71b5c5e5ac14f7344c948119d2301f8d67abb29d2dec11adc2338be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EPlanPlanningBundle::template1.html.twig", "EPlanPlanningBundle:Enseignant:consultEnseignant.html.twig", 2);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'enseignant' => array($this, 'block_enseignant'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EPlanPlanningBundle::template1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
    }

    // line 5
    public function block_enseignant($context, array $blocks = array())
    {
        // line 6
        echo "    <section class=\"content-header\">
          <h1>
            Liste des enseignants
            <!--small>preview of simple tables</small-->
          </h1></br> </br>
          <!--ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
            <li><a href=\"#\">Tables</a></li>
            <li class=\"active\">Simple</li>
          </ol-->
          <label>Classer par :</label><select>
              <option value=\"Titre\">Titre</option>
              <option value=\"Domaine\">Domaine</option>
              <option value=\"Departement\">Departement</option>
              
          </select>
        </section>

        <!-- Main content -->
        <section class=\"content\">
          <div class=\"row\">
            <div class=\"col-md-6\">
              <div class=\"box\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">Professeurs</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                  <table class=\"table table-bordered\">
                    <tr>
                      <th style=\"width: 20px\">#</th>
                      <th>Noms et Prenoms</th>
                      <th>Telephone</th>
                      <th style=\"width: 50px\">E-mail</th>
                    </tr>
                    <tr>
                    <td>1.</td>
                      <td>Bowong Samuel</td>
                      <td>464656464
                        <!--div class=\"progress progress-xs\">
                          <div class=\"progress-bar progress-bar-danger\" style=\"width: 55%\"></div>
                        </div-->
                      </td> 
                      <td>bowongsamuel@yahoo.fr<!--span class=\"badge bg-red\">55%</span--></td>
                      <td> <a class=\"btn btn-primary\" href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_attrib_ec_enseignant");
        echo "\">+ d'EC</a>
                          <a class=\"btn btn-primary\" href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_attrib_ec_enseignant");
        echo "\">- d'EC</a>
                          <a class=\"btn btn-primary\" href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_attrib_ec_enseignant");
        echo "\">Edit</a>
                          <a class=\"btn btn-primary\" href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_attrib_ec_enseignant");
        echo "\">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Fono Louis Aime</td>
                      <td>849149814
                        <!--div class=\"progress progress-xs\">
                          <div class=\"progress-bar progress-bar-yellow\" style=\"width: 70%\"></div>
                        </div-->
                      </td>
                      <td>fonoloius@gmail.com<!--span class=\"badge bg-yellow\">70%</span--></td>
                    <td> <a class=\"btn btn-primary\" href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_attrib_ec_enseignant");
        echo "\">+ d'EC</a>
                          <a class=\"btn btn-primary\" href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_attrib_ec_enseignant");
        echo "\">- d'EC</a>
                          <a class=\"btn btn-primary\" href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_attrib_ec_enseignant");
        echo "\">Edit</a>
                          <a class=\"btn btn-primary\" href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_attrib_ec_enseignant");
        echo "\">Delete</a>
                      </td
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Ndje Yves Jonnathan</td>
                      <td>54641564
                        <!--div class=\"progress progress-xs progress-striped active\">
                          <div class=\"progress-bar progress-bar-primary\" style=\"width: 30%\"></div>
                        </div-->
                      </td>
                      <td>njolio@yahoo.fr<!--span class=\"badge bg-light-blue\">30%</span--></td>
                   <td> <a class=\"btn btn-primary\" href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_attrib_ec_enseignant");
        echo "\">+ d'EC</a>
                          <a class=\"btn btn-primary\" href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_attrib_ec_enseignant");
        echo "\">- d'EC</a>
                          <a class=\"btn btn-primary\" href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_attrib_ec_enseignant");
        echo "\">Edit</a>
                          <a class=\"btn btn-primary\" href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_attrib_ec_enseignant");
        echo "\">Delete</a>
                      </td
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Ndjeumen Rodrigue</td>
                      <td>56654544
                        <!--div class=\"progress progress-xs progress-striped active\">
                          <div class=\"progress-bar progress-bar-success\" style=\"width: 90%\"></div>
                        </div-->
                      </td>
                      <td>rodriguendjeumen@yahoo.fr<!--span class=\"badge bg-green\">90%</span--></td>
                   <td> <a class=\"btn btn-primary\" href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_attrib_ec_enseignant");
        echo "\">+ d'EC</a>
                          <a class=\"btn btn-primary\" href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_attrib_ec_enseignant");
        echo "\">- d'EC</a>
                          <a class=\"btn btn-primary\" href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_attrib_ec_enseignant");
        echo "\">Edit</a>
                          <a class=\"btn btn-primary\" href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_attrib_ec_enseignant");
        echo "\">Delete</a>
                      </td
                    </tr>
                  </table>
                </div><!-- /.box-body -->
                <div class=\"box-footer clearfix\">
                  <ul class=\"pagination pagination-sm no-margin pull-right\">
                    <li><a href=\"#\">&laquo;</a></li>
                    <li><a href=\"#\">1</a></li>
                    <li><a href=\"#\">2</a></li>
                    <li><a href=\"#\">3</a></li>
                    <li><a href=\"#\">&raquo;</a></li>
                  </ul>
                </div>
              </div><!-- /.box -->
              
              
               </section>

        <!-- Main content -->
        <section class=\"content\">
          <div class=\"row\">
            <div class=\"col-md-6\">
              <div class=\"box\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">Docteurs</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                  <table class=\"table table-bordered\">
                    <tr>
                      <th style=\"width: 10px\">#</th>
                      <th>Noms et Prenoms</th>
                      <th>Telephone</th>
                      <th style=\"width: 40px\">E-mail</th>
                    </tr>
                    <tr>
                      <td>1.</td>
                      <td>Noumsi Auguste</td>
                      <td>464656464
                        <!--div class=\"progress progress-xs\">
                          <div class=\"progress-bar progress-bar-danger\" style=\"width: 55%\"></div>
                        </div-->
                      </td>
                      <td>nomsiauguste@yahoo.fr<!--span class=\"badge bg-red\">55%</span--></td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Tsimi</td>
                      <td>849149814
                        <!--div class=\"progress progress-xs\">
                          <div class=\"progress-bar progress-bar-yellow\" style=\"width: 70%\"></div>
                        </div-->
                      </td>
                      <td>tsimi@gmail.com<!--span class=\"badge bg-yellow\">70%</span--></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Doncfack</td>
                      <td>54641564
                        <!--div class=\"progress progress-xs progress-striped active\">
                          <div class=\"progress-bar progress-bar-primary\" style=\"width: 30%\"></div>
                        </div-->
                      </td>
                      <td>donfack@yahoo.fr<!--span class=\"badge bg-light-blue\">30%</span--></td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Temgoua Anatole</td>
                      <td>56654544
                        <!--div class=\"progress progress-xs progress-striped active\">
                          <div class=\"progress-bar progress-bar-success\" style=\"width: 90%\"></div>
                        </div-->
                      </td>
                      <td>tmgouaanatole@yahoo.fr<!--span class=\"badge bg-green\">90%</span--></td>
                    </tr>
                  </table>
                </div><!-- /.box-body -->
                <div class=\"box-footer clearfix\">
                  <ul class=\"pagination pagination-sm no-margin pull-right\">
                    <li><a href=\"#\">&laquo;</a></li>
                    <li><a href=\"#\">1</a></li>
                    <li><a href=\"#\">2</a></li>
                    <li><a href=\"#\">3</a></li>
                    <li><a href=\"#\">&raquo;</a></li>
                  </ul>
                </div>
              </div><!-- /.box -->
             </div>
              </div>
        </section>
 ";
    }

    public function getTemplateName()
    {
        return "EPlanPlanningBundle:Enseignant:consultEnseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 97,  171 => 96,  167 => 95,  163 => 94,  148 => 82,  144 => 81,  140 => 80,  136 => 79,  121 => 67,  117 => 66,  113 => 65,  109 => 64,  94 => 52,  90 => 51,  86 => 50,  82 => 49,  37 => 6,  34 => 5,  29 => 3,  11 => 2,);
    }
}
