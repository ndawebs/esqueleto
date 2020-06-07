# Esqueleto 1.1.1
Wordpress template ready to use with Elementor, absolutely from scratch.

The purpose of this template is to help all those design artisans, who like to have control of everything they use in their web designs.
Of course they will control everything from Elementor since "Esqueleto Template" is just an absolutely empty template with the minimum to work, where they can express all their creativity. Let's paint with your designs! On this empty canvas dear friends.

<img src="https://github.com/ndawebs/esqueleto/blob/master/screenshot.png">


<a href="mailto:claciudad@yandex.com">Martin Oviedo</a>


<h4>Add support menu</h4>
<p>
Need to add menu support? just add this code to functions.php
</p>

<code>
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
</code>
<br></br>
<b>Wordpress codex</b>

<a href="https://codex.wordpress.org/Navigation_Menus">https://codex.wordpress.org/Navigation_Menus</a>

<p><strong>Thanks to the collaboration of:</strong><br>
<b>Alan Jaen:</b> Creator of the child version of the template.<br>
<b>Nemo:</b> Help with code compatibility errors using Elementor api.
 </p>
<b>Virus total report:</b>
</br>
https://www.virustotal.com/gui/file/893cd9a16e71e87d537f4e2e96d96d6125175fb97a75114629d6090bdf38f8f8/detection
</br>
<b>Download link</b>
</br>
https://yadi.sk/d/e2tKgWo8rqXtmg

