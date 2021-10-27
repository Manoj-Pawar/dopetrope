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

/* @organisms/grid/grid.twig */
class __TwigTemplate_db6d0fa0313c9a3bb17f9bc1d1675762fa354a6080dc9a236070d359216dc1d8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'grid_content' => [$this, 'block_grid_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "if" => 3, "include" => 16, "block" => 22, "for" => 23];
        $filters = ["default" => 1, "merge" => 8];
        $functions = ["bem" => 21];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include', 'block', 'for'],
                ['default', 'merge'],
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@organisms/grid/grid.twig"));

        // line 1
        $context["grid_base_class"] = (((isset($context["grid_base_class"]) || array_key_exists("grid_base_class", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["grid_base_class"] ?? null)), "grid")) : ("grid"));
        // line 2
        echo "
";
        // line 3
        if ( !($context["grid_modifiers"] ?? null)) {
            // line 4
            echo "  ";
            $context["grid_modifiers"] = [];
        }
        // line 6
        echo "
";
        // line 7
        if (($context["page_layout_modifier"] ?? null)) {
            // line 8
            echo "  ";
            $context["grid_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["grid_modifiers"] ?? null)), [0 => ($context["page_layout_modifier"] ?? null)]);
        }
        // line 10
        echo "
";
        // line 11
        if (($context["grid_type"] ?? null)) {
            // line 12
            echo "  ";
            $context["grid_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["grid_modifiers"] ?? null)), [0 => ($context["grid_type"] ?? null)]);
        }
        // line 14
        echo "
";
        // line 15
        if (($context["grid_label"] ?? null)) {
            // line 16
            echo "  ";
            $this->loadTemplate("@atoms/text/headings/_heading.twig", "@organisms/grid/grid.twig", 16)->display(twig_array_merge($context, ["heading_level" => 2, "heading" =>             // line 18
($context["grid_label"] ?? null)]));
        }
        // line 21
        echo "<div ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, $this->sandbox->ensureToStringAllowed(($context["grid_base_class"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["grid_modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["grid_blockname"] ?? null))));
        echo ">
  ";
        // line 22
        $this->displayBlock('grid_content', $context, $blocks);
        // line 27
        echo "</div>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 22
    public function block_grid_content($context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "grid_content"));

        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 24
            echo "      ";
            $this->loadTemplate("@organisms/grid/_grid-examples.twig", "@organisms/grid/grid.twig", 24)->display($context);
            // line 25
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "  ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@organisms/grid/grid.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 26,  140 => 25,  137 => 24,  119 => 23,  113 => 22,  105 => 27,  103 => 22,  98 => 21,  95 => 18,  93 => 16,  91 => 15,  88 => 14,  84 => 12,  82 => 11,  79 => 10,  75 => 8,  73 => 7,  70 => 6,  66 => 4,  64 => 3,  61 => 2,  59 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set grid_base_class = grid_base_class|default('grid') %}

{% if not grid_modifiers %}
  {% set grid_modifiers = [] %}
{% endif %}

{% if page_layout_modifier %}
  {% set grid_modifiers = grid_modifiers|merge([page_layout_modifier]) %}
{% endif %}

{% if grid_type %}
  {% set grid_modifiers = grid_modifiers|merge([grid_type]) %}
{% endif %}

{% if grid_label %}
  {% include \"@atoms/text/headings/_heading.twig\" with {
    \"heading_level\": 2,
    \"heading\": grid_label,
  } %}
{% endif %}
<div {{ bem(grid_base_class, grid_modifiers, grid_blockname) }}>
  {% block grid_content %}
    {% for item in items %}
      {% include \"@organisms/grid/_grid-examples.twig\" %}
    {% endfor %}
  {% endblock %}
</div>
", "@organisms/grid/grid.twig", "C:\\Users\\dell\\Sites\\devdesktop\\d8\\themes\\custom\\netflixdev\\components\\03-organisms\\grid\\grid.twig");
    }
}
