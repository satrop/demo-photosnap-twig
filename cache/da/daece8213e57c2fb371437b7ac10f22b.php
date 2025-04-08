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
        // line 10
        yield "
";
        // line 48
        yield "

";
        yield from [];
    }

    // line 11
    public function macro_responsiveImage($imagePath = null, $alt = null, $className = "", $decorative = false, $ariaHidden = false, $imageFolder = "stories", ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "imagePath" => $imagePath,
            "alt" => $alt,
            "className" => $className,
            "decorative" => $decorative,
            "ariaHidden" => $ariaHidden,
            "imageFolder" => $imageFolder,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 12
            yield "    ";
            // line 13
            yield "    ";
            $context["parts"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["imagePath"] ?? null), "/");
            // line 14
            yield "    ";
            $context["filename"] = Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::last($this->env->getCharset(), ($context["parts"] ?? null)), [".jpg" => "", ".webp" => ""]);
            // line 15
            yield "    ";
            $context["parts"] = Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["parts"] ?? null), 0,  -1);
            // line 16
            yield "    ";
            $context["basePath"] = Twig\Extension\CoreExtension::join(($context["parts"] ?? null), "/");
            // line 17
            yield "    
    ";
            // line 19
            yield "    ";
            $context["prefix"] = ((($context["is_github_pages"] ?? null)) ? (($context["base_path"] ?? null)) : (""));
            // line 20
            yield "    
    <picture>
        ";
            // line 23
            yield "        <source
            srcset=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["prefix"] ?? null), "html", null, true);
            yield "/images/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["imageFolder"] ?? null), "html", null, true);
            yield "/mobile/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["filename"] ?? null), "html", null, true);
            yield ".webp\"
            media=\"(max-width: 767px)\"
            type=\"image/webp\"
        >
        ";
            // line 29
            yield "        <source
            srcset=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["prefix"] ?? null), "html", null, true);
            yield "/images/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["imageFolder"] ?? null), "html", null, true);
            yield "/mobile/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["filename"] ?? null), "html", null, true);
            yield ".jpg\"
            media=\"(max-width: 767px)\"
            type=\"image/jpeg\"
        >
        ";
            // line 35
            yield "        <source
            srcset=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["prefix"] ?? null), "html", null, true);
            yield "/images/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["imageFolder"] ?? null), "html", null, true);
            yield "/desktop/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["filename"] ?? null), "html", null, true);
            yield ".webp\"
            type=\"image/webp\"
        >
        ";
            // line 40
            yield "        <img 
            src=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["prefix"] ?? null), "html", null, true);
            yield "/images/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["imageFolder"] ?? null), "html", null, true);
            yield "/desktop/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["filename"] ?? null), "html", null, true);
            yield ".jpg\"
            alt=\"";
            // line 42
            yield ((($context["decorative"] ?? null)) ? ("") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["alt"] ?? null), "html", null, true)));
            yield "\"
            class=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["className"] ?? null), "html", null, true);
            yield "\"
            ";
            // line 44
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
        return array (  153 => 44,  149 => 43,  145 => 42,  137 => 41,  134 => 40,  124 => 36,  121 => 35,  110 => 30,  107 => 29,  96 => 24,  93 => 23,  89 => 20,  86 => 19,  83 => 17,  80 => 16,  77 => 15,  74 => 14,  71 => 13,  69 => 12,  52 => 11,  45 => 48,  42 => 10,);
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
  @param {string} imageFolder - Optional folder name within images/ (default: 'stories')
#}

{% macro responsiveImage(imagePath, alt, className = '', decorative = false, ariaHidden = false, imageFolder = 'stories') %}
    {# Handle path construction #}
    {% set parts = imagePath|split('/') %}
    {% set filename = parts|last|replace({'.jpg': '', '.webp': ''}) %}
    {% set parts = parts[:-1] %}
    {% set basePath = parts|join('/') %}
    
    {# Handle GitHub Pages base path #}
    {% set prefix = is_github_pages ? base_path : '' %}
    
    <picture>
        {# Mobile WebP #}
        <source
            srcset=\"{{ prefix }}/images/{{ imageFolder }}/mobile/{{ filename }}.webp\"
            media=\"(max-width: 767px)\"
            type=\"image/webp\"
        >
        {# Mobile JPG fallback #}
        <source
            srcset=\"{{ prefix }}/images/{{ imageFolder }}/mobile/{{ filename }}.jpg\"
            media=\"(max-width: 767px)\"
            type=\"image/jpeg\"
        >
        {# Desktop WebP #}
        <source
            srcset=\"{{ prefix }}/images/{{ imageFolder }}/desktop/{{ filename }}.webp\"
            type=\"image/webp\"
        >
        {# Desktop JPG fallback #}
        <img 
            src=\"{{ prefix }}/images/{{ imageFolder }}/desktop/{{ filename }}.jpg\"
            alt=\"{{ decorative ? '' : alt }}\"
            class=\"{{ className }}\"
            {{ ariaHidden ? 'aria-hidden=\"true\"' : '' }}
        >
    </picture>
{% endmacro %}


", "macros/responsive-image.twig", "/Users/stevenportas/WorkBox/Sites/demos/demo-photosnap-twig/src/templates/macros/responsive-image.twig");
    }
}
