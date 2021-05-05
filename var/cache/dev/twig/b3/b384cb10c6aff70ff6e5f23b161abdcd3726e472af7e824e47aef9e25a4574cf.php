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

/* vitrine/adherant/etudedevis.html.twig */
class __TwigTemplate_fd92484e39c94935b255f006c9ffcbb72d3543dc7808fa617c7b62a36e7eeaf7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'map_javascript' => [$this, 'block_map_javascript'],
            'title' => [$this, 'block_title'],
            'menu_espace' => [$this, 'block_menu_espace'],
            'content' => [$this, 'block_content'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine/adherant/etudedevis.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine/adherant/etudedevis.html.twig"));

        // line 104
        $context["adherant"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104), "adherants", [], "any", false, false, false, 104), 0, [], "array", false, false, false, 104);
        // line 5
        $this->parent = $this->loadTemplate("base.html.twig", "vitrine/adherant/etudedevis.html.twig", 5);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_map_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "map_javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "map_javascript"));

        // line 8
        echo "        <!-- Make sure you put this AFTER Leaflet's CSS -->
        <script src=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.js\"
                crossorigin=\"*\"></script>
        <script type=\"text/javascript\">

            var mymap = L.map('mapid').setView([33.575784, -7.619042], 13);


            L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
                attribution: 'Map Soin Clair',
                maxZoom: 18,
                zoom: 9,
                id: 'mapbox/streets-v11',
                tileSize: 512,
                zoomOffset: -1,
                accessToken: 'pk.eyJ1IjoiemNoYXJpayIsImEiOiJja28xaWU4NHQwOHNzMndscDc0Y3pyZWZyIn0.PzH6CE-rjK-HYPbdVdDKAA'
            }).addTo(mymap);

            L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {attribution: 'OSM'}).addTo(mymap);

            var myMarker = L.marker([33.575784, -7.619042], {title: \"Coordinates\", alt: \"Coordinates\", draggable: true}).addTo(mymap).on('dragend', function() {
                var lat = myMarker.getLatLng().lat.toFixed(8);
                var lon = myMarker.getLatLng().lng.toFixed(8);
                var czoom = map.getZoom();
                if(czoom < 18) { nzoom = czoom + 2; }
                if(nzoom > 18) { nzoom = 18; }
                if(czoom != 18) { map.setView([lat,lon], nzoom); } else { map.setView([lat,lon]); }
                document.getElementById('lat').value = lat;
                document.getElementById('lon').value = lon;
                myMarker.bindPopup(\"Lat \" + lat + \"<br />Lon \" + lon).openPopup();
            });

            function chooseAddr(lat1, lng1)
            {
                myMarker.closePopup();
                mymap.setView([lat1, lng1],18);
                myMarker.setLatLng([lat1, lng1]);
                lat = lat1.toFixed(8);
                lon = lng1.toFixed(8);
                document.getElementById('lat').value = lat;
                document.getElementById('lon').value = lon;
                //myMarker.bindPopup(\"Type \" + obj).openPopup();
            }

            function myFunction(arr)
            {
                console.log(arr);
                var out = \"\";
                var i;
                if(arr.length > 0)
                {
                    for(i = 0; i < arr.length; i++)
                    {
                        var adress = document.getElementById(\"addr\").value;
                        var suiteInp = document.getElementById('specialite');
                        var specialite = suiteInp.options[suiteInp.selectedIndex].text;

                        var name = arr[i].display_name.split(',')[0];
                        var headerStr =\"<div class='card-header'>\"+ name+\"</div><div class='card-body'>\";
                        var startStr = \"<div class='address card' title='Show Location and Coordinates' onclick='chooseAddr(\" + arr[i].lat + \", \" + arr[i].lon + \");return false;'>\" + headerStr + \"<img class='doc-icon' src='/img/static/medicine.png' width='100' height='100'/> <h5>\"+specialite+\" - à \" + adress+\" </h5><br /> <a>\";
                        var endStr = \"</a></div></div>\";
                        out += startStr + arr[i].display_name + endStr;
                    }
                    document.getElementById('results').innerHTML = out;
                }
                else
                {
                    document.getElementById('results').innerHTML = \"Sorry, no results...\";
                }

            }
            function addr_search()
            {
                var inp = document.getElementById(\"addr\");
                var suiteInp = document.getElementById('specialite');
                var strUser = suiteInp.options[suiteInp.selectedIndex].text;

                var xmlhttp = new XMLHttpRequest();
                var url = \"https://nominatim.openstreetmap.org/search?format=json&limit=30&q=\" + strUser +\", \"+ inp.value;
                xmlhttp.onreadystatechange = function()
                {
                    if (this.readyState == 4 && this.status == 200)
                    {
                        var myArr = JSON.parse(this.responseText);
                        myFunction(myArr);
                    }
                };
                xmlhttp.open(\"GET\", url, true);
                xmlhttp.send();
            }

        </script>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 103
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Espace Adhérent";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 107
    public function block_menu_espace($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu_espace"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu_espace"));

        // line 108
        echo "    <ul id=\"menu-espaces\" class=\"sf-menu\" xmlns:https=\"http://www.w3.org/1999/xhtml\"
        xmlns:https=\"http://www.w3.org/1999/xhtml\" xmlns:https=\"http://www.w3.org/1999/xhtml\">
        <li id=\"menu-item-2869\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2869\">
            <a href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherant_profil");
        echo "\"  class=\"btn btn-default\">
                Mon profil
            </a>
        </li>

        <li id=\"menu-item-2869\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2869\">
            <a href=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherant_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 117, $this->source); })()), "id", [], "any", false, false, false, 117)]), "html", null, true);
        echo "\"  class=\"btn btn-default\">
                Analyse de devis
            </a>
        </li>
        <li id=\"menu-item-2869\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2869\">
            <a href=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherant_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 122, $this->source); })()), "id", [], "any", false, false, false, 122)]), "html", null, true);
        echo "\"  class=\"btn btn-default\">
                Médecins
            </a>
        </li>

        <li id=\"menu-item-2869\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2869\">
            <a href=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherant_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 128, $this->source); })()), "id", [], "any", false, false, false, 128)]), "html", null, true);
        echo "\"  class=\"btn btn-default\">
                F.A.Q
            </a>
        </li>
        <li id=\"menu-item-2871\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2871\">
            <a href=\"";
        // line 133
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"><span>Logout</span></a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 138
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 139
        echo "    <div class=\"container-fluuid _content-background\">
        <div class=\"row\">
            <div class=\"col-12 _content-header\">
                <h3>Bienvenue dans votre espace adhérent !</h3>
            </div>
        </div>
    </div>

