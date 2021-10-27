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

/* @atoms/images/image/_image.twig */
class __TwigTemplate_6993e8efa7da7c2c65022c62e5a5115529fb5a59cc14e5ba11a8045bee3ef585 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "if" => 5];
        $filters = ["default" => 1, "escape" => 6];
        $functions = ["bem" => 4];

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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@atoms/images/image/_image.twig"));

        // line 1
        $context["image_base_class"] = (((isset($context["image_base_class"]) || array_key_exists("image_base_class", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["image_base_class"] ?? null)), "image")) : ("image"));
        // line 2
        echo "
<img
  ";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, $this->sandbox->ensureToStringAllowed(($context["image_base_class"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["image_modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["image_blockname"] ?? null))));
        echo "
  ";
        // line 5
        if (($context["image_srcset"] ?? null)) {
            // line 6
            echo "    srcset=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image_srcset"] ?? null)), "html", null, true);
            echo "\"
  ";
        }
        // line 8
        echo "  ";
        if (($context["image_sizes"] ?? null)) {
            // line 9
            echo "    sizes=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image_sizes"] ?? null)), "html", null, true);
            echo "\"
  ";
        }
        // line 11
        echo "  src=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image_src"] ?? null)), "html", null, true);
        echo "\"
  ";
        // line 12
        if (($context["image_alt"] ?? null)) {
            // line 13
            echo "    alt=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image_alt"] ?? null)), "html", null, true);
            echo "\"
  ";
        }
        // line 15
        echo "  ";
        if (($context["image_title"] ?? null)) {
            // line 16
            echo "    title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image_title"] ?? null)), "html", null, true);
            echo "\"
  ";
        }
        // line 18
        echo "/>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@atoms/images/image/_image.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 18,  101 => 16,  98 => 15,  92 => 13,  90 => 12,  85 => 11,  79 => 9,  76 => 8,  70 => 6,  68 => 5,  64 => 4,  60 => 2,  58 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set image_base_class = image_base_class|default('image') %}

<img
  {{ bem(image_base_class, image_modifiers, image_blockname) }}
  {% if image_srcset %}
    srcset=\"{{ image_srcset }}\"
  {% endif %}
  {% if image_sizes %}
    sizes=\"{{ image_sizes }}\"
  {% endif %}
  src=\"{{ image_src }}\"
  {% if image_alt %}
    alt=\"{{ image_alt }}\"
  {% endif %}
  {% if image_title %}
    title=\"{{ image_title }}\"
  {% endif %}
/>
", "@atoms/images/image/_image.twig", "C:\\Users\\dell\\Sites\\devdesktop\\d8\\themes\\custom\\netflixdev\\components\\01-atoms\\images\\image\\_image.twig");
    }
}
