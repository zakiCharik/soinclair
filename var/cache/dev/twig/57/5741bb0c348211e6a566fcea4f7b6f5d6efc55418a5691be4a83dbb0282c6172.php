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

/* employeur/_form.html.twig */
class __TwigTemplate_c1ab186eaf1101f5c8a40f0453d5184aa489221ade11e27fc091c6a11b7f66a0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employeur/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employeur/_form.html.twig"));

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
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "entreprise", [], "any", false, false, false, 8), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "Entreprise"]);
        echo "
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "entreprise", [], "any", false, false, false, 10), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            <span class=\"fa fa-building form-control-feedback right\" aria-hidden=\"true\"></span>
        </div>
        <small>";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "entreprise", [], "any", false, false, false, 13), 'help');
        echo "</small>
    </div>

    <div class=\"item form-group\">
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "activity", [], "any", false, false, false, 17), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "Activité"]);
        echo "
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "activity", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            <span class=\"fa fa-building form-control-feedback right\" aria-hidden=\"true\"></span>
        </div>
        <small>";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "activity", [], "any", false, false, false, 22), 'help');
        echo "</small>
    </div>

    <div class=\"item form-group\">
        <label class=\"col-form-label col-md-3 col-sm-3 label-align\">Date d'inscription</label>
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            <input name=\"employeur[subscription_date]\" class=\"date-picker form-control\" type=\"date\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employeur"]) || array_key_exists("employeur", $context) ? $context["employeur"] : (function () { throw new RuntimeError('Variable "employeur" does not exist.', 28, $this->source); })()), "subscriptiondate", [], "any", false, false, false, 28)), "html", null, true);
        echo "\">
        </div>
    </div>

    <div class=\"item form-group\">
        <label class=\"col-form-label col-md-3 col-sm-3 label-align\">Date d'expiration</label>
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            <input name=\"employeur[expiring_date]\" class=\"date-picker form-control\" type=\"date\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employeur"]) || array_key_exists("employeur", $context) ? $context["employeur"] : (function () { throw new RuntimeError('Variable "employeur" does not exist.', 35, $this->source); })()), "expiringdate", [], "any", false, false, false, 35)), "html", null, true);
        echo "\">
        </div>
    </div>

    <div class=\"item form-group\">
        <label class=\"col-form-label col-md-3 col-sm-3 label-align\">Mot de passe</label>
        <div class=\"col-md-6 col-sm-6  form-group\">
            <input name=\"employeur[password]\" class=\"form-control\" type=\"password\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employeur"]) || array_key_exists("employeur", $context) ? $context["employeur"] : (function () { throw new RuntimeError('Variable "employeur" does not exist.', 42, $this->source); })()), "password", [], "any", false, false, false, 42), "html", null, true);
        echo "\">
        </div>
    </div>

    <div class=\"item form-group\">
        <label class=\"col-form-label col-md-3 col-sm-3 label-align\">Confirmer le mot de passe</label>
        <div class=\"col-md-6 col-sm-6  form-group\">
            <input name=\"employeur[confirmed_password]\" class=\"form-control\" type=\"password\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employeur"]) || array_key_exists("employeur", $context) ? $context["employeur"] : (function () { throw new RuntimeError('Variable "employeur" does not exist.', 49, $this->source); })()), "confirmedpassword", [], "any", false, false, false, 49), "html", null, true);
        echo "\">
        </div>
    </div>

    <div class=\"item form-group\">
        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "database_employees", [], "any", false, false, false, 54), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "Fichier employés"]);
        echo "
        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "database_employees", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "file"]]);
        echo "
        <small>";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "database_employees", [], "any", false, false, false, 56), 'help');
        echo "</small>
    </div>

    <div class=\"item form-group\">
        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "logo", [], "any", false, false, false, 60), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "Logo"]);
        echo "
        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "logo", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "file"]]);
        echo "
        <small>";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "logo", [], "any", false, false, false, 62), 'help');
        echo "</small>
    </div>

    <div class=\"item form-group\">
        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "email", [], "any", false, false, false, 66), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "Email"]);
        echo "
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "email", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            <span class=\"fa fa-envelope form-control-feedback right\" aria-hidden=\"true\"></span>
        </div>
        <small>";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71), "email", [], "any", false, false, false, 71), 'help');
        echo "</small>
    </div>

    <div class=\"item form-group\">
        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "username", [], "any", false, false, false, 75), 'label', ["label_attr" => ["class" => "col-form-label col-md-3 col-sm-3 label-align"], "label" => "Nom d'utilisateur"]);
        echo "
        <div class=\"col-md-6 col-sm-6  form-group\">
            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "username", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <small>";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79), "username", [], "any", false, false, false, 79), 'help');
        echo "</small>
    </div>

    <div class=\"ln_solid\"></div>
    <div class=\"item form-group\">
        <div class=\"col-md-6 col-sm-6 offset-md-3\">
            <button class=\"btn btn-primary\" type=\"reset\">Reset</button>
            <button class=\"btn btn-success\">";
        // line 86
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 86, $this->source); })()), "Submit")) : ("Submit")), "html", null, true);
        echo "</button>
        </div>
    </div>

