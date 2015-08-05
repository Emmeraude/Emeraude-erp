<?php

/* EPlanPlanningBundle:Enseignant:consultEnseignant.html.twig */
class __TwigTemplate_94a84862c71b5c5e5ac14f7344c948119d2301f8d67abb29d2dec11adc2338be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EPlanPlanningBundle::template.html.twig", "EPlanPlanningBundle:Enseignant:consultEnseignant.html.twig", 2);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
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

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
    }

    // line 5
    public function block_contenu($context, array $blocks = array())
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
          <form style=\"float: right;\" action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_consult_enseignant");
        echo "\" method=\"post\"><input type=\"text\" name=\"critere\" placeholder=\"Entrez un nom\"/>
              <button class=\"btn btn-primary\" type=\"submit\" name=\"search\"> <span class=\"glyphicon glyphicon-search\"></span> </button>
          </form>
          <label>Classer par :</label><select>
              <option value=\"Titre\">Grade</option>
              <option value=\"Domaine\">Domaine</option>
              <option value=\"Departement\">Departement</option>
              
          </select>

        <!-- Main content -->
        <section class=\"content\">
              <div class=\"box\" style=\"border-top-color: skyblue;\">
                <div class=\"box-header with-border\" >
                  <h3 class=\"box-title\"><!--Professeurs--></h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                  <table class=\"table table-bordered\">
                    <tr>
                      <th style=\"width: 20px\">#</th>
                      <th>Noms et Prenoms</th>
                      <th>Telephone</th>
                      <th >E-mail</th>
                      <th ></th>
                      <th ></th>
                      <th></th>
                    </tr>
                    <tr>
                    
                    ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listEns"]) ? $context["listEns"] : $this->getContext($context, "listEns")));
        foreach ($context['_seq'] as $context["_key"] => $context["ens"]) {
            // line 46
            echo "                    
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "id", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "nom", array()), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "prenom", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "tel", array()), "html", null, true);
            echo "
                        <!--div class=\"progress progress-xs\">
                          <div class=\"progress-bar progress-bar-danger\" style=\"width: 55%\"></div>
                        </div-->
                      </td> 
                      <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "email", array()), "html", null, true);
            echo "<!--span class=\"badge bg-red\">55%</span--></td>
                      <td> <form action=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("e_plan_planning_fiche_enseignant");
            echo "\" method=\"post\">
                             <input type=\"hidden\" name=\"id\" value=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "id", array()), "html", null, true);
            echo "\"/>
                             <input type=\"hidden\" name=\"nom\" value=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "nom", array()), "html", null, true);
            echo "\"/>
                             <input type=\"hidden\" name=\"prenom\" value=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "prenom", array()), "html", null, true);
            echo "\"/>
                             <input class=\"btn btn-success\" type=\"submit\" value=\"Fiche\"/>
                          </form>
                      </td>
                           <td> <form action=\"";
            // line 62
            echo $this->env->getExtension('routing')->getPath("e_plan_planning_modif_enseignant");
            echo "\" method=\"post\">
                             <input type=\"hidden\" name=\"id\" value=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "id", array()), "html", null, true);
            echo "\"/>
                             <input type=\"hidden\" name=\"nom\" value=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "nom", array()), "html", null, true);
            echo "\"/>
                             <input type=\"hidden\" name=\"prenom\" value=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "prenom", array()), "html", null, true);
            echo "\"/>
                             <input class=\"btn btn-warning\" type=\"submit\" value=\"Modifier\"/>
                          </form>
                           </td>
                           <td><form action=\"";
            // line 69
            echo $this->env->getExtension('routing')->getPath("e_plan_planning_supp_enseignant");
            echo "\" method=\"post\">
                             <input type=\"hidden\" name=\"id\" value=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "id", array()), "html", null, true);
            echo "\"/>
                             <input type=\"hidden\" name=\"nom\" value=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "nom", array()), "html", null, true);
            echo "\"/>
                             <input type=\"hidden\" name=\"prenom\" value=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "prenom", array()), "html", null, true);
            echo "\"/>
                             <input class=\"btn btn-danger\" type=\"submit\" value=\"Supprimer\"/>
                          </form>
                      </td>
                    
                    </tr>
                    
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ens'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                    <tr>
                      
                    </tr>
                  </table>
                </div><!-- /.box-body -->
                <div class=\"box-footer clearfix\">
                  
                </div>
              </div><!-- /.box -->
              
              
               </section>

       
       
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
        return array (  174 => 80,  160 => 72,  156 => 71,  152 => 70,  148 => 69,  141 => 65,  137 => 64,  133 => 63,  129 => 62,  122 => 58,  118 => 57,  114 => 56,  110 => 55,  106 => 54,  98 => 49,  92 => 48,  88 => 47,  85 => 46,  81 => 45,  49 => 16,  37 => 6,  34 => 5,  29 => 3,  11 => 2,);
    }
}
