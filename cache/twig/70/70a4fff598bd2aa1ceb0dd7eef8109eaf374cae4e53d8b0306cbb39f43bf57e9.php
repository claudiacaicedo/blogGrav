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

/* partials/head.html.twig */
class __TwigTemplate_4734461c526a86f115f67449184612e556941766b8188e5619e3e652e6cd357b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<meta charset=\"utf-8\"/>
<title>
    ";
        // line 3
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "menu", [])) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "menu", []), "html");
        } elseif ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", [])) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []), "html");
        }
        echo " | ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "
</title>
";
        // line 5
        $this->loadTemplate("partials/metadata.html.twig", "partials/head.html.twig", 5)->display($context);
        // line 6
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0\"/>
";
        // line 7
        $context["image_parts"] = pathinfo($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "theme", []), "config", []), "theme", []), "favicon", []));
        // line 8
        echo "<link rel=\"icon\" type=\"image/png\" href=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon/favicon.png");
        echo "\"/>
<link rel=\"canonical\" href=\"";
        // line 9
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\"/>
";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "
  ";
        // line 30
        $this->displayBlock('assets', $context, $blocks);
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 11
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre" . ($context["compress"] ?? null))], "method");
        // line 12
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("spectre.exp")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-exp" . ($context["compress"] ?? null))], "method");
        }
        // line 13
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("spectre.icons")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-icons" . ($context["compress"] ?? null))], "method");
        }
        // line 14
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://assets/built/global.css"], "method");
        // line 15
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://assets/built/screen.css"], "method");
        // line 16
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://assets/built/screen.edited.css"], "method");
        // line 17
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://assets/built/syntax.css"], "method");
    }

    // line 20
    public function block_javascripts($context, array $blocks = [])
    {
        // line 21
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 22
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/infinitescroll.js", 1 => ["group" => "bottom"]], "method");
        // line 23
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/jquery.fitvids.js", 1 => ["group" => "bottom"]], "method");
        // line 24
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://unpkg.com/medium-zoom@1.0.2/dist/medium-zoom.min.js"], "method");
        // line 25
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://unpkg.com/tippy.js@3/dist/tippy.all.min.js"], "method");
        // line 26
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@14.2.1/dist/smooth-scroll.polyfills.min.js", 1 => 101], "method");
        // line 27
        echo "
";
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 30
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
      ";
        // line 32
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
  ";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    public function getTemplateName()
    {
        return "partials/head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 32,  145 => 31,  142 => 30,  132 => 27,  129 => 26,  126 => 25,  123 => 24,  120 => 23,  117 => 22,  114 => 21,  111 => 20,  106 => 17,  103 => 16,  100 => 15,  97 => 14,  92 => 13,  87 => 12,  84 => 11,  81 => 10,  76 => 30,  73 => 29,  71 => 20,  68 => 19,  66 => 10,  62 => 9,  57 => 8,  55 => 7,  52 => 6,  50 => 5,  37 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<meta charset=\"utf-8\"/>
<title>
    {% if page.header.menu %} {{ page.header.menu|e('html') }}{% elseif page.header.title %} {{ page.header.title|e('html') }}{% endif %} | {{ site.title|e('html') }}
</title>
{% include 'partials/metadata.html.twig' %}
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0\"/>
{% set image_parts = pathinfo(grav.theme.config.theme.favicon) %}
<link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon/favicon.png') }}\"/>
<link rel=\"canonical\" href=\"{{ page.url(true, true) }}\"/>
{% block stylesheets %}
    {% do assets.addCss('theme://css-compiled/spectre'~compress) %}
    {% if theme_var('spectre.exp') %}{% do assets.addCss('theme://css-compiled/spectre-exp'~compress) %}{% endif %}
    {% if theme_var('spectre.icons') %}{% do assets.addCss('theme://css-compiled/spectre-icons'~compress) %}{% endif %}
    {% do assets.addCss('theme://assets/built/global.css') %}
    {% do assets.addCss('theme://assets/built/screen.css') %}
    {% do assets.addCss('theme://assets/built/screen.edited.css') %}
    {% do assets.addCss('theme://assets/built/syntax.css') %}
{% endblock %}

{% block javascripts %}
    {% do assets.addJs('jquery', 101) %}
    {% do assets.addJs('theme://assets/js/infinitescroll.js', {group:'bottom'}) %}
    {% do assets.addJs('theme://assets/js/jquery.fitvids.js', {group:'bottom'}) %}
    {% do assets.addJs('https://unpkg.com/medium-zoom@1.0.2/dist/medium-zoom.min.js') %}
    {% do assets.addJs('https://unpkg.com/tippy.js@3/dist/tippy.all.min.js') %}
    {% do assets.addJs('https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@14.2.1/dist/smooth-scroll.polyfills.min.js', 101) %}

{% endblock %}

  {% block assets deferred %}
    {{ assets.css()|raw }}
      {{ assets.js()|raw }}
  {% endblock %}
", "partials/head.html.twig", "/usr/share/nginx/html/user/themes/casper/templates/partials/head.html.twig");
    }
}
