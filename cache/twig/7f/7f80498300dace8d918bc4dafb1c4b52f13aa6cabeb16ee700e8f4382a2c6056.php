<?php

/* error.html.twig */
class __TwigTemplate_dad1f6482c67a72ce3e7896e40748db63f51c4146264158d592a6c0276c31433 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<article id=\"main\">
    <header class=\"special container\">
        <span class=\"icon fa-exclamation-triangle\"></span>
        <h2>Error ";
        // line 6
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "http_response_code", array());
        echo "</h2>
        <p>";
        // line 7
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "</p>
    </header>
</article>
";
    }

    // line 11
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  41 => 7,  37 => 6,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* {% block content %}*/
/* <article id="main">*/
/*     <header class="special container">*/
/*         <span class="icon fa-exclamation-triangle"></span>*/
/*         <h2>Error {{ page.header.http_response_code }}</h2>*/
/*         <p>{{ page.content }}</p>*/
/*     </header>*/
/* </article>*/
/* {% endblock %}*/
/* {% block footer %}{% endblock %}*/
/* */
