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
        // line 59
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
            // line 12
            yield "    ";
            $context["parts"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["imagePath"] ?? null), "/");
            // line 13
            yield "    ";
            $context["filename"] = Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::last($this->env->getCharset(), ($context["parts"] ?? null)), [".jpg" => "", ".webp" => ""]);
            // line 14
            yield "    ";
            $context["parts"] = Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["parts"] ?? null), 0,  -1);
            // line 15
            yield "    ";
            $context["basePath"] = Twig\Extension\CoreExtension::join(($context["parts"] ?? null), "/");
            // line 16
            yield "    
    ";
            // line 18
            yield "    ";
            // line 19
            yield "    
    <picture>
        ";
            // line 22
            yield "        <source
            srcset=\"/images/stories/mobile/";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["filename"] ?? null), "html", null, true);
            yield ".webp\"
            media=\"(max-width: 767px)\"
            type=\"image/webp\"
        >
        ";
            // line 28
            yield "        <source
            srcset=\"/images/stories/mobile/";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["filename"] ?? null), "html", null, true);
            yield ".jpg\"
            media=\"(max-width: 767px)\"
            type=\"image/jpeg\"
        >
        ";
            // line 34
            yield "        <source
            srcset=\"/images/stories/tablet/";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["filename"] ?? null), "html", null, true);
            yield ".webp\"
            media=\"(max-width: 1023px)\"
            type=\"image/webp\"
        >
        ";
            // line 40
            yield "        <source
            srcset=\"/images/stories/tablet/";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["filename"] ?? null), "html", null, true);
            yield ".jpg\"
            media=\"(max-width: 1023px)\"
            type=\"image/jpeg\"
        >
        ";
            // line 46
            yield "        <source
            srcset=\"/images/stories/desktop/";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["filename"] ?? null), "html", null, true);
            yield ".webp\"
            type=\"image/webp\"
        >
        ";
            // line 51
            yield "        <img 
            src=\"/images/stories/desktop/";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["filename"] ?? null), "html", null, true);
            yield ".jpg\"
            alt=\"";
            // line 53
            yield ((($context["decorative"] ?? null)) ? ("") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["alt"] ?? null), "html", null, true)));
            yield "\"
            class=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["className"] ?? null), "html", null, true);
            yield "\"
            ";
            // line 55
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
        return array (  155 => 55,  151 => 54,  147 => 53,  143 => 52,  140 => 51,  134 => 47,  131 => 46,  124 => 41,  121 => 40,  114 => 35,  111 => 34,  104 => 29,  101 => 28,  94 => 23,  91 => 22,  87 => 19,  85 => 18,  82 => 16,  79 => 15,  76 => 14,  73 => 13,  70 => 12,  68 => 11,  52 => 10,  45 => 59,  42 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# 
  Responsive Image Macro
  @param {string} imagePath - The full path to the desktop version of the image
  @param {string} alt - Alt text for the image
  @param {string} className - Optional CSS class name(s)
  @param {boolean} decorative - If true, image is decorative and alt text will be empty
  @param {boolean} ariaHidden - If true, adds aria-hidden=\"true\"
#}

{% macro responsiveImage(imagePath, alt, className = '', decorative = false, ariaHidden = false) %}
    {# Handle path construction #}
    {% set parts = imagePath|split('/') %}
    {% set filename = parts|last|replace({'.jpg': '', '.webp': ''}) %}
    {% set parts = parts[:-1] %}
    {% set basePath = parts|join('/') %}
    
    {# Handle GitHub Pages base path #}
    {# {% set prefix = is_github_pages ? base_path : '' %} #}
    
    <picture>
        {# Mobile WebP #}
        <source
            srcset=\"/images/stories/mobile/{{ filename }}.webp\"
            media=\"(max-width: 767px)\"
            type=\"image/webp\"
        >
        {# Mobile JPG fallback #}
        <source
            srcset=\"/images/stories/mobile/{{ filename }}.jpg\"
            media=\"(max-width: 767px)\"
            type=\"image/jpeg\"
        >
        {# Tablet WebP #}
        <source
            srcset=\"/images/stories/tablet/{{ filename }}.webp\"
            media=\"(max-width: 1023px)\"
            type=\"image/webp\"
        >
        {# Tablet JPG fallback #}
        <source
            srcset=\"/images/stories/tablet/{{ filename }}.jpg\"
            media=\"(max-width: 1023px)\"
            type=\"image/jpeg\"
        >
        {# Desktop WebP #}
        <source
            srcset=\"/images/stories/desktop/{{ filename }}.webp\"
            type=\"image/webp\"
        >
        {# Desktop JPG fallback #}
        <img 
            src=\"/images/stories/desktop/{{ filename }}.jpg\"
            alt=\"{{ decorative ? '' : alt }}\"
            class=\"{{ className }}\"
            {{ ariaHidden ? 'aria-hidden=\"true\"' : '' }}
        >
    </picture>
{% endmacro %}


", "macros/responsive-image.twig", "/Users/stevenportas/WorkBox/Sites/demos/demo-photosnap-twig/src/templates/macros/responsive-image.twig");
    }
}
