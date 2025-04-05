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

/* components/price-card/price-card.twig */
class __TwigTemplate_51bc67567cbaa294c442ea2a8661ee2a extends Template
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
        // line 9
        yield "
<div class=\"price-card";
        // line 10
        yield ((($context["popular"] ?? null)) ? (" price-card--popular") : (""));
        yield "\">
  <div class=\"price-card__content\">
    <h2 class=\"price-card__title\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</h2>
    <p class=\"price-card__description\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["description"] ?? null), "html", null, true);
        yield "</p>
    <div class=\"price-card__price-container\">
      <p class=\"price-card__price\" data-base-price=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["price"] ?? null), "html", null, true);
        yield "\">\$";
        yield ((($context["isYearly"] ?? null)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((($context["price"] ?? null) * 12), 2), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["price"] ?? null), 2), "html", null, true)));
        yield "</p>
      <p class=\"price-card__period\">per ";
        // line 16
        yield ((($context["isYearly"] ?? null)) ? ("year") : ("month"));
        yield "</p>
    </div>
    ";
        // line 18
        yield from $this->loadTemplate("components/button/button.twig", "components/price-card/price-card.twig", 18)->unwrap()->yield(CoreExtension::merge($context, ["text" => "Pick Plan", "variant" => "primary", "ariaLabel" => (("Pick " .         // line 21
($context["title"] ?? null)) . " plan"), "classes" => "price-card__button"]));
        // line 24
        yield "  </div>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/price-card/price-card.twig";
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
        return array (  73 => 24,  71 => 21,  70 => 18,  65 => 16,  59 => 15,  54 => 13,  50 => 12,  45 => 10,  42 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# 
  PriceCard Component
  @param {string} title - The plan title
  @param {string} description - The plan description
  @param {number} price - The plan price
  @param {boolean} isYearly - Whether to show yearly pricing
  @param {boolean} popular - Whether this is the popular plan
#}

<div class=\"price-card{{ popular ? ' price-card--popular' : '' }}\">
  <div class=\"price-card__content\">
    <h2 class=\"price-card__title\">{{ title }}</h2>
    <p class=\"price-card__description\">{{ description }}</p>
    <div class=\"price-card__price-container\">
      <p class=\"price-card__price\" data-base-price=\"{{ price }}\">\${{ isYearly ? (price * 12)|number_format(2) : price|number_format(2) }}</p>
      <p class=\"price-card__period\">per {{ isYearly ? 'year' : 'month' }}</p>
    </div>
    {% include 'components/button/button.twig' with {
      text: 'Pick Plan',
      variant: 'primary',
      ariaLabel: 'Pick ' ~ title ~ ' plan',
      classes: 'price-card__button'
    } %}
  </div>
</div>", "components/price-card/price-card.twig", "/Users/stevenportas/WorkBox/Sites/demos/demo-photosnap-twig/src/templates/components/price-card/price-card.twig");
    }
}
