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

/* demande/new.html.twig */
class __TwigTemplate_ed97883f45589faa289233718cfd8dc112632cb53bfefca920b938d0ffa9714f extends \Twig\Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demande/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demande/new.html.twig"));

        // line 8
        $context["adherant"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "adherants", [], "any", false, false, false, 8), 0, [], "array", false, false, false, 8);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "demande/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
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

    // line 11
    public function block_menu_espace($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu_espace"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu_espace"));

        // line 12
        echo "    <ul id=\"menu-espaces\" class=\"sf-menu\" xmlns:https=\"http://www.w3.org/1999/xhtml\"
        xmlns:https=\"http://www.w3.org/1999/xhtml\" xmlns:https=\"http://www.w3.org/1999/xhtml\">
        <li id=\"menu-item-2869\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2869\">
            <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherant_profil");
        echo "\"  class=\"btn btn-default\">
                Mon profil
            </a>
        </li>


        <li id=\"menu-item-2869\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2869\">
            <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demande_new");
        echo "\"  class=\"btn btn-default\">
                Analyse de devis
            </a>
        </li>
        <li id=\"menu-item-2869\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2869\">
            <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherant_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)]), "html", null, true);
        echo "\"  class=\"btn btn-default\">
                Médecins
            </a>
        </li>

        <li id=\"menu-item-2869\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2869\">
            <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherant_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33)]), "html", null, true);
        echo "\"  class=\"btn btn-default\">
                F.A.Q
            </a>
        </li>
        <li id=\"menu-item-2871\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2871\">
            <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"><span>Logout</span></a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 44
        echo "    <div class=\"container-fluuid \">
        <div class=\"_formulaire_map\" style=\"margin-bottom: 22px;\">
            <div class=\"row\" style=\"padding-bottom: 25px;padding-left: 10%;padding-right: 10%;padding-top: 25px;background-color: #00a8cdc2; color: #fff;\">
                <div class=\"col-12\">
                    <h3>Bienvenue ";
        // line 48
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 48, $this->source); })()), "lastname", [], "any", false, false, false, 48) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 48, $this->source); })()), "firstname", [], "any", false, false, false, 48)), "html", null, true);
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
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 62, $this->source); })()), "cartesoinclair", [], "any", false, false, false, 62), "html", null, true);
        echo "\" width=\"250\">
                        </span>
                    </div>
                    <div class=\"p-4 col-lg-5 col-md-5\">
                        <table class=\"table no-border\">

                            <tbody><tr>
                                <th width=\"40%\">Nom</th>
                                <td>";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 70, $this->source); })()), "lastname", [], "any", false, false, false, 70), "html", null, true);
        echo "</td>
                            </tr>

                            <tr>
                                <th width=\"40%\">Prénom</th>
                                <td width=\"60%\">";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 75, $this->source); })()), "firstname", [], "any", false, false, false, 75), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th width=\"40%\">N° Carte Soin Clare</th>
                                <td width=\"60%\">";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 79, $this->source); })()), "numerosoinclair", [], "any", false, false, false, 79), "html", null, true);
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
    <div class=\"container-fluuid \">
        <div class=\"_formulaire_map\" style=\"margin-bottom: 22px;\">
            <div class=\"row\" style=\"padding-bottom: 25px;padding-left: 10%;padding-right: 10%;padding-top: 25px;background-color: #00a8cdc2; color: #fff;\">
                <div class=\"col-12\">
                    <h3>Enregistrer une demande</h3>
                    <small>Analyser votre devis</small>
                </div>
            </div>

        </div>
    </div>

    <div class=\"container-fluuid\">
        <div class=\"row\" >
            <div class=\"col-12 wpb_wrapper p-xl-5\">
                ";
        // line 118
        echo twig_include($this->env, $context, "demande/_form.html.twig");
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

    // line 142
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
        return "demande/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 142,  248 => 118,  206 => 79,  199 => 75,  191 => 70,  180 => 62,  163 => 48,  157 => 44,  147 => 43,  133 => 38,  125 => 33,  116 => 27,  108 => 22,  98 => 15,  93 => 12,  83 => 11,  64 => 7,  53 => 1,  51 => 8,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}





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
    <div class=\"container-fluuid \">
        <div class=\"_formulaire_map\" style=\"margin-bottom: 22px;\">
            <div class=\"row\" style=\"padding-bottom: 25px;padding-left: 10%;padding-right: 10%;padding-top: 25px;background-color: #00a8cdc2; color: #fff;\">
                <div class=\"col-12\">
                    <h3>Enregistrer une demande</h3>
                    <small>Analyser votre devis</small>
                </div>
            </div>

        </div>
    </div>

    <div class=\"container-fluuid\">
        <div class=\"row\" >
            <div class=\"col-12 wpb_wrapper p-xl-5\">
                {{ include('demande/_form.html.twig') }}
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
{% block body %}{% endblock %}", "demande/new.html.twig", "C:\\Users\\czakaria\\lab\\projects\\soinclair\\soin_clair\\templates\\demande\\new.html.twig");
    }
}
