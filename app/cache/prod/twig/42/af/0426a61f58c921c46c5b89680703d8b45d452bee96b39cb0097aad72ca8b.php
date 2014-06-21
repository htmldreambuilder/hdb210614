<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_42af0426a61f58c921c46c5b89680703d8b45d452bee96b39cb0097aad72ca8b extends Twig_Template
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
        echo "/*
";
        // line 2
        $this->env->loadTemplate("TwigBundle:Exception:exception.txt.twig")->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : null))));
        // line 3
        echo "*/
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 6,  41 => 5,  32 => 4,  28 => 3,  44 => 7,  31 => 4,  25 => 3,  38 => 13,  24 => 3,  46 => 7,  26 => 5,  22 => 2,  35 => 5,  29 => 4,  21 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 76,  193 => 73,  189 => 71,  187 => 70,  182 => 68,  176 => 64,  173 => 63,  168 => 62,  164 => 60,  162 => 59,  154 => 54,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 42,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 35,  109 => 34,  106 => 33,  103 => 32,  99 => 30,  95 => 28,  92 => 27,  86 => 24,  82 => 22,  80 => 21,  73 => 19,  64 => 15,  60 => 13,  57 => 16,  54 => 11,  51 => 9,  48 => 9,  45 => 8,  42 => 6,  39 => 6,  36 => 5,  33 => 10,  30 => 3,);
    }
}
