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

/* security/reset-password.html.twig */
class __TwigTemplate_4fa91d39bd04e32eb30c73ad73afed86faf13b3a5acd072be3079e4d420792b4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/reset-password.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/reset-password.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/reset-password.html.twig", 1);
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

        echo "Soin Clair - Nos Publications";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        // line 6
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/static/resetpwd.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <div class=\"container-fluuid _content-background\">
        <div class=\"row\">
            <div class=\"col-12 _content-header\">
                <div class=\"wpb_wrapper\">
                    <div class=\"vlthemes_custom_609036d63ef18   vlt-page-title\">
                        <div class=\"container\">
                            <div class=\"vlt-page-title__inner\">
                                <h1>Espace Adhérent</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <article class=\"vlt-page vlt-page--custom post-4461 page type-page status-publish hentry\">
        <div class=\"container\">
            <div class=\"vc_row-full-width vc_clearfix\"></div>
            <div data-vc-full-width=\"true\" data-vc-full-width-init=\"true\" data-vc-stretch-content=\"true\" class=\"vc_row wpb_row vc_row-fluid vc_custom_1615225004336 vc_row-has-fill vc_row-no-padding mpc-row\" style=\"position: relative; left: -234.6px; box-sizing: border-box; width: 1519px;\"><div class=\"wpb_column vc_column_container vc_col-sm-12 mpc-column\" data-column-id=\"mpc_column-83609036d63f4bd\"><div class=\"vc_column-inner\"><div class=\"wpb_wrapper\"><div class=\"ult-spacer spacer-609036d63f43e\" data-id=\"609036d63f43e\" data-height=\"80\" data-height-mobile=\"80\" data-height-tab=\"80\" data-height-tab-portrait=\"\" data-height-mobile-landscape=\"\" style=\"clear:both;display:block;\"></div></div></div></div></div><div class=\"vc_row-full-width vc_clearfix\"></div><div data-vc-full-width=\"true\" data-vc-full-width-init=\"true\" class=\"vc_row wpb_row vc_row-fluid vc_row-o-content-middle vc_row-flex mpc-row\" style=\"position: relative; left: -234.6px; box-sizing: border-box; width: 1519px; padding-left: 234.6px; padding-right: 234.4px;\"><div class=\"wpb_column vc_column_container vc_col-sm-12 mpc-column\" data-column-id=\"mpc_column-54609036d641045\"><div class=\"vc_column-inner\"><div class=\"wpb_wrapper\"><h3 style=\"text-align: left;font-family:Lato;font-weight:400;font-style:normal\" class=\"vc_custom_heading\">Réinitialiser votre mot de passe</h3><form method=\"post\" action=\"\" autocomplete=\"off\"><div class=\"um-row _um_row_1 \" style=\"margin: 0 0 30px 0;\"><div class=\"um-col-1\"><div id=\"um_field_carte_soin_clair\" class=\"um-field um-field-text um-field-text um-field-type_text\"><div class=\"um-field-label\"> <label for=\"carte_soin_clair\">Numéro de carte Soin clair</label><div class=\"um-clear\"></div></div><div class=\"um-field-area\"> <input autocomplete=\"off\" class=\"um-form-field\" type=\"text\" name=\"carte_soin_clair\" id=\"carte_soin_clair\" value=\"\" placeholder=\"\"></div></div><div id=\"um_field_cin\" class=\"um-field um-field-text um-field-text um-field-type_text\"><div class=\"um-field-label\"> <label for=\"cin\">C.I.N</label><div class=\"um-clear\"></div></div><div class=\"um-field-area\"> <input autocomplete=\"off\" class=\"um-form-field valid\" type=\"text\" name=\"cin\" id=\"cin\" value=\"\" placeholder=\"\" data-validate=\"\" data-key=\"\"></div></div><div id=\"um_field_member_password\" class=\"um-field um-field-password um-field-user_password um-field-password um-field-type_password\" data-key=\"user_password\"><div class=\"um-field-label\"> <label for=\"member_password\">Nouveau Mot de passe</label><div class=\"um-clear\"></div></div><div class=\"um-field-area\"><input class=\"um-form-field valid\" type=\"password\" name=\"member_password\" id=\"member_password\" value=\"\" placeholder=\"\" data-validate=\"\"></div></div><div id=\"um_field_member_password_confirm\" class=\"um-field um-field-password um-field-user_password um-field-password um-field-type_password\" data-key=\"user_password\"><div class=\"um-field-label\"> <label for=\"member_password_confirm\">Confirmer le mot de passe</label><div class=\"um-clear\"></div></div><div class=\"um-field-area\"><input class=\"um-form-field valid\" type=\"password\" name=\"member_password_confirm\" id=\"member_password_confirm\" value=\"\" placeholder=\"\"></div></div></div></div><div class=\"um-col-alt\"><div class=\"um-center\"> <input type=\"submit\" value=\"Réinitialiser mot de passe\" class=\"um-button\" name=\"verifier\" id=\"cdm-update-password\"></div><div class=\"um-clear\"></div></div></form><div class=\"wpb_text_column wpb_content_element \"><div class=\"wpb_wrapper\"></div></div></div></div></div></div><div class=\"vc_row-full-width vc_clearfix\"></div><div data-vc-full-width=\"true\" data-vc-full-width-init=\"true\" data-vc-stretch-content=\"true\" class=\"vc_row wpb_row vc_row-fluid vc_custom_1615225004336 vc_row-has-fill vc_row-no-padding mpc-row\" style=\"position: relative; left: -234.6px; box-sizing: border-box; width: 1519px;\"><div class=\"wpb_column vc_column_container vc_col-sm-12 mpc-column\" data-column-id=\"mpc_column-61609036d641b98\"><div class=\"vc_column-inner\"><div class=\"wpb_wrapper\"><div class=\"ult-spacer spacer-609036d641af4\" data-id=\"609036d641af4\" data-height=\"80\" data-height-mobile=\"80\" data-height-tab=\"80\" data-height-tab-portrait=\"\" data-height-mobile-landscape=\"\" style=\"clear:both;display:block;\"></div></div></div></div></div><div class=\"vc_row-full-width vc_clearfix\"></div><div class=\"clearfix\"></div></div></article>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/reset-password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 13,  122 => 12,  104 => 11,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Soin Clair - Nos Publications{% endblock %}

