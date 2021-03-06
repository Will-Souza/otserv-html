<?php

/* creatures/bandit.html.twig */
class __TwigTemplate_e10ff33381ad5f2aac44bdd8e848768b93c1a44cec3118df03dfbdfda40b4849 extends Twig_Template
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
        echo "<div style=\"position: relative; height: 15px; width: 100%;\">  <a style=\"float: right;\" href=\"?subtopic=creatures&race=banshee\">next <img src=\"images/arrow_right.gif\" width=\"15\" height=\"11\" border=\"0\"/></a>  <a style=\"position: absolute;\" href=\"?subtopic=creatures&race=badger\"><img src=\"images/arrow_left.gif\" width=\"15\" height=\"11\" border=\"0\"/> previous</a>  <div style=\"position: absolute; width: 80%; margin-left: 10%; margin-right: 10%; text-align: center;\"><a href=\"?subtopic=creatures\"><img src=\"images/arrow_up.gif\" width=\"11\" height=\"15\" border=\"0\"/> back</a></div></div><div style=\"position: relative; top: 25px; clear: both; \"><div style=\"height: 64px; margin-bottom: 5px;\">  <h2 style=\"float: right;\">Bandits</h2>  <img src=\"images/creatures/bandit.gif\"/></div><div style=\"margin-bottom: 35px; clear: both;\">  <p>The tale of the noble bandit that takes from the rich and gives to the poor is far away from reality. The usual Bandit does not care whom he is robbing as long as he is able to gain something of value for himself. Actually in most cases, the poor are those that are worst prepared to defend themselves and so have become the preferred victims of bandits. Bandits are armed with a variety of weapons, their armour has usually been plundered somewhere. Always avoiding the city guards, they set up their hideouts in the wilderness, often close to streets where they are feared as highwaymen. Involved in all kinds of illegal activities, they can be found in the service of all kind of persons that want some dirty work performed. Some even stand in the service of some head Bandit who has managed to suppress some remote area or village.</p>  <p>Bandits have 245 hitpoints. They are weak against death and physical damage. It takes 450 mana to summon or convince these creatures.</p>  <p>Bandits yield 65 experience points. They carry axes, brass shields, gold coins, leather legs, maces and sometimes other items with them.</p>  </div></div>";
    }

    public function getTemplateName()
    {
        return "creatures/bandit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "creatures/bandit.html.twig", "/var/www/html/system/templates/creatures/bandit.html.twig");
    }
}
