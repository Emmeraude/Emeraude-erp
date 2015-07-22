<?php

/* EPlanPlanningBundle:Enseignant:attribEcEnseignant.html.twig */
class __TwigTemplate_ea9f502d82a2eaf61e9683601fb70d50e06b643e453329cee14dccff93707fa5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EPlanPlanningBundle::template.html.twig");

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
            Attribution d'Ec à Samuel Bowong
            <!--small>preview of simple tables</small-->
          </h1></br> </br>
          <!--ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
            <li><a href=\"#\">Tables</a></li>
            <li class=\"active\">Simple</li>
          </ol-->
          
      
         
          
          
          
               <!-- <section class=\"content\">Main content -->
        
              
              <label>Rechercher EC de type : </label>
              <select style=\"margin-bottom: 20px;\">
              <option value=\"CM\">BI</option>
              <option value=\"TD\">MA</option>
              <option value=\"TP\">PH</option>
          </select>
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
        // line 51
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
        // line 59
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
              
               <input class=\"btn btn-primary\" type=\"submit\" value=\"allouer\">
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
        return array (  34 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 59,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 51,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
