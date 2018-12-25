<?php

/* partials/navigation.html.twig */
class __TwigTemplate_65b0bb389e05bcc3fcbec098c0da2819cb77a3de69e1ad8ecb2a09f7ce168d06 extends Twig_Template
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
        echo ($context["base_url_absolute"] ?? null);
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
            <a class=\"nav-item nav-link\" href=\"\" title=\"Home\">Prima pagină</a>
            <div class=\"dropdown nav-item nav-link\">
              <a class=\"nav_item_drop\" href=\"produse\" title=\"Produse\">Produse</a>
              <i class=\"fa fa-caret-down\"></i>
              <div class=\"dropdown-content\">
                <a href=\"produse#category_0\" class=\"js_nav_scroll\" title=\"Spalatorii auto self-service\">Spălătorii auto self service</a>
                <a href=\"produse#category_1\" class=\"js_nav_scroll\" title=\"Aspiratoare\">Aspiratoare</a>
                <a href=\"produse#category_2\" class=\"js_nav_scroll\" title=\"Structuri metalice\">Structuri metalice</a>
                <a href=\"produse#category_3\" class=\"js_nav_scroll\" title=\"Accesori\">Accesorii</a>
              </div>
            </div> 
            <a class=\"nav-item nav-link\" href=\"technologii\" title=\"Tehnologie\">Tehnologie</a>
            <a class=\"nav-item nav-link\" href=\"investitor\" title=\"Investitor\">Investitor</a>
            <a class=\"nav-item nav-link\" href=\"contact\" title=\"Contact\">Contact</a>
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
        return array (  30 => 7,  25 => 5,  19 => 1,);
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
            <a class=\"nav-item nav-link\" href=\"\" title=\"Home\">Prima pagină</a>
            <div class=\"dropdown nav-item nav-link\">
              <a class=\"nav_item_drop\" href=\"produse\" title=\"Produse\">Produse</a>
              <i class=\"fa fa-caret-down\"></i>
              <div class=\"dropdown-content\">
                <a href=\"produse#category_0\" class=\"js_nav_scroll\" title=\"Spalatorii auto self-service\">Spălătorii auto self service</a>
                <a href=\"produse#category_1\" class=\"js_nav_scroll\" title=\"Aspiratoare\">Aspiratoare</a>
                <a href=\"produse#category_2\" class=\"js_nav_scroll\" title=\"Structuri metalice\">Structuri metalice</a>
                <a href=\"produse#category_3\" class=\"js_nav_scroll\" title=\"Accesori\">Accesorii</a>
              </div>
            </div> 
            <a class=\"nav-item nav-link\" href=\"technologii\" title=\"Tehnologie\">Tehnologie</a>
            <a class=\"nav-item nav-link\" href=\"investitor\" title=\"Investitor\">Investitor</a>
            <a class=\"nav-item nav-link\" href=\"contact\" title=\"Contact\">Contact</a>
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
", "partials/navigation.html.twig", "/home3/bkfcarbc/public_html/user/themes/bkf/templates/partials/navigation.html.twig");
    }
}
