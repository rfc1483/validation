<?php

/* AcmeHelloBundle:Default:index.html.twig */
class __TwigTemplate_47480dfb74b55988008f248d8a5399f2 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'posts'));
        foreach ($context['_seq'] as $context['_key'] => $context['post']) {
            // line 2
            echo "
Hello ";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'post'), "title", array(), "any", false), "html");
            echo "!
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "AcmeHelloBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
