<?php

/* spells.html.twig */
class __TwigTemplate_9595ea8bc041ec63914f08e9322310cbe85cc800d2ff4b8e48bf9e906f479b87 extends Twig_Template
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

\t.ts_Spells > input[type=\"radio\"] {
\t\tposition: absolute;
\t\tleft: -200vw;
\t}

\t.ts_Spells .tab-panel {
\t\tdisplay: none;
\t}

\t.ts_Spells > input:first-child:checked ~ .tab-panels > .tab-panel:first-child,
\t.ts_Spells > input:nth-child(3):checked ~ .tab-panels > .tab-panel:nth-child(2),
\t.ts_Spells > input:nth-child(5):checked ~ .tab-panels > .tab-panel:nth-child(3),
\t.ts_Spells > input:nth-child(7):checked ~ .tab-panels > .tab-panel:nth-child(4),
\t.ts_Spells > input:nth-child(9):checked ~ .tab-panels > .tab-panel:nth-child(5),
\t.ts_Spells > input:nth-child(11):checked ~ .tab-panels > .tab-panel:nth-child(6) {
\t\tdisplay: block;
\t}

\t.ts_Spells > label {
\t\tposition: relative;
\t\tdisplay: inline-block;
\t\tpadding: 10px 10px 10px;
\t\tmargin-bottom: 10px;
\t\tborder: 1px solid transparent;
\t\tborder-bottom: 0;
\t\tcursor: pointer;
\t\tfont-weight: 600;
\t\tbackground-color: ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vdarkborder", array()), "html", null, true);
        echo ";
\t\tcolor: #fff;
\t}
</style>

";
        // line 35
        if ((isset($context["canEdit"]) ? $context["canEdit"] : null)) {
            // line 36
            echo "\t<form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("spells")), "html", null, true);
            echo "\">
\t\t<input type=\"hidden\" name=\"reload_spells\" value=\"yes\"/>
\t\t<input type=\"submit\" value=\"(admin) Reload spells\"/>
\t</form>
";
        }
        // line 41
        echo "
<form action=\"";
        // line 42
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("spells")), "html", null, true);
        echo "\" method=\"post\">
\t<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
\t\t<tr bgcolor=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vdarkborder", array()), "html", null, true);
        echo "\">
\t\t\t<td class=\"white\"><b>Spell Search</b></td>
\t\t</tr>
\t\t<tr bgcolor=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "darkborder", array()), "html", null, true);
        echo "\">
\t\t\t<td>
\t\t\t\t<table border=\"0\" cellpadding=\"1\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Only for vocation: <select name=\"vocation_id\">
\t\t\t\t\t\t\t\t<option value=\"all\" ";
        // line 52
        if (((isset($context["post_vocation_id"]) ? $context["post_vocation_id"] : null) == "all")) {
            echo " selected";
        }
        echo ">All</option>
