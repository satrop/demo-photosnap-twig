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
        yield "  ";
        // line 5
        yield "  ";
        yield from $this->loadTemplate("components/hero/hero.twig", "pages/pricing.twig", 5)->unwrap()->yield(CoreExtension::merge($context, ["variant" => "side-by-side", "image" => "/pricing/desktop/hero.jpg", "imageAlt" => "Professional camera on a tripod", "title" => "Pricing", "excerpt" => "Create a your stories, Photosnap is a platform for photographers and visual storytellers. It's the simple way to create and share your photos.", "backgroundColor" => "black", "standout" => true, "short" => true]));
        // line 15
        yield "
  ";
        // line 17
        yield "  <section class=\"pricing-section main-width\">
    ";
        // line 18
        $context["isYearly"] = false;
        // line 19
        yield "    ";
        yield from $this->loadTemplate("components/price-toggle/price-toggle.twig", "pages/pricing.twig", 19)->unwrap()->yield(CoreExtension::merge($context, ["isYearly" => ($context["isYearly"] ?? null)]));
        // line 20
        yield "
    <div class=\"pricing-cards\">
      ";
        // line 22
        $context["plans"] = [["title" => "Basic", "description" => "Includes basic usage of our platform. Recommended for new and aspiring photographers.", "price" => 19, "popular" => false], ["title" => "Pro", "description" => "More advanced features available. Recommended for photography veterans and professionals.", "price" => 39, "popular" => true], ["title" => "Business", "description" => "Additional features available such as more detailed metrics. Recommended for business owners.", "price" => 99, "popular" => false]];
        // line 42
        yield "
      ";
        // line 43
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
            // line 44
            yield "        ";
            yield from $this->loadTemplate("components/price-card/price-card.twig", "pages/pricing.twig", 44)->unwrap()->yield(CoreExtension::merge($context, Twig\Extension\CoreExtension::merge($context["plan"], ["isYearly" => ($context["isYearly"] ?? null)])));
            // line 45
            yield "      ";
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
        // line 46
        yield "    </div>

    <h2 class=\"section-title h1\">Compare</h2>

    ";
        // line 50
        $context["features"] = [["title" => "UNLIMITED STORY POSTING"], ["title" => "UNLIMITED PHOTO UPLOAD"], ["title" => "EMBEDDING CUSTOM CONTENT"], ["title" => "CUSTOMIZE METADATA"], ["title" => "ADVANCED METRICS"], ["title" => "PHOTO DOWNLOADS"], ["title" => "SEARCH ENGINE INDEXING"], ["title" => "CUSTOM ANALYTICS"]];
        // line 60
        yield "
    ";
        // line 61
        $context["featurePlans"] = [["name" => "Basic", "features" => [true, true, false, false, false, false, false, false]], ["name" => "Pro", "features" => [true, true, true, true, true, false, false, false]], ["name" => "Business", "features" => [true, true, true, true, true, true, true, true]]];
        // line 75
        yield "
    ";
        // line 76
        yield from $this->loadTemplate("components/feature-table/feature-table.twig", "pages/pricing.twig", 76)->unwrap()->yield(CoreExtension::merge($context, ["features" =>         // line 77
($context["features"] ?? null), "plans" =>         // line 78
($context["featurePlans"] ?? null)]));
        // line 80
        yield "  </section>

  ";
        // line 83
        yield "  ";
        yield from $this->loadTemplate("components/beta-section/beta-section.twig", "pages/pricing.twig", 83)->unwrap()->yield($context);
        yield from [];
    }

    // line 86
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 87
        yield "<script>
  document.addEventListener('DOMContentLoaded', function() {
    const toggle = document.querySelector('[data-action=\"toggle-billing\"]');
    const cards = document.querySelectorAll('.price-card');
    let isYearly = ";
        // line 91
        yield ((($context["isYearly"] ?? null)) ? ("true") : ("false"));
        yield ";

    function updatePrices() {
      cards.forEach(card => {
        const priceEl = card.querySelector('.price-card__price');
        const periodEl = card.querySelector('.price-card__period');
        const basePrice = parseInt(priceEl.dataset.basePrice || priceEl.textContent.replace(/[^0-9]/g, ''));
        
        if (isYearly) {
          priceEl.textContent = '\$' + (basePrice * 12).toFixed(2);
          periodEl.textContent = 'per year';
        } else {
          priceEl.textContent = '\$' + basePrice.toFixed(2);
          periodEl.textContent = 'per month';
        }

        // Store the base price for future calculations
        priceEl.dataset.basePrice = basePrice;
      });
    }

    toggle?.addEventListener('click', function() {
      isYearly = !isYearly;
      this.setAttribute('aria-checked', isYearly);
      this.classList.toggle('price-toggle__switch--yearly', isYearly);
      
      // Update labels
      const monthlyLabel = document.querySelector('.price-toggle__label:first-of-type');
      const yearlyLabel = document.querySelector('.price-toggle__label:last-of-type');
      monthlyLabel.classList.toggle('price-toggle__label--active', !isYearly);
      yearlyLabel.classList.toggle('price-toggle__label--active', isYearly);
      
      updatePrices();
    });
  });
