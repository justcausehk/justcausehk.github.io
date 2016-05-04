<?php

/* form.html.twig */
class __TwigTemplate_add793fb442ca23e4596e3d62df529774b7211e84197c49129de47e86b0a7a2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "form.html.twig", 1);
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<article id=\"main\">
  <header class=\"special container\">
    <span class=\"icon fa-";
        // line 5
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "icon", array());
        echo "\"></span>
    <h2>";
        // line 6
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</h2>
    <p>";
        // line 7
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "description", array());
        echo "</p>
  </header>
  <section class=\"wrapper style4 special container 75%\">
    <div class=\"content\">
      ";
        // line 11
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
      ";
        // line 12
        $this->loadTemplate("forms/form.html.twig", "form.html.twig", 12)->display($context);
        // line 13
        echo "    </div>
  </section>
</article>
";
    }

    public function getTemplateName()
    {
        return "form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 13,  54 => 12,  50 => 11,  43 => 7,  39 => 6,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* {% block content %}*/
/* <article id="main">*/
/*   <header class="special container">*/
/*     <span class="icon fa-{{ page.header.icon }}"></span>*/
/*     <h2>{{ page.header.title }}</h2>*/
/*     <p>{{ page.header.description }}</p>*/
/*   </header>*/
/*   <section class="wrapper style4 special container 75%">*/
/*     <div class="content">*/
/*       {{ content }}*/
/*       {% include "forms/form.html.twig" %}*/
/*     </div>*/
/*   </section>*/
/* </article>*/
/* {% endblock %}*/
/* */
