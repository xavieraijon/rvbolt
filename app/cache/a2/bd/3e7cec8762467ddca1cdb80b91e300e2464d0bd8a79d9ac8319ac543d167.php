<?php

/* _sub_pager.twig */
class __TwigTemplate_a2bd3e7cec8762467ddca1cdb80b91e300e2464d0bd8a79d9ac8319ac543d167 extends Twig_Template
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
        echo "
";
        // line 2
        if (twig_in_filter("filter", twig_get_array_keys_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "query"), "all")))) {
            // line 3
            echo "    ";
            $context["filter"] = (("filter=" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "query"), "all"), "filter")) . "&");
        } else {
            // line 5
            echo "    ";
            $context["filter"] = "";
        }
        // line 7
        echo "
";
        // line 8
        if (twig_in_filter("order", twig_get_array_keys_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "query"), "all")))) {
            // line 9
            echo "    ";
            $context["order"] = (("order=" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "query"), "all"), "order")) . "&");
        } else {
            // line 11
            echo "    ";
            $context["order"] = "";
        }
        // line 13
        echo "
";
        // line 14
        if ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "link", array(), "any", true, true)) {
            // line 15
            echo "    ";
            $context["link"] = $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "link");
        } else {
            // line 17
            echo "    ";
            $context["link"] = ((("?" . (isset($context["filter"]) ? $context["filter"] : null)) . (isset($context["order"]) ? $context["order"] : null)) . "page=");
        }
        // line 19
        echo "
";
        // line 20
        if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages") > 1)) {
            // line 21
            echo "<div class=\"pagination pagination-centered ";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            echo "\">
  <ul>
";
            // line 24
            if ((($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") > 1) && ((isset($context["class"]) ? $context["class"] : null) != "narrow"))) {
                // line 25
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") - 1), "html", null, true);
                echo "\">&lsaquo; </a></li>
";
            }
            // line 27
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") > ((isset($context["surr"]) ? $context["surr"] : null) + 1))) {
                // line 28
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo 1;
                echo "\">&laquo; 1</a></li>
";
            }
            // line 30
            echo "
";
            // line 32
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") > ((isset($context["surr"]) ? $context["surr"] : null) + 2))) {
                // line 33
                echo "    <li class=\"disabled\"><a href=\"#\">...</a></li>
";
            }
            // line 35
            echo "
";
            // line 36
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range($this->env->getExtension('Bolt')->max(1, ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") - (isset($context["surr"]) ? $context["surr"] : null))), $this->env->getExtension('Bolt')->min(($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") + (isset($context["surr"]) ? $context["surr"] : null)), $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 37
                echo "    <li ";
                if (((isset($context["i"]) ? $context["i"] : null) == $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current"))) {
                    echo "class='active'";
                }
                echo "><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "</a></li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "
";
            // line 41
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") < (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages") - (isset($context["surr"]) ? $context["surr"] : null)) - 1))) {
                // line 42
                echo "    <li class=\"disabled\"><a href=\"#\">...</a></li>
";
            }
            // line 44
            echo "
";
            // line 46
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") < ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages") - (isset($context["surr"]) ? $context["surr"] : null)))) {
                // line 47
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages"), "html", null, true);
                echo " &raquo; </a></li>
";
            }
            // line 49
            if ((($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") < $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages")) && ((isset($context["class"]) ? $context["class"] : null) != "narrow"))) {
                // line 50
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current") + 1), "html", null, true);
                echo "\">&rsaquo;</a></li>
";
            }
            // line 52
            echo "  </ul>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "_sub_pager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 50,  142 => 49,  128 => 44,  124 => 42,  119 => 39,  103 => 37,  96 => 35,  92 => 33,  87 => 30,  80 => 28,  71 => 25,  63 => 21,  61 => 20,  58 => 19,  54 => 17,  48 => 14,  37 => 9,  35 => 8,  32 => 7,  28 => 5,  24 => 3,  154 => 14,  113 => 8,  99 => 36,  91 => 3,  74 => 2,  62 => 1,  39 => 18,  164 => 79,  158 => 77,  156 => 76,  151 => 52,  115 => 49,  106 => 5,  98 => 33,  88 => 30,  83 => 26,  79 => 25,  75 => 24,  70 => 22,  65 => 21,  60 => 16,  45 => 13,  42 => 19,  34 => 5,  30 => 4,  26 => 3,  22 => 2,  194 => 91,  185 => 84,  182 => 83,  173 => 75,  170 => 74,  157 => 67,  150 => 12,  147 => 73,  140 => 60,  136 => 64,  133 => 47,  131 => 46,  127 => 59,  122 => 41,  116 => 9,  111 => 7,  104 => 42,  101 => 39,  95 => 37,  93 => 31,  90 => 32,  84 => 33,  78 => 27,  72 => 29,  69 => 24,  66 => 26,  59 => 22,  55 => 15,  52 => 20,  50 => 15,  47 => 18,  41 => 11,  38 => 15,  33 => 14,  21 => 2,  19 => 1,);
    }
}
