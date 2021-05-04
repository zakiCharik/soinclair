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

/* partenaire/show.html.twig */
class __TwigTemplate_6fa4b1148e258db4c9fe34f5cf80dedbce4494324a93015051ac1fcdbf9db882 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partenaire/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partenaire/show.html.twig"));

        $this->parent = $this->loadTemplate("/admin/index.html.twig", "partenaire/show.html.twig", 1);
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

        echo "Partenaire show";
        
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

        echo "Espace Partenaire accès administrateur";
        
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partenaire_index");
        echo "\"  class=\"btn btn-app\">
            <i class=\"fa fa-list\"></i>back to list
        </a>

        <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partenaire_new");
        echo "\"  class=\"btn btn-app\">
            <i class=\"fa fa-save\"></i> Nouveau
        </a>

        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partenaire_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new RuntimeError('Variable "partenaire" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30)]), "html", null, true);
        echo "\"  class=\"btn btn-app\">
            <i class=\"fa fa-edit\"></i>edit
        </a>

        ";
        // line 34
        echo twig_include($this->env, $context, "partenaire/_delete_form.html.twig");
        echo "

    </div>
</div>
<div class=\"x_panel\">
    <div class=\"x_title\">
        <h2>Partenaire - <small>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new RuntimeError('Variable "partenaire" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "username", [], "any", false, false, false, 40), "html", null, true);
        echo "</small> </h2>
        <ul class=\"nav navbar-right panel_toolbox\">
            <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
            </li>
            <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
            </li>
        </ul>
        <div class=\"clearfix\"></div>
    </div>
    <div class=\"x_content\">

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Nom & Prénom</th>
                <td>";
        // line 55
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new RuntimeError('Variable "partenaire" does not exist.', 55, $this->source); })()), "nom", [], "any", false, false, false, 55) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new RuntimeError('Variable "partenaire" does not exist.', 55, $this->source); })()), "prenom", [], "any", false, false, false, 55)), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Entreprise</th>
                <td>";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new RuntimeError('Variable "partenaire" does not exist.', 59, $this->source); })()), "entreprise", [], "any", false, false, false, 59), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Specialite</th>
                <td>";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new RuntimeError('Variable "partenaire" does not exist.', 63, $this->source); })()), "specialite", [], "any", false, false, false, 63), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new RuntimeError('Variable "partenaire" does not exist.', 67, $this->source); })()), "adresse", [], "any", false, false, false, 67), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new RuntimeError('Variable "partenaire" does not exist.', 71, $this->source); })()), "ville", [], "any", false, false, false, 71), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description profil</th>
                <td>";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new RuntimeError('Variable "partenaire" does not exist.', 75, $this->source); })()), "descriptionProfil", [], "any", false, false, false, 75), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tarifs</th>
                <td>";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new RuntimeError('Variable "partenaire" does not exist.', 79, $this->source); })()), "logo", [], "any", false, false, false, 79), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>BDD Prestataire</th>
                <td>";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new RuntimeError('Variable "partenaire" does not exist.', 83, $this->source); })()), "logoPath", [], "any", false, false, false, 83), "html", null, true);
        echo "</td>
            </tr>


        </tbody>
    </table>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "partenaire/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 83,  214 => 79,  207 => 75,  200 => 71,  193 => 67,  186 => 63,  179 => 59,  172 => 55,  154 => 40,  145 => 34,  138 => 30,  131 => 26,  124 => 22,  108 => 8,  98 => 7,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '/admin/index.html.twig' %}

{% block title_admin %}Partenaire show{% endblock %}
{% block title_page_admin %}Espace Partenaire accès administrateur{% endblock %}


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
        <a href=\"{{ path('partenaire_index') }}\"  class=\"btn btn-app\">
            <i class=\"fa fa-list\"></i>back to list
        </a>

        <a href=\"{{ path('partenaire_new') }}\"  class=\"btn btn-app\">
            <i class=\"fa fa-save\"></i> Nouveau
        </a>

        <a href=\"{{ path('partenaire_edit', {'id': partenaire.id}) }}\"  class=\"btn btn-app\">
            <i class=\"fa fa-edit\"></i>edit
        </a>

        {{ include('partenaire/_delete_form.html.twig') }}

    </div>
</div>
<div class=\"x_panel\">
    <div class=\"x_title\">
        <h2>Partenaire - <small>{{ partenaire.user.username }}</small> </h2>
        <ul class=\"nav navbar-right panel_toolbox\">
            <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
            </li>
            <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
            </li>
        </ul>
        <div class=\"clearfix\"></div>
    </div>
    <div class=\"x_content\">

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Nom & Prénom</th>
                <td>{{ partenaire.nom ~ ' ' ~ partenaire.prenom }}</td>
            </tr>
            <tr>
                <th>Entreprise</th>
                <td>{{ partenaire.entreprise }}</td>
            </tr>
            <tr>
                <th>Specialite</th>
                <td>{{ partenaire.specialite }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ partenaire.adresse }}</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>{{ partenaire.ville }}</td>
            </tr>
            <tr>
                <th>Description profil</th>
                <td>{{ partenaire.descriptionProfil }}</td>
            </tr>
            <tr>
                <th>Tarifs</th>
                <td>{{ partenaire.logo }}</td>
            </tr>
            <tr>
                <th>BDD Prestataire</th>
                <td>{{ partenaire.logoPath }}</td>
            </tr>


        </tbody>
    </table>
    </div>
</div>
{% endblock %}
", "partenaire/show.html.twig", "C:\\Users\\czakaria\\lab\\projects\\soinclair\\soin_clair\\templates\\partenaire\\show.html.twig");
    }
}
