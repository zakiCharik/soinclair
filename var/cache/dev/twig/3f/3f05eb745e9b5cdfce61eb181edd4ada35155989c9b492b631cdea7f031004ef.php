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

/* demande/show.html.twig */
class __TwigTemplate_a3c1c32d1012935f7d7b57f7200841badb11f75139a3d259a118b94d0519d06d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'menu_espace' => [$this, 'block_menu_espace'],
            'content' => [$this, 'block_content'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demande/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demande/show.html.twig"));

        // line 9
        $context["adherant"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "adherants", [], "any", false, false, false, 9), 0, [], "array", false, false, false, 9);
        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "demande/show.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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

        echo "Espace Adhérent";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_menu_espace($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu_espace"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu_espace"));

        // line 13
        echo "    <ul id=\"menu-espaces\" class=\"sf-menu\" xmlns:https=\"http://www.w3.org/1999/xhtml\"
        xmlns:https=\"http://www.w3.org/1999/xhtml\" xmlns:https=\"http://www.w3.org/1999/xhtml\">
        <li id=\"menu-item-2869\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2869\">
            <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherant_profil");
        echo "\"  class=\"btn btn-default\">
                Mon profil
            </a>
        </li>


        <li id=\"menu-item-2869\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2869\">
            <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demande_new");
        echo "\"  class=\"btn btn-default\">
                Analyse de devis
            </a>
        </li>
        <li id=\"menu-item-2869\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2869\">
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherant_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28)]), "html", null, true);
        echo "\"  class=\"btn btn-default\">
                Médecins
            </a>
        </li>

        <li id=\"menu-item-2869\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2869\">
            <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherant_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "html", null, true);
        echo "\"  class=\"btn btn-default\">
                F.A.Q
            </a>
        </li>
        <li id=\"menu-item-2871\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2871\">
            <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"><span>Logout</span></a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 45
        echo "    <div class=\"container-fluuid \">
        <div class=\"_formulaire_map\" style=\"margin-bottom: 22px;\">
            <div class=\"row\" style=\"padding-bottom: 25px;padding-left: 10%;padding-right: 10%;padding-top: 25px;background-color: #00a8cdc2; color: #fff;\">
                <div class=\"col-12\">
                    <h3>Bienvenue ";
        // line 49
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 49, $this->source); })()), "lastname", [], "any", false, false, false, 49) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 49, $this->source); })()), "firstname", [], "any", false, false, false, 49)), "html", null, true);
        echo " !</h3>
                    <small>Vos coordonnées personnelles</small>
                </div>
            </div>

        </div>
    </div>

    <div class=\"container-fluuid\">
        <div class=\"row\">
            <div class=\"col-12 wpb_wrapper p-xl-5\">
                <div class=\"row\">
                    <div class=\"col-lg-2 col-md-2\">
                        <span>
                            <img class=\"doc-icon\" src=\"/public/uploads/cartesoinclair/";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 63, $this->source); })()), "cartesoinclair", [], "any", false, false, false, 63), "html", null, true);
        echo "\" width=\"250\">
                        </span>
                    </div>
                    <div class=\"p-4 col-lg-5 col-md-5\">
                        <table class=\"table no-border\">

                            <tbody><tr>
                                <th width=\"40%\">Nom</th>
                                <td>";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 71, $this->source); })()), "lastname", [], "any", false, false, false, 71), "html", null, true);
        echo "</td>
                            </tr>

                            <tr>
                                <th width=\"40%\">Prénom</th>
                                <td width=\"60%\">";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 76, $this->source); })()), "firstname", [], "any", false, false, false, 76), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th width=\"40%\">N° Carte Soin Clare</th>
                                <td width=\"60%\">";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 80, $this->source); })()), "numerosoinclair", [], "any", false, false, false, 80), "html", null, true);
        echo "</td>
                            </tr>

                            </tbody>
                        </table>

                    </div>
                    <div class=\" col-lg-5 col-md-5 justify-content-center d-flex align-items-center\">
                            <span style=\"margin:5px;\">
                                <a href=\"\" class=\"btn btn-primary\">Modifier votre profile</a>
                            </span>
                        <span style=\"margin:5px;\">
                                <a href=\"\" class=\"btn btn-success\">Réinitialisé votre mot de passe</a>
                            </span>
                        <span style=\"margin:5px;\">
                                <a href=\"\" class=\"btn btn-warning\">Modifier votre profile</a>
                            </span>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class=\"container-fluuid\">
        <div class=\"row\" >
            <div class=\"col-12\">


                <table class=\"table\">
                    <tbody>
                    <tr>
                        <th>Id</th>
                        <td>";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 113, $this->source); })()), "id", [], "any", false, false, false, 113), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Fichierjoint</th>
                        <td>";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 117, $this->source); })()), "fichierjoint", [], "any", false, false, false, 117), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Title</th>
                        <td>";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 121, $this->source); })()), "title", [], "any", false, false, false, 121), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Datecreation</th>
                        <td>";
        // line 125
        ((twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 125, $this->source); })()), "datecreation", [], "any", false, false, false, 125)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 125, $this->source); })()), "datecreation", [], "any", false, false, false, 125), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                    </tr>
                    <tr>
                        <th>Message</th>
                        <td>";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 129, $this->source); })()), "message", [], "any", false, false, false, 129), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Istraite</th>
                        <td>";
        // line 133
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 133, $this->source); })()), "istraite", [], "any", false, false, false, 133)) ? ("Yes") : ("No"));
        echo "</td>
                    </tr>
                    </tbody>
                </table>

                <a href=\"";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demande_index");
        echo "\">back to list</a>

                <a href=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demande_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 140, $this->source); })()), "id", [], "any", false, false, false, 140)]), "html", null, true);
        echo "\">edit</a>

                ";
        // line 142
        echo twig_include($this->env, $context, "demande/_delete_form.html.twig");
        echo "

            </div>
        </div>
    </div>


    <div class=\"container-fluuid _content-background\">
        <div class=\"row\">
            <div class=\"col-12 _content-header\">
                <h4>
                    Faites analyser votre devis par des professionnels!<br/>
                    Envoyez vos questions et votre devis par
                    <a href=\"mailto:Contact@soinclair.ma\">mail</a> ou sur
                    <a href=\"https://api.whatsapp.com/send?phone=212662790345\" target=\"_blank\" style=\"color:#2db742 !important;\">Whatsapp</a>
                </h4>
                <small>
                    Besoin d’aide ?
                    <br/>Contactez nous sur 06 66 24 87 72 ou par mail Contact@soinclair.ma
                </small>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 167
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "demande/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 167,  295 => 142,  290 => 140,  285 => 138,  277 => 133,  270 => 129,  263 => 125,  256 => 121,  249 => 117,  242 => 113,  206 => 80,  199 => 76,  191 => 71,  180 => 63,  163 => 49,  157 => 45,  147 => 44,  133 => 39,  125 => 34,  116 => 28,  108 => 23,  98 => 16,  93 => 13,  83 => 12,  64 => 8,  53 => 2,  51 => 9,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}





