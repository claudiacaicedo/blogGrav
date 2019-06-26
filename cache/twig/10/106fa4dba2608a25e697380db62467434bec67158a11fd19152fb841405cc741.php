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

/* @Page:/usr/share/nginx/html/user/pages/01.blog/09.frameworks-para-juegos */
class __TwigTemplate_c284ac2df845fc00ef597d8cb7ad0752818405d2d9b697e797805b1bc428da1c extends \Twig\Template
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
        echo "<h3>Introducción</h3>
<p>Cuando se plantea el crear un videojuego, no basta con tener la idea de como serán los personajes, fichas o incluso los escenarios, es realmente importante plantearse preguntas como: ¿Para qué plataformas quiero que funcione?, ¿Qué lenguajes puedo utilizar?, ¿Qué herramientas me serán útiles?, etc... Si se hace una busqueda rápida por Google podremos observar que la industria de los videojuegos es realmente enorme y que si queremos que nuestro juego destaque entre tanta competencia debemos escoger a los aliados correctos.</p>
<p>En este artículo se va a hablar de 6 frameworks javascript para la realización de video juegos en entorno web.</p>";
    }

    public function getTemplateName()
    {
        return "@Page:/usr/share/nginx/html/user/pages/01.blog/09.frameworks-para-juegos";
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
        return new Source("<h3>Introducción</h3>
<p>Cuando se plantea el crear un videojuego, no basta con tener la idea de como serán los personajes, fichas o incluso los escenarios, es realmente importante plantearse preguntas como: ¿Para qué plataformas quiero que funcione?, ¿Qué lenguajes puedo utilizar?, ¿Qué herramientas me serán útiles?, etc... Si se hace una busqueda rápida por Google podremos observar que la industria de los videojuegos es realmente enorme y que si queremos que nuestro juego destaque entre tanta competencia debemos escoger a los aliados correctos.</p>
<p>En este artículo se va a hablar de 6 frameworks javascript para la realización de video juegos en entorno web.</p>", "@Page:/usr/share/nginx/html/user/pages/01.blog/09.frameworks-para-juegos", "");
    }
}
