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

/* vitrine/adherant/index.html.twig */
class __TwigTemplate_949a398e8ec96585d09f1f2ad0a7e19b0700c63107c2095b46129370cfc91277 extends \Twig\Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine/adherant/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine/adherant/index.html.twig"));

        // line 101
        $context["adherant"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "user", [], "any", false, false, false, 101), "adherants", [], "any", false, false, false, 101), 0, [], "array", false, false, false, 101);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "vitrine/adherant/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_map_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "map_javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "map_javascript"));

        // line 4
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
                        var startStr = \"<div class='address card' title='Show Location and Coordinates' onclick='chooseAddr(\" + arr[i].lat + \", \" + arr[i].lon + \");return false;'>\" + headerStr + \"<img class='doc-icon' src='/public/img/static/medicine.png' width='100' height='100'/> <h5>\"+specialite+\" - à \" + adress+\" </h5><br /> <a>\";
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

    // line 100
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

    // line 104
    public function block_menu_espace($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu_espace"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu_espace"));

        // line 105
        echo "    <ul id=\"menu-espaces\" class=\"sf-menu\" xmlns:https=\"http://www.w3.org/1999/xhtml\"
        xmlns:https=\"http://www.w3.org/1999/xhtml\" xmlns:https=\"http://www.w3.org/1999/xhtml\">
        <li id=\"menu-item-2869\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2869\">
            <a href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherant_profil");
        echo "\"  class=\"btn btn-default\">
                Mon profil
            </a>
        </li>


        <li id=\"menu-item-2869\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2869\">
            <a href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demande_new");
        echo "\"  class=\"btn btn-default\">
                Analyse de devis
            </a>
        </li>
        <li id=\"menu-item-2869\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2869\">
            <a href=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherant_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 120, $this->source); })()), "id", [], "any", false, false, false, 120)]), "html", null, true);
        echo "\"  class=\"btn btn-default\">
                Médecins
            </a>
        </li>

        <li id=\"menu-item-2869\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2869\">
            <a href=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherant_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 126, $this->source); })()), "id", [], "any", false, false, false, 126)]), "html", null, true);
        echo "\"  class=\"btn btn-default\">
                F.A.Q
            </a>
        </li>
        <li id=\"menu-item-2871\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2871\">
            <a href=\"";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"><span>Logout</span></a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 136
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 137
        echo "    <div class=\"container-fluuid \">
        <div class=\"_formulaire_map\" style=\"margin-bottom: 22px;\">
            <div class=\"row\" style=\"padding-bottom: 25px;padding-left: 10%;padding-right: 10%;padding-top: 25px;background-color: #00a8cdc2; color: #fff;\">
                <div class=\"col-12\">
                    <h3>Bienvenue ";
        // line 141
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 141, $this->source); })()), "lastname", [], "any", false, false, false, 141) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 141, $this->source); })()), "firstname", [], "any", false, false, false, 141)), "html", null, true);
        echo " !</h3>
                    <small>Vos coordonnées personnelles</small>
                </div>
            </div>

        </div>
    </div>

    <div class=\"container-fluuid\">
        <div class=\"row\">
            <div class=\"col-12 wpb_wrapper p-xl-5\">
                <div class=\"row\">
                    <div class=\"col-lg-2 col-md-2\">
                        <span>
                            <img class=\"doc-icon\" src=\"/public/uploads/cartesoinclair/";
        // line 155
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 155, $this->source); })()), "cartesoinclair", [], "any", false, false, false, 155), "html", null, true);
        echo "\" width=\"250\">
                        </span>
                    </div>
                    <div class=\"p-4 col-lg-5 col-md-5\">
                        <table class=\"table no-border\">

                            <tbody><tr>
                                <th width=\"40%\">Nom</th>
                                <td>";
        // line 163
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 163, $this->source); })()), "lastname", [], "any", false, false, false, 163), "html", null, true);
        echo "</td>
                            </tr>

                            <tr>
                                <th width=\"40%\">Prénom</th>
                                <td width=\"60%\">";
        // line 168
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 168, $this->source); })()), "firstname", [], "any", false, false, false, 168), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th width=\"40%\">N° Carte Soin Clare</th>
                                <td width=\"60%\">";
        // line 172
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adherant"]) || array_key_exists("adherant", $context) ? $context["adherant"] : (function () { throw new RuntimeError('Variable "adherant" does not exist.', 172, $this->source); })()), "numerosoinclair", [], "any", false, false, false, 172), "html", null, true);
        echo "</td>
                            </tr>

                            </tbody>
                        </table>

                    </div>
                    <div class=\" col-lg-5 col-md-5 justify-content-center d-flex align-items-center\">
                            <span style=\"margin:5px;\">
                                <a href=\"\" class=\"btn btn-primary\">Modifier votre profile</a>
                            </span>
                        <span style=\"margin:5px;\">
                                <a href=\"\" class=\"btn btn-success\">Réinitialisé votre mot de passe</a>
                            </span>
                        <span style=\"margin:5px;\">
                                <a href=\"\" class=\"btn btn-warning\">Modifier votre profile</a>
                            </span>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class=\"container-fluuid\">
        <div class=\"_formulaire_map\" style=\"margin-bottom: 22px;\">
            <div class=\"row\" style=\"padding-bottom: 0;padding-left: 9.25%;padding-top: 25px;background-color: #00a8cdc2;color: white !important;\">
                <div class=\"col-12\">
                    <h3>Trouver un médecin</h3>
                </div>
            </div>

            <input class=\"fade\"name=\"lat\" id=\"lat\" style=\"display: none;\"/>
            <input class=\"fade\"name=\"lon\" id=\"lon\" style=\"display: none;\"/>
            <div class=\"row\" style=\"padding-bottom: 25px;padding-left: 10%;padding-right: 10%;padding-top: 25px;background-color: #00a8cdc2;\">

                <div class=\"col-lg-4 col-sm-12\" style=\"padding: 0px;\">
                    <select style=\"border-radius: 0;\" class=\"form-control\" id=\"specialite\">
                        <optgroup label=\"Recherches Fréquentes\"><option value=\"51d6e1f4ef96750d4d00001d\">Médecin généraliste</option>
                            <option value=\"Pharmacie\">Pharmacie</option>
                            <option value=\"Pédiatre\">Pédiatre</option>
                            <option value=\"Dentiste\">Dentiste</option>
                            <option value=\"Ophtalmologue\">Ophtalmologue</option>
                            <option value=\"Dermatologue\">Dermatologue</option>
                            <option value=\"Gynécologue\">Gynécologue</option></optgroup>
                        <optgroup label=\"Médecins\">
                            <option value=\"Addictologue\">Addictologue</option>
                            <option value=\"Algologue - Traitement de la douleur\">Algologue - Traitement de la douleur</option>
                            <option value=\"Allergologue\">Allergologue</option>
                            <option value=\"Allergologue-pédiatrique\">Allergologue-pédiatrique</option>
                            <option value=\"Anatomopathologiste\">Anatomopathologiste </option>
                            <option value=\"Andrologue\">Andrologue</option>
                            <option value=\"Anesthésiste-réanimateur\">Anesthésiste-réanimateur</option>
                            <option value=\"Angiologue\">Angiologue</option>
                            <option value=\"Biologiste (Laboratoire d'analyse)\">Biologiste (Laboratoire d'analyse)</option>
                            <option value=\"Cardiologue\">Cardiologue</option>
                            <option value=\"Cardiologue pédiatrique\">Cardiologue pédiatrique</option>
                            <option value=\"Cardiologue rythmologue\">Cardiologue rythmologue</option>
                            <option value=\"\">Chirugien cervico-facial</option>
                            <option value=\"\">Chirurgien cardiaque</option>
                            <option value=\"\">Chirurgien cardiaque pédiatrique</option>
                            <option value=\"\">Chirurgien de l'obésité</option>
                            <option value=\"\">Chirurgien de la main</option>
                            <option value=\"59bfb89132d9bb0015841f7b\">Chirurgien digestif</option>
                            <option value=\"59ce22a9777e720015cd2846\">Chirurgien du foie, du pancréas et des voies biliaires</option>
                            <option value=\"51d6e1f4ef96750d4d000007\">Chirurgien esthétique et plastique</option>
                            <option value=\"56cdb3891a924b0088000169\">Chirurgien général</option>
                            <option value=\"51d6e1f4ef96750d4d000008\">Chirurgien maxillo-facial</option>
                            <option value=\"5abb991e11abff001999707b\">Chirurgien orthopédiste et traumatologue</option>
                            <option value=\"58bd91c5d6fab3000e2c5c6b\">Chirurgien pédiatre</option>
                            <option value=\"51d6e1f4ef96750d4d00000c\">Chirurgien thoracique</option>
                            <option value=\"51d6e1f4ef96750d4d000009\">Chirurgien vasculaire</option>
                            <option value=\"51d6e1f4ef96750d4d00000a\">Chirurgien viscéral</option>
                            <option value=\"5225c0c522814f1518000001\">Chirurgien viscéral pédiatrique</option>
                            <option value=\"51d6e1f4ef96750d4d00000f\">Dermatologue</option>
                            <option value=\"592ff56ebdaa990015746012\">Dermatologue pédiatrique</option>
                            <option value=\"51d6e1f4ef96750d4d000010\">Diabétologue</option>
                            <option value=\"51d6e1f4ef96750d4d000012\">Endocrinologue</option>
                            <option value=\"51d6e1f4ef96750d4d000013\">Gastro-entérologue</option>
                            <option value=\"56963725deaa1500880000ed\">Gastro-entérologue pédiatrique</option>
                            <option value=\"51d6e1f4ef96750d4d000015\">Gynécologue</option>
                            <option value=\"59355fb8d5c34a002020b5e8\">Gynécologue-obstétricien</option>
                            <option value=\"5255d1b5c15e323538000001\">Généticien</option>
                            <option value=\"51d6e1f4ef96750d4d000014\">Gérontologue - Gériatre</option>
                            <option value=\"51d6e1f4ef96750d4d000016\">Hématologue</option>
                            <option value=\"53033018626138447d6c0000\">Hépatologue</option>
                            <option value=\"5d9ef34b7b02ae0037f2b367\">Médecin du sommeil</option>
                            <option value=\"51d6e1f4ef96750d4d00001c\">Médecin du sport</option>
                            <option value=\"51d6e1f4ef96750d4d00001b\">Médecin du travail</option>
                            <option value=\"56efea4c39069d008800012b\">Médecin esthétique</option>
                            <option value=\"51d6e1f4ef96750d4d00001d\">Médecin généraliste</option>
                            <option value=\"51d6e1f4ef96750d4d00001f\">Médecin interniste </option>
                            <option value=\"51d6e1f4ef96750d4d00001e\">Médecin légiste</option>
                            <option value=\"5240b334d82995d032000001\">Médecin nucléaire</option>
                            <option value=\"51d6e1f4ef96750d4d000020\">Médecin physique et de réadaptation</option>
                            <option value=\"5f44f34569ac6c0048b4ca63\">Médecin urgentiste</option>
                            <option value=\"51d6e1f4ef96750d4d000022\">Neurochirurgien</option>
                            <option value=\"51d6e1f4ef96750d4d000023\">Neurologue</option>
                            <option value=\"5faa92aef70b96006b65f23d\">Neuropédiatre</option>
                            <option value=\"5251add21df2749407000001\">Néonatologiste </option>
                            <option value=\"51d6e1f4ef96750d4d000021\">Néphrologue</option>
                            <option value=\"5225c0e422814f1518000004\">Néphrologue pédiatrique</option>
                            <option value=\"5721cd023bc1610089000091\">Obstétricien</option>
                            <option value=\"51d6e1f4ef96750d4d000026\">Oncologue - Cancerologue</option>
                            <option value=\"5255d1d7c15e323538000003\">Oncologue médical</option>
                            <option value=\"51d6e1f4ef96750d4d000027\">Ophtalmologue</option>
                            <option value=\"57594e4dacf94f0089000092\">Ophtalmologue pédiatrique</option>
                            <option value=\"51d6e1f4ef96750d4d00002b\">Oto-rhino-laryngologiste</option>
                            <option value=\"52d903ce36633140db450000\">Phlébologue</option>
                            <option value=\"51d6e1f4ef96750d4d00002d\">Pneumologue</option>
                            <option value=\"53032ffb626138447d6b0000\">Proctologue</option>
                            <option value=\"51d6e1f4ef96750d4d00002f\">Psychiatre</option>
                            <option value=\"5b86c3af8153cf00196e3e14\">Psychogériatre</option>
                            <option value=\"51d6e1f4ef96750d4d00002c\">Pédiatre</option>
                            <option value=\"576125729ce5ff008900004e\">Pédopsychiatre</option>
                            <option value=\"51d6e1f4ef96750d4d000032\">Radiologue</option>
                            <option value=\"5255d1c5c15e323538000002\">Radiothérapeute</option>
                            <option value=\"51d6e1f4ef96750d4d000033\">Rhumatologue</option>
                            <option value=\"523ecad80a69cc00f9000212\">Réanimateur Médical</option>
                            <option value=\"5240b343d82995d032000002\">Réanimateur pédiatrique</option>
                            <option value=\"51d6e1f4ef96750d4d000034\">Sexologue</option>
                            <option value=\"51d6e1f4ef96750d4d000035\">Stomatologue</option>
                            <option value=\"5225c0d022814f1518000002\">Traumato-orthopédiste pédiatrique</option>
                            <option value=\"51d6e1f4ef96750d4d00000b\">Traumatologue-orthopédiste</option>
                            <option value=\"51d6e1f4ef96750d4d00000d\">Urologue</option>
                            <option value=\"5225c0db22814f1518000003\">Urologue pédiatrique</option>
                        </optgroup>
                        <optgroup label=\"Dentistes\">
                            <option value=\"Chirurgie buccale\">Chirurgie buccale</option>
                            <option value=\"Dentiste\">Dentiste</option>
                            <option value=\"Endodontiste\">Endodontiste</option>
                            <option value=\"Esthétique dentaire\">Esthétique dentaire</option>
                            <option value=\"Implantologiste\">Implantologiste </option>
                            <option value=\"Occlusodontiste\">Occlusodontiste</option>
                            <option value=\"Orthodontiste\">Orthodontiste</option>
                            <option value=\"Parodontologiste\">Parodontologiste</option>
                            <option value=\"Pédodontiste\">Pédodontiste</option>
                        </optgroup>
                        <optgroup label=\"Autres Professionnels de Santé\">
                            <option value=\"Acupuncture\">Acupuncture</option>
                            <option value=\"Audioprothésiste\">Audioprothésiste</option>
                            <option value=\"51d6e1f4ef96750d4d000006\">Chiropracteur</option>
                            <option value=\"51d6e1f4ef96750d4d000011\">Diététicien</option>
                            <option value=\"5c6d1ca0d62ab50032adb75d\">Ergothérapie</option>
                            <option value=\"59d24180892c270020fe0843\">Homéopathe</option>
                            <option value=\"58bd8523c8916f000e8314ad\">Hypnothérapeute</option>
                            <option value=\"51d6e1f4ef96750d4d000019\">Kinésithérapeute</option>
                            <option value=\"591d7086e7296c000ec5c283\">Kinésithérapeute du sport</option>
                            <option value=\"5b769cff336a53001b1f46e7\">Naturopathe</option>
                            <option value=\"51d6e1f4ef96750d4d000025\">Nutritionniste</option>
                            <option value=\"51d6e1f4ef96750d4d000028\">Orthophoniste</option>
                            <option value=\"51d6e1f4ef96750d4d000029\">Orthoptiste</option>
                            <option value=\"51d6e1f4ef96750d4d00002a\">Ostéopathe</option>
                            <option value=\"51d6e1f4ef96750d4d00002e\">Podologue</option>
                            <option value=\"5895948c8eaab00014cf3dfe\">Posturologue</option>
                            <option value=\"58b55832b85a8100100efb59\">Psychanalyste</option>
                            <option value=\"51d6e1f4ef96750d4d000030\">Psychologue</option>
                            <option value=\"51d6e1f4ef96750d4d000031\">Psychomotricien</option>
                            <option value=\"5899ccfd704d5200149a3004\">Psychothérapeute</option>
                        </optgroup>
                        <optgroup label=\"Coaching\">
                            <option value=\"5af865fce2a809001aac9f08\">Coach développement personnel</option>
                            <option value=\"5af86636e2a809001aac9f09\">Coach sportif</option>
                            <option value=\"60742604283c10004c26f1b8\">Sophrologue</option></optgroup><optgroup label=\"Centres et laboratoires\"><option value=\"5af9a80e8a4bc00019a3aa5c\">Radiologie - Echographie</option>
                            <option value=\"5af9a72b8a4bc00019a3aa49\">Radiologie - IRM</option>
                            <option value=\"5b1e54917256cb0024ae70df\">Radiologie - Mammographie</option>
                            <option value=\"5af9a7a88a4bc0001da3abf4\">Radiologie - Scanner</option></optgroup><optgroup label=\"Pharmacies\"><option value=\"5b1a8895cf0467002420a6f4\">Pharmacie</option></optgroup>                     </select>
                </div >
                <div class=\"col-lg-4 col-sm-12\"  style=\"padding: 0px;\">
                    <div class=\"input-group \">
                        <input  style=\"border-radius: 0;\" class=\"form-control \" placeholder=\"Ville\" name=\"addr\" id=\"addr\"/>
                        <div class=\"input-group-append\">
                            <span class=\"input-group-text\" style=\"height: 100%;\"><i class=\"fa fa-map-marker\"></i></span>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-12\"  style=\"padding: 0px;\">
                    <button  style=\"border-radius: 0;\" class=\"col-12 btn btn-large btn-primary\" onclick=\"addr_search();\">Rechercher</button>
                </div>
            </div>

        </div>

        <div class=\"row\" id=\"search\">
            <div class=\"col-lg-6 col-sm-12 col-xs-12\" id=\"results\">

            </div>
            <div class=\"col-lg-6 col-sm-12 col-xs-12\">
                <div id=\"mapid\" ></div>
            </div>
        </div>



    </div>


    <div class=\"container-fluuid _content-background\">
        <div class=\"row\">
            <div class=\"col-12 _content-header\">
                <h4>
                    Faites analyser votre devis par des professionnels!<br/>
                    Envoyez vos questions et votre devis par
                    <a href=\"mailto:Contact@soinclair.ma\">mail</a> ou sur
                    <a href=\"https://api.whatsapp.com/send?phone=212662790345\" target=\"_blank\" style=\"color:#2db742 !important;\">Whatsapp</a>
                </h4>
                <small>
                    Besoin d’aide ?
                    <br/>Contactez nous sur 06 66 24 87 72 ou par mail Contact@soinclair.ma
                </small>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 387
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
        return "vitrine/adherant/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  545 => 387,  320 => 172,  313 => 168,  305 => 163,  294 => 155,  277 => 141,  271 => 137,  261 => 136,  247 => 131,  239 => 126,  230 => 120,  222 => 115,  212 => 108,  207 => 105,  197 => 104,  178 => 100,  75 => 4,  65 => 3,  54 => 1,  52 => 101,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

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
                        var startStr = \"<div class='address card' title='Show Location and Coordinates' onclick='chooseAddr(\" + arr[i].lat + \", \" + arr[i].lon + \");return false;'>\" + headerStr + \"<img class='doc-icon' src='/public/img/static/medicine.png' width='100' height='100'/> <h5>\"+specialite+\" - à \" + adress+\" </h5><br /> <a>\";
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
            <a href=\"{{ path('demande_new') }}\"  class=\"btn btn-default\">
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
    <div class=\"container-fluuid \">
        <div class=\"_formulaire_map\" style=\"margin-bottom: 22px;\">
            <div class=\"row\" style=\"padding-bottom: 25px;padding-left: 10%;padding-right: 10%;padding-top: 25px;background-color: #00a8cdc2; color: #fff;\">
                <div class=\"col-12\">
                    <h3>Bienvenue {{ adherant.lastname ~ ' ' ~ adherant.firstname }} !</h3>
                    <small>Vos coordonnées personnelles</small>
                </div>
            </div>

        </div>
    </div>

    <div class=\"container-fluuid\">
        <div class=\"row\">
            <div class=\"col-12 wpb_wrapper p-xl-5\">
                <div class=\"row\">
                    <div class=\"col-lg-2 col-md-2\">
                        <span>
                            <img class=\"doc-icon\" src=\"/public/uploads/cartesoinclair/{{  adherant.cartesoinclair }}\" width=\"250\">
                        </span>
                    </div>
                    <div class=\"p-4 col-lg-5 col-md-5\">
                        <table class=\"table no-border\">

                            <tbody><tr>
                                <th width=\"40%\">Nom</th>
                                <td>{{ adherant.lastname }}</td>
                            </tr>

                            <tr>
                                <th width=\"40%\">Prénom</th>
                                <td width=\"60%\">{{ adherant.firstname }}</td>
                            </tr>
                            <tr>
                                <th width=\"40%\">N° Carte Soin Clare</th>
                                <td width=\"60%\">{{ adherant.numerosoinclair }}</td>
                            </tr>

                            </tbody>
                        </table>

                    </div>
                    <div class=\" col-lg-5 col-md-5 justify-content-center d-flex align-items-center\">
                            <span style=\"margin:5px;\">
                                <a href=\"\" class=\"btn btn-primary\">Modifier votre profile</a>
                            </span>
                        <span style=\"margin:5px;\">
                                <a href=\"\" class=\"btn btn-success\">Réinitialisé votre mot de passe</a>
                            </span>
                        <span style=\"margin:5px;\">
                                <a href=\"\" class=\"btn btn-warning\">Modifier votre profile</a>
                            </span>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class=\"container-fluuid\">
        <div class=\"_formulaire_map\" style=\"margin-bottom: 22px;\">
            <div class=\"row\" style=\"padding-bottom: 0;padding-left: 9.25%;padding-top: 25px;background-color: #00a8cdc2;color: white !important;\">
                <div class=\"col-12\">
                    <h3>Trouver un médecin</h3>
                </div>
            </div>

            <input class=\"fade\"name=\"lat\" id=\"lat\" style=\"display: none;\"/>
            <input class=\"fade\"name=\"lon\" id=\"lon\" style=\"display: none;\"/>
            <div class=\"row\" style=\"padding-bottom: 25px;padding-left: 10%;padding-right: 10%;padding-top: 25px;background-color: #00a8cdc2;\">

                <div class=\"col-lg-4 col-sm-12\" style=\"padding: 0px;\">
                    <select style=\"border-radius: 0;\" class=\"form-control\" id=\"specialite\">
                        <optgroup label=\"Recherches Fréquentes\"><option value=\"51d6e1f4ef96750d4d00001d\">Médecin généraliste</option>
                            <option value=\"Pharmacie\">Pharmacie</option>
                            <option value=\"Pédiatre\">Pédiatre</option>
                            <option value=\"Dentiste\">Dentiste</option>
                            <option value=\"Ophtalmologue\">Ophtalmologue</option>
                            <option value=\"Dermatologue\">Dermatologue</option>
                            <option value=\"Gynécologue\">Gynécologue</option></optgroup>
                        <optgroup label=\"Médecins\">
                            <option value=\"Addictologue\">Addictologue</option>
                            <option value=\"Algologue - Traitement de la douleur\">Algologue - Traitement de la douleur</option>
                            <option value=\"Allergologue\">Allergologue</option>
                            <option value=\"Allergologue-pédiatrique\">Allergologue-pédiatrique</option>
                            <option value=\"Anatomopathologiste\">Anatomopathologiste </option>
                            <option value=\"Andrologue\">Andrologue</option>
                            <option value=\"Anesthésiste-réanimateur\">Anesthésiste-réanimateur</option>
                            <option value=\"Angiologue\">Angiologue</option>
                            <option value=\"Biologiste (Laboratoire d'analyse)\">Biologiste (Laboratoire d'analyse)</option>
                            <option value=\"Cardiologue\">Cardiologue</option>
                            <option value=\"Cardiologue pédiatrique\">Cardiologue pédiatrique</option>
                            <option value=\"Cardiologue rythmologue\">Cardiologue rythmologue</option>
                            <option value=\"\">Chirugien cervico-facial</option>
                            <option value=\"\">Chirurgien cardiaque</option>
                            <option value=\"\">Chirurgien cardiaque pédiatrique</option>
                            <option value=\"\">Chirurgien de l'obésité</option>
                            <option value=\"\">Chirurgien de la main</option>
                            <option value=\"59bfb89132d9bb0015841f7b\">Chirurgien digestif</option>
                            <option value=\"59ce22a9777e720015cd2846\">Chirurgien du foie, du pancréas et des voies biliaires</option>
                            <option value=\"51d6e1f4ef96750d4d000007\">Chirurgien esthétique et plastique</option>
                            <option value=\"56cdb3891a924b0088000169\">Chirurgien général</option>
                            <option value=\"51d6e1f4ef96750d4d000008\">Chirurgien maxillo-facial</option>
                            <option value=\"5abb991e11abff001999707b\">Chirurgien orthopédiste et traumatologue</option>
                            <option value=\"58bd91c5d6fab3000e2c5c6b\">Chirurgien pédiatre</option>
                            <option value=\"51d6e1f4ef96750d4d00000c\">Chirurgien thoracique</option>
                            <option value=\"51d6e1f4ef96750d4d000009\">Chirurgien vasculaire</option>
                            <option value=\"51d6e1f4ef96750d4d00000a\">Chirurgien viscéral</option>
                            <option value=\"5225c0c522814f1518000001\">Chirurgien viscéral pédiatrique</option>
                            <option value=\"51d6e1f4ef96750d4d00000f\">Dermatologue</option>
                            <option value=\"592ff56ebdaa990015746012\">Dermatologue pédiatrique</option>
                            <option value=\"51d6e1f4ef96750d4d000010\">Diabétologue</option>
                            <option value=\"51d6e1f4ef96750d4d000012\">Endocrinologue</option>
                            <option value=\"51d6e1f4ef96750d4d000013\">Gastro-entérologue</option>
                            <option value=\"56963725deaa1500880000ed\">Gastro-entérologue pédiatrique</option>
                            <option value=\"51d6e1f4ef96750d4d000015\">Gynécologue</option>
                            <option value=\"59355fb8d5c34a002020b5e8\">Gynécologue-obstétricien</option>
                            <option value=\"5255d1b5c15e323538000001\">Généticien</option>
                            <option value=\"51d6e1f4ef96750d4d000014\">Gérontologue - Gériatre</option>
                            <option value=\"51d6e1f4ef96750d4d000016\">Hématologue</option>
                            <option value=\"53033018626138447d6c0000\">Hépatologue</option>
                            <option value=\"5d9ef34b7b02ae0037f2b367\">Médecin du sommeil</option>
                            <option value=\"51d6e1f4ef96750d4d00001c\">Médecin du sport</option>
                            <option value=\"51d6e1f4ef96750d4d00001b\">Médecin du travail</option>
                            <option value=\"56efea4c39069d008800012b\">Médecin esthétique</option>
                            <option value=\"51d6e1f4ef96750d4d00001d\">Médecin généraliste</option>
                            <option value=\"51d6e1f4ef96750d4d00001f\">Médecin interniste </option>
                            <option value=\"51d6e1f4ef96750d4d00001e\">Médecin légiste</option>
                            <option value=\"5240b334d82995d032000001\">Médecin nucléaire</option>
                            <option value=\"51d6e1f4ef96750d4d000020\">Médecin physique et de réadaptation</option>
                            <option value=\"5f44f34569ac6c0048b4ca63\">Médecin urgentiste</option>
                            <option value=\"51d6e1f4ef96750d4d000022\">Neurochirurgien</option>
                            <option value=\"51d6e1f4ef96750d4d000023\">Neurologue</option>
                            <option value=\"5faa92aef70b96006b65f23d\">Neuropédiatre</option>
                            <option value=\"5251add21df2749407000001\">Néonatologiste </option>
                            <option value=\"51d6e1f4ef96750d4d000021\">Néphrologue</option>
                            <option value=\"5225c0e422814f1518000004\">Néphrologue pédiatrique</option>
                            <option value=\"5721cd023bc1610089000091\">Obstétricien</option>
                            <option value=\"51d6e1f4ef96750d4d000026\">Oncologue - Cancerologue</option>
                            <option value=\"5255d1d7c15e323538000003\">Oncologue médical</option>
                            <option value=\"51d6e1f4ef96750d4d000027\">Ophtalmologue</option>
                            <option value=\"57594e4dacf94f0089000092\">Ophtalmologue pédiatrique</option>
                            <option value=\"51d6e1f4ef96750d4d00002b\">Oto-rhino-laryngologiste</option>
                            <option value=\"52d903ce36633140db450000\">Phlébologue</option>
                            <option value=\"51d6e1f4ef96750d4d00002d\">Pneumologue</option>
                            <option value=\"53032ffb626138447d6b0000\">Proctologue</option>
                            <option value=\"51d6e1f4ef96750d4d00002f\">Psychiatre</option>
                            <option value=\"5b86c3af8153cf00196e3e14\">Psychogériatre</option>
                            <option value=\"51d6e1f4ef96750d4d00002c\">Pédiatre</option>
                            <option value=\"576125729ce5ff008900004e\">Pédopsychiatre</option>
                            <option value=\"51d6e1f4ef96750d4d000032\">Radiologue</option>
                            <option value=\"5255d1c5c15e323538000002\">Radiothérapeute</option>
                            <option value=\"51d6e1f4ef96750d4d000033\">Rhumatologue</option>
                            <option value=\"523ecad80a69cc00f9000212\">Réanimateur Médical</option>
                            <option value=\"5240b343d82995d032000002\">Réanimateur pédiatrique</option>
                            <option value=\"51d6e1f4ef96750d4d000034\">Sexologue</option>
                            <option value=\"51d6e1f4ef96750d4d000035\">Stomatologue</option>
                            <option value=\"5225c0d022814f1518000002\">Traumato-orthopédiste pédiatrique</option>
                            <option value=\"51d6e1f4ef96750d4d00000b\">Traumatologue-orthopédiste</option>
                            <option value=\"51d6e1f4ef96750d4d00000d\">Urologue</option>
                            <option value=\"5225c0db22814f1518000003\">Urologue pédiatrique</option>
                        </optgroup>
                        <optgroup label=\"Dentistes\">
                            <option value=\"Chirurgie buccale\">Chirurgie buccale</option>
                            <option value=\"Dentiste\">Dentiste</option>
                            <option value=\"Endodontiste\">Endodontiste</option>
                            <option value=\"Esthétique dentaire\">Esthétique dentaire</option>
                            <option value=\"Implantologiste\">Implantologiste </option>
                            <option value=\"Occlusodontiste\">Occlusodontiste</option>
                            <option value=\"Orthodontiste\">Orthodontiste</option>
                            <option value=\"Parodontologiste\">Parodontologiste</option>
                            <option value=\"Pédodontiste\">Pédodontiste</option>
                        </optgroup>
                        <optgroup label=\"Autres Professionnels de Santé\">
                            <option value=\"Acupuncture\">Acupuncture</option>
                            <option value=\"Audioprothésiste\">Audioprothésiste</option>
                            <option value=\"51d6e1f4ef96750d4d000006\">Chiropracteur</option>
                            <option value=\"51d6e1f4ef96750d4d000011\">Diététicien</option>
                            <option value=\"5c6d1ca0d62ab50032adb75d\">Ergothérapie</option>
                            <option value=\"59d24180892c270020fe0843\">Homéopathe</option>
                            <option value=\"58bd8523c8916f000e8314ad\">Hypnothérapeute</option>
                            <option value=\"51d6e1f4ef96750d4d000019\">Kinésithérapeute</option>
                            <option value=\"591d7086e7296c000ec5c283\">Kinésithérapeute du sport</option>
                            <option value=\"5b769cff336a53001b1f46e7\">Naturopathe</option>
                            <option value=\"51d6e1f4ef96750d4d000025\">Nutritionniste</option>
                            <option value=\"51d6e1f4ef96750d4d000028\">Orthophoniste</option>
                            <option value=\"51d6e1f4ef96750d4d000029\">Orthoptiste</option>
                            <option value=\"51d6e1f4ef96750d4d00002a\">Ostéopathe</option>
                            <option value=\"51d6e1f4ef96750d4d00002e\">Podologue</option>
                            <option value=\"5895948c8eaab00014cf3dfe\">Posturologue</option>
                            <option value=\"58b55832b85a8100100efb59\">Psychanalyste</option>
                            <option value=\"51d6e1f4ef96750d4d000030\">Psychologue</option>
                            <option value=\"51d6e1f4ef96750d4d000031\">Psychomotricien</option>
                            <option value=\"5899ccfd704d5200149a3004\">Psychothérapeute</option>
                        </optgroup>
                        <optgroup label=\"Coaching\">
                            <option value=\"5af865fce2a809001aac9f08\">Coach développement personnel</option>
                            <option value=\"5af86636e2a809001aac9f09\">Coach sportif</option>
                            <option value=\"60742604283c10004c26f1b8\">Sophrologue</option></optgroup><optgroup label=\"Centres et laboratoires\"><option value=\"5af9a80e8a4bc00019a3aa5c\">Radiologie - Echographie</option>
                            <option value=\"5af9a72b8a4bc00019a3aa49\">Radiologie - IRM</option>
                            <option value=\"5b1e54917256cb0024ae70df\">Radiologie - Mammographie</option>
                            <option value=\"5af9a7a88a4bc0001da3abf4\">Radiologie - Scanner</option></optgroup><optgroup label=\"Pharmacies\"><option value=\"5b1a8895cf0467002420a6f4\">Pharmacie</option></optgroup>                     </select>
                </div >
                <div class=\"col-lg-4 col-sm-12\"  style=\"padding: 0px;\">
                    <div class=\"input-group \">
                        <input  style=\"border-radius: 0;\" class=\"form-control \" placeholder=\"Ville\" name=\"addr\" id=\"addr\"/>
                        <div class=\"input-group-append\">
                            <span class=\"input-group-text\" style=\"height: 100%;\"><i class=\"fa fa-map-marker\"></i></span>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-12\"  style=\"padding: 0px;\">
                    <button  style=\"border-radius: 0;\" class=\"col-12 btn btn-large btn-primary\" onclick=\"addr_search();\">Rechercher</button>
                </div>
            </div>

        </div>

        <div class=\"row\" id=\"search\">
            <div class=\"col-lg-6 col-sm-12 col-xs-12\" id=\"results\">

            </div>
            <div class=\"col-lg-6 col-sm-12 col-xs-12\">
                <div id=\"mapid\" ></div>
            </div>
        </div>



    </div>


    <div class=\"container-fluuid _content-background\">
        <div class=\"row\">
            <div class=\"col-12 _content-header\">
                <h4>
                    Faites analyser votre devis par des professionnels!<br/>
                    Envoyez vos questions et votre devis par
                    <a href=\"mailto:Contact@soinclair.ma\">mail</a> ou sur
                    <a href=\"https://api.whatsapp.com/send?phone=212662790345\" target=\"_blank\" style=\"color:#2db742 !important;\">Whatsapp</a>
                </h4>
                <small>
                    Besoin d’aide ?
                    <br/>Contactez nous sur 06 66 24 87 72 ou par mail Contact@soinclair.ma
                </small>
            </div>
        </div>
    </div>

{% endblock %}
{% block body %}{% endblock %}", "vitrine/adherant/index.html.twig", "C:\\Users\\czakaria\\lab\\projects\\soinclair\\soin_clair\\templates\\vitrine\\adherant\\index.html.twig");
    }
}
