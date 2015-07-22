<?php

/* EPlanPlanningBundle:Enseignant:createEnseignant.html.twig */
class __TwigTemplate_9e1981a68292f990f595594afe4aaa2a7ea1e2b80f94b84facfac9c2fc616a76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EPlanPlanningBundle::template.html.twig");

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
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

    // line 2
    public function block_titre($context, array $blocks = array())
    {
        // line 3
        echo "    <h1>
            Enregistrement d'un enseignant
    </h1></br></br>
";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo " <form method=\"post\" action=\"";
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_registrer_enseignant");
        echo "\" class=\"box-body\">
   <fieldset> <legend>Coordonnées</legend>    
       <label>Nom(s):</label>    <input type=\"text\" name=\"nom\"></br></br>
     <label>Prenom(s):</label>    <input type=\"text\" name=\"prenom\"></br></br>
     <label>Grade :</label> <select>  
                             <option value=\"Pr\">Pr</option>
                             <option value=\"Dr\">Dr</option>
                             <option value=\"Mr\">Mr</option>
                            </select></br></br>
     <label>Tel :</label>    <input type=\"number\" name=\"tel\"></br></br>
     <label>Email :</label>    <input type=\"email\" name=\"email\"></br></br>
     <input class=\"btn btn-primary\" type=\"submit\" name=\"save\" value=\"Enreg\">   <input class=\"btn btn-primary\"  type=\"reset\" value=\"Annuler\">
     <a href=\"#\" class=\"btn btn-primary\" >Enreg et allouer EC</a>
     
   </fieldset>    
<!--
     ";
        // line 27
        echo "<script src=\"http://code.jquery.com/jquery-1.8.2.min.js\"></script>
";
        // line 29
        echo "<script type=\"text/javascript\">
\$(document).ready(function() {
// On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
var \$container = \$('div#sdz_blogbundle_articletype_categories');
// On ajoute un lien pour ajouter une nouvelle catégorie
var \$lienAjout = \$('<a href=\"#\" id=\"ajout_categorie\"
class=\"btn\">Ajouter une catégorie</a>');
\$container.append(\$lienAjout);
// On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
\$lienAjout.click(function(e) {
ajouterCategorie(\$container);
e.preventDefault(); // évite qu'un # apparaisse dans l'URL
return false;
});
// On définit un compteur unique pour nommer les champs qu'on va
ajouter dynamiquement
var index = \$container.find(':input').length;
// On ajoute un premier champ directement s'il n'en existe pas
déjà un (cas d'un nouvel article par exemple).
if (index == 0) {
ajouterCategorie(\$container);
} else {
// Pour chaque catégorie déjà existante, on ajoute un lien de
suppression
\$container.children('div').each(function() {
ajouterLienSuppression(\$(this));
});
}
// La fonction qui ajoute un formulaire Categorie
function ajouterCategorie(\$container) {
// Dans le contenu de l'attribut « data-prototype », on
remplace :
// - le texte \"__name__label__\" qu'il contient par le label du
champ
// - le texte \"__name__\" qu'il contient par le numéro du champ
var \$prototype = \$(\$container.attr('dataprototype').
replace(/__name__label__/g, 'Catégorie n°' + (index+1))
.replace(/__name__/g, index));
// On ajoute au prototype un lien pour pouvoir supprimer la
catégorie
ajouterLienSuppression(\$prototype);
// On ajoute le prototype modifié à la fin de la balise <div>
\$container.append(\$prototype);
// Enfin, on incrémente le compteur pour que le prochain ajout
se fasse avec un autre numéro
index++;
}
// La fonction qui ajoute un lien de suppression d'une catégorie
function ajouterLienSuppression(\$prototype) {
// Création du lien
\$lienSuppression = \$('<a href=\"#\" class=\"btn btndanger\">
Supprimer</a>');
// Ajout du lien
\$prototype.append(\$lienSuppression);
// Ajout du listener sur le clic du lien
\$lienSuppression.click(function(e) {
\$prototype.remove();
e.preventDefault(); // évite qu'un # apparaisse dans l'URL
return false;
});
}
});
</script>

-->
 </form>
 ";
        // line 95
        if (((isset($context["ok"]) ? $context["ok"] : $this->getContext($context, "ok")) == 0)) {
            // line 96
            echo "   <script>alert('enseignant enregistrer!'); </script>
  ";
        }
        // line 98
        echo " ";
    }

    public function getTemplateName()
    {
        return "EPlanPlanningBundle:Enseignant:createEnseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 29,  90 => 45,  84 => 44,  916 => 490,  911 => 486,  905 => 491,  903 => 490,  898 => 487,  896 => 486,  890 => 482,  887 => 481,  881 => 475,  861 => 474,  855 => 471,  849 => 470,  841 => 709,  835 => 706,  829 => 703,  824 => 701,  819 => 699,  814 => 697,  809 => 695,  804 => 693,  798 => 690,  793 => 688,  789 => 687,  784 => 685,  779 => 683,  773 => 680,  762 => 672,  582 => 494,  580 => 481,  570 => 475,  568 => 474,  561 => 471,  559 => 470,  434 => 348,  406 => 326,  376 => 299,  329 => 255,  320 => 249,  188 => 120,  58 => 20,  53 => 18,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 347,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 62,  107 => 53,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 84,  135 => 96,  119 => 42,  102 => 51,  71 => 19,  67 => 15,  63 => 22,  59 => 14,  38 => 9,  94 => 59,  89 => 20,  85 => 25,  75 => 42,  68 => 24,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 28,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 1,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 96,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 57,  105 => 40,  91 => 27,  62 => 27,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 43,  72 => 16,  69 => 25,  47 => 15,  40 => 8,  37 => 6,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 98,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 50,  96 => 31,  83 => 30,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 108,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 95,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 55,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 26,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 8,  39 => 7,  36 => 5,  33 => 4,  30 => 7,);
    }
}
