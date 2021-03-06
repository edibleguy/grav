<?php

/* partials/simplesearch_searchbox.html.twig */
class __TwigTemplate_ab0ac5ace3b18e037c434a69d37e99392971dad0e3f0d6d77cd4c6dcf06b4028 extends Twig_Template
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
        echo "<div class=\"search-wrapper\">
    <input class=\"search-input\" type=\"text\" placeholder=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_SIMPLESEARCH.SEARCH_PLACEHOLDER"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["query"]) ? $context["query"] : null), "html", null, true);
        echo "\" data-search-input=\"";
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "simplesearch", array()), "route", array()), "html", null, true);
        echo "/query\" />
    ";
        // line 3
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "simplesearch", array()), "display_button", array())) {
            // line 4
            echo "        <button class=\"search-submit\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("plugin://simplesearch/assets/search.svg"), "html", null, true);
            echo "\" /></button>
    ";
        }
        // line 6
        echo "    <script>
    jQuery(document).ready(function(\$){
        \$('.search-input').on('keypress', function(event) {
            var input = \$(event.currentTarget);
            if (event.which == 13 && input.val().length >= ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "plugins.simplesearch.min_query_length", 1 => 3), "method"), "html", null, true);
        echo ") {
                event.preventDefault();
                window.location.href = input.data('search-input') + '";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array()), "html", null, true);
        echo "' + input.val();
            }
        });
        \$('.search-submit').on('click', function(event) {
            var input = \$(event.currentTarget).prev('.search-input');
            event.preventDefault();
            window.location.href = input.data('search-input') + '";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array()), "html", null, true);
        echo "' + input.val();
        });
    });
    </script>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/simplesearch_searchbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 18,  50 => 12,  45 => 10,  39 => 6,  33 => 4,  31 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"search-wrapper\">
    <input class=\"search-input\" type=\"text\" placeholder=\"{{\"PLUGIN_SIMPLESEARCH.SEARCH_PLACEHOLDER\"|t}}\" value=\"{{ query }}\" data-search-input=\"{{ base_url }}{{ config.plugins.simplesearch.route}}/query\" />
    {% if config.plugins.simplesearch.display_button %}
        <button class=\"search-submit\"><img src=\"{{ url('plugin://simplesearch/assets/search.svg') }}\" /></button>
    {% endif %}
    <script>
    jQuery(document).ready(function(\$){
        \$('.search-input').on('keypress', function(event) {
            var input = \$(event.currentTarget);
            if (event.which == 13 && input.val().length >= {{ config.get('plugins.simplesearch.min_query_length', 3) }}) {
                event.preventDefault();
                window.location.href = input.data('search-input') + '{{ config.system.param_sep }}' + input.val();
            }
        });
        \$('.search-submit').on('click', function(event) {
            var input = \$(event.currentTarget).prev('.search-input');
            event.preventDefault();
            window.location.href = input.data('search-input') + '{{ config.system.param_sep }}' + input.val();
        });
    });
    </script>
</div>
", "partials/simplesearch_searchbox.html.twig", "/var/www/html/grav/user/plugins/simplesearch/templates/partials/simplesearch_searchbox.html.twig");
    }
}
