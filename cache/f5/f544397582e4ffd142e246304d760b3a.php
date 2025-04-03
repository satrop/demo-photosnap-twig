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

/* components/button/button.twig */
class __TwigTemplate_0eeeb7f9a9a1e8114c11773e32eea803 extends Template
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
        // line 11
        yield "
";
        // line 12
        $context["buttonClass"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::join(["button", ("button--" . ((array_key_exists("variant", $context)) ? (Twig\Extension\CoreExtension::default(($context["variant"] ?? null), "primary")) : ("primary"))), ((array_key_exists("class", $context)) ? (Twig\Extension\CoreExtension::default(($context["class"] ?? null), "")) : (""))], " "));
        // line 13
        yield "
";
        // line 14
        if (($context["href"] ?? null)) {
            // line 15
            yield "  <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["href"] ?? null), "html", null, true);
            yield "\"
     class=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["buttonClass"] ?? null), "html", null, true);
            yield "\"
     aria-label=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ariaLabel"] ?? null), "html", null, true);
            yield "\"
     ";
            // line 18
            if (($context["ariaHidden"] ?? null)) {
                yield "aria-hidden=\"true\"";
            }
            // line 19
            yield "     ";
            if (array_key_exists("tabindex", $context)) {
                yield "tabindex=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tabindex"] ?? null), "html", null, true);
                yield "\"";
            }
            yield ">
    ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text"] ?? null), "html", null, true);
            yield "
    ";
            // line 21
            if ((($context["variant"] ?? null) == "secondary")) {
                // line 22
                yield "      <span></span>
    ";
            }
            // line 24
            yield "  </a>
";
        } else {
            // line 26
            yield "  <button type=\"button\"
          class=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["buttonClass"] ?? null), "html", null, true);
            yield "\"
          aria-label=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ariaLabel"] ?? null), "html", null, true);
            yield "\"
          ";
            // line 29
            if (($context["ariaHidden"] ?? null)) {
                yield "aria-hidden=\"true\"";
            }
            // line 30
            yield "          ";
            if (array_key_exists("tabindex", $context)) {
                yield "tabindex=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tabindex"] ?? null), "html", null, true);
                yield "\"";
            }
            yield ">
    ";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text"] ?? null), "html", null, true);
            yield "
    ";
            // line 32
            if ((($context["variant"] ?? null) == "secondary")) {
                // line 33
                yield "      <span></span>
    ";
            }
            // line 35
            yield "  </button>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/button/button.twig";
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
        return array (  126 => 35,  122 => 33,  120 => 32,  116 => 31,  107 => 30,  103 => 29,  99 => 28,  95 => 27,  92 => 26,  88 => 24,  84 => 22,  82 => 21,  78 => 20,  69 => 19,  65 => 18,  61 => 17,  57 => 16,  52 => 15,  50 => 14,  47 => 13,  45 => 12,  42 => 11,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# 
  Button Component
  @param {string} text - The button text
  @param {string} variant - The button variant (primary|secondary)
  @param {string} href - Optional URL to make the button a link
  @param {string} ariaLabel - The aria-label for accessibility
  @param {string} class - Optional additional classes
  @param {boolean} ariaHidden - Optional aria-hidden attribute
  @param {number} tabindex - Optional tabindex value
#}

{% set buttonClass = ['button', 'button--' ~ variant|default('primary'), class|default('')]|join(' ')|trim %}

{% if href %}
  <a href=\"{{ href }}\"
     class=\"{{ buttonClass }}\"
     aria-label=\"{{ ariaLabel }}\"
     {% if ariaHidden %}aria-hidden=\"true\"{% endif %}
     {% if tabindex is defined %}tabindex=\"{{ tabindex }}\"{% endif %}>
    {{ text }}
    {% if variant == 'secondary' %}
      <span></span>
    {% endif %}
  </a>
{% else %}
  <button type=\"button\"
          class=\"{{ buttonClass }}\"
          aria-label=\"{{ ariaLabel }}\"
          {% if ariaHidden %}aria-hidden=\"true\"{% endif %}
          {% if tabindex is defined %}tabindex=\"{{ tabindex }}\"{% endif %}>
    {{ text }}
    {% if variant == 'secondary' %}
      <span></span>
    {% endif %}
  </button>
{% endif %}
", "components/button/button.twig", "/Users/stevenportas/WorkBox/Sites/demos/demo-photosnap-twig/src/templates/components/button/button.twig");
    }
}
