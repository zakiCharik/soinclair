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

/* adherant/show.html.twig */
class __TwigTemplate_0d271771727918825f8a6499b71237c9353a6cfa989170bf057c6f872aeb47a5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title_admin' => [$this, 'block_title_admin'],
            'title_page_admin' => [$this, 'block_title_page_admin'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "/admin/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adherant/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adherant/show.html.twig"));

        $this->parent = $this->loadTemplate("/admin/index.html.twig", "adherant/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title_admin($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title_admin"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title_admin"));

        echo "Adhérent ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_title_page_admin($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title_page_admin"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title_page_admin"));

        echo "Espace adhérent <small>accès administrateur</small>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "    <div class=\"x_panel\">
        <div class=\"x_content\">

            <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherant_index");
        echo "\" class=\"btn btn-app\">
                <i class=\"fa fa-list\"></i> List
            </a>

            <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherant_new");
        echo "\" class=\"btn btn-app\">
                <i class=\"fa fa-save\"></i> Nouveaus
            </a>

            <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherant_import");
        echo "\" class=\"btn btn-app\">
                <i class=\"fa fa-database\"></i> import
                <small>Adhérents</small>
            </a>

            <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherant_importzip");
        echo "\"  class=\"btn btn-app\">
                <i class=\"fa fa-credit-card\"></i> import
                <small>Cartes</small>
            </a>

            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherant_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28)]), "html", null, true);
        echo "\" class=\"btn btn-app\">
                <i class=\"fa fa-edit\"></i> Edit
            </a>


            ";
        // line 33
        echo twig_include($this->env, $context, "adherant/_delete_form.html.twig");
        echo "

        </div>
    </div>

