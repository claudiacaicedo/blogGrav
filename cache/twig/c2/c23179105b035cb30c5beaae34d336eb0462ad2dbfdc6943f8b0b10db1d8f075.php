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

/* @Page:/usr/share/nginx/html/user/pages/01.blog/02.ar-js */
class __TwigTemplate_b8df708cf5da85000c2244d01518a701be44ed6ddf78962e5f3f7469a8977662 extends \Twig\Template
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
        echo "<h4>AR.js</h4>
<h6>¿Qué es AR.js?</h6>
<p>Es un framework javascript que nos ayuda a crear aplicaciones de realidad aumentada dentro de los navegadores.</p>
<h6>Ejemplo de AR.js</h6>
<p>Para el siguiente ejemplo se necesita utilizar el siguiente patrón:
<img alt=\"Patron\" src=\"/user/pages/01.blog/02.ar-js/hiro.png\" /></p>
<p><img src=\"https://grav.claudiacaicedo.com/user/pages/01.blog/02.ar-js/arjs/index.html\" alt=\"Link\" /> de la app.!</p>";
    }

    public function getTemplateName()
    {
        return "@Page:/usr/share/nginx/html/user/pages/01.blog/02.ar-js";
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
        return new Source("<h4>AR.js</h4>
<h6>¿Qué es AR.js?</h6>
<p>Es un framework javascript que nos ayuda a crear aplicaciones de realidad aumentada dentro de los navegadores.</p>
<h6>Ejemplo de AR.js</h6>
<p>Para el siguiente ejemplo se necesita utilizar el siguiente patrón:
<img alt=\"Patron\" src=\"/user/pages/01.blog/02.ar-js/hiro.png\" /></p>
<p><img src=\"https://grav.claudiacaicedo.com/user/pages/01.blog/02.ar-js/arjs/index.html\" alt=\"Link\" /> de la app.!</p>", "@Page:/usr/share/nginx/html/user/pages/01.blog/02.ar-js", "");
    }
}
