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

/* themes/custom/netflixdev/templates/views/views-view-fields--blogs.html.twig */
class __TwigTemplate_b223de1c4fe81bdce00fec19f4e2c7ddabe12af97ab45e594026078355375e16 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 33, "include" => 37];
        $filters = ["escape" => 34, "striptags" => 39];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include'],
                ['escape', 'striptags'],
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/custom/netflixdev/templates/views/views-view-fields--blogs.html.twig"));

        // line 32
        echo "
  ";
        // line 33
        ob_start();
        // line 34
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_image", []), "content", [])), "html", null, true);
        echo "
  ";
        $context["image"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 36
        echo "      
  ";
        // line 37
        $this->loadTemplate("@molecules/card/card.twig", "themes/custom/netflixdev/templates/views/views-view-fields--blogs.html.twig", 37)->display(twig_array_merge($context, ["blog" => true, "blog_card__image__src" => strip_tags(        // line 39
($context["image"] ?? null)), "blog_card__heading" => $this->getAttribute($this->getAttribute(        // line 40
($context["fields"] ?? null), "title", []), "content", []), "blog_card__subheading" => $this->getAttribute($this->getAttribute(        // line 41
($context["fields"] ?? null), "created", []), "content", []), "blog_card__heading__link" => "#", "blog_card__heading__base_class" => "post-content-heading", "blog_card__body" => $this->getAttribute($this->getAttribute(        // line 44
($context["fields"] ?? null), "body", []), "content", []), "blog_card__button1__content" => $this->getAttribute($this->getAttribute(        // line 45
($context["fields"] ?? null), "field_button_1", []), "content", []), "blog_card__button1_url" => "#", "blog_card_button1_fonticon_base_class" => "fas fa-file-alt", "blog_card__button1__modifiers" => "primary", "blog_card__button2__content" => $this->getAttribute($this->getAttribute(        // line 49
($context["fields"] ?? null), "field_button_2", []), "content", []), "blog_card__button2_url" => "#", "blog_card_button2_fonticon_base_class" => "far fa-comment", "blog_card__button2__modifiers" => "secondry"]));
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/netflixdev/templates/views/views-view-fields--blogs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 49,  77 => 45,  76 => 44,  75 => 41,  74 => 40,  73 => 39,  72 => 37,  69 => 36,  63 => 34,  61 => 33,  58 => 32,);
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
 * Theme override to display all the fields in a row.
 *
 * Available variables:
 * - view: The view in use.
 * - fields: A list of fields, each one contains:
 *   - content: The output of the field.
 *   - raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - class: The safe class ID to use.
 *   - handler: The Views field handler controlling this field.
 *   - inline: Whether or not the field should be inline.
 *   - wrapper_element: An HTML element for a wrapper.
 *   - wrapper_attributes: List of attributes for wrapper element.
 *   - separator: An optional separator that may appear before a field.
 *   - label: The field's label text.
 *   - label_element: An HTML element for a label wrapper.
 *   - label_attributes: List of attributes for label wrapper.
 *   - label_suffix: Colon after the label.
 *   - element_type: An HTML element for the field content.
 *   - element_attributes: List of attributes for HTML element for field content.
 *   - has_label_colon: A boolean indicating whether to display a colon after
 *     the label.
 *   - element_type: An HTML element for the field content.
 *   - element_attributes: List of attributes for HTML element for field content.
 * - row: The raw result from the query, with all data it fetched.
 *
 * @see template_preprocess_views_view_fields()
 */
#}

  {% set image %}
    {{ fields.field_image.content }}
  {% endset %}
      
  {% include \"@molecules/card/card.twig\" with {
      blog: true,
      blog_card__image__src: image|striptags,
      blog_card__heading: fields.title.content,
      blog_card__subheading: fields.created.content,
      blog_card__heading__link: '#',
      blog_card__heading__base_class: 'post-content-heading',
      blog_card__body: fields.body.content, 
      blog_card__button1__content: fields.field_button_1.content,
      blog_card__button1_url: '#',
      blog_card_button1_fonticon_base_class: 'fas fa-file-alt',
      blog_card__button1__modifiers: 'primary',
      blog_card__button2__content: fields.field_button_2.content,
      blog_card__button2_url: '#',
      blog_card_button2_fonticon_base_class: 'far fa-comment',
      blog_card__button2__modifiers: 'secondry',   
  } %}
", "themes/custom/netflixdev/templates/views/views-view-fields--blogs.html.twig", "C:\\Users\\dell\\Sites\\devdesktop\\d8\\themes\\custom\\netflixdev\\templates\\views\\views-view-fields--blogs.html.twig");
    }
}
