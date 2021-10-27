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

/* @molecules/menus/main-menu/main-menu.twig */
class __TwigTemplate_6be57846fea55dde236378f2fd859348fe0485ce563eaa394e14a56aa78d349d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 6];
        $filters = ["escape" => 1];
        $functions = ["attach_library" => 1];

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['escape'],
                ['attach_library']
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@molecules/menus/main-menu/main-menu.twig"));

        // line 1
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("netflixdev/main-menu"), "html", null, true);
        echo "

<nav >
  <a href=\"#\" id=\"toggle-expand\" class=\"toggle-expand\">
    <span class=\"toggle-expand__open\">
      ";
        // line 6
        $this->loadTemplate("@atoms/images/icons/_icon.twig", "@molecules/menus/main-menu/main-menu.twig", 6)->display(twig_array_merge($context, ["icon_base_class" => "icon", "icon_blockname" => "toggle-expand", "icon_name" => "menu"]));
        // line 11
        echo "      <span class=\"toggle-expand__text\">Main Menu</span>
    </span>
    <span class=\"toggle-expand__close\">
      <span class=\"toggle-expand__text\">Close</span>
    </span>
  </a>
  <div id=\"main-nav\" class=\"main-nav\">
    ";
        // line 18
        $this->loadTemplate("@molecules/menus/_menu.twig", "@molecules/menus/main-menu/main-menu.twig", 18)->display(twig_array_merge($context, ["menu_class" => "main-menu", "items" =>         // line 20
($context["menu_items"] ?? null)]));
        // line 22
        echo "  </div>
</nav>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@molecules/menus/main-menu/main-menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 22,  78 => 20,  77 => 18,  68 => 11,  66 => 6,  58 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ attach_library('netflixdev/main-menu') }}

<nav >
  <a href=\"#\" id=\"toggle-expand\" class=\"toggle-expand\">
    <span class=\"toggle-expand__open\">
      {% include \"@atoms/images/icons/_icon.twig\" with {
        icon_base_class: \"icon\",
        icon_blockname: \"toggle-expand\",
        icon_name: \"menu\",
      } %}
      <span class=\"toggle-expand__text\">Main Menu</span>
    </span>
    <span class=\"toggle-expand__close\">
      <span class=\"toggle-expand__text\">Close</span>
    </span>
  </a>
  <div id=\"main-nav\" class=\"main-nav\">
    {% include \"@molecules/menus/_menu.twig\" with {
      menu_class: \"main-menu\",
      items: menu_items,
    } %}
  </div>
</nav>
", "@molecules/menus/main-menu/main-menu.twig", "C:\\Users\\dell\\Sites\\devdesktop\\d8\\themes\\custom\\netflixdev\\components\\02-molecules\\menus\\main-menu\\main-menu.twig");
    }
}
