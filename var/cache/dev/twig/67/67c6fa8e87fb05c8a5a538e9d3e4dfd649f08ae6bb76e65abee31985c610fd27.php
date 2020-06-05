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

/* accueil/structure/listeAdhStruct.html.twig */
class __TwigTemplate_663c7ee8c78cc99f9ba54df57bb8bf3876f8f9d942fb3e02d27d7eaa2c4c9b9f extends Template
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
        return "accueil/structure/homestructure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/structure/listeAdhStruct.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/structure/listeAdhStruct.html.twig"));

        $this->parent = $this->loadTemplate("accueil/structure/homestructure.html.twig", "accueil/structure/listeAdhStruct.html.twig", 1);
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
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["associations"]) || array_key_exists("associations", $context) ? $context["associations"] : (function () { throw new RuntimeError('Variable "associations" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["association"]) {
            // line 7
            echo "
        ";
            // line 9
            echo "        <div id=\"accordion\">
            <div class=\"card\">
                <div class=\"card-header\" id=\"headingOne\">
                    ";
            // line 13
            echo "                    <h5 class=\"mb-0\">
                        <button class=\"btn btn-link\" data-toggle=\"collapse\" data-target=\"#";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "getNomAsso", [], "method", false, false, false, 14), "html", null, true);
            echo "\" aria-expanded=\"false\" aria-controls=\"collapseOne\">
                            Association : ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "getNomAsso", [], "method", false, false, false, 15), "html", null, true);
            echo "
                        </button>
                    </h5>
                </div>

                ";
            // line 21
            echo "                <div id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "getNomAsso", [], "method", false, false, false, 21), "html", null, true);
            echo "\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordion\">
                    <div class=\"card-body\">

                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ListePersonneStruct", ["idAsso" => twig_get_attribute($this->env, $this->source, $context["association"], "getId", [], "method", false, false, false, 24)]), "html", null, true);
            echo "\" method=\"post\">Ajouter un adhérent</a>
                        <br>
                        <br>
                        Liste des adhérents de l'association :

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
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["association"], "getAdherents", [], "method", false, false, false, 45));
            foreach ($context['_seq'] as $context["_key"] => $context["adherent"]) {
                // line 46
                echo "
                                <tr>

                                    <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adherent"], "getPersonne", [], "method", false, false, false, 49), "getNomPers", [], "method", false, false, false, 49), "html", null, true);
                echo "</td>
                                    <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adherent"], "getPersonne", [], "method", false, false, false, 50), "getPrenomPers", [], "method", false, false, false, 50), "html", null, true);
                echo "</td>
                                    <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherent"], "getNumLicence", [], "method", false, false, false, 51), "html", null, true);
                echo "</td>
                                    <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherent"], "getAnnivAdh", [], "method", false, false, false, 52), "d/m/Y"), "html", null, true);
                echo "</td>
                                    <td>";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adherent"], "getPersonne", [], "method", false, false, false, 53), "getMailPers", [], "method", false, false, false, 53), "html", null, true);
                echo "</td>
                                    <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherent"], "getTel", [], "method", false, false, false, 54), "html", null, true);
                echo "</td>
                                    <td>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherent"], "getAdresseAdh", [], "method", false, false, false, 55), "html", null, true);
                echo "</td>


                                    <td>
                                        <a href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifprofilAdherentpourAsso", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adherent"], "getPersonne", [], "method", false, false, false, 59), "getId", [], "method", false, false, false, 59), "NumReturn" => 3]), "html", null, true);
                echo "\" method=\"post\">Modifier</a>
                                    </td>
                                    <td>
                                        <a href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprAdhStruct", ["idAdh" => twig_get_attribute($this->env, $this->source, $context["adherent"], "id", [], "any", false, false, false, 62), "idAsso" => twig_get_attribute($this->env, $this->source, $context["association"], "getId", [], "method", false, false, false, 62)]), "html", null, true);
                echo "\" method=\"post\">Supprimer</a>
                                    </td>

                                </tr>

                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adherent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['association'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "
    ";
        // line 77
        $this->displayBlock('javascripts', $context, $blocks);
        // line 89
        echo "
    ";
        // line 90
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 94
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
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

    // line 90
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 91
        echo "        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/keytable/2.5.0/css/keyTable.dataTables.min.css\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/structure/listeAdhStruct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 91,  255 => 90,  235 => 78,  225 => 77,  214 => 94,  212 => 90,  209 => 89,  207 => 77,  204 => 76,  191 => 68,  179 => 62,  173 => 59,  166 => 55,  162 => 54,  158 => 53,  154 => 52,  150 => 51,  146 => 50,  142 => 49,  137 => 46,  133 => 45,  109 => 24,  102 => 21,  94 => 15,  90 => 14,  87 => 13,  82 => 9,  79 => 7,  75 => 6,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'accueil/structure/homestructure.html.twig' %}
{% block body %}

    <fieldset>

    {% for association in associations %}

        {#Pour une case de l'accordéon on fait tout ça#}
        <div id=\"accordion\">
            <div class=\"card\">
                <div class=\"card-header\" id=\"headingOne\">
                    {#Ce qu'il y a d'écrit dans l'entête de l'accordéon#}
                    <h5 class=\"mb-0\">
                        <button class=\"btn btn-link\" data-toggle=\"collapse\" data-target=\"#{{association.getNomAsso()}}\" aria-expanded=\"false\" aria-controls=\"collapseOne\">
                            Association : {{association.getNomAsso()}}
                        </button>
                    </h5>
                </div>

                {#Ce qu'il y a d'écrit dans l'accordéon#}
                <div id=\"{{association.getNomAsso()}}\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordion\">
                    <div class=\"card-body\">

                        <a href=\"{{ path('ListePersonneStruct',{'idAsso': association.getId()})}}\" method=\"post\">Ajouter un adhérent</a>
                        <br>
                        <br>
                        Liste des adhérents de l'association :

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
                                        <a href=\"{{ path('modifprofilAdherentpourAsso',{'id': adherent.getPersonne().getId(), 'NumReturn': 3}) }}\" method=\"post\">Modifier</a>
                                    </td>
                                    <td>
                                        <a href=\"{{ path('supprAdhStruct',{'idAdh': adherent.id,'idAsso': association.getId()}) }}\" method=\"post\">Supprimer</a>
                                    </td>

                                </tr>

                            {% endfor %}

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    {% endfor %}

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

{% endblock %}", "accueil/structure/listeAdhStruct.html.twig", "C:\\Users\\USER\\Desktop\\gestadh_awa\\new_awa_project(fusion)\\gestion\\templates\\accueil\\structure\\listeAdhStruct.html.twig");
    }
}
