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

/* @atoms/images/image/_picture.twig */
class __TwigTemplate_26bd53a92521bf11b73a6ea5377a8cd60aebf91adf9a4847eeb66f03e2ad0494 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "if" => 6, "for" => 12, "include" => 18];
        $filters = ["default" => 1, "escape" => 13];
        $functions = ["bem" => 4];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'include'],
                ['default', 'escape'],
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@atoms/images/image/_picture.twig"));

        // line 1
        $context["picture_base_class"] = (((isset($context["picture_base_class"]) || array_key_exists("picture_base_class", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["picture_base_class"] ?? null)), "picture")) : ("picture"));
        // line 2
        echo "
<picture
  ";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, $this->sandbox->ensureToStringAllowed(($context["picture_base_class"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["picture_modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["picture_blockname"] ?? null))));
        echo "
>
  ";
        // line 6
        if (($context["sources"] ?? null)) {
            // line 7
            echo "    ";
            // line 11
            echo "    <!--[if IE 9]><video style=\"display: none;\"><![endif]-->
    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sources"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["source_attributes"]) {
                // line 13
                echo "      <source";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["source_attributes"]), "html", null, true);
                echo "/>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['source_attributes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    <!--[if IE 9]></video><![endif]-->
  ";
        }
        // line 17
        echo "  ";
        // line 18
        echo "  ";
        $this->loadTemplate("@atoms/images/image/_image.twig", "@atoms/images/image/_picture.twig", 18)->display(twig_array_merge($context, ["image_blockname" => ((        // line 19
(isset($context["picture_image_blockname"]) || array_key_exists("picture_image_blockname", $context))) ? (_twig_default_filter(($context["picture_image_blockname"] ?? null), ($context["picture_blockname"] ?? null))) : (($context["picture_blockname"] ?? null)))]));
        // line 21
        echo "</picture>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@atoms/images/image/_picture.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 21,  97 => 19,  95 => 18,  93 => 17,  89 => 15,  80 => 13,  76 => 12,  73 => 11,  71 => 7,  69 => 6,  64 => 4,  60 => 2,  58 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set picture_base_class = picture_base_class|default('picture') %}

<picture
  {{ bem(picture_base_class, picture_modifiers, picture_blockname) }}
>
  {% if sources %}
    {#
    Internet Explorer 9 doesn't recognise source elements that are wrapped in
    picture tags. See http://scottjehl.github.io/picturefill/#ie9
    #}
    <!--[if IE 9]><video style=\"display: none;\"><![endif]-->
    {% for source_attributes in sources %}
      <source{{ source_attributes }}/>
    {% endfor %}
    <!--[if IE 9]></video><![endif]-->
  {% endif %}
  {# The controlling image, with the fallback image in srcset. #}
  {% include \"@atoms/images/image/_image.twig\" with {
    image_blockname: picture_image_blockname|default(picture_blockname),
  } %}
</picture>
", "@atoms/images/image/_picture.twig", "C:\\Users\\dell\\Sites\\devdesktop\\d8\\themes\\custom\\netflixdev\\components\\01-atoms\\images\\image\\_picture.twig");
    }
}
