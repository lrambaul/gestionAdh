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

/* accueil/structure/listeIntervenantStructure.html.twig */
class __TwigTemplate_1e02168e10d08d5b0cb0685f660c376b215a937136771a5a2ef467416100a9e4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/structure/listeIntervenantStructure.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/structure/listeIntervenantStructure.html.twig"));

        $this->parent = $this->loadTemplate("accueil/structure/homestructure.html.twig", "accueil/structure/listeIntervenantStructure.html.twig", 1);
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
            echo "\" method=\"post\">Ajouter un intervenant</a>
                        <br>
                        <br>
                        Liste des intervenants de l'association :

                        <table id=\"\" class=\"display\" style=\"width:100%\">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Adresse e-mail</th>
                                <th>Numéro de Téléphone</th>
                                <th>Adresse</th>
                                <th>Modifier</th>
                                <th>Supprimer</th>
                            </tr>
                            </thead>
                            <tbody>

                            ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["association"], "getIntervenant", [], "method", false, false, false, 43));
            foreach ($context['_seq'] as $context["_key"] => $context["intervenant"]) {
                // line 44
                echo "                                <tr>

                                    <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["intervenant"], "getPersonne", [], "method", false, false, false, 46), "getNomPers", [], "method", false, false, false, 46), "html", null, true);
                echo "</td>
                                    <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["intervenant"], "getPersonne", [], "method", false, false, false, 47), "getPrenomPers", [], "method", false, false, false, 47), "html", null, true);
                echo "</td>
                                    <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["intervenant"], "getPersonne", [], "method", false, false, false, 48), "getMailPers", [], "method", false, false, false, 48), "html", null, true);
                echo "</td>
                                    <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervenant"], "getTelInter", [], "method", false, false, false, 49), "html", null, true);
                echo "</td>
                                    <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervenant"], "getAdresseInter", [], "method", false, false, false, 50), "html", null, true);
                echo "</td>


                                    <td>
                                        <a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifprofilIntervenantpourAsso", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["intervenant"], "getPersonne", [], "method", false, false, false, 54), "getId", [], "method", false, false, false, 54), "NumReturn" => 3]), "html", null, true);
                echo "\" method=\"post\">Modifier</a>
                                    </td>
                                    <td>
                                        <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprInterStruct", ["idInter" => twig_get_attribute($this->env, $this->source, $context["intervenant"], "id", [], "any", false, false, false, 57), "idAsso" => twig_get_attribute($this->env, $this->source, $context["association"], "id", [], "any", false, false, false, 57)]), "html", null, true);
                echo "\" method=\"post\">Supprimer</a>
                                    </td>

                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['intervenant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
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
        // line 70
        echo "
    ";
        // line 71
        $this->displayBlock('javascripts', $context, $blocks);
        // line 83
        echo "
    ";
        // line 84
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 88
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
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

    // line 84
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 85
        echo "        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/keytable/2.5.0/css/keyTable.dataTables.min.css\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/structure/listeIntervenantStructure.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 85,  243 => 84,  223 => 72,  213 => 71,  202 => 88,  200 => 84,  197 => 83,  195 => 71,  192 => 70,  179 => 62,  168 => 57,  162 => 54,  155 => 50,  151 => 49,  147 => 48,  143 => 47,  139 => 46,  135 => 44,  131 => 43,  109 => 24,  102 => 21,  94 => 15,  90 => 14,  87 => 13,  82 => 9,  79 => 7,  75 => 6,  70 => 3,  60 => 2,  37 => 1,);
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

                        <a href=\"{{ path('ListePersonneStruct',{'idAsso': association.getId()})}}\" method=\"post\">Ajouter un intervenant</a>
                        <br>
                        <br>
                        Liste des intervenants de l'association :

                        <table id=\"\" class=\"display\" style=\"width:100%\">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Adresse e-mail</th>
                                <th>Numéro de Téléphone</th>
                                <th>Adresse</th>
                                <th>Modifier</th>
                                <th>Supprimer</th>
                            </tr>
                            </thead>
                            <tbody>

                            {% for intervenant in association.getIntervenant() %}
                                <tr>

                                    <td>{{ intervenant.getPersonne().getNomPers() }}</td>
                                    <td>{{ intervenant.getPersonne().getPrenomPers() }}</td>
                                    <td>{{ intervenant.getPersonne().getMailPers() }}</td>
                                    <td>{{ intervenant.getTelInter() }}</td>
                                    <td>{{ intervenant.getAdresseInter() }}</td>


                                    <td>
                                        <a href=\"{{ path('modifprofilIntervenantpourAsso',{'id': intervenant.getPersonne().getId(), 'NumReturn': 3}) }}\" method=\"post\">Modifier</a>
                                    </td>
                                    <td>
                                        <a href=\"{{ path('supprInterStruct',{'idInter': intervenant.id,'idAsso': association.id}) }}\" method=\"post\">Supprimer</a>
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

{% endblock %}", "accueil/structure/listeIntervenantStructure.html.twig", "C:\\Users\\USER\\Desktop\\gestadh_awa\\new_awa_project(fusion)\\gestion\\templates\\accueil\\structure\\listeIntervenantStructure.html.twig");
    }
}
