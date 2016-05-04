<?php

/* modular/banner.html.twig */
class __TwigTemplate_da21be5a3e5475af5dfd2000cc231c5149ef8b1bab015f57a4ca7aae2088e4b4 extends Twig_Template
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
    <div class=\"innerleft\">
        ";
        // line 3
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "logo.png", array(), "array"), "display", array(0 => "thumbnail"), "method"), "resize", array(0 => 384), "method"), "html", array(), "method");
        echo "
    </div>
    <div class=\"inner\">
        <header>
            <h2>";
        // line 7
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</h2>
        </header>
        ";
        // line 9
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
        <br />
        <footer>
            <ul class=\"buttons vertical\">
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 14
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
        // line 16
        echo "            </ul>
        </footer>
    </div>
</section>
";
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
        return array (  57 => 16,  46 => 14,  42 => 13,  35 => 9,  30 => 7,  23 => 3,  19 => 1,);
    }
}
/* <section id="banner">*/
/*     <div class="innerleft">*/
/*         {{ page.media['logo.png'].display('thumbnail').resize(384).html() }}*/
/*     </div>*/
/*     <div class="inner">*/
/*         <header>*/
/*             <h2>{{ page.header.title }}</h2>*/
/*         </header>*/
/*         {{ content }}*/
/*         <br />*/
/*         <footer>*/
/*             <ul class="buttons vertical">*/
/*                 {% for button in page.header.buttons %}*/
/*                     <li><a href="{{ button.url }}" class="button fit scrolly">{{ button.text }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </footer>*/
/*     </div>*/
/* </section>*/
/* */
