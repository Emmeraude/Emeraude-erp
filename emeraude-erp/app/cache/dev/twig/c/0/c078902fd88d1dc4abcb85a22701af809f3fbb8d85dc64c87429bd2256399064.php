<?php

/* EPlanPlanningBundle:SalleDispo:SalleDisponible.html.twig */
class __TwigTemplate_c078902fd88d1dc4abcb85a22701af809f3fbb8d85dc64c87429bd2256399064 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EPlanPlanningBundle::template.html.twig", "EPlanPlanningBundle:SalleDispo:SalleDisponible.html.twig", 1);
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
        echo "salle disponible";
    }

    // line 3
    public function block_explicationTitrePage($context, array $blocks = array())
    {
        echo " la liste des salle disponible pour programmation des cours et travaux diriges";
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
        $context['_seq'] = twig_ensure_traversable($context["disponibilite"]);
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
        foreach ($context['_seq'] as $context["_key"] => $context["disponibilite"]) {
            // line 18
            echo "                          ";
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 19
                echo "                              <li class=\"active\"><a href=\"#\"><i class=\"fa fa-inbox\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["disponibilite"], "nom", array()), "html", null, true);
                echo "<span class=\"label label-primary pull-right\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["disponibilite"], "NombreSalle", array()), "html", null, true);
                echo "</span></a></li>
                          ";
            } elseif ((($this->getAttribute(            // line 20
$context["loop"], "index0", array()) % 5) == 1)) {
                // line 21
                echo "                            <li><a href=\"#\"><i class=\"fa fa-envelope-o\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["disponibilite"], "nom", array()), "html", null, true);
                echo " <span class=\"label label-warning pull-right\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["disponibilite"], "NombreSalle", array()), "html", null, true);
                echo "</span></a></li>
                          ";
            } elseif ((($this->getAttribute(            // line 22
$context["loop"], "index0", array()) % 5) == 2)) {
                // line 23
                echo "                            <li><a href=\"#\"><i class=\"fa fa-file-text-o\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["disponibilite"], "nom", array()), "html", null, true);
                echo " <span class=\"label label-warning pull-right\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["disponibilite"], "NombreSalle", array()), "html", null, true);
                echo "</span></a></li>
                          ";
            } elseif ((($this->getAttribute(            // line 24
$context["loop"], "index0", array()) % 5) == 3)) {
                // line 25
                echo "                            <li><a href=\"#\"><i class=\"fa fa-filter\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["disponibilite"], "nom", array()), "html", null, true);
                echo " <span class=\"label label-warning pull-right\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["disponibilite"], "NombreSalle", array()), "html", null, true);
                echo "</span></a></li>
                          ";
            } elseif ((($this->getAttribute(            // line 26
$context["loop"], "index0", array()) % 5) == 4)) {
                // line 27
                echo "                            <li><a href=\"#\"><i class=\"fa fa-trash-o\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["disponibilite"], "nom", array()), "html", null, true);
                echo " <span class=\"label label-warning pull-right\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["disponibilite"], "NombreSalle", array()), "html", null, true);
                echo "</span></a></li>
                          ";
            } else {
                // line 29
                echo "                            <li><a href=\"#\"><i class=\"fa fa-inbox\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["disponibilite"], "nom", array()), "html", null, true);
                echo " <span class=\"label label-warning pull-right\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["disponibilite"], "NombreSalle", array()), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['disponibilite'], $context['_parent'], $context['loop']);
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
                    <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_registrer_salle");
        echo "\"><i class=\"fa fa-circle-o text-red\"></i> Charger les salles</a></li>
                    <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_registrer_salle");
        echo "\"><i class=\"fa fa-circle-o text-yellow\"></i>modifier une salle</a></li>
                    <li><a href=\"#\"><i class=\"fa fa-circle-o text-light-blue\"></i> reconduire une salle</a></li>
                    <li><a href=\"#\"><i class=\"fa fa-circle-o text-light-blue\"></i> Reconduire toutes les salles</a></li>
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
        // line 84
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parcourtTypes"]) ? $context["parcourtTypes"] : $this->getContext($context, "parcourtTypes")));
        foreach ($context['_seq'] as $context["_key"] => $context["parcourtType"]) {
            // line 85
            echo "                              <tr>
                                <td><input type=\"checkbox\" /></td>
                                <td class=\"mailbox-star\"><a href=\"#\"><i class=\"fa fa-star text-yellow\"></i></a></td>
                                <td class=\"mailbox-name\"><a href=\"read-mail.html\">";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["parcourtType"], "code", array()), "html", null, true);
            echo "</a></td>
                                <td class=\"mailbox-subject\"><b>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["parcourtType"], "mention", array()), "nom", array()), "html", null, true);
            echo "</b> - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["parcourtType"], "nom", array()), "html", null, true);
            echo "</td>
                                <td class=\"mailbox-attachment\"></td>
                                <td class=\"mailbox-date\">";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["parcourtType"], "nombreEtudiants", array()), "html", null, true);
            echo " &eacute;tudiants</td>
                              </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parcourtType'], $context['_parent'], $context['loop']);
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
        return "EPlanPlanningBundle:SalleDispo:SalleDisponible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 94,  225 => 91,  218 => 89,  214 => 88,  209 => 85,  205 => 84,  163 => 45,  159 => 44,  145 => 32,  131 => 31,  123 => 29,  115 => 27,  113 => 26,  106 => 25,  104 => 24,  97 => 23,  95 => 22,  88 => 21,  86 => 20,  79 => 19,  76 => 18,  59 => 17,  45 => 5,  42 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
