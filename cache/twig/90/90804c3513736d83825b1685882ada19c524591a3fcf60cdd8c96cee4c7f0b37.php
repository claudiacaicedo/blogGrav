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

/* partials/git_sync_repo_link.html.twig */
class __TwigTemplate_49cfee64809620f7b7441aac7158ba7ab06c6cb00a55004b85a5f54312318a7f extends \Twig\Template
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
        // line 2
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("git_sync_repo_link")) {
            // line 3
            echo "  ";
            if ( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_git_sync_repo_link", [])) {
                // line 4
                echo "    ";
                $context["git_repo_link_url"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("git_sync_repo_link");
                // line 5
                echo "    ";
                if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_icon"))) {
                    // line 6
                    echo "      ";
                    if (twig_in_filter("github", ($context["git_repo_link_url"] ?? null))) {
                        // line 7
                        echo "        ";
                        $context["git_repo_link_icon"] = "github";
                        // line 8
                        echo "      ";
                    } elseif (twig_in_filter("gitlab", ($context["git_repo_link_url"] ?? null))) {
                        // line 9
                        echo "        ";
                        $context["git_repo_link_icon"] = "gitlab";
                        // line 10
                        echo "      ";
                    } elseif (twig_in_filter("bitbucket", ($context["git_repo_link_url"] ?? null))) {
                        // line 11
                        echo "        ";
                        $context["git_repo_link_icon"] = "bitbucket";
                        // line 12
                        echo "      ";
                    } else {
                        // line 13
                        echo "        ";
                        $context["git_repo_link_icon"] = "git";
                        // line 14
                        echo "      ";
                    }
                    // line 15
                    echo "    ";
                } else {
                    // line 16
                    echo "      ";
                    $context["git_repo_link_icon"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_icon");
                    // line 17
                    echo "    ";
                }
                // line 18
                echo "    ";
                if ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("type_of_git_sync_repo_link") == "view") || twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("type_of_git_sync_repo_link")))) {
                    // line 19
                    echo "      ";
                    if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", [])) {
                        // line 20
                        echo "        ";
                        $context["git_repo_link_text"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", []);
                        // line 21
                        echo "      ";
                    } else {
                        // line 22
                        echo "        ";
                        if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text"))) {
                            // line 23
                            echo "          ";
                            $context["git_repo_link_text"] = "View Content Repository";
                            // line 24
                            echo "        ";
                        } else {
                            // line 25
                            echo "          ";
                            if ( !($context["presentationslides"] ?? null)) {
                                // line 26
                                echo "            ";
                                $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text");
                                // line 27
                                echo "          ";
                            } else {
                                // line 28
                                echo "            ";
                                $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_presentation_link_text");
                                // line 29
                                echo "          ";
                            }
                            // line 30
                            echo "        ";
                        }
                        // line 31
                        echo "      ";
                    }
                    // line 32
                    echo "      <a class=\"newwindow external-link\" href=\"";
                    echo ($context["git_repo_link_url"] ?? null);
                    echo "\" title=\"";
                    echo ($context["git_repo_link_text"] ?? null);
                    echo "\" target=\"_blank\">
        <i class=\"fa fa-";
                    // line 33
                    echo ($context["git_repo_link_icon"] ?? null);
                    echo "\" aria-hidden=\"true\"></i>";
                    echo ($context["git_repo_link_text"] ?? null);
                    echo "</a>
    ";
                } else {
                    // line 35
                    echo "      ";
                    if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link", [])) {
                        // line 36
                        echo "        ";
                        $context["git_repo_link_url"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link", []);
                        // line 37
                        echo "      ";
                    } else {
                        // line 38
                        echo "        ";
                        $context["git_repo_link_url"] = (($context["git_repo_link_url"] ?? null) . twig_replace_filter(("/" . $this->getAttribute(($context["page"] ?? null), "filePathClean", [])), ["/user/" => "/"]));
                        // line 39
                        echo "      ";
                    }
                    // line 40
                    echo "      ";
                    if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "count", []) &&  !($context["presentationslides"] ?? null))) {
                        // line 41
                        echo "        ";
                        $context["git_repo_link_url"] = twig_replace_filter(($context["git_repo_link_url"] ?? null), [(("/" . $this->getAttribute(                        // line 42
($context["page"] ?? null), "template", [])) . ".md") => "/"]);
                        // line 44
                        echo "      ";
                    }
                    // line 45
                    echo "      ";
                    if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", [])) {
                        // line 46
                        echo "        ";
                        $context["git_repo_link_text"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", []);
                        // line 47
                        echo "      ";
                    } else {
                        // line 48
                        echo "        ";
                        if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text"))) {
                            // line 49
                            echo "          ";
                            if ( !($context["presentationslides"] ?? null)) {
                                // line 50
                                echo "            ";
                                $context["git_repo_link_text"] = "Edit this Page";
                                // line 51
                                echo "          ";
                            } else {
                                // line 52
                                echo "            ";
                                $context["git_repo_link_text"] = "Edit these Slides";
                                // line 53
                                echo "          ";
                            }
                            // line 54
                            echo "        ";
                        } else {
                            // line 55
                            echo "          ";
                            if ( !($context["presentationslides"] ?? null)) {
                                // line 56
                                echo "            ";
                                $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text");
                                // line 57
                                echo "          ";
                            } else {
                                // line 58
                                echo "            ";
                                $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_presentation_link_text");
                                // line 59
                                echo "          ";
                            }
                            // line 60
                            echo "        ";
                        }
                        // line 61
                        echo "      ";
                    }
                    // line 62
                    echo "      ";
                    if (($context["presentationslides"] ?? null)) {
                        echo "(";
                    }
                    echo "<a class=\"";
                    echo ($context["link_classes"] ?? null);
                    echo "\" href=\"";
                    echo ($context["git_repo_link_url"] ?? null);
                    echo "\" title=\"";
                    echo ($context["git_repo_link_text"] ?? null);
                    echo "\" target=\"_blank\"><i class=\"fa fa-";
                    echo ($context["git_repo_link_icon"] ?? null);
                    echo "\" aria-hidden=\"true\"></i>";
                    echo ($context["git_repo_link_text"] ?? null);
                    echo "</a>";
                    if (($context["presentationslides"] ?? null)) {
                        echo ")";
                    }
                    // line 63
                    echo "    ";
                }
                // line 64
                echo "  ";
            }
        } else {
            // line 66
            echo "  ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "git-sync", [], "array"), "enabled", []) && twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "git-sync", [], "array"), "repository", [])))) {
                // line 67
                echo "    ";
                $context["admin_panel_appearance_url"] = ($this->getAttribute(($context["grav"] ?? null), "base_url", []) . "/admin/plugins/git-sync");
                // line 68
                echo "    ";
                if ( !($context["presentationslides"] ?? null)) {
                    echo "<a class=\"";
                    echo ($context["link_classes"] ?? null);
                    echo "\" href=\"";
                    echo ($context["admin_panel_appearance_url"] ?? null);
                    echo "\" title=\"Setup Git Sync\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i>Setup Git Sync</a>";
                }
                // line 69
                echo "  ";
            } else {
                // line 70
                echo "    ";
                if ( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_git_sync_repo_link", [])) {
                    // line 71
                    echo "      ";
                    $context["git_sync_repo"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "git-sync", [], "array"), "repository", []);
                    // line 72
                    echo "      ";
                    $context["git_sync_repo_link"] = twig_replace_filter(($context["git_sync_repo"] ?? null), [".git" => "/"]);
                    // line 73
                    echo "      ";
                    if (twig_in_filter("github", ($context["git_sync_repo_link"] ?? null))) {
                        // line 74
                        echo "        ";
                        $context["git_repo_link_icon"] = "github";
                        // line 75
                        echo "        ";
                        $context["git_repo_link_url"] = ((twig_replace_filter(($context["git_sync_repo"] ?? null), [".git" => "/"]) . "blob/master") . twig_replace_filter($this->getAttribute(($context["page"] ?? null), "filePathClean", []), ["user/" => "/"]));
                        // line 76
                        echo "      ";
                    } elseif (twig_in_filter("gitlab", ($context["git_sync_repo_link"] ?? null))) {
                        // line 77
                        echo "        ";
                        $context["git_repo_link_icon"] = "gitlab";
                        // line 78
                        echo "        ";
                        $context["git_repo_link_url"] = ((twig_replace_filter(($context["git_sync_repo"] ?? null), [".git" => "/"]) . "blob/master") . twig_replace_filter($this->getAttribute(($context["page"] ?? null), "filePathClean", []), ["user/" => "/"]));
                        // line 79
                        echo "      ";
                    } elseif (twig_in_filter("bitbucket", ($context["git_sync_repo_link"] ?? null))) {
                        // line 80
                        echo "        ";
                        $context["git_repo_link_icon"] = "bitbucket";
                        // line 81
                        echo "        ";
                        $context["git_repo_link_url"] = ((twig_replace_filter(($context["git_sync_repo"] ?? null), [".git" => "/"]) . "src/master") . twig_replace_filter($this->getAttribute(($context["page"] ?? null), "filePathClean", []), ["user/" => "/"]));
                        // line 82
                        echo "      ";
                    } else {
                        // line 83
                        echo "        ";
                        $context["git_repo_link_icon"] = "git";
                        // line 84
                        echo "        ";
                        $context["git_repo_link_url"] = ((twig_replace_filter(($context["git_sync_repo"] ?? null), [".git" => "/"]) . "blob/master") . twig_replace_filter($this->getAttribute(($context["page"] ?? null), "filePathClean", []), ["user/" => "/"]));
                        // line 85
                        echo "      ";
                    }
                    // line 86
                    echo "      ";
                    if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link", [])) {
                        // line 87
                        echo "        ";
                        $context["git_repo_link_url"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link", []);
                        // line 88
                        echo "      ";
                    }
                    // line 89
                    echo "      ";
                    if ( !twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_icon"))) {
                        // line 90
                        echo "        ";
                        $context["git_repo_link_icon"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_icon");
                        // line 91
                        echo "      ";
                    }
                    // line 92
                    echo "      ";
                    if ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("type_of_git_sync_repo_link") == "view") || twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("type_of_git_sync_repo_link")))) {
                        // line 93
                        echo "        ";
                        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", [])) {
                            // line 94
                            echo "          ";
                            $context["git_repo_link_text"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", []);
                            // line 95
                            echo "        ";
                        } else {
                            // line 96
                            echo "          ";
                            if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("git_sync_repo_link_text"))) {
                                // line 97
                                echo "            ";
                                $context["git_repo_link_text"] = "View Content Repository";
                                // line 98
                                echo "          ";
                            } else {
                                // line 99
                                echo "            ";
                                if ( !($context["presentationslides"] ?? null)) {
                                    // line 100
                                    echo "              ";
                                    $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text");
                                    // line 101
                                    echo "            ";
                                } else {
                                    // line 102
                                    echo "              ";
                                    $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_presentation_link_text");
                                    // line 103
                                    echo "            ";
                                }
                                // line 104
                                echo "          ";
                            }
                            // line 105
                            echo "        ";
                        }
                        // line 106
                        echo "        ";
                        if (($context["presentationslides"] ?? null)) {
                            echo "(";
                        }
                        echo "<a class=\"";
                        echo ($context["link_classes"] ?? null);
                        echo "\" href=\"";
                        echo ($context["git_sync_repo_link"] ?? null);
                        echo "\" title=\"";
                        echo ($context["git_repo_link_text"] ?? null);
                        echo "\" target=\"_blank\"><i class=\"fa fa-";
                        echo ($context["git_repo_link_icon"] ?? null);
                        echo "\" aria-hidden=\"true\"></i>";
                        echo ($context["git_repo_link_text"] ?? null);
                        echo "</a>";
                        if (($context["presentationslides"] ?? null)) {
                            echo ")";
                        }
                        // line 107
                        echo "      ";
                    } else {
                        // line 108
                        echo "        ";
                        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "count", []) &&  !($context["presentationslides"] ?? null))) {
                            // line 109
                            echo "          ";
                            $context["git_repo_link_url"] = twig_replace_filter(($context["git_repo_link_url"] ?? null), [(("/" . $this->getAttribute(                            // line 110
($context["page"] ?? null), "template", [])) . ".md") => "/"]);
                            // line 112
                            echo "        ";
                        }
                        // line 113
                        echo "        ";
                        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", [])) {
                            // line 114
                            echo "          ";
                            $context["git_repo_link_text"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", []);
                            // line 115
                            echo "        ";
                        } else {
                            // line 116
                            echo "        ";
                            if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text"))) {
                                // line 117
                                echo "          ";
                                if ( !($context["presentationslides"] ?? null)) {
                                    // line 118
                                    echo "            ";
                                    $context["git_repo_link_text"] = "Edit this Page";
                                    // line 119
                                    echo "          ";
                                } else {
                                    // line 120
                                    echo "            ";
                                    $context["git_repo_link_text"] = "Edit these Slides";
                                    // line 121
                                    echo "          ";
                                }
                                // line 122
                                echo "          ";
                            } else {
                                // line 123
                                echo "            ";
                                if ( !($context["presentationslides"] ?? null)) {
                                    // line 124
                                    echo "              ";
                                    $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text");
                                    // line 125
                                    echo "            ";
                                } else {
                                    // line 126
                                    echo "              ";
                                    $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_presentation_link_text");
                                    // line 127
                                    echo "            ";
                                }
                                // line 128
                                echo "          ";
                            }
                            // line 129
                            echo "        ";
                        }
                        // line 130
                        echo "        ";
                        if (($context["presentationslides"] ?? null)) {
                            echo "(";
                        }
                        echo "<a class=\"";
                        echo ($context["link_classes"] ?? null);
                        echo "\" href=\"";
                        echo ($context["git_repo_link_url"] ?? null);
                        echo "\" title=\"";
                        echo ($context["git_repo_link_text"] ?? null);
                        echo "\" target=\"_blank\"><i class=\"fa fa-";
                        echo ($context["git_repo_link_icon"] ?? null);
                        echo "\" aria-hidden=\"true\"></i>";
                        echo ($context["git_repo_link_text"] ?? null);
                        echo "</a>";
                        if (($context["presentationslides"] ?? null)) {
                            echo ")";
                        }
                        // line 131
                        echo "      ";
                    }
                    // line 132
                    echo "    ";
                }
                // line 133
                echo "  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "partials/git_sync_repo_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  469 => 133,  466 => 132,  463 => 131,  444 => 130,  441 => 129,  438 => 128,  435 => 127,  432 => 126,  429 => 125,  426 => 124,  423 => 123,  420 => 122,  417 => 121,  414 => 120,  411 => 119,  408 => 118,  405 => 117,  402 => 116,  399 => 115,  396 => 114,  393 => 113,  390 => 112,  388 => 110,  386 => 109,  383 => 108,  380 => 107,  361 => 106,  358 => 105,  355 => 104,  352 => 103,  349 => 102,  346 => 101,  343 => 100,  340 => 99,  337 => 98,  334 => 97,  331 => 96,  328 => 95,  325 => 94,  322 => 93,  319 => 92,  316 => 91,  313 => 90,  310 => 89,  307 => 88,  304 => 87,  301 => 86,  298 => 85,  295 => 84,  292 => 83,  289 => 82,  286 => 81,  283 => 80,  280 => 79,  277 => 78,  274 => 77,  271 => 76,  268 => 75,  265 => 74,  262 => 73,  259 => 72,  256 => 71,  253 => 70,  250 => 69,  241 => 68,  238 => 67,  235 => 66,  231 => 64,  228 => 63,  209 => 62,  206 => 61,  203 => 60,  200 => 59,  197 => 58,  194 => 57,  191 => 56,  188 => 55,  185 => 54,  182 => 53,  179 => 52,  176 => 51,  173 => 50,  170 => 49,  167 => 48,  164 => 47,  161 => 46,  158 => 45,  155 => 44,  153 => 42,  151 => 41,  148 => 40,  145 => 39,  142 => 38,  139 => 37,  136 => 36,  133 => 35,  126 => 33,  119 => 32,  116 => 31,  113 => 30,  110 => 29,  107 => 28,  104 => 27,  101 => 26,  98 => 25,  95 => 24,  92 => 23,  89 => 22,  86 => 21,  83 => 20,  80 => 19,  77 => 18,  74 => 17,  71 => 16,  68 => 15,  65 => 14,  62 => 13,  59 => 12,  56 => 11,  53 => 10,  50 => 9,  47 => 8,  44 => 7,  41 => 6,  38 => 5,  35 => 4,  32 => 3,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# new twig template file - hibbittsdesign.org #}
{% if theme_var('git_sync_repo_link') %}
  {% if not page.header.hide_git_sync_repo_link %}
    {% set git_repo_link_url = theme_var('git_sync_repo_link') %}
    {% if theme_var('custom_git_sync_repo_link_icon')is empty %}
      {% if 'github' in git_repo_link_url %}
        {% set git_repo_link_icon = \"github\" %}
      {% elseif 'gitlab' in git_repo_link_url %}
        {% set git_repo_link_icon = \"gitlab\" %}
      {% elseif 'bitbucket' in git_repo_link_url %}
        {% set git_repo_link_icon = \"bitbucket\" %}
      {% else %}
        {% set git_repo_link_icon = \"git\" %}
      {% endif %}
    {% else %}
      {% set git_repo_link_icon = theme_var('custom_git_sync_repo_link_icon') %}
    {% endif %}
    {% if theme_var('type_of_git_sync_repo_link') == 'view' or theme_var('type_of_git_sync_repo_link')is empty %}
      {% if page.header.git_sync_repo_link_text %}
        {% set git_repo_link_text = page.header.git_sync_repo_link_text %}
      {% else %}
        {% if theme_var('custom_git_sync_repo_link_text')is empty %}
          {% set git_repo_link_text = 'View Content Repository' %}
        {% else %}
          {% if not presentationslides %}
            {% set git_repo_link_text = theme_var('custom_git_sync_repo_link_text') %}
          {% else %}
            {% set git_repo_link_text = theme_var('custom_git_sync_repo_presentation_link_text') %}
          {% endif %}
        {% endif %}
      {% endif %}
      <a class=\"newwindow external-link\" href=\"{{ git_repo_link_url }}\" title=\"{{ git_repo_link_text }}\" target=\"_blank\">
        <i class=\"fa fa-{{ git_repo_link_icon }}\" aria-hidden=\"true\"></i>{{ git_repo_link_text }}</a>
    {% else %}
      {% if page.header.git_sync_repo_link %}
        {% set git_repo_link_url = page.header.git_sync_repo_link %}
      {% else %}
        {% set git_repo_link_url = git_repo_link_url ~ ('/' ~ page.filePathClean) | replace({'/user/': '/'}) %}
      {% endif %}
      {% if (page.children.count) and (not presentationslides) %}
        {% set git_repo_link_url = (git_repo_link_url | replace({
          ('/' ~ page.template ~ '.md'): '/'
        })) %}
      {% endif %}
      {% if page.header.git_sync_repo_link_text %}
        {% set git_repo_link_text = page.header.git_sync_repo_link_text %}
      {% else %}
        {% if theme_var('custom_git_sync_repo_link_text')is empty %}
          {% if not presentationslides %}
            {% set git_repo_link_text = 'Edit this Page' %}
          {% else %}
            {% set git_repo_link_text = 'Edit these Slides' %}
          {% endif %}
        {% else %}
          {% if not presentationslides %}
            {% set git_repo_link_text = theme_var('custom_git_sync_repo_link_text') %}
          {% else %}
            {% set git_repo_link_text = theme_var('custom_git_sync_repo_presentation_link_text') %}
          {% endif %}
        {% endif %}
      {% endif %}
      {% if presentationslides %}({% endif %}<a class=\"{{ link_classes }}\" href=\"{{ git_repo_link_url }}\" title=\"{{ git_repo_link_text }}\" target=\"_blank\"><i class=\"fa fa-{{ git_repo_link_icon }}\" aria-hidden=\"true\"></i>{{ git_repo_link_text }}</a>{% if presentationslides %}){% endif %}
    {% endif %}
  {% endif %}
{% else %}
  {% if config.plugins['git-sync'].enabled and config.plugins['git-sync'].repository is empty %}
    {% set admin_panel_appearance_url = grav.base_url ~ '/admin/plugins/git-sync' %}
    {% if not presentationslides %}<a class=\"{{ link_classes }}\" href=\"{{ admin_panel_appearance_url }}\" title=\"Setup Git Sync\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i>Setup Git Sync</a>{% endif %}
  {% else %}
    {% if not page.header.hide_git_sync_repo_link %}
      {% set git_sync_repo = config.plugins['git-sync'].repository %}
      {% set git_sync_repo_link = (git_sync_repo | replace({'.git': '/'})) %}
      {% if 'github' in git_sync_repo_link %}
        {% set git_repo_link_icon = \"github\" %}
        {% set git_repo_link_url = (git_sync_repo | replace({'.git': '/'})) ~ 'blob/master' ~ (page.filePathClean) | replace({'user/': '/'}) %}
      {% elseif 'gitlab' in git_sync_repo_link %}
        {% set git_repo_link_icon = \"gitlab\" %}
        {% set git_repo_link_url = (git_sync_repo | replace({'.git': '/'})) ~ 'blob/master' ~ (page.filePathClean) | replace({'user/': '/'}) %}
      {% elseif 'bitbucket' in git_sync_repo_link %}
        {% set git_repo_link_icon = \"bitbucket\" %}
        {% set git_repo_link_url = (git_sync_repo | replace({'.git': '/'})) ~ 'src/master' ~ (page.filePathClean) | replace({'user/': '/'}) %}
      {% else %}
        {% set git_repo_link_icon = \"git\" %}
        {% set git_repo_link_url = (git_sync_repo | replace({'.git': '/'})) ~ 'blob/master' ~ (page.filePathClean) | replace({'user/': '/'}) %}
      {% endif %}
      {% if page.header.git_sync_repo_link %}
        {% set git_repo_link_url = page.header.git_sync_repo_link %}
      {% endif %}
      {% if theme_var('custom_git_sync_repo_link_icon')is not empty %}
        {% set git_repo_link_icon = theme_var('custom_git_sync_repo_link_icon') %}
      {% endif %}
      {% if theme_var('type_of_git_sync_repo_link') == 'view' or theme_var('type_of_git_sync_repo_link')is empty %}
        {% if page.header.git_sync_repo_link_text %}
          {% set git_repo_link_text = page.header.git_sync_repo_link_text %}
        {% else %}
          {% if theme_var('git_sync_repo_link_text')is empty %}
            {% set git_repo_link_text = 'View Content Repository' %}
          {% else %}
            {% if not presentationslides %}
              {% set git_repo_link_text = theme_var('custom_git_sync_repo_link_text') %}
            {% else %}
              {% set git_repo_link_text = theme_var('custom_git_sync_repo_presentation_link_text') %}
            {% endif %}
          {% endif %}
        {% endif %}
        {% if presentationslides %}({% endif %}<a class=\"{{ link_classes }}\" href=\"{{ git_sync_repo_link}}\" title=\"{{ git_repo_link_text }}\" target=\"_blank\"><i class=\"fa fa-{{ git_repo_link_icon }}\" aria-hidden=\"true\"></i>{{ git_repo_link_text }}</a>{% if presentationslides %}){% endif %}
      {% else %}
        {% if (page.children.count) and (not presentationslides) %}
          {% set git_repo_link_url = (git_repo_link_url | replace({
            ('/' ~ page.template ~ '.md'): '/'
          })) %}
        {% endif %}
        {% if page.header.git_sync_repo_link_text %}
          {% set git_repo_link_text = page.header.git_sync_repo_link_text %}
        {% else %}
        {% if theme_var('custom_git_sync_repo_link_text')is empty %}
          {% if not presentationslides %}
            {% set git_repo_link_text = 'Edit this Page' %}
          {% else %}
            {% set git_repo_link_text = 'Edit these Slides' %}
          {% endif %}
          {% else %}
            {% if not presentationslides %}
              {% set git_repo_link_text = theme_var('custom_git_sync_repo_link_text') %}
            {% else %}
              {% set git_repo_link_text = theme_var('custom_git_sync_repo_presentation_link_text') %}
            {% endif %}
          {% endif %}
        {% endif %}
        {% if presentationslides %}({% endif %}<a class=\"{{ link_classes }}\" href=\"{{ git_repo_link_url }}\" title=\"{{ git_repo_link_text }}\" target=\"_blank\"><i class=\"fa fa-{{ git_repo_link_icon }}\" aria-hidden=\"true\"></i>{{ git_repo_link_text }}</a>{% if presentationslides %}){% endif %}
      {% endif %}
    {% endif %}
  {% endif %}
{% endif %}
", "partials/git_sync_repo_link.html.twig", "/usr/share/nginx/html/user/themes/quark-open-publishing/templates/partials/git_sync_repo_link.html.twig");
    }
}
