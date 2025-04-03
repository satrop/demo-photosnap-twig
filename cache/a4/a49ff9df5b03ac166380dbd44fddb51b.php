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
        $context["plans"] = [["title" => "Basic", "description" => "Includes basic usage of our platform. Recommended for new and aspiring photographers.", "price" => 19, "popular" => false], ["title" => "Pro", "description" => "More advanced features available. Recommended for photography veterans and professionals.", "price" => 39, "popular" => true], ["title" => "Business", "description" => "Additional features available such as more detailed metrics. Recommended for business owners.", "price" => 99, "popular" => false]];
        // line 33
        yield "
\t\t\t";
        // line 34
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
            // line 35
            yield "\t\t\t\t";
            yield from $this->loadTemplate("components/price-card/price-card.twig", "pages/pricing.twig", 35)->unwrap()->yield(CoreExtension::merge($context, Twig\Extension\CoreExtension::merge($context["plan"], ["isYearly" => ($context["isYearly"] ?? null)])));
            // line 36
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
        unset($context['_seq'], $context['_key'], $context['plan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "\t\t</div>

\t\t<h2 class=\"section-title h1\">Compare</h2>

\t\t";
        // line 41
        yield from $this->loadTemplate("components/feature-table/feature-table.twig", "pages/pricing.twig", 41)->unwrap()->yield($context);
        // line 42
        yield "\t</section>

\t";
        // line 45
        yield "\t";
        yield from $this->loadTemplate("components/beta-section/beta-section.twig", "pages/pricing.twig", 45)->unwrap()->yield($context);
        yield from [];
    }

    // line 48
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 49
        yield "\t<script>
\t\tdocument.addEventListener('DOMContentLoaded', function () {
const toggle = document.querySelector('[data-action=\"toggle-billing\"]');
const cards = document.querySelectorAll('.price-card');
let isYearly = ";
        // line 53
        yield ((($context["isYearly"] ?? null)) ? ("true") : ("false"));
        yield ";

function updatePrices() {
cards.forEach(card => {
const priceEl = card.querySelector('.price-card__price');
const periodEl = card.querySelector('.price-card__period');
const basePrice = parseInt(priceEl.dataset.basePrice || priceEl.textContent.replace(/[^0-9]/g, ''));

if (isYearly) {
priceEl.textContent = '\$' + (
basePrice * 12
).toFixed(2);
periodEl.textContent = 'per year';
} else {
priceEl.textContent = '\$' + basePrice.toFixed(2);
periodEl.textContent = 'per month';
}

// Store the base price for future calculations
priceEl.dataset.basePrice = basePrice;
});
}

toggle ?. addEventListener('click', function () {
isYearly = ! isYearly;
this.setAttribute('aria-checked', isYearly);
this.classList.toggle('price-toggle__switch--yearly', isYearly);

// Update labels
const monthlyLabel = document.querySelector('.price-toggle__label:first-of-type');
const yearlyLabel = document.querySelector('.price-toggle__label:last-of-type');
monthlyLabel.classList.toggle('price-toggle__label--active', ! isYearly);
yearlyLabel.classList.toggle('price-toggle__label--active', isYearly);

updatePrices();
});
});
\t</script>
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
        return array (  149 => 53,  143 => 49,  136 => 48,  130 => 45,  126 => 42,  124 => 41,  118 => 37,  104 => 36,  101 => 35,  84 => 34,  81 => 33,  79 => 13,  75 => 11,  72 => 10,  70 => 9,  67 => 8,  64 => 6,  61 => 5,  59 => 4,  52 => 3,  41 => 1,);
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
\t\t\t{% set plans = [
        {
          title: 'Basic',
          description: 'Includes basic usage of our platform. Recommended for new and aspiring photographers.',
          price: 19,
          popular: false
        },
        {
          title: 'Pro',
          description: 'More advanced features available. Recommended for photography veterans and professionals.',
          price: 39,
          popular: true
        },
        {
          title: 'Business',
          description: 'Additional features available such as more detailed metrics. Recommended for business owners.',
          price: 99,
          popular: false
        }
      ] %}

\t\t\t{% for plan in plans %}
\t\t\t\t{% include 'components/price-card/price-card.twig' with plan|merge({ isYearly: isYearly }) %}
\t\t\t{% endfor %}
\t\t</div>

\t\t<h2 class=\"section-title h1\">Compare</h2>

\t\t{% include 'components/feature-table/feature-table.twig' %}
\t</section>

\t{# Beta Section #}
\t{% include 'components/beta-section/beta-section.twig' %}
{% endblock %}

{% block scripts %}
\t<script>
\t\tdocument.addEventListener('DOMContentLoaded', function () {
const toggle = document.querySelector('[data-action=\"toggle-billing\"]');
const cards = document.querySelectorAll('.price-card');
let isYearly = {{ isYearly ? 'true' : 'false' }};

function updatePrices() {
cards.forEach(card => {
const priceEl = card.querySelector('.price-card__price');
const periodEl = card.querySelector('.price-card__period');
const basePrice = parseInt(priceEl.dataset.basePrice || priceEl.textContent.replace(/[^0-9]/g, ''));

if (isYearly) {
priceEl.textContent = '\$' + (
basePrice * 12
).toFixed(2);
periodEl.textContent = 'per year';
} else {
priceEl.textContent = '\$' + basePrice.toFixed(2);
periodEl.textContent = 'per month';
}

// Store the base price for future calculations
priceEl.dataset.basePrice = basePrice;
});
}

toggle ?. addEventListener('click', function () {
isYearly = ! isYearly;
this.setAttribute('aria-checked', isYearly);
this.classList.toggle('price-toggle__switch--yearly', isYearly);

// Update labels
const monthlyLabel = document.querySelector('.price-toggle__label:first-of-type');
const yearlyLabel = document.querySelector('.price-toggle__label:last-of-type');
monthlyLabel.classList.toggle('price-toggle__label--active', ! isYearly);
yearlyLabel.classList.toggle('price-toggle__label--active', isYearly);

updatePrices();
});
});
\t</script>
{% endblock %}
", "pages/pricing.twig", "/Users/stevenportas/WorkBox/Sites/demos/demo-photosnap-twig/src/templates/pages/pricing.twig");
    }
}
