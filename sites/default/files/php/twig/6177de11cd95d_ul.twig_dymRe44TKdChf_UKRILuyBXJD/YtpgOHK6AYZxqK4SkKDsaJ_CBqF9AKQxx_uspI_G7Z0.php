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

/* @atoms/lists/ul.twig */
class __TwigTemplate_52d127c79b0349c574008de9f848ba5c9db22c9e73090c4f734880ab10b6464b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'list_content' => [$this, 'block_list_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 11, "block" => 14, "for" => 15, "include" => 16];
        $filters = ["default" => 11];
        $functions = ["bem" => 13];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'for', 'include'],
                ['default'],
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@atoms/lists/ul.twig"));

        // line 11
        $context["ul_base_class"] = (((isset($context["ul_base_class"]) || array_key_exists("ul_base_class", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["ul_base_class"] ?? null)), "ul")) : ("ul"));
        // line 12
        echo "
<ul ";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, $this->sandbox->ensureToStringAllowed(($context["ul_base_class"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["ul_modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["ul_blockname"] ?? null))));
        echo ">
  ";
        // line 14
        $this->displayBlock('list_content', $context, $blocks);
        // line 26
        echo "</ul>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 14
    public function block_list_content($context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_content"));

        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ul_items"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["ul_item"]) {
            // line 16
            echo "      ";
            $this->loadTemplate("@atoms/lists/_list-item.twig", "@atoms/lists/ul.twig", 16)->display(twig_array_merge($context, ["list_item_label" => $this->getAttribute(            // line 17
$context["ul_item"], "label", []), "list_item_content" => $this->getAttribute(            // line 18
$context["ul_item"], "content", []), "li_base_class" => $this->getAttribute(            // line 19
$context["ul_item"], "li_base_class", []), "li_base_class" => $this->getAttribute(            // line 20
$context["ul_item"], "li_base_class", []), "li_modifiers" => $this->getAttribute(            // line 21
$context["ul_item"], "li_modifiers", []), "li_blockname" => $this->getAttribute(            // line 22
$context["ul_item"], "li_blockname", [])]));
            // line 24
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ul_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "  ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@atoms/lists/ul.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 25,  111 => 24,  109 => 22,  108 => 21,  107 => 20,  106 => 19,  105 => 18,  104 => 17,  102 => 16,  84 => 15,  78 => 14,  70 => 26,  68 => 14,  64 => 13,  61 => 12,  59 => 11,);
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
 * - ul_base_class - the base classname
 * - ul_modifiers - array of modifiers to add to the base classname
 * - ul_blockname - blockname prepended to the base classname
 *
 * - listItems - TBD
 */
#}
{% set ul_base_class = ul_base_class|default('ul') %}

<ul {{ bem(ul_base_class, ul_modifiers, ul_blockname) }}>
  {% block list_content %}
    {% for ul_item in ul_items %}
      {% include \"@atoms/lists/_list-item.twig\" with {
        list_item_label: ul_item.label,
        list_item_content: ul_item.content,
        li_base_class: ul_item.li_base_class,
        li_base_class: ul_item.li_base_class,
        li_modifiers: ul_item.li_modifiers,
        li_blockname: ul_item.li_blockname,
      } %}
    {% endfor %}
  {% endblock %}
</ul>
", "@atoms/lists/ul.twig", "C:\\Users\\dell\\Sites\\devdesktop\\d8\\themes\\custom\\netflixdev\\components\\01-atoms\\lists\\ul.twig");
    }
}
