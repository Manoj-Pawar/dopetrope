<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @molecules/card/card.twig */
class __TwigTemplate_b8d91f57236a7f3bb8737e1175d1a104d118281f3b6482e8412bc96555c78678 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'portfolio_card__img' => [$this, 'block_portfolio_card__img'],
            'blog_card__img' => [$this, 'block_blog_card__img'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 45, "set" => 46, "block" => 51, "include" => 64];
        $filters = ["escape" => 63, "default" => 65];
        $functions = ["bem" => 49];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'block', 'include'],
                ['escape', 'default'],
                ['bem']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@molecules/card/card.twig"));

        // line 44
        echo "
";
        // line 45
        if (($context["portfolio"] ?? null)) {
            // line 46
            echo "  ";
            $context["portfolio_card__base_class"] = "portfolio_card";
            // line 47
            echo "
  <div class=\"portfolio_cards\">
      <div ";
            // line 49
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, $this->sandbox->ensureToStringAllowed(($context["portfolio_card__base_class"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["portfolio_card__modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["portfolio_card__blockname"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["portfolio_card__extra_classes"] ?? null))));
            echo ">
        ";
            // line 51
            echo "        ";
            $this->displayBlock('portfolio_card__img', $context, $blocks);
            // line 59
            echo "
        ";
            // line 61
            echo "        <div ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "content", $this->sandbox->ensureToStringAllowed(($context["portfolio_card__content__modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["portfolio_card__base_class"] ?? null))));
            echo ">
          ";
            // line 62
            if (($context["portfolio_card__heading"] ?? null)) {
                // line 63
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
                echo "
            ";
                // line 64
                $this->loadTemplate("@atoms/text/headings/_heading.twig", "@molecules/card/card.twig", 64)->display(twig_array_merge($context, ["heading_base_class" => ((                // line 65
(isset($context["portfolio_card__heading__base_class"]) || array_key_exists("portfolio_card__heading__base_class", $context))) ? (_twig_default_filter(($context["portfolio_card__heading__base_class"] ?? null), "heading")) : ("heading")), "heading_level" => 3, "heading" =>                 // line 67
($context["portfolio_card__heading"] ?? null), "heading_url" => ((                // line 68
(isset($context["portfolio_card__heading__link"]) || array_key_exists("portfolio_card__heading__link", $context))) ? (_twig_default_filter(($context["portfolio_card__heading__link"] ?? null), ($context["portfolio_card__link__url"] ?? null))) : (($context["portfolio_card__link__url"] ?? null))), "heading_link_base_class" => ((                // line 69
(isset($context["portfolio_card__heading__link_base_class"]) || array_key_exists("portfolio_card__heading__link_base_class", $context))) ? (_twig_default_filter(($context["portfolio_card__heading__link_base_class"] ?? null), "heading-link")) : ("heading-link")), "heading_link_blockname" =>                 // line 70
($context["portfolio_card__base_class"] ?? null)]));
                // line 72
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
                echo "
          ";
            }
            // line 74
            echo "
          ";
            // line 76
            echo "          ";
            if (($context["portfolio_card__body"] ?? null)) {
                // line 77
                echo "            ";
                $this->loadTemplate("@atoms/text/text/01-paragraph.twig", "@molecules/card/card.twig", 77)->display(twig_array_merge($context, ["paragraph_content" =>                 // line 78
($context["portfolio_card__body"] ?? null)]));
                // line 80
                echo "          ";
            }
            // line 81
            echo "
          ";
            // line 83
            echo "          ";
            if (($context["portfolio_card__button__url"] ?? null)) {
                // line 84
                echo "            ";
                $this->loadTemplate("@atoms/buttons/button.twig", "@molecules/card/card.twig", 84)->display(twig_array_merge($context, ["button_modifiers" =>                 // line 85
($context["portfolio_card__button__modifiers"] ?? null), "button_content" =>                 // line 86
($context["portfolio_card__button__content"] ?? null), "button_url" =>                 // line 87
($context["portfolio_card__button__url"] ?? null)]));
                // line 89
                echo "          ";
            }
            // line 90
            echo "        </div>
      </div>
  </div>
";
        }
        // line 94
        echo "
