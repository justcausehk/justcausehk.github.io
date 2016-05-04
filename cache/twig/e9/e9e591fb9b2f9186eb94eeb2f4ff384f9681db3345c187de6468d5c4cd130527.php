<?php

/* partials/header.html.twig */
class __TwigTemplate_facef95c6d515cd38a44c56f681e8577b1a9e9ec6387aa7ead74c77d45b169f4 extends Twig_Template
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
        echo "<header id=\"header\" class=\"";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_class", array());
        echo "\">
  <h1 id=\"logo\"><a href=\"";
        // line 2
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array()), "text1", array());
        echo " <span>";
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array()), "text2", array());
        echo "</span></a></h1>
  <nav id=\"nav\">
    <ul>
      ";
        // line 5
        $context["current_page"] = ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()) == "Home")) ? ("current") : (""));
        // line 6
        echo "      <li class=\"";
        echo (isset($context["current_page"]) ? $context["current_page"] : null);
        echo "\">
        <a href=\"";
        // line 7
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\">
          Welcome
        </a>
      </li>
      ";
        // line 11
        $context["current_page"] = ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()) == "About")) ? ("current") : (""));
        // line 12
        echo "      <li class=\"submenu ";
        echo (isset($context["current_page"]) ? $context["current_page"] : null);
        echo "\">
        <a href=\"./about\">About</a>
        <ul>
          ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 16
            echo "          ";
            if ($this->getAttribute($context["page"], "visible", array())) {
                // line 17
                echo "          ";
                if (($this->getAttribute($context["page"], "title", array()) == "About")) {
                    // line 18
                    echo "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["page"], "collection", array(), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 19
                        echo "          <li>
            <a href=\"./about/#";
                        // line 20
                        echo $this->getAttribute($this->getAttribute($context["item"], "header", array()), "idlink", array());
                        echo "\">
              ";
                        // line 21
                        echo $this->getAttribute($context["item"], "title", array());
                        echo "
            </a>
          </li>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "          ";
                }
                // line 26
                echo "          ";
            }
            // line 27
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </ul>
      </li>
      ";
        // line 30
        $context["current_page"] = ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "menu", array()) == "Contact")) ? ("current") : (""));
        // line 31
        echo "      <li class=\"";
        echo (isset($context["current_page"]) ? $context["current_page"] : null);
        echo "\">
        <a href=\"./contact\">
            Contact
        </a>
      </li>
      ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 37
            echo "      <li><a href=\"";
            echo $this->getAttribute($context["button"], "link", array());
            echo "\" class=\"button special\">";
            echo $this->getAttribute($context["button"], "text", array());
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </ul>
  </nav>
</header>
";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 39,  120 => 37,  116 => 36,  107 => 31,  105 => 30,  101 => 28,  95 => 27,  92 => 26,  89 => 25,  79 => 21,  75 => 20,  72 => 19,  67 => 18,  64 => 17,  61 => 16,  57 => 15,  50 => 12,  48 => 11,  41 => 7,  36 => 6,  34 => 5,  24 => 2,  19 => 1,);
    }
}
/* <header id="header" class="{{ page.header.header_class }}">*/
/*   <h1 id="logo"><a href="{{ base_url_absolute }}">{{ site.logo.text1 }} <span>{{ site.logo.text2 }}</span></a></h1>*/
/*   <nav id="nav">*/
/*     <ul>*/
/*       {% set current_page = (page.title=='Home') ? 'current' : '' %}*/
/*       <li class="{{ current_page }}">*/
/*         <a href="{{ base_url_absolute }}">*/
/*           Welcome*/
/*         </a>*/
/*       </li>*/
/*       {% set current_page = (page.title=='About') ? 'current' : '' %}*/
/*       <li class="submenu {{ current_page }}">*/
/*         <a href="./about">About</a>*/
/*         <ul>*/
/*           {% for page in pages.children %}*/
/*           {% if page.visible %}*/
/*           {% if page.title == 'About' %}*/
/*           {% for item in page.collection() %}*/
/*           <li>*/
/*             <a href="./about/#{{ item.header.idlink }}">*/
/*               {{ item.title }}*/
/*             </a>*/
/*           </li>*/
/*           {% endfor %}*/
/*           {% endif %}*/
/*           {% endif %}*/
/*           {% endfor %}*/
/*         </ul>*/
/*       </li>*/
/*       {% set current_page = (page.menu=='Contact') ? 'current' : '' %}*/
/*       <li class="{{ current_page }}">*/
/*         <a href="./contact">*/
/*             Contact*/
/*         </a>*/
/*       </li>*/
/*       {% for button in site.buttons %}*/
/*       <li><a href="{{ button.link }}" class="button special">{{ button.text }}</a></li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </nav>*/
/* </header>*/
/* */
