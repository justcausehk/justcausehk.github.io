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
    <span class=\"latestnews\">";
        // line 2
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</span>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/news"), "method"), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 4
            echo "        <a class=\"3u 12u newsarticle\" href=\"./news/#";
            echo $this->getAttribute($context["article"], "slug", array());
            echo "\">
            ";
            // line 5
            if ($this->getAttribute($this->getAttribute($context["article"], "header", array()), "image", array())) {
                // line 6
                echo "                <img src=\"";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/news"), "method"), "media", array()), $this->getAttribute($this->getAttribute($context["article"], "header", array()), "image", array()), array(), "array"), "resize", array(0 => 100), "method"), "url", array());
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
        </a>
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
        return array (  56 => 13,  46 => 9,  43 => 8,  37 => 6,  35 => 5,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div id="news">*/
/*     <span class="latestnews">{{page.header.title}}</span>*/
/*     {% for article in page.find('/news').children %}*/
/*         <a class="3u 12u newsarticle" href="./news/#{{article.slug}}">*/
/*             {% if article.header.image %}*/
/*                 <img src="{{ page.find('/news').media[article.header.image].resize(100).url }}" alt="" />*/
/*             {% endif %}*/
/*             <header>*/
/*                 <h3>{{ article.title }}</h3>*/
/*             </header>*/
/*         </a>*/
/*     {% endfor %}*/
/* </div>*/
/* */
