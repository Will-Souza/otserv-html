<?php

/* /gesior-shop-system/gifts.html.twig */
class __TwigTemplate_7ccb6b5488738be4c14373f22abdd226f402284906bf43edafa40c9e3bdae702 extends Twig_Template
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
        echo "<style>
\t.offer_container {
\t\ttext-align: center;
\t}

\t.offer_type {
\t\tpadding: 5px 5px 1px 5px;
\t\tmargin: 5px 1px 0 1px;
\t\tbackground-color: #303030;
\t\tcolor: #FFFFFF;
\t}

\t.offer_table {
\t\tmargin-left: auto;
\t\tmargin-right: auto;
\t}

\t.offer_table tr td {
\t\ttext-align: center;
\t}
</style>

<div style=\"text-align: center\"><h1>";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h1></div>
<div style=\"float:right;\">
\t<span style=\"color: green; font-weight: bold\">Your premium points: </span>";
        // line 25
        echo (isset($context["user_premium_points"]) ? $context["user_premium_points"] : null);
        echo "
</div>
<br/><br/>

<div class=\"offer_container\">
\t";
        // line 30
        if (array_key_exists("warning", $context)) {
            // line 31
            echo "\t\t";
            echo twig_escape_filter($this->env, (isset($context["warning"]) ? $context["warning"] : null), "html", null, true);
            echo "
\t";
        }
        // line 33
        echo "
\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offer_types"]) ? $context["offer_types"] : null));
        foreach ($context['_seq'] as $context["offer_type"] => $context["offer_name"]) {
            // line 35
            echo "\t\t<a class=\"offer_type\" href=\"?subtopic=gifts&offertype=";
            echo twig_escape_filter($this->env, $context["offer_type"], "html", null, true);
            echo "\"";
            if (((isset($context["get_offer_type"]) ? $context["get_offer_type"] : null) == $context["offer_type"])) {
                echo " style=\"background-color: #505050\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["offer_name"], "html", null, true);
            echo "</a>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['offer_type'], $context['offer_name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
\t<table class=\"offer_table\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" width=\"550\">
\t\t<tr width=\"650\" bgcolor=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vdarkborder", array()), "html", null, true);
        echo "\">
\t\t\t<td colspan=\"4\"></td>
\t\t</tr>

\t\t<tr bgcolor=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "darkborder", array()), "html", null, true);
        echo "\">
\t\t\t<td width=\"50\"><b>Picture</b></td>
\t\t\t<td width=\"350\" style=\"text-align: left\"><b>Description</b></td>
\t\t\t<td width=\"50\"><b>Points</b></td>
\t\t\t<td width=\"100\"><b>Select product</b></td>
\t\t</tr>

\t\t";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offers_fetch"]) ? $context["offers_fetch"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            if (($this->getAttribute($context["offer"], "type", array()) == (isset($context["get_offer_type"]) ? $context["get_offer_type"] : null))) {
                // line 51
                echo "\t\t\t<tr bgcolor=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lightborder", array()), "html", null, true);
                echo "\">
