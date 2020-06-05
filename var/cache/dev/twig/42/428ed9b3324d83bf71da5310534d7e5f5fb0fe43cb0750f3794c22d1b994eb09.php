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

/* accueil/structure/profilstructure.html.twig */
class __TwigTemplate_0305bb6c35e3f4e25f4bbbc8576017d4cb029a8afc273ceff660de2668a49b2b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "accueil/structure/homestructure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/structure/profilstructure.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/structure/profilstructure.html.twig"));

        $this->parent = $this->loadTemplate("accueil/structure/homestructure.html.twig", "accueil/structure/profilstructure.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <form>
        <fieldset>
            <legend>Profil de l'intervenant</legend>

            <h1>Information sur la structure</h1>

            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["structures"]) || array_key_exists("structures", $context) ? $context["structures"] : (function () { throw new RuntimeError('Variable "structures" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["structure"]) {
            // line 11
            echo "
                <div class=\"form-group row\">
                    <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Nom:  </label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" class=\"form-control-plaintext\" id=\"staticstatut\" value=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["structure"], "nom_structure", [], "any", false, false, false, 15), "html", null, true);
            echo "\">
                    </div>
                </div>

                <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifprofilStructure", ["id" => twig_get_attribute($this->env, $this->source, $context["structure"], "id", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\" class=\"btn btn-primary\" method=\"post\">Modifier</a>
                <br>
                <hr>
                <br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['structure'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
            <h1>Information sur la personne connectée</h1>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["personnes"]) || array_key_exists("personnes", $context) ? $context["personnes"] : (function () { throw new RuntimeError('Variable "personnes" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["personne"]) {
            // line 27
            echo "
                ";
            // line 28
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["personne"], "id", [], "any", false, false, false, 28), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "personne", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28))) {
                // line 29
                echo "                    <div class=\"form-group row\">
                        <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Nom:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control-plaintext\" id=\"staticstatut\" value=";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "nom_pers", [], "any", false, false, false, 32), "html", null, true);
                echo ">
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label for=\"staticprenom\" class=\"col-sm-2 col-form-label\">Prénom:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticprenom\" value=";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "prenom_pers", [], "any", false, false, false, 38), "html", null, true);
                echo ">
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"staticadresseA\" class=\"col-sm-2 col-form-label\">Adresse e-mail:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticadresseA\" value=";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "mail_pers", [], "any", false, false, false, 45), "html", null, true);
                echo ">
                        </div>
                    </div>

                    <a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifprofilPersStructure", ["id" => twig_get_attribute($this->env, $this->source, $context["personne"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                echo "\" class=\"btn btn-primary\" method=\"post\">Modifier</a>
                    <br><br>
                    <a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifmailprofilStructure", ["id" => twig_get_attribute($this->env, $this->source, $context["personne"], "id", [], "any", false, false, false, 51)]), "html", null, true);
                echo "\" class=\"btn btn-success\" method=\"post\">Changer l'adresse mail</a>
                    <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifMDPprofilStructure", ["id" => twig_get_attribute($this->env, $this->source, $context["personne"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\" class=\"btn btn-success\" method=\"post\">Changer le mot de passe</a>

                ";
            }
            // line 55
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
        </fieldset>
    </form>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/structure/profilstructure.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 56,  164 => 55,  158 => 52,  154 => 51,  149 => 49,  142 => 45,  132 => 38,  123 => 32,  118 => 29,  116 => 28,  113 => 27,  109 => 26,  105 => 24,  94 => 19,  87 => 15,  81 => 11,  77 => 10,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'accueil/structure/homestructure.html.twig' %}
{% block body %}

    <form>
        <fieldset>
            <legend>Profil de l'intervenant</legend>

            <h1>Information sur la structure</h1>

            {% for structure in structures %}

                <div class=\"form-group row\">
                    <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Nom:  </label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" class=\"form-control-plaintext\" id=\"staticstatut\" value=\"{{structure.nom_structure}}\">
                    </div>
                </div>

                <a href=\"{{ path('modifprofilStructure',{'id': structure.id})}}\" class=\"btn btn-primary\" method=\"post\">Modifier</a>
                <br>
                <hr>
                <br>
            {% endfor %}

            <h1>Information sur la personne connectée</h1>
            {% for personne in personnes %}

                {% if personne.id == app.user.personne.id %}
                    <div class=\"form-group row\">
                        <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Nom:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control-plaintext\" id=\"staticstatut\" value={{personne.nom_pers}}>
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label for=\"staticprenom\" class=\"col-sm-2 col-form-label\">Prénom:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticprenom\" value={{personne.prenom_pers}}>
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"staticadresseA\" class=\"col-sm-2 col-form-label\">Adresse e-mail:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticadresseA\" value={{personne.mail_pers}}>
                        </div>
                    </div>

                    <a href=\"{{ path('modifprofilPersStructure',{'id': personne.id})}}\" class=\"btn btn-primary\" method=\"post\">Modifier</a>
                    <br><br>
                    <a href=\"{{ path('modifmailprofilStructure',{'id': personne.id})}}\" class=\"btn btn-success\" method=\"post\">Changer l'adresse mail</a>
                    <a href=\"{{ path('modifMDPprofilStructure',{'id': personne.id})}}\" class=\"btn btn-success\" method=\"post\">Changer le mot de passe</a>

                {% endif %}
            {% endfor %}

        </fieldset>
    </form>

{% endblock %}", "accueil/structure/profilstructure.html.twig", "C:\\Users\\USER\\Desktop\\gestadh_awa\\new_awa_project(fusion)\\gestion\\templates\\accueil\\structure\\profilstructure.html.twig");
    }
}
