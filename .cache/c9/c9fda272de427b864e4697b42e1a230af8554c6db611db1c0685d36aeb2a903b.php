<?php

/* home.html */
class __TwigTemplate_593b8622b294cd2a93cc15fa922925cdb43b418347e96997ef743dbddfb0a5e1 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Social Posting Application</title>
    </head>
    <body>
       
        <h1>Enter Your Post</h1>
        <form method=\"post\" action=\"/postmassage\">
            <textarea name=\"massage\">
                
            </textarea>
            <button type=\"submit\">Post</button>
        </form>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "home.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <title>Social Posting Application</title>*/
/*     </head>*/
/*     <body>*/
/*        */
/*         <h1>Enter Your Post</h1>*/
/*         <form method="post" action="/postmassage">*/
/*             <textarea name="massage">*/
/*                 */
/*             </textarea>*/
/*             <button type="submit">Post</button>*/
/*         </form>*/
/*     </body>*/
/* </html>*/
