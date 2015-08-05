<?php

/* EPlanPlanningBundle:Presentation:RessourceIndisponible.html.twig */
class __TwigTemplate_e68ffb27ec45c8291a7ec48d197ceee892f642aa257110d8d0732b61e305293a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EPlanPlanningBundle::template.html.twig", "EPlanPlanningBundle:Presentation:RessourceIndisponible.html.twig", 1);
        $this->blocks = array(
            'pageCentrale' => array($this, 'block_pageCentrale'),
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
    public function block_pageCentrale($context, array $blocks = array())
    {
        // line 3
        echo "     <div class=\"col-md-3\">
              <a href=\"compose.html\" class=\"btn btn-primary btn-block margin-bottom\">Editer</a>
              <div class=\"box box-solid\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">D&eacute;partements</h3>
                  <div class=\"box-tools\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                  </div>
                </div>
                
              </div><!-- /. box -->
              <div class=\"box box-solid\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">Menu</h3>
                  <div class=\"box-tools\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                  </div>
                </div>
                <div class=\"box-body no-padding\">
                  <ul class=\"nav nav-pills nav-stacked\">
                    <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_load_division");
        echo "\"><i class=\"fa fa-circle-o text-red\"></i> Charger les Departements</a></li>
                  </ul>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class=\"col-md-9\">
              <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">Liste Des Parcourts Type</h3>
                  <div class=\"box-tools pull-right\">
                    <div class=\"has-feedback\">
                      <input type=\"text\" class=\"form-control input-sm\" placeholder=\"Enseignant\" />
                      <span class=\"glyphicon glyphicon-search form-control-feedback\"></span>
                    </div>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class=\"box-body no-padding\">
                 
                  <div class=\"callout callout-info\">
            <h4>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "title", array()), "html", null, true);
        echo "</h4>
            <p>";
        // line 43
        echo $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "messageUser", array());
        echo "</p>
          </div>
                </div><!-- /.box-body -->
                
              </div><!-- /. box -->
            </div><!-- /.col -->
";
    }

    public function getTemplateName()
    {
        return "EPlanPlanningBundle:Presentation:RessourceIndisponible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 43,  75 => 42,  53 => 23,  31 => 3,  28 => 2,  11 => 1,);
    }
}