";
        // line 95
        if (($context["blog"] ?? null)) {
            // line 96
            echo "  ";
            $context["blog_card__base_class"] = "blog_card";
            // line 97
            echo "  <div class=\"blog_cards\">
    <div ";
            // line 98
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, $this->sandbox->ensureToStringAllowed(($context["blog_card__base_class"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["blog_card__modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["blog_card__blockname"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["blog_card__extra_classes"] ?? null))));
            echo ">
      ";
            // line 100
            echo "      ";
            $this->displayBlock('blog_card__img', $context, $blocks);
            // line 108
            echo "      ";
            // line 109
            echo "      <div ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "content", $this->sandbox->ensureToStringAllowed(($context["blog_card__content__modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["blog_card__base_class"] ?? null))));
            echo ">
        ";
            // line 110
            if (($context["blog_card__heading"] ?? null)) {
                // line 111
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
                echo "
          ";
                // line 112
                $this->loadTemplate("@atoms/text/headings/_heading.twig", "@molecules/card/card.twig", 112)->display(twig_array_merge($context, ["heading_base_class" => ((                // line 113
(isset($context["blog_card__heading__base_class"]) || array_key_exists("blog_card__heading__base_class", $context))) ? (_twig_default_filter(($context["blog_card__heading__base_class"] ?? null), "heading")) : ("heading")), "heading_level" => 3, "heading" =>                 // line 115
($context["blog_card__heading"] ?? null), "heading_url" => ((                // line 116
(isset($context["blog_card__heading__link"]) || array_key_exists("blog_card__heading__link", $context))) ? (_twig_default_filter(($context["blog_card__heading__link"] ?? null), ($context["blog_card__link__url"] ?? null))) : (($context["blog_card__link__url"] ?? null))), "heading_link_base_class" => ((                // line 117
(isset($context["blog_card__heading__link_base_class"]) || array_key_exists("blog_card__heading__link_base_class", $context))) ? (_twig_default_filter(($context["blog_card__heading__link_base_class"] ?? null), "heading-link")) : ("heading-link")), "heading_link_blockname" =>                 // line 118
($context["blog_card__base_class"] ?? null)]));
                // line 120
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
                echo "
        ";
            }
            // line 122
            echo "        ";
            // line 123
            echo "        ";
            if (($context["blog_card__subheading"] ?? null)) {
                // line 124
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
                echo "
          ";
                // line 125
                $this->loadTemplate("@atoms/text/headings/_heading.twig", "@molecules/card/card.twig", 125)->display(twig_array_merge($context, ["heading_base_class" => ((                // line 126
(isset($context["blog_card__subheading__base_class"]) || array_key_exists("blog_card__subheading__base_class", $context))) ? (_twig_default_filter(($context["blog_card__subheading__base_class"] ?? null), "subheading")) : ("subheading")), "heading_level" => 5, "heading" =>                 // line 128
($context["blog_card__subheading"] ?? null), "heading_url" => ((                // line 129
(isset($context["blog_card__heading__link"]) || array_key_exists("blog_card__heading__link", $context))) ? (_twig_default_filter(($context["blog_card__heading__link"] ?? null), ($context["blog_card__link__url"] ?? null))) : (($context["blog_card__link__url"] ?? null)))]));
                // line 131
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
                echo "
        ";
            }
            // line 133
            echo "        ";
            // line 134
            echo "        ";
            if (($context["blog_card__body"] ?? null)) {
                // line 135
                echo "          ";
                $this->loadTemplate("@atoms/text/text/01-paragraph.twig", "@molecules/card/card.twig", 135)->display(twig_array_merge($context, ["paragraph_content" =>                 // line 136
($context["blog_card__body"] ?? null)]));
                // line 138
                echo "        ";
            }
            // line 139
            echo "        ";
            // line 140
            echo "        <div class=\"two_button_wraper\">
          ";
            // line 141
            $this->loadTemplate("@atoms/buttons/button.twig", "@molecules/card/card.twig", 141)->display(twig_array_merge($context, ["fonticon_base_class" =>             // line 142
($context["blog_card_button1_fonticon_base_class"] ?? null), "button_modifiers" =>             // line 143
($context["blog_card__button1__modifiers"] ?? null), "button_content" =>             // line 144
($context["blog_card__button1__content"] ?? null), "button_url" =>             // line 145
($context["blog_card__button1_url"] ?? null)]));
            // line 147
            echo "          ";
            $this->loadTemplate("@atoms/buttons/button.twig", "@molecules/card/card.twig", 147)->display(twig_array_merge($context, ["fonticon_base_class" =>             // line 148
($context["blog_card_button2_fonticon_base_class"] ?? null), "button_modifiers" =>             // line 149
($context["blog_card__button2__modifiers"] ?? null), "button_content" =>             // line 150
($context["blog_card__button2__content"] ?? null), "button_url" =>             // line 151
($context["blog_card__button2_url"] ?? null)]));
            // line 153
            echo "        </div>
      </div>
    </div>
  </div>
";
        }
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 51
    public function block_portfolio_card__img($context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "portfolio_card__img"));

        // line 52
        echo "          ";
        if (($context["portfolio_card__image__src"] ?? null)) {
            // line 53
            echo "            ";
            $this->loadTemplate("@atoms/images/image/responsive-image.twig", "@molecules/card/card.twig", 53)->display(twig_array_merge($context, ["image_src" =>             // line 54
($context["portfolio_card__image__src"] ?? null), "image_alt" =>             // line 55
($context["portfolio_card__image__alt"] ?? null)]));
            // line 57
            echo "          ";
        }
        // line 58
        echo "        ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 100
    public function block_blog_card__img($context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "blog_card__img"));

        // line 101
        echo "        ";
        if (($context["blog_card__image__src"] ?? null)) {
            // line 102
            echo "          ";
            $this->loadTemplate("@atoms/images/image/responsive-image.twig", "@molecules/card/card.twig", 102)->display(twig_array_merge($context, ["image_src" =>             // line 103
($context["blog_card__image__src"] ?? null), "image_alt" =>             // line 104
($context["blog_card__image__alt"] ?? null)]));
            // line 106
            echo "        ";
        }
        // line 107
        echo "      ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@molecules/card/card.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 107,  287 => 106,  285 => 104,  284 => 103,  282 => 102,  279 => 101,  273 => 100,  266 => 58,  263 => 57,  261 => 55,  260 => 54,  258 => 53,  255 => 52,  249 => 51,  237 => 153,  235 => 151,  234 => 150,  233 => 149,  232 => 148,  230 => 147,  228 => 145,  227 => 144,  226 => 143,  225 => 142,  224 => 141,  221 => 140,  219 => 139,  216 => 138,  214 => 136,  212 => 135,  209 => 134,  207 => 133,  201 => 131,  199 => 129,  198 => 128,  197 => 126,  196 => 125,  191 => 124,  188 => 123,  186 => 122,  180 => 120,  178 => 118,  177 => 117,  176 => 116,  175 => 115,  174 => 113,  173 => 112,  168 => 111,  166 => 110,  161 => 109,  159 => 108,  156 => 100,  152 => 98,  149 => 97,  146 => 96,  144 => 95,  141 => 94,  135 => 90,  132 => 89,  130 => 87,  129 => 86,  128 => 85,  126 => 84,  123 => 83,  120 => 81,  117 => 80,  115 => 78,  113 => 77,  110 => 76,  107 => 74,  101 => 72,  99 => 70,  98 => 69,  97 => 68,  96 => 67,  95 => 65,  94 => 64,  89 => 63,  87 => 62,  82 => 61,  79 => 59,  76 => 51,  72 => 49,  68 => 47,  65 => 46,  63 => 45,  60 => 44,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
 # Available variables:
 # - card__base_class - base classname of the wrapper.
 # - card__modifiers - array of modifiers to add to the base classname of the wrapper.
 # - card__blockname - blockname prepended to the base classname of the wrapper(s) and each component.
 #
 # - card__image__src - the actual image file location.
 # - card__image__alt - (optional) the alt text for screen readers and when the image cannot load.
 # - card__image__output_image_tag - whether to print the picture element or not.
 #
 # - card__content__base_class - base classname of the copy wrapper - defaults to 'heading'.
 # - card__content__modifiers - array of modifiers to add to the base classname of the copy wrapper.
 # - card__content__blockname - blockname prepended to the base classname of the copy wrapper.
 #
 # - card__heading - the content of the title component.
 # - card__heading__link - (optional) the url the title should link to. Defaults to card__link__url.
 # - card__heading__base_class - base classname of the title component. Defaults to \"title\".
 # - card__heading__blockname - blockname to add to the base classname of the title - defaults to card__base_class.
 # - card__heading__modifiers - array of modifiers to add to the base classname of the title.
 # - card__heading__link_base_class - base class to add to the title link - defaults to 'title-link'.
 #
 # - card__subheading - the content of the subtitle component.
 # - card__subheading__link - (optional) the url the subtitle should link to.
 # - card__subheading__base_class - base classname of the subtitle component. Defaults to \"subtitle\".
 # - card__subheading__modifiers - array of modifiers to add to the base classname of the subtitle.
 #
 # - card__body - the content of the body component.
 # - card__body__base_class - base classname of the body component. Defaults to \"body\".
 # - card__body__modifiers - array of modifiers to add to the base classname of the body.
 #
 # - card__link__text - the content of the link component.
 # - card__link__url - the url the link should link to.
 # - card__link__base_class - base classname of the link component. Defaults to \"link\".
 # - card__link__blockname - override link blockname. Defaults to card__base_class.
 # - card__link__attributes - array of attribute,value pairs for the link attribute.
 # - card__link__modifiers - array of modifiers to add to the base classname of the link.
 #
 # - card__button__content - the content of the button component.
 # - card__button__url - the url the button should link to.
 # - card__button__base_class - base classname of the button component. Defaults to \"button\".
 # - card__button__attributes - array of attribute,value pairs for the button attribute.
 # - card__button__modifiers - array of modifiers to add to the base classname of the button.
 #}