{% block title %}Espace Adhérent{% endblock %}
{%   set adherant = app.user.adherants[0] %}


{% block menu_espace %}
    <ul id=\"menu-espaces\" class=\"sf-menu\" xmlns:https=\"http://www.w3.org/1999/xhtml\"
        xmlns:https=\"http://www.w3.org/1999/xhtml\" xmlns:https=\"http://www.w3.org/1999/xhtml\">
        <li id=\"menu-item-2869\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2869\">
            <a href=\"{{ path('adherant_profil') }}\"  class=\"btn btn-default\">
                Mon profil
            </a>
        </li>


        <li id=\"menu-item-2869\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2869\">
            <a href=\"{{ path('demande_new') }}\"  class=\"btn btn-default\">
                Analyse de devis
            </a>
        </li>
        <li id=\"menu-item-2869\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2869\">
            <a href=\"{{ path('adherant_show', {'id': adherant.id }) }}\"  class=\"btn btn-default\">
                Médecins
            </a>
        </li>

        <li id=\"menu-item-2869\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2869\">
            <a href=\"{{ path('adherant_show', {'id': adherant.id }) }}\"  class=\"btn btn-default\">
                F.A.Q
            </a>
        </li>
        <li id=\"menu-item-2871\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2871\">
            <a href=\"{{ path('app_logout') }}\"><span>Logout</span></a>
        </li>
    </ul>
{% endblock %}

