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

/* components/price-toggle/price-toggle.twig */
class __TwigTemplate_1803f54323b81e3d3d7d1998b49094db extends Template
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
<div class=\"price-toggle\" role=\"group\" aria-label=\"Billing frequency\">
  <span class=\"price-toggle__label";
        // line 7
        yield (( !($context["isYearly"] ?? null)) ? (" price-toggle__label--active") : (""));
        yield "\"
        ";
        // line 8
        if (($context["isYearly"] ?? null)) {
            yield "aria-hidden=\"true\"";
        }
        yield ">
    Monthly
  </span>

  <button class=\"price-toggle__switch";
        // line 12
        yield ((($context["isYearly"] ?? null)) ? (" price-toggle__switch--yearly") : (""));
        yield "\"
          data-action=\"toggle-billing\"
          aria-label=\"Toggle billing frequency\"
          role=\"switch\"
          aria-checked=\"";
        // line 16
        yield ((($context["isYearly"] ?? null)) ? ("true") : ("false"));
        yield "\">
    <span class=\"visually-hidden\">";
        // line 17
        yield ((($context["isYearly"] ?? null)) ? ("Switch to monthly billing") : ("Switch to yearly billing"));
        yield "</span>
    <span class=\"price-toggle__handle\" aria-hidden=\"true\"></span>
  </button>

  <span class=\"price-toggle__label";
        // line 21
        yield ((($context["isYearly"] ?? null)) ? (" price-toggle__label--active") : (""));
        yield "\"
        ";
        // line 22
        if ( !($context["isYearly"] ?? null)) {
            yield "aria-hidden=\"true\"";
        }
        yield ">
    Yearly
  </span>
</div>

";
        // line 28
        yield "<script>
  document.querySelector('[data-action=\"toggle-billing\"]').addEventListener('click', function() {
    // We'll need to add JavaScript to handle the toggle state and pricing updates
    // This will be handled by the page-level JavaScript
  });
</script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/price-toggle/price-toggle.twig";
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
        return array (  91 => 28,  81 => 22,  77 => 21,  70 => 17,  66 => 16,  59 => 12,  50 => 8,  46 => 7,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# 
  PriceToggle Component 
  @param {boolean} isYearly - Whether toggle is in yearly state
#}

<div class=\"price-toggle\" role=\"group\" aria-label=\"Billing frequency\">
  <span class=\"price-toggle__label{{ not isYearly ? ' price-toggle__label--active' }}\"
        {% if isYearly %}aria-hidden=\"true\"{% endif %}>
    Monthly
  </span>

  <button class=\"price-toggle__switch{{ isYearly ? ' price-toggle__switch--yearly' }}\"
          data-action=\"toggle-billing\"
          aria-label=\"Toggle billing frequency\"
          role=\"switch\"
          aria-checked=\"{{ isYearly ? 'true' : 'false' }}\">
    <span class=\"visually-hidden\">{{ isYearly ? 'Switch to monthly billing' : 'Switch to yearly billing' }}</span>
    <span class=\"price-toggle__handle\" aria-hidden=\"true\"></span>
  </button>

  <span class=\"price-toggle__label{{ isYearly ? ' price-toggle__label--active' }}\"
        {% if not isYearly %}aria-hidden=\"true\"{% endif %}>
    Yearly
  </span>
</div>

{# Add this script to initialize the toggle behavior #}
<script>
  document.querySelector('[data-action=\"toggle-billing\"]').addEventListener('click', function() {
    // We'll need to add JavaScript to handle the toggle state and pricing updates
    // This will be handled by the page-level JavaScript
  });
</script>", "components/price-toggle/price-toggle.twig", "/Users/stevenportas/WorkBox/Sites/demos/demo-photosnap-twig/src/templates/components/price-toggle/price-toggle.twig");
    }
}
