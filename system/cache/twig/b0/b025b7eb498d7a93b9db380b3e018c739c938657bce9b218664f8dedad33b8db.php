<?php

/* downloads.html.twig */
class __TwigTemplate_f1dddfb8b151553c2f3bc2857aa94acc61e0bf25fc9d26059b5e0c9d62aa96fd extends Twig_Template
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
        echo "<br/><br/>
<div style=\"text-align:center\">
\tWe're using official Tibia Client <strong>";
        // line 3
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "client", array()) / 100), "html", null, true);
        echo "</strong><br/>
\t<p>Download Tibia client ";
        // line 4
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "client", array()) / 100), "html", null, true);
        echo " for windows <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "client_download", array()), "html", null, true);
        echo "\">HERE</a>.</p>
\t<p>Download Tibia client ";
        // line 5
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "client", array()) / 100), "html", null, true);
        echo " for linux <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "client_download_linux", array()), "html", null, true);
        echo "\">HERE</a>.</p>

\t<h2>IP Changer:</h2>

\t<a href=\"https://static.otland.net/ipchanger.exe\" target=\"_blank\">HERE</a>
</div>";
    }

    public function getTemplateName()
    {
        return "downloads.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "downloads.html.twig", "/var/www/html/system/templates/downloads.html.twig");
    }
}
