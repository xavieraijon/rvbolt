<?php

/* _sub_mainmenu.twig */
class __TwigTemplate_7bab4b390e5d43d8660d5e9e39246083a94aa3cb2d89ca3adaa3e3e60ac1d9e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"nav-collapse\">
    <ul class=\"nav pull-right\">
        ";
        // line 3
        if ((!(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "get", array(0 => "user"), "method")))) {
            // line 4
            echo "
            ";
            // line 6
            echo "            <li class=\"";
            if (twig_in_filter((isset($context["active"]) ? $context["active"] : null), array(0 => "", 1 => "dashboard"))) {
                echo "active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("dashboard");
            echo "\">
                <i class=\"icon-home\"></i> ";
            // line 7
            echo $this->env->getExtension('Bolt')->trans("Dashboard");
            echo "</a></li>

            ";
            // line 10
            echo "            <li class=\"";
            if (((isset($context["active"]) ? $context["active"] : null) == "content")) {
                echo "active ";
            }
            echo "dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"icon-sitemap\"></i> ";
            // line 12
            echo $this->env->getExtension('Bolt')->trans("Content");
            echo " <b class=\"caret\"></b>
                </a>
                <ul class=\"dropdown-menu\">
                    ";
            // line 15
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "contenttypes"), "method"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["slug"] => $context["contenttype"]) {
                // line 16
                echo "                        ";
                if ($this->env->getExtension('Bolt')->isAllowed(("contenttype:" . (isset($context["slug"]) ? $context["slug"] : null)))) {
                    // line 17
                    echo "                            <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("overview", array("contenttypeslug" => (isset($context["slug"]) ? $context["slug"] : null))), "html", null, true);
                    echo "\">
                                <i class=\"icon-tasks\"></i> ";
                    // line 18
                    echo $this->env->getExtension('Bolt')->trans("View %contenttypes%", array("%contenttypes%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "name")));
                    echo "</a></li>
                            ";
                    // line 19
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "length") < 5)) {
                        // line 20
                        echo "                                ";
                        if ($this->env->getExtension('Bolt')->isAllowed((("contenttype:" . (isset($context["slug"]) ? $context["slug"] : null)) . ":create"))) {
                            // line 21
                            echo "                                <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => (isset($context["slug"]) ? $context["slug"] : null), "id" => "")), "html", null, true);
                            echo "\">
                                    <i class=\"icon-plus\"></i> ";
                            // line 22
                            echo $this->env->getExtension('Bolt')->trans("New %contenttype%", array("%contenttype%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "singular_name")));
                            echo "</a></li>
                                ";
                        }
                        // line 24
                        echo "                                ";
                        if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                            echo "<li class=\"divider\"></li>";
                        }
                        // line 25
                        echo "                            ";
                    }
                    // line 26
                    echo "                        ";
                }
                // line 27
                echo "                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['slug'], $context['contenttype'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "
                </ul>
            </li>

            ";
            // line 33
            echo "            ";
            if ($this->env->getExtension('Bolt')->isAllowed("settings")) {
                // line 34
                echo "            <li class=\"";
                if (((isset($context["active"]) ? $context["active"] : null) == "settings")) {
                    echo "active ";
                }
                echo "dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-cogs\"></i> ";
                // line 35
                echo $this->env->getExtension('Bolt')->trans("Settings");
                echo "
                    <b class=\"caret\"></b>
                </a>
                <ul class=\"dropdown-menu\">
                    ";
                // line 39
                if ($this->env->getExtension('Bolt')->isAllowed("files:config")) {
                    // line 40
                    echo "                        <li class=\"nav-header\">";
                    echo $this->env->getExtension('Bolt')->trans("Configuration");
                    echo "</li>
                        <li><a href=\"";
                    // line 41
                    echo $this->env->getExtension('routing')->getPath("users");
                    echo "\"><i class=\"icon-group\"></i> ";
                    echo $this->env->getExtension('Bolt')->trans("Users");
                    echo "</a></li>
                        <li><a href=\"";
                    // line 42
                    echo $this->env->getExtension('routing')->getPath("fileedit", array("file" => "app/config/config.yml"));
                    echo "\">
                            <i class=\"icon-cog\"></i> ";
                    // line 43
                    echo $this->env->getExtension('Bolt')->trans("Configuration");
                    echo "</a></li>
                        <li><a href=\"";
                    // line 44
                    echo $this->env->getExtension('routing')->getPath("fileedit", array("file" => "app/config/contenttypes.yml"));
                    echo "\">
                            <i class=\"icon-hdd\"></i> ";
                    // line 45
                    echo $this->env->getExtension('Bolt')->trans("Contenttypes");
                    echo "</a></li>
                        <li><a href=\"";
                    // line 46
                    echo $this->env->getExtension('routing')->getPath("fileedit", array("file" => "app/config/taxonomy.yml"));
                    echo "\">
                            <i class=\"icon-tags\"></i> ";
                    // line 47
                    echo $this->env->getExtension('Bolt')->trans("Taxonomy");
                    echo "</a></li>
                        <li><a href=\"";
                    // line 48
                    echo $this->env->getExtension('routing')->getPath("fileedit", array("file" => "app/config/menu.yml"));
                    echo "\">
                            <i class=\"icon-list\"></i> ";
                    // line 49
                    echo $this->env->getExtension('Bolt')->trans("Menu setup");
                    echo "</a></li>
                        <li><a href=\"";
                    // line 50
                    echo $this->env->getExtension('routing')->getPath("fileedit", array("file" => "app/config/routing.yml"));
                    echo "\">
                            <i class=\"icon-random\"></i> ";
                    // line 51
                    echo $this->env->getExtension('Bolt')->trans("Routing setup");
                    echo "</a></li>
                        <li class=\"divider\"></li>
                    ";
                }
                // line 54
                echo "
                    ";
                // line 55
                if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "extensions"), "hasMenuoptions")) {
                    // line 56
                    echo "                        <li class=\"nav-header\">";
                    echo $this->env->getExtension('Bolt')->trans("Extensions");
                    echo "</li>
                        ";
                    // line 57
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "extensions"), "getMenuoptions"));
                    foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                        // line 58
                        echo "                            <li>
                                <a href=\"";
                        // line 59
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "path"), "html", null, true);
                        echo "\">
                                    <i class=\"";
                        // line 60
                        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "icon"), "icon-expand")) : ("icon-expand")), "html", null, true);
                        echo "\"></i>
                                    ";
                        // line 61
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "label"), "html", null, true);
                        echo "
                                </a>
                            </li>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 65
                    echo "                        <li class=\"divider\"></li>
                    ";
                }
                // line 67
                echo "                    <li class=\"nav-header\">";
                echo $this->env->getExtension('Bolt')->trans("Maintenance");
                echo "</li>
                    ";
                // line 68
                if ($this->env->getExtension('Bolt')->isAllowed("extensions")) {
                    // line 69
                    echo "                        <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("extensions");
                    echo "\"><i class=\"icon-briefcase\"></i> ";
                    echo $this->env->getExtension('Bolt')->trans("Extensions");
                    echo "</a></li>
                    ";
                }
                // line 71
                echo "                    ";
                if ($this->env->getExtension('Bolt')->isAllowed("dbupdate")) {
                    // line 72
                    echo "                        <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("dbcheck");
                    echo "\"><i class=\"icon-wrench\"></i> ";
                    echo $this->env->getExtension('Bolt')->trans("Check database");
                    echo "</a></li>
                    ";
                }
                // line 74
                echo "                    ";
                if ($this->env->getExtension('Bolt')->isAllowed("clearcache")) {
                    // line 75
                    echo "                        <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("clearcache");
                    echo "\"><i class=\"icon-magic\"></i> ";
                    echo $this->env->getExtension('Bolt')->trans("Clear the cache");
                    echo "</a></li>
                    ";
                }
                // line 77
                echo "                    ";
                if ($this->env->getExtension('Bolt')->isAllowed("activitylog")) {
                    // line 78
                    echo "                        <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("activitylog");
                    echo "\"><i class=\"icon-file\"></i> ";
                    echo $this->env->getExtension('Bolt')->trans("Activity log");
                    echo "</a></li>
                    ";
                }
                // line 80
                echo "                    <li class=\"divider\"></li>
                    <li class=\"nav-header\">";
                // line 81
                echo $this->env->getExtension('Bolt')->trans("File Management");
                echo "</li>
                    ";
                // line 82
                if ($this->env->getExtension('Bolt')->isAllowed("files:theme")) {
                    // line 83
                    echo "                        <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("files", array("path" => "theme"));
                    echo "\"><i class=\"icon-hdd\"></i> ";
                    echo $this->env->getExtension('Bolt')->trans("View / edit Templates");
                    echo "</a></li>
                    ";
                }
                // line 85
                echo "                    ";
                if ($this->env->getExtension('Bolt')->isAllowed("files:uploads")) {
                    // line 86
                    echo "                        <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("files", array("path" => "files"));
                    echo "\"><i class=\"icon-hdd\"></i> ";
                    echo $this->env->getExtension('Bolt')->trans("Uploaded files");
                    echo "</a></li>
                    ";
                }
                // line 88
                echo "                    ";
                if ($this->env->getExtension('Bolt')->isAllowed("translation")) {
                    // line 89
                    echo "                    <li class=\"divider\"></li>
                    <li class=\"nav-header\">";
                    // line 90
                    echo $this->env->getExtension('Bolt')->trans("Translations");
                    echo "</li>
                        <li><a href=\"";
                    // line 91
                    echo $this->env->getExtension('routing')->getPath("translation", array("domain" => "messages"));
                    echo "\"><i class=\"icon-flag\"></i> ";
                    echo $this->env->getExtension('Bolt')->trans("Messages");
                    echo "</a></li>
                        <li><a href=\"";
                    // line 92
                    echo $this->env->getExtension('routing')->getPath("translation", array("domain" => "infos"));
                    echo "\"><i class=\"icon-flag\"></i> ";
                    echo $this->env->getExtension('Bolt')->trans("Long messages");
                    echo "</a></li>
                        <li><a href=\"";
                    // line 93
                    echo $this->env->getExtension('routing')->getPath("translation", array("domain" => "contenttypes"));
                    echo "\"><i class=\"icon-flag\"></i> ";
                    echo $this->env->getExtension('Bolt')->trans("Contenttypes");
                    echo "</a></li>
                    ";
                }
                // line 95
                echo "
                </ul>
            </li>
            ";
            }
            // line 99
            echo "
            <li class=\"divider-vertical\"></li>

            ";
            // line 103
            echo "            <li>
                <a href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root"), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"icon-external-link\"></i> ";
            echo $this->env->getExtension('Bolt')->trans("View site");
            echo "</a>
            </li>

            <li class=\"divider-vertical\"></li>

            ";
            // line 110
            echo "            <li>
                <form action=\"";
            // line 111
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" method=\"POST\">
                    <button class=\"btn btn-link\" type=\"submit\">
                        <i class=\"icon-signout\"></i> ";
            // line 113
            echo $this->env->getExtension('Bolt')->trans("Logout %name%", array("%name%" => $this->env->getExtension('Bolt')->trim($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "displayname"), 16)));
            echo "
                    </button>
                </form>
            </li>
        ";
        } else {
            // line 118
            echo "
            <li class=\"divider-vertical\"></li>

            ";
            // line 122
            echo "            <li>
                <a href=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root"), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"icon-external-link\"></i> ";
            echo $this->env->getExtension('Bolt')->trans("View site");
            echo "</a>
            </li>

            <li class=\"divider-vertical\"></li>

            ";
            // line 129
            echo "            <li>
                <a href=\"";
            // line 130
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\"><i class=\"icon-signin\"></i> ";
            echo $this->env->getExtension('Bolt')->trans("Login");
            echo "</a>
            </li>
        ";
        }
        // line 133
        echo "    </ul>
