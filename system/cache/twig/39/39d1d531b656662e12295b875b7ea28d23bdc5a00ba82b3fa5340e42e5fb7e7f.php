<?php

/* mail.account.register.html.twig */
class __TwigTemplate_f28d204b3a67838562eee43e762366bf7e6350980849354082d5840446c44b9c extends Twig_Template
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
        echo "<h3>New recovery key!</h3>
<p>You or someone else generated recovery key to your account on server <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
        echo "\"><b>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lua", array()), "serverName", array()), "html", null, true);
        echo "</b></a>.</p>
<p>Recovery key: <b>";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["recovery_key"]) ? $context["recovery_key"] : null), "html", null, true);
        echo "</b></p>";
    }

    public function getTemplateName()
    {
        return "mail.account.register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "mail.account.register.html.twig", "/var/www/html/system/templates/mail.account.register.html.twig");
    }
}
