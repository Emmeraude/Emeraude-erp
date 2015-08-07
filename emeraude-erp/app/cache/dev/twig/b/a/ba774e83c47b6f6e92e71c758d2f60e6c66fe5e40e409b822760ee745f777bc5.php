<?php

/* EPlanPlanningBundle:Enseignant:suppEcEnseignant.html.twig */
class __TwigTemplate_ba774e83c47b6f6e92e71c758d2f60e6c66fe5e40e409b822760ee745f777bc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("EPlanPlanningBundle::template.html.twig", "EPlanPlanningBundle:Enseignant:suppEcEnseignant.html.twig", 3);
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

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "
          <h1>
           Suppression d'Ec à ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "nom", array()), "html", null, true);
        echo "
            <!--small>preview of simple tables</small-->
          </h1>
          <!--ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
            <li><a href=\"#\">Tables</a></li>
            <li class=\"active\">Simple</li>
          </ol-->
    
 <form method=\"POST\" action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_suppec_enseignant");
        echo "\">
     <div class=\"box\" style=\"border-top-color: skyblue;\">
       <div class=\"box-header with-border\">
         <h3 class=\"box-title\">Cours Magistraux</h3>
       </div>
     <div class=\"box-body\">   
     ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "ecsEnseignes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ec"]) {
            // line 26
            echo "       ";
            if (($this->getAttribute($context["ec"], "type", array()) == "CM")) {
                // line 27
                echo "           <div> <input type=\"checkbox\" name=\"listEcs[]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ec"], "ec", array()), "id", array()), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ec"], "ec", array()), "code", array()), "html", null, true);
                echo "</div>
       ";
            }
            // line 29
            echo "     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ec'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "     </div>
    </div>
     <div class=\"box\" style=\"border-top-color: skyblue;\">
       <div class=\"box-header with-border\">
         <h3 class=\"box-title\">Travaux Dirrigée</h3>
       </div>
     <div class=\"box-body\">   
       ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "ecsEnseignes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ec"]) {
            // line 38
            echo "       ";
            if (($this->getAttribute($context["ec"], "type", array()) == "TD")) {
                // line 39
                echo "         <div><input type=\"checkbox\" name=\"listEcs[]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ec"], "ec", array()), "id", array()), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ec"], "ec", array()), "code", array()), "html", null, true);
                echo "</div>
       ";
            }
            // line 41
            echo "     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ec'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "     </div>
    </div>
     <div class=\"box\" style=\"border-top-color: skyblue;\">
       <div class=\"box-header with-border\">
         <h3 class=\"box-title\">Travaux Pratiques</h3>
       </div>
     <div class=\"box-body\">   
      ";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "ecsEnseignes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ec"]) {
            // line 50
            echo "       ";
            if (($this->getAttribute($context["ec"], "type", array()) == "TP")) {
                // line 51
                echo "         <div><input type=\"checkbox\" name=\"listEcs[]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ec"], "ec", array()), "id", array()), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ec"], "ec", array()), "code", array()), "html", null, true);
                echo "</div>
       ";
            }
            // line 53
            echo "     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ec'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "     </div>
    </div>
     
      <input class=\"btn btn-primary\" style=\"margin-right: 50px;\" type=\"submit\" value=\"supp\">
               <input class=\"btn btn-primary\" style=\"margin-right: 50px;\" type=\"reset\" value=\"Annuler\">
              
     <a class=\"btn btn-primary\" style=\"margin-top: 10px;\" href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_consult_enseignant");
        echo "\"><<</a>
 </form>   
";
    }

    public function getTemplateName()
    {
        return "EPlanPlanningBundle:Enseignant:suppEcEnseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 60,  145 => 54,  139 => 53,  131 => 51,  128 => 50,  124 => 49,  115 => 42,  109 => 41,  101 => 39,  98 => 38,  94 => 37,  85 => 30,  79 => 29,  71 => 27,  68 => 26,  64 => 25,  55 => 19,  41 => 10,  37 => 8,  34 => 7,  29 => 4,  11 => 3,);
    }
}
