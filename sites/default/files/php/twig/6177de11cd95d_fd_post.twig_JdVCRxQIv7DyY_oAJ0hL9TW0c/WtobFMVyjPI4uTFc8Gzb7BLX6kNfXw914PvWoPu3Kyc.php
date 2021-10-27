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

/* @molecules/fd_post/fd_post.twig */
class __TwigTemplate_14274c097621890ef674b80dc5764cded392874fe9ad058b29a756513cb0acc0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 2, "include" => 3];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                [],
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@molecules/fd_post/fd_post.twig"));

        // line 1
        echo "<div class=\"fd_post_box\">
    ";
        // line 2
        if (($context["post_day"] ?? null)) {
            // line 3
            echo "        ";
            $this->loadTemplate("@atoms/date/date.twig", "@molecules/fd_post/fd_post.twig", 3)->display(twig_array_merge($context, ["date_base_class" =>             // line 4
($context["post_date_base_class"] ?? null), "day" =>             // line 5
($context["post_day"] ?? null), "month" =>             // line 6
($context["post_month"] ?? null)]));
            // line 7
            echo " 
    ";
        }
        // line 8
        echo " 
    <div class=\"post_content\"> 
        ";
        // line 10
        if (($context["post_heading"] ?? null)) {
            echo "    
            ";
            // line 11
            $this->loadTemplate("@atoms/text/headings/_heading.twig", "@molecules/fd_post/fd_post.twig", 11)->display(twig_array_merge($context, ["heading_level" => 3, "heading" =>             // line 13
($context["post_heading"] ?? null), "heading_url" =>             // line 14
($context["post_heading_url"] ?? null), "heading_base_class" =>             // line 15
($context["post_heading_base_class"] ?? null)]));
            // line 17
            echo "        ";
        }
        echo " 
        ";
        // line 18
        if (($context["post_paragraph_content"] ?? null)) {
            echo "    
            ";
            // line 19
            $this->loadTemplate("@atoms/text/text/01-paragraph.twig", "@molecules/fd_post/fd_post.twig", 19)->display(twig_array_merge($context, ["paragraph_content" =>             // line 20
($context["post_paragraph_content"] ?? null)]));
            // line 22
            echo "        ";
        }
        echo "   
    </div>     
</div>";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@molecules/fd_post/fd_post.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 22,  96 => 20,  95 => 19,  91 => 18,  86 => 17,  84 => 15,  83 => 14,  82 => 13,  81 => 11,  77 => 10,  73 => 8,  69 => 7,  67 => 6,  66 => 5,  65 => 4,  63 => 3,  61 => 2,  58 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"fd_post_box\">
    {% if post_day %}
        {% include \"@atoms/date/date.twig\" with {
            date_base_class: post_date_base_class, 
            day: post_day,
            month: post_month,
        } %} 
    {% endif %} 
    <div class=\"post_content\"> 
        {% if post_heading %}    
            {% include \"@atoms/text/headings/_heading.twig\" with {
                heading_level: 3,
                heading: post_heading,
                heading_url: post_heading_url,
                heading_base_class: post_heading_base_class,
            } %}
        {% endif %} 
        {% if post_paragraph_content %}    
            {% include \"@atoms/text/text/01-paragraph.twig\" with {
                paragraph_content: post_paragraph_content,
            } %}
        {% endif %}   
    </div>     
</div>", "@molecules/fd_post/fd_post.twig", "C:\\Users\\dell\\Sites\\devdesktop\\d8\\themes\\custom\\netflixdev\\components\\02-molecules\\fd_post\\fd_post.twig");
    }
}
