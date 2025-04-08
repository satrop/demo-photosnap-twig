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

/* macros/responsive-image.twig */
class __TwigTemplate_21620fc9b0b3d930ed320bb4e4db4f79 extends Template
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
        yield from [];
    }

    // line 10
    public function macro_responsiveImage($imagePath = null, $alt = null, $className = "", $decorative = false, $ariaHidden = false, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "imagePath" => $imagePath,
            "alt" => $alt,
            "className" => $className,
            "decorative" => $decorative,
            "ariaHidden" => $ariaHidden,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 11
            yield "    ";
            $context["parts"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["imagePath"] ?? null), "/");
            // line 12
            yield "    ";
            $context["filename"] = Twig\Extension\CoreExtension::last($this->env->getCharset(), ($context["parts"] ?? null));
            // line 13
            yield "    ";
            $context["basePath"] = Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["parts"] ?? null), 0,  -1), "/");
            // line 14
            yield "    
    <picture>
        ";
            // line 17
            yield "        <source
            srcset=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["basePath"] ?? null), "html", null, true);
            yield "/mobile/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["filename"] ?? null), "html", null, true);
            yield ".webp\"
            media=\"(max-width: 767px)\"
            type=\"image/webp\"
        >
        ";
            // line 23
            yield "        <source
            srcset=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["basePath"] ?? null), "html", null, true);
            yield "/mobile/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["filename"] ?? null), "html", null, true);
            yield ".jpg\"
            media=\"(max-width: 767px)\"
            type=\"image/jpeg\"
        >
        ";
            // line 29
            yield "        <source
            srcset=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["basePath"] ?? null), "html", null, true);
            yield "/tablet/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["filename"] ?? null), "html", null, true);
            yield ".webp\"
            media=\"(max-width: 1023px)\"
            type=\"image/webp\"
        >
        ";
            // line 35
            yield "        <source
            srcset=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["basePath"] ?? null), "html", null, true);
            yield "/tablet/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["filename"] ?? null), "html", null, true);
            yield ".jpg\"
            media=\"(max-width: 1023px)\"
            type=\"image/jpeg\"
        >
        ";
            // line 41
            yield "        <source
            srcset=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["basePath"] ?? null), "html", null, true);
            yield "/desktop/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["filename"] ?? null), "html", null, true);
            yield ".webp\"
            type=\"image/webp\"
        >
        ";
            // line 46
            yield "        <img 
            src=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["basePath"] ?? null), "html", null, true);
            yield "/desktop/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["filename"] ?? null), "html", null, true);
            yield ".jpg\"
            alt=\"";
            // line 48
            yield ((($context["decorative"] ?? null)) ? ("") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["alt"] ?? null), "html", null, true)));
            yield "\"
            class=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["className"] ?? null), "html", null, true);
            yield "\"
            ";
            // line 50
            yield ((($context["ariaHidden"] ?? null)) ? ("aria-hidden=\"true\"") : (""));
            yield "
        >
    </picture>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "macros/responsive-image.twig";
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
        return array (  153 => 50,  149 => 49,  145 => 48,  139 => 47,  136 => 46,  128 => 42,  125 => 41,  116 => 36,  113 => 35,  104 => 30,  101 => 29,  92 => 24,  89 => 23,  80 => 18,  77 => 17,  73 => 14,  70 => 13,  67 => 12,  64 => 11,  48 => 10,  42 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# 
  Responsive Image Macro
  @param {string} imagePath - The base path to the image (without desktop/tablet/mobile folder)
  @param {string} alt - Alt text for the image
  @param {string} className - Optional CSS class name(s)
  @param {boolean} decorative - If true, image is decorative and alt text will be empty
  @param {boolean} ariaHidden - If true, adds aria-hidden=\"true\"
#}

{% macro responsiveImage(imagePath, alt, className = '', decorative = false, ariaHidden = false) %}
    {% set parts = imagePath|split('/') %}
    {% set filename = parts|last %}
    {% set basePath = parts[0:-1]|join('/') %}
    
    <picture>
        {# Mobile WebP #}
        <source
            srcset=\"{{ basePath }}/mobile/{{ filename }}.webp\"
            media=\"(max-width: 767px)\"
            type=\"image/webp\"
        >
        {# Mobile JPG fallback #}
        <source
            srcset=\"{{ basePath }}/mobile/{{ filename }}.jpg\"
            media=\"(max-width: 767px)\"
            type=\"image/jpeg\"
        >
        {# Tablet WebP #}
        <source
            srcset=\"{{ basePath }}/tablet/{{ filename }}.webp\"
            media=\"(max-width: 1023px)\"
            type=\"image/webp\"
        >
        {# Tablet JPG fallback #}
        <source
            srcset=\"{{ basePath }}/tablet/{{ filename }}.jpg\"
            media=\"(max-width: 1023px)\"
            type=\"image/jpeg\"
        >
        {# Desktop WebP #}
        <source
            srcset=\"{{ basePath }}/desktop/{{ filename }}.webp\"
            type=\"image/webp\"
        >
        {# Desktop JPG fallback #}
        <img 
            src=\"{{ basePath }}/desktop/{{ filename }}.jpg\"
            alt=\"{{ decorative ? '' : alt }}\"
            class=\"{{ className }}\"
            {{ ariaHidden ? 'aria-hidden=\"true\"' : '' }}
        >
    </picture>
{% endmacro %}
", "macros/responsive-image.twig", "/Users/stevenportas/WorkBox/Sites/demos/demo-photosnap-twig/src/templates/macros/responsive-image.twig");
    }
}
