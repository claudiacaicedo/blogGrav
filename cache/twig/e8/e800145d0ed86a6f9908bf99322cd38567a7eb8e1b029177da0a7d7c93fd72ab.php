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
class __TwigTemplate_0a86301c155972d94c79612d31905e9d5f29c54302070387bb133f47d8d4642b extends \Twig\Template
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
        echo "<h4>¿Qué es AR.js?</h4>
<p>Es un framework javascript que nos ayuda a crear aplicaciones de realidad aumentada dentro de los navegadores.</p>
<h4>Ejemplo de AR.js</h4>
<p>Para el siguiente ejemplo se necesita utilizar el siguiente patrón:</p>
<p><img alt=\"Patron\" src=\"/user/pages/01.blog/02.ar-js/hiro.png\" /></p>
<p><a href=\"https://grav.claudiacaicedo.com/user/pages/01.blog/02.ar-js/arjs/index.html\">Link</a> de la app.!</p>";
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
        return new Source("<h4>¿Qué es AR.js?</h4>
<p>Es un framework javascript que nos ayuda a crear aplicaciones de realidad aumentada dentro de los navegadores.</p>
<h4>Ejemplo de AR.js</h4>
<p>Para el siguiente ejemplo se necesita utilizar el siguiente patrón:</p>
<p><img alt=\"Patron\" src=\"/user/pages/01.blog/02.ar-js/hiro.png\" /></p>
<p><a href=\"https://grav.claudiacaicedo.com/user/pages/01.blog/02.ar-js/arjs/index.html\">Link</a> de la app.!</p>", "@Page:/usr/share/nginx/html/user/pages/01.blog/02.ar-js", "");
    }
}