<div class=\"x_panel\">
    <div class=\"x_title\">
        <h2>Profil Adhérent -<small>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 40, $this->source); })()), "numeroSoinclair", [], "any", false, false, false, 40), "html", null, true);
        echo "</small></h2>
        <ul class=\"nav navbar-right panel_toolbox\">
            <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
            </li>
            <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
            </li>
        </ul>
        <div class=\"clearfix\"></div>
    </div>
    <div class=\"x_content\">
        <div class=\"col-md-3 col-sm-3  profile_left\">

            <div class=\"profile_img\">
                <div id=\"crop-avatar\">
                    ";
        // line 54
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 54, $this->source); })()), "cartesoinclair", [], "any", false, false, false, 54))) {
            // line 55
            echo "                        <img class=\"img-responsive avatar-view\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/cartesoinclair/" . twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 55, $this->source); })()), "cartesoinclair", [], "any", false, false, false, 55))), "html", null, true);
            echo "\" alt=\"Avatar\" title=\"Change the avatar\">
                    ";
        } else {
            // line 57
            echo "                        <img class=\"img-responsive avatar-view\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/production/images/inbox.png"), "html", null, true);
            echo "\" alt=\"Avatar\" title=\"Change the avatar\">

                    ";
        }
        // line 60
        echo "                </div>
            </div>
            <h3>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "username", [], "any", false, false, false, 62), "html", null, true);
        echo "</h3>
            <ul class=\"list-unstyled user_data\">
                <li><i class=\"fa fa-map-marker user-profile-icon\"></i> ";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 64, $this->source); })()), "adresse", [], "any", false, false, false, 64), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 64, $this->source); })()), "ville", [], "any", false, false, false, 64), "html", null, true);
        echo ", USA
                </li>
                <li>
                    <i class=\"fa fa-briefcase user-profile-icon\"></i> ";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 67, $this->source); })()), "situationpro", [], "any", false, false, false, 67), "html", null, true);
        echo "
                </li>
                <li>
                    <i class=\"fa fa-briefcase user-profile-icon\"></i> ";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 70, $this->source); })()), "categorysociopro", [], "any", false, false, false, 70), "html", null, true);
        echo "
                </li>

                <li class=\"m-top-xs\">
                    <i class=\"fa fa-external-link user-profile-icon\"></i>
                    <a href=\"#\" >";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 75, $this->source); })()), "numeroSoinclair", [], "any", false, false, false, 75), "html", null, true);
        echo "</a>
                </li>
            </ul>
            <a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherant_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 78, $this->source); })()), "id", [], "any", false, false, false, 78)]), "html", null, true);
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-edit m-right-xs\"></i>Edit Profile</a>
        </div>
        <div class=\"col-md-9 col-sm-9 \">
            <table class=\"table\">
                <tbody>
                <tr>
                    <th>Entreprise</th>
                    <td>";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 85, $this->source); })()), "entreprise", [], "any", false, false, false, 85), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Code Client</th>
                    <td>";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 89, $this->source); })()), "codeclient", [], "any", false, false, false, 89), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Date d'inscription</th>
                    <td>";
        // line 93
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 93, $this->source); })()), "subscriptiondate", [], "any", false, false, false, 93)), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Date d'éxpiration</th>
                    <td>";
        // line 97
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 97, $this->source); })()), "expiringdate", [], "any", false, false, false, 97)), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Nom & prénom</th>
                    <td>";
        // line 101
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 101, $this->source); })()), "firstname", [], "any", false, false, false, 101) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 101, $this->source); })()), "lastname", [], "any", false, false, false, 101)), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Nom conjoint 1</th>
                    <td>";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 105, $this->source); })()), "nomconjointfirst", [], "any", false, false, false, 105), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Nom conjoint 2</th>
                    <td>";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 109, $this->source); })()), "nomconjointsecond", [], "any", false, false, false, 109), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Nombre d'enfant</th>
                    <td>";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 113, $this->source); })()), "nbrenfant", [], "any", false, false, false, 113), "html", null, true);
        echo "</td>
                </tr>

                <tr>
                    <th>Date de naissance</th>
                    <td>";
        // line 118
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 118, $this->source); })()), "datenaissance", [], "any", false, false, false, 118)), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>N° mobile</th>
                    <td>";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 122, $this->source); })()), "phonenumber", [], "any", false, false, false, 122), "html", null, true);
        echo "</td>
                </tr>


                <tr>
                    <th>N° Cin</th>
                    <td>";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 128, $this->source); })()), "cin", [], "any", false, false, false, 128), "html", null, true);
        echo "</td>
                </tr>

                </tbody>
            </table>
            <div class=\"profile_title\">
                <div class=\"col-md-6\">
                    <h2>User Activity Report</h2>
                </div>
                <div class=\"col-md-6\">
                    <div id=\"reportrange\" class=\"pull-right\" style=\"margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED\">
                        <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
                        <span>March 27, 2021 - April 25, 2021</span> <b class=\"caret\"></b>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "adherant/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 128,  304 => 122,  297 => 118,  289 => 113,  282 => 109,  275 => 105,  268 => 101,  261 => 97,  254 => 93,  247 => 89,  240 => 85,  230 => 78,  224 => 75,  216 => 70,  210 => 67,  202 => 64,  197 => 62,  193 => 60,  186 => 57,  180 => 55,  178 => 54,  161 => 40,  151 => 33,  143 => 28,  135 => 23,  127 => 18,  120 => 14,  113 => 10,  108 => 7,  98 => 6,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '/admin/index.html.twig' %}

{% block title_admin %}Adhérent {% endblock %}
{% block title_page_admin %}Espace adhérent <small>accès administrateur</small>{% endblock %}

{% block content %}
    <div class=\"x_panel\">
        <div class=\"x_content\">

            <a href=\"{{ path('adherant_index') }}\" class=\"btn btn-app\">
                <i class=\"fa fa-list\"></i> List
            </a>

            <a href=\"{{ path('adherant_new') }}\" class=\"btn btn-app\">
                <i class=\"fa fa-save\"></i> Nouveaus
            </a>

            <a href=\"{{ path('adherant_import') }}\" class=\"btn btn-app\">
                <i class=\"fa fa-database\"></i> import
                <small>Adhérents</small>
            </a>

            <a href=\"{{ path('adherant_importzip') }}\"  class=\"btn btn-app\">
                <i class=\"fa fa-credit-card\"></i> import
                <small>Cartes</small>
            </a>

            <a href=\"{{ path('adherant_edit', {'id': adherant.id}) }}\" class=\"btn btn-app\">
                <i class=\"fa fa-edit\"></i> Edit
            </a>


            {{ include('adherant/_delete_form.html.twig') }}

        </div>
    </div>

