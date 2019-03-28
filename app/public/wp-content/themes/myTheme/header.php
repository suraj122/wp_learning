<!DOCTYPE html>
<html>
<head>
  <?php wp_head(); ?>
</head>
<body>
  <header class="header homepage-header">
    <div class="container">
      <nav class="nav flex-between">
        <a href="/" class="logo">
          <img src="<?php echo get_theme_file_uri('/images/logo.png') ?>" alt="airytails-logo" />
        </a>
        <!-- Main Navigation -->
        <ul class="flex-between nav__menu">
          <li class="nav__items">
            <a class="nav__link active" href="/">Home</a>
          </li>
          <li class="nav__items">
            <a class="nav__link" href="/about">About us</a>
          </li>
          <li class="nav__items">
            <a class="nav__link" href="/services">Services</a>
          </li>
          <li class="nav__items">
            <a class="nav__link" href="/blog">Blog</a>
          </li>
          <li class="nav__items">
            <a class="nav__link" href="/gallery">Gallery</a>
          </li>
        </ul>
        <!-- Toggle Button for Mobile View -->
        <div class="toggle">
          <span class="line line1"></span>
          <span class="line line2"></span>
          <span class="line line3"></span>
        </div>
      </nav>
    </div>
  </header>

