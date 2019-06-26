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

/* @Page:/usr/share/nginx/html/user/pages/01.blog/pruebas-w3-school */
class __TwigTemplate_4a04327140d7e8c5eb3ee56b3fb1054013f819951d9791f9809e8645daa120a8 extends \Twig\Template
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
        echo "<h2>¿Qué es HTML?</h2>
<p>HTML es un lenguaje de programación que se utiliza para el desarrollo de páginas de Internet. Se trata de la siglas que corresponden a HyperText Markup Language, es decir, Lenguaje de Marcas de Hipertexto.</p>
<h2>Resultado de la prueba</h2>
<p>Resultados del Quiz Html de W3school.
<img alt=\"my image\" src=\"/user/pages/01.blog/pruebas-w3-school/quizHTML.png\" /></p>";
    }

    public function getTemplateName()
    {
        return "@Page:/usr/share/nginx/html/user/pages/01.blog/pruebas-w3-school";
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
        return new Source("<h2>¿Qué es HTML?</h2>
<p>HTML es un lenguaje de programación que se utiliza para el desarrollo de páginas de Internet. Se trata de la siglas que corresponden a HyperText Markup Language, es decir, Lenguaje de Marcas de Hipertexto.</p>
<h2>Resultado de la prueba</h2>
<p>Resultados del Quiz Html de W3school.
<img alt=\"my image\" src=\"/user/pages/01.blog/pruebas-w3-school/quizHTML.png\" /></p>", "@Page:/usr/share/nginx/html/user/pages/01.blog/pruebas-w3-school", "");
    }
}
