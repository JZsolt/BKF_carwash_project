<?php

/* partials/base.html.twig */
class __TwigTemplate_40c3daac6c1dd1acb61228641ad5efc8795574fa3517d1e2478dde8b868ed7d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", array())));
        echo "\">
<head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=shift_jis\">
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 48
        echo "</head>
<body id=\"top\" class=\"";
        // line 49
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\">

";
        // line 51
        $this->displayBlock('header', $context, $blocks);
        // line 58
        echo "
";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('footer', $context, $blocks);
        // line 211
        echo "
";
        // line 212
        $this->displayBlock('bottom', $context, $blocks);
        // line 216
        echo "
</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    
    <title>Self service BKF Carwash - Spalatorie auto self-service</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta http-equiv=\"content-language\" content=\"ro\">
    <meta http-equiv=\"Expires\" content=\"7\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"keywords\" content=\"Spalatorie auto, Spalatorii auto self-service, Aspiratoare self-service, bkf-carwash, bkf carwash\" />
  <meta name=\"title\" content=\"Self service BKF Carwash - Home - Spalatorie auto: Spalatorie auto self service, Spalatorie de masini autoservire\" />
  <meta name=\"author\" content=\"Administrator\" />
    <meta name=\"description\" content=\"Self service BKF Carwash. BKF este in topul celor mai mari producători de spălătorii auto self service din lume datorită tehnologiei. Realizările sunt create cu pasiune și astfel ne deosebim pe piață\" />

    <link href=\"https://fonts.googleapis.com/css?family=Bai+Jamjuree|PT+Sans|Titillium+Web:300,400,500,600,700,800,900\" rel=\"stylesheet\">
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\" rel=\"stylesheet\">

    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 21
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/Icons/logo_BKF.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 22
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 24
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

    ";
        // line 37
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

";
    }

    // line 24
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 25
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://unpkg.com/purecss@1.0.0/build/pure-min.css", 1 => 100), "method");
        // line 26
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", 1 => 99), "method");
        // line 27
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/custom.css", 1 => 98), "method");
        // line 28
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/aos.css", 1 => 97), "method");
        // line 29
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/input-style.css", 1 => 97), "method");
        // line 30
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/slick.css", 1 => 97), "method");
        // line 31
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/bootstrap.min.css", 1 => 97), "method");
        // line 32
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/main.css", 1 => 97), "method");
        // line 33
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/progresscircle.css"), "method");
        // line 34
        echo "    ";
    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        // line 38
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 100), "method");
        // line 39
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/aos.js"), "method");
        // line 40
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/classie.js"), "method");
        // line 41
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/slick.min.js"), "method");
        // line 42
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/progresscircle.js"), "method");
        // line 43
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://scripts/all.js"), "method");
        // line 44
        echo "    ";
    }

    // line 51
    public function block_header($context, array $blocks = array())
    {
        // line 52
        echo "  ";
        $this->displayBlock('header_navigation', $context, $blocks);
    }

    public function block_header_navigation($context, array $blocks = array())
    {
        // line 53
        echo "  <nav class=\"main-nav\">
      ";
        // line 54
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 54)->display($context);
        // line 55
        echo "  </nav>
  ";
    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        // line 60
        echo "    <section id=\"body\" class=\"";
        if (($this->getAttribute(($context["page"] ?? null), "title", array()) == "Contact")) {
            echo " contact ";
        }
        echo "\" >
        <div class=\"wrapper\">
        ";
        // line 62
        $this->displayBlock('content', $context, $blocks);
        // line 63
        echo "        </div>
    </section>
