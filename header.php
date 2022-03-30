<?php
$bridge_qode_options = bridge_qode_return_global_options();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title>CEC Website</title>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <?php
    $bridge_qode_is_IE = bridge_qode_return_is_ie_variable();

  if ( ! empty( $bridge_qode_is_IE ) && $bridge_qode_is_IE ) { ?>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <?php } ?>

  <?php
  /**
   * bridge_qode_header_meta hook
   *
   * @see bridge_core_header_meta() - hooked with 10
   * @see bridge_qode_user_scalable_meta() - hooked with 10
   */
  do_action('bridge_qode_action_header_meta');
  ?>

  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- header navbar js start here -->
	<script src="<?php bloginfo('template_directory'); ?>/js/headerscript.js"></script>
	<!-- header navbar js end here -->
</head>
<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
<!-- header section start here -->

<section class="navigation">
  <div class="topnav">
  <a href="#"></a>
  <a href="#"></a>
  <a href="#">sales@cecfeel.in</a>
  <a href="#">044 2786 8322</a>
</div>
  <div class="nav-container">
    <div class="brand">
      <a href="#!"><img src="<?php bloginfo('template_directory'); ?>/images/CEC-flavours-logo.png" style="width: 50%;"> </a>
    </div>
    <nav>
      <div class="nav-mobile"><a id="navbar-toggle" href="#!"><span></span></a></div>
      <ul class="nav-list">
        <li>
          <a href="#!" class="active">Home</a>
        </li>
        <li>
          <a href="#!">About</a>
        </li>
        <li>
          <a href="#!">Manufacturing Capablities</a>
        </li>
        <li>
          <a href="#!">Flavours</a>
        </li>
        <li>
          <a href="#!">Fragrances</a>
        </li>
        <li>
          <a href="#!">Career</a>
        </li>
        <li>
          <a href="#!">Contact</a>
        </li>
      </ul>
    </nav>
  </div>
</section>
<!-- header section end here -->