<?php

/* VieilleSardineUserBundle::layout.html.twig */
class __TwigTemplate_ba6f354765967d7f2f9f0908fa78a2dd4f7319ccced0118f8e043038169d7fa8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::principal_layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::principal_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 5
        echo "    ";
    }

    public function getTemplateName()
    {
        return "VieilleSardineUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  29 => 3,  72 => 22,  67 => 20,  60 => 16,  55 => 14,  51 => 13,  46 => 11,  42 => 10,  39 => 5,  33 => 7,  31 => 6,  28 => 5,);
    }
}
