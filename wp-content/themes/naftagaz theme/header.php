<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php bloginfo('name'); ?></title>
   <?php wp_head(); ?>
</head>

<body class="scrollbar-custom">
   <svg class="svgs">
      <symbol
         xmlns="http://www.w3.org/2000/svg"
         fill="none"
         viewBox="0 0 24 24"
         stroke-width="1.5"
         stroke="currentColor"
         id="x-mark">
         <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M6 18 18 6M6 6l12 12" />
      </symbol>
      <symbol
         xmlns="http://www.w3.org/2000/svg"
         fill="none"
         viewBox="0 0 24 24"
         stroke-width="1.5"
         stroke="currentColor"
         id="paper-airplane">
         <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
      </symbol>
      <symbol
         xmlns="http://www.w3.org/2000/svg"
         fill="none"
         viewBox="0 0 24 24"
         stroke-width="1.5"
         stroke="currentColor"
         id="x-mark">
         <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M6 18 18 6M6 6l12 12" />
      </symbol>
      <symbol
         xmlns="http://www.w3.org/2000/svg"
         fill="none"
         viewBox="0 0 24 24"
         stroke-width="1.5"
         stroke="currentColor"
         id="chevron-down">
         <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="m19.5 8.25-7.5 7.5-7.5-7.5" />
      </symbol>
      <symbol
         xmlns="http://www.w3.org/2000/svg"
         fill="none"
         viewBox="0 0 24 24"
         stroke-width="1.5"
         stroke="currentColor"
         id="chevron-left">
         <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M15.75 19.5 8.25 12l7.5-7.5" />
      </symbol>
   </svg>
   <secttion class="naftagaz__items">
      <!-- Start header section -->
      <header>
         <!-- start header section -->
         <!-- header details component  -->
         <div>
            <?php get_template_part('templates/header/headerdetails', 'component'); ?>
         </div>
         <!-- Header Menu component -->
         <div>
            <?php get_template_part('templates/header/menu', 'component'); ?>
         </div>
      </header>

      <!-- End header section -->
   </secttion>