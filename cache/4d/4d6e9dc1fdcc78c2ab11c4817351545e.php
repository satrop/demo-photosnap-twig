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

/* components/navigation/navigation.twig */
class __TwigTemplate_397c7d699e03d37b53b519a376ed264b extends Template
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
        // line 2
        yield "
<nav class=\"nav grid-container\" aria-label=\"Main\">
\t<div class=\"navContainer main-width\">
\t\t<a href=\"/\" class=\"logoLink\" aria-label=\"Photosnap home\">
\t\t\t";
        // line 6
        yield from $this->loadTemplate("components/logo/logo.twig", "components/navigation/navigation.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "\t\t</a>

\t\t<button type=\"button\" class=\"hamburger\" aria-label=\"Toggle menu\" aria-expanded=\"false\" aria-controls=\"main-menu\" data-menu-toggle>
\t\t\t<span aria-hidden=\"true\"></span>
\t\t\t<span aria-hidden=\"true\"></span>
\t\t</button>

\t\t<div id=\"main-menu\" class=\"menuContainer\" data-menu>
\t\t\t<ul class=\"menu\" role=\"list\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"stories.html\">Stories</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"features.html\">Features</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"pricing.html\">Pricing</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t";
        // line 26
        yield from $this->loadTemplate("components/button/button.twig", "components/navigation/navigation.twig", 26)->unwrap()->yield(CoreExtension::merge($context, ["text" => "Get an Invite", "variant" => "primary", "ariaLabel" => "Get an invite", "class" => "inviteButton"]));
        // line 32
        yield "\t\t</div>
\t</div>
</nav>

<script>
\tdocument.addEventListener('DOMContentLoaded', function () {
const menuToggle = document.querySelector('[data-menu-toggle]');
const menu = document.querySelector('[data-menu]');
const mainContent = document.querySelector('main');
let isOpen = false;

function checkMobile() {
return window.innerWidth < 768;
}

function toggleMenu() {
isOpen = ! isOpen;
menuToggle.classList.toggle('open', isOpen);
menu.classList.toggle('open', isOpen);
menuToggle.setAttribute('aria-expanded', isOpen);

if (mainContent) {
if (isOpen) {
mainContent.inert = true;
// Focus first menu item when opening
setTimeout(() => {
const firstLink = menu.querySelector('a');
firstLink ?. focus();
}, 100);
} else {
mainContent.inert = false;
}
}
}

menuToggle.addEventListener('click', toggleMenu);

// Handle escape key
menu.addEventListener('keydown', (e) => {
if (e.key === 'Escape' && isOpen) {
toggleMenu();
}
});

// Update mobile state on resize
window.addEventListener('resize', () => {
const isMobile = checkMobile();
if (! isMobile && menu) {
menu.inert = false;
} else if (isMobile && menu) {
menu.inert = ! isOpen;
}
});
});
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/navigation/navigation.twig";
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
        return array (  73 => 32,  71 => 26,  50 => 7,  48 => 6,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Navigation Component #}

<nav class=\"nav grid-container\" aria-label=\"Main\">
\t<div class=\"navContainer main-width\">
\t\t<a href=\"/\" class=\"logoLink\" aria-label=\"Photosnap home\">
\t\t\t{% include 'components/logo/logo.twig' %}
\t\t</a>

\t\t<button type=\"button\" class=\"hamburger\" aria-label=\"Toggle menu\" aria-expanded=\"false\" aria-controls=\"main-menu\" data-menu-toggle>
\t\t\t<span aria-hidden=\"true\"></span>
\t\t\t<span aria-hidden=\"true\"></span>
\t\t</button>

\t\t<div id=\"main-menu\" class=\"menuContainer\" data-menu>
\t\t\t<ul class=\"menu\" role=\"list\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"stories.html\">Stories</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"features.html\">Features</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"pricing.html\">Pricing</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t{% include 'components/button/button.twig' with {
        text: 'Get an Invite',
        variant: 'primary',
        ariaLabel: 'Get an invite',
        class: 'inviteButton'
      } %}
\t\t</div>
\t</div>
</nav>

<script>
\tdocument.addEventListener('DOMContentLoaded', function () {
const menuToggle = document.querySelector('[data-menu-toggle]');
const menu = document.querySelector('[data-menu]');
const mainContent = document.querySelector('main');
let isOpen = false;

function checkMobile() {
return window.innerWidth < 768;
}

function toggleMenu() {
isOpen = ! isOpen;
menuToggle.classList.toggle('open', isOpen);
menu.classList.toggle('open', isOpen);
menuToggle.setAttribute('aria-expanded', isOpen);

if (mainContent) {
if (isOpen) {
mainContent.inert = true;
// Focus first menu item when opening
setTimeout(() => {
const firstLink = menu.querySelector('a');
firstLink ?. focus();
}, 100);
} else {
mainContent.inert = false;
}
}
}

menuToggle.addEventListener('click', toggleMenu);

// Handle escape key
menu.addEventListener('keydown', (e) => {
if (e.key === 'Escape' && isOpen) {
toggleMenu();
}
});

// Update mobile state on resize
window.addEventListener('resize', () => {
const isMobile = checkMobile();
if (! isMobile && menu) {
menu.inert = false;
} else if (isMobile && menu) {
menu.inert = ! isOpen;
}
});
});
</script>
", "components/navigation/navigation.twig", "/Users/stevenportas/WorkBox/Sites/demos/demo-photosnap-twig/src/templates/components/navigation/navigation.twig");
    }
}
