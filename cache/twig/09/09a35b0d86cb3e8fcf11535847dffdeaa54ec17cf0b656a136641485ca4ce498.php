<?php

/* modular/header.html.twig */
class __TwigTemplate_472c718629ab6636b87b007e79c4429ebec086d74e7604903cae5103f20b4888 extends Twig_Template
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
        echo "<header class=\"special container\">
    <span class=\"icon fa-";
        // line 2
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "icon", array());
        echo "\"></span>
    <h2>";
        // line 3
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</h2>
    ";
        // line 4
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
</header>";
    }

    public function getTemplateName()
    {
        return "modular/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <header class="special container">*/
/*     <span class="icon fa-{{ page.header.icon }}"></span>*/
/*     <h2>{{ page.header.title }}</h2>*/
/*     {{ content }}*/
/* </header>*/
