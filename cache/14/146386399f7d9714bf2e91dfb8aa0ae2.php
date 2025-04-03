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

/* components/feature-card/feature-card.twig */
class __TwigTemplate_9edf02a776ce74eef5a9b242f7513e7b extends Template
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
<article class=\"feature-card\">
  <div class=\"feature-card__icon\" aria-hidden=\"true\">
    <img src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon"] ?? null), "html", null, true);
        yield "\"
         alt=\"\"
         width=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("width", $context)) ? (Twig\Extension\CoreExtension::default(($context["width"] ?? null), 72)) : (72)), "html", null, true);
        yield "\"
         height=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("height", $context)) ? (Twig\Extension\CoreExtension::default(($context["height"] ?? null), 72)) : (72)), "html", null, true);
        yield "\"
         aria-hidden=\"true\"
    />
  </div>
  <h3 class=\"feature-card__title\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</h3>
  <p class=\"feature-card__description\" style=\"color: var(--text-muted)\">
    ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["description"] ?? null), "html", null, true);
        yield "
  </p>
</article>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/feature-card/feature-card.twig";
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
        return array (  68 => 21,  63 => 19,  56 => 15,  52 => 14,  47 => 12,  42 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# 
  FeatureCard Component
  @param {string} icon - The icon URL
  @param {string} title - The feature title
  @param {string} description - The feature description
  @param {number} width - Optional icon width
  @param {number} height - Optional icon height
#}

<article class=\"feature-card\">
  <div class=\"feature-card__icon\" aria-hidden=\"true\">
    <img src=\"{{ icon }}\"
         alt=\"\"
         width=\"{{ width|default(72) }}\"
         height=\"{{ height|default(72) }}\"
         aria-hidden=\"true\"
    />
  </div>
  <h3 class=\"feature-card__title\">{{ title }}</h3>
  <p class=\"feature-card__description\" style=\"color: var(--text-muted)\">
    {{ description }}
  </p>
</article>", "components/feature-card/feature-card.twig", "/Users/stevenportas/WorkBox/Sites/demos/demo-photosnap-twig/src/templates/components/feature-card/feature-card.twig");
    }
}
