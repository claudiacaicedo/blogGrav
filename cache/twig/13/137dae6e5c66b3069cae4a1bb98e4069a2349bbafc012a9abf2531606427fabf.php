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
class __TwigTemplate_d4d0c42bd41dc6bbc888cb07770687e1a090e212037f504561059385d2302b9d extends \Twig\Template
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
<input type=\"number\" id=\"number\" onkeyup=\"myFunction()\">
<p><code id=\"rombo\"></code></p>
<script>
function myFunction() {
    //Imprimir figuras de triangulos formados por asteriscos con ciclo for
    var x,y;
    var st=\"\";
    var max= document.getElementById(\"number\").value;

    for (x=0;x<max;x++){
        for(y=0;y<=x;y++){
            st=st+\"*\";
        }
        st = st + \"<br>\";
    }
    for (x=0;x<max;x++){
        for(y=0;y<x;y++){
            if(y<=x){
                st = st + \"&nbsp\";
            }else{
                st = st + \"*\";
             }
        }
        st = st + \"<br>\";
    }
    document.getElementById('rombo').innerHTML = st;
    document.getElementById('number').value = \" \";
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
<input type=\"number\" id=\"number\" onkeyup=\"myFunction()\">
<p><code id=\"rombo\"></code></p>
<script>
function myFunction() {
    //Imprimir figuras de triangulos formados por asteriscos con ciclo for
    var x,y;
    var st=\"\";
    var max= document.getElementById(\"number\").value;

    for (x=0;x<max;x++){
        for(y=0;y<=x;y++){
            st=st+\"*\";
        }
        st = st + \"<br>\";
    }
    for (x=0;x<max;x++){
        for(y=0;y<x;y++){
            if(y<=x){
                st = st + \"&nbsp\";
            }else{
                st = st + \"*\";
             }
        }
        st = st + \"<br>\";
    }
    document.getElementById('rombo').innerHTML = st;
    document.getElementById('number').value = \" \";
    }
</script>", "@Page:/usr/share/nginx/html/user/pages/01.blog/03.tarea-figura", "");
    }
}
