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

/* @Page:/usr/share/nginx/html/user/pages/01.blog/03.tarea-figura */
class __TwigTemplate_f5919a51c70533c6df011f8fec5d1c2ea87915a42ef3c5bcbc71a214922d9234 extends \Twig\Template
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
        echo "<h4>Ingresar un número y observar la figura</h4>
<p>&lt;input type=\"number\" id=\"number\" name=\"number\"/ onkeyup=\"myFunction()\"&gt;
<code id=\"figura\"></code></p>
<script>
function myFunction() {
    //Imprimir figuras de triangulos formados por asteriscos con ciclo for
    var f,c;
    var st=\"*\";
    var max= document.getElementById(\"number\").value;
    //triangulo rectangulo recto a derechas
    for (f=1;f<=max;f++)
    {
        for(c=1;c<=f;c++)

            document.write(\"*\");
        document.write(\"<br>\");
    }
    document.write(\"<br>\");

    //triangulo rectangulo invertido a izquierdas
    for (f=max;f>=1;f--)
    {
        for(c=1;c<=max-f;c++)
            document.write(\"&nbsp&nbsp\");
        for(c=1;c<=f;c++)
            document.write(\"*\");
        document.write(\"<br>\");
    }
    document.write(\"<br>\");
}
</script>";
    }

    public function getTemplateName()
    {
        return "@Page:/usr/share/nginx/html/user/pages/01.blog/03.tarea-figura";
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
        return new Source("<h4>Ingresar un número y observar la figura</h4>
<p>&lt;input type=\"number\" id=\"number\" name=\"number\"/ onkeyup=\"myFunction()\"&gt;
<code id=\"figura\"></code></p>
<script>
function myFunction() {
    //Imprimir figuras de triangulos formados por asteriscos con ciclo for
    var f,c;
    var st=\"*\";
    var max= document.getElementById(\"number\").value;
    //triangulo rectangulo recto a derechas
    for (f=1;f<=max;f++)
    {
        for(c=1;c<=f;c++)

            document.write(\"*\");
        document.write(\"<br>\");
    }
    document.write(\"<br>\");

    //triangulo rectangulo invertido a izquierdas
    for (f=max;f>=1;f--)
    {
        for(c=1;c<=max-f;c++)
            document.write(\"&nbsp&nbsp\");
        for(c=1;c<=f;c++)
            document.write(\"*\");
        document.write(\"<br>\");
    }
    document.write(\"<br>\");
}
</script>", "@Page:/usr/share/nginx/html/user/pages/01.blog/03.tarea-figura", "");
    }
}
