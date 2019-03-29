# Divi Child Theme (Style Guide and Code Snippets)

## Introduction

This coding guide is a reference on the use and style for childthemes.  


---

## Child Theme

An Extensive explanation of Word Presss [Childtheme](https://codex.wordpress.org/Child_Themes) creation can be found on the Wordpress Codex website.


### Content of the Child theme

- **[functions.php](divi-child-theme/functions.php)**

- **[style.css](divi-child-theme/style.css)**

- **[header.php](divi-child-theme/header.php)**

- **custom_scripts.js**


---

## Coding Style

As a general rule, if styling can be accomplished using only the theme options, it wiil be prefered this way. Nonetheless, many times CSS is required to accomplish styling, in that case please follow the relus below.


### Comment code:

**Titles**

Name the part of the website where the styling belongs to:
eg: Homepage, All Pages, Header, Footer, Form, etc.

```
/* ========== HEADER ========== */
```

**Subtitles**

If there is need to be more specific:
eg: Button, Navigation, etc.

```
/* ========== HEADER ========== */
/* ---------- Top Navigation ---------- */
```

**Very Specific**

If there is need to identify something very specific:
eg: Button 1, Button 2, Button 3, etc.

```
/* ========== HEADER ========== */
/* ---------- Top Navigation ---------- */
/* Button 1 */ #buttonone {

}
```


### Selectors

Don't use inspect Copy > CSS Path for selector:

```
html.js body.home.page-template-default.page.page-id-63.desktop.section_separators_down.et_pb_button_helper_class.et_transparent_nav.et_fullwidth_nav.et_fullwidth_secondary_nav.et_fixed_nav.et_show_nav.et_cover_background.et_secondary_nav_enabled.et_secondary_nav_only_menu.et_pb_gutter.osx.et_pb_gutters3.et_primary_nav_dropdown_animation_fade.et_secondary_nav_dropdown_animation_fade.et_pb_footer_columns4.et_header_style_left.et_pb_pagebuilder_layout.et_right_sidebar.et_divi_theme.gecko div#page-container header#main-header div.container.clearfix.et_menu_container div#et-top-navigation nav#top-menu-nav ul#top-menu.nav li#menu-item-66.menu-item.menu-item-type-post_type.menu-item-object-page.menu-item-home.current-menu-item.page_item.page-item-63.current_page_item.menu-item-66 a
```

It is preffered to add, if possible, a class or id to the Section, Row or Module and then target it. Otherwise, use a selector that makes sence with the help of inspect Copy > CSS Selector:

```
#top-menu > li:nth-child(1) > a:nth-child(1)
```

---


## Code Snippets

A list of code snippets frequently used.


### HTML

**Add Social Media Icons**

Add social media icons using font-awesome.


```
<div id="getSocial">
<a href="#" target="_blank"><i class="fa fa-twitter-square"></i></a>
<a href="#" target="_blank"><i class="fa fa-facebook-square"></i></a>
<a href="#" target="_blank"><i class="fa fa-google-plus-square"></i></a>
<a href="#" target="_blank"><i class="fa fa-pinterest-square"></i></a>
<a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
</div>
```

**Click to Call Phone Number**

Creates a link on the phone number to enable click to call.

```
<a href="tel:1234567890"> (123)-456-7890</a>
```

**Add Copyright Info**
```
<div style="text-align: center;">
<p>&#169; 2017 <strong>Company Name.</strong> All Rights Reserved. | Powered by <a href="http://www.mycitysocial.com" target="_blank"><strong>MyCity Social</strong></a></p>
</div>
```

### CSS

**Bigger Logo**

Makes logo bigger than the height of the header.

```
#logo {
		min-height: 120px;
	}

@media only screen and (max-width: 980px) {
	#logo {
		min-height: 100px;
	}
}
```

**Fullwith Menu**

Styles the fullwith menu. Check the fullwith menu option for primany menu.

```
.et_fullwidth_nav #main-header .container {
    padding-right: 0;
    padding-left: 0;
}
#et-top-navigation {
    padding-top: 15px;
    background-color: #000;
}
```

**Navigation links Background Color**

Add bacground color to each one of the links on the navigation bar.

```
#top-menu-nav li a {
	padding: 10px 20px !important;
	border-radius: 2px;
	margin-bottom: 20px;
	background-color: #ffffff;
}
#top-menu-nav .sub-menu li a {
	background-color: unset;
	padding: unset;
	margin-bottom: unset;
	color: #03276b !important;
}
```

**Style Contact Form 7**

Styles contact form 7, remove or add properties as needed.

```
/* ========== FORMS ========== */
/* ---------- All Fields ---------- */
.wpcf7-form {
    background-color: rgba(255,255,255,0.75);
    border: solid 3px #fff;
    border-radius: 5px;
    padding: 20px;
    width: 100%;
    text-align: left;
}
.wpcf7-form .wpcf7-form-control {
    width: 100%;
    font-size: 14px;
}

/* ----- Form Button ----- */
.wpcf7-submit {
	width: 100%;
	background-color: #000;
	border: none; 
	font-size: 20px;	
	color: #fff;
	padding: 10px 0; 
}
.wpcf7-submit:active {
	background-color: #000;
}
.wpcf7-submit:hover {
	background-color: #000;
}
```

### FUNCTIONS

**Add add to cart button on all products (woocommerce)**

```
// ADD ADD TO CART BUTTON ON ALL ITEMS
function dac_add_cart_button () {
 add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_add_to_cart', 10 );
}
add_action( 'after_setup_theme', 'dac_add_cart_button' );
```