<?php

/* _sub_editrelations.twig */
class __TwigTemplate_32758d2d98b90e877bb36866c155074c92376dedb975491c28a9e2a5791e9261 extends Twig_Template
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
        if (((!twig_test_empty($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "relation"))) || $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "relations", array(), "any", true, true))) {
            // line 3
            echo "
    <h3>
        ";
            // line 5
            echo $this->env->getExtension('Bolt')->trans("Relationships");
            echo "
        <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
            // line 6
            echo $this->env->getExtension('Bolt')->trans("Relationships");
            echo "\"
            data-content=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator"), "trans", array(0 => "info.relationships", 1 => array(), 2 => "infos"), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Bolt')->trans("Info");
            echo "</span>
    </h3>

";
        }
        // line 11
        echo "
";
        // line 13
        if ($this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "relations", array(), "any", true, true)) {
            // line 14
            echo "
    ";
            // line 15
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "relations"));
            foreach ($context['_seq'] as $context["relcontenttype"] => $context["relation"]) {
                // line 16
                echo "
        <label for='relation-";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["relcontenttype"]) ? $context["relcontenttype"] : null)), "html", null, true);
                echo "'><b><span class='left'>
            ";
                // line 18
                if ($this->getAttribute((isset($context["relation"]) ? $context["relation"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["relation"]) ? $context["relation"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["relcontenttype"]) ? $context["relcontenttype"] : null))), "html", null, true);
                }
                // line 19
                echo "        </span></b></label>

        ";
                // line 21
                if (($this->getAttribute((isset($context["relation"]) ? $context["relation"] : null), "multiple", array(), "any", true, true) && ($this->getAttribute((isset($context["relation"]) ? $context["relation"] : null), "multiple") == 1))) {
                    // line 22
                    echo "        <select name='relation[";
                    echo twig_escape_filter($this->env, (isset($context["relcontenttype"]) ? $context["relcontenttype"] : null), "html", null, true);
                    echo "][]' id='relation-";
                    echo twig_escape_filter($this->env, (isset($context["relcontenttype"]) ? $context["relcontenttype"] : null), "html", null, true);
                    echo "' class='wide' multiple  style=\"width: 70%;\" data-placeholder=\"(none)\">
        ";
                } else {
                    // line 24
                    echo "        <select name='relation[";
                    echo twig_escape_filter($this->env, (isset($context["relcontenttype"]) ? $context["relcontenttype"] : null), "html", null, true);
                    echo "][]' id='relation-";
                    echo twig_escape_filter($this->env, (isset($context["relcontenttype"]) ? $context["relcontenttype"] : null), "html", null, true);
                    echo "' class='wide' style=\"width: 70%;\" data-placeholder=\"(none)\">
            <option value=\"0\">(none)</option>
        ";
                }
                // line 27
                echo "            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Bolt')->listcontent((isset($context["relcontenttype"]) ? $context["relcontenttype"] : null), (isset($context["relation"]) ? $context["relation"] : null), (isset($context["content"]) ? $context["content"] : null)));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 28
                    echo "                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
                    echo "\" ";
                    if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "selected")) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title"));
                    echo " <span>(№ ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
                    echo ")</span></option>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "
        </select>

        <script>
            \$('#relation-";
                // line 34
                echo twig_escape_filter($this->env, (isset($context["relcontenttype"]) ? $context["relcontenttype"] : null), "html", null, true);
                echo "').select2({
                placeholder: \"(none)\",
                allowClear: true
            });
        </script>

    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['relcontenttype'], $context['relation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "
";
        }
        // line 43
        echo "
";
        // line 45
        if (((!twig_test_empty($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "relation"))) || $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "relations", array(), "any", true, true))) {
            // line 46
            echo "
    ";
            // line 47
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "relation"));
            foreach ($context['_seq'] as $context["reltype"] => $context["ids"]) {
                // line 48
                echo "        ";
                if ((!$this->getAttribute($this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "relations", array(), "any", false, true), (isset($context["reltype"]) ? $context["reltype"] : null), array(), "array", true, true))) {
                    // line 49
                    echo "            <p>
            ";
                    // line 50
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["ids"]) ? $context["ids"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                        // line 51
                        echo "                ";
                        $template_storage = new Bolt\Storage($context['app']);
                        $context['record'] =                         $template_storage->getContent((((isset($context["reltype"]) ? $context["reltype"] : null) . "/") . (isset($context["id"]) ? $context["id"] : null)), array (
) );
                        // line 52
                        echo "                ";
                        if ((isset($context["record"]) ? $context["record"] : null)) {
                            // line 53
                            echo "                    ";
                            echo $this->env->getExtension('Bolt')->trans("This record is related to %contenttype%", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "contenttype"), "singular_name")));
                            echo " № ";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "id"), "html", null, true);
                            echo " -
                    <strong>";
                            // line 54
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title"), "html", null, true);
                            echo "</strong> (<a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "contenttype"), "slug"), "id" => $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "id"))), "html", null, true);
                            echo "\">edit</a>)<br>
                ";
                        }
                        // line 56
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 57
                    echo "            </p>
        ";
                }
                // line 59
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['reltype'], $context['ids'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "
";
        }
        // line 62
        echo "
