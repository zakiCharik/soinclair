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

/* employeur/index.html.twig */
class __TwigTemplate_f1ec9d8a17a669be0a5d301443fa2101e7383b617cc19fc2d75eb9347ef9af8e extends \Twig\Template
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
            'extra_script_admin' => [$this, 'block_extra_script_admin'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employeur/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employeur/index.html.twig"));

        $this->parent = $this->loadTemplate("/admin/index.html.twig", "employeur/index.html.twig", 1);
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

        echo "Employeur index";
        
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

        echo "Espace Employeur accès administrateur";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "<div class=\"x_panel\">
    <div class=\"x_title\">
        <h2>   Actions
        </h2>
        <ul class=\"nav navbar-right panel_toolbox\">
            <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
            </li>
            <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
            </li>
        </ul>
        <div class=\"clearfix\"></div>
    </div>

    <div class=\"x_content\">
        <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employeur_new");
        echo "\"  class=\"btn btn-app\">
            <i class=\"fa fa-save\"></i> Nouveau
        </a>

    </div>
</div>
<div class=\"x_panel\">
    <div class=\"x_title\">
        <h2>Liste des employeurs</h2>
        <ul class=\"nav navbar-right panel_toolbox\">
            <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
            </li>
            <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
            </li>
        </ul>
        <div class=\"clearfix\"></div>
    </div>
    <div class=\"x_content\">

        <table id=\"datatable_employeur\" class=\"table table-striped table-bordered dataTable no-footer\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Entreprise</th>
                    <th>Activity</th>
                    <th>Date d'inscription</th>
                    <th>Date d'expiration</th>
                    <th>logo</th>
                    <th>DB employeurs</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employeurs"]) || array_key_exists("employeurs", $context) ? $context["employeurs"] : (function () { throw new RuntimeError('Variable "employeurs" does not exist.', 55, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["employeur"]) {
            // line 56
            echo "                <tr>
                    <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employeur"], "id", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                    <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employeur"], "entreprise", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                    <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employeur"], "activity", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                    <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employeur"], "subscriptiondate", [], "any", false, false, false, 60)), "html", null, true);
            echo "</td>
                    <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employeur"], "expiringdate", [], "any", false, false, false, 61)), "html", null, true);
            echo "</td>
                    <td><img src=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/employeur/logos/" . twig_get_attribute($this->env, $this->source, $context["employeur"], "logo", [], "any", false, false, false, 62))), "html", null, true);
            echo "\" width=\"45px\" height=\"45px\"/> </td>
                    <td><a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/employeur/fichiers_employeur/" . twig_get_attribute($this->env, $this->source, $context["employeur"], "databaseemployees", [], "any", false, false, false, 63))), "html", null, true);
            echo "\" >
                            <i class=\"fa fa-download\"></i>Télécharger le base</a> </td>
                    <td>
                        <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employeur_show", ["id" => twig_get_attribute($this->env, $this->source, $context["employeur"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\"  class=\"btn btn-default\">
                            <i class=\"fa fa-eye\"></i> show
                        </a>
                        <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employeur_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["employeur"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\"  class=\"btn btn-default\">
                            <i class=\"fa fa-edit\"></i> Edit
                        </a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 75
            echo "                <tr>
                    <td colspan=\"7\">no records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employeur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "            </tbody>
        </table>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 85
    public function block_extra_script_admin($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_script_admin"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_script_admin"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "employeur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 85,  225 => 79,  216 => 75,  205 => 69,  199 => 66,  193 => 63,  189 => 62,  185 => 61,  181 => 60,  177 => 59,  173 => 58,  169 => 57,  166 => 56,  161 => 55,  125 => 22,  109 => 8,  99 => 7,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '/admin/index.html.twig' %}

{% block title_admin %}Employeur index{% endblock %}
{% block title_page_admin %}Espace Employeur accès administrateur{% endblock %}


{% block content %}
<div class=\"x_panel\">
    <div class=\"x_title\">
        <h2>   Actions
        </h2>
        <ul class=\"nav navbar-right panel_toolbox\">
            <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
            </li>
            <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
            </li>
        </ul>
        <div class=\"clearfix\"></div>
    </div>

    <div class=\"x_content\">
        <a href=\"{{ path('employeur_new') }}\"  class=\"btn btn-app\">
            <i class=\"fa fa-save\"></i> Nouveau
        </a>

    </div>
</div>
<div class=\"x_panel\">
    <div class=\"x_title\">
        <h2>Liste des employeurs</h2>
        <ul class=\"nav navbar-right panel_toolbox\">
            <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
            </li>
            <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
            </li>
        </ul>
        <div class=\"clearfix\"></div>
    </div>
    <div class=\"x_content\">

        <table id=\"datatable_employeur\" class=\"table table-striped table-bordered dataTable no-footer\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Entreprise</th>
                    <th>Activity</th>
                    <th>Date d'inscription</th>
                    <th>Date d'expiration</th>
                    <th>logo</th>
                    <th>DB employeurs</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                {% for employeur in employeurs %}
                <tr>
                    <td>{{ employeur.id }}</td>
                    <td>{{ employeur.entreprise }}</td>
                    <td>{{ employeur.activity }}</td>
                    <td>{{ employeur.subscriptiondate | date }}</td>
                    <td>{{ employeur.expiringdate | date }}</td>
                    <td><img src=\"{{  asset('/uploads/employeur/logos/'~employeur.logo) }}\" width=\"45px\" height=\"45px\"/> </td>
                    <td><a href=\"{{  asset('/uploads/employeur/fichiers_employeur/'~employeur.databaseemployees) }}\" >
                            <i class=\"fa fa-download\"></i>Télécharger le base</a> </td>
                    <td>
                        <a href=\"{{ path('employeur_show', {'id': employeur.id}) }}\"  class=\"btn btn-default\">
                            <i class=\"fa fa-eye\"></i> show
                        </a>
                        <a href=\"{{ path('employeur_edit', {'id': employeur.id}) }}\"  class=\"btn btn-default\">
                            <i class=\"fa fa-edit\"></i> Edit
                        </a>
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
{% endblock %}

{% block extra_script_admin %}
{% endblock %}
", "employeur/index.html.twig", "C:\\Users\\czakaria\\lab\\projects\\soinclair\\soin_clair\\templates\\employeur\\index.html.twig");
    }
}
