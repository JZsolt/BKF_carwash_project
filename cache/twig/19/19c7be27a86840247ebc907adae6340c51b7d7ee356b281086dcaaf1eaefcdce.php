<?php

/* default.html.twig */
class __TwigTemplate_5efb1967b6f1064b1a8ce605c1c0af35fc897c4da96813faa4cfd6234e316455 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
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
        $context["skill_sets"] = array(0 => array("title" => " rentabilitate mare ", "text" => " ", "icon" => "./user/themes/bkf/images/Icons/home_page/1_Rentabilitate.png"), 1 => array("title" => " competitivitate ", "text" => " ", "icon" => "./user/themes/bkf/images/Icons/home_page/2_competitivitate.png"), 2 => array("title" => " inovație permanenta ", "text" => " ", "icon" => "./user/themes/bkf/images/Icons/home_page/3_Inovatie_permanenta.png"), 3 => array("title" => " design personalizat ", "text" => " ", "icon" => "./user/themes/bkf/images/Icons/home_page/4_design.png"), 4 => array("title" => " echipament premium și robust ", "text" => " ", "icon" => "./user/themes/bkf/images/Icons/home_page/5_robust.png"));
        // line 29
        echo "
  ";
        // line 30
        $context["circle_skills"] = array(0 => array("percentage" => "98", "nr_text" => " 20+ ", "title_text" => " Ani de experiență. "), 1 => array("percentage" => "98", "nr_text" => " 1600+ ", "title_text" => "Spălătorii construite. "), 2 => array("percentage" => "98", "nr_text" => " 20+ ", "title_text" => " Export în diferite țări. "), 3 => array("percentage" => "98", "nr_text" => " 300k+ ", "title_text" => " Mașini spălate zilni. "));
        // line 53
        echo "
      <div class=\"page-content\">
        <section id=\"slick\">
          <div class=\"slider slick-slider homopage-slider\">
            <div class=\"slick-item first\">
              <img src=\"";
        // line 58
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/Carousel/Carousel_1.jpg");
        echo "\" alt=\"Spalatorie auto BKF\" title=\"Spalatorie auto BKF\">
            </div>
            <div class=\"slick-item second\">
              <a class=\"carusel_btn pozition_btn_1\" href=\"produse\" title=\"Go to Produse\">
                PRODUSE
              </a>
              <img class=\"Carousel_2_desktop\" src=\"";
        // line 64
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/Carousel/Carousel_2.jpg");
        echo "\" alt=\"Spalatorie auto BKF\" title=\"Spalatorie auto BKF\">
              
              <img class=\"Carousel_2_mobile\" src=\"";
        // line 66
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/Carousel/Carousel_2_mobile.jpg");
        echo "\" alt=\"Spalatorie auto BKF\" title=\"Spalatorie auto BKF\">
            </div>
            <div class=\"slick-item third\">
              <a class=\"carusel_btn pozition_btn_2\" href=\"technologii\" title=\"Go to Tehnologie\">
                TECHNOLOGI
              </a>
              <img src=\"";
        // line 72
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/Carousel/Carousel_3.jpg");
        echo "\" alt=\"Spalatorie auto BKF\" title=\"Spalatorie auto BKF\">
            </div>
          </div>
        </section>
      <div class=\"scroll_btn\">
        <img class=\"scroll_icon_btn\" src=\"";
        // line 77
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/scroll_icon_btn.svg");
        echo "\" alt=\"scroll BKF\">
        <img class=\"scroll_icon\" src=\"";
        // line 78
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/scroll_icon.svg");
        echo "\" alt=\"scroll BKF\">
        <div class=\"scroll_text\">SCROLL</div>
      </div>
      <div class=\"content_container\">
        <div class=\"about_container\">
          <h1 class=\"about_title\">
            Self service BKF Carwash - Spalatorie auto self service
          </h1>
          <p class=\"about_text\">
            BKF este in topul celor mai mari producători de spălătorii auto self service din lume datorită <span><a href=\"technologii\" title=\"Go to Tecnologie\">tehnologiei</a></span>.
            Realizările sunt create cu pasiune și astfel ne deosebim pe piață.
          </p>
        </div>

        <div class=\"skill_container opacity_null\">
          ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["circle_skills"]) ? $context["circle_skills"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["circle_skill"]) {
            // line 94
            echo "          <div class=\" circlechart circle_skill\" id=\"circle_skill_";
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\" data-percentage=";
            echo $this->getAttribute($context["circle_skill"], "percentage", array(), "array");
            echo " data-val=";
            echo $this->getAttribute($context["circle_skill"], "nr_text", array(), "array");
            echo ">
            <p>";
            // line 95
            echo $this->getAttribute($context["circle_skill"], "title_text", array(), "array");
            echo "</p>
          </div>
          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['circle_skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo " 
        </div>

        <div class=\"description_head_title\">
          <h2>Nevoile investitorilor / clienților noștri sunt satisfăcute prin:</h2>
        </div>
        <div class=\"description_container_main\">
        ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["skill_sets"]) ? $context["skill_sets"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["skill_set"]) {
            // line 105
            echo "          <div class=\"description_container\">
            <div class=\"description_icon\">
              <img src='";
            // line 107
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->absoluteUrlFilter($this->getAttribute($context["skill_set"], "icon", array(), "array"));
            echo "' alt=\"vector BKF spalatorie auto\" title=\"vector BKF spalatorie auto\">
            </div>
            <div class=\"description_text_container\">
              <div class=\"description_title\">
                ";
            // line 111
            echo $this->getAttribute($context["skill_set"], "title", array(), "array");
            echo "
              </div>
              <div class=\"description_text\">
                ";
            // line 114
            echo $this->getAttribute($context["skill_set"], "text", array(), "array");
            echo "
              </div>
            </div>
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill_set'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo " 
        </div>
        <div class=\"description_head_title\">
           <h2>Echipa noastră vă ajută să luați cea mai bună decizie raportată la condițiile Dvs. și să asigurăm sprijin. </h2>
           
            <a class=\"go_contact_btn\" href=\"contact\">
               Nu ezitați să ne contactați! <span>&#x263A;</span>
            </a>
        </div>
      </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 118,  174 => 114,  168 => 111,  161 => 107,  157 => 105,  153 => 104,  144 => 97,  127 => 95,  118 => 94,  101 => 93,  83 => 78,  79 => 77,  71 => 72,  62 => 66,  57 => 64,  48 => 58,  41 => 53,  39 => 30,  36 => 29,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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

  {% set skill_sets = {
    0: { title: \" rentabilitate mare \",
                text: \" \",
                icon: \"./user/themes/bkf/images/Icons/home_page/1_Rentabilitate.png\"
              },
    1: { title: \" competitivitate \",
                text: \" \",
                icon: \"./user/themes/bkf/images/Icons/home_page/2_competitivitate.png\"
              },
    2: { title: \" inovație permanenta \",
                text: \" \",
                icon: \"./user/themes/bkf/images/Icons/home_page/3_Inovatie_permanenta.png\"
                
              },
    3: { title: \" design personalizat \",
                text: \" \",
                icon: \"./user/themes/bkf/images/Icons/home_page/4_design.png\"
              },
    4: { title: \" echipament premium și robust \",
                text: \" \",
                icon: \"./user/themes/bkf/images/Icons/home_page/5_robust.png\"
              },
  }
%}

  {% set circle_skills = {
    0: { 
      percentage: \"98\",
      nr_text: \" 20+ \",
      title_text: \" Ani de experiență. \",
    },
    1: { 
      percentage: \"98\",
      nr_text: \" 1600+ \",
      title_text: \"Spălătorii construite. \",
    },
    2: { 
      percentage: \"98\",
      nr_text: \" 20+ \",
      title_text: \" Export în diferite țări. \",
    },
    3: { 
      percentage: \"98\",
      nr_text: \" 300k+ \",
      title_text: \" Mașini spălate zilni. \",
    },
  }
%}

      <div class=\"page-content\">
        <section id=\"slick\">
          <div class=\"slider slick-slider homopage-slider\">
            <div class=\"slick-item first\">
              <img src=\"{{ url('theme://images/Carousel/Carousel_1.jpg') }}\" alt=\"Spalatorie auto BKF\" title=\"Spalatorie auto BKF\">
            </div>
            <div class=\"slick-item second\">
              <a class=\"carusel_btn pozition_btn_1\" href=\"produse\" title=\"Go to Produse\">
                PRODUSE
              </a>
              <img class=\"Carousel_2_desktop\" src=\"{{ url('theme://images/Carousel/Carousel_2.jpg') }}\" alt=\"Spalatorie auto BKF\" title=\"Spalatorie auto BKF\">
              
              <img class=\"Carousel_2_mobile\" src=\"{{ url('theme://images/Carousel/Carousel_2_mobile.jpg') }}\" alt=\"Spalatorie auto BKF\" title=\"Spalatorie auto BKF\">
            </div>
            <div class=\"slick-item third\">
              <a class=\"carusel_btn pozition_btn_2\" href=\"technologii\" title=\"Go to Tehnologie\">
                TECHNOLOGI
              </a>
              <img src=\"{{ url('theme://images/Carousel/Carousel_3.jpg') }}\" alt=\"Spalatorie auto BKF\" title=\"Spalatorie auto BKF\">
            </div>
          </div>
        </section>
      <div class=\"scroll_btn\">
        <img class=\"scroll_icon_btn\" src=\"{{ url('theme://images/scroll_icon_btn.svg') }}\" alt=\"scroll BKF\">
        <img class=\"scroll_icon\" src=\"{{ url('theme://images/scroll_icon.svg') }}\" alt=\"scroll BKF\">
        <div class=\"scroll_text\">SCROLL</div>
      </div>
      <div class=\"content_container\">
        <div class=\"about_container\">
          <h1 class=\"about_title\">
            Self service BKF Carwash - Spalatorie auto self service
          </h1>
          <p class=\"about_text\">
            BKF este in topul celor mai mari producători de spălătorii auto self service din lume datorită <span><a href=\"technologii\" title=\"Go to Tecnologie\">tehnologiei</a></span>.
            Realizările sunt create cu pasiune și astfel ne deosebim pe piață.
          </p>
        </div>

        <div class=\"skill_container opacity_null\">
          {% for circle_skill in circle_skills %}
          <div class=\" circlechart circle_skill\" id=\"circle_skill_{{ loop.index }}\" data-percentage={{ circle_skill['percentage'] }} data-val={{ circle_skill['nr_text'] }}>
            <p>{{ circle_skill['title_text'] }}</p>
          </div>
          {% endfor %} 
        </div>

        <div class=\"description_head_title\">
          <h2>Nevoile investitorilor / clienților noștri sunt satisfăcute prin:</h2>
        </div>
        <div class=\"description_container_main\">
        {% for skill_set in skill_sets %}
          <div class=\"description_container\">
            <div class=\"description_icon\">
              <img src='{{ skill_set['icon']|absolute_url}}' alt=\"vector BKF spalatorie auto\" title=\"vector BKF spalatorie auto\">
            </div>
            <div class=\"description_text_container\">
              <div class=\"description_title\">
                {{ skill_set['title'] }}
              </div>
              <div class=\"description_text\">
                {{ skill_set['text'] }}
              </div>
            </div>
          </div>
        {% endfor %} 
        </div>
        <div class=\"description_head_title\">
           <h2>Echipa noastră vă ajută să luați cea mai bună decizie raportată la condițiile Dvs. și să asigurăm sprijin. </h2>
           
            <a class=\"go_contact_btn\" href=\"contact\">
               Nu ezitați să ne contactați! <span>&#x263A;</span>
            </a>
        </div>
      </div>
    </div>


{% endblock %}
", "default.html.twig", "/Applications/AMPPS/www/grav/user/themes/bkf/templates/default.html.twig");
    }
}
