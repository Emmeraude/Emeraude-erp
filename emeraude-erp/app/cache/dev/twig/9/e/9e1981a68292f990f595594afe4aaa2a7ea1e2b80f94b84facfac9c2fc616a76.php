<?php

/* EPlanPlanningBundle:Enseignant:createEnseignant.html.twig */
class __TwigTemplate_9e1981a68292f990f595594afe4aaa2a7ea1e2b80f94b84facfac9c2fc616a76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EPlanPlanningBundle::template1.html.twig", "EPlanPlanningBundle:Enseignant:createEnseignant.html.twig", 1);
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
    public function block_enseignant($context, array $blocks = array())
    {
        // line 8
        echo " <form method=\"post\" action=\"";
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_attrib_ec_enseignant");
        echo "\" class=\"box-body\">
   <fieldset> <legend>Coordonnées</legend>    
       <label>Nom(s):</label>    <input type=\"text\" name=\"nom\"></br></br>
     <label>Prenom(s):</label>    <input type=\"text\" name=\"prenom\"></br></br>
     <label>Titre :</label> <select>  
                             <option value=\"Pr\">Pr</option>
                             <option value=\"Dr\">Dr</option>
                             <option value=\"Mr\">Mr</option>
                            </select></br></br>
     <label>Tel :</label>    <input type=\"number\" name=\"tel\"></br></br>
     <label>Email :</label>    <input type=\"email\" name=\"email\"></br></br>
     <input class=\"btn btn-primary\" type=\"submit\" name=\"save\" value=\"Enreg\">   <input class=\"btn btn-primary\"  type=\"reset\" value=\"Annuler\">
     <input class=\"btn btn-primary\" type=\"submit\" name=\"saveandalloc\" value=\"Enreg et allouer EC\">
     
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
        return array (  65 => 29,  62 => 27,  42 => 8,  39 => 7,  32 => 3,  29 => 2,  11 => 1,);
    }
}
