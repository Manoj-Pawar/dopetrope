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

/* @atoms/images/Font_icon/awesome_font_icon.twig */
class __TwigTemplate_27a427c8d502726ed9a653fe331cb7b6daedeb210827e2e59b2e070b5a74d452 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "if" => 3];
        $filters = ["default" => 1, "escape" => 4];
        $functions = ["bem" => 5];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@atoms/images/Font_icon/awesome_font_icon.twig"));

        // line 1
        $context["fonticon_base_class"] = (((isset($context["fonticon_base_class"]) || array_key_exists("fonticon_base_class", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["fonticon_base_class"] ?? null)), "icon")) : ("icon"));
        // line 2
        echo "
";
        // line 3
        if (($context["icon_url"] ?? null)) {
            // line 4
            echo "  <a href=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon_url"] ?? null)), "html", null, true);
            echo ">
    <span ";
            // line 5
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, $this->sandbox->ensureToStringAllowed(($context["fonticon_base_class"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["fonticon_modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["fonticon_blockname"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["fonticon_extra_class"] ?? null))));
            echo ">  
      <i ";
            // line 6
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, $this->sandbox->ensureToStringAllowed(($context["svg_base_class"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["svg_modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["svg_blockname"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["svg_extra_class"] ?? null))));
            echo "></i>  
    </span> 
  </a>
";
        } else {
            // line 10
            echo "  <span ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, $this->sandbox->ensureToStringAllowed(($context["fonticon_base_class"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["fonticon_modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["fonticon_blockname"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["fonticon_extra_class"] ?? null))));
            echo ">  
    <i ";
            // line 11
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, $this->sandbox->ensureToStringAllowed(($context["svg_base_class"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["svg_modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["svg_blockname"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["svg_extra_class"] ?? null))));
            echo "></i>  
  </span> 
";
        }
        // line 13
        echo "  ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@atoms/images/Font_icon/awesome_font_icon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 13,  86 => 11,  81 => 10,  74 => 6,  70 => 5,  65 => 4,  63 => 3,  60 => 2,  58 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set fonticon_base_class = fonticon_base_class|default('icon') %}

{% if icon_url %}
  <a href={{ icon_url }}>
    <span {{ bem(fonticon_base_class, fonticon_modifiers, fonticon_blockname, fonticon_extra_class) }}>  
      <i {{ bem(svg_base_class, svg_modifiers, svg_blockname, svg_extra_class) }}></i>  
    </span> 
  </a>
{% else %}
  <span {{ bem(fonticon_base_class, fonticon_modifiers, fonticon_blockname, fonticon_extra_class) }}>  
    <i {{ bem(svg_base_class, svg_modifiers, svg_blockname, svg_extra_class) }}></i>  
  </span> 
{% endif %}  ", "@atoms/images/Font_icon/awesome_font_icon.twig", "C:\\Users\\dell\\Sites\\devdesktop\\d8\\themes\\custom\\netflixdev\\components\\01-atoms\\images\\Font_icon\\awesome_font_icon.twig");
    }
}
