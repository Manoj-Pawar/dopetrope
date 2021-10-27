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

/* @atoms/lists/_list-item.twig */
class __TwigTemplate_19e3684795ff6be107c19a72be28a15ad84b618265145d4ced1c4a5459986ae3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'list_item_content' => [$this, 'block_list_item_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 15, "block" => 18, "if" => 19];
        $filters = ["default" => 15, "escape" => 19];
        $functions = ["bem" => 17];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@atoms/lists/_list-item.twig"));

        // line 15
        $context["li_base_class"] = (((isset($context["li_base_class"]) || array_key_exists("li_base_class", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["li_base_class"] ?? null)), "list-item")) : ("list-item"));
        // line 16
        echo "
<li ";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, $this->sandbox->ensureToStringAllowed(($context["li_base_class"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["li_modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["li_blockname"] ?? null))));
        echo ">
  ";
        // line 18
        $this->displayBlock('list_item_content', $context, $blocks);
        // line 22
        echo "</li>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 18
    public function block_list_item_content($context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_item_content"));

        // line 19
        echo "    ";
        if (($context["list_item_label"] ?? null)) {
            echo "<strong>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["list_item_label"] ?? null)), "html", null, true);
            echo "</strong> ";
        }
        // line 20
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["list_item_content"] ?? null)), "html", null, true);
        echo "
  ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@atoms/lists/_list-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 20,  84 => 19,  78 => 18,  70 => 22,  68 => 18,  64 => 17,  61 => 16,  59 => 15,);
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
 * - li_base_class - the base classname
 * - li_modifiers - array of modifiers to add to the base classname
 * - li_blockname - blockname prepended to the base classname
 * - list_item_label - (optional) a <strong> label before the list item itself
 * - list_item_content - the content of the list_item (typically text)
 *
 * Available blocks:
 * - list_item_content - used to replace the content of the list_item with something other than text
 *   for example: to insert the image and/or link components
 */
#}
{% set li_base_class = li_base_class|default('list-item') %}

<li {{ bem(li_base_class, li_modifiers, li_blockname) }}>
  {% block list_item_content %}
    {% if list_item_label %}<strong>{{ list_item_label }}</strong> {% endif %}
    {{ list_item_content }}
  {% endblock %}
</li>
", "@atoms/lists/_list-item.twig", "C:\\Users\\dell\\Sites\\devdesktop\\d8\\themes\\custom\\netflixdev\\components\\01-atoms\\lists\\_list-item.twig");
    }
}
