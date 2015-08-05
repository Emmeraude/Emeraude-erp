<?php

/* EPlanPlanningBundle:Plannification:indexPlanManuel.html.twig */
class __TwigTemplate_e69babe8c45e1c4688071470bc9f57c3389699aaf969b05dc13d14891f44fc08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EPlanPlanningBundle::template1.html.twig", "EPlanPlanningBundle:Plannification:indexPlanManuel.html.twig", 2);
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
    <label>TYPE  :</label><select name='type' style=\"border-radius: 5px 5px 5px 5px;\">
              <option value=\"CM\">Cours Magistraux</option>
              <option value=\"TD\">Travaux Dirriges</option>
              <option value=\"TP\">Travaux Pratiques</option>
              <option value=\"EX\">Examens</option>
          </select>
   </div>
     
     <div style=\"margin-bottom:20px;\">
    <label>Niveau  :</label><select name='niveau' style=\"border-radius: 5px 5px 5px 5px;\">
              <option value=\"1\">L1</option>
              <option value=\"2\">L2</option>
              <option value=\"3\">L3</option>
              <option value=\"4\">M1</option>
              <option value=\"5\">M2</option>
          </select>
    </div >
    <div style=\"margin-bottom:20px;\">
    <label>Semestre  :</label><select name='semestre' style=\"border-radius: 5px 5px 5px 5px;\">
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
        return array (  72 => 34,  43 => 8,  40 => 7,  37 => 6,  32 => 4,  29 => 3,  11 => 2,);
    }
}