{% if portfolio %}
  {% set portfolio_card__base_class = 'portfolio_card' %}

  <div class=\"portfolio_cards\">
      <div {{ bem(portfolio_card__base_class, portfolio_card__modifiers, portfolio_card__blockname, portfolio_card__extra_classes) }}>
        {# Image #}
        {% block portfolio_card__img %}
          {% if portfolio_card__image__src %}
            {% include \"@atoms/images/image/responsive-image.twig\" with {
              image_src: portfolio_card__image__src,
              image_alt: portfolio_card__image__alt,
            } %}
          {% endif %}
        {% endblock %}

        {# Content #}
        <div {{ bem('content', portfolio_card__content__modifiers, portfolio_card__base_class) }}>
          {% if portfolio_card__heading %}
            {{ title_prefix }}
            {% include \"@atoms/text/headings/_heading.twig\" with {
              heading_base_class: portfolio_card__heading__base_class|default('heading'),
              heading_level: 3,
              heading: portfolio_card__heading,
              heading_url: portfolio_card__heading__link|default(portfolio_card__link__url),
              heading_link_base_class: portfolio_card__heading__link_base_class|default('heading-link'),
              heading_link_blockname: portfolio_card__base_class,
            } %}
            {{ title_suffix }}
          {% endif %}

          {# Body #}
          {% if portfolio_card__body %}
            {% include \"@atoms/text/text/01-paragraph.twig\" with {
              paragraph_content: portfolio_card__body,
            } %}
          {% endif %}

          {# Button1 #}
          {% if portfolio_card__button__url %}
            {% include \"@atoms/buttons/button.twig\" with {
              button_modifiers: portfolio_card__button__modifiers,
              button_content: portfolio_card__button__content,
              button_url: portfolio_card__button__url,
            } %}
          {% endif %}
        </div>
      </div>
  </div>
{% endif %}

