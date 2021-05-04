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

/* adherant/_form.html.twig */
class __TwigTemplate_ce84b6be8af792d8092255c0526a5a2ce1c0e6e91deea375b0b33cd728848691 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adherant/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adherant/_form.html.twig"));

        // line 1
        echo "<br/>
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start');
        echo "
    <div class=\"my-custom-class-for-errors\">
        ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'errors');
        echo "
    </div>
    <div class=\"item form-group\">
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "entreprise", [], "any", false, false, false, 7), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "Entreprise"]);
        echo "
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "entreprise", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            <span class=\"fa fa-building form-control-feedback right\" aria-hidden=\"true\"></span>
        </div>
        <small>";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "entreprise", [], "any", false, false, false, 12), 'help');
        echo "</small>
    </div>

    <div class=\"item form-group\">
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "code_client", [], "any", false, false, false, 16), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "Code client"]);
        echo "
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "code_client", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            <span class=\"fa fa-codepen form-control-feedback right\" aria-hidden=\"true\"></span>
        </div>
        <small>";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "code_client", [], "any", false, false, false, 21), 'help');
        echo "</small>
    </div>


    <div class=\"item form-group\">
        <label class=\"col-form-label col-md-3 col-sm-3 label-align\">Date d'inscription</label>
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            <input name=\"adherant[subscription_date]\" class=\"date-picker form-control\" type=\"date\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 28, $this->source); })()), "subscriptiondate", [], "any", false, false, false, 28)), "html", null, true);
        echo "\">
        </div>
    </div>

    <div class=\"item form-group\">
        <label class=\"col-form-label col-md-3 col-sm-3 label-align\">Date d'expiration</label>
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            <input name=\"adherant[expiring_date]\" class=\"date-picker form-control\" type=\"date\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 35, $this->source); })()), "expiringdate", [], "any", false, false, false, 35)), "html", null, true);
        echo "\">
        </div>
    </div>

    <div class=\"item form-group\">
        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "numero_soinclair", [], "any", false, false, false, 40), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "N° Carte Soin Clair"]);
        echo "
        <div class=\"col-md-6 col-sm-6  form-group\">
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "numero_soinclair", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <small>";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "numero_soinclair", [], "any", false, false, false, 44), 'help');
        echo "</small>
    </div>

    <div class=\"item form-group\">
        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "firstname", [], "any", false, false, false, 48), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "Nom "]);
        echo "
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "firstname", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            <span class=\"fa fa-user form-control-feedback right\" aria-hidden=\"true\"></span>
        </div>
        <small>";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "firstname", [], "any", false, false, false, 53), 'help');
        echo "</small>
    </div>

    <div class=\"item form-group\">
        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "lastname", [], "any", false, false, false, 57), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "Prénom"]);
        echo "
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "lastname", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            <span class=\"fa fa-user form-control-feedback right\" aria-hidden=\"true\"></span>
        </div>
        <small>";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "lastname", [], "any", false, false, false, 62), 'help');
        echo "</small>
    </div>

    <div class=\"item form-group\">
        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "nom_conjoint_first", [], "any", false, false, false, 66), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "Nom Conjoint 1"]);
        echo "
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "nom_conjoint_first", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            <span class=\"fa fa-female form-control-feedback right\" aria-hidden=\"true\"></span>
        </div>
        <small>";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "nom_conjoint_first", [], "any", false, false, false, 71), 'help');
        echo "</small>
    </div>
    <div class=\"item form-group\">
        ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "nom_conjoint_second", [], "any", false, false, false, 74), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "Nom Conjoint 2"]);
        echo "
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "nom_conjoint_second", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            <span class=\"fa fa-female form-control-feedback right\" aria-hidden=\"true\"></span>
        </div>
        <small>";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "nom_conjoint_second", [], "any", false, false, false, 79), 'help');
        echo "</small>
    </div>
    <div class=\"item form-group\">
        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "nbr_enfant", [], "any", false, false, false, 82), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "Nombre d'enfant"]);
        echo "
        <div class=\"col-md-6 col-sm-6  form-group \">
            ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "nbr_enfant", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <small>";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "nbr_enfant", [], "any", false, false, false, 86), 'help');
        echo "</small>
    </div>
    <div class=\"item form-group\">
        ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "cin", [], "any", false, false, false, 89), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "N° de CIN"]);
        echo "
        <div class=\"col-md-6 col-sm-6  form-group\">
            ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "cin", [], "any", false, false, false, 91), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <small>";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "cin", [], "any", false, false, false, 93), 'help');
        echo "</small>
    </div>

    <div class=\"item form-group\">
        ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "adresse", [], "any", false, false, false, 97), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "Adresse"]);
        echo "
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "adresse", [], "any", false, false, false, 99), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            <span class=\"fa fa-map-marker form-control-feedback right\" aria-hidden=\"true\"></span>
        </div>
        <small>";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "adresse", [], "any", false, false, false, 102), 'help');
        echo "</small>
    </div>

    <div class=\"item form-group\">
        ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "ville", [], "any", false, false, false, 106), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "Ville"]);
        echo "
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "ville", [], "any", false, false, false, 108), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            <span class=\"fa fa-map-pin form-control-feedback right\" aria-hidden=\"true\"></span>
        </div>
        <small>";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "ville", [], "any", false, false, false, 111), 'help');
        echo "</small>
    </div>

    <div class=\"item form-group\">
        <label class=\"col-form-label col-md-3 col-sm-3 label-align\">Date de naissance</label>
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            <input name=\"adherant[date_naissance]\" class=\"date-picker form-control\" type=\"date\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 117, $this->source); })()), "datenaissance", [], "any", false, false, false, 117)), "html", null, true);
        echo "\">
        </div>
    </div>

    <div class=\"item form-group has-feedback\">
        ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "phonenumber", [], "any", false, false, false, 122), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "N° de mobile"]);
        echo "
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "phonenumber", [], "any", false, false, false, 124), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "06 00-00-00-00"]]);
        echo "
            <span class=\"fa fa-phone form-control-feedback right\" aria-hidden=\"true\"></span>
        </div>
        <small>";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "phonenumber", [], "any", false, false, false, 127), 'help');
        echo "</small>
    </div>


    <div class=\"item form-group\">
        ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "user", [], "any", false, false, false, 132), "email", [], "any", false, false, false, 132), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "Email"]);
        echo "
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "user", [], "any", false, false, false, 134), "email", [], "any", false, false, false, 134), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            <span class=\"fa fa-envelope form-control-feedback right\" aria-hidden=\"true\"></span>
        </div>
        <small>";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "user", [], "any", false, false, false, 137), "email", [], "any", false, false, false, 137), 'help');
        echo "</small>
    </div>

    <div class=\"item form-group\">
        ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "user", [], "any", false, false, false, 141), "username", [], "any", false, false, false, 141), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "Nom d'utilisateur"]);
        echo "
        <div class=\"col-md-6 col-sm-6  form-group\">
            ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "user", [], "any", false, false, false, 143), "username", [], "any", false, false, false, 143), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <small>";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "user", [], "any", false, false, false, 145), "username", [], "any", false, false, false, 145), 'help');
        echo "</small>
    </div>
    <div class=\"item form-group\">
        <label class=\"col-form-label col-md-3 col-sm-3 label-align\">Mot de passe par défaut</label>
        <div class=\"col-md-6 col-sm-6  form-group\">
            <input name=\"adherant[user][password]\" class=\"form-control\" type=\"password\" value=\"";
        // line 150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 150, $this->source); })()), "user", [], "any", false, false, false, 150), "password", [], "any", false, false, false, 150), "html", null, true);
        echo "\">
        </div>
    </div>
    <div class=\"item form-group\">
        ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "situation_pro", [], "any", false, false, false, 154), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "Situation professionelle"]);
        echo "
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), "situation_pro", [], "any", false, false, false, 156), 'widget', ["attr" => ["class" => "select2_single form-control"]]);
        echo "
        </div>
        <small>";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "situation_pro", [], "any", false, false, false, 158), 'help');
        echo "</small>
    </div>

    <div class=\"item form-group\">
        ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "category_sociopro", [], "any", false, false, false, 162), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "Catégorie socioprofessionelle"]);
        echo "
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            ";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "category_sociopro", [], "any", false, false, false, 164), 'widget', ["attr" => ["class" => "select2_single form-control"]]);
        echo "
        </div>
        <small>";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "category_sociopro", [], "any", false, false, false, 166), 'help');
        echo "</small>
    </div>


    <div class=\"item form-group\">
        ";
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "maladie_chroni", [], "any", false, false, false, 171), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "Maladie chronique"]);
        echo "
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            ";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "maladie_chroni", [], "any", false, false, false, 173), 'widget', ["attr" => ["class" => "select2_single form-control"]]);
        echo "
        </div>
        <small>";
        // line 175
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 175, $this->source); })()), "maladie_chroni", [], "any", false, false, false, 175), 'help');
        echo "</small>
    </div>
    <div class=\"item form-group\">
        ";
        // line 178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "formule_soin_clair", [], "any", false, false, false, 178), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "Formule SoinClair"]);
        echo "
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            ";
        // line 180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "formule_soin_clair", [], "any", false, false, false, 180), 'widget', ["attr" => ["class" => "select2_single form-control"]]);
        echo "
        </div>
        <small>";
        // line 182
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), "formule_soin_clair", [], "any", false, false, false, 182), 'help');
        echo "</small>
    </div>


    <div class=\"item form-group\">
        ";
        // line 187
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "supp_one", [], "any", false, false, false, 187), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "Champs supplémentaire 1"]);
        echo "
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            ";
        // line 189
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 189, $this->source); })()), "supp_one", [], "any", false, false, false, 189), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <small>";
        // line 191
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "supp_one", [], "any", false, false, false, 191), 'help');
        echo "</small>
    </div>


    <div class=\"item form-group\">
        ";
        // line 196
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "supp_two", [], "any", false, false, false, 196), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "Champs supplémentaire 2"]);
        echo "
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            ";
        // line 198
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), "supp_two", [], "any", false, false, false, 198), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <small>";
        // line 200
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), "supp_two", [], "any", false, false, false, 200), 'help');
        echo "</small>
    </div>


    <div class=\"item form-group\">
        ";
        // line 205
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), "supp_three", [], "any", false, false, false, 205), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "Champs supplémentaire 3"]);
        echo "
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            ";
        // line 207
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 207, $this->source); })()), "supp_three", [], "any", false, false, false, 207), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <small>";
        // line 209
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 209, $this->source); })()), "supp_three", [], "any", false, false, false, 209), 'help');
        echo "</small>
    </div>


    <div class=\"item form-group\">
        ";
        // line 214
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 214, $this->source); })()), "cartesoinclair", [], "any", false, false, false, 214), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "N° Carte Soin Clair"]);
        echo "
        <div class=\"col-md-6 col-sm-6  form-group\">
            ";
        // line 216
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 216, $this->source); })()), "cartesoinclair", [], "any", false, false, false, 216), 'widget', ["attr" => ["class" => "file"]]);
        echo "
        </div>
        <small>";
        // line 218
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 218, $this->source); })()), "cartesoinclair", [], "any", false, false, false, 218), 'help');
        echo "</small>
    </div>


    <div class=\"ln_solid\"></div>
    <div class=\"item form-group\">
        <div class=\"col-md-6 col-sm-6 offset-md-3\">
            <button class=\"btn btn-primary\" type=\"reset\">Reset</button>
            <button class=\"btn btn-success\">";
        // line 226
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 226, $this->source); })()), "Submit")) : ("Submit")), "html", null, true);
        echo "</button>
        </div>
    </div>
