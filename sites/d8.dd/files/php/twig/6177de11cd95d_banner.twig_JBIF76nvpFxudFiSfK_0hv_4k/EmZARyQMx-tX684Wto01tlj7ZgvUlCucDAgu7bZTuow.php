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

/* @molecules/banner/banner.twig */
class __TwigTemplate_90e7ee18207664cda07f971e77567ee0570c23ffc557766a1ae76f2e5e72a001 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'banner__img' => [$this, 'block_banner__img'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "block" => 5, "include" => 16];
        $filters = ["escape" => 15, "default" => 17];
        $functions = ["bem" => 3];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'include'],
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@molecules/banner/banner.twig"));

        // line 1
        $context["banner__base_class"] = "banner";
        // line 2
        echo "
<div ";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, $this->sandbox->ensureToStringAllowed(($context["banner__base_class"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["banner__modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["banner__blockname"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["banner__extra_classes"] ?? null))));
        echo ">
  ";
        // line 5
        echo "  ";
        $this->displayBlock('banner__img', $context, $blocks);
        // line 12
        echo "  ";
        // line 13
        echo "  <div ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "content"));
        echo ">
    ";
        // line 15
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
      ";
        // line 16
        $this->loadTemplate("@atoms/text/headings/_heading.twig", "@molecules/banner/banner.twig", 16)->display(twig_array_merge($context, ["heading_base_class" => ((        // line 17
(isset($context["banner__heading__base_class"]) || array_key_exists("banner__heading__base_class", $context))) ? (_twig_default_filter(($context["banner__heading__base_class"] ?? null), "heading")) : ("heading")), "heading_level" => 1, "heading" =>         // line 19
($context["banner__heading"] ?? null)]));
        // line 21
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
    ";
        // line 23
        echo "      ";
        $this->loadTemplate("@atoms/text/text/01-paragraph.twig", "@molecules/banner/banner.twig", 23)->display(twig_array_merge($context, ["paragraph_base_class" => ((        // line 24
(isset($context["banner__body__base_class"]) || array_key_exists("banner__body__base_class", $context))) ? (_twig_default_filter(($context["banner__body__base_class"] ?? null), "tagline")) : ("tagline")), "paragraph_content" =>         // line 25
($context["banner__tagline"] ?? null), "paragraph_modifiers" =>         // line 26
($context["banner__body__modifiers"] ?? null)]));
        // line 28
        echo "  </div>
</div>";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 5
    public function block_banner__img($context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner__img"));

        // line 6
        echo "    ";
        $this->loadTemplate("@atoms/images/image/responsive-image.twig", "@molecules/banner/banner.twig", 6)->display(twig_array_merge($context, ["image_blockname" =>         // line 7
($context["banner__base_class"] ?? null), "image_src" =>         // line 8
($context["banner__image__src"] ?? null), "image_alt" =>         // line 9
($context["banner__image__alt"] ?? null)]));
        // line 11
        echo "  ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@molecules/banner/banner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 11,  116 => 9,  115 => 8,  114 => 7,  112 => 6,  106 => 5,  98 => 28,  96 => 26,  95 => 25,  94 => 24,  92 => 23,  87 => 21,  85 => 19,  84 => 17,  83 => 16,  78 => 15,  73 => 13,  71 => 12,  68 => 5,  64 => 3,  61 => 2,  59 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set banner__base_class = 'banner' %}

<div {{ bem(banner__base_class, banner__modifiers, banner__blockname, banner__extra_classes) }}>
  {# Image #}
  {% block banner__img %}
    {% include \"@atoms/images/image/responsive-image.twig\" with {
      image_blockname: banner__base_class,
      image_src: banner__image__src,
      image_alt: banner__image__alt,
    } %}
  {% endblock %}
  {# Content #}
  <div {{ bem('content') }}>
    {# Heading #}
      {{ title_prefix }}
      {% include \"@atoms/text/headings/_heading.twig\" with {
        heading_base_class: banner__heading__base_class|default('heading'),
        heading_level: 1,
        heading: banner__heading,
      } %}
      {{ title_suffix }}
    {# tagline #}
      {% include \"@atoms/text/text/01-paragraph.twig\" with {
        paragraph_base_class: banner__body__base_class|default('tagline'),
        paragraph_content: banner__tagline,
        paragraph_modifiers: banner__body__modifiers,
      } %}
  </div>
</div>", "@molecules/banner/banner.twig", "C:\\Users\\dell\\Sites\\devdesktop\\d8\\themes\\custom\\netflixdev\\components\\02-molecules\\banner\\banner.twig");
    }
}
