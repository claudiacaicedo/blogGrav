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
class __TwigTemplate_ab0693d8587de2c341604ee1c5a5abc4d3de372f45d9d7126485f4e942fe8541 extends \Twig\Template
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
        echo "<pre><code>&lt;!DOCTYPE html&gt;</code></pre>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
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
        return new Source("<pre><code>&lt;!DOCTYPE html&gt;</code></pre>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">", "@Page:/usr/share/nginx/html/user/pages/01.blog/08.juevo-canvas", "");
    }
}
