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

/* @molecules/menus/_menu-item.twig */
class __TwigTemplate_d6569f9fa11a7fa174960b761c85b25445b810c623fa0bbc77b5725e5ba4b9b6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'list_item_content' => [$this, 'block_list_item_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1, "set" => 2, "for" => 16, "import" => 25, "include" => 33];
        $filters = ["merge" => 7, "default" => 21, "escape" => 31];
        $functions = ["link" => 31, "bem" => 31];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for', 'import', 'include'],
                ['merge', 'default', 'escape'],
                ['link', 'bem']
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

    protected function doGetParent(array $context)
    {
        // line 27
        return "@atoms/lists/_list-item.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@molecules/menus/_menu-item.twig"));

        // line 1
        if ( !($context["item_modifiers"] ?? null)) {
            // line 2
            $context["item_modifiers"] = [];
        }
        // line 5
        $context["original_item_modifiers"] = ($context["item_modifiers"] ?? null);
        // line 6
        if (($this->getAttribute(($context["item"] ?? null), "in_active_trail", []) == true)) {
            // line 7
            $context["item_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["item_modifiers"] ?? null)), [0 => "active"]);
        }
        // line 9
        if ((($context["menu_level"] ?? null) > 0)) {
            // line 10
            $context["item_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["item_modifiers"] ?? null)), [0 => "sub", 1 => ("sub-" . $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null)))]);
        }
        // line 12
        if ($this->getAttribute(($context["item"] ?? null), "below", [])) {
            // line 13
            $context["item_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["item_modifiers"] ?? null)), [0 => "with-sub"]);
        }
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["item"] ?? null), "modifiers", []));
        foreach ($context['_seq'] as $context["_key"] => $context["modifier"]) {
            // line 17
            $context["item_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["item_modifiers"] ?? null)), [0 => $context["modifier"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modifier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        $context["list_item_label"] = ($context["item_label"] ?? null);
        // line 21
        $context["li_base_class"] = (((isset($context["item_base_class"]) || array_key_exists("item_base_class", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["item_base_class"] ?? null)), ($this->sandbox->ensureToStringAllowed(($context["menu_class"] ?? null)) . "__item"))) : (($this->sandbox->ensureToStringAllowed(($context["menu_class"] ?? null)) . "__item")));
        // line 22
        $context["li_modifiers"] = ($context["item_modifiers"] ?? null);
        // line 23
        $context["li_blockname"] = ($context["item_blockname"] ?? null);
        // line 25
        $context["menus"] = $this->loadTemplate("@molecules/menus/_menu.twig", "@molecules/menus/_menu-item.twig", 25)->unwrap();
        // line 27
        $this->parent = $this->loadTemplate("@atoms/lists/_list-item.twig", "@molecules/menus/_menu-item.twig", 27);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 28
    public function block_list_item_content($context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_item_content"));

        // line 29
        echo "    ";
        // line 30
        echo "    ";
        if (($context["directory"] ?? null)) {
            // line 31
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["item"] ?? null), "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["item"] ?? null), "url", [])), $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, (((isset($context["item_base_class"]) || array_key_exists("item_base_class", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["item_base_class"] ?? null)), ($this->sandbox->ensureToStringAllowed(($context["menu_class"] ?? null)) . "__link"))) : (($this->sandbox->ensureToStringAllowed(($context["menu_class"] ?? null)) . "__link"))), $this->sandbox->ensureToStringAllowed(($context["item_modifiers"] ?? null)))), "html", null, true);
            echo "
    ";
        } else {
            // line 33
            echo "      ";
            $this->loadTemplate("@atoms/links/link/link.twig", "@molecules/menus/_menu-item.twig", 33)->display(twig_array_merge($context, ["link_content" => $this->getAttribute(            // line 34
($context["item"] ?? null), "title", []), "link_url" => $this->getAttribute(            // line 35
($context["item"] ?? null), "url", []), "link_base_class" => ((            // line 36
(isset($context["item_base_class"]) || array_key_exists("item_base_class", $context))) ? (_twig_default_filter(($context["item_base_class"] ?? null), (($context["menu_class"] ?? null) . "__link"))) : ((($context["menu_class"] ?? null) . "__link"))), "link_modifiers" =>             // line 37
($context["item_modifiers"] ?? null)]));
            // line 39
            echo "    ";
        }
        // line 40
        echo "    ";
        if ($this->getAttribute(($context["item"] ?? null), "below", [])) {
            // line 41
            echo "      <span class=\"expand-sub\"></span>
      ";
            // line 42
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute(($context["item"] ?? null), "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), ($context["menu_class"] ?? null), ($context["menu_modifiers"] ?? null), ($context["menu_blockname"] ?? null), ($context["item_base_class"] ?? null), ($context["original_item_modifiers"] ?? null), ($context["item_blockname"] ?? null), ($context["directory"] ?? null)));
            echo "
    ";
        }
        // line 44
        echo "  ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@molecules/menus/_menu-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 44,  146 => 42,  143 => 41,  140 => 40,  137 => 39,  135 => 37,  134 => 36,  133 => 35,  132 => 34,  130 => 33,  124 => 31,  121 => 30,  119 => 29,  113 => 28,  105 => 27,  103 => 25,  101 => 23,  99 => 22,  97 => 21,  95 => 20,  89 => 17,  85 => 16,  82 => 13,  80 => 12,  77 => 10,  75 => 9,  72 => 7,  70 => 6,  68 => 5,  65 => 2,  63 => 1,  54 => 27,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if not item_modifiers %}
  {% set item_modifiers = [] %}
{% endif %}
{# Pass original item modifiers down to children #}
{% set original_item_modifiers = item_modifiers %}
{% if item.in_active_trail == TRUE %}
  {% set item_modifiers = item_modifiers|merge(['active']) %}
{% endif %}
{% if menu_level > 0 %}
  {% set item_modifiers = item_modifiers|merge(['sub', 'sub-' ~ menu_level]) %}
{% endif %}
{% if item.below %}
  {% set item_modifiers = item_modifiers|merge(['with-sub']) %}
{% endif %}
{# below could maybe be done without a loop? #}
{% for modifier in item.modifiers %}
  {% set item_modifiers = item_modifiers|merge([modifier]) %}
{% endfor %}

{% set list_item_label = item_label %}
{% set li_base_class = item_base_class|default(menu_class ~ '__item') %}
{% set li_modifiers = item_modifiers %}
{% set li_blockname = item_blockname %}

{% import \"@molecules/menus/_menu.twig\" as menus %}

{% extends \"@atoms/lists/_list-item.twig\" %}
  {% block list_item_content %}
    {# if drupal #}
    {% if directory %}
      {{ link(item.title, item.url, bem(item_base_class|default(menu_class ~ '__link'), item_modifiers)) }}
    {% else %}
      {% include \"@atoms/links/link/link.twig\" with {
        link_content: item.title,
        link_url: item.url,
        link_base_class: item_base_class|default(menu_class ~ '__link'),
        link_modifiers: item_modifiers,
      } %}
    {% endif %}
    {% if item.below %}
      <span class=\"expand-sub\"></span>
      {{ menus.menu_links(item.below, attributes, menu_level + 1, menu_class, menu_modifiers, menu_blockname, item_base_class, original_item_modifiers, item_blockname, directory) }}
    {% endif %}
  {% endblock %}
", "@molecules/menus/_menu-item.twig", "C:\\Users\\dell\\Sites\\devdesktop\\d8\\themes\\custom\\netflixdev\\components\\02-molecules\\menus\\_menu-item.twig");
    }
}
