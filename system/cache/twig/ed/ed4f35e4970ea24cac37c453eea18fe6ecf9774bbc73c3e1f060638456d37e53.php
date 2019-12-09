<?php

/* commands.form.html.twig */
class __TwigTemplate_74c328c8fd90c01830851b81affa5fc4caa6368c0c0ca4bb5dfc2e1ede4f4f57 extends Twig_Template
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
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        echo "\">
\t";
        // line 2
        if (((isset($context["action"]) ? $context["action"] : null) == "edit")) {
            // line 3
            echo "\t<input type=\"hidden\" name=\"id\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" />
\t";
        }
        // line 5
        echo "\t<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"4\">
\t\t<tr>
\t\t\t<td bgcolor=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vdarkborder", array()), "html", null, true);
        echo "\" class=\"white\"><b>";
        if (((isset($context["action"]) ? $context["action"] : null) == "edit")) {
            echo "Edit";
        } else {
            echo "Add";
        }
        echo " command</b></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td bgcolor=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "darkborder", array()), "html", null, true);
        echo "\">
\t\t\t\t<table border=\"0\" cellpadding=\"1\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Words:</td>
\t\t\t\t\t\t<td><input name=\"words\" value=\"";
        // line 14
        if ( !(null === (isset($context["words"]) ? $context["words"] : null))) {
            echo twig_escape_filter($this->env, (isset($context["words"]) ? $context["words"] : null), "html", null, true);
        }
        echo "\" size=\"29\" maxlength=\"29\"/></td>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Description:</td>
\t\t\t\t\t\t<td><textarea name=\"description\" maxlength=\"300\" cols=\"50\" rows=\"5\">";
        // line 17
        if ( !(null === (isset($context["description"]) ? $context["description"] : null))) {
            echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
        }
        echo "</textarea></td>
\t\t\t\t\t<tr/>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"2\" align=\"center\"><input type=\"submit\" value=\"Submit\"/>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</td>
\t\t</tr>
\t</table>
</form>";
    }

    public function getTemplateName()
    {
        return "commands.form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 17,  55 => 14,  48 => 10,  36 => 7,  32 => 5,  26 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "commands.form.html.twig", "/var/www/html/system/templates/commands.form.html.twig");
    }
}
