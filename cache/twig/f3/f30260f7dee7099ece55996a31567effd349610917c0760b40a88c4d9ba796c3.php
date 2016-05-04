<?php

/* modular/icons.html.twig */
class __TwigTemplate_4efccff62726a87e50bfbf16dcb5c34b8a1bf55f4790fa181fd1fbd75a9257a3 extends Twig_Template
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
        echo "<section class=\"wrapper style2 container special-alt\">
    <div class=\"row 50%\">
        <div class=\"8u 12u(narrower)\">
            <header>
                <h2>";
        // line 5
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</h2>
            </header>
            ";
        // line 7
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
            <footer>
                <ul class=\"buttons\">
                    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 11
            echo "                        <li><a href=\"";
            echo $this->getAttribute($context["button"], "url", array());
            echo "\" class=\"button\">";
            echo $this->getAttribute($context["button"], "text", array());
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "                </ul>
            </footer>
        </div>
        <div class=\"4u 12u(narrower) important(narrower)\">
            <ul class=\"featured-icons\">
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "icons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["icons"]) {
            // line 19
            echo "                    <li><span class=\"icon fa-";
            echo $this->getAttribute($context["icons"], "icon", array());
            echo "\"><span class=\"label\">";
            echo $this->getAttribute($context["icons"], "label", array());
            echo "</span></span></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icons'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "            </ul>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/icons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 21,  62 => 19,  58 => 18,  51 => 13,  40 => 11,  36 => 10,  30 => 7,  25 => 5,  19 => 1,);
    }
}
/* <section class="wrapper style2 container special-alt">*/
/*     <div class="row 50%">*/
/*         <div class="8u 12u(narrower)">*/
/*             <header>*/
/*                 <h2>{{ page.header.title }}</h2>*/
/*             </header>*/
/*             {{ content }}*/
/*             <footer>*/
/*                 <ul class="buttons">*/
/*                     {% for button in page.header.buttons %}*/
/*                         <li><a href="{{ button.url }}" class="button">{{ button.text }}</a></li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </footer>*/
/*         </div>*/
/*         <div class="4u 12u(narrower) important(narrower)">*/
/*             <ul class="featured-icons">*/
/*                 {% for icons in page.header.icons %}*/
/*                     <li><span class="icon fa-{{ icons.icon }}"><span class="label">{{ icons.label }}</span></span></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
