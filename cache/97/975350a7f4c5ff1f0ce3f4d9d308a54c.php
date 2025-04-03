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

/* components/hero/hero.twig */
class __TwigTemplate_6dc431587667dbd52804603acffa5546 extends Template
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
        // line 18
        yield "
";
        // line 19
        $context["backgroundClass"] = (((($context["backgroundColor"] ?? null) == "black")) ? ("background--black") : ("background--white"));
        // line 20
        $context["imagePositionClass"] = ("image-" . ((array_key_exists("imagePosition", $context)) ? (Twig\Extension\CoreExtension::default(($context["imagePosition"] ?? null), "right")) : ("right")));
        // line 21
        $context["shortClass"] = ((($context["short"] ?? null)) ? ("short") : (""));
        // line 22
        $context["classes"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::join(["hero", ($context["variant"] ?? null), ($context["imagePositionClass"] ?? null), "full-width", ($context["backgroundClass"] ?? null), ($context["shortClass"] ?? null)], " "));
        // line 23
        yield "
<section class=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["classes"] ?? null), "html", null, true);
        yield "\" aria-labelledby=\"hero-title-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace(($context["title"] ?? null), [" " => "-"])), "html", null, true);
        yield "\">
\t<div class=\"imageContainer\" ";
        // line 25
        if ((($context["variant"] ?? null) == "overlay")) {
            yield " aria-hidden=\"true\" ";
        }
        yield ">
\t\t<img src=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["image"] ?? null), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["imageAlt"] ?? null), "html", null, true);
        yield "\" class=\"heroImage\" width=\"100%\" height=\"100%\" loading=\"eager\"/>
\t</div>

\t<div class=\"content\">
\t\t";
        // line 30
        if (($context["standout"] ?? null)) {
            // line 31
            yield "\t\t\t<div class=\"standout-content\" role=\"presentation\">
\t\t\t\t";
            // line 32
            yield $this->getTemplateForMacro("macro_content_block", $context, 32, $this->getSourceContext())->macro_content_block(...[$context]);
            yield "
\t\t\t</div>
\t\t";
        } else {
            // line 35
            yield "\t\t\t";
            yield $this->getTemplateForMacro("macro_content_block", $context, 35, $this->getSourceContext())->macro_content_block(...[$context]);
            yield "
\t\t";
        }
        // line 37
        yield "\t</div>
</section>

";
        yield from [];
    }

    // line 40
    public function macro_content_block($params = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "params" => $params,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 41
            yield "\t";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "eyebrow", [], "any", false, false, false, 41)) {
                // line 42
                yield "\t\t<p class=\"eyebrow h4\" aria-level=\"2\" role=\"heading\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "eyebrow", [], "any", false, false, false, 42), "html", null, true);
                yield "</p>
\t";
            }
            // line 44
            yield "
\t<h1 id=\"hero-title-";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "title", [], "any", false, false, false, 45), [" " => "-"])), "html", null, true);
            yield "\" class=\"title\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "title", [], "any", false, false, false, 45), "html", null, true);
            yield "</h1>

\t";
            // line 47
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "date", [], "any", false, false, false, 47) || CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "author", [], "any", false, false, false, 47))) {
                // line 48
                yield "\t\t<div class=\"meta\">
\t\t\t";
                // line 49
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "date", [], "any", false, false, false, 49)) {
                    // line 50
                    yield "\t\t\t\t<time class=\"date\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "date", [], "any", false, false, false, 50), "html", null, true);
                    yield "</time>
\t\t\t";
                }
                // line 52
                yield "\t\t\t";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "author", [], "any", false, false, false, 52)) {
                    // line 53
                    yield "\t\t\t\t<span class=\"author\">
\t\t\t\t\t<span class=\"visually-hidden\">Article written
\t\t\t\t\t</span>
\t\t\t\t\tby
\t\t\t\t\t";
                    // line 57
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "author", [], "any", false, false, false, 57), "html", null, true);
                    yield "
\t\t\t\t</span>
\t\t\t";
                }
                // line 60
                yield "\t\t</div>
\t";
            }
            // line 62
            yield "
\t";
            // line 63
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "excerpt", [], "any", false, false, false, 63)) {
                // line 64
                yield "\t\t<p class=\"excerpt\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "excerpt", [], "any", false, false, false, 64), "html", null, true);
                yield "</p>
\t";
            }
            // line 66
            yield "
