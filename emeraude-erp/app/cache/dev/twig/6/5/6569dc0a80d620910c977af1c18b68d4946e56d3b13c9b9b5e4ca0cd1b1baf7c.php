<?php

/* EPlanPlanningBundle:SalleDispo:Salleindisponible.html.twig */
class __TwigTemplate_6569dc0a80d620910c977af1c18b68d4946e56d3b13c9b9b5e4ca0cd1b1baf7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EPlanPlanningBundle::template.html.twig", "EPlanPlanningBundle:SalleDispo:Salleindisponible.html.twig", 1);
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
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_registrer_salle");
        echo "\"><i class=\"fa fa-circle-o text-red\"></i> Charger les salles</a></li>
                    <li><a href=\"#\"><i class=\"fa fa-circle-o text-yellow\"></i>modifier une salle</a></li>
                    <li><a href=\"#\"><i class=\"fa fa-circle-o text-light-blue\"></i> reconduire une salle</a></li>
                    <li><a href=\"#\"><i class=\"fa fa-circle-o text-light-blue\"></i> Reconduire toutes les salles</a></li>
                  </ul>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class=\"col-md-9\">
              <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">Liste Des sallles</h3>
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
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "title", array()), "html", null, true);
        echo "</h4>
            <p>";
        // line 46
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
        return "EPlanPlanningBundle:SalleDispo:Salleindisponible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 46,  78 => 45,  53 => 23,  31 => 3,  28 => 2,  11 => 1,);
    }
}
