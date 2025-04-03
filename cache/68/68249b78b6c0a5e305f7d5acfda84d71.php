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
";
        // line 10
        $context["yearlyPrice"] = (($context["price"] ?? null) * 12);
        // line 11
        $context["currentPrice"] = ((($context["isYearly"] ?? null)) ? (($context["yearlyPrice"] ?? null)) : (($context["price"] ?? null)));
        // line 12
        yield "
<div class=\"price-card";
        // line 13
        yield ((($context["popular"] ?? null)) ? (" price-card--popular") : (""));
        yield "\">
  <div class=\"price-card__content\">
    <h2 class=\"price-card__title\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</h2>
    <p class=\"price-card__description\">";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["description"] ?? null), "html", null, true);
        yield "</p>
    <div class=\"price-card__price-container\">
      <p class=\"price-card__price\">\$";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", ($context["currentPrice"] ?? null)), "html", null, true);
        yield "</p>
      <p class=\"price-card__period\">per ";
        // line 19
        yield ((($context["isYearly"] ?? null)) ? ("year") : ("month"));
        yield "</p>
    </div>
    ";
        // line 21
        yield from $this->loadTemplate("components/button/button.twig", "components/price-card/price-card.twig", 21)->unwrap()->yield(CoreExtension::merge($context, ["text" => "Pick Plan", "variant" => "primary", "ariaLabel" => (("Pick " .         // line 24
($context["title"] ?? null)) . " plan"), "class" => "price-card__button"]));
        // line 27
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
        return array (  78 => 27,  76 => 24,  75 => 21,  70 => 19,  66 => 18,  61 => 16,  57 => 15,  52 => 13,  49 => 12,  47 => 11,  45 => 10,  42 => 9,);
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

{% set yearlyPrice = price * 12 %}
{% set currentPrice = isYearly ? yearlyPrice : price %}

<div class=\"price-card{{ popular ? ' price-card--popular' : '' }}\">
  <div class=\"price-card__content\">
    <h2 class=\"price-card__title\">{{ title }}</h2>
    <p class=\"price-card__description\">{{ description }}</p>
    <div class=\"price-card__price-container\">
      <p class=\"price-card__price\">\${{ '%0.2f'|format(currentPrice) }}</p>
      <p class=\"price-card__period\">per {{ isYearly ? 'year' : 'month' }}</p>
    </div>
    {% include 'components/button/button.twig' with {
      text: 'Pick Plan',
      variant: 'primary',
      ariaLabel: 'Pick ' ~ title ~ ' plan',
      class: 'price-card__button'
    } %}
  </div>
</div>", "components/price-card/price-card.twig", "/Users/stevenportas/WorkBox/Sites/demos/demo-photosnap-twig/src/templates/components/price-card/price-card.twig");
    }
}
