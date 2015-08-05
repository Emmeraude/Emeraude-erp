<?php

/* EPlanPlanningBundle:Enseignant:createEnseignant.html.twig */
class __TwigTemplate_9e1981a68292f990f595594afe4aaa2a7ea1e2b80f94b84facfac9c2fc616a76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EPlanPlanningBundle::template.html.twig", "EPlanPlanningBundle:Enseignant:createEnseignant.html.twig", 1);
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

    // line 2
    public function block_titrePage($context, array $blocks = array())
    {
        // line 3
        echo "            Enregistrement d'un enseignant
   
";
    }

    // line 6
    public function block_contenu($context, array $blocks = array())
    {
        // line 7
        echo " <form class=\"box-body\" method=\"post\" action=\"";
        echo $this->env->getExtension('routing')->getPath("e_plan_planning_registrer_enseignant");
        echo "\"  style=\"margin-bottom: 100px;\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
<div style=\"margin-bottom: 20px;\">
";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label" => "Nom de l'enseignant"));
        echo "
";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "
</div>
";
        // line 19
        echo "<div style=\"margin-bottom: 20px;\">
";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label', array("label" => "Prenom de l'enseignant"));
        echo "
";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget');
        echo "
</div>

<div style=\"margin-bottom: 20px;\">
";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'label', array("label" => "Grade de l'enseignant"));
        echo "
";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'errors');
        echo "
";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget');
        echo "
</div>
<div style=\"margin-bottom: 20px;\">
";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tel", array()), 'label', array("label" => "Telephone de l'enseignant"));
        echo "
";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tel", array()), 'errors');
        echo "
";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tel", array()), 'widget');
        echo "
</div>
<div style=\"margin-bottom: 20px;\">
";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label" => "Email de l'enseignant"));
        echo "
";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
</div>
<div style=\"margin-bottom: 20px;\">
";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement", array()), 'label', array("label" => "Departement de l'enseignant"));
        echo "
";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement", array()), 'errors');
        echo "
";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement", array()), 'widget');
        echo "
</div>
";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
";
        // line 51
        echo "
<input class=\"btn btn-primary\" type=\"submit\" style=\"margin-right: 100px;\"/>
 <input class=\"btn btn-primary\" type=\"reset\" />  
<!--
     ";
        // line 58
        echo "<script src=\"http://code.jquery.com/jquery-1.8.2.min.js\"></script>
";
        // line 60
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
        return array (  152 => 60,  149 => 58,  143 => 51,  139 => 45,  134 => 43,  130 => 42,  126 => 41,  120 => 38,  116 => 37,  112 => 36,  106 => 33,  102 => 32,  98 => 31,  92 => 28,  88 => 27,  84 => 26,  77 => 22,  73 => 21,  69 => 20,  66 => 19,  61 => 16,  57 => 14,  53 => 12,  48 => 9,  41 => 7,  38 => 6,  32 => 3,  29 => 2,  11 => 1,);
    }
}