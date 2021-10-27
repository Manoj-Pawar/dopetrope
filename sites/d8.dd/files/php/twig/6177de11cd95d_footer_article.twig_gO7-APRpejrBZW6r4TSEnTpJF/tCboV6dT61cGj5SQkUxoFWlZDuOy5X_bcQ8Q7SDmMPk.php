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

/* @molecules/footer_article/footer_article.twig */
class __TwigTemplate_e80243207f10c0f078f1fab283478a121b3918e15a0c15145eb76e356adfdfe9 extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@molecules/footer_article/footer_article.twig"));

        // line 1
        echo "<div class=\"footer_article_box\">
    ";
        // line 2
        if (($context["footer_article_image_src"] ?? null)) {
            // line 3
            echo "        ";
            $this->loadTemplate("@atoms/images/image/_image.twig", "@molecules/footer_article/footer_article.twig", 3)->display(twig_array_merge($context, ["image_src" =>             // line 4
($context["footer_article_image_src"] ?? null), "image_alt" =>             // line 5
($context["footer_article_image_alt"] ?? null)]));
            // line 7
            echo "    ";
        }
        // line 8
        echo "    ";
        if (($context["footer_article_paragraph_content"] ?? null)) {
            // line 9
            echo "        ";
            $this->loadTemplate("@atoms/text/text/01-paragraph.twig", "@molecules/footer_article/footer_article.twig", 9)->display(twig_array_merge($context, ["paragraph_content" =>             // line 10
($context["footer_article_paragraph_content"] ?? null)]));
            // line 12
            echo "    ";
        }
        // line 13
        echo "    ";
        if (($context["footer_article_button_url"] ?? null)) {
            // line 14
            echo "        ";
            $this->loadTemplate("@atoms/buttons/button.twig", "@molecules/footer_article/footer_article.twig", 14)->display(twig_array_merge($context, ["button_content" =>             // line 15
($context["footer_article_button_content"] ?? null), "button_url" =>             // line 16
($context["footer_article_button_url"] ?? null), "button_modifiers" =>             // line 17
($context["footer_article_button_modifiers"] ?? null)]));
            // line 19
            echo "    ";
        }
        // line 20
        echo "</div>";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@molecules/footer_article/footer_article.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 20,  90 => 19,  88 => 17,  87 => 16,  86 => 15,  84 => 14,  81 => 13,  78 => 12,  76 => 10,  74 => 9,  71 => 8,  68 => 7,  66 => 5,  65 => 4,  63 => 3,  61 => 2,  58 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"footer_article_box\">
    {% if footer_article_image_src %}
        {% include \"@atoms/images/image/_image.twig\" with {
            image_src: footer_article_image_src,
            image_alt: footer_article_image_alt,
        } %}
    {% endif %}
    {% if footer_article_paragraph_content %}
        {% include \"@atoms/text/text/01-paragraph.twig\" with {
            paragraph_content: footer_article_paragraph_content,
        } %}
    {% endif %}
    {% if footer_article_button_url %}
        {% include \"@atoms/buttons/button.twig\" with {
            button_content: footer_article_button_content,
            button_url: footer_article_button_url,
            button_modifiers: footer_article_button_modifiers,
        } %}
    {% endif %}
</div>", "@molecules/footer_article/footer_article.twig", "C:\\Users\\dell\\Sites\\devdesktop\\d8\\themes\\custom\\netflixdev\\components\\02-molecules\\footer_article\\footer_article.twig");
    }
}
