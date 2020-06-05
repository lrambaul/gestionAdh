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

/* security/loginForm.html.twig */
class __TwigTemplate_8bb7e2023386e5449802594cfca3386330a607b48ea37e5289b9f7350c1c448b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascript_include' => [$this, 'block_javascript_include'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/loginForm.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/loginForm.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<meta charset=\"UTF-8\">

    <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/yeti/bootstrap.min.css\">

<title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "</head>
";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('javascripts', $context, $blocks);
        // line 87
        echo "</html>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "GDA Connexion";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        $this->displayBlock('javascript_include', $context, $blocks);
        // line 16
        echo "<body>
   <form id=\"formlogin\" method=\"post\">
       <div class=\"container mt-4\">

            ";
        // line 20
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 20, $this->source); })())) {
            // line 21
            echo "                <div class=\"alert alert-danger\">
                    ";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 22, $this->source); })()), "messageKey", [], "any", false, false, false, 22), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 22, $this->source); })()), "messagedata", [], "any", false, false, false, 22), "security"), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 25
        echo "            ";
        if (1 === twig_compare(twig_length_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 25, $this->source); })())), 1)) {
            // line 26
            echo "           <div class=\"alert alert-danger\">
               ";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 27, $this->source); })()), "html", null, true);
            echo "
           </div>
            ";
        }
        // line 30
        echo "
            <div class=\"form-group\">
                <label for=\"username\">Adresse mail</label>
                <input type=\"text\" id=\"mail_pers\" name=\"_username\" class=\"form-control\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "\">
            </div>

           <div class=\"form-group\">
               <label for=\"password\">Mot de Passe</label>
               <input type=\"password\" id=\"mdp\" name=\"_password\" class=\"form-control\">
           </div>

           <input type=\"hidden\" name=\"_csrf_token\" value=\"({csrf_token('authenticate')})\">
           <input type=\"hidden\" name=\"id\" id=\"idId\" value=\"\">
           <div id=\"choix\"></div>

        <button type=\"submit\" class=\"btn btn-primary\" id=\"fom_click\">Se connecter</button>

       </div>
   </form>
</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_javascript_include($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_include"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_include"));

        // line 13
        echo "    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.3.1.min.js\" crossorigin=\"anonymous\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "    <script>
        function login (id, action) {
            \$(\"#idId\").val(id);
            \$(\"#formlogin\").attr('action', action).submit();
        }

        \$(document).ready(function() {
            var user = \$(\"#mail_pers\").val();
            var mdp = \$(\"#mdp\").val();
            alert(user);
            \$.post(\" ";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\",
                {email : user, password: mdp} ,
                function(data, statut){

                    if (statut === 'success'){
                        alert('OK');
                        if (data.lenght>1){

                            let r = '<div>';
                            let c, badge, nom;
                            for (c in data){
                                r += '<span onclick=\"login(\\'' + data[c][0] + '\\', \\'' + data[c][1] + '\\')\" >'
                                    + data[c].[2] + '</span>';
                            }
                            r += '</div>';
                            \$(\"#choix\").html(r);
                        } else{
                            login (data[0][0], data[0][1]);
                        }
                    }
                });
            });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/loginForm.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  241 => 63,  229 => 53,  219 => 52,  207 => 13,  197 => 12,  169 => 33,  164 => 30,  158 => 27,  155 => 26,  152 => 25,  146 => 22,  143 => 21,  141 => 20,  135 => 16,  133 => 12,  123 => 11,  105 => 9,  86 => 8,  73 => 87,  71 => 52,  68 => 51,  66 => 11,  63 => 10,  61 => 9,  57 => 8,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
<meta charset=\"UTF-8\">

    <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/yeti/bootstrap.min.css\">

<title>{% block title %}GDA Connexion{% endblock %}</title>
{% block stylesheets %}{% endblock %}
</head>
{%block body%}
{% block javascript_include %}
    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.3.1.min.js\" crossorigin=\"anonymous\"></script>

{% endblock  %}
<body>
   <form id=\"formlogin\" method=\"post\">
       <div class=\"container mt-4\">

            {%if error%}
                <div class=\"alert alert-danger\">
                    {{ error.messageKey | trans(error.messagedata, 'security') }}
                </div>
            {% endif %}
            {% if message|length>1 %}
           <div class=\"alert alert-danger\">
               {{ message}}
           </div>
            {% endif %}

            <div class=\"form-group\">
                <label for=\"username\">Adresse mail</label>
                <input type=\"text\" id=\"mail_pers\" name=\"_username\" class=\"form-control\" value=\"{{ last_username }}\">
            </div>

           <div class=\"form-group\">
               <label for=\"password\">Mot de Passe</label>
               <input type=\"password\" id=\"mdp\" name=\"_password\" class=\"form-control\">
           </div>

           <input type=\"hidden\" name=\"_csrf_token\" value=\"({csrf_token('authenticate')})\">
           <input type=\"hidden\" name=\"id\" id=\"idId\" value=\"\">
           <div id=\"choix\"></div>

        <button type=\"submit\" class=\"btn btn-primary\" id=\"fom_click\">Se connecter</button>

       </div>
   </form>
</body>
{% endblock %}

{% block javascripts %}
    <script>
        function login (id, action) {
            \$(\"#idId\").val(id);
            \$(\"#formlogin\").attr('action', action).submit();
        }

        \$(document).ready(function() {
            var user = \$(\"#mail_pers\").val();
            var mdp = \$(\"#mdp\").val();
            alert(user);
            \$.post(\" {{ path('security_login') }}\",
                {email : user, password: mdp} ,
                function(data, statut){

                    if (statut === 'success'){
                        alert('OK');
                        if (data.lenght>1){

                            let r = '<div>';
                            let c, badge, nom;
                            for (c in data){
                                r += '<span onclick=\"login(\\'' + data[c][0] + '\\', \\'' + data[c][1] + '\\')\" >'
                                    + data[c].[2] + '</span>';
                            }
                            r += '</div>';
                            \$(\"#choix\").html(r);
                        } else{
                            login (data[0][0], data[0][1]);
                        }
                    }
                });
            });
    </script>
{% endblock %}
</html>


", "security/loginForm.html.twig", "C:\\Users\\USER\\Desktop\\gestadh_awa\\new_awa_project(fusion)\\gestion\\templates\\security\\loginForm.html.twig");
    }
}
