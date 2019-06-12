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

/* @Page:/usr/share/nginx/html/user/pages/sidebar/about */
class __TwigTemplate_e9072a66336611a344c17be3b433efd473080fe5c4481d70860bf35994dd7f5c extends \Twig\Template
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
        echo "<p>Es una asignatura impartida en el 6to Semestre la carrera de Ingeniería en Sistemas de la Puce-Esmeraldas.</p>
<p>Este blog fue realizado de manera específica para esta materia y en el se pondran encontrar artículos relcionados con los difentes temas que iremos tocando durante el transcurso del semestre..</p>";
    }

    public function getTemplateName()
    {
        return "@Page:/usr/share/nginx/html/user/pages/sidebar/about";
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
        return new Source("<p>Es una asignatura impartida en el 6to Semestre la carrera de Ingeniería en Sistemas de la Puce-Esmeraldas.</p>
<p>Este blog fue realizado de manera específica para esta materia y en el se pondran encontrar artículos relcionados con los difentes temas que iremos tocando durante el transcurso del semestre..</p>", "@Page:/usr/share/nginx/html/user/pages/sidebar/about", "");
    }
}
