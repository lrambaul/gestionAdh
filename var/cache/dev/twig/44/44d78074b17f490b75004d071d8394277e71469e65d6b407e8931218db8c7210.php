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

/* accueil/structure/listeAsso.html.twig */
class __TwigTemplate_9bf6cf8b4155498e5351312c6a7e1ffaa4413197232648a548331fd2acc91347 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/structure/listeAsso.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/structure/listeAsso.html.twig"));

        $this->parent = $this->loadTemplate("accueil/structure/homestructure.html.twig", "accueil/structure/listeAsso.html.twig", 1);
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

        <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AjoutAsso");
        echo "\" class=\"btn btn-primary\" method=\"post\">Ajouter une association</a>

        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["associations"]) || array_key_exists("associations", $context) ? $context["associations"] : (function () { throw new RuntimeError('Variable "associations" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["association"]) {
            // line 9
            echo "
            <h2>Association : ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "getNomAsso", [], "method", false, false, false, 10), "html", null, true);
            echo "</h2>

            ";
            // line 13
            echo "            <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                ";
            // line 15
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link active\" id=\"home-tab\" data-toggle=\"tab\" href=\"#";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "getNomAsso", [], "method", false, false, false, 16), "html", null, true);
            echo ".info\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Informations sur l'association</a>
                </li>
                ";
            // line 19
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "getNomAsso", [], "method", false, false, false, 20), "html", null, true);
            echo ".administrateur\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">Liste des gérants de l'association</a>
                </li>
                ";
            // line 23
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "getNomAsso", [], "method", false, false, false, 24), "html", null, true);
            echo ".suppression\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">Supprimer l'association</a>
                </li>
            </ul>

            ";
            // line 29
            echo "            <div class=\"tab-content\">
                ";
            // line 31
            echo "                <div class=\"tab-pane active\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "getNomAsso", [], "method", false, false, false, 31), "html", null, true);
            echo ".info\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
                    <br>
                    <div class=\"form-group row\">
                        <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Nom:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control-plaintext\" id=\"staticstatut\" value=\"";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "getNomAsso", [], "method", false, false, false, 36), "html", null, true);
            echo "\">
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Adresse:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticstatut\" value=\"";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "getAdresseAsso", [], "method", false, false, false, 43), "html", null, true);
            echo "\">
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"staticadresseA\" class=\"col-sm-2 col-form-label\">Adresse e-mail:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticadresseA\" value=\"";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "getMailAsso", [], "method", false, false, false, 50), "html", null, true);
            echo "\">
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Numéro de téléphone:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticstatut\" value=";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "getTelAsso", [], "method", false, false, false, 57), "html", null, true);
            echo ">
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Fédération:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticstatut\" value=";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "getFederationAsso", [], "method", false, false, false, 64), "html", null, true);
            echo ">
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Comité:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticstatut\" value=";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "getComiteAsso", [], "method", false, false, false, 71), "html", null, true);
            echo ">
                        </div>
                    </div>

                    <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifprofilAssociationRégion", ["id" => twig_get_attribute($this->env, $this->source, $context["association"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            echo "\" class=\"btn btn-primary\" method=\"post\">Modifier les informations de l'association</a>
                    <br>
                </div>

                ";
            // line 80
            echo "                <div class=\"tab-pane\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "getNomAsso", [], "method", false, false, false, 80), "html", null, true);
            echo ".administrateur\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
                    <br>
                    <h4>Liste des administrateurs de l'association</h4>

                    <a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ListePersonneRégion", ["idAsso" => twig_get_attribute($this->env, $this->source, $context["association"], "getId", [], "method", false, false, false, 84)]), "html", null, true);
            echo "\" method=\"post\">Ajouter un administrateur</a>

                    <table id=\"\" class=\"display\" style=\"width:100%\">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Adresse e-mail</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                        </tr>
                        </thead>
                        <tbody>

                        ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["association"], "getPersonnes", [], "method", false, false, false, 98));
            foreach ($context['_seq'] as $context["_key"] => $context["personne"]) {
                // line 99
                echo "                            <tr>

                                <td>";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "getNomPers", [], "method", false, false, false, 101), "html", null, true);
                echo "</td>
                                <td>";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "getPrenomPers", [], "method", false, false, false, 102), "html", null, true);
                echo "</td>
                                <td>";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "getMailPers", [], "method", false, false, false, 103), "html", null, true);
                echo "</td>


                                <td>
                                    <a href=\"";
                // line 107
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifprofilAdminpourAsso", ["id" => twig_get_attribute($this->env, $this->source, $context["personne"], "getId", [], "method", false, false, false, 107)]), "html", null, true);
                echo "\" method=\"post\">Modifier</a>
                                </td>
                                <td>
                                    <a href=\"";
                // line 110
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprAdmin", ["idPers" => twig_get_attribute($this->env, $this->source, $context["personne"], "id", [], "any", false, false, false, 110), "idAsso" => twig_get_attribute($this->env, $this->source, $context["association"], "id", [], "any", false, false, false, 110)]), "html", null, true);
                echo "\" method=\"post\">Supprimer</a>
                                </td>

                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personne'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "
                        </tbody>
                    </table>
                    <br>
                </div>

                ";
            // line 122
            echo "                <div class=\"tab-pane\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "getNomAsso", [], "method", false, false, false, 122), "html", null, true);
            echo ".suppression\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
                    <br>
                    <br>
                    <br>
                    <br>
                    Etes-vous sur de vouloir supprimer cette association, ainsi que tout les groupes, adhérents et intérvenants qui lui sont lié ?
                    <br>
                    <br>
                    <br>
                    <a href=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("SupprAssociationRégion", ["idAsso" => twig_get_attribute($this->env, $this->source, $context["association"], "id", [], "any", false, false, false, 131)]), "html", null, true);
            echo "\" class=\"btn btn-primary\" method=\"post\">Supprimer l'association</a>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
            <br>
            <hr>
            <br>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['association'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "    </fieldset>

    ";
        // line 144
        $this->displayBlock('javascripts', $context, $blocks);
        // line 156
        echo "
    ";
        // line 157
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 144
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 145
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

    // line 157
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 158
        echo "        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/keytable/2.5.0/css/keyTable.dataTables.min.css\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/structure/listeAsso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 158,  349 => 157,  329 => 145,  319 => 144,  309 => 157,  306 => 156,  304 => 144,  300 => 142,  283 => 131,  270 => 122,  262 => 115,  251 => 110,  245 => 107,  238 => 103,  234 => 102,  230 => 101,  226 => 99,  222 => 98,  205 => 84,  197 => 80,  190 => 75,  183 => 71,  173 => 64,  163 => 57,  153 => 50,  143 => 43,  133 => 36,  124 => 31,  121 => 29,  114 => 24,  111 => 23,  106 => 20,  103 => 19,  98 => 16,  95 => 15,  92 => 13,  87 => 10,  84 => 9,  80 => 8,  75 => 6,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'accueil/structure/homestructure.html.twig' %}
{% block body %}

    <fieldset>

        <a href=\"{{ path('AjoutAsso')}}\" class=\"btn btn-primary\" method=\"post\">Ajouter une association</a>

        {% for association in associations %}

            <h2>Association : {{association.getNomAsso()}}</h2>

            {#Début de la Nav-bar, Les noms des ongles#}
            <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                {#En-tête pour l'Onglet pour les informations de l'association#}
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" id=\"home-tab\" data-toggle=\"tab\" href=\"#{{association.getNomAsso()}}.info\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Informations sur l'association</a>
                </li>
                {#En-tête pour l'Onglet pour les gérants de l'association#}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#{{association.getNomAsso()}}.administrateur\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">Liste des gérants de l'association</a>
                </li>
                {#En-tête pour l'Onglet pour supprimer l'association#}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#{{association.getNomAsso()}}.suppression\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">Supprimer l'association</a>
                </li>
            </ul>

            {#Début du contenu des onglets#}
            <div class=\"tab-content\">
                {#Onglet pour les informations de l'association#}
                <div class=\"tab-pane active\" id=\"{{association.getNomAsso()}}.info\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
                    <br>
                    <div class=\"form-group row\">
                        <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Nom:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control-plaintext\" id=\"staticstatut\" value=\"{{association.getNomAsso()}}\">
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Adresse:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticstatut\" value=\"{{association.getAdresseAsso()}}\">
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"staticadresseA\" class=\"col-sm-2 col-form-label\">Adresse e-mail:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticadresseA\" value=\"{{association.getMailAsso()}}\">
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Numéro de téléphone:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticstatut\" value={{association.getTelAsso()}}>
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Fédération:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticstatut\" value={{association.getFederationAsso()}}>
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label for=\"staticnom\" class=\"col-sm-2 col-form-label\">Comité:  </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticstatut\" value={{association.getComiteAsso()}}>
                        </div>
                    </div>

                    <a href=\"{{ path('modifprofilAssociationRégion',{'id': association.id})}}\" class=\"btn btn-primary\" method=\"post\">Modifier les informations de l'association</a>
                    <br>
                </div>

                {#Onglet pour les gérant de l'association#}
                <div class=\"tab-pane\" id=\"{{association.getNomAsso()}}.administrateur\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
                    <br>
                    <h4>Liste des administrateurs de l'association</h4>

                    <a href=\"{{ path('ListePersonneRégion',{'idAsso': association.getId()})}}\" method=\"post\">Ajouter un administrateur</a>

                    <table id=\"\" class=\"display\" style=\"width:100%\">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Adresse e-mail</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                        </tr>
                        </thead>
                        <tbody>

                        {% for personne in association.getPersonnes() %}
                            <tr>

                                <td>{{ personne.getNomPers() }}</td>
                                <td>{{ personne.getPrenomPers() }}</td>
                                <td>{{ personne.getMailPers() }}</td>


                                <td>
                                    <a href=\"{{ path('modifprofilAdminpourAsso',{'id': personne.getId()}) }}\" method=\"post\">Modifier</a>
                                </td>
                                <td>
                                    <a href=\"{{ path('supprAdmin',{'idPers': personne.id,'idAsso': association.id}) }}\" method=\"post\">Supprimer</a>
                                </td>

                            </tr>
                        {% endfor %}

                        </tbody>
                    </table>
                    <br>
                </div>

                {#Onglet pour supprimer l'association#}
                <div class=\"tab-pane\" id=\"{{association.getNomAsso()}}.suppression\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
                    <br>
                    <br>
                    <br>
                    <br>
                    Etes-vous sur de vouloir supprimer cette association, ainsi que tout les groupes, adhérents et intérvenants qui lui sont lié ?
                    <br>
                    <br>
                    <br>
                    <a href=\"{{ path('SupprAssociationRégion',{'idAsso': association.id})}}\" class=\"btn btn-primary\" method=\"post\">Supprimer l'association</a>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
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
", "accueil/structure/listeAsso.html.twig", "C:\\Users\\USER\\Desktop\\gestadh_awa\\new_awa_project(fusion)\\gestion\\templates\\accueil\\structure\\listeAsso.html.twig");
    }
}