";
    }

    // line 62
    public function block_content($context, array $blocks = array())
    {
    }

    // line 67
    public function block_footer($context, array $blocks = array())
    {
        // line 68
        echo "  ";
        if (($this->getAttribute(($context["page"] ?? null), "title", array()) == "Contact")) {
            // line 69
            echo "    <div id=\"map\" style=\"height:400px;\"></div>
  ";
        }
        // line 71
        echo "   <footer class=\"footer\">
  <div class=\"footer_container\">
    <div class=\"footer_internal_container\">
      
      <div class=\"footer_img\">
        <img src=\"";
        // line 76
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/BKF_logo.png");
        echo "\" class=\"initialized\" alt=\"_BKF header-logo\">
      </div>

      <div class=\"footer_content\">
        <div class=\"contact_col col_container\">
          <h3>CONTACT</h3>
          <a href=\"mailto:office@bkf-carwash.ro?Subject=Mesaj%20nou\" title=\"mail\">office@bkf-carwash.ro</a>
          <a href=\"tel:+40771486783\" title=\"mobile phone\">+40 771 486 783</a>
          <a href=\"tel:+40722536117\" title=\"second phone\">+40 722 536 117</a>
        </div>
        <div class=\"prod_col col_container\">
          <h3>PRODUSE</h3>
          <a href=\"produse#category_0\" title=\"Spalatorie auto self service\">Spălătorii auto self service</a>
          <a href=\"produse#category_1\" title=\"Spalatorie auto self service\">Aspiratoare</a>
          <a href=\"produse#category_2\" title=\"Spalatorie auto self service\">Structuri metalice</a>
          <a href=\"produse#category_3\" title=\"Spalatorie auto self service\">Accesorii</a>
        </div>
        <div class=\"technology_col col_container\">
          <h3>NAVIGARE</h3>
          <a href=\"/\" title=\"Spalatorie auto Home\">Prima pagină</a>
          <a href=\"produse\" title=\"Spalatorie auto Produse\">Produse</a>
          <a href=\"technologii\" title=\"Spalatorie auto Tehnologie\">Tehnologie </a>
          <a href=\"investitor\" title=\"Spalatorie auto Investitor\">Investitor</a>
          <a href=\"contact\" title=\"Spalatorie auto Contact\">Contact</a>
        </div>
      </div>

      <div class=\"line_footer\"></div>
      <div class=\"copyright\">Copyright &nbsp<span>&#169</span>&nbsp 2018 all rights reserved.</div>

    </div>
  </div>
   <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyC-zZXJcRq9YCy4vMZCbWT8FR0NzB8oVJ8&callback=initMap\" async defer>
   </script>
   <script>
    var map;
    function initMap() {
      map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 46.5263666, lng: 24.5508147},
        zoom: 16,
        styles: [
          {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
          {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
          {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
          {
            featureType: 'administrative.locality',
            elementType: 'labels.text.fill',
            stylers: [{color: '#d59563'}]
          },
          {
            featureType: 'poi',
            elementType: 'labels.text.fill',
            stylers: [{color: '#d59563'}]
          },
          {
            featureType: 'poi.park',
            elementType: 'geometry',
            stylers: [{color: '#263c3f'}]
          },
          {
            featureType: 'poi.park',
            elementType: 'labels.text.fill',
            stylers: [{color: '#6b9a76'}]
          },
          {
            featureType: 'road',
            elementType: 'geometry',
            stylers: [{color: '#D02C30'}]
          },
          {
            featureType: 'road',
            elementType: 'geometry.stroke',
            stylers: [{color: '#212a37'}]
          },
          {
            featureType: 'road',
            elementType: 'labels.text.fill',
            stylers: [{color: '#9ca5b3'}]
          },
          {
            featureType: 'road.highway',
            elementType: 'geometry',
            stylers: [{color: '#746855'}]
          },
          {
            featureType: 'road.highway',
            elementType: 'geometry.stroke',
            stylers: [{color: '#1f2835'}]
          },
          {
            featureType: 'road.highway',
            elementType: 'labels.text.fill',
            stylers: [{color: '#f3d19c'}]
          },
          {
            featureType: 'transit',
            elementType: 'geometry',
            stylers: [{color: '#2f3948'}]
          },
          {
            featureType: 'transit.station',
            elementType: 'labels.text.fill',
            stylers: [{color: '#d59563'}]
          },
          {
            featureType: 'water',
            elementType: 'geometry',
            stylers: [{color: '#17263c'}]
          },
          {
            featureType: 'water',
            elementType: 'labels.text.fill',
            stylers: [{color: '#515c6d'}]
          },
          {
            featureType: 'water',
            elementType: 'labels.text.stroke',
            stylers: [{color: '#17263c'}]
          }
        ]
      });

      var marker = new google.maps.Marker({
        position: {lat: 46.526692, lng: 24.551257},
        map: map,
        icon: {
          url: \"";
        // line 202
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/marker.png");
        echo "\",
          scaledSize: new google.maps.Size(64, 64)
        },
        title: 'BKF Carwash'
      });
    }
  </script>
</footer>
";
    }

    // line 212
    public function block_bottom($context, array $blocks = array())
    {
        // line 213
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(0 => "bottom"), "method");
        echo "

