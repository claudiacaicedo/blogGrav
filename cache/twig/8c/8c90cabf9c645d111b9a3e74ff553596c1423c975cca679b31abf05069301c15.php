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

/* partials/blog_item.html.twig */
class __TwigTemplate_a6f63dbe747a94c420d90caf55c5d986da5ae2ca611e25ba12317b4b85f0df0e extends \Twig\Template
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
        echo "<div class=\"list-item\">

    ";
        // line 3
        $context["header_image"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image", []), true);
        // line 4
        echo "    ";
        $context["header_image_width"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_width", []), 900);
        // line 5
        echo "    ";
        $context["header_image_height"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_height", []), 300);
        // line 6
        echo "    ";
        $context["header_image_file"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_file", []);
        // line 7
        echo "
    <div class=\"list-blog-header\">
        <span class=\"list-blog-date\">
            <span>";
        // line 10
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "d");
        echo "</span>
            <em>";
        // line 11
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "M");
        echo "</em>
        </span>
        ";
        // line 13
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", [])) {
            // line 14
            echo "            <h4>
                ";
            // line 15
            if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === false)) {
                // line 16
                echo "                <a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", []);
                echo "\"><i class=\"fa fa-angle-double-right\"></i></a>
                ";
            }
            // line 18
            echo "                <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", []);
            echo "\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", []);
            echo "</a>
            </h4>
        ";
        } else {
            // line 21
            echo "            <h4><a href=\"";
            echo $this->getAttribute(($context["page"] ?? null), "url", []);
            echo "\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", []);
            echo "</a></h4>
        ";
        }
        // line 23
        echo "
        ";
        // line 24
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", [])) {
            // line 25
            echo "        <span class=\"tags\">
            ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", []));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 27
                echo "            <a href=\"";
                echo $this->getAttribute(($context["blog"] ?? null), "url", []);
                echo "/tag";
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
                echo $context["tag"];
                echo "\">";
                echo $context["tag"];
                echo "</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        </span>
        ";
        }
        // line 31
        echo "        ";
        if (($context["header_image"] ?? null)) {
            // line 32
            echo "            ";
            if (($context["header_image_file"] ?? null)) {
                // line 33
                echo "                ";
                $context["header_image_media"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), ($context["header_image_file"] ?? null), [], "array");
                // line 34
                echo "            ";
            } else {
                // line 35
                echo "                ";
                $context["header_image_media"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
                // line 36
                echo "            ";
            }
            // line 37
            echo "            ";
            echo $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "cropZoom", [0 => ($context["header_image_width"] ?? null), 1 => ($context["header_image_height"] ?? null)], "method"), "html", []);
            echo "
        ";
        }
        // line 39
        echo "
    </div>

    <div class=\"list-blog-padding\">

    ";
        // line 44
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === false)) {
            // line 45
            echo "        <p>";
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "</p>
        ";
            // line 46
            if ( !($context["truncate"] ?? null)) {
                // line 47
                echo "        ";
                $context["show_prev_next"] = true;
                // line 48
                echo "        ";
            }
            // line 49
            echo "    ";
        } elseif ((($context["truncate"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "summary", []) != $this->getAttribute(($context["page"] ?? null), "content", [])))) {
            // line 50
            echo "        <p>";
            echo $this->getAttribute(($context["page"] ?? null), "summary", []);
            echo "</p>
        <p><a href=\"";
            // line 51
            echo $this->getAttribute(($context["page"] ?? null), "url", []);
            echo "\">Continue Reading...</a></p>
    ";
        } elseif (        // line 52
($context["truncate"] ?? null)) {
            // line 53
            echo "        ";
            if (($this->getAttribute(($context["page"] ?? null), "summary", []) != $this->getAttribute(($context["page"] ?? null), "content", []))) {
                // line 54
                echo "            <p>";
                echo \Grav\Common\Utils::truncate($this->getAttribute(($context["page"] ?? null), "content", []), 550);
                echo "</p>
        ";
            } else {
                // line 56
                echo "            <p>";
                echo $this->getAttribute(($context["page"] ?? null), "content", []);
                echo "</p>
        ";
            }
            // line 58
            echo "        <p><a href=\"";
            echo $this->getAttribute(($context["page"] ?? null), "url", []);
            echo "\">Continue Reading...</a></p>
    ";
        } else {
            // line 60
            echo "        <p>";
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "</p>
        ";
            // line 61
            $context["show_prev_next"] = true;
            // line 62
            echo "    ";
        }
        // line 63
        echo "
    ";
        // line 64
        if (($context["show_prev_next"] ?? null)) {
            // line 65
            echo "
        <p class=\"prev-next\">
            ";
            // line 67
            if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", [])) {
                // line 68
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", []), "url", []);
                echo "\"><i class=\"fa fa-chevron-left\"></i> Next Post</a>
            ";
            }
            // line 70
            echo "
            ";
            // line 71
            if ( !$this->getAttribute(($context["page"] ?? null), "isLast", [])) {
                // line 72
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", []), "url", []);
                echo "\">Previous Post <i class=\"fa fa-chevron-right\"></i></a>
            ";
            }
            // line 74
            echo "        </p>
    ";
        }
        // line 76
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 76,  238 => 74,  232 => 72,  230 => 71,  227 => 70,  221 => 68,  219 => 67,  215 => 65,  213 => 64,  210 => 63,  207 => 62,  205 => 61,  200 => 60,  194 => 58,  188 => 56,  182 => 54,  179 => 53,  177 => 52,  173 => 51,  168 => 50,  165 => 49,  162 => 48,  159 => 47,  157 => 46,  152 => 45,  150 => 44,  143 => 39,  137 => 37,  134 => 36,  131 => 35,  128 => 34,  125 => 33,  122 => 32,  119 => 31,  115 => 29,  101 => 27,  97 => 26,  94 => 25,  92 => 24,  89 => 23,  81 => 21,  72 => 18,  66 => 16,  64 => 15,  61 => 14,  59 => 13,  54 => 11,  50 => 10,  45 => 7,  42 => 6,  39 => 5,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"list-item\">

    {% set header_image = page.header.header_image|defined(true) %}
    {% set header_image_width  = page.header.header_image_width|defined(900) %}
    {% set header_image_height = page.header.header_image_height|defined(300) %}
    {% set header_image_file = page.header.header_image_file %}

    <div class=\"list-blog-header\">
        <span class=\"list-blog-date\">
            <span>{{ page.date|date(\"d\") }}</span>
            <em>{{ page.date|date(\"M\") }}</em>
        </span>
        {% if page.header.link %}
            <h4>
                {% if page.header.continue_link is not sameas(false) %}
                <a href=\"{{ page.url }}\"><i class=\"fa fa-angle-double-right\"></i></a>
                {% endif %}
                <a href=\"{{ page.header.link }}\">{{ page.title }}</a>
            </h4>
        {% else %}
            <h4><a href=\"{{ page.url }}\">{{ page.title }}</a></h4>
        {% endif %}

        {% if page.taxonomy.tag %}
        <span class=\"tags\">
            {% for tag in page.taxonomy.tag %}
            <a href=\"{{ blog.url }}/tag{{ config.system.param_sep }}{{ tag }}\">{{ tag }}</a>
            {% endfor %}
        </span>
        {% endif %}
        {% if header_image %}
            {% if header_image_file %}
                {% set header_image_media = page.media.images[header_image_file] %}
            {% else %}
                {% set header_image_media = page.media.images|first %}
            {% endif %}
            {{ header_image_media.cropZoom(header_image_width, header_image_height).html }}
        {% endif %}

    </div>

    <div class=\"list-blog-padding\">

    {% if page.header.continue_link is sameas(false) %}
        <p>{{ page.content }}</p>
        {% if not truncate %}
        {% set show_prev_next = true %}
        {% endif %}
    {% elseif truncate and page.summary != page.content %}
        <p>{{ page.summary }}</p>
        <p><a href=\"{{ page.url }}\">Continue Reading...</a></p>
    {% elseif truncate %}
        {% if page.summary != page.content %}
            <p>{{ page.content|truncate(550) }}</p>
        {% else %}
            <p>{{ page.content }}</p>
        {% endif %}
        <p><a href=\"{{ page.url }}\">Continue Reading...</a></p>
    {% else %}
        <p>{{ page.content }}</p>
        {% set show_prev_next = true %}
    {% endif %}

    {% if show_prev_next %}

        <p class=\"prev-next\">
            {% if not page.isFirst %}
                <a class=\"button\" href=\"{{ page.nextSibling.url }}\"><i class=\"fa fa-chevron-left\"></i> Next Post</a>
            {% endif %}

            {% if not page.isLast %}
                <a class=\"button\" href=\"{{ page.prevSibling.url }}\">Previous Post <i class=\"fa fa-chevron-right\"></i></a>
            {% endif %}
        </p>
    {% endif %}

    </div>
</div>
", "partials/blog_item.html.twig", "/usr/share/nginx/html/user/themes/afterburner2/templates/partials/blog_item.html.twig");
    }
}
