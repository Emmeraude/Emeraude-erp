<?php

/* EPlanPlanningBundle:Division:manageDivision.html.twig */
class __TwigTemplate_4cfc856282c1760845b7dd256321003abc11643038e31aa6ffe6973165895520 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EPlanPlanningBundle::template.html.twig", "EPlanPlanningBundle:Division:manageDivision.html.twig", 1);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'explicationTitrePage' => array($this, 'block_explicationTitrePage'),
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
    public function block_titrePage($context, array $blocks = array())
    {
        echo "Gestion";
    }

    // line 3
    public function block_explicationTitrePage($context, array $blocks = array())
    {
    }

    // line 4
    public function block_pageCentrale($context, array $blocks = array())
    {
        // line 5
        echo "    
            <div class=\"col-md-3\">
              <a href=\"compose.html\" class=\"btn btn-primary btn-block margin-bottom\">Editer</a>
              <div class=\"box box-solid\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">D&eacute;partements</h3>
                  <div class=\"box-tools\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                  </div>
                </div>
                <div class=\"box-body no-padding\">
                  <ul class=\"nav nav-pills nav-stacked\">
                      ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["departements"]) ? $context["departements"] : $this->getContext($context, "departements")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["departement"]) {
            // line 18
            echo "                          ";
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 19
                echo "                              <li class=\"active\"><a href=\"#\"><i class=\"fa fa-inbox\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["departement"], "nom", array()), "html", null, true);
                echo "<span class=\"label label-primary pull-right\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["departement"], "nombreDeMention", array()), "html", null, true);
                echo "</span></a></li>
                          ";
            } elseif ((($this->getAttribute(            // line 20
$context["loop"], "index0", array()) % 5) == 1)) {
                // line 21
                echo "                            <li><a href=\"#\"><i class=\"fa fa-envelope-o\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["departement"], "nom", array()), "html", null, true);
                echo " <span class=\"label label-warning pull-right\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["departement"], "nombreDeMention", array()), "html", null, true);
                echo "</span></a></li>
                          ";
            } elseif ((($this->getAttribute(            // line 22
$context["loop"], "index0", array()) % 5) == 2)) {
                // line 23
                echo "                            <li><a href=\"#\"><i class=\"fa fa-file-text-o\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["departement"], "nom", array()), "html", null, true);
                echo " <span class=\"label label-warning pull-right\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["departement"], "nombreDeMention", array()), "html", null, true);
                echo "</span></a></li>
                          ";
            } elseif ((($this->getAttribute(            // line 24
$context["loop"], "index0", array()) % 5) == 3)) {
                // line 25
                echo "                            <li><a href=\"#\"><i class=\"fa fa-filter\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["departement"], "nom", array()), "html", null, true);
                echo " <span class=\"label label-warning pull-right\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["departement"], "nombreDeMention", array()), "html", null, true);
                echo "</span></a></li>
                          ";
            } elseif ((($this->getAttribute(            // line 26
$context["loop"], "index0", array()) % 5) == 4)) {
                // line 27
                echo "                            <li><a href=\"#\"><i class=\"fa fa-trash-o\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["departement"], "nom", array()), "html", null, true);
                echo " <span class=\"label label-warning pull-right\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["departement"], "nombreDeMention", array()), "html", null, true);
                echo "</span></a></li>
                          ";
            } else {
                // line 29
                echo "                            <li><a href=\"#\"><i class=\"fa fa-inbox\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["departement"], "nom", array()), "html", null, true);
                echo " <span class=\"label label-warning pull-right\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["departement"], "nombreDeMention", array()), "html", null, true);
                echo "</span></a></li>
                          ";
            }
            // line 31
            echo "                      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['departement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                  </ul>
                </div><!-- /.box-body -->
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
                    <li><a href=\"#\"><i class=\"fa fa-circle-o text-light-blue\"></i> Reconduire les Grilles</a></li>
                    <li><a href=\"#\"><i class=\"fa fa-circle-o text-light-blue\"></i> Reconduire toutes les Grilles</a></li>
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
        // line 82
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["departements"]) ? $context["departements"] : $this->getContext($context, "departements")), 0, array(), "array"), "mentions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mention"]) {
            // line 83
            echo "                          ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["mention"], "parcourtTypes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["parcourtType"]) {
                // line 84
                echo "                              <tr>
                                <td><input type=\"checkbox\" /></td>
                                <td class=\"mailbox-star\"><a href=\"#\"><i class=\"fa fa-star text-yellow\"></i></a></td>
                                <td class=\"mailbox-name\"><a href=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("e_plan_planning_view_parcourt_Type", array("id" => $this->getAttribute($context["parcourtType"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["parcourtType"], "code", array()), "html", null, true);
                echo "</a></td>
                                <td class=\"mailbox-subject\"><b>";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($context["mention"], "nom", array()), "html", null, true);
                echo "</b> - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["parcourtType"], "nom", array()), "html", null, true);
                echo "</td>
                                <td class=\"mailbox-attachment\"></td>
                                <td class=\"mailbox-date\">";
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute($context["parcourtType"], "nombreEtudiants", array()), "html", null, true);
                echo " &eacute;tudiants</td>
                              </tr>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parcourtType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "    
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mention'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
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

    public function getTemplateName()
    {
        return "EPlanPlanningBundle:Division:manageDivision.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 94,  232 => 92,  223 => 90,  216 => 88,  210 => 87,  205 => 84,  200 => 83,  196 => 82,  144 => 32,  130 => 31,  122 => 29,  114 => 27,  112 => 26,  105 => 25,  103 => 24,  96 => 23,  94 => 22,  87 => 21,  85 => 20,  78 => 19,  75 => 18,  58 => 17,  44 => 5,  41 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
