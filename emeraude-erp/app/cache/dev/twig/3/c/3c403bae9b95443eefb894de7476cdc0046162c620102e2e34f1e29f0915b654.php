<?php

/* EPlanPlanningBundle:Grille:EnregistrerUE.html.twig */
class __TwigTemplate_3c403bae9b95443eefb894de7476cdc0046162c620102e2e34f1e29f0915b654 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EPlanPlanningBundle::template.html.twig", "EPlanPlanningBundle:Grille:EnregistrerUE.html.twig", 1);
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

    // line 2
    public function block_titrePage($context, array $blocks = array())
    {
        // line 3
        echo "            Enregistrement d'un UE
   
";
    }

    // line 6
    public function block_contenu($context, array $blocks = array())
    {
        // line 7
        echo " <form class=\"box-body\" method=\"post\" action=\"";
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_enregitrer_UE");
        echo "\"  style=\"margin-bottom: 100px;\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
<div style=\"margin-bottom: 20px;\">
";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label" => "Nom de l'UE"));
        echo "
";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "
</div>
";
        // line 19
        echo "<div style=\"margin-bottom: 20px;\">
";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", array()), 'label', array("label" => "Code de l'UE"));
        echo "
";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", array()), 'errors');
        echo "
";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", array()), 'widget');
        echo "
</div>

<div style=\"margin-bottom: 20px;\">
";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numSemestre", array()), 'label', array("label" => " Numéro du Semestre"));
        echo "
";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numSemestre", array()), 'errors');
        echo "
";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numSemestre", array()), 'widget');
        echo "
</div>
<div style=\"margin-bottom: 20px;\">
";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ecs", array()), 'label', array("label" => "Ecs de l'UE"));
        echo "
";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ecs", array()), 'errors');
        echo "
";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ecs", array()), 'widget');
        echo "
</div>
";
        // line 36
        echo "
<input class=\"btn btn-primary\" value=\"Enregistrer\" type=\"submit\" style=\"margin-right: 100px;\"/>
 <input class=\"btn btn-primary\" value=\"Annuler\" type=\"reset\" /> 
 </form> 
";
    }

    public function getTemplateName()
    {
        return "EPlanPlanningBundle:Grille:EnregistrerUE.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 36,  106 => 33,  102 => 32,  98 => 31,  92 => 28,  88 => 27,  84 => 26,  77 => 22,  73 => 21,  69 => 20,  66 => 19,  61 => 16,  57 => 14,  53 => 12,  48 => 9,  41 => 7,  38 => 6,  32 => 3,  29 => 2,  11 => 1,);
    }
}
