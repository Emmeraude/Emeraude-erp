<?php

/* EPlanPlanningBundle:Plannification:mention.html.twig */
class __TwigTemplate_761677ee6b567f69e5aa131b6a8b5de8d3e7b984f3eb6b42c96bd8e446b18868 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("EPlanPlanningBundle::template.html.twig", "EPlanPlanningBundle:Plannification:mention.html.twig", 4);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'explicationTitrePage' => array($this, 'block_explicationTitrePage'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EPlanPlanningBundle::template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_titrePage($context, array $blocks = array())
    {
        // line 6
        echo " Planification des ";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo " de Niveau ";
        echo twig_escape_filter($this->env, (isset($context["niveau"]) ? $context["niveau"] : $this->getContext($context, "niveau")), "html", null, true);
        echo " pour le semestre ";
        echo twig_escape_filter($this->env, (isset($context["semestre"]) ? $context["semestre"] : $this->getContext($context, "semestre")), "html", null, true);
        echo "
";
    }

    // line 8
    public function block_explicationTitrePage($context, array $blocks = array())
    {
        // line 9
        echo " ";
    }

    // line 10
    public function block_contenu($context, array $blocks = array())
    {
        // line 11
        echo "   <form style=\"float: right;\" action=\"";
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_test");
        echo "\" method=\"post\"><input type=\"text\" name=\"critere\" placeholder=\"Entrez un nom de mention\"/>
                 <input type=\"submit\" value=\"rechercher\"/>
          </form>
    <h4 >Liste des Mentions pas encore inserer</h4>
    <form method=\"post\" action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_mention_ec");
        echo "\"> 
    <div class=\"box\">
                <!--div class=\"box-header with-border\">
                  <h3 class=\"box-title\">B</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                  <table class=\"table table-bordered\">
                    <tr>
                      <th style=\"width: 20px\">#</th>
                      <th>Nom</th>
                      <th>Description</th>
                      <!--th style=\"width: 50px\">Libelle</th-->
                    </tr>
                    <tr>
                     <!--a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_index_enseignant");
        echo "\">Plus</a--><td>1.</td>
                      <td>Mathematique</td>
                      <td>ttyurttytruert
                        <!--div class=\"progress progress-xs\">
                          <div class=\"progress-bar progress-bar-danger\" style=\"width: 55%\"></div>
                        </div-->
                      </td> 
                      <td><input type=\"radio\" name=\"a\" value=\"1\" /><!--span class=\"badge bg-red\">55%</span--></td>
                      <!--td> <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_index_enseignant");
        echo "\">Plus</a></td-->
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Physique</td>
                      <td>849149814
                        <!--div class=\"progress progress-xs\">
                          <div class=\"progress-bar progress-bar-yellow\" style=\"width: 70%\"></div>
                        </div-->
                      </td>
                      <td><input type=\"radio\" name=\"a\" value=\"2\" /><!--span class=\"badge bg-yellow\">70%</span--></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Informatique</td>
                      <td>54641564
                        <!--div class=\"progress progress-xs progress-striped active\">
                          <div class=\"progress-bar progress-bar-primary\" style=\"width: 30%\"></div>
                        </div-->
                      </td>
                      <td><input type=\"radio\" name=\"a\" value=\"3\" /><!--span class=\"badge bg-light-blue\">30%</span--></td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Biologie</td>
                      <td>56654544
                        <!--div class=\"progress progress-xs progress-striped active\">
                          <div class=\"progress-bar progress-bar-success\" style=\"width: 90%\"></div>
                        </div-->
                      </td>
                      <td><input type=\"radio\" name=\"a\" value=\"4\" /><!--span class=\"badge bg-green\">90%</span--></td>
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
              </div>
     <a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_indexPlanManuel");
        echo "\" class=\"btn btn-primary\" style=\"margin-right:10px;\">Precedent</a>
    <input class=\"btn btn-primary\" type=\"reset\" value=\"annuler\" style=\"margin-right:10px;\"/>
    <input class=\"btn btn-primary\" type=\"submit\" value=\"suivant\" style=\"margin-right:10px;\"/>
  
                </form>
 ";
    }

    public function getTemplateName()
    {
        return "EPlanPlanningBundle:Plannification:mention.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 83,  90 => 37,  79 => 29,  62 => 15,  54 => 11,  51 => 10,  47 => 9,  44 => 8,  33 => 6,  30 => 5,  11 => 4,);
    }
}
