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

/* @Page:/usr/share/nginx/html/user/pages/01.blog/08.svg1 */
class __TwigTemplate_18781f2a51b49c03885961362e011e8a60ced0d0cc6cc8a013c0ff1eeb49216b extends \Twig\Template
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
        echo "<h2>Agrega los colores correctos del Escudo del Ecuador a una imagen SVG.</h2>
<p>Abre la imagen del escudo incorrecto en un editor de texto, encuentra los errores y arréglalos. :D
<img alt=\"escudo_incorrecto\" src=\"/user/pages/01.blog/08.svg1/escudogris.svg\" />
<img alt=\"escudo_correcto\" src=\"/user/pages/01.blog/08.svg1/escudo.svg\" /></p>";
    }

    public function getTemplateName()
    {
        return "@Page:/usr/share/nginx/html/user/pages/01.blog/08.svg1";
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
        return new Source("<h2>Agrega los colores correctos del Escudo del Ecuador a una imagen SVG.</h2>
<p>Abre la imagen del escudo incorrecto en un editor de texto, encuentra los errores y arréglalos. :D
<img alt=\"escudo_incorrecto\" src=\"/user/pages/01.blog/08.svg1/escudogris.svg\" />
<img alt=\"escudo_correcto\" src=\"/user/pages/01.blog/08.svg1/escudo.svg\" /></p>", "@Page:/usr/share/nginx/html/user/pages/01.blog/08.svg1", "");
    }
}
