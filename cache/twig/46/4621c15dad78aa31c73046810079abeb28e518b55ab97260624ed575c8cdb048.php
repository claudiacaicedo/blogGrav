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
class __TwigTemplate_ed1f79d3d0256c1592d6c7e9133410ee0bfc7b3ab2da5eb2eaa4f96e932c3975 extends \Twig\Template
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
        $context["share_fb"] = "M19 6h5V0h-5c-3.86 0-7 3.14-7 7v3H8v6h4v16h6V16h5l1-6h-6V7c0-.542.458-1 1-1z";
        // line 2
        $context["share_twitter"] = "M30.063 7.313c-.813 1.125-1.75 2.125-2.875 2.938v.75c0 1.563-.188 3.125-.688 4.625a15.088 15.088 0 0 1-2.063 4.438c-.875 1.438-2 2.688-3.25 3.813a15.015 15.015 0 0 1-4.625 2.563c-1.813.688-3.75 1-5.75 1-3.25 0-6.188-.875-8.875-2.625.438.063.875.125 1.375.125 2.688 0 5.063-.875 7.188-2.5-1.25 0-2.375-.375-3.375-1.125s-1.688-1.688-2.063-2.875c.438.063.813.125 1.125.125.5 0 1-.063 1.5-.25-1.313-.25-2.438-.938-3.313-1.938a5.673 5.673 0 0 1-1.313-3.688v-.063c.813.438 1.688.688 2.625.688a5.228 5.228 0 0 1-1.875-2c-.5-.875-.688-1.813-.688-2.75 0-1.063.25-2.063.75-2.938 1.438 1.75 3.188 3.188 5.25 4.25s4.313 1.688 6.688 1.813a5.579 5.579 0 0 1 1.5-5.438c1.125-1.125 2.5-1.688 4.125-1.688s3.063.625 4.188 1.813a11.48 11.48 0 0 0 3.688-1.375c-.438 1.375-1.313 2.438-2.563 3.188 1.125-.125 2.188-.438 3.313-.875z";
        // line 3
        echo "<footer class=\"site-footer outer\">
    <div class=\"site-footer-content inner\">
        <section class=\"copyright\">
            <a href=\"";
        // line 6
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">";
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</a> &copy; ";
        echo $this->getAttribute(($context["theme_config"] ?? null), "year", []);
        echo "
        </section>
        <section class=\"poweredby\">";
        // line 8
        echo $this->getAttribute(($context["theme_config"] ?? null), "footer", []);
        echo "</section>
        <nav class=\"site-footer-nav\">
            <a href=\"";
        // line 10
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "archive\">";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_CASPER.POST_ARCHIVE");
        echo "</a>
            ";
        // line 11
        if ($this->getAttribute(($context["blog"] ?? null), "facebook", [])) {
            // line 12
            echo "                <a class=\"social-link social-link-fb\" href=\"{facebook_url blog.facebook}\" target=\"_blank\" rel=\"noopener\">";
            echo $this->getAttribute(($context["icons"] ?? null), "fb", []);
            echo "</a>
            ";
        }
        // line 14
        echo "            ";
        if ($this->getAttribute(($context["blog"] ?? null), "github", [])) {
            // line 15
            echo "                <a class=\"social-link social-link-github\" href=\"{github blog.facebook}\" target=\"_blank\" rel=\"noopener\">";
            echo $this->getAttribute(($context["icons"] ?? null), "github", []);
            echo "</a>
            ";
        }
        // line 17
        echo "            ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_facebook", [])) {
            // line 18
            echo "                <li><a class=\"social-link social-link-fb\" href=\"https://www.facebook.com/";
            echo $this->getAttribute(($context["theme_config"] ?? null), "social_facebook", []);
            echo "\" rel=\"noreferrer noopener\"
                       target=\"_blank\" title=\"Facebook\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 32 32\">
                            <path d=\"";
            // line 21
            echo ($context["share_fb"] ?? null);
            echo "\"/>
                        </svg>
                    </a>
                </li>
            ";
        }
        // line 26
        echo "            ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_twitter", [])) {
            // line 27
            echo "                <li><a class=\"social-link\" href=\"https://twitter.com/";
            echo $this->getAttribute(($context["theme_config"] ?? null), "social_twitter", []);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\"
                       title=\"Twitter\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 32 32\">
                            <path d=\"";
            // line 30
            echo ($context["share_twitter"] ?? null);
            echo "\"/>
                        </svg>
                    </a>
                </li>
            ";
        }
        // line 35
        echo "            <a href=\"#\">";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_CASPER.TO_TOP");
        echo "</a>
        </nav>
    </div>