";
        // line 63
        if (((!twig_test_empty($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "relation"))) || $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "relations", array(), "any", true, true))) {
            // line 64
            echo "
    <hr>

";
        }
    }

    public function getTemplateName()
    {
        return "_sub_editrelations.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 64,  202 => 62,  198 => 60,  192 => 59,  182 => 56,  175 => 54,  141 => 45,  138 => 43,  134 => 41,  115 => 30,  98 => 28,  93 => 27,  84 => 24,  74 => 21,  70 => 19,  60 => 17,  57 => 16,  53 => 15,  32 => 6,  24 => 3,  22 => 2,  1956 => 680,  1948 => 677,  1944 => 675,  1942 => 674,  1939 => 673,  1933 => 670,  1930 => 669,  1928 => 668,  1925 => 667,  1921 => 664,  1913 => 659,  1909 => 658,  1905 => 657,  1899 => 656,  1889 => 653,  1883 => 652,  1877 => 651,  1871 => 650,  1865 => 649,  1859 => 648,  1853 => 647,  1844 => 646,  1842 => 645,  1839 => 644,  1835 => 641,  1827 => 636,  1823 => 635,  1819 => 634,  1809 => 631,  1803 => 630,  1797 => 629,  1791 => 628,  1782 => 627,  1780 => 626,  1777 => 625,  1773 => 622,  1765 => 617,  1753 => 611,  1743 => 610,  1733 => 609,  1725 => 606,  1717 => 605,  1709 => 604,  1706 => 603,  1704 => 602,  1701 => 601,  1697 => 598,  1689 => 596,  1685 => 595,  1678 => 594,  1670 => 593,  1661 => 592,  1659 => 591,  1656 => 590,  1653 => 588,  1649 => 586,  1645 => 585,  1639 => 584,  1632 => 583,  1624 => 582,  1615 => 581,  1613 => 580,  1610 => 579,  1602 => 572,  1596 => 569,  1583 => 563,  1577 => 560,  1571 => 559,  1565 => 558,  1561 => 557,  1556 => 555,  1548 => 554,  1544 => 553,  1536 => 552,  1531 => 550,  1523 => 549,  1516 => 547,  1508 => 546,  1500 => 545,  1491 => 539,  1487 => 538,  1482 => 535,  1480 => 534,  1477 => 533,  1475 => 532,  1472 => 531,  1465 => 525,  1456 => 519,  1452 => 517,  1446 => 515,  1440 => 513,  1438 => 512,  1426 => 503,  1416 => 500,  1406 => 499,  1398 => 498,  1390 => 497,  1382 => 496,  1374 => 495,  1368 => 492,  1359 => 490,  1349 => 489,  1343 => 486,  1335 => 485,  1328 => 483,  1320 => 482,  1309 => 481,  1301 => 480,  1294 => 475,  1288 => 473,  1282 => 471,  1280 => 470,  1276 => 469,  1271 => 466,  1269 => 465,  1266 => 464,  1264 => 463,  1261 => 462,  1258 => 460,  1248 => 455,  1232 => 444,  1228 => 443,  1224 => 442,  1218 => 439,  1214 => 438,  1209 => 436,  1205 => 435,  1195 => 428,  1189 => 425,  1185 => 424,  1177 => 423,  1172 => 420,  1166 => 419,  1162 => 417,  1160 => 416,  1157 => 415,  1153 => 412,  1143 => 407,  1127 => 394,  1120 => 390,  1107 => 386,  1103 => 384,  1098 => 381,  1081 => 378,  1078 => 377,  1074 => 376,  1070 => 375,  1063 => 371,  1058 => 368,  1055 => 367,  1053 => 366,  1046 => 362,  1037 => 360,  1024 => 354,  1020 => 353,  1011 => 347,  1004 => 345,  996 => 344,  993 => 343,  987 => 342,  983 => 340,  981 => 339,  978 => 338,  974 => 335,  968 => 331,  956 => 324,  952 => 323,  947 => 321,  940 => 318,  938 => 317,  931 => 313,  928 => 312,  923 => 309,  908 => 306,  905 => 305,  901 => 304,  897 => 303,  890 => 299,  885 => 296,  882 => 295,  880 => 294,  869 => 290,  865 => 289,  854 => 283,  850 => 282,  844 => 281,  836 => 278,  828 => 277,  820 => 276,  811 => 271,  809 => 270,  806 => 269,  801 => 265,  795 => 261,  782 => 253,  773 => 251,  769 => 250,  763 => 247,  759 => 246,  754 => 244,  749 => 241,  747 => 240,  738 => 234,  730 => 229,  722 => 224,  718 => 222,  713 => 219,  696 => 216,  693 => 215,  689 => 214,  685 => 213,  678 => 209,  673 => 206,  670 => 205,  668 => 204,  661 => 200,  652 => 198,  640 => 193,  636 => 192,  625 => 186,  621 => 185,  615 => 184,  607 => 181,  599 => 180,  591 => 179,  584 => 174,  578 => 172,  572 => 170,  570 => 169,  566 => 168,  559 => 165,  557 => 164,  554 => 163,  551 => 161,  547 => 159,  532 => 157,  528 => 156,  523 => 154,  517 => 153,  508 => 152,  506 => 151,  503 => 150,  500 => 148,  495 => 145,  480 => 143,  476 => 142,  465 => 141,  461 => 139,  446 => 137,  442 => 136,  431 => 135,  429 => 134,  420 => 133,  418 => 132,  412 => 129,  408 => 127,  399 => 122,  397 => 121,  386 => 117,  381 => 115,  370 => 107,  358 => 104,  351 => 99,  349 => 98,  337 => 93,  324 => 91,  322 => 90,  319 => 89,  315 => 86,  306 => 83,  300 => 82,  294 => 81,  287 => 80,  282 => 76,  276 => 75,  270 => 72,  265 => 70,  262 => 69,  259 => 67,  255 => 65,  244 => 63,  234 => 61,  228 => 60,  225 => 59,  219 => 58,  216 => 57,  214 => 56,  208 => 53,  204 => 51,  193 => 49,  187 => 48,  183 => 47,  177 => 46,  174 => 45,  168 => 53,  165 => 52,  163 => 42,  160 => 51,  157 => 39,  153 => 49,  146 => 47,  142 => 35,  136 => 34,  132 => 33,  126 => 32,  123 => 31,  117 => 30,  114 => 29,  112 => 28,  109 => 27,  105 => 24,  94 => 21,  90 => 20,  80 => 19,  76 => 22,  64 => 18,  58 => 16,  51 => 15,  46 => 14,  44 => 13,  41 => 12,  37 => 9,  31 => 6,  28 => 5,  26 => 4,  479 => 220,  469 => 213,  464 => 211,  440 => 192,  436 => 191,  415 => 131,  403 => 124,  387 => 157,  368 => 140,  362 => 138,  352 => 136,  350 => 135,  343 => 131,  336 => 127,  329 => 92,  323 => 120,  313 => 112,  307 => 110,  297 => 108,  295 => 107,  288 => 103,  281 => 99,  274 => 95,  267 => 71,  252 => 88,  248 => 64,  242 => 86,  238 => 62,  233 => 82,  218 => 80,  213 => 79,  211 => 55,  205 => 63,  201 => 76,  197 => 50,  188 => 57,  184 => 72,  176 => 71,  171 => 70,  169 => 69,  166 => 68,  156 => 50,  154 => 59,  150 => 48,  143 => 46,  139 => 56,  131 => 54,  127 => 53,  121 => 34,  118 => 49,  116 => 48,  113 => 47,  103 => 39,  101 => 22,  97 => 37,  92 => 36,  88 => 35,  82 => 33,  78 => 32,  72 => 29,  69 => 28,  67 => 27,  61 => 24,  54 => 20,  50 => 14,  48 => 13,  45 => 11,  43 => 15,  38 => 12,  36 => 7,  29 => 7,  23 => 2,  21 => 2,  19 => 1,);
    }
}
