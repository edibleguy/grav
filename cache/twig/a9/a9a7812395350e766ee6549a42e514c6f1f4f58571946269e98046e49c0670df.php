<?php

/* @particles/search.html.twig */
class __TwigTemplate_3d4857aa6513282fbddcf60903324d2a494f43d4ec65d764156bd769c4e893a0 extends Twig_Template
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
        try {            // line 2
            echo "
";
            // line 3
            $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "load", array(0 => "jquery"), "method");
            // line 4
            echo "
";
            // line 5
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "@particles/search.html.twig", 5)->display($context);
            // line 6
            echo "
";
        } catch (\Exception $e) {
            if ($context['gantry']->debug()) throw $e;
            GANTRY_DEBUGGER && method_exists('Gantry\Debugger', 'addException') && \Gantry\Debugger::addException($e);
            $context['e'] = $e;
            // line 8
            echo "<div class=\"alert alert-error\"><strong>Error:</strong> Please enable simplesearch plugin!</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@particles/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  30 => 6,  28 => 5,  25 => 4,  23 => 3,  20 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% try %}

{% do gantry.theme.load('jquery') %}

{% include 'partials/simplesearch_searchbox.html.twig' %}

{% catch %}
<div class=\"alert alert-error\"><strong>Error:</strong> Please enable simplesearch plugin!</div>
{% endtry %}", "@particles/search.html.twig", "/var/www/html/grav/user/plugins/gantry5/engines/nucleus/particles/search.html.twig");
    }
}
