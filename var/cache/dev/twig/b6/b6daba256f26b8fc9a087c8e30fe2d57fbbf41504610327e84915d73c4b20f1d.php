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

/* vitrine/general/qui-somme-nous.html.twig */
class __TwigTemplate_07ab6eb1ef7f15aaad689a35053a447d7b2288d74c585bed593187b7ab3535fc extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine/general/qui-somme-nous.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine/general/qui-somme-nous.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vitrine/general/qui-somme-nous.html.twig", 1);
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

        echo "Soin Clair - Qui Somme Nous ?";
        
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

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div class=\"border-bottom wrapper\">
    <main>
        <article>
            <div class=\"container\">
                <div class=\"section\">
                    <div class=\"row\">
                        <div class=\"right_par col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                            <div></div>
                            <div class=\"header_par\">
                                <h1 style=\"font-size: 44px;color: #000000;text-align: left;font-family:Montserrat;font-weight:700;font-style:normal\" class=\"vc_custom_heading vc_custom_1618332263205\" id=\"sectionTitle\">Qui sommes-nous ?</h1>
                            </div>
                            <div class=\"body_par\">
                                <p>
                                    SOINCLAIR est le fruit d’une longue réflexion développée par des consultants experts en assurance maladie qui ont toujours déploré les niveaux des restes à charge que supportent les salariés ainsi que le coût élevé d’assurance maladie que supporte l’entreprise.<br />
                                    Devant l’absence quasi complète de repères en termes de soins de santé, le patient se trouve souvent en confusion, voire frustré face au manque d’informations sur le parcours médical et la qualité des soins, d’où la motivation de SOINCLAIR d’assister toute personne nécessitant un accompagnement dans son parcours médical à un coût raisonnable.
                                </p>
                            </div>
                        </div>
                        <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                            <div class=\"mpc-image\">
                                <img src=\"https://soin.cloudmeserver.info/wp-content/uploads/2021/04/522211.png\" width=\"761\" height=\"413\">
                            </div>
                        </div>
                    </div>
                    <div style=\"margin-left: 15%;margin-bottom: 5%;\">
                        <div class=\"row row-fluid\">
                            <div class=\"border-bottom  pt-3 col-lg-4 col-sm-12 section-title\" style=\"line-height: 2;text-align: justify;\">
                                <h2>Notre mission</h2>
                                <p>Notre mission est d’assister nos clients à prendre des décisions intelligentes en matière de santé pour simplifier leur parcours médical, et d’améliorer leur prise en charge sanitaire en optimisant leurs dépenses de santé.</p>
                            </div>
                        </div>

                        <div class=\"row-full-width clearfix\"></div>
                        <div class=\"row row-fluid\">
                            <div class=\"pt-3 col-lg-4 col-sm-12 section-title\" style=\"line-height: 2;text-align: justify;\">
                                <h2>Ce que nous offrons</h2>
                            </div>
                        </div>

                        <div class=\"row row-fluid\">
                            <div class=\"p-5 col-lg-6 col-sm-12 \" >
                                <div class=\"m-1 box\">
                                    <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/static/undraw_doctors_hwty-300x218.png"), "html", null, true);
        echo "\" class=\"img-fluid mx-auto d-block\" alt=\"...\">
                                    <h3 class=\"box-header\">Un large réseau de prestataires</h3>
                                    <p class=\"box-body\" >Vos salariés ont accès à un large réseau de prestataires de qualité à des tarifs privilégiés et tout à fait transparents.</p>
                                </div>
                            </div>
                            <div class=\"p-5 col-lg-6 col-sm-12 \" >
                                <div class=\"m-1 box\">
                                    <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/static/undraw_investment_data_yfvt-300x195.png"), "html", null, true);
        echo "\" class=\"img-fluid mx-auto d-block\" alt=\"...\">
                                    <h3 class=\"box-header\">Optimisation du coût</h3>
                                    <p class=\"box-body\">Une optimisation du coût d’assurance de l’entreprise.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row row-fluid\">

                            <div class=\"pt-3 col-lg-6 col-sm-12 box\" >
                                <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/static/undraw_Savings_re_eq4w-300x231.png"), "html", null, true);
        echo "\" class=\"img-fluid mx-auto d-block\" alt=\"...\">
                                <h3 class=\"box-header\">Maîtrise globale des dépenses</h3>
                                <p class=\"box-body\">Une maîtrise globale des dépenses de santé.</p>
                            </div>


                            <div class=\"pt-3 col-lg-6 col-sm-12 box\" >
                                <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/static/undraw_Receipt_re_fre3-300x249.png"), "html", null, true);
        echo "\" class=\"img-fluid mx-auto d-block\" alt=\"...\">
                                <h3 class=\"box-header\">Analyse de devis médicaux</h3>
                                <p class=\"box-body\">Un service d’analyse de devis médicaux.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </article>
    </main>
