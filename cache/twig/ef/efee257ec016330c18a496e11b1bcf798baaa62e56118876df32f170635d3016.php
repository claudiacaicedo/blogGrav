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

/* @Page:/usr/share/nginx/html/user/pages/01.blog/ejercicios-de-css */
class __TwigTemplate_c880f26fda8dffe6579b12e15e76c18003e785a8b8a02f7ebae63c68d995293a extends \Twig\Template
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
        echo "<h2>Práctica de Css con los ejercicios que se encuentran en W3School</h2>
<h2>Tema: Css Syntax</h2>
<hr />
<h4>1 Change the color of all p elements to \"red\".</h4>
<pre><code>  pre {
    &lt;head&gt;
         &lt;style&gt;
             p{ color:red; }
         &lt;/style&gt;
    &lt;/head&gt;
  }</code></pre>
<hr />";
    }

    public function getTemplateName()
    {
        return "@Page:/usr/share/nginx/html/user/pages/01.blog/ejercicios-de-css";
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
        return new Source("<h2>Práctica de Css con los ejercicios que se encuentran en W3School</h2>
<h2>Tema: Css Syntax</h2>
<hr />
<h4>1 Change the color of all p elements to \"red\".</h4>
<pre><code>  pre {
    &lt;head&gt;
         &lt;style&gt;
             p{ color:red; }
         &lt;/style&gt;
    &lt;/head&gt;
  }</code></pre>
<hr />", "@Page:/usr/share/nginx/html/user/pages/01.blog/ejercicios-de-css", "");
    }
}
