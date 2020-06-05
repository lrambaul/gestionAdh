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

/* accueil/adherent/assoadherent.html.twig */
class __TwigTemplate_20c88e995bff665a9c0c4dfe5fa306579cb1bd5d7d704ef5184bfe1381129d32 extends Template
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
        return "accueil/adherent/homeadherent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/adherent/assoadherent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/adherent/assoadherent.html.twig"));

        $this->parent = $this->loadTemplate("accueil/adherent/homeadherent.html.twig", "accueil/adherent/assoadherent.html.twig", 1);
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
            <legend>Liste des associations</legend>

            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["associations"]) || array_key_exists("associations", $context) ? $context["associations"] : (function () { throw new RuntimeError('Variable "associations" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["association"]) {
            // line 9
            echo "                <br>
                <hr>
                <br>
                <div class=\"form-group row\">
                    <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Nom:  </label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" class=\"form-control-plaintext\" id=\"staticstatut\" value=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "nom_asso", [], "any", false, false, false, 15), "html", null, true);
            echo "\">
                    </div>
                </div>

                <div class=\"form-group row\">
                    <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Adresse:  </label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticstatut\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "adresse_asso", [], "any", false, false, false, 22), "html", null, true);
            echo "\">
                    </div>
                </div>

                <div class=\"form-group row\">
                    <label for=\"staticadresseA\" class=\"col-sm-2 col-form-label\">Adresse e-mail:  </label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticadresseA\" value=";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "mail_asso", [], "any", false, false, false, 29), "html", null, true);
            echo ">
                    </div>
                </div>

                <div class=\"form-group row\">
                    <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Numéro de téléphone:  </label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticstatut\" value=";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "tel_asso", [], "any", false, false, false, 36), "html", null, true);
            echo ">
                    </div>
                </div>

                <div class=\"form-group row\">
                    <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Fédération:  </label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticstatut\" value=";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "federation_asso", [], "any", false, false, false, 43), "html", null, true);
            echo ">
                    </div>
                </div>

                <div class=\"form-group row\">
                    <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Comité:  </label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticstatut\" value=";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "comite_asso", [], "any", false, false, false, 50), "html", null, true);
            echo ">
                    </div>
                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['association'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "            </div>
        </fieldset>
    </form>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/adherent/assoadherent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 55,  137 => 50,  127 => 43,  117 => 36,  107 => 29,  97 => 22,  87 => 15,  79 => 9,  75 => 8,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'accueil/adherent/homeadherent.html.twig' %}
{% block body %}

    <form>
        <fieldset>
            <legend>Liste des associations</legend>

            {% for association in associations %}
                <br>
                <hr>
                <br>
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
                        <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticadresseA\" value={{association.mail_asso}}>
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

            {% endfor %}
            </div>
        </fieldset>
    </form>

{% endblock %}", "accueil/adherent/assoadherent.html.twig", "C:\\Users\\USER\\Desktop\\gestadh_awa\\new_awa_project(fusion)\\gestion\\templates\\accueil\\adherent\\assoadherent.html.twig");
    }
}
