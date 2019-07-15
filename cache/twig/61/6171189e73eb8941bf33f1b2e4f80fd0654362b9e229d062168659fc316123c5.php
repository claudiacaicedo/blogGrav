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

/* @Page:/usr/share/nginx/html/user/pages/01.blog/01.horarios-de-laboratorios */
class __TwigTemplate_8aaa752ad283818c10093e423a589ad3ce8f45f91d671cb998e3d747b3a78ab8 extends \Twig\Template
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
        echo "<h3>Horarios de Clases de Laboratorios</h3>
<p>Utilizando los siguientes marcadores podremos obtener los datos de 3 Laboratorios de la universidad.</p>
<h5>Laboratorio 1</h5>
<p><img alt=\"Patron1\" src=\"/user/pages/01.blog/01.horarios-de-laboratorios/letterB.png\" /></p>
<h5>Laboratorio 2</h5>
<p><img alt=\"Patron2\" src=\"/user/pages/01.blog/01.horarios-de-laboratorios/letterC.png\" /></p>
<h5>Laboratorio 3</h5>
<p><img alt=\"Patron3\" src=\"/user/pages/01.blog/01.horarios-de-laboratorios/letterD.png\" /></p>
<p><a href=\"https://grav.claudiacaicedo.com/user/Pattern/index.html\">Link</a> de la aplicación aquí.</p>";
    }

    public function getTemplateName()
    {
        return "@Page:/usr/share/nginx/html/user/pages/01.blog/01.horarios-de-laboratorios";
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
        return new Source("<h3>Horarios de Clases de Laboratorios</h3>
<p>Utilizando los siguientes marcadores podremos obtener los datos de 3 Laboratorios de la universidad.</p>
<h5>Laboratorio 1</h5>
<p><img alt=\"Patron1\" src=\"/user/pages/01.blog/01.horarios-de-laboratorios/letterB.png\" /></p>
<h5>Laboratorio 2</h5>
<p><img alt=\"Patron2\" src=\"/user/pages/01.blog/01.horarios-de-laboratorios/letterC.png\" /></p>
<h5>Laboratorio 3</h5>
<p><img alt=\"Patron3\" src=\"/user/pages/01.blog/01.horarios-de-laboratorios/letterD.png\" /></p>
<p><a href=\"https://grav.claudiacaicedo.com/user/Pattern/index.html\">Link</a> de la aplicación aquí.</p>", "@Page:/usr/share/nginx/html/user/pages/01.blog/01.horarios-de-laboratorios", "");
    }
}
