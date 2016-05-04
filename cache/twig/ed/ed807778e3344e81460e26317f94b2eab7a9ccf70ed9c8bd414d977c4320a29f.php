<?php

/* modular/default.html.twig */
class __TwigTemplate_9947745d82435c6a46e6c9db5deb99bc20974af57eb5e421c4fafa945a1c7b10 extends Twig_Template
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
        echo "<section class=\"wrapper style3 container\" id=";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "idlink", array());
        echo ">
    <header class=\"align-center\">
        <h2>";
        // line 3
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</h2>
    </header>
    ";
        // line 5
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  25 => 3,  19 => 1,);
    }
}
/* <section class="wrapper style3 container" id={{ page.header.idlink }}>*/
/*     <header class="align-center">*/
/*         <h2>{{ page.header.title }}</h2>*/
/*     </header>*/
/*     {{ content }}*/
/* </section>*/
/* */
