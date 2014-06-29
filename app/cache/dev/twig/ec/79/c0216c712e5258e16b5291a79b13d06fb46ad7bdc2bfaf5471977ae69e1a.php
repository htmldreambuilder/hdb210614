<?php

/* HDBwebBundle:Componentes:contactoRapidoForm.html.twig */
class __TwigTemplate_ec79c0216c712e5258e16b5291a79b13d06fb46ad7bdc2bfaf5471977ae69e1a extends Twig_Template
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mensajeContactoRapido"), 'widget', array("attr" => array("class" => "radius", "placeholder" => "¿Cómo podemos ayudarte?", "rows" => "3")));
        // line 32
        echo "
    </li>
    <li>
        Dinos en número cuanto son dos y dos
        <div class=\"row collapse\">
            <div class=\"small-4 columns\">
                <input type=\"text\" id=\"captcha\" class=\"radius\" placeholder=\"cuatro\">
            </div>
            <div class=\"small-8 columns\">
                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuentanosloContactoRapido"), 'widget', array("attr" => array("class" => "radius right small", "disabled" => ""), "label" => "¡Empecemos!"));
        // line 44
        echo "
            </div>
        </div>
    </li>
</ul>
";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "HDBwebBundle:Componentes:contactoRapidoForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 49,  75 => 44,  73 => 41,  48 => 18,  38 => 13,  36 => 9,  28 => 9,  112 => 15,  101 => 45,  77 => 37,  67 => 34,  47 => 16,  45 => 15,  32 => 4,  27 => 2,  21 => 1,  29 => 3,  19 => 1,  86 => 13,  81 => 39,  76 => 8,  66 => 6,  60 => 27,  55 => 26,  50 => 22,  43 => 17,  40 => 8,  37 => 7,  31 => 8,  25 => 4,  120 => 56,  116 => 55,  110 => 52,  103 => 47,  100 => 46,  92 => 41,  72 => 26,  69 => 25,  62 => 32,  59 => 20,  52 => 13,  49 => 15,  42 => 9,  39 => 8,  33 => 5,  131 => 61,  128 => 60,  123 => 57,  121 => 56,  113 => 50,  111 => 49,  90 => 42,  87 => 39,  85 => 41,  74 => 36,  71 => 35,  64 => 16,  61 => 15,  54 => 12,  51 => 11,  44 => 23,  41 => 7,  35 => 6,  30 => 1,);
    }
}
