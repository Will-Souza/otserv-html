<?php

/* account.login.html.twig */
class __TwigTemplate_3531c73d00b24de000f55ec6a724b01474a98e1a1ca102bd04fbde6672d200f0 extends Twig_Template
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
        echo "<form action=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("account/manage")), "html", null, true);
        echo "\" method=\"post\" style=\"margin: 0px; padding: 0px;\">
\t";
        // line 2
        if ( !(null === (isset($context["redirect"]) ? $context["redirect"] : null))) {
            // line 3
            echo "\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["redirect"]) ? $context["redirect"] : null), "html", null, true);
            echo "\" />
\t";
        }
        // line 5
        echo "\t<div class=\"TableContainer\" >
\t\t<table class=\"Table4\" cellpadding=\"0\" cellspacing=\"0\" >
\t\t\t<div class=\"CaptionContainer\" >
\t\t\t\t<div class=\"CaptionInnerContainer\" >
\t\t\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\" /></span>
\t\t\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\" /></span>
\t\t\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\" ></span>
\t\t\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\" /></span>
\t\t\t\t\t<div class=\"Text\" >Account Login</div>
\t\t\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\" /></span>
\t\t\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\" ></span>
\t\t\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\" /></span>
\t\t\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\" /></span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<div class=\"InnerTableContainer\" >
\t\t\t\t\t\t<table style=\"width:100%;\" >
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"TableShadowContainerRightTop\" >
\t\t\t\t\t\t\t\t\t\t<div class=\"TableShadowRightTop\" style=\"background-image:url(";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/global/content/table-shadow-rt.gif);\" ></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"TableContentAndRightShadow\" style=\"background-image:url(";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/global/content/table-shadow-rm.gif);\" >
\t\t\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\" >
\t\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\"  style=\"border:1px solid #faf0d7;\" >
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table style=\"float: left; width: 370px;\" cellpadding=\"0\" cellspacing=\"0\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" ><span";
        // line 36
        if ( !(null === (isset($context["error"]) ? $context["error"] : null))) {
            echo " class=\"red\"";
        }
        echo ">Account ";
        echo twig_escape_filter($this->env, (isset($context["account"]) ? $context["account"] : null), "html", null, true);
        echo ":</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"password\" name=\"account_login\" size=\"35\" maxlength=\"30\" autofocus /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" ><span";
        // line 40
        if ( !(null === (isset($context["error"]) ? $context["error"] : null))) {
            echo " class=\"red\"";
        }
        echo ">Password:</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"password\" name=\"password_login\" size=\"35\" maxlength=\"29\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" ></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"checkbox\" id=\"remember_me\" name=\"remember_me\" value=\"true\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"remember_me\"> Remember me</label></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"float: right; font-size: 1px;\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"page\" value=\"overview\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 51
        echo twig_include($this->env, $context, "buttons.login.html.twig");
        echo "
</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"width: 2px; height: 2px;\" ></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
        // line 54
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("account/lost")), "html", null, true);
        echo "\" method=\"post\" style=\"padding:0px;margin:0px;\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 55
        echo twig_include($this->env, $context, "buttons.account_lost.html.twig");
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"TableShadowContainer\" >
\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomShadow\" style=\"background-image:url(";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/global/content/table-shadow-bm.gif);\" >
\t\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomLeftShadow\" style=\"background-image:url(";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/global/content/table-shadow-bl.gif);\" ></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomRightShadow\" style=\"background-image:url(";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/global/content/table-shadow-br.gif);\" ></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t</div>
<br/>
<div style=\"text-align:center\">
\t<h1>New to ";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lua", array()), "serverName", array()), "html", null, true);
        echo "?</h1>
</div>
<div class=\"TableContainer\" >
\t<table class=\"Table4\" cellpadding=\"0\" cellspacing=\"0\" >
\t\t<div class=\"CaptionContainer\" >
\t\t\t<div class=\"CaptionInnerContainer\" >
\t\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\" /></span>
\t\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\" /></span>
\t\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\" ></span>
\t\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\" /></span>
\t\t\t\t<div class=\"Text\" >New Player</div>
\t\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\" /></span>
\t\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\" ></span>
\t\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\" /></span>
\t\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\" /></span>
\t\t\t</div>
\t\t</div>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<div class=\"InnerTableContainer\" >
\t\t\t\t\t<table style=\"width:100%;\" >
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"TableShadowContainerRightTop\" >
\t\t\t\t\t\t\t\t\t<div class=\"TableShadowRightTop\" style=\"background-image:url(";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/global/content/table-shadow-rt.gif);\" ></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"TableContentAndRightShadow\" style=\"background-image:url(";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/global/content/table-shadow-rm.gif);\" >
\t\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\" >
\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\"  style=\"border:1px solid #faf0d7;\" >
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td >
\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"float: right; margin-top: 20px;\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 111
        ob_start();
        // line 112
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form class=\"MediumButtonForm\" action=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("account/create")), "html", null, true);
        echo "\" method=\"post\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"MediumButtonBackground\" style=\"background-image:url(";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/global/buttons/mediumbutton.gif)\" onMouseOver=\"MouseOverBigButton(this);\" onMouseOut=\"MouseOutBigButton(this);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"MediumButtonOver\" style=\"background-image:url(";
        // line 114
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/global/buttons/mediumbutton-over.gif)\" onMouseOver=\"MouseOverBigButton(this);\" onMouseOut=\"MouseOutBigButton(this);\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"MediumButtonText\" type=\"image\" name=\"Create Account\" alt=\"Create Account\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/global/buttons/mediumbutton_createaccount.png\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 119
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"LoginCreateAccountBox\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p><b>";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lua", array()), "serverName", array()), "html", null, true);
        echo "...</b></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin-left: 10px;\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>... where hardcore gaming meets fantasy.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>... where friendships last a lifetime.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>... unites adventurers since 2017!</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"TableShadowContainer\" >
\t\t\t\t\t\t\t\t\t<div class=\"TableBottomShadow\" style=\"background-image:url(";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/global/content/table-shadow-bm.gif);\" >
\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomLeftShadow\" style=\"background-image:url(";
        // line 133
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/global/content/table-shadow-bl.gif);\" ></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomRightShadow\" style=\"background-image:url(";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/global/content/table-shadow-br.gif);\" ></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</table>
</div>
";
    }

    public function getTemplateName()
    {
        return "account.login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 134,  277 => 133,  273 => 132,  259 => 121,  255 => 119,  248 => 115,  244 => 114,  240 => 113,  235 => 112,  233 => 111,  224 => 105,  219 => 103,  206 => 93,  202 => 92,  198 => 91,  194 => 90,  189 => 88,  185 => 87,  181 => 86,  177 => 85,  168 => 79,  152 => 66,  148 => 65,  144 => 64,  132 => 55,  128 => 54,  122 => 51,  106 => 40,  95 => 36,  85 => 29,  80 => 27,  67 => 17,  63 => 16,  59 => 15,  55 => 14,  50 => 12,  46 => 11,  42 => 10,  38 => 9,  32 => 5,  26 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "account.login.html.twig", "/var/www/html/templates/tibiacom/account.login.html.twig");
    }
}
