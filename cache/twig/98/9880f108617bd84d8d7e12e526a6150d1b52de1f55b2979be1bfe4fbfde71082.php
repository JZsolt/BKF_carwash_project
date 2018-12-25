<?php

/* investitor.html.twig */
class __TwigTemplate_89b39e2c6249e928a03fb97495de1dc840da650c4a631f0a797e1872f5fcf65e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "investitor.html.twig", 1);
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
        echo "<div class=\"page-content\">
  <div class=\"content_container\">
    
    <div class=\"inv_head\">
      
      <div class=\"inv_head_img\">
        <img class=\"\" src=\"";
        // line 10
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/Icons/home_page/3_partner_icon.png");
        echo "\" alt=\"3_partner_icon\">
      </div>

      <div class=\"inv_head_text\">
        <h1 class=\"inv_title\">
          Investitor
        </h1>

        <p class=\"inv_paragraf\">
          Realizarea spălătoriei de mașini self service este posibilă cu ajutorul nostru. Vă ajutăm să vă configurați spălătoria auto adaptat nevoilor, preferințelor Dvs. și a locației. Pe parcursul întregului proces de investiţie lucrăm alături de clienții noştri, ghidându-i pas cu pas.
        </p>
      </div>
        
    </div>

    <div class=\"inv_content\">
     <!--  <p class=\"inv_paragraf_center\">
        <span>Important!</span> Alegerea terenului. ! Locația trebuie sa fie atractivă ( cu trafic ) și spațiul sa fie suficient pentru construire.
      </p> -->
      <div class=\"inv_content_row\">
        <div class=\"inv_left\">
          <img src=\"";
        // line 31
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/investitor/BKF-firma.jpg");
        echo "\" alt=\"BKF-firma\"> 
        </div>
        <div class=\"inv_right\"> 
          <p class=\"inv_paragraf\">Maximalizați profiturile utilizând cele mai noi soluții, astfel puteți pur și simplu să mențineți poziția de lideri pe piață.</p>
          <div class=\"inv_contact_par\">
            <p class=\"inv_paragraf\">Este foarte important să alegeti bine, anume un partener de încredere.</p>
            <a class=\"carusel_btn inv_paragraf\" href=\"contact\" title=\"Contact\">
               Nu ezitați să ne contactați!
            </a>
          </div>
        </div>
      </div>
    </div>

    <h2 class=\"table_head\">Un factor important: Terenul</h2>
    <table class=\"inv_table\">
      <tr>
        <th>Tipul spălătoriei</th>
        <th>Suprafața spălătoriei</th>
        <th>Mărimea necesară a terenului</th>
      </tr>
      <tr>
        <td>2 piste</td>
        <td>60 m<sup>2</sup></td>
        <td>270 m<sup>2</sup></td>
      </tr>
      <tr>
        <td>2 piste cu container</td>
        <td>75 m<sup>2</sup></td>
        <td>315 m<sup>2</sup></td>
      </tr>  
      <tr>
        <td>3 piste</td>
        <td>90 m<sup>2</sup></td>
        <td>360 m<sup>2</sup></td>
      </tr>
      <tr>
        <td>3 piste cu container</td>
        <td>105 m<sup>2</sup></td>
        <td>405 m<sup>2</sup></td>
      </tr>  
      <tr>
        <td>4 piste</td>
        <td>120 m<sup>2</sup></td>
        <td>450 m<sup>2</sup></td>
      </tr>
      <tr>
        <td>4 piste cu container</td>
        <td>135 m<sup>2</sup></td>
        <td>495 m<sup>2</sup></td>
      </tr>  
      <tr>
        <td>5 piste</td>
        <td>150 m<sup>2</sup></td>
        <td>540 m<sup>2</sup></td>
      </tr>
      <tr>
        <td>5 piste cu container</td>
        <td>165 m<sup>2</sup></td>
        <td>585 m<sup>2</sup></td>
      </tr>  
      <tr>
        <td>6 piste</td>
        <td>180 m<sup>2</sup></td>
        <td>630 m<sup>2</sup></td>
      </tr>
      <tr>
        <td>6 piste cu container</td>
        <td>195 m<sup>2</sup></td>
        <td>675 m<sup>2</sup></td>
      </tr>  
    </table>

    <p class=\"inv_table_par\">
      <span>Important !</span> Curățarea interioară a mașinii se face cu aspiratorul. Aspiratorul ocupă o suprafață de 20 m<sup>2</sup>.
    </p>

  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "investitor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 31,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
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
<div class=\"page-content\">
  <div class=\"content_container\">
    
    <div class=\"inv_head\">
      
      <div class=\"inv_head_img\">
        <img class=\"\" src=\"{{ url('theme://images/Icons/home_page/3_partner_icon.png') }}\" alt=\"3_partner_icon\">
      </div>

      <div class=\"inv_head_text\">
        <h1 class=\"inv_title\">
          Investitor
        </h1>

        <p class=\"inv_paragraf\">
          Realizarea spălătoriei de mașini self service este posibilă cu ajutorul nostru. Vă ajutăm să vă configurați spălătoria auto adaptat nevoilor, preferințelor Dvs. și a locației. Pe parcursul întregului proces de investiţie lucrăm alături de clienții noştri, ghidându-i pas cu pas.
        </p>
      </div>
        
    </div>

    <div class=\"inv_content\">
     <!--  <p class=\"inv_paragraf_center\">
        <span>Important!</span> Alegerea terenului. ! Locația trebuie sa fie atractivă ( cu trafic ) și spațiul sa fie suficient pentru construire.
      </p> -->
      <div class=\"inv_content_row\">
        <div class=\"inv_left\">
          <img src=\"{{ url('theme://images/investitor/BKF-firma.jpg') }}\" alt=\"BKF-firma\"> 
        </div>
        <div class=\"inv_right\"> 
          <p class=\"inv_paragraf\">Maximalizați profiturile utilizând cele mai noi soluții, astfel puteți pur și simplu să mențineți poziția de lideri pe piață.</p>
          <div class=\"inv_contact_par\">
            <p class=\"inv_paragraf\">Este foarte important să alegeti bine, anume un partener de încredere.</p>
            <a class=\"carusel_btn inv_paragraf\" href=\"contact\" title=\"Contact\">
               Nu ezitați să ne contactați!
            </a>
          </div>
        </div>
      </div>
    </div>

    <h2 class=\"table_head\">Un factor important: Terenul</h2>
    <table class=\"inv_table\">
      <tr>
        <th>Tipul spălătoriei</th>
        <th>Suprafața spălătoriei</th>
        <th>Mărimea necesară a terenului</th>
      </tr>
      <tr>
        <td>2 piste</td>
        <td>60 m<sup>2</sup></td>
        <td>270 m<sup>2</sup></td>
      </tr>
      <tr>
        <td>2 piste cu container</td>
        <td>75 m<sup>2</sup></td>
        <td>315 m<sup>2</sup></td>
      </tr>  
      <tr>
        <td>3 piste</td>
        <td>90 m<sup>2</sup></td>
        <td>360 m<sup>2</sup></td>
      </tr>
      <tr>
        <td>3 piste cu container</td>
        <td>105 m<sup>2</sup></td>
        <td>405 m<sup>2</sup></td>
      </tr>  
      <tr>
        <td>4 piste</td>
        <td>120 m<sup>2</sup></td>
        <td>450 m<sup>2</sup></td>
      </tr>
      <tr>
        <td>4 piste cu container</td>
        <td>135 m<sup>2</sup></td>
        <td>495 m<sup>2</sup></td>
      </tr>  
      <tr>
        <td>5 piste</td>
        <td>150 m<sup>2</sup></td>
        <td>540 m<sup>2</sup></td>
      </tr>
      <tr>
        <td>5 piste cu container</td>
        <td>165 m<sup>2</sup></td>
        <td>585 m<sup>2</sup></td>
      </tr>  
      <tr>
        <td>6 piste</td>
        <td>180 m<sup>2</sup></td>
        <td>630 m<sup>2</sup></td>
      </tr>
      <tr>
        <td>6 piste cu container</td>
        <td>195 m<sup>2</sup></td>
        <td>675 m<sup>2</sup></td>
      </tr>  
    </table>

    <p class=\"inv_table_par\">
      <span>Important !</span> Curățarea interioară a mașinii se face cu aspiratorul. Aspiratorul ocupă o suprafață de 20 m<sup>2</sup>.
    </p>

  </div>
</div>
{% endblock %}

", "investitor.html.twig", "/home3/bkfcarbc/public_html/user/themes/bkf/templates/investitor.html.twig");
    }
}
