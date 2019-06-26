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

/* blog.html.twig */
class __TwigTemplate_b08867ba828bc5439796492f02d9d17c41dbca9b427db64aab4715895df0426c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 36
        $this->getAttribute(($context["assets"] ?? null), "addInlineJs", [0 => ("window.maxPages = " . $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "content", []), "limit", []))], "method");
        // line 37
        $this->getAttribute(($context["assets"] ?? null), "addInlineJs", [0 => ($context["js"] ?? null)], "method");
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "
    ";
        // line 5
        $this->loadTemplate("partials/header.html.twig", "blog.html.twig", 5)->display($context);
        // line 6
        echo "
    <main id=\"site-main\" class=\"site-main outer\" role=\"main\">
        <div class=\"inner\">
            <div class=\"post-feed\">

                ";
        // line 12
        echo "                ";
        // line 13
        echo "                    ";
        // line 14
        echo "                        ";
        // line 15
        echo "                    ";
        // line 16
        echo "                ";
        // line 17
        echo "
                ";
        // line 19
        echo "                    ";
        // line 20
        echo "                    ";
        // line 21
        echo "                        ";
        // line 22
        echo "                        ";
        // line 23
        echo "                            ";
        // line 24
        echo "                        ";
        // line 25
        echo "                    ";
        // line 26
        echo "                ";
        // line 27
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "collection", []), "order", [0 => "publish_date", 1 => "desc"], "method"));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 28
            echo "                  ";
            $this->loadTemplate("partials/post-card.html.twig", "blog.html.twig", 28)->display(twig_array_merge($context, ["page" => $context["post"]]));
            // line 29
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </div>
        </div>
    </main>

";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 30,  109 => 29,  106 => 28,  88 => 27,  86 => 26,  84 => 25,  82 => 24,  80 => 23,  78 => 22,  76 => 21,  74 => 20,  72 => 19,  69 => 17,  67 => 16,  65 => 15,  63 => 14,  61 => 13,  59 => 12,  52 => 6,  50 => 5,  47 => 4,  44 => 3,  39 => 1,  37 => 37,  35 => 36,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% block content %}

    {% include 'partials/header.html.twig' %}

    <main id=\"site-main\" class=\"site-main outer\" role=\"main\">
        <div class=\"inner\">
            <div class=\"post-feed\">

                {# Added display of featured post - hibbittsdesign.org #}
                {#{% for post in taxonomy.findTaxonomy({'tag': \"featured\"}) %}#}
                    {#{% if (post.header.hide_from_post_list != true) and (post.parent.slug == page.slug) %}#}
                        {#{% include 'partials/post-card.html.twig' with {'page':post, 'truncate':true} %}#}
                    {#{% endif %}#}
                {#{% endfor %}#}

                {#{% for child in collection %}#}
                    {# Added check for hiding post in list - hibbittsdesign.org #}
                    {#{% if child.header.hide_from_post_list != true %}#}
                        {# Added check for not repeating feature post - hibbittsdesign.org #}
                        {#{% if \"featured\" not in child.taxonomy['tag'] %}#}
                            {#{% include 'partials/post-card.html.twig' with {'page':post, 'truncate':true} %}#}
                        {#{% endif %}#}
                    {#{% endif %}#}
                {#{% endfor %} #}
            {% for post in page.collection.order('publish_date', 'desc') %}
                  {% include 'partials/post-card.html.twig' with {page: post} %}
            {% endfor %}
            </div>
        </div>
    </main>

{% endblock %}

{% do assets.addInlineJs('window.maxPages = ' ~ page.header.content.limit) %}
{% do assets.addInlineJs(js) %}
", "blog.html.twig", "/usr/share/nginx/html/user/themes/casper/templates/blog.html.twig");
    }
}