";
        // line 229
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 229, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "adherant/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  492 => 229,  486 => 226,  475 => 218,  470 => 216,  465 => 214,  457 => 209,  452 => 207,  447 => 205,  439 => 200,  434 => 198,  429 => 196,  421 => 191,  416 => 189,  411 => 187,  403 => 182,  398 => 180,  393 => 178,  387 => 175,  382 => 173,  377 => 171,  369 => 166,  364 => 164,  359 => 162,  352 => 158,  347 => 156,  342 => 154,  335 => 150,  327 => 145,  322 => 143,  317 => 141,  310 => 137,  304 => 134,  299 => 132,  291 => 127,  285 => 124,  280 => 122,  272 => 117,  263 => 111,  257 => 108,  252 => 106,  245 => 102,  239 => 99,  234 => 97,  227 => 93,  222 => 91,  217 => 89,  211 => 86,  206 => 84,  201 => 82,  195 => 79,  189 => 76,  184 => 74,  178 => 71,  172 => 68,  167 => 66,  160 => 62,  154 => 59,  149 => 57,  142 => 53,  136 => 50,  131 => 48,  124 => 44,  119 => 42,  114 => 40,  106 => 35,  96 => 28,  86 => 21,  80 => 18,  75 => 16,  68 => 12,  62 => 9,  57 => 7,  51 => 4,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<br/>
{{ form_start(form) }}
    <div class=\"my-custom-class-for-errors\">
        {{ form_errors(form) }}
    </div>
    <div class=\"item form-group\">
        {{ form_label(form.entreprise, 'Entreprise',{label_attr: {class: 'col-form-label col-md-3 col-sm-3 label-align'}} ) }}
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            {{ form_widget(form.entreprise, {'attr': {'class': 'form-control'}}) }}
            <span class=\"fa fa-building form-control-feedback right\" aria-hidden=\"true\"></span>
        </div>
        <small>{{ form_help(form.entreprise) }}</small>
    </div>

    <div class=\"item form-group\">
        {{ form_label(form.code_client, 'Code client',{label_attr: {class: 'col-form-label col-md-3 col-sm-3 label-align'}} ) }}
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            {{ form_widget(form.code_client, {'attr': {'class': 'form-control'}}) }}
            <span class=\"fa fa-codepen form-control-feedback right\" aria-hidden=\"true\"></span>
        </div>
        <small>{{ form_help(form.code_client) }}</small>
    </div>


    <div class=\"item form-group\">
        <label class=\"col-form-label col-md-3 col-sm-3 label-align\">Date d'inscription</label>
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            <input name=\"adherant[subscription_date]\" class=\"date-picker form-control\" type=\"date\" value=\"{{ adherant.subscriptiondate | date }}\">
        </div>
    </div>

    <div class=\"item form-group\">
        <label class=\"col-form-label col-md-3 col-sm-3 label-align\">Date d'expiration</label>
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            <input name=\"adherant[expiring_date]\" class=\"date-picker form-control\" type=\"date\" value=\"{{ adherant.expiringdate | date }}\">
        </div>
    </div>

    <div class=\"item form-group\">
        {{ form_label(form.numero_soinclair, 'N° Carte Soin Clair',{label_attr: {class: 'col-form-label col-md-3 col-sm-3 label-align'}} ) }}
        <div class=\"col-md-6 col-sm-6  form-group\">
            {{ form_widget(form.numero_soinclair, {'attr': {'class': 'form-control'}}) }}
        </div>
        <small>{{ form_help(form.numero_soinclair) }}</small>
    </div>

    <div class=\"item form-group\">
        {{ form_label(form.firstname, 'Nom ',{label_attr: {class: 'col-form-label col-md-3 col-sm-3 label-align'}} ) }}
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            {{ form_widget(form.firstname, {'attr': {'class': 'form-control'}}) }}
            <span class=\"fa fa-user form-control-feedback right\" aria-hidden=\"true\"></span>
        </div>
        <small>{{ form_help(form.firstname) }}</small>
    </div>

    <div class=\"item form-group\">
        {{ form_label(form.lastname, 'Prénom',{label_attr: {class: 'col-form-label col-md-3 col-sm-3 label-align'}} ) }}
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            {{ form_widget(form.lastname, {'attr': {'class': 'form-control'}}) }}
            <span class=\"fa fa-user form-control-feedback right\" aria-hidden=\"true\"></span>
        </div>
        <small>{{ form_help(form.lastname) }}</small>
    </div>

    <div class=\"item form-group\">
        {{ form_label(form.nom_conjoint_first, 'Nom Conjoint 1',{label_attr: {class: 'col-form-label col-md-3 col-sm-3 label-align'}} ) }}
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            {{ form_widget(form.nom_conjoint_first, {'attr': {'class': 'form-control'}}) }}
            <span class=\"fa fa-female form-control-feedback right\" aria-hidden=\"true\"></span>
        </div>
        <small>{{ form_help(form.nom_conjoint_first) }}</small>
    </div>
    <div class=\"item form-group\">
        {{ form_label(form.nom_conjoint_second, 'Nom Conjoint 2',{label_attr: {class: 'col-form-label col-md-3 col-sm-3 label-align'}} ) }}
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            {{ form_widget(form.nom_conjoint_second, {'attr': {'class': 'form-control'}}) }}
            <span class=\"fa fa-female form-control-feedback right\" aria-hidden=\"true\"></span>
        </div>
        <small>{{ form_help(form.nom_conjoint_second) }}</small>
    </div>
    <div class=\"item form-group\">
        {{ form_label(form.nbr_enfant, 'Nombre d\\'enfant',{label_attr: {class: 'col-form-label col-md-3 col-sm-3 label-align'}} ) }}
        <div class=\"col-md-6 col-sm-6  form-group \">
            {{ form_widget(form.nbr_enfant, {'attr': {'class': 'form-control'}}) }}
        </div>
        <small>{{ form_help(form.nbr_enfant) }}</small>
    </div>
    <div class=\"item form-group\">
        {{ form_label(form.cin, 'N° de CIN',{label_attr: {class: 'col-form-label col-md-3 col-sm-3 label-align'}} ) }}
        <div class=\"col-md-6 col-sm-6  form-group\">
            {{ form_widget(form.cin, {'attr': {'class': 'form-control'}}) }}
        </div>
        <small>{{ form_help(form.cin) }}</small>
    </div>

    <div class=\"item form-group\">
        {{ form_label(form.adresse, 'Adresse',{label_attr: {class: 'col-form-label col-md-3 col-sm-3 label-align'}} ) }}
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            {{ form_widget(form.adresse, {'attr': {'class': 'form-control'}}) }}
            <span class=\"fa fa-map-marker form-control-feedback right\" aria-hidden=\"true\"></span>
        </div>
        <small>{{ form_help(form.adresse) }}</small>
    </div>

    <div class=\"item form-group\">
        {{ form_label(form.ville, 'Ville',{label_attr: {class: 'col-form-label col-md-3 col-sm-3 label-align'}} ) }}
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            {{ form_widget(form.ville, {'attr': {'class': 'form-control'}}) }}
            <span class=\"fa fa-map-pin form-control-feedback right\" aria-hidden=\"true\"></span>
        </div>
        <small>{{ form_help(form.ville) }}</small>
    </div>

    <div class=\"item form-group\">
        <label class=\"col-form-label col-md-3 col-sm-3 label-align\">Date de naissance</label>
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            <input name=\"adherant[date_naissance]\" class=\"date-picker form-control\" type=\"date\" value=\"{{ adherant.datenaissance | date }}\">
        </div>
    </div>

    <div class=\"item form-group has-feedback\">
        {{ form_label(form.phonenumber, 'N° de mobile',{label_attr: {class: 'col-form-label col-md-3 col-sm-3 label-align'}  } ) }}
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            {{ form_widget(form.phonenumber, {'attr': {'class': 'form-control','placeholder':'06 00-00-00-00' }}) }}
            <span class=\"fa fa-phone form-control-feedback right\" aria-hidden=\"true\"></span>
        </div>
        <small>{{ form_help(form.phonenumber) }}</small>
    </div>


    <div class=\"item form-group\">
        {{ form_label(form.user.email, 'Email',{label_attr: {class: 'col-form-label col-md-3 col-sm-3 label-align'}} ) }}
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            {{ form_widget(form.user.email, {'attr': {'class': 'form-control'}}) }}
            <span class=\"fa fa-envelope form-control-feedback right\" aria-hidden=\"true\"></span>
        </div>
        <small>{{ form_help(form.user.email) }}</small>
    </div>

    <div class=\"item form-group\">
        {{ form_label(form.user.username, 'Nom d\\'utilisateur',{label_attr: {class: 'col-form-label col-md-3 col-sm-3 label-align'}} ) }}
        <div class=\"col-md-6 col-sm-6  form-group\">
            {{ form_widget(form.user.username, {'attr': {'class': 'form-control' }}) }}
        </div>
        <small>{{ form_help(form.user.username) }}</small>
    </div>
    <div class=\"item form-group\">
        <label class=\"col-form-label col-md-3 col-sm-3 label-align\">Mot de passe par défaut</label>
        <div class=\"col-md-6 col-sm-6  form-group\">
            <input name=\"adherant[user][password]\" class=\"form-control\" type=\"password\" value=\"{{ adherant.user.password }}\">
        </div>
    </div>
    <div class=\"item form-group\">
        {{ form_label(form.situation_pro, 'Situation professionelle',{label_attr: {class: 'col-form-label col-md-3 col-sm-3 label-align'}} ) }}
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            {{ form_widget(form.situation_pro, {'attr': {'class': 'select2_single form-control'}}) }}
        </div>
        <small>{{ form_help(form.situation_pro) }}</small>
    </div>

    <div class=\"item form-group\">
        {{ form_label(form.category_sociopro, 'Catégorie socioprofessionelle',{label_attr: {class: 'col-form-label col-md-3 col-sm-3 label-align'}} ) }}
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            {{ form_widget(form.category_sociopro, {'attr': {'class': 'select2_single form-control'}}) }}
        </div>
        <small>{{ form_help(form.category_sociopro) }}</small>
    </div>


    <div class=\"item form-group\">
        {{ form_label(form.maladie_chroni, 'Maladie chronique',{label_attr: {class: 'col-form-label col-md-3 col-sm-3 label-align'}} ) }}
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            {{ form_widget(form.maladie_chroni, {'attr': {'class': 'select2_single form-control'}}) }}
        </div>
        <small>{{ form_help(form.maladie_chroni) }}</small>
    </div>
    <div class=\"item form-group\">
        {{ form_label(form.formule_soin_clair, 'Formule SoinClair',{label_attr: {class: 'col-form-label col-md-3 col-sm-3 label-align'}} ) }}
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            {{ form_widget(form.formule_soin_clair, {'attr': {'class': 'select2_single form-control'}}) }}
        </div>
        <small>{{ form_help(form.formule_soin_clair) }}</small>
    </div>


    <div class=\"item form-group\">
        {{ form_label(form.supp_one, 'Champs supplémentaire 1',{label_attr: {class: 'col-form-label col-md-3 col-sm-3 label-align'}} ) }}
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            {{ form_widget(form.supp_one, {'attr': {'class': 'form-control' }}) }}
        </div>
        <small>{{ form_help(form.supp_one) }}</small>
    </div>


    <div class=\"item form-group\">
        {{ form_label(form.supp_two, 'Champs supplémentaire 2',{label_attr: {class: 'col-form-label col-md-3 col-sm-3 label-align'}} ) }}
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            {{ form_widget(form.supp_two, {'attr': {'class': 'form-control' }}) }}
        </div>
        <small>{{ form_help(form.supp_two) }}</small>
    </div>


    <div class=\"item form-group\">
        {{ form_label(form.supp_three, 'Champs supplémentaire 3',{label_attr: {class: 'col-form-label col-md-3 col-sm-3 label-align'}} ) }}
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            {{ form_widget(form.supp_three, {'attr': {'class': 'form-control' }}) }}
        </div>
        <small>{{ form_help(form.supp_three) }}</small>
    </div>


    <div class=\"item form-group\">
        {{ form_label(form.cartesoinclair, 'N° Carte Soin Clair',{label_attr: {class: 'col-form-label col-md-3 col-sm-3 label-align'}} ) }}
        <div class=\"col-md-6 col-sm-6  form-group\">
            {{ form_widget(form.cartesoinclair, {'attr': {'class': 'file'}}) }}
        </div>
        <small>{{ form_help(form.cartesoinclair) }}</small>
    </div>


    <div class=\"ln_solid\"></div>
    <div class=\"item form-group\">
        <div class=\"col-md-6 col-sm-6 offset-md-3\">
            <button class=\"btn btn-primary\" type=\"reset\">Reset</button>
            <button class=\"btn btn-success\">{{ button_label|default('Submit') }}</button>
        </div>
    </div>
{{ form_end(form) }}
", "adherant/_form.html.twig", "C:\\Users\\czakaria\\lab\\projects\\soinclair\\soin_clair\\templates\\adherant\\_form.html.twig");
    }
}