s    ";
        // line 147
        echo twig_include($this->env, $context, "demande/index.html.twig");
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 150
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vitrine/adherant/etudedevis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 150,  280 => 147,  270 => 139,  260 => 138,  246 => 133,  238 => 128,  229 => 122,  221 => 117,  212 => 111,  207 => 108,  197 => 107,  178 => 103,  75 => 8,  65 => 7,  54 => 5,  52 => 104,  39 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("



{% extends 'base.html.twig' %}

    {% block map_javascript %}
        <!-- Make sure you put this AFTER Leaflet's CSS -->
        <script src=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.js\"
                crossorigin=\"*\"></script>
        <script type=\"text/javascript\">

            var mymap = L.map('mapid').setView([33.575784, -7.619042], 13);


            L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
                attribution: 'Map Soin Clair',
                maxZoom: 18,
                zoom: 9,
                id: 'mapbox/streets-v11',
                tileSize: 512,
                zoomOffset: -1,
                accessToken: 'pk.eyJ1IjoiemNoYXJpayIsImEiOiJja28xaWU4NHQwOHNzMndscDc0Y3pyZWZyIn0.PzH6CE-rjK-HYPbdVdDKAA'
            }).addTo(mymap);

            L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {attribution: 'OSM'}).addTo(mymap);

            var myMarker = L.marker([33.575784, -7.619042], {title: \"Coordinates\", alt: \"Coordinates\", draggable: true}).addTo(mymap).on('dragend', function() {
                var lat = myMarker.getLatLng().lat.toFixed(8);
                var lon = myMarker.getLatLng().lng.toFixed(8);
                var czoom = map.getZoom();
                if(czoom < 18) { nzoom = czoom + 2; }
                if(nzoom > 18) { nzoom = 18; }
                if(czoom != 18) { map.setView([lat,lon], nzoom); } else { map.setView([lat,lon]); }
                document.getElementById('lat').value = lat;
                document.getElementById('lon').value = lon;
                myMarker.bindPopup(\"Lat \" + lat + \"<br />Lon \" + lon).openPopup();
            });

            function chooseAddr(lat1, lng1)
            {
                myMarker.closePopup();
                mymap.setView([lat1, lng1],18);
                myMarker.setLatLng([lat1, lng1]);
                lat = lat1.toFixed(8);
                lon = lng1.toFixed(8);
                document.getElementById('lat').value = lat;
                document.getElementById('lon').value = lon;
                //myMarker.bindPopup(\"Type \" + obj).openPopup();
            }

            function myFunction(arr)
            {
                console.log(arr);
                var out = \"\";
                var i;
                if(arr.length > 0)
                {
                    for(i = 0; i < arr.length; i++)
                    {
                        var adress = document.getElementById(\"addr\").value;
                        var suiteInp = document.getElementById('specialite');
                        var specialite = suiteInp.options[suiteInp.selectedIndex].text;

                        var name = arr[i].display_name.split(',')[0];
                        var headerStr =\"<div class='card-header'>\"+ name+\"</div><div class='card-body'>\";
                        var startStr = \"<div class='address card' title='Show Location and Coordinates' onclick='chooseAddr(\" + arr[i].lat + \", \" + arr[i].lon + \");return false;'>\" + headerStr + \"<img class='doc-icon' src='/img/static/medicine.png' width='100' height='100'/> <h5>\"+specialite+\" - à \" + adress+\" </h5><br /> <a>\";
                        var endStr = \"</a></div></div>\";
                        out += startStr + arr[i].display_name + endStr;
                    }
                    document.getElementById('results').innerHTML = out;
                }
                else
                {
                    document.getElementById('results').innerHTML = \"Sorry, no results...\";
                }

            }
            function addr_search()
            {
                var inp = document.getElementById(\"addr\");
                var suiteInp = document.getElementById('specialite');
                var strUser = suiteInp.options[suiteInp.selectedIndex].text;

                var xmlhttp = new XMLHttpRequest();
                var url = \"https://nominatim.openstreetmap.org/search?format=json&limit=30&q=\" + strUser +\", \"+ inp.value;
                xmlhttp.onreadystatechange = function()
                {
                    if (this.readyState == 4 && this.status == 200)
                    {
                        var myArr = JSON.parse(this.responseText);
                        myFunction(myArr);
                    }
                };
                xmlhttp.open(\"GET\", url, true);
                xmlhttp.send();
            }

        </script>

    {% endblock %}

{% block title %}Espace Adhérent{% endblock %}
{%   set adherant = app.user.adherants[0] %}


{% block menu_espace %}
    <ul id=\"menu-espaces\" class=\"sf-menu\" xmlns:https=\"http://www.w3.org/1999/xhtml\"
        xmlns:https=\"http://www.w3.org/1999/xhtml\" xmlns:https=\"http://www.w3.org/1999/xhtml\">
        <li id=\"menu-item-2869\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2869\">
            <a href=\"{{ path('adherant_profil') }}\"  class=\"btn btn-default\">
                Mon profil
            </a>
        </li>

        <li id=\"menu-item-2869\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2869\">
            <a href=\"{{ path('adherant_show', {'id': adherant.id }) }}\"  class=\"btn btn-default\">
                Analyse de devis
            </a>
        </li>
        <li id=\"menu-item-2869\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2869\">
            <a href=\"{{ path('adherant_show', {'id': adherant.id }) }}\"  class=\"btn btn-default\">
                Médecins
            </a>
        </li>

        <li id=\"menu-item-2869\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2869\">
            <a href=\"{{ path('adherant_show', {'id': adherant.id }) }}\"  class=\"btn btn-default\">
                F.A.Q
            </a>
        </li>
        <li id=\"menu-item-2871\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2871\">
            <a href=\"{{ path('app_logout') }}\"><span>Logout</span></a>
        </li>
    </ul>
{% endblock %}

{% block content %}
    <div class=\"container-fluuid _content-background\">
        <div class=\"row\">
            <div class=\"col-12 _content-header\">
                <h3>Bienvenue dans votre espace adhérent !</h3>
            </div>
        </div>
    </div>

s    {{ include('demande/index.html.twig') }}

{% endblock %}
{% block body %}{% endblock %}", "vitrine/adherant/etudedevis.html.twig", "C:\\Users\\czakaria\\lab\\projects\\soinclair\\soin_clair\\templates\\vitrine\\adherant\\etudedevis.html.twig");
    }
}
