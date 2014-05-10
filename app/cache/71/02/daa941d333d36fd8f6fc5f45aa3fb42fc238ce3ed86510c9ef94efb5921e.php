<?php

/* _footer.twig */
class __TwigTemplate_7102daa941d333d36fd8f6fc5f45aa3fb42fc238ce3ed86510c9ef94efb5921e extends Twig_Template
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
    </div><!-- /container-fluid -->
</div> <!-- /container -->

<br><br>

<footer id=\"bolt-footer\" class=\"hidden-phone\">
    ";
        // line 8
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/branding/provided_by/0"), "method")) {
            // line 9
            echo "        ";
            echo $this->env->getExtension('Bolt')->trans("Provided by:");
            echo "
        <a href=\"mailto:";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/branding/provided_by/0"), "method"), "html", null, true);
            echo "\">
            ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/branding/provided_by/1"), "method"), "html", null, true);
            echo "
        </a> -
    ";
        }
        // line 14
        echo "    <i class=\"icon-cog\"></i> <b>Bolt ";
        echo twig_escape_filter($this->env, (isset($context["bolt_version"]) ? $context["bolt_version"] : null), "html", null, true);
        echo "</b>: ";
        echo $this->env->getExtension('Bolt')->trans("Sophisticated, lightweight & simple CMS");
        echo " -
    <i class=\"icon-heart\"></i > <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("about");
        echo "\">";
        echo $this->env->getExtension('Bolt')->trans("About");
        echo "</a> &ndash;
    <i class=\"icon-external-link\"> </i><a href=\"http://bolt.cm\" target=\"_blank\">Bolt.cm</a>
</footer>

</body>

