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
class __TwigTemplate_6c0ae0155ff1bf08b9c1029456a96d718e0d159c05dc1e7d61bc449b814231bf extends \Twig\Template
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
        echo "<article id=\"post-";
        echo $this->getAttribute(($context["loop"] ?? null), "index", []);
        echo "\" class=\"post-";
        echo $this->getAttribute(($context["loop"] ?? null), "index", []);
        echo " post type-post status-publish format-standard has-post-thumbnail hentry category-cakes tag-no-excerpt\">

  <div class=\"entry-media ";
        // line 3
        if (($context["truncate"] ?? null)) {
            echo "entry-";
            if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "youtube", []) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "soundcloud", [])) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "vimeo", []))) {
                echo "video";
            } else {
                echo "image";
            }
        } else {
            echo " resp_video";
        }
        echo "\">
    <figure class=\"post-thumbnail\">
      ";
        // line 5
        if (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []))) {
            // line 6
            echo "      ";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", [])), "cropZoom", [0 => 338, 1 => 451], "method"), "html", [0 => "", 1 => "", 2 => "attachment-receptar-featured size-receptar-featured wp-post-image"], "method");
            echo "
      ";
        } else {
            // line 8
            echo "      <img class=\"attachment-receptar-featured size-receptar-featured wp-post-image\" src=\"";
            echo ($context["theme_url"] ?? null);
            echo "/images/";
            echo $this->getAttribute(($context["site"] ?? null), "global_featured_image", []);
            echo "\">
      ";
        }
        // line 10
        echo "    </figure>
  </div>

  <div class=\"entry-inner\">
    <div class=\"entry-inner";
        // line 14
        if (($context["truncate"] ?? null)) {
            echo "-content";
        }
        echo "\">

      <header class=\"entry-header\">
        ";
        // line 17
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", [])) {
            // line 18
            echo "        <h1 class=\"entry-title\">
          ";
            // line 19
            if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === false)) {
                // line 20
                echo "          <a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", []);
                echo "\"><i class=\"fa fa-angle-double-right\"></i></a>
          ";
            }
            // line 22
            echo "          <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", []);
            echo "\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", []);
            echo "</a>
        </h1>
        ";
        } else {
            // line 25
            echo "        <h1 class=\"entry-title\"><a href=\"";
            echo $this->getAttribute(($context["page"] ?? null), "url", []);
            echo "\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", []);
            echo "</a></h1>
        ";
        }
        // line 27
        echo "        ";
        if ( !($context["truncate"] ?? null)) {
            // line 28
            echo "        <div class=\"entry-category\">
          ";
            // line 29
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "category", [])) {
                // line 30
                echo "          <span class=\"cat-links entry-meta-element\">
            ";
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "category", []));
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
                    // line 32
                    echo "            <a href=\"";
                    echo ($context["base_url"] ?? null);
                    echo "/category:";
                    echo $context["category"];
                    echo "\" rel=\"category tag\">";
                    echo $context["category"];
                    if ( !$this->getAttribute($context["loop"], "last", [])) {
                        echo ", ";
                    }
                    echo "</a>
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
                // line 34
                echo "          </span>
          ";
            }
            // line 36
            echo "        </div>
        ";
        }
        // line 38
        echo "      </header>

      ";
        // line 40
        if ( !($context["truncate"] ?? null)) {
            // line 41
            echo "      <div class=\"entry-meta entry-meta-bottom\">
        <time datetime=\"";
            // line 42
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translateArray("MONTHS_OF_THE_YEAR", (twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? null), "date", []), "n") - 1));
            echo " ";
            echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "d, Y");
            echo "\" class=\"entry-date entry-meta-element published\" title=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translateArray("MONTHS_OF_THE_YEAR", (twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? null), "date", []), "n") - 1));
            echo " ";
            echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "d, Y");
            echo "\" itemprop=\"datePublished\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translateArray("MONTHS_OF_THE_YEAR", (twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? null), "date", []), "n") - 1));
            echo " ";
            echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "d, Y");
            echo "</time>

        <span class=\"author vcard entry-meta-element\">
          ";
            // line 45
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "name", []) || $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "name", []))) {
                // line 46
                echo "          ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "name", [])) {
                    // line 47
                    echo "          ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "url", [])) {
                        // line 48
                        echo "          <a href=\"";
                        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "url", []);
                        echo "\">";
                        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "name", []);
                        echo "</a>
          ";
                    } else {
                        // line 50
                        echo "          ";
                        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "name", []);
                        echo "
          ";
                    }
                    // line 52
                    echo "          ";
                } else {
                    // line 53
                    echo "          ";
                    if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "url", [])) {
                        // line 54
                        echo "          <a href=\"";
                        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "url", []);
                        echo "\">";
                        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "name", []);
                        echo "</a>
          ";
                    } else {
                        // line 56
                        echo "          ";
                        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "name", []);
                        echo "
          ";
                    }
                    // line 58
                    echo "          ";
                }
                // line 59
                echo "          ";
            }
            // line 60
            echo "        </span>
        ";
            // line 61
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", [])) {
                // line 62
                echo "        <span class=\"tags-links entry-meta-element\">
          ";
                // line 63
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", []));
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
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 64
                    echo "          <a href=\"";
                    echo ($context["base_url"] ?? null);
                    echo "/tag:";
                    echo $context["tag"];
                    echo "\" rel=\"tag\">";
                    echo $context["tag"];
                    if ( !$this->getAttribute($context["loop"], "last", [])) {
                        echo ", ";
                    }
                    echo "</a>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "        </span>
        ";
            }
            // line 68
            echo "      </div>
      ";
        }
        // line 70
        echo "      <div class=\"clear\"></div>

      <div class=\"entry-content\">

        ";
        // line 74
        if ( !($context["truncate"] ?? null)) {
            // line 75
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "description", [])) {
                // line 76
                echo "        <div class=\"fl-module fl-module-rich-text text-center\" style=\"margin-bottom: 6%;\">
          <p>
            ";
                // line 78
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "description", []));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 79
                    echo "            ";
                    if ($this->getAttribute($context["loop"], "last", [])) {
                        echo "</br>";
                    }
                    // line 80
                    echo "            <strong>";
                    echo $this->getAttribute($context["item"], "option", []);
                    echo "</strong> ";
                    echo $this->getAttribute($context["item"], "value", []);
                    if ( !$this->getAttribute($context["loop"], "last", [])) {
                        echo ", ";
                    }
                    // line 81
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo "          </p>
        </div>
        ";
            }
            // line 85
            echo "
        ";
            // line 86
            if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "youtube", []) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "vimeo", [])) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "soundcloud", []))) {
                // line 87
                echo "        <div class=\"fit-vids-style\">
        <style>
        .fluid-width-video-wrapper {width: 100%;position: relative;padding: 0;}                                                                                   .fluid-width-video-wrapper iframe, .fluid-width-video-wrapper object, .fluid-width-video-wrapper embed { position: absolute; top: 0;                                  left: 0; width: 100%; height: 100%;}
        </style>
        </div>

        <div class=\"fl-row fl-row-full-width fl-row-bg-none\" style=\"padding-bottom: 1.62rem;\">
          <div class=\"fl-video fl-embed-video\">
            <div class=\"fluid-width-video-wrapper\" style=\"padding-top: 56.2%;\">
              ";
                // line 96
                if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "youtube", [])) {
                    // line 97
                    echo "              <iframe src=\"";
                    echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "youtube", []);
                    echo "?showinfo=0\" frameborder=\"0\" allowfullscreen></iframe>
              ";
                }
                // line 99
                echo "              ";
                if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "vimeo", [])) {
                    // line 100
                    echo "              <iframe src=\"";
                    echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "vimeo", []);
                    echo "\" frameborder=\"0\" allowfullscreen=\"\"></iframe>
              ";
                }
                // line 102
                echo "              ";
                if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "soundcloud", [])) {
                    // line 103
                    echo "              <iframe width=\"100%\" height=\"403\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/";
                    echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "soundcloud", []);
                    echo "&amp;auto_play=false&amp;hide_related=true&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true&amp;buying=false\"></iframe>
              ";
                }
                // line 105
                echo "            </div>
          </div>
        </div>
        ";
            }
            // line 109
            echo "
        ";
            // line 110
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "ingredients", [])) {
                // line 111
                echo "        <div class=\"fl-row fl-row-bg-none\">
          <div class=\"fl-row-content-wrap\">
          ";
                // line 113
                if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "ingredients_title", [])) {
                    // line 114
                    echo "          <div class=\"fl-rich-text\">
            <h2>";
                    // line 115
                    echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "ingredients_title", []);
                    echo "</h2>
          </div>
          ";
                }
                // line 118
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "ingredients", []), 2));
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 119
                    echo "          <div class=\"fl-col-group\">
            ";
                    // line 120
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["row"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 121
                        echo "            <div class=\"fl-col fl-col-small\" style=\"width: ";
                        if ((count($context["row"]) < 2)) {
                            echo "100";
                        } else {
                            echo "50";
                        }
                        echo "%;\">
              <div class=\"fl-rich-text\">
                <h3>";
                        // line 123
                        echo $this->getAttribute($context["item"], "title", []);
                        echo "</h3>
                <ul>
                  ";
                        // line 125
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "list", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
                            // line 126
                            echo "                  <li>";
                            echo $context["ingredient"];
                            echo "</li>
                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredient'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 128
                        echo "                </ul>
              </div>
            </div>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 132
                    echo "          </div>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 134
                echo "        </div>
        </div>
        ";
            }
            // line 137
            echo "        ";
        }
        // line 138
        echo "        <div class=\"clear\"></div>

        ";
        // line 140
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === false)) {
            // line 141
            echo "          ";
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "
        ";
            // line 142
            if ( !($context["truncate"] ?? null)) {
                // line 143
                echo "          ";
                $context["show_prev_next"] = true;
                // line 144
                echo "        ";
            }
            // line 145
            echo "        ";
        } elseif ((($context["truncate"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "summary", []) != $this->getAttribute(($context["page"] ?? null), "content", [])))) {
            // line 146
            echo "          ";
            if (($this->getAttribute($this->getAttribute(($context["site"] ?? null), "summary", []), "striptags", []) == true)) {
                // line 147
                echo "            ";
                echo strip_tags($this->getAttribute(($context["page"] ?? null), "summary", []));
                echo "
          ";
            } else {
                // line 149
                echo "            ";
                echo $this->getAttribute(($context["page"] ?? null), "summary", []);
                echo "
          ";
            }
            // line 151
            echo "        ";
        } elseif (($context["truncate"] ?? null)) {
            // line 152
            echo "          ";
            echo \Grav\Common\Utils::truncate($this->getAttribute(($context["page"] ?? null), "content", []), 550);
            echo "
        ";
        } else {
            // line 154
            echo "          ";
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "
          ";
            // line 155
            $context["show_prev_next"] = true;
            // line 156
            echo "        ";
        }
        // line 157
        echo "
        ";
        // line 158
        if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === false)) {
            // line 159
            echo "        ";
            if ((($context["truncate"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "summary", []) != $this->getAttribute(($context["page"] ?? null), "content", [])))) {
                // line 160
                echo "        <div class=\"link-more\"><a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", []);
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "READ_MORE");
                echo "</a></div>
        ";
            } elseif (            // line 161
($context["truncate"] ?? null)) {
                // line 162
                echo "        <div class=\"link-more\"><a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", []);
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "READ_MORE");
                echo "</a></div>
        ";
            }
            // line 164
            echo "        ";
        }
        // line 165
        echo "
        ";
        // line 166
        if ( !($context["truncate"] ?? null)) {
            // line 167
            echo "        <div class=\"sharedaddy sd-sharing-enabled\">
          <div class=\"robots-nocontent sd-block sd-social sd-social-icon-text sd-sharing\">
            <h3 class=\"sd-title\">";
            // line 169
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "SHARE");
            echo "</h3>
            <div class=\"sd-content\">
              <ul>
                <li class=\"share-facebook\">
                  <a rel=\"nofollow\" data-shared=\"sharing-facebook-368\" class=\"share-facebook sd-button share-icon\" href=\"https://www.facebook.com/sharer/sharer.php?u=";
            // line 173
            echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method");
            echo "\" target=\"_blank\" title=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
            echo "\"><span>Facebook</span></a>
                </li>
                <li class=\"share-twitter\">
                  <a rel=\"nofollow\" data-shared=\"sharing-twitter-368\" class=\"share-twitter sd-button share-icon\" href=\"http://twitter.com/home?status=";
            // line 176
            echo twig_replace_filter($this->getAttribute(($context["page"] ?? null), "title", []), [" " => "%20"]);
            echo "-";
            echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method");
            echo "\" target=\"_blank\" title=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
            echo "\"><span>Twitter</span></a>
                </li>
                <li class=\"share-google-plus-1\">
                  <a rel=\"nofollow\" data-shared=\"sharing-google-368\" class=\"share-google-plus-1 sd-button share-icon\" href=\"https://plus.google.com/share?url=";
            // line 179
            echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method");
            echo "\" target=\"_blank\" title=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
            echo "\"><span>Google</span></a>
                </li>
                <li class=\"share-pinterest\">
                  <a rel=\"nofollow\" data-shared=\"sharing-pinterest-368\" class=\"share-pinterest sd-button share-icon\" href=\"https://www.pinterest.com/pin/create/button/?url=";
            // line 182
            echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method");
            echo "\" target=\"_blank\" title=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
            echo "\"><span>Pinterest</span></a>
                </li>
                <li class=\"share-end\"></li>
              </ul>
            </div>
          </div>
        </div>
        <script type=\"text/javascript\">var windowOpen;jQuery(document).on('ready post-load',function(){jQuery('a.share-facebook').on('click',function(){if('undefined'!==typeof windowOpen){windowOpen.close();}
        windowOpen=window.open(jQuery(this).attr('href'),'wpcomfacebook','menubar=1,resizable=1,width=600,height=400');return false;});});</script>
        <script type=\"text/javascript\">var windowOpen;jQuery(document).on('ready post-load',function(){jQuery('a.share-twitter').on('click',function(){if('undefined'!==typeof windowOpen){windowOpen.close();}
        windowOpen=window.open(jQuery(this).attr('href'),'wpcomtwitter','menubar=1,resizable=1,width=600,height=350');return false;});});</script>
        <script type=\"text/javascript\">var windowOpen;jQuery(document).on('ready post-load',function(){jQuery('a.share-google-plus-1').on('click',function(){if('undefined'!==typeof windowOpen){windowOpen.close();}
        windowOpen=window.open(jQuery(this).attr('href'),'wpcomgoogle-plus-1','menubar=1,resizable=1,width=480,height=550');return false;});});</script>
        ";
        }
        // line 196
        echo "      </div>

      ";
        // line 198
        if ( !($context["truncate"] ?? null)) {
            // line 199
            echo "      <div id=\"jp-relatedposts\" class=\"jp-relatedposts\" style=\"display: block;\">
        <h3 class=\"jp-relatedposts-headline\"><em>";
            // line 200
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "RELATED_POSTS");
            echo "</em></h3>
        <div class=\"jp-relatedposts-items jp-relatedposts-items-visual\">
          ";
            // line 202
            $this->loadTemplate("partials/relatedpages.html.twig", "partials/blog_item.html.twig", 202)->display($context);
            // line 203
            echo "        </div>
      </div>
      <hr/>
      ";
        }
        // line 207
        echo "
      ";
        // line 208
        if ( !($context["truncate"] ?? null)) {
            // line 209
            echo "      ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "jscomments", []), "enabled", []) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "jscomments", []), "provider", []))) {
                // line 210
                echo "      <div class=\"comments-area-wrapper\">
        <div class=\"comments-area\">
        <h2 class=\"comments-title\">Comments:</h2>
          ";
                // line 213
                echo call_user_func_array($this->env->getFunction('jscomments')->getCallable(), [$this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "jscomments", []), "provider", [])]);
                echo "
        </div>
      </div>
      ";
            }
            // line 217
            echo "
      ";
            // line 218
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "comments", []), "enabled", [])) {
                // line 219
                echo "      <div class=\"comments-area-wrapper\">
        <div class=\"comments-area\">
          <h2 class=\"comments-title\">";
                // line 221
                echo twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "comments", []));
                echo " Comments:</h2>
          ";
                // line 222
                $this->loadTemplate("partials/comments.html.twig", "partials/blog_item.html.twig", 222)->display(twig_array_merge($context, ["page" => ($context["page"] ?? null)]));
                // line 223
                echo "        </div>
      </div>
      ";
            }
            // line 226
            echo "
      ";
        }
        // line 228
        echo "    </div>
  </div>
