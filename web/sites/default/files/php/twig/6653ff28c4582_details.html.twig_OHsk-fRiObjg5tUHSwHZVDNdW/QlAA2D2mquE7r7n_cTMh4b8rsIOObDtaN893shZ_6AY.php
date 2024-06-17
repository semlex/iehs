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

/* themes/contrib/dxpr_theme/templates/details.html.twig */
class __TwigTemplate_8636799d0a7e11cb31dc11fd63fc7484 extends Template
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
        // line 18
        echo "<details";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["card"], "method", false, false, true, 18), 18, $this->source), "html", null, true);
        echo ">";
        // line 19
        if (($context["title"] ?? null)) {
            // line 21
            $context["summary_classes"] = [((            // line 22
($context["required"] ?? null)) ? ("js-form-required") : ("")), ((            // line 23
($context["required"] ?? null)) ? ("form-required invalid-feedback") : ("")), "card-header"];
            // line 27
            echo "
    <summary";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["summary_attributes"] ?? null), "addClass", [($context["summary_classes"] ?? null)], "method", false, false, true, 28), 28, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 28, $this->source), "html", null, true);
            echo "</summary>";
        }
        // line 30
        echo "<div class=\"details-wrapper card-body\">
    ";
        // line 31
        if (($context["errors"] ?? null)) {
            // line 32
            echo "      <div class=\"form-item--error-message\" role=\"alert\">
        <strong>";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 33, $this->source), "html", null, true);
            echo "</strong>
      </div>
    ";
        }
        // line 36
        if (($context["description"] ?? null)) {
            // line 37
            echo "<div class=\"details-description\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 37, $this->source), "html", null, true);
            echo "</div>";
        }
        // line 39
        if (($context["children"] ?? null)) {
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 40, $this->source), "html", null, true);
        }
        // line 42
        if (($context["value"] ?? null)) {
            // line 43
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 43, $this->source), "html", null, true);
        }
        // line 45
        echo "</div>
</details>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "title", "required", "summary_attributes", "errors", "description", "children", "value"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/dxpr_theme/templates/details.html.twig";
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
        return array (  89 => 45,  86 => 43,  84 => 42,  81 => 40,  79 => 39,  74 => 37,  72 => 36,  66 => 33,  63 => 32,  61 => 31,  58 => 30,  52 => 28,  49 => 27,  47 => 23,  46 => 22,  45 => 21,  43 => 19,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/dxpr_theme/templates/details.html.twig", "/var/www/html/web/themes/contrib/dxpr_theme/templates/details.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19, "set" => 21);
        static $filters = array("escape" => 18);
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
