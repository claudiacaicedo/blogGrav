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

/* partials/nav-toggle.html.twig */
class __TwigTemplate_18db9ab2ae4192cdd3637fa3636c7c3a3b1a0c92b72cb401712dead8fc99a09a extends \Twig\Template
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
        echo "<button class=\"lines-button x\" type=\"button\" role=\"button\" aria-label=\"Toggle Navigation\" data-sidebar-mobile-toggle>
    <span class=\"lines\"></span>
</button>
";
    }

    public function getTemplateName()
    {
        return "partials/nav-toggle.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<button class=\"lines-button x\" type=\"button\" role=\"button\" aria-label=\"Toggle Navigation\" data-sidebar-mobile-toggle>
    <span class=\"lines\"></span>
</button>
", "partials/nav-toggle.html.twig", "C:\\xampp\\htdocs\\blogGrav\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\nav-toggle.html.twig");
    }
}