{% block extra_stylesheets %}
    <link href=\"{{ asset('/css/static/resetpwd.css') }}\" rel=\"stylesheet\"/>

{% endblock %}


{% block content %}{% endblock %}
{% block body %}
    <div class=\"container-fluuid _content-background\">
        <div class=\"row\">
            <div class=\"col-12 _content-header\">
                <div class=\"wpb_wrapper\">
                    <div class=\"vlthemes_custom_609036d63ef18   vlt-page-title\">
                        <div class=\"container\">
                            <div class=\"vlt-page-title__inner\">
                                <h1>Espace Adhérent</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <article class=\"vlt-page vlt-page--custom post-4461 page type-page status-publish hentry\">
        <div class=\"container\">
            <div class=\"vc_row-full-width vc_clearfix\"></div>
            <div data-vc-full-width=\"true\" data-vc-full-width-init=\"true\" data-vc-stretch-content=\"true\" class=\"vc_row wpb_row vc_row-fluid vc_custom_1615225004336 vc_row-has-fill vc_row-no-padding mpc-row\" style=\"position: relative; left: -234.6px; box-sizing: border-box; width: 1519px;\"><div class=\"wpb_column vc_column_container vc_col-sm-12 mpc-column\" data-column-id=\"mpc_column-83609036d63f4bd\"><div class=\"vc_column-inner\"><div class=\"wpb_wrapper\"><div class=\"ult-spacer spacer-609036d63f43e\" data-id=\"609036d63f43e\" data-height=\"80\" data-height-mobile=\"80\" data-height-tab=\"80\" data-height-tab-portrait=\"\" data-height-mobile-landscape=\"\" style=\"clear:both;display:block;\"></div></div></div></div></div><div class=\"vc_row-full-width vc_clearfix\"></div><div data-vc-full-width=\"true\" data-vc-full-width-init=\"true\" class=\"vc_row wpb_row vc_row-fluid vc_row-o-content-middle vc_row-flex mpc-row\" style=\"position: relative; left: -234.6px; box-sizing: border-box; width: 1519px; padding-left: 234.6px; padding-right: 234.4px;\"><div class=\"wpb_column vc_column_container vc_col-sm-12 mpc-column\" data-column-id=\"mpc_column-54609036d641045\"><div class=\"vc_column-inner\"><div class=\"wpb_wrapper\"><h3 style=\"text-align: left;font-family:Lato;font-weight:400;font-style:normal\" class=\"vc_custom_heading\">Réinitialiser votre mot de passe</h3><form method=\"post\" action=\"\" autocomplete=\"off\"><div class=\"um-row _um_row_1 \" style=\"margin: 0 0 30px 0;\"><div class=\"um-col-1\"><div id=\"um_field_carte_soin_clair\" class=\"um-field um-field-text um-field-text um-field-type_text\"><div class=\"um-field-label\"> <label for=\"carte_soin_clair\">Numéro de carte Soin clair</label><div class=\"um-clear\"></div></div><div class=\"um-field-area\"> <input autocomplete=\"off\" class=\"um-form-field\" type=\"text\" name=\"carte_soin_clair\" id=\"carte_soin_clair\" value=\"\" placeholder=\"\"></div></div><div id=\"um_field_cin\" class=\"um-field um-field-text um-field-text um-field-type_text\"><div class=\"um-field-label\"> <label for=\"cin\">C.I.N</label><div class=\"um-clear\"></div></div><div class=\"um-field-area\"> <input autocomplete=\"off\" class=\"um-form-field valid\" type=\"text\" name=\"cin\" id=\"cin\" value=\"\" placeholder=\"\" data-validate=\"\" data-key=\"\"></div></div><div id=\"um_field_member_password\" class=\"um-field um-field-password um-field-user_password um-field-password um-field-type_password\" data-key=\"user_password\"><div class=\"um-field-label\"> <label for=\"member_password\">Nouveau Mot de passe</label><div class=\"um-clear\"></div></div><div class=\"um-field-area\"><input class=\"um-form-field valid\" type=\"password\" name=\"member_password\" id=\"member_password\" value=\"\" placeholder=\"\" data-validate=\"\"></div></div><div id=\"um_field_member_password_confirm\" class=\"um-field um-field-password um-field-user_password um-field-password um-field-type_password\" data-key=\"user_password\"><div class=\"um-field-label\"> <label for=\"member_password_confirm\">Confirmer le mot de passe</label><div class=\"um-clear\"></div></div><div class=\"um-field-area\"><input class=\"um-form-field valid\" type=\"password\" name=\"member_password_confirm\" id=\"member_password_confirm\" value=\"\" placeholder=\"\"></div></div></div></div><div class=\"um-col-alt\"><div class=\"um-center\"> <input type=\"submit\" value=\"Réinitialiser mot de passe\" class=\"um-button\" name=\"verifier\" id=\"cdm-update-password\"></div><div class=\"um-clear\"></div></div></form><div class=\"wpb_text_column wpb_content_element \"><div class=\"wpb_wrapper\"></div></div></div></div></div></div><div class=\"vc_row-full-width vc_clearfix\"></div><div data-vc-full-width=\"true\" data-vc-full-width-init=\"true\" data-vc-stretch-content=\"true\" class=\"vc_row wpb_row vc_row-fluid vc_custom_1615225004336 vc_row-has-fill vc_row-no-padding mpc-row\" style=\"position: relative; left: -234.6px; box-sizing: border-box; width: 1519px;\"><div class=\"wpb_column vc_column_container vc_col-sm-12 mpc-column\" data-column-id=\"mpc_column-61609036d641b98\"><div class=\"vc_column-inner\"><div class=\"wpb_wrapper\"><div class=\"ult-spacer spacer-609036d641af4\" data-id=\"609036d641af4\" data-height=\"80\" data-height-mobile=\"80\" data-height-tab=\"80\" data-height-tab-portrait=\"\" data-height-mobile-landscape=\"\" style=\"clear:both;display:block;\"></div></div></div></div></div><div class=\"vc_row-full-width vc_clearfix\"></div><div class=\"clearfix\"></div></div></article>
{% endblock %}", "security/reset-password.html.twig", "C:\\Users\\czakaria\\lab\\projects\\soinclair\\soin_clair\\templates\\security\\reset-password.html.twig");
    }
}
