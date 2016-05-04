<?php

/* partials/sidebar_content.html.twig */
class __TwigTemplate_442e68f9ed9c803ba96211720ef968fc67a45998611c8825a83e48a0b231e354 extends Twig_Template
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
        echo "<div class=\"4u 12u(narrower)\">
    <div class=\"sidebar\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "sidebar_modules", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 4
            echo "            <section>
                ";
            // line 5
            if ($this->getAttribute($context["module"], "featured_image", array())) {
                // line 6
                echo "                    <a href=\"#\" class=\"image featured\"><img src=\"";
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($context["module"], "featured_image", array()), array(), "array"), "url", array());
                echo "\" alt=\"\" /></a>
                ";
            }
            // line 8
            echo "                <header>
                    <h3>";
            // line 9
            echo $this->getAttribute($context["module"], "title", array());
            echo "</h3>
                </header>
                <p>";
            // line 11
            echo $this->getAttribute($context["module"], "content", array());
            echo "</p>
                ";
            // line 12
            if ($this->getAttribute($context["module"], "buttons", array())) {
                // line 13
                echo "                    <footer>
                        <ul class=\"buttons\">
                            ";
                // line 15
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["module"], "buttons", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                    // line 16
                    echo "                                <li><a href=\"";
                    echo $this->getAttribute($context["button"], "url", array());
                    echo "\" class=\"button small\">";
                    echo $this->getAttribute($context["button"], "text", array());
                    echo "</a></li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "                        </ul>
                    </footer>
                ";
            }
            // line 21
            echo "            </section>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo " 
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/sidebar_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 22,  76 => 21,  71 => 18,  60 => 16,  56 => 15,  52 => 13,  50 => 12,  46 => 11,  41 => 9,  38 => 8,  32 => 6,  30 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="4u 12u(narrower)">*/
/*     <div class="sidebar">*/
/*         {% for module in page.header.sidebar_modules %}*/
/*             <section>*/
/*                 {% if module.featured_image %}*/
/*                     <a href="#" class="image featured"><img src="{{ page.media[module.featured_image].url }}" alt="" /></a>*/
/*                 {% endif %}*/
/*                 <header>*/
/*                     <h3>{{ module.title }}</h3>*/
/*                 </header>*/
/*                 <p>{{ module.content }}</p>*/
/*                 {% if module.buttons %}*/
/*                     <footer>*/
/*                         <ul class="buttons">*/
/*                             {% for button in module.buttons %}*/
/*                                 <li><a href="{{ button.url }}" class="button small">{{ button.text }}</a></li>*/
/*                             {% endfor %}*/
/*                         </ul>*/
/*                     </footer>*/
/*                 {% endif %}*/
/*             </section>*/
/*         {% endfor %} */
/*     </div>*/
/* </div>*/
