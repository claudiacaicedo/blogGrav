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

/* partials/footer.html.twig */
class __TwigTemplate_62ca94d027c83f97219d8acd3c977ed9a4fb480c01f6e51ccbf19eebd9b76ea6 extends \Twig\Template
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
        echo "<footer id=\"colophon\" class=\"site-footer\" itemscope=\"\" itemtype=\"http://schema.org/WPFooter\">
   <div class=\"site-footer-area footer-area-site-info\">
      <div class=\"site-info-container\">
         <div class=\"site-info\" role=\"contentinfo\">
           ";
        // line 5
        if ($this->getAttribute(($context["site"] ?? null), "copyright", [])) {
            // line 6
            echo "           ";
            echo $this->getAttribute(($context["site"] ?? null), "copyright", []);
            echo "
           ";
        }
        // line 8
        echo "         </div>
      </div>
   </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  38 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<footer id=\"colophon\" class=\"site-footer\" itemscope=\"\" itemtype=\"http://schema.org/WPFooter\">
   <div class=\"site-footer-area footer-area-site-info\">
      <div class=\"site-info-container\">
         <div class=\"site-info\" role=\"contentinfo\">
           {% if site.copyright %}
           {{ site.copyright }}
           {% endif %}
         </div>
      </div>
   </div>
</footer>
", "partials/footer.html.twig", "/usr/share/nginx/html/user/themes/receptar/templates/partials/footer.html.twig");
    }
}
