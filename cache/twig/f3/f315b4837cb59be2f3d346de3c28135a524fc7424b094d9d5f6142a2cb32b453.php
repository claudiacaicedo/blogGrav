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

/* partials/relatedpages.html.twig */
class __TwigTemplate_cc8ccac663285e012c36f6bd7648ee44f2e2ce1b22a774c1e4acf13c080103c6 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["related_pages"] ?? null));
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
        foreach ($context['_seq'] as $context["related_path"] => $context["score"]) {
            // line 2
            $context["related"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "pages", [], "array"), "get", [0 => $context["related_path"]], "method");
            // line 3
            if (($context["related"] ?? null)) {
                // line 4
                echo "<div class=\"jp-relatedposts-post jp-relatedposts-post";
                echo $this->getAttribute($context["loop"], "index", []);
                echo " jp-relatedposts-post-thumbs\" data-post-id=\"";
                echo $this->getAttribute($context["loop"], "index", []);
                echo "\" data-post-format=\"false\">
  <a class=\"jp-relatedposts-post-a\" href=\"";
                // line 5
                echo $this->getAttribute(($context["related"] ?? null), "url", []);
                echo "\" title=\"";
                echo $this->getAttribute(($context["related"] ?? null), "title", []);
                echo "\" rel=\"nofollow\">
    ";
                // line 6
                if (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["related"] ?? null), "media", []), "images", []))) {
                    // line 7
                    echo "    ";
                    echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["related"] ?? null), "media", []), "images", [])), "cropZoom", [0 => 218, 1 => 125], "method"), "html", [0 => "", 1 => "", 2 => "jp-relatedposts-post-img"], "method");
                    echo "
    ";
                }
                // line 9
                echo "  </a>
  <h4 class=\"jp-relatedposts-post-title\">
    <a class=\"jp-relatedposts-post-a\" href=\"";
                // line 11
                echo $this->getAttribute(($context["related"] ?? null), "url", []);
                echo "\" title=\"";
                echo $this->getAttribute(($context["related"] ?? null), "title", []);
                echo "\" rel=\"nofollow\">
      ";
                // line 12
                echo $this->getAttribute(($context["related"] ?? null), "title", []);
                echo "
      ";
                // line 13
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "relatedpages", []), "show_score", [])) {
                    // line 14
                    echo "      <span class=\"score\">(";
                    echo $context["score"];
                    echo ")</span>
      ";
                }
                // line 16
                echo "    </a>
  </h4>

  ";
                // line 19
                if ($this->getAttribute($this->getAttribute(($context["related"] ?? null), "taxonomy", []), "category", [])) {
                    // line 20
                    echo "  <p class=\"jp-relatedposts-post-context\">
    ";
                    // line 21
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["related"] ?? null), "taxonomy", []), "category", []));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                        // line 22
                        echo "    In \"";
                        echo twig_capitalize_string_filter($this->env, $context["category"]);
                        if ( !$this->getAttribute($context["loop"], "last", [])) {
                            echo ", ";
                        }
                        echo "\"
    ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 24
                    echo "  </p>
  ";
                }
                // line 26
                echo "
</div>
";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['related_path'], $context['score'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "partials/relatedpages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 26,  141 => 24,  121 => 22,  104 => 21,  101 => 20,  99 => 19,  94 => 16,  88 => 14,  86 => 13,  82 => 12,  76 => 11,  72 => 9,  66 => 7,  64 => 6,  58 => 5,  51 => 4,  49 => 3,  47 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% for related_path, score in related_pages %}
{% set related = grav['pages'].get(related_path) %}
{% if related %}
<div class=\"jp-relatedposts-post jp-relatedposts-post{{ loop.index }} jp-relatedposts-post-thumbs\" data-post-id=\"{{ loop.index }}\" data-post-format=\"false\">
  <a class=\"jp-relatedposts-post-a\" href=\"{{ related.url }}\" title=\"{{ related.title }}\" rel=\"nofollow\">
    {% if related.media.images|first %}
    {{ related.media.images|first.cropZoom(218,125).html('', '', 'jp-relatedposts-post-img') }}
    {% endif %}
  </a>
  <h4 class=\"jp-relatedposts-post-title\">
    <a class=\"jp-relatedposts-post-a\" href=\"{{ related.url }}\" title=\"{{ related.title }}\" rel=\"nofollow\">
      {{ related.title }}
      {% if config.plugins.relatedpages.show_score %}
      <span class=\"score\">({{ score }})</span>
      {% endif %}
    </a>
  </h4>

  {% if related.taxonomy.category %}
  <p class=\"jp-relatedposts-post-context\">
    {% for category in related.taxonomy.category %}
    In \"{{ category|capitalize }}{% if not loop.last %}, {% endif %}\"
    {% endfor %}
  </p>
  {% endif %}

</div>
{% endif %}
{% endfor %}
", "partials/relatedpages.html.twig", "/usr/share/nginx/html/user/themes/receptar/templates/partials/relatedpages.html.twig");
    }
}
