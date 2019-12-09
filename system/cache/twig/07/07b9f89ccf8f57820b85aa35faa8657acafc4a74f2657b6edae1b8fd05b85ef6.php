<?php

/* gesior-shop-system/paypal.html.twig */
class __TwigTemplate_808e3f70f4611356b9a487d7ba45b8af38761622a0dfe0c15ba2bf6ba6bff9e4 extends Twig_Template
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
        echo "<b>Automatic PayPal Donation System.</b><br><br>
The donation costs:
<ul>
\t";
        // line 4
        $context["options"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "paypal", array()), "options", array());
        // line 5
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
        foreach ($context['_seq'] as $context["cost"] => $context["points"]) {
            // line 6
            echo "\t\t<li>";
            echo twig_escape_filter($this->env, (($context["cost"] . " ") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "paypal", array()), "currency_code", array())), "html", null, true);
            echo " (for ";
            echo twig_escape_filter($this->env, $context["points"], "html", null, true);
            echo " points)</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['cost'], $context['points'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</ul>
<br/>
<b>Here are the steps you need to make:</b> <br>
1. You need a valid creditcard <b>or</b> a PayPal account with a required balance. <br>
2. Fill in your account name. <br>
3. Click on the donate button. <br>
4. Make a transaction. <br>
5. After the transaction points will be automatically added to your account.<br>
6. Go to Item shop and use your points!<br/>
<b>7. If something goes wrong, or you have any questions - please contact us at ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "paypal", array()), "contact_email", array()), "html", null, true);
        echo "</b>
<br/><br/>

<form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\">
\t<input type=\"hidden\" name=\"cmd\" value=\"_donations\">
\t<input type=\"hidden\" name=\"business\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "paypal", array()), "email", array()), "html", null, true);
        echo "\">
\t<input type=\"hidden\" name=\"item_name\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "paypal", array()), "item_name", array()), "html", null, true);
        echo "\">
\t<input type=\"hidden\"  name=\"custom\" ";
        // line 24
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["account_logged"]) ? $context["account_logged"] : null), "getId", array(), "method"), "html", null, true);
            echo "\"";
        }
        echo "/>
\t<b>Account:</b> <input type=\"text\"  name=\"account\" value=\"";
        // line 25
        if (twig_constant("USE_ACCOUNT_NAME")) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["account_logged"]) ? $context["account_logged"] : null), "getName", array(), "method"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["account_logged"]) ? $context["account_logged"] : null), "getId", array(), "method"), "html", null, true);
        }
        echo "\" disabled/>
\t<select name=\"amount\">
\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
        foreach ($context['_seq'] as $context["cost"] => $context["points"]) {
            // line 28
            echo "\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["cost"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($context["cost"] . " ") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "paypal", array()), "currency_code", array())), "html", null, true);
            echo "</option>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['cost'], $context['points'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t</select>
\t<input type=\"hidden\" name=\"lc\" value=\"GB\"/>
\t<input type=\"hidden\" name=\"currency_code\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "paypal", array()), "currency_code", array()), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" name=\"no_shipping\" value=\"1\"/>
\t<input type=\"hidden\" name=\"notify_url\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
        echo "payments/paypal.php\"/>
\t<input type=\"hidden\" name=\"return\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" name=\"rm\" value=\"0\"/>
\t<input type=\"image\" src=\"https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif\" border=\"0\" name=\"submit\" alt=\"PayPal - The safer, easier way to pay online!\" ";
        // line 37
        if ((isset($context["is_localhost"]) ? $context["is_localhost"] : null)) {
            echo "disabled";
        }
        echo "/>
\t<img alt=\"\" border=\"0\" src=\"https://www.paypal.com/en_US/i/scr/pixel.gif\" width=\"1\" height=\"1\">
</form>";
    }

    public function getTemplateName()
    {
        return "gesior-shop-system/paypal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 37,  114 => 35,  110 => 34,  105 => 32,  101 => 30,  90 => 28,  86 => 27,  77 => 25,  69 => 24,  65 => 23,  61 => 22,  53 => 17,  42 => 8,  31 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "gesior-shop-system/paypal.html.twig", "/var/www/html/system/templates/gesior-shop-system/paypal.html.twig");
    }
}
