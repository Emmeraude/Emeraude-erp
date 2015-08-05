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
        if (((isset($context["nombreUes"]) ? $context["nombreUes"] : $this->getContext($context, "nombreUes")) == 0)) {
            // line 20
            echo "                            ";
            $context["nombreUes"] = 1;
            // line 21
            echo "                        ";
        }
        // line 22
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["nombreUes"]) ? $context["nombreUes"] : $this->getContext($context, "nombreUes")) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["indice"]) {
            // line 23
            echo "                              <!-- text input -->
                                <div class=\"templateUE box-header\">
                                    
                                    <div class=\"row\" style=\"padding-left: 10px;padding-right: 10px\">
                                        <div class=\"form-group\">
                                            <label class=\"col-lg-3\">Qualite De L'UE </label>
                                            <div class=\"col-lg-9\">
                                                ";
            // line 30
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
            // line 39
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
            // line 48
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
            // line 58
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
        // line 66
        echo "                    <div id=\"templateUE\" style=\"margin-top: 10px;display: none\" class=\"templateUE box-header\">
                        <div class=\"row\" style=\"padding-left: 10px;padding-right: 10px\">
                            
                            <div class=\"form-group\">
                                <label class=\"col-lg-3\">Code De L'UE </label>
                                <div class=\"col-lg-9\">
                                    ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ueGrilles", array()), "vars", array()), "prototype", array()), "quality", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Enter ...")));
        echo "
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-lg-3\">Code De L'UE </label>
                                <div class=\"col-lg-9\">
                                    ";
        // line 78
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
        // line 87
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
        // line 97
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

    // line 108
    public function block_script($context, array $blocks = array())
    {
        // line 109
        echo "    <script src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("NosScripts/js/jquery.sumoselect.min.js"), "html", null, true);
        echo " type=\"text/javascript\"></script>
    <link href=";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("NosScripts/css/sumoselect.css"), "html", null, true);
        echo " rel=\"stylesheet\" />
    <script src=";
        // line 111
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
        return array (  198 => 111,  194 => 110,  189 => 109,  186 => 108,  171 => 97,  158 => 87,  146 => 78,  137 => 72,  129 => 66,  115 => 58,  102 => 48,  90 => 39,  78 => 30,  69 => 23,  64 => 22,  61 => 21,  58 => 20,  56 => 19,  49 => 15,  41 => 10,  32 => 3,  29 => 2,  11 => 1,);
    }
}
