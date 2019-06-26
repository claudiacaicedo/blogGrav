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

/* default_alt.html.twig */
class __TwigTemplate_138edf2e6631319caa4dafd837cbb81ee981cae325a579a07c6cad51ceea345a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["banner"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        // line 3
        $context["template_body_classes"] = "error404 is-not-singular not-front-page not-scrolled";
        // line 4
        $context["singular"] = false;
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default_alt.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 6
        echo "<main id=\"main\" class=\"site-main clearfix\" role=\"main\">
  <section class=\"alt-content\">
    <header class=\"page-header\">
      <h1 class=\"page-title\">";
        // line 9
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
        echo "</h1>
    </header>
    <p>";
        // line 11
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "</p>
  </section>
</main>
";
    }

    public function getTemplateName()
    {
        return "default_alt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 11,  54 => 9,  49 => 6,  46 => 5,  41 => 1,  39 => 4,  37 => 3,  35 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% set banner = page.media.images|first %}
{% set template_body_classes = 'error404 is-not-singular not-front-page not-scrolled' %}
{% set singular = false %}
{% block content %}
<main id=\"main\" class=\"site-main clearfix\" role=\"main\">
  <section class=\"alt-content\">
    <header class=\"page-header\">
      <h1 class=\"page-title\">{{ page.header.title }}</h1>
    </header>
    <p>{{ page.content }}</p>
  </section>
</main>
{% endblock %}
", "default_alt.html.twig", "/usr/share/nginx/html/user/themes/receptar/templates/default_alt.html.twig");
    }
}
