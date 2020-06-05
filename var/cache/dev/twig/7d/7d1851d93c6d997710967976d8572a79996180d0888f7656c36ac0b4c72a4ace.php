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

/* accueil/association/listeGroupe.html.twig */
class __TwigTemplate_c56c31124468eae2d94dc3e9669ab0f47ffd19285cf4a6b86d7a28a2fe938cd0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/association/listeGroupe.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/association/listeGroupe.html.twig"));

        $this->parent = $this->loadTemplate("accueil/association/homeassociation.html.twig", "accueil/association/listeGroupe.html.twig", 1);
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
                        <button>
                            <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AjoutGroupe", ["idAsso" => twig_get_attribute($this->env, $this->source, $context["association"], "getId", [], "method", false, false, false, 18), "NumReturn" => 1]), "html", null, true);
            echo "\" method=\"post\">Ajouter un Groupe</a>
                        </button>
                    </h5>
                </div>

                ";
            // line 24
            echo "                <div id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "getNomAsso", [], "method", false, false, false, 24), "html", null, true);
            echo "\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordion\">
                    <div class=\"card-body\">

                        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["association"], "getGroupes", [], "method", false, false, false, 27));
            foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
                // line 28
                echo "                            Pour le groupe : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["groupe"], "getNomGroupe", [], "method", false, false, false, 28), "html", null, true);
                echo "   <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifprofilGroupeAsso", ["idGroupe" => twig_get_attribute($this->env, $this->source, $context["groupe"], "getId", [], "method", false, false, false, 28), "NumReturn" => 1]), "html", null, true);
                echo "\" method=\"post\">Modifier le nom du groupe</a>
                            ";
                // line 30
                echo "                            <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                                ";
                // line 32
                echo "                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" id=\"Intervenant-tab\" data-toggle=\"tab\" href=\"#";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "getNomAsso", [], "method", false, false, false, 33), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["groupe"], "getNomGroupe", [], "method", false, false, false, 33), "html", null, true);
                echo ".Inter\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Intervenants</a>
                                </li>
                                ";
                // line 36
                echo "                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" id=\"Adherent-tab\" data-toggle=\"tab\" href=\"#";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "getNomAsso", [], "method", false, false, false, 37), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["groupe"], "getNomGroupe", [], "method", false, false, false, 37), "html", null, true);
                echo ".Adh\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">Adhérents</a>
                                </li>
                                ";
                // line 40
                echo "                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "getNomAsso", [], "method", false, false, false, 41), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["groupe"], "getNomGroupe", [], "method", false, false, false, 41), "html", null, true);
                echo ".suppression\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">Supprimer le groupe</a>
                                </li>
                            </ul>
                            ";
                // line 45
                echo "                            <div class=\"tab-content\">
                                ";
                // line 47
                echo "                                <div class=\"tab-pane active\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "getNomAsso", [], "method", false, false, false, 47), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["groupe"], "getNomGroupe", [], "method", false, false, false, 47), "html", null, true);
                echo ".Inter\" role=\"tabpanel\" aria-labelledby=\"Intervenant-tab\">

                                    <a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ListeIntervenantGroupe", ["idGroupe" => twig_get_attribute($this->env, $this->source, $context["groupe"], "getId", [], "method", false, false, false, 49)]), "html", null, true);
                echo "\" method=\"post\">Ajouter un intervenant</a>

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
                // line 65
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["groupe"], "getIntervenants", [], "method", false, false, false, 65));
                foreach ($context['_seq'] as $context["_key"] => $context["intervenant"]) {
                    // line 66
                    echo "                                            <tr>

                                                <td>";
                    // line 68
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["intervenant"], "getPersonne", [], "method", false, false, false, 68), "getNomPers", [], "method", false, false, false, 68), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 69
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["intervenant"], "getPersonne", [], "method", false, false, false, 69), "getPrenomPers", [], "method", false, false, false, 69), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 70
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["intervenant"], "getPersonne", [], "method", false, false, false, 70), "getMailPers", [], "method", false, false, false, 70), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 71
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervenant"], "getTelInter", [], "method", false, false, false, 71), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 72
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervenant"], "getAdresseInter", [], "method", false, false, false, 72), "html", null, true);
                    echo "</td>


                                                <td>
                                                    <a href=\"";
                    // line 76
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifprofilIntervenantpourAsso", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["intervenant"], "getPersonne", [], "method", false, false, false, 76), "getId", [], "method", false, false, false, 76), "NumReturn" => 1]), "html", null, true);
                    echo "\" method=\"post\">Modifier</a>
                                                </td>
                                                <td>
                                                    <a href=\"";
                    // line 79
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprInterGroupe", ["idInter" => twig_get_attribute($this->env, $this->source, $context["intervenant"], "id", [], "any", false, false, false, 79), "idGroupe" => twig_get_attribute($this->env, $this->source, $context["groupe"], "getId", [], "method", false, false, false, 79), "NumReturn" => 1]), "html", null, true);
                    echo "\" method=\"post\">Supprimer</a>
                                                </td>

                                            </tr>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['intervenant'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                echo "
                                        </tbody>
                                    </table>
                                    <br>
                                    <hr>
                                    <br>
                                </div>
                                ";
                // line 92
                echo "                                <div class=\"tab-pane\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "getNomAsso", [], "method", false, false, false, 92), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["groupe"], "getNomGroupe", [], "method", false, false, false, 92), "html", null, true);
                echo ".Adh\" role=\"tabpanel\" aria-labelledby=\"Adherent-tab\">

                                    <a href=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ListeAdhGroupe", ["idGroupe" => twig_get_attribute($this->env, $this->source, $context["groupe"], "getId", [], "method", false, false, false, 94)]), "html", null, true);
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
                // line 112
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["groupe"], "getAdherents", [], "method", false, false, false, 112));
                foreach ($context['_seq'] as $context["_key"] => $context["adherent"]) {
                    // line 113
                    echo "                                            <tr>

                                                <td>";
                    // line 115
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adherent"], "getPersonne", [], "method", false, false, false, 115), "getNomPers", [], "method", false, false, false, 115), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 116
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adherent"], "getPersonne", [], "method", false, false, false, 116), "getPrenomPers", [], "method", false, false, false, 116), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 117
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherent"], "getNumLicence", [], "method", false, false, false, 117), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 118
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherent"], "getAnnivAdh", [], "method", false, false, false, 118), "d/m/Y"), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 119
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adherent"], "getPersonne", [], "method", false, false, false, 119), "getMailPers", [], "method", false, false, false, 119), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 120
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherent"], "getTel", [], "method", false, false, false, 120), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 121
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherent"], "getAdresseAdh", [], "method", false, false, false, 121), "html", null, true);
                    echo "</td>


                                                <td>
                                                    <a href=\"";
                    // line 125
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifprofilAdherentpourAsso", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adherent"], "getPersonne", [], "method", false, false, false, 125), "getId", [], "method", false, false, false, 125), "NumReturn" => 1]), "html", null, true);
                    echo "\" method=\"post\">Modifier</a>
                                                </td>
                                                <td>
                                                    <a href=\"";
                    // line 128
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprAdhGroupe", ["idAdh" => twig_get_attribute($this->env, $this->source, $context["adherent"], "id", [], "any", false, false, false, 128), "idGroupe" => twig_get_attribute($this->env, $this->source, $context["groupe"], "getId", [], "method", false, false, false, 128), "NumReturn" => 1]), "html", null, true);
                    echo "\" method=\"post\">Supprimer</a>
                                                </td>

                                            </tr>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adherent'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 133
                echo "
                                        </tbody>
                                    </table>
                                    <br>
                                    <hr>
                                    <br>
                                </div>

                                ";
                // line 142
                echo "                                <div class=\"tab-pane\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "getNomAsso", [], "method", false, false, false, 142), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["groupe"], "getNomGroupe", [], "method", false, false, false, 142), "html", null, true);
                echo ".suppression\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    Etes-vous sur de vouloir supprimer ce groupe ?
                                    <br>
                                    <br>
                                    <br>
                                    <a href=\"";
                // line 151
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("SupprGroupeAsso", ["idGroupe" => twig_get_attribute($this->env, $this->source, $context["groupe"], "getId", [], "method", false, false, false, 151), "NumReturn" => 1]), "html", null, true);
                echo "\" class=\"btn btn-primary\" method=\"post\">Supprimer le groupe</a>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "                    </div>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['association'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "
    ";
        // line 165
        $this->displayBlock('javascripts', $context, $blocks);
        // line 177
        echo "
    ";
        // line 178
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 182
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 165
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 166
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

    // line 178
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 179
        echo "        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/keytable/2.5.0/css/keyTable.dataTables.min.css\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/association/listeGroupe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 179,  432 => 178,  412 => 166,  402 => 165,  391 => 182,  389 => 178,  386 => 177,  384 => 165,  381 => 164,  371 => 159,  357 => 151,  342 => 142,  332 => 133,  321 => 128,  315 => 125,  308 => 121,  304 => 120,  300 => 119,  296 => 118,  292 => 117,  288 => 116,  284 => 115,  280 => 113,  276 => 112,  255 => 94,  247 => 92,  238 => 84,  227 => 79,  221 => 76,  214 => 72,  210 => 71,  206 => 70,  202 => 69,  198 => 68,  194 => 66,  190 => 65,  171 => 49,  163 => 47,  160 => 45,  152 => 41,  149 => 40,  142 => 37,  139 => 36,  132 => 33,  129 => 32,  126 => 30,  119 => 28,  115 => 27,  108 => 24,  100 => 18,  94 => 15,  90 => 14,  87 => 13,  82 => 9,  79 => 7,  75 => 6,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'accueil/association/homeassociation.html.twig' %}
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
                        <button>
                            <a href=\"{{ path('AjoutGroupe',{'idAsso': association.getId(), 'NumReturn': 1})}}\" method=\"post\">Ajouter un Groupe</a>
                        </button>
                    </h5>
                </div>

                {#Ce qu'il y a d'écrit dans l'accordéon#}
                <div id=\"{{association.getNomAsso()}}\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordion\">
                    <div class=\"card-body\">

                        {% for groupe in association.getGroupes() %}
                            Pour le groupe : {{groupe.getNomGroupe()}}   <a href=\"{{ path('modifprofilGroupeAsso',{'idGroupe': groupe.getId(), 'NumReturn': 1})}}\" method=\"post\">Modifier le nom du groupe</a>
                            {#Début de la nav-tab#}
                            <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                                {#Premier Onglet de la nav-tab#}
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" id=\"Intervenant-tab\" data-toggle=\"tab\" href=\"#{{association.getNomAsso()}}.{{ groupe.getNomGroupe()}}.Inter\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Intervenants</a>
                                </li>
                                {#Deuxième Onglet de la nav-tab#}
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" id=\"Adherent-tab\" data-toggle=\"tab\" href=\"#{{association.getNomAsso()}}.{{ groupe.getNomGroupe()}}.Adh\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">Adhérents</a>
                                </li>
                                {#En-tête pour l'Onglet pour supprimer l'association#}
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#{{association.getNomAsso()}}.{{ groupe.getNomGroupe()}}.suppression\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">Supprimer le groupe</a>
                                </li>
                            </ul>
                            {#Contenu des Onglets de la nav-tab#}
                            <div class=\"tab-content\">
                                {#Contenu du premier Onglet de la nav-tab#}
                                <div class=\"tab-pane active\" id=\"{{association.getNomAsso()}}.{{ groupe.getNomGroupe()}}.Inter\" role=\"tabpanel\" aria-labelledby=\"Intervenant-tab\">

                                    <a href=\"{{ path('ListeIntervenantGroupe',{'idGroupe': groupe.getId()})}}\" method=\"post\">Ajouter un intervenant</a>

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

                                        {% for intervenant in groupe.getIntervenants() %}
                                            <tr>

                                                <td>{{ intervenant.getPersonne().getNomPers() }}</td>
                                                <td>{{ intervenant.getPersonne().getPrenomPers() }}</td>
                                                <td>{{ intervenant.getPersonne().getMailPers() }}</td>
                                                <td>{{ intervenant.getTelInter() }}</td>
                                                <td>{{ intervenant.getAdresseInter() }}</td>


                                                <td>
                                                    <a href=\"{{ path('modifprofilIntervenantpourAsso',{'id': intervenant.getPersonne().getId(),'NumReturn': 1}) }}\" method=\"post\">Modifier</a>
                                                </td>
                                                <td>
                                                    <a href=\"{{ path('supprInterGroupe',{'idInter': intervenant.id,'idGroupe': groupe.getId(),'NumReturn': 1}) }}\" method=\"post\">Supprimer</a>
                                                </td>

                                            </tr>
                                        {% endfor %}

                                        </tbody>
                                    </table>
                                    <br>
                                    <hr>
                                    <br>
                                </div>
                                {#Contenu du deuxième Onglet de la nav-tab#}
                                <div class=\"tab-pane\" id=\"{{association.getNomAsso()}}.{{ groupe.getNomGroupe()}}.Adh\" role=\"tabpanel\" aria-labelledby=\"Adherent-tab\">

                                    <a href=\"{{ path('ListeAdhGroupe',{'idGroupe': groupe.getId()})}}\" method=\"post\">Ajouter un adhérent</a>

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

                                        {% for adherent in groupe.getAdherents() %}
                                            <tr>

                                                <td>{{ adherent.getPersonne().getNomPers() }}</td>
                                                <td>{{ adherent.getPersonne().getPrenomPers() }}</td>
                                                <td>{{ adherent.getNumLicence() }}</td>
                                                <td>{{ adherent.getAnnivAdh()|date(\"d/m/Y\") }}</td>
                                                <td>{{ adherent.getPersonne().getMailPers() }}</td>
                                                <td>{{ adherent.getTel() }}</td>
                                                <td>{{ adherent.getAdresseAdh() }}</td>


                                                <td>
                                                    <a href=\"{{ path('modifprofilAdherentpourAsso',{'id': adherent.getPersonne().getId(), 'NumReturn': 1}) }}\" method=\"post\">Modifier</a>
                                                </td>
                                                <td>
                                                    <a href=\"{{ path('supprAdhGroupe',{'idAdh': adherent.id,'idGroupe': groupe.getId(), 'NumReturn': 1}) }}\" method=\"post\">Supprimer</a>
                                                </td>

                                            </tr>
                                        {% endfor %}

                                        </tbody>
                                    </table>
                                    <br>
                                    <hr>
                                    <br>
                                </div>

                                {#Onglet pour supprimer le groupe#}
                                <div class=\"tab-pane\" id=\"{{association.getNomAsso()}}.{{ groupe.getNomGroupe()}}.suppression\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    Etes-vous sur de vouloir supprimer ce groupe ?
                                    <br>
                                    <br>
                                    <br>
                                    <a href=\"{{ path('SupprGroupeAsso',{'idGroupe': groupe.getId(), 'NumReturn': 1})}}\" class=\"btn btn-primary\" method=\"post\">Supprimer le groupe</a>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        {% endfor %}
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

{% endblock %}", "accueil/association/listeGroupe.html.twig", "C:\\Users\\USER\\Desktop\\gestadh_awa\\new_awa_project(fusion)\\gestion\\templates\\accueil\\association\\listeGroupe.html.twig");
    }
}
