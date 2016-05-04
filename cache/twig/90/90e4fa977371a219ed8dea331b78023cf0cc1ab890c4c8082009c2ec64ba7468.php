<?php

/* forms/field.html.twig */
class __TwigTemplate_ec4b2ec3610663839e2d527aa83b20e9d8fc0379d4aebb4c3d150f2c35a81236 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'contents' => array($this, 'block_contents'),
            'global_attributes' => array($this, 'block_global_attributes'),
            'group' => array($this, 'block_group'),
            'input' => array($this, 'block_input'),
            'input_attributes' => array($this, 'block_input_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["originalValue"] = ((array_key_exists("originalValue", $context)) ? ((isset($context["originalValue"]) ? $context["originalValue"] : null)) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 2
        $context["value"] = (((null === (isset($context["value"]) ? $context["value"] : null))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 4
        $context["vertical"] = true;
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('field', $context, $blocks);
    }

    public function block_field($context, array $blocks = array())
    {
        // line 7
        echo "  <div class=\"";
        if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "framework_size", array()) == "half")) {
            echo "6u 12u(mobile)";
        } else {
            echo "12u";
        }
        echo " ";
        if ((isset($context["vertical"]) ? $context["vertical"] : null)) {
            echo " vertical";
        }
        echo "\">
    ";
        // line 8
        $this->displayBlock('contents', $context, $blocks);
        // line 45
        echo "</div>
