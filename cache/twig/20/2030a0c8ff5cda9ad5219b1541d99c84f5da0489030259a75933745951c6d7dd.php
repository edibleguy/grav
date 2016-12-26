<?php

/* @nucleus/page.html.twig */
class __TwigTemplate_179b8230c3227f9b2827ac751ede49ca305209daa8a886700b9fa32e72e70a08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'page_offcanvas' => array($this, 'block_page_offcanvas'),
            'page_layout' => array($this, 'block_page_layout'),
            'page_top' => array($this, 'block_page_top'),
            'page_bottom' => array($this, 'block_page_bottom'),
            'page_head' => array($this, 'block_page_head'),
            'page_footer' => array($this, 'block_page_footer'),
            'page' => array($this, 'block_page'),
            'page_body' => array($this, 'block_page_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "debugger", array()), "startTimer", array(0 => "render", 1 => "Rendering page"), "method");
        // line 2
        $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "setLayout", array(), "method");
        // line 3
        $context["segments"] = $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "segments", array());
        // line 5
        ob_start();
        // line 6
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "hasContent", array(), "method")) {
            // line 7
            echo "        ";
            $this->displayBlock('content', $context, $blocks);
            // line 9
            echo "    ";
        }
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 12
        $context["offcanvas"] = null;
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["segments"]) ? $context["segments"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
            if (($this->getAttribute($context["segment"], "type", array()) == "offcanvas")) {
                // line 14
                $context["offcanvas"] = $context["segment"];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        ob_start();
        // line 18
        echo "    ";
        $this->displayBlock('page_offcanvas', $context, $blocks);
        $context["page_offcanvas"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 25
        $context["page_offcanvas"] = ((trim((isset($context["page_offcanvas"]) ? $context["page_offcanvas"] : null))) ? (trim((isset($context["page_offcanvas"]) ? $context["page_offcanvas"] : null))) : (""));
        // line 26
        $context["offcanvas_position"] = (((isset($context["page_offcanvas"]) ? $context["page_offcanvas"] : null)) ? ((($this->getAttribute($this->getAttribute((isset($context["offcanvas"]) ? $context["offcanvas"] : null), "attributes", array(), "any", false, true), "position", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["offcanvas"]) ? $context["offcanvas"] : null), "attributes", array(), "any", false, true), "position", array()), "g-offcanvas-left")) : ("g-offcanvas-left"))) : (""));
        // line 28
        ob_start();
        // line 29
        echo "    ";
        $this->displayBlock('page_layout', $context, $blocks);
        $context["page_layout"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 36
        ob_start();
        // line 37
        echo "    ";
        $this->displayBlock('page_top', $context, $blocks);
        $context["page_top"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 41
        ob_start();
        // line 42
        echo "    ";
        $this->displayBlock('page_bottom', $context, $blocks);
        $context["page_bottom"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 48
        ob_start();
        // line 49
        echo "    ";
        $this->displayBlock('page_head', $context, $blocks);
        $context["page_head"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 54
        ob_start();
        // line 55
        echo "    ";
        $this->displayBlock('page_footer', $context, $blocks);
        // line 59
        echo "
    ";
        // line 60
        echo $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "debugger", array()), "render", array(), "method");
        echo "
";
        $context["page_footer"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 63
        $this->displayBlock('page', $context, $blocks);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "        ";
    }

    // line 18
    public function block_page_offcanvas($context, array $blocks = array())
    {
        // line 19
        echo "        ";
        if ((isset($context["offcanvas"]) ? $context["offcanvas"] : null)) {
            // line 20
            echo "            ";
            $this->loadTemplate((("@nucleus/layout/" . $this->getAttribute((isset($context["offcanvas"]) ? $context["offcanvas"] : null), "type", array())) . ".html.twig"), "@nucleus/page.html.twig", 20)->display(array_merge($context, array("segment" => (isset($context["offcanvas"]) ? $context["offcanvas"] : null))));
        }
        // line 22
        echo "    ";
    }

    // line 29
    public function block_page_layout($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["segments"]) ? $context["segments"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
            if (($this->getAttribute($context["segment"], "type", array()) != "offcanvas")) {
                // line 31
                echo "        ";
                $this->loadTemplate((("@nucleus/layout/" . $this->getAttribute($context["segment"], "type", array())) . ".html.twig"), "@nucleus/page.html.twig", 31)->display(array_merge($context, array("segments" => $this->getAttribute($context["segment"], "children", array()))));
                // line 32
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    ";
    }

    // line 37
    public function block_page_top($context, array $blocks = array())
    {
        // line 38
        echo "    ";
    }

    // line 42
    public function block_page_bottom($context, array $blocks = array())
    {
        // line 43
        echo "    ";
    }

    // line 49
    public function block_page_head($context, array $blocks = array())
    {
        // line 50
        $this->loadTemplate("partials/page_head.html.twig", "@nucleus/page.html.twig", 50)->display($context);
    }

    // line 55
    public function block_page_footer($context, array $blocks = array())
    {
        // line 56
        echo "        ";
        $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "finalize", array(), "method");
        // line 57
        echo twig_join_filter($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "scripts", array(0 => "footer"), "method"), "
    ");
    }

    // line 63
    public function block_page($context, array $blocks = array())
    {
        // line 64
        echo "<!DOCTYPE ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array(), "any", false, true), "page", array(), "any", false, true), "doctype", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array(), "any", false, true), "page", array(), "any", false, true), "doctype", array()), "html")) : ("html"));
        echo ">
<html";
        // line 65
        echo $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "page", array()), "htmlAttributes", array());
        echo ">
    ";
        // line 66
        echo (isset($context["page_head"]) ? $context["page_head"] : null);
        echo "
    ";
        // line 67
        $this->displayBlock('page_body', $context, $blocks);
        // line 84
        echo "
</html>
";
    }

    // line 67
    public function block_page_body($context, array $blocks = array())
    {
        // line 68
        echo "<body";
        echo $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "page", array()), "bodyAttributes", array(0 => array("class" => array(0 => (isset($context["offcanvas_position"]) ? $context["offcanvas_position"] : null), 1 => $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "page", array()), "preset", array()), 2 => ("g-style-" . $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "preset", array()))))), "method");
        echo ">
        ";
        // line 69
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array()), "page", array()), "body", array()), "body_top", array());
        echo "
        ";
        // line 70
        echo (isset($context["page_offcanvas"]) ? $context["page_offcanvas"] : null);
        echo "
        <div id=\"g-page-surround\">
            ";
        // line 72
        if (trim((isset($context["page_offcanvas"]) ? $context["page_offcanvas"] : null))) {
            // line 73
            echo "            <div class=\"g-offcanvas-hide g-offcanvas-toggle\" data-offcanvas-toggle><i class=\"fa fa-fw fa-bars\"></i></div>
            ";
        }
        // line 75
        echo "            ";
        echo (isset($context["page_top"]) ? $context["page_top"] : null);
        echo "
            ";
        // line 76
        echo (isset($context["page_layout"]) ? $context["page_layout"] : null);
        echo "
            ";
        // line 77
        echo (isset($context["page_bottom"]) ? $context["page_bottom"] : null);
        echo "
        </div>
        <script type=\"text/javascript\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-assets://js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 80
        echo (isset($context["page_footer"]) ? $context["page_footer"] : null);
        echo "
        ";
        // line 81
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array()), "page", array()), "body", array()), "body_bottom", array());
        echo "
    </body>";
    }

    public function getTemplateName()
    {
        return "@nucleus/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 81,  261 => 80,  257 => 79,  252 => 77,  248 => 76,  243 => 75,  239 => 73,  237 => 72,  232 => 70,  228 => 69,  223 => 68,  220 => 67,  214 => 84,  212 => 67,  208 => 66,  204 => 65,  199 => 64,  196 => 63,  191 => 57,  188 => 56,  185 => 55,  181 => 50,  178 => 49,  174 => 43,  171 => 42,  167 => 38,  164 => 37,  160 => 33,  150 => 32,  147 => 31,  135 => 30,  132 => 29,  128 => 22,  124 => 20,  121 => 19,  118 => 18,  114 => 8,  111 => 7,  107 => 63,  102 => 60,  99 => 59,  96 => 55,  94 => 54,  90 => 49,  88 => 48,  84 => 42,  82 => 41,  78 => 37,  76 => 36,  72 => 29,  70 => 28,  68 => 26,  66 => 25,  62 => 18,  60 => 17,  53 => 14,  48 => 13,  46 => 12,  42 => 9,  39 => 7,  36 => 6,  34 => 5,  32 => 3,  30 => 2,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- do gantry.debugger.startTimer('render', 'Rendering page') %}
{%- do gantry.theme.setLayout() -%}
{%- set segments = gantry.theme.segments -%}

{%- set content %}
    {% if gantry.theme.hasContent() %}
        {% block content %}
        {% endblock %}
    {% endif %}
{% endset -%}

{%- set offcanvas = null -%}
{%- for segment in segments if segment.type == 'offcanvas' %}
    {%- set offcanvas = segment -%}
{% endfor -%}

{%- set page_offcanvas %}
    {% block page_offcanvas %}
        {% if offcanvas %}
            {% include '@nucleus/layout/' ~ offcanvas.type ~ '.html.twig' with { 'segment': offcanvas } -%}
        {% endif %}
    {% endblock %}
{% endset -%}

{%- set page_offcanvas = page_offcanvas|trim ?: '' %}
{%- set offcanvas_position = page_offcanvas ? offcanvas.attributes.position|default('g-offcanvas-left') : '' -%}

{%- set page_layout %}
    {% block page_layout %}
    {% for segment in segments if segment.type != 'offcanvas' %}
        {% include '@nucleus/layout/' ~ segment.type ~ '.html.twig' with { 'segments': segment.children } %}
    {% endfor %}
    {% endblock %}
{% endset -%}

{%- set page_top %}
    {% block page_top %}
    {% endblock %}
{% endset -%}

{%- set page_bottom %}
    {% block page_bottom %}
    {% endblock %}
{% endset -%}

{# Head and footer needs to come last because of any of the above blocks may have CSS or JavaScript in them #}

{%- set page_head %}
    {% block page_head -%}
        {% include 'partials/page_head.html.twig' %}
    {%- endblock %}
{% endset -%}

{%- set page_footer %}
    {% block page_footer %}
        {% do gantry.platform.finalize() -%}
        {{ gantry.scripts('footer')|join(\"\\n    \")|raw -}}
    {% endblock %}

    {{ gantry.debugger.render()|raw }}
{% endset -%}

{%- block page -%}
<!DOCTYPE {{ gantry.config.page.doctype|default('html')|raw }}>
<html{{ gantry.page.htmlAttributes|raw }}>
    {{ page_head|raw }}
    {% block page_body -%}
    <body{{ gantry.page.bodyAttributes({'class': [offcanvas_position, gantry.page.preset, 'g-style-' ~ gantry.theme.preset]})|raw }}>
        {{ gantry.config.page.body.body_top|raw }}
        {{ page_offcanvas|raw }}
        <div id=\"g-page-surround\">
            {% if page_offcanvas|trim %}
            <div class=\"g-offcanvas-hide g-offcanvas-toggle\" data-offcanvas-toggle><i class=\"fa fa-fw fa-bars\"></i></div>
            {% endif %}
            {{ page_top|raw }}
            {{ page_layout|raw }}
            {{ page_bottom|raw }}
        </div>
        <script type=\"text/javascript\" src=\"{{ url('gantry-assets://js/main.js') }}\"></script>
        {{ page_footer|raw }}
        {{ gantry.config.page.body.body_bottom|raw }}
    </body>
    {%- endblock %}

</html>
{% endblock -%}
", "@nucleus/page.html.twig", "/var/www/html/grav/user/plugins/gantry5/engines/nucleus/templates/page.html.twig");
    }
}
