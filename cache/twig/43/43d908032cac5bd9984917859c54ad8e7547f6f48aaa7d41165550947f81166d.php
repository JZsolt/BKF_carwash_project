<?php

/* @Var:Thank you for getting in touch! */
class __TwigTemplate_dec59ff37fed0a0536dcf3e383415e4d6714b1e6ae2297a5246980edfa9ced50 extends Twig_Template
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
        echo "Thank you for getting in touch!";
    }

    public function getTemplateName()
    {
        return "@Var:Thank you for getting in touch!";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Thank you for getting in touch!", "@Var:Thank you for getting in touch!", "");
    }
}
