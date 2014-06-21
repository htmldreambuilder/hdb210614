<?php

/* AcmeDemoBundle:Demo:hello.html.twig */
class __TwigTemplate_2bdb06c027e3a85c62533ccb0e69425b9f14f430f93e0845bf349157c92441f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 154,  207 => 153,  202 => 150,  200 => 149,  181 => 132,  178 => 128,  152 => 86,  150 => 85,  104 => 41,  113 => 46,  160 => 78,  155 => 75,  153 => 74,  127 => 53,  118 => 48,  65 => 16,  84 => 48,  77 => 37,  70 => 38,  81 => 22,  76 => 8,  126 => 59,  100 => 46,  90 => 42,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 58,  119 => 56,  102 => 35,  71 => 35,  67 => 34,  63 => 15,  59 => 14,  93 => 28,  88 => 6,  78 => 21,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 79,  158 => 67,  156 => 91,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 53,  62 => 15,  49 => 15,  94 => 28,  89 => 25,  85 => 41,  75 => 39,  68 => 20,  56 => 13,  27 => 7,  87 => 24,  28 => 9,  44 => 21,  31 => 3,  25 => 4,  38 => 13,  24 => 3,  46 => 7,  26 => 9,  21 => 1,  19 => 1,  79 => 18,  72 => 19,  69 => 38,  47 => 16,  40 => 6,  37 => 5,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 53,  120 => 49,  115 => 47,  111 => 53,  108 => 36,  101 => 45,  98 => 31,  96 => 31,  83 => 25,  74 => 41,  66 => 6,  55 => 12,  52 => 11,  50 => 22,  43 => 17,  41 => 7,  35 => 12,  32 => 4,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 58,  130 => 57,  125 => 54,  122 => 58,  116 => 55,  112 => 15,  109 => 34,  106 => 42,  103 => 47,  99 => 31,  95 => 31,  92 => 27,  86 => 13,  82 => 46,  80 => 41,  73 => 40,  64 => 14,  60 => 27,  57 => 11,  54 => 12,  51 => 11,  48 => 22,  45 => 8,  42 => 7,  39 => 8,  36 => 5,  33 => 5,  30 => 3,);
    }
}
