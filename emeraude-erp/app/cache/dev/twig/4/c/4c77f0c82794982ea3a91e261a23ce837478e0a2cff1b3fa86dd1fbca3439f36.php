<?php

/* EPlanPlanningBundle:Grille:editOneGrille.html.twig */
class __TwigTemplate_4c77f0c82794982ea3a91e261a23ce837478e0a2cff1b3fa86dd1fbca3439f36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EPlanPlanningBundle::template.html.twig", "EPlanPlanningBundle:Grille:editOneGrille.html.twig", 1);
        $this->blocks = array(
            'contenuDeGauche' => array($this, 'block_contenuDeGauche'),
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
    public function block_contenuDeGauche($context, array $blocks = array())
    {
        // line 3
        echo "      <!-- general form elements disabled -->
              <div class=\"box box-warning\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">Grille De Programme</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\" >
                    <!--p><a href=\"#\" class=\"pull-right\">Selectionner une UE existante</a></p-->
                    <form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_register_one_grille", array("id" => 1));
        echo "\" role=\"form\" class=\"form-horizontal\" id=\"formulaire\">
                    <!-- text input -->
                    <div class=\"templateUE box-header\">
                        <div class=\"row\" style=\"padding-left: 10px;padding-right: 10px\">
                            <div class=\"form-group\">
                                <label class=\"col-lg-3\">Code De L'UE </label>
                                <div class=\"col-lg-9\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\" />
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"row\" style=\"padding-left: 10px;padding-right: 10px\">
                            <div class=\"form-group\">
                                <label class=\"col-lg-3\">Libelle De L'UE </label>
                                <div class=\"col-lg-9\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\" />
                                </div>
                            </div>
                        </div>
                        
                        <!-- Select multiple-->
                        <div class=\"row\" style=\"padding-left: 10px;padding-right: 10px\">
                            <div class=\"form-group\">
                                <label class=\"col-lg-3\">Ecs de l'ue</label>
                                <div class=\"col-lg-9\">
                                    <select multiple class=\"form-control\">
                                        ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["etape"]) ? $context["etape"] : $this->getContext($context, "etape")), "parcourtType", array()), "mention", array()), "departement", array()), "ecs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ec"]) {
            // line 38
            echo "                                         <option>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ec"], "code", array()), "html", null, true);
            echo " </option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ec'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"row\" style=\"padding-left: 10px;padding-right: 10px;display: none\">
                            <div class=\"form-group\">
                                <label class=\"col-lg-3\">Ecs de l'ue</label>
                                <div class=\"col-lg-9\">
                                    <select multiple class=\"form-control\" disabled>
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <a href=\"#\" class=\"btn btn-twitter pull-right\" style=\"margin-left: 10px\">Valider</a> <a href=\"#\" class=\"btn btn-warning pull-right\">Selectionner</a> 
                    </div>
                    
                     <div style=\"display: none\" id=\"templateUE\" class=\"templateUE box-header\" style=\"margin-top: 100px;\">
                        <div class=\"row\" style=\"padding-left: 10px;padding-right: 10px\">
                            <div class=\"form-group\">
                                <label class=\"col-lg-3\">Code De L'UE </label>
                                <div class=\"col-lg-9\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\" />
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"row\" style=\"padding-left: 10px;padding-right: 10px\">
                            <div class=\"form-group\">
                                <label class=\"col-lg-3\">Libelle De L'UE </label>
                                <div class=\"col-lg-9\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\" />
                                </div>
                            </div>
                        </div>
                        
                        <!-- Select multiple-->
                        <div class=\"row\" style=\"padding-left: 10px;padding-right: 10px\">
                            <div class=\"form-group\">
                                <label class=\"col-lg-3\">Ecs de l'ue</label>
                                <div class=\"col-lg-9\">
                                    <select multiple class=\"form-control\">
                                        ";
        // line 87
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["etape"]) ? $context["etape"] : $this->getContext($context, "etape")), "parcourtType", array()), "mention", array()), "departement", array()), "ecs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ec"]) {
            // line 88
            echo "                                         <option>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ec"], "code", array()), "html", null, true);
            echo " </option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ec'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"row\" style=\"padding-left: 10px;padding-right: 10px;display: none\">
                            <div class=\"form-group\">
                                <label class=\"col-lg-3\">Ecs de l'ue</label>
                                <div class=\"col-lg-9\">
                                    <select multiple class=\"form-control\" disabled>
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <a href=\"#\" class=\"btn btn-twitter pull-right\" style=\"margin-left: 10px\">Valider</a> <a href=\"#\" class=\"btn btn-warning pull-right\">Selectionner</a> 
                    </div>
                    <a href=\"#\" class=\"btn btn-danger\" id=\"addUE\">ajouter une UE</a><button type=\"submit\" class=\"btn btn-success pull-right\">Terminer</button>
                  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
";
    }

    // line 116
    public function block_script($context, array $blocks = array())
    {
        // line 117
        echo "    <script src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("NosScripts/js/editGrille.js"), "html", null, true);
        echo " type=\"text/javascript\"></script>
";
    }

    public function getTemplateName()
    {
        return "EPlanPlanningBundle:Grille:editOneGrille.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 117,  175 => 116,  146 => 90,  137 => 88,  133 => 87,  84 => 40,  75 => 38,  71 => 37,  41 => 10,  32 => 3,  29 => 2,  11 => 1,);
    }
}
