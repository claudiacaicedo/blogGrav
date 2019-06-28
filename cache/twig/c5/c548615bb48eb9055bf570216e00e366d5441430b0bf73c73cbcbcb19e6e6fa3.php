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

/* partials/base.html.twig */
class __TwigTemplate_603d795afce3579130e26b3c64bb4f90c56d7cef8754b88e8872ca7617d1969f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", [])) : ("en"));
        echo "\">
<head>
    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 8
        echo "</head>
<body class=\"";
        // line 9
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        echo "\">

";
        // line 12
        echo "<div id=\"app\">
    ";
        // line 13
        $this->displayBlock('content', $context, $blocks);
        // line 14
        echo "</div>
";
        // line 15
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 15)->display($context);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('bottom', $context, $blocks);
        // line 20
        echo "

</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        // line 6
        echo "        ";
        $this->loadTemplate("partials/head.html.twig", "partials/base.html.twig", 6)->display($context);
        // line 7
        echo "    ";
    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
    }

    // line 17
    public function block_bottom($context, array $blocks = [])
    {
        // line 18
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo " 
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 18,  91 => 17,  86 => 13,  82 => 7,  79 => 6,  76 => 5,  68 => 20,  66 => 17,  63 => 16,  61 => 15,  58 => 14,  56 => 13,  53 => 12,  48 => 9,  45 => 8,  43 => 5,  38 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
<head>
    {% block head %}
        {% include 'partials/head.html.twig' %}
    {% endblock %}
</head>
<body class=\"{{ page.header.body_classes }}\">

{# Wrap content in #app to allow vue components #}
<div id=\"app\">
    {% block content %}{% endblock %}
</div>
{% include 'partials/footer.html.twig' %}

{% block bottom %}
{{ assets.js('bottom')|raw }} 
{% endblock %}


</body>
</html>
", "partials/base.html.twig", "/usr/share/nginx/html/user/themes/casper/templates/partials/base.html.twig");
    }
}
