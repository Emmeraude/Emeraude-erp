<?php

/* EPlanPlanningBundle:Plannification:indexPlanManuel.html.twig */
class __TwigTemplate_e69babe8c45e1c4688071470bc9f57c3389699aaf969b05dc13d14891f44fc08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EPlanPlanningBundle::template1.html.twig");

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'enseignant' => array($this, 'block_enseignant'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EPlanPlanningBundle::template1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        // line 4
        echo " Parametres de plannification
";
    }

    // line 6
    public function block_enseignant($context, array $blocks = array())
    {
        // line 7
        echo "   <div style=\"margin: 50px 50px 50px 50px;\">
  <form method=\"POST\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_test");
        echo "\">
    <div style=\"margin-bottom:20px;\">   
    <label>TYPE :</label><select name='type'>
              <option value=\"CM\">Cours Magistraux</option>
              <option value=\"TD\">Travaux Dirriges</option>
              <option value=\"TP\">Travaux Pratiques</option>
              <option value=\"EX\">Examens</option>
          </select>
   </div>
     
     <div style=\"margin-bottom:20px;\">
    <label>Niveau:</label><select name='niveau'>
              <option value=\"1\">L1</option>
              <option value=\"2\">L2</option>
              <option value=\"3\">L3</option>
              <option value=\"4\">M1</option>
              <option value=\"5\">M2</option>
          </select>
    </div >
    <div style=\"margin-bottom:20px;\">
    <label>Semestre :</label><select name='semestre'>
              <option value=\"1\">1</option>
              <option value=\"2\">2</option>
          </select>
    </div>
 
    <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_index_enseignant");
        echo "\" class=\"btn btn-primary\" style=\"margin-right:10px;\">Precedent</a>
    <input class=\"btn btn-primary\" type=\"reset\" value=\"annuler\" style=\"margin-right:10px;\"/>
    <input class=\"btn btn-primary\" type=\"submit\" value=\"suivant\" style=\"margin-right:10px;\"/>
    
  </form> 
       <!--div class=\"well\">
  <form method=\"post\" 
    <input type=\"submit\" class=\"btn btn-primary\" />
  </form-->
</div>
</div> 
";
    }

    public function getTemplateName()
    {
        return "EPlanPlanningBundle:Plannification:indexPlanManuel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 29,  90 => 45,  84 => 44,  916 => 490,  911 => 486,  905 => 491,  903 => 490,  898 => 487,  896 => 486,  890 => 482,  887 => 481,  881 => 475,  861 => 474,  855 => 471,  849 => 470,  841 => 709,  835 => 706,  829 => 703,  824 => 701,  819 => 699,  814 => 697,  809 => 695,  804 => 693,  798 => 690,  793 => 688,  789 => 687,  784 => 685,  779 => 683,  773 => 680,  762 => 672,  582 => 494,  580 => 481,  570 => 475,  568 => 474,  561 => 471,  559 => 470,  434 => 348,  406 => 326,  376 => 299,  329 => 255,  320 => 249,  188 => 120,  58 => 20,  53 => 18,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 347,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 81,  128 => 62,  107 => 53,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 84,  135 => 96,  119 => 42,  102 => 51,  71 => 19,  67 => 15,  63 => 22,  59 => 14,  38 => 9,  94 => 59,  89 => 20,  85 => 25,  75 => 42,  68 => 24,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 28,  46 => 7,  27 => 4,  44 => 8,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 96,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 57,  105 => 40,  91 => 27,  62 => 27,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 43,  72 => 34,  69 => 25,  47 => 9,  40 => 7,  37 => 6,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 98,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 50,  96 => 31,  83 => 35,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 108,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 95,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 55,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 26,  64 => 17,  60 => 6,  57 => 11,  54 => 11,  51 => 10,  48 => 13,  45 => 17,  42 => 8,  39 => 7,  36 => 5,  33 => 6,  30 => 5,);
    }
}
