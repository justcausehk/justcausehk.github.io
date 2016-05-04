<?php

/* modular/news.html.twig */
class __TwigTemplate_087e17b1a92ef9d2a539fb36271c59330e1f03dcffcd2219d15ca029ba0d1f6e extends Twig_Template
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
        echo "<div id=\"news\">
    <span class=\"latestnews\">Latest News</span>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 4
            echo "        <section class=\"3u 12u(narrower) newsarticle\">
            ";
            // line 5
            if ($this->getAttribute($this->getAttribute($context["article"], "header", array()), "image", array())) {
                // line 6
                echo "                <img src=\"";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($this->getAttribute($context["article"], "header", array()), "image", array()), array(), "array"), "resize", array(0 => 100), "method"), "url", array());
                echo "\" alt=\"\" />
            ";
            }
            // line 8
            echo "            <header>
                <h3>";
            // line 9
            echo $this->getAttribute($context["article"], "title", array());
            echo "</h3>
            </header>
        </section>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modular/news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 13,  41 => 9,  38 => 8,  32 => 6,  30 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div id="news">*/
/*     <span class="latestnews">Latest News</span>*/
/*     {% for article in page.children() %}*/
/*         <section class="3u 12u(narrower) newsarticle">*/
/*             {% if article.header.image %}*/
/*                 <img src="{{ page.media[article.header.image].resize(100).url }}" alt="" />*/
/*             {% endif %}*/
/*             <header>*/
/*                 <h3>{{ article.title }}</h3>*/
/*             </header>*/
/*         </section>*/
/*     {% endfor %}*/
/* </div>*/
/* */
