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
class __TwigTemplate_ee822e1e8e7b60c106d7e66d1c80dae9983d2a01eca79b305df0e419e859d94a extends \Twig\Template
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
            'js_googlemap' => [$this, 'block_js_googlemap'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'menu_header' => [$this, 'block_menu_header'],
            'login_header' => [$this, 'block_login_header'],
            'sider_header' => [$this, 'block_sider_header'],
            'menu_espace' => [$this, 'block_menu_espace'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
            'map_javascript' => [$this, 'block_map_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html >
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
        $this->displayBlock('js_googlemap', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "        ";
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        // line 30
        echo "
    </head>
    <body >
         <div class=\"container-fluid \" style=\"padding: 0px; margin: 0px;\">
             ";
        // line 34
        $this->displayBlock('header', $context, $blocks);
        // line 54
        echo "
             <div class=\"main\">
                 ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 229
        echo "
             </div>

                    ";
        // line 232
        $this->displayBlock('menu_header', $context, $blocks);
        // line 233
        echo "                    ";
        $this->displayBlock('login_header', $context, $blocks);
        // line 234
        echo "
                    ";
        // line 235
        $this->displayBlock('sider_header', $context, $blocks);
        // line 292
        echo "
                ";
        // line 293
        $this->displayBlock('body', $context, $blocks);
        // line 484
        echo "                ";
        $this->displayBlock('footer', $context, $blocks);
        // line 544
        echo "
        </div>
    </body>

    ";
        // line 548
        $this->displayBlock('javascripts', $context, $blocks);
        // line 652
        echo "    ";
        $this->displayBlock('map_javascript', $context, $blocks);
        // line 664
        echo "</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "SOIN CLAIR - SOIN CLAIR";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_js_googlemap($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js_googlemap"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js_googlemap"));

        // line 11
        echo "            <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.css\"
                  integrity=\"sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==\"
                  crossorigin=\"\"/>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/static/base.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

            <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,400&display=swap\" rel=\"stylesheet\">
            <!-- CSS only -->
            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\" crossorigin=\"anonymous\">

            <!-- FontAwsome -->
            <script src=\"https://kit.fontawesome.com/4475760e8d.js\" crossorigin=\"anonymous\"></script>
            <!--Fonts -->
            <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
            <link href=\"https://fonts.googleapis.com/css2?family=Teko&display=swap\" rel=\"stylesheet\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        // line 29
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 35
        echo "                 <header>
                     <div class=\"row align-items-center \">
                         <div class=\"item-header right col-md-2 col-sm-6\">
                             <a>
                                 <i class=\"fa fa-list\"></i>  Menu</a>
                         </div>
                         <div class=\"logo-center  col-md-8 col-sm-6\">
                             <a href=\"#\" class=\"vertical-brand\"><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/static/logo-sc-jaune-bleu-2-1-2.png"), "html", null, true);
        echo "\" alt=\"SOIN CLAIR\" class=\"brand-image\"></a>
                         </div>
                         <div class=\" item-header left  col-md-2 col-sm-6\">
                             ";
        // line 45
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45))) {
            // line 46
            echo "                                 <a > Connexion <i class=\"fa fa-user\"> </i></a>
                             ";
        } else {
            // line 48
            echo "                                 <a > ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48), "username", [], "any", false, false, false, 48), "html", null, true);
            echo "</a><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"> <i class=\"fa fa-user\"> </i></a>
                            ";
        }
        // line 50
        echo "                         </div>
                     </div>
                 </header>
             ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 57
        echo "
                     <div class=\"row align-items-start navigation-to-right\" id=\"_container-flex\">
                         <div class=\"p-3 homepage-nav px-xl-0 col-md-12 col-sm-6\" id=\"_container-accordion\">
                             <div class=\"homepage-nav-content\" style=\"padding-top: 100px;\">
                                 <p class=\"header-nav\">Découvrez nos services</p>
                                 <div class=\"\">
                                     <div class=\"nav flex-column nav-pills\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\" style=\"padding-bottom: 100px;\">
                                    <span class=\"accordi nav-link marging-item-nav\" id=\"v-pills-1-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-1\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-home\" aria-selected=\"true\">
                                        Optimiser mes dépenses de santé
                                    </span>
                                         <span class=\"accordi nav-link marging-item-nav\" id=\"v-pills-2-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-2\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-profile\" aria-selected=\"false\">
                                        Mieux comprendre mon assurance maladie
                                    </span>
                                         <span class=\"accordi nav-link marging-item-nav\" id=\"v-pills-3-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-3\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-messages\" aria-selected=\"false\">
                                        Analyser mon devis
                                    </span>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class=\"fade\" id=\"_accordion-cible\" style=\"display: none;\">
                             <div class=\"tab-content\" id=\"v-pills-tabContent\">
                                 <div class=\"tab-pane fade show active\" id=\"v-pills-1\" role=\"tabpanel\" aria-labelledby=\"v-pills-1-tab\">
                                     <a  style=\"    padding: 25px;    margin-left: 91%;\">
                                         <i class=\"material-icons d-none d-xl-block btn-close _close-accordion\" > </i>
                                     </a>
                                     <div class=\"row\" style=\"overflow-y: scroll\">
                                         <div class=\"col\">
                                             <div class=\"pan-article\">
                                                 <div class=\"pan-header\">
                                                     <div class=\"pan-header-label\">
                                                          <h2 class=\"mb-2\"> Optimiser mes dépenses de santé</h2>
                                                     </div>
                                                 </div>
                                                 <div class=\"pan-body\">
                                                     <p class=\"font-p-large text-faded mb-2\"> Accédez à un large réseau de professionnels de santé recommandés et au juste prix.
                                                         Les prestations de santé telles que les hospitalisations, le dentaire, l’optique, les analyses biologiques, les actes de radiologie… entraînent souvent des dépenses importantes.
                                                         Aujourd’hui tous les prestataires ne facturent pas le même prix pour les mêmes procédures médicales, certains professionnels de santé sont trois fois plus chers que d’autres !
                                                     </p>
                                                 </div>
                                             </div>

                                         </div>
                                         <div class=\"col\">
                                             <div class=\"\">
                                                 <div class=\"my-4 my-md-0\">
                                                     <a href=\"welcome-to-cloudways\" class=\"d-block\" data-eventaction=\"Featured Content Card Clicked\" data-eventcategory=\"Navigation - Content Card (single)\" data-eventlabel=\"Category:Preparing for a post-pandemic world: Transforming human capital and benefit actions | title:Read more\">
                                                         <div class=\"featured-content-item  featured-content-item--inline\">
                                                             <div class=\"featured-content-item__image-container d-none d-md-block\">
                                                                 <div class=\"featured-content-item__square\" style=\"visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 150, 0, 1);\" data-sr-id=\"12\">

                                                                 </div>
                                                                 <div class=\"featured-content-item__animation-container\">
                                                                     <img src=\"https://soin.cloudmeserver.info/wp-content/uploads/2021/02/lx9GoxS3HG.jpg\" class=\"responsive\" alt=\"\">
                                                                 </div>
                                                             </div>
                                                             <div class=\"featured-content-item__eyebrow font-mono-small font-weight-semibold mb-2\"> Some Useful Links for You to Get Started</div>
                                                             <h3 class=\"featured-content-item__title\">It seems like you’re running a default WordPress website. Here are a few useful links to get you started</h3>
                                                             <span class=\"arrow-link p-0 py-md-4\" data-eventaction=\"Featured Content Card Clicked\" data-eventcategory=\"Navigation - Content Card (single)\" data-eventlabel=\"Category:Preparing for a post-pandemic world: Transforming human capital and benefit actions | title:Read more\"> Lire la suite
                                                                            <i class=\"fa fa-arrow-right\" ></i>
                                                                    </span>
                                                         </div>
                                                     </a>
                                                 </div>

                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class=\"tab-pane fade\" id=\"v-pills-2\" role=\"tabpanel\" aria-labelledby=\"v-pills-2-tab\">

                                     <div id=\"homepage-nav-collapse-2\" class=\"homepage-nav-item__content homepage-nav-item__focus collapse show\" aria-labelledby=\"homepage-nav-item-2\" data-parent=\"#homepage-nav-accordion\" style=\"\">
                                         <i class=\"material-icons d-none d-xl-block btn-close _close-accordion\" > </i>
                                         <div class=\"col col-xl-12\"><div class=\"container px-0 px-xl-3\"><div class=\"row\"><div class=\"col-6\"><h2 class=\"mb-2\"> Mieux comprendre mon assurance maladie</h2></div><div class=\"col-6\"></div><div class=\"col-12 col-md-6 col-xl-5\"><div class=\"row\"><div class=\"col-12\" data-eventaction=\"Clicked read more\" data-eventcategory=\"Navigation-Read More\" data-eventlabel=\"Category:People | title:View all people solutions \"><p class=\"font-p-large text-faded mb-2\"> N’ayez plus de mauvaises surprises lors de vos remboursements.
                                                                     Parce que vos besoins de santé sont spécifiques, une équipe d’experts en assurance maladie examine en profondeur les détails du contrat d’assurance maladie souscrit par votre employeur et vous éclaire dans la majorité de vos interrogationsVous devez engager une dépense de santé, contactez nos conseillers et prenez connaissance des remboursements, des plafonds, des exclusions prévus par votre assurance maladie.
                                                                     Avant d’entamer des actes médicaux complémentaires (séances de rééducation, actes d’explorations…) votre assurance peut exiger un accord préalable, ou une possibilité de les prendre en charge en tiers payant.</p> <a href=\"/services-soin-clair\" class=\"arrow-link p-0 py-md-4\" data-eventaction=\"Clicked read more\" data-eventcategory=\"Navigation-Read More\" data-eventlabel=\"Category:People | title:View all people solutions \"> Nos Services <i class=\"material-icons\" aria-hidden=\"true\">keyboard_arrow_right</i> </a><hr class=\"my-4 mb-md-3\"></div></div></div><div class=\"col-12 col-md-6\"><div class=\"row\"><div class=\"col\"><div class=\"my-4 my-md-0\"> <a href=\"how-to-create-a-vintage-magazine-effect-in-a-sergey-prokudin-gorsky-style-2018-professional\" class=\"d-block\" data-eventaction=\"Featured Content Card Clicked\" data-eventcategory=\"Navigation - Content Card (single)\" data-eventlabel=\"Category:Preparing for a post-pandemic world: Transforming human capital and benefit actions | title:Read more\"><div class=\"featured-content-item  featured-content-item--inline\"><div class=\"featured-content-item__image-container d-none d-md-block\"><div class=\"featured-content-item__square\" style=\"visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 150, 0, 1);\" data-sr-id=\"12\"></div><div class=\"featured-content-item__animation-container\"> <img src=\"https://soin.cloudmeserver.info/wp-content/uploads/2019/09/QgBb6k0V8W.jpg\" class=\"featured-content-item__image\" alt=\"\"></div></div><div class=\"featured-content-item__eyebrow font-mono-small font-weight-semibold mb-2\"> How to Create a Vintage Magazine Effect in a Sergey Prokudin-Gorsky Style 2018 professional</div><h3 class=\"featured-content-item__title\">Look up at the stars and not down at your feet. Try to make sense of what you see, and wonder about what makes the universe exist.</h3> <span class=\"arrow-link p-0 py-md-4\" data-eventaction=\"Featured Content Card Clicked\" data-eventcategory=\"Navigation - Content Card (single)\" data-eventlabel=\"Category:Preparing for a post-pandemic world: Transforming human capital and benefit actions | title:Read more\"> Lire la suite <i class=\"material-icons\" aria-hidden=\"true\">keyboard_arrow_right</i> </span></div> </a></div></div></div></div></div></div></div></div>
                                 </div>
                                 <div class=\"tab-pane fade\" id=\"v-pills-3\" role=\"tabpanel\" aria-labelledby=\"v-pills-3-tab\">
                                     <div id=\"homepage-nav-collapse-2\" class=\"homepage-nav-item__content collapse\" aria-labelledby=\"homepage-nav-item-2\" data-parent=\"#homepage-nav-accordion\" style=\"\">
                                         <i class=\"material-icons d-none d-xl-block btn-close _close-accordion\" > </i>
                                         <div class=\"col col-xl-12\"><div class=\"container px-0 px-xl-3\"><div class=\"row\"><div class=\"col-6\"><h2 class=\"mb-2\"> Mieux comprendre mon assurance maladie</h2></div><div class=\"col-6\"></div><div class=\"col-12 col-md-6 col-xl-5\"><div class=\"row\"><div class=\"col-12\" data-eventaction=\"Clicked read more\" data-eventcategory=\"Navigation-Read More\" data-eventlabel=\"Category:People | title:View all people solutions \"><p class=\"font-p-large text-faded mb-2\"> N’ayez plus de mauvaises surprises lors de vos remboursements.
                                                                     Parce que vos besoins de santé sont spécifiques, une équipe d’experts en assurance maladie examine en profondeur les détails du contrat d’assurance maladie souscrit par votre employeur et vous éclaire dans la majorité de vos interrogationsVous devez engager une dépense de santé, contactez nos conseillers et prenez connaissance des remboursements, des plafonds, des exclusions prévus par votre assurance maladie.
                                                                     Avant d’entamer des actes médicaux complémentaires (séances de rééducation, actes d’explorations…) votre assurance peut exiger un accord préalable, ou une possibilité de les prendre en charge en tiers payant.</p> <a href=\"/services-soin-clair\" class=\"arrow-link p-0 py-md-4\" data-eventaction=\"Clicked read more\" data-eventcategory=\"Navigation-Read More\" data-eventlabel=\"Category:People | title:View all people solutions \"> Nos Services <i class=\"material-icons\" aria-hidden=\"true\">keyboard_arrow_right</i> </a><hr class=\"my-4 mb-md-3\"></div></div></div><div class=\"col-12 col-md-6\"><div class=\"row\"><div class=\"col\"><div class=\"my-4 my-md-0\"> <a href=\"how-to-create-a-vintage-magazine-effect-in-a-sergey-prokudin-gorsky-style-2018-professional\" class=\"d-block\" data-eventaction=\"Featured Content Card Clicked\" data-eventcategory=\"Navigation - Content Card (single)\" data-eventlabel=\"Category:Preparing for a post-pandemic world: Transforming human capital and benefit actions | title:Read more\"><div class=\"featured-content-item  featured-content-item--inline\"><div class=\"featured-content-item__image-container d-none d-md-block\"><div class=\"featured-content-item__square\" style=\"visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 150, 0, 1);\" data-sr-id=\"12\"></div><div class=\"featured-content-item__animation-container\"> <img src=\"https://soin.cloudmeserver.info/wp-content/uploads/2019/09/QgBb6k0V8W.jpg\" class=\"featured-content-item__image\" alt=\"\"></div></div><div class=\"featured-content-item__eyebrow font-mono-small font-weight-semibold mb-2\"> How to Create a Vintage Magazine Effect in a Sergey Prokudin-Gorsky Style 2018 professional</div><h3 class=\"featured-content-item__title\">Look up at the stars and not down at your feet. Try to make sense of what you see, and wonder about what makes the universe exist.</h3> <span class=\"arrow-link p-0 py-md-4\" data-eventaction=\"Featured Content Card Clicked\" data-eventcategory=\"Navigation - Content Card (single)\" data-eventlabel=\"Category:Preparing for a post-pandemic world: Transforming human capital and benefit actions | title:Read more\"> Lire la suite <i class=\"material-icons\" aria-hidden=\"true\">keyboard_arrow_right</i> </span></div> </a></div></div></div></div></div></div></div></div>
                                 </div>
                             </div>
                         </div>

                     </div>
                     <div class=\"row-fluid\">
                         <div id=\"carouselExampleDark\" class=\"col-md-9 col-lg-9 cols-sm-12 col-xs-12 carousel carousel-dark slide \" data-bs-ride=\"carousel\" style=\"z-index:-1;height: 577px;background-color: #e5e5e5;\">
                             <div class=\"carousel-indicators\">
                                 <button type=\"button\" data-bs-target=\"#carouselExampleDark\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
                                 <button type=\"button\" data-bs-target=\"#carouselExampleDark\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
                                 <button type=\"button\" data-bs-target=\"#carouselExampleDark\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
                             </div>
                             <div class=\"carousel-inner\">
                                 <div class=\"carousel-item active\" data-bs-interval=\"10000\">
                                     <svg class=\"bd-placeholder-img bd-placeholder-img-lg d-block w-100\" width=\"800\" height=\"400\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Third slide\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\">
                                         <title>Placeholder</title>
                                         <rect width=\"100%\" height=\"100%\" fill=\"#e5e5e5\"></rect>
                                         <text x=\"50%\" y=\"50%\" fill=\"#999\" dy=\".3em\"></text>
                                     </svg>
                                     <div class=\"carousel-caption d-none d-md-block\" style=\"background: white;\">
                                         <h5 style=\"
                                        font-size: 38px !important;
                                        color: rgb(38, 42, 77);
                                        padding: 25px 25px 25px 50px;
                                        margin-top: 10px !important;
                                        line-height: 50px;
                                        letter-spacing: -1px;
                                        font-weight: 700;
                                        text-align: left;\">
                                             L’assurance maladie décryptée pour éclairer vos collaborateurs sur les démarches à suivre. </h5>
                                         <p style=\"text-align: left;color: rgb(43, 168, 205);padding-left: 50px;font-size: 30px;font-weight: 700;\">
                                             <a>En savoir plus</a>
                                         </p>
                                     </div>
                                 </div>
                                 <div class=\"carousel-item\" data-bs-interval=\"2000\">
                                     <svg class=\"bd-placeholder-img bd-placeholder-img-lg d-block w-100\" width=\"800\" height=\"400\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Third slide\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\">
                                         <title>Placeholder</title>
                                         <rect width=\"100%\" height=\"100%\" fill=\"#e5e5e5\"></rect>
                                         <text x=\"50%\" y=\"50%\" fill=\"#999\" dy=\".3em\"></text>
                                     </svg>
                                     <div class=\"carousel-caption d-none d-md-block\" style=\"background: white;\">
                                         <h5 style=\"
                                        font-size: 38px !important;
                                        color: rgb(38, 42, 77);
                                        padding: 25px 25px 25px 50px;
                                        margin-top: 10px !important;
                                        line-height: 50px;
                                        letter-spacing: -1px;
                                        font-weight: 700;
                                        text-align: left;\">
                                             Un collaborateur avisé, donc moins  de dossiers rejetés et moins de réclamations.
                                             Plus de temps pour le social</h5>
                                         <p style=\"text-align: left;color: rgb(43, 168, 205);padding-left: 50px;font-size: 30px;font-weight: 700;\">
                                             <a>En savoir plus</a>
                                         </p>
                                     </div>
                                 </div>
                                 <div class=\"carousel-item\">
                                     <svg class=\"bd-placeholder-img bd-placeholder-img-lg d-block w-100\" width=\"800\" height=\"400\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Third slide\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\">
                                         <title>Placeholder</title>
                                         <rect width=\"100%\" height=\"100%\" fill=\"#e5e5e5\"></rect>
                                         <text x=\"50%\" y=\"50%\" fill=\"#999\" dy=\".3em\"></text>
                                     </svg>
                                     <div class=\"carousel-caption d-none d-md-block\" style=\"background: white;\">
                                         <h5 style=\"
                                        font-size: 38px !important;
                                        color: rgb(38, 42, 77);
                                        padding: 25px 25px 25px 50px;
                                        margin-top: 10px !important;
                                        line-height: 50px;
                                        letter-spacing: -1px;
                                        font-weight: 700;
                                        text-align: left;\">
                                             Une équipe expérimentée à l’écoute et qui accompagne  vos collaborateurs tout au long de leur parcours médical </h5>
                                         <p style=\"text-align: left;color: rgb(43, 168, 205);padding-left: 50px;font-size: 30px;font-weight: 700;\">
                                             <a>En savoir plus</a>
                                         </p>
                                     </div>
                                 </div>
                             </div>
                             <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleDark\" data-bs-slide=\"prev\">
                             </button>
                             </button>
                             <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleDark\" data-bs-slide=\"next\">
                             </button>
                         </div>
                     </div>
                 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 232
    public function block_menu_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu_header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 233
    public function block_login_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login_header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 235
    public function block_sider_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sider_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sider_header"));

        // line 236
        echo "                        <div class=\"vlt-aside-menu-overlay\" ></div>
                        <div class=\"vlt-aside-menu-wrapper fade\" >
                            <div class=\"vlt-aside-menu\">
                                <div class=\"vlt-aside-menu__header\">
                                    <nav class=\"vlt-aside-menu__locales\" ></nav>
                                    <button type=\"button\" class=\"vlt-menu-burger vlt-menu-burger--opened btn-close\" aria-label=\"Close\"></button>

                                </div>
                                <nav class=\"vlt-aside-menu__navigation\"  >
                                    <ul class=\"sf-menu\">
                                        <li class=\"menu-item menu-item-home current-menu-item \">
                                            <a href=\"#\" aria-current=\"page\"><span>Home</span></a>
                                        </li>
                                        <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2781\">
                                            <a href=\"/qui-sommes-nous-2/\"><span>Qui Sommes nous</span></a>
                                        </li>
                                        <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-3926\">
                                            <a href=\"/services-soin-clair/\"><span>Nos Services</span></a>
                                        </li>
                                        <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-3925\">
                                            <a href=\"/nos-publications/\"><span>Nos publications</span></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class=\"aside-menu-overlay-right\" style=\"display: none;\"></div>
                        <div class=\"vlt-aside-menu-wrapper-right sf-js-enabled fade\" style=\"\">
                            <div class=\"vlt-aside-menu-right\">
                                <div class=\"vlt-aside-menu__header_right\">
                                    <nav class=\"vlt-aside-menu__locales_right\"></nav>
                                    <button type=\"button\" class=\"vlt-menu-burger-right btn-close\" aria-label=\"Close\"></button>
                                </div>
                            </div>
                            <nav class=\"vlt-aside-menu__navigation-right\" >
                                ";
        // line 271
        $this->displayBlock('menu_espace', $context, $blocks);
        // line 288
        echo "                            </nav>
                        </div>

                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 271
    public function block_menu_espace($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu_espace"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu_espace"));

        // line 272
        echo "                                <ul id=\"menu-espaces\" class=\"sf-menu\">
                                    <li id=\"menu-item-2869\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2869\">
                                        <a href=\"";
        // line 274
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espace_adherant");
        echo "\">
                                            <span>Adhérent</span>
                                        </a>
                                    </li>
                                    <li id=\"menu-item-2870\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2870\">
                                        <a href=\"";
        // line 279
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espace_employeur");
        echo "\">
                                            <span>Employeur</span>
                                        </a>
                                    </li>
                                    <li id=\"menu-item-2871\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2871\">
                                        <a href=\"";
        // line 284
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espace_partenaire");
        echo "\"><span>Partenaire</span></a>
                                    </li>
                                </ul>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 293
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 294
        echo "
                        <main class=\"vlt-main\">
                            <div class=\"\" style=\"background-image: url('/img/static/dot-gray.jpg');background-position: 50% 50%;height: fit-content;padding-top:45px;\">

                                <section class=\"pb-5\">
                                    <div class=\"container py-4 text-black-50\">
                                        <header>
                                            <h1>Témoignages</h1>
                                        </header>
                                    </div>

                                    <div class=\"container\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-10 col-xl-8 mx-auto\">
                                                <div class=\"p-5 bg-white shadow rounded\">
                                                    <!-- Bootstrap carousel-->
                                                    <div class=\"carousel slide\" id=\"carouselQuotsIndicators\" data-ride=\"carousel\">
                                                        <!-- Bootstrap carousel indicators [nav] -->
                                                        <div class=\"carousel-indicators\">
                                                            <button type=\"button\" data-bs-target=\"#carouselQuotsIndicators\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
                                                            <button type=\"button\" data-bs-target=\"#carouselQuotsIndicators\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
                                                            <button type=\"button\" data-bs-target=\"#carouselQuotsIndicators\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
                                                            <button type=\"button\" data-bs-target=\"#carouselQuotsIndicators\" data-bs-slide-to=\"3\" aria-label=\"Slide 4\"></button>
                                                            <button type=\"button\" data-bs-target=\"#carouselQuotsIndicators\" data-bs-slide-to=\"4\" aria-label=\"Slide 5\"></button>
                                                        </div>


                                                        <!-- Bootstrap inner [slides]-->
                                                        <div class=\"carousel-inner px-5 pb-4\">
                                                            <!-- Carousel slide-->
                                                            <div class=\"carousel-item active\" data-bs-interval=\"5000\">
                                                                <div class=\"media\">
                                                                    <img class=\"rounded-circle img-thumbnail\" src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/static/default-user.png"), "html", null, true);
        echo "\" alt=\"\" width=\"75\">
                                                                    <div class=\"media-body ml-3\">
                                                                        <blockquote class=\"blockquote border-0 p-0\">
                                                                            <p class=\"font-italic lead\"> <i class=\"fa fa-quote-left mr-3\" style=\"color: #ffc107;\"></i>
                                                                                Ce service m’a permis de prendre rendez-vous rapidement en urgence chez un gastro près de chez moi.
                                                                            </p>
                                                                            <footer class=\"blockquote-footer\">
                                                                                <cite title=\"Source Title\">Mohamed.B</cite>
                                                                            </footer>
                                                                        </blockquote>
                                                                    </div>
                                                                </div>
                                                            </div >

                                                            <!-- Carousel slide-->
                                                            <div class=\"carousel-item\" data-bs-interval=\"15000\">
                                                                <div class=\"media\">
                                                                    <img class=\"rounded-circle img-thumbnail\" src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/static/default-user.png"), "html", null, true);
        echo "\" alt=\"\" width=\"75\">
                                                                    <div class=\"media-body ml-3\">
                                                                        <blockquote class=\"blockquote border-0 p-0\">
                                                                            <p class=\"font-italic lead\"> <i class=\"fa fa-quote-left mr-3\" style=\"color: #ffc107;\"></i>
                                                                                Avant mon opération j’ai contacté Soinclair pour avoir des renseignements sur la procédure à suivre.
                                                                            </p>
                                                                            <footer class=\"blockquote-footer\">
                                                                                <cite title=\"Source Title\">Saad.K</cite>
                                                                            </footer>
                                                                        </blockquote>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Carousel slide-->
                                                            <div class=\"carousel-item\" data-bs-interval=\"10000\">
                                                                <div class=\"media\">
                                                                    <img class=\"rounded-circle img-thumbnail\" src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/static/default-user.png"), "html", null, true);
        echo "\" alt=\"\" width=\"75\">
                                                                    <div class=\"media-body ml-3\">
                                                                        <blockquote class=\"blockquote border-0 p-0\">
                                                                            <p class=\"font-italic lead\"> <i class=\"fa fa-quote-left mr-3\" style=\"color: #ffc107;\"></i>
                                                                                Qui aurait su que je pouvais économiser de l’argent en analysant mon devis par votre service, Merci SOINCAIR.
                                                                            </p>
                                                                            <footer class=\"blockquote-footer\">
                                                                                <cite title=\"Source Title\">Malika.F</cite>
                                                                            </footer>

                                                                        </blockquote>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Carousel slide-->
                                                            <div class=\"carousel-item\" data-bs-interval=\"5000\">
                                                                <div class=\"media\">
                                                                    <img class=\"rounded-circle img-thumbnail\" src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/static/default-user.png"), "html", null, true);
        echo "\" alt=\"\" width=\"75\">
                                                                    <div class=\"media-body ml-3\">
                                                                        <blockquote class=\"blockquote border-0 p-0\">
                                                                            <p class=\"font-italic lead\"> <i class=\"fa fa-quote-left mr-3\" style=\"color: #ffc107;\"></i>
                                                                                Ce fut une expérience formidable. Ils se sont occupés de tout, ont rendu la chirurgie moins stressante, excellent docteur et installation.
                                                                            </p>
                                                                            <footer class=\"blockquote-footer\">
                                                                                <cite title=\"Source Title\">Rachid.T</cite>
                                                                            </footer>
                                                                        </blockquote>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <!-- Carousel slide-->
                                                            <div class=\"carousel-item\" data-bs-interval=\"\">
                                                                <div class=\"media\">
                                                                    <img class=\"rounded-circle img-thumbnail\" src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/static/default-user.png"), "html", null, true);
        echo "\" alt=\"\" width=\"75\">
                                                                    <div class=\"media-body ml-3\">
                                                                        <blockquote class=\"blockquote border-0 p-0\">
                                                                            <p class=\"font-italic lead\"> <i class=\"fa fa-quote-left mr-3\" style=\"color: #ffc107;\"></i>
                                                                                Je tiens à remercier vos équipes, avant l’accouchement de ma femme, les conseillers m’ont aidé à monter mon dossier de prise en charge.
                                                                            </p>
                                                                            <footer class=\"blockquote-footer\">
                                                                                <cite title=\"Source Title\">Omar.S</cite>
                                                                            </footer>
                                                                        </blockquote>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>


                                                        <!-- Bootstrap controls [dots]-->
                                                        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselQuotsIndicators\" data-bs-slide=\"prev\" style=\"padding-right: 14%;\">
                                                            <i class=\"fa fa-angle-left text-dark text-lg\"></i>
                                                            <span class=\"sr-only\">Previous</span>
                                                        </button>
                                                        </button>
                                                        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselQuotsIndicators\" data-bs-slide=\"next\" style=\"padding-left: 14%;\">
                                                            <i class=\"fa fa-angle-right text-dark text-lg\"></i>
                                                            <span class=\"sr-only\">Next</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                            </div>

                            <div class=\"\" style=\"background-color:#cecece2b;background-position: 50% 50%;height: fit-content;padding-top:45px;\">

                                <section class=\"pb-5\">
                                    <div class=\"container py-4 text-black-50\">
                                        <header>
                                            <h1>Nos Service</h1>
                                        </header>
                                    </div>
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

                        </main>

                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 484
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 485
        echo "                    <footer class=\"vlt-footer vlt-footer--style-1\" style=\"padding: 26px 16%;\">
                        <div class=\"container\">
                            <div class=\"vlt-footer-head\">
                                <a href=\"https://soin.cloudmeserver.info/\" class=\"vlt-footer-logo\">
                                    <img src=\"https://soin.cloudmeserver.info/wp-content/uploads/2021/03/logo-sc-jaune-bleu-2-1-1-1.png\" alt=\"SOIN CLAIR\" class=\"white\">
                                </a>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-12 col-sm-6 col-xl-4\">
                                    <div id=\"text-3\" class=\"vlt-widget widget_text\">
                                        <div class=\"textwidget\"><h4>À propos de nous</h4>
                                            <p>
                                                <a href=\"/qui-sommes-nous\" style=\"color: inherit;\">Qui sommes-nous</a><br>
                                                <a href=\"/services-soin-clair\" style=\"color: inherit;\">Nos services</a><br>
                                                <a href=\"nos-publications\" style=\"color: inherit;\">Publications</a><br>
                                                <a href=\"/cgu/\" style=\"color: inherit;\">CGU-Politique de confidentialité</a>
                                            </p>
                                            <p>
                                                <a><strong>Professionnel de santé : rejoignez-nous !</strong></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-12 col-sm-6 col-xl-4\">
                                    <div id=\"text-5\" class=\"vlt-widget widget_text\">
                                        <div class=\"textwidget\">
                                            <h4>Contactez-nous</h4>
                                            <p>
                                                <img loading=\"lazy\" class=\"alignnone size-full wp-image-2527\" src=\"https://soin.cloudmeserver.info/wp-content/uploads/2021/02/enveloppe-2.png\" alt=\"\" width=\"24\" height=\"24\">&nbsp; &nbsp;Contact@soinclair.ma</p><p><img loading=\"lazy\" class=\"alignnone size-full wp-image-2528\" src=\"https://soin.cloudmeserver.info/wp-content/uploads/2021/02/silhouette-de-poignee-de-telephone.png\" alt=\"\" width=\"24\" height=\"24\">&nbsp; &nbsp;Tel: 06 62 79 03 45<br> <img loading=\"lazy\" class=\"alignnone wp-image-2528 size-full\" src=\"https://soin.cloudmeserver.info/wp-content/uploads/2021/02/silhouette-de-poignee-de-telephone.png\" alt=\"\" width=\"24\" height=\"24\">&nbsp; &nbsp; Fax: 05 22 86 28 88</p><p><img loading=\"lazy\" class=\"alignnone size-full wp-image-2529\" src=\"https://soin.cloudmeserver.info/wp-content/uploads/2021/02/accueil.png\" alt=\"\" width=\"24\" height=\"24\">
                                                &nbsp; &nbsp;236 IMM F8, Bd Abdelmoumen,<br/>
                                                &nbsp; &nbsp;2ème étage N°6 - Casablanca
                                            </p>
                                            <p>
                                                <img loading=\"lazy\" class=\"alignnone size-full wp-image-2530\" src=\"https://soin.cloudmeserver.info/wp-content/uploads/2021/02/temps.png\" alt=\"\" width=\"24\" height=\"24\"> &nbsp; Du lundi au vendredi de 9h00 à 19h00<br> <img loading=\"lazy\" class=\"alignnone size-full wp-image-2604\" src=\"https://soin.cloudmeserver.info/wp-content/uploads/2021/02/rotation-horaire.png\" alt=\"\" width=\"32\" height=\"32\"> Samedi de 9h00 à 13h00
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-12 col-sm-6 col-xl-4\">
                                    <div id=\"text-4\" class=\"vlt-widget widget_text\">
                                        <div class=\"textwidget\">
                                            <h4>Suivez-nous</h4>
                                            <p>
                                                <a href=\"https://www.facebook.com/SoinClair.SoinClair\">
                                                    <img loading=\"lazy\" class=\"alignnone size-full wp-image-2588\" src=\"https://soin.cloudmeserver.info/wp-content/uploads/2021/02/facebook-3.png\" alt=\"\" width=\"16\" height=\"16\">
                                                </a>&nbsp; &nbsp;
                                                <a href=\"https://www.linkedin.com/company/soinclair\">
                                                    <img loading=\"lazy\" class=\"alignnone size-full wp-image-2589\" src=\"https://soin.cloudmeserver.info/wp-content/uploads/2021/02/linkedin-1.png\" alt=\"\" width=\"16\" height=\"16\">
                                                </a>&nbsp; &nbsp;
                                                <img loading=\"lazy\" class=\"alignnone size-full wp-image-2590\" src=\"https://soin.cloudmeserver.info/wp-content/uploads/2021/02/youtube-2.png\" alt=\"\" width=\"16\" height=\"16\">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"vlt-footer-copyright\"><p>Droit d'auteur @2021 SOIN CLAIR</p></div>
                        </div>
                    </footer>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 548
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 549
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
        <!-- JavaScript Bundle with Popper -->
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf\" crossorigin=\"anonymous\"></script>

        <script src=\" ";
        // line 553
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/static/app.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 555
        echo "        <script>
            \$(document).ready(function(){

                // --------------------------
                // Sider menu right accordion
                // --------------------------
                \$('.accordi.nav-link.marging-item-nav').on('click',function(){
                    if(\$('#_container-accordion').hasClass('col-md-12') ){
                        console.log('open');
                        \$('#_container-flex').css('width','100%');
                        \$('#_container-accordion').toggleClass('col-md-12');
                        \$('#_container-accordion').toggleClass('col-md-3');
                        \$('#_container-flex').css('left','0%');
                        \$('#_accordion-cible').toggleClass('fade');
                        \$('#_accordion-cible').toggleClass('col-md-9 col-sm-12');
                    }
                });

                \$('._close-accordion').on('click',function(){
                    if(!\$('#_container-accordion').hasClass('col-md-12') ){
                        console.log('close');
                        \$('#_accordion-cible').toggleClass('fade');
                        \$('#_accordion-cible').toggleClass('col-md-9 col-sm-12');
                        \$('#_container-flex').css('width','');
                        \$('#_container-accordion').toggleClass('col-md-3');
                        \$('#_container-accordion').toggleClass('col-md-12');
                        \$('#_container-flex').css('left','75%');
                    }
                });

                // ---------------
                // Sider menu left
                // ---------------
                \$('.vlt-menu-burger.vlt-menu-burger--opened').on('click',function(){
                    if (\$('.vlt-aside-menu-wrapper').hasClass('opened'))
                    {
                        \$('.vlt-aside-menu-wrapper').toggleClass('opened');
                        \$('.vlt-aside-menu-wrapper').toggleClass('fade');
                        \$('.vlt-aside-menu-wrapper').css('left','0%');
                        \$('.aside-menu-overlay-right').css('display','none');
                    }
                });

                \$('.item-header.right.col-md-2.col-sm-6').on('click',function(){
                    if (\$('.vlt-aside-menu-wrapper').hasClass('fade'))
                    {
                        \$('.vlt-aside-menu-wrapper').toggleClass('fade');
                        \$('.vlt-aside-menu-wrapper').toggleClass('opened');
                        \$('.vlt-aside-menu-wrapper').css('left','35%');
                        \$('.aside-menu-overlay-right').css('display','block');
                    }
                });

                // ---------------
                // Sider menu right
                // ---------------
//
                \$('.vlt-menu-burger-right').on('click',function(){
                    if (\$('.vlt-aside-menu-wrapper-right.sf-js-enabled').hasClass('opened'))
                    {
                        \$('.vlt-aside-menu-wrapper-right.sf-js-enabled').toggleClass('opened');
                        \$('.vlt-aside-menu-wrapper-right.sf-js-enabled').toggleClass('fade');
                        \$('.vlt-aside-menu-wrapper-right.sf-js-enabled').css('right','0%');
                        \$('.aside-menu-overlay-right').css('display','none');
                    }
                });

                \$('.item-header.left.col-md-2.col-sm-6').on('click',function(){
                    if (\$('.vlt-aside-menu-wrapper-right.sf-js-enabled').hasClass('fade'))
                    {
                        \$('.vlt-aside-menu-wrapper-right.sf-js-enabled').toggleClass('fade');
                        \$('.vlt-aside-menu-wrapper-right.sf-js-enabled').toggleClass('opened');
                        \$('.vlt-aside-menu-wrapper-right.sf-js-enabled').css('right','33%');
                        \$('.aside-menu-overlay-right').css('display','block');
                    }
                });

            });

            //carousel
            \$(document).ready(function(){
                console.log(\"hello world\");
                \$('#carouselQuotsIndicators').on('slide.bs.carousel', function () {
                    \$holder = \$( \"ol li.active\" );
                    \$holder.removeClass('active');
                    var idx = \$('div.active').index('div.item');
                    \$('ol.carousel-indicators li[data-slide-to=\"'+ idx+'\"]').addClass('active');
                });

                \$('.carousel-indicators button').on(\"click\",function(){
                    \$('ol.carousel-indicators li.active').removeClass(\"active\");
                    \$(this).addClass(\"active\");
                });
            });
        </script>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 652
    public function block_map_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "map_javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "map_javascript"));

        // line 653
        echo "        <!-- Make sure you put this AFTER Leaflet's CSS -->
        <script src=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.js\"
                integrity=\"sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==\"
                crossorigin=\"\"></script>
        <script type=\"text/javascript\">



        </script>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1055 => 653,  1045 => 652,  939 => 555,  935 => 553,  929 => 549,  919 => 548,  851 => 485,  841 => 484,  743 => 396,  722 => 378,  701 => 360,  681 => 343,  661 => 326,  627 => 294,  617 => 293,  603 => 284,  595 => 279,  587 => 274,  583 => 272,  573 => 271,  560 => 288,  558 => 271,  521 => 236,  511 => 235,  493 => 233,  475 => 232,  294 => 57,  284 => 56,  271 => 50,  263 => 48,  259 => 46,  257 => 45,  251 => 42,  242 => 35,  232 => 34,  222 => 29,  212 => 28,  189 => 16,  179 => 15,  166 => 11,  156 => 10,  137 => 7,  126 => 664,  123 => 652,  121 => 548,  115 => 544,  112 => 484,  110 => 293,  107 => 292,  105 => 235,  102 => 234,  99 => 233,  97 => 232,  92 => 229,  90 => 56,  86 => 54,  84 => 34,  78 => 30,  75 => 28,  72 => 15,  69 => 10,  65 => 7,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html >
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,user-scalable=no\">
        <title>{% block title %}SOIN CLAIR - SOIN CLAIR{% endblock %}</title>
        {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}
        {% block js_googlemap %}
            <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.css\"
                  integrity=\"sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==\"
                  crossorigin=\"\"/>
        {% endblock %}
        {% block stylesheets %}
            <link href=\"{{ asset('/css/static/base.css') }}\" rel=\"stylesheet\"/>

            <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,400&display=swap\" rel=\"stylesheet\">
            <!-- CSS only -->
            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\" crossorigin=\"anonymous\">

            <!-- FontAwsome -->
            <script src=\"https://kit.fontawesome.com/4475760e8d.js\" crossorigin=\"anonymous\"></script>
            <!--Fonts -->
            <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
            <link href=\"https://fonts.googleapis.com/css2?family=Teko&display=swap\" rel=\"stylesheet\">
        {% endblock %}
        {% block extra_stylesheets %}
        {% endblock %}

    </head>
    <body >
         <div class=\"container-fluid \" style=\"padding: 0px; margin: 0px;\">
             {% block header %}
                 <header>
                     <div class=\"row align-items-center \">
                         <div class=\"item-header right col-md-2 col-sm-6\">
                             <a>
                                 <i class=\"fa fa-list\"></i>  Menu</a>
                         </div>
                         <div class=\"logo-center  col-md-8 col-sm-6\">
                             <a href=\"#\" class=\"vertical-brand\"><img src=\"{{ asset('/img/static/logo-sc-jaune-bleu-2-1-2.png') }}\" alt=\"SOIN CLAIR\" class=\"brand-image\"></a>
                         </div>
                         <div class=\" item-header left  col-md-2 col-sm-6\">
                             {% if app.user is null %}
                                 <a > Connexion <i class=\"fa fa-user\"> </i></a>
                             {% else %}
                                 <a > {{ app.user.username }}</a><a href=\"{{ path('app_logout') }}\"> <i class=\"fa fa-user\"> </i></a>
                            {% endif %}
                         </div>
                     </div>
                 </header>
             {% endblock %}

             <div class=\"main\">
                 {% block content %}

                     <div class=\"row align-items-start navigation-to-right\" id=\"_container-flex\">
                         <div class=\"p-3 homepage-nav px-xl-0 col-md-12 col-sm-6\" id=\"_container-accordion\">
                             <div class=\"homepage-nav-content\" style=\"padding-top: 100px;\">
                                 <p class=\"header-nav\">Découvrez nos services</p>
                                 <div class=\"\">
                                     <div class=\"nav flex-column nav-pills\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\" style=\"padding-bottom: 100px;\">
                                    <span class=\"accordi nav-link marging-item-nav\" id=\"v-pills-1-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-1\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-home\" aria-selected=\"true\">
                                        Optimiser mes dépenses de santé
                                    </span>
                                         <span class=\"accordi nav-link marging-item-nav\" id=\"v-pills-2-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-2\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-profile\" aria-selected=\"false\">
                                        Mieux comprendre mon assurance maladie
                                    </span>
                                         <span class=\"accordi nav-link marging-item-nav\" id=\"v-pills-3-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-3\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-messages\" aria-selected=\"false\">
                                        Analyser mon devis
                                    </span>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class=\"fade\" id=\"_accordion-cible\" style=\"display: none;\">
                             <div class=\"tab-content\" id=\"v-pills-tabContent\">
                                 <div class=\"tab-pane fade show active\" id=\"v-pills-1\" role=\"tabpanel\" aria-labelledby=\"v-pills-1-tab\">
                                     <a  style=\"    padding: 25px;    margin-left: 91%;\">
                                         <i class=\"material-icons d-none d-xl-block btn-close _close-accordion\" > </i>
                                     </a>
                                     <div class=\"row\" style=\"overflow-y: scroll\">
                                         <div class=\"col\">
                                             <div class=\"pan-article\">
                                                 <div class=\"pan-header\">
                                                     <div class=\"pan-header-label\">
                                                          <h2 class=\"mb-2\"> Optimiser mes dépenses de santé</h2>
                                                     </div>
                                                 </div>
                                                 <div class=\"pan-body\">
                                                     <p class=\"font-p-large text-faded mb-2\"> Accédez à un large réseau de professionnels de santé recommandés et au juste prix.
                                                         Les prestations de santé telles que les hospitalisations, le dentaire, l’optique, les analyses biologiques, les actes de radiologie… entraînent souvent des dépenses importantes.
                                                         Aujourd’hui tous les prestataires ne facturent pas le même prix pour les mêmes procédures médicales, certains professionnels de santé sont trois fois plus chers que d’autres !
                                                     </p>
                                                 </div>
                                             </div>

                                         </div>
                                         <div class=\"col\">
                                             <div class=\"\">
                                                 <div class=\"my-4 my-md-0\">
                                                     <a href=\"welcome-to-cloudways\" class=\"d-block\" data-eventaction=\"Featured Content Card Clicked\" data-eventcategory=\"Navigation - Content Card (single)\" data-eventlabel=\"Category:Preparing for a post-pandemic world: Transforming human capital and benefit actions | title:Read more\">
                                                         <div class=\"featured-content-item  featured-content-item--inline\">
                                                             <div class=\"featured-content-item__image-container d-none d-md-block\">
                                                                 <div class=\"featured-content-item__square\" style=\"visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 150, 0, 1);\" data-sr-id=\"12\">

                                                                 </div>
                                                                 <div class=\"featured-content-item__animation-container\">
                                                                     <img src=\"https://soin.cloudmeserver.info/wp-content/uploads/2021/02/lx9GoxS3HG.jpg\" class=\"responsive\" alt=\"\">
                                                                 </div>
                                                             </div>
                                                             <div class=\"featured-content-item__eyebrow font-mono-small font-weight-semibold mb-2\"> Some Useful Links for You to Get Started</div>
                                                             <h3 class=\"featured-content-item__title\">It seems like you’re running a default WordPress website. Here are a few useful links to get you started</h3>
                                                             <span class=\"arrow-link p-0 py-md-4\" data-eventaction=\"Featured Content Card Clicked\" data-eventcategory=\"Navigation - Content Card (single)\" data-eventlabel=\"Category:Preparing for a post-pandemic world: Transforming human capital and benefit actions | title:Read more\"> Lire la suite
                                                                            <i class=\"fa fa-arrow-right\" ></i>
                                                                    </span>
                                                         </div>
                                                     </a>
                                                 </div>

                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class=\"tab-pane fade\" id=\"v-pills-2\" role=\"tabpanel\" aria-labelledby=\"v-pills-2-tab\">

                                     <div id=\"homepage-nav-collapse-2\" class=\"homepage-nav-item__content homepage-nav-item__focus collapse show\" aria-labelledby=\"homepage-nav-item-2\" data-parent=\"#homepage-nav-accordion\" style=\"\">
                                         <i class=\"material-icons d-none d-xl-block btn-close _close-accordion\" > </i>
                                         <div class=\"col col-xl-12\"><div class=\"container px-0 px-xl-3\"><div class=\"row\"><div class=\"col-6\"><h2 class=\"mb-2\"> Mieux comprendre mon assurance maladie</h2></div><div class=\"col-6\"></div><div class=\"col-12 col-md-6 col-xl-5\"><div class=\"row\"><div class=\"col-12\" data-eventaction=\"Clicked read more\" data-eventcategory=\"Navigation-Read More\" data-eventlabel=\"Category:People | title:View all people solutions \"><p class=\"font-p-large text-faded mb-2\"> N’ayez plus de mauvaises surprises lors de vos remboursements.
                                                                     Parce que vos besoins de santé sont spécifiques, une équipe d’experts en assurance maladie examine en profondeur les détails du contrat d’assurance maladie souscrit par votre employeur et vous éclaire dans la majorité de vos interrogationsVous devez engager une dépense de santé, contactez nos conseillers et prenez connaissance des remboursements, des plafonds, des exclusions prévus par votre assurance maladie.
                                                                     Avant d’entamer des actes médicaux complémentaires (séances de rééducation, actes d’explorations…) votre assurance peut exiger un accord préalable, ou une possibilité de les prendre en charge en tiers payant.</p> <a href=\"/services-soin-clair\" class=\"arrow-link p-0 py-md-4\" data-eventaction=\"Clicked read more\" data-eventcategory=\"Navigation-Read More\" data-eventlabel=\"Category:People | title:View all people solutions \"> Nos Services <i class=\"material-icons\" aria-hidden=\"true\">keyboard_arrow_right</i> </a><hr class=\"my-4 mb-md-3\"></div></div></div><div class=\"col-12 col-md-6\"><div class=\"row\"><div class=\"col\"><div class=\"my-4 my-md-0\"> <a href=\"how-to-create-a-vintage-magazine-effect-in-a-sergey-prokudin-gorsky-style-2018-professional\" class=\"d-block\" data-eventaction=\"Featured Content Card Clicked\" data-eventcategory=\"Navigation - Content Card (single)\" data-eventlabel=\"Category:Preparing for a post-pandemic world: Transforming human capital and benefit actions | title:Read more\"><div class=\"featured-content-item  featured-content-item--inline\"><div class=\"featured-content-item__image-container d-none d-md-block\"><div class=\"featured-content-item__square\" style=\"visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 150, 0, 1);\" data-sr-id=\"12\"></div><div class=\"featured-content-item__animation-container\"> <img src=\"https://soin.cloudmeserver.info/wp-content/uploads/2019/09/QgBb6k0V8W.jpg\" class=\"featured-content-item__image\" alt=\"\"></div></div><div class=\"featured-content-item__eyebrow font-mono-small font-weight-semibold mb-2\"> How to Create a Vintage Magazine Effect in a Sergey Prokudin-Gorsky Style 2018 professional</div><h3 class=\"featured-content-item__title\">Look up at the stars and not down at your feet. Try to make sense of what you see, and wonder about what makes the universe exist.</h3> <span class=\"arrow-link p-0 py-md-4\" data-eventaction=\"Featured Content Card Clicked\" data-eventcategory=\"Navigation - Content Card (single)\" data-eventlabel=\"Category:Preparing for a post-pandemic world: Transforming human capital and benefit actions | title:Read more\"> Lire la suite <i class=\"material-icons\" aria-hidden=\"true\">keyboard_arrow_right</i> </span></div> </a></div></div></div></div></div></div></div></div>
                                 </div>
                                 <div class=\"tab-pane fade\" id=\"v-pills-3\" role=\"tabpanel\" aria-labelledby=\"v-pills-3-tab\">
                                     <div id=\"homepage-nav-collapse-2\" class=\"homepage-nav-item__content collapse\" aria-labelledby=\"homepage-nav-item-2\" data-parent=\"#homepage-nav-accordion\" style=\"\">
                                         <i class=\"material-icons d-none d-xl-block btn-close _close-accordion\" > </i>
                                         <div class=\"col col-xl-12\"><div class=\"container px-0 px-xl-3\"><div class=\"row\"><div class=\"col-6\"><h2 class=\"mb-2\"> Mieux comprendre mon assurance maladie</h2></div><div class=\"col-6\"></div><div class=\"col-12 col-md-6 col-xl-5\"><div class=\"row\"><div class=\"col-12\" data-eventaction=\"Clicked read more\" data-eventcategory=\"Navigation-Read More\" data-eventlabel=\"Category:People | title:View all people solutions \"><p class=\"font-p-large text-faded mb-2\"> N’ayez plus de mauvaises surprises lors de vos remboursements.
                                                                     Parce que vos besoins de santé sont spécifiques, une équipe d’experts en assurance maladie examine en profondeur les détails du contrat d’assurance maladie souscrit par votre employeur et vous éclaire dans la majorité de vos interrogationsVous devez engager une dépense de santé, contactez nos conseillers et prenez connaissance des remboursements, des plafonds, des exclusions prévus par votre assurance maladie.
                                                                     Avant d’entamer des actes médicaux complémentaires (séances de rééducation, actes d’explorations…) votre assurance peut exiger un accord préalable, ou une possibilité de les prendre en charge en tiers payant.</p> <a href=\"/services-soin-clair\" class=\"arrow-link p-0 py-md-4\" data-eventaction=\"Clicked read more\" data-eventcategory=\"Navigation-Read More\" data-eventlabel=\"Category:People | title:View all people solutions \"> Nos Services <i class=\"material-icons\" aria-hidden=\"true\">keyboard_arrow_right</i> </a><hr class=\"my-4 mb-md-3\"></div></div></div><div class=\"col-12 col-md-6\"><div class=\"row\"><div class=\"col\"><div class=\"my-4 my-md-0\"> <a href=\"how-to-create-a-vintage-magazine-effect-in-a-sergey-prokudin-gorsky-style-2018-professional\" class=\"d-block\" data-eventaction=\"Featured Content Card Clicked\" data-eventcategory=\"Navigation - Content Card (single)\" data-eventlabel=\"Category:Preparing for a post-pandemic world: Transforming human capital and benefit actions | title:Read more\"><div class=\"featured-content-item  featured-content-item--inline\"><div class=\"featured-content-item__image-container d-none d-md-block\"><div class=\"featured-content-item__square\" style=\"visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 150, 0, 1);\" data-sr-id=\"12\"></div><div class=\"featured-content-item__animation-container\"> <img src=\"https://soin.cloudmeserver.info/wp-content/uploads/2019/09/QgBb6k0V8W.jpg\" class=\"featured-content-item__image\" alt=\"\"></div></div><div class=\"featured-content-item__eyebrow font-mono-small font-weight-semibold mb-2\"> How to Create a Vintage Magazine Effect in a Sergey Prokudin-Gorsky Style 2018 professional</div><h3 class=\"featured-content-item__title\">Look up at the stars and not down at your feet. Try to make sense of what you see, and wonder about what makes the universe exist.</h3> <span class=\"arrow-link p-0 py-md-4\" data-eventaction=\"Featured Content Card Clicked\" data-eventcategory=\"Navigation - Content Card (single)\" data-eventlabel=\"Category:Preparing for a post-pandemic world: Transforming human capital and benefit actions | title:Read more\"> Lire la suite <i class=\"material-icons\" aria-hidden=\"true\">keyboard_arrow_right</i> </span></div> </a></div></div></div></div></div></div></div></div>
                                 </div>
                             </div>
                         </div>

                     </div>
                     <div class=\"row-fluid\">
                         <div id=\"carouselExampleDark\" class=\"col-md-9 col-lg-9 cols-sm-12 col-xs-12 carousel carousel-dark slide \" data-bs-ride=\"carousel\" style=\"z-index:-1;height: 577px;background-color: #e5e5e5;\">
                             <div class=\"carousel-indicators\">
                                 <button type=\"button\" data-bs-target=\"#carouselExampleDark\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
                                 <button type=\"button\" data-bs-target=\"#carouselExampleDark\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
                                 <button type=\"button\" data-bs-target=\"#carouselExampleDark\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
                             </div>
                             <div class=\"carousel-inner\">
                                 <div class=\"carousel-item active\" data-bs-interval=\"10000\">
                                     <svg class=\"bd-placeholder-img bd-placeholder-img-lg d-block w-100\" width=\"800\" height=\"400\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Third slide\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\">
                                         <title>Placeholder</title>
                                         <rect width=\"100%\" height=\"100%\" fill=\"#e5e5e5\"></rect>
                                         <text x=\"50%\" y=\"50%\" fill=\"#999\" dy=\".3em\"></text>
                                     </svg>
                                     <div class=\"carousel-caption d-none d-md-block\" style=\"background: white;\">
                                         <h5 style=\"
                                        font-size: 38px !important;
                                        color: rgb(38, 42, 77);
                                        padding: 25px 25px 25px 50px;
                                        margin-top: 10px !important;
                                        line-height: 50px;
                                        letter-spacing: -1px;
                                        font-weight: 700;
                                        text-align: left;\">
                                             L’assurance maladie décryptée pour éclairer vos collaborateurs sur les démarches à suivre. </h5>
                                         <p style=\"text-align: left;color: rgb(43, 168, 205);padding-left: 50px;font-size: 30px;font-weight: 700;\">
                                             <a>En savoir plus</a>
                                         </p>
                                     </div>
                                 </div>
                                 <div class=\"carousel-item\" data-bs-interval=\"2000\">
                                     <svg class=\"bd-placeholder-img bd-placeholder-img-lg d-block w-100\" width=\"800\" height=\"400\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Third slide\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\">
                                         <title>Placeholder</title>
                                         <rect width=\"100%\" height=\"100%\" fill=\"#e5e5e5\"></rect>
                                         <text x=\"50%\" y=\"50%\" fill=\"#999\" dy=\".3em\"></text>
                                     </svg>
                                     <div class=\"carousel-caption d-none d-md-block\" style=\"background: white;\">
                                         <h5 style=\"
                                        font-size: 38px !important;
                                        color: rgb(38, 42, 77);
                                        padding: 25px 25px 25px 50px;
                                        margin-top: 10px !important;
                                        line-height: 50px;
                                        letter-spacing: -1px;
                                        font-weight: 700;
                                        text-align: left;\">
                                             Un collaborateur avisé, donc moins  de dossiers rejetés et moins de réclamations.
                                             Plus de temps pour le social</h5>
                                         <p style=\"text-align: left;color: rgb(43, 168, 205);padding-left: 50px;font-size: 30px;font-weight: 700;\">
                                             <a>En savoir plus</a>
                                         </p>
                                     </div>
                                 </div>
                                 <div class=\"carousel-item\">
                                     <svg class=\"bd-placeholder-img bd-placeholder-img-lg d-block w-100\" width=\"800\" height=\"400\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Third slide\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\">
                                         <title>Placeholder</title>
                                         <rect width=\"100%\" height=\"100%\" fill=\"#e5e5e5\"></rect>
                                         <text x=\"50%\" y=\"50%\" fill=\"#999\" dy=\".3em\"></text>
                                     </svg>
                                     <div class=\"carousel-caption d-none d-md-block\" style=\"background: white;\">
                                         <h5 style=\"
                                        font-size: 38px !important;
                                        color: rgb(38, 42, 77);
                                        padding: 25px 25px 25px 50px;
                                        margin-top: 10px !important;
                                        line-height: 50px;
                                        letter-spacing: -1px;
                                        font-weight: 700;
                                        text-align: left;\">
                                             Une équipe expérimentée à l’écoute et qui accompagne  vos collaborateurs tout au long de leur parcours médical </h5>
                                         <p style=\"text-align: left;color: rgb(43, 168, 205);padding-left: 50px;font-size: 30px;font-weight: 700;\">
                                             <a>En savoir plus</a>
                                         </p>
                                     </div>
                                 </div>
                             </div>
                             <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleDark\" data-bs-slide=\"prev\">
                             </button>
                             </button>
                             <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleDark\" data-bs-slide=\"next\">
                             </button>
                         </div>
                     </div>
                 {% endblock %}

             </div>

                    {% block menu_header %}{% endblock %}
                    {% block login_header %}{% endblock %}

                    {% block sider_header %}
                        <div class=\"vlt-aside-menu-overlay\" ></div>
                        <div class=\"vlt-aside-menu-wrapper fade\" >
                            <div class=\"vlt-aside-menu\">
                                <div class=\"vlt-aside-menu__header\">
                                    <nav class=\"vlt-aside-menu__locales\" ></nav>
                                    <button type=\"button\" class=\"vlt-menu-burger vlt-menu-burger--opened btn-close\" aria-label=\"Close\"></button>

                                </div>
                                <nav class=\"vlt-aside-menu__navigation\"  >
                                    <ul class=\"sf-menu\">
                                        <li class=\"menu-item menu-item-home current-menu-item \">
                                            <a href=\"#\" aria-current=\"page\"><span>Home</span></a>
                                        </li>
                                        <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2781\">
                                            <a href=\"/qui-sommes-nous-2/\"><span>Qui Sommes nous</span></a>
                                        </li>
                                        <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-3926\">
                                            <a href=\"/services-soin-clair/\"><span>Nos Services</span></a>
                                        </li>
                                        <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-3925\">
                                            <a href=\"/nos-publications/\"><span>Nos publications</span></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class=\"aside-menu-overlay-right\" style=\"display: none;\"></div>
                        <div class=\"vlt-aside-menu-wrapper-right sf-js-enabled fade\" style=\"\">
                            <div class=\"vlt-aside-menu-right\">
                                <div class=\"vlt-aside-menu__header_right\">
                                    <nav class=\"vlt-aside-menu__locales_right\"></nav>
                                    <button type=\"button\" class=\"vlt-menu-burger-right btn-close\" aria-label=\"Close\"></button>
                                </div>
                            </div>
                            <nav class=\"vlt-aside-menu__navigation-right\" >
                                {% block menu_espace %}
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
                                        <a href=\"{{ path('espace_partenaire') }}\"><span>Partenaire</span></a>
                                    </li>
                                </ul>
                                {% endblock %}
                            </nav>
                        </div>

                    {% endblock %}

                {% block body %}

                        <main class=\"vlt-main\">
                            <div class=\"\" style=\"background-image: url('/img/static/dot-gray.jpg');background-position: 50% 50%;height: fit-content;padding-top:45px;\">

                                <section class=\"pb-5\">
                                    <div class=\"container py-4 text-black-50\">
                                        <header>
                                            <h1>Témoignages</h1>
                                        </header>
                                    </div>

                                    <div class=\"container\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-10 col-xl-8 mx-auto\">
                                                <div class=\"p-5 bg-white shadow rounded\">
                                                    <!-- Bootstrap carousel-->
                                                    <div class=\"carousel slide\" id=\"carouselQuotsIndicators\" data-ride=\"carousel\">
                                                        <!-- Bootstrap carousel indicators [nav] -->
                                                        <div class=\"carousel-indicators\">
                                                            <button type=\"button\" data-bs-target=\"#carouselQuotsIndicators\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
                                                            <button type=\"button\" data-bs-target=\"#carouselQuotsIndicators\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
                                                            <button type=\"button\" data-bs-target=\"#carouselQuotsIndicators\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
                                                            <button type=\"button\" data-bs-target=\"#carouselQuotsIndicators\" data-bs-slide-to=\"3\" aria-label=\"Slide 4\"></button>
                                                            <button type=\"button\" data-bs-target=\"#carouselQuotsIndicators\" data-bs-slide-to=\"4\" aria-label=\"Slide 5\"></button>
                                                        </div>


                                                        <!-- Bootstrap inner [slides]-->
                                                        <div class=\"carousel-inner px-5 pb-4\">
                                                            <!-- Carousel slide-->
                                                            <div class=\"carousel-item active\" data-bs-interval=\"5000\">
                                                                <div class=\"media\">
                                                                    <img class=\"rounded-circle img-thumbnail\" src=\"{{ asset('/img/static/default-user.png') }}\" alt=\"\" width=\"75\">
                                                                    <div class=\"media-body ml-3\">
                                                                        <blockquote class=\"blockquote border-0 p-0\">
                                                                            <p class=\"font-italic lead\"> <i class=\"fa fa-quote-left mr-3\" style=\"color: #ffc107;\"></i>
                                                                                Ce service m’a permis de prendre rendez-vous rapidement en urgence chez un gastro près de chez moi.
                                                                            </p>
                                                                            <footer class=\"blockquote-footer\">
                                                                                <cite title=\"Source Title\">Mohamed.B</cite>
                                                                            </footer>
                                                                        </blockquote>
                                                                    </div>
                                                                </div>
                                                            </div >

                                                            <!-- Carousel slide-->
                                                            <div class=\"carousel-item\" data-bs-interval=\"15000\">
                                                                <div class=\"media\">
                                                                    <img class=\"rounded-circle img-thumbnail\" src=\"{{ asset('/img/static/default-user.png') }}\" alt=\"\" width=\"75\">
                                                                    <div class=\"media-body ml-3\">
                                                                        <blockquote class=\"blockquote border-0 p-0\">
                                                                            <p class=\"font-italic lead\"> <i class=\"fa fa-quote-left mr-3\" style=\"color: #ffc107;\"></i>
                                                                                Avant mon opération j’ai contacté Soinclair pour avoir des renseignements sur la procédure à suivre.
                                                                            </p>
                                                                            <footer class=\"blockquote-footer\">
                                                                                <cite title=\"Source Title\">Saad.K</cite>
                                                                            </footer>
                                                                        </blockquote>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Carousel slide-->
                                                            <div class=\"carousel-item\" data-bs-interval=\"10000\">
                                                                <div class=\"media\">
                                                                    <img class=\"rounded-circle img-thumbnail\" src=\"{{ asset('/img/static/default-user.png') }}\" alt=\"\" width=\"75\">
                                                                    <div class=\"media-body ml-3\">
                                                                        <blockquote class=\"blockquote border-0 p-0\">
                                                                            <p class=\"font-italic lead\"> <i class=\"fa fa-quote-left mr-3\" style=\"color: #ffc107;\"></i>
                                                                                Qui aurait su que je pouvais économiser de l’argent en analysant mon devis par votre service, Merci SOINCAIR.
                                                                            </p>
                                                                            <footer class=\"blockquote-footer\">
                                                                                <cite title=\"Source Title\">Malika.F</cite>
                                                                            </footer>

                                                                        </blockquote>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Carousel slide-->
                                                            <div class=\"carousel-item\" data-bs-interval=\"5000\">
                                                                <div class=\"media\">
                                                                    <img class=\"rounded-circle img-thumbnail\" src=\"{{ asset('/img/static/default-user.png') }}\" alt=\"\" width=\"75\">
                                                                    <div class=\"media-body ml-3\">
                                                                        <blockquote class=\"blockquote border-0 p-0\">
                                                                            <p class=\"font-italic lead\"> <i class=\"fa fa-quote-left mr-3\" style=\"color: #ffc107;\"></i>
                                                                                Ce fut une expérience formidable. Ils se sont occupés de tout, ont rendu la chirurgie moins stressante, excellent docteur et installation.
                                                                            </p>
                                                                            <footer class=\"blockquote-footer\">
                                                                                <cite title=\"Source Title\">Rachid.T</cite>
                                                                            </footer>
                                                                        </blockquote>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <!-- Carousel slide-->
                                                            <div class=\"carousel-item\" data-bs-interval=\"\">
                                                                <div class=\"media\">
                                                                    <img class=\"rounded-circle img-thumbnail\" src=\"{{ asset('/img/static/default-user.png') }}\" alt=\"\" width=\"75\">
                                                                    <div class=\"media-body ml-3\">
                                                                        <blockquote class=\"blockquote border-0 p-0\">
                                                                            <p class=\"font-italic lead\"> <i class=\"fa fa-quote-left mr-3\" style=\"color: #ffc107;\"></i>
                                                                                Je tiens à remercier vos équipes, avant l’accouchement de ma femme, les conseillers m’ont aidé à monter mon dossier de prise en charge.
                                                                            </p>
                                                                            <footer class=\"blockquote-footer\">
                                                                                <cite title=\"Source Title\">Omar.S</cite>
                                                                            </footer>
                                                                        </blockquote>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>


                                                        <!-- Bootstrap controls [dots]-->
                                                        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselQuotsIndicators\" data-bs-slide=\"prev\" style=\"padding-right: 14%;\">
                                                            <i class=\"fa fa-angle-left text-dark text-lg\"></i>
                                                            <span class=\"sr-only\">Previous</span>
                                                        </button>
                                                        </button>
                                                        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselQuotsIndicators\" data-bs-slide=\"next\" style=\"padding-left: 14%;\">
                                                            <i class=\"fa fa-angle-right text-dark text-lg\"></i>
                                                            <span class=\"sr-only\">Next</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                            </div>

                            <div class=\"\" style=\"background-color:#cecece2b;background-position: 50% 50%;height: fit-content;padding-top:45px;\">

                                <section class=\"pb-5\">
                                    <div class=\"container py-4 text-black-50\">
                                        <header>
                                            <h1>Nos Service</h1>
                                        </header>
                                    </div>
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

                        </main>

                {% endblock %}
                {% block footer %}
                    <footer class=\"vlt-footer vlt-footer--style-1\" style=\"padding: 26px 16%;\">
                        <div class=\"container\">
                            <div class=\"vlt-footer-head\">
                                <a href=\"https://soin.cloudmeserver.info/\" class=\"vlt-footer-logo\">
                                    <img src=\"https://soin.cloudmeserver.info/wp-content/uploads/2021/03/logo-sc-jaune-bleu-2-1-1-1.png\" alt=\"SOIN CLAIR\" class=\"white\">
                                </a>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-12 col-sm-6 col-xl-4\">
                                    <div id=\"text-3\" class=\"vlt-widget widget_text\">
                                        <div class=\"textwidget\"><h4>À propos de nous</h4>
                                            <p>
                                                <a href=\"/qui-sommes-nous\" style=\"color: inherit;\">Qui sommes-nous</a><br>
                                                <a href=\"/services-soin-clair\" style=\"color: inherit;\">Nos services</a><br>
                                                <a href=\"nos-publications\" style=\"color: inherit;\">Publications</a><br>
                                                <a href=\"/cgu/\" style=\"color: inherit;\">CGU-Politique de confidentialité</a>
                                            </p>
                                            <p>
                                                <a><strong>Professionnel de santé : rejoignez-nous !</strong></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-12 col-sm-6 col-xl-4\">
                                    <div id=\"text-5\" class=\"vlt-widget widget_text\">
                                        <div class=\"textwidget\">
                                            <h4>Contactez-nous</h4>
                                            <p>
                                                <img loading=\"lazy\" class=\"alignnone size-full wp-image-2527\" src=\"https://soin.cloudmeserver.info/wp-content/uploads/2021/02/enveloppe-2.png\" alt=\"\" width=\"24\" height=\"24\">&nbsp; &nbsp;Contact@soinclair.ma</p><p><img loading=\"lazy\" class=\"alignnone size-full wp-image-2528\" src=\"https://soin.cloudmeserver.info/wp-content/uploads/2021/02/silhouette-de-poignee-de-telephone.png\" alt=\"\" width=\"24\" height=\"24\">&nbsp; &nbsp;Tel: 06 62 79 03 45<br> <img loading=\"lazy\" class=\"alignnone wp-image-2528 size-full\" src=\"https://soin.cloudmeserver.info/wp-content/uploads/2021/02/silhouette-de-poignee-de-telephone.png\" alt=\"\" width=\"24\" height=\"24\">&nbsp; &nbsp; Fax: 05 22 86 28 88</p><p><img loading=\"lazy\" class=\"alignnone size-full wp-image-2529\" src=\"https://soin.cloudmeserver.info/wp-content/uploads/2021/02/accueil.png\" alt=\"\" width=\"24\" height=\"24\">
                                                &nbsp; &nbsp;236 IMM F8, Bd Abdelmoumen,<br/>
                                                &nbsp; &nbsp;2ème étage N°6 - Casablanca
                                            </p>
                                            <p>
                                                <img loading=\"lazy\" class=\"alignnone size-full wp-image-2530\" src=\"https://soin.cloudmeserver.info/wp-content/uploads/2021/02/temps.png\" alt=\"\" width=\"24\" height=\"24\"> &nbsp; Du lundi au vendredi de 9h00 à 19h00<br> <img loading=\"lazy\" class=\"alignnone size-full wp-image-2604\" src=\"https://soin.cloudmeserver.info/wp-content/uploads/2021/02/rotation-horaire.png\" alt=\"\" width=\"32\" height=\"32\"> Samedi de 9h00 à 13h00
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-12 col-sm-6 col-xl-4\">
                                    <div id=\"text-4\" class=\"vlt-widget widget_text\">
                                        <div class=\"textwidget\">
                                            <h4>Suivez-nous</h4>
                                            <p>
                                                <a href=\"https://www.facebook.com/SoinClair.SoinClair\">
                                                    <img loading=\"lazy\" class=\"alignnone size-full wp-image-2588\" src=\"https://soin.cloudmeserver.info/wp-content/uploads/2021/02/facebook-3.png\" alt=\"\" width=\"16\" height=\"16\">
                                                </a>&nbsp; &nbsp;
                                                <a href=\"https://www.linkedin.com/company/soinclair\">
                                                    <img loading=\"lazy\" class=\"alignnone size-full wp-image-2589\" src=\"https://soin.cloudmeserver.info/wp-content/uploads/2021/02/linkedin-1.png\" alt=\"\" width=\"16\" height=\"16\">
                                                </a>&nbsp; &nbsp;
                                                <img loading=\"lazy\" class=\"alignnone size-full wp-image-2590\" src=\"https://soin.cloudmeserver.info/wp-content/uploads/2021/02/youtube-2.png\" alt=\"\" width=\"16\" height=\"16\">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"vlt-footer-copyright\"><p>Droit d'auteur @2021 SOIN CLAIR</p></div>
                        </div>
                    </footer>
                {% endblock %}

        </div>
    </body>

    {% block javascripts %}
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
        <!-- JavaScript Bundle with Popper -->
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf\" crossorigin=\"anonymous\"></script>

        <script src=\" {{  asset('js/static/app.js') }}\"></script>
        {#{{ encore_entry_script_tags('app') }}#}
        <script>
            \$(document).ready(function(){

                // --------------------------
                // Sider menu right accordion
                // --------------------------
                \$('.accordi.nav-link.marging-item-nav').on('click',function(){
                    if(\$('#_container-accordion').hasClass('col-md-12') ){
                        console.log('open');
                        \$('#_container-flex').css('width','100%');
                        \$('#_container-accordion').toggleClass('col-md-12');
                        \$('#_container-accordion').toggleClass('col-md-3');
                        \$('#_container-flex').css('left','0%');
                        \$('#_accordion-cible').toggleClass('fade');
                        \$('#_accordion-cible').toggleClass('col-md-9 col-sm-12');
                    }
                });

                \$('._close-accordion').on('click',function(){
                    if(!\$('#_container-accordion').hasClass('col-md-12') ){
                        console.log('close');
                        \$('#_accordion-cible').toggleClass('fade');
                        \$('#_accordion-cible').toggleClass('col-md-9 col-sm-12');
                        \$('#_container-flex').css('width','');
                        \$('#_container-accordion').toggleClass('col-md-3');
                        \$('#_container-accordion').toggleClass('col-md-12');
                        \$('#_container-flex').css('left','75%');
                    }
                });

                // ---------------
                // Sider menu left
                // ---------------
                \$('.vlt-menu-burger.vlt-menu-burger--opened').on('click',function(){
                    if (\$('.vlt-aside-menu-wrapper').hasClass('opened'))
                    {
                        \$('.vlt-aside-menu-wrapper').toggleClass('opened');
                        \$('.vlt-aside-menu-wrapper').toggleClass('fade');
                        \$('.vlt-aside-menu-wrapper').css('left','0%');
                        \$('.aside-menu-overlay-right').css('display','none');
                    }
                });

                \$('.item-header.right.col-md-2.col-sm-6').on('click',function(){
                    if (\$('.vlt-aside-menu-wrapper').hasClass('fade'))
                    {
                        \$('.vlt-aside-menu-wrapper').toggleClass('fade');
                        \$('.vlt-aside-menu-wrapper').toggleClass('opened');
                        \$('.vlt-aside-menu-wrapper').css('left','35%');
                        \$('.aside-menu-overlay-right').css('display','block');
                    }
                });

                // ---------------
                // Sider menu right
                // ---------------
//
                \$('.vlt-menu-burger-right').on('click',function(){
                    if (\$('.vlt-aside-menu-wrapper-right.sf-js-enabled').hasClass('opened'))
                    {
                        \$('.vlt-aside-menu-wrapper-right.sf-js-enabled').toggleClass('opened');
                        \$('.vlt-aside-menu-wrapper-right.sf-js-enabled').toggleClass('fade');
                        \$('.vlt-aside-menu-wrapper-right.sf-js-enabled').css('right','0%');
                        \$('.aside-menu-overlay-right').css('display','none');
                    }
                });

                \$('.item-header.left.col-md-2.col-sm-6').on('click',function(){
                    if (\$('.vlt-aside-menu-wrapper-right.sf-js-enabled').hasClass('fade'))
                    {
                        \$('.vlt-aside-menu-wrapper-right.sf-js-enabled').toggleClass('fade');
                        \$('.vlt-aside-menu-wrapper-right.sf-js-enabled').toggleClass('opened');
                        \$('.vlt-aside-menu-wrapper-right.sf-js-enabled').css('right','33%');
                        \$('.aside-menu-overlay-right').css('display','block');
                    }
                });

            });

            //carousel
            \$(document).ready(function(){
                console.log(\"hello world\");
                \$('#carouselQuotsIndicators').on('slide.bs.carousel', function () {
                    \$holder = \$( \"ol li.active\" );
                    \$holder.removeClass('active');
                    var idx = \$('div.active').index('div.item');
                    \$('ol.carousel-indicators li[data-slide-to=\"'+ idx+'\"]').addClass('active');
                });

                \$('.carousel-indicators button').on(\"click\",function(){
                    \$('ol.carousel-indicators li.active').removeClass(\"active\");
                    \$(this).addClass(\"active\");
                });
            });
        </script>

    {% endblock %}
    {% block map_javascript %}
        <!-- Make sure you put this AFTER Leaflet's CSS -->
        <script src=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.js\"
                integrity=\"sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==\"
                crossorigin=\"\"></script>
        <script type=\"text/javascript\">



        </script>

    {% endblock %}
</html>
", "base.html.twig", "C:\\Users\\czakaria\\lab\\projects\\soinclair\\soin_clair\\templates\\base.html.twig");
    }
}
