<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* accueil/structure/homestructure.html.twig */
class __TwigTemplate_86f375f6a78d19274d5a750a96578a0357db5d73690544a5cff5ff06b86f4d0d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'JavaScript' => [$this, 'block_JavaScript'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/structure/homestructure.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/structure/homestructure.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html xmlns:float=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta charset=\"UTF-8\">

    <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/yeti/bootstrap.min.css\">

    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 10
        $this->displayBlock('JavaScript', $context, $blocks);
        // line 17
        echo "</head>
<body>
<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"/homestructure\">Accueil</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"/profilstructure\">Profil</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"/ListeAsso\">Gestion des associations</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"/GestionAdhStruct\">Gestion des adhérents</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"/GestionInterStruct\">Gestion des intervenants</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"/GestionGroupeStruct\">Gestion des groupes</a></li>
        </ul>

        <ul class=\"navbar-nav mr-right\">
            ";
        // line 31
        if (((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "personne", [], "any", false, false, false, 31), "adminAssos", [], "any", false, false, false, 31), "isEmpty", [], "method", false, false, false, 31) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "personne", [], "any", false, false, false, 31), "intervenant", [], "any", false, false, false, 31)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "personne", [], "any", false, false, false, 31), "superAdmin", [], "any", false, false, false, 31)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "personne", [], "any", false, false, false, 31), "intervenant", [], "any", false, false, false, 31))) {
            // line 32
            echo "                ";
            // line 33
            echo "            ";
        }
        // line 34
        echo "            <li class=\"nav-item\" float:right><a class=\"nav-link\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
        echo "\">Se déconnecter</a></li>
        </ul>
    </div>
</nav>
<div class='container'>
    ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 61
        echo "</div>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Gestion des adhérents";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_JavaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "JavaScript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "JavaScript"));

        // line 11
        echo "
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "        <br>
        <h1>Bienvenue sur la page d'accueil d'un administrateur de structure (Région)</h1>
        <br>
        <div class=\"card border-primary mb-3\" style=\"max-width: 20rem;\">
            <div class=\"card-header\">Accueil</div>
            <div class=\"card-body\">
                <h4 class=\"card-title\">Admin Structure</h4>
                <p class=\"card-text\">Voici la page d'accueil d'un administrateur de structures
            </div>
        </div>
        <br>
        <hr>
        <br>
        <div class=\"card border-success mb-3\" style=\"max-width: 20rem;\">
            <div class=\"card-header\">Informations</div>
            <div class=\"card-body\">
                <h4 class=\"card-title\">Informations concernant les administrateurs de structure</h4>
                <p class=\"card-text\">Vous trouverez ici toutes les informations pouvant vous interesser</p>
            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/structure/homestructure.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 40,  153 => 39,  138 => 11,  128 => 10,  109 => 8,  96 => 61,  94 => 39,  85 => 34,  82 => 33,  80 => 32,  78 => 31,  62 => 17,  60 => 10,  55 => 8,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html xmlns:float=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta charset=\"UTF-8\">

    <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/yeti/bootstrap.min.css\">

    <title>{% block title %}Gestion des adhérents{% endblock %}</title>

    {% block JavaScript %}

        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>

    {% endblock %}
</head>
<body>
<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"/homestructure\">Accueil</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"/profilstructure\">Profil</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"/ListeAsso\">Gestion des associations</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"/GestionAdhStruct\">Gestion des adhérents</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"/GestionInterStruct\">Gestion des intervenants</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"/GestionGroupeStruct\">Gestion des groupes</a></li>
        </ul>

        <ul class=\"navbar-nav mr-right\">
            {% if not app.user.personne.adminAssos.isEmpty() or  app.user.personne.intervenant or app.user.personne.superAdmin or  app.user.personne.intervenant  %}
                {#<li class=\"nav-item\"><a class=\"nav-link\" href=\"/changeConnexion\">Changer de rôle</a></li>#}
            {% endif %}
            <li class=\"nav-item\" float:right><a class=\"nav-link\" href=\"{{ path('security_logout') }}\">Se déconnecter</a></li>
        </ul>
    </div>
</nav>
<div class='container'>
    {% block body %}
        <br>
        <h1>Bienvenue sur la page d'accueil d'un administrateur de structure (Région)</h1>
        <br>
        <div class=\"card border-primary mb-3\" style=\"max-width: 20rem;\">
            <div class=\"card-header\">Accueil</div>
            <div class=\"card-body\">
                <h4 class=\"card-title\">Admin Structure</h4>
                <p class=\"card-text\">Voici la page d'accueil d'un administrateur de structures
            </div>
        </div>
        <br>
        <hr>
        <br>
        <div class=\"card border-success mb-3\" style=\"max-width: 20rem;\">
            <div class=\"card-header\">Informations</div>
            <div class=\"card-body\">
                <h4 class=\"card-title\">Informations concernant les administrateurs de structure</h4>
                <p class=\"card-text\">Vous trouverez ici toutes les informations pouvant vous interesser</p>
            </div>
        </div>
    {% endblock %}
</div>
</body>
</html>
", "accueil/structure/homestructure.html.twig", "C:\\Users\\USER\\Desktop\\gestadh_awa\\new_awa_project(fusion)\\gestion\\templates\\accueil\\structure\\homestructure.html.twig");
    }
}
