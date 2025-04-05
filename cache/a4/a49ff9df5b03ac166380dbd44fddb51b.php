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

/* pages/pricing.twig */
class __TwigTemplate_2427e33c91ca53d08ccbac1d943dd081 extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "layouts/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layouts/base.twig", "pages/pricing.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "\t";
        // line 5
        yield "\t";
        yield from $this->loadTemplate("components/hero/hero.twig", "pages/pricing.twig", 5)->unwrap()->yield(CoreExtension::merge($context, ($context["featuredStory"] ?? null)));
        // line 6
        yield "
\t";
        // line 8
        yield "\t<section class=\"pricing-section main-width\">
\t\t";
        // line 9
        $context["isYearly"] = false;
        // line 10
        yield "\t\t";
        yield from $this->loadTemplate("components/price-toggle/price-toggle.twig", "pages/pricing.twig", 10)->unwrap()->yield(CoreExtension::merge($context, ["isYearly" => ($context["isYearly"] ?? null)]));
        // line 11
        yield "
\t\t<div class=\"pricing-cards\">
\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["prices"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
            // line 14
            yield "\t\t\t\t";
            yield from $this->loadTemplate("components/price-card/price-card.twig", "pages/pricing.twig", 14)->unwrap()->yield(CoreExtension::merge($context, Twig\Extension\CoreExtension::merge($context["price"], ["isYearly" => ($context["isYearly"] ?? null)])));
            // line 15
            yield "\t\t\t";
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
        unset($context['_seq'], $context['_key'], $context['price'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "\t\t</div>

\t\t<h2 class=\"section-title h1\">Compare</h2>

\t\t";
        // line 20
        yield from $this->loadTemplate("components/feature-table/feature-table.twig", "pages/pricing.twig", 20)->unwrap()->yield($context);
        // line 21
        yield "\t</section>

\t";
        // line 24
        yield "\t";
        yield from $this->loadTemplate("components/beta-section/beta-section.twig", "pages/pricing.twig", 24)->unwrap()->yield($context);
        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 28
        yield "\t<script src=\"/js/components/price-card/pricing.js\"></script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/pricing.twig";
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
        return array (  138 => 28,  131 => 27,  125 => 24,  121 => 21,  119 => 20,  113 => 16,  99 => 15,  96 => 14,  79 => 13,  75 => 11,  72 => 10,  70 => 9,  67 => 8,  64 => 6,  61 => 5,  59 => 4,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/base.twig' %}

{% block content %}
\t{# Hero Section #}
\t{% include 'components/hero/hero.twig' with featuredStory %}

\t{# Pricing Section #}
\t<section class=\"pricing-section main-width\">
\t\t{% set isYearly = false %}
\t\t{% include 'components/price-toggle/price-toggle.twig' with { isYearly: isYearly } %}

\t\t<div class=\"pricing-cards\">
\t\t\t{% for price in prices %}
\t\t\t\t{% include 'components/price-card/price-card.twig' with price|merge({ isYearly: isYearly }) %}
\t\t\t{% endfor %}
\t\t</div>

\t\t<h2 class=\"section-title h1\">Compare</h2>

\t\t{% include 'components/feature-table/feature-table.twig' %}
\t</section>

\t{# Beta Section #}
\t{% include 'components/beta-section/beta-section.twig' %}
{% endblock %}

{% block scripts %}
\t<script src=\"/js/components/price-card/pricing.js\"></script>
{% endblock %}
", "pages/pricing.twig", "/Users/stevenportas/WorkBox/Sites/demos/demo-photosnap-twig/src/templates/pages/pricing.twig");
    }
}
