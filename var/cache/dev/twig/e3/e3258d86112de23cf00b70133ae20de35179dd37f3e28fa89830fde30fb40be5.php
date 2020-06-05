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

/* accueil/adherent/profilpersonne.html.twig */
class __TwigTemplate_0f6f93a308a255c08ebda7fdb5fd4334a5b07e5cd5e6abc8e9b3c852d11b03eb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/adherent/profilpersonne.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/adherent/profilpersonne.html.twig"));

        $this->parent = $this->loadTemplate("accueil/adherent/homeadherent.html.twig", "accueil/adherent/profilpersonne.html.twig", 1);
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
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["personne"], "id", [], "any", false, false, false, 10), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "personne", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10))) {
                // line 11
                echo "
                <br>
                <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Nom:  </label>
                <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "nom_pers", [], "any", false, false, false, 14), "html", null, true);
                echo "  </label>

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
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adherents"]) || array_key_exists("adherents", $context) ? $context["adherents"] : (function () { throw new RuntimeError('Variable "adherents" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["adherent"]) {
            // line 28
            echo "            ";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["adherent"], "personne_id", [], "any", false, false, false, 28), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "personne", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28))) {
                // line 29
                echo "
                <br>
                <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Date de naissance:</label>
                <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">";
                // line 32
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherent"], "anniv_adh", [], "any", false, false, false, 32), "d/m/Y"), "html", null, true);
                echo "</label>

                <br>
                <label for=\"staticadresseA\" class=\"col-sm-2 col-form-label\">Numéro de licence:  </label>
                <label for=\"staticadresseA\" class=\"col-sm-2 col-form-label\">";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherent"], "num_licence", [], "any", false, false, false, 36), "html", null, true);
                echo " </label>

                <br>
                <label for=\"staticadresseA\" class=\"col-sm-2 col-form-label\">Adresse:  </label>
                <label for=\"staticadresseA\" class=\"col-sm-2 col-form-label\">";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherent"], "adresse_adh", [], "any", false, false, false, 40), "html", null, true);
                echo " </label>

                <br>
                <label for=\"staticadresseA\" class=\"col-sm-2 col-form-label\">Numéro de téléphone:  </label>
                <label for=\"staticadresseA\" class=\"col-sm-2 col-form-label\">";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherent"], "tel", [], "any", false, false, false, 44), "html", null, true);
                echo " </label>

                <br><br>
                <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifprofilAdherent", ["id" => twig_get_attribute($this->env, $this->source, $context["adherent"], "id", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\" class=\"btn btn-primary\" method=\"post\">Modifier</a>

                <br><br>
                <a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifinfopersonne", ["id" => twig_get_attribute($this->env, $this->source, $context["adherent"], "personne_id", [], "any", false, false, false, 50)]), "html", null, true);
                echo "\" class=\"btn btn-success\" method=\"post\">Changer l'adresse mail</a>
                <a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifMDPprofilAdherent", ["id" => twig_get_attribute($this->env, $this->source, $context["adherent"], "personne_id", [], "any", false, false, false, 51)]), "html", null, true);
                echo "\" class=\"btn btn-success\" method=\"post\">Changer le mot de passe</a>
            ";
            }
            // line 53
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adherent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "    </fieldset>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/adherent/profilpersonne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 54,  172 => 53,  167 => 51,  163 => 50,  157 => 47,  151 => 44,  144 => 40,  137 => 36,  130 => 32,  125 => 29,  122 => 28,  118 => 27,  115 => 26,  109 => 25,  103 => 22,  96 => 18,  89 => 14,  84 => 11,  82 => 10,  79 => 9,  75 => 8,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'accueil/adherent/homeadherent.html.twig' %}
{% block body %}


    <fieldset>
        <legend>Profil de l'adhérent</legend>

        {% for personne in personnes %}

            {% if personne.id == app.user.personne.id %}

                <br>
                <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Nom:  </label>
                <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">{{personne.nom_pers}}  </label>

                <br>
                <label for=\"staticprenom\" class=\"col-sm-2 col-form-label\">Prénom:  </label>
                <label for=\"staticprenom\" class=\"col-sm-2 col-form-label\">{{personne.prenom_pers}} </label>

                <br>
                <label for=\"staticadresseA\" class=\"col-sm-2 col-form-label\">Adresse e-mail:  </label>
                <label for=\"staticadresseA\" class=\"col-sm-2 col-form-label\">{{personne.mail_pers}}  </label>

            {% endif %}
        {% endfor %}

        {% for adherent in adherents %}
            {% if adherent.personne_id == app.user.personne.id %}

                <br>
                <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Date de naissance:</label>
                <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">{{adherent.anniv_adh|date(\"d/m/Y\")}}</label>

                <br>
                <label for=\"staticadresseA\" class=\"col-sm-2 col-form-label\">Numéro de licence:  </label>
                <label for=\"staticadresseA\" class=\"col-sm-2 col-form-label\">{{adherent.num_licence}} </label>

                <br>
                <label for=\"staticadresseA\" class=\"col-sm-2 col-form-label\">Adresse:  </label>
                <label for=\"staticadresseA\" class=\"col-sm-2 col-form-label\">{{adherent.adresse_adh}} </label>

                <br>
                <label for=\"staticadresseA\" class=\"col-sm-2 col-form-label\">Numéro de téléphone:  </label>
                <label for=\"staticadresseA\" class=\"col-sm-2 col-form-label\">{{adherent.tel}} </label>

                <br><br>
                <a href=\"{{ path('modifprofilAdherent',{'id': adherent.id})}}\" class=\"btn btn-primary\" method=\"post\">Modifier</a>

                <br><br>
                <a href=\"{{ path('modifinfopersonne',{'id': adherent.personne_id})}}\" class=\"btn btn-success\" method=\"post\">Changer l'adresse mail</a>
                <a href=\"{{ path('modifMDPprofilAdherent',{'id': adherent.personne_id})}}\" class=\"btn btn-success\" method=\"post\">Changer le mot de passe</a>
            {% endif %}
        {% endfor %}
    </fieldset>


{% endblock %}", "accueil/adherent/profilpersonne.html.twig", "C:\\Users\\USER\\Desktop\\gestadh_awa\\new_awa_project(fusion)\\gestion\\templates\\accueil\\adherent\\profilpersonne.html.twig");
    }
}
