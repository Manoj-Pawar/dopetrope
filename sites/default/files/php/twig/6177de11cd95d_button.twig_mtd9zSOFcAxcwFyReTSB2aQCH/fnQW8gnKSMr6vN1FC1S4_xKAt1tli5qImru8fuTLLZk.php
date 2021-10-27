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

/* @atoms/buttons/button.twig */
class __TwigTemplate_f361b523c5486aa679f8cc37119a7cf202effb891debbcae97b3700fb7d57240 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'button_content' => [$this, 'block_button_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 12, "block" => 23];
        $filters = ["default" => 12, "escape" => 25];
        $functions = ["bem" => 15, "add_attributes" => 22];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
                ['default', 'escape'],
                ['bem', 'add_attributes']
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@atoms/buttons/button.twig"));

        // line 11
        echo "
";
        // line 12
        $context["button_base_class"] = (((isset($context["button_base_class"]) || array_key_exists("button_base_class", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["button_base_class"] ?? null)), "button")) : ("button"));
        // line 13
        echo "
";
        // line 14
        $context["additional_attributes"] = ["class" => $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, $this->sandbox->ensureToStringAllowed(        // line 15
($context["button_base_class"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["button_modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["button_blockname"] ?? null)))];
        // line 17
        echo "
";
        // line 18
        $context["fonticon_attributes"] = ["class" => $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, $this->sandbox->ensureToStringAllowed(        // line 19
($context["fonticon_base_class"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["fonticon_modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["fonticon_blockname"] ?? null)))];
        // line 21
        echo "
<button ";
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\emulsify_twig\AddAttributesTwigExtension')->add_attributes($context, $this->sandbox->ensureToStringAllowed(($context["additional_attributes"] ?? null))));
        echo ">
  <!-- ";
        // line 23
        $this->displayBlock('button_content', $context, $blocks);
        // line 26
        echo " -->
</button>
 ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 23
    public function block_button_content($context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_content"));

        echo " -->
    <i ";
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\emulsify_twig\AddAttributesTwigExtension')->add_attributes($context, $this->sandbox->ensureToStringAllowed(($context["fonticon_attributes"] ?? null))));
        echo "></i>
      ";
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button_content"] ?? null)), "html", null, true);
        echo "
  <!-- ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@atoms/buttons/button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 25,  102 => 24,  94 => 23,  85 => 26,  83 => 23,  79 => 22,  76 => 21,  74 => 19,  73 => 18,  70 => 17,  68 => 15,  67 => 14,  64 => 13,  62 => 12,  59 => 11,);
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
 * - button_content - the content of the button (typically text)
 * 
 * Available blocks:
 * - button_content - used to replace the content of the button with something other than text
 *   for example: to insert an icon
 */
#}

{% set button_base_class = button_base_class|default('button') %}

{% set additional_attributes = {
  class: bem(button_base_class, button_modifiers, button_blockname),
} %}

{% set fonticon_attributes = {
  class: bem(fonticon_base_class, fonticon_modifiers, fonticon_blockname),
} %}

<button {{ add_attributes(additional_attributes) }}>
  <!-- {% block button_content %} -->
    <i {{ add_attributes(fonticon_attributes) }}></i>
      {{ button_content }}
  <!-- {% endblock %} -->
</button>
 ", "@atoms/buttons/button.twig", "C:\\Users\\dell\\Sites\\devdesktop\\d8\\themes\\custom\\netflixdev\\components\\01-atoms\\buttons\\button.twig");
    }
}
