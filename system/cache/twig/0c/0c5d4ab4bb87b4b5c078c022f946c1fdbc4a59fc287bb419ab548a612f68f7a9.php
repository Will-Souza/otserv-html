<?php

/* highscores.html.twig */
class __TwigTemplate_9228c75b5d4ca478009a981a408860b0aa6864e99df68456cf417533cc938288 extends Twig_Template
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
        echo "<style type=\"text/css\">
\t.top_level {
\t\tposition: absolute;
\t\ttop: 29px;
\t\tleft: 6px;
\t\theight: 160px;
\t\twidth: 168px;
\t\tz-index: 20;
\t\tpadding-top: 6px;
\t\tfont-family: Tahoma, Geneva, sans-serif;
\t\tfont-size: 9.2pt;
\t\tcolor: #FFF;
\t\tfont-weight: bold;
\t\ttext-align: right;
\t\ttext-decoration: inherit;
\t\ttext-shadow: 0.1em 0.1em #333
\t}

\t#Topbar a {
\t\ttext-decoration: none;
\t}

\t.online {
\t\tcolor: #008000;
\t}

\t.offline {
\t\tcolor: #FF0000;
\t}

\ta.topfont {
\t\tfont-family: Verdana, Arial, Helvetica, sans-serif;
\t\tfont-size: 11px;
\t\ttext-decoration: none
\t}
\ta:hover.topfont {
\t\tfont-family: Verdana, Arial, Helvetica, sans-serif;
\t\tfont-size: 11px;
\t\tcolor: #CCC;
\t\ttext-decoration:none
\t}
</style>

<div id=\"Topbar\" class=\"Themebox\" style=\"background-image:url(";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/themeboxes/highscores/highscores.png);\">
\t<div class=\"top_level\" style=\"background:url(";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/themeboxes/bg_top.png)\" align=\"\t\">
    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topPlayers"]) ? $context["topPlayers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 47
            echo "\t    <div style=\"text-align:left\"><a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getPlayerLink')->getCallable(), array($this->getAttribute($context["player"], "name", array(), "array"), false)), "html", null, true);
            echo " \" class=\"topfont ";
            if ($this->getAttribute($context["player"], "online", array(), "array")) {
                echo "online";
            } else {
                echo "offline";
            }
            echo "\">
\t\t\t<span style=\"color: #CCC\">&nbsp;&nbsp;&nbsp;&nbsp;";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "rank", array(), "array"), "html", null, true);
            echo " - </span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "name", array(), "array"), "html", null, true);
            echo "
\t\t\t<br>
\t\t\t<small><span style=\"color: white\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Level: (";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "level", array(), "array"), "html", null, true);
            echo ")</span></small>
\t\t\t<br>
\t\t</a>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t<div class=\"Bottom\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/general/box-bottom.gif); top: 159px;; left:-5px;\">
\t</div>
</div>
</div>
<br/><br/><br/>
";
    }

    public function getTemplateName()
    {
        return "highscores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 55,  94 => 50,  87 => 48,  76 => 47,  72 => 46,  68 => 45,  64 => 44,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "highscores.html.twig", "/var/www/html/templates/tibiacom/boxes/templates/highscores.html.twig");
    }
}