\t\t\t\t<td>
\t\t\t\t\t";
                // line 53
                if ((($this->getAttribute($context["offer"], "type", array()) == "item") || ($this->getAttribute($context["offer"], "type", array()) == "container"))) {
                    // line 54
                    echo "\t\t\t\t\t\t";
                    echo $this->getAttribute($context["offer"], "item_img", array());
                    echo "
\t\t\t\t\t\t";
                    // line 55
                    if ( !twig_test_empty($this->getAttribute($context["offer"], "container_img", array()))) {
                        // line 56
                        echo "\t\t\t\t\t\t\t";
                        echo $this->getAttribute($context["offer"], "container_img", array());
                        echo "
\t\t\t\t\t\t";
                    }
                    // line 58
                    echo "\t\t\t\t\t";
                } elseif (($this->getAttribute($context["offer"], "type", array()) == "pacc")) {
                    // line 59
                    echo "\t\t\t\t\t\t<img src=\"images/shop-system/PremiumTime.png\" alt=\"Premium Time\"/>
\t\t\t\t\t";
                } elseif (($this->getAttribute(                // line 60
$context["offer"], "type", array()) == "mount")) {
                    // line 61
                    echo "\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "mount_img_dir", array()), "html", null, true);
                    echo "\" alt=\"Mount\"/>
\t\t\t\t\t";
                } elseif (($this->getAttribute(                // line 62
$context["offer"], "type", array()) == "addon")) {
                    // line 63
                    echo "\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<img style=\"margin-left:-30px;margin-top:-30px;width:64px;height:64px;\" src=\"";
                    // line 66
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "outfit_images_url", array()), "html", null, true);
                    echo "?id=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "look_male", array()), "html", null, true);
                    echo "&addons=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "addons_male", array()), "html", null, true);
                    echo "&head=";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["outfit_colors"]) ? $context["outfit_colors"] : null), "head", array()), "html", null, true);
                    echo "&body=";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["outfit_colors"]) ? $context["outfit_colors"] : null), "body", array()), "html", null, true);
                    echo "&legs=";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["outfit_colors"]) ? $context["outfit_colors"] : null), "legs", array()), "html", null, true);
                    echo "&feet=";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["outfit_colors"]) ? $context["outfit_colors"] : null), "feet", array()), "html", null, true);
                    echo "\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<img style=\"margin-left:-30px;margin-top:-30px;width:64px;height:64px;\" src=\"";
                    // line 69
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "outfit_images_url", array()), "html", null, true);
                    echo "?id=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "look_female", array()), "html", null, true);
                    echo "&addons=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "addons_female", array()), "html", null, true);
                    echo "&head=";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["outfit_colors"]) ? $context["outfit_colors"] : null), "head", array()), "html", null, true);
                    echo "&body=";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["outfit_colors"]) ? $context["outfit_colors"] : null), "body", array()), "html", null, true);
                    echo "&legs=";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["outfit_colors"]) ? $context["outfit_colors"] : null), "legs", array()), "html", null, true);
                    echo "&feet=";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["outfit_colors"]) ? $context["outfit_colors"] : null), "feet", array()), "html", null, true);
                    echo "\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>
\t\t\t\t\t";
                }
                // line 74
                echo "\t\t\t\t</td>
\t\t\t\t<td style=\"text-align: left\">
\t\t\t\t\t<b>";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "name", array()), "html", null, true);
                echo "</b><br/>
\t\t\t\t\t";
                // line 77
                echo $this->getAttribute($context["offer"], "description", array());
                echo "
\t\t\t\t</td>
\t\t\t\t<td>";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "points", array()), "html", null, true);
                echo "</td>
\t\t\t\t<td>
\t\t\t\t\t";
                // line 81
                if ((isset($context["logged"]) ? $context["logged"] : null)) {
                    // line 82
                    echo "\t\t\t\t\t\t<form action=\"?subtopic=gifts&action=select_player\" method=\"post\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"buy_id\" value=\"";
                    // line 83
                    echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "id", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t<input type=\"submit\" value=\"Buy\">
\t\t\t\t\t\t</form>
\t\t\t\t\t";
                } else {
                    // line 87
                    echo "\t\t\t\t\t\t<b>Login to buy</b>
\t\t\t\t\t";
                }
                // line 89
                echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 92
            echo "\t\t\t";
            if ($this->getAttribute((isset($context["offer_types"]) ? $context["offer_types"] : null), (isset($context["get_offer_type"]) ? $context["get_offer_type"] : null), array(), "array")) {
                // line 93
                echo "\t\t\t\t<td style=\"text-align: left\" colspan=\"4\">There is no offer here.</td>
\t\t\t";
            } else {
                // line 95
                echo "\t\t\t\t<td style=\"text-align: left\" colspan=\"4\">This offer type doesn't exist. Please specify different name.</td>
\t\t\t";
            }
            // line 97
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "\t</table>
</div>";
    }

    public function getTemplateName()
    {
        return "/gesior-shop-system/gifts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 98,  245 => 97,  241 => 95,  237 => 93,  234 => 92,  226 => 89,  222 => 87,  215 => 83,  212 => 82,  210 => 81,  205 => 79,  200 => 77,  196 => 76,  192 => 74,  172 => 69,  154 => 66,  149 => 63,  147 => 62,  142 => 61,  140 => 60,  137 => 59,  134 => 58,  128 => 56,  126 => 55,  121 => 54,  119 => 53,  113 => 51,  107 => 50,  97 => 43,  90 => 39,  86 => 37,  71 => 35,  67 => 34,  64 => 33,  58 => 31,  56 => 30,  48 => 25,  43 => 23,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/gesior-shop-system/gifts.html.twig", "/var/www/html/system/templates/gesior-shop-system/gifts.html.twig");
    }
}
