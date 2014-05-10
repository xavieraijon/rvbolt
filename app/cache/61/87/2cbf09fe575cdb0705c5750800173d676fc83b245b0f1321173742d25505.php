<?php

/* _sub_edittaxonomies.twig */
class __TwigTemplate_61872cbf09fe575cdb0705c5750800173d676fc83b245b0f1321173742d25505 extends Twig_Template
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
        // line 3
        if ($this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "taxonomy", array(), "any", true, true)) {
            // line 4
            echo "
    <h3>
        ";
            // line 6
            echo $this->env->getExtension('Bolt')->trans("Taxonomy");
            echo "
        <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
            // line 7
            echo $this->env->getExtension('Bolt')->trans("Taxonomy");
            echo "\"
                  data-content=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator"), "trans", array(0 => "info.taxonomy", 1 => array(), 2 => "infos"), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Bolt')->trans("Info");
            echo "</span>
    </h3>

";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "taxonomy"));
            foreach ($context['_seq'] as $context["_key"] => $context["taxonomyslug"]) {
                // line 12
                echo "
    ";
                // line 13
                if ($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "taxonomy"), "method", false, true), (isset($context["taxonomyslug"]) ? $context["taxonomyslug"] : null), array(), "array", true, true)) {
                    // line 14
                    echo "
        ";
                    // line 15
                    $context["taxonomy"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "taxonomy"), "method"), (isset($context["taxonomyslug"]) ? $context["taxonomyslug"] : null), array(), "array");
                    // line 16
                    echo "

        ";
                    // line 19
                    echo "
        ";
                    // line 20
                    if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "behaves_like") == "tags")) {
                        // line 21
                        echo "
            <label for='taxonomy-";
                        // line 22
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                        echo "'><b><span class='left'>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "name")), "html", null, true);
                        echo "</span></b></label>

            ";
                        // line 24
                        if ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "taxonomy", array(), "any", false, true), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), array(), "array", true, true)) {
                            // line 25
                            echo "                ";
                            $context["tags"] = twig_join_filter($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "taxonomy"), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), array(), "array"), ",");
                            // line 26
                            echo "            ";
                        } else {
                            // line 27
                            echo "                ";
                            $context["tags"] = "";
                            // line 28
                            echo "            ";
                        }
                        // line 29
                        echo "
            <input type='text' name='taxonomy[";
                        // line 30
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                        echo "]' id='taxonomy-";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                        echo "' value=\"";
                        echo twig_escape_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null), "html", null, true);
                        echo "\" style=\"width: 70%;\" />



            <div class=\"tagcloud\" id=\"tagcloud-";
                        // line 34
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                        echo "\"></div>
            <script>
            \$(function() {

                // load all tags
                \$.ajax({
                    url: \"";
                        // line 40
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root"), "html", null, true);
                        echo "async/tags/";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                        echo "\",
                    dataType: \"json\",
                    success: function(data) {
                        var results = [];
                        \$.each(data, function(index, item){
                            results.push( item.slug );
                        });
                        \$('#taxonomy-";
                        // line 47
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                        echo "').select2({tags: results, minimumInputLength: 1, tokenSeparators: [\",\", \" \"]});
                    },
                    error: function() {
                        \$('#taxonomy-";
                        // line 50
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                        echo "').select2({tags: [], minimumInputLength: 1, tokenSeparators: [\",\", \" \"]});
                    }
                });

                ";
                        // line 54
                        if ($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "tagcloud")) {
                            // line 55
                            echo "                // popular tags
                \$.ajax({
                    url: \"";
                            // line 57
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root"), "html", null, true);
                            echo "async/populartags/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                            echo "\",
                    dataType: \"json\",
                    data : { limit: 40 },
                    success: function(data) {
                        if (data.length > 0) {
                            \$.each(data, function(index, item){
                                \$(\"#tagcloud-";
                            // line 63
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                            echo "\").append('<a href=\"#\" rel=\"' + item.count + '\">' + item.slug + '</a>');
                            });
                            \$(\"#tagcloud-";
                            // line 65
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                            echo " a\").on('click', function (e) {
                                e.preventDefault();
                                var data = \$(\"#taxonomy-";
                            // line 67
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                            echo "\").select2(\"data\")
                                data.push({id:\$(this).text(), text:\$(this).text()});
                                \$(\"#taxonomy-";
                            // line 69
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                            echo "\").select2(\"data\", data);
                            });

                            \$.fn.tagcloud.defaults = {
                                size: {start: 12, end: 22, unit: 'px'},
                                color: {start: '#888', end: '#194770'}
                            };
                            \$('#tagcloud-";
                            // line 76
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                            echo " a').tagcloud();
                        }
                    }
                });
                ";
                        }
                        // line 81
                        echo "
            });
            </script>


        ";
                    }
                    // line 87
                    echo "
        ";
                    // line 89
                    echo "
        ";
                    // line 90
                    if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "behaves_like") == "categories")) {
                        // line 91
                        echo "
            <label for='taxonomy-";
                        // line 92
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                        echo "'><b><span class='left'>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "name")), "html", null, true);
                        echo "</span></b></label>

            ";
                        // line 94
                        if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "multiple", array(), "any", true, true) && ($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "multiple") == 1))) {
                            // line 95
                            echo "            <select name='taxonomy[";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                            echo "][]' id='taxonomy-";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                            echo "' multiple>
            ";
                        } else {
                            // line 97
                            echo "            <select name='taxonomy[";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                            echo "][]' id='taxonomy-";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                            echo "'>
                <option value=\"\">";
                            // line 98
                            echo $this->env->getExtension('Bolt')->trans("(no category)");
                            echo "</option>
                <option value=\"\" disabled>-----------</option>
            ";
                        }
                        // line 101
                        echo "
            ";
                        // line 102
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "options"));
                        foreach ($context['_seq'] as $context["slug"] => $context["cat"]) {
                            // line 103
                            echo "                <option value='";
                            echo twig_escape_filter($this->env, (isset($context["slug"]) ? $context["slug"] : null), "html", null, true);
                            echo "' ";
                            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "taxonomy", array(), "any", false, true), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), array(), "array", true, true) && twig_in_filter((isset($context["cat"]) ? $context["cat"] : null), $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "taxonomy"), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), array(), "array")))) {
                                echo "selected";
                            }
                            echo ">";
                            echo twig_escape_filter($this->env, (isset($context["cat"]) ? $context["cat"] : null), "html", null, true);
                            echo "</option>
            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['cat'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 105
                        echo "
            </select>

        ";
                    }
                    // line 109
                    echo "
        ";
                    // line 111
                    echo "
        ";
                    // line 112
                    if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "behaves_like") == "grouping")) {
                        // line 113
                        echo "
            <label for='taxonomy-";
                        // line 114
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                        echo "'><b><span class='left'>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "name")), "html", null, true);
                        echo "</span></b></label>

            <select name='taxonomy[";
                        // line 116
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                        echo "][]' id='taxonomy-";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                        echo "'>
                <option value=\"\">";
                        // line 117
                        echo $this->env->getExtension('Bolt')->trans("(no group)");
                        echo "</option>
                <option value=\"\" disabled>-----------</option>
            ";
                        // line 119
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "options"));
                        foreach ($context['_seq'] as $context["slug"] => $context["group"]) {
                            // line 120
                            echo "                <option value='";
                            echo twig_escape_filter($this->env, (isset($context["slug"]) ? $context["slug"] : null), "html", null, true);
                            echo "' ";
                            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "taxonomy", array(), "any", false, true), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), array(), "array", true, true) && twig_in_filter((isset($context["group"]) ? $context["group"] : null), $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "taxonomy"), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), array(), "array")))) {
                                echo "selected";
                            }
                            echo ">";
                            echo twig_escape_filter($this->env, (isset($context["group"]) ? $context["group"] : null), "html", null, true);
                            echo "</option>
            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['group'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 122
                        echo "            </select>

            ";
                        // line 124
                        if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "has_sortorder", array(), "any", true, true) && ($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "has_sortorder") == true))) {
                            // line 125
                            echo "                <label for=\"taxonomy-order-";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                            echo "\" style='display: inline;'>- Order:</label>
                ";
                            // line 126
                            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "sortorder")) {
                                // line 127
                                echo "                    ";
                                $context["sortorder"] = $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "sortorder");
                                // line 128
                                echo "                ";
                            } else {
                                // line 129
                                echo "                    ";
                                $context["sortorder"] = 0;
                                // line 130
                                echo "                ";
                            }
                            // line 131
                            echo "                <input type=\"number\" name=\"taxonomy-order[";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                            echo "]\" id=\"taxonomy-order-";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug"), "html", null, true);
                            echo "\" step=\"1\"
                       value='";
                            // line 132
                            echo twig_escape_filter($this->env, (isset($context["sortorder"]) ? $context["sortorder"] : null), "html", null, true);
                            echo "' class='verynarrow'>
            ";
                        }
                        // line 134
                        echo "
        ";
                    }
                    // line 136
                    echo "
    ";
                }
                // line 138
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxonomyslug'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            echo "<hr>
";
        }
    }

    public function getTemplateName()
    {
        return "_sub_edittaxonomies.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 140,  359 => 138,  355 => 136,  346 => 132,  339 => 131,  333 => 129,  330 => 128,  327 => 127,  325 => 126,  320 => 125,  318 => 124,  314 => 122,  299 => 120,  290 => 117,  284 => 116,  277 => 114,  272 => 112,  269 => 111,  266 => 109,  260 => 105,  245 => 103,  241 => 102,  232 => 98,  217 => 95,  215 => 94,  203 => 90,  200 => 89,  189 => 81,  181 => 76,  161 => 65,  145 => 57,  91 => 29,  85 => 27,  79 => 25,  77 => 24,  65 => 20,  62 => 19,  56 => 15,  207 => 64,  202 => 62,  198 => 60,  192 => 59,  182 => 56,  175 => 54,  141 => 55,  138 => 43,  134 => 41,  115 => 30,  98 => 28,  93 => 27,  84 => 24,  74 => 21,  70 => 22,  60 => 17,  57 => 16,  53 => 14,  32 => 7,  24 => 4,  22 => 3,  1956 => 680,  1948 => 677,  1944 => 675,  1942 => 674,  1939 => 673,  1933 => 670,  1930 => 669,  1928 => 668,  1925 => 667,  1921 => 664,  1913 => 659,  1909 => 658,  1905 => 657,  1899 => 656,  1889 => 653,  1883 => 652,  1877 => 651,  1871 => 650,  1865 => 649,  1859 => 648,  1853 => 647,  1844 => 646,  1842 => 645,  1839 => 644,  1835 => 641,  1827 => 636,  1823 => 635,  1819 => 634,  1809 => 631,  1803 => 630,  1797 => 629,  1791 => 628,  1782 => 627,  1780 => 626,  1777 => 625,  1773 => 622,  1765 => 617,  1753 => 611,  1743 => 610,  1733 => 609,  1725 => 606,  1717 => 605,  1709 => 604,  1706 => 603,  1704 => 602,  1701 => 601,  1697 => 598,  1689 => 596,  1685 => 595,  1678 => 594,  1670 => 593,  1661 => 592,  1659 => 591,  1656 => 590,  1653 => 588,  1649 => 586,  1645 => 585,  1639 => 584,  1632 => 583,  1624 => 582,  1615 => 581,  1613 => 580,  1610 => 579,  1602 => 572,  1596 => 569,  1583 => 563,  1577 => 560,  1571 => 559,  1565 => 558,  1561 => 557,  1556 => 555,  1548 => 554,  1544 => 553,  1536 => 552,  1531 => 550,  1523 => 549,  1516 => 547,  1508 => 546,  1500 => 545,  1491 => 539,  1487 => 538,  1482 => 535,  1480 => 534,  1477 => 533,  1475 => 532,  1472 => 531,  1465 => 525,  1456 => 519,  1452 => 517,  1446 => 515,  1440 => 513,  1438 => 512,  1426 => 503,  1416 => 500,  1406 => 499,  1398 => 498,  1390 => 497,  1382 => 496,  1374 => 495,  1368 => 492,  1359 => 490,  1349 => 489,  1343 => 486,  1335 => 485,  1328 => 483,  1320 => 482,  1309 => 481,  1301 => 480,  1294 => 475,  1288 => 473,  1282 => 471,  1280 => 470,  1276 => 469,  1271 => 466,  1269 => 465,  1266 => 464,  1264 => 463,  1261 => 462,  1258 => 460,  1248 => 455,  1232 => 444,  1228 => 443,  1224 => 442,  1218 => 439,  1214 => 438,  1209 => 436,  1205 => 435,  1195 => 428,  1189 => 425,  1185 => 424,  1177 => 423,  1172 => 420,  1166 => 419,  1162 => 417,  1160 => 416,  1157 => 415,  1153 => 412,  1143 => 407,  1127 => 394,  1120 => 390,  1107 => 386,  1103 => 384,  1098 => 381,  1081 => 378,  1078 => 377,  1074 => 376,  1070 => 375,  1063 => 371,  1058 => 368,  1055 => 367,  1053 => 366,  1046 => 362,  1037 => 360,  1024 => 354,  1020 => 353,  1011 => 347,  1004 => 345,  996 => 344,  993 => 343,  987 => 342,  983 => 340,  981 => 339,  978 => 338,  974 => 335,  968 => 331,  956 => 324,  952 => 323,  947 => 321,  940 => 318,  938 => 317,  931 => 313,  928 => 312,  923 => 309,  908 => 306,  905 => 305,  901 => 304,  897 => 303,  890 => 299,  885 => 296,  882 => 295,  880 => 294,  869 => 290,  865 => 289,  854 => 283,  850 => 282,  844 => 281,  836 => 278,  828 => 277,  820 => 276,  811 => 271,  809 => 270,  806 => 269,  801 => 265,  795 => 261,  782 => 253,  773 => 251,  769 => 250,  763 => 247,  759 => 246,  754 => 244,  749 => 241,  747 => 240,  738 => 234,  730 => 229,  722 => 224,  718 => 222,  713 => 219,  696 => 216,  693 => 215,  689 => 214,  685 => 213,  678 => 209,  673 => 206,  670 => 205,  668 => 204,  661 => 200,  652 => 198,  640 => 193,  636 => 192,  625 => 186,  621 => 185,  615 => 184,  607 => 181,  599 => 180,  591 => 179,  584 => 174,  578 => 172,  572 => 170,  570 => 169,  566 => 168,  559 => 165,  557 => 164,  554 => 163,  551 => 161,  547 => 159,  532 => 157,  528 => 156,  523 => 154,  517 => 153,  508 => 152,  506 => 151,  503 => 150,  500 => 148,  495 => 145,  480 => 143,  476 => 142,  465 => 141,  461 => 139,  446 => 137,  442 => 136,  431 => 135,  429 => 134,  420 => 133,  418 => 132,  412 => 129,  408 => 127,  399 => 122,  397 => 121,  386 => 117,  381 => 115,  370 => 107,  358 => 104,  351 => 134,  349 => 98,  337 => 93,  324 => 91,  322 => 90,  319 => 89,  315 => 86,  306 => 83,  300 => 82,  294 => 81,  287 => 80,  282 => 76,  276 => 75,  270 => 72,  265 => 70,  262 => 69,  259 => 67,  255 => 65,  244 => 63,  234 => 61,  228 => 60,  225 => 97,  219 => 58,  216 => 57,  214 => 56,  208 => 92,  204 => 51,  193 => 49,  187 => 48,  183 => 47,  177 => 46,  174 => 45,  168 => 53,  165 => 52,  163 => 42,  160 => 51,  157 => 39,  153 => 49,  146 => 47,  142 => 35,  136 => 34,  132 => 50,  126 => 47,  123 => 31,  117 => 30,  114 => 40,  112 => 28,  109 => 27,  105 => 34,  94 => 30,  90 => 20,  80 => 19,  76 => 22,  64 => 18,  58 => 16,  51 => 13,  46 => 14,  44 => 11,  41 => 12,  37 => 9,  31 => 6,  28 => 6,  26 => 4,  479 => 220,  469 => 213,  464 => 211,  440 => 192,  436 => 191,  415 => 131,  403 => 124,  387 => 157,  368 => 140,  362 => 138,  352 => 136,  350 => 135,  343 => 131,  336 => 130,  329 => 92,  323 => 120,  313 => 112,  307 => 110,  297 => 108,  295 => 119,  288 => 103,  281 => 99,  274 => 113,  267 => 71,  252 => 88,  248 => 64,  242 => 86,  238 => 101,  233 => 82,  218 => 80,  213 => 79,  211 => 55,  205 => 91,  201 => 76,  197 => 87,  188 => 57,  184 => 72,  176 => 71,  171 => 69,  169 => 69,  166 => 67,  156 => 63,  154 => 59,  150 => 48,  143 => 46,  139 => 54,  131 => 54,  127 => 53,  121 => 34,  118 => 49,  116 => 48,  113 => 47,  103 => 39,  101 => 22,  97 => 37,  92 => 36,  88 => 28,  82 => 26,  78 => 32,  72 => 29,  69 => 28,  67 => 21,  61 => 24,  54 => 20,  50 => 14,  48 => 12,  45 => 11,  43 => 15,  38 => 12,  36 => 8,  29 => 7,  23 => 2,  21 => 2,  19 => 1,);
    }
}
