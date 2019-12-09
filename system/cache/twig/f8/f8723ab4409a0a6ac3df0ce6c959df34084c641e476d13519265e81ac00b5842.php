<?php

/* houses.view.html.twig */
class __TwigTemplate_0d6d11bfa6a3d7771e10bedaf9145d164c13fb9c5ddea2fa4ee3d2cfe545e358 extends Twig_Template
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
                    <div class=\"Text\" >";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["houseName"]) ? $context["houseName"] : null), "html", null, true);
            echo "</div>
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
                        <table border=\"0\" cellpadding=\"4\" cellspacing=\"1\" width=\"100%\">
                            <tr style=\"display: inline-flex;\">
                                <td><img src=\"";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["imgPath"]) ? $context["imgPath"] : null), "html", null, true);
            echo "\"></td>
                                <td>
                                    ";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["bedsMessage"]) ? $context["bedsMessage"] : null), "html", null, true);
            echo " and has a size of <b>";
            echo twig_escape_filter($this->env, (isset($context["houseSize"]) ? $context["houseSize"] : null), "html", null, true);
            echo " square meters</b>.

                                    ";
            // line 31
            if (((isset($context["rentType"]) ? $context["rentType"] : null) != "never")) {
                // line 32
                echo "                                        The ";
                echo twig_escape_filter($this->env, (isset($context["rentType"]) ? $context["rentType"] : null), "html", null, true);
                echo " is <b>";
                echo twig_escape_filter($this->env, (isset($context["houseRent"]) ? $context["houseRent"] : null), "html", null, true);
                echo " gold</b> and will be debited to the bank account on <b>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lua", array()), "serverName", array()), "html", null, true);
                echo "</b>.
                                    ";
            }
            // line 34
            echo "                                    <br>

                                    ";
            // line 36
            if ( !twig_test_empty((isset($context["owner"]) ? $context["owner"] : null))) {
                // line 37
                echo "                                    The house has been rented by <b>";
                echo (isset($context["owner"]) ? $context["owner"] : null);
                echo "</b>.
                                    ";
            } else {
                // line 39
                echo "                                    No one has bought this house yet.
                                    ";
            }
            // line 41
            echo "                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
        </table>
    ";
        }
        // line 49
        echo "
</div>
<br><br>";
    }

    public function getTemplateName()
    {
        return "houses.view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 49,  132 => 41,  128 => 39,  122 => 37,  120 => 36,  116 => 34,  106 => 32,  104 => 31,  97 => 29,  92 => 27,  80 => 18,  76 => 17,  72 => 16,  68 => 15,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  48 => 10,  41 => 7,  38 => 6,  29 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "houses.view.html.twig", "/var/www/html/system/templates/houses.view.html.twig");
    }
}
