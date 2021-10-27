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

/* @atoms/text/text/01-paragraph.twig */
class __TwigTemplate_4fd4288ae840da9ea2eeae572f9faf783b91654b86b2ec15031918b829faf4bf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'paragraph_content' => [$this, 'block_paragraph_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 14, "block" => 17];
        $filters = ["default" => 14, "escape" => 18];
        $functions = ["bem" => 16];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@atoms/text/text/01-paragraph.twig"));

        // line 14
        $context["paragraph_base_class"] = (((isset($context["paragraph_base_class"]) || array_key_exists("paragraph_base_class", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["paragraph_base_class"] ?? null)), "paragraph")) : ("paragraph"));
        // line 15
        echo "
<p ";
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, $this->sandbox->ensureToStringAllowed(($context["paragraph_base_class"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["paragraph_modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["paragraph_blockname"] ?? null))));
        echo ">
  ";
        // line 17
        $this->displayBlock('paragraph_content', $context, $blocks);
        // line 20
        echo "</p>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 17
    public function block_paragraph_content($context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "paragraph_content"));

        // line 18
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["paragraph_content"] ?? null)), "html", null, true);
        echo "
  ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@atoms/text/text/01-paragraph.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  78 => 17,  70 => 20,  68 => 17,  64 => 16,  61 => 15,  59 => 14,);
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
 * - paragraph_base_class - the base classname
 * - paragraph_modifiers - array of modifiers to add to the base classname
 * - paragraph_blockname - blockname prepended to the base classname
 * - paragraph_content - the content of the paragraph (typically text)
 *
 * Available blocks:
 * - paragraph_content - used to replace the content of the paragraph with something other than plain text
 *   for example: A formatted text field in Drupal
 */
#}
{% set paragraph_base_class = paragraph_base_class|default('paragraph') %}

<p {{ bem(paragraph_base_class, paragraph_modifiers, paragraph_blockname) }}>
  {% block paragraph_content %}
    {{ paragraph_content }}
  {% endblock %}
</p>
", "@atoms/text/text/01-paragraph.twig", "C:\\Users\\dell\\Sites\\devdesktop\\d8\\themes\\custom\\netflixdev\\components\\01-atoms\\text\\text\\01-paragraph.twig");
    }
}
