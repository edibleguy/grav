<?php

/* @gantry-admin/partials/php_unsupported.html.twig */
class __TwigTemplate_388aa97debaddddb27af3a6a915f4b9e1e81836d6b90877fac16c45054b45929 extends Twig_Template
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
        $context["php_version"] = twig_constant("PHP_VERSION");
        // line 2
        echo "
";
        // line 3
        if ((is_string($__internal_3664fe274ba4bfb0c3210fcd2170701fb1d2d822f553235078259f699eef9fdf = (isset($context["php_version"]) ? $context["php_version"] : null)) && is_string($__internal_6e4001d3df55df8636eccfaadd0426c8b028f9b2f6ebb2ff8c5cb1ad7748edd8 = "5.4") && ('' === $__internal_6e4001d3df55df8636eccfaadd0426c8b028f9b2f6ebb2ff8c5cb1ad7748edd8 || 0 === strpos($__internal_3664fe274ba4bfb0c3210fcd2170701fb1d2d822f553235078259f699eef9fdf, $__internal_6e4001d3df55df8636eccfaadd0426c8b028f9b2f6ebb2ff8c5cb1ad7748edd8)))) {
            // line 4
            echo "<div class=\"g-grid\">
    <div class=\"g-block alert alert-warning g-php-outdated\">
        ";
            // line 6
            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PHP54_WARNING", (isset($context["php_version"]) ? $context["php_version"] : null));
            echo "
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gantry-admin/partials/php_unsupported.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/partials/php_unsupported.html.twig", "/var/www/html/grav/user/plugins/gantry5/admin/templates/partials/php_unsupported.html.twig");
    }
}
