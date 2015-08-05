<?php

/* EPlanPlanningBundle:Plannification:listEcMention.html.twig */
class __TwigTemplate_1302d740e48407e8852f195d4874e7b2eb7df838e24b239250f58869b3ef1658 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EPlanPlanningBundle::template.html.twig", "EPlanPlanningBundle:Plannification:listEcMention.html.twig", 2);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'pageCentrale' => array($this, 'block_pageCentrale'),
            'contenuDeGauche' => array($this, 'block_contenuDeGauche'),
            'contenuDeDroite' => array($this, 'block_contenuDeDroite'),
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

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        // line 4
        echo " Liste des ECs de la mentions Mathématique   
";
    }

    // line 6
    public function block_pageCentrale($context, array $blocks = array())
    {
        // line 7
        $this->displayBlock('contenuDeGauche', $context, $blocks);
        // line 66
        $this->displayBlock('contenuDeDroite', $context, $blocks);
        // line 142
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_test");
        echo "\" class=\"btn btn-primary\" style=\"margin-right:10px;\">&lt;&lt;Precedent</a>
";
    }

    // line 7
    public function block_contenuDeGauche($context, array $blocks = array())
    {
        // line 8
        echo "
       
          <!--ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
            <li><a href=\"#\">Tables</a></li>
            <li class=\"active\">Simple</li>
          </ol-->
          
        <!-- Main content -->
        <section class=\"content\" >
              <div class=\"box\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">Ecs de parcours</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                  <table class=\"table table-bordered\">
                    <tr>
                      <th style=\"width: 20px\">#</th>
                      <th>Code</th>
                      <th>libelle</th>
                      <th>effectifs</th>
                      <th>Plannifier</th>
                    </tr>
                    <tr>
                    
                    
                    <td>1</td>
                      <td>MA 555</td>
                      <td>dhgdhgdhghdfdfg</td>
                      <td>250</td>
                      <td> <form action=\"\" method=\"post\">
                              <input class=\"btn btn-primary\" type=\"submit\" value=\">>\"/>
                          </form>
                      </td>
                     
                    </tr>
                    
                    <tr>
                      <td>2</td>
                      <td>MA 560</td>
                      <td>dhgdretzzeryhjghjdfg</td>
                      <td>250</td>
                      <td> <form action=\"\" method=\"post\">
                              <input class=\"btn btn-primary\" type=\"submit\" value=\">>\"/>
                          </form>
                      </td>
                    </tr>
                  </table>
                </div><!-- /.box-body -->
                <div class=\"box-footer clearfix\">
                  
                </div>
              </div><!-- /.box -->
              
              
               </section>

";
    }

    // line 66
    public function block_contenuDeDroite($context, array $blocks = array())
    {
        // line 67
        echo "    

         
          
        <!-- Main content -->
        <section class=\"content\">
              <div class=\"box\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">Ecs commun a d'autre parcours</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                  <table class=\"table table-bordered\">
                    <tr>
                      <th style=\"width: 20px\">#</th>
                      <th>Code</th>
                      <th>libelle</th>
                      <th>effectifs</th>
                      <th>Plannifier</th>
                    </tr>
                    <tr>
                    
                    
                    <td>1</td>
                      <td>MA 555</td>
                      <td>dhgdhgdhghdfdfg </td> 
                      <td>500</td>
                      <td> <form action=\"\" method=\"post\">
                              <input class=\"btn btn-primary\" type=\"submit\" value=\">>\"/>
                          </form>
                      </td>
                     
                    </tr>
                    
                    <tr>
                      <td>2</td>
                      <td>IN 554</td>
                      <td>dhgdhgdhghdfdfg </td> 
                      <td>500</td>
                      <td> <form action=\"\" method=\"post\">
                              <input class=\"btn btn-primary\" type=\"submit\" value=\">>\"/>
                          </form>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>IN 530</td>
                      <td>dhgdhgdhghdfdfg </td> 
                      <td>500</td>
                      <td> <form action=\"\" method=\"post\">
                              <input class=\"btn btn-primary\" type=\"submit\" value=\">>\"/>
                          </form>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>MA 554</td>
                      <td>dhgdhgdhghdfdfg </td> 
                      <td>500</td>
                      <td> <form action=\"\" method=\"post\">
                              <input class=\"btn btn-primary\" type=\"submit\" value=\">>\"/>
                          </form>
                      </td>
                    </tr>
                  </table>
                </div><!-- /.box-body -->
                <div class=\"box-footer clearfix\">
                  
                </div>
              </div><!-- /.box -->
              
              
               </section>

    
";
    }

    public function getTemplateName()
    {
        return "EPlanPlanningBundle:Plannification:listEcMention.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 67,  117 => 66,  56 => 8,  53 => 7,  46 => 142,  44 => 66,  42 => 7,  39 => 6,  34 => 4,  31 => 3,  11 => 2,);
    }
}
