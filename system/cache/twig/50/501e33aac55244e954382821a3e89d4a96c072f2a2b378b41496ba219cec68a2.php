<?php

/* guilds.list.html.twig */
class __TwigTemplate_754ec6612f8a5876b252ac7a337c6f67bfd1e4fb2ea76a5ab062bc8878237f9f extends Twig_Template
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
    <div class=\"CaptionContainer\">
        <div class=\"CaptionInnerContainer\">
            <span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
            <span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
            <span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\"></span>
            <span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></span>
            <div class=\"Text\">Active Guilds on ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lua", array()), "serverName", array()), "html", null, true);
        echo "</div>
            <span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></span>
            <span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\"></span>
            <span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
            <span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
        </div>
    </div>

    <table class=\"Table3\" cellpadding=\"0\" cellspacing=\"0\">
        <tbody>
            <tr>
                <td>
                    <div class=\"InnerTableContainer\">
                        <table style=\"width:100%;\">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class=\"TableContentContainer\">
                                            <table class=\"TableContent\" width=\"100%\">
                                                <tbody>
                                                    ";
        // line 28
        if ((twig_length_filter($this->env, (isset($context["guilds"]) ? $context["guilds"] : null)) > 0)) {
            // line 29
            echo "                                                    <tr bgcolor=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vdarkborder", array()), "html", null, true);
            echo "\">
                                                        <td width=\"64\"><b>Logo</b></td>
                                                        <td><b>Description</b></td>
                                                        <td width=\"12%\"><b>&nbsp;</b></td>
                                                    </tr>

                                                        ";
            // line 35
            $context["i"] = 0;
            // line 36
            echo "                                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["guilds"]) ? $context["guilds"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["guild"]) {
                // line 37
                echo "                                                        ";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 38
                echo "                                                        <tr bgcolor=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array((isset($context["i"]) ? $context["i"] : null))), "html", null, true);
                echo "\">
                                                            <td>
                                                                <img src=\"images/guilds/";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["guild"], "logo", array()), "html", null, true);
                echo "\" width=\"64\" height=\"64\">
                                                            </td>

                                                            <td>
                                                                <span";
                // line 44
                if ( !twig_test_empty($this->getAttribute($context["guild"], "description", array()))) {
                    echo " valign=\"top\"";
                }
                echo ">
                                                                    <b>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["guild"], "name", array()), "html", null, true);
                echo "</b>";
                if ((isset($context["isAdmin"]) ? $context["isAdmin"] : null)) {
                    echo "<a href=\"?subtopic=guilds&action=delete_by_admin&guild=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["guild"], "name", array()), "html", null, true);
                    echo "\"> - Delete this guild (for ADMIN only!)</a>";
                }
                // line 46
                echo "                                                                </span>

                                                                ";
                // line 48
                if ( !twig_test_empty($this->getAttribute($context["guild"], "description", array()))) {
                    // line 49
                    echo "                                                                <br>
                                                                <span>";
                    // line 50
                    echo twig_escape_filter($this->env, $this->getAttribute($context["guild"], "description", array()), "html", null, true);
                    echo "</span>
                                                                ";
                }
                // line 52
                echo "                                                            </td>

                                                            <td>
                                                                <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style=\"border:0px;\">
                                                                                <form action=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["guild"], "link", array()), "html", null, true);
                echo "\" method=\"post\">
                                                                                    <button name=\"View\" alt=\"View\" class=\"btn btn-secondary\" src=\"";
                // line 60
                echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
                echo "/images/global/buttons/sbutton_view.gif\" style=\"width: 100%; height: 20px;\">
                                                                                        View
                                                                                    </button>
                                                                                </form>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['guild'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                                                    ";
        } else {
            // line 72
            echo "                                                    <tr bgcolor=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lightborder", array()), "html", null, true);
            echo "\">
                                                        <td valign=\"top\">
                                                            <b>Create Guild</b>
                                                            <br/>
                                                            Actually there is no guild on server.";
            // line 76
            if ((isset($context["logged"]) ? $context["logged"] : null)) {
                echo " Create first! Press button \"Create Guild\"";
            }
            // line 77
            echo "                                                        </td>

                                                        ";
            // line 79
            if ((isset($context["logged"]) ? $context["logged"] : null)) {
                // line 80
                echo "                                                        <td>
                                                            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                                                                <form action=\"?subtopic=guilds&action=create\" method=post>
                                                                    <tr>
                                                                        <td>
                                                                            <button name=\"Create Guild\" alt=\"Create Guild\" class=\"btn btn-secondary\" style=\"width: 100%; height: 20px;\">Create Guild</button>
                                                                        </td>
                                                                    </tr>
                                                                </form>
                                                            </table>
                                                        </td>
                                                        ";
            }
            // line 92
            echo "                                                    </tr>
                                                    ";
        }
        // line 94
        echo "                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<br>

