<?php

/* modular/services.html.twig */
class __TwigTemplate_84d3ae342c072314c62840d1dda56fd2ca94e3687c0b116a0abf187cc8a15f0c extends Twig_Template
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
        echo "<section class=\"wrapper style1 container special\" id=";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "idlink", array());
        echo ">
    <header>
        <h2>";
        // line 3
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</h2>
    </header>
    <div class=\"row\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "features", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "            <div class=\"4u 12u(narrower)\">
                <section>
                    ";
            // line 9
            if ($this->getAttribute($context["item"], "icon", array())) {
                // line 10
                echo "                    <span class=\"icon featured fa-";
                echo $this->getAttribute($context["item"], "icon", array());
                echo "\"></span>
                    ";
            }
            // line 12
            echo "                    <header>
                        <h3>";
            // line 13
            echo $this->getAttribute($context["item"], "title", array());
            echo "</h3>
                    </header>
                    <p>";
            // line 15
            echo $this->getAttribute($context["item"], "text", array());
            echo "</p>
                    ";
            // line 16
            if ($this->getAttribute($context["item"], "buttons", array())) {
                // line 17
                echo "                    <footer>
                        <ul class=\"buttons\">
                            ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "buttons", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                    // line 20
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
                // line 22
                echo "                        </ul>
                    </footer>
                    ";
            }
            // line 25
            echo "                </section>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </div>
    <div class=\"row\">
        ";
        // line 30
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 30,  93 => 28,  85 => 25,  80 => 22,  69 => 20,  65 => 19,  61 => 17,  59 => 16,  55 => 15,  50 => 13,  47 => 12,  41 => 10,  39 => 9,  35 => 7,  31 => 6,  25 => 3,  19 => 1,);
    }
}
/* <section class="wrapper style1 container special" id={{ page.header.idlink }}>*/
/*     <header>*/
/*         <h2>{{ page.header.title }}</h2>*/
/*     </header>*/
/*     <div class="row">*/
/*         {% for item in page.header.features %}*/
/*             <div class="4u 12u(narrower)">*/
/*                 <section>*/
/*                     {% if item.icon %}*/
/*                     <span class="icon featured fa-{{ item.icon }}"></span>*/
/*                     {% endif %}*/
/*                     <header>*/
/*                         <h3>{{ item.title }}</h3>*/
/*                     </header>*/
/*                     <p>{{ item.text }}</p>*/
/*                     {% if item.buttons %}*/
/*                     <footer>*/
/*                         <ul class="buttons">*/
/*                             {% for button in item.buttons %}*/
/*                                 <li><a href="{{ button.url }}" class="button small">{{ button.text }}</a></li>*/
/*                             {% endfor %}*/
/*                         </ul>*/
/*                     </footer>*/
/*                     {% endif %}*/
/*                 </section>*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/*     <div class="row">*/
/*         {{ content }}*/
/*     </div>*/
/* </section>*/
/* */
