<?php

/* contact.html.twig */
class __TwigTemplate_c4dad7aa5207456475a3296b04c2641b71000b9a9d7b28100b4d181257ce12d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "contact.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"relative\">
  <div class=\"page-content\">
    <section class=\"section_content contact\">
    \t<div class=\"row\">
\t    \t<div class=\"col-6\">
          ";
        // line 9
        $this->loadTemplate("forms/form.html.twig", "contact.html.twig", 9)->display(array_merge($context, array("form" => call_user_func_array($this->env->getFunction('forms')->getCallable(), array("contact-form")))));
        // line 10
        echo "\t\t    </div>
\t\t    <div class=\"col-6\">
\t\t      <div id=\"map\">
          </div>
\t\t    </div>
\t    </div>
    </section>
  </div>
  
</div>
  
 <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyC-zZXJcRq9YCy4vMZCbWT8FR0NzB8oVJ8&callback=initMap\"
  async defer></script>
";
    }

    public function getTemplateName()
    {
        return "contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 10,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block content %}
<div class=\"relative\">
  <div class=\"page-content\">
    <section class=\"section_content contact\">
    \t<div class=\"row\">
\t    \t<div class=\"col-6\">
          {% include \"forms/form.html.twig\" with { form: forms('contact-form') } %}
\t\t    </div>
\t\t    <div class=\"col-6\">
\t\t      <div id=\"map\">
          </div>
\t\t    </div>
\t    </div>
    </section>
  </div>
  
</div>
  
 <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyC-zZXJcRq9YCy4vMZCbWT8FR0NzB8oVJ8&callback=initMap\"
  async defer></script>
{% endblock %}

", "contact.html.twig", "/home3/bkfcarbc/test.bkf-carwash.ro/user/themes/bkf/templates/contact.html.twig");
    }
}
