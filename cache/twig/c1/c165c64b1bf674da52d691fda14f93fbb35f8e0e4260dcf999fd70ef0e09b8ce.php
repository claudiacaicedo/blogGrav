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

/* partials/post-card.html.twig */
class __TwigTemplate_cc30b477355c8daa75cab36187b27a60e9707a043e05fb26656cf13d25a1dc2d extends \Twig\Template
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
        echo "<article class=\"post-card home-template\">
    ";
        // line 2
        if (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []))) {
            // line 3
            echo "        <a class=\"post-card-image-link\" href=\"";
            echo $this->getAttribute(($context["post"] ?? null), "url", []);
            echo "\">
            <div class=\"post-card-image\" style=\"background-image: url(";
            // line 4
            echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", [])), "url", []);
            echo ")\"></div>
        </a>
    ";
        } elseif ($this->getAttribute($this->getAttribute(        // line 6
($context["page"] ?? null), "media", []), "youtube", [])) {
            // line 7
            echo "        <a class=\"post-card-image-link\" href=\"";
            echo $this->getAttribute(($context["post"] ?? null), "url", []);
            echo "\">
            <iframe width=\"600\" height=\"403\" src=\"";
            // line 8
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "youtube", []);
            echo "?showinfo=0\" frameborder=\"0\" allowfullscreen>
            </iframe>
        </a>
    ";
        } elseif ($this->getAttribute($this->getAttribute(        // line 11
($context["page"] ?? null), "media", []), "soundcloud", [])) {
            // line 12
            echo "        <a class=\"post-card-image-link\" href=\"";
            echo $this->getAttribute(($context["post"] ?? null), "url", []);
            echo "\">
            <iframe width=\"100%\" height=\"403\" scrolling=\"no\" frameborder=\"no\"
                    src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/";
            // line 14
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "soundcloud", []);
            echo "&amp;auto_play=false&amp;hide_related=true&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true&amp;buying=false\">
            </iframe>
        </a>
    ";
        } else {
            // line 18
            echo "        <a class=\"post-card-image-link\" href=\"";
            echo $this->getAttribute(($context["post"] ?? null), "url", []);
            echo "\">
            <div class=\"post-card-image\"
                 style=\"background-image: url(https://source.unsplash.com/";
            // line 20
            echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "header", []), "featured_image", []);
            echo ")\" alt=\"cover\">
            </div>
        </a>
    ";
        }
        // line 24
        echo "    <div class=\"post-card-content\">
        <a class=\"post-card-content-link\" href=\"";
        // line 25
        echo $this->getAttribute(($context["post"] ?? null), "url", []);
        echo "\">
            <header class=\"post-card-header\">
            ";
        // line 27
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "category", [])) {
            // line 28
            echo "                <span class=\"post-card-tags\">";
            echo twig_join_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "category", []), ", ");
            echo "</span>
            ";
        }
        // line 30
        echo "                <h2 class=\"post-card-title\">";
        echo $this->getAttribute(($context["post"] ?? null), "title", []);
        echo "</h2>
            </header>
            <section class=\"post-card-excerpt\">
                ";
        // line 33
        echo \Grav\Common\Utils::truncate($this->getAttribute(($context["page"] ?? null), "content", []), 140, true);
        echo "
            </section>
        </a>

        ";
        // line 37
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", [])) {
            // line 38
            echo "            <span class=\"tags\">
            ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", []));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 40
                echo "                ";
                if ( !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method")) {
                    // line 41
                    echo "                    <a class=\"p-category\"><em>";
                    echo $context["tag"];
                    echo "</em></a>
                ";
                }
                // line 43
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            </span>
        ";
        }
        // line 46
        echo "
        <footer class=\"post-card-meta\">
            <ul class=\"author-list\">
                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["authors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 50
            echo "                    <li class=\"author-list-item\">
                        <div class=\"author-name-tooltip\">
                            ";
            // line 52
            echo ($context["name"] ?? null);
            echo "
                        </div>
                        ";
            // line 54
            if (($context["profile_image"] ?? null)) {
                // line 55
                echo "                            <a href=\"";
                echo ($context["url"] ?? null);
                echo "\" class=\"static-avatar\">
                            <img class=\"author-profile-image\" src=\"";
                // line 56
                echo ($context["profile_image"] ?? null);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\"/></a>
                        ";
            } else {
                // line 58
                echo "                            <a href=\"";
                echo ($context["url"] ?? null);
                echo "\" class=\"static-avatar author-profile-image\">";
                echo ($context["icons_avatar"] ?? null);
                echo "</a>
                        ";
            }
            // line 60
            echo "                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "            </ul>
            <span class=\"reading-time\">";
        // line 63
        echo $this->env->getExtension('Grav\Common\TwigReadingTimeFilters')->getReadingTime($this->getAttribute(($context["page"] ?? null), "content", []));
        echo "</span>
        </footer>
    </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "partials/post-card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 63,  191 => 62,  184 => 60,  176 => 58,  169 => 56,  164 => 55,  162 => 54,  157 => 52,  153 => 50,  149 => 49,  144 => 46,  140 => 44,  134 => 43,  128 => 41,  125 => 40,  121 => 39,  118 => 38,  116 => 37,  109 => 33,  102 => 30,  96 => 28,  94 => 27,  89 => 25,  86 => 24,  79 => 20,  73 => 18,  66 => 14,  60 => 12,  58 => 11,  52 => 8,  47 => 7,  45 => 6,  40 => 4,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<article class=\"post-card home-template\">
    {% if page.media.images|first %}
        <a class=\"post-card-image-link\" href=\"{{ post.url }}\">
            <div class=\"post-card-image\" style=\"background-image: url({{ page.media.images|first.url }})\"></div>
        </a>
    {% elseif page.media.youtube %}
        <a class=\"post-card-image-link\" href=\"{{ post.url }}\">
            <iframe width=\"600\" height=\"403\" src=\"{{ page.media.youtube }}?showinfo=0\" frameborder=\"0\" allowfullscreen>
            </iframe>
        </a>
    {% elseif page.media.soundcloud %}
        <a class=\"post-card-image-link\" href=\"{{ post.url }}\">
            <iframe width=\"100%\" height=\"403\" scrolling=\"no\" frameborder=\"no\"
                    src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/{{ page.header.soundcloud }}&amp;auto_play=false&amp;hide_related=true&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true&amp;buying=false\">
            </iframe>
        </a>
    {% else %}
        <a class=\"post-card-image-link\" href=\"{{ post.url }}\">
            <div class=\"post-card-image\"
                 style=\"background-image: url(https://source.unsplash.com/{{ theme_config.header.featured_image }})\" alt=\"cover\">
            </div>
        </a>
    {% endif %}
    <div class=\"post-card-content\">
        <a class=\"post-card-content-link\" href=\"{{ post.url }}\">
            <header class=\"post-card-header\">
            {% if page.taxonomy.category %}
                <span class=\"post-card-tags\">{{page.taxonomy.category|join(', ')}}</span>
            {% endif %}
                <h2 class=\"post-card-title\">{{ post.title }}</h2>
            </header>
            <section class=\"post-card-excerpt\">
                {{ page.content | truncate(140, true) }}
            </section>
        </a>

        {% if page.taxonomy.tag %}
            <span class=\"tags\">
            {% for tag in page.taxonomy.tag %}
                {% if not (grav.uri.param('chromeless')) %}
                    <a class=\"p-category\"><em>{{ tag }}</em></a>
                {% endif %}
            {% endfor %}
            </span>
        {% endif %}

        <footer class=\"post-card-meta\">
            <ul class=\"author-list\">
                {% for author in authors %}
                    <li class=\"author-list-item\">
                        <div class=\"author-name-tooltip\">
                            {{ name }}
                        </div>
                        {% if profile_image %}
                            <a href=\"{{ url }}\" class=\"static-avatar\">
                            <img class=\"author-profile-image\" src=\"{{ profile_image }}\" alt=\"{{ name }}\"/></a>
                        {% else %}
                            <a href=\"{{ url }}\" class=\"static-avatar author-profile-image\">{{ icons_avatar }}</a>
                        {% endif %}
                    </li>
                {% endfor %}
            </ul>
            <span class=\"reading-time\">{{ page.content|readingtime }}</span>
        </footer>
    </div>
</article>
", "partials/post-card.html.twig", "/usr/share/nginx/html/user/themes/casper/templates/partials/post-card.html.twig");
    }
}
