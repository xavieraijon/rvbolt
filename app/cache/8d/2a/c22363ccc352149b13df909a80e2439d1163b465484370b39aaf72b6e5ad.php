<?php

/* _sub_searchbox.twig */
class __TwigTemplate_8d2ac22363ccc352149b13df909a80e2439d1163b465484370b39aaf72b6e5ad extends Twig_Template
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
        echo "<li class=\"search\">
    <form method=\"get\" action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root"), "html", null, true);
        echo "search\" id=\"searchform\" enctype=\"text/plain\">
        <input type=\"search\" value=\"";
        // line 3
        if (array_key_exists("search", $context)) {
            echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null));
        }
        echo "\" placeholder=\"";
        echo $this->env->getExtension('Bolt')->trans("Search…");
        echo "\" name=\"search\">
    </form>
</li>
";
    }

    public function getTemplateName()
    {
        return "_sub_searchbox.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 14,  113 => 8,  99 => 4,  91 => 3,  74 => 2,  62 => 1,  39 => 18,  164 => 79,  158 => 77,  156 => 76,  151 => 75,  115 => 49,  106 => 5,  98 => 33,  88 => 30,  83 => 26,  79 => 25,  75 => 24,  70 => 22,  65 => 21,  60 => 16,  45 => 13,  42 => 19,  34 => 5,  30 => 4,  26 => 3,  22 => 2,  194 => 91,  185 => 84,  182 => 83,  173 => 75,  170 => 74,  157 => 67,  150 => 12,  147 => 73,  140 => 60,  136 => 64,  133 => 10,  131 => 57,  127 => 59,  122 => 54,  116 => 9,  111 => 7,  104 => 42,  101 => 39,  95 => 37,  93 => 31,  90 => 35,  84 => 33,  78 => 31,  72 => 29,  69 => 28,  66 => 26,  59 => 22,  55 => 15,  52 => 20,  50 => 14,  47 => 18,  41 => 16,  38 => 15,  33 => 14,  21 => 2,  19 => 1,);
    }
}
