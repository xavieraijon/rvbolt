<?php

/* users.twig */
class __TwigTemplate_510a1231acdc7f146d5377ec25fa2646c05076c0beda350550a7e2179c32256a extends Twig_Template
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
        $this->env->loadTemplate("_header.twig")->display(array_merge($context, array("active" => "settings")));
        // line 2
        echo "
<div class=\"row-fluid\">
    <div class=\"span9\">

        <h1><strong>";
        // line 6
        echo $this->env->getExtension('Bolt')->trans("All users");
        echo "</strong></h1>

        <table class='dashboardlisting'>
            <tr>
                <th>#</th>
                <th>";
        // line 11
        echo $this->env->getExtension('Bolt')->trans("Username");
        echo "</th>
                <th>";
        // line 12
        echo $this->env->getExtension('Bolt')->trans("Last seen");
        echo "</th>
                <th>";
        // line 13
        echo $this->env->getExtension('Bolt')->trans("Roles");
        echo "</th>
                <th>";
        // line 14
        echo $this->env->getExtension('Bolt')->trans("Actions");
        echo "</th>
            </tr>
            ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 17
            echo "
                <tr class=\"";
            // line 18
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "enabled") == 0)) {
                echo "dim";
            }
            echo "\">
                    <td class='id'>№ ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id"), "html", null, true);
            echo "</td>

                    <td><strong>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "displayname"), "html", null, true);
            echo "</strong> (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"), "html", null, true);
            echo ") </td>
                    <td>
                        ";
            // line 23
            if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastseen"), "Y") > "1901")) {
                // line 24
                echo "                            <time class=\"moment\" datetime=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastseen"), "c"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastseen"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastseen"), "html", null, true);
                echo "</time>
                        ";
            } else {
                // line 26
                echo "                            -
                        ";
            }
            // line 28
            echo "                    </td>
                    <td class='contenttypes'>
                        ";
            // line 30
            if (twig_in_filter("root", $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "roles"))) {
                // line 31
                echo "                            <strong><em>root</em></strong>
                        ";
            } else {
                // line 33
                echo "                            ";
                echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "roles"), ", "), "html", null, true);
                echo "
                        ";
            }
            // line 35
            echo "                    </td>
                    <td class='actions'>

                        <div class=\"btn-group\">
                            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("useredit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id"))), "html", null, true);
            echo "\" class=\"btn btn-mini\">
                                    <i class=\"icon-edit\"></i> ";
            // line 40
            echo $this->env->getExtension('Bolt')->trans("Edit");
            echo "
                            </a>
                            <button class=\"btn dropdown-toggle btn-mini\" data-toggle=\"dropdown\">
                                <i class=\"icon-info-sign\"></i>
                                <span class=\"caret\"></span>
                            </button>
                            <ul class=\"dropdown-menu pull-right\">
                                ";
            // line 47
            if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "enabled")) {
                // line 48
                echo "                                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("useraction", array("action" => "disable", "id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id"))), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Bolt')->trans("Disable %username%", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "displayname")));
                echo "</a></li>
                                ";
            } else {
                // line 50
                echo "                                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("useraction", array("action" => "enable", "id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id"))), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Bolt')->trans("Enable %username%", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "displayname")));
                echo "</a></li>
                                ";
            }
            // line 52
            echo "                                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("useraction", array("action" => "delete", "id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id"), "token" => $this->env->getExtension('Bolt')->token())), "html", null, true);
            echo "\" class=\"confirm\" data-confirm=\"";
            echo $this->env->getExtension('Bolt')->trans("Are you sure you want to delete %username%?", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "displayname")));
            echo "\">";
            echo $this->env->getExtension('Bolt')->trans("Delete %username%", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "displayname")));
            echo "</a></li>
                                <li class=\"divider\"></li>
                                <li><a class=\"nolink\">";
            // line 54
            echo $this->env->getExtension('Bolt')->trans("Last seen");
            echo ": <strong>";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastseen") > "1000")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastseen"), "Y-m-d H:i"), "html", null, true);
            } else {
                echo "-";
            }
            echo "</strong></a></li>
                                <li><a class=\"nolink\">";
            // line 55
            echo $this->env->getExtension('Bolt')->trans("Last known IP");
            echo ": <strong>";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastip") != "")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastip"), "html", null, true);
            } else {
                echo "-";
            }
            echo "</strong></a></li>
                            </ul>
                        </div>

                    </td>
                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
        </table>

        <h2><strong>";
        // line 66
        echo $this->env->getExtension('Bolt')->trans("Roles and Permissions");
        echo "</strong></h2>

        <p>";
        // line 68
        echo $this->env->getExtension('Bolt')->trans("The settings for roles and permissions are stored in %permissions%.", array("%permissions%" => "<code>permissions.yml</code>"));
        echo "</p>
        <a class=\"btn btn-small\" href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("fileedit", array("file" => "app/config/permissions.yml"));
        echo "\">";
        echo $this->env->getExtension('Bolt')->trans("Roles and Permissions");
        echo "</a>

        <h2><strong>";
        // line 71
        echo $this->env->getExtension('Bolt')->trans("Current sessions");
        echo "</strong></h2>

        <table class='dashboardlisting'>
            <tr>
                <th>";
        // line 75
        echo $this->env->getExtension('Bolt')->trans("Username");
        echo "</th>
                <th>";
        // line 76
        echo $this->env->getExtension('Bolt')->trans("Last seen");
        echo "</th>
                <th>";
        // line 77
        echo $this->env->getExtension('Bolt')->trans("Session expires");
        echo "</th>
                <th>";
        // line 78
        echo $this->env->getExtension('Bolt')->trans("IP address");
        echo "</th>
                <th>";
        // line 79
        echo $this->env->getExtension('Bolt')->trans("Browser / platform");
        echo "</th>
            </tr>
            ";
        // line 81
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sessions"]) ? $context["sessions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 82
            echo "
                <tr>
                    <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "username"), "html", null, true);
            echo "</td>
                    <td><time class=\"moment\" datetime=\"";
            // line 85
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "lastseen"), "c"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "lastseen"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "lastseen"), "html", null, true);
            echo "</time></td>
                    <td><time class=\"moment\" datetime=\"";
            // line 86
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "validity"), "c"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "validity"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "validity"), "html", null, true);
            echo "</time></td>
                    <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "ip"), "html", null, true);
            echo "</td>
                    <td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "useragent"), "html", null, true);
            echo "</td>

                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "
        </table>


    </div><!-- /span9 -->
    <aside class=\"span3\">

        <section>
            <h3>";
        // line 101
        echo $this->env->getExtension('Bolt')->trans("Actions for Users");
        echo "</h3>
            <a class=\"btn\" href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("useredit", array("id" => ""));
        echo "\">";
        echo $this->env->getExtension('Bolt')->trans("New user");
        echo "</a>
        </section>

        <div id=\"latestactivity\">
            ";
        // line 106
        echo $this->env->getExtension('silex')->render($this->env, $this->env->getExtension('routing')->getPath("latestactivity"));
        echo "
        </div>
        <div id=\"latesttemp\" style=\"display:none; visibility: hidden;\"><!-- intentionally left blank --></div>

    </aside>
</div>


";
        // line 114
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "users.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 114,  302 => 106,  293 => 102,  289 => 101,  279 => 93,  268 => 88,  264 => 87,  256 => 86,  248 => 85,  244 => 84,  240 => 82,  236 => 81,  231 => 79,  227 => 78,  223 => 77,  219 => 76,  215 => 75,  208 => 71,  201 => 69,  197 => 68,  192 => 66,  187 => 63,  167 => 55,  157 => 54,  147 => 52,  139 => 50,  131 => 48,  129 => 47,  119 => 40,  115 => 39,  109 => 35,  103 => 33,  99 => 31,  97 => 30,  93 => 28,  89 => 26,  79 => 24,  77 => 23,  70 => 21,  65 => 19,  59 => 18,  56 => 17,  52 => 16,  47 => 14,  43 => 13,  39 => 12,  35 => 11,  27 => 6,  21 => 2,  19 => 1,);
    }
}
