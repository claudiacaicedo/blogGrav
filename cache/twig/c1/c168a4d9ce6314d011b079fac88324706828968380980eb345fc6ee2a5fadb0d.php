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

/* partials/simplesearch_searchbox_top.html.twig */
class __TwigTemplate_0b94fc44d96cc7e563c496231332f73b1acbee249bfbe1479a2e5ce5236b7f58 extends \Twig\Template
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
        echo "<div class=\"form-search\">
<input type=\"text\" class=\"search-field\" placeholder=\"";
        // line 2
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "SEARCH_FIELD");
        echo "\" value=\"";
        echo ($context["query"] ?? null);
        echo "\" data-search-input2=\"";
        echo ($context["base_url"] ?? null);
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "route", []);
        echo "/query\" />
</div>
<script>
jQuery(document).ready(function(\$){
    var input = \$('[data-search-input2]');

    input.on('keypress', function(event) {
        if (event.which == 13 && input.val().length > 3) {
            event.preventDefault();
            window.location.href = input.data('search-input2') + '";
        // line 11
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
        echo "' + input.val();
        }
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "partials/simplesearch_searchbox_top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 11,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"form-search\">
<input type=\"text\" class=\"search-field\" placeholder=\"{{ 'SEARCH_FIELD'|t }}\" value=\"{{ query }}\" data-search-input2=\"{{ base_url }}{{ config.plugins.simplesearch.route}}/query\" />
</div>
<script>
jQuery(document).ready(function(\$){
    var input = \$('[data-search-input2]');

    input.on('keypress', function(event) {
        if (event.which == 13 && input.val().length > 3) {
            event.preventDefault();
            window.location.href = input.data('search-input2') + '{{ config.system.param_sep }}' + input.val();
        }
    });
});
</script>
", "partials/simplesearch_searchbox_top.html.twig", "C:\\xampp\\htdocs\\blogGrav\\user\\themes\\receptar\\templates\\partials\\simplesearch_searchbox_top.html.twig");
    }
}
