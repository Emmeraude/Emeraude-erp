<?php

/* EPlanPlanningBundle:Enseignant:attribEcEnseignant.html.twig */
class __TwigTemplate_ea9f502d82a2eaf61e9683601fb70d50e06b643e453329cee14dccff93707fa5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("EPlanPlanningBundle::template.html.twig", "EPlanPlanningBundle:Enseignant:attribEcEnseignant.html.twig", 3);
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

    // line 4
    public function block_titrePage($context, array $blocks = array())
    {
    }

    // line 6
    public function block_contenu($context, array $blocks = array())
    {
        // line 7
        echo "    <section class=\"content-header\">
          <h1>
            Attribution d'Ec à ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "nom", array()), "html", null, true);
        echo "
            <!--small>preview of simple tables</small-->
          </h1></br> </br>
          <!--ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
            <li><a href=\"#\">Tables</a></li>
            <li class=\"active\">Simple</li>
          </ol-->
          
      
         
          
          
          
               <!-- <section class=\"content\">Main content -->
        
               <div style=\"margin-bottom: 20px; float: right;\">
                   <form method=\"\" action=\"\"><input type=\"text\" placeholder=\"Tapez un code\">
                                             <input type=\"submit\" value=\"Rechercher\">
                   </form>
               </div>
            <form method=\"POST\" action=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_ec_enseignant");
        echo "\">
                <label style=\"font-size: 15px;\">Genre : </label><select name=\"type\" style=\"margin-bottom: 20px;\">
              <option value=\"CM\">Cours Magistral</option>
              <option value=\"TD\">Travaux Dirrigés</option>
              <option value=\"TP\">Travaux Pratiques</option>
          </select>
                <input type=\"hidden\" name=\"id\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "id", array()), "html", null, true);
        echo "\">
              <div class=\"box\">
                <!--div class=\"box-header with-border\">
                  <h3 class=\"box-title\">B</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                  <table class=\"table table-bordered\">
                   
                    <tr><th style=\"width: 20px\"></th>
                      <th style=\"width: 20px\">#</th>
                      <th>Code</th>
                      <th>Libelle</th>
                      <!--th style=\"width: 50px\">Libelle</th-->
                    </tr>
                    ";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listEc"]) ? $context["listEc"] : $this->getContext($context, "listEc")));
        foreach ($context['_seq'] as $context["_key"] => $context["ec"]) {
            // line 51
            echo "                    <tr>
                      <td><input type=\"checkbox\" name=\"ecEns[]\" value=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["ec"], "id", array()), "html", null, true);
            echo "\" /><!--span class=\"badge bg-red\">55%</span--></td>  
                     <!--a href=\"";
            // line 53
            echo $this->env->getExtension('routing')->getPath("e_plan_planning_index_enseignant");
            echo "\">Plus</a--><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ec"], "id", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["ec"], "code", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["ec"], "libelle", array()), "html", null, true);
            echo "
                        <!--div class=\"progress progress-xs\">
                          <div class=\"progress-bar progress-bar-danger\" style=\"width: 55%\"></div>
                        </div-->
                      </td> 
                      <!--td> <a href=\"";
            // line 60
            echo $this->env->getExtension('routing')->getPath("e_plan_planning_index_enseignant");
            echo "\">Plus</a></td-->
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ec'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                  </table>
                   
                 
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
              
               <input class=\"btn btn-primary\" style=\"margin-right: 50px;\" type=\"submit\" value=\"allouer\">
               <input class=\"btn btn-primary\" style=\"margin-right: 50px;\" type=\"reset\" value=\"Annuler\">
              <form style=\"display :inline-block;\" method=\"post\" action=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_modif_enseignant");
        echo "\">
               <input type=\"hidden\" name=\"id\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "id", array()), "html", null, true);
        echo "\">
               <input  class=\"btn btn-primary\" type=\"submit\" value=\"Back\">
               </form>  
              </form>
               
               <!--/section-->
         
        </section>

     
    
 ";
    }

    public function getTemplateName()
    {
        return "EPlanPlanningBundle:Enseignant:attribEcEnseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 81,  150 => 80,  131 => 63,  122 => 60,  114 => 55,  110 => 54,  104 => 53,  100 => 52,  97 => 51,  93 => 50,  76 => 36,  67 => 30,  41 => 9,  37 => 7,  34 => 6,  29 => 4,  11 => 3,);
    }
}
