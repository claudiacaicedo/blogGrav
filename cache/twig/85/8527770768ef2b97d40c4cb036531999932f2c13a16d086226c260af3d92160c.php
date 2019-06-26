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

/* partials/navbar.twig */
class __TwigTemplate_7381700c0a3e16086512210ae2467d973a1343998d1fa09c887a454cde00e527 extends \Twig\Template
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
        echo "<nav class=\"site-nav\">
            ";
        // line 3
        echo "            <div class=\"site-nav-left\">
                ";
        // line 4
        if ( !$this->getAttribute(($context["page"] ?? null), "home", [])) {
            // line 5
            echo "                    <a class=\"site-nav-logo\" href=\"";
            echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
            echo "\">
                        <img src=\"";
            // line 6
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://assets/images/blog-icon.png");
            echo "\" alt=\"Ghost\"/>
                    </a>
                ";
        }
        // line 9
        echo "                <ul class=\"nav\" role=\"menu\">
                    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 11
            echo "                        <li class=\"nav-home\" role=\"menuitem\">
                            ";
            // line 12
            $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("is-active") : (""));
            // line 13
            echo "                            <a href=\"";
            echo $this->getAttribute($context["page"], "url", []);
            echo "\" ";
            if (($this->getAttribute(($context["p"] ?? null), "template", []) == "external")) {
                echo " target=\"_BLANK\" rel=\"noopener\" ";
            }
            echo ">
                                ";
            // line 14
            echo $this->getAttribute($context["page"], "menu", []);
            echo "
                            </a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                </ul>
            </div>
            ";
        // line 21
        echo "            <div class=\"site-nav-right\">
                <div class=\"social-links\">
                    ";
        // line 23
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_facebook", [])) {
            // line 24
            echo "                        <a class=\"social-link social-link-fb\" href=\"https://www.facebook.com/";
            echo $this->getAttribute(($context["theme_config"] ?? null), "social_facebook", []);
            echo "\"
                           rel=\"noreferrer noopener\" target=\"_blank\" title=\"Facebook\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 32 32\">
                                <path d=\"M19 6h5V0h-5c-3.86 0-7 3.14-7 7v3H8v6h4v16h6V16h5l1-6h-6V7c0-.542.458-1 1-1z\"/>
                            </svg>
                        </a>
                    ";
        }
        // line 31
        echo "
                    ";
        // line 32
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_twitter", [])) {
            // line 33
            echo "                        <a class=\"social-link social-link-tw\" href=\"https://twitter.com/";
            echo $this->getAttribute(($context["theme_config"] ?? null), "social_twitter", []);
            echo "\" rel=\"noreferrer noopener\"
                           target=\"_blank\" title=\"Twitter\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 32 32\">
                                <path d=\"M30.063 7.313c-.813 1.125-1.75 2.125-2.875 2.938v.75c0 1.563-.188 3.125-.688 4.625a15.088 15.088 0 0 1-2.063 4.438c-.875 1.438-2 2.688-3.25 3.813a15.015 15.015 0 0 1-4.625 2.563c-1.813.688-3.75 1-5.75 1-3.25 0-6.188-.875-8.875-2.625.438.063.875.125 1.375.125 2.688 0 5.063-.875 7.188-2.5-1.25 0-2.375-.375-3.375-1.125s-1.688-1.688-2.063-2.875c.438.063.813.125 1.125.125.5 0 1-.063 1.5-.25-1.313-.25-2.438-.938-3.313-1.938a5.673 5.673 0 0 1-1.313-3.688v-.063c.813.438 1.688.688 2.625.688a5.228 5.228 0 0 1-1.875-2c-.5-.875-.688-1.813-.688-2.75 0-1.063.25-2.063.75-2.938 1.438 1.75 3.188 3.188 5.25 4.25s4.313 1.688 6.688 1.813a5.579 5.579 0 0 1 1.5-5.438c1.125-1.125 2.5-1.688 4.125-1.688s3.063.625 4.188 1.813a11.48 11.48 0 0 0 3.688-1.375c-.438 1.375-1.313 2.438-2.563 3.188 1.125-.125 2.188-.438 3.313-.875z\"/>
                            </svg>
                        </a>
                    ";
        }
        // line 40
        echo "
                    ";
        // line 41
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_github", [])) {
            // line 42
            echo "                        <a class=\"social-link \" href=\"https://github.com/";
            echo $this->getAttribute(($context["theme_config"] ?? null), "social_github", []);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\"
                           title=\"GitHub\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-github\">
                                <use href=\"";
            // line 45
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://templates/icons/github.svg");
            echo "#icon-github\"
                                     xlink:href=\"";
            // line 46
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://templates/icons/github.svg");
            echo "#icon-github\">
                                    ";
            // line 47
            $this->loadTemplate("icons/github.svg", "partials/navbar.twig", 47)->display($context);
            // line 48
            echo "                                </use>
                            </svg>
                        </a>
                    ";
        }
        // line 52
        echo "                    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_keybase", [])) {
            // line 53
            echo "
                        <a class=\"social-link\" href=\"https://keybase.io/";
            // line 54
            echo $this->getAttribute(($context["theme_config"] ?? null), "social_keybase", []);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\"
                           title=\"Keybase\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-keybase\">
                                <use href=\"";
            // line 57
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://templates/icons/keybase.svg");
            echo "#icon-keybase\"
                                     xlink:href=\"";
            // line 58
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://assets/images/icons/keybase.svg");
            echo "#icon-keybase\">
                                    ";
            // line 59
            $this->loadTemplate("icons/keybase.svg", "partials/navbar.twig", 59)->display($context);
            // line 60
            echo "                                </use>
                            </svg>
                        </a>

                    ";
        }
        // line 65
        echo "
                    ";
        // line 66
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_linkedin", [])) {
            // line 67
            echo "                        <a class=\"social-link\" href=\"https://www.linkedin.com/in/";
            echo $this->getAttribute(($context["theme_config"] ?? null), "social_linkedin", []);
            echo "\" rel=\"noreferrer noopener\"
                           target=\"_blank\" title=\"LinkedIn\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-linkedin\">
                                <use href=\"";
            // line 70
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://templates/icons/linkedin.svg");
            echo "#icon-linkedin\"
                                     xlink:href=\"";
            // line 71
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://assets/images/icons/linkedin.svg");
            echo "#icon-linkedin\">
                                    ";
            // line 72
            $this->loadTemplate("icons/linkedin.svg", "partials/navbar.twig", 72)->display($context);
            // line 73
            echo "                                </use>
                            </svg>
                        </a>
                    ";
        }
        // line 77
        echo "
                    ";
        // line 78
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_flickr", [])) {
            // line 79
            echo "                        <a class=\"social-link\" href=\"https://www.flickr.com/photos/";
            echo $this->getAttribute(($context["theme_config"] ?? null), "social_flickr", []);
            echo "\" rel=\"noreferrer noopener\"
                           target=\"_blank\" title=\"Flickr\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-flickr\">
                                <use href=\"";
            // line 82
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://templates/icons/flickr.svg");
            echo "#icon-flickr\"
                                     xlink:href=\"";
            // line 83
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://assets/images/icons/flickr.svg");
            echo "#icon-flickr\">
                                    ";
            // line 84
            $this->loadTemplate("icons/flickr.svg", "partials/navbar.twig", 84)->display($context);
            // line 85
            echo "                                </use>
                            </svg>
                        </a>
                    ";
        }
        // line 89
        echo "
                    ";
        // line 90
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_instagram", [])) {
            // line 91
            echo "                        <a class=\"social-link\" href=\"https://instagram.com/";
            echo $this->getAttribute(($context["theme_config"] ?? null), "social_instagram", []);
            echo "\" rel=\"noreferrer noopener\"
                           target=\"_blank\" title=\"Instagram\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-instagram\">
                                <use href=\"";
            // line 94
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://templates/icons/instagram.svg");
            echo "#icon-instagram\"
                                     xlink:href=\"";
            // line 95
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://assets/images/icons/instagram.svg");
            echo "#icon-instagram\">
                                    ";
            // line 96
            $this->loadTemplate("icons/instagram.svg", "partials/navbar.twig", 96)->display($context);
            // line 97
            echo "                                </use>
                            </svg>
                        </a>
                    ";
        }
        // line 101
        echo "
                    ";
        // line 102
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_youtube", [])) {
            // line 103
            echo "                        <a class=\"social-link\" href=\"https://www.youtube.com/user/";
            echo $this->getAttribute(($context["theme_config"] ?? null), "social_youtube", []);
            echo "\" rel=\"noreferrer noopener\"
                           target=\"_blank\" title=\"Youtube\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-youtube\">
                                <use href=\"";
            // line 106
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://templates/icons/youtube.svg");
            echo "#icon-youtube\"
                                     xlink:href=\"";
            // line 107
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://templates/icons/youtube.svg");
            echo "#icon-youtube\">
                                    ";
            // line 108
            $this->loadTemplate("icons/youtube.svg", "partials/navbar.twig", 108)->display($context);
            // line 109
            echo "                                </use>
                            </svg>
                        </a>
                    ";
        }
        // line 113
        echo "
                    ";
        // line 114
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_discord", [])) {
            // line 115
            echo "                        <a class=\"social-link\" href=\"https://discord.gg/";
            echo $this->getAttribute(($context["theme_config"] ?? null), "social_discord", []);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\"
                           title=\"Discord Server\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-discord\">
                                <use href=\"";
            // line 118
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://templates/icons/discord.svg");
            echo "#icon-discord\"
                                     xlink:href=\"";
            // line 119
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://templates/icons/discord.svg");
            echo "#icon-discord\">
                                    ";
            // line 120
            $this->loadTemplate("icons/discord.svg", "partials/navbar.twig", 120)->display($context);
            // line 121
            echo "                                </use>
                            </svg>
                        </a>
                    ";
        }
        // line 125
        echo "                </div>
            </div>
        </nav>";
    }

    public function getTemplateName()
    {
        return "partials/navbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 125,  308 => 121,  306 => 120,  302 => 119,  298 => 118,  291 => 115,  289 => 114,  286 => 113,  280 => 109,  278 => 108,  274 => 107,  270 => 106,  263 => 103,  261 => 102,  258 => 101,  252 => 97,  250 => 96,  246 => 95,  242 => 94,  235 => 91,  233 => 90,  230 => 89,  224 => 85,  222 => 84,  218 => 83,  214 => 82,  207 => 79,  205 => 78,  202 => 77,  196 => 73,  194 => 72,  190 => 71,  186 => 70,  179 => 67,  177 => 66,  174 => 65,  167 => 60,  165 => 59,  161 => 58,  157 => 57,  151 => 54,  148 => 53,  145 => 52,  139 => 48,  137 => 47,  133 => 46,  129 => 45,  122 => 42,  120 => 41,  117 => 40,  106 => 33,  104 => 32,  101 => 31,  90 => 24,  88 => 23,  84 => 21,  80 => 18,  70 => 14,  61 => 13,  59 => 12,  56 => 11,  52 => 10,  49 => 9,  43 => 6,  38 => 5,  36 => 4,  33 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"site-nav\">
            {# left nav #}
            <div class=\"site-nav-left\">
                {% if not page.home %}
                    <a class=\"site-nav-logo\" href=\"{{ base_url == '' ? '/' : base_url }}\">
                        <img src=\"{{ url('theme://assets/images/blog-icon.png') }}\" alt=\"Ghost\"/>
                    </a>
                {% endif %}
                <ul class=\"nav\" role=\"menu\">
                    {% for page in pages.children.visible %}
                        <li class=\"nav-home\" role=\"menuitem\">
                            {% set current_page = (page.active or page.activeChild) ? 'is-active' : '' %}
                            <a href=\"{{ page.url }}\" {% if p.template == 'external' %} target=\"_BLANK\" rel=\"noopener\" {% endif %}>
                                {{ page.menu }}
                            </a>
                        </li>
                    {% endfor %}
                </ul>
            </div>
            {# right nav #}
            <div class=\"site-nav-right\">
                <div class=\"social-links\">
                    {% if theme_config.social_facebook %}
                        <a class=\"social-link social-link-fb\" href=\"https://www.facebook.com/{{ theme_config.social_facebook }}\"
                           rel=\"noreferrer noopener\" target=\"_blank\" title=\"Facebook\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 32 32\">
                                <path d=\"M19 6h5V0h-5c-3.86 0-7 3.14-7 7v3H8v6h4v16h6V16h5l1-6h-6V7c0-.542.458-1 1-1z\"/>
                            </svg>
                        </a>
                    {% endif %}

                    {% if theme_config.social_twitter %}
                        <a class=\"social-link social-link-tw\" href=\"https://twitter.com/{{ theme_config.social_twitter }}\" rel=\"noreferrer noopener\"
                           target=\"_blank\" title=\"Twitter\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 32 32\">
                                <path d=\"M30.063 7.313c-.813 1.125-1.75 2.125-2.875 2.938v.75c0 1.563-.188 3.125-.688 4.625a15.088 15.088 0 0 1-2.063 4.438c-.875 1.438-2 2.688-3.25 3.813a15.015 15.015 0 0 1-4.625 2.563c-1.813.688-3.75 1-5.75 1-3.25 0-6.188-.875-8.875-2.625.438.063.875.125 1.375.125 2.688 0 5.063-.875 7.188-2.5-1.25 0-2.375-.375-3.375-1.125s-1.688-1.688-2.063-2.875c.438.063.813.125 1.125.125.5 0 1-.063 1.5-.25-1.313-.25-2.438-.938-3.313-1.938a5.673 5.673 0 0 1-1.313-3.688v-.063c.813.438 1.688.688 2.625.688a5.228 5.228 0 0 1-1.875-2c-.5-.875-.688-1.813-.688-2.75 0-1.063.25-2.063.75-2.938 1.438 1.75 3.188 3.188 5.25 4.25s4.313 1.688 6.688 1.813a5.579 5.579 0 0 1 1.5-5.438c1.125-1.125 2.5-1.688 4.125-1.688s3.063.625 4.188 1.813a11.48 11.48 0 0 0 3.688-1.375c-.438 1.375-1.313 2.438-2.563 3.188 1.125-.125 2.188-.438 3.313-.875z\"/>
                            </svg>
                        </a>
                    {% endif %}

                    {% if theme_config.social_github %}
                        <a class=\"social-link \" href=\"https://github.com/{{ theme_config.social_github }}\" rel=\"noreferrer noopener\" target=\"_blank\"
                           title=\"GitHub\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-github\">
                                <use href=\"{{ url('theme://templates/icons/github.svg') }}#icon-github\"
                                     xlink:href=\"{{ url('theme://templates/icons/github.svg') }}#icon-github\">
                                    {% include 'icons/github.svg' %}
                                </use>
                            </svg>
                        </a>
                    {% endif %}
                    {% if theme_config.social_keybase %}

                        <a class=\"social-link\" href=\"https://keybase.io/{{ theme_config.social_keybase }}\" rel=\"noreferrer noopener\" target=\"_blank\"
                           title=\"Keybase\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-keybase\">
                                <use href=\"{{ url('theme://templates/icons/keybase.svg') }}#icon-keybase\"
                                     xlink:href=\"{{ url('theme://assets/images/icons/keybase.svg') }}#icon-keybase\">
                                    {% include 'icons/keybase.svg' %}
                                </use>
                            </svg>
                        </a>

                    {% endif %}

                    {% if theme_config.social_linkedin %}
                        <a class=\"social-link\" href=\"https://www.linkedin.com/in/{{ theme_config.social_linkedin }}\" rel=\"noreferrer noopener\"
                           target=\"_blank\" title=\"LinkedIn\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-linkedin\">
                                <use href=\"{{ url('theme://templates/icons/linkedin.svg') }}#icon-linkedin\"
                                     xlink:href=\"{{ url('theme://assets/images/icons/linkedin.svg') }}#icon-linkedin\">
                                    {% include 'icons/linkedin.svg' %}
                                </use>
                            </svg>
                        </a>
                    {% endif %}

                    {% if theme_config.social_flickr %}
                        <a class=\"social-link\" href=\"https://www.flickr.com/photos/{{ theme_config.social_flickr }}\" rel=\"noreferrer noopener\"
                           target=\"_blank\" title=\"Flickr\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-flickr\">
                                <use href=\"{{ url('theme://templates/icons/flickr.svg') }}#icon-flickr\"
                                     xlink:href=\"{{ url('theme://assets/images/icons/flickr.svg') }}#icon-flickr\">
                                    {% include 'icons/flickr.svg' %}
                                </use>
                            </svg>
                        </a>
                    {% endif %}

                    {% if theme_config.social_instagram %}
                        <a class=\"social-link\" href=\"https://instagram.com/{{ theme_config.social_instagram }}\" rel=\"noreferrer noopener\"
                           target=\"_blank\" title=\"Instagram\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-instagram\">
                                <use href=\"{{ url('theme://templates/icons/instagram.svg') }}#icon-instagram\"
                                     xlink:href=\"{{ url('theme://assets/images/icons/instagram.svg') }}#icon-instagram\">
                                    {% include 'icons/instagram.svg' %}
                                </use>
                            </svg>
                        </a>
                    {% endif %}

                    {% if theme_config.social_youtube %}
                        <a class=\"social-link\" href=\"https://www.youtube.com/user/{{ theme_config.social_youtube }}\" rel=\"noreferrer noopener\"
                           target=\"_blank\" title=\"Youtube\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-youtube\">
                                <use href=\"{{ url('theme://templates/icons/youtube.svg') }}#icon-youtube\"
                                     xlink:href=\"{{ url('theme://templates/icons/youtube.svg') }}#icon-youtube\">
                                    {% include 'icons/youtube.svg' %}
                                </use>
                            </svg>
                        </a>
                    {% endif %}

                    {% if theme_config.social_discord %}
                        <a class=\"social-link\" href=\"https://discord.gg/{{ theme_config.social_discord }}\" rel=\"noreferrer noopener\" target=\"_blank\"
                           title=\"Discord Server\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-discord\">
                                <use href=\"{{ url('theme://templates/icons/discord.svg') }}#icon-discord\"
                                     xlink:href=\"{{ url('theme://templates/icons/discord.svg') }}#icon-discord\">
                                    {% include 'icons/discord.svg' %}
                                </use>
                            </svg>
                        </a>
                    {% endif %}
                </div>
            </div>
        </nav>", "partials/navbar.twig", "/usr/share/nginx/html/user/themes/casper/templates/partials/navbar.twig");
    }
}
