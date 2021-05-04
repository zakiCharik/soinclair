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

/* vitrine/general/nosservices.html.twig */
class __TwigTemplate_5081364efcc64fe44e48be64535927b635f156e7c0ad2bd88b312d17861781f7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine/general/nosservices.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine/general/nosservices.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vitrine/general/nosservices.html.twig", 1);
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
        <article class=\"p-2 \" style=\"background-color: #00a6cc !important;\">
            <div class=\"container\">

                <div class=\"section\">
                    <div class=\"row\">
                        <div class=\"text-center col-lg-12 mx-auto col-md-12 col-sm-12 col-xs-12\">
                            <h3 style=\"font-size: 160px; font-family:'Teko';font-weight:normal;color:#ffffff;margin-top:10px;\">Nos Services</h3>
                        </div>
                    </div>
                </div>
                <section>
                    <div class=\"_services row\">
                        <div class=\"_grid_columns col-lg-4 col-md-4 col-xs-12 col-sm-9\">
                            <div class=\"_grid_header\"><h4>Optimiser mes déponses de santé</h4></div>
                            <div class=\"_grid_body\">
                                Accédez à un large réseau de professionnels de santé recommandés et au juste prix.
                            </div>
                            <div class=\"_grid_icon\">
                                <i class=\"fas fa-dollar-sign\"></i>
                            </div>
                            <div class=\"_grid_footer\">
                                <a>More</a>
                            </div>
                        </div>

                        <div class=\"_grid_columns col-lg-4 col-md-4 col-xs-12 col-sm-9\">
                            <div class=\"_grid_header\"><h4>Analyser mon devis</h4></div>
                            <div class=\"_grid_body\">Pensez à faire analyser votre devis par des professionnels</div>
                            <div class=\"_grid_icon\">
                                <i class=\"fas fa-search\"></i>
                            </div>
                            <div class=\"_grid_footer\">
                                <a>More</a>
                            </div>
                        </div>

                        <div class=\"_grid_columns col-lg-4 col-md-4 col-xs-12 col-sm-9\">
                            <div class=\"_grid_header\"><h4>Mieux Comprendre mon Assurance Maladie</h4></div>
                            <div class=\"_grid_body\">
                                N’ayez plus de mauvaises surprises lors de vos remboursements.
                            </div>
                            <div class=\"_grid_icon\">
                                <i class=\"far fa-lightbulb\"></i>
                            </div>
                            <div class=\"_grid_footer\">
                                <a>More</a>
                            </div>
                        </div>
                    </div>
                </section>
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
        return "vitrine/general/nosservices.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 8,  97 => 7,  79 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Soin Clair - Qui Somme Nous ?{% endblock %}


{% block content %}{% endblock %}
{% block body %}
<div class=\"border-bottom wrapper\">
    <main>
        <article class=\"p-2 \" style=\"background-color: #00a6cc !important;\">
            <div class=\"container\">

                <div class=\"section\">
                    <div class=\"row\">
                        <div class=\"text-center col-lg-12 mx-auto col-md-12 col-sm-12 col-xs-12\">
                            <h3 style=\"font-size: 160px; font-family:'Teko';font-weight:normal;color:#ffffff;margin-top:10px;\">Nos Services</h3>
                        </div>
                    </div>
                </div>
                <section>
                    <div class=\"_services row\">
                        <div class=\"_grid_columns col-lg-4 col-md-4 col-xs-12 col-sm-9\">
                            <div class=\"_grid_header\"><h4>Optimiser mes déponses de santé</h4></div>
                            <div class=\"_grid_body\">
                                Accédez à un large réseau de professionnels de santé recommandés et au juste prix.
                            </div>
                            <div class=\"_grid_icon\">
                                <i class=\"fas fa-dollar-sign\"></i>
                            </div>
                            <div class=\"_grid_footer\">
                                <a>More</a>
                            </div>
                        </div>

                        <div class=\"_grid_columns col-lg-4 col-md-4 col-xs-12 col-sm-9\">
                            <div class=\"_grid_header\"><h4>Analyser mon devis</h4></div>
                            <div class=\"_grid_body\">Pensez à faire analyser votre devis par des professionnels</div>
                            <div class=\"_grid_icon\">
                                <i class=\"fas fa-search\"></i>
                            </div>
                            <div class=\"_grid_footer\">
                                <a>More</a>
                            </div>
                        </div>

                        <div class=\"_grid_columns col-lg-4 col-md-4 col-xs-12 col-sm-9\">
                            <div class=\"_grid_header\"><h4>Mieux Comprendre mon Assurance Maladie</h4></div>
                            <div class=\"_grid_body\">
                                N’ayez plus de mauvaises surprises lors de vos remboursements.
                            </div>
                            <div class=\"_grid_icon\">
                                <i class=\"far fa-lightbulb\"></i>
                            </div>
                            <div class=\"_grid_footer\">
                                <a>More</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </article>
    </main>
</div>



{% endblock %}", "vitrine/general/nosservices.html.twig", "C:\\Users\\czakaria\\lab\\projects\\soinclair\\soin_clair\\templates\\vitrine\\general\\nosservices.html.twig");
    }
}
