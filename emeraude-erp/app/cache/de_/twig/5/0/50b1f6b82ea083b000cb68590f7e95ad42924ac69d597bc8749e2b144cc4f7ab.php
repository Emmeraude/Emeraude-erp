<?php

/* EPlanPlanningBundle:Enseignant:modifEnseignant.html.twig */
class __TwigTemplate_50b1f6b82ea083b000cb68590f7e95ad42924ac69d597bc8749e2b144cc4f7ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EPlanPlanningBundle::template.html.twig", "EPlanPlanningBundle:Enseignant:modifEnseignant.html.twig", 2);
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
        // line 4
        echo "  Modification de  l'Enseignant  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "prenom", array()), "html", null, true);
        echo "
";
    }

    // line 6
    public function block_contenu($context, array $blocks = array())
    {
        // line 7
        echo "    
   <div class=\"box\">
              
                <div class=\"box-body\">  
     <form action=\"#\" method=\"post\">
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "id", array()), "html", null, true);
        echo "\"/>
        <input type=\"hidden\" name=\"nom\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "nom", array()), "html", null, true);
        echo "\"/>
         <input type=\"hidden\" name=\"prenom\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "prenom", array()), "html", null, true);
        echo "\"/>
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Information Personnelle\"/>
       </form>
         
         <form action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_attrib_ec_enseignant");
        echo "\" method=\"post\">
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "id", array()), "html", null, true);
        echo "\"/>
        <input type=\"hidden\" name=\"nom\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "nom", array()), "html", null, true);
        echo "\"/>
         <input type=\"hidden\" name=\"prenom\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "prenom", array()), "html", null, true);
        echo "\"/>
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Ajouter des ECs\"/>
       </form>
         
        <form action=\"#\" method=\"post\">
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "id", array()), "html", null, true);
        echo "\"/>
        <input type=\"hidden\" name=\"nom\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "nom", array()), "html", null, true);
        echo "\"/>
         <input type=\"hidden\" name=\"prenom\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "prenom", array()), "html", null, true);
        echo "\"/>
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Supprimer des ECs\"/>
       </form>
         </div>
   </div>
    <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_consult_enseignant");
        echo "\" class=\"btn btn-primary\"> Retour</a>
";
    }

    public function getTemplateName()
    {
        return "EPlanPlanningBundle:Enseignant:modifEnseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 33,  94 => 28,  90 => 27,  86 => 26,  78 => 21,  74 => 20,  70 => 19,  66 => 18,  59 => 14,  55 => 13,  51 => 12,  44 => 7,  41 => 6,  32 => 4,  29 => 3,  11 => 2,);
    }
}
