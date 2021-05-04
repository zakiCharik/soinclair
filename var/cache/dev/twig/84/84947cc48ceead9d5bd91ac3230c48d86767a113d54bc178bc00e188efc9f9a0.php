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

/* /admin/index.html.twig */
class __TwigTemplate_d2acf0673c15b3bf627b0660de6f97003c896c4e7bd8842981a239ef77ea4e84 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head_admin' => [$this, 'block_head_admin'],
            'title_admin' => [$this, 'block_title_admin'],
            'sidebar_admin' => [$this, 'block_sidebar_admin'],
            'top_nav_admin' => [$this, 'block_top_nav_admin'],
            'content_admin' => [$this, 'block_content_admin'],
            'title_page_admin' => [$this, 'block_title_page_admin'],
            'content' => [$this, 'block_content'],
            'footer_admin' => [$this, 'block_footer_admin'],
            'script_admin' => [$this, 'block_script_admin'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/admin/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    ";
        // line 4
        $this->displayBlock('head_admin', $context, $blocks);
        // line 35
        echo "</head>

<body class=\"nav-md\">
<div class=\"container body\">
    <div class=\"main_container\">
        ";
        // line 40
        $this->displayBlock('sidebar_admin', $context, $blocks);
        // line 166
        echo "        <!-- top navigation -->
        ";
        // line 167
        $this->displayBlock('top_nav_admin', $context, $blocks);
        // line 259
        echo "        <!-- /top navigation -->

        <!-- page content -->
        ";
        // line 262
        $this->displayBlock('content_admin', $context, $blocks);
        // line 386
        echo "        <!-- /page content -->

        <!-- footer content -->
        ";
        // line 389
        $this->displayBlock('footer_admin', $context, $blocks);
        // line 395
        echo "        <!-- /footer content -->
    </div>
</div>
";
        // line 398
        $this->displayBlock('script_admin', $context, $blocks);
        // line 444
        echo "
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_head_admin($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_admin"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_admin"));

        // line 5
        echo "    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"icon\" href=\"images/favicon.ico\" type=\"image/ico\" />

    <title>";
        // line 12
        $this->displayBlock('title_admin', $context, $blocks);
        echo "</title>

    <!-- Bootstrap -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/vendors/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!-- Font Awesome -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!-- NProgress -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/vendors/nprogress/nprogress.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!-- iCheck -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/vendors/iCheck/skins/flat/green.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- bootstrap-progressbar -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" >
    <!-- JQVMap -->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/vendors/jqvmap/dist/jqvmap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <!-- bootstrap-daterangepicker -->
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/vendors/bootstrap-daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- Custom Theme Style -->
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/build/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/build/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_title_admin($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title_admin"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title_admin"));

        echo "Gentelella Alela! | ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_sidebar_admin($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_admin"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_admin"));

        // line 41
        echo "        <div class=\"col-md-3 left_col\">
            <div class=\"left_col scroll-view\">
                <div class=\"navbar nav_title\" style=\"border: 0;\">
                    <a href=\"index.html\" class=\"site_title\">
                        <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/static/logo-sc-jaune-bleu-2-1-2.png"), "html", null, true);
        echo "\" style=\"width: 141px;height: 29px;\">
                    </a>
                </div>

                <div class=\"clearfix\"></div>

                <!-- menu profile quick info -->
                <div class=\"profile clearfix\">
                    <div class=\"profile_pic\">
                        <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/production/images/img.jpg"), "html", null, true);
        echo "\" alt=\"...\" class=\"img-circle profile_img\">
                    </div>
                    <div class=\"profile_info\">
                        <span>Welcome,</span>
                        <h2>";
        // line 58
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 58), "username", [], "any", true, true, false, 58) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 58), "username", [], "any", false, false, false, 58)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 58), "username", [], "any", false, false, false, 58), "html", null, true))) : (print ("Anonymous user")));
        echo "</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\" style=\"height: 800px;\">
                    <div class=\"menu_section\">
                        <h3>General</h3>
                        <ul class=\"nav side-menu\">
                            <li><a><i class=\"fa fa-home\"></i> Home <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"#\">Setting profil</a></li>
                                    <li><a href=\"#\">Statistique</a></li>
                                </ul>
                            </li>

                            <li><a> <i class=\"fa fa-user\"></i> Adhérent<span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li> <a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherant_index");
        echo "\">List</a> </li>
                                    <li> <a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherant_new");
        echo "\">Nouveau</a> </li>
                                    <li> <a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherant_import");
        echo "\">Import</a> </li>
                                    <li> <a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherant_importzip");
        echo "\">Import Cards</a> </li>
                                </ul>
                            </li>

                            <li><a> <i class=\"fa fa-building-o\"></i> Employeur<span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li> <a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employeur_index");
        echo "\">List</a> </li>
                                    <li> <a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employeur_new");
        echo "\">Nouveau</a> </li>
                                </ul>
                            </li>

                            <li><a> <i class=\"fa fa-hand-o-right\"></i> Professionel de santé<span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li> <a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partenaire_index");
        echo "\">List</a> </li>
                                    <li> <a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partenaire_new");
        echo "\">Nouveau</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class=\"menu_section \" style=\"display: none\">
                        <h3>Live On</h3>
                        <ul class=\"nav side-menu\">
                            <li><a><i class=\"fa fa-bug\"></i> Additional Pages <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"e_commerce.html\">E-commerce</a></li>
                                    <li><a href=\"projects.html\">Projects</a></li>
                                    <li><a href=\"project_detail.html\">Project Detail</a></li>
                                    <li><a href=\"contacts.html\">Contacts</a></li>
                                    <li><a href=\"profile.html\">Profile</a></li>
                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-windows\"></i> Extras <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"page_403.html\">403 Error</a></li>
                                    <li><a href=\"page_404.html\">404 Error</a></li>
                                    <li><a href=\"page_500.html\">500 Error</a></li>
                                    <li><a href=\"plain_page.html\">Plain Page</a></li>
                                    <li><a href=\"login.html\">Login Page</a></li>
                                    <li><a href=\"pricing_tables.html\">Pricing Tables</a></li>
                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-sitemap\"></i> Multilevel Menu <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"#level1_1\">Level One</a>
                                    <li><a>Level One<span class=\"fa fa-chevron-down\"></span></a>
                                        <ul class=\"nav child_menu\">
                                            <li class=\"sub_menu\"><a href=\"level2.html\">Level Two</a>
                                            </li>
                                            <li><a href=\"#level2_1\">Level Two</a>
                                            </li>
                                            <li><a href=\"#level2_2\">Level Two</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href=\"#level1_2\">Level One</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href=\"javascript:void(0)\"><i class=\"fa fa-laptop\"></i> Landing Page <span class=\"label label-success pull-right\">Coming Soon</span></a></li>
                        </ul>
                    </div>

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class=\"sidebar-footer hidden-small\">
                    <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\">
                        <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
                    </a>
                    <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"FullScreen\">
                        <span class=\"glyphicon glyphicon-fullscreen\" aria-hidden=\"true\"></span>
                    </a>
                    <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Lock\">
                        <span class=\"glyphicon glyphicon-eye-close\" aria-hidden=\"true\"></span>
                    </a>
                    <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\" href=\"login.html\">
                        <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 167
    public function block_top_nav_admin($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "top_nav_admin"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "top_nav_admin"));

        // line 168
        echo "        <div class=\"top_nav\">
            <div class=\"nav_menu\">
                <div class=\"nav toggle\">
                    <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
                </div>
                <nav class=\"nav navbar-nav\">
                    <ul class=\" navbar-right\">
                        <li class=\"nav-item dropdown open\" style=\"padding-left: 15px;\">
                            <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" aria-haspopup=\"true\" id=\"navbarDropdown\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                <img src=\"images/img.jpg\" alt=\"\">John Doe
                            </a>
                            <div class=\"dropdown-menu dropdown-usermenu pull-right\" aria-labelledby=\"navbarDropdown\">
                                <a class=\"dropdown-item\"  href=\"javascript:;\"> Profile</a>
                                <a class=\"dropdown-item\"  href=\"javascript:;\">
                                    <span class=\"badge bg-red pull-right\">50%</span>
                                    <span>Settings</span>
                                </a>
                                <a class=\"dropdown-item\"  href=\"javascript:;\">Help</a>
                                <a class=\"dropdown-item\"  href=\"login.html\"><i class=\"fa fa-sign-out pull-right\"></i> Log Out</a>
                            </div>
                        </li>

                        <li role=\"presentation\" class=\"nav-item dropdown open\">
                            <a href=\"javascript:;\" class=\"dropdown-toggle info-number\" id=\"navbarDropdown1\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"fa fa-envelope-o\"></i>
                                <span class=\"badge bg-green\">6</span>
                            </a>
                            <ul class=\"dropdown-menu list-unstyled msg_list\" role=\"menu\" aria-labelledby=\"navbarDropdown1\">
                                <li class=\"nav-item\">
                                    <a class=\"dropdown-item\">
                                        <span class=\"image\"><img src=\"images/img.jpg\" alt=\"Profile Image\" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"dropdown-item\">
                                        <span class=\"image\"><img src=\"images/img.jpg\" alt=\"Profile Image\" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"dropdown-item\">
                                        <span class=\"image\"><img src=\"images/img.jpg\" alt=\"Profile Image\" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"dropdown-item\">
                                        <span class=\"image\"><img src=\"images/img.jpg\" alt=\"Profile Image\" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <div class=\"text-center\">
                                        <a class=\"dropdown-item\">
                                            <strong>See All Alerts</strong>
                                            <i class=\"fa fa-angle-right\"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 262
    public function block_content_admin($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_admin"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_admin"));

        // line 263
        echo "        <div class=\"right_col\" role=\"main\">
            <!-- top tiles -->
            <div class=\"row\" style=\"display: inline-block;\" >
                <div class=\"tile_count\">
                    <div class=\"col-md-2 col-sm-4  tile_stats_count\">
                        <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Users</span>
                        <div class=\"count\">2500</div>
                        <span class=\"count_bottom\"><i class=\"green\">4% </i> From last Week</span>
                    </div>
                    <div class=\"col-md-2 col-sm-4  tile_stats_count\">
                        <span class=\"count_top\"><i class=\"fa fa-clock-o\"></i> Average Time</span>
                        <div class=\"count\">123.50</div>
                        <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>3% </i> From last Week</span>
                    </div>
                    <div class=\"col-md-2 col-sm-4  tile_stats_count\">
                        <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Males</span>
                        <div class=\"count green\">2,500</div>
                        <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>34% </i> From last Week</span>
                    </div>
                    <div class=\"col-md-2 col-sm-4  tile_stats_count\">
                        <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Females</span>
                        <div class=\"count\">4,567</div>
                        <span class=\"count_bottom\"><i class=\"red\"><i class=\"fa fa-sort-desc\"></i>12% </i> From last Week</span>
                    </div>
                    <div class=\"col-md-2 col-sm-4  tile_stats_count\">
                        <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Collections</span>
                        <div class=\"count\">2,315</div>
                        <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>34% </i> From last Week</span>
                    </div>
                    <div class=\"col-md-2 col-sm-4  tile_stats_count\">
                        <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Connections</span>
                        <div class=\"count\">7,325</div>
                        <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>34% </i> From last Week</span>
                    </div>
                </div>
            </div>
            <!-- /top tiles -->
            <div class=\"page-title\">
                <div class=\"title_left\">
                    <h2>";
        // line 302
        $this->displayBlock('title_page_admin', $context, $blocks);
        echo "</h2>
                </div>

                <div class=\"title_right\">
                    <div class=\"col-md-5 col-sm-5   form-group pull-right top_search\">
                    </div>
                </div>
            </div>


            <div class=\"row\">
                <div class=\"col-md-12 col-sm-12 \">
                    ";
        // line 314
        $this->displayBlock('content', $context, $blocks);
        // line 380
        echo "                </div>

            </div>
            <br />
        </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 302
    public function block_title_page_admin($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title_page_admin"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title_page_admin"));

        echo " Principal ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 314
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 315
        echo "                    <div class=\"dashboard_graph\">

                        <div class=\"row x_title\">
                            <div class=\"col-md-6\">
                                <h3>Network Activities <small>Graph title sub-title</small></h3>
                            </div>
                            <div class=\"col-md-6\">
                                <div id=\"reportrange\" class=\"pull-right\" style=\"background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc\">
                                    <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
                                    <span>December 30, 2014 - January 28, 2015</span> <b class=\"caret\"></b>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-md-9 col-sm-9 \">
                            <div id=\"chart_plot_01\" class=\"demo-placeholder\"></div>
                        </div>
                        <div class=\"col-md-3 col-sm-3  bg-white\">
                            <div class=\"x_title\">
                                <h2>Top Campaign Performance</h2>
                                <div class=\"clearfix\"></div>
                            </div>

                            <div class=\"col-md-12 col-sm-12 \">
                                <div>
                                    <p>Facebook Campaign</p>
                                    <div class=\"\">
                                        <div class=\"progress progress_sm\" style=\"width: 76%;\">
                                            <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"80\"></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p>Twitter Campaign</p>
                                    <div class=\"\">
                                        <div class=\"progress progress_sm\" style=\"width: 76%;\">
                                            <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"60\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-12 col-sm-12 \">
                                <div>
                                    <p>Conventional Media</p>
                                    <div class=\"\">
                                        <div class=\"progress progress_sm\" style=\"width: 76%;\">
                                            <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"40\"></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p>Bill boards</p>
                                    <div class=\"\">
                                        <div class=\"progress progress_sm\" style=\"width: 76%;\">
                                            <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"50\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class=\"clearfix\"></div>
                    </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 389
    public function block_footer_admin($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer_admin"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer_admin"));

        // line 390
        echo "        <footer>

            <div class=\"clearfix\"></div>
        </footer>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 398
    public function block_script_admin($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script_admin"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script_admin"));

        // line 399
        echo "    <!-- jQuery -->
    <script src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
    <!-- NProgress -->
    <script src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
    <!-- Chart.js -->
    <script src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/vendors/Chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <!-- gauge.js -->
    <script src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/vendors/gauge.js/dist/gauge.min.js"), "html", null, true);
        echo " \"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <!-- iCheck -->
    <script src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Skycons -->
    <script src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/vendors/skycons/skycons.js"), "html", null, true);
        echo "\"></script>
    <!-- Flot -->
    <script src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/vendors/Flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/vendors/Flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/vendors/Flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 421
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/vendors/Flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/vendors/Flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
    <!-- Flot plugins -->
    <script src=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/vendors/flot-spline/js/jquery.flot.spline.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 426
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/vendors/flot.curvedlines/curvedLines.js"), "html", null, true);
        echo "\"></script>
    <!-- DateJS -->
    <script src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/vendors/DateJS/build/date.js"), "html", null, true);
        echo "\"></script>
    <!-- JQVMap -->
    <script src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/vendors/jqvmap/dist/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/vendors/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 435
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/vendors/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/build/js/custom.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 439
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/vendors/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/admin/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  837 => 441,  833 => 440,  829 => 439,  825 => 438,  819 => 435,  815 => 434,  810 => 432,  806 => 431,  802 => 430,  797 => 428,  792 => 426,  788 => 425,  784 => 424,  779 => 422,  775 => 421,  771 => 420,  767 => 419,  763 => 418,  758 => 416,  753 => 414,  748 => 412,  743 => 410,  738 => 408,  733 => 406,  728 => 404,  723 => 402,  718 => 400,  715 => 399,  705 => 398,  691 => 390,  681 => 389,  607 => 315,  597 => 314,  578 => 302,  563 => 380,  561 => 314,  546 => 302,  505 => 263,  495 => 262,  395 => 168,  385 => 167,  305 => 96,  301 => 95,  292 => 89,  288 => 88,  279 => 82,  275 => 81,  271 => 80,  267 => 79,  243 => 58,  236 => 54,  224 => 45,  218 => 41,  208 => 40,  189 => 12,  177 => 33,  173 => 32,  169 => 31,  163 => 28,  158 => 26,  153 => 24,  147 => 21,  142 => 19,  137 => 17,  132 => 15,  126 => 12,  117 => 5,  107 => 4,  94 => 444,  92 => 398,  87 => 395,  85 => 389,  80 => 386,  78 => 262,  73 => 259,  71 => 167,  68 => 166,  66 => 40,  59 => 35,  57 => 4,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    {% block head_admin %}
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"icon\" href=\"images/favicon.ico\" type=\"image/ico\" />

    <title>{% block title_admin %}Gentelella Alela! | {% endblock %}</title>

    <!-- Bootstrap -->
    <link href=\"{{ asset('/admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}\" rel=\"stylesheet\" />
    <!-- Font Awesome -->
    <link href=\"{{ asset('/admin/vendors/font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\" />
    <!-- NProgress -->
    <link href=\"{{ asset('/admin/vendors/nprogress/nprogress.css') }}\" rel=\"stylesheet\" />
    <!-- iCheck -->
    <link href=\"{{ asset('/admin/vendors/iCheck/skins/flat/green.css') }}\" rel=\"stylesheet\" />

    <!-- bootstrap-progressbar -->
    <link href=\"{{ asset('/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}\" rel=\"stylesheet\" >
    <!-- JQVMap -->
    <link href=\"{{ asset('/admin/vendors/jqvmap/dist/jqvmap.min.css') }}\" rel=\"stylesheet\"/>
    <!-- bootstrap-daterangepicker -->
    <link href=\"{{ asset('/admin/vendors/bootstrap-daterangepicker/daterangepicker.css') }}\" rel=\"stylesheet\" />

    <!-- Custom Theme Style -->
    <link href=\"{{ asset('/admin/build/css/custom.min.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('/admin/build/css/custom.min.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('/admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}\" rel=\"stylesheet\" />
    {% endblock %}
