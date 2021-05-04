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

/* adherant/index.html.twig */
class __TwigTemplate_f719595215a8e8d2bdb3f7b838c01e5c3b8567e215241223deda772080382fb2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adherant/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adherant/index.html.twig"));

        $this->parent = $this->loadTemplate("/admin/index.html.twig", "adherant/index.html.twig", 1);
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

        echo "Espace adhérent accès administrateur";
        
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherant_new");
        echo "\"  class=\"btn btn-app\">
            <i class=\"fa fa-save\"></i> Nouveau
        </a>

        <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherant_import");
        echo "\"  class=\"btn btn-app\">
            <i class=\"fa fa-database\"></i> import
            <small>Adhérents</small>
        </a>


        <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherant_importzip");
        echo "\"  class=\"btn btn-app\">
            <i class=\"fa fa-credit-card\"></i> import
            <small>Cartes</small>
        </a>

    </div>
</div>
<div class=\"x_panel\">
    <div class=\"x_title\">
        <h2>Liste des adhérents</h2>
        <ul class=\"nav navbar-right panel_toolbox\">
            <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
            </li>
            <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
            </li>
        </ul>
        <div class=\"clearfix\"></div>
    </div>
    <div class=\"x_content\">
        <div class=\"card-box table-responsive\">
            <p class=\"text-muted font-13 m-b-30\">
                <br/>
            </p>

                <table id=\"datatable_adherant\" class=\"table table-striped table-bordered dataTable no-footer\">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>N° Soin Clair</th>
                            <th>Cin</th>
                            <th>Nom & Prénom</th>
                            <th>Code Client</th>
                            <th>Entreprise</th>
                            <th>actions</th>
                        </tr>

                    </thead>
                    <tbody>
                        ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adherants"]) || array_key_exists("adherants", $context) ? $context["adherants"] : (function () { throw new RuntimeError('Variable "adherants" does not exist.', 70, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["adherant"]) {
            // line 71
            echo "                            <tr>
                                <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherant"], "id", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>
                                <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherant"], "numeroSoinclair", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
                                <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherant"], "cin", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
                                <td>";
            // line 75
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["adherant"], "lastname", [], "any", false, false, false, 75) . " ") . twig_get_attribute($this->env, $this->source, $context["adherant"], "firstname", [], "any", false, false, false, 75)), "html", null, true);
            echo "</td>
                                <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherant"], "codeclient", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
                                <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherant"], "entreprise", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherant_show", ["id" => twig_get_attribute($this->env, $this->source, $context["adherant"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            echo "\"  class=\"btn btn-default\">
                                        <i class=\"fa fa-eye\"></i> show
                                    </a>
                                    <a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherant_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["adherant"], "id", [], "any", false, false, false, 82)]), "html", null, true);
            echo "\"  class=\"btn btn-default\">
                                        <i class=\"fa fa-edit\"></i> Edit
                                    </a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 88
            echo "                            <tr>
                                <td colspan=\"4\">no records found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adherant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                    </tbody>

                </table>

        </div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 102
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
        return "adherant/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 102,  241 => 92,  232 => 88,  221 => 82,  215 => 79,  210 => 77,  206 => 76,  202 => 75,  198 => 74,  194 => 73,  190 => 72,  187 => 71,  182 => 70,  141 => 32,  132 => 26,  125 => 22,  109 => 8,  99 => 7,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '/admin/index.html.twig' %}

{% block title_admin %}Adherant index{% endblock %}
{% block title_page_admin %}Espace adhérent accès administrateur{% endblock %}


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
        <a href=\"{{ path('adherant_new') }}\"  class=\"btn btn-app\">
            <i class=\"fa fa-save\"></i> Nouveau
        </a>

        <a href=\"{{ path('adherant_import') }}\"  class=\"btn btn-app\">
            <i class=\"fa fa-database\"></i> import
            <small>Adhérents</small>
        </a>


        <a href=\"{{ path('adherant_importzip') }}\"  class=\"btn btn-app\">
            <i class=\"fa fa-credit-card\"></i> import
            <small>Cartes</small>
        </a>

    </div>
</div>
<div class=\"x_panel\">
    <div class=\"x_title\">
        <h2>Liste des adhérents</h2>
        <ul class=\"nav navbar-right panel_toolbox\">
            <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
            </li>
            <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
            </li>
        </ul>
        <div class=\"clearfix\"></div>
    </div>
    <div class=\"x_content\">
        <div class=\"card-box table-responsive\">
            <p class=\"text-muted font-13 m-b-30\">
                <br/>
            </p>

                <table id=\"datatable_adherant\" class=\"table table-striped table-bordered dataTable no-footer\">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>N° Soin Clair</th>
                            <th>Cin</th>
                            <th>Nom & Prénom</th>
                            <th>Code Client</th>
                            <th>Entreprise</th>
                            <th>actions</th>
                        </tr>

                    </thead>
                    <tbody>
                        {% for adherant in adherants %}
                            <tr>
                                <td>{{ adherant.id }}</td>
                                <td>{{ adherant.numeroSoinclair }}</td>
                                <td>{{ adherant.cin }}</td>
                                <td>{{ adherant.lastname ~ ' ' ~ adherant.firstname }}</td>
                                <td>{{ adherant.codeclient }}</td>
                                <td>{{ adherant.entreprise }}</td>
                                <td>
                                    <a href=\"{{ path('adherant_show', {'id': adherant.id}) }}\"  class=\"btn btn-default\">
                                        <i class=\"fa fa-eye\"></i> show
                                    </a>
                                    <a href=\"{{ path('adherant_edit', {'id': adherant.id}) }}\"  class=\"btn btn-default\">
                                        <i class=\"fa fa-edit\"></i> Edit
                                    </a>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"4\">no records found</td>
                            </tr>
                        {% endfor %}
                    </tbody>

                </table>

        </div>
    </div>
</div>

{% endblock %}

{% block extra_script_admin %}
{% endblock %}
", "adherant/index.html.twig", "C:\\Users\\czakaria\\lab\\projects\\soinclair\\soin_clair\\templates\\adherant\\index.html.twig");
    }
}
