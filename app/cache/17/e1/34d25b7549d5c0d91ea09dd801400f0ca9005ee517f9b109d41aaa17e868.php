<?php

/* error.twig */
class __TwigTemplate_17e134d25b7549d5c0d91ea09dd801400f0ca9005ee517f9b109d41aaa17e868 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\" />
    <title>Bolt - Fatal error.</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/css/bootstrap.min.css\" />
</head>
<body style=\"padding: 20px;\">

    <div style=\"max-width: 530px; margin: auto;\">

    <h1>";
        // line 12
        echo $this->env->getExtension('Bolt')->trans("Bolt - Fatal error.");
        echo "</h1>

    <ul>
        <li>Class: ";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
        echo "</li>
        <li>Message: ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "</li>
        <li>Code: ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
        echo "</li>
    </ul>

    ";
        // line 20
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/debug"), "method")) {
            // line 21
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["trace"]) ? $context["trace"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 22
                echo "            ";
                if (($this->getAttribute((isset($context["i"]) ? $context["i"] : null), "line", array(), "any", true, true) && $this->getAttribute((isset($context["i"]) ? $context["i"] : null), "class", array(), "any", true, true))) {
                    // line 23
                    echo "                <p>
                    <strong>";
                    // line 24
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : null), "class"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : null), "type"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : null), "function"), "html", null, true);
                    echo "()</strong><br>
                    <em>";
                    // line 25
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : null), "file"), "html", null, true);
                    echo ", line ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : null), "line"), "html", null, true);
                    echo "</em>
                    ";
                    // line 26
                    if ($this->getAttribute((isset($context["i"]) ? $context["i"] : null), "args", array(), "any", true, true)) {
                        // line 27
                        echo "                        ";
                        echo $this->env->getExtension('Bolt')->printDump($this->getAttribute((isset($context["i"]) ? $context["i"] : null), "args"));
                        echo "
                    ";
                    }
                    // line 29
                    echo "                </p>
            ";
                }
                // line 31
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    ";
        }
        // line 33
        echo "
    </div>
    <hr>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "error.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 33,  98 => 32,  92 => 31,  88 => 29,  82 => 27,  80 => 26,  74 => 25,  68 => 24,  65 => 23,  62 => 22,  57 => 21,  55 => 20,  49 => 17,  45 => 16,  41 => 15,  35 => 12,  26 => 6,  19 => 1,);
    }
}
