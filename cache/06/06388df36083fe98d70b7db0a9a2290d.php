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
        // line 6
        yield "
<div class=\"feature-table\" role=\"region\" aria-label=\"Feature comparison\">
\t<table>
\t\t<caption class=\"visually-hidden\">Compare features across different plans</caption>
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th scope=\"col\">THE FEATURES</th>
\t\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["plans"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
            // line 14
            yield "\t\t\t\t\t<th scope=\"col\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "name", [], "any", false, false, false, 14), "html", null, true);
            yield "</th>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['plan'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["features"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 20
            yield "\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"row\">";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "title", [], "any", false, false, false, 21), "html", null, true);
            yield "</th>
\t\t\t\t\t";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["plans"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
                // line 23
                yield "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div>";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "name", [], "any", false, false, false, 24), "html", null, true);
                yield "</div>
\t\t\t\t\t\t\t";
                // line 25
                if ((($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "features", [], "any", false, false, false, 25)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 25), "loop", [], "any", false, false, false, 25), "index0", [], "any", false, false, false, 25)] ?? null) : null)) {
                    // line 26
                    yield "\t\t\t\t\t\t\t\t<img src=\"images/pricing/desktop/check.svg\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "title", [], "any", false, false, false, 26), "html", null, true);
                    yield " is included in ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "name", [], "any", false, false, false, 26), "html", null, true);
                    yield " plan\" width=\"16\" height=\"12\"/>
\t\t\t\t\t\t\t";
                } else {
                    // line 28
                    yield "\t\t\t\t\t\t\t\t<span class=\"visually-hidden\">Not included in
\t\t\t\t\t\t\t\t\t";
                    // line 29
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "name", [], "any", false, false, false, 29), "html", null, true);
                    yield "
\t\t\t\t\t\t\t\t\tplan</span>
\t\t\t\t\t\t\t";
                }
                // line 32
                yield "\t\t\t\t\t\t</td>
\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['plan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            yield "\t\t\t\t</tr>
\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
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
        return array (  166 => 36,  151 => 34,  136 => 32,  130 => 29,  127 => 28,  119 => 26,  117 => 25,  113 => 24,  110 => 23,  93 => 22,  89 => 21,  86 => 20,  69 => 19,  64 => 16,  55 => 14,  51 => 13,  42 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# 
  FeatureTable Component
  @param {array} features - Array of feature objects with title property
  @param {array} plans - Array of plan objects with name and features array
#}

<div class=\"feature-table\" role=\"region\" aria-label=\"Feature comparison\">
\t<table>
\t\t<caption class=\"visually-hidden\">Compare features across different plans</caption>
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th scope=\"col\">THE FEATURES</th>
\t\t\t\t{% for plan in plans %}
\t\t\t\t\t<th scope=\"col\">{{ plan.name }}</th>
\t\t\t\t{% endfor %}
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for feature in features %}
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"row\">{{ feature.title }}</th>
\t\t\t\t\t{% for plan in plans %}
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div>{{ plan.name }}</div>
\t\t\t\t\t\t\t{% if plan.features[loop.parent.loop.index0] %}
\t\t\t\t\t\t\t\t<img src=\"images/pricing/desktop/check.svg\" alt=\"{{ feature.title }} is included in {{ plan.name }} plan\" width=\"16\" height=\"12\"/>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<span class=\"visually-hidden\">Not included in
\t\t\t\t\t\t\t\t\t{{ plan.name }}
\t\t\t\t\t\t\t\t\tplan</span>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</td>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>
</div>
", "components/feature-table/feature-table.twig", "/Users/stevenportas/WorkBox/Sites/demos/demo-photosnap-twig/src/templates/components/feature-table/feature-table.twig");
    }
}
