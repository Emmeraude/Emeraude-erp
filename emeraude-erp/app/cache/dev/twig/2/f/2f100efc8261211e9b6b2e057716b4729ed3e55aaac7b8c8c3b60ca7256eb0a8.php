<?php

/* EPlanPlanningBundle:Grille:showOneGrillePDF.html.twig */
class __TwigTemplate_2f100efc8261211e9b6b2e057716b4729ed3e55aaac7b8c8c3b60ca7256eb0a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EPlanPlanningBundle::templateSansMenu.html.twig", "EPlanPlanningBundle:Grille:showOneGrillePDF.html.twig", 1);
        $this->blocks = array(
            'print' => array($this, 'block_print'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EPlanPlanningBundle::templateSansMenu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_print($context, array $blocks = array())
    {
        echo "onload=\"window.print()\"";
    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        // line 4
        echo "       <section class=\"invoice\">
          <!-- title row -->
          <div class=\"row\">
            <div class=\"col-xs-12\">
              <h2 class=\"page-header\">
                <i class=\"fa fa-globe\"></i> Grille De Programme
                <small class=\"pull-right\">Ann&eacute;e acad&eacute;mique: 2015-2016</small>
              </h2>
            </div><!-- /.col -->
          </div>
          <!-- info row -->
          <div class=\"row invoice-info\">
            <div class=\"col-sm-4 invoice-col\">
              Facult&eacute; Des Sciences
              <address>
                <strong>Departement : ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["etape"]) ? $context["etape"] : $this->getContext($context, "etape")), "parcourtType", array()), "mention", array()), "departement", array()), "nom", array()), "html", null, true);
        echo " </strong><br>
                Mention : ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["etape"]) ? $context["etape"] : $this->getContext($context, "etape")), "parcourtType", array()), "mention", array()), "nom", array()), "html", null, true);
        echo " <br>
                Parcourt-type : ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["etape"]) ? $context["etape"] : $this->getContext($context, "etape")), "parcourtType", array()), "nom", array()), "html", null, true);
        echo " <br/>
                Semestre : ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["etape"]) ? $context["etape"] : $this->getContext($context, "etape")), "grille", array()), "numeroSemestre", array()), "html", null, true);
        echo " 
              </address>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- Table row -->
          ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["etape"]) ? $context["etape"] : $this->getContext($context, "etape")), "grille", array()), "ueGrilles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ue"]) {
            // line 29
            echo "          <div class=\"row\">
            <div class=\"col-xs-12 table-responsive\">
              <table class=\"table table-bordered table-striped table-condensed\">
                  <caption>
                      <h5 class=\"text-bold text-center text-justify\">UE ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ue"], "ue", array()), "code", array()), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ue"], "ue", array()), "nom", array()), "html", null, true);
            echo "</h5>
                  </caption>
                <thead class=\"\">
                  <tr>
                      <th class=\"col-xs-1\"></th>
                      <th class=\"col-xs-4\">Code Ec</th>
                      <th class=\"col-xs-7\">Nom Ec</th>
                  </tr>
                </thead>
                <tbody>
                    ";
            // line 43
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["ue"], "ue", array()), "ecs", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["ec"]) {
                // line 44
                echo "                        <tr>
                            <td class=\"col-xs-1\">";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</td>
                            <td class=\"col-xs-4\">";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["ec"], "code", array()), "html", null, true);
                echo "</td>
                            <td class=\"col-xs-7\">";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["ec"], "libelle", array()), "html", null, true);
                echo "</td>
                        </tr>
                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ec'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                </tbody>
              </table>
            </div><!-- /.col -->
          </div><!-- /.row -->
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
          <!-- this row will not appear when printing -->
          
        </section>
";
    }

    public function getTemplateName()
    {
        return "EPlanPlanningBundle:Grille:showOneGrillePDF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 55,  146 => 50,  129 => 47,  125 => 46,  121 => 45,  118 => 44,  101 => 43,  86 => 33,  80 => 29,  76 => 28,  67 => 22,  63 => 21,  59 => 20,  55 => 19,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }
}