{% block content %}
    <div class=\"container-fluuid \">
        <div class=\"_formulaire_map\" style=\"margin-bottom: 22px;\">
            <div class=\"row\" style=\"padding-bottom: 25px;padding-left: 10%;padding-right: 10%;padding-top: 25px;background-color: #00a8cdc2; color: #fff;\">
                <div class=\"col-12\">
                    <h3>Bienvenue {{ adherant.lastname ~ ' ' ~ adherant.firstname }} !</h3>
                    <small>Vos coordonnées personnelles</small>
                </div>
            </div>

        </div>
    </div>

    <div class=\"container-fluuid\">
        <div class=\"row\">
            <div class=\"col-12 wpb_wrapper p-xl-5\">
                <div class=\"row\">
                    <div class=\"col-lg-2 col-md-2\">
                        <span>
                            <img class=\"doc-icon\" src=\"/public/uploads/cartesoinclair/{{  adherant.cartesoinclair }}\" width=\"250\">
                        </span>
                    </div>
                    <div class=\"p-4 col-lg-5 col-md-5\">
                        <table class=\"table no-border\">

                            <tbody><tr>
                                <th width=\"40%\">Nom</th>
                                <td>{{ adherant.lastname }}</td>
                            </tr>

                            <tr>
                                <th width=\"40%\">Prénom</th>
                                <td width=\"60%\">{{ adherant.firstname }}</td>
                            </tr>
                            <tr>
                                <th width=\"40%\">N° Carte Soin Clare</th>
                                <td width=\"60%\">{{ adherant.numerosoinclair }}</td>
                            </tr>

                            </tbody>
                        </table>

                    </div>
                    <div class=\" col-lg-5 col-md-5 justify-content-center d-flex align-items-center\">
                            <span style=\"margin:5px;\">
                                <a href=\"\" class=\"btn btn-primary\">Modifier votre profile</a>
                            </span>
                        <span style=\"margin:5px;\">
                                <a href=\"\" class=\"btn btn-success\">Réinitialisé votre mot de passe</a>
                            </span>
                        <span style=\"margin:5px;\">
                                <a href=\"\" class=\"btn btn-warning\">Modifier votre profile</a>
                            </span>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class=\"container-fluuid\">
        <div class=\"row\" >
            <div class=\"col-12\">


                <table class=\"table\">
                    <tbody>
                    <tr>
                        <th>Id</th>
                        <td>{{ demande.id }}</td>
                    </tr>
                    <tr>
                        <th>Fichierjoint</th>
                        <td>{{ demande.fichierjoint }}</td>
                    </tr>
                    <tr>
                        <th>Title</th>
                        <td>{{ demande.title }}</td>
                    </tr>
                    <tr>
                        <th>Datecreation</th>
                        <td>{{ demande.datecreation ? demande.datecreation|date('Y-m-d') : '' }}</td>
                    </tr>
                    <tr>
                        <th>Message</th>
                        <td>{{ demande.message }}</td>
                    </tr>
                    <tr>
                        <th>Istraite</th>
                        <td>{{ demande.istraite ? 'Yes' : 'No' }}</td>
                    </tr>
                    </tbody>
                </table>

                <a href=\"{{ path('demande_index') }}\">back to list</a>

                <a href=\"{{ path('demande_edit', {'id': demande.id}) }}\">edit</a>

                {{ include('demande/_delete_form.html.twig') }}

            </div>
        </div>
    </div>


    <div class=\"container-fluuid _content-background\">
        <div class=\"row\">
            <div class=\"col-12 _content-header\">
                <h4>
                    Faites analyser votre devis par des professionnels!<br/>
                    Envoyez vos questions et votre devis par
                    <a href=\"mailto:Contact@soinclair.ma\">mail</a> ou sur
                    <a href=\"https://api.whatsapp.com/send?phone=212662790345\" target=\"_blank\" style=\"color:#2db742 !important;\">Whatsapp</a>
                </h4>
                <small>
                    Besoin d’aide ?
                    <br/>Contactez nous sur 06 66 24 87 72 ou par mail Contact@soinclair.ma
                </small>
            </div>
        </div>
    </div>

{% endblock %}
{% block body %}{% endblock %}", "demande/show.html.twig", "C:\\Users\\czakaria\\lab\\projects\\soinclair\\soin_clair\\templates\\demande\\show.html.twig");
    }
}