</head>

<body class=\"nav-md\">
<div class=\"container body\">
    <div class=\"main_container\">
        {% block sidebar_admin %}
        <div class=\"col-md-3 left_col\">
            <div class=\"left_col scroll-view\">
                <div class=\"navbar nav_title\" style=\"border: 0;\">
                    <a href=\"index.html\" class=\"site_title\">
                        <img src=\"{{ asset('/img/static/logo-sc-jaune-bleu-2-1-2.png') }}\" style=\"width: 141px;height: 29px;\">
                    </a>
                </div>

                <div class=\"clearfix\"></div>

                <!-- menu profile quick info -->
                <div class=\"profile clearfix\">
                    <div class=\"profile_pic\">
                        <img src=\"{{  asset('/admin/production/images/img.jpg') }}\" alt=\"...\" class=\"img-circle profile_img\">
                    </div>
                    <div class=\"profile_info\">
                        <span>Welcome,</span>
                        <h2>{{ app.user.username ?? 'Anonymous user' }}</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\" style=\"height: 800px;\">
                    <div class=\"menu_section\">
                        <h3>General</h3>
                        <ul class=\"nav side-menu\">
                            <li><a><i class=\"fa fa-home\"></i> Home <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"#\">Setting profil</a></li>
                                    <li><a href=\"#\">Statistique</a></li>
                                </ul>
                            </li>

                            <li><a> <i class=\"fa fa-user\"></i> Adhérent<span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li> <a href=\"{{ path('adherant_index') }}\">List</a> </li>
                                    <li> <a href=\"{{ path('adherant_new') }}\">Nouveau</a> </li>
                                    <li> <a href=\"{{ path('adherant_import') }}\">Import</a> </li>
                                    <li> <a href=\"{{ path('adherant_importzip') }}\">Import Cards</a> </li>
                                </ul>
                            </li>

                            <li><a> <i class=\"fa fa-building-o\"></i> Employeur<span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li> <a href=\"{{ path('employeur_index') }}\">List</a> </li>
                                    <li> <a href=\"{{ path('employeur_new') }}\">Nouveau</a> </li>
                                </ul>
                            </li>

                            <li><a> <i class=\"fa fa-hand-o-right\"></i> Professionel de santé<span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li> <a href=\"{{ path('partenaire_index') }}\">List</a> </li>
                                    <li> <a href=\"{{ path('partenaire_new') }}\">Nouveau</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class=\"menu_section \" style=\"display: none\">
                        <h3>Live On</h3>
                        <ul class=\"nav side-menu\">
                            <li><a><i class=\"fa fa-bug\"></i> Additional Pages <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"e_commerce.html\">E-commerce</a></li>
                                    <li><a href=\"projects.html\">Projects</a></li>
                                    <li><a href=\"project_detail.html\">Project Detail</a></li>
                                    <li><a href=\"contacts.html\">Contacts</a></li>
                                    <li><a href=\"profile.html\">Profile</a></li>
                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-windows\"></i> Extras <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"page_403.html\">403 Error</a></li>
                                    <li><a href=\"page_404.html\">404 Error</a></li>
                                    <li><a href=\"page_500.html\">500 Error</a></li>
                                    <li><a href=\"plain_page.html\">Plain Page</a></li>
                                    <li><a href=\"login.html\">Login Page</a></li>
                                    <li><a href=\"pricing_tables.html\">Pricing Tables</a></li>
                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-sitemap\"></i> Multilevel Menu <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"#level1_1\">Level One</a>
                                    <li><a>Level One<span class=\"fa fa-chevron-down\"></span></a>
                                        <ul class=\"nav child_menu\">
                                            <li class=\"sub_menu\"><a href=\"level2.html\">Level Two</a>
                                            </li>
                                            <li><a href=\"#level2_1\">Level Two</a>
                                            </li>
                                            <li><a href=\"#level2_2\">Level Two</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href=\"#level1_2\">Level One</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href=\"javascript:void(0)\"><i class=\"fa fa-laptop\"></i> Landing Page <span class=\"label label-success pull-right\">Coming Soon</span></a></li>
                        </ul>
                    </div>

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class=\"sidebar-footer hidden-small\">
                    <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\">
                        <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
                    </a>
                    <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"FullScreen\">
                        <span class=\"glyphicon glyphicon-fullscreen\" aria-hidden=\"true\"></span>
                    </a>
                    <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Lock\">
                        <span class=\"glyphicon glyphicon-eye-close\" aria-hidden=\"true\"></span>
                    </a>
                    <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\" href=\"login.html\">
                        <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>
        {% endblock %}
        <!-- top navigation -->
        {% block top_nav_admin %}
        <div class=\"top_nav\">
            <div class=\"nav_menu\">
                <div class=\"nav toggle\">
                    <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
                </div>
                <nav class=\"nav navbar-nav\">
                    <ul class=\" navbar-right\">
                        <li class=\"nav-item dropdown open\" style=\"padding-left: 15px;\">
                            <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" aria-haspopup=\"true\" id=\"navbarDropdown\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                <img src=\"images/img.jpg\" alt=\"\">John Doe
                            </a>
                            <div class=\"dropdown-menu dropdown-usermenu pull-right\" aria-labelledby=\"navbarDropdown\">
                                <a class=\"dropdown-item\"  href=\"javascript:;\"> Profile</a>
                                <a class=\"dropdown-item\"  href=\"javascript:;\">
                                    <span class=\"badge bg-red pull-right\">50%</span>
                                    <span>Settings</span>
                                </a>
                                <a class=\"dropdown-item\"  href=\"javascript:;\">Help</a>
                                <a class=\"dropdown-item\"  href=\"login.html\"><i class=\"fa fa-sign-out pull-right\"></i> Log Out</a>
                            </div>
                        </li>

                        <li role=\"presentation\" class=\"nav-item dropdown open\">
                            <a href=\"javascript:;\" class=\"dropdown-toggle info-number\" id=\"navbarDropdown1\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"fa fa-envelope-o\"></i>
                                <span class=\"badge bg-green\">6</span>
                            </a>
                            <ul class=\"dropdown-menu list-unstyled msg_list\" role=\"menu\" aria-labelledby=\"navbarDropdown1\">
                                <li class=\"nav-item\">
                                    <a class=\"dropdown-item\">
                                        <span class=\"image\"><img src=\"images/img.jpg\" alt=\"Profile Image\" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"dropdown-item\">
                                        <span class=\"image\"><img src=\"images/img.jpg\" alt=\"Profile Image\" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"dropdown-item\">
                                        <span class=\"image\"><img src=\"images/img.jpg\" alt=\"Profile Image\" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"dropdown-item\">
                                        <span class=\"image\"><img src=\"images/img.jpg\" alt=\"Profile Image\" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <div class=\"text-center\">
                                        <a class=\"dropdown-item\">
                                            <strong>See All Alerts</strong>
                                            <i class=\"fa fa-angle-right\"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        {% endblock %}
        <!-- /top navigation -->

        <!-- page content -->
        {% block content_admin %}
        <div class=\"right_col\" role=\"main\">
            <!-- top tiles -->
            <div class=\"row\" style=\"display: inline-block;\" >
                <div class=\"tile_count\">
                    <div class=\"col-md-2 col-sm-4  tile_stats_count\">
                        <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Users</span>
                        <div class=\"count\">2500</div>
                        <span class=\"count_bottom\"><i class=\"green\">4% </i> From last Week</span>
                    </div>
                    <div class=\"col-md-2 col-sm-4  tile_stats_count\">
                        <span class=\"count_top\"><i class=\"fa fa-clock-o\"></i> Average Time</span>
                        <div class=\"count\">123.50</div>
                        <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>3% </i> From last Week</span>
                    </div>
                    <div class=\"col-md-2 col-sm-4  tile_stats_count\">
                        <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Males</span>
                        <div class=\"count green\">2,500</div>
                        <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>34% </i> From last Week</span>
                    </div>
                    <div class=\"col-md-2 col-sm-4  tile_stats_count\">
                        <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Females</span>
                        <div class=\"count\">4,567</div>
                        <span class=\"count_bottom\"><i class=\"red\"><i class=\"fa fa-sort-desc\"></i>12% </i> From last Week</span>
                    </div>
                    <div class=\"col-md-2 col-sm-4  tile_stats_count\">
                        <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Collections</span>
                        <div class=\"count\">2,315</div>
                        <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>34% </i> From last Week</span>
                    </div>
                    <div class=\"col-md-2 col-sm-4  tile_stats_count\">
                        <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Connections</span>
                        <div class=\"count\">7,325</div>
                        <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>34% </i> From last Week</span>
                    </div>
                </div>
            </div>
            <!-- /top tiles -->
            <div class=\"page-title\">
                <div class=\"title_left\">
                    <h2>{% block title_page_admin %} Principal {% endblock %}</h2>
                </div>

                <div class=\"title_right\">
                    <div class=\"col-md-5 col-sm-5   form-group pull-right top_search\">
                    </div>
                </div>
            </div>


            <div class=\"row\">
                <div class=\"col-md-12 col-sm-12 \">
                    {% block content %}
                    <div class=\"dashboard_graph\">

                        <div class=\"row x_title\">
                            <div class=\"col-md-6\">
                                <h3>Network Activities <small>Graph title sub-title</small></h3>
                            </div>
                            <div class=\"col-md-6\">
                                <div id=\"reportrange\" class=\"pull-right\" style=\"background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc\">
                                    <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
                                    <span>December 30, 2014 - January 28, 2015</span> <b class=\"caret\"></b>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-md-9 col-sm-9 \">
                            <div id=\"chart_plot_01\" class=\"demo-placeholder\"></div>
                        </div>
                        <div class=\"col-md-3 col-sm-3  bg-white\">
                            <div class=\"x_title\">
                                <h2>Top Campaign Performance</h2>
                                <div class=\"clearfix\"></div>
                            </div>

                            <div class=\"col-md-12 col-sm-12 \">
                                <div>
                                    <p>Facebook Campaign</p>
                                    <div class=\"\">
                                        <div class=\"progress progress_sm\" style=\"width: 76%;\">
                                            <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"80\"></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p>Twitter Campaign</p>
                                    <div class=\"\">
                                        <div class=\"progress progress_sm\" style=\"width: 76%;\">
                                            <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"60\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-12 col-sm-12 \">
                                <div>
                                    <p>Conventional Media</p>
                                    <div class=\"\">
                                        <div class=\"progress progress_sm\" style=\"width: 76%;\">
                                            <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"40\"></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p>Bill boards</p>
                                    <div class=\"\">
                                        <div class=\"progress progress_sm\" style=\"width: 76%;\">
                                            <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"50\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class=\"clearfix\"></div>
                    </div>
                    {% endblock %}
                </div>

            </div>
            <br />
        </div>
        {% endblock %}
        <!-- /page content -->

        <!-- footer content -->
        {% block footer_admin %}
        <footer>

            <div class=\"clearfix\"></div>
        </footer>
        {% endblock %}
        <!-- /footer content -->
    </div>
