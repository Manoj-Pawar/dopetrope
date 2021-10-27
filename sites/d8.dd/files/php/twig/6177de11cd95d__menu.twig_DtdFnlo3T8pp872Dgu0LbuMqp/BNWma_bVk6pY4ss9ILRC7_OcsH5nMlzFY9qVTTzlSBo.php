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

/* @molecules/menus/_menu.twig */
class __TwigTemplate_ed74f6d45b984cbda38f2456cfc3a77ce2b83440bd0da4f4115b88cf47817514 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 43, "macro" => 26, "if" => 28, "set" => 31, "include" => 39];
        $filters = ["default" => 31, "merge" => 36];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'set', 'include'],
                ['default', 'merge'],
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@molecules/menus/_menu.twig"));

        // line 21
        echo "
";
        // line 42
        echo "
";
        // line 43
        $context["menus"] = $this;
        // line 44
        echo "
";
        // line 45
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["menu_class"] ?? null), ($context["menu_modifiers"] ?? null), ($context["menu_blockname"] ?? null), ($context["item_base_class"] ?? null), ($context["item_modifiers"] ?? null), ($context["item_blockname"] ?? null), ($context["directory"] ?? null)));
        echo "
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 26
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__menu_class__ = null, $__menu_modifiers__ = null, $__menu_blockname__ = null, $__item_base_class__ = null, $__item_modifiers__ = null, $__item_blockname__ = null, $__directory__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "menu_class" => $__menu_class__,
            "menu_modifiers" => $__menu_modifiers__,
            "menu_blockname" => $__menu_blockname__,
            "item_base_class" => $__item_base_class__,
            "item_modifiers" => $__item_modifiers__,
            "item_blockname" => $__item_blockname__,
            "directory" => $__directory__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
            $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "menu_links"));

            // line 27
            echo "  ";
            $context["menus"] = $this;
            // line 28
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 29
                echo "
    ";
                // line 31
                echo "    ";
                $context["menu_class"] = (((isset($context["menu_class"]) || array_key_exists("menu_class", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["menu_class"] ?? null)), "menu")) : ("menu"));
                // line 32
                echo "    ";
                if ( !($context["menu_modifiers"] ?? null)) {
                    // line 33
                    echo "      ";
                    $context["menu_modifiers"] = [];
                    // line 34
                    echo "    ";
                }
                // line 35
                echo "    ";
                if ((($context["menu_level"] ?? null) > 0)) {
                    // line 36
                    echo "      ";
                    $context["menu_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["menu_modifiers"] ?? null)), [0 => "sub", 1 => ("sub-" . $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null)))]);
                    // line 37
                    echo "    ";
                }
                // line 38
                echo "
    ";
                // line 39
                $this->loadTemplate("@molecules/menus/_menu-list.twig", "@molecules/menus/_menu.twig", 39)->display($context);
                // line 40
                echo "  ";
            }
            
            $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@molecules/menus/_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 40,  135 => 39,  132 => 38,  129 => 37,  126 => 36,  123 => 35,  120 => 34,  117 => 33,  114 => 32,  111 => 31,  108 => 29,  105 => 28,  102 => 27,  78 => 26,  69 => 45,  66 => 44,  64 => 43,  61 => 42,  58 => 21,);
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
 * @file
 * Theme override to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 */
#}

{#
  We call a macro which calls itself to render the full tree.
  @see http://twig.sensiolabs.org/doc/tags/macro.html
#}
{% macro menu_links(items, attributes, menu_level, menu_class, menu_modifiers, menu_blockname, item_base_class, item_modifiers, item_blockname, directory) %}
  {% import _self as menus %}
  {% if items %}

    {# Set classes #}
    {% set menu_class = menu_class|default('menu') %}
    {% if not menu_modifiers %}
      {% set menu_modifiers = [] %}
    {% endif %}
    {% if menu_level > 0 %}
      {% set menu_modifiers = menu_modifiers|merge(['sub', 'sub-' ~ menu_level]) %}
    {% endif %}

    {% include \"@molecules/menus/_menu-list.twig\" %}
  {% endif %}
{% endmacro %}

{% import _self as menus %}

{{ menus.menu_links(items, attributes, 0, menu_class, menu_modifiers, menu_blockname, item_base_class, item_modifiers, item_blockname, directory) }}
", "@molecules/menus/_menu.twig", "C:\\Users\\dell\\Sites\\devdesktop\\d8\\themes\\custom\\netflixdev\\components\\02-molecules\\menus\\_menu.twig");
    }
}