<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
    <tbody>
        <tr>
            <td align=\"center\">
                <img src=\"";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "images/general/blank.gif\" width=\"80\" height=\"1\" border=\"0\">
            </td>

            <td align=\"center\">
                <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                    <tbody>
                        ";
        // line 119
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 120
            echo "                        <form action=\"?subtopic=guilds&action=create\" method=post>
                            <tr>
                                <td>
                                    <input type=\"image\" name=\"Create Guild\" alt=\"Create Guild\" src=\"";
            // line 123
            echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
            echo "/images/global/buttons/sbutton_createguild.png\" border=0 style=\"width: 120px; height: 18px;\">
                                </td>
                            </tr>
                        </form>
                        ";
        } else {
            // line 128
            echo "                        <b>Before you can create guild you must login.</b>
                        <br/>
                        <form action=\"?subtopic=accountmanagement&redirect=";
            // line 130
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("guilds")), "html", null, true);
            echo "\" method=post>
                            <tr>
                                <td>
                                    <input type=\"image\" name=\"Login\" alt=\"Login\" src=\"";
            // line 133
            echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
            echo "/images/global/buttons/sbutton_login.gif\" border=0 style=\"width: 120px; height: 18px;\">
                                </td>
                            </tr>
                        </form>
                        ";
        }
        // line 138
        echo "                    </tbody>
                </table>

                ";
        // line 141
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 142
            echo "                    <br/>
                    If you have any problem with guilds try:
                    <br/>
                    <a href=\"?subtopic=guilds&action=cleanup_players\">Cleanup players</a> - can\\'t join guild/be invited? Can\\'t create guild? Try cleanup players.
                    <br/>
                    <a href=\"?subtopic=guilds&action=cleanup_guilds\">Cleanup guilds</a> - made guild, you are a leader, but you are not on players list? Cleanup guilds!';
                ";
        }
        // line 149
        echo "            </td>

            <td align=\"center\">
                <img src=\"";
        // line 152
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/general/blank.gif\" width=\"80\" height=\"1\" border=\"0\">
            </td>
        </tr>
    </tbody>
</table>




";
    }

    public function getTemplateName()
    {
        return "guilds.list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 152,  286 => 149,  277 => 142,  275 => 141,  270 => 138,  262 => 133,  256 => 130,  252 => 128,  244 => 123,  239 => 120,  237 => 119,  228 => 113,  207 => 94,  203 => 92,  189 => 80,  187 => 79,  183 => 77,  179 => 76,  171 => 72,  168 => 71,  151 => 60,  147 => 59,  138 => 52,  133 => 50,  130 => 49,  128 => 48,  124 => 46,  116 => 45,  110 => 44,  103 => 40,  97 => 38,  94 => 37,  89 => 36,  87 => 35,  77 => 29,  75 => 28,  56 => 12,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "guilds.list.html.twig", "/var/www/html/system/templates/guilds.list.html.twig");
    }
}
