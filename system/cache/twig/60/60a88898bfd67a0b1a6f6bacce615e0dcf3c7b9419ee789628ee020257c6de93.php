<?php

/* donate.html.twig */
class __TwigTemplate_afc8be741e5eecf33dc3e4fdfdcca46bcab7f59cec86311f46500c5ee23b8296 extends Twig_Template
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
        echo "<table width=\"100%\" border=\"0\" cellpadding=\"4\" cellspacing=\"1\">
\t<tbody>
\t<tr>
\t\t<td colspan=\"3\" bgcolor=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vdarkborder", array()), "html", null, true);
        echo "\" class=\"white\"><span class=\"style4\">Donate to receive points</span></td>
\t</tr>
\t<tr bgcolor=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vdarkborder", array()), "html", null, true);
        echo "\">
\t\t<td class=\"white\" width=\"35%\"><b>Donation</b></td>
\t\t<td class=\"white\" width=\"35%\"><b>Points</b></td>
\t</tr>
\t";
        // line 10
        $context["i"] = 1;
        // line 11
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "pagSeguro", array()), "options", array()));
        foreach ($context['_seq'] as $context["price"] => $context["points"]) {
            // line 12
            echo "\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array((isset($context["i"]) ? $context["i"] : null))), "html", null, true);
            echo "\"><td>R\$";
            echo twig_escape_filter($this->env, $context["price"], "html", null, true);
            echo "</td><td><img src=\"images/content/bullet.gif\"> ";
            echo twig_escape_filter($this->env, $context["points"], "html", null, true);
            echo " Points</td></tr>
\t";
            // line 13
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 14
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['price'], $context['points'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t</tbody>
</table>
</br>
<form target=\"pagseguro\" method=\"post\" action=\"";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("pagseguro")), "html", null, true);
        echo "\">
\t<input type=\"hidden\" name=\"reference\" value=\"";
        // line 19
        if (twig_constant("USE_ACCOUNT_NAME")) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["account_logged"]) ? $context["account_logged"] : null), "getName", array(), "method"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["account_logged"]) ? $context["account_logged"] : null), "getId", array(), "method"), "html", null, true);
        }
        echo "\">
\t<table border=\"0\" cellpadding=\"4\" cellspacing=\"1\" width=\"100%\">
\t\t<tbody>
\t\t<tr bgcolor=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vdarkborder", array()), "html", null, true);
        echo "\" class=\"white\">
\t\t\t<th colspan=\"2\"><strong>Choose the number of points you want to donate.</strong></th>
\t\t</tr>
\t\t<tr bgcolor=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "darkborder", array()), "html", null, true);
        echo "\">
\t\t\t<td width=\"10%\">Your account</td>
\t\t\t<td><strong>";
        // line 27
        if (twig_constant("USE_ACCOUNT_NAME")) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["account_logged"]) ? $context["account_logged"] : null), "getName", array(), "method"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["account_logged"]) ? $context["account_logged"] : null), "getId", array(), "method"), "html", null, true);
        }
        echo "</strong></td>
\t\t</tr>
\t\t<tr bgcolor=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "darkborder", array()), "html", null, true);
        echo "\">
\t\t\t<td width=\"10%\">Points</td>
\t\t\t<td><input name=\"itemCount\" type=\"number\" min=\"1\" size=\"5\" maxlength=\"5\" required/></td>
\t\t</tr>
\t\t<tr bgcolor=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "darkborder", array()), "html", null, true);
        echo "\">
\t\t\t<td colspan=\"2\">
\t\t\t\t<input type=\"image\" src=\"https://p.simg.uol.com.br/out/pagseguro/i/botoes/carrinhoproprio/btnFinalizar.jpg\" name=\"submit\" ";
        // line 35
        if ((isset($context["is_localhost"]) ? $context["is_localhost"] : null)) {
            echo "disabled";
        }
        echo "/>
\t\t\t</td>
\t\t</tr>
\t\t</tbody>
\t</table>
</form>
<b><span style=\"color:#ff0000;\">OBS:</span></b> Points are delivered <b>automatically</b> after the <u>approved</u> of your payment by PagSeguro.";
    }

    public function getTemplateName()
    {
        return "donate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 35,  106 => 33,  99 => 29,  90 => 27,  85 => 25,  79 => 22,  69 => 19,  65 => 18,  60 => 15,  54 => 14,  52 => 13,  43 => 12,  38 => 11,  36 => 10,  29 => 6,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "donate.html.twig", "/var/www/html/system/templates/donate.html.twig");
    }
}
