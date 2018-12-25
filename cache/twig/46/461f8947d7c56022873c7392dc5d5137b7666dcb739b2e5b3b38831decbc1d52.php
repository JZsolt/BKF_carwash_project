<?php

/* partials/form.html.twig */
class __TwigTemplate_924314e4f43551ae12bdabca818269dba2bcacfd168b089abb80ba810e7a9f1a extends Twig_Template
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
        echo " <form action=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://templates/partials/email_send.php");
        echo "\" method=\"POST\">
\t<div class=\"row\">
\t  <div class=\"col-12\">
\t    <span class=\"input input--nao\">
\t      <input class=\"input__field input__field--nao\" type=\"text\" name=\"name\" id=\"input-1\" />
\t      <label class=\"input__label input__label--nao\" for=\"input-1\">
\t        <span class=\"input__label-content input__label-content--nao\">Nume si prenume</span>
\t      </label>
\t      <svg class=\"graphic graphic--nao\" width=\"300%\" height=\"100%\" viewBox=\"0 0 1200 60\" preserveAspectRatio=\"none\">
\t        <path d=\"M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0\"/>
\t      </svg>
\t    </span>
\t    <p></p>
\t  </div>
\t</div>
\t<div class=\"row\">
\t  <div class=\"col-12\">
\t    <span class=\"input input--nao\">
\t      <input class=\"input__field input__field--nao\" type=\"text\" name=\"email\" id=\"input-1\" />
\t      <label class=\"input__label input__label--nao\" for=\"input-1\">
\t        <span class=\"input__label-content input__label-content--nao\">Adresa e-mail</span>
\t      </label>
\t      <svg class=\"graphic graphic--nao\" width=\"300%\" height=\"100%\" viewBox=\"0 0 1200 60\" preserveAspectRatio=\"none\">
\t        <path d=\"M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0\"/>
\t      </svg>
\t    </span>
\t    <p></p>
\t  </div>
\t</div>
\t<div class=\"row\">
\t  <div class=\"col-12\">
\t    <span class=\"input input--nao\">
\t      <input class=\"input__field input__field--nao\" type=\"text\" name=\"phone-number\" id=\"input-1\" />
\t      <label class=\"input__label input__label--nao\" for=\"input-1\">
\t        <span class=\"input__label-content input__label-content--nao\">Numar telefon</span>
\t      </label>
\t      <svg class=\"graphic graphic--nao\" width=\"300%\" height=\"100%\" viewBox=\"0 0 1200 60\" preserveAspectRatio=\"none\">
\t        <path d=\"M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0\"/>
\t      </svg>
\t    </span>
\t  </div>
\t</div>
\t<div class=\"row\">
\t  <div class=\"col-12\">
\t    <span class=\"input input--nao\">
\t      <input class=\"input__field input__field--nao\" type=\"text\" name=\"message\" id=\"input-1\" />
\t      <label class=\"input__label input__label--nao\" for=\"input-1\">
\t        <span class=\"input__label-content input__label-content--nao\">Mesaj</span>
\t      </label>
\t      <svg class=\"graphic graphic--nao\" width=\"300%\" height=\"100%\" viewBox=\"0 0 1200 60\" preserveAspectRatio=\"none\">
\t        <path d=\"M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0\"/>
\t      </svg>
\t    </span>
\t    <p></p>
\t  </div>
\t</div>
\t<div class=\"text-center button-container\">
\t  <a class=\"btn-primary js-send-contact\">Trimite mesaj</a>
\t</div>
</form>";
    }

    public function getTemplateName()
    {
        return "partials/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source(" <form action=\"{{ url('theme://templates/partials/email_send.php') }}\" method=\"POST\">
\t<div class=\"row\">
\t  <div class=\"col-12\">
\t    <span class=\"input input--nao\">
\t      <input class=\"input__field input__field--nao\" type=\"text\" name=\"name\" id=\"input-1\" />
\t      <label class=\"input__label input__label--nao\" for=\"input-1\">
\t        <span class=\"input__label-content input__label-content--nao\">Nume si prenume</span>
\t      </label>
\t      <svg class=\"graphic graphic--nao\" width=\"300%\" height=\"100%\" viewBox=\"0 0 1200 60\" preserveAspectRatio=\"none\">
\t        <path d=\"M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0\"/>
\t      </svg>
\t    </span>
\t    <p></p>
\t  </div>
\t</div>
\t<div class=\"row\">
\t  <div class=\"col-12\">
\t    <span class=\"input input--nao\">
\t      <input class=\"input__field input__field--nao\" type=\"text\" name=\"email\" id=\"input-1\" />
\t      <label class=\"input__label input__label--nao\" for=\"input-1\">
\t        <span class=\"input__label-content input__label-content--nao\">Adresa e-mail</span>
\t      </label>
\t      <svg class=\"graphic graphic--nao\" width=\"300%\" height=\"100%\" viewBox=\"0 0 1200 60\" preserveAspectRatio=\"none\">
\t        <path d=\"M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0\"/>
\t      </svg>
\t    </span>
\t    <p></p>
\t  </div>
\t</div>
\t<div class=\"row\">
\t  <div class=\"col-12\">
\t    <span class=\"input input--nao\">
\t      <input class=\"input__field input__field--nao\" type=\"text\" name=\"phone-number\" id=\"input-1\" />
\t      <label class=\"input__label input__label--nao\" for=\"input-1\">
\t        <span class=\"input__label-content input__label-content--nao\">Numar telefon</span>
\t      </label>
\t      <svg class=\"graphic graphic--nao\" width=\"300%\" height=\"100%\" viewBox=\"0 0 1200 60\" preserveAspectRatio=\"none\">
\t        <path d=\"M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0\"/>
\t      </svg>
\t    </span>
\t  </div>
\t</div>
\t<div class=\"row\">
\t  <div class=\"col-12\">
\t    <span class=\"input input--nao\">
\t      <input class=\"input__field input__field--nao\" type=\"text\" name=\"message\" id=\"input-1\" />
\t      <label class=\"input__label input__label--nao\" for=\"input-1\">
\t        <span class=\"input__label-content input__label-content--nao\">Mesaj</span>
\t      </label>
\t      <svg class=\"graphic graphic--nao\" width=\"300%\" height=\"100%\" viewBox=\"0 0 1200 60\" preserveAspectRatio=\"none\">
\t        <path d=\"M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0\"/>
\t      </svg>
\t    </span>
\t    <p></p>
\t  </div>
\t</div>
\t<div class=\"text-center button-container\">
\t  <a class=\"btn-primary js-send-contact\">Trimite mesaj</a>
\t</div>
</form>", "partials/form.html.twig", "/Applications/AMPPS/www/grav/user/themes/bkf/templates/partials/form.html.twig");
    }
}
