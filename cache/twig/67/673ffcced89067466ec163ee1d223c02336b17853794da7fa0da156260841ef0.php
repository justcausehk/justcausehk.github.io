<?php

/* modular/banner.html.twig */
class __TwigTemplate_3fae0f2e25150679e2a548f31898352c9f8d2b53030e88e5f2d07d10b2e8e53e extends Twig_Template
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
        echo "<section id=\"banner\">
    <div class=\"inner\">
        <header>
            <h2>";
        // line 4
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</h2>
        </header>
        ";
        // line 6
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
        <footer>
            <ul class=\"buttons vertical\">
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 10
            echo "                    <li><a href=\"";
            echo $this->getAttribute($context["button"], "url", array());
            echo "\" class=\"button fit scrolly\">";
            echo $this->getAttribute($context["button"], "text", array());
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "            </ul>
        </footer>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  39 => 10,  35 => 9,  29 => 6,  24 => 4,  19 => 1,);
    }
}
/* <section id="banner">*/
/*     <div class="inner">*/
/*         <header>*/
/*             <h2>{{ page.header.title }}</h2>*/
/*         </header>*/
/*         {{ content }}*/
/*         <footer>*/
/*             <ul class="buttons vertical">*/
/*                 {% for button in page.header.buttons %}*/
/*                     <li><a href="{{ button.url }}" class="button fit scrolly">{{ button.text }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </footer>*/
/*     </div>*/
/* </section>*/