</script>
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
        return array (  161 => 91,  155 => 87,  148 => 86,  142 => 83,  138 => 80,  136 => 78,  135 => 77,  134 => 76,  131 => 75,  129 => 61,  126 => 60,  124 => 50,  118 => 46,  104 => 45,  101 => 44,  84 => 43,  81 => 42,  79 => 22,  75 => 20,  72 => 19,  70 => 18,  67 => 17,  64 => 15,  61 => 5,  59 => 4,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/base.twig' %}

{% block content %}
  {# Hero Section #}
  {% include 'components/hero/hero.twig' with {
    variant: 'side-by-side',
    image: '/pricing/desktop/hero.jpg',
    imageAlt: 'Professional camera on a tripod',
    title: 'Pricing',
    excerpt: 'Create a your stories, Photosnap is a platform for photographers and visual storytellers. It\\'s the simple way to create and share your photos.',
    backgroundColor: 'black',
    standout: true,
    short: true
  } %}

  {# Pricing Section #}
  <section class=\"pricing-section main-width\">
    {% set isYearly = false %}
    {% include 'components/price-toggle/price-toggle.twig' with { isYearly: isYearly } %}

    <div class=\"pricing-cards\">
      {% set plans = [
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

      {% for plan in plans %}
        {% include 'components/price-card/price-card.twig' with plan|merge({ isYearly: isYearly }) %}
      {% endfor %}
    </div>

    <h2 class=\"section-title h1\">Compare</h2>

    {% set features = [
      { title: 'UNLIMITED STORY POSTING' },
      { title: 'UNLIMITED PHOTO UPLOAD' },
      { title: 'EMBEDDING CUSTOM CONTENT' },
      { title: 'CUSTOMIZE METADATA' },
      { title: 'ADVANCED METRICS' },
      { title: 'PHOTO DOWNLOADS' },
      { title: 'SEARCH ENGINE INDEXING' },
      { title: 'CUSTOM ANALYTICS' }
    ] %}

    {% set featurePlans = [
      {
        name: 'Basic',
        features: [true, true, false, false, false, false, false, false]
      },
      {
        name: 'Pro',
        features: [true, true, true, true, true, false, false, false]
      },
      {
        name: 'Business',
        features: [true, true, true, true, true, true, true, true]
      }
    ] %}

    {% include 'components/feature-table/feature-table.twig' with {
      features: features,
      plans: featurePlans
    } %}
  </section>

  {# Beta Section #}
  {% include 'components/beta-section/beta-section.twig' %}
{% endblock %}

{% block scripts %}
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const toggle = document.querySelector('[data-action=\"toggle-billing\"]');
    const cards = document.querySelectorAll('.price-card');
    let isYearly = {{ isYearly ? 'true' : 'false' }};

    function updatePrices() {
      cards.forEach(card => {
        const priceEl = card.querySelector('.price-card__price');
        const periodEl = card.querySelector('.price-card__period');
        const basePrice = parseInt(priceEl.dataset.basePrice || priceEl.textContent.replace(/[^0-9]/g, ''));
        
        if (isYearly) {
          priceEl.textContent = '\$' + (basePrice * 12).toFixed(2);
          periodEl.textContent = 'per year';
        } else {
          priceEl.textContent = '\$' + basePrice.toFixed(2);
          periodEl.textContent = 'per month';
        }

        // Store the base price for future calculations
        priceEl.dataset.basePrice = basePrice;
      });
    }

    toggle?.addEventListener('click', function() {
      isYearly = !isYearly;
      this.setAttribute('aria-checked', isYearly);
      this.classList.toggle('price-toggle__switch--yearly', isYearly);
      
      // Update labels
      const monthlyLabel = document.querySelector('.price-toggle__label:first-of-type');
      const yearlyLabel = document.querySelector('.price-toggle__label:last-of-type');
      monthlyLabel.classList.toggle('price-toggle__label--active', !isYearly);
      yearlyLabel.classList.toggle('price-toggle__label--active', isYearly);
      
      updatePrices();
    });
  });
</script>
{% endblock %}", "pages/pricing.twig", "/Users/stevenportas/WorkBox/Sites/demos/demo-photosnap-twig/src/templates/pages/pricing.twig");
    }
}
