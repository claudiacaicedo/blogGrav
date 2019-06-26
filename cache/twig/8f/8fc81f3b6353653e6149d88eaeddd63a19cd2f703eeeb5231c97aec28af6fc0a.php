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

/* @Page:/usr/share/nginx/html/user/pages/01.blog/08.juevo-canvas */
class __TwigTemplate_d8aa6a12560f79fffa0535a44955d368bafc24ebe90789156d7ef7aad8c8b39f extends \Twig\Template
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
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
    }

    public function getTemplateName()
    {
        return "@Page:/usr/share/nginx/html/user/pages/01.blog/08.juevo-canvas";
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
        return new Source("<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">", "@Page:/usr/share/nginx/html/user/pages/01.blog/08.juevo-canvas", "");
    }
}
