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

/* accueil/intervenant/profilintervenant.html.twig */
class __TwigTemplate_c96baa0b15ff6db0ba7b23da286f8b02158e3491dc6d4cdf0f9e5b0ee849d5e9 extends Template
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
        return "accueil/intervenant/homeintervenant.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/intervenant/profilintervenant.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/intervenant/profilintervenant.html.twig"));

        $this->parent = $this->loadTemplate("accueil/intervenant/homeintervenant.html.twig", "accueil/intervenant/profilintervenant.html.twig", 1);
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

            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["personnes"]) || array_key_exists("personnes", $context) ? $context["personnes"] : (function () { throw new RuntimeError('Variable "personnes" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["personne"]) {
            // line 9
            echo "
                ";
            // line 10
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["personne"], "id", [], "any", false, false, false, 10), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "personne", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10))) {
                // line 11
                echo "                    <div class=\"form-group row\">
                        <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Nom:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control-plaintext\" id=\"staticstatut\" value=";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "nom_pers", [], "any", false, false, false, 14), "html", null, true);
                echo ">
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label for=\"staticprenom\" class=\"col-sm-2 col-form-label\">Prénom:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticprenom\" value=";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "prenom_pers", [], "any", false, false, false, 20), "html", null, true);
                echo ">
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"staticadresseA\" class=\"col-sm-2 col-form-label\">Adresse e-mail:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticadresseA\" value=";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "mail_pers", [], "any", false, false, false, 27), "html", null, true);
                echo ">
                        </div>
                    </div>


                ";
            }
            // line 33
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "

            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["intervenants"]) || array_key_exists("intervenants", $context) ? $context["intervenants"] : (function () { throw new RuntimeError('Variable "intervenants" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["intervenant"]) {
            // line 37
            echo "                ";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["intervenant"], "personne_id", [], "any", false, false, false, 37), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "personne", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37))) {
                // line 38
                echo "
                    <div class=\"form-group row\">
                        <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Adresse:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticstatut\" value=\"";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervenant"], "adresse_inter", [], "any", false, false, false, 42), "html", null, true);
                echo "\">
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Numéro de téléphone:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticstatut\" value=";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervenant"], "tel_inter", [], "any", false, false, false, 49), "html", null, true);
                echo ">
                        </div>
                    </div>

                    <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifprofilIntervenant", ["id" => twig_get_attribute($this->env, $this->source, $context["intervenant"], "personne_id", [], "any", false, false, false, 53)]), "html", null, true);
                echo "\" class=\"btn btn-primary\" method=\"post\">Modifier</a>

                    <br><br>
                    <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifinfopers", ["id" => twig_get_attribute($this->env, $this->source, $context["intervenant"], "personne_id", [], "any", false, false, false, 56)]), "html", null, true);
                echo "\" class=\"btn btn-success\" method=\"post\">Changer l'adresse mail</a>
                    <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifMDPprofilIntervenant", ["id" => twig_get_attribute($this->env, $this->source, $context["intervenant"], "personne_id", [], "any", false, false, false, 57)]), "html", null, true);
                echo "\" class=\"btn btn-success\" method=\"post\">Changer le mot de passe</a>

                ";
            }
            // line 60
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['intervenant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "            </div>
        </fieldset>
    </form>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/intervenant/profilintervenant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 61,  173 => 60,  167 => 57,  163 => 56,  157 => 53,  150 => 49,  140 => 42,  134 => 38,  131 => 37,  127 => 36,  123 => 34,  117 => 33,  108 => 27,  98 => 20,  89 => 14,  84 => 11,  82 => 10,  79 => 9,  75 => 8,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'accueil/intervenant/homeintervenant.html.twig' %}
{% block body %}

    <form>
        <fieldset>
            <legend>Profil de l'intervenant</legend>

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


                {% endif %}
            {% endfor %}


            {% for intervenant in intervenants %}
                {% if intervenant.personne_id == app.user.personne.id %}

                    <div class=\"form-group row\">
                        <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Adresse:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticstatut\" value=\"{{intervenant.adresse_inter}}\">
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Numéro de téléphone:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticstatut\" value={{intervenant.tel_inter}}>
                        </div>
                    </div>

                    <a href=\"{{ path('modifprofilIntervenant',{'id': intervenant.personne_id})}}\" class=\"btn btn-primary\" method=\"post\">Modifier</a>

                    <br><br>
                    <a href=\"{{ path('modifinfopers',{'id': intervenant.personne_id})}}\" class=\"btn btn-success\" method=\"post\">Changer l'adresse mail</a>
                    <a href=\"{{ path('modifMDPprofilIntervenant',{'id': intervenant.personne_id})}}\" class=\"btn btn-success\" method=\"post\">Changer le mot de passe</a>

                {% endif %}
            {% endfor %}
            </div>
        </fieldset>
    </form>

{% endblock %}", "accueil/intervenant/profilintervenant.html.twig", "C:\\Users\\USER\\Desktop\\gestadh_awa\\new_awa_project(fusion)\\gestion\\templates\\accueil\\intervenant\\profilintervenant.html.twig");
    }
}
