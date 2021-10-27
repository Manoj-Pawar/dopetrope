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

/* @atoms/images/image/responsive-image.twig */
class __TwigTemplate_140199a0e9ef94a568760a0caebb1196ecf1138d25c90efd9ebeef1fa4e910d8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 8, "if" => 10, "include" => 11];
        $filters = ["default" => 8];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
                ['default'],
                []
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@atoms/images/image/responsive-image.twig"));

        // line 7
        echo "
";
        // line 8
        $context["responsive_image_base_class"] = (((isset($context["responsive_image_base_class"]) || array_key_exists("responsive_image_base_class", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["responsive_image_base_class"] ?? null)), "image")) : ("image"));
        // line 9
        echo "
";
        // line 10
        if (($context["output_image_tag"] ?? null)) {
            // line 11
            echo "  ";
            $this->loadTemplate("@atoms/images/image/_image.twig", "@atoms/images/image/responsive-image.twig", 11)->display(twig_array_merge($context, ["image_base_class" =>             // line 12
($context["responsive_image_base_class"] ?? null), "image_modifiers" =>             // line 13
($context["responsive_image_modifiers"] ?? null), "image_blockname" =>             // line 14
($context["responsive_image_blockname"] ?? null), "image_srcset" => ((            // line 15
(isset($context["image_srcset"]) || array_key_exists("image_srcset", $context))) ? (_twig_default_filter(($context["image_srcset"] ?? null), $this->getAttribute($this->getAttribute(($context["img_element"] ?? null), "#attributes", [], "array"), "srcset", []))) : ($this->getAttribute($this->getAttribute(($context["img_element"] ?? null), "#attributes", [], "array"), "srcset", []))), "image_sizes" => ((            // line 16
(isset($context["image_sizes"]) || array_key_exists("image_sizes", $context))) ? (_twig_default_filter(($context["image_sizes"] ?? null), $this->getAttribute($this->getAttribute(($context["img_element"] ?? null), "#attributes", [], "array"), "sizes", []))) : ($this->getAttribute($this->getAttribute(($context["img_element"] ?? null), "#attributes", [], "array"), "sizes", []))), "image_src" => ((            // line 17
(isset($context["image_src"]) || array_key_exists("image_src", $context))) ? (_twig_default_filter(($context["image_src"] ?? null), $this->getAttribute(($context["img_element"] ?? null), "#uri", [], "array"))) : ($this->getAttribute(($context["img_element"] ?? null), "#uri", [], "array"))), "image_alt" => ((            // line 18
(isset($context["image_alt"]) || array_key_exists("image_alt", $context))) ? (_twig_default_filter(($context["image_alt"] ?? null), $this->getAttribute(($context["img_element"] ?? null), "#alt", [], "array"))) : ($this->getAttribute(($context["img_element"] ?? null), "#alt", [], "array"))), "image_title" => ((            // line 19
(isset($context["image_title"]) || array_key_exists("image_title", $context))) ? (_twig_default_filter(($context["image_title"] ?? null), $this->getAttribute(($context["img_element"] ?? null), "#title", [], "array"))) : ($this->getAttribute(($context["img_element"] ?? null), "#title", [], "array")))]));
        } else {
            // line 22
            echo "  ";
            $this->loadTemplate("@atoms/images/image/_picture.twig", "@atoms/images/image/responsive-image.twig", 22)->display(twig_array_merge($context, ["picture_base_class" =>             // line 23
($context["responsive_image_base_class"] ?? null), "picture_modifiers" =>             // line 24
($context["responsive_image_modifiers"] ?? null), "picture_blockname" =>             // line 25
($context["responsive_image_blockname"] ?? null), "image_srcset" => ((            // line 26
(isset($context["image_srcset"]) || array_key_exists("image_srcset", $context))) ? (_twig_default_filter(($context["image_srcset"] ?? null), $this->getAttribute($this->getAttribute(($context["img_element"] ?? null), "#attributes", [], "array"), "srcset", []))) : ($this->getAttribute($this->getAttribute(($context["img_element"] ?? null), "#attributes", [], "array"), "srcset", []))), "image_sizes" => ((            // line 27
(isset($context["image_sizes"]) || array_key_exists("image_sizes", $context))) ? (_twig_default_filter(($context["image_sizes"] ?? null), $this->getAttribute($this->getAttribute(($context["img_element"] ?? null), "#attributes", [], "array"), "sizes", []))) : ($this->getAttribute($this->getAttribute(($context["img_element"] ?? null), "#attributes", [], "array"), "sizes", []))), "image_src" => ((            // line 28
(isset($context["image_src"]) || array_key_exists("image_src", $context))) ? (_twig_default_filter(($context["image_src"] ?? null), $this->getAttribute(($context["img_element"] ?? null), "#uri", [], "array"))) : ($this->getAttribute(($context["img_element"] ?? null), "#uri", [], "array"))), "image_alt" => ((            // line 29
(isset($context["image_alt"]) || array_key_exists("image_alt", $context))) ? (_twig_default_filter(($context["image_alt"] ?? null), $this->getAttribute(($context["img_element"] ?? null), "#alt", [], "array"))) : ($this->getAttribute(($context["img_element"] ?? null), "#alt", [], "array"))), "image_title" => ((            // line 30
(isset($context["image_title"]) || array_key_exists("image_title", $context))) ? (_twig_default_filter(($context["image_title"] ?? null), $this->getAttribute(($context["img_element"] ?? null), "#title", [], "array"))) : ($this->getAttribute(($context["img_element"] ?? null), "#title", [], "array")))]));
        }
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@atoms/images/image/responsive-image.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 30,  88 => 29,  87 => 28,  86 => 27,  85 => 26,  84 => 25,  83 => 24,  82 => 23,  80 => 22,  77 => 19,  76 => 18,  75 => 17,  74 => 16,  73 => 15,  72 => 14,  71 => 13,  70 => 12,  68 => 11,  66 => 10,  63 => 9,  61 => 8,  58 => 7,);
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
 # - sources: The attributes of the <source> tags for this <picture> tag.
 # - img_element: The controlling image, with the fallback image in srcset.
 # - output_image_tag: Whether or not to output an <img> tag instead of a <picture> tag.
 #}

{% set responsive_image_base_class = responsive_image_base_class|default('image') %}

{% if output_image_tag %}
  {% include \"@atoms/images/image/_image.twig\" with {
    image_base_class: responsive_image_base_class,
    image_modifiers: responsive_image_modifiers,
    image_blockname: responsive_image_blockname,
    image_srcset: image_srcset|default(img_element['#attributes'].srcset),
    image_sizes: image_sizes|default(img_element['#attributes'].sizes),
    image_src: image_src|default(img_element['#uri']),
    image_alt: image_alt|default(img_element['#alt']),
    image_title: image_title|default(img_element['#title']),
  } %}
{% else %}
  {% include \"@atoms/images/image/_picture.twig\" with {
    picture_base_class: responsive_image_base_class,
    picture_modifiers: responsive_image_modifiers,
    picture_blockname: responsive_image_blockname,
    image_srcset: image_srcset|default(img_element['#attributes'].srcset),
    image_sizes: image_sizes|default(img_element['#attributes'].sizes),
    image_src: image_src|default(img_element['#uri']),
    image_alt: image_alt|default(img_element['#alt']),
    image_title: image_title|default(img_element['#title']),
  } %}
{% endif %}
", "@atoms/images/image/responsive-image.twig", "C:\\Users\\dell\\Sites\\devdesktop\\d8\\themes\\custom\\netflixdev\\components\\01-atoms\\images\\image\\responsive-image.twig");
    }
}
