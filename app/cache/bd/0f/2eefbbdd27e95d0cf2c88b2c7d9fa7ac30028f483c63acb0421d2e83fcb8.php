<?php

/* _listing-base.twig */
class __TwigTemplate_bd0f2eefbbdd27e95d0cf2c88b2c7d9fa7ac30028f483c63acb0421d2e83fcb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'listing_columns' => array($this, 'block_listing_columns'),
            'listing_header' => array($this, 'block_listing_header'),
            'listing_id' => array($this, 'block_listing_id'),
            'listing_content' => array($this, 'block_listing_content'),
            'listing_meta' => array($this, 'block_listing_meta'),
            'listing_actions' => array($this, 'block_listing_actions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "            ";
        // line 2
        echo "            ";
        if ((((!(isset($context["compact"]) ? $context["compact"] : null)) && $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array(), "any", false, true), "name", array(), "any", true, true)) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first") || ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group"), "name") != (isset($context["lastgroup"]) ? $context["lastgroup"] : null))))) {
            // line 3
            echo "                <tr class=\"grouping\">
                    <th colspan=\"";
            // line 4
            $this->displayBlock('listing_columns', $context, $blocks);
            echo "\">
                        <h3 ";
            // line 5
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                echo "class=\"first\"";
            }
            echo ">
                            ";
            // line 6
            if ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group"), "name")) {
                // line 7
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group"), "name"), "html", null, true);
                echo "
                            ";
            } else {
                // line 9
                echo "                                ";
                echo $this->env->getExtension('Bolt')->trans("(no group)");
                echo "
                            ";
            }
            // line 11
            echo "                        </h3>
                    </th>
                </tr>
            ";
        }
        // line 15
        echo "

            ";
        // line 18
        echo "            ";
        if (((!(isset($context["compact"]) ? $context["compact"] : null)) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first") || ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array(), "any", false, true), "name", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group"), "name") != (isset($context["lastgroup"]) ? $context["lastgroup"] : null)))))) {
            // line 19
            echo "                ";
            $context["lastgroup"] = (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array(), "any", false, true), "name"))) : (""));
            // line 20
            echo "                ";
            if (twig_in_filter("filter", twig_get_array_keys_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "query"), "all")))) {
                // line 21
                echo "                    ";
                $context["filter"] = (("filter=" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "query"), "all"), "filter")) . "&");
                // line 22
                echo "                ";
            } else {
                // line 23
                echo "                    ";
                $context["filter"] = "";
                // line 24
                echo "                ";
            }
            // line 25
            echo "
                ";
            // line 26
            $context["link"] = (("?" . (isset($context["filter"]) ? $context["filter"] : null)) . "order=");
            // line 27
            echo "                <tr>
                    ";
            // line 28
            $this->displayBlock('listing_header', $context, $blocks);
            // line 40
            echo "                </tr>
            ";
        }
        // line 42
        echo "

            <tr ";
        // line 44
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status") != "published")) {
            echo "class=\"dim\"";
        }
        echo ">

                ";
        // line 46
        $this->displayBlock('listing_id', $context, $blocks);
        // line 49
        echo "
                ";
        // line 50
        $this->displayBlock('listing_content', $context, $blocks);
        // line 72
        echo "
                ";
        // line 73
        if ((!(isset($context["compact"]) ? $context["compact"] : null))) {
            // line 74
            echo "                    ";
            $this->displayBlock('listing_meta', $context, $blocks);
            // line 93
            echo "                ";
        }
        // line 94
        echo "
                ";
        // line 95
        $this->displayBlock('listing_actions', $context, $blocks);
        // line 167
        echo "
            </tr>