";
        // line 90
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "employeur/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 90,  202 => 86,  192 => 79,  187 => 77,  182 => 75,  175 => 71,  169 => 68,  164 => 66,  157 => 62,  153 => 61,  149 => 60,  142 => 56,  138 => 55,  134 => 54,  126 => 49,  116 => 42,  106 => 35,  96 => 28,  87 => 22,  81 => 19,  76 => 17,  69 => 13,  63 => 10,  58 => 8,  51 => 4,  46 => 2,  43 => 1,);
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
        {{ form_label(form.activity, 'Activité',{label_attr: {class: 'col-form-label col-md-3 col-sm-3 label-align'}} ) }}
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            {{ form_widget(form.activity, {'attr': {'class': 'form-control'}}) }}
            <span class=\"fa fa-building form-control-feedback right\" aria-hidden=\"true\"></span>
        </div>
        <small>{{ form_help(form.activity) }}</small>
    </div>

    <div class=\"item form-group\">
        <label class=\"col-form-label col-md-3 col-sm-3 label-align\">Date d'inscription</label>
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            <input name=\"employeur[subscription_date]\" class=\"date-picker form-control\" type=\"date\" value=\"{{ employeur.subscriptiondate | date }}\">
        </div>
    </div>

    <div class=\"item form-group\">
        <label class=\"col-form-label col-md-3 col-sm-3 label-align\">Date d'expiration</label>
        <div class=\"col-md-6 col-sm-6  form-group has-feedback\">
            <input name=\"employeur[expiring_date]\" class=\"date-picker form-control\" type=\"date\" value=\"{{ employeur.expiringdate | date }}\">
        </div>
    </div>

    <div class=\"item form-group\">
        <label class=\"col-form-label col-md-3 col-sm-3 label-align\">Mot de passe</label>
        <div class=\"col-md-6 col-sm-6  form-group\">
            <input name=\"employeur[password]\" class=\"form-control\" type=\"password\" value=\"{{ employeur.password }}\">
        </div>
    </div>

    <div class=\"item form-group\">
        <label class=\"col-form-label col-md-3 col-sm-3 label-align\">Confirmer le mot de passe</label>
        <div class=\"col-md-6 col-sm-6  form-group\">
            <input name=\"employeur[confirmed_password]\" class=\"form-control\" type=\"password\" value=\"{{ employeur.confirmedpassword }}\">
        </div>
    </div>

    <div class=\"item form-group\">
        {{ form_label(form.database_employees, 'Fichier employés',{label_attr: {class: 'col-form-label col-md-3 col-sm-3 label-align'}} ) }}
        {{ form_widget(form.database_employees, {'attr': {'class': 'file'}}) }}
        <small>{{ form_help(form.database_employees) }}</small>
    </div>

    <div class=\"item form-group\">
        {{ form_label(form.logo, 'Logo',{label_attr: {class: 'col-form-label col-md-3 col-sm-3 label-align'}} ) }}
        {{ form_widget(form.logo, {'attr': {'class': 'file'}}) }}
        <small>{{ form_help(form.logo) }}</small>
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
", "employeur/_form.html.twig", "C:\\Users\\czakaria\\lab\\projects\\soinclair\\soin_clair\\templates\\employeur\\_form.html.twig");
    }
}
