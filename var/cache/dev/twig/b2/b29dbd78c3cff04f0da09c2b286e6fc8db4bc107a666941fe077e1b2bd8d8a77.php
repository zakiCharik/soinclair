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

/* demande/index.html.twig */
class __TwigTemplate_635213bf39287204fba96045616f2a795933b79087e5811e3ee10d7a9006945f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demande/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demande/index.html.twig"));

        // line 9
        $context["adherant"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "adherants", [], "any", false, false, false, 9), 0, [], "array", false, false, false, 9);
        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "demande/index.html.twig", 2);
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
            <div class=\"col-12 wpb_wrapper p-xl-5\">
                <h1>Mes demandes</h1>

                <table class=\"table no-border\">
                    <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Date de création</th>
                        <th>Message</th>
                        <th>Traité</th>
                        <th>Fichierjoint</th>
                        <th>actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["demandes"]) || array_key_exists("demandes", $context) ? $context["demandes"] : (function () { throw new RuntimeError('Variable "demandes" does not exist.', 121, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["demande"]) {
            // line 122
            echo "                        <tr>
                            <td>";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demande"], "title", [], "any", false, false, false, 123), "html", null, true);
            echo "</td>
                            <td>";
            // line 124
            ((twig_get_attribute($this->env, $this->source, $context["demande"], "datecreation", [], "any", false, false, false, 124)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demande"], "datecreation", [], "any", false, false, false, 124), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                            <td>";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demande"], "message", [], "any", false, false, false, 125), "html", null, true);
            echo "</td>
                            <td>";
            // line 126
            echo ((twig_get_attribute($this->env, $this->source, $context["demande"], "istraite", [], "any", false, false, false, 126)) ? ("Yes") : ("No"));
            echo "</td>
                            <td>";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demande"], "fichierjoint", [], "any", false, false, false, 127), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demande_show", ["id" => twig_get_attribute($this->env, $this->source, $context["demande"], "id", [], "any", false, false, false, 129)]), "html", null, true);
            echo "\">show</a>
                                <a href=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demande_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["demande"], "id", [], "any", false, false, false, 130)]), "html", null, true);
            echo "\">edit</a>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 134
            echo "                        <tr>
                            <td colspan=\"7\">no records found</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "                    </tbody>
                </table>

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

    // line 164
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
        return "demande/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 164,  301 => 138,  292 => 134,  283 => 130,  279 => 129,  274 => 127,  270 => 126,  266 => 125,  262 => 124,  258 => 123,  255 => 122,  250 => 121,  206 => 80,  199 => 76,  191 => 71,  180 => 63,  163 => 49,  157 => 45,  147 => 44,  133 => 39,  125 => 34,  116 => 28,  108 => 23,  98 => 16,  93 => 13,  83 => 12,  64 => 8,  53 => 2,  51 => 9,  38 => 2,);
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
            <div class=\"col-12 wpb_wrapper p-xl-5\">
                <h1>Mes demandes</h1>

                <table class=\"table no-border\">
                    <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Date de création</th>
                        <th>Message</th>
                        <th>Traité</th>
                        <th>Fichierjoint</th>
                        <th>actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for demande in demandes %}
                        <tr>
                            <td>{{ demande.title }}</td>
                            <td>{{ demande.datecreation ? demande.datecreation|date('Y-m-d') : '' }}</td>
                            <td>{{ demande.message }}</td>
                            <td>{{ demande.istraite ? 'Yes' : 'No' }}</td>
                            <td>{{ demande.fichierjoint }}</td>
                            <td>
                                <a href=\"{{ path('demande_show', {'id': demande.id}) }}\">show</a>
                                <a href=\"{{ path('demande_edit', {'id': demande.id}) }}\">edit</a>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"7\">no records found</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>

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
{% block body %}{% endblock %}", "demande/index.html.twig", "C:\\Users\\czakaria\\lab\\projects\\soinclair\\soin_clair\\templates\\demande\\index.html.twig");
    }
}