";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 213,  381 => 212,  368 => 202,  239 => 76,  232 => 71,  228 => 69,  225 => 68,  222 => 67,  217 => 62,  211 => 63,  209 => 62,  201 => 60,  198 => 59,  193 => 55,  191 => 54,  188 => 53,  181 => 52,  178 => 51,  174 => 44,  171 => 43,  168 => 42,  165 => 41,  162 => 40,  159 => 39,  156 => 38,  153 => 37,  149 => 34,  146 => 33,  143 => 32,  140 => 31,  137 => 30,  134 => 29,  131 => 28,  128 => 27,  125 => 26,  122 => 25,  119 => 24,  111 => 45,  109 => 37,  103 => 35,  101 => 24,  96 => 22,  92 => 21,  75 => 6,  72 => 5,  65 => 216,  63 => 212,  60 => 211,  58 => 67,  55 => 66,  53 => 59,  50 => 58,  48 => 51,  43 => 49,  40 => 48,  38 => 5,  33 => 3,  30 => 2,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
<head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=shift_jis\">
{% block head %}
    
    <title>Self service BKF Carwash - Spalatorie auto self-service</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta http-equiv=\"content-language\" content=\"ro\">
    <meta http-equiv=\"Expires\" content=\"7\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"keywords\" content=\"Spalatorie auto, Spalatorii auto self-service, Aspiratoare self-service, bkf-carwash, bkf carwash\" />
  <meta name=\"title\" content=\"Self service BKF Carwash - Home - Spalatorie auto: Spalatorie auto self service, Spalatorie de masini autoservire\" />
  <meta name=\"author\" content=\"Administrator\" />
    <meta name=\"description\" content=\"Self service BKF Carwash. BKF este in topul celor mai mari producători de spălătorii auto self service din lume datorită tehnologiei. Realizările sunt create cu pasiune și astfel ne deosebim pe piață\" />

    <link href=\"https://fonts.googleapis.com/css?family=Bai+Jamjuree|PT+Sans|Titillium+Web:300,400,500,600,700,800,900\" rel=\"stylesheet\">
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\" rel=\"stylesheet\">

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/Icons/logo_BKF.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {% block stylesheets %}
        {% do assets.addCss('https://unpkg.com/purecss@1.0.0/build/pure-min.css', 100) %}
        {% do assets.addCss('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', 99) %}
        {% do assets.addCss('theme://css/custom.css', 98) %}
        {% do assets.addCss('theme://css/aos.css', 97) %}
        {% do assets.addCss('theme://css/input-style.css', 97) %}
        {% do assets.addCss('theme://css/slick.css', 97) %}
        {% do assets.addCss('theme://css/bootstrap.min.css', 97) %}
        {% do assets.addCss('theme://css/main.css', 97) %}
        {% do assets.addCss('theme://css/progresscircle.css') %}
    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.addJs('jquery', 100) %}
        {% do assets.addJs('theme://js/aos.js') %}
        {% do assets.addJs('theme://js/classie.js') %}
        {% do assets.addJs('theme://js/slick.min.js') %}
        {% do assets.addJs('theme://js/progresscircle.js') %}
        {% do assets.addJs('theme://scripts/all.js') %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head%}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">

{% block header %}
  {% block header_navigation %}
  <nav class=\"main-nav\">
      {% include 'partials/navigation.html.twig' %}
  </nav>
  {% endblock %}
{% endblock %}

{% block body %}
    <section id=\"body\" class=\"{% if (page.title == 'Contact')%} contact {% endif %}\" >
        <div class=\"wrapper\">
        {% block content %}{% endblock %}
        </div>
    </section>
{% endblock %}

