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

/* @Page:/usr/share/nginx/html/user/pages/01.blog/07.svg2 */
class __TwigTemplate_7837e670df267e54c5a333b87c7157fe3ca6238198acdab197bf1fd3905423a6 extends \Twig\Template
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
        echo "<h2>Crea la bandera de Jamaica en formato SVG.</h2>
<p>Utilizando la documentación provista por W3School crea la imagen de la bandera de Jamaica.  :D
<img alt=\"Bandera_jamaica\" src=\"/user/pages/01.blog/07.svg2/jamaica.svg\" /></p>";
    }

    public function getTemplateName()
    {
        return "@Page:/usr/share/nginx/html/user/pages/01.blog/07.svg2";
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
        return new Source("<h2>Crea la bandera de Jamaica en formato SVG.</h2>
<p>Utilizando la documentación provista por W3School crea la imagen de la bandera de Jamaica.  :D
<img alt=\"Bandera_jamaica\" src=\"/user/pages/01.blog/07.svg2/jamaica.svg\" /></p>", "@Page:/usr/share/nginx/html/user/pages/01.blog/07.svg2", "");
    }
}
