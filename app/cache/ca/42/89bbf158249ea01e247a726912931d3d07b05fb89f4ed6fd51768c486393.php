<?php

/* _sub_pretty.twig */
class __TwigTemplate_ca4289bbf158249ea01e247a726912931d3d07b05fb89f4ed6fd51768c486393 extends Twig_Template
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
        // line 2
        echo "
";
        // line 8
        echo "
";
        // line 14
        echo "
";
        // line 25
        echo "
";
        // line 30
        echo "
";
    }

    // line 3
    public function getuserlink($_user = null)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $_user,
        ));

        $blocks = array();

        ob_start();
        try {
            ob_start();
            // line 4
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("useredit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id"))), "html", null, true);
            echo "\">";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "displayname"), "html", null, true);
            // line 6
            echo "</a>
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 9
    public function getcontentlink_by_id($_contenttype = null, $_title = null, $_content_id = null)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype" => $_contenttype,
            "title" => $_title,
            "content_id" => $_content_id,
        ));

        $blocks = array();

        ob_start();
        try {
            ob_start();
            // line 10
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "slug"), "id" => (isset($context["content_id"]) ? $context["content_id"] : null))), "html", null, true);
            echo "\">";
            // line 11
            echo $this->env->getExtension('Bolt')->trim((isset($context["title"]) ? $context["title"] : null), 70);
            // line 12
            echo "</a>
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 15
    public function getcontentlink($_contenttype = null, $_content = null)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype" => $_contenttype,
            "content" => $_content,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 16
            echo "    ";
            $context["crosslinks"] = $this;
            // line 17
            echo "
    ";
            // line 18
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "title", array(), "any", true, true)) {
                // line 19
                echo "        ";
                $context["title"] = $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "title");
                // line 20
                echo "    ";
            } else {
                // line 21
                echo "        ";
                $context["title"] = $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "name");
                // line 22
                echo "    ";
            }
            // line 23
            echo "    ";
            echo $context["crosslinks"]->getcontentlink_by_id((isset($context["contenttype"]) ? $context["contenttype"] : null), (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 26
    public function getchangelogmutation($_raw = null)
    {
        $context = $this->env->mergeGlobals(array(
            "raw" => $_raw,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 27
            echo "    ";
            $context["mapping"] = array("UPDATE" => "changed", "INSERT" => "created", "DELETE" => "deleted", "HOLD" => "put on hold", "PUBLISH" => "published", "DRAFT" => "depublished");
            // line 28
            echo "    ";
            if ($this->getAttribute((isset($context["mapping"]) ? $context["mapping"] : null), (isset($context["raw"]) ? $context["raw"] : null), array(), "array", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mapping"]) ? $context["mapping"] : null), (isset($context["raw"]) ? $context["raw"] : null), array(), "array"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, (isset($context["raw"]) ? $context["raw"] : null), "html", null, true);
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 31
    public function getdatetime($_d = null)
    {
        $context = $this->env->mergeGlobals(array(
            "d" => $_d,
        ));

        $blocks = array();

        ob_start();
        try {
            echo "<time class=\"moment\" datetime=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["d"]) ? $context["d"] : null), "c"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["d"]) ? $context["d"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["d"]) ? $context["d"] : null), "html", null, true);
            echo "</time>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_sub_pretty.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 31,  160 => 28,  146 => 26,  132 => 23,  126 => 21,  118 => 18,  115 => 17,  100 => 15,  48 => 4,  36 => 3,  31 => 30,  22 => 8,  150 => 39,  136 => 36,  130 => 34,  120 => 19,  104 => 28,  96 => 26,  78 => 22,  75 => 21,  72 => 20,  69 => 19,  63 => 17,  57 => 15,  54 => 6,  52 => 5,  49 => 12,  46 => 11,  40 => 9,  37 => 8,  30 => 6,  25 => 14,  279 => 98,  260 => 91,  258 => 90,  251 => 89,  248 => 88,  244 => 87,  240 => 85,  235 => 82,  218 => 78,  213 => 76,  208 => 75,  202 => 73,  200 => 72,  195 => 71,  189 => 70,  186 => 69,  169 => 68,  161 => 65,  151 => 58,  138 => 48,  125 => 41,  121 => 40,  113 => 34,  92 => 29,  87 => 12,  81 => 10,  79 => 25,  67 => 9,  64 => 22,  47 => 21,  28 => 25,  24 => 3,  291 => 104,  280 => 96,  274 => 95,  269 => 91,  264 => 89,  257 => 85,  253 => 84,  242 => 75,  227 => 73,  222 => 70,  207 => 68,  203 => 67,  201 => 66,  198 => 65,  181 => 64,  174 => 60,  168 => 57,  164 => 66,  159 => 53,  157 => 27,  154 => 41,  137 => 50,  133 => 46,  129 => 22,  123 => 20,  117 => 42,  112 => 16,  109 => 40,  105 => 39,  102 => 38,  97 => 31,  91 => 34,  85 => 11,  80 => 30,  77 => 29,  73 => 24,  66 => 18,  62 => 22,  60 => 16,  56 => 19,  51 => 16,  45 => 14,  43 => 10,  39 => 12,  34 => 7,  32 => 8,  27 => 6,  21 => 2,  19 => 2,);
    }
}
