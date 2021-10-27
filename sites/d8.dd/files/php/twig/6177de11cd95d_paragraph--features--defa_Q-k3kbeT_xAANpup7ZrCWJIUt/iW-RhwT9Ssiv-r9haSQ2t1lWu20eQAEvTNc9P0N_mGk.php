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

/* themes/custom/netflixdev/templates/content/paragraph--features--default.html.twig */
class __TwigTemplate_7958c196d5f024e84aa367453c1ee8718037dea1a28ccd9e0a4dc34b300aa142 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 41, "include" => 72];
        $filters = ["escape" => 42, "striptags" => 74, "default" => 78];
        $functions = ["bem" => 71];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include'],
                ['escape', 'striptags', 'default'],
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/custom/netflixdev/templates/content/paragraph--features--default.html.twig"));

        // line 41
        ob_start();
        // line 42
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_feature_icon", [])), "html", null, true);
        echo "
";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 44
        echo "
";
        // line 70
        echo "
<div ";
        // line 71
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "feature", $this->sandbox->ensureToStringAllowed(($context["feature_box__modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["feature_box__blockname"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["feature_box__extra_classes"] ?? null))));
        echo ">
    ";
        // line 72
        $this->loadTemplate("@atoms/images/Font_icon/awesome_font_icon.twig", "themes/custom/netflixdev/templates/content/paragraph--features--default.html.twig", 72)->display(twig_array_merge($context, ["fonticon_base_class" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 73
($context["content"] ?? null), "field_icon_class", []), 0, []), "#markup", [], "array"), "svg_base_class" => strip_tags(        // line 74
($context["icon"] ?? null))]));
        // line 76
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
    ";
        // line 77
        $this->loadTemplate("@atoms/text/headings/_heading.twig", "themes/custom/netflixdev/templates/content/paragraph--features--default.html.twig", 77)->display(twig_array_merge($context, ["heading_base_class" => (($this->getAttribute(        // line 78
($context["item"] ?? null), "feature_box__heading__base_class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "feature_box__heading__base_class", []), "heading")) : ("heading")), "heading_level" => 2, "heading" => $this->getAttribute(        // line 80
($context["content"] ?? null), "field_title", [])]));
        // line 82
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
    ";
        // line 83
        $this->loadTemplate("@atoms/text/text/01-paragraph.twig", "themes/custom/netflixdev/templates/content/paragraph--features--default.html.twig", 83)->display(twig_array_merge($context, ["paragraph_content" => $this->getAttribute(        // line 84
($context["content"] ?? null), "field_body", [])]));
        // line 86
        echo "</div>  ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/netflixdev/templates/content/paragraph--features--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 86,  94 => 84,  93 => 83,  88 => 82,  86 => 80,  85 => 78,  84 => 77,  79 => 76,  77 => 74,  76 => 73,  75 => 72,  71 => 71,  68 => 70,  65 => 44,  60 => 42,  58 => 41,);
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
 * Default theme implementation to display a paragraph.
 *
 * Available variables:
 * - paragraph: Full paragraph entity.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - paragraph.getCreatedTime() will return the paragraph creation timestamp.
 *   - paragraph.id(): The paragraph ID.
 *   - paragraph.bundle(): The type of the paragraph, for example, \"image\" or \"text\".
 *   - paragraph.getOwnerId(): The user ID of the paragraph author.
 *   See Drupal\\paragraphs\\Entity\\Paragraph for a full list of public properties
 *   and methods for the paragraph object.
 * - content: All paragraph items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - paragraphs: The current template type (also known as a \"theming hook\").
 *   - paragraphs--type-[type]: The current paragraphs type. For example, if the paragraph is an
 *     \"Image\" it would result in \"paragraphs--type--image\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - paragraphs--view-mode--[view_mode]: The View Mode of the paragraph; for example, a
 *     preview would result in: \"paragraphs--view-mode--preview\", and
 *     default: \"paragraphs--view-mode--default\".
 * - view_mode: View mode; for example, \"preview\" or \"full\".
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_paragraph()
 *
 * @ingroup themeable
 */
#}
{% set icon %}
{{ content.field_feature_icon }}
{% endset %}

{# {% if paragraph.index == 0 %}
{% include '@molecules/feature/feature.twig' with {
  feature_fonticon_base_class: 'gear',
  feature_svg_base_class: icon|striptags|trim,
  feature_box__heading: content.field_title,
  feature_box__heading__base_class: 'services-content-heading',
  feature_box__body: content.field_body,  
} %}
{% elseif paragraph.index == 1 %}
{% include '@molecules/feature/feature.twig' with {
  feature_fonticon_base_class: 'flash',
  feature_svg_base_class: icon|striptags|trim,
  feature_box__heading: content.field_title,
  feature_box__heading__base_class: 'services-content-heading',
  feature_box__body: content.field_body,  
} %}
{% elseif paragraph.index == 2 %}
{% include '@molecules/feature/feature.twig' with {
  feature_fonticon_base_class: 'star',
  feature_svg_base_class: icon|striptags|trim,
  feature_box__heading: content.field_title,
  feature_box__heading__base_class: 'services-content-heading',
  feature_box__body: content.field_body,  
} %}
{% endif %} #}

<div {{ bem('feature', feature_box__modifiers, feature_box__blockname, feature_box__extra_classes) }}>
    {% include \"@atoms/images/Font_icon/awesome_font_icon.twig\" with {
      fonticon_base_class: content.field_icon_class.0['#markup'],
      svg_base_class: icon|striptags,
    } %}
    {{ title_prefix }}
    {% include \"@atoms/text/headings/_heading.twig\" with {
      heading_base_class: item.feature_box__heading__base_class|default('heading'),
      heading_level: 2,
      heading: content.field_title,
    } %}
    {{ title_suffix }}
    {% include \"@atoms/text/text/01-paragraph.twig\" with {
      paragraph_content: content.field_body,
    } %}
</div>  ", "themes/custom/netflixdev/templates/content/paragraph--features--default.html.twig", "C:\\Users\\dell\\Sites\\devdesktop\\d8\\themes\\custom\\netflixdev\\templates\\content\\paragraph--features--default.html.twig");
    }
}