\t";
            // line 67
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "buttonText", [], "any", false, false, false, 67)) {
                // line 68
                yield "\t\t";
                yield from $this->loadTemplate("components/button/button.twig", "components/hero/hero.twig", 68)->unwrap()->yield(CoreExtension::merge($context, ["text" => CoreExtension::getAttribute($this->env, $this->source,                 // line 69
($context["params"] ?? null), "buttonText", [], "any", false, false, false, 69), "href" => CoreExtension::getAttribute($this->env, $this->source,                 // line 70
($context["params"] ?? null), "buttonHref", [], "any", false, false, false, 70), "variant" => "secondary", "ariaLabel" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 72
($context["params"] ?? null), "buttonText", [], "any", false, false, false, 72) . " - ") . CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "title", [], "any", false, false, false, 72))]));
                // line 74
                yield "\t";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/hero/hero.twig";
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
        return array (  187 => 74,  185 => 72,  184 => 70,  183 => 69,  181 => 68,  179 => 67,  176 => 66,  170 => 64,  168 => 63,  165 => 62,  161 => 60,  155 => 57,  149 => 53,  146 => 52,  140 => 50,  138 => 49,  135 => 48,  133 => 47,  126 => 45,  123 => 44,  117 => 42,  114 => 41,  102 => 40,  94 => 37,  88 => 35,  82 => 32,  79 => 31,  77 => 30,  68 => 26,  62 => 25,  56 => 24,  53 => 23,  51 => 22,  49 => 21,  47 => 20,  45 => 19,  42 => 18,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# 
  Hero Component
  @param {string} image - The image URL
  @param {string} imageAlt - The image alt text
  @param {string} title - The hero title
  @param {string} excerpt - Optional excerpt text
  @param {string} eyebrow - Optional eyebrow text
  @param {string} date - Optional date
  @param {string} author - Optional author
  @param {string} buttonText - Optional button text
  @param {string} buttonHref - Optional button URL
  @param {string} variant - Variant type (overlay|side-by-side)
  @param {string} imagePosition - Image position (left|right)
  @param {string} backgroundColor - Background color (black|white)
  @param {boolean} standout - Whether to show standout content
  @param {boolean} short - Whether to show short version
#}

{% set backgroundClass = backgroundColor == 'black' ? 'background--black' : 'background--white' %}
{% set imagePositionClass = 'image-' ~ (imagePosition|default('right')) %}
{% set shortClass = short ? 'short' : '' %}
{% set classes = ['hero', variant, imagePositionClass, 'full-width', backgroundClass, shortClass]|join(' ')|trim %}

<section class=\"{{ classes }}\" aria-labelledby=\"hero-title-{{ title|replace({' ': '-'})|lower }}\">
\t<div class=\"imageContainer\" {% if variant == 'overlay' %} aria-hidden=\"true\" {% endif %}>
\t\t<img src=\"{{ image }}\" alt=\"{{ imageAlt }}\" class=\"heroImage\" width=\"100%\" height=\"100%\" loading=\"eager\"/>
\t</div>

\t<div class=\"content\">
\t\t{% if standout %}
\t\t\t<div class=\"standout-content\" role=\"presentation\">
\t\t\t\t{{ _self.content_block(_context) }}
\t\t\t</div>
\t\t{% else %}
\t\t\t{{ _self.content_block(_context) }}
\t\t{% endif %}
\t</div>
</section>

{% macro content_block(params) %}
\t{% if params.eyebrow %}
\t\t<p class=\"eyebrow h4\" aria-level=\"2\" role=\"heading\">{{ params.eyebrow }}</p>
\t{% endif %}

\t<h1 id=\"hero-title-{{ params.title|replace({' ': '-'})|lower }}\" class=\"title\">{{ params.title }}</h1>

\t{% if params.date or params.author %}
\t\t<div class=\"meta\">
\t\t\t{% if params.date %}
\t\t\t\t<time class=\"date\">{{ params.date }}</time>
\t\t\t{% endif %}
\t\t\t{% if params.author %}
\t\t\t\t<span class=\"author\">
\t\t\t\t\t<span class=\"visually-hidden\">Article written
\t\t\t\t\t</span>
\t\t\t\t\tby
\t\t\t\t\t{{ params.author }}
\t\t\t\t</span>
\t\t\t{% endif %}
\t\t</div>
\t{% endif %}

\t{% if params.excerpt %}
\t\t<p class=\"excerpt\">{{ params.excerpt }}</p>
\t{% endif %}

\t{% if params.buttonText %}
\t\t{% include 'components/button/button.twig' with {
      text: params.buttonText,
      href: params.buttonHref,
      variant: 'secondary',
      ariaLabel: params.buttonText ~ ' - ' ~ params.title
    } %}
\t{% endif %}
{% endmacro %}
", "components/hero/hero.twig", "/Users/stevenportas/WorkBox/Sites/demos/demo-photosnap-twig/src/templates/components/hero/hero.twig");
    }
}
