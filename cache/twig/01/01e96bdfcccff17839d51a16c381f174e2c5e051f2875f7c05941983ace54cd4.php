<?php

/* partials/sidebar_article.html.twig */
class __TwigTemplate_65436c71dca34f77fa80e2be6f2bfc6bc5bff442609c9d7bbefe94b1073437ef extends Twig_Template
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
        echo "<div class=\"content\">
    <section>
        ";
        // line 3
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "featured_image", array())) {
            // line 4
            echo "            <a href=\"#\" class=\"image featured\"><img src=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "featured_image", array()), array(), "array"), "url", array());
            echo "\" alt=\"\" /></a>
        ";
        }
        // line 6
        echo "        <header>
            <h3>";
        // line 7
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</h3>
        </header>
        ";
        // line 9
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
    </section>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/sidebar_article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  34 => 7,  31 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="content">*/
/*     <section>*/
/*         {% if page.header.featured_image %}*/
/*             <a href="#" class="image featured"><img src="{{ page.media[page.header.featured_image].url }}" alt="" /></a>*/
/*         {% endif %}*/
/*         <header>*/
/*             <h3>{{ page.header.title }}</h3>*/
/*         </header>*/
/*         {{ content }}*/
/*     </section>*/
/* </div>*/
