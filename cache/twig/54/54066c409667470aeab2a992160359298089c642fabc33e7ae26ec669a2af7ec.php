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

/* @Page:/usr/share/nginx/html/user/pages/01.blog/quiz-de-javascript */
class __TwigTemplate_769075d582798035b04d4a0912586edf1bfaac7bb4dc09090b378d66aad56075 extends \Twig\Template
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
        echo "<h2>¿Qué es JavaScript?</h2>
<p>JavaScript es un lenguaje de programación interpretado, dialecto del estándar ECMAScript. Se define como orientado a objetos, ​ basado en prototipos, imperativo, débilmente tipado y dinámico.</p>
<h2>Resultado de la prueba</h2>
<p>Resultados del Quiz JavaScript de W3school.
<img alt=\"my image\" src=\"/user/pages/01.blog/quiz-de-javascript/quizHTML.png\" /></p>";
    }

    public function getTemplateName()
    {
        return "@Page:/usr/share/nginx/html/user/pages/01.blog/quiz-de-javascript";
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
        return new Source("<h2>¿Qué es JavaScript?</h2>
<p>JavaScript es un lenguaje de programación interpretado, dialecto del estándar ECMAScript. Se define como orientado a objetos, ​ basado en prototipos, imperativo, débilmente tipado y dinámico.</p>
<h2>Resultado de la prueba</h2>
<p>Resultados del Quiz JavaScript de W3school.
<img alt=\"my image\" src=\"/user/pages/01.blog/quiz-de-javascript/quizHTML.png\" /></p>", "@Page:/usr/share/nginx/html/user/pages/01.blog/quiz-de-javascript", "");
    }
}
