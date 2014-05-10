<?php

/* error.twig */
class __TwigTemplate_0778c5057f8caa5890b50a1433f46cd975673fd9076d9e197182120b747e1fc6 extends Twig_Template
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
        $this->env->loadTemplate("_header.twig")->display($context);
        // line 2
        echo "
<h1>
    ";
        // line 4
        echo $this->env->getExtension('Bolt')->trans("Oops! An error has occurred!");
        echo "
</h1>

<ul>
    <li>";
        // line 8
        echo $this->env->getExtension('Bolt')->trans("Class:");
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
        echo "</li>
    <li>";
        // line 9
        echo $this->env->getExtension('Bolt')->trans("Message:");
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "</li>
    <li>";
        // line 10
        echo $this->env->getExtension('Bolt')->trans("Code:");
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
        echo "</li>
</ul>

";
        // line 13
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/debug"), "method")) {
            // line 14
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["trace"]) ? $context["trace"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 15
                echo "        ";
                if (($this->getAttribute((isset($context["i"]) ? $context["i"] : null), "line", array(), "any", true, true) && $this->getAttribute((isset($context["i"]) ? $context["i"] : null), "class", array(), "any", true, true))) {
                    // line 16
                    echo "            <p>
                <strong>";
                    // line 17
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : null), "class"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : null), "type"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : null), "function"), "html", null, true);
                    echo "()</strong><br>
                <em>";
                    // line 18
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : null), "file"), "html", null, true);
                    echo ", ";
                    echo $this->env->getExtension('Bolt')->trans("line");
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : null), "line"), "html", null, true);
                    echo "</em>
                ";
                    // line 19
                    if ($this->getAttribute((isset($context["i"]) ? $context["i"] : null), "args", array(), "any", true, true)) {
                        // line 20
                        echo "                    ";
                        echo $this->env->getExtension('Bolt')->printDump($this->getAttribute((isset($context["i"]) ? $context["i"] : null), "args"));
                        echo "
                ";
                    }
                    // line 22
                    echo "            </p>
        ";
                }
                // line 24
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 26
        echo "
";
        // line 27
        $this->env->loadTemplate("_footer.twig")->display($context);
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
        return array (  101 => 27,  98 => 26,  91 => 24,  87 => 22,  81 => 20,  79 => 19,  71 => 18,  65 => 17,  62 => 16,  59 => 15,  54 => 14,  52 => 13,  44 => 10,  38 => 9,  32 => 8,  25 => 4,  21 => 2,  19 => 1,);
    }
}
