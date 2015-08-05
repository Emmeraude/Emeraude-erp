<?php

/* EPlanPlanningBundle:Grille:EnregistrerEc.html.twig */
class __TwigTemplate_60336767d03154cae113ebf9effba4be3b83705524f01671ed629caf866a9eaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EPlanPlanningBundle::template.html.twig", "EPlanPlanningBundle:Grille:EnregistrerEc.html.twig", 1);
        $this->blocks = array(
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

    // line 2
    public function block_contenu($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"box\" style=\"text-align: justify; width: 400px\">
  <form class=\"box-body\" method=\"post\" action=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_enregitrer_Ec");
        echo "\"  style=\"margin-bottom: 100px;\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 6
        echo "   ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
   <div style=\"margin-bottom: 20px;\">
     ";
        // line 9
        echo "     ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", array()), 'label', array("label" => "Code de l'EC"));
        echo "
     ";
        // line 11
        echo "     ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", array()), 'errors');
        echo "
     ";
        // line 13
        echo "     ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", array()), 'widget');
        echo "
   </div>
   ";
        // line 16
        echo "   <div style=\"margin-bottom: 20px;\">
     ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle", array()), 'label', array("label" => "Libellé de l'EC"));
        echo "
     ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle", array()), 'errors');
        echo "
     ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle", array()), 'widget');
        echo "
   </div>

   <div style=\"margin-bottom: 20px;\">
     ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "volHeuresCM", array()), 'label', array("label" => " Volume Horaire du CM"));
        echo "
     ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "volHeuresCM", array()), 'errors');
        echo "
     ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "volHeuresCM", array()), 'widget');
        echo "
   </div>

   <div style=\"margin-bottom: 20px;\">
     ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "volHeuresTD", array()), 'label', array("label" => " Volume Horaire des TD"));
        echo "
     ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "volHeuresTD", array()), 'errors');
        echo "
     ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "volHeuresTD", array()), 'widget');
        echo "
   </div>

   <div style=\"margin-bottom: 20px;\">
     ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "volHeuresTP", array()), 'label', array("label" => " Volume Horaire des TP"));
        echo "
     ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "volHeuresTP", array()), 'errors');
        echo "
     ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "volHeuresTP", array()), 'widget');
        echo "
   </div>

   <div style=\"margin-bottom: 20px;\">
     ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveau", array()), 'label', array("label" => "Etape de l'EC"));
        echo "
     ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveau", array()), 'errors');
        echo "
     ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveau", array()), 'widget');
        echo "
   </div>

   
   <div style=\"margin-bottom: 20px;\">
     ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement", array()), 'label', array("label" => "Département de l'EC"));
        echo "
     ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement", array()), 'errors');
        echo "
     ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement", array()), 'widget');
        echo "
   </div>
   
   ";
        // line 54
        echo "   <div>
   <input class=\"btn btn-success\" style=\"display: inline;\" value=\"Enregistrer\" type=\"submit\" style=\"margin-right: 100px;\"/> 
   <input class=\"btn btn-warning\" value=\"Annuler\" style=\"display: inline;\" type=\"reset\" /> 
  </div>
  </form>
</div>
   ";
    }

    public function getTemplateName()
    {
        return "EPlanPlanningBundle:Grille:EnregistrerEc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 54,  149 => 50,  145 => 49,  141 => 48,  133 => 43,  129 => 42,  125 => 41,  118 => 37,  114 => 36,  110 => 35,  103 => 31,  99 => 30,  95 => 29,  88 => 25,  84 => 24,  80 => 23,  73 => 19,  69 => 18,  65 => 17,  62 => 16,  56 => 13,  51 => 11,  46 => 9,  40 => 6,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
