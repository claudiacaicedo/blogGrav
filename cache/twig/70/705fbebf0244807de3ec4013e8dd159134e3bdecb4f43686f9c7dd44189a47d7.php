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

/* @Page:/usr/share/nginx/html/user/pages/01.blog/06.svg2 */
class __TwigTemplate_8d9ec122126919874abedb57bf453d367cebe8e65e739b33b7a842eacbe122a4 extends \Twig\Template
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
<p><img alt=\"Bandera_jamaica\" src=\"/user/pages/01.blog/06.svg2/jamaica.svg\" /></p>";
    }

    public function getTemplateName()
    {
        return "@Page:/usr/share/nginx/html/user/pages/01.blog/06.svg2";
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
<p><img alt=\"Bandera_jamaica\" src=\"/user/pages/01.blog/06.svg2/jamaica.svg\" /></p>", "@Page:/usr/share/nginx/html/user/pages/01.blog/06.svg2", "");
    }
}
