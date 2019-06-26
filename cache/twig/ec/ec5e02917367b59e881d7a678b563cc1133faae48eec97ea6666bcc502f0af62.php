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

/* partials/header.html.twig */
class __TwigTemplate_609bcb200bdd9181d08b07f55b255f9da40085729a76e09b8940601409d7c976 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<header class=\"site-header outer \" style=\"background-image:  url('";
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "primaryImage", [])), "name", []), [], "array"), "url", []);
        echo "')\">
    <div class=\"inner\">
        <div class=\"site-header-content\">
            <h1 class=\"site-title\">
                <img class=\"site-logo\" src=\"";
        // line 5
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://assets/images/" . $this->getAttribute(($context["theme_config"] ?? null), "logo", [])));
        echo "\" alt=\"theme logo\"/>
            </h1>
            <h2 class=\"site-description\">";
        // line 7
        echo $this->getAttribute(($context["theme_config"] ?? null), "tagline", []);
        echo "</h2>
        </div>
        ";
        // line 9
        $this->loadTemplate("partials/navbar.twig", "partials/header.html.twig", 9)->display($context);
        // line 10
        echo "    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  48 => 9,  43 => 7,  38 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"site-header outer \" style=\"background-image:  url('{{ page.media[page.header.primaryImage|first.name].url }}')\">
    <div class=\"inner\">
        <div class=\"site-header-content\">
            <h1 class=\"site-title\">
                <img class=\"site-logo\" src=\"{{ url('theme://assets/images/' ~ theme_config.logo) }}\" alt=\"theme logo\"/>
            </h1>
            <h2 class=\"site-description\">{{ theme_config.tagline }}</h2>
        </div>
        {% include 'partials/navbar.twig' %}
    </div>
</header>", "partials/header.html.twig", "/usr/share/nginx/html/user/themes/casper/templates/partials/header.html.twig");
    }
}
