<?php

/* forms/default/form.html.twig */
class __TwigTemplate_425e54dbc314164f17f17bcbf4410210567e6d88fc6bfd9410a9def0528f8544 extends Twig_Template
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
        echo "<div class=\"alert\">";
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array());
        echo "</div>

<form name=\"";
        // line 3
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array());
        echo "\" action=\"";
        echo ($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "rootUrl", array()) . (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "action", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "action", array()), $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "route", array()))) : ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "route", array()))));
        echo "\" method=\"";
        echo _twig_default_filter(twig_upper_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "method", array())), "POST");
        echo "\">
  <div class=\"row 50%\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fields", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 6
            echo "    ";
            $context["value"] = $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
            // line 7
            echo "    ";
            $this->loadTemplate((((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), "forms/default/form.html.twig", 7)->display($context);
            // line 8
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "  </div>

  <div class=\"row\">
    <div class=\"12u\">
      ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 14
            echo "      <button class=\"button special \" type=\"";
            echo (($this->getAttribute($context["button"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "type", array()), "submit")) : ("submit"));
            echo "\">";
            echo (($this->getAttribute($context["button"], "value", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "value", array()), "Submit")) : ("Submit"));
            echo "</button>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </div>
  </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "forms/default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 16,  81 => 14,  77 => 13,  71 => 9,  57 => 8,  54 => 7,  51 => 6,  34 => 5,  25 => 3,  19 => 1,);
    }
}
/* <div class="alert">{{ form.message }}</div>*/
/* */
/* <form name="{{ form.name }}" action="{{ uri.rootUrl ~ (form.action|default(page.route)) }}" method="{{ form.method|upper|default('POST') }}">*/
/*   <div class="row 50%">*/
/*     {% for field in form.fields %}*/
/*     {% set value = form.value(field.name) %}*/
/*     {% include "forms/fields/#{field.type}/#{field.type}.html.twig" %}*/
/*     {% endfor %}*/
/*   </div>*/
/* */
/*   <div class="row">*/
/*     <div class="12u">*/
/*       {% for button in form.buttons %}*/
/*       <button class="button special " type="{{ button.type|default('submit') }}">{{ button.value|default('Submit') }}</button>*/
/*       {% endfor %}*/
/*     </div>*/
/*   </div>*/
/* </form>*/
/* */
