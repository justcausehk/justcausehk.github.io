<?php

/* default.html.twig */
class __TwigTemplate_b7d9b261002e2aaa503a5c7355028236d3ece31bae1e28065e1e264b5611effe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
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
        <span class=\"icon fa-thumbs-up\"></span>
        <h2>";
        // line 7
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</h2>
    </header>

    <section class=\"wrapper style4 special container 75%\">
        <div class=\"content\">
          ";
        // line 12
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
        </div>

    </section>

</article>
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block content %}*/
/* <article id="main">*/
/*     <header class="special container">*/
/*         <span class="icon fa-thumbs-up"></span>*/
/*         <h2>{{ page.header.title }}</h2>*/
/*     </header>*/
/* */
/*     <section class="wrapper style4 special container 75%">*/
/*         <div class="content">*/
/*           {{ page.content }}*/
/*         </div>*/
/* */
/*     </section>*/
/* */
/* </article>*/
/* {% endblock %}*/
