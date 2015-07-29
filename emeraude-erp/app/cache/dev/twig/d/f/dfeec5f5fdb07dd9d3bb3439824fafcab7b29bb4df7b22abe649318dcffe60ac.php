<?php

/* EPlanPlanningBundle:ParcourtType:showParcourtType.html.twig */
class __TwigTemplate_dfeec5f5fdb07dd9d3bb3439824fafcab7b29bb4df7b22abe649318dcffe60ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EPlanPlanningBundle::template.html.twig", "EPlanPlanningBundle:ParcourtType:showParcourtType.html.twig", 1);
        $this->blocks = array(
            'pageCentrale' => array($this, 'block_pageCentrale'),
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

    // line 2
    public function block_pageCentrale($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"col-md-3\">
              <a href=\"compose.html\" class=\"btn btn-primary btn-block margin-bottom\">Editer</a>
               ";
        // line 5
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("EPlanPlanningBundle:Division:menuDepartement"));
        echo "
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
        // line 15
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_edit_one_grille");
        echo "\" id=\"editOne\"><i class=\"fa fa-circle-o text-red\"></i> Editer la grille</a></li>
                    <li><a href=\"#\"><i class=\"fa fa-circle-o text-light-blue\"></i> Reconduire les Grilles</a></li>
                    <li><a href=\"#\"><i class=\"fa fa-circle-o text-light-blue\"></i> Reconduire toutes les Grilles</a></li>
                  </ul>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            
            <div class=\"col-md-9\">
              <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parcourtType"]) ? $context["parcourtType"] : $this->getContext($context, "parcourtType")), "nom", array()), "html", null, true);
        echo "</h3>
                  <div class=\"box-tools pull-right\">
                    <div class=\"has-feedback\">
                      <input type=\"text\" class=\"form-control input-sm\" placeholder=\"Enseignant\" />
                      <span class=\"glyphicon glyphicon-search form-control-feedback\"></span>
                    </div>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class=\"box-body no-padding\">
                  <div class=\"mailbox-controls\">
                    <!-- Check all button -->
                    <button class=\"btn btn-default btn-sm checkbox-toggle\"><i class=\"fa fa-square-o\"></i></button>
                    <div class=\"btn-group\">
                      <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-trash-o\"></i></button>
                      <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-reply\"></i></button>
                      <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-share\"></i></button>
                    </div><!-- /.btn-group -->
                    <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-refresh\"></i></button>
                    <div class=\"pull-right\">
                      1-50/200
                      <div class=\"btn-group\">
                        <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-chevron-left\"></i></button>
                        <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-chevron-right\"></i></button>
                      </div><!-- /.btn-group -->
                    </div><!-- /.pull-right -->
                  </div>
                  <div class=\"table-responsive mailbox-messages\">
                    <table class=\"table table-hover table-striped\">
                      <tbody>
                          ";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["parcourtType"]) ? $context["parcourtType"] : $this->getContext($context, "parcourtType")), "etapes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["etape"]) {
            // line 56
            echo "                              <tr>
                                <td><input type=\"checkbox\" class=\"parcourt\" value =\"";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["etape"], "id", array()), "html", null, true);
            echo "\"/></td>
                                <td class=\"mailbox-star\"><a href=\"#\"><i class=\"fa fa-star text-yellow\"></i></a></td>
                                <td class=\"mailbox-name\"><a href=\"#\">";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parcourtType"]) ? $context["parcourtType"] : $this->getContext($context, "parcourtType")), "code", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["etape"], "numero", array()), "html", null, true);
            echo "</a></td>
                                <td class=\"mailbox-subject\"><b>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parcourtType"]) ? $context["parcourtType"] : $this->getContext($context, "parcourtType")), "nom", array()), "html", null, true);
            echo "</b> - Niveau";
            echo twig_escape_filter($this->env, $this->getAttribute($context["etape"], "numero", array()), "html", null, true);
            echo "</td>
                                <td class=\"mailbox-attachment\"></td>
                                <td class=\"mailbox-date\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parcourtType"]) ? $context["parcourtType"] : $this->getContext($context, "parcourtType")), "nombreEtudiants", array()), "html", null, true);
            echo " &eacute;tudiants</td>
                              </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etape'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                      </tbody>
                    </table><!-- /.table -->
                  </div><!-- /.mail-box-messages -->
                </div><!-- /.box-body -->
                <div class=\"box-footer no-padding\">
                  <div class=\"mailbox-controls\">
                    <!-- Check all button -->
                    <button class=\"btn btn-default btn-sm checkbox-toggle\"><i class=\"fa fa-square-o\"></i></button>                    
                    <div class=\"btn-group\">
                      <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-trash-o\"></i></button>
                      <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-reply\"></i></button>
                      <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-share\"></i></button>
                    </div><!-- /.btn-group -->
                    <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-refresh\"></i></button>
                    <div class=\"pull-right\">
                      1-50/200
                      <div class=\"btn-group\">
                        <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-chevron-left\"></i></button>
                        <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-chevron-right\"></i></button>
                      </div><!-- /.btn-group -->
                    </div><!-- /.pull-right -->
                  </div>
                </div>
              </div><!-- /. box -->
            </div><!-- /.col -->
";
    }

    // line 91
    public function block_script($context, array $blocks = array())
    {
        // line 92
        echo "    <script src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("NosScripts/js/manageShowParcourtType.js"), "html", null, true);
        echo " type=\"text/javascript\"></script>
";
    }

    public function getTemplateName()
    {
        return "EPlanPlanningBundle:ParcourtType:showParcourtType.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 92,  157 => 91,  128 => 65,  119 => 62,  112 => 60,  107 => 59,  102 => 57,  99 => 56,  95 => 55,  63 => 26,  49 => 15,  36 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }
}
