<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* components/feature-table/feature-table.twig */
class __TwigTemplate_458783cd27b34eb7728ed57ac3db4304 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "
<div class=\"feature-table\" role=\"region\" aria-label=\"Feature comparison\">
\t<table>
\t\t<caption class=\"visually-hidden\">Compare features across different plans</caption>
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th scope=\"col\">The Features</th>
\t\t\t\t<th scope=\"col\">Basic</th>
\t\t\t\t<th scope=\"col\">Pro</th>
\t\t\t\t<th scope=\"col\">Business</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["features"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 19
            yield "\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"row\">";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "title", [], "any", false, false, false, 20), "html", null, true);
            yield "</th>
\t\t\t\t\t";
            // line 21
            if (CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "feature_set", [], "any", true, true, false, 21)) {
                // line 22
                yield "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(["basic", "pro", "business"]);
                foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
                    // line 23
                    yield "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                    // line 24
                    if (CoreExtension::inFilter($context["plan"], CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "feature_set", [], "any", false, false, false, 24))) {
                        // line 25
                        yield "\t\t\t\t\t\t\t\t\t<img src=\"/images/pricing/desktop/check.svg\" alt=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "title", [], "any", false, false, false, 25), "html", null, true);
                        yield " is included in ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["plan"], "html", null, true);
                        yield " plan\" width=\"16\" height=\"12\"/>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 27
                        yield "\t\t\t\t\t\t\t\t\t<span class=\"visually-hidden\">Not included in ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["plan"], "html", null, true);
                        yield " plan</span>
\t\t\t\t\t\t\t\t";
                    }
                    // line 29
                    yield "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['plan'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                yield "\t\t\t\t\t";
            } else {
                // line 32
                yield "\t\t\t\t\t\t<td>
              ";
                // line 33
                if (CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "basic", [], "any", false, false, false, 33)) {
                    // line 34
                    yield "                <img src=\"/images/pricing/desktop/check.svg\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "title", [], "any", false, false, false, 34), "html", null, true);
                    yield " is included in basic plan\" width=\"16\" height=\"12\"/>
              ";
                } else {
                    // line 36
                    yield "                <span class=\"visually-hidden\">Not included in basic plan</span>
              ";
                }
                // line 38
                yield "            </td>
\t\t\t\t\t\t<td>
              ";
                // line 40
                if (CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "pro", [], "any", false, false, false, 40)) {
                    // line 41
                    yield "                <img src=\"/images/pricing/desktop/check.svg\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "title", [], "any", false, false, false, 41), "html", null, true);
                    yield " is included in pro plan\" width=\"16\" height=\"12\"/>
              ";
                } else {
                    // line 43
                    yield "                <span class=\"visually-hidden\">Not included in pro plan</span>
              ";
                }
                // line 45
                yield "            </td>
\t\t\t\t\t\t<td>
              ";
                // line 47
                if (CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "business", [], "any", false, false, false, 47)) {
                    // line 48
                    yield "                <img src=\"/images/pricing/desktop/check.svg\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "title", [], "any", false, false, false, 48), "html", null, true);
                    yield " is included in business plan\" width=\"16\" height=\"12\"/>
              ";
                } else {
                    // line 50
                    yield "                <span class=\"visually-hidden\">Not included in business plan</span>
              ";
                }
                // line 52
                yield "            </td>
\t\t\t\t\t";
            }
            // line 54
            yield "\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['feature'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "\t\t</tbody>
\t</table>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/feature-table/feature-table.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  162 => 56,  155 => 54,  151 => 52,  147 => 50,  141 => 48,  139 => 47,  135 => 45,  131 => 43,  125 => 41,  123 => 40,  119 => 38,  115 => 36,  109 => 34,  107 => 33,  104 => 32,  101 => 31,  94 => 29,  88 => 27,  80 => 25,  78 => 24,  75 => 23,  70 => 22,  68 => 21,  64 => 20,  61 => 19,  57 => 18,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# 
  FeatureTable Component
  @param {array} features - Array of feature objects with title property
#}

<div class=\"feature-table\" role=\"region\" aria-label=\"Feature comparison\">
\t<table>
\t\t<caption class=\"visually-hidden\">Compare features across different plans</caption>
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th scope=\"col\">The Features</th>
\t\t\t\t<th scope=\"col\">Basic</th>
\t\t\t\t<th scope=\"col\">Pro</th>
\t\t\t\t<th scope=\"col\">Business</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for feature in features %}
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"row\">{{ feature.title }}</th>
\t\t\t\t\t{% if feature.feature_set is defined %}
\t\t\t\t\t\t{% for plan in ['basic', 'pro', 'business'] %}
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{% if plan in feature.feature_set %}
\t\t\t\t\t\t\t\t\t<img src=\"/images/pricing/desktop/check.svg\" alt=\"{{ feature.title }} is included in {{ plan }} plan\" width=\"16\" height=\"12\"/>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<span class=\"visually-hidden\">Not included in {{ plan }} plan</span>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<td>
              {% if feature.basic %}
                <img src=\"/images/pricing/desktop/check.svg\" alt=\"{{ feature.title }} is included in basic plan\" width=\"16\" height=\"12\"/>
              {% else %}
                <span class=\"visually-hidden\">Not included in basic plan</span>
              {% endif %}
            </td>
\t\t\t\t\t\t<td>
              {% if feature.pro %}
                <img src=\"/images/pricing/desktop/check.svg\" alt=\"{{ feature.title }} is included in pro plan\" width=\"16\" height=\"12\"/>
              {% else %}
                <span class=\"visually-hidden\">Not included in pro plan</span>
              {% endif %}
            </td>
\t\t\t\t\t\t<td>
              {% if feature.business %}
                <img src=\"/images/pricing/desktop/check.svg\" alt=\"{{ feature.title }} is included in business plan\" width=\"16\" height=\"12\"/>
              {% else %}
                <span class=\"visually-hidden\">Not included in business plan</span>
              {% endif %}
            </td>
\t\t\t\t\t{% endif %}
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>
</div>
", "components/feature-table/feature-table.twig", "/Users/stevenportas/WorkBox/Sites/demos/demo-photosnap-twig/src/templates/components/feature-table/feature-table.twig");
    }
}
