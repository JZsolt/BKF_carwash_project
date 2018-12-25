<?php

/* @Page:/home3/bkfcarbc/public_html/user/pages/04.contact/thankyou */
class __TwigTemplate_7db84b86f8c920ce2868c3f8e3e3eb2a32e0d67b11927f8206a53229a6af8cba extends Twig_Template
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
        echo "<h2>Email sent!</h2>";
    }

    public function getTemplateName()
    {
        return "@Page:/home3/bkfcarbc/public_html/user/pages/04.contact/thankyou";
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
        return new Twig_Source("<h2>Email sent!</h2>", "@Page:/home3/bkfcarbc/public_html/user/pages/04.contact/thankyou", "");
    }
}
