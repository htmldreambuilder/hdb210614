<?php

/* HDBwebBundle:Componentes:presupuestoOnlineForm.html.twig */
class __TwigTemplate_bb9d4da2c2a170638256bf2cfa97758a7dbf17047d736e3e3034c3841b536c01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
<ul class=\"no-bullet\">
    <li>
        ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    </li>
    <li>
        ";
        // line 8
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreContactoRapido"), 'errors');
        echo "
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreContactoRapido"), 'widget', array("attr" => array("class" => "radius", "placeholder" => (isset($context["nombre"]) ? $context["nombre"] : $this->getContext($context, "nombre")))));
        // line 13
        echo "
    </li>
    <li>
        ";
        // line 17
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emailContactoRapido"), 'errors');
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emailContactoRapido"), 'widget', array("attr" => array("class" => "radius", "placeholder" => (isset($context["correo"]) ? $context["correo"] : $this->getContext($context, "correo")))));
        // line 22
        echo "
    </li>
    <li>
        ";
        // line 26
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mensajeContactoRapido"), 'errors');
        echo "
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mensajeContactoRapido"), 'widget', array("attr" => array("class" => "radius", "placeholder" => "¿Cómo podemos ayudarte?")));
        // line 31
        echo "
    </li>
    <li>
        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuentanosloContactoRapido"), 'widget', array("attr" => array("class" => "radius right small"), "label" => "¡Empecemos!"));
        // line 38
        echo "
    </li>
</ul>
";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "HDBwebBundle:Componentes:presupuestoOnlineForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 48,  77 => 37,  70 => 38,  81 => 39,  76 => 8,  126 => 59,  100 => 46,  90 => 42,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 35,  67 => 34,  63 => 15,  59 => 14,  93 => 28,  88 => 6,  78 => 21,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 53,  62 => 31,  49 => 15,  94 => 28,  89 => 20,  85 => 41,  75 => 39,  68 => 20,  56 => 13,  27 => 2,  87 => 39,  28 => 9,  44 => 23,  31 => 8,  25 => 4,  38 => 13,  24 => 3,  46 => 7,  26 => 6,  21 => 1,  19 => 1,  79 => 18,  72 => 26,  69 => 38,  47 => 16,  40 => 8,  37 => 7,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 53,  108 => 36,  101 => 45,  98 => 31,  96 => 31,  83 => 25,  74 => 41,  66 => 6,  55 => 26,  52 => 13,  50 => 22,  43 => 17,  41 => 7,  35 => 6,  32 => 4,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 58,  116 => 55,  112 => 15,  109 => 34,  106 => 36,  103 => 47,  99 => 31,  95 => 28,  92 => 41,  86 => 13,  82 => 46,  80 => 41,  73 => 40,  64 => 14,  60 => 27,  57 => 11,  54 => 12,  51 => 11,  48 => 18,  45 => 15,  42 => 7,  39 => 8,  36 => 9,  33 => 5,  30 => 3,);
    }
}