<script>
    var path = \"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "bolt"), "html", null, true);
        echo "\"; var asyncpath = \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "async"), "html", null, true);
        echo "\"; var apppath = \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "\";
    var wysiwyg = {
       images: ";
        // line 24
        echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/images"), "method")), "html", null, true);
        echo ",
       tables: ";
        // line 25
        echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/tables"), "method")), "html", null, true);
        echo ",
       anchor: ";
        // line 26
        echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/anchor"), "method")), "html", null, true);
        echo ",
       fontcolor: ";
        // line 27
        echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/fontcolor"), "method")), "html", null, true);
        echo ",
       align: ";
        // line 28
        echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/align"), "method")), "html", null, true);
        echo ",
       subsuper: ";
        // line 29
        echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/subsuper"), "method")), "html", null, true);
        echo ",
       embed: ";
        // line 30
        echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/embed"), "method")), "html", null, true);
        echo ",
       ";
        // line 31
        if (twig_test_iterable($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/ck"), "method"))) {
            echo "ck: ";
            echo twig_jsonencode_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/ck"), "method"));
            echo ",";
        }
        // line 32
        echo "       ";
        if (twig_test_iterable($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/filebrowser"), "method"))) {
            echo "filebrowser: ";
            echo twig_jsonencode_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/filebrowser"), "method"));
        } else {
            echo "filebrowser: false";
        }
        // line 33
        echo "       };
</script>

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
        return array (  107 => 32,  77 => 25,  39 => 11,  1357 => 388,  1348 => 387,  1346 => 386,  1343 => 385,  1327 => 381,  1320 => 380,  1318 => 379,  1315 => 378,  1292 => 374,  1267 => 373,  1265 => 372,  1262 => 371,  1250 => 366,  1245 => 365,  1243 => 364,  1240 => 363,  1231 => 357,  1225 => 355,  1222 => 354,  1217 => 353,  1215 => 352,  1212 => 351,  1205 => 346,  1196 => 344,  1192 => 343,  1189 => 342,  1186 => 341,  1184 => 340,  1181 => 339,  1173 => 335,  1171 => 334,  1168 => 333,  1162 => 329,  1156 => 327,  1153 => 326,  1151 => 325,  1148 => 324,  1139 => 319,  1137 => 318,  1114 => 317,  1111 => 316,  1108 => 315,  1105 => 314,  1102 => 313,  1099 => 312,  1096 => 311,  1094 => 310,  1091 => 309,  1084 => 305,  1080 => 304,  1075 => 303,  1073 => 302,  1070 => 301,  1063 => 296,  1060 => 295,  1052 => 290,  1049 => 289,  1047 => 288,  1044 => 287,  1036 => 282,  1032 => 281,  1028 => 280,  1025 => 279,  1023 => 278,  1020 => 277,  1012 => 273,  1010 => 269,  1008 => 268,  1005 => 267,  1000 => 263,  978 => 258,  975 => 257,  972 => 256,  969 => 255,  966 => 254,  963 => 253,  960 => 252,  957 => 251,  954 => 250,  951 => 249,  948 => 248,  946 => 247,  943 => 246,  935 => 240,  932 => 239,  930 => 238,  927 => 237,  919 => 233,  916 => 232,  914 => 231,  911 => 230,  899 => 226,  896 => 225,  893 => 224,  890 => 223,  888 => 222,  885 => 221,  877 => 217,  874 => 216,  872 => 215,  869 => 214,  861 => 210,  858 => 209,  856 => 208,  853 => 207,  845 => 203,  842 => 202,  840 => 201,  837 => 200,  829 => 196,  826 => 195,  824 => 194,  821 => 193,  813 => 189,  810 => 188,  808 => 187,  805 => 186,  797 => 182,  794 => 181,  792 => 180,  789 => 179,  781 => 175,  779 => 174,  776 => 173,  768 => 169,  765 => 168,  763 => 167,  760 => 166,  752 => 162,  749 => 161,  747 => 160,  745 => 159,  742 => 158,  735 => 153,  725 => 152,  720 => 151,  717 => 150,  711 => 148,  708 => 147,  706 => 146,  703 => 145,  695 => 139,  693 => 138,  692 => 137,  691 => 136,  690 => 135,  685 => 134,  679 => 132,  676 => 131,  674 => 130,  671 => 129,  662 => 123,  658 => 122,  654 => 121,  650 => 120,  645 => 119,  639 => 117,  636 => 116,  634 => 115,  631 => 114,  615 => 110,  613 => 109,  610 => 108,  594 => 104,  592 => 103,  589 => 102,  572 => 98,  560 => 96,  553 => 93,  551 => 92,  546 => 91,  543 => 90,  525 => 89,  523 => 88,  520 => 87,  511 => 82,  508 => 81,  505 => 80,  499 => 78,  497 => 77,  492 => 76,  489 => 75,  486 => 74,  471 => 72,  469 => 71,  461 => 70,  459 => 69,  456 => 68,  450 => 64,  442 => 62,  437 => 61,  433 => 60,  428 => 59,  426 => 58,  423 => 57,  414 => 52,  403 => 48,  400 => 47,  390 => 43,  388 => 42,  385 => 41,  377 => 37,  368 => 34,  366 => 33,  363 => 32,  355 => 27,  350 => 26,  344 => 24,  342 => 23,  337 => 22,  335 => 21,  332 => 20,  316 => 16,  313 => 15,  311 => 14,  308 => 13,  288 => 4,  285 => 3,  281 => 385,  278 => 384,  276 => 378,  273 => 377,  266 => 363,  263 => 362,  258 => 351,  255 => 350,  253 => 339,  250 => 338,  248 => 333,  245 => 332,  243 => 324,  240 => 323,  235 => 308,  233 => 301,  230 => 300,  227 => 298,  225 => 295,  222 => 294,  215 => 277,  212 => 276,  210 => 267,  207 => 266,  204 => 264,  202 => 263,  199 => 262,  194 => 245,  191 => 243,  186 => 236,  184 => 230,  179 => 221,  176 => 220,  174 => 214,  171 => 213,  166 => 206,  164 => 200,  156 => 192,  154 => 186,  149 => 179,  144 => 173,  139 => 166,  129 => 145,  126 => 144,  124 => 129,  114 => 108,  109 => 102,  104 => 87,  101 => 31,  96 => 67,  91 => 56,  86 => 46,  69 => 13,  66 => 12,  61 => 2,  128 => 36,  115 => 33,  99 => 68,  79 => 32,  64 => 22,  60 => 8,  35 => 10,  30 => 9,  27 => 14,  119 => 114,  110 => 33,  106 => 101,  102 => 28,  97 => 30,  93 => 29,  84 => 41,  74 => 20,  71 => 19,  67 => 17,  48 => 5,  22 => 2,  416 => 133,  408 => 50,  405 => 49,  395 => 123,  392 => 122,  387 => 118,  379 => 113,  374 => 36,  371 => 35,  361 => 104,  358 => 103,  353 => 99,  347 => 95,  340 => 93,  334 => 92,  328 => 91,  324 => 90,  321 => 89,  318 => 88,  310 => 86,  307 => 85,  299 => 8,  297 => 82,  293 => 6,  290 => 5,  282 => 78,  279 => 77,  271 => 371,  268 => 370,  260 => 360,  257 => 71,  249 => 69,  247 => 68,  242 => 67,  238 => 309,  228 => 61,  224 => 60,  220 => 287,  217 => 286,  213 => 57,  208 => 56,  206 => 55,  203 => 54,  197 => 246,  193 => 50,  189 => 237,  185 => 48,  181 => 229,  177 => 46,  169 => 207,  165 => 43,  161 => 199,  150 => 40,  148 => 39,  141 => 172,  134 => 158,  131 => 157,  111 => 107,  105 => 29,  100 => 29,  95 => 22,  90 => 21,  87 => 22,  81 => 26,  73 => 24,  56 => 7,  50 => 12,  42 => 3,  25 => 3,  173 => 45,  167 => 54,  163 => 53,  159 => 193,  155 => 41,  151 => 185,  146 => 178,  140 => 45,  136 => 165,  130 => 41,  125 => 28,  121 => 128,  116 => 113,  112 => 31,  108 => 30,  103 => 32,  98 => 30,  94 => 57,  89 => 28,  85 => 27,  80 => 23,  76 => 31,  72 => 22,  68 => 21,  58 => 15,  53 => 15,  49 => 14,  65 => 24,  63 => 19,  54 => 14,  52 => 15,  41 => 8,  28 => 8,  24 => 3,  45 => 14,  37 => 39,  32 => 26,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