\t\t\t\t\t\t\t\t";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vocations", array()));
        foreach ($context['_seq'] as $context["id"] => $context["vocation"]) {
            // line 54
            echo "\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\"";
            if (((($context["id"] == (isset($context["post_vocation_id"]) ? $context["post_vocation_id"] : null)) && ((isset($context["post_vocation_id"]) ? $context["post_vocation_id"] : null) != "all")) && ((isset($context["post_vocation_id"]) ? $context["post_vocation_id"] : null) != ""))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["vocation"], "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['vocation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
        // line 59
        echo twig_include($this->env, $context, "buttons.submit.html.twig");
        echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</td>
\t\t</tr>
\t</table>
</form>
<br/>

<div class=\"ts_Spells\">
\t<input type=\"radio\" name=\"ts_Spells\" id=\"tab_instant\" aria-controls=\"instant\" checked>
\t<label for=\"tab_instant\">Instant</label>

\t<input type=\"radio\" name=\"ts_Spells\" id=\"tab_conjure\" aria-controls=\"conjure\">
\t<label for=\"tab_conjure\">Conjure</label>

\t<input type=\"radio\" name=\"ts_Spells\" id=\"tab_rune\" aria-controls=\"rune\">
\t<label for=\"tab_rune\">Rune</label>

\t<div class=\"tab-panels\">
\t\t<section id=\"instant\" class=\"tab-panel\">
\t\t\t<table id=\"tb_instantSpells\">
\t\t\t\t<thead>
\t\t\t\t<th>Name</th>
\t\t\t\t<th>Words</th>
\t\t\t\t<th>Level</th>
\t\t\t\t<th>Mana</th>
\t\t\t\t<th>Vocations</th>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t";
        // line 90
        $context["i"] = 0;
        // line 91
        echo "\t\t\t\t";
        $context["y"] = 0;
        // line 92
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["spells"]) ? $context["spells"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["spell"]) {
            // line 93
            echo "\t\t\t\t\t";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 94
            echo "\t\t\t\t\t";
            if (($this->getAttribute($context["spell"], "type", array()) == 1)) {
                // line 95
                echo "\t\t\t\t\t\t";
                $context["y"] = ((isset($context["y"]) ? $context["y"] : null) + 1);
                // line 96
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($context["spell"], "name", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($context["spell"], "words", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($context["spell"], "level", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($context["spell"], "mana", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                // line 102
                if ((twig_length_filter($this->env, $this->getAttribute($context["spell"], "vocations", array())) > 0)) {
                    // line 103
                    echo "\t\t\t\t\t\t\t\t\t<span style=\"font-size: 10px\">";
                    echo $this->getAttribute($context["spell"], "vocations", array());
                    echo "</span>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 105
                    echo "\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vocations", array()), (isset($context["post_vocation_id"]) ? $context["post_vocation_id"] : null), array(), "array"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t";
                }
                // line 107
                echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            // line 110
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['spell'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</section>
\t\t<section id=\"conjure\" class=\"tab-panel\">
\t\t\t<table id=\"tb_conjureSpells\">
\t\t\t\t<thead>
\t\t\t\t<th>Name</th>
\t\t\t\t<th>Words</th>
\t\t\t\t<th>Level</th>
\t\t\t\t<th>Mana</th>
\t\t\t\t<th>Soul</th>
\t\t\t\t<th>Item</th>
\t\t\t\t<th>Reagent</th>
\t\t\t\t<th>Vocations</th>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t";
        // line 127
        $context["i"] = 0;
        // line 128
        echo "\t\t\t\t";
        $context["y"] = 0;
        // line 129
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["spells"]) ? $context["spells"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["spell"]) {
            // line 130
            echo "\t\t\t\t\t";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 131
            echo "\t\t\t\t\t";
            if (($this->getAttribute($context["spell"], "type", array()) == 2)) {
                // line 132
                echo "\t\t\t\t\t\t";
                $context["y"] = ((isset($context["y"]) ? $context["y"] : null) + 1);
                // line 133
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute($context["spell"], "name", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute($context["spell"], "words", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 136
                echo twig_escape_filter($this->env, $this->getAttribute($context["spell"], "level", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 137
                echo twig_escape_filter($this->env, $this->getAttribute($context["spell"], "mana", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 138
                echo twig_escape_filter($this->env, $this->getAttribute($context["spell"], "soul", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t";
                // line 141
                if ((($this->getAttribute($context["spell"], "conjure_count", array()) < 150) && ($this->getAttribute($context["spell"], "conjure_count", array()) > 0))) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["spell"], "conjure_count", array()), "html", null, true);
                    echo "x
\t\t\t\t\t\t\t\t\t\t<br/>";
                }
                // line 142
                echo "</small>
\t\t\t\t\t\t\t\t<img src=\"";
                // line 143
                echo twig_escape_filter($this->env, (isset($context["item_path"]) ? $context["item_path"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["spell"], "conjure_id", array()), "html", null, true);
                echo ".gif\"
\t\t\t\t\t\t\t\t\t width=\"32\" height=\"32\" border=\"0\"
\t\t\t\t\t\t\t\t\t alt=\"";
                // line 145
                echo twig_escape_filter($this->env, $this->getAttribute($context["spell"], "conjure_id", array()), "html", null, true);
                echo "\"></td>
\t\t\t\t\t\t\t<td>";
                // line 146
                if (($this->getAttribute($context["spell"], "reagent", array()) > 0)) {
                    // line 147
                    echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, (isset($context["item_path"]) ? $context["item_path"] : null), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["spell"], "reagent", array()), "html", null, true);
                    echo ".gif\"
\t\t\t\t\t\t\t\t\t\t width=\"32\" height=\"32\" border=\"0\"
\t\t\t\t\t\t\t\t\t\t alt=\"";
                    // line 149
                    echo twig_escape_filter($this->env, $this->getAttribute($context["spell"], "reagent", array()), "html", null, true);
                    echo "\">";
                } else {
                    echo "---";
                }
                echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                // line 151
                if ((twig_length_filter($this->env, $this->getAttribute($context["spell"], "vocations", array())) > 0)) {
                    // line 152
                    echo "\t\t\t\t\t\t\t\t\t<span style=\"font-size: 10px\">";
                    echo $this->getAttribute($context["spell"], "vocations", array());
                    echo "</span>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 154
                    echo "\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vocations", array()), (isset($context["post_vocation_id"]) ? $context["post_vocation_id"] : null), array(), "array"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t";
                }
                // line 156
                echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            // line 159
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['spell'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</section>

\t\t<section id=\"rune\" class=\"tab-panel\">
\t\t\t<table id=\"tb_runeSpells\">
\t\t\t\t<thead>
\t\t\t\t<th>Name</th>
\t\t\t\t<th>Level</th>
\t\t\t\t<th>Magic Level</th>
\t\t\t\t<th>Item</th>
\t\t\t\t<th>Vocations</th>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t";
        // line 174
        $context["i"] = 0;
        // line 175
        echo "\t\t\t\t";
        $context["y"] = 0;
        // line 176
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["spells"]) ? $context["spells"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["spell"]) {
            // line 177
            echo "\t\t\t\t\t";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 178
            echo "\t\t\t\t\t";
            if (($this->getAttribute($context["spell"], "type", array()) == 3)) {
                // line 179
                echo "\t\t\t\t\t\t";
                $context["y"] = ((isset($context["y"]) ? $context["y"] : null) + 1);
                // line 180
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
                // line 181
                echo twig_escape_filter($this->env, $this->getAttribute($context["spell"], "name", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 182
                echo twig_escape_filter($this->env, $this->getAttribute($context["spell"], "level", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 183
                echo twig_escape_filter($this->env, $this->getAttribute($context["spell"], "maglevel", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td><img src=\"";
                // line 184
                echo twig_escape_filter($this->env, (isset($context["item_path"]) ? $context["item_path"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["spell"], "item_id", array()), "html", null, true);
                echo ".gif\"
\t\t\t\t\t\t\t\t\t width=\"32\" height=\"32\" border=\"0\"
\t\t\t\t\t\t\t\t\t alt=\"";
                // line 186
                echo twig_escape_filter($this->env, $this->getAttribute($context["spell"], "item_id", array()), "html", null, true);
                echo "\"></td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                // line 188
                if ((twig_length_filter($this->env, $this->getAttribute($context["spell"], "vocations", array())) > 0)) {
                    // line 189
                    echo "\t\t\t\t\t\t\t\t\t<span style=\"font-size: 10px\">";
                    echo $this->getAttribute($context["spell"], "vocations", array());
                    echo "</span>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 191
                    echo "\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vocations", array()), (isset($context["post_vocation_id"]) ? $context["post_vocation_id"] : null), array(), "array"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t";
                }
                // line 193
                echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            // line 196
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['spell'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</section>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "spells.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  433 => 197,  427 => 196,  422 => 193,  416 => 191,  410 => 189,  408 => 188,  403 => 186,  396 => 184,  392 => 183,  388 => 182,  384 => 181,  381 => 180,  378 => 179,  375 => 178,  372 => 177,  367 => 176,  364 => 175,  362 => 174,  346 => 160,  340 => 159,  335 => 156,  329 => 154,  323 => 152,  321 => 151,  312 => 149,  304 => 147,  302 => 146,  298 => 145,  291 => 143,  288 => 142,  281 => 141,  275 => 138,  271 => 137,  267 => 136,  263 => 135,  259 => 134,  256 => 133,  253 => 132,  250 => 131,  247 => 130,  242 => 129,  239 => 128,  237 => 127,  219 => 111,  213 => 110,  208 => 107,  202 => 105,  196 => 103,  194 => 102,  189 => 100,  185 => 99,  181 => 98,  177 => 97,  174 => 96,  171 => 95,  168 => 94,  165 => 93,  160 => 92,  157 => 91,  155 => 90,  121 => 59,  116 => 56,  101 => 54,  97 => 53,  91 => 52,  83 => 47,  77 => 44,  72 => 42,  69 => 41,  60 => 36,  58 => 35,  50 => 30,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "spells.html.twig", "/var/www/html/system/templates/spells.html.twig");
    }
}
