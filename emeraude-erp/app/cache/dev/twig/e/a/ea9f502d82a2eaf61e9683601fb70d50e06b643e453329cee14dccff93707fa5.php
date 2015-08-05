<?php

/* EPlanPlanningBundle:Enseignant:attribEcEnseignant.html.twig */
class __TwigTemplate_ea9f502d82a2eaf61e9683601fb70d50e06b643e453329cee14dccff93707fa5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("EPlanPlanningBundle::template.html.twig", "EPlanPlanningBundle:Enseignant:attribEcEnseignant.html.twig", 3);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'contenu' => array($this, 'block_contenu'),
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

    // line 4
    public function block_titrePage($context, array $blocks = array())
    {
    }

    // line 6
    public function block_contenu($context, array $blocks = array())
    {
        // line 7
        echo "    <section class=\"content-header\">
          <h1>
            Attribution d'Ec à ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "nom", array()), "html", null, true);
        echo "
            <!--small>preview of simple tables</small-->
          </h1></br> </br>
          <!--ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
            <li><a href=\"#\">Tables</a></li>
            <li class=\"active\">Simple</li>
          </ol-->
          
      
         
          
          
          
               <!-- <section class=\"content\">Main content -->
        
               <div style=\"margin-bottom: 20px; float: right;\">
                   <form method=\"\" action=\"\"><input type=\"text\" placeholder=\"Tapez un code\">
                                             <input type=\"submit\" value=\"Rechercher\">
                   </form>
               </div>
            <form>
                <label style=\"font-size: 15px;\">Genre : </label><select style=\"margin-bottom: 20px;\">
              <option value=\"CM\">Cours Magistral</option>
              <option value=\"TD\">Travaux Dirrigés</option>
              <option value=\"TP\">Travaux Pratiques</option>
          </select>
              <div class=\"box\">
                <!--div class=\"box-header with-border\">
                  <h3 class=\"box-title\">B</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                  <table class=\"table table-bordered\">
                    <tr>
                      <th style=\"width: 20px\">#</th>
                      <th>Code</th>
                      <th>Libelle</th>
                      <!--th style=\"width: 50px\">Libelle</th-->
                    </tr>
                    <tr>
                     <!--a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_index_enseignant");
        echo "\">Plus</a--><td>1.</td>
                      <td>BI 656</td>
                      <td>ttyurttytruert
                        <!--div class=\"progress progress-xs\">
                          <div class=\"progress-bar progress-bar-danger\" style=\"width: 55%\"></div>
                        </div-->
                      </td> 
                      <td><input type=\"checkbox\" name=\"a\" value=\"1\" /><!--span class=\"badge bg-red\">55%</span--></td>
                      <!--td> <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_index_enseignant");
        echo "\">Plus</a></td-->
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>BA 456</td>
                      <td>849149814
                        <!--div class=\"progress progress-xs\">
                          <div class=\"progress-bar progress-bar-yellow\" style=\"width: 70%\"></div>
                        </div-->
                      </td>
                      <td><input type=\"checkbox\" name=\"a\" value=\"2\" /><!--span class=\"badge bg-yellow\">70%</span--></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>BV 568</td>
                      <td>54641564
                        <!--div class=\"progress progress-xs progress-striped active\">
                          <div class=\"progress-bar progress-bar-primary\" style=\"width: 30%\"></div>
                        </div-->
                      </td>
                      <td><input type=\"checkbox\" name=\"a\" value=\"3\" /><!--span class=\"badge bg-light-blue\">30%</span--></td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>BI 125</td>
                      <td>56654544
                        <!--div class=\"progress progress-xs progress-striped active\">
                          <div class=\"progress-bar progress-bar-success\" style=\"width: 90%\"></div>
                        </div-->
                      </td>
                      <td><input type=\"checkbox\" name=\"a\" value=\"4\" /><!--span class=\"badge bg-green\">90%</span--></td>
                    </tr>
                  </table>
                   
                 
                </div><!-- /.box-body -->
                <div class=\"box-footer clearfix\">
                  <ul class=\"pagination pagination-sm no-margin pull-right\">
                    <li><a href=\"#\">&laquo;</a></li>
                    <li><a href=\"#\">1</a></li>
                    <li><a href=\"#\">2</a></li>
                    <li><a href=\"#\">3</a></li>
                    <li><a href=\"#\">&raquo;</a></li>
                  </ul>
                </div>
              </div><!-- /.box -->
              
               <input class=\"btn btn-primary\" style=\"margin-right: 50px;\" type=\"submit\" value=\"allouer\">
               <input class=\"btn btn-primary\" style=\"margin-right: 50px;\" type=\"reset\" value=\"Annuler\">
                </form>
               <form style=\"display :inline-block;\" method=\"post\" action=\"";
        // line 107
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_modif_enseignant");
        echo "\">
               <input type=\"hidden\" name=\"id\" value=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "id", array()), "html", null, true);
        echo "\">
               <input  class=\"btn btn-primary\" type=\"submit\" value=\"Back\">
               </form>
               <!--/section-->
         
        </section>

     
    
 ";
    }

    public function getTemplateName()
    {
        return "EPlanPlanningBundle:Enseignant:attribEcEnseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 108,  150 => 107,  97 => 57,  86 => 49,  41 => 9,  37 => 7,  34 => 6,  29 => 4,  11 => 3,);
    }
}
