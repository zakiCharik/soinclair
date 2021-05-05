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

/* vitrine/employeur/index.html.twig */
class __TwigTemplate_b7f7e32d5bd6a0f7fb9e6414a65dae57f54e77c697377de0aa1a0b16e097964d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine/employeur/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine/employeur/index.html.twig"));

        // line 4
        $context["employeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4), "employeurs", [], "any", false, false, false, 4), 0, [], "array", false, false, false, 4);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "vitrine/employeur/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Espace Employeur";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_menu_espace($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu_espace"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu_espace"));

        // line 8
        echo "    <ul id=\"menu-espaces\" class=\"sf-menu\" xmlns:https=\"http://www.w3.org/1999/xhtml\"
        xmlns:https=\"http://www.w3.org/1999/xhtml\" xmlns:https=\"http://www.w3.org/1999/xhtml\">
        <li id=\"menu-item-2869\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2869\">
            <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employeur_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["employeur"]) || array_key_exists("employeur", $context) ? $context["employeur"] : (function () { throw new RuntimeError('Variable "employeur" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11)]), "html", null, true);
        echo "\"  class=\"btn btn-default\">
                Profil
            </a>
        </li>

        <li id=\"menu-item-2869\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2869\">
            <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employeur_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["employeur"]) || array_key_exists("employeur", $context) ? $context["employeur"] : (function () { throw new RuntimeError('Variable "employeur" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17)]), "html", null, true);
        echo "\"  class=\"btn btn-default\">
                Change Mot de passe
            </a>
        </li>
        <li id=\"menu-item-2871\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2871\">
            <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"><span>Logout</span></a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 28
        echo "    <div class=\"container-fluuid _content-background\">
        <div class=\"row\">
            <div class=\"col-12 _content-header\">
                <h3>Bienvenue dans votre espace Employeur !</h3>
            </div>
        </div>
    </div>

    <div class=\"container-fluuid \">
        <div class=\"_formulaire_map\" style=\"margin-bottom: 22px;\">
            <div class=\"row\" style=\"padding-bottom: 25px;padding-left: 10%;padding-right: 10%;padding-top: 25px;background-color: #00a8cdc2; color: #fff;\">
                <div class=\"col-12\">
                    <h3>Bienvenue ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employeur"]) || array_key_exists("employeur", $context) ? $context["employeur"] : (function () { throw new RuntimeError('Variable "employeur" does not exist.', 40, $this->source); })()), "entreprise", [], "any", false, false, false, 40), "html", null, true);
        echo " !</h3>
                    <small>Vos coordonnées personnelles</small>
                </div>
            </div>

        </div>
    </div>
    <div class=\"container-fluuid\">
        <div class=\"row\">
            <div class=\"col-12 row wpb_wrapper p-xl-5\">
                <div class=\"col-lg-3 col-md-3\">
                    <span>
                        <img class=\"doc-icon\" src=\"/uploads/employeur/logos/";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employeur"]) || array_key_exists("employeur", $context) ? $context["employeur"] : (function () { throw new RuntimeError('Variable "employeur" does not exist.', 52, $this->source); })()), "logo", [], "any", false, false, false, 52), "html", null, true);
        echo "\" width=\"250\">
                    </span>
                </div>
                <div class=\"col-lg-5 col-md-5\">
                    <p>Carte Soin clair - Durée de Validité</p>
                    <table class=\"table no-border\">
                        <tr>
                            <th>Inscription date</th>
                            <td>
                                <span> ";
        // line 61
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employeur"]) || array_key_exists("employeur", $context) ? $context["employeur"] : (function () { throw new RuntimeError('Variable "employeur" does not exist.', 61, $this->source); })()), "subscriptiondate", [], "any", false, false, false, 61)), "html", null, true);
        echo "</span>
                            </td>
                        </tr>

                        <tr>
                            <th>Expiration date</th>
                            <td>
                                <span> ";
        // line 68
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employeur"]) || array_key_exists("employeur", $context) ? $context["employeur"] : (function () { throw new RuntimeError('Variable "employeur" does not exist.', 68, $this->source); })()), "expiringdate", [], "any", false, false, false, 68)), "html", null, true);
        echo "</span>

                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-6  wpb_wrapper p-xl-5\">
                <h3>Effectif de personnel actualisé</h3>
                <span>NaN</span>
            </div>
            <div class=\"col-6  wpb_wrapper p-xl-5\">
                <h4>Documents</h4>
                <table class=\"table no-border\">
                    <tr>
                        <th>DB du personnel</th>
                        <td>
                            <a href=\"/uploads/employeur/fichiers_employeur/";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employeur"]) || array_key_exists("employeur", $context) ? $context["employeur"] : (function () { throw new RuntimeError('Variable "employeur" does not exist.', 88, $this->source); })()), "databaseemployees", [], "any", false, false, false, 88), "html", null, true);
        echo "\"><i class=\"fa fa-download\"></i>  </a>
                        </td>
                    </tr>

                    <tr>
                        <th>Contrat d'assurance</th>
                        <td>
                            <a href=\"/uploads/employeur/contrat_assurance/";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employeur"]) || array_key_exists("employeur", $context) ? $context["employeur"] : (function () { throw new RuntimeError('Variable "employeur" does not exist.', 95, $this->source); })()), "assurancecontract", [], "any", false, false, false, 95), "html", null, true);
        echo "\"><i class=\"fa fa-download\"></i>  </a>

                        </td>
                    </tr>
                </table>
            </div>

        </div>

        <div class=\"row\">
        </div>
    </div>
    <div class=\"container-fluuid\">
        <div class=\"row\">
            <div class=\"col-12  wpb_wrapper p-xl-5\">
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 115
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
        return "vitrine/employeur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 115,  223 => 95,  213 => 88,  190 => 68,  180 => 61,  168 => 52,  153 => 40,  139 => 28,  129 => 27,  115 => 22,  107 => 17,  98 => 11,  93 => 8,  83 => 7,  64 => 3,  53 => 1,  51 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Espace Employeur{% endblock %}
{%  set employeur = app.user.employeurs[0] %}


{% block menu_espace %}
    <ul id=\"menu-espaces\" class=\"sf-menu\" xmlns:https=\"http://www.w3.org/1999/xhtml\"
        xmlns:https=\"http://www.w3.org/1999/xhtml\" xmlns:https=\"http://www.w3.org/1999/xhtml\">
        <li id=\"menu-item-2869\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2869\">
            <a href=\"{{ path('employeur_show', {'id': employeur.id }) }}\"  class=\"btn btn-default\">
                Profil
            </a>
        </li>

        <li id=\"menu-item-2869\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2869\">
            <a href=\"{{ path('employeur_show', {'id': employeur.id }) }}\"  class=\"btn btn-default\">
                Change Mot de passe
            </a>
        </li>
        <li id=\"menu-item-2871\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2871\">
            <a href=\"{{ path('app_logout') }}\"><span>Logout</span></a>
        </li>
    </ul>
{% endblock %}

{% block content %}
    <div class=\"container-fluuid _content-background\">
        <div class=\"row\">
            <div class=\"col-12 _content-header\">
                <h3>Bienvenue dans votre espace Employeur !</h3>
            </div>
        </div>
    </div>

    <div class=\"container-fluuid \">
        <div class=\"_formulaire_map\" style=\"margin-bottom: 22px;\">
            <div class=\"row\" style=\"padding-bottom: 25px;padding-left: 10%;padding-right: 10%;padding-top: 25px;background-color: #00a8cdc2; color: #fff;\">
                <div class=\"col-12\">
                    <h3>Bienvenue {{ employeur.entreprise }} !</h3>
                    <small>Vos coordonnées personnelles</small>
                </div>
            </div>

        </div>
    </div>
    <div class=\"container-fluuid\">
        <div class=\"row\">
            <div class=\"col-12 row wpb_wrapper p-xl-5\">
                <div class=\"col-lg-3 col-md-3\">
                    <span>
                        <img class=\"doc-icon\" src=\"/uploads/employeur/logos/{{  employeur.logo }}\" width=\"250\">
                    </span>
                </div>
                <div class=\"col-lg-5 col-md-5\">
                    <p>Carte Soin clair - Durée de Validité</p>
                    <table class=\"table no-border\">
                        <tr>
                            <th>Inscription date</th>
                            <td>
                                <span> {{  employeur.subscriptiondate | date }}</span>
                            </td>
                        </tr>

                        <tr>
                            <th>Expiration date</th>
                            <td>
                                <span> {{  employeur.expiringdate | date }}</span>

                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-6  wpb_wrapper p-xl-5\">
                <h3>Effectif de personnel actualisé</h3>
                <span>NaN</span>
            </div>
            <div class=\"col-6  wpb_wrapper p-xl-5\">
                <h4>Documents</h4>
                <table class=\"table no-border\">
                    <tr>
                        <th>DB du personnel</th>
                        <td>
                            <a href=\"/uploads/employeur/fichiers_employeur/{{  employeur.databaseemployees }}\"><i class=\"fa fa-download\"></i>  </a>
                        </td>
                    </tr>

                    <tr>
                        <th>Contrat d'assurance</th>
                        <td>
                            <a href=\"/uploads/employeur/contrat_assurance/{{  employeur.assurancecontract }}\"><i class=\"fa fa-download\"></i>  </a>

                        </td>
                    </tr>
                </table>
            </div>

        </div>

        <div class=\"row\">
        </div>
    </div>
    <div class=\"container-fluuid\">
        <div class=\"row\">
            <div class=\"col-12  wpb_wrapper p-xl-5\">
            </div>
        </div>
    </div>

{% endblock %}
{% block body %}{% endblock %}", "vitrine/employeur/index.html.twig", "C:\\Users\\czakaria\\lab\\projects\\soinclair\\soin_clair\\templates\\vitrine\\employeur\\index.html.twig");
    }
}
