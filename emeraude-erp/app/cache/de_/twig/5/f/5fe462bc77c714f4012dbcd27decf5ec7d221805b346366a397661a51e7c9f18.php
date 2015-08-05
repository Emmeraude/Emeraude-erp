<?php

/* EPlanPlanningBundle:Division:menuDepartement.html.twig */
class __TwigTemplate_5fe462bc77c714f4012dbcd27decf5ec7d221805b346366a397661a51e7c9f18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo " 
                <div class=\"box box-solid\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">D&eacute;partements</h3>
                  <div class=\"box-tools\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                  </div>
                </div>
                <div class=\"box-body no-padding\">
                ";
        // line 10
        if ( !(null === (isset($context["departements"]) ? $context["departements"] : $this->getContext($context, "departements")))) {
            // line 11
            echo "                  <ul class=\"nav nav-pills nav-stacked\">
                      ";
            // line 12
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
                // line 13
                echo "                          ";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    // line 14
                    echo "                              <li class=\"active\"><a href=\"#\"><i class=\"fa fa-inbox\"></i> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["departement"], "nom", array()), "html", null, true);
                    echo "<span class=\"label label-primary pull-right\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["departement"], "nombreDeMention", array()), "html", null, true);
                    echo "</span></a></li>
                          ";
                } elseif ((($this->getAttribute(                // line 15
$context["loop"], "index0", array()) % 5) == 1)) {
                    // line 16
                    echo "                            <li><a href=\"#\"><i class=\"fa fa-envelope-o\"></i> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["departement"], "nom", array()), "html", null, true);
                    echo " <span class=\"label label-warning pull-right\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["departement"], "nombreDeMention", array()), "html", null, true);
                    echo "</span></a></li>
                          ";
                } elseif ((($this->getAttribute(                // line 17
$context["loop"], "index0", array()) % 5) == 2)) {
                    // line 18
                    echo "                            <li><a href=\"#\"><i class=\"fa fa-file-text-o\"></i> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["departement"], "nom", array()), "html", null, true);
                    echo " <span class=\"label label-warning pull-right\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["departement"], "nombreDeMention", array()), "html", null, true);
                    echo "</span></a></li>
                          ";
                } elseif ((($this->getAttribute(                // line 19
$context["loop"], "index0", array()) % 5) == 3)) {
                    // line 20
                    echo "                            <li><a href=\"#\"><i class=\"fa fa-filter\"></i> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["departement"], "nom", array()), "html", null, true);
                    echo " <span class=\"label label-warning pull-right\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["departement"], "nombreDeMention", array()), "html", null, true);
                    echo "</span></a></li>
                          ";
                } elseif ((($this->getAttribute(                // line 21
$context["loop"], "index0", array()) % 5) == 4)) {
                    // line 22
                    echo "                            <li><a href=\"#\"><i class=\"fa fa-trash-o\"></i> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["departement"], "nom", array()), "html", null, true);
                    echo " <span class=\"label label-warning pull-right\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["departement"], "nombreDeMention", array()), "html", null, true);
                    echo "</span></a></li>
                          ";
                } else {
                    // line 24
                    echo "                            <li><a href=\"#\"><i class=\"fa fa-inbox\"></i> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["departement"], "nom", array()), "html", null, true);
                    echo " <span class=\"label label-warning pull-right\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["departement"], "nombreDeMention", array()), "html", null, true);
                    echo "</span></a></li>
                          ";
                }
                // line 26
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
            // line 27
            echo "                  </ul>
                  ";
        } else {
            // line 29
            echo "                  ";
        }
        // line 30
        echo "                </div><!-- /.box-body -->
              </div><!-- /. box -->
            ";
    }

    public function getTemplateName()
    {
        return "EPlanPlanningBundle:Division:menuDepartement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 30,  125 => 29,  121 => 27,  107 => 26,  99 => 24,  91 => 22,  89 => 21,  82 => 20,  80 => 19,  73 => 18,  71 => 17,  64 => 16,  62 => 15,  55 => 14,  52 => 13,  35 => 12,  32 => 11,  30 => 10,  19 => 1,);
    }
}