</div>
{% block script_admin %}
    <!-- jQuery -->
    <script src=\"{{ asset('/admin/vendors/jquery/dist/jquery.min.js') }}\"></script>
    <!-- Bootstrap -->
    <script src=\"{{ asset('/admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}\"></script>
    <!-- FastClick -->
    <script src=\"{{ asset('/admin/vendors/fastclick/lib/fastclick.js') }}\"></script>
    <!-- NProgress -->
    <script src=\"{{ asset('/admin/vendors/nprogress/nprogress.js') }}\"></script>
    <!-- Chart.js -->
    <script src=\"{{ asset('/admin/vendors/Chart.js/dist/Chart.min.js') }}\"></script>
    <!-- gauge.js -->
    <script src=\"{{ asset('/admin/vendors/gauge.js/dist/gauge.min.js') }} \"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"{{ asset('/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}\"></script>
    <!-- iCheck -->
    <script src=\"{{ asset('/admin/vendors/iCheck/icheck.min.js') }}\"></script>
    <!-- Skycons -->
    <script src=\"{{ asset('/admin/vendors/skycons/skycons.js') }}\"></script>
    <!-- Flot -->
    <script src=\"{{ asset('/admin/vendors/Flot/jquery.flot.js') }}\"></script>
    <script src=\"{{ asset('/admin/vendors/Flot/jquery.flot.pie.js') }}\"></script>
    <script src=\"{{ asset('/admin/vendors/Flot/jquery.flot.time.js') }}\"></script>
    <script src=\"{{ asset('/admin/vendors/Flot/jquery.flot.stack.js') }}\"></script>
    <script src=\"{{ asset('/admin/vendors/Flot/jquery.flot.resize.js') }}\"></script>
    <!-- Flot plugins -->
    <script src=\"{{ asset('/admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}\"></script>
    <script src=\"{{ asset('/admin/vendors/flot-spline/js/jquery.flot.spline.min.js') }}\"></script>
    <script src=\"{{ asset('/admin/vendors/flot.curvedlines/curvedLines.js') }}\"></script>
    <!-- DateJS -->
    <script src=\"{{ asset('/admin/vendors/DateJS/build/date.js') }}\"></script>
    <!-- JQVMap -->
    <script src=\"{{ asset('/admin/vendors/jqvmap/dist/jquery.vmap.js') }}\"></script>
    <script src=\"{{ asset('/admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}\"></script>
    <script src=\"{{ asset('/admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"{{ asset('/admin/vendors/moment/min/moment.min.js') }}\"></script>
    <script src=\"{{ asset('/admin/vendors/bootstrap-daterangepicker/daterangepicker.js') }}\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"{{ asset('/admin/build/js/custom.js')}}\"></script>
    <script src=\"{{ asset('/admin/vendors/datatables.net/js/jquery.dataTables.min.js') }}\"></script>
    <script src=\"{{ asset('/admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('/admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}\"></script>

{% endblock %}

</body>
</html>
", "/admin/index.html.twig", "C:\\Users\\czakaria\\lab\\projects\\soinclair\\soin_clair\\templates\\admin\\index.html.twig");
    }
}
