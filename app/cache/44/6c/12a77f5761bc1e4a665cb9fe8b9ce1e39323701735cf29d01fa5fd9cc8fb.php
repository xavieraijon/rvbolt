<?php

/* _footer.twig */
class __TwigTemplate_446c12a77f5761bc1e4a665cb9fe8b9ce1e39323701735cf29d01fa5fd9cc8fb extends Twig_Template
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
<!-- Footer -->

<footer class=\"row\">
    <div class=\"twelve columns\">
        <hr />
        <div class=\"row\">
            <div class=\"six columns\">
                <p>";
        // line 9
        echo $this->env->getExtension('Bolt')->trans("This website is <a href='%url%' target='_blank' title='Sophisticated, lightweight & simple CMS'>Built with Bolt</a>.", array("%url%" => "http://bolt.cm"));
        echo "
                </p>
            </div>
            <div class=\"six columns\">
                <ul class=\"link-list right\">
                    ";
        // line 14
        echo $this->env->getExtension('Bolt')->menu($this->env);
        echo "
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- End Footer -->




</div>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "_footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 9,  138 => 54,  125 => 50,  86 => 40,  76 => 37,  57 => 20,  49 => 17,  44 => 15,  40 => 14,  31 => 9,  144 => 50,  142 => 49,  128 => 44,  124 => 42,  119 => 39,  103 => 45,  96 => 35,  92 => 33,  87 => 30,  80 => 28,  71 => 26,  63 => 21,  61 => 20,  58 => 19,  54 => 17,  48 => 14,  37 => 14,  35 => 8,  32 => 7,  28 => 5,  24 => 3,  154 => 14,  113 => 47,  99 => 36,  91 => 3,  74 => 2,  62 => 1,  39 => 18,  164 => 79,  158 => 77,  156 => 76,  151 => 52,  115 => 49,  106 => 5,  98 => 44,  88 => 30,  83 => 39,  79 => 38,  75 => 24,  70 => 22,  65 => 23,  60 => 21,  45 => 13,  42 => 19,  34 => 12,  30 => 4,  26 => 8,  22 => 2,  194 => 91,  185 => 84,  182 => 83,  173 => 75,  170 => 74,  157 => 67,  150 => 12,  147 => 73,  140 => 60,  136 => 64,  133 => 47,  131 => 46,  127 => 59,  122 => 49,  116 => 9,  111 => 7,  104 => 42,  101 => 39,  95 => 37,  93 => 42,  90 => 41,  84 => 33,  78 => 27,  72 => 29,  69 => 24,  66 => 26,  59 => 22,  55 => 15,  52 => 20,  50 => 15,  47 => 18,  41 => 11,  38 => 15,  33 => 14,  21 => 2,  19 => 1,);
    }
}
