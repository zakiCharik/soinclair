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

/* base.html.twig */
class __TwigTemplate_d40639b1254b5aa45299a789a62210dcd237d5b716ea7ac23ba827b82fee36a0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'menu_header' => [$this, 'block_menu_header'],
            'login_header' => [$this, 'block_login_header'],
            'sider_header' => [$this, 'block_sider_header'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,user-scalable=no\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 10
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "
    </head>
    <body>
        ";
        // line 20
        $this->displayBlock('header', $context, $blocks);
        // line 119
        echo "
        ";
        // line 120
        $this->displayBlock('body', $context, $blocks);
        // line 126
        echo "    </body>
    ";
        // line 127
        $this->displayBlock('javascripts', $context, $blocks);
        // line 132
        echo "</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "SOIN CLAIR - SOIN CLAIR";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
            <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,400&display=swap\" rel=\"stylesheet\">
            ";
        // line 14
        echo "            <link rel=\"stylesheet\" href=\"https://pro.fontawesome.com/releases/v5.10.0/css/all.css\" integrity=\"sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p\" crossorigin=\"anonymous\"/>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/static/base.css\"/>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 21
        echo "            ";
        $this->displayBlock('menu_header', $context, $blocks);
        // line 22
        echo "                <div class=\"vlt-site-wrapper__inner\">
                    <header class=\"vlt-header--style-2\">
                        <div class=\"vlt-navbar vlt-navbar--inverse-color-on-top\" >
                            <div class=\"container-fluid\">
                                <div class=\"vlt-navbar-inner\">
                                    <div class=\"vlt-navbar-inner--left\">
                                        <div class=\"d-flex align-items-center\">
                                            <a href=\"#\" class=\"vlt-menu-burger ml-2 mb-2\" style=\"width: fit-content; color: #000;\">
                                                <i class=\"fa fa-align-justify\"></i>
                                                <span  class=\"mr-1\">Menu</span></a>
                                        </div>
                                    </div>
                                    <div class=\"vlt-navbar-inner--center\">
                                        <a class=\"vlt-navbar-logo\">
                                            <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/static/logo-sc-jaune-bleu-2-1-2.png"), "html", null, true);
        echo "\" alt=\"SOIN CLAIR\" class=\"white\">
                                        </a>
                                    </div>
                                    <div class=\"vlt-navbar-inner--right\">
                                        <div>
                                            <a class=\"vlt-menu-burger-right\" href=\"#\">
                                                <span class=\"mr-1\">Connexion </span>
                                                <i class=\"fa fa-user\"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                </div>
            ";
        // line 52
        $this->displayBlock('login_header', $context, $blocks);
        // line 53
        echo "            ";
        $this->displayBlock('sider_header', $context, $blocks);
        // line 118
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_menu_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu_header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 52
    public function block_login_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login_header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 53
    public function block_sider_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sider_header"));

        // line 54
        echo "                <div class=\"vlt-aside-menu-overlay\" ></div>
                <div class=\"vlt-aside-menu-wrapper transformSider\" >
                    <div class=\"vlt-aside-menu\">
                        <div class=\"vlt-aside-menu__header\">
                            <nav class=\"vlt-aside-menu__locales\" ></nav>
                            <a href=\"#\" class=\"vlt-menu-burger vlt-menu-burger--opened\">
                                <i class=\"fa fa-times\" style=\"font-size: 35px;font-weight: 100;color: black;\"></i>
                            </a>
                        </div>
                        <nav class=\"vlt-aside-menu__navigation transformSider\"  >
                            <ul id=\"menu-menu-soin-clair\" class=\"sf-menu sf-js-enabled\">
                                <li id=\"menu-item-3720\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-3710 current_page_item menu-item-3720\">
                                    <a href=\"https://soin.cloudmeserver.info/\" aria-current=\"page\"><span>Home</span></a>
                                </li>
                                <li id=\"menu-item-2781\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2781\">
                                    <a href=\"https://soin.cloudmeserver.info/qui-sommes-nous-2/\"><span>Qui Sommes nous</span></a>
                                </li>
                                <li id=\"menu-item-3926\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-3926\">
                                    <a href=\"https://soin.cloudmeserver.info/services-soin-clair/\"><span>Nos Services</span></a>
                                </li>
                                <li id=\"menu-item-3925\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-3925\">
                                    <a href=\"https://soin.cloudmeserver.info/nos-publications/\"><span>Nos publications</span></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class=\"vlt-aside-menu-overlay-right\" style=\"display: none;\"></div>
                <div class=\"vlt-aside-menu-wrapper-right sf-js-enabled\" >
                    <div class=\"vlt-aside-menu-right\">
                        <div class=\"vlt-aside-menu__header_right\">
                            <nav class=\"vlt-aside-menu__locales_right\"></nav>
                            <a href=\"#\" class=\"vlt-menu-burger-right\">
                                <span class=\"line line-one\">
                                    <span></span>
                                </span>
                                <span class=\"line line-two\">
                                    <span></span>
                                </span>
                                <span class=\"line line-three\">
                                    <span></span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <nav class=\"vlt-aside-menu__navigation-right\" style=\"transform: translateX(100%);\">
                        <ul id=\"menu-espaces\" class=\"sf-menu\">
                            <li id=\"menu-item-2869\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2869\">
                                <a href=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espace_adherant");
        echo "\">
                                    <span>Adhérent</span>
                                </a>
                            </li>
                            <li id=\"menu-item-2870\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2870\">
                                <a href=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espace_employeur");
        echo "\">
                                    <span>Employeur</span>
                                </a>
                            </li>
                            <li id=\"menu-item-2871\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2871\">
                                <a href=\"\"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espace_partenaire");
        echo "\"><span>Partenaire</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 120
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 121
        echo "
            <div id=\"content\">
                ";
        // line 123
        $this->displayBlock('content', $context, $blocks);
        // line 124
        echo "            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 123
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 127
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 128
        echo "        ";
        // line 129
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/static/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/static/app.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  336 => 130,  331 => 129,  329 => 128,  322 => 127,  310 => 123,  302 => 124,  300 => 123,  296 => 121,  289 => 120,  276 => 112,  268 => 107,  260 => 102,  210 => 54,  203 => 53,  191 => 52,  179 => 21,  172 => 118,  169 => 53,  167 => 52,  148 => 36,  132 => 22,  129 => 21,  122 => 20,  113 => 14,  109 => 11,  102 => 10,  89 => 7,  81 => 132,  79 => 127,  76 => 126,  74 => 120,  71 => 119,  69 => 20,  64 => 17,  61 => 10,  57 => 7,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,user-scalable=no\">
        <title>{% block title %}SOIN CLAIR - SOIN CLAIR{% endblock %}</title>
        {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}
        {% block stylesheets %}
            <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
            <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,400&display=swap\" rel=\"stylesheet\">
            {#{{ encore_entry_link_tags('app') }}#}
            <link rel=\"stylesheet\" href=\"https://pro.fontawesome.com/releases/v5.10.0/css/all.css\" integrity=\"sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p\" crossorigin=\"anonymous\"/>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/static/base.css\"/>
        {% endblock %}

    </head>
    <body>
        {% block header %}
            {% block menu_header %}{% endblock %}
                <div class=\"vlt-site-wrapper__inner\">
                    <header class=\"vlt-header--style-2\">
                        <div class=\"vlt-navbar vlt-navbar--inverse-color-on-top\" >
                            <div class=\"container-fluid\">
                                <div class=\"vlt-navbar-inner\">
                                    <div class=\"vlt-navbar-inner--left\">
                                        <div class=\"d-flex align-items-center\">
                                            <a href=\"#\" class=\"vlt-menu-burger ml-2 mb-2\" style=\"width: fit-content; color: #000;\">
                                                <i class=\"fa fa-align-justify\"></i>
                                                <span  class=\"mr-1\">Menu</span></a>
                                        </div>
                                    </div>
                                    <div class=\"vlt-navbar-inner--center\">
                                        <a class=\"vlt-navbar-logo\">
                                            <img src=\"{{ asset('/img/static/logo-sc-jaune-bleu-2-1-2.png') }}\" alt=\"SOIN CLAIR\" class=\"white\">
                                        </a>
                                    </div>
                                    <div class=\"vlt-navbar-inner--right\">
                                        <div>
                                            <a class=\"vlt-menu-burger-right\" href=\"#\">
                                                <span class=\"mr-1\">Connexion </span>
                                                <i class=\"fa fa-user\"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                </div>
            {% block login_header %}{% endblock %}
            {% block sider_header %}
                <div class=\"vlt-aside-menu-overlay\" ></div>
                <div class=\"vlt-aside-menu-wrapper transformSider\" >
                    <div class=\"vlt-aside-menu\">
                        <div class=\"vlt-aside-menu__header\">
                            <nav class=\"vlt-aside-menu__locales\" ></nav>
                            <a href=\"#\" class=\"vlt-menu-burger vlt-menu-burger--opened\">
                                <i class=\"fa fa-times\" style=\"font-size: 35px;font-weight: 100;color: black;\"></i>
                            </a>
                        </div>
                        <nav class=\"vlt-aside-menu__navigation transformSider\"  >
                            <ul id=\"menu-menu-soin-clair\" class=\"sf-menu sf-js-enabled\">
                                <li id=\"menu-item-3720\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-3710 current_page_item menu-item-3720\">
                                    <a href=\"https://soin.cloudmeserver.info/\" aria-current=\"page\"><span>Home</span></a>
                                </li>
                                <li id=\"menu-item-2781\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2781\">
                                    <a href=\"https://soin.cloudmeserver.info/qui-sommes-nous-2/\"><span>Qui Sommes nous</span></a>
                                </li>
                                <li id=\"menu-item-3926\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-3926\">
                                    <a href=\"https://soin.cloudmeserver.info/services-soin-clair/\"><span>Nos Services</span></a>
                                </li>
                                <li id=\"menu-item-3925\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-3925\">
                                    <a href=\"https://soin.cloudmeserver.info/nos-publications/\"><span>Nos publications</span></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class=\"vlt-aside-menu-overlay-right\" style=\"display: none;\"></div>
                <div class=\"vlt-aside-menu-wrapper-right sf-js-enabled\" >
                    <div class=\"vlt-aside-menu-right\">
                        <div class=\"vlt-aside-menu__header_right\">
                            <nav class=\"vlt-aside-menu__locales_right\"></nav>
                            <a href=\"#\" class=\"vlt-menu-burger-right\">
                                <span class=\"line line-one\">
                                    <span></span>
                                </span>
                                <span class=\"line line-two\">
                                    <span></span>
                                </span>
                                <span class=\"line line-three\">
                                    <span></span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <nav class=\"vlt-aside-menu__navigation-right\" style=\"transform: translateX(100%);\">
                        <ul id=\"menu-espaces\" class=\"sf-menu\">
                            <li id=\"menu-item-2869\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2869\">
                                <a href=\"{{ path('espace_adherant') }}\">
                                    <span>Adhérent</span>
                                </a>
                            </li>
                            <li id=\"menu-item-2870\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2870\">
                                <a href=\"{{ path('espace_employeur') }}\">
                                    <span>Employeur</span>
                                </a>
                            </li>
                            <li id=\"menu-item-2871\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2871\">
                                <a href=\"\"{{ path('espace_partenaire') }}\"><span>Partenaire</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            {% endblock %}
        {% endblock %}

        {% block body %}

            <div id=\"content\">
                {% block content %}{% endblock %}
            </div>
        {% endblock %}
    </body>
    {% block javascripts %}
        {#{{ encore_entry_script_tags('app') }}#}
        <script src=\"{{ asset('/js/static/jquery.min.js') }}\"></script>
        <script src=\"{{ asset('/js/static/app.js') }}\"></script>
    {% endblock %}
</html>
", "base.html.twig", "C:\\Users\\czakaria\\lab\\projects\\soinclair\\soin_clair\\templates\\base.html.twig");
    }
}