</article>
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
        return array (  709 => 228,  705 => 226,  700 => 223,  698 => 222,  694 => 221,  690 => 219,  688 => 218,  685 => 217,  678 => 213,  673 => 210,  670 => 209,  668 => 208,  665 => 207,  659 => 203,  657 => 202,  652 => 200,  649 => 199,  647 => 198,  643 => 196,  624 => 182,  616 => 179,  606 => 176,  598 => 173,  591 => 169,  587 => 167,  585 => 166,  582 => 165,  579 => 164,  571 => 162,  569 => 161,  562 => 160,  559 => 159,  557 => 158,  554 => 157,  551 => 156,  549 => 155,  544 => 154,  538 => 152,  535 => 151,  529 => 149,  523 => 147,  520 => 146,  517 => 145,  514 => 144,  511 => 143,  509 => 142,  504 => 141,  502 => 140,  498 => 138,  495 => 137,  490 => 134,  483 => 132,  474 => 128,  465 => 126,  461 => 125,  456 => 123,  446 => 121,  442 => 120,  439 => 119,  434 => 118,  428 => 115,  425 => 114,  423 => 113,  419 => 111,  417 => 110,  414 => 109,  408 => 105,  402 => 103,  399 => 102,  393 => 100,  390 => 99,  384 => 97,  382 => 96,  371 => 87,  369 => 86,  366 => 85,  361 => 82,  347 => 81,  339 => 80,  334 => 79,  317 => 78,  313 => 76,  310 => 75,  308 => 74,  302 => 70,  298 => 68,  294 => 66,  270 => 64,  253 => 63,  250 => 62,  248 => 61,  245 => 60,  242 => 59,  239 => 58,  233 => 56,  225 => 54,  222 => 53,  219 => 52,  213 => 50,  205 => 48,  202 => 47,  199 => 46,  197 => 45,  181 => 42,  178 => 41,  176 => 40,  172 => 38,  168 => 36,  164 => 34,  140 => 32,  123 => 31,  120 => 30,  118 => 29,  115 => 28,  112 => 27,  104 => 25,  95 => 22,  89 => 20,  87 => 19,  84 => 18,  82 => 17,  74 => 14,  68 => 10,  60 => 8,  54 => 6,  52 => 5,  38 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<article id=\"post-{{ loop.index }}\" class=\"post-{{ loop.index }} post type-post status-publish format-standard has-post-thumbnail hentry category-cakes tag-no-excerpt\">

  <div class=\"entry-media {% if truncate %}entry-{% if page.header.youtube or page.header.soundcloud or page.header.vimeo %}video{% else %}image{% endif %}{% else %} resp_video{% endif %}\">
    <figure class=\"post-thumbnail\">
      {% if page.media.images|first %}
      {{ page.media.images|first.cropZoom(338,451).html('','', 'attachment-receptar-featured size-receptar-featured wp-post-image') }}
      {% else %}
      <img class=\"attachment-receptar-featured size-receptar-featured wp-post-image\" src=\"{{ theme_url }}/images/{{ site.global_featured_image }}\">
      {% endif %}
    </figure>
  </div>

  <div class=\"entry-inner\">
    <div class=\"entry-inner{% if truncate %}-content{% endif %}\">

      <header class=\"entry-header\">
        {% if page.header.link %}
        <h1 class=\"entry-title\">
          {% if page.header.continue_link is not sameas(false) %}
          <a href=\"{{ page.url }}\"><i class=\"fa fa-angle-double-right\"></i></a>
          {% endif %}
          <a href=\"{{ page.header.link }}\">{{ page.title }}</a>
        </h1>
        {% else %}
        <h1 class=\"entry-title\"><a href=\"{{ page.url }}\">{{ page.title }}</a></h1>
        {% endif %}
        {% if not truncate %}
        <div class=\"entry-category\">
          {% if page.taxonomy.category %}
          <span class=\"cat-links entry-meta-element\">
            {% for category in page.taxonomy.category %}
            <a href=\"{{ base_url }}/category:{{ category }}\" rel=\"category tag\">{{ category }}{% if not loop.last %}, {% endif %}</a>
            {% endfor %}
          </span>
          {% endif %}
        </div>
        {% endif %}
      </header>

      {% if not truncate %}
      <div class=\"entry-meta entry-meta-bottom\">
        <time datetime=\"{{ 'MONTHS_OF_THE_YEAR'|ta(post.date|date('n') - 1) }} {{ page.date|date(\"d, Y\") }}\" class=\"entry-date entry-meta-element published\" title=\"{{ 'MONTHS_OF_THE_YEAR'|ta(post.date|date('n') - 1) }} {{ page.date|date(\"d, Y\") }}\" itemprop=\"datePublished\">{{ 'MONTHS_OF_THE_YEAR'|ta(post.date|date('n') - 1) }} {{ page.date|date(\"d, Y\") }}</time>

        <span class=\"author vcard entry-meta-element\">
          {% if page.header.author.name or site.author.name %}
          {% if page.header.author.name %}
          {% if page.header.author.url %}
          <a href=\"{{ page.header.author.url }}\">{{ page.header.author.name }}</a>
          {% else %}
          {{ page.header.author.name }}
          {% endif %}
          {% else %}
          {% if site.author.url %}
          <a href=\"{{ site.author.url }}\">{{ site.author.name }}</a>
          {% else %}
          {{ site.author.name }}
          {% endif %}
          {% endif %}
          {% endif %}
        </span>
        {% if page.taxonomy.tag %}
        <span class=\"tags-links entry-meta-element\">
          {% for tag in page.taxonomy.tag %}
          <a href=\"{{ base_url }}/tag:{{ tag }}\" rel=\"tag\">{{ tag }}{% if not loop.last %}, {% endif %}</a>
          {% endfor %}
        </span>
        {% endif %}
      </div>
      {% endif %}
      <div class=\"clear\"></div>

      <div class=\"entry-content\">

        {% if not truncate %}
        {% if page.header.description %}
        <div class=\"fl-module fl-module-rich-text text-center\" style=\"margin-bottom: 6%;\">
          <p>
            {% for item in page.header.description %}
            {% if loop.last %}</br>{% endif %}
            <strong>{{ item.option }}</strong> {{ item.value }}{% if not loop.last %}, {% endif %}
            {% endfor %}
          </p>
        </div>
        {% endif %}

        {% if page.header.youtube or page.header.vimeo or page.header.soundcloud %}
        <div class=\"fit-vids-style\">
        <style>
        .fluid-width-video-wrapper {width: 100%;position: relative;padding: 0;}                                                                                   .fluid-width-video-wrapper iframe, .fluid-width-video-wrapper object, .fluid-width-video-wrapper embed { position: absolute; top: 0;                                  left: 0; width: 100%; height: 100%;}
        </style>
        </div>

        <div class=\"fl-row fl-row-full-width fl-row-bg-none\" style=\"padding-bottom: 1.62rem;\">
          <div class=\"fl-video fl-embed-video\">
            <div class=\"fluid-width-video-wrapper\" style=\"padding-top: 56.2%;\">
              {% if page.header.youtube %}
              <iframe src=\"{{ page.header.youtube }}?showinfo=0\" frameborder=\"0\" allowfullscreen></iframe>
              {% endif %}
              {% if page.header.vimeo %}
              <iframe src=\"{{ page.header.vimeo }}\" frameborder=\"0\" allowfullscreen=\"\"></iframe>
              {% endif %}
              {% if page.header.soundcloud %}
              <iframe width=\"100%\" height=\"403\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/{{ page.header.soundcloud }}&amp;auto_play=false&amp;hide_related=true&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true&amp;buying=false\"></iframe>
              {% endif %}
            </div>
          </div>
        </div>
        {% endif %}

        {% if page.header.ingredients %}
        <div class=\"fl-row fl-row-bg-none\">
          <div class=\"fl-row-content-wrap\">
          {% if page.header.ingredients_title %}
          <div class=\"fl-rich-text\">
            <h2>{{ page.header.ingredients_title }}</h2>
          </div>
          {% endif %}
          {% for row in page.header.ingredients|batch(2) %}
          <div class=\"fl-col-group\">
            {% for item in row %}
            <div class=\"fl-col fl-col-small\" style=\"width: {% if row|count < 2 %}100{% else %}50{% endif %}%;\">
              <div class=\"fl-rich-text\">
                <h3>{{ item.title }}</h3>
                <ul>
                  {% for ingredient in item.list %}
                  <li>{{ ingredient }}</li>
                  {% endfor %}
                </ul>
              </div>
            </div>
            {% endfor %}
          </div>
          {% endfor %}
        </div>
        </div>
        {% endif %}
        {% endif %}
        <div class=\"clear\"></div>

        {% if page.header.continue_link is sameas(false) %}
          {{ page.content }}
        {% if not truncate %}
          {% set show_prev_next = true %}
        {% endif %}
        {% elseif truncate and page.summary != page.content %}
          {% if site.summary.striptags == true %}
            {{ page.summary|striptags }}
          {% else %}
            {{ page.summary }}
          {% endif %}
        {% elseif truncate %}
          {{ page.content|truncate(550) }}
        {% else %}
          {{ page.content }}
          {% set show_prev_next = true %}
        {% endif %}

        {% if page.header.continue_link is not sameas(false) %}
        {% if truncate and page.summary != page.content %}
        <div class=\"link-more\"><a href=\"{{ page.url }}\">{{ 'READ_MORE'|t }}</a></div>
        {% elseif truncate %}
        <div class=\"link-more\"><a href=\"{{ page.url }}\">{{ 'READ_MORE'|t }}</a></div>
        {% endif %}
        {% endif %}

        {% if not truncate %}
        <div class=\"sharedaddy sd-sharing-enabled\">
          <div class=\"robots-nocontent sd-block sd-social sd-social-icon-text sd-sharing\">
            <h3 class=\"sd-title\">{{ 'SHARE'|t }}</h3>
            <div class=\"sd-content\">
              <ul>
                <li class=\"share-facebook\">
                  <a rel=\"nofollow\" data-shared=\"sharing-facebook-368\" class=\"share-facebook sd-button share-icon\" href=\"https://www.facebook.com/sharer/sharer.php?u={{ page.url(true) }}\" target=\"_blank\" title=\"{{ page.header.title }}\"><span>Facebook</span></a>
                </li>
                <li class=\"share-twitter\">
                  <a rel=\"nofollow\" data-shared=\"sharing-twitter-368\" class=\"share-twitter sd-button share-icon\" href=\"http://twitter.com/home?status={{ page.title|replace({' ': \"%20\"}) }}-{{ page.url(true) }}\" target=\"_blank\" title=\"{{ page.header.title }}\"><span>Twitter</span></a>
                </li>
                <li class=\"share-google-plus-1\">
                  <a rel=\"nofollow\" data-shared=\"sharing-google-368\" class=\"share-google-plus-1 sd-button share-icon\" href=\"https://plus.google.com/share?url={{ page.url(true) }}\" target=\"_blank\" title=\"{{ page.header.title }}\"><span>Google</span></a>
                </li>
                <li class=\"share-pinterest\">
                  <a rel=\"nofollow\" data-shared=\"sharing-pinterest-368\" class=\"share-pinterest sd-button share-icon\" href=\"https://www.pinterest.com/pin/create/button/?url={{ page.url(true) }}\" target=\"_blank\" title=\"{{ page.header.title }}\"><span>Pinterest</span></a>
                </li>
                <li class=\"share-end\"></li>
              </ul>
            </div>
          </div>
        </div>
        <script type=\"text/javascript\">var windowOpen;jQuery(document).on('ready post-load',function(){jQuery('a.share-facebook').on('click',function(){if('undefined'!==typeof windowOpen){windowOpen.close();}
        windowOpen=window.open(jQuery(this).attr('href'),'wpcomfacebook','menubar=1,resizable=1,width=600,height=400');return false;});});</script>
        <script type=\"text/javascript\">var windowOpen;jQuery(document).on('ready post-load',function(){jQuery('a.share-twitter').on('click',function(){if('undefined'!==typeof windowOpen){windowOpen.close();}
        windowOpen=window.open(jQuery(this).attr('href'),'wpcomtwitter','menubar=1,resizable=1,width=600,height=350');return false;});});</script>
        <script type=\"text/javascript\">var windowOpen;jQuery(document).on('ready post-load',function(){jQuery('a.share-google-plus-1').on('click',function(){if('undefined'!==typeof windowOpen){windowOpen.close();}
        windowOpen=window.open(jQuery(this).attr('href'),'wpcomgoogle-plus-1','menubar=1,resizable=1,width=480,height=550');return false;});});</script>
        {% endif %}
      </div>

      {% if not truncate %}
      <div id=\"jp-relatedposts\" class=\"jp-relatedposts\" style=\"display: block;\">
        <h3 class=\"jp-relatedposts-headline\"><em>{{ 'RELATED_POSTS'|t }}</em></h3>
        <div class=\"jp-relatedposts-items jp-relatedposts-items-visual\">
          {% include 'partials/relatedpages.html.twig' %}
        </div>
      </div>
      <hr/>
      {% endif %}

      {% if not truncate %}
      {% if config.plugins.jscomments.enabled and config.plugins.jscomments.provider %}
      <div class=\"comments-area-wrapper\">
        <div class=\"comments-area\">
        <h2 class=\"comments-title\">Comments:</h2>
          {{ jscomments(config.plugins.jscomments.provider) }}
        </div>
      </div>
      {% endif %}

      {% if config.plugins.comments.enabled %}
      <div class=\"comments-area-wrapper\">
        <div class=\"comments-area\">
          <h2 class=\"comments-title\">{{ grav.twig.comments|length }} Comments:</h2>
          {% include 'partials/comments.html.twig' with {'page': page} %}
        </div>
      </div>
      {% endif %}

      {% endif %}
    </div>
  </div>
</article>
", "partials/blog_item.html.twig", "/usr/share/nginx/html/user/themes/receptar/templates/partials/blog_item.html.twig");
    }
}
