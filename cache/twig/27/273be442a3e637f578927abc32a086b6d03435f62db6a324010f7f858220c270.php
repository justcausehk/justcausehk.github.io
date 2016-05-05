<?php

/* modular/newsroll.html.twig */
class __TwigTemplate_dca2891834fc2c28c872dda2137f3a27fd9b1d59e854679408ad2ab1e92bda81 extends Twig_Template
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
    <div class=\"newsarticle-wrapper\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/news"), "method"), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 5
            echo "            <a class=\"3u 12u newsarticle\" href=\"./news/#";
            echo $this->getAttribute($context["article"], "slug", array());
            echo "\">
                ";
            // line 6
            if ($this->getAttribute($this->getAttribute($context["article"], "header", array()), "image", array())) {
                // line 7
                echo "                    <img src=\"";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/news"), "method"), "media", array()), $this->getAttribute($this->getAttribute($context["article"], "header", array()), "image", array()), array(), "array"), "forceResize", array(0 => 100, 1 => 70), "method"), "url", array());
                echo "\" alt=\"\" />
                ";
            }
            // line 9
            echo "                <header>
                    <h3>";
            // line 10
            echo $this->getAttribute($context["article"], "title", array());
            echo "</h3>
                </header>
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/newsroll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 14,  47 => 10,  44 => 9,  38 => 7,  36 => 6,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div id="news">*/
/*     <span class="latestnews">{{page.header.title}}</span>*/
/*     <div class="newsarticle-wrapper">*/
/*         {% for article in page.find('/news').children %}*/
/*             <a class="3u 12u newsarticle" href="./news/#{{article.slug}}">*/
/*                 {% if article.header.image %}*/
/*                     <img src="{{ page.find('/news').media[article.header.image].forceResize(100,70).url }}" alt="" />*/
/*                 {% endif %}*/
/*                 <header>*/
/*                     <h3>{{ article.title }}</h3>*/
/*                 </header>*/
/*             </a>*/
/*         {% endfor %}*/
/*     </div>*/
/* </div>*/
/* */
