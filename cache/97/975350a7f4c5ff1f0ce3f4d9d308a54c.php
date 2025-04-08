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
        // line 20
        yield "
";
        // line 21
        $context["backgroundClass"] = (((($context["backgroundColor"] ?? null) == "black")) ? ("background--black") : ("background--white"));
        // line 22
        $context["imagePositionClass"] = ("image-" . ((array_key_exists("imagePosition", $context)) ? (Twig\Extension\CoreExtension::default(($context["imagePosition"] ?? null), "right")) : ("right")));
        // line 23
        $context["shortClass"] = ((($context["short"] ?? null)) ? ("short") : (""));
        // line 24
        $context["classes"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::join(["hero", ($context["variant"] ?? null), ($context["imagePositionClass"] ?? null), "full-width", ($context["backgroundClass"] ?? null), ($context["shortClass"] ?? null)], " "));
        // line 25
        yield "
<section class=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["classes"] ?? null), "html", null, true);
        yield "\" aria-labelledby=\"hero-title-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace(($context["title"] ?? null), [" " => "-"])), "html", null, true);
        yield "\">
\t<div class=\"imageContainer\" ";
        // line 27
        if ((($context["variant"] ?? null) == "overlay")) {
            yield " aria-hidden=\"true\" ";
        }
        yield ">
\t\t<picture>
\t\t\t<source srcset=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["image"] ?? null), "html", null, true);
        yield ".webp\" media=\"(max-width: 767px)\" type=\"image/webp\">
\t\t\t<source srcset=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["image"] ?? null), "html", null, true);
        yield ".jpg\" media=\"(max-width: 767px)\" type=\"image/jpeg\">
\t\t\t<source srcset=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["image"] ?? null), "html", null, true);
        yield ".webp\" type=\"image/webp\">
\t\t\t<img src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["image"] ?? null), "html", null, true);
        yield ".webp\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["imageAlt"] ?? null), "html", null, true);
        yield "\" class=\"heroImage\">
\t\t</picture>
\t</div>

\t<div class=\"content\">
\t\t";
        // line 37
        if (($context["standout"] ?? null)) {
            // line 38
            yield "\t\t\t<div class=\"standout-content\" role=\"presentation\">
\t\t\t\t";
            // line 39
            yield $this->getTemplateForMacro("macro_content_block", $context, 39, $this->getSourceContext())->macro_content_block(...[$context]);
            yield "
\t\t\t</div>
\t\t";
        } else {
            // line 42
            yield "\t\t\t";
            yield $this->getTemplateForMacro("macro_content_block", $context, 42, $this->getSourceContext())->macro_content_block(...[$context]);
            yield "
\t\t";
        }
        // line 44
        yield "\t</div>
</section>

";
        yield from [];
    }

    // line 47
    public function macro_content_block($params = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "params" => $params,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 48
            yield "\t";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "eyebrow", [], "any", false, false, false, 48)) {
                // line 49
                yield "\t\t<p class=\"eyebrow h4\" aria-level=\"2\" role=\"heading\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "eyebrow", [], "any", false, false, false, 49), "html", null, true);
                yield "</p>
\t";
            }
            // line 51
            yield "
\t";
            // line 52
            $context["headingLevel"] = ((((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "isFirstSection", [], "any", true, true, false, 52)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "isFirstSection", [], "any", false, false, false, 52), false)) : (false))) ? ("h1") : ("h2"));
            // line 53
            yield "\t<";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["headingLevel"] ?? null), "html", null, true);
            yield " id=\"hero-title-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "title", [], "any", false, false, false, 53), [" " => "-"])), "html", null, true);
            yield "\" class=\"title ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "isFirstSection", [], "any", false, false, false, 53)) {
                yield "h1";
            }
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "title", [], "any", false, false, false, 53), "html", null, true);
            yield "</";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["headingLevel"] ?? null), "html", null, true);
            yield ">

