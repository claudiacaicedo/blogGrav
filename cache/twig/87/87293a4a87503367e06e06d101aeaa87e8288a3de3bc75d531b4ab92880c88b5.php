<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Page:/usr/share/nginx/html/user/pages/01.blog/02.carpetas-de-grav */
class __TwigTemplate_657e7696874000eefbb64cc7f8e688b7005529416c193d3d299df824531f1ba5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<h2>Estructura de la carpeta</h2>
<p>Grav es un CMS basado en archivos planos, lo que significa que ninguna base de datos lo sustenta por lo que la estructura de carpetas de su sitio es muy importante. En el nivel superior de su instalación Grav, la estructura de la carpeta se ve así:</p>
<ul>
<li>/assets</li>
<li>/backup</li>
<li>/bin</li>
<li>/cache</li>
<li>/images</li>
<li>/logs</li>
<li>/system</li>
<li>/user</li>
<li>/vendor</li>
<li>Dupdo</li>
</ul>
<h4>¿Para qué sirve cada carpeta?:</h4>
<h6>/assets</h6>
<p>La carpeta assets es utilizada por el nuevo sistema de gestión de activos dentro de Grav para almacenar archivos .js y .css previamente procesados.</p>
<p>Esta carpeta no se debe utilizar para almacenar datos de usuarios, ya que se vacía de forma rutinaria de todos los datos.</p>
<h6>/bin</h6>
<p>La carpeta bin contiene la aplicación Grav CLI que se puede usar para realizar algunas tareas prácticas desde la línea de comandos. Esta es una característica relativamente avanzada destinada principalmente a los desarrolladores.</p>
<h6>/backup</h6>
<p>La carpeta backup es la ubicación predeterminada para copias de seguridad Grav.</p>
<h6>/cache</h6>
<p>La carpeta cache se usa para almacenar archivos en caché temporales que Grav genera automáticamente para mejorar el rendimiento. De forma predeterminada, Grav maneja el almacenamiento en caché automáticamente, seleccionando la mejor opción disponible para su entorno de alojamiento para garantizar que su sitio se ejecute lo más rápido posible.
Esta carpeta tampoco se debe utilizar para almacenar datos de usuarios, ya que se vacía de forma rutinaria.</p>
<h6>/ images</h6>
<p>Grav trae incorporada una biblioteca de manipulación de imágenes potente pero muy fácil de usar . Esto significa que puede cambiar fácilmente el tamaño de una imagen sobre la marcha desde su contenido o incluso desde un complemento. Estas imágenes se almacenan en la carpeta images para que puedan reutilizarse si se solicita nuevamente la misma imagen con el mismo tamaño.
Esta carpeta actúa como un caché de imágenes y está destinada a archivos generados automáticamente. Los medios proporcionados por el usuario deben almacenarse en la carpeta user/pages/, user/themes/o incluso en una user/images/carpeta personalizada .</p>
<h6>/logs</h6>
<p>Cuando Grav detecta un error, o si tiene activado el registro o la creación de perfiles adicionales, almacena los archivos de registro relevantes en la carpeta logs.</p>
<h6>/system</h6>
<p>La carpeta system es donde estan los archivos de configuración de Grav. No se debe editar nada en esta carpeta porque una actualización de Grav podría sobrescribir sus cambios. </p>
<h6>/vendor</h6>
<p>La carpeta vendor contiene bibliotecas importantes en las que se basa Grav. Esta carpeta es similar a la carperta system en que su contenido no debe editarse a menos que esté absolutamente seguro de lo que está haciendo.</p>
<h6>/user</h6>
<p>Esta es la carpeta más importante para la mayoría de los usuarios de Grav. Esta carpeta es donde pasará su tiempo creando contenido, utilizando complementos y editando sus temas. Esta carpeta tiene varias subcarpetas como:</p>
<ul>
<li>/user/accounts</li>
<li>/user/blueprints</li>
<li>/user/config</li>
<li>/user/data</li>
<li>/user/images</li>
<li>/user/languages</li>
<li>/user/pages</li>
<li>/user/plugins</li>
<li>/user/themes</li>
</ul>";
    }

    public function getTemplateName()
    {
        return "@Page:/usr/share/nginx/html/user/pages/01.blog/02.carpetas-de-grav";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<h2>Estructura de la carpeta</h2>
<p>Grav es un CMS basado en archivos planos, lo que significa que ninguna base de datos lo sustenta por lo que la estructura de carpetas de su sitio es muy importante. En el nivel superior de su instalación Grav, la estructura de la carpeta se ve así:</p>
<ul>
<li>/assets</li>
<li>/backup</li>
<li>/bin</li>
<li>/cache</li>
<li>/images</li>
<li>/logs</li>
<li>/system</li>
<li>/user</li>
<li>/vendor</li>
<li>Dupdo</li>
</ul>
<h4>¿Para qué sirve cada carpeta?:</h4>
<h6>/assets</h6>
<p>La carpeta assets es utilizada por el nuevo sistema de gestión de activos dentro de Grav para almacenar archivos .js y .css previamente procesados.</p>
<p>Esta carpeta no se debe utilizar para almacenar datos de usuarios, ya que se vacía de forma rutinaria de todos los datos.</p>
<h6>/bin</h6>
<p>La carpeta bin contiene la aplicación Grav CLI que se puede usar para realizar algunas tareas prácticas desde la línea de comandos. Esta es una característica relativamente avanzada destinada principalmente a los desarrolladores.</p>
<h6>/backup</h6>
<p>La carpeta backup es la ubicación predeterminada para copias de seguridad Grav.</p>
<h6>/cache</h6>
<p>La carpeta cache se usa para almacenar archivos en caché temporales que Grav genera automáticamente para mejorar el rendimiento. De forma predeterminada, Grav maneja el almacenamiento en caché automáticamente, seleccionando la mejor opción disponible para su entorno de alojamiento para garantizar que su sitio se ejecute lo más rápido posible.
Esta carpeta tampoco se debe utilizar para almacenar datos de usuarios, ya que se vacía de forma rutinaria.</p>
<h6>/ images</h6>
<p>Grav trae incorporada una biblioteca de manipulación de imágenes potente pero muy fácil de usar . Esto significa que puede cambiar fácilmente el tamaño de una imagen sobre la marcha desde su contenido o incluso desde un complemento. Estas imágenes se almacenan en la carpeta images para que puedan reutilizarse si se solicita nuevamente la misma imagen con el mismo tamaño.
Esta carpeta actúa como un caché de imágenes y está destinada a archivos generados automáticamente. Los medios proporcionados por el usuario deben almacenarse en la carpeta user/pages/, user/themes/o incluso en una user/images/carpeta personalizada .</p>
<h6>/logs</h6>
<p>Cuando Grav detecta un error, o si tiene activado el registro o la creación de perfiles adicionales, almacena los archivos de registro relevantes en la carpeta logs.</p>
<h6>/system</h6>
<p>La carpeta system es donde estan los archivos de configuración de Grav. No se debe editar nada en esta carpeta porque una actualización de Grav podría sobrescribir sus cambios. </p>
<h6>/vendor</h6>
<p>La carpeta vendor contiene bibliotecas importantes en las que se basa Grav. Esta carpeta es similar a la carperta system en que su contenido no debe editarse a menos que esté absolutamente seguro de lo que está haciendo.</p>
<h6>/user</h6>
<p>Esta es la carpeta más importante para la mayoría de los usuarios de Grav. Esta carpeta es donde pasará su tiempo creando contenido, utilizando complementos y editando sus temas. Esta carpeta tiene varias subcarpetas como:</p>
<ul>
<li>/user/accounts</li>
<li>/user/blueprints</li>
<li>/user/config</li>
<li>/user/data</li>
<li>/user/images</li>
<li>/user/languages</li>
<li>/user/pages</li>
<li>/user/plugins</li>
<li>/user/themes</li>
</ul>", "@Page:/usr/share/nginx/html/user/pages/01.blog/02.carpetas-de-grav", "");
    }
}
