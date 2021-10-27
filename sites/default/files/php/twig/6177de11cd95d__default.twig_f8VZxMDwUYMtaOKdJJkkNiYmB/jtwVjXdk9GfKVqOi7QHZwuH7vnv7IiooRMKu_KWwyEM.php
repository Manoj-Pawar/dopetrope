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

/* @templates/_default.twig */
class __TwigTemplate_f914ba58b254e9cc5fbec808d20f98d8ce7e130172063755cce6ea68f070ee11 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'page_header' => [$this, 'block_page_header'],
            'page_system' => [$this, 'block_page_system'],
            'page_sidebar' => [$this, 'block_page_sidebar'],
            'page_content' => [$this, 'block_page_content'],
            'page_footer' => [$this, 'block_page_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "if" => 9, "block" => 15, "include" => 16];
        $filters = ["default" => 3, "merge" => 10];
        $functions = ["bem" => 14];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'include'],
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@templates/_default.twig"));

        // line 1
        $context["layout_modifiers"] = [];
        // line 2
        echo "
";
        // line 3
        $context["main_base_class"] = (((isset($context["main_base_class"]) || array_key_exists("main_base_class", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["main_base_class"] ?? null)), "main")) : ("main"));
        // line 4
        $context["main_modifiers"] = [];
        // line 5
        echo "
";
        // line 6
        $context["main_content_base_class"] = (((isset($context["main_content_base_class"]) || array_key_exists("main_content_base_class", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["main_content_base_class"] ?? null)), "main-content")) : ("main-content"));
        // line 7
        $context["main_content_modifiers"] = [];
        // line 8
        echo "
";
        // line 9
        if (($context["sidebar"] ?? null)) {
            // line 10
            echo "  ";
            $context["main_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["main_modifiers"] ?? null)), [0 => "with-sidebar"]);
            // line 11
            echo "  ";
            $context["main_content_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["main_content_modifiers"] ?? null)), [0 => "with-sidebar"]);
        }
        // line 13
        echo "
<div ";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "layout-container", $this->sandbox->ensureToStringAllowed(($context["layout_modifiers"] ?? null))));
        echo ">
  ";
        // line 15
        $this->displayBlock('page_header', $context, $blocks);
        // line 18
        echo "  ";
        $this->displayBlock('page_system', $context, $blocks);
        // line 20
        echo "  <div ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, $this->sandbox->ensureToStringAllowed(($context["main_base_class"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["main_modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["main_blockname"] ?? null))));
        echo ">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 22
        echo "    ";
        if (($context["sidebar"] ?? null)) {
            // line 23
            echo "      <aside class=\"main-sidebar\" role=\"complementary\">
        ";
            // line 24
            $this->displayBlock('page_sidebar', $context, $blocks);
            // line 25
            echo "      </aside>
    ";
        }
        // line 27
        echo "    <main role=\"main\" ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, $this->sandbox->ensureToStringAllowed(($context["main_content_base_class"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["main_content_modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["main_content_blockname"] ?? null))));
        echo ">
      ";
        // line 28
        $this->displayBlock('page_content', $context, $blocks);
        // line 29
        echo "    </main>
  </div>
  ";
        // line 31
        $this->displayBlock('page_footer', $context, $blocks);
        // line 34
        echo "</div>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 15
    public function block_page_header($context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_header"));

        // line 16
        echo "    ";
        $this->loadTemplate("@organisms/site/site-header/site-header.twig", "@templates/_default.twig", 16)->display($context);
        // line 17
        echo "  ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 18
    public function block_page_system($context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_system"));

        // line 19
        echo "  ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 24
    public function block_page_sidebar($context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_sidebar"));

        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 28
    public function block_page_content($context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 31
    public function block_page_footer($context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_footer"));

        // line 32
        echo "    ";
        $this->loadTemplate("@organisms/site/site-footer/site-footer.twig", "@templates/_default.twig", 32)->display($context);
        // line 33
        echo "  ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@templates/_default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 33,  198 => 32,  192 => 31,  181 => 28,  170 => 24,  163 => 19,  157 => 18,  150 => 17,  147 => 16,  141 => 15,  133 => 34,  131 => 31,  127 => 29,  125 => 28,  120 => 27,  116 => 25,  114 => 24,  111 => 23,  108 => 22,  103 => 20,  100 => 18,  98 => 15,  94 => 14,  91 => 13,  87 => 11,  84 => 10,  82 => 9,  79 => 8,  77 => 7,  75 => 6,  72 => 5,  70 => 4,  68 => 3,  65 => 2,  63 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set layout_modifiers = [] %}

{% set main_base_class = main_base_class|default('main') %}
{% set main_modifiers = [] %}

{% set main_content_base_class = main_content_base_class|default('main-content') %}
{% set main_content_modifiers = [] %}

{% if sidebar %}
  {% set main_modifiers = main_modifiers|merge(['with-sidebar']) %}
  {% set main_content_modifiers = main_content_modifiers|merge(['with-sidebar']) %}
{% endif %}

<div {{ bem('layout-container', layout_modifiers) }}>
  {% block page_header %}
    {% include \"@organisms/site/site-header/site-header.twig\" %}
  {% endblock %}
  {% block page_system %}
  {% endblock %}
  <div {{ bem(main_base_class, main_modifiers, main_blockname) }}>
    <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}
    {% if sidebar %}
      <aside class=\"main-sidebar\" role=\"complementary\">
        {% block page_sidebar %}{% endblock %}
      </aside>
    {% endif %}
    <main role=\"main\" {{ bem(main_content_base_class, main_content_modifiers, main_content_blockname) }}>
      {% block page_content %}{% endblock %}
    </main>
  </div>
  {% block page_footer %}
    {% include \"@organisms/site/site-footer/site-footer.twig\" %}
  {% endblock %}
</div>
", "@templates/_default.twig", "C:\\Users\\dell\\Sites\\devdesktop\\d8\\themes\\custom\\netflixdev\\components\\04-templates\\_default.twig");
    }
}
