<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/bootstrap5/templates/form/input.html.twig */
class __TwigTemplate_708ca8153a16bd1ee9805870285a897e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "
";
        // line 14
        if (((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "hasClass", ["button"], "method", false, false, true, 14) &&  !twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "hasClass", ["field-add-more-submit"], "method", false, false, true, 14)) &&  !twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "hasClass", ["btn"], "method", false, false, true, 14))) {
            // line 15
            echo "  ";
            // line 16
            $context["classes"] = ["btn", ((twig_get_attribute($this->env, $this->source,             // line 18
($context["attributes"] ?? null), "hasClass", ["button--danger"], "method", false, false, true, 18)) ? ("btn-danger") : ("")), ((( !twig_get_attribute($this->env, $this->source,             // line 19
($context["attributes"] ?? null), "hasClass", ["media-library-item__remove"], "method", false, false, true, 19) &&  !twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "hasClass", ["button--danger"], "method", false, false, true, 19))) ? ("btn-primary") : (""))];
            // line 22
            echo "  <input";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 22), 22, $this->source), "html", null, true);
            echo " />
";
        } else {
            // line 24
            echo "  <input";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 24, $this->source), "html", null, true);
            echo " />
";
        }
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 26, $this->source), "html", null, true);
        echo "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "children"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/bootstrap5/templates/form/input.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  62 => 26,  56 => 24,  50 => 22,  48 => 19,  47 => 18,  46 => 16,  44 => 15,  42 => 14,  39 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/bootstrap5/templates/form/input.html.twig", "/var/www/html/web/themes/contrib/bootstrap5/templates/form/input.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 14, "set" => 16);
        static $filters = array("escape" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
