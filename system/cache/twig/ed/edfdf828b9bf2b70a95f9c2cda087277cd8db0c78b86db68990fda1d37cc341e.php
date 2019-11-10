<?php

/* networks.html.twig */
class __TwigTemplate_502fbc0b6e944de95d1778cc44ecab723f74b4c835bd3bcc0a1521e4aba1711f extends Twig_Template
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
        echo "<div id=\"NetworksBox\" class=\"Themebox\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/themeboxes/networks/networksbox.png);\">
\t";
        // line 2
        if ( !twig_test_empty($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "network_facebook", array(), "array"))) {
            // line 3
            echo "\t<div id=\"FacebookBlock\">
\t\t<div id=\"FacebookLikeBox\">
\t\t\t<div class=\"fb-like-box fb_iframe_widget\" data-href=\"https://www.facebook.com/";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "network_facebook", array(), "array"), "html", null, true);
            echo "\" data-width=\"175\" data-height=\"180\" data-show-faces=\"true\" data-stream=\"false\" data-border-color=\"none\" data-header=\"false\" fb-xfbml-state=\"rendered\">
\t\t\t\t\t\t\t\t\t\t<span style=\"vertical-align: bottom; width: 181px; height: 180px;\">
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"FacebookSendBox\">
\t\t\t<div class=\"fb-send fb_iframe_widget\" data-href=\"https://www.facebook.com/";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "network_facebook", array(), "array"), "html", null, true);
            echo "\" data-width=\"50\" data-height=\"20\" fb-xfbml-state=\"rendered\">
\t\t\t\t\t\t\t\t\t\t<span style=\"vertical-align: bottom; width: 50px; height: 20px;\">
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"FacebookLikes\">
\t\t\t<div class=\"fb-like fb_edge_widget_with_comment fb_iframe_widget\" data-href=\"https://www.facebook.com/";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "network_facebook", array(), "array"), "html", null, true);
            echo "\" data-send=\"false\" data-width=\"225\" data-show-faces=\"false\" fb-xfbml-state=\"rendered\">
\t\t\t\t\t\t\t\t\t\t<span style=\"height: 28px; width: 225px;\">
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        }
        // line 24
        echo "\t";
        if ( !twig_test_empty($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "network_twitter", array(), "array"))) {
            // line 25
            echo "\t<div id=\"TwitterBlock\">
\t\t<a href=\"https://twitter.com/<?php echo \$config['network_twitter']; ?>\" class=\"twitter-follow-button\" data-show-count=\"false\">Follow @<?php echo \$config['network_twitter']; ?></a>
\t\t<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
\t</div>
\t";
        }
        // line 30
        echo "\t<div class=\"Bottom\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/general/box-bottom.gif);\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "networks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 30,  61 => 25,  58 => 24,  48 => 17,  39 => 11,  30 => 5,  26 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "networks.html.twig", "/var/www/html/templates/tibiacom/boxes/templates/networks.html.twig");
    }
}
