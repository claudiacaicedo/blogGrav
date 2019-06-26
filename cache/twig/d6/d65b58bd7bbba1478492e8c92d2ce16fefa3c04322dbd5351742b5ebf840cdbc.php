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
class __TwigTemplate_3d2a54cc692129886e4d9d51cdb8ef7e21897972de91ef7963617de1486a3cdf extends \Twig\Template
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
        echo "<h2>Introducción</h2>
<p>Cuando se plantea el crear un videojuego, no basta con tener la idea de como serán los personajes, fichas o incluso los escenarios, es realmente importante plantearse preguntas como: ¿Para qué plataformas quiero que funcione?, ¿Qué lenguajes puedo utilizar?, ¿Qué herramientas me serán útiles?, etc... Si se hace una busqueda rápida por Google podremos observar que la industria de los videojuegos es realmente enorme y que si queremos que nuestro juego destaque entre tanta competencia debemos escoger a los aliados correctos.</p>
<p>En este artículo se va a hablar de 6 frameworks javascript para la realización de video juegos en entorno web.</p>
<h3>Pixijs</h3>
<p>Pixijs es un renderizador 2D para WebGL que además cuenta con soporte para Canvas de HTML5 en caso de que nuestro navegador no sea compatible con WebGL.</p>
<p>pixi.js es una herramienta open sourse que nos proporciona una biblioteca 2D rápida, ligera y que permite: crear contenido interactivo para diferentes navegadores y dispositivos, la interacción con el ratón y es posible la interacción multi-táctil para móviles y tablets.</p>
<p>Entre sus principales características tenemos:</p>
<ul>
<li>Gráficos a pantalla completa</li>
<li>API fácil de usar</li>
<li>Soporta texture atlas</li>
<li>Filtros</li>
<li>Texto</li>
<li>Interacción Multi-táctil y con el ratón</li>
<li>Entre otros....</li>
</ul>
<p>Estas características lo hacen ideal para la creación videojuegos, pero también se puede utilizar en otras aplicaciones web y obtener efectos realmente sorprendentes.</p>
<p>Ejemplo de Videojuego hecho con Pixijs: <a href=\"https://www.goodboydigital.com/runpixierun/\">Runpixierun</a></p>
<h3></h3>";
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
        return new Source("<h2>Introducción</h2>
<p>Cuando se plantea el crear un videojuego, no basta con tener la idea de como serán los personajes, fichas o incluso los escenarios, es realmente importante plantearse preguntas como: ¿Para qué plataformas quiero que funcione?, ¿Qué lenguajes puedo utilizar?, ¿Qué herramientas me serán útiles?, etc... Si se hace una busqueda rápida por Google podremos observar que la industria de los videojuegos es realmente enorme y que si queremos que nuestro juego destaque entre tanta competencia debemos escoger a los aliados correctos.</p>
<p>En este artículo se va a hablar de 6 frameworks javascript para la realización de video juegos en entorno web.</p>
<h3>Pixijs</h3>
<p>Pixijs es un renderizador 2D para WebGL que además cuenta con soporte para Canvas de HTML5 en caso de que nuestro navegador no sea compatible con WebGL.</p>
<p>pixi.js es una herramienta open sourse que nos proporciona una biblioteca 2D rápida, ligera y que permite: crear contenido interactivo para diferentes navegadores y dispositivos, la interacción con el ratón y es posible la interacción multi-táctil para móviles y tablets.</p>
<p>Entre sus principales características tenemos:</p>
<ul>
<li>Gráficos a pantalla completa</li>
<li>API fácil de usar</li>
<li>Soporta texture atlas</li>
<li>Filtros</li>
<li>Texto</li>
<li>Interacción Multi-táctil y con el ratón</li>
<li>Entre otros....</li>
</ul>
<p>Estas características lo hacen ideal para la creación videojuegos, pero también se puede utilizar en otras aplicaciones web y obtener efectos realmente sorprendentes.</p>
<p>Ejemplo de Videojuego hecho con Pixijs: <a href=\"https://www.goodboydigital.com/runpixierun/\">Runpixierun</a></p>
<h3></h3>", "@Page:/usr/share/nginx/html/user/pages/01.blog/09.frameworks-para-juegos", "");
    }
}
