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

/* @organisms/site/site-header/site-header.twig */
class __TwigTemplate_3a3cf221eae56713180d38c0cb026ed229cf8a5c0858deb915fa9d352c9076ae extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'header__branding' => [$this, 'block_header__branding'],
            'header__menu' => [$this, 'block_header__menu'],
            'header__breadcrumbs' => [$this, 'block_header__breadcrumbs'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "block" => 10, "include" => 11];
        $filters = [];
        $functions = ["bem" => 6];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'include'],
                [],
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@organisms/site/site-header/site-header.twig"));

        // line 1
        $context["header__base_class"] = "header";
        // line 4
        $context["header__logo_src"] = ((($context["directory"] ?? null)) ? ((("/" . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))) . "/images/logo_1.png")) : ("logo_1.png"));
        // line 5
        echo "
<header ";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, $this->sandbox->ensureToStringAllowed(($context["header__base_class"] ?? null))));
        echo ">
  <div ";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "inner", [], $this->sandbox->ensureToStringAllowed(($context["header__base_class"] ?? null))));
        echo ">
    <div ";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "primary", [], $this->sandbox->ensureToStringAllowed(($context["header__base_class"] ?? null))));
        echo ">
      <div ";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "branding", [], $this->sandbox->ensureToStringAllowed(($context["header__base_class"] ?? null))));
        echo ">
        ";
        // line 10
        $this->displayBlock('header__branding', $context, $blocks);
        // line 13
        echo "      </div>
      <div ";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "menu", [], $this->sandbox->ensureToStringAllowed(($context["header__base_class"] ?? null))));
        echo ">
        ";
        // line 15
        $this->displayBlock('header__menu', $context, $blocks);
        // line 18
        echo "      </div>
    </div>
    <div ";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "secondary", [], $this->sandbox->ensureToStringAllowed(($context["header__base_class"] ?? null))));
        echo ">
      ";
        // line 21
        $this->displayBlock('header__breadcrumbs', $context, $blocks);
        // line 24
        echo "    </div>
  </div>
</header>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 10
    public function block_header__branding($context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header__branding"));

        // line 11
        echo "          ";
        $this->loadTemplate("@organisms/site/site-header/_site-header-branding.twig", "@organisms/site/site-header/site-header.twig", 11)->display($context);
        // line 12
        echo "        ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 15
    public function block_header__menu($context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header__menu"));

        // line 16
        echo "          ";
        $this->loadTemplate("@molecules/menus/main-menu/main-menu.twig", "@organisms/site/site-header/site-header.twig", 16)->display($context);
        // line 17
        echo "        ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 21
    public function block_header__breadcrumbs($context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header__breadcrumbs"));

        // line 22
        echo "        ";
        $this->loadTemplate("@molecules/menus/breadcrumbs/breadcrumbs.twig", "@organisms/site/site-header/site-header.twig", 22)->display($context);
        // line 23
        echo "      ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@organisms/site/site-header/site-header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 23,  153 => 22,  147 => 21,  140 => 17,  137 => 16,  131 => 15,  124 => 12,  121 => 11,  115 => 10,  105 => 24,  103 => 21,  99 => 20,  95 => 18,  93 => 15,  89 => 14,  86 => 13,  84 => 10,  80 => 9,  76 => 8,  72 => 7,  68 => 6,  65 => 5,  63 => 4,  61 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set header__base_class = 'header' %}
{# If `directory` is defined, set the path relative for Drupal.
 # Otherwise, set the path relative to the Component Library. #}
{% set header__logo_src = directory ? '/' ~ directory ~ '/images/logo_1.png' : 'logo_1.png' %}

<header {{ bem(header__base_class) }}>
  <div {{ bem('inner', [], header__base_class) }}>
    <div {{ bem('primary', [], header__base_class) }}>
      <div {{ bem('branding', [], header__base_class) }}>
        {% block header__branding %}
          {% include \"@organisms/site/site-header/_site-header-branding.twig\" %}
        {% endblock %}
      </div>
      <div {{ bem('menu', [], header__base_class) }}>
        {% block header__menu %}
          {% include \"@molecules/menus/main-menu/main-menu.twig\" %}
        {% endblock %}
      </div>
    </div>
    <div {{ bem('secondary', [], header__base_class) }}>
      {% block header__breadcrumbs %}
        {% include \"@molecules/menus/breadcrumbs/breadcrumbs.twig\" %}
      {% endblock %}
    </div>
  </div>
</header>
", "@organisms/site/site-header/site-header.twig", "C:\\Users\\dell\\Sites\\devdesktop\\d8\\themes\\custom\\netflixdev\\components\\03-organisms\\site\\site-header\\site-header.twig");
    }
}
