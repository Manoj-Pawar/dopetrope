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

/* @organisms/site/site-header/_site-header-branding.twig */
class __TwigTemplate_65c5d8a40f847c99fa9f8a76b60c94bb325b573e7b02025d424c0577b61918ef extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'link_content' => [$this, 'block_link_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "include" => 6];
        $filters = ["default" => 2];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include'],
                ['default'],
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

    protected function doGetParent(array $context)
    {
        // line 4
        return "@atoms/links/link/link.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@organisms/site/site-header/_site-header-branding.twig"));

        // line 1
        $context["link_base_class"] = "logo-link";
        // line 2
        $context["link_url"] = (((isset($context["logo_link__url"]) || array_key_exists("logo_link__url", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["logo_link__url"] ?? null)), "/")) : ("/"));
        // line 4
        $this->parent = $this->loadTemplate("@atoms/links/link/link.twig", "@organisms/site/site-header/_site-header-branding.twig", 4);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 5
    public function block_link_content($context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "link_content"));

        // line 6
        echo "    ";
        $this->loadTemplate("@atoms/images/image/responsive-image.twig", "@organisms/site/site-header/_site-header-branding.twig", 6)->display(twig_array_merge($context, ["output_image_tag" => true, "image_src" =>         // line 8
($context["header__logo_src"] ?? null), "image_alt" => "Logo", "responsive_image_blockname" => "logo"]));
        // line 12
        echo "  ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@organisms/site/site-header/_site-header-branding.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 12,  83 => 8,  81 => 6,  75 => 5,  67 => 4,  65 => 2,  63 => 1,  54 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set link_base_class = 'logo-link' %}
{% set link_url = logo_link__url|default('/') %}

{% extends \"@atoms/links/link/link.twig\" %}
  {% block link_content %}
    {% include \"@atoms/images/image/responsive-image.twig\" with {
      output_image_tag: true,
      image_src: header__logo_src,
      image_alt: 'Logo',
      responsive_image_blockname: 'logo',
    } %}
  {% endblock %}
", "@organisms/site/site-header/_site-header-branding.twig", "C:\\Users\\dell\\Sites\\devdesktop\\d8\\themes\\custom\\netflixdev\\components\\03-organisms\\site\\site-header\\_site-header-branding.twig");
    }
}
