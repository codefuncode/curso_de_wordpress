<?php
/*
Plugin Name: Add Text To Footer
 */
// Hook the 'wp_footer' action hook, add the function named 'mfp_Add_Text' to it
add_action("wp_footer", "add_text_Add_Text");

// Define 'mfp_Add_Text'
function add_text_Add_Text()
{
    echo "<p style='color: black;'>After the footer is loaded, my text is added!</p>";
}

// function mfp_Add_Text()
// {
//     echo "<p style='color: #FFF;'>After the footer is loaded, my text is added!</p>";
// }

// Hook the 'the_content' filter hook (content of any post), run the function named 'mfp_Fix_Text_Spacing'
add_filter("the_content", "add_text_Text_Spacing");
// Automatically correct double spaces from any post
function add_text_Text_Spacing($the_Post)
{
    $the_New_Post = str_replace(" ", " add text. \nadd-text ", $the_Post);
    return $the_New_Post;
}
