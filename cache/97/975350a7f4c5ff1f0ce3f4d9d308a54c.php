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
";
        // line 26
        $macros["images"] = $this->macros["images"] = $this->loadTemplate("macros/responsive-image.twig", "components/hero/hero.twig", 26)->unwrap();
        // line 27
        yield "
<section class=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["classes"] ?? null), "html", null, true);
        yield "\" aria-labelledby=\"hero-title-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace(($context["title"] ?? null), [" " => "-"])), "html", null, true);
        yield "\">
\t<div class=\"imageContainer\" ";
        // line 29
        if ((($context["variant"] ?? null) == "overlay")) {
            yield " aria-hidden=\"true\" ";
        }
        yield ">
\t\t";
        // line 31
        yield "
\t\t";
        // line 32
        yield $macros["images"]->getTemplateForMacro("macro_responsiveImage", $context, 32, $this->getSourceContext())->macro_responsiveImage(...[        // line 33
($context["image"] ?? null), "", "heroImage", true, true, "home"]);
        // line 39
        yield "
\t</div>

\t<div class=\"content\">
\t\t";
        // line 43
        if (($context["standout"] ?? null)) {
            // line 44
            yield "\t\t\t<div class=\"standout-content\" role=\"presentation\">
\t\t\t\t";
            // line 45
            yield $this->getTemplateForMacro("macro_content_block", $context, 45, $this->getSourceContext())->macro_content_block(...[$context]);
            yield "
\t\t\t</div>
\t\t";
        } else {
            // line 48
            yield "\t\t\t";
            yield $this->getTemplateForMacro("macro_content_block", $context, 48, $this->getSourceContext())->macro_content_block(...[$context]);
            yield "
\t\t";
        }
        // line 50
        yield "\t</div>
</section>

";
        yield from [];
    }

    // line 53
    public function macro_content_block($params = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "params" => $params,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 54
            yield "\t";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "eyebrow", [], "any", false, false, false, 54)) {
                // line 55
                yield "\t\t<p class=\"eyebrow h4\" aria-level=\"2\" role=\"heading\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "eyebrow", [], "any", false, false, false, 55), "html", null, true);
                yield "</p>
\t";
            }
            // line 57
            yield "
\t";
            // line 58
            $context["headingLevel"] = ((((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "isFirstSection", [], "any", true, true, false, 58)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "isFirstSection", [], "any", false, false, false, 58), false)) : (false))) ? ("h1") : ("h2"));
            // line 59
            yield "\t<";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["headingLevel"] ?? null), "html", null, true);
            yield " id=\"hero-title-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "title", [], "any", false, false, false, 59), [" " => "-"])), "html", null, true);
            yield "\" class=\"title ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "isFirstSection", [], "any", false, false, false, 59)) {
                yield "h1";
            }
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "title", [], "any", false, false, false, 59), "html", null, true);
            yield "</";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["headingLevel"] ?? null), "html", null, true);
            yield ">

\t";
            // line 61
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "date", [], "any", false, false, false, 61) || CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "author", [], "any", false, false, false, 61))) {
                // line 62
                yield "\t\t<div class=\"meta\">
\t\t\t";
                // line 63
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "date", [], "any", false, false, false, 63)) {
                    // line 64
                    yield "\t\t\t\t<time class=\"date\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "date", [], "any", false, false, false, 64), "html", null, true);
                    yield "</time>
\t\t\t";
                }
                // line 66
                yield "\t\t\t";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "author", [], "any", false, false, false, 66)) {
                    // line 67
                    yield "\t\t\t\t<span class=\"author\">
\t\t\t\t\t<span class=\"visually-hidden\">Article written
\t\t\t\t\t</span>
\t\t\t\t\tby
\t\t\t\t\t";
                    // line 71
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "author", [], "any", false, false, false, 71), "html", null, true);
                    yield "
\t\t\t\t</span>
\t\t\t";
                }
                // line 74
                yield "\t\t</div>
\t";
            }
            // line 76
            yield "
\t";
            // line 77
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "excerpt", [], "any", false, false, false, 77)) {
                // line 78
                yield "\t\t<p class=\"excerpt\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "excerpt", [], "any", false, false, false, 78), "html", null, true);
                yield "</p>
\t";
            }
            // line 80
            yield "