{% if blog %}
  {% set blog_card__base_class = 'blog_card' %}
  <div class=\"blog_cards\">
    <div {{ bem(blog_card__base_class, blog_card__modifiers, blog_card__blockname, blog_card__extra_classes) }}>
      {# Image #}
      {% block blog_card__img %}
        {% if blog_card__image__src %}
          {% include \"@atoms/images/image/responsive-image.twig\" with {
            image_src: blog_card__image__src,
            image_alt: blog_card__image__alt,
          } %}
        {% endif %}
      {% endblock %}
      {# Content #}
      <div {{ bem('content', blog_card__content__modifiers, blog_card__base_class) }}>
        {% if blog_card__heading %}
          {{ title_prefix }}
          {% include \"@atoms/text/headings/_heading.twig\" with {
            heading_base_class: blog_card__heading__base_class|default('heading'),
            heading_level: 3,
            heading: blog_card__heading,
            heading_url: blog_card__heading__link|default(blog_card__link__url),
            heading_link_base_class: blog_card__heading__link_base_class|default('heading-link'),
            heading_link_blockname: blog_card__base_class,
          } %}
          {{ title_suffix }}
        {% endif %}
        {# subheading #}
        {% if blog_card__subheading %}
          {{ title_prefix }}
          {% include \"@atoms/text/headings/_heading.twig\" with {
            heading_base_class: blog_card__subheading__base_class|default('subheading'),
            heading_level: 5,
            heading: blog_card__subheading,
            heading_url: blog_card__heading__link|default(blog_card__link__url),
          } %}
          {{ title_suffix }}
        {% endif %}
        {# Body #}
        {% if blog_card__body %}
          {% include \"@atoms/text/text/01-paragraph.twig\" with {
            paragraph_content: blog_card__body,
          } %}
        {% endif %}
        {# Button1 #}
        <div class=\"two_button_wraper\">
          {% include \"@atoms/buttons/button.twig\" with {
            fonticon_base_class: blog_card_button1_fonticon_base_class,
            button_modifiers: blog_card__button1__modifiers,
            button_content: blog_card__button1__content,
            button_url: blog_card__button1_url,
          } %}
          {% include \"@atoms/buttons/button.twig\" with {
            fonticon_base_class: blog_card_button2_fonticon_base_class,
            button_modifiers: blog_card__button2__modifiers,
            button_content: blog_card__button2__content,
            button_url: blog_card__button2_url,
          } %}
        </div>
      </div>
    </div>
  </div>
{% endif %}", "@molecules/card/card.twig", "C:\\Users\\dell\\Sites\\devdesktop\\d8\\themes\\custom\\netflixdev\\components\\02-molecules\\card\\card.twig");
    }
}