";
    }

    // line 8
    public function block_contents($context, array $blocks = array())
    {
        // line 9
        echo "    <div class=\"form-data";
        if ( !(isset($context["vertical"]) ? $context["vertical"] : null)) {
            echo " block size-2-3";
        }
        echo "\"
    ";
        // line 10
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 15
        echo "    >
    ";
        // line 16
        $this->displayBlock('group', $context, $blocks);
        // line 43
        echo "  </div>
  ";
    }

    // line 10
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 11
        echo "    data-grav-field=\"";
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type", array());
        echo "\"
    data-grav-disabled=\"";
        // line 12
        echo (((null === (isset($context["originalValue"]) ? $context["originalValue"] : null))) ? ("true") : ("false"));
        echo "\"
    data-grav-default=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())), "html_attr");
        echo "\"
    ";
    }

    // line 16
    public function block_group($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->displayBlock('input', $context, $blocks);
        // line 42
        echo "    ";
    }

    // line 17
    public function block_input($context, array $blocks = array())
    {
        // line 18
        echo "    <div class=\"form-input-wrapper ";
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "size", array());
        echo "\">
      <input
      ";
        // line 21
        echo "      name=\"";
        echo $this->env->getExtension('GravTwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())));
        echo "\"
      value=\"";
        // line 22
        echo twig_join_filter((isset($context["value"]) ? $context["value"] : null), ", ");
        echo "\"
      ";
        // line 24
        echo "      ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 39
        echo "      />
    </div>
    ";
    }

    // line 24
    public function block_input_attributes($context, array $blocks = array())
    {
        // line 25
        echo "      ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array(), "any", true, true)) {
            echo "class=\"";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array());
            echo "\" ";
        }
        // line 26
        echo "      ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array(), "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array()));
            echo "\" ";
        }
        // line 27
        echo "      ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "style", array(), "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "style", array()));
            echo "\" ";
        }
        // line 28
        echo "      ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array())) {
            echo "disabled=\"disabled\"";
        }
        // line 29
        echo "      ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array())) {
            echo "placeholder=\"";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array());
            echo "\"";
        }
        // line 30
        echo "      ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "autofocus=\"autofocus\"";
        }
        // line 31
        echo "      ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "novalidate", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 32
        echo "      ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "readonly", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "readonly=\"readonly\"";
        }
        // line 33
        echo "      ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autocomplete", array()), array(0 => "on", 1 => "off"))) {
            echo "autocomplete=\"";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autocomplete", array());
            echo "\"";
        }
        // line 34
        echo "      ";
        if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "required=\"required\"";
        }
        // line 35
        echo "      ";
        if ($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "pattern", array())) {
            echo "pattern=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "pattern", array());
            echo "\"";
        }
        // line 36
        echo "      ";
        if ($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "message", array())) {
            echo "title=\"";
            echo call_user_func_array($this->env->getFilter('tu')->getCallable(), array(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "message", array()))));
            echo "\"
      ";
        } elseif ($this->getAttribute(        // line 37
(isset($context["field"]) ? $context["field"] : null), "title", array(), "any", true, true)) {
            echo "title=\"";
            echo call_user_func_array($this->env->getFilter('tu')->getCallable(), array(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "title", array()))));
            echo "\" ";
        }
        // line 38
        echo "      ";
    }

    public function getTemplateName()
    {
        return "forms/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 38,  214 => 37,  207 => 36,  200 => 35,  195 => 34,  188 => 33,  183 => 32,  178 => 31,  173 => 30,  166 => 29,  161 => 28,  154 => 27,  147 => 26,  140 => 25,  137 => 24,  131 => 39,  128 => 24,  124 => 22,  119 => 21,  113 => 18,  110 => 17,  106 => 42,  103 => 17,  100 => 16,  94 => 13,  90 => 12,  85 => 11,  82 => 10,  77 => 43,  75 => 16,  72 => 15,  70 => 10,  63 => 9,  60 => 8,  55 => 45,  53 => 8,  40 => 7,  34 => 6,  31 => 5,  29 => 4,  27 => 2,  25 => 1,);
    }
}
/* {% set originalValue = originalValue is defined ? originalValue : value %}*/
/* {% set value = (value is null ? field.default : value) %}*/
/* {# {% set vertical = field.style == 'vertical' %} #}*/
/* {% set vertical = true %}*/
/* */
/* {% block field %}*/
/*   <div class="{% if field.framework_size == 'half' %}6u 12u(mobile){% else %}12u{% endif %} {% if vertical %} vertical{% endif %}">*/
/*     {% block contents %}*/
/*     <div class="form-data{% if not vertical %} block size-2-3{% endif %}"*/
/*     {% block global_attributes %}*/
/*     data-grav-field="{{ field.type }}"*/
/*     data-grav-disabled="{{ originalValue is null ? 'true' : 'false' }}"*/
/*     data-grav-default="{{ field.default|json_encode()|e('html_attr') }}"*/
/*     {% endblock %}*/
/*     >*/
/*     {% block group %}*/
/*     {% block input %}*/
/*     <div class="form-input-wrapper {{ field.size }}">*/
/*       <input*/
/*       {# required attribute structures #}*/
/*       name="{{ (scope ~ field.name)|fieldName }}"*/
/*       value="{{ value|join(', ') }}"*/
/*       {# input attribute structures #}*/
/*       {% block input_attributes %}*/
/*       {% if field.classes is defined %}class="{{ field.classes }}" {% endif %}*/
/*       {% if field.id is defined %}id="{{ field.id|e }}" {% endif %}*/
/*       {% if field.style is defined %}style="{{ field.style|e }}" {% endif %}*/
/*       {% if field.disabled %}disabled="disabled"{% endif %}*/
/*       {% if field.placeholder %}placeholder="{{ field.placeholder }}"{% endif %}*/
/*       {% if field.autofocus in ['on', 'true', 1] %}autofocus="autofocus"{% endif %}*/
/*       {% if field.novalidate in ['on', 'true', 1] %}novalidate="novalidate"{% endif %}*/
/*       {% if field.readonly in ['on', 'true', 1] %}readonly="readonly"{% endif %}*/
/*       {% if field.autocomplete in ['on', 'off'] %}autocomplete="{{ field.autocomplete }}"{% endif %}*/
/*       {% if field.validate.required in ['on', 'true', 1] %}required="required"{% endif %}*/
/*       {% if field.validate.pattern %}pattern="{{ field.validate.pattern }}"{% endif %}*/
/*       {% if field.validate.message %}title="{{ field.validate.message|e|tu }}"*/
/*       {% elseif field.title is defined %}title="{{ field.title|e|tu }}" {% endif %}*/
/*       {% endblock %}*/
/*       />*/
/*     </div>*/
/*     {% endblock %}*/
/*     {% endblock %}*/
/*   </div>*/
/*   {% endblock %}*/
/* </div>*/
/* {% endblock %}*/
/* */
