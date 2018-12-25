<?php

/* partials/navigation.html.twig */
class __TwigTemplate_9949565bbb7ca70341f206e7064f6d227b17569c9dcaded64773abe57150add8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<header>
  <div class=\"header_div\">
    <div class=\"navbar_home\">
      <nav class=\"navbar navbar-expand-lg\">
        <a class=\"navbar-brand\" href=\"";
        // line 5
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\" title=\"Home\">
          <div class=\"navimg\">
            <img src=\"";
        // line 7
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/BKF_logo.png");
        echo "\" class=\"initialized\" alt=\"BKF Spalatorie auto\">
          </div>
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse d-md-none d-lg-block\" id=\"navbarNavAltMarkup\">
          <div class=\"navbar-nav\">
            <a class=\"nav-item nav-link ";
        // line 15
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()) == "Home")) {
            echo " active ";
        }
        echo "\" href=\"/\" title=\"Home\">Prima pagină</a>
            <div class=\"dropdown nav-item nav-link\">
              <a class=\"nav_item_drop ";
        // line 17
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()) == "Produse")) {
            echo " active ";
        }
        echo "\" href=\"produse\" title=\"Produse\">Produse</a>
              <i class=\"fa fa-caret-down\"></i>
              <div class=\"dropdown-content\">
                <a href=\"produse#category_0\" class=\"js_nav_scroll\" title=\"Spalatorii auto self-service\">Spălătorii auto self service</a>
                <a href=\"produse#category_1\" class=\"js_nav_scroll\" title=\"Aspiratoare\">Aspiratoare</a>
                <a href=\"produse#category_2\" class=\"js_nav_scroll\" title=\"Structuri metalice\">Structuri metalice</a>
                <a href=\"produse#category_3\" class=\"js_nav_scroll\" title=\"Accesori\">Accesorii</a>
              </div>
            </div> 
            <a class=\"nav-item nav-link ";
        // line 26
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()) == "Technologii")) {
            echo " active ";
        }
        echo "\" href=\"technologii\" title=\"Tehnologie\">Tehnologie</a>
            <a class=\"nav-item nav-link ";
        // line 27
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()) == "Investitor")) {
            echo " active ";
        }
        echo "\" href=\"investitor\" title=\"Investitor\">Investitor</a>
            <a class=\"nav-item nav-link ";
        // line 28
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()) == "Contact")) {
            echo " active ";
        }
        echo "\" href=\"contact\" title=\"Contact\">Contact</a>
          </div>
        </div>
        <div class=\"open-side-nav d-xs-block d-sm-block d-md-block d-lg-none\">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </nav>
    </div>
  </div>
  <div class=\"sidenav\">
    <a href=\"home\" title=\"Home\">Prima pagină</a>
    <a href=\"produse\" title=\"Produse\">Produse</a>
    <a href=\"technologii\" title=\"Tehnologii\">Tehnologie</a>
    <a href=\"investitor\" title=\"Investitor\">Investitor</a>
    <a href=\"contact\" title=\"Contact\">Contact</a>
  </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 28,  68 => 27,  62 => 26,  48 => 17,  41 => 15,  30 => 7,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header>
  <div class=\"header_div\">
    <div class=\"navbar_home\">
      <nav class=\"navbar navbar-expand-lg\">
        <a class=\"navbar-brand\" href=\"{{base_url_absolute}}\" title=\"Home\">
          <div class=\"navimg\">
            <img src=\"{{ url('theme://images/BKF_logo.png') }}\" class=\"initialized\" alt=\"BKF Spalatorie auto\">
          </div>
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse d-md-none d-lg-block\" id=\"navbarNavAltMarkup\">
          <div class=\"navbar-nav\">
            <a class=\"nav-item nav-link {% if (page.title == \"Home\")%} active {% endif %}\" href=\"/\" title=\"Home\">Prima pagină</a>
            <div class=\"dropdown nav-item nav-link\">
              <a class=\"nav_item_drop {% if (page.title == \"Produse\")%} active {% endif %}\" href=\"produse\" title=\"Produse\">Produse</a>
              <i class=\"fa fa-caret-down\"></i>
              <div class=\"dropdown-content\">
                <a href=\"produse#category_0\" class=\"js_nav_scroll\" title=\"Spalatorii auto self-service\">Spălătorii auto self service</a>
                <a href=\"produse#category_1\" class=\"js_nav_scroll\" title=\"Aspiratoare\">Aspiratoare</a>
                <a href=\"produse#category_2\" class=\"js_nav_scroll\" title=\"Structuri metalice\">Structuri metalice</a>
                <a href=\"produse#category_3\" class=\"js_nav_scroll\" title=\"Accesori\">Accesorii</a>
              </div>
            </div> 
            <a class=\"nav-item nav-link {% if (page.title == \"Technologii\")%} active {% endif %}\" href=\"technologii\" title=\"Tehnologie\">Tehnologie</a>
            <a class=\"nav-item nav-link {% if (page.title == \"Investitor\")%} active {% endif %}\" href=\"investitor\" title=\"Investitor\">Investitor</a>
            <a class=\"nav-item nav-link {% if (page.title == \"Contact\")%} active {% endif %}\" href=\"contact\" title=\"Contact\">Contact</a>
          </div>
        </div>
        <div class=\"open-side-nav d-xs-block d-sm-block d-md-block d-lg-none\">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </nav>
    </div>
  </div>
  <div class=\"sidenav\">
    <a href=\"home\" title=\"Home\">Prima pagină</a>
    <a href=\"produse\" title=\"Produse\">Produse</a>
    <a href=\"technologii\" title=\"Tehnologii\">Tehnologie</a>
    <a href=\"investitor\" title=\"Investitor\">Investitor</a>
    <a href=\"contact\" title=\"Contact\">Contact</a>
  </div>
</header>
", "partials/navigation.html.twig", "/Applications/AMPPS/www/grav/user/themes/bkf/templates/partials/navigation.html.twig");
    }
}
