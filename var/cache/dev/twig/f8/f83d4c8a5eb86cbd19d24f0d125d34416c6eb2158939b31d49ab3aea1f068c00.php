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

/* partenaire/_form.html.twig */
class __TwigTemplate_0413481e12b60c2ef5c526ee529e3a03747d13679072e86760816fb128aa3216 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partenaire/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partenaire/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
    <div class=\"my-custom-class-for-errors\">
        ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'errors');
        echo "
    </div>

<div class=\"item form-group\">
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "nom", [], "any", false, false, false, 7), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "Nom"]);
        echo "
    <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "nom", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        <span class=\"fa fa-user form-control-feedback right\" aria-hidden=\"true\"></span>
    </div>
    <small>";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12), 'help');
        echo "</small>
</div>
<div class=\"item form-group\">
    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "prenom", [], "any", false, false, false, 15), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "Prenom"]);
        echo "
    <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "prenom", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        <span class=\"fa fa-user form-control-feedback right\" aria-hidden=\"true\"></span>
    </div>
    <small>";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "prenom", [], "any", false, false, false, 20), 'help');
        echo "</small>
</div>

    <div class=\"item form-group\">
        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "entreprise", [], "any", false, false, false, 24), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "Entreprise"]);
        echo "
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "entreprise", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            <span class=\"fa fa-building form-control-feedback right\" aria-hidden=\"true\"></span>
        </div>
        <small>";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "entreprise", [], "any", false, false, false, 29), 'help');
        echo "</small>
    </div>

<div class=\"item form-group\">
    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "specialite", [], "any", false, false, false, 33), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "Spécialité"]);
        echo "
    <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "specialite", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        <span class=\"fa fa-building form-control-feedback right\" aria-hidden=\"true\"></span>
    </div>
    <small>";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "specialite", [], "any", false, false, false, 38), 'help');
        echo "</small>
</div>


<div class=\"item form-group\">
    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "adresse", [], "any", false, false, false, 43), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "adresse"]);
        echo "
    <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "adresse", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        <span class=\"fa fa-map-marker form-control-feedback right\" aria-hidden=\"true\"></span>
    </div>
    <small>";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "adresse", [], "any", false, false, false, 48), 'help');
        echo "</small>
</div>


<div class=\"item form-group\">
    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "ville", [], "any", false, false, false, 53), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "Ville"]);
        echo "
    <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "ville", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        <span class=\"fa fa-map-pin form-control-feedback right\" aria-hidden=\"true\"></span>
    </div>
    <small>";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "ville", [], "any", false, false, false, 58), 'help');
        echo "</small>
</div>

<div class=\"item form-group\">
    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "phone_mobile", [], "any", false, false, false, 62), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "Téléphone mobile"]);
        echo "
    <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "phone_mobile", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        <span class=\"fa fa-mobile-phone form-control-feedback right\" aria-hidden=\"true\"></span>
    </div>
    <small>";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "phone_mobile", [], "any", false, false, false, 67), 'help');
        echo "</small>
</div>

<div class=\"item form-group\">
    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "phone_fix", [], "any", false, false, false, 71), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "Téléphone mobile"]);
        echo "
    <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "phone_fix", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        <span class=\"fa fa-phone form-control-feedback right\" aria-hidden=\"true\"></span>
    </div>
    <small>";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "phone_fix", [], "any", false, false, false, 76), 'help');
        echo "</small>
</div>

<div class=\"item form-group\">
    ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "logo_path", [], "any", false, false, false, 80), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "BDD prestataire"]);
        echo "
    ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "logo_path", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "file"]]);
        echo "
    <small>";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "logo_path", [], "any", false, false, false, 82), 'help');
        echo "</small>
</div>

<div class=\"item form-group\">
    ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "logo", [], "any", false, false, false, 86), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "Tarifs"]);
        echo "
    ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "logo", [], "any", false, false, false, 87), 'widget', ["attr" => ["class" => "file"]]);
        echo "
    <small>";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "logo", [], "any", false, false, false, 88), 'help');
        echo "</small>
