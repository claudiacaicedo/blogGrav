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
class __TwigTemplate_dd19f00f33f04c77026e0b829ccde7b10c8a25b4da8e895269b4acd85b49d23f extends \Twig\Template
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
<input type=\"number\" id=\"number\" name=\"number\"/>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js\"></script>
<script>
\$(document).ready(function(){
  \$(\"#hide\").click(function(){
    \$(\"p\").hide();
  });
  \$(\"#show\").click(function(){
    \$(\"p\").show();
  });
});
</script>
<p>If you click on the \"Hide\" button, I will disappear.</p>
<pre><code>&lt;button id=\"hide\"&gt;Hide&lt;/button&gt;</code></pre>
<button id=\"show\">Show</button>";
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
<input type=\"number\" id=\"number\" name=\"number\"/>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js\"></script>
<script>
\$(document).ready(function(){
  \$(\"#hide\").click(function(){
    \$(\"p\").hide();
  });
  \$(\"#show\").click(function(){
    \$(\"p\").show();
  });
});
</script>
<p>If you click on the \"Hide\" button, I will disappear.</p>
<pre><code>&lt;button id=\"hide\"&gt;Hide&lt;/button&gt;</code></pre>
<button id=\"show\">Show</button>", "@Page:/usr/share/nginx/html/user/pages/01.blog/03.tarea-figura", "");
    }
}
