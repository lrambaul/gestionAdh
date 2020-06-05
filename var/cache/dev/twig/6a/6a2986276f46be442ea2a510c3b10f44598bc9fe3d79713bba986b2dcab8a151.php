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

/* accueil/association/listeAdh.html.twig */
class __TwigTemplate_79fb3dd00d53a302d2d6a274c422cd68d44df4682d7b4fa406525f97b6285def extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/association/listeAdh.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/association/listeAdh.html.twig"));

        $this->parent = $this->loadTemplate("accueil/association/homeassociation.html.twig", "accueil/association/listeAdh.html.twig", 1);
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
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["associations"]) || array_key_exists("associations", $context) ? $context["associations"] : (function () { throw new RuntimeError('Variable "associations" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["association"]) {
            // line 6
            echo "
            <legend>Liste des adhérents de l'association : ";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "getNomAsso", [], "method", false, false, false, 7), "html", null, true);
            echo "</legend>

            <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ListePersonne", ["idAsso" => twig_get_attribute($this->env, $this->source, $context["association"], "getId", [], "method", false, false, false, 9)]), "html", null, true);
            echo "\" method=\"post\">Ajouter un adhérent</a>

            <table id=\"\" class=\"display\" style=\"width:100%\">
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Numéro de Lience</th>
                    <th>Date de naissance</th>
                    <th>Adresse e-mail</th>
                    <th>Numéro de Téléphone</th>
                    <th>Adresse</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
                </thead>
                <tbody>

                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["association"], "getAdherents", [], "method", false, false, false, 27));
            foreach ($context['_seq'] as $context["_key"] => $context["adherent"]) {
                // line 28
                echo "                    <tr>

                        <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adherent"], "getPersonne", [], "method", false, false, false, 30), "getNomPers", [], "method", false, false, false, 30), "html", null, true);
                echo "</td>
                        <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adherent"], "getPersonne", [], "method", false, false, false, 31), "getPrenomPers", [], "method", false, false, false, 31), "html", null, true);
                echo "</td>
                        <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherent"], "getNumLicence", [], "method", false, false, false, 32), "html", null, true);
                echo "</td>
                        <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherent"], "getAnnivAdh", [], "method", false, false, false, 33), "d/m/Y"), "html", null, true);
                echo "</td>
                        <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adherent"], "getPersonne", [], "method", false, false, false, 34), "getMailPers", [], "method", false, false, false, 34), "html", null, true);
                echo "</td>
                        <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherent"], "getTel", [], "method", false, false, false, 35), "html", null, true);
                echo "</td>
                        <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherent"], "getAdresseAdh", [], "method", false, false, false, 36), "html", null, true);
                echo "</td>


                        <td>
                            <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifprofilAdherentpourAsso", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adherent"], "getPersonne", [], "method", false, false, false, 40), "getId", [], "method", false, false, false, 40), "NumReturn" => 2]), "html", null, true);
                echo "\" method=\"post\">Modifier</a>
                        </td>
                        <td>
                            <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprAdh", ["idAdh" => twig_get_attribute($this->env, $this->source, $context["adherent"], "id", [], "any", false, false, false, 43), "idAsso" => twig_get_attribute($this->env, $this->source, $context["association"], "id", [], "any", false, false, false, 43)]), "html", null, true);
                echo "\" method=\"post\">Supprimer</a>
                        </td>

                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adherent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "
                </tbody>
            </table>
            <br>
            <hr>
            <br>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['association'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "    </fieldset>

    ";
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "
    ";
        // line 70
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "
        <script src=\"https://code.jquery.com/jquery-3.3.1.js\"></script>
        <script src=\"https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js\"></script>
        <script src=\"https://cdn.datatables.net/keytable/2.5.0/js/dataTables.keyTable.min.js\"></script>
        <script>
            \$(document).ready(function() {
                \$('table.display').DataTable();
            } );
        </script>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 70
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 71
        echo "        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/keytable/2.5.0/css/keyTable.dataTables.min.css\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/association/listeAdh.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 71,  224 => 70,  204 => 58,  194 => 57,  184 => 70,  181 => 69,  179 => 57,  175 => 55,  163 => 48,  152 => 43,  146 => 40,  139 => 36,  135 => 35,  131 => 34,  127 => 33,  123 => 32,  119 => 31,  115 => 30,  111 => 28,  107 => 27,  86 => 9,  81 => 7,  78 => 6,  74 => 5,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'accueil/association/homeassociation.html.twig' %}
{% block body %}

    <fieldset>
        {% for association in associations %}

            <legend>Liste des adhérents de l'association : {{association.getNomAsso()}}</legend>

            <a href=\"{{ path('ListePersonne',{'idAsso': association.getId()})}}\" method=\"post\">Ajouter un adhérent</a>

            <table id=\"\" class=\"display\" style=\"width:100%\">
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Numéro de Lience</th>
                    <th>Date de naissance</th>
                    <th>Adresse e-mail</th>
                    <th>Numéro de Téléphone</th>
                    <th>Adresse</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
                </thead>
                <tbody>

                {% for adherent in association.getAdherents() %}
                    <tr>

                        <td>{{ adherent.getPersonne().getNomPers() }}</td>
                        <td>{{ adherent.getPersonne().getPrenomPers() }}</td>
                        <td>{{ adherent.getNumLicence() }}</td>
                        <td>{{ adherent.getAnnivAdh()|date(\"d/m/Y\") }}</td>
                        <td>{{ adherent.getPersonne().getMailPers() }}</td>
                        <td>{{ adherent.getTel() }}</td>
                        <td>{{ adherent.getAdresseAdh() }}</td>


                        <td>
                            <a href=\"{{ path('modifprofilAdherentpourAsso',{'id': adherent.getPersonne().getId(), 'NumReturn': 2}) }}\" method=\"post\">Modifier</a>
                        </td>
                        <td>
                            <a href=\"{{ path('supprAdh',{'idAdh': adherent.id,'idAsso': association.id}) }}\" method=\"post\">Supprimer</a>
                        </td>

                    </tr>
                {% endfor %}

                </tbody>
            </table>
            <br>
            <hr>
            <br>
        {% endfor %}
    </fieldset>

    {% block javascripts %}

        <script src=\"https://code.jquery.com/jquery-3.3.1.js\"></script>
        <script src=\"https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js\"></script>
        <script src=\"https://cdn.datatables.net/keytable/2.5.0/js/dataTables.keyTable.min.js\"></script>
        <script>
            \$(document).ready(function() {
                \$('table.display').DataTable();
            } );
        </script>

    {% endblock %}

    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/keytable/2.5.0/css/keyTable.dataTables.min.css\">
    {% endblock %}
{% endblock %}
", "accueil/association/listeAdh.html.twig", "C:\\Users\\USER\\Desktop\\gestadh_awa\\new_awa_project(fusion)\\gestion\\templates\\accueil\\association\\listeAdh.html.twig");
    }
}
