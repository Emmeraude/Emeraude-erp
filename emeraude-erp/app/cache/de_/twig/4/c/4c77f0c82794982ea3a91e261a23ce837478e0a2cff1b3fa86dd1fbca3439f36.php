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
                    <form role=\"form\" method=\"post\" class=\"form-horizontal\" id=\"formulaire\" ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " >
                            <div class=\"row\" style=\"padding-left: 10px;padding-right: 10px\">
                                <div class=\"form-group\">
                                    <label class=\"col-lg-3\">Semestre </label>
                                    <div class=\"col-lg-9\">
                                        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroSemestre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Enter ...")));
        echo "
                                    </div>
                                </div>
                            </div>
                        ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["nombreUes"]) ? $context["nombreUes"] : $this->getContext($context, "nombreUes")) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["indice"]) {
            // line 20
            echo "                              <!-- text input -->
                                <div class=\"templateUE box-header\">
                                    
                                    <div class=\"row\" style=\"padding-left: 10px;padding-right: 10px\">
                                        <div class=\"form-group\">
                                            <label class=\"col-lg-3\">Qualite De L'UE </label>
                                            <div class=\"col-lg-9\">
                                                ";
            // line 27
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ueGrilles", array()), $context["indice"], array(), "array"), "quality", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Enter ...")));
            echo "
                                            </div>
                                        </div>
                                    </div>
                                            
                                    <div class=\"row\" style=\"padding-left: 10px;padding-right: 10px\">
                                        <div class=\"form-group\">
                                            <label class=\"col-lg-3\">Code De L'UE </label>
                                            <div class=\"col-lg-9\">
                                                ";
            // line 36
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ueGrilles", array()), $context["indice"], array(), "array"), "ue", array()), "code", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Enter ...")));
            echo "
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"row\" style=\"padding-left: 10px;padding-right: 10px\">
                                        <div class=\"form-group\">
                                            <label class=\"col-lg-3\">Libelle De L'UE </label>
                                            <div class=\"col-lg-9\">
                                                ";
            // line 45
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ueGrilles", array()), $context["indice"], array(), "array"), "ue", array()), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Enter ...")));
            echo "
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Select multiple-->
                                    <div class=\"row\" style=\"padding-left: 10px;padding-right: 10px\">
                                        <div class=\"form-group\">
                                            <label class=\"col-lg-3\">Ecs de l'ue</label>
                                            <div class=\"col-lg-9\">
                                                ";
            // line 55
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ueGrilles", array()), $context["indice"], array(), "array"), "ue", array()), "ecs", array()), 'widget', array("attr" => array("class" => "form-control mySelect")));
            echo "
                                            </div>
                                        </div>
                                    </div>

                                    <a href=\"#\" class=\"btn btn-danger\" style=\"margin-left: 10px\">Supprimer</a><a href=\"#\" class=\"btn btn-twitter pull-right\" style=\"margin-left: 10px\">Valider</a> <a href=\"#\" class=\"btn btn-warning pull-right\">Selectionner</a> 
                                </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['indice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                    <div id=\"templateUE\" style=\"margin-top: 10px;display: none\" class=\"templateUE box-header\">
                        <div class=\"row\" style=\"padding-left: 10px;padding-right: 10px\">
                            
                            <div class=\"form-group\">
                                <label class=\"col-lg-3\">Code De L'UE </label>
                                <div class=\"col-lg-9\">
                                    ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ueGrilles", array()), "vars", array()), "prototype", array()), "quality", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Enter ...")));
        echo "
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-lg-3\">Code De L'UE </label>
                                <div class=\"col-lg-9\">
                                    ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ueGrilles", array()), "vars", array()), "prototype", array()), "ue", array()), "code", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Enter ...")));
        echo "
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"row\" style=\"padding-left: 10px;padding-right: 10px\">
                            <div class=\"form-group\">
                                <label class=\"col-lg-3\">Libelle De L'UE </label>
                                <div class=\"col-lg-9\">
                                    ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ueGrilles", array()), "vars", array()), "prototype", array()), "ue", array()), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Enter ...")));
        echo "
                                </div>
                            </div>
                        </div>
                        
                        <!--Select multiple-->
                        <div class=\"row\" style=\"padding-left: 10px;padding-right: 10px\">
                            <div class=\"form-group\">
                                <label class=\"col-lg-3\">Ecs de l'ue</label>
                                <div class=\"col-lg-9\">
                                    ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ueGrilles", array()), "vars", array()), "prototype", array()), "ue", array()), "ecs", array()), 'widget', array("attr" => array("class" => "form-control mySelect")));
        echo "
                                </div>
                            </div>
                        </div>
                        <a id=\"removeUE\" href=\"#\" class=\"btn btn-danger\" style=\"margin-left: 10px\">Supprimer</a><a href=\"#\" class=\"btn btn-twitter pull-right\" style=\"margin-left: 10px\">Valider</a> <a href=\"#\" class=\"btn btn-warning pull-right\">Selectionner</a> 
                    </div>
                    <a href=\"#\" class=\"btn btn-danger\" id=\"addUE\">ajouter une UE</a><input type=\"submit\" class=\"btn btn-success pull-right\" id=\"terminer\" value=\"Terminer\"/>
                  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
";
    }

    // line 105
    public function block_script($context, array $blocks = array())
    {
        // line 106
        echo "    <script src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("NosScripts/js/jquery.sumoselect.min.js"), "html", null, true);
        echo " type=\"text/javascript\"></script>
    <link href=";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("NosScripts/css/sumoselect.css"), "html", null, true);
        echo " rel=\"stylesheet\" />
    <script src=";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("NosScripts/js/editGrille.js"), "html", null, true);
        echo " type=\"text/javascript\"></script>
    <script type=\"text/javascript\">
        \$('.mySelect').SumoSelect({placeholder: 'Selectionner les Ecs'});
    </script>
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
        return array (  189 => 108,  185 => 107,  180 => 106,  177 => 105,  162 => 94,  149 => 84,  137 => 75,  128 => 69,  120 => 63,  106 => 55,  93 => 45,  81 => 36,  69 => 27,  60 => 20,  56 => 19,  49 => 15,  41 => 10,  32 => 3,  29 => 2,  11 => 1,);
    }
}
