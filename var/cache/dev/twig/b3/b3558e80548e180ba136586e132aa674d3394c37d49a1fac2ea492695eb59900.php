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

/* accueil/association/profilassociation.html.twig */
class __TwigTemplate_26d531262a78fa8c3f6d4730ae4c1f1957148c9224ee7fbce67a292450dc58e8 extends Template
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
        return "accueil/association/homeassociation.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/association/profilassociation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/association/profilassociation.html.twig"));

        $this->parent = $this->loadTemplate("accueil/association/homeassociation.html.twig", "accueil/association/profilassociation.html.twig", 1);
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
        echo "    <form>
        <fieldset>
            <legend>Profil de l'association</legend>

            <h1>Information sur l'association</h1>

            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["associations"]) || array_key_exists("associations", $context) ? $context["associations"] : (function () { throw new RuntimeError('Variable "associations" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["association"]) {
            // line 10
            echo "
                    <div class=\"form-group row\">
                        <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Nom:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control-plaintext\" id=\"staticstatut\" value=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "nom_asso", [], "any", false, false, false, 14), "html", null, true);
            echo "\">
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Adresse:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticstatut\" value=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "adresse_asso", [], "any", false, false, false, 21), "html", null, true);
            echo "\">
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"staticadresseA\" class=\"col-sm-2 col-form-label\">Adresse e-mail:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticadresseA\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "mail_asso", [], "any", false, false, false, 28), "html", null, true);
            echo "\">
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Numéro de téléphone:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticstatut\" value=";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "tel_asso", [], "any", false, false, false, 35), "html", null, true);
            echo ">
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Fédération:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticstatut\" value=";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "federation_asso", [], "any", false, false, false, 42), "html", null, true);
            echo ">
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Comité:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticstatut\" value=";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "comite_asso", [], "any", false, false, false, 49), "html", null, true);
            echo ">
                        </div>
                    </div>

                    <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifprofilAssociation", ["id" => twig_get_attribute($this->env, $this->source, $context["association"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\" class=\"btn btn-primary\" method=\"post\">Modifier</a>
                <br>
                <hr>
                <br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['association'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
            <h1>Information sur la personne connectée</h1>

            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["personnes"]) || array_key_exists("personnes", $context) ? $context["personnes"] : (function () { throw new RuntimeError('Variable "personnes" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["personne"]) {
            // line 62
            echo "
                ";
            // line 63
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["personne"], "id", [], "any", false, false, false, 63), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "personne", [], "any", false, false, false, 63), "id", [], "any", false, false, false, 63))) {
                // line 64
                echo "                    <div class=\"form-group row\">
                        <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Nom:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control-plaintext\" id=\"staticstatut\" value=";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "nom_pers", [], "any", false, false, false, 67), "html", null, true);
                echo ">
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label for=\"staticprenom\" class=\"col-sm-2 col-form-label\">Prénom:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticprenom\" value=";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "prenom_pers", [], "any", false, false, false, 73), "html", null, true);
                echo ">
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"staticadresseA\" class=\"col-sm-2 col-form-label\">Adresse e-mail:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticadresseA\" value=";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "mail_pers", [], "any", false, false, false, 80), "html", null, true);
                echo ">
                        </div>
                    </div>

                    <a href=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifprofilPersAssociation", ["id" => twig_get_attribute($this->env, $this->source, $context["personne"], "id", [], "any", false, false, false, 84)]), "html", null, true);
                echo "\" class=\"btn btn-primary\" method=\"post\">Modifier</a>
                    <a href=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifMDPprofilAssociation", ["id" => twig_get_attribute($this->env, $this->source, $context["personne"], "id", [], "any", false, false, false, 85)]), "html", null, true);
                echo "\" class=\"btn btn-success\" method=\"post\">Changer le mot de passe</a>

                ";
            }
            // line 88
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "
        </fieldset>
    </form>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/association/profilassociation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 89,  209 => 88,  203 => 85,  199 => 84,  192 => 80,  182 => 73,  173 => 67,  168 => 64,  166 => 63,  163 => 62,  159 => 61,  154 => 58,  143 => 53,  136 => 49,  126 => 42,  116 => 35,  106 => 28,  96 => 21,  86 => 14,  80 => 10,  76 => 9,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'accueil/association/homeassociation.html.twig' %}
{% block body %}
    <form>
        <fieldset>
            <legend>Profil de l'association</legend>

            <h1>Information sur l'association</h1>

            {% for association in associations %}

                    <div class=\"form-group row\">
                        <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Nom:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control-plaintext\" id=\"staticstatut\" value=\"{{association.nom_asso}}\">
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Adresse:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticstatut\" value=\"{{association.adresse_asso}}\">
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"staticadresseA\" class=\"col-sm-2 col-form-label\">Adresse e-mail:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticadresseA\" value=\"{{association.mail_asso}}\">
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Numéro de téléphone:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticstatut\" value={{association.tel_asso}}>
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Fédération:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticstatut\" value={{association.federation_asso}}>
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Comité:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticstatut\" value={{association.comite_asso}}>
                        </div>
                    </div>

                    <a href=\"{{ path('modifprofilAssociation',{'id': association.id})}}\" class=\"btn btn-primary\" method=\"post\">Modifier</a>
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

                    <a href=\"{{ path('modifprofilPersAssociation',{'id': personne.id})}}\" class=\"btn btn-primary\" method=\"post\">Modifier</a>
                    <a href=\"{{ path('modifMDPprofilAssociation',{'id': personne.id})}}\" class=\"btn btn-success\" method=\"post\">Changer le mot de passe</a>

                {% endif %}
            {% endfor %}

        </fieldset>
    </form>

{% endblock %}", "accueil/association/profilassociation.html.twig", "C:\\Users\\USER\\Desktop\\gestadh_awa\\new_awa_project(fusion)\\gestion\\templates\\accueil\\association\\profilassociation.html.twig");
    }
}