</footer>

<script>
    mediumZoom(\"#zoom-zoom img\", 
    {margin: 200, offset: 0,});

\tvar scroll = new SmoothScroll('a[href*=\"#\"]');
\t
\ttippy.setDefaults({
        arrow: true,
        delay: 40,
        theme: 'light-border'
      });
    
    // NOTE: Scroll performance is poor in Safari
    // - this appears to be due to the events firing much more slowly in Safari.
    //   Dropping the scroll event and using only a raf loop results in smoother
    //   scrolling but continuous processing even when not scrolling
    \$(document).ready(function () {
        // Start fitVids
        var \$postContent = \$(\".post-full-content\");
        \$postContent.fitVids();
        // End fitVids

        var progressBar = document.querySelector('#reading-progress');
        var header = document.querySelector('.floating-header');
        var title = document.querySelector('.post-full-title');

        var lastScrollY = window.scrollY;
        var lastWindowHeight = window.innerHeight;
        var lastDocumentHeight = \$(document).height();
        var ticking = false;

        function onScroll() {
            lastScrollY = window.scrollY;
            requestTick();
        }

        function onResize() {
            lastWindowHeight = window.innerHeight;
            lastDocumentHeight = \$(document).height();
            requestTick();
        }

        function requestTick() {
            if (!ticking) {
                requestAnimationFrame(update);
            }
            ticking = true;
        }

        function update() {
            var trigger = title.getBoundingClientRect().top + window.scrollY;
            var triggerOffset = title.offsetHeight + 35;
            var progressMax = lastDocumentHeight - lastWindowHeight;

            // show/hide floating header
            if (lastScrollY >= trigger + triggerOffset) {
                header.classList.add('floating-active');
            } else {
                header.classList.remove('floating-active');
            }

            progressBar.setAttribute('max', progressMax);
            progressBar.setAttribute('value', lastScrollY);

            ticking = false;
        }

        window.addEventListener('scroll', onScroll, {passive: true});
        window.addEventListener('resize', onResize, false);

        update();

    });
</script>
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
        return array (  112 => 35,  104 => 30,  97 => 27,  94 => 26,  86 => 21,  79 => 18,  76 => 17,  70 => 15,  67 => 14,  61 => 12,  59 => 11,  53 => 10,  48 => 8,  39 => 6,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set share_fb = \"M19 6h5V0h-5c-3.86 0-7 3.14-7 7v3H8v6h4v16h6V16h5l1-6h-6V7c0-.542.458-1 1-1z\" %}
{% set share_twitter = \"M30.063 7.313c-.813 1.125-1.75 2.125-2.875 2.938v.75c0 1.563-.188 3.125-.688 4.625a15.088 15.088 0 0 1-2.063 4.438c-.875 1.438-2 2.688-3.25 3.813a15.015 15.015 0 0 1-4.625 2.563c-1.813.688-3.75 1-5.75 1-3.25 0-6.188-.875-8.875-2.625.438.063.875.125 1.375.125 2.688 0 5.063-.875 7.188-2.5-1.25 0-2.375-.375-3.375-1.125s-1.688-1.688-2.063-2.875c.438.063.813.125 1.125.125.5 0 1-.063 1.5-.25-1.313-.25-2.438-.938-3.313-1.938a5.673 5.673 0 0 1-1.313-3.688v-.063c.813.438 1.688.688 2.625.688a5.228 5.228 0 0 1-1.875-2c-.5-.875-.688-1.813-.688-2.75 0-1.063.25-2.063.75-2.938 1.438 1.75 3.188 3.188 5.25 4.25s4.313 1.688 6.688 1.813a5.579 5.579 0 0 1 1.5-5.438c1.125-1.125 2.5-1.688 4.125-1.688s3.063.625 4.188 1.813a11.48 11.48 0 0 0 3.688-1.375c-.438 1.375-1.313 2.438-2.563 3.188 1.125-.125 2.188-.438 3.313-.875z\" %}
<footer class=\"site-footer outer\">
    <div class=\"site-footer-content inner\">
        <section class=\"copyright\">
            <a href=\"{{ base_url == '' ? '/' : base_url }}\">{{ site.title }}</a> &copy; {{ theme_config.year }}
        </section>
        <section class=\"poweredby\">{{ theme_config.footer }}</section>
        <nav class=\"site-footer-nav\">
            <a href=\"{{ base_url == '' ? '/' : base_url }}archive\">{{ \"THEME_CASPER.POST_ARCHIVE\"|t }}</a>
            {% if blog.facebook %}
                <a class=\"social-link social-link-fb\" href=\"{facebook_url blog.facebook}\" target=\"_blank\" rel=\"noopener\">{{ icons.fb }}</a>
            {% endif %}
            {% if blog.github %}
                <a class=\"social-link social-link-github\" href=\"{github blog.facebook}\" target=\"_blank\" rel=\"noopener\">{{ icons.github }}</a>
            {% endif %}
            {% if theme_config.social_facebook %}
                <li><a class=\"social-link social-link-fb\" href=\"https://www.facebook.com/{{ theme_config.social_facebook }}\" rel=\"noreferrer noopener\"
                       target=\"_blank\" title=\"Facebook\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 32 32\">
                            <path d=\"{{ share_fb }}\"/>
                        </svg>
                    </a>
                </li>
            {% endif %}
            {% if theme_config.social_twitter %}
                <li><a class=\"social-link\" href=\"https://twitter.com/{{ theme_config.social_twitter }}\" rel=\"noreferrer noopener\" target=\"_blank\"
                       title=\"Twitter\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 32 32\">
                            <path d=\"{{ share_twitter }}\"/>
                        </svg>
                    </a>
                </li>
            {% endif %}
            <a href=\"#\">{{ \"THEME_CASPER.TO_TOP\"|t }}</a>
        </nav>
    </div>
</footer>

<script>
    mediumZoom(\"#zoom-zoom img\", 
    {margin: 200, offset: 0,});

\tvar scroll = new SmoothScroll('a[href*=\"#\"]');
\t
\ttippy.setDefaults({
        arrow: true,
        delay: 40,
        theme: 'light-border'
      });
    
    // NOTE: Scroll performance is poor in Safari
    // - this appears to be due to the events firing much more slowly in Safari.
    //   Dropping the scroll event and using only a raf loop results in smoother
    //   scrolling but continuous processing even when not scrolling
    \$(document).ready(function () {
        // Start fitVids
        var \$postContent = \$(\".post-full-content\");
        \$postContent.fitVids();
        // End fitVids

        var progressBar = document.querySelector('#reading-progress');
        var header = document.querySelector('.floating-header');
        var title = document.querySelector('.post-full-title');

        var lastScrollY = window.scrollY;
        var lastWindowHeight = window.innerHeight;
        var lastDocumentHeight = \$(document).height();
        var ticking = false;

        function onScroll() {
            lastScrollY = window.scrollY;
            requestTick();
        }

        function onResize() {
            lastWindowHeight = window.innerHeight;
            lastDocumentHeight = \$(document).height();
            requestTick();
        }

        function requestTick() {
            if (!ticking) {
                requestAnimationFrame(update);
            }
            ticking = true;
        }

        function update() {
            var trigger = title.getBoundingClientRect().top + window.scrollY;
            var triggerOffset = title.offsetHeight + 35;
            var progressMax = lastDocumentHeight - lastWindowHeight;

            // show/hide floating header
            if (lastScrollY >= trigger + triggerOffset) {
                header.classList.add('floating-active');
            } else {
                header.classList.remove('floating-active');
            }

            progressBar.setAttribute('max', progressMax);
            progressBar.setAttribute('value', lastScrollY);

            ticking = false;
        }

        window.addEventListener('scroll', onScroll, {passive: true});
        window.addEventListener('resize', onResize, false);

        update();

    });
</script>
", "partials/footer.html.twig", "/usr/share/nginx/html/user/themes/casper/templates/partials/footer.html.twig");
    }
}