</div>

<div class=\"item form-group\">
    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "champs_supp", [], "any", false, false, false, 92), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "Champs supplémentaire"]);
        echo "
    <div class=\"col-md-6 col-sm-6  form-group \">
        ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "champs_supp", [], "any", false, false, false, 94), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
    </div>
    <small>";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "champs_supp", [], "any", false, false, false, 96), 'help');
        echo "</small>
</div>

<div class=\"item form-group\">
    ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "description_profil", [], "any", false, false, false, 100), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "Zone de Text"]);
        echo "
    <div class=\"col-md-6 col-sm-6  form-group \">
        ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "description_profil", [], "any", false, false, false, 102), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
    </div>
    <small>";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "description_profil", [], "any", false, false, false, 104), 'help');
        echo "</small>
</div>


<div class=\"item form-group\">
    ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "user", [], "any", false, false, false, 109), "email", [], "any", false, false, false, 109), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "Email"]);
        echo "
    <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
        ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "user", [], "any", false, false, false, 111), "email", [], "any", false, false, false, 111), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        <span class=\"fa fa-envelope form-control-feedback right\" aria-hidden=\"true\"></span>
    </div>
    <small>";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "user", [], "any", false, false, false, 114), "email", [], "any", false, false, false, 114), 'help');
        echo "</small>
</div>

<div class=\"item form-group\">
    ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "user", [], "any", false, false, false, 118), "username", [], "any", false, false, false, 118), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "Nom d'utilisateur"]);
        echo "
    <div class=\"col-md-6 col-sm-6  form-group\">
        ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "user", [], "any", false, false, false, 120), "username", [], "any", false, false, false, 120), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
    </div>
    <small>";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "user", [], "any", false, false, false, 122), "username", [], "any", false, false, false, 122), 'help');
        echo "</small>
</div>

<div class=\"ln_solid\"></div>
<div class=\"item form-group\">
    <div class=\"col-md-6 col-sm-6 offset-md-3\">
        <button class=\"btn btn-primary\" type=\"reset\">Reset</button>
        <button class=\"btn btn-success\">";
        // line 129
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 129, $this->source); })()), "Submit")) : ("Submit")), "html", null, true);
        echo "</button>
    </div>
</div>
";
        // line 132
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partenaire/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 132,  303 => 129,  293 => 122,  288 => 120,  283 => 118,  276 => 114,  270 => 111,  265 => 109,  257 => 104,  252 => 102,  247 => 100,  240 => 96,  235 => 94,  230 => 92,  223 => 88,  219 => 87,  215 => 86,  208 => 82,  204 => 81,  200 => 80,  193 => 76,  187 => 73,  182 => 71,  175 => 67,  169 => 64,  164 => 62,  157 => 58,  151 => 55,  146 => 53,  138 => 48,  132 => 45,  127 => 43,  119 => 38,  113 => 35,  108 => 33,  101 => 29,  95 => 26,  90 => 24,  83 => 20,  77 => 17,  72 => 15,  66 => 12,  60 => 9,  55 => 7,  48 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
    <div class=\"my-custom-class-for-errors\">
        {{ form_errors(form) }}
    </div>

