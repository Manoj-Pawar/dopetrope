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

/* @atoms/images/icons/_icon.twig */
class __TwigTemplate_97d1ddaabb2fc9e8bd5a0f97c92e1bd8fc255ddde350aac2bfa3621396bfdd14 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 13, "if" => 25];
        $filters = ["default" => 13, "escape" => 21];
        $functions = ["attach_library" => 21, "bem" => 23];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['default', 'escape'],
                ['attach_library', 'bem']
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@atoms/images/icons/_icon.twig"));

        // line 13
        $context["icon_base_class"] = (((isset($context["icon_base_class"]) || array_key_exists("icon_base_class", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["icon_base_class"] ?? null)), "icon")) : ("icon"));
        // line 16
        $context["icon_url"] = ((($context["directory"] ?? null)) ? ((("/" . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))) . "/dist/")) : (""));
        // line 17
        echo "
";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("netflixdev/sprite"), "html", null, true);
        echo "

<svg ";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, $this->sandbox->ensureToStringAllowed(($context["icon_base_class"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["icon_modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["icon_blockname"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["icon_extra_class"] ?? null))));
        echo "

  ";
        // line 25
        if (($context["icon_decorative"] ?? null)) {
            // line 26
            echo "    aria-hidden=\"true\" role=\"img\"
  ";
        } elseif (        // line 27
($context["icon_role"] ?? null)) {
            // line 28
            echo "    role=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon_role"] ?? null)), "html", null, true);
            echo "\"
  ";
        }
        // line 30
        echo "
  ";
        // line 31
        if (($context["icon_title"] ?? null)) {
            // line 32
            echo "    aria-labelledby=\"title-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon_name"] ?? null)), "html", null, true);
            echo "\"
  ";
        }
        // line 34
        echo "
  ";
        // line 35
        if (($context["icon_desc"] ?? null)) {
            // line 36
            echo "    aria-describedby=\"desc-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon_name"] ?? null)), "html", null, true);
            echo "\"
  ";
        }
        // line 38
        echo ">
  ";
        // line 39
        if (($context["icon_title"] ?? null)) {
            // line 40
            echo "    <title id=\"title-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon_name"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon_title"] ?? null)), "html", null, true);
            echo "</title>
  ";
        }
        // line 42
        echo "  ";
        if (($context["icon_desc"] ?? null)) {
            // line 43
            echo "    <desc id=\"desc-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon_name"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon_desc"] ?? null)), "html", null, true);
            echo "</desc>
  ";
        }
        // line 45
        echo "  <use xlink:href=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon_url"] ?? null)), "html", null, true);
        echo "icons.svg#";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon_name"] ?? null)), "html", null, true);
        echo "\"></use>
</svg>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@atoms/images/icons/_icon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 45,  126 => 43,  123 => 42,  115 => 40,  113 => 39,  110 => 38,  104 => 36,  102 => 35,  99 => 34,  93 => 32,  91 => 31,  88 => 30,  82 => 28,  80 => 27,  77 => 26,  75 => 25,  70 => 23,  65 => 21,  62 => 17,  60 => 16,  58 => 13,);
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
/**
 * Available variables:
 * - icon_base_class - base class name
 * - icon_modifiers - modifiers for icons (array)
 * - icon_blockname - blockname prepended to the base classname
 * - icon_name - the name of the icon
 * - icon_role - a11y role
 * - icon_title - a11y title
 * - icon_desc - a11y description
 */
#}
{% set icon_base_class = icon_base_class|default('icon') %}
{# If `directory` is defined, set the path relative for Drupal.
 # Otherwise, set the path relative to the Component Library. #}
{% set icon_url = directory ? '/' ~ directory ~ '/dist/' %}

{# IE 11 support for SVG use - remove if not needed.
## See also netflixdev.libraries.yml to remove library.
#}
{{ attach_library('netflixdev/sprite') }}

<svg {{ bem(icon_base_class, icon_modifiers, icon_blockname, icon_extra_class) }}

  {% if icon_decorative %}
    aria-hidden=\"true\" role=\"img\"
  {% elseif icon_role %}
    role=\"{{ icon_role }}\"
  {% endif %}

  {% if icon_title %}
    aria-labelledby=\"title-{{ icon_name }}\"
  {% endif %}

  {% if icon_desc %}
    aria-describedby=\"desc-{{ icon_name }}\"
  {% endif %}
>
  {% if icon_title %}
    <title id=\"title-{{ icon_name }}\">{{ icon_title }}</title>
  {% endif %}
  {% if icon_desc %}
    <desc id=\"desc-{{ icon_name }}\">{{ icon_desc }}</desc>
  {% endif %}
  <use xlink:href=\"{{ icon_url }}icons.svg#{{ icon_name }}\"></use>
</svg>
", "@atoms/images/icons/_icon.twig", "C:\\Users\\dell\\Sites\\devdesktop\\d8\\themes\\custom\\netflixdev\\components\\01-atoms\\images\\icons\\_icon.twig");
    }
}
