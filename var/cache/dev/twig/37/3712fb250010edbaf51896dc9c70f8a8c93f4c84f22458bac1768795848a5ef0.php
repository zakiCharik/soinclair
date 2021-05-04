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

/* admin/security/login.html.twig */
class __TwigTemplate_0512970391800445a0cf79527c133dbad5fb8eb51091b620452a7afb607af734 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/security/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/vendors/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!-- Font Awesome -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- NProgress -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/vendors/nprogress/nprogress.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Animate.css -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/vendors/animate.css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Theme Style -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/build/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>

<body class=\"login\">
<div>
    <a class=\"hiddenanchor\" id=\"signup\"></a>
    <a class=\"hiddenanchor\" id=\"signin\"></a>

    <div class=\"login_wrapper\">
        <div class=\"animate form login_form\">
            <section class=\"login_content\">
                <form>
                    <h1>Login Form</h1>
                    <div>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Username\" required=\"\" />
                    </div>
                    <div>
                        <input type=\"password\" class=\"form-control\" placeholder=\"Password\" required=\"\" />
                    </div>
                    <div>
                        <a class=\"btn btn-default submit\" href=\"index.html\">Log in</a>
                        <a class=\"reset_pass\" href=\"#\">Lost your password?</a>
                    </div>

                    <div class=\"clearfix\"></div>

                    <div class=\"separator\">
                        <p class=\"change_link\">New to site?
                            <a href=\"#signup\" class=\"to_register\"> Create Account </a>
                        </p>

                        <div class=\"clearfix\"></div>
                        <br />

                        <div>
                            <h1><i class=\"fa fa-paw\"></i> Gentelella Alela!</h1>
                            <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>

        <div id=\"register\" class=\"animate form registration_form\">
            <section class=\"login_content\">
                <form>
                    <h1>Create Account</h1>
                    <div>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Username\" required=\"\" />
                    </div>
                    <div>
                        <input type=\"email\" class=\"form-control\" placeholder=\"Email\" required=\"\" />
                    </div>
                    <div>
                        <input type=\"password\" class=\"form-control\" placeholder=\"Password\" required=\"\" />
                    </div>
                    <div>
                        <a class=\"btn btn-default submit\" href=\"index.html\">Submit</a>
                    </div>

                    <div class=\"clearfix\"></div>

                    <div class=\"separator\">
                        <p class=\"change_link\">Already a member ?
                            <a href=\"#signin\" class=\"to_register\"> Log in </a>
                        </p>

                        <div class=\"clearfix\"></div>
                        <br />

                        <div>
                            <h1><i class=\"fa fa-paw\"></i> Gentelella Alela!</h1>
                            <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 22,  72 => 19,  67 => 17,  62 => 15,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href=\"{{ asset('/admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}\" rel=\"stylesheet\" />
    <!-- Font Awesome -->
    <link href=\"{{ asset('/admin/vendors/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
    <!-- NProgress -->
    <link href=\"{{ asset('/admin/vendors/nprogress/nprogress.css') }}\" rel=\"stylesheet\">
    <!-- Animate.css -->
    <link href=\"{{ asset('/admin/vendors/animate.css/animate.min.css') }}\" rel=\"stylesheet\">

    <!-- Custom Theme Style -->
    <link href=\"{{ asset('/admin/build/css/custom.min.css') }}\" rel=\"stylesheet\">
</head>

<body class=\"login\">
<div>
    <a class=\"hiddenanchor\" id=\"signup\"></a>
    <a class=\"hiddenanchor\" id=\"signin\"></a>

    <div class=\"login_wrapper\">
        <div class=\"animate form login_form\">
            <section class=\"login_content\">
                <form>
                    <h1>Login Form</h1>
                    <div>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Username\" required=\"\" />
                    </div>
                    <div>
                        <input type=\"password\" class=\"form-control\" placeholder=\"Password\" required=\"\" />
                    </div>
                    <div>
                        <a class=\"btn btn-default submit\" href=\"index.html\">Log in</a>
                        <a class=\"reset_pass\" href=\"#\">Lost your password?</a>
                    </div>

                    <div class=\"clearfix\"></div>

                    <div class=\"separator\">
                        <p class=\"change_link\">New to site?
                            <a href=\"#signup\" class=\"to_register\"> Create Account </a>
                        </p>

                        <div class=\"clearfix\"></div>
                        <br />

                        <div>
                            <h1><i class=\"fa fa-paw\"></i> Gentelella Alela!</h1>
                            <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>

        <div id=\"register\" class=\"animate form registration_form\">
            <section class=\"login_content\">
                <form>
                    <h1>Create Account</h1>
                    <div>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Username\" required=\"\" />
                    </div>
                    <div>
                        <input type=\"email\" class=\"form-control\" placeholder=\"Email\" required=\"\" />
                    </div>
                    <div>
                        <input type=\"password\" class=\"form-control\" placeholder=\"Password\" required=\"\" />
                    </div>
                    <div>
                        <a class=\"btn btn-default submit\" href=\"index.html\">Submit</a>
                    </div>

                    <div class=\"clearfix\"></div>

                    <div class=\"separator\">
                        <p class=\"change_link\">Already a member ?
                            <a href=\"#signin\" class=\"to_register\"> Log in </a>
                        </p>

                        <div class=\"clearfix\"></div>
                        <br />

                        <div>
                            <h1><i class=\"fa fa-paw\"></i> Gentelella Alela!</h1>
                            <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
</body>
</html>
", "admin/security/login.html.twig", "C:\\Users\\czakaria\\lab\\projects\\soinclair\\soin_clair\\templates\\admin\\security\\login.html.twig");
    }
}