<div class=\"item form-group\">
    {{ form_label(form.nom, 'Nom',{label_attr: {class: 'col-form-label col-md-3 col-sm-3 label-align'}} ) }}
    <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
        {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
        <span class=\"fa fa-user form-control-feedback right\" aria-hidden=\"true\"></span>
    </div>
    <small>{{ form_help(form.nom) }}</small>
</div>
<div class=\"item form-group\">
    {{ form_label(form.prenom, 'Prenom',{label_attr: {class: 'col-form-label col-md-3 col-sm-3 label-align'}} ) }}
    <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
        {{ form_widget(form.prenom, {'attr': {'class': 'form-control'}}) }}
        <span class=\"fa fa-user form-control-feedback right\" aria-hidden=\"true\"></span>
    </div>
    <small>{{ form_help(form.prenom) }}</small>
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
    {{ form_label(form.specialite, 'Spécialité',{label_attr: {class: 'col-form-label col-md-3 col-sm-3 label-align'}} ) }}
    <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
        {{ form_widget(form.specialite, {'attr': {'class': 'form-control'}}) }}
        <span class=\"fa fa-building form-control-feedback right\" aria-hidden=\"true\"></span>
    </div>
    <small>{{ form_help(form.specialite) }}</small>
</div>


<div class=\"item form-group\">
    {{ form_label(form.adresse, 'adresse',{label_attr: {class: 'col-form-label col-md-3 col-sm-3 label-align'}} ) }}
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
    {{ form_label(form.phone_mobile, 'Téléphone mobile',{label_attr: {class: 'col-form-label col-md-3 col-sm-3 label-align'}} ) }}
    <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
        {{ form_widget(form.phone_mobile, {'attr': {'class': 'form-control'}}) }}
        <span class=\"fa fa-mobile-phone form-control-feedback right\" aria-hidden=\"true\"></span>
    </div>
    <small>{{ form_help(form.phone_mobile) }}</small>
</div>

<div class=\"item form-group\">
    {{ form_label(form.phone_fix, 'Téléphone mobile',{label_attr: {class: 'col-form-label col-md-3 col-sm-3 label-align'}} ) }}
    <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
        {{ form_widget(form.phone_fix, {'attr': {'class': 'form-control'}}) }}
        <span class=\"fa fa-phone form-control-feedback right\" aria-hidden=\"true\"></span>
    </div>
    <small>{{ form_help(form.phone_fix) }}</small>
</div>

<div class=\"item form-group\">
    {{ form_label(form.logo_path, 'BDD prestataire',{label_attr: {class: 'col-form-label col-md-3 col-sm-3 label-align'}} ) }}
    {{ form_widget(form.logo_path, {'attr': {'class': 'file'}}) }}
    <small>{{ form_help(form.logo_path) }}</small>
</div>

<div class=\"item form-group\">
    {{ form_label(form.logo, 'Tarifs',{label_attr: {class: 'col-form-label col-md-3 col-sm-3 label-align'}} ) }}
    {{ form_widget(form.logo, {'attr': {'class': 'file'}}) }}
    <small>{{ form_help(form.logo) }}</small>
</div>

<div class=\"item form-group\">
    {{ form_label(form.champs_supp, 'Champs supplémentaire',{label_attr: {class: 'col-form-label col-md-3 col-sm-3 label-align'}} ) }}
    <div class=\"col-md-6 col-sm-6  form-group \">
        {{ form_widget(form.champs_supp, {'attr': {'class': 'form-control'}}) }}
    </div>
    <small>{{ form_help(form.champs_supp) }}</small>
</div>

<div class=\"item form-group\">
    {{ form_label(form.description_profil, 'Zone de Text',{label_attr: {class: 'col-form-label col-md-3 col-sm-3 label-align'}} ) }}
    <div class=\"col-md-6 col-sm-6  form-group \">
        {{ form_widget(form.description_profil, {'attr': {'class': 'form-control'}}) }}
    </div>
    <small>{{ form_help(form.description_profil) }}</small>
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

<div class=\"ln_solid\"></div>
<div class=\"item form-group\">
    <div class=\"col-md-6 col-sm-6 offset-md-3\">
        <button class=\"btn btn-primary\" type=\"reset\">Reset</button>
        <button class=\"btn btn-success\">{{ button_label|default('Submit') }}</button>
    </div>
</div>
{{ form_end(form) }}
", "partenaire/_form.html.twig", "C:\\Users\\czakaria\\lab\\projects\\soinclair\\soin_clair\\templates\\partenaire\\_form.html.twig");
    }
}
