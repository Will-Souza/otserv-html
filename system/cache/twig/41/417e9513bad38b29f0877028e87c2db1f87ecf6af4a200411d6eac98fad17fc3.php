<?php

/* houses.html.twig */
class __TwigTemplate_abecbedc4ce61c0fc79aa34765279de04af77b2b644a617848b8db2230f088eb extends Twig_Template
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
        echo "<div class=\"TableContainer\">
    ";
        // line 2
        if ( !twig_test_empty((isset($context["errors"]) ? $context["errors"] : null))) {
            // line 3
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 4
                echo "            <p class=\"error\">";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "    ";
        } else {
            // line 7
            echo "        <table class=\"Table1\" cellpadding=\"0\" cellspacing=\"0\" style=\"background-color: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lightborder", array()), "html", null, true);
            echo "\">
            <div class=\"CaptionContainer\">
                <div class=\"CaptionInnerContainer\">
                    <span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
            echo "/images/content/box-frame-edge.gif);\"></span>
                    <span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
            echo "/images/content/box-frame-edge.gif);\"></span>
                    <span class=\"CaptionBorderTop\" style=\"background-image:url(";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
            echo "/images/content/table-headline-border.gif);\"></span>
                    <span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
            echo "/images/content/box-frame-vertical.gif);\"></span>
                    <div class=\"Text\" >House Search</div>
                    <span class=\"CaptionVerticalRight\" style=\"background-image:url(";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
            echo "/images/content/box-frame-vertical.gif);\"></span>
                    <span class=\"CaptionBorderBottom\" style=\"background-image:url(";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
            echo "/images/content/table-headline-border.gif);\"></span>
                    <span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
            echo "/images/content/box-frame-edge.gif);\"></span>
                    <span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
            echo "/images/content/box-frame-edge.gif);\"></span>
                </div>
            </div>

            <tr>
                <td>
                    <div class=\"InnerTableContainer\">
                        Here you can see the list of all available houses, flats";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["guildString"]) ? $context["guildString"] : null), "html", null, true);
            echo ".
                        Click on any view button to get more information about a house or adjust
                        the search criteria and start a new search.
                        <br><br>
                        ";
            // line 29
            if (( !twig_test_empty((isset($context["cleanOldHouse"]) ? $context["cleanOldHouse"] : null)) || ((isset($context["rentType"]) ? $context["rentType"] : null) != "never"))) {
                // line 30
                echo "                            Every morning during global server save there is automatic house cleaning. Server delete house owners who have not logged in last ";
                echo twig_escape_filter($this->env, (isset($context["cleanOldHouse"]) ? $context["cleanOldHouse"] : null), "html", null, true);
                echo " days";
                if (((isset($context["rentType"]) ? $context["rentType"] : null) != "never")) {
                    echo " or have not paid ";
                    echo twig_escape_filter($this->env, (isset($context["rentType"]) ? $context["rentType"] : null), "html", null, true);
                    echo " house rent. Remember to leave money for a rent in ";
                    if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lua", array()), "bankSystem", array()))) {
                        echo "your house bank or ";
                    } else {
                        echo "depo in same city where you have house!";
                    }
                } else {
                    echo ".";
                }
                // line 31
                echo "                            <br><br>
                        ";
            }
            // line 33
            echo "
                        ";
            // line 34
            if (( !twig_test_empty((isset($context["houses"]) ? $context["houses"] : null)) || (isset($context["housesSearch"]) ? $context["housesSearch"] : null))) {
                // line 35
                echo "                        <table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
                            <tbody>
                                <tr bgcolor=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vdarkborder", array()), "html", null, true);
                echo "\">
                                    <td colspan=\"6\" class=\"white\"><b>Available ";
                // line 38
                echo twig_escape_filter($this->env, (isset($context["houseType"]) ? $context["houseType"] : null), "html", null, true);
                if ( !twig_test_empty((isset($context["townName"]) ? $context["townName"] : null))) {
                    echo " in ";
                    echo twig_escape_filter($this->env, (isset($context["townName"]) ? $context["townName"] : null), "html", null, true);
                }
                echo " on <b>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lua", array()), "serverName", array()), "html", null, true);
                echo "</b></b></td>
                                </tr>

                                <tr bgcolor=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "darkborder", array()), "html", null, true);
                echo "\">
                                    ";
                // line 42
                if ( !twig_test_empty((isset($context["houses"]) ? $context["houses"] : null))) {
                    // line 43
                    echo "                                        <td width=\"40%\"><b>Name</b></td>
                                        <td width=\"10%\"><b>Size</b></td>
                                        <td width=\"10%\"><b>Rent</b></td>

                                        <td width=\"40%\"><b>Status</b></td>
                                        <td>&nbsp;</td>
                                    ";
                } elseif (                // line 49
(isset($context["housesSearch"]) ? $context["housesSearch"] : null)) {
                    // line 50
                    echo "                                        <td>No ";
                    echo twig_escape_filter($this->env, (isset($context["houseType"]) ? $context["houseType"] : null), "html", null, true);
                    echo " with specified criterias.</td>
                                    ";
                }
                // line 52
                echo "                                </tr>

                                ";
                // line 54
                if ( !twig_test_empty((isset($context["houses"]) ? $context["houses"] : null))) {
                    // line 55
                    echo "                                    ";
                    $context["i"] = 0;
                    // line 56
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["houses"]) ? $context["houses"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["house"]) {
                        // line 57
                        echo "                                        ";
                        $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                        // line 58
                        echo "                                        <tr bgcolor=\"";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array((isset($context["i"]) ? $context["i"] : null))), "html", null, true);
                        echo "\">
                                            <td width=\"40%\">
                                                ";
                        // line 60
                        echo twig_escape_filter($this->env, $this->getAttribute($context["house"], "name", array()), "html", null, true);
                        echo "
                                            </td>

                                            <td width=\"10%\">
                                                ";
                        // line 64
                        echo twig_escape_filter($this->env, $this->getAttribute($context["house"], "size", array()), "html", null, true);
                        echo "
                                            </td>

                                            <td width=\"10%\">
                                                ";
                        // line 68
                        echo twig_escape_filter($this->env, $this->getAttribute($context["house"], "rent", array()), "html", null, true);
                        echo " golds
                                            </td>

                                            <td width=\"40%\">
                                                ";
                        // line 72
                        echo $this->getAttribute($context["house"], "rentedBy", array());
                        echo "
                                            </td>

                                            <td>
                                                <form action=\"";
                        // line 76
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("houses/view")), "html", null, true);
                        echo "\" method=\"post\">
                                                    <input type=\"hidden\" name=\"house\" value=\"";
                        // line 77
                        echo twig_escape_filter($this->env, $this->getAttribute($context["house"], "name", array()), "html", null, true);
                        echo "\">
                                                    <button name=\"View\" alt=\"View\" class=\"btn btn-secondary\" width=\"120\" height=\"18\">View</button>
                                                </form>
                                            </td>
                                        </tr>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['house'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 83
                    echo "                                ";
                }
                // line 84
                echo "                            </tbody>
                        </table>
                        <br>
                        ";
            }
            // line 88
            echo "
                        <form action=\"";
            // line 89
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("houses")), "html", null, true);
            echo "\" method=\"post\">
                            <table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
                                <tbody>
                                    <tr bgcolor=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vdarkborder", array()), "html", null, true);
            echo "\">
                                        <td colspan=\"4\" class=\"white\"><b>House Search</b></td>
                                    </tr>

                                    <tr bgcolor=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "darkborder", array()), "html", null, true);
            echo "\">
                                        <td width=\"25%\"><b>Town</b></td>
                                        <td width=\"25%\"><b>Status</b></td>
                                        <td width=\"25%\"><b>Order</b></td>
                                    </tr>

                                    <tr bgcolor=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "darkborder", array()), "html", null, true);
            echo "\">
                                        <td valign=\"top\" rowspan=\"2\">
                                            ";
            // line 104
            $context["checked"] = false;
            // line 105
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "towns", array()));
            foreach ($context['_seq'] as $context["id"] => $context["name"]) {
                if (($context["id"] > 0)) {
                    // line 106
                    echo "                                                ";
                    if ((((twig_test_empty((isset($context["townId"]) ? $context["townId"] : null)) &&  !twig_test_empty($context["name"])) || ($context["id"] == (isset($context["townId"]) ? $context["townId"] : null))) &&  !(isset($context["checked"]) ? $context["checked"] : null))) {
                        // line 107
                        echo "                                                    ";
                        $context["variable"] = "checked";
                        // line 108
                        echo "                                                    ";
                        $context["checked"] = true;
                        // line 109
                        echo "                                                ";
                    } else {
                        // line 110
                        echo "                                                    ";
                        $context["variable"] = "";
                        // line 111
                        echo "                                                ";
                    }
                    // line 112
                    echo "
                                                <input type=\"radio\" name=\"town\" id=\"town_";
                    // line 113
                    echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                    echo "\"";
                    if (array_key_exists("variable", $context)) {
                        echo " ";
                        echo twig_escape_filter($this->env, (isset($context["variable"]) ? $context["variable"] : null), "html", null, true);
                    }
                    echo ">
                                                <label for=\"town_";
                    // line 114
                    echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "</label>
                                                <br>
                                            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "                                        </td>

                                        <td valign=\"top\">
                                            <input type=\"radio\" name=\"state\" id=\"state_all\" value=\"\"";
            // line 120
            if (twig_test_empty((isset($context["state"]) ? $context["state"] : null))) {
                echo " checked";
            }
            echo ">
                                            <label for=\"state_all\">all states</label><br>

                                            <input type=\"radio\" name=\"state\" id=\"state_free\" value=\"free\"";
            // line 123
            if (((isset($context["state"]) ? $context["state"] : null) == "free")) {
                echo " checked";
            }
            echo ">
                                            <label for=\"state_free\">free</label><br>

                                            <input type=\"radio\" name=\"state\" id=\"state_rented\" value=\"rented\"";
            // line 126
            if (((isset($context["state"]) ? $context["state"] : null) == "rented")) {
                echo " checked";
            }
            echo ">
                                            <label for=\"state_rented\">rented</label><br>
                                        </td>

                                        <td valign=\"top\" rowspan=\"2\">
                                            <input type=\"radio\" name=\"order\" id=\"order_name\" value=\"\"";
            // line 131
            if (twig_test_empty((isset($context["order"]) ? $context["order"] : null))) {
                echo " checked";
            }
            echo ">
                                            <label for=\"order_name\"> by name</label><br>

                                            <input type=\"radio\" name=\"order\" id=\"order_size\" value=\"size\"";
            // line 134
            if (((isset($context["order"]) ? $context["order"] : null) == "size")) {
                echo " checked";
            }
            echo ">
                                            <label for=\"order_size\"> by size</label><br>

                                            <input type=\"radio\" name=\"order\" id=\"order_rent\" value=\"rent\"";
            // line 137
            if (((isset($context["order"]) ? $context["order"] : null) == "rent")) {
                echo " checked";
            }
            echo ">
                                            <label for=\"order_rent\"> by rent</label><br>
                                        </td>
                                    </tr>

                                    <tr bgcolor=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "darkborder", array()), "html", null, true);
            echo "\">
                                        <td valign=\"top\">
                                            <input type=\"radio\" name=\"type\" value=\"\"";
            // line 144
            if (twig_test_empty((isset($context["type"]) ? $context["type"] : null))) {
                echo " checked";
            }
            echo "> all<br>
                                            <input type=\"radio\" name=\"type\" value=\"houses\"";
            // line 145
            if (((isset($context["type"]) ? $context["type"] : null) == "houses")) {
                echo " checked";
            }
            echo "> houses and flats<br>
                                            <input type=\"radio\" name=\"type\" value=\"guildhalls\"";
            // line 146
            if (((isset($context["type"]) ? $context["type"] : null) == "guildhalls")) {
                echo " checked";
            }
            echo "> guildhalls<br>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>

                            <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
                                <tbody>
                                    <tr align=\"center\">
                                        <td>
                                            ";
            // line 157
            echo twig_include($this->env, $context, "buttons.submit.html.twig");
            echo "
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </td>
            </tr>
        </table>
    ";
        }
        // line 168
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "houses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 168,  411 => 157,  395 => 146,  389 => 145,  383 => 144,  378 => 142,  368 => 137,  360 => 134,  352 => 131,  342 => 126,  334 => 123,  326 => 120,  321 => 117,  309 => 114,  298 => 113,  295 => 112,  292 => 111,  289 => 110,  286 => 109,  283 => 108,  280 => 107,  277 => 106,  271 => 105,  269 => 104,  264 => 102,  255 => 96,  248 => 92,  242 => 89,  239 => 88,  233 => 84,  230 => 83,  218 => 77,  214 => 76,  207 => 72,  200 => 68,  193 => 64,  186 => 60,  180 => 58,  177 => 57,  172 => 56,  169 => 55,  167 => 54,  163 => 52,  157 => 50,  155 => 49,  147 => 43,  145 => 42,  141 => 41,  129 => 38,  125 => 37,  121 => 35,  119 => 34,  116 => 33,  112 => 31,  96 => 30,  94 => 29,  87 => 25,  77 => 18,  73 => 17,  69 => 16,  65 => 15,  60 => 13,  56 => 12,  52 => 11,  48 => 10,  41 => 7,  38 => 6,  29 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "houses.html.twig", "/var/www/html/system/templates/houses.html.twig");
    }
}