<div class=\"x_panel\">
    <div class=\"x_title\">
        <h2>Profil Adhérent -<small>{{ adherant.numeroSoinclair }}</small></h2>
        <ul class=\"nav navbar-right panel_toolbox\">
            <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
            </li>
            <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
            </li>
        </ul>
        <div class=\"clearfix\"></div>
    </div>
    <div class=\"x_content\">
        <div class=\"col-md-3 col-sm-3  profile_left\">

            <div class=\"profile_img\">
                <div id=\"crop-avatar\">
                    {% if adherant.cartesoinclair is not empty %}
                        <img class=\"img-responsive avatar-view\" src=\"{{ asset('uploads/cartesoinclair/' ~ adherant.cartesoinclair) }}\" alt=\"Avatar\" title=\"Change the avatar\">
                    {% else %}
                        <img class=\"img-responsive avatar-view\" src=\"{{ asset('/admin/production/images/inbox.png') }}\" alt=\"Avatar\" title=\"Change the avatar\">

                    {% endif %}
                </div>
            </div>
            <h3>{{ adherant.user.username }}</h3>
            <ul class=\"list-unstyled user_data\">
                <li><i class=\"fa fa-map-marker user-profile-icon\"></i> {{ adherant.adresse }},{{ adherant.ville }}, USA
                </li>
                <li>
                    <i class=\"fa fa-briefcase user-profile-icon\"></i> {{ adherant.situationpro }}
                </li>
                <li>
                    <i class=\"fa fa-briefcase user-profile-icon\"></i> {{ adherant.categorysociopro }}
                </li>

                <li class=\"m-top-xs\">
                    <i class=\"fa fa-external-link user-profile-icon\"></i>
                    <a href=\"#\" >{{ adherant.numeroSoinclair }}</a>
                </li>
            </ul>
            <a href=\"{{ path('adherant_edit', {'id': adherant.id}) }}\" class=\"btn btn-success\"><i class=\"fa fa-edit m-right-xs\"></i>Edit Profile</a>
        </div>
        <div class=\"col-md-9 col-sm-9 \">
            <table class=\"table\">
                <tbody>
                <tr>
                    <th>Entreprise</th>
                    <td>{{ adherant.entreprise }}</td>
                </tr>
                <tr>
                    <th>Code Client</th>
                    <td>{{ adherant.codeclient }}</td>
                </tr>
                <tr>
                    <th>Date d'inscription</th>
                    <td>{{ adherant.subscriptiondate | date }}</td>
                </tr>
                <tr>
                    <th>Date d'éxpiration</th>
                    <td>{{ adherant.expiringdate | date }}</td>
                </tr>
                <tr>
                    <th>Nom & prénom</th>
                    <td>{{ adherant.firstname ~ ' ' ~ adherant.lastname }}</td>
                </tr>
                <tr>
                    <th>Nom conjoint 1</th>
                    <td>{{ adherant.nomconjointfirst }}</td>
                </tr>
                <tr>
                    <th>Nom conjoint 2</th>
                    <td>{{ adherant.nomconjointsecond }}</td>
                </tr>
                <tr>
                    <th>Nombre d'enfant</th>
                    <td>{{ adherant.nbrenfant }}</td>
                </tr>

                <tr>
                    <th>Date de naissance</th>
                    <td>{{ adherant.datenaissance | date }}</td>
                </tr>
                <tr>
                    <th>N° mobile</th>
                    <td>{{ adherant.phonenumber }}</td>
                </tr>


                <tr>
                    <th>N° Cin</th>
                    <td>{{ adherant.cin }}</td>
                </tr>

                </tbody>
            </table>
            <div class=\"profile_title\">
                <div class=\"col-md-6\">
                    <h2>User Activity Report</h2>
                </div>
                <div class=\"col-md-6\">
                    <div id=\"reportrange\" class=\"pull-right\" style=\"margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED\">
                        <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
                        <span>March 27, 2021 - April 25, 2021</span> <b class=\"caret\"></b>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
{% endblock %}
", "adherant/show.html.twig", "C:\\Users\\czakaria\\lab\\projects\\soinclair\\soin_clair\\templates\\adherant\\show.html.twig");
    }
}
