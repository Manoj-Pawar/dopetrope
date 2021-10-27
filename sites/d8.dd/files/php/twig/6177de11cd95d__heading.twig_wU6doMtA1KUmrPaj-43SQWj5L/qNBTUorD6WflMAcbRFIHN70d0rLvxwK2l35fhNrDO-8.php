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

/* @atoms/text/headings/_heading.twig */
class __TwigTemplate_80dbda5e5e33e596c1bbccb31b5aa7cc63cde91807e2d1e1d96c30397fa0c615 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 19, "if" => 22, "include" => 23];
        $filters = ["default" => 19, "escape" => 21];
        $functions = ["bem" => 21];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
                ['default', 'escape'],
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@atoms/text/headings/_heading.twig"));

        // line 19
        $context["heading_base_class"] = (((isset($context["heading_base_class"]) || array_key_exists("heading_base_class", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["heading_base_class"] ?? null)), ("h" . $this->sandbox->ensureToStringAllowed(($context["heading_level"] ?? null))))) : (("h" . $this->sandbox->ensureToStringAllowed(($context["heading_level"] ?? null)))));
        // line 20
        echo "
<h";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_level"] ?? null)), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, $this->sandbox->ensureToStringAllowed(($context["heading_base_class"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["heading_modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["heading_blockname"] ?? null))));
        echo ">
  ";
        // line 22
        if (($context["heading_url"] ?? null)) {
            // line 23
            echo "    ";
            $this->loadTemplate("@atoms/links/link/link.twig", "@atoms/text/headings/_heading.twig", 23)->display(twig_array_merge($context, ["link_content" =>             // line 24
($context["heading"] ?? null), "link_url" =>             // line 25
($context["heading_url"] ?? null), "link_attributes" =>             // line 26
($context["heading_link_attributes"] ?? null), "link_base_class" =>             // line 27
($context["heading_link_base_class"] ?? null), "link_modifiers" =>             // line 28
($context["heading_link_modifiers"] ?? null), "link_blockname" => ((            // line 29
(isset($context["heading_link_blockname"]) || array_key_exists("heading_link_blockname", $context))) ? (_twig_default_filter(($context["heading_link_blockname"] ?? null), ($context["heading_base_class"] ?? null))) : (($context["heading_base_class"] ?? null)))]));
            // line 31
            echo "  ";
        } else {
            // line 32
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 34
        echo "</h";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_level"] ?? null)), "html", null, true);
        echo ">
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@atoms/text/headings/_heading.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 34,  83 => 32,  80 => 31,  78 => 29,  77 => 28,  76 => 27,  75 => 26,  74 => 25,  73 => 24,  71 => 23,  69 => 22,  63 => 21,  60 => 20,  58 => 19,);
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
 * - heading_level - the header level 1-6 (produces h1, h2, etc.)
 *
 * - heading_base_class - the base class
 * - heading_modifiers - array of modifiers to add to the base classname
 * - heading_blockname - blockname prepended to the base classname
 *
 * - heading - the content of the heading (typically text)
 *
 * - heading_url - (optional) the url the heading should poing to
 * - heading_link_attributes - key/value attributes to pass to link
 * - heading_link_base_class - override the link base class
 * - heading_link_modifiers - override the link modifiers
 * - heading_link_blockname - override the link block name (defaults to heading_base_class)
 */
#}
{% set heading_base_class = heading_base_class|default('h' ~ heading_level) %}

<h{{ heading_level }} {{ bem(heading_base_class, heading_modifiers, heading_blockname) }}>
  {% if heading_url %}
    {% include \"@atoms/links/link/link.twig\" with {
      \"link_content\": heading,
      \"link_url\": heading_url,
      \"link_attributes\": heading_link_attributes,
      \"link_base_class\": heading_link_base_class,
      \"link_modifiers\": heading_link_modifiers,
      \"link_blockname\": heading_link_blockname|default(heading_base_class),
    } %}
  {% else %}
    {{ heading }}
  {% endif %}
</h{{ heading_level }}>
", "@atoms/text/headings/_heading.twig", "C:\\Users\\dell\\Sites\\devdesktop\\d8\\themes\\custom\\netflixdev\\components\\01-atoms\\text\\headings\\_heading.twig");
    }
}
