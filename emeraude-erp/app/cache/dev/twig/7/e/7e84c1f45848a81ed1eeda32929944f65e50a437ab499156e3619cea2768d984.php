<?php

/* EPlanPlanningBundle:Enseignant:indexEns.html.twig */
class __TwigTemplate_7e84c1f45848a81ed1eeda32929944f65e50a437ab499156e3619cea2768d984 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::planningTemplate.html.twig", "EPlanPlanningBundle:Enseignant:indexEns.html.twig", 2);
        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::planningTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        // line 4
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_index_enseignant");
        echo "\">Charger les ECs</a>
";
    }

    public function getTemplateName()
    {
        return "EPlanPlanningBundle:Enseignant:indexEns.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 2,);
    }
}