\t";
            // line 55
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "date", [], "any", false, false, false, 55) || CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "author", [], "any", false, false, false, 55))) {
                // line 56
                yield "\t\t<div class=\"meta\">
\t\t\t";
                // line 57
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "date", [], "any", false, false, false, 57)) {
                    // line 58
                    yield "\t\t\t\t<time class=\"date\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "date", [], "any", false, false, false, 58), "html", null, true);
                    yield "</time>
\t\t\t";
                }
                // line 60
                yield "\t\t\t";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "author", [], "any", false, false, false, 60)) {
                    // line 61
                    yield "\t\t\t\t<span class=\"author\">
\t\t\t\t\t<span class=\"visually-hidden\">Article written
\t\t\t\t\t</span>
\t\t\t\t\tby
\t\t\t\t\t";
                    // line 65
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "author", [], "any", false, false, false, 65), "html", null, true);
                    yield "
\t\t\t\t</span>
\t\t\t";
                }
                // line 68
                yield "\t\t</div>
\t";
            }
            // line 70
            yield "
\t";
            // line 71
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "excerpt", [], "any", false, false, false, 71)) {
                // line 72
                yield "\t\t<p class=\"excerpt\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "excerpt", [], "any", false, false, false, 72), "html", null, true);
                yield "</p>
\t";
            }
            // line 74
            yield "
\t";
            // line 75
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "buttonText", [], "any", false, false, false, 75)) {
                // line 76
                yield "\t\t";
                yield from $this->loadTemplate("components/button/button.twig", "components/hero/hero.twig", 76)->unwrap()->yield(CoreExtension::merge($context, ["text" => CoreExtension::getAttribute($this->env, $this->source,                 // line 77
($context["params"] ?? null), "buttonText", [], "any", false, false, false, 77), "href" => CoreExtension::getAttribute($this->env, $this->source,                 // line 78
($context["params"] ?? null), "buttonHref", [], "any", false, false, false, 78), "variant" => "secondary", "ariaLabel" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 80
($context["params"] ?? null), "buttonText", [], "any", false, false, false, 80) . " - ") . CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "title", [], "any", false, false, false, 80))]));
                // line 82
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
        return array (  212 => 82,  210 => 80,  209 => 78,  208 => 77,  206 => 76,  204 => 75,  201 => 74,  195 => 72,  193 => 71,  190 => 70,  186 => 68,  180 => 65,  174 => 61,  171 => 60,  165 => 58,  163 => 57,  160 => 56,  158 => 55,  142 => 53,  140 => 52,  137 => 51,  131 => 49,  128 => 48,  116 => 47,  108 => 44,  102 => 42,  96 => 39,  93 => 38,  91 => 37,  81 => 32,  77 => 31,  73 => 30,  69 => 29,  62 => 27,  56 => 26,  53 => 25,  51 => 24,  49 => 23,  47 => 22,  45 => 21,  42 => 20,);
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
  @param {string} imageFolder - Optional image folder path
#}

{% set backgroundClass = backgroundColor == 'black' ? 'background--black' : 'background--white' %}
{% set imagePositionClass = 'image-' ~ (imagePosition|default('right')) %}
{% set shortClass = short ? 'short' : '' %}
{% set classes = ['hero', variant, imagePositionClass, 'full-width', backgroundClass, shortClass]|join(' ')|trim %}

<section class=\"{{ classes }}\" aria-labelledby=\"hero-title-{{ title|replace({' ': '-'})|lower }}\">
\t<div class=\"imageContainer\" {% if variant == 'overlay' %} aria-hidden=\"true\" {% endif %}>
\t\t<picture>
\t\t\t<source srcset=\"{{ image }}.webp\" media=\"(max-width: 767px)\" type=\"image/webp\">
\t\t\t<source srcset=\"{{ image }}.jpg\" media=\"(max-width: 767px)\" type=\"image/jpeg\">
\t\t\t<source srcset=\"{{ image }}.webp\" type=\"image/webp\">
\t\t\t<img src=\"{{ image }}.webp\" alt=\"{{ imageAlt }}\" class=\"heroImage\">
\t\t</picture>
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