\t";
            // line 81
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "buttonText", [], "any", false, false, false, 81)) {
                // line 82
                yield "\t\t";
                yield from $this->loadTemplate("components/button/button.twig", "components/hero/hero.twig", 82)->unwrap()->yield(CoreExtension::merge($context, ["text" => CoreExtension::getAttribute($this->env, $this->source,                 // line 83
($context["params"] ?? null), "buttonText", [], "any", false, false, false, 83), "href" => CoreExtension::getAttribute($this->env, $this->source,                 // line 84
($context["params"] ?? null), "buttonHref", [], "any", false, false, false, 84), "variant" => "secondary", "ariaLabel" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 86
($context["params"] ?? null), "buttonText", [], "any", false, false, false, 86) . " - ") . CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "title", [], "any", false, false, false, 86))]));
                // line 88
                yield "\t";
            }
            // line 89
            yield "
    ";
            // line 91
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "imageFolder", [], "any", false, false, false, 91) && CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "image", [], "any", false, false, false, 91))) {
                // line 92
                yield "        <div class=\"dynamic-image\">
            ";
                // line 93
                yield $macros["images"]->getTemplateForMacro("macro_responsiveImage", $context, 93, $this->getSourceContext())->macro_responsiveImage(...[((CoreExtension::getAttribute($this->env, $this->source,                 // line 94
($context["params"] ?? null), "imageFolder", [], "any", false, false, false, 94) . "/") . CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "image", [], "any", false, false, false, 94)), ((CoreExtension::getAttribute($this->env, $this->source,                 // line 95
($context["params"] ?? null), "imageAlt", [], "any", true, true, false, 95)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "imageAlt", [], "any", false, false, false, 95), "")) : ("")), "heroImage", true, true]);
                // line 99
                yield "
        </div>
    ";
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
        return array (  222 => 99,  220 => 95,  219 => 94,  218 => 93,  215 => 92,  212 => 91,  209 => 89,  206 => 88,  204 => 86,  203 => 84,  202 => 83,  200 => 82,  198 => 81,  195 => 80,  189 => 78,  187 => 77,  184 => 76,  180 => 74,  174 => 71,  168 => 67,  165 => 66,  159 => 64,  157 => 63,  154 => 62,  152 => 61,  136 => 59,  134 => 58,  131 => 57,  125 => 55,  122 => 54,  110 => 53,  102 => 50,  96 => 48,  90 => 45,  87 => 44,  85 => 43,  79 => 39,  77 => 33,  76 => 32,  73 => 31,  67 => 29,  61 => 28,  58 => 27,  56 => 26,  53 => 25,  51 => 24,  49 => 23,  47 => 22,  45 => 21,  42 => 20,);
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

{% import \"macros/responsive-image.twig\" as images %}

<section class=\"{{ classes }}\" aria-labelledby=\"hero-title-{{ title|replace({' ': '-'})|lower }}\">
\t<div class=\"imageContainer\" {% if variant == 'overlay' %} aria-hidden=\"true\" {% endif %}>
\t\t{# <img src=\"{{ image }}\" alt=\"{{ imageAlt }}\" class=\"heroImage\" width=\"100%\" height=\"100%\" loading=\"eager\"/> #}

\t\t{{ images.responsiveImage(
\t\t\t\timage,
\t\t\t\t'',
\t\t\t\t'heroImage',
\t\t\t\ttrue,
\t\t\t\ttrue,
\t\t\t\t'home'
\t\t\t) }}
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

    {# Dynamically set the image path based on the `imageFolder` parameter #}
    {% if params.imageFolder and params.image %}
        <div class=\"dynamic-image\">
            {{ images.responsiveImage(
                params.imageFolder ~ '/' ~ params.image,
                params.imageAlt|default(''),
                'heroImage',
                true,
                true
            ) }}
        </div>
    {% endif %}
{% endmacro %}
", "components/hero/hero.twig", "/Users/stevenportas/WorkBox/Sites/demos/demo-photosnap-twig/src/templates/components/hero/hero.twig");
    }
}
