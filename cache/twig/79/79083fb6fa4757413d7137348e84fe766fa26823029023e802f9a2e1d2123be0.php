<?php

/* technologii.html.twig */
class __TwigTemplate_49c7c4f48b38477239797e2a1c37040fb44b0a584e4d6a31119344f9f60213c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "technologii.html.twig", 1);
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
        echo "
";
        // line 5
        $context["technologies"] = array(0 => array("title" => "Prespălare", "text" => "Înmuiere și pre-curățare a murdăriei cu apă filtrată și dedurizată.
\t\t\t\t\t\t\t\tSe spală de sus în jos.", "icon" => "./user/themes/bkf/images/Icons/technologi/prog1_icon.png"), 1 => array("title" => "Spălare cu pressiune", "text" => "Spălare cu apă caldă și spumă active pentru a indepărta murdăria rezistentă, înlătură insectele (distanță recomandată 5-7 cm) de pe caroserie.", "icon" => "./user/themes/bkf/images/Icons/technologi/prog2_icon.png"), 2 => array("title" => "Clătire:", "text" => "Înlătură/îndepărteză resturile de soluţii(spuma, şamponul) cu apă curată sub pressiune și purifică mașina.", "icon" => "./user/themes/bkf/images/Icons/technologi/prog3_icon.png"), 3 => array("title" => "Ceară:", "text" => "Apă caldă dedurizată cu ceară pentru protejarea luciului şi lacului de pe caroserie. Utilizarea acestui program protejează exteriorul mașini de murdăriile rezistente în condiții meteorologice nefavorabile.", "icon" => "./user/themes/bkf/images/Icons/technologi/prog4_icon.png"), 4 => array("title" => "Clătire finală:", "text" => "Spălare cu apă demineralizată pentru uscare fără pete. Rezultatul este eficient pentru că vehiculul Dvs. va străluci fără pete.", "icon" => "./user/themes/bkf/images/Icons/technologi/prog5_icon.png"), 5 => array("title" => "Spălare cu perie:", "text" => "Spălare de bază cu spumă activă.", "icon" => "./user/themes/bkf/images/Icons/technologi/prog6_icon.png"), 6 => array("title" => "Șampon active:", "text" => "Spălare cu șampon/spumă active( tip friscă ) in diferite culori la presiune scăzută. Masina va fi acoperită cu un strat de spuma groasă. ", "icon" => "./user/themes/bkf/images/Icons/technologi/prog7_icon.png"));
        // line 37
        echo "
";
        // line 38
        $context["elipse_icons"] = array(0 => array("title" => "Plata cu Card bancar", "text" => "BKF face posibil sa se faca plata si cu card bancar(Visa sau Mastercard). Plata fără numerar este viitorul, ceace inseamna un plus pe piața. Se castiga clienti care prefera cardul bancar.", "icon" => "./user/themes/bkf/images/Icons/home_page/1_Pay_icon.png"), 1 => array("title" => "Card de loialitate", "text" => "Este o soluție excelentă pentru a castiga clienti, adica companii care au mașini de serviciu. Puteți avea clienți noi datorită cardurilor de loialitate! Cardul BKF se poate cumpara foarte repede si usor. Ulterior se poate reincarca si propiretarul poate monitoriza tranzactile.", "icon" => "./user/themes/bkf/images/Icons/home_page/2_Card_icon.png"), 2 => array("title" => "Administrarea spalatoriei prin Internet", "text" => "ÎProprietarul spalatoriei poate configura setarile si poate primi notificari prin internet. Este posibil multumita sistemului inteligent de gestionare a spălătoriei care ajuta sa vă economisiti timpul pretios, pentru ca de mai putine ori trebuie sa treceti pe la spalatorie.", "icon" => "./user/themes/bkf/images/Icons/home_page/3_cloud_icon.png"), 3 => array("title" => "Aplicatia mobil/tableta (Android, IOS)", "text" => "Prin aplicatie se poate vedea cifra de afaceri, tranzactile si notificarile in legatura cu spalatoria auto.", "icon" => "./user/themes/bkf/images/Icons/home_page/4_gear_icon.png"));
        // line 58
        echo "
<div class=\"page-content\">
\t<section class=\"technologies\">

\t\t<div class=\"section_banner\">
\t\t<img src=\"";
        // line 63
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/Carousel/Carousel_1.jpg");
        echo "\" alt=\"Carwash_dark_BKF\">
\t\t<div class=\"section_subtitle\">
\t\t\t<h1>Unique washing technology</h1>
\t\t\t<h2>
\t\t\t\tÎn permanență lucrăm la dezvoltarea dispozitivelor noastre. În fiecare an introducem modele noi cu îmbunătățiri. Suntem precursorii multor soluții la capitolul spălătorii auto.
\t\t\t</h2>
\t\t</div>
\t</div>

\t<div class=\"circle_container\" data-aos=\"fade-up\">
    ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["elipse_icons"]) ? $context["elipse_icons"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["elipse_icon"]) {
            // line 74
            echo "    <div class=\"circle\">
      <div class=\"circle_icon\">
        <img src=\"";
            // line 76
            echo $this->getAttribute($context["elipse_icon"], "icon", array(), "array");
            echo "\" alt=\"vector_icon\">
        <p>";
            // line 77
            echo $this->getAttribute($context["elipse_icon"], "title", array(), "array");
            echo "</p>
      </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elipse_icon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "  </div>

\t<div class=\"section_content\">
\t\t";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["technologies"]) ? $context["technologies"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["technology"]) {
            // line 85
            echo "\t\t<div class=\"technologies_box\">
\t\t\t<div class=\"technology_icon\">
\t\t\t\t<img src=\"";
            // line 87
            echo $this->getAttribute($context["technology"], "icon", array(), "array");
            echo "\" alt=\"vector_icon\" />
\t\t\t</div>
\t\t\t<div class=\"technology_text\">
\t\t\t\t<h3>";
            // line 90
            echo $this->getAttribute($context["technology"], "title", array(), "array");
            echo "</h3>
\t\t\t\t<div>";
            // line 91
            echo $this->getAttribute($context["technology"], "text", array(), "array");
            echo "</div>
\t\t\t</div>
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['technology'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "
\t</section>
</div>

";
    }

    public function getTemplateName()
    {
        return "technologii.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 95,  107 => 91,  103 => 90,  97 => 87,  93 => 85,  89 => 84,  84 => 81,  74 => 77,  70 => 76,  66 => 74,  62 => 73,  49 => 63,  42 => 58,  40 => 38,  37 => 37,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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

{% set technologies = {
    0: {title: \"Prespălare\",
\t\t\t\ttext: \"Înmuiere și pre-curățare a murdăriei cu apă filtrată și dedurizată.
\t\t\t\t\t\t\t\tSe spală de sus în jos.\",
\t\t\t\ticon: \"./user/themes/bkf/images/Icons/technologi/prog1_icon.png\"
\t\t\t},
    1: {title: \"Spălare cu pressiune\",
\t\t\t\ttext: \"Spălare cu apă caldă și spumă active pentru a indepărta murdăria rezistentă, înlătură insectele (distanță recomandată 5-7 cm) de pe caroserie.\",
\t\t\t\ticon: \"./user/themes/bkf/images/Icons/technologi/prog2_icon.png\"
\t\t\t},
\t\t2: {title: \"Clătire:\",
\t\t\t\ttext: \"Înlătură/îndepărteză resturile de soluţii(spuma, şamponul) cu apă curată sub pressiune și purifică mașina.\",
\t\t\t\ticon: \"./user/themes/bkf/images/Icons/technologi/prog3_icon.png\"
\t\t\t},
\t\t3: {title: \"Ceară:\",
\t\t\t\ttext: \"Apă caldă dedurizată cu ceară pentru protejarea luciului şi lacului de pe caroserie. Utilizarea acestui program protejează exteriorul mașini de murdăriile rezistente în condiții meteorologice nefavorabile.\",
\t\t\t\ticon: \"./user/themes/bkf/images/Icons/technologi/prog4_icon.png\"
\t\t\t},
\t\t4: {title: \"Clătire finală:\",
\t\t\t\ttext: \"Spălare cu apă demineralizată pentru uscare fără pete. Rezultatul este eficient pentru că vehiculul Dvs. va străluci fără pete.\",
\t\t\t\ticon: \"./user/themes/bkf/images/Icons/technologi/prog5_icon.png\"
\t\t\t},
\t\t5: {title: \"Spălare cu perie:\",
\t\t\t\ttext: \"Spălare de bază cu spumă activă.\",
\t\t\t\ticon: \"./user/themes/bkf/images/Icons/technologi/prog6_icon.png\"
\t\t\t},
\t\t6: {title: \"Șampon active:\",
\t\t\t\ttext: \"Spălare cu șampon/spumă active( tip friscă ) in diferite culori la presiune scăzută. Masina va fi acoperită cu un strat de spuma groasă. \",
\t\t\t\ticon: \"./user/themes/bkf/images/Icons/technologi/prog7_icon.png\"
\t\t\t},
\t}
%}

{%\tset elipse_icons = {
    0: {title: \"Plata cu Card bancar\",
\t\t\t\ttext: \"BKF face posibil sa se faca plata si cu card bancar(Visa sau Mastercard). Plata fără numerar este viitorul, ceace inseamna un plus pe piața. Se castiga clienti care prefera cardul bancar.\",
\t\t\t\ticon: \"./user/themes/bkf/images/Icons/home_page/1_Pay_icon.png\"
\t\t\t},
    1: {title: \"Card de loialitate\",
\t\t\t\ttext: \"Este o soluție excelentă pentru a castiga clienti, adica companii care au mașini de serviciu. Puteți avea clienți noi datorită cardurilor de loialitate! Cardul BKF se poate cumpara foarte repede si usor. Ulterior se poate reincarca si propiretarul poate monitoriza tranzactile.\",
\t\t\t\ticon: \"./user/themes/bkf/images/Icons/home_page/2_Card_icon.png\"
\t\t\t},
\t\t2: {title: \"Administrarea spalatoriei prin Internet\",
\t\t\t\ttext: \"ÎProprietarul spalatoriei poate configura setarile si poate primi notificari prin internet. Este posibil multumita sistemului inteligent de gestionare a spălătoriei care ajuta sa vă economisiti timpul pretios, pentru ca de mai putine ori trebuie sa treceti pe la spalatorie.\",
\t\t\t\ticon: \"./user/themes/bkf/images/Icons/home_page/3_cloud_icon.png\"
\t\t\t},
\t\t3: {title: \"Aplicatia mobil/tableta (Android, IOS)\",
\t\t\t\ttext: \"Prin aplicatie se poate vedea cifra de afaceri, tranzactile si notificarile in legatura cu spalatoria auto.\",
\t\t\t\ticon: \"./user/themes/bkf/images/Icons/home_page/4_gear_icon.png\"
\t\t\t},
\t\t}
  
%}

<div class=\"page-content\">
\t<section class=\"technologies\">

\t\t<div class=\"section_banner\">
\t\t<img src=\"{{ url('theme://images/Carousel/Carousel_1.jpg') }}\" alt=\"Carwash_dark_BKF\">
\t\t<div class=\"section_subtitle\">
\t\t\t<h1>Unique washing technology</h1>
\t\t\t<h2>
\t\t\t\tÎn permanență lucrăm la dezvoltarea dispozitivelor noastre. În fiecare an introducem modele noi cu îmbunătățiri. Suntem precursorii multor soluții la capitolul spălătorii auto.
\t\t\t</h2>
\t\t</div>
\t</div>

\t<div class=\"circle_container\" data-aos=\"fade-up\">
    {% for elipse_icon in elipse_icons %}
    <div class=\"circle\">
      <div class=\"circle_icon\">
        <img src=\"{{ elipse_icon['icon'] }}\" alt=\"vector_icon\">
        <p>{{elipse_icon['title']}}</p>
      </div>
    </div>
    {% endfor %}
  </div>

\t<div class=\"section_content\">
\t\t{% for technology in technologies %}
\t\t<div class=\"technologies_box\">
\t\t\t<div class=\"technology_icon\">
\t\t\t\t<img src=\"{{ technology['icon'] }}\" alt=\"vector_icon\" />
\t\t\t</div>
\t\t\t<div class=\"technology_text\">
\t\t\t\t<h3>{{ technology['title'] }}</h3>
\t\t\t\t<div>{{ technology['text'] }}</div>
\t\t\t</div>
\t\t</div>
\t\t{% endfor %}

\t</section>
</div>

{% endblock %}", "technologii.html.twig", "/Applications/AMPPS/www/grav/user/themes/bkf/templates/technologii.html.twig");
    }
}
