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

/* @Page:/usr/share/nginx/html/user/pages/01.blog/08.juevo-canvas */
class __TwigTemplate_e2974fb9f88a356a2351b2fc791ca4a9d74b79c2fd1b91f50096a154b0d6fe78 extends \Twig\Template
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
        echo "<div>
<iframe src=\"/juego.html\"></iframe>
</div>";
    }

    public function getTemplateName()
    {
        return "@Page:/usr/share/nginx/html/user/pages/01.blog/08.juevo-canvas";
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
        return new Source("<div>
<iframe src=\"/juego.html\"></iframe>
</div>", "@Page:/usr/share/nginx/html/user/pages/01.blog/08.juevo-canvas", "");
    }
}
