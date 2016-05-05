<?php

/* news.html.twig */
class __TwigTemplate_c26f41b7931cfdc499c240212386ac586cd3b9c953382789ca56dd9351b86b11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "news.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<article id=\"main\">
    <header class=\"special container\">
        <span class=\"icon fa-newspaper-o\"></span>
        <h2>";
        // line 7
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</h2>
    </header>

    <div class=\"container\">
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 12
            echo "        <section class=\"wrapper style4 special container 75%\" id=\"";
            echo $this->getAttribute($context["article"], "slug", array());
            echo "\">
        ";
            // line 13
            if ($this->getAttribute($this->getAttribute($context["article"], "header", array()), "image", array())) {
                // line 14
                echo "            <img src=\"";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($this->getAttribute($context["article"], "header", array()), "image", array()), array(), "array"), "resize", array(0 => 400), "method"), "url", array());
                echo "\" alt=\"\" />
        ";
            }
            // line 16
            echo "        <header>
            <h3>";
            // line 17
            echo $this->getAttribute($context["article"], "title", array());
            echo "</h3>
        </header>
        ";
            // line 19
            echo $this->getAttribute($context["article"], "content", array());
            echo "
        </section>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </div>

</article>
";
    }

    public function getTemplateName()
    {
        return "news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 22,  68 => 19,  63 => 17,  60 => 16,  54 => 14,  52 => 13,  47 => 12,  43 => 11,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block content %}*/
/* <article id="main">*/
/*     <header class="special container">*/
/*         <span class="icon fa-newspaper-o"></span>*/
/*         <h2>{{ page.header.title }}</h2>*/
/*     </header>*/
/* */
/*     <div class="container">*/
/*     {% for article in page.children %}*/
/*         <section class="wrapper style4 special container 75%" id="{{ article.slug }}">*/
/*         {% if article.header.image %}*/
/*             <img src="{{ page.media[article.header.image].resize(400).url }}" alt="" />*/
/*         {% endif %}*/
/*         <header>*/
/*             <h3>{{ article.title }}</h3>*/
/*         </header>*/
/*         {{ article.content }}*/
/*         </section>*/
/*     {% endfor %}*/
/*     </div>*/
/* */
/* </article>*/
/* {% endblock %}*/
/* */
