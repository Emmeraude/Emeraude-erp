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
            'script' => array($this, 'block_script'),
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
               
                <input type=\"hidden\" name=\"id\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "id", array()), "html", null, true);
        echo "\">
              <div class=\"box\">
                <!--div class=\"box-header with-border\">
                  <h3 class=\"box-title\">B</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                    <label >Selectionner les ECs en Cours Magistraux</label>
                    <select multiple=\"multiple\" name=\"cm[]\" class=\"mySelect\">
                    ";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listEc"]) ? $context["listEc"] : $this->getContext($context, "listEc")));
        foreach ($context['_seq'] as $context["_key"] => $context["ec"]) {
            // line 41
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ec"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ec"], "code", array()), "html", null, true);
            echo " </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ec'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                    </select>
                </div>
                <div class=\"box-body\">
                    <label >Selectionner les ECs en Travaux Dirrigés</label>
                    <select multiple=\"multiple\" name=\"td[]\" class=\"mySelect\">
                    ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listEc"]) ? $context["listEc"] : $this->getContext($context, "listEc")));
        foreach ($context['_seq'] as $context["_key"] => $context["ec"]) {
            // line 49
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ec"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ec"], "code", array()), "html", null, true);
            echo " </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ec'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                    </select>
                </div>
                <div class=\"box-body\">
                    <label >Selectionner les ECs en Travaux Pratiques</label>
                    <select multiple=\"multiple\" name=\"tp[]\" class=\"mySelect\">
                    ";
        // line 56
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listEc"]) ? $context["listEc"] : $this->getContext($context, "listEc")));
        foreach ($context['_seq'] as $context["_key"] => $context["ec"]) {
            // line 57
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ec"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ec"], "code", array()), "html", null, true);
            echo " </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ec'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                    </select>
                </div><!-- /.box-body -->
              
              </div><!-- /.box -->
              
               <input class=\"btn btn-primary\" style=\"margin-right: 50px;\" type=\"submit\" value=\"allouer\">
               <input class=\"btn btn-primary\" style=\"margin-right: 50px;\" type=\"reset\" value=\"Annuler\">
              <form style=\"display :inline-block;\" method=\"post\" action=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_modif_enseignant");
        echo "\">
               <input type=\"hidden\" name=\"id\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "id", array()), "html", null, true);
        echo "\">
               <input  class=\"btn btn-primary\" type=\"submit\" value=\"Back\">
               </form>  
              </form>
               
               <!--/section-->
         
        </section>

     
    
 ";
    }

    // line 79
    public function block_script($context, array $blocks = array())
    {
        // line 80
        echo "    <script src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("NosScripts/js/jquery.sumoselect.min.js"), "html", null, true);
        echo " type=\"text/javascript\"></script>
    <link href=";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("NosScripts/css/sumoselect.css"), "html", null, true);
        echo " rel=\"stylesheet\" />
    <script type=\"text/javascript\">
        \$('.mySelect').SumoSelect({placeholder: 'Selectionner les Ecs'});
    </script>
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
        return array (  180 => 81,  175 => 80,  172 => 79,  156 => 67,  152 => 66,  143 => 59,  132 => 57,  128 => 56,  121 => 51,  110 => 49,  106 => 48,  99 => 43,  88 => 41,  84 => 40,  73 => 32,  68 => 30,  42 => 9,  38 => 7,  35 => 6,  30 => 4,  11 => 3,);
    }
}
