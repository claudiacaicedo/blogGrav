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

/* @Page:/usr/share/nginx/html/user/pages/01.blog/18.horarios-de-laboratorios */
class __TwigTemplate_9a6f7ae8b75d2d2a4e071abbfd325f25c1683d8c3437043c3f3e6c1ca764d9b1 extends \Twig\Template
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
<h5>Laboratorio 1</h5>";
    }

    public function getTemplateName()
    {
        return "@Page:/usr/share/nginx/html/user/pages/01.blog/18.horarios-de-laboratorios";
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
<h5>Laboratorio 1</h5>", "@Page:/usr/share/nginx/html/user/pages/01.blog/18.horarios-de-laboratorios", "");
    }
}
