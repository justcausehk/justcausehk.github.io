<?php

/* modular/sidebar.html.twig */
class __TwigTemplate_a7a14424715952c68884489911fb281989bc8a72ac50b5aff8fe1fa74dec1a15 extends Twig_Template
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
        echo "<section class=\"wrapper style4 container\">
    ";
        // line 2
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "sidebar_position", array()) != "none")) {
            // line 3
            echo "        <div class=\"row 150%\">
        ";
        }
        // line 4
        echo "     
        ";
        // line 5
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "sidebar_position", array()) == "left")) {
            // line 6
            echo "            ";
            if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "sidebar_position", array()) != "none")) {
                // line 7
                echo "                ";
                $this->loadTemplate("partials/sidebar_content.html.twig", "modular/sidebar.html.twig", 7)->display($context);
                // line 8
                echo "            ";
            }
            // line 9
            echo "            ";
            if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "sidebar_position", array()) != "none")) {
                // line 10
                echo "                <div class=\"8u 12u(narrower) important(narrower)\">
            ";
            }
            // line 11
            echo "    
                ";
            // line 12
            $this->loadTemplate("partials/sidebar_article.html.twig", "modular/sidebar.html.twig", 12)->display($context);
            // line 13
            echo "            ";
            if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "sidebar_position", array()) != "none")) {
                // line 14
                echo "                </div>
            ";
            }
            // line 16
            echo "        ";
        }
        // line 17
        echo "
        ";
        // line 18
        if ((($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "sidebar_position", array()) == "right") || ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "sidebar_position", array()) == "none"))) {
            // line 19
            echo "            ";
            if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "sidebar_position", array()) != "none")) {
                // line 20
                echo "                <div class=\"8u 12u(narrower)\">
            ";
            }
            // line 21
            echo "     
                ";
            // line 22
            $this->loadTemplate("partials/sidebar_article.html.twig", "modular/sidebar.html.twig", 22)->display($context);
            // line 23
            echo "            ";
            if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "sidebar_position", array()) != "none")) {
                // line 24
                echo "                </div>
            ";
            }
            // line 26
            echo "            ";
            if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "sidebar_position", array()) != "none")) {
                // line 27
                echo "                ";
                $this->loadTemplate("partials/sidebar_content.html.twig", "modular/sidebar.html.twig", 27)->display($context);
                // line 28
                echo "            ";
            }
            // line 29
            echo "        ";
        }
        // line 30
        echo "        ";
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "sidebar_position", array()) != "none")) {
            // line 31
            echo "        </div>
    ";
        }
        // line 33
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "modular/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 33,  103 => 31,  100 => 30,  97 => 29,  94 => 28,  91 => 27,  88 => 26,  84 => 24,  81 => 23,  79 => 22,  76 => 21,  72 => 20,  69 => 19,  67 => 18,  64 => 17,  61 => 16,  57 => 14,  54 => 13,  52 => 12,  49 => 11,  45 => 10,  42 => 9,  39 => 8,  36 => 7,  33 => 6,  31 => 5,  28 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <section class="wrapper style4 container">*/
/*     {% if page.header.sidebar_position != 'none' %}*/
/*         <div class="row 150%">*/
/*         {% endif %}     */
/*         {% if page.header.sidebar_position == 'left' %}*/
/*             {% if page.header.sidebar_position != 'none' %}*/
/*                 {% include 'partials/sidebar_content.html.twig' %}*/
/*             {% endif %}*/
/*             {% if page.header.sidebar_position != 'none' %}*/
/*                 <div class="8u 12u(narrower) important(narrower)">*/
/*             {% endif %}    */
/*                 {% include 'partials/sidebar_article.html.twig' %}*/
/*             {% if page.header.sidebar_position != 'none' %}*/
/*                 </div>*/
/*             {% endif %}*/
/*         {% endif %}*/
/* */
/*         {% if page.header.sidebar_position == 'right' or page.header.sidebar_position == 'none' %}*/
/*             {% if page.header.sidebar_position != 'none' %}*/
/*                 <div class="8u 12u(narrower)">*/
/*             {% endif %}     */
/*                 {% include 'partials/sidebar_article.html.twig' %}*/
/*             {% if page.header.sidebar_position != 'none' %}*/
/*                 </div>*/
/*             {% endif %}*/
/*             {% if page.header.sidebar_position != 'none' %}*/
/*                 {% include 'partials/sidebar_content.html.twig' %}*/
/*             {% endif %}*/
/*         {% endif %}*/
/*         {% if page.header.sidebar_position != 'none' %}*/
/*         </div>*/
/*     {% endif %}*/
/* </section>*/