</div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vitrine/general/qui-somme-nous.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 73,  173 => 66,  161 => 57,  151 => 50,  107 => 8,  97 => 7,  79 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Soin Clair - Qui Somme Nous ?{% endblock %}


{% block content %}{% endblock %}
{% block body %}
<div class=\"border-bottom wrapper\">
    <main>
        <article>
            <div class=\"container\">
                <div class=\"section\">
                    <div class=\"row\">
                        <div class=\"right_par col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                            <div></div>
                            <div class=\"header_par\">
                                <h1 style=\"font-size: 44px;color: #000000;text-align: left;font-family:Montserrat;font-weight:700;font-style:normal\" class=\"vc_custom_heading vc_custom_1618332263205\" id=\"sectionTitle\">Qui sommes-nous ?</h1>
                            </div>
                            <div class=\"body_par\">
                                <p>
                                    SOINCLAIR est le fruit d’une longue réflexion développée par des consultants experts en assurance maladie qui ont toujours déploré les niveaux des restes à charge que supportent les salariés ainsi que le coût élevé d’assurance maladie que supporte l’entreprise.<br />
                                    Devant l’absence quasi complète de repères en termes de soins de santé, le patient se trouve souvent en confusion, voire frustré face au manque d’informations sur le parcours médical et la qualité des soins, d’où la motivation de SOINCLAIR d’assister toute personne nécessitant un accompagnement dans son parcours médical à un coût raisonnable.
                                </p>
                            </div>
                        </div>
                        <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                            <div class=\"mpc-image\">
                                <img src=\"https://soin.cloudmeserver.info/wp-content/uploads/2021/04/522211.png\" width=\"761\" height=\"413\">
                            </div>
                        </div>
                    </div>
                    <div style=\"margin-left: 15%;margin-bottom: 5%;\">
                        <div class=\"row row-fluid\">
                            <div class=\"border-bottom  pt-3 col-lg-4 col-sm-12 section-title\" style=\"line-height: 2;text-align: justify;\">
                                <h2>Notre mission</h2>
                                <p>Notre mission est d’assister nos clients à prendre des décisions intelligentes en matière de santé pour simplifier leur parcours médical, et d’améliorer leur prise en charge sanitaire en optimisant leurs dépenses de santé.</p>
                            </div>
                        </div>

                        <div class=\"row-full-width clearfix\"></div>
                        <div class=\"row row-fluid\">
                            <div class=\"pt-3 col-lg-4 col-sm-12 section-title\" style=\"line-height: 2;text-align: justify;\">
                                <h2>Ce que nous offrons</h2>
                            </div>
                        </div>

                        <div class=\"row row-fluid\">
                            <div class=\"p-5 col-lg-6 col-sm-12 \" >
                                <div class=\"m-1 box\">
                                    <img src=\"{{ asset('/img/static/undraw_doctors_hwty-300x218.png') }}\" class=\"img-fluid mx-auto d-block\" alt=\"...\">
                                    <h3 class=\"box-header\">Un large réseau de prestataires</h3>
                                    <p class=\"box-body\" >Vos salariés ont accès à un large réseau de prestataires de qualité à des tarifs privilégiés et tout à fait transparents.</p>
                                </div>
                            </div>
                            <div class=\"p-5 col-lg-6 col-sm-12 \" >
                                <div class=\"m-1 box\">
                                    <img src=\"{{ asset('/img/static/undraw_investment_data_yfvt-300x195.png') }}\" class=\"img-fluid mx-auto d-block\" alt=\"...\">
                                    <h3 class=\"box-header\">Optimisation du coût</h3>
                                    <p class=\"box-body\">Une optimisation du coût d’assurance de l’entreprise.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row row-fluid\">

                            <div class=\"pt-3 col-lg-6 col-sm-12 box\" >
                                <img src=\"{{ asset('/img/static/undraw_Savings_re_eq4w-300x231.png') }}\" class=\"img-fluid mx-auto d-block\" alt=\"...\">
                                <h3 class=\"box-header\">Maîtrise globale des dépenses</h3>
                                <p class=\"box-body\">Une maîtrise globale des dépenses de santé.</p>
                            </div>


                            <div class=\"pt-3 col-lg-6 col-sm-12 box\" >
                                <img src=\"{{ asset('/img/static/undraw_Receipt_re_fre3-300x249.png') }}\" class=\"img-fluid mx-auto d-block\" alt=\"...\">
                                <h3 class=\"box-header\">Analyse de devis médicaux</h3>
                                <p class=\"box-body\">Un service d’analyse de devis médicaux.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </article>
    </main>
</div>



{% endblock %}", "vitrine/general/qui-somme-nous.html.twig", "C:\\Users\\czakaria\\lab\\projects\\soinclair\\soin_clair\\templates\\vitrine\\general\\qui-somme-nous.html.twig");
    }
}