{% block footer %}
  {% if (page.title == \"Contact\")%}
    <div id=\"map\" style=\"height:400px;\"></div>
  {% endif %}
   <footer class=\"footer\">
  <div class=\"footer_container\">
    <div class=\"footer_internal_container\">
      
      <div class=\"footer_img\">
        <img src=\"{{ url('theme://images/BKF_logo.png') }}\" class=\"initialized\" alt=\"_BKF header-logo\">
      </div>

      <div class=\"footer_content\">
        <div class=\"contact_col col_container\">
          <h3>CONTACT</h3>
          <a href=\"mailto:office@bkf-carwash.ro?Subject=Mesaj%20nou\" title=\"mail\">office@bkf-carwash.ro</a>
          <a href=\"tel:+40771486783\" title=\"mobile phone\">+40 771 486 783</a>
          <a href=\"tel:+40722536117\" title=\"second phone\">+40 722 536 117</a>
        </div>
        <div class=\"prod_col col_container\">
          <h3>PRODUSE</h3>
          <a href=\"produse#category_0\" title=\"Spalatorie auto self service\">Spălătorii auto self service</a>
          <a href=\"produse#category_1\" title=\"Spalatorie auto self service\">Aspiratoare</a>
          <a href=\"produse#category_2\" title=\"Spalatorie auto self service\">Structuri metalice</a>
          <a href=\"produse#category_3\" title=\"Spalatorie auto self service\">Accesorii</a>
        </div>
        <div class=\"technology_col col_container\">
          <h3>NAVIGARE</h3>
          <a href=\"/\" title=\"Spalatorie auto Home\">Prima pagină</a>
          <a href=\"produse\" title=\"Spalatorie auto Produse\">Produse</a>
          <a href=\"technologii\" title=\"Spalatorie auto Tehnologie\">Tehnologie </a>
          <a href=\"investitor\" title=\"Spalatorie auto Investitor\">Investitor</a>
          <a href=\"contact\" title=\"Spalatorie auto Contact\">Contact</a>
        </div>
      </div>

      <div class=\"line_footer\"></div>
      <div class=\"copyright\">Copyright &nbsp<span>&#169</span>&nbsp 2018 all rights reserved.</div>

    </div>
  </div>
   <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyC-zZXJcRq9YCy4vMZCbWT8FR0NzB8oVJ8&callback=initMap\" async defer>
   </script>
   <script>
    var map;
    function initMap() {
      map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 46.5263666, lng: 24.5508147},
        zoom: 16,
        styles: [
          {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
          {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
          {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
          {
            featureType: 'administrative.locality',
            elementType: 'labels.text.fill',
            stylers: [{color: '#d59563'}]
          },
          {
            featureType: 'poi',
            elementType: 'labels.text.fill',
            stylers: [{color: '#d59563'}]
          },
          {
            featureType: 'poi.park',
            elementType: 'geometry',
            stylers: [{color: '#263c3f'}]
          },
          {
            featureType: 'poi.park',
            elementType: 'labels.text.fill',
            stylers: [{color: '#6b9a76'}]
          },
          {
            featureType: 'road',
            elementType: 'geometry',
            stylers: [{color: '#D02C30'}]
          },
          {
            featureType: 'road',
            elementType: 'geometry.stroke',
            stylers: [{color: '#212a37'}]
          },
          {
            featureType: 'road',
            elementType: 'labels.text.fill',
            stylers: [{color: '#9ca5b3'}]
          },
          {
            featureType: 'road.highway',
            elementType: 'geometry',
            stylers: [{color: '#746855'}]
          },
          {
            featureType: 'road.highway',
            elementType: 'geometry.stroke',
            stylers: [{color: '#1f2835'}]
          },
          {
            featureType: 'road.highway',
            elementType: 'labels.text.fill',
            stylers: [{color: '#f3d19c'}]
          },
          {
            featureType: 'transit',
            elementType: 'geometry',
            stylers: [{color: '#2f3948'}]
          },
          {
            featureType: 'transit.station',
            elementType: 'labels.text.fill',
            stylers: [{color: '#d59563'}]
          },
          {
            featureType: 'water',
            elementType: 'geometry',
            stylers: [{color: '#17263c'}]
          },
          {
            featureType: 'water',
            elementType: 'labels.text.fill',
            stylers: [{color: '#515c6d'}]
          },
          {
            featureType: 'water',
            elementType: 'labels.text.stroke',
            stylers: [{color: '#17263c'}]
          }
        ]
      });

      var marker = new google.maps.Marker({
        position: {lat: 46.526692, lng: 24.551257},
        map: map,
        icon: {
          url: \"{{ url('theme://images/marker.png') }}\",
          scaledSize: new google.maps.Size(64, 64)
        },
        title: 'BKF Carwash'
      });
    }
  </script>
</footer>
{% endblock %}

{% block bottom %}
    {{ assets.js('bottom') }}

{% endblock %}

</body>
</html>
", "partials/base.html.twig", "/home3/bkfcarbc/public_html/user/themes/bkf/templates/partials/base.html.twig");
    }
}