";
    }

    // line 4
    public function block_listing_columns($context, array $blocks = array())
    {
        echo "5";
    }

    // line 28
    public function block_listing_header($context, array $blocks = array())
    {
        // line 29
        echo "                    <th class=\"hide-phone\"><a href='";
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        echo "id ";
        if (($this->env->getExtension('Bolt')->request("order") == "id ASC")) {
            echo "DESC";
        } else {
            echo "ASC";
        }
        echo "'>#</a></th>

                    <th style=\"width:80%\"><a href='";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        echo "title ";
        if (($this->env->getExtension('Bolt')->request("order") == "title ASC")) {
            echo "DESC";
        } else {
            echo "ASC";
        }
        echo "'>
                        ";
        // line 32
        echo $this->env->getExtension('Bolt')->trans("Title");
        echo " / ";
        echo $this->env->getExtension('Bolt')->trans("Excerpt");
        echo "</a></th>

                    <th>&nbsp;</th>

                    <th class='username hide-phone'><a href='";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        echo "datecreated ";
        if (($this->env->getExtension('Bolt')->request("order") == "datecreated ASC")) {
            echo "DESC";
        } else {
            echo "ASC";
        }
        echo "'>";
        echo $this->env->getExtension('Bolt')->trans("Meta");
        echo "</a></th>

                    <th><a href='?'>";
        // line 38
        echo $this->env->getExtension('Bolt')->trans("Actions");
        echo "</a></th>
                    ";
    }

    // line 46
    public function block_listing_id($context, array $blocks = array())
    {
        // line 47
        echo "                    <td class='id hide-phone'>№ ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"), "html", null, true);
        echo "</td>
                ";
    }

    // line 50
    public function block_listing_content($context, array $blocks = array())
    {
        // line 51
        echo "                    <td class='excerpt ";
        if ((!(isset($context["compact"]) ? $context["compact"] : null))) {
            echo "large";
        }
        echo "'><span>
                        <strong class=\"show-phone\">№ ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"), "html", null, true);
        echo ". </strong>
                        <strong>
                            ";
        // line 54
        if ((isset($context["editable"]) ? $context["editable"] : null)) {
            // line 55
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype"), "slug"), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"))), "html", null, true);
            echo "\" title=\"Slug: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "slug"), "html", null, true);
            echo "\">
                                ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getTitle"), "html", null, true);
            echo "
                            </a>
                            ";
        } else {
            // line 59
            echo "                            <strong>
                                ";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getTitle"), "html", null, true);
            echo "
                            </strong>
                            ";
        }
        // line 63
        echo "                        </strong>
                        ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "excerpt", array(0 => (isset($context["excerptlength"]) ? $context["excerptlength"] : null)), "method"), "html", null, true);
        echo "
                                    </span></td>
                    <td class='listthumb'>
                        ";
        // line 67
        if ((!twig_test_empty($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getImage")))) {
            // line 68
            echo "                            ";
            echo $this->env->getExtension('Bolt')->fancybox($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getImage"), (isset($context["thumbsize"]) ? $context["thumbsize"] : null), ((isset($context["thumbsize"]) ? $context["thumbsize"] : null) * 0.75), "c");
            echo "
                        ";
        }
        // line 70
        echo "                    </td>
                ";
    }

    // line 74
    public function block_listing_meta($context, array $blocks = array())
    {
        // line 75
        echo "                        <td class='username hide-phone'>
                            <i class=\"icon-user\"></i>
                                ";
        // line 77
        if ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user", array(), "any", false, true), "displayname", array(), "any", true, true)) {
            // line 78
            echo "                                    ";
            echo $this->env->getExtension('Bolt')->trim($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user"), "displayname"), 15);
            echo "
                                ";
        } else {
            // line 80
            echo "                                    <s>user ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "values"), "ownerid"), "html", null, true);
            echo " </s>
                                ";
        }
        // line 81
        echo "<br>
                            ";
        // line 82
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status") == "timed")) {
            // line 83
            echo "                                <i class=\"icon-time\"></i> <time class=\"moment\" datetime=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish"), "c"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish"), "html", null, true);
            echo "</time><br>
                            ";
        } else {
            // line 85
            echo "                                <i class=\"icon-calendar\"></i> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish"), "d/m/Y"), "html", null, true);
            echo "<br>
                            ";
        }
        // line 87
        echo "
                            ";
        // line 88
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "sortorder", array(), "any", true, true) && (!($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "sortorder") === false)))) {
            // line 89
            echo "                                <i class=\"icon-sort\"></i> ";
            echo $this->env->getExtension('Bolt')->trans("Order: %sort%", array("%sort%" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "sortorder")));
            echo " <br>
                            ";
        }
        // line 91
        echo "                        </td>
                    ";
    }

    // line 95
    public function block_listing_actions($context, array $blocks = array())
    {
        // line 96
        echo "                    <td class='actions'>
                        <div class=\"btn-group\">
                            ";
        // line 98
        if ((isset($context["editable"]) ? $context["editable"] : null)) {
            // line 99
            echo "                            <a class=\"btn btn-mini\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype"), "slug"), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"))), "html", null, true);
            echo "\">
                                <i class=\"icon-edit\"></i> ";
            // line 100
            echo $this->env->getExtension('Bolt')->trans("Edit");
            echo "
                            </a>
                            ";
        }
        // line 103
        echo "                            <button class=\"btn dropdown-toggle btn-mini\" data-toggle=\"dropdown\">
                                <i class=\"icon-info-sign\"></i>
                                <span class=\"caret\"></span>
                            </button>
                            <ul class=\"dropdown-menu pull-right\">
                            ";
        // line 108
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status") == "published")) {
            // line 109
            echo "                                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "link"), "html", null, true);
            echo "\" target=\"_blank\">
                                    <i class=\"icon-external-link\"></i> ";
            // line 110
            echo $this->env->getExtension('Bolt')->trans("View on site");
            echo "</a></li>
                            ";
        }
        // line 112
        echo "                            ";
        if ((isset($context["editable"]) ? $context["editable"] : null)) {
            // line 113
            echo "                                ";
            if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status") != "published")) {
                // line 114
                echo "                                    ";
                if ($this->env->getExtension('Bolt')->isAllowed("publish", (isset($context["content"]) ? $context["content"] : null))) {
                    // line 115
                    echo "                                    <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contentaction", array("action" => "publish", "contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype"), "slug"), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"))), "html", null, true);
                    echo "\">
                                        <i class=\"icon-star-empty\"></i> ";
                    // line 116
                    echo $this->env->getExtension('Bolt')->trans("Publish %contenttype%", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype"), "singular_name")));
                    echo "</a></li>
                                    ";
                }
                // line 118
                echo "                                ";
            } else {
                // line 119
                echo "                                    ";
                if ($this->env->getExtension('Bolt')->isAllowed("depublish", (isset($context["content"]) ? $context["content"] : null))) {
                    // line 120
                    echo "                                    <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contentaction", array("action" => "held", "contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype"), "slug"), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"))), "html", null, true);
                    echo "\">
                                        <i class=\"icon-star\"></i> ";
                    // line 121
                    echo $this->env->getExtension('Bolt')->trans("Change status to 'held'");
                    echo "</a></li>
                                    <li><a href=\"";
                    // line 122
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contentaction", array("action" => "draft", "contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype"), "slug"), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"))), "html", null, true);
                    echo "\">
                                        <i class=\"icon-pencil\"></i> ";
                    // line 123
                    echo $this->env->getExtension('Bolt')->trans("Change status to 'draft'");
                    echo "</a></li>
                                    ";
                }
                // line 125
                echo "                                ";
            }
            // line 126
            echo "                                ";
            if ($this->env->getExtension('Bolt')->isAllowed("create", (isset($context["content"]) ? $context["content"] : null))) {
                // line 127
                echo "                                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype"), "slug"), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"), "duplicate" => 1)), "html", null, true);
                echo "\">
                                    <i class=\"icon-copy\"></i> ";
                // line 128
                echo $this->env->getExtension('Bolt')->trans("Duplicate %contenttype%", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype"), "singular_name")));
                echo "</a></li>
                                ";
            }
            // line 130
            echo "                                ";
            if ($this->env->getExtension('Bolt')->isAllowed("delete", (isset($context["content"]) ? $context["content"] : null))) {
                // line 131
                echo "                                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deletecontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype"), "slug"), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"), "token" => $this->env->getExtension('Bolt')->token())), "html", null, true);
                echo "\"
                                       data-confirm=\"Are you sure you want to delete '";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getTitle"), "html", null, true);
                echo "'?\" class=\"confirm\">
                                    <i class=\"icon-trash\"></i> ";
                // line 133
                echo $this->env->getExtension('Bolt')->trans("Delete %contenttype%", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype"), "singular_name")));
                echo "</a></li>
                                ";
            }
            // line 135
            echo "                                <li class=\"divider\"></li>
                            ";
        }
        // line 137
        echo "                                <li><a class=\"nolink\">";
        echo $this->env->getExtension('Bolt')->trans("Author:");
        echo " <strong><i class=\"icon-user\"></i>
                                    ";
        // line 138
        if ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user", array(), "any", false, true), "displayname", array(), "any", true, true)) {
            // line 139
            echo "                                        ";
            echo $this->env->getExtension('Bolt')->trim($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user"), "displayname"), 15);
            echo "
                                    ";
        } else {
            // line 141
            echo "                                        <s>user ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "values"), "ownerid"), "html", null, true);
            echo " </s>
                                    ";
        }
        // line 142
        echo "</strong></a></li>
                                <li><a class=\"nolink\">";
        // line 143
        echo $this->env->getExtension('Bolt')->trans("Current status:");
        echo "
                                    <strong>";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status"), "html", null, true);
        echo "</strong></a></li>
                                <li><a class=\"nolink\">";
        // line 145
        echo $this->env->getExtension('Bolt')->trans("Slug:");
        echo "
                                    <code title=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "slug"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Bolt')->trim($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "slug"), 24);
        echo "</code></a></li>
                                <li><a class=\"nolink\">";
        // line 147
        echo $this->env->getExtension('Bolt')->trans("Created on:");
        echo "
                                    <i class=\"icon-asterisk\"></i> ";
        // line 148
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datecreated"), "Y-m-d H:i"), "html", null, true);
        echo "</a></li>
                                <li><a class=\"nolink\">";
        // line 149
        echo $this->env->getExtension('Bolt')->trans("Published on:");
        echo "
                                    <i class=\"icon-calendar\"></i> ";
        // line 150
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish"), "Y-m-d H:i"), "html", null, true);
        echo "</a></li>
                                <li><a class=\"nolink\">";
        // line 151
        echo $this->env->getExtension('Bolt')->trans("Last edited on:");
        echo "
                                    <i class=\"icon-refresh\"></i> ";
        // line 152
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datechanged"), "Y-m-d H:i"), "html", null, true);
        echo "</a></li>
                                ";
        // line 153
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "taxonomy"));
        foreach ($context['_seq'] as $context["taxonomyslug"] => $context["values"]) {
            // line 154
            echo "                                    ";
            if ((twig_length_filter($this->env, (isset($context["values"]) ? $context["values"] : null)) > 1)) {
                // line 155
                echo "                                        <li><a class=\"nolink\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "taxonomy"), "method"), (isset($context["taxonomyslug"]) ? $context["taxonomyslug"] : null), array(), "array"), "name"), "html", null, true);
                echo ":
                                            <i class=\"icon-tag\"></i> ";
                // line 156
                echo $this->env->getExtension('Bolt')->trim(twig_join_filter((isset($context["values"]) ? $context["values"] : null), ", "), 24);
                echo "</a></li>
                                    ";
            } else {
                // line 158
                echo "                                        <li><a class=\"nolink\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "taxonomy"), "method"), (isset($context["taxonomyslug"]) ? $context["taxonomyslug"] : null), array(), "array"), "singular_name"), "html", null, true);
                echo ":
                                            <i class=\"icon-tag\"></i> ";
                // line 159
                echo $this->env->getExtension('Bolt')->trim($this->env->getExtension('Bolt')->first((isset($context["values"]) ? $context["values"] : null)), 24);
                echo "</a></li>
                                    ";
            }
            // line 161
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['taxonomyslug'], $context['values'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "                            </ul>
                        </div>

                    </td>
                ";
    }

    public function getTemplateName()
    {
        return "_listing-base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  546 => 162,  540 => 161,  535 => 159,  530 => 158,  525 => 156,  520 => 155,  517 => 154,  513 => 153,  509 => 152,  505 => 151,  501 => 150,  497 => 149,  493 => 148,  489 => 147,  483 => 146,  479 => 145,  475 => 144,  471 => 143,  468 => 142,  462 => 141,  456 => 139,  454 => 138,  449 => 137,  445 => 135,  440 => 133,  436 => 132,  431 => 131,  428 => 130,  423 => 128,  418 => 127,  415 => 126,  412 => 125,  407 => 123,  403 => 122,  399 => 121,  394 => 120,  391 => 119,  388 => 118,  383 => 116,  378 => 115,  375 => 114,  372 => 113,  369 => 112,  364 => 110,  359 => 109,  357 => 108,  350 => 103,  344 => 100,  339 => 99,  337 => 98,  333 => 96,  330 => 95,  325 => 91,  319 => 89,  317 => 88,  314 => 87,  308 => 85,  298 => 83,  296 => 82,  293 => 81,  287 => 80,  281 => 78,  279 => 77,  275 => 75,  272 => 74,  267 => 70,  261 => 68,  259 => 67,  253 => 64,  250 => 63,  244 => 60,  241 => 59,  235 => 56,  228 => 55,  226 => 54,  221 => 52,  214 => 51,  211 => 50,  204 => 47,  201 => 46,  195 => 38,  182 => 36,  173 => 32,  163 => 31,  151 => 29,  148 => 28,  142 => 4,  136 => 167,  134 => 95,  131 => 94,  128 => 93,  125 => 74,  123 => 73,  120 => 72,  118 => 50,  115 => 49,  113 => 46,  106 => 44,  102 => 42,  98 => 40,  96 => 28,  93 => 27,  91 => 26,  88 => 25,  85 => 24,  82 => 23,  79 => 22,  76 => 21,  73 => 20,  70 => 19,  67 => 18,  43 => 6,  37 => 5,  30 => 3,  27 => 2,  25 => 1,  63 => 15,  57 => 11,  51 => 9,  45 => 7,  39 => 5,  33 => 4,);
    }
}
