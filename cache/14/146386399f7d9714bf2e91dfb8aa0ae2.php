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
<article class=\"feature-card\" aria-labelledby=\"feature-title-";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace(($context["title"] ?? null), [" " => "-"])), "html", null, true);
        yield "\">
\t";
        // line 12
        yield "\t";
        // line 13
        yield "\t\t<div class=\"feature-card__icon\" aria-hidden=\"true\"> <img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon"] ?? null), "html", null, true);
        yield "\" alt=\"\" width=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("width", $context)) ? (Twig\Extension\CoreExtension::default(($context["width"] ?? null), 72)) : (72)), "html", null, true);
        yield "\" height=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("height", $context)) ? (Twig\Extension\CoreExtension::default(($context["height"] ?? null), 72)) : (72)), "html", null, true);
        yield "\" aria-hidden=\"true\"/>
\t</div>
\t<h3 class=\"feature-card__title\" id=\"feature-title-";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace(($context["title"] ?? null), [" " => "-"])), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</h3>
\t<p class=\"feature-card__description\" style=\"color: var(--text-muted)\">
\t\t";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["description"] ?? null), "html", null, true);
        yield "
\t</p>
</article>
";
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
        return array (  68 => 17,  61 => 15,  51 => 13,  49 => 12,  45 => 10,  42 => 9,);
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

<article class=\"feature-card\" aria-labelledby=\"feature-title-{{ title|replace({' ': '-'})|lower }}\">
\t{# The article element is used to indicate that this is a self-contained piece of content #}
\t{# The aria-labelledby attribute associates the title with the article for screen readers #}
\t\t<div class=\"feature-card__icon\" aria-hidden=\"true\"> <img src=\"{{ icon }}\" alt=\"\" width=\"{{ width|default(72) }}\" height=\"{{ height|default(72) }}\" aria-hidden=\"true\"/>
\t</div>
\t<h3 class=\"feature-card__title\" id=\"feature-title-{{ title|replace({' ': '-'})|lower }}\">{{ title }}</h3>
\t<p class=\"feature-card__description\" style=\"color: var(--text-muted)\">
\t\t{{ description }}
\t</p>
</article>
", "components/feature-card/feature-card.twig", "/Users/stevenportas/WorkBox/Sites/demos/demo-photosnap-twig/src/templates/components/feature-card/feature-card.twig");
    }
}
