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

/* adherant/import.html.twig */
class __TwigTemplate_864d40aca398e9d68c131e89a4fbd452bec8d41d0b6eaccdc71db5d362cd191c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adherant/import.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adherant/import.html.twig"));

        $this->parent = $this->loadTemplate("/admin/index.html.twig", "adherant/import.html.twig", 1);
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

        echo "Adherant index";
        
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
        echo "<div class=\"x_panel\">
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
        </a>

        <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherant_importzip");
        echo "\"  class=\"btn btn-app\">
            <i class=\"fa fa-credit-card\"></i> import
            <small>Cartes</small>
        </a>

    </div>
</div>
<div class=\"x_panel\">
    <div class=\"x_title\">
        <h2>Import des adhérents</h2>
        <ul class=\"nav navbar-right panel_toolbox\">
            <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
            </li>
            <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
            </li>
        </ul>
        <div class=\"clearfix\"></div>
    </div>
    <div class=\"x_content\">
        <p>
            Charger le fichier contenant les adhérents en respectant le format du fichier suivant : <br/>
                <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/Template/Template_import.xlsx"), "html", null, true);
        echo "\">
                    <i class=\"fa fa-download\"></i>Modèle
                </a>
            <br>
        </p>
        <form  action=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("upload-excel");
        echo "\" method=\"POST\"  enctype=\"multipart/form-data\">
            <div class=\"item form-group\">
                <label class=\"col-form-label col-md-3 col-sm-3 label-align\">Fichier d'upload</label>
                <input type=\"file\" name=\"myfile\" class=\"\" />
            </div>

            <div class=\"ln_solid\"></div>
            <div class=\"item form-group\">
                <div class=\"col-md-6 col-sm-6 offset-md-3\">
                    <button class=\"btn btn-primary\" type=\"reset\">Reset</button>
                    <input class=\"btn btn-success\" type=\"submit\" value=\"submit\"/>
                </div>
            </div>
        </form>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "adherant/import.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 48,  158 => 43,  134 => 22,  127 => 18,  120 => 14,  113 => 10,  108 => 7,  98 => 6,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '/admin/index.html.twig' %}

{% block title_admin %}Adherant index{% endblock %}
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
        </a>

        <a href=\"{{ path('adherant_importzip') }}\"  class=\"btn btn-app\">
            <i class=\"fa fa-credit-card\"></i> import
            <small>Cartes</small>
        </a>

    </div>
</div>
<div class=\"x_panel\">
    <div class=\"x_title\">
        <h2>Import des adhérents</h2>
        <ul class=\"nav navbar-right panel_toolbox\">
            <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
            </li>
            <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
            </li>
        </ul>
        <div class=\"clearfix\"></div>
    </div>
    <div class=\"x_content\">
        <p>
            Charger le fichier contenant les adhérents en respectant le format du fichier suivant : <br/>
                <a href=\"{{ asset('uploads/Template/Template_import.xlsx') }}\">
                    <i class=\"fa fa-download\"></i>Modèle
                </a>
            <br>
        </p>
        <form  action=\"{{ path('upload-excel') }}\" method=\"POST\"  enctype=\"multipart/form-data\">
            <div class=\"item form-group\">
                <label class=\"col-form-label col-md-3 col-sm-3 label-align\">Fichier d'upload</label>
                <input type=\"file\" name=\"myfile\" class=\"\" />
            </div>

            <div class=\"ln_solid\"></div>
            <div class=\"item form-group\">
                <div class=\"col-md-6 col-sm-6 offset-md-3\">
                    <button class=\"btn btn-primary\" type=\"reset\">Reset</button>
                    <input class=\"btn btn-success\" type=\"submit\" value=\"submit\"/>
                </div>
            </div>
        </form>
    </div>
</div>
{% endblock %}", "adherant/import.html.twig", "C:\\Users\\czakaria\\lab\\projects\\soinclair\\soin_clair\\templates\\adherant\\import.html.twig");
    }
}
