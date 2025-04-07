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
        // line 19
        yield "
";
        // line 20
        $context["backgroundClass"] = (((($context["backgroundColor"] ?? null) == "black")) ? ("background--black") : ("background--white"));
        // line 21
        $context["imagePositionClass"] = ("image-" . ((array_key_exists("imagePosition", $context)) ? (Twig\Extension\CoreExtension::default(($context["imagePosition"] ?? null), "right")) : ("right")));
        // line 22
        $context["shortClass"] = ((($context["short"] ?? null)) ? ("short") : (""));
        // line 23
        $context["classes"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::join(["hero", ($context["variant"] ?? null), ($context["imagePositionClass"] ?? null), "full-width", ($context["backgroundClass"] ?? null), ($context["shortClass"] ?? null)], " "));
        // line 24
        yield "
<section class=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["classes"] ?? null), "html", null, true);
        yield "\" aria-labelledby=\"hero-title-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace(($context["title"] ?? null), [" " => "-"])), "html", null, true);
        yield "\">
\t<div class=\"imageContainer\" ";
        // line 26
        if ((($context["variant"] ?? null) == "overlay")) {
            yield " aria-hidden=\"true\" ";
        }
        yield ">
\t\t<img src=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["image"] ?? null), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["imageAlt"] ?? null), "html", null, true);
        yield "\" class=\"heroImage\" width=\"100%\" height=\"100%\" loading=\"eager\"/>
\t</div>

\t<div class=\"content\">
\t\t";
        // line 31
        if (($context["standout"] ?? null)) {
            // line 32
            yield "\t\t\t<div class=\"standout-content\" role=\"presentation\">
\t\t\t\t";
            // line 33
            yield $this->getTemplateForMacro("macro_content_block", $context, 33, $this->getSourceContext())->macro_content_block(...[$context]);
            yield "
\t\t\t</div>
\t\t";
        } else {
            // line 36
            yield "\t\t\t";
            yield $this->getTemplateForMacro("macro_content_block", $context, 36, $this->getSourceContext())->macro_content_block(...[$context]);
            yield "
\t\t";
        }
        // line 38
        yield "\t</div>
</section>

";
        yield from [];
    }

    // line 41
    public function macro_content_block($params = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "params" => $params,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 42
            yield "\t";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "eyebrow", [], "any", false, false, false, 42)) {
                // line 43
                yield "\t\t<p class=\"eyebrow h4\" aria-level=\"2\" role=\"heading\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "eyebrow", [], "any", false, false, false, 43), "html", null, true);
                yield "</p>
\t";
            }
            // line 45
            yield "
\t";
            // line 46
            $context["headingLevel"] = ((((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "isFirstSection", [], "any", true, true, false, 46)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "isFirstSection", [], "any", false, false, false, 46), false)) : (false))) ? ("h1") : ("h2"));
            // line 47
            yield "\t<";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["headingLevel"] ?? null), "html", null, true);
            yield " id=\"hero-title-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "title", [], "any", false, false, false, 47), [" " => "-"])), "html", null, true);
            yield "\" class=\"title ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "isFirstSection", [], "any", false, false, false, 47)) {
                yield "h1";
            }
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "title", [], "any", false, false, false, 47), "html", null, true);
            yield "</";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["headingLevel"] ?? null), "html", null, true);
            yield ">

\t";
            // line 49
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "date", [], "any", false, false, false, 49) || CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "author", [], "any", false, false, false, 49))) {
                // line 50
                yield "\t\t<div class=\"meta\">
\t\t\t";
                // line 51
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "date", [], "any", false, false, false, 51)) {
                    // line 52
                    yield "\t\t\t\t<time class=\"date\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "date", [], "any", false, false, false, 52), "html", null, true);
                    yield "</time>
\t\t\t";
                }
                // line 54
                yield "\t\t\t";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "author", [], "any", false, false, false, 54)) {
                    // line 55
                    yield "\t\t\t\t<span class=\"author\">
\t\t\t\t\t<span class=\"visually-hidden\">Article written
\t\t\t\t\t</span>
\t\t\t\t\tby
\t\t\t\t\t";
                    // line 59
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "author", [], "any", false, false, false, 59), "html", null, true);
                    yield "
\t\t\t\t</span>
\t\t\t";
                }
                // line 62
                yield "\t\t</div>
\t";
            }
            // line 64
            yield "
\t";
            // line 65
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "excerpt", [], "any", false, false, false, 65)) {
                // line 66
                yield "\t\t<p class=\"excerpt\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "excerpt", [], "any", false, false, false, 66), "html", null, true);
                yield "</p>
\t";
            }
            // line 68
            yield "
\t";
            // line 69
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "buttonText", [], "any", false, false, false, 69)) {
                // line 70
                yield "\t\t";
                yield from $this->loadTemplate("components/button/button.twig", "components/hero/hero.twig", 70)->unwrap()->yield(CoreExtension::merge($context, ["text" => CoreExtension::getAttribute($this->env, $this->source,                 // line 71
($context["params"] ?? null), "buttonText", [], "any", false, false, false, 71), "href" => CoreExtension::getAttribute($this->env, $this->source,                 // line 72
($context["params"] ?? null), "buttonHref", [], "any", false, false, false, 72), "variant" => "secondary", "ariaLabel" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 74
($context["params"] ?? null), "buttonText", [], "any", false, false, false, 74) . " - ") . CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "title", [], "any", false, false, false, 74))]));
                // line 76
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
        return array (  198 => 76,  196 => 74,  195 => 72,  194 => 71,  192 => 70,  190 => 69,  187 => 68,  181 => 66,  179 => 65,  176 => 64,  172 => 62,  166 => 59,  160 => 55,  157 => 54,  151 => 52,  149 => 51,  146 => 50,  144 => 49,  128 => 47,  126 => 46,  123 => 45,  117 => 43,  114 => 42,  102 => 41,  94 => 38,  88 => 36,  82 => 33,  79 => 32,  77 => 31,  68 => 27,  62 => 26,  56 => 25,  53 => 24,  51 => 23,  49 => 22,  47 => 21,  45 => 20,  42 => 19,);
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
  @param {boolean} isFirstSection - Whether this is the first section on the page
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

\t{% set headingLevel = params.isFirstSection|default(false) ? 'h1' : 'h2' %}
\t<{{ headingLevel }} id=\"hero-title-{{ params.title|replace({' ': '-'})|lower }}\" class=\"title {% if not params.isFirstSection %}h1{% endif %}\">{{ params.title }}</{{ headingLevel }}>

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
