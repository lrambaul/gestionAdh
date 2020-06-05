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

/* accueil/intervenant/adherentGroupe.html.twig */
class __TwigTemplate_977db35a9e2c0608675feb8abb608282d8d6842489b1928b3e143422d901dedb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/intervenant/adherentGroupe.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/intervenant/adherentGroupe.html.twig"));

        $this->parent = $this->loadTemplate("accueil/intervenant/homeintervenant.html.twig", "accueil/intervenant/adherentGroupe.html.twig", 1);
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

    <fieldset>
        <legend>Profil de l'adhérent</legend>

        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["personnes"]) || array_key_exists("personnes", $context) ? $context["personnes"] : (function () { throw new RuntimeError('Variable "personnes" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["personne"]) {
            // line 9
            echo "
            ";
            // line 10
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["personne"], "id", [], "any", false, false, false, 10), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10))) {
                // line 11
                echo "
                <br>
                <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Nom:  </label>
                <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">\"";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "nom_pers", [], "any", false, false, false, 14), "html", null, true);
                echo "\"  </label>

                <br>
                <label for=\"staticprenom\" class=\"col-sm-2 col-form-label\">Prénom:  </label>
                <label for=\"staticprenom\" class=\"col-sm-2 col-form-label\">";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "prenom_pers", [], "any", false, false, false, 18), "html", null, true);
                echo " </label>

                <br>
                <label for=\"staticadresseA\" class=\"col-sm-2 col-form-label\">Adresse e-mail:  </label>
                <label for=\"staticadresseA\" class=\"col-sm-2 col-form-label\">";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "mail_pers", [], "any", false, false, false, 22), "html", null, true);
                echo "  </label>

            ";
            }
            // line 25
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "

    </fieldset>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/intervenant/adherentGroupe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 26,  109 => 25,  103 => 22,  96 => 18,  89 => 14,  84 => 11,  82 => 10,  79 => 9,  75 => 8,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'accueil/intervenant/homeintervenant.html.twig' %}
{% block body %}


    <fieldset>
        <legend>Profil de l'adhérent</legend>

        {% for personne in personnes %}

            {% if personne.id == app.user.id %}

                <br>
                <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Nom:  </label>
                <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">\"{{personne.nom_pers}}\"  </label>

                <br>
                <label for=\"staticprenom\" class=\"col-sm-2 col-form-label\">Prénom:  </label>
                <label for=\"staticprenom\" class=\"col-sm-2 col-form-label\">{{personne.prenom_pers}} </label>

                <br>
                <label for=\"staticadresseA\" class=\"col-sm-2 col-form-label\">Adresse e-mail:  </label>
                <label for=\"staticadresseA\" class=\"col-sm-2 col-form-label\">{{personne.mail_pers}}  </label>

            {% endif %}
        {% endfor %}


    </fieldset>


{% endblock %}", "accueil/intervenant/adherentGroupe.html.twig", "C:\\Users\\USER\\Desktop\\gestadh_awa\\new_awa_project(fusion)\\gestion\\templates\\accueil\\intervenant\\adherentGroupe.html.twig");
    }
}
