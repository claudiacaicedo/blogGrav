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

/* @Page:/usr/share/nginx/html/user/pages/01.blog/03.juevo-canvas */
class __TwigTemplate_efca47b58a7913940d788d3889b25ec2bf90c4c323baca85bb64419ce16963e7 extends \Twig\Template
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
        echo "<h6>Juego de flappy Bird hecho con canvas.</h6>
<div>
    <iframe src=\"https://grav.claudiacaicedo.com/es/blog/juevo-canvas/juego.html\" height=\"300\" width=\"500\"></iframe>
</div>
<p>El juego debe estar on focus.</p>";
    }

    public function getTemplateName()
    {
        return "@Page:/usr/share/nginx/html/user/pages/01.blog/03.juevo-canvas";
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
        return new Source("<h6>Juego de flappy Bird hecho con canvas.</h6>
<div>
    <iframe src=\"https://grav.claudiacaicedo.com/es/blog/juevo-canvas/juego.html\" height=\"300\" width=\"500\"></iframe>
</div>
<p>El juego debe estar on focus.</p>", "@Page:/usr/share/nginx/html/user/pages/01.blog/03.juevo-canvas", "");
    }
}