</div><!--/.nav-collapse -->
";
    }

    public function getTemplateName()
    {
        return "_sub_mainmenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  416 => 133,  408 => 130,  405 => 129,  395 => 123,  392 => 122,  387 => 118,  379 => 113,  374 => 111,  371 => 110,  361 => 104,  358 => 103,  353 => 99,  347 => 95,  340 => 93,  334 => 92,  328 => 91,  324 => 90,  321 => 89,  318 => 88,  310 => 86,  307 => 85,  299 => 83,  297 => 82,  293 => 81,  290 => 80,  282 => 78,  279 => 77,  271 => 75,  268 => 74,  260 => 72,  257 => 71,  249 => 69,  247 => 68,  242 => 67,  238 => 65,  228 => 61,  224 => 60,  220 => 59,  217 => 58,  213 => 57,  208 => 56,  206 => 55,  203 => 54,  197 => 51,  193 => 50,  189 => 49,  185 => 48,  181 => 47,  177 => 46,  169 => 44,  165 => 43,  161 => 42,  150 => 40,  148 => 39,  141 => 35,  134 => 34,  131 => 33,  111 => 27,  105 => 25,  100 => 24,  95 => 22,  90 => 21,  87 => 20,  81 => 18,  73 => 16,  56 => 15,  50 => 12,  42 => 10,  25 => 4,  173 => 45,  167 => 54,  163 => 53,  159 => 52,  155 => 41,  151 => 50,  146 => 48,  140 => 45,  136 => 44,  130 => 41,  125 => 28,  121 => 38,  116 => 36,  112 => 35,  108 => 26,  103 => 32,  98 => 30,  94 => 29,  89 => 27,  85 => 19,  80 => 24,  76 => 17,  72 => 22,  68 => 21,  58 => 17,  53 => 15,  49 => 14,  65 => 24,  63 => 19,  54 => 16,  52 => 15,  41 => 12,  28 => 6,  24 => 3,  45 => 13,  37 => 7,  32 => 9,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
