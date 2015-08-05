<?php

/* EPlanPlanningBundle:Enseignant:ficheEnseignant.html.twig */
class __TwigTemplate_448f2efe892fe35f97d26f3cec3b67097e3fbe384f6cf457edeb6a7e8bf6fc0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EPlanPlanningBundle::template.html.twig", "EPlanPlanningBundle:Enseignant:ficheEnseignant.html.twig", 2);
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
        echo "    Fiche Technique de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "prenom", array()), "html", null, true);
        echo " pour l'année academique 2014/2015
";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "    
    <div class=\"box\">
       <div class=\"box-header with-border\">
         <h3 class=\"box-title\">Identité</h3>
       </div>
     <div class=\"box-body\">   
   <h5 style=\"margin-bottom: 10px;\">    
     Nom(s) : ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "nom", array()), "html", null, true);
        echo "
   </h5><h5  style=\"margin-bottom: 10px;\"> 
     Prenom(s) : ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "prenom", array()), "html", null, true);
        echo "
    </h5><h5 style=\"margin-bottom: 10px;\"> 
     Grade : ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "titre", array()), "html", null, true);
        echo "
     </h5><h5 style=\"margin-bottom: 10px;\"> 
     Departement : ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "departement", array()), "nom", array()), "html", null, true);
        echo "
     </h5>
     </div>
    </div>
    
    <div class=\"box\">
       <div class=\"box-header with-border\">
         <h3 class=\"box-title\">Contacts</h3>
       </div>
     <div class=\"box-body\">   
     <h5 style=\"margin-bottom: 10px;\">   
     Tel : ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "tel", array()), "html", null, true);
        echo "
    </h5><h5 style=\"margin-bottom: 10px;\">
     E-mail : ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "email", array()), "html", null, true);
        echo "
     </h5>
     </div>
    </div>
     
     <div class=\"box\">
       <div class=\"box-header with-border\">
         <h3 class=\"box-title\">Cours Magistraux</h3>
       </div>
     <div class=\"box-body\">   
     
     </div>
    </div>
     <div class=\"box\">
       <div class=\"box-header with-border\">
         <h3 class=\"box-title\">Travaux Dirrigée</h3>
       </div>
     <div class=\"box-body\">   
    
     </div>
    </div>
     <div class=\"box\">
       <div class=\"box-header with-border\">
         <h3 class=\"box-title\">Travaux Pratiques</h3>
       </div>
     <div class=\"box-body\">   
    
     </div>
    </div>
     <a class=\"btn btn-primary\" style=\"margin-top: 10px;\" href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_consult_enseignant");
        echo "\"><<</a>
     
";
    }

    public function getTemplateName()
    {
        return "EPlanPlanningBundle:Enseignant:ficheEnseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 63,  87 => 34,  82 => 32,  68 => 21,  63 => 19,  58 => 17,  53 => 15,  44 => 8,  41 => 7,  32 => 4,  29 => 3,  11 => 2,);
    }
}
