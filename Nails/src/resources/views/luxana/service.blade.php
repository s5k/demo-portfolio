
@extends('nails::luxana.layout.default')

@section('header')
<style id='elementor-frontend-inline-css'>
.elementor-kit-11{--e-global-color-primary:#6EC1E4;--e-global-color-secondary:#54595F;--e-global-color-text:#7A7A7A;--e-global-color-accent:#61CE70;--e-global-typography-primary-font-family:"Roboto";--e-global-typography-primary-font-weight:600;--e-global-typography-secondary-font-family:"Roboto Slab";--e-global-typography-secondary-font-weight:400;--e-global-typography-text-font-family:"Roboto";--e-global-typography-text-font-weight:400;--e-global-typography-accent-font-family:"Roboto";--e-global-typography-accent-font-weight:500;}.elementor-section.elementor-section-boxed > .elementor-container{max-width:1140px;}.e-con{--container-max-width:1140px;}.elementor-widget:not(:last-child){margin-block-end:20px;}.elementor-element{--widgets-spacing:20px 20px;}{}h1.entry-title{display:var(--page-title-display);}@media(max-width:1024px){.elementor-section.elementor-section-boxed > .elementor-container{max-width:1024px;}.e-con{--container-max-width:1024px;}}@media(max-width:767px){.elementor-section.elementor-section-boxed > .elementor-container{max-width:767px;}.e-con{--container-max-width:767px;}}
.elementor-widget-heading .elementor-heading-title{color:var( --e-global-color-primary );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-image .widget-image-caption{color:var( --e-global-color-text );font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-text-editor{color:var( --e-global-color-text );font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:var( --e-global-color-primary );}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap, .elementor-widget-text-editor.elementor-drop-cap-view-default .elementor-drop-cap{color:var( --e-global-color-primary );border-color:var( --e-global-color-primary );}.elementor-widget-button .elementor-button{font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );background-color:var( --e-global-color-accent );}.elementor-widget-divider{--divider-color:var( --e-global-color-secondary );}.elementor-widget-divider .elementor-divider__text{color:var( --e-global-color-secondary );font-family:var( --e-global-typography-secondary-font-family ), Sans-serif;font-weight:var( --e-global-typography-secondary-font-weight );}.elementor-widget-divider.elementor-view-stacked .elementor-icon{background-color:var( --e-global-color-secondary );}.elementor-widget-divider.elementor-view-framed .elementor-icon, .elementor-widget-divider.elementor-view-default .elementor-icon{color:var( --e-global-color-secondary );border-color:var( --e-global-color-secondary );}.elementor-widget-divider.elementor-view-framed .elementor-icon, .elementor-widget-divider.elementor-view-default .elementor-icon svg{fill:var( --e-global-color-secondary );}.elementor-widget-image-box .elementor-image-box-title{color:var( --e-global-color-primary );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-image-box .elementor-image-box-description{color:var( --e-global-color-text );font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-icon.elementor-view-stacked .elementor-icon{background-color:var( --e-global-color-primary );}.elementor-widget-icon.elementor-view-framed .elementor-icon, .elementor-widget-icon.elementor-view-default .elementor-icon{color:var( --e-global-color-primary );border-color:var( --e-global-color-primary );}.elementor-widget-icon.elementor-view-framed .elementor-icon, .elementor-widget-icon.elementor-view-default .elementor-icon svg{fill:var( --e-global-color-primary );}.elementor-widget-icon-box.elementor-view-stacked .elementor-icon{background-color:var( --e-global-color-primary );}.elementor-widget-icon-box.elementor-view-framed .elementor-icon, .elementor-widget-icon-box.elementor-view-default .elementor-icon{fill:var( --e-global-color-primary );color:var( --e-global-color-primary );border-color:var( --e-global-color-primary );}.elementor-widget-icon-box .elementor-icon-box-title{color:var( --e-global-color-primary );}.elementor-widget-icon-box .elementor-icon-box-title, .elementor-widget-icon-box .elementor-icon-box-title a{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-icon-box .elementor-icon-box-description{color:var( --e-global-color-text );font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-star-rating .elementor-star-rating__title{color:var( --e-global-color-text );font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-image-gallery .gallery-item .gallery-caption{font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );}.elementor-widget-icon-list .elementor-icon-list-item:not(:last-child):after{border-color:var( --e-global-color-text );}.elementor-widget-icon-list .elementor-icon-list-icon i{color:var( --e-global-color-primary );}.elementor-widget-icon-list .elementor-icon-list-icon svg{fill:var( --e-global-color-primary );}.elementor-widget-icon-list .elementor-icon-list-item > .elementor-icon-list-text, .elementor-widget-icon-list .elementor-icon-list-item > a{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-icon-list .elementor-icon-list-text{color:var( --e-global-color-secondary );}.elementor-widget-counter .elementor-counter-number-wrapper{color:var( --e-global-color-primary );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-counter .elementor-counter-title{color:var( --e-global-color-secondary );font-family:var( --e-global-typography-secondary-font-family ), Sans-serif;font-weight:var( --e-global-typography-secondary-font-weight );}.elementor-widget-progress .elementor-progress-wrapper .elementor-progress-bar{background-color:var( --e-global-color-primary );}.elementor-widget-progress .elementor-title{color:var( --e-global-color-primary );font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-testimonial .elementor-testimonial-content{color:var( --e-global-color-text );font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-testimonial .elementor-testimonial-name{color:var( --e-global-color-primary );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-testimonial .elementor-testimonial-job{color:var( --e-global-color-secondary );font-family:var( --e-global-typography-secondary-font-family ), Sans-serif;font-weight:var( --e-global-typography-secondary-font-weight );}.elementor-widget-tabs .elementor-tab-title, .elementor-widget-tabs .elementor-tab-title a{color:var( --e-global-color-primary );}.elementor-widget-tabs .elementor-tab-title.elementor-active,
					 .elementor-widget-tabs .elementor-tab-title.elementor-active a{color:var( --e-global-color-accent );}.elementor-widget-tabs .elementor-tab-title{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-tabs .elementor-tab-content{color:var( --e-global-color-text );font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-accordion .elementor-accordion-icon, .elementor-widget-accordion .elementor-accordion-title{color:var( --e-global-color-primary );}.elementor-widget-accordion .elementor-accordion-icon svg{fill:var( --e-global-color-primary );}.elementor-widget-accordion .elementor-active .elementor-accordion-icon, .elementor-widget-accordion .elementor-active .elementor-accordion-title{color:var( --e-global-color-accent );}.elementor-widget-accordion .elementor-active .elementor-accordion-icon svg{fill:var( --e-global-color-accent );}.elementor-widget-accordion .elementor-accordion-title{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-accordion .elementor-tab-content{color:var( --e-global-color-text );font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-toggle .elementor-toggle-title, .elementor-widget-toggle .elementor-toggle-icon{color:var( --e-global-color-primary );}.elementor-widget-toggle .elementor-toggle-icon svg{fill:var( --e-global-color-primary );}.elementor-widget-toggle .elementor-tab-title.elementor-active a, .elementor-widget-toggle .elementor-tab-title.elementor-active .elementor-toggle-icon{color:var( --e-global-color-accent );}.elementor-widget-toggle .elementor-toggle-title{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-toggle .elementor-tab-content{color:var( --e-global-color-text );font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-alert .elementor-alert-title{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-alert .elementor-alert-description{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-eael-caldera-form .eael-contact-form-description{font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );}.elementor-widget-eael-contact-form-7 .eael-contact-form-7 .eael-contact-form-7-title{font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );}.elementor-widget-eael-contact-form-7 .eael-contact-form-7 .eael-contact-form-7-description{font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );}.elementor-widget-eael-contact-form-7 .eael-contact-form-7 .wpcf7-form-control.wpcf7-text, .elementor-widget-eael-contact-form-7 .eael-contact-form-7 .wpcf7-form-control.wpcf7-quiz, .elementor-widget-eael-contact-form-7 .eael-contact-form-7 .wpcf7-form-control.wpcf7-quiz, .elementor-widget-eael-contact-form-7 .eael-contact-form-7 .wpcf7-form-control.wpcf7-textarea, .elementor-widget-eael-contact-form-7 .eael-contact-form-7 .wpcf7-form-control.wpcf7-select{font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );}.elementor-widget-eael-contact-form-7 .eael-contact-form-7 .wpcf7-form label, .elementor-widget-eael-contact-form-7 .eael-contact-form-7 .wpcf7-form .wpcf7-quiz-label{font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );}.elementor-widget-eael-contact-form-7 .eael-contact-form-7 .wpcf7-form-control::-webkit-input-placeholder{font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );}.elementor-widget-eael-contact-form-7 .eael-contact-form-7 .wpcf7-form input[type="submit"]{font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );}.elementor-widget-eael-contact-form-7 .eael-contact-form-7 .wpcf7-not-valid-tip{font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );}.elementor-widget-eael-countdown .eael-countdown-digits::after{font-family:var( --e-global-typography-secondary-font-family ), Sans-serif;font-weight:var( --e-global-typography-secondary-font-weight );}.elementor-widget-eael-countdown .eael-countdown-digits{font-family:var( --e-global-typography-secondary-font-family ), Sans-serif;font-weight:var( --e-global-typography-secondary-font-weight );}.elementor-widget-eael-countdown .eael-countdown-label{font-family:var( --e-global-typography-secondary-font-family ), Sans-serif;font-weight:var( --e-global-typography-secondary-font-weight );}.elementor-widget-eael-countdown .eael-countdown-finish-message .expiry-title{font-family:var( --e-global-typography-secondary-font-family ), Sans-serif;font-weight:var( --e-global-typography-secondary-font-weight );}.eael-countdown-finish-text{font-family:var( --e-global-typography-secondary-font-family ), Sans-serif;font-weight:var( --e-global-typography-secondary-font-weight );}.elementor-widget-eael-creative-button .eael-creative-button .cretive-button-text, .elementor-widget-eael-creative-button .eael-creative-button--winona::after, .elementor-widget-eael-creative-button .eael-creative-button--rayen::before, .elementor-widget-eael-creative-button .eael-creative-button--tamaya::after, .elementor-widget-eael-creative-button .eael-creative-button--tamaya::before{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-eael-dual-color-header .eael-dch-separator-wrap i{color:var( --e-global-color-primary );}.elementor-widget-eael-facebook-feed .eael-facebook-feed-card .eael-facebook-feed-item .eael-facebook-feed-item-inner .eael-facebook-feed-item-header .eael-facebook-feed-item-user .eael-facebook-feed-username{font-family:var( --e-global-typography-secondary-font-family ), Sans-serif;font-weight:var( --e-global-typography-secondary-font-weight );}.elementor-widget-eael-facebook-feed .eael-facebook-feed-card .eael-facebook-feed-item .eael-facebook-feed-item-inner .eael-facebook-feed-item-header .eael-facebook-feed-post-time{font-family:var( --e-global-typography-secondary-font-family ), Sans-serif;font-weight:var( --e-global-typography-secondary-font-weight );}.elementor-widget-eael-facebook-feed .eael-facebook-feed-card .eael-facebook-feed-item .eael-facebook-feed-item-inner .eael-facebook-feed-item-content .eael-facebook-feed-message{font-family:var( --e-global-typography-secondary-font-family ), Sans-serif;font-weight:var( --e-global-typography-secondary-font-weight );}.elementor-widget-eael-facebook-feed .eael-facebook-feed-card .eael-facebook-feed-item .eael-facebook-feed-item-inner .eael-facebook-feed-preview-wrap .eael-facebook-feed-url-preview .eael-facebook-feed-url-host{font-family:var( --e-global-typography-secondary-font-family ), Sans-serif;font-weight:var( --e-global-typography-secondary-font-weight );}.elementor-widget-eael-facebook-feed .eael-facebook-feed-card .eael-facebook-feed-item .eael-facebook-feed-item-inner .eael-facebook-feed-preview-wrap .eael-facebook-feed-url-preview .eael-facebook-feed-url-title{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-eael-facebook-feed .eael-facebook-feed-card .eael-facebook-feed-item .eael-facebook-feed-item-inner .eael-facebook-feed-preview-wrap .eael-facebook-feed-url-preview .eael-facebook-feed-url-description{font-family:var( --e-global-typography-secondary-font-family ), Sans-serif;font-weight:var( --e-global-typography-secondary-font-weight );}.elementor-widget-eael-facebook-feed .eael-facebook-feed-overlay .eael-facebook-feed-item .eael-facebook-feed-item-overlay, .elementor-widget-eael-facebook-feed .eael-facebook-feed-card .eael-facebook-feed-item .eael-facebook-feed-item-inner .eael-facebook-feed-item-footer{font-family:var( --e-global-typography-secondary-font-family ), Sans-serif;font-weight:var( --e-global-typography-secondary-font-weight );}.elementor-widget-eael-fancy-text .eael-fancy-text-prefix{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-eael-fancy-text .eael-fancy-text-strings, .elementor-widget-eael-fancy-text .typed-cursor{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-eael-fancy-text .eael-fancy-text-suffix{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-eael-feature-list .connector-type-classic .connector{border-color:var( --e-global-color-primary );}.elementor-widget-eael-feature-list .connector-type-modern .eael-feature-list-item:before, .elementor-widget-eael-feature-list .connector-type-modern .eael-feature-list-item:after{border-color:var( --e-global-color-primary );}.elementor-widget-eael-feature-list .eael-feature-list-content-box .eael-feature-list-title, .elementor-widget-eael-feature-list .eael-feature-list-content-box .eael-feature-list-title > a, .elementor-widget-eael-feature-list .eael-feature-list-content-box .eael-feature-list-title:visited{color:var( --e-global-color-primary );}.elementor-widget-eael-feature-list .eael-feature-list-content-box .eael-feature-list-title, .elementor-widget-eael-feature-list .eael-feature-list-content-box .eael-feature-list-title a{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-eael-feature-list .eael-feature-list-content-box .eael-feature-list-content{color:var( --e-global-color-text );font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-eael-filterable-gallery .fg-caption-head .fg-item-price{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-eael-filterable-gallery .fg-caption-head .fg-item-ratings{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-eael-filterable-gallery .fg-item-category span{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-eael-filterable-gallery .fg-filter-trigger > span{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-eael-filterable-gallery .fg-layout-3-filter-controls li.control{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-eael-filterable-gallery .eael-gallery-load-more .eael-filterable-gallery-load-more-text{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-eael-fluentform .eael-fluentform-description{font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );}.elementor-widget-eael-gravity-form .eael-gravity-form .gform_wrapper .gform_title, .elementor-widget-eael-gravity-form .eael-gravity-form .eael-gravity-form-title{font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );}.elementor-widget-eael-gravity-form .eael-gravity-form .gform_wrapper .gform_description, .elementor-widget-eael-gravity-form .eael-gravity-form .eael-gravity-form-description{font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );}.elementor-widget-eael-gravity-form .eael-gravity-form .gfield.gsection .gsection_title{font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );}.elementor-widget-eael-gravity-form .eael-gravity-form .ginput_container_fileupload input[type="file"]::file-selector-button, .elementor-widget-eael-gravity-form .eael-gravity-form .ginput_container_fileupload input[type="file"]::-webkit-file-upload-button, .elementor-widget-eael-gravity-form .eael-gravity-form .ginput_container_fileupload .button{font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );}.elementor-widget-eael-gravity-form .eael-gravity-form .gform_footer input[type="submit"], .elementor-widget-eael-gravity-form .eael-gravity-form .gform_body .gform_page_footer input[type="submit"],.elementor-widget-eael-gravity-form .eael-gravity-form .gform_body input[type="submit"].gform-button{font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );}.elementor-widget-eael-gravity-form .eael-gravity-form .gform_body .gform_page_footer input[type="button"]{font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );}.elementor-widget-eael-gravity-form .eael-gravity-form .gform_confirmation_wrapper .gform_confirmation_message{font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );}.elementor-widget-eael-nft-gallery .eael-nft-gallery-load-more .eael-nft-gallery-load-more-text{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-eael-ninja .eael-ninja-form .eael-contact-form-description{font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );}.elementor-widget-eael-ninja .eael-ninja-form .submit-container input[type="button"],.elementor-widget-eael-ninja .eael-ninja-form .submit-container input[type="submit"]{font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );}.elementor-widget-eael-ninja .eael-ninja-form .nf-form-fields-required{font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );}.elementor-widget-eael-post-grid .eael-meta-posted-on{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-eael-post-grid .eael-entry-meta > span{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-eael-post-grid .eael-entry-title, .elementor-widget-eael-post-grid .eael-entry-title a{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-eael-post-grid .eael-grid-post-excerpt p{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-eael-post-grid .post-meta-categories li, .elementor-widget-eael-post-grid .post-meta-categories li a{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-eael-post-timeline .eael-timeline-post-title .eael-timeline-post-title-text{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-eael-post-timeline .eael-timeline-post-excerpt p{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-eael-progress-bar .eael-progressbar-title{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-eael-progress-bar .eael-progressbar-line-fill.eael-has-inner-title{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-eael-progress-bar .eael-progressbar-count-wrap{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-eael-progress-bar .eael-progressbar-half-circle-after span{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-eael-simple-menu .eael-simple-menu >li > a, .eael-simple-menu-container .eael-simple-menu-toggle-text{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-eael-simple-menu .eael-simple-menu li ul li > a{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-eael-twitter-feed .eael-twitter-feed-item .eael-twitter-feed-item-icon{color:var( --e-global-color-primary );}.elementor-widget-eael-twitter-feed .eael-twitter-feed-load-more .eael-twitter-feed-load-more-text{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-eael-weform .eael-weform-container ul.wpuf-form .wpuf-submit input[type="submit"]{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-eael-wpforms .eael-contact-form-description, .elementor-widget-eael-wpforms .wpforms-description{font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );}.elementor-widget-eael-wpforms .eael-wpforms .wpforms-field label, .elementor-widget-eael-wpforms .eael-wpforms .wpforms-field legend{font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );}.elementor-widget-eael-wpforms .eael-wpforms .wpforms-field input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]), .elementor-widget-eael-wpforms .eael-wpforms .wpforms-field textarea, .elementor-widget-eael-wpforms .eael-wpforms .wpforms-field select{font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );}.elementor-widget-eael-wpforms .eael-wpforms .wpforms-submit-container .wpforms-submit{font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );}.elementor-widget-ucaddon_logo_card_testimonial .ue-text{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_logo_card_testimonial .ue-title{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_logo_card_testimonial .ue-subtitle{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_underline_animated_button .underline_animated_button a{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_gradient_underline_text_effect .gradient_underline_text_effect{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_gradient_underline_text_effect .beginning_text{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_gradient_underline_text_effect .underline--magical{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_gradient_underline_text_effect .ending_text{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_text_rotator .beginning_text_typography{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_text_rotator .middle_text_typography{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_text_rotator .ending_text_typography{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_gradient_text_effect .uc_style_gradient_text_effect_elementor_beginning_text{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_gradient_text_effect .uc_style_gradient_text_effect_elementor_text{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_gradient_text_effect .uc_style_gradient_text_effect_elementor_ending_text{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_simple_slider .ue_simple_slider_title{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_simple_slider .ue_simple_slider_text{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_hover_text_reveal_content_box .uc_title{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_hover_text_reveal_content_box .uc_description{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_split_hero .uc_title{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_split_hero .uc_subtitle{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_split_hero .uc_text{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_split_hero .uc_btn{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_border_hero .uc_style_border_hero_elementor_title{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_border_hero .uc_style_border_hero_elementor_big_title{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_border_hero .uc_style_border_hero_elementor_sub_title{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_border_hero .uc_style_border_hero_elementor_button_text{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_woocommerce_product_list .product-text-name{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_woocommerce_product_list .ue-product-category{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_woocommerce_product_list .product-short-description{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_woocommerce_product_list .uc_regular_price{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_woocommerce_product_list .uc_sale_price{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_woocommerce_product_list .uc-buttons a{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_woocommerce_product_list .product-img-overlay .uc-buttons a{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_woocommerce_product_list .ue_woocommerce_product_list_badge{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_content_tabs .uc_bold_tabs ul li a, .r-tabs-accordion-title a{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_content_tabs .tab-container{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_card_carousel .card_carousel_title{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_card_carousel .card_carousel_text{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_card_carousel .uc_more_btn{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_timeline_bullets .ue_item_title{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_timeline_bullets .ue_item_text{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_arrow_navigation .ue-remote-arrow{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_business_hours .ue_business_hours_header_title{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_business_hours .ue_business_hours_header_subtitle{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_business_hours .ue_business_hours_list_item{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_business_hours .ue_business_hours_footer{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_price_list .menu-title{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_price_list .menu-price{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_price_list .menu-text{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-ucaddon_price_list .ue_price_list_badge{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-text-path{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-premium-addon-banner .premium-banner-ib-desc .premium_banner_title{color:var( --e-global-color-primary );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-addon-banner .premium_banner_content{color:var( --e-global-color-text );font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-premium-addon-banner .premium-banner-link{color:var( --e-global-color-text );font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-premium-addon-banner .premium-banner-link:hover{color:var( --e-global-color-text );}.elementor-widget-premium-addon-blog .premium-blog-filters-container li a.category{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );color:var( --e-global-color-secondary );background-color:var( --e-global-color-primary );}.elementor-widget-premium-addon-blog .premium-blog-filters-container li a.active{color:var( --e-global-color-primary );background-color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-blog .premium-blog-post-link:before, .elementor-widget-premium-addon-blog .premium-blog-post-link:after{border-color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-blog .premium-blog-entry-title, .elementor-widget-premium-addon-blog .premium-blog-entry-title a{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-addon-blog .premium-blog-entry-title a{color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-blog .premium-blog-entry-title:hover a{color:var( --e-global-color-primary );}.elementor-widget-premium-addon-blog .premium-blog-cats-container a{font-family:var( --e-global-typography-secondary-font-family ), Sans-serif;font-weight:var( --e-global-typography-secondary-font-weight );}.elementor-widget-premium-addon-blog .premium-blog-meta-data{font-family:var( --e-global-typography-secondary-font-family ), Sans-serif;font-weight:var( --e-global-typography-secondary-font-weight );}.elementor-widget-premium-addon-blog .premium-blog-post-content{color:var( --e-global-color-text );}.elementor-widget-premium-addon-blog .premium-blog-post-tags-container{font-family:var( --e-global-typography-secondary-font-family ), Sans-serif;font-weight:var( --e-global-typography-secondary-font-weight );color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-blog .premium-blog-pagination-container .page-numbers{color:var( --e-global-color-secondary );background-color:var( --e-global-color-primary );}.elementor-widget-premium-addon-blog .premium-blog-pagination-container .page-numbers:hover{color:var( --e-global-color-primary );background-color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-blog .premium-blog-pagination-container span.current{color:var( --e-global-color-primary );background-color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-blog ul.slick-dots li{color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-blog ul.slick-dots li.slick-active{color:var( --e-global-color-primary );}.elementor-widget-premium-addon-blog .premium-blog-wrap .slick-arrow{color:var( --e-global-color-primary );background-color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-button .premium-button{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-addon-button .premium-button .premium-button-text-icon-wrapper span{color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-button .premium-button-text-icon-wrapper i{color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-button .premium-drawable-icon *, .elementor-widget-premium-addon-button .premium-button-text-icon-wrapper svg:not([class*="premium-"]){fill:var( --e-global-color-secondary );}.elementor-widget-premium-addon-button .premium-button, .elementor-widget-premium-addon-button .premium-button.premium-button-style2-shutinhor:before , .elementor-widget-premium-addon-button .premium-button.premium-button-style2-shutinver:before , .elementor-widget-premium-addon-button .premium-button-style5-radialin:before , .elementor-widget-premium-addon-button .premium-button-style5-rectin:before{background-color:var( --e-global-color-primary );}.elementor-widget-premium-addon-button .premium-button:hover .premium-button-text-icon-wrapper span{color:var( --e-global-color-primary );}.elementor-widget-premium-addon-button .premium-button:hover .premium-button-text-icon-wrapper i{color:var( --e-global-color-primary );}.elementor-widget-premium-addon-button .premium-button:hover .premium-drawable-icon *, .elementor-widget-premium-addon-button .premium-button:hover svg:not([class*="premium-"]){fill:var( --e-global-color-primary );}.elementor-widget-premium-addon-button .premium-button-style4-icon-wrapper{color:var( --e-global-color-primary );}.elementor-widget-premium-addon-button .premium-button-style4-icon-wrapper svg{fill:var( --e-global-color-primary );}.elementor-widget-premium-addon-button .premium-button-none:hover, .elementor-widget-premium-addon-button .premium-button-style1:before, .elementor-widget-premium-addon-button .premium-button-style2-shutouthor:before, .elementor-widget-premium-addon-button .premium-button-style2-shutoutver:before, .elementor-widget-premium-addon-button .premium-button-style2-shutinhor, .elementor-widget-premium-addon-button .premium-button-style2-shutinver, .elementor-widget-premium-addon-button .premium-button-style2-dshutinhor:before, .elementor-widget-premium-addon-button .premium-button-style2-dshutinver:before, .elementor-widget-premium-addon-button .premium-button-style2-scshutouthor:before, .elementor-widget-premium-addon-button .premium-button-style2-scshutoutver:before, .elementor-widget-premium-addon-button .premium-button-style3-after:hover, .elementor-widget-premium-addon-button .premium-button-style3-before:hover, .elementor-widget-premium-addon-button .premium-button-style4-icon-wrapper, .elementor-widget-premium-addon-button .premium-button-style5-radialin, .elementor-widget-premium-addon-button .premium-button-style5-radialout:before, .elementor-widget-premium-addon-button .premium-button-style5-rectin, .elementor-widget-premium-addon-button .premium-button-style5-rectout:before, .elementor-widget-premium-addon-button .premium-button-style6-bg, .elementor-widget-premium-addon-button .premium-button-style6:before{background-color:var( --e-global-color-text );}.elementor-widget-premium-addon-button .premium-button-style7 .premium-button-text-icon-wrapper:before{background-color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-button .premium-button-style7 .premium-button-text-icon-wrapper:after{background-color:var( --e-global-color-text );}.elementor-widget-premium-carousel-widget .premium-carousel-wrapper .slick-arrow{color:var( --e-global-color-secondary );}.elementor-widget-premium-carousel-widget .premium-carousel-wrapper .slick-arrow svg{fill:var( --e-global-color-secondary );}.elementor-widget-premium-carousel-widget .premium-carousel-wrapper .slick-arrow:hover{color:var( --e-global-color-secondary );}.elementor-widget-premium-carousel-widget .premium-carousel-wrapper .slick-arrow:hover svg{fill:var( --e-global-color-secondary );}.elementor-widget-premium-carousel-widget .premium-carousel-nav-fraction{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-carousel-widget ul.slick-dots li{color:var( --e-global-color-secondary );}.elementor-widget-premium-carousel-widget ul.slick-dots li svg{fill:var( --e-global-color-secondary );}.elementor-widget-premium-carousel-widget .fraction-pagination-total{color:var( --e-global-color-secondary );}.elementor-widget-premium-carousel-widget .fraction-pagination-separator{color:var( --e-global-color-secondary );}.elementor-widget-premium-carousel-widget ul.slick-dots li.slick-active{color:var( --e-global-color-primary );}.elementor-widget-premium-carousel-widget ul.slick-dots li.slick-active svg{fill:var( --e-global-color-primary );}.elementor-widget-premium-carousel-widget .fraction-pagination-current{color:var( --e-global-color-primary );}.elementor-widget-premium-countdown-timer .countdown .countdown-section .countdown-amount, .elementor-widget-premium-countdown-timer .premium-countdown-flip .premium-countdown-figure span{color:var( --e-global-color-secondary );font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-premium-countdown-timer .countdown .countdown-section .countdown-amount,
					 .elementor-widget-premium-countdown-timer .premium-countdown-flip .premium-countdown-figure,
					 .elementor-widget-premium-countdown-timer .premium-countdown-flip .premium-countdown-figure .top,
					 .elementor-widget-premium-countdown-timer .premium-countdown-flip .premium-countdown-figure .top-back,
					 .elementor-widget-premium-countdown-timer .premium-countdown-flip .premium-countdown-figure .bottom-back {background-color:var( --e-global-color-primary );}.elementor-widget-premium-countdown-timer .countdown .countdown-section .countdown-period, .elementor-widget-premium-countdown-timer .premium-countdown-label{color:var( --e-global-color-secondary );font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-premium-countdown-timer .countdown_separator{color:var( --e-global-color-secondary );}.elementor-widget-premium-countdown-timer .premium-countdown-exp-message{color:var( --e-global-color-secondary );font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-premium-counter .premium-counter-area .premium-counter-icon .icon i{color:var( --e-global-color-primary );}.elementor-widget-premium-counter .premium-drawable-icon *, .elementor-widget-premium-counter .premium-counter-icon svg:not([class*="premium-"]){fill:var( --e-global-color-primary );}.elementor-widget-premium-counter .premium-counter-area .premium-counter-icon .icon-bg{background:var( --e-global-color-secondary );}.elementor-widget-premium-counter .premium-counter-title .premium-counter-title-val{color:var( --e-global-color-primary );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-counter .premium-counter-desc{color:var( --e-global-color-secondary );font-family:var( --e-global-typography-secondary-font-family ), Sans-serif;font-weight:var( --e-global-typography-secondary-font-weight );}.elementor-widget-premium-counter .premium-counter-area .premium-counter-init{color:var( --e-global-color-primary );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-counter .premium-counter-area span#prefix{color:var( --e-global-color-primary );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-counter .premium-counter-area span#suffix{color:var( --e-global-color-primary );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-addon-dual-header .premium-dual-header-first-span{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );color:var( --e-global-color-primary );}.elementor-widget-premium-addon-dual-header .premium-dual-header-second-header{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-dual-header.premium-bg-text-yes .elementor-widget-container:before{color:var( --e-global-color-primary );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-addon-fancy-text .premium-fancy-text{color:var( --e-global-color-primary );}.elementor-widget-premium-addon-fancy-text .premium-fancy-svg-text .premium-fancy-list-items{fill:var( --e-global-color-primary );}.elementor-widget-premium-addon-fancy-text .premium-fancy-text-wrapper:not(.auto-fade) .premium-fancy-text, .elementor-widget-premium-addon-fancy-text .premium-fancy-text svg g > text{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-addon-fancy-text .typed-cursor{color:var( --e-global-color-primary );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-addon-fancy-text .premium-prefix-text, .elementor-widget-premium-addon-fancy-text .premium-suffix-text{color:var( --e-global-color-secondary );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-addon-fancy-text .loading .premium-loading-bar{background-color:var( --e-global-color-primary );}.elementor-widget-premium-img-gallery .premium-gallery-img-name, .elementor-widget-premium-img-gallery .premium-gallery-img-name a{color:var( --e-global-color-secondary );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-img-gallery .premium-gallery-img-desc, .elementor-widget-premium-img-gallery .premium-gallery-img-desc a{color:var( --e-global-color-text );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-img-gallery .pa-gallery-magnific-image i, .elementor-widget-premium-img-gallery .pa-gallery-img-link i{color:var( --e-global-color-primary );}.elementor-widget-premium-img-gallery .pa-gallery-magnific-image svg, .elementor-widget-premium-img-gallery .pa-gallery-img-link svg{fill:var( --e-global-color-primary );color:var( --e-global-color-primary );}.elementor-widget-premium-img-gallery .pa-gallery-magnific-image span, .elementor-widget-premium-img-gallery .pa-gallery-img-link span{background-color:var( --e-global-color-secondary );}.elementor-widget-premium-img-gallery .pa-gallery-magnific-image:hover i, .elementor-widget-premium-img-gallery .pa-gallery-img-link:hover i{color:var( --e-global-color-primary );}.elementor-widget-premium-img-gallery .pa-gallery-magnific-image:hover svg, .elementor-widget-premium-img-gallery .pa-gallery-img-link:hover svg{fill:var( --e-global-color-primary );color:var( --e-global-color-primary );}.elementor-widget-premium-img-gallery .pa-gallery-magnific-image:hover span, .elementor-widget-premium-img-gallery .pa-gallery-img-link:hover span{background-color:var( --e-global-color-secondary );}.elementor-widget-premium-img-gallery .premium-gallery-cats-container li a.category{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );color:var( --e-global-color-secondary );}.elementor-widget-premium-img-gallery .premium-gallery-cats-container li a.active{color:var( --e-global-color-primary );}.elementor-widget-premium-img-gallery .premium-gallery-load-more-btn{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );color:var( --e-global-color-secondary );}.elementor-widget-premium-img-gallery .premium-gallery-load-more-btn .premium-loader{border-color:var( --e-global-color-secondary );border-top-color:var( --e-global-color-secondary );}.elementor-widget-premium-img-gallery .premium-gallery-load-more-btn:hover{color:var( --e-global-color-secondary );}.elementor-widget-premium-icon-list .premium-bullet-list-wrapper i, .elementor-widget-premium-icon-list .premium-bullet-list-icon-text p{color:var( --e-global-color-primary );}.elementor-widget-premium-icon-list svg:not([class*="premium-"]){fill:var( --e-global-color-primary );}.elementor-widget-premium-icon-list .premium-bullet-list-blur:hover .premium-bullet-list-wrapper i, .elementor-widget-premium-icon-list .premium-bullet-list-blur:hover .premium-bullet-list-wrapper svg, .elementor-widget-premium-icon-list .premium-bullet-list-blur:hover .premium-bullet-list-wrapper .premium-bullet-list-icon-text p{text-shadow:var( --e-global-color-primary );}.elementor-widget-premium-icon-list .premium-bullet-list-content:hover .premium-bullet-list-wrapper i, .elementor-widget-premium-icon-list .premium-bullet-list-content:hover .premium-bullet-list-icon-text p{color:var( --e-global-color-primary );}.elementor-widget-premium-icon-list .premium-bullet-list-blur .premium-bullet-list-content:hover .premium-bullet-list-wrapper i, .elementor-widget-premium-icon-list .premium-bullet-list-blur .premium-bullet-list-content:hover  .premium-bullet-list-icon-text p{text-shadow:var( --e-global-color-primary );color:var( --e-global-color-primary );}.elementor-widget-premium-icon-list .premium-bullet-list-content:hover svg:not([class*="premium-"]){fill:var( --e-global-color-primary );} .elementor-widget-premium-icon-list  .premium-bullet-list-icon-text p{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );} .elementor-widget-premium-icon-list .premium-bullet-list-text span {font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );} .elementor-widget-premium-icon-list  .premium-bullet-list-text span{color:var( --e-global-color-primary );} .elementor-widget-premium-icon-list .premium-bullet-list-blur:hover .premium-bullet-list-text span{text-shadow:var( --e-global-color-primary );}.elementor-widget-premium-icon-list .premium-bullet-list-content:hover .premium-bullet-list-text span{color:var( --e-global-color-primary );}.elementor-widget-premium-icon-list .premium-bullet-list-blur .premium-bullet-list-content:hover .premium-bullet-list-text span{text-shadow:var( --e-global-color-primary );color:var( --e-global-color-primary );} .elementor-widget-premium-icon-list  .premium-bullet-list-badge span{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-premium-icon-list .premium-bullet-list-badge span{color:var( --e-global-color-primary );background-color:var( --e-global-color-primary );}.elementor-widget-premium-icon-list  .premium-bullet-list-divider:not(:last-child):after {border-top-color:var( --e-global-color-secondary );}.elementor-widget-premium-icon-list  .premium-bullet-list-divider-inline:not(:last-child):after {border-left-color:var( --e-global-color-secondary );}.elementor-widget-premium-icon-list  li.premium-bullet-list-content:not(:last-of-type) .premium-bullet-list-connector .premium-icon-connector-content:after{border-color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-image-button .premium-image-button{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );background-color:var( --e-global-color-primary );}.elementor-widget-premium-addon-image-button .premium-image-button .premium-image-button-text-icon-wrapper span{color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-image-button .premium-image-button-text-icon-wrapper i{color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-image-button .premium-drawable-icon, .elementor-widget-premium-addon-image-button svg:not([class*="premium-"]){fill:var( --e-global-color-secondary );}.elementor-widget-premium-addon-image-button .premium-image-button:hover .premium-image-button-text-icon-wrapper span{color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-image-button .premium-image-button:hover .premium-image-button-text-icon-wrapper i{color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-image-button .premium-image-button:hover .premium-drawable-icon, .elementor-widget-premium-addon-image-button .premium-image-button:hover svg:not([class*="premium-"]){fill:var( --e-global-color-secondary );}.elementor-widget-premium-addon-image-button .premium-image-button-style4-icon-wrapper{color:var( --e-global-color-primary );}.elementor-widget-premium-addon-image-button .premium-image-button-style4-icon-wrapper svg{fill:var( --e-global-color-primary );}.elementor-widget-premium-addon-image-button .premium-image-button-style3:before{background-color:var( --e-global-color-primary );}.elementor-widget-premium-addon-image-button .premium-image-button-overlap-effect-horizontal:before, .elementor-widget-premium-addon-image-button .premium-image-button-overlap-effect-vertical:before{background-color:var( --e-global-color-primary );}.elementor-widget-premium-addon-image-button .premium-image-button-none:hover, .elementor-widget-premium-addon-image-button .premium-image-button-style4-icon-wrapper, .elementor-widget-premium-addon-image-button .premium-image-button-style1:before, .elementor-widget-premium-addon-image-button .premium-image-button-style3:hover, .elementor-widget-premium-addon-image-button .premium-image-button-overlap-effect-horizontal:hover, .elementor-widget-premium-addon-image-button .premium-image-button-overlap-effect-vertical:hover, .elementor-widget-premium-addon-image-button .premium-button-style6-bg, .elementor-widget-premium-addon-image-button .premium-button-style6:before{background-color:var( --e-global-color-text );}.elementor-widget-premium-addon-image-button .premium-image-button-squares-effect:before, .elementor-widget-premium-addon-image-button .premium-image-button-squares-effect:after,.elementor-widget-premium-addon-image-button .premium-image-button-squares-square-container:before, .elementor-widget-premium-addon-image-button .premium-image-button-squares-square-container:after{background-color:var( --e-global-color-primary );}.elementor-widget-premium-addon-image-separator .premium-image-separator-container i{color:var( --e-global-color-primary );}.elementor-widget-premium-addon-image-separator .premium-drawable-icon *, .elementor-widget-premium-addon-image-separator svg:not([class*="premium-"]){fill:var( --e-global-color-primary );}.elementor-widget-premium-addon-image-separator .premium-image-separator-container i:hover{color:var( --e-global-color-primary );}.elementor-widget-premium-addon-image-separator .premium-drawable-icon:hover *, .elementor-widget-premium-addon-image-separator svg:not([class*="premium-"]):hover{fill:var( --e-global-color-primary );}.elementor-widget-premium-addon-image-separator .premium-image-separator-container i, .elementor-widget-premium-addon-image-separator .premium-image-separator-container > svg{background-color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-image-separator .premium-image-separator-container i:hover, .elementor-widget-premium-addon-image-separator .premium-image-separator-container > svg:hover{background-color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-maps .premium-maps-info-title{color:var( --e-global-color-primary );}.elementor-widget-premium-addon-maps .premium-maps-info-desc, .elementor-widget-premium-addon-maps .premium-maps-info-desc a{color:var( --e-global-color-secondary );}.elementor-widget-premium-media-wheel .premium-adv-carousel__media-title{color:var( --e-global-color-primary );}.elementor-widget-premium-media-wheel .premium-adv-carousel__media-desc{color:var( --e-global-color-primary );}.elementor-widget-premium-media-wheel .flipster__button i{color:var( --e-global-color-primary );}.elementor-widget-premium-media-wheel .flipster__button svg, .elementor-widget-premium-media-wheel .flipster__button svg *{fill:var( --e-global-color-primary );}.elementor-widget-premium-media-wheel .flipster__button{background-color:var( --e-global-color-secondary );}.elementor-widget-premium-media-wheel .pa-media-magnific-image i{color:var( --e-global-color-primary );}.elementor-widget-premium-media-wheel .pa-media-magnific-image svg{fill:var( --e-global-color-primary );color:var( --e-global-color-primary );}.elementor-widget-premium-media-wheel .pa-media-magnific-image span{background-color:var( --e-global-color-secondary );}.elementor-widget-premium-media-wheel .pa-media-magnific-image:hover i{color:var( --e-global-color-primary );}.elementor-widget-premium-media-wheel .pa-media-magnific-image:hover svg{fill:var( --e-global-color-primary );color:var( --e-global-color-primary );}.elementor-widget-premium-media-wheel .pa-media-magnific-image:hover span{background-color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-modal-box .premium-modal-trigger-btn, .elementor-widget-premium-addon-modal-box .premium-modal-trigger-text{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-modal-box .premium-modal-trigger-btn i{color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-modal-box .premium-modal-trigger-btn svg, .elementor-widget-premium-addon-modal-box .premium-modal-trigger-btn svg *{fill:var( --e-global-color-secondary );}.elementor-widget-premium-addon-modal-box .premium-modal-trigger-btn{background-color:var( --e-global-color-primary );}.elementor-widget-premium-addon-modal-box .premium-modal-trigger-btn:hover, .elementor-widget-premium-addon-modal-box .premium-modal-trigger-text:hover{color:var( --e-global-color-primary );}.elementor-widget-premium-addon-modal-box .premium-modal-trigger-btn:hover i{color:var( --e-global-color-primary );}.elementor-widget-premium-addon-modal-box .premium-modal-trigger-btn:hover svg, .elementor-widget-premium-addon-modal-box .premium-modal-trigger-btn:hover svg *{fill:var( --e-global-color-primary );}.elementor-widget-premium-addon-modal-box .premium-modal-trigger-btn:hover{background:var( --e-global-color-text );}.elementor-widget-premium-addon-modal-box .premium-modal-box-modal-title{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-addon-modal-box .premium-modal-box-modal-lower-close{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );color:var( --e-global-color-secondary );background-color:var( --e-global-color-primary );}.elementor-widget-premium-addon-modal-box .premium-modal-box-modal-lower-close:hover{color:var( --e-global-color-primary );background-color:var( --e-global-color-secondary );}.elementor-widget-premium-nav-menu .premium-main-nav-menu > .premium-nav-menu-item > .premium-menu-link{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );color:var( --e-global-color-text );}.elementor-widget-premium-nav-menu .premium-main-nav-menu > .premium-nav-menu-item > .premium-menu-link .premium-dropdown-icon{color:var( --e-global-color-text );}.elementor-widget-premium-nav-menu .premium-main-nav-menu > .premium-nav-menu-item:hover > .premium-menu-link{color:var( --e-global-color-secondary );}.elementor-widget-premium-nav-menu .premium-main-nav-menu > .premium-nav-menu-item:hover > .premium-menu-link .premium-dropdown-icon{color:var( --e-global-color-secondary );}.elementor-widget-premium-nav-menu .premium-nav-widget-container:not(.premium-nav-pointer-framed) .premium-menu-link-parent:before,
					.elementor-widget-premium-nav-menu .premium-nav-widget-container:not(.premium-nav-pointer-framed) .premium-menu-link-parent:after{background-color:var( --e-global-color-secondary );}.elementor-widget-premium-nav-menu .premium-nav-pointer-framed .premium-menu-link-parent:before,
					.elementor-widget-premium-nav-menu .premium-nav-pointer-framed .premium-menu-link-parent:after{border-color:var( --e-global-color-secondary );}.elementor-widget-premium-nav-menu .premium-main-nav-menu > .premium-active-item > .premium-menu-link{color:var( --e-global-color-accent );}.elementor-widget-premium-nav-menu .premium-main-nav-menu > .premium-active-item > .premium-menu-link .premium-dropdown-icon{color:var( --e-global-color-accent );}.elementor-widget-premium-nav-menu .premium-nav-menu-item > .premium-menu-link > .premium-item-icon{color:var( --e-global-color-primary );}.elementor-widget-premium-nav-menu .premium-main-nav-menu .premium-sub-menu .premium-sub-menu-link{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );color:var( --e-global-color-secondary );}.elementor-widget-premium-nav-menu .premium-main-nav-menu .premium-sub-menu .premium-sub-menu-link .premium-dropdown-icon{color:var( --e-global-color-secondary );}.elementor-widget-premium-nav-menu:not(.premium-hamburger-menu):not(.premium-nav-slide):not(.premium-nav-dropdown) .premium-main-nav-menu .premium-sub-menu .premium-sub-menu-item:hover,
									.elementor-widget-premium-nav-menu.premium-hamburger-menu .premium-main-nav-menu .premium-sub-menu > .premium-sub-menu-item:hover > .premium-sub-menu-link,
									.elementor-widget-premium-nav-menu.premium-nav-slide .premium-main-nav-menu .premium-sub-menu > .premium-sub-menu-item:hover > .premium-sub-menu-link,
									.elementor-widget-premium-nav-menu.premium-nav-dropdown .premium-main-nav-menu .premium-sub-menu > .premium-sub-menu-item:hover > .premium-sub-menu-link{background-color:var( --e-global-color-secondary );}.elementor-widget-premium-nav-menu .premium-main-nav-menu .premium-sub-menu .premium-active-item .premium-sub-menu-link .premium-dropdown-icon{color:var( --e-global-color-primary );}.elementor-widget-premium-nav-menu .premium-sub-menu-item .premium-sub-menu-link .premium-sub-item-icon{color:var( --e-global-color-primary );}.elementor-widget-premium-notifications .premium-blog-post-link:before, .elementor-widget-premium-notifications .premium-blog-post-link:after{border-color:var( --e-global-color-secondary );}.elementor-widget-premium-notifications .premium-blog-entry-title, .elementor-widget-premium-notifications .premium-blog-entry-title a{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-notifications .premium-blog-entry-title a{color:var( --e-global-color-secondary );}.elementor-widget-premium-notifications .premium-blog-entry-title:hover a{color:var( --e-global-color-primary );}.elementor-widget-premium-notifications .premium-blog-meta-data{font-family:var( --e-global-typography-secondary-font-family ), Sans-serif;font-weight:var( --e-global-typography-secondary-font-weight );}.elementor-widget-premium-notifications .premium-blog-post-content{color:var( --e-global-color-text );}.elementor-widget-premium-notifications .premium-blog-post-tags-container{font-family:var( --e-global-typography-secondary-font-family ), Sans-serif;font-weight:var( --e-global-typography-secondary-font-weight );color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-person .premium-person-name{color:var( --e-global-color-primary );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-addon-person .premium-person-title{color:var( --e-global-color-secondary );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-addon-person .premium-person-content{color:var( --e-global-color-text );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-addon-person .premium-person-list-item i{color:var( --e-global-color-primary );}.elementor-widget-premium-addon-person .premium-person-list-item:hover i{color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-person .premium-persons-container .slick-arrow{color:var( --e-global-color-primary );background-color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-person .premium-persons-container .slick-arrow:hover{color:var( --e-global-color-primary );background-color:var( --e-global-color-secondary );}.elementor-widget-premium-pinterest-feed .premium-pinterest-feed__pin-creator a{color:var( --e-global-color-secondary );}.elementor-widget-premium-pinterest-feed .premium-pinterest-feed__created-at{color:var( --e-global-color-secondary );}.elementor-widget-premium-pinterest-feed .premium-pinterest-feed__board-trigger, .elementor-widget-premium-pinterest-feed .premium-pinterest-feed__load-more-btn{font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );}.elementor-widget-premium-pinterest-feed ul.slick-dots li{color:var( --e-global-color-secondary );}.elementor-widget-premium-pinterest-feed ul.slick-dots li.slick-active{color:var( --e-global-color-primary );}.elementor-widget-premium-pinterest-feed .premium-pinterest-feed__pins-wrapper .slick-arrow{color:var( --e-global-color-primary );background-color:var( --e-global-color-secondary );}.elementor-widget-premium-pinterest-feed .premium-pinterest-sharer{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-pinterest-feed .premium-pinterest-share-text{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-post-ticker.premium-ticker-pointer-yes:not(.premium-reversed-yes) .premium-post-ticker__content > div:first-child::after{border-left-color:var( --e-global-color-primary );}.elementor-widget-premium-post-ticker.premium-ticker-pointer-yes.premium-reversed-yes  .premium-post-ticker__content > div:first-child::after{border-right-color:var( --e-global-color-primary );}.elementor-widget-premium-post-ticker.premium-post-ticker__layout-3 .premium-post-ticker__header-wrapper::after{background-color:var( --e-global-color-text );}.elementor-widget-premium-post-ticker .premium-post-ticker__title-wrapper, .elementor-widget-premium-post-ticker.premium-post-ticker__layout-2 .premium-post-ticker__title-wrapper::after, .elementor-widget-premium-post-ticker.premium-post-ticker__layout-3 .premium-post-ticker__header-wrapper::after{background-color:var( --e-global-color-primary );}.elementor-widget-premium-post-ticker .premium-post-ticker__post-date span{font-family:var( --e-global-typography-secondary-font-family ), Sans-serif;font-weight:var( --e-global-typography-secondary-font-weight );}.elementor-widget-premium-post-ticker .premium-post-ticker__post-author a{font-family:var( --e-global-typography-secondary-font-family ), Sans-serif;font-weight:var( --e-global-typography-secondary-font-weight );}.elementor-widget-premium-post-ticker .premium-post-ticker__arrows a{color:var( --e-global-color-secondary );}.elementor-widget-premium-post-ticker .premium-post-ticker__arrows a:hover{color:var( --e-global-color-primary );background-color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-pricing-table .premium-pricing-icon-container i{color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-pricing-table .premium-pricing-icon-container .premium-drawable-icon *, .elementor-widget-premium-addon-pricing-table .premium-pricing-icon-container svg:not([class*="premium-"]){fill:var( --e-global-color-secondary );}.elementor-widget-premium-addon-pricing-table .premium-pricing-icon-container i, .elementor-widget-premium-addon-pricing-table .premium-pricing-icon, .elementor-widget-premium-addon-pricing-table .premium-pricing-image{background-color:var( --e-global-color-primary );}.elementor-widget-premium-addon-pricing-table .premium-pricing-table-title{color:var( --e-global-color-primary );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-addon-pricing-table .premium-pricing-slashed-price-value{color:var( --e-global-color-primary );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-addon-pricing-table .premium-pricing-price-currency{color:var( --e-global-color-primary );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-addon-pricing-table .premium-pricing-price-value{color:var( --e-global-color-primary );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-addon-pricing-table .premium-pricing-price-separator{color:var( --e-global-color-primary );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-addon-pricing-table .premium-pricing-price-duration{color:var( --e-global-color-primary );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-addon-pricing-table .premium-pricing-list-span{color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-pricing-table .premium-pricing-list .premium-pricing-list-span{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-addon-pricing-table .premium-pricing-feature-icon{color:var( --e-global-color-primary );}.elementor-widget-premium-addon-pricing-table .premium-pricing-list-item .premium-drawable-icon *, .elementor-widget-premium-addon-pricing-table .premium-pricing-list-item svg:not([class*="premium-"]){fill:var( --e-global-color-primary );}.elementor-widget-premium-addon-pricing-table .premium-pricing-list-tooltip{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-addon-pricing-table .premium-pricing-description-container{color:var( --e-global-color-secondary );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-addon-pricing-table .premium-pricing-price-button{color:var( --e-global-color-secondary );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-addon-pricing-table .premium-pricing-price-button:hover{color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-pricing-table .premium-pricing-badge-container .corner span{color:var( --e-global-color-secondary );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-addon-pricing-table .premium-badge-triangle.premium-badge-left .corner{border-top-color:var( --e-global-color-primary );}.elementor-widget-premium-addon-pricing-table .premium-badge-triangle.premium-badge-right .corner{border-right-color:var( --e-global-color-primary );}.elementor-widget-premium-addon-pricing-table .premium-badge-circle, .elementor-widget-premium-addon-pricing-table .premium-badge-stripe .corner, .elementor-widget-premium-addon-pricing-table .premium-badge-flag .corner{background-color:var( --e-global-color-primary );}.elementor-widget-premium-addon-pricing-table .premium-badge-flag.premium-badge-right .corner::before{border-left:var( --e-global-color-primary );}.elementor-widget-premium-addon-pricing-table .premium-badge-flag.premium-badge-left .corner::after{border-right:var( --e-global-color-primary );}.elementor-widget-premium-addon-progressbar .premium-progressbar-circle-base, .elementor-widget-premium-addon-progressbar .premium-progressbar-circle-inner{border-color:var( --e-global-color-primary );}.elementor-widget-premium-addon-progressbar .premium-progressbar-circle div, .elementor-widget-premium-addon-progressbar .premium-progressbar-hf-circle-progress{border-color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-progressbar .premium-progressbar-left-label{color:var( --e-global-color-primary );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-addon-progressbar .premium-progressbar-right-label{color:var( --e-global-color-primary );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-addon-progressbar .premium-progressbar-circle-icon{color:var( --e-global-color-primary );}.elementor-widget-premium-addon-progressbar .premium-drawable-icon *, .elementor-widget-premium-addon-progressbar svg:not([class*="premium-"]){fill:var( --e-global-color-primary );}.elementor-widget-premium-addon-progressbar .premium-progressbar-center-label{color:var( --e-global-color-primary );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-addon-progressbar .premium-progressbar-percentage{color:var( --e-global-color-primary );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-addon-progressbar .premium-progressbar-arrow{color:var( --e-global-color-primary );}.elementor-widget-premium-addon-progressbar .premium-progressbar-pin{border-color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-progressbar .premium-progressbar-hf-label-left{color:var( --e-global-color-primary );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-addon-progressbar .premium-progressbar-hf-label-right{color:var( --e-global-color-primary );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-addon-testimonials .premium-testimonial-heading{color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-testimonials .premium-testimonial-company-link{color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-testimonials .premium-testimonial-text-wrapper{color:var( --e-global-color-text );}.elementor-widget-premium-addon-testimonials .premium-testimonial-box .slick-arrow{color:var( --e-global-color-primary );background-color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-testimonials .premium-testimonial-box .slick-arrow:hover{color:var( --e-global-color-primary );background-color:var( --e-global-color-secondary );}.elementor-widget-premium-tiktok-feed ul.slick-dots li{color:var( --e-global-color-secondary );}.elementor-widget-premium-tiktok-feed ul.slick-dots li.slick-active{color:var( --e-global-color-primary );}.elementor-widget-premium-tiktok-feed .premium-tiktok-feed__videos-wrapper .slick-arrow{color:var( --e-global-color-primary );background-color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-title .premium-title-header, .elementor-widget-premium-addon-title.premium-title-noise-yes .premium-title-text::before, .elementor-widget-premium-addon-title.premium-title-noise-yes .premium-title-text::after{color:var( --e-global-color-primary );}.elementor-widget-premium-addon-title.premium-title-stroke-yes .premium-title-text{-webkit-text-fill-color:var( --e-global-color-primary );}.elementor-widget-premium-addon-title .premium-title-style8 .premium-title-text[data-animation="shiny"]{--base-color:var( --e-global-color-primary );}.elementor-widget-premium-addon-title .premium-title-header{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-addon-title:not(.premium-title-clipped) .premium-title-style2, .elementor-widget-premium-addon-title.premium-title-clipped .premium-title-text{background-color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-title:not(.premium-title-clipped) .premium-title-style3, .elementor-widget-premium-addon-title.premium-title-clipped .premium-title-text{background-color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-title .premium-title-style5{border-bottom:var( --e-global-color-primary );}.elementor-widget-premium-addon-title .premium-title-style6{border-bottom:var( --e-global-color-primary );}.elementor-widget-premium-addon-title .premium-title-style6:before{border-bottom-color:var( --e-global-color-primary );}.elementor-widget-premium-addon-title .premium-title-style7-stripe{background-color:var( --e-global-color-primary );}.elementor-widget-premium-addon-title .premium-title-icon{color:var( --e-global-color-primary );}.elementor-widget-premium-addon-title .premium-drawable-icon *, .elementor-widget-premium-addon-title svg:not([class*="premium-"]){fill:var( --e-global-color-primary );}.elementor-widget-premium-addon-title .premium-title-bg-text:before{color:var( --e-global-color-primary );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-addon-video-box .premium-video-box-play-icon{color:var( --e-global-color-primary );}.elementor-widget-premium-addon-video-box .premium-video-box-play-icon-container:hover .premium-video-box-play-icon{color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-video-box .premium-video-box-text{color:var( --e-global-color-primary );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-addon-video-box .premium-video-box-description-container:hover .premium-video-box-text{color:var( --e-global-color-primary );}.elementor-widget-premium-addon-video-box .premium-video-box-description-container{background-color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-video-box .premium-video-box-sticky-close i{color:var( --e-global-color-secondary );}.elementor-widget-premium-addon-video-box .premium-video-box-sticky-infobar{color:var( --e-global-color-secondary );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-addon-video-box .premium-youtube-vid-title{color:var( --e-global-color-primary );}.elementor-widget-premium-vscroll .premium-vscroll-tooltip{color:var( --e-global-color-primary );background-color:var( --e-global-color-primary );}.elementor-widget-premium-vscroll .premium-vscroll-tooltip span{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-vscroll .premium-vscroll-inner .premium-vscroll-dots.right .premium-vscroll-tooltip::after{border-left-color:var( --e-global-color-primary );}.elementor-widget-premium-vscroll .premium-vscroll-inner .premium-vscroll-dots.left .premium-vscroll-tooltip::after{border-right-color:var( --e-global-color-primary );}.elementor-widget-premium-vscroll .premium-vscroll-dots .premium-vscroll-nav-link span{background-color:var( --e-global-color-primary );border-color:var( --e-global-color-secondary );}.elementor-widget-premium-vscroll .premium-vscroll-dots li.active .premium-vscroll-nav-link span{background-color:var( --e-global-color-secondary );}.elementor-widget-premium-vscroll .premium-vscroll-dots{background-color:var( --e-global-color-primary );}.elementor-widget-premium-vscroll .premium-vscroll-nav-menu .premium-vscroll-nav-item .premium-vscroll-nav-link{color:var( --e-global-color-primary );}.elementor-widget-premium-vscroll .premium-vscroll-nav-menu .premium-vscroll-nav-item .premium-vscroll-nav-link:hover{color:var( --e-global-color-primary );}.elementor-widget-premium-vscroll .premium-vscroll-nav-menu .premium-vscroll-nav-item{background-color:var( --e-global-color-secondary );}.elementor-widget-premium-vscroll .premium-vscroll-nav-menu .premium-vscroll-nav-item.active .premium-vscroll-nav-link{color:var( --e-global-color-secondary );}.elementor-widget-premium-vscroll .premium-vscroll-nav-menu .premium-vscroll-nav-item.active .premium-vscroll-nav-link:hover{color:var( --e-global-color-secondary );}.elementor-widget-premium-vscroll .premium-vscroll-nav-menu .premium-vscroll-nav-item.active{background-color:var( --e-global-color-primary );}.elementor-widget-premium-weather .premium-weather__city-name{color:var( --e-global-color-secondary );}.elementor-widget-premium-weather:not(.premium-weather__layout-3) .premium-weather__basic-weather .premium-weather__temp-wrapper, .elementor-widget-premium-weather.premium-weather__layout-3 .premium-weather__extra-outer-wrapper .premium-weather__temp-wrapper{color:var( --e-global-color-secondary );}.elementor-widget-premium-weather .premium-weather__feels-like{color:var( --e-global-color-secondary );}.elementor-widget-premium-world-clock .premium-world-clock__clock-title{color:var( --e-global-color-secondary );}.elementor-widget-premium-world-clock .premium-world-clock__date,
                    .elementor-widget-premium-world-clock .premium-world-clock__month-wrapper,
                    .elementor-widget-premium-world-clock .premium-world-clock__day-wrapper,
                    .elementor-widget-premium-world-clock .premium-world-clock__date-segment{color:var( --e-global-color-secondary );}.elementor-widget-premium-world-clock .premium-world-clock__date-segment{border-color:var( --e-global-color-secondary );}.elementor-widget-premium-world-clock .premium-world-clock__gmt-offset{color:var( --e-global-color-secondary );}.elementor-widget-premium-woo-products .premium-woocommerce .premium-woo-product-desc{color:var( --e-global-color-text );font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-premium-woo-products .premium-woo-products-details-wrap .premium-woo-atc-button .button{font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );}.elementor-widget-premium-woo-products .premium-woocommerce li.product .price{color:var( --e-global-color-text );font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-premium-woo-products .premium-woocommerce li.product .price del{color:var( --e-global-color-text );font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-premium-woo-products .premium-woocommerce .woocommerce-loop-product__title{color:var( --e-global-color-primary );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-premium-woo-products .premium-woocommerce .woocommerce-loop-product__title:hover{color:var( --e-global-color-primary );}.elementor-widget-premium-woo-products .premium-woocommerce .premium-woo-product-category{color:var( --e-global-color-text );font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-premium-woo-products .premium-woocommerce .premium-woo-products-details-wrap .premium-woo-atc-button .button{font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );}.elementor-widget-premium-woo-products .premium-woocommerce .premium-woo-qv-btn{font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );}.elementor-widget-premium-woo-products .premium-woocommerce .premium-woo-products-details-wrap .premium-woo-qv-btn{font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );}.elementor-widget-premium-woo-products .premium-woo-products-pagination ul li > .page-numbers{font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );}.elementor-widget-premium-woo-products .premium-woo-load-more-btn{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );color:var( --e-global-color-secondary );background-color:var( --e-global-color-primary );}.elementor-widget-premium-woo-products .premium-woo-load-more-btn .premium-loader{border-color:var( --e-global-color-secondary );}.elementor-widget-premium-woo-products .premium-woocommerce:not(.premium-woo-skin-grid-10) .premium-woo-product-sale-wrap .premium-woo-product-onsale, .elementor-widget-premium-woo-products .premium-woocommerce.premium-woo-skin-grid-10 .premium-woo-product-sale-wrap{background-color:var( --e-global-color-secondary );}.elementor-widget-premium-woo-products .premium-woocommerce.premium-woo-skin-grid-10 .premium-woo-product-sale-wrap::after{border-left-color:var( --e-global-color-secondary );border-right-color:var( --e-global-color-secondary );}.elementor-widget-premium-woo-products .premium-woo-product-sale-wrap .premium-woo-product-onsale{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-premium-woo-products:not([data-widget_type="premium-woo-products.grid-10"]) .premium-woo-product-featured-wrap .premium-woo-product-featured, .elementor-widget-premium-woo-products[data-widget_type="premium-woo-products.grid-10"] .premium-woo-product-featured-wrap{background-color:var( --e-global-color-primary );}.elementor-widget-premium-woo-products .premium-woocommerce.premium-woo-skin-grid-10 .premium-woo-product-featured-wrap::after{border-left-color:var( --e-global-color-primary );border-right-color:var( --e-global-color-primary );}.elementor-widget-premium-woo-products .premium-woo-product-featured-wrap .premium-woo-product-featured{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-premium-woo-products .premium-woocommerce .slick-arrow{color:var( --e-global-color-primary );background-color:var( --e-global-color-secondary );}.elementor-widget-premium-woo-products ul.slick-dots li{color:var( --e-global-color-primary );}.elementor-widget-premium-woo-products .premium-woocommerce ul.slick-dots li.slick-active{color:var( --e-global-color-secondary );}.elementor-widget-premium-woo-products .pa-out-of-stock{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );background-color:var( --e-global-color-secondary );}@media(max-width:1024px){.elementor-widget-premium-nav-menu .premium-main-nav-menu > .premium-nav-menu-item > .premium-menu-link .premium-dropdown-icon{color:var( --e-global-color-text );}.elementor-widget-premium-nav-menu .premium-main-nav-menu > .premium-nav-menu-item:hover > .premium-menu-link .premium-dropdown-icon{color:var( --e-global-color-secondary );}.elementor-widget-premium-nav-menu .premium-main-nav-menu > .premium-active-item > .premium-menu-link .premium-dropdown-icon{color:var( --e-global-color-accent );}.elementor-widget-premium-nav-menu .premium-main-nav-menu .premium-sub-menu .premium-sub-menu-link .premium-dropdown-icon{color:var( --e-global-color-secondary );}.elementor-widget-premium-nav-menu .premium-main-nav-menu .premium-sub-menu .premium-active-item .premium-sub-menu-link .premium-dropdown-icon{color:var( --e-global-color-primary );}}@media(max-width:767px){.elementor-widget-premium-nav-menu .premium-main-nav-menu > .premium-nav-menu-item > .premium-menu-link .premium-dropdown-icon{color:var( --e-global-color-text );}.elementor-widget-premium-nav-menu .premium-main-nav-menu > .premium-nav-menu-item:hover > .premium-menu-link .premium-dropdown-icon{color:var( --e-global-color-secondary );}.elementor-widget-premium-nav-menu .premium-main-nav-menu > .premium-active-item > .premium-menu-link .premium-dropdown-icon{color:var( --e-global-color-accent );}.elementor-widget-premium-nav-menu .premium-main-nav-menu .premium-sub-menu .premium-sub-menu-link .premium-dropdown-icon{color:var( --e-global-color-secondary );}.elementor-widget-premium-nav-menu .premium-main-nav-menu .premium-sub-menu .premium-active-item .premium-sub-menu-link .premium-dropdown-icon{color:var( --e-global-color-primary );}}
.elementor-11926 .elementor-element.elementor-element-18afafb > .elementor-container{max-width:1200px;}.elementor-11926 .elementor-element.elementor-element-18afafb:not(.elementor-motion-effects-element-type-background), .elementor-11926 .elementor-element.elementor-element-18afafb > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-image:url("{{ asset('vendor/nails/luxana/wp-content/uploads/2023/02/i4uthg4.png') }}");background-position:center center;background-repeat:no-repeat;background-size:cover;}.elementor-11926 .elementor-element.elementor-element-18afafb > .elementor-background-overlay{background-color:transparent;background-image:linear-gradient(180deg, #FFFFFF00 54%, #FFFFFF 100%);opacity:1;transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-11926 .elementor-element.elementor-element-18afafb{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin-top:0px;margin-bottom:0px;padding:120px 0px 80px 0px;}.elementor-11926 .elementor-element.elementor-element-36bbf4e:not(.elementor-motion-effects-element-type-background) > .elementor-widget-wrap, .elementor-11926 .elementor-element.elementor-element-36bbf4e > .elementor-widget-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-image:url("{{ asset('vendor/nails/luxana/wp-content/uploads/2023/02/2f3f@400x.png') }}");background-repeat:no-repeat;background-size:14% auto;}.elementor-11926 .elementor-element.elementor-element-36bbf4e > .elementor-element-populated{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin:0px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:0px 0px 0px 0px;}.elementor-11926 .elementor-element.elementor-element-36bbf4e > .elementor-element-populated > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-11926 .elementor-element.elementor-element-315fb23 > .elementor-container{max-width:901px;}.elementor-11926 .elementor-element.elementor-element-315fb23{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:0px 0px 0px 0px;}.elementor-11926 .elementor-element.elementor-element-315fb23 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-bc-flex-widget .elementor-11926 .elementor-element.elementor-element-d6f32da.elementor-column .elementor-widget-wrap{align-items:center;}.elementor-11926 .elementor-element.elementor-element-d6f32da.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center;}.elementor-11926 .elementor-element.elementor-element-d6f32da > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute){margin-bottom:0px;}.elementor-11926 .elementor-element.elementor-element-d6f32da > .elementor-element-populated{margin:0px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;}.elementor-11926 .elementor-element.elementor-element-9d1a40f{text-align:center;color:#E55D42;font-family:"Jost", Sans-serif;font-size:18px;font-weight:500;text-transform:uppercase;line-height:1.2em;letter-spacing:2px;}.elementor-11926 .elementor-element.elementor-element-9d1a40f > .elementor-widget-container{margin:0px 0px 10px 0px;padding:0px 0px 0px 0px;}.elementor-11926 .elementor-element.elementor-element-90cce5b{text-align:center;color:#000000;font-family:"Cormorant", Sans-serif;font-size:102px;font-weight:500;line-height:0.9em;letter-spacing:-0.9px;}.elementor-11926 .elementor-element.elementor-element-90cce5b > .elementor-widget-container{margin:0px 0px 20px 0px;}.elementor-11926 .elementor-element.elementor-element-c4759d9{text-align:center;color:#444444;font-family:"Jost", Sans-serif;font-size:20px;font-weight:400;line-height:1.6em;}.elementor-11926 .elementor-element.elementor-element-0100f32 > .elementor-container{max-width:1200px;}.elementor-11926 .elementor-element.elementor-element-0100f32 > .elementor-background-overlay{background-image:url("{{ asset('vendor/nails/luxana/wp-content/uploads/2023/02/4iutg4.png') }}");background-position:center center;background-repeat:no-repeat;background-size:cover;opacity:0.5;transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-11926 .elementor-element.elementor-element-0100f32{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin-top:0px;margin-bottom:0px;padding:80px 0px 80px 0px;}.elementor-11926 .elementor-element.elementor-element-716ce85 > .elementor-element-populated{margin:0px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;}.elementor-11926 .elementor-element.elementor-element-6ef1bd5 > .elementor-container{max-width:1200px;}.elementor-11926 .elementor-element.elementor-element-f1036a6 > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute){margin-bottom:0px;}.elementor-11926 .elementor-element.elementor-element-f1036a6:not(.elementor-motion-effects-element-type-background) > .elementor-widget-wrap, .elementor-11926 .elementor-element.elementor-element-f1036a6 > .elementor-widget-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#FFFFFF;}.elementor-11926 .elementor-element.elementor-element-f1036a6 > .elementor-element-populated, .elementor-11926 .elementor-element.elementor-element-f1036a6 > .elementor-element-populated > .elementor-background-overlay, .elementor-11926 .elementor-element.elementor-element-f1036a6 > .elementor-background-slideshow{border-radius:0px 0px 0px 0px;}.elementor-11926 .elementor-element.elementor-element-f1036a6 > .elementor-element-populated{box-shadow:1px 1px 0px 0px #000000;transition:background 0.5s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin:10px 20px 10px 10px;--e-column-margin-right:20px;--e-column-margin-left:10px;padding:30px 30px 30px 30px;}.elementor-11926 .elementor-element.elementor-element-f1036a6 > .elementor-element-populated > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-11926 .elementor-element.elementor-element-c2b0981 img{width:75px;}.elementor-11926 .elementor-element.elementor-element-c2b0981{width:auto;max-width:auto;top:21px;}body:not(.rtl) .elementor-11926 .elementor-element.elementor-element-c2b0981{right:72.4px;}body.rtl .elementor-11926 .elementor-element.elementor-element-c2b0981{left:72.4px;}.elementor-11926 .elementor-element.elementor-element-d6cf7ad{text-align:left;color:#000000;font-family:"Cormorant", Sans-serif;font-size:46px;font-weight:600;line-height:1.1em;letter-spacing:-0.6px;}.elementor-11926 .elementor-element.elementor-element-d6cf7ad > .elementor-widget-container{margin:0px 0px 5px 0px;}.elementor-11926 .elementor-element.elementor-element-d8f7f28 .ue_price_list_item{flex-direction:row;margin:0px 0px 8px 0px;border-radius:0px;}.elementor-11926 .elementor-element.elementor-element-d8f7f28 .menu-list{grid-template-columns:repeat(1, 1fr);grid-gap:0px;}.elementor-11926 .elementor-element.elementor-element-d8f7f28 .menu-wrappermidlle{text-align:inherit;}.elementor-11926 .elementor-element.elementor-element-d8f7f28 .menu-wrapperall{align-items:flex-start;}.elementor-11926 .elementor-element.elementor-element-d8f7f28 .menu-img{width:200px;align-items:flex-start;}.elementor-11926 .elementor-element.elementor-element-d8f7f28 .menu-img img{height:123px;border-radius:10px;object-fit:cover;}.elementor-11926 .elementor-element.elementor-element-d8f7f28 .ue_price_list_image_spacing{width:20px;}.elementor-11926 .elementor-element.elementor-element-d8f7f28 .ue_price_list_seperator{border-style:dashed;border-bottom-width:1px;border-color:#E55D42;margin-left:10px;margin-right:10px;margin-top:10px;margin-bottom:10px;}.elementor-11926 .elementor-element.elementor-element-d8f7f28 .menu-title{color:#000000;font-family:"Cormorant", Sans-serif;font-size:28px;font-weight:600;letter-spacing:-0.6px;}.elementor-11926 .elementor-element.elementor-element-d8f7f28 .menu-price{align-self:center;background-color:#FFFFFF00;padding:10px 10px 10px 10px;color:#E55D42;font-family:"Jost", Sans-serif;font-size:21px;font-weight:500;border-radius:0px;}.elementor-11926 .elementor-element.elementor-element-d8f7f28 .menu-price-spacing{width:0px;height:0px;}.elementor-11926 .elementor-element.elementor-element-d8f7f28 .menu-text{color:#4C4C4C;font-family:"DM Sans", Sans-serif;font-size:17px;margin-top:0px;}.elementor-11926 .elementor-element.elementor-element-d8f7f28 .ue_price_list_badge_container{margin-bottom:0px;text-align:inherit;}.elementor-11926 .elementor-element.elementor-element-d8f7f28 .ue_price_list_badge{background-color:#5800ff;color:#ffffff;padding:5px 5px 5px 5px;border-radius:5px;}.elementor-11926 .elementor-element.elementor-element-d8f7f28 > .elementor-widget-container{margin:20px 0px 0px 0px;}.elementor-11926 .elementor-element.elementor-element-36e8abe > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute){margin-bottom:0px;}.elementor-11926 .elementor-element.elementor-element-36e8abe:not(.elementor-motion-effects-element-type-background) > .elementor-widget-wrap, .elementor-11926 .elementor-element.elementor-element-36e8abe > .elementor-widget-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#FFFFFF;}.elementor-11926 .elementor-element.elementor-element-36e8abe > .elementor-element-populated, .elementor-11926 .elementor-element.elementor-element-36e8abe > .elementor-element-populated > .elementor-background-overlay, .elementor-11926 .elementor-element.elementor-element-36e8abe > .elementor-background-slideshow{border-radius:0px 0px 0px 0px;}.elementor-11926 .elementor-element.elementor-element-36e8abe > .elementor-element-populated{box-shadow:1px 1px 0px 0px #000000;transition:background 0.5s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin:10px 10px 10px 20px;--e-column-margin-right:10px;--e-column-margin-left:20px;padding:30px 30px 30px 30px;}.elementor-11926 .elementor-element.elementor-element-36e8abe > .elementor-element-populated > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-11926 .elementor-element.elementor-element-2da1de4{text-align:left;color:#000000;font-family:"Cormorant", Sans-serif;font-size:46px;font-weight:600;line-height:1.1em;letter-spacing:-0.6px;}.elementor-11926 .elementor-element.elementor-element-2da1de4 > .elementor-widget-container{margin:0px 0px 5px 0px;}.elementor-11926 .elementor-element.elementor-element-807cb76 .ue_price_list_item{flex-direction:row;margin:0px 0px 8px 0px;border-radius:0px;}.elementor-11926 .elementor-element.elementor-element-807cb76 .menu-list{grid-template-columns:repeat(1, 1fr);grid-gap:0px;}.elementor-11926 .elementor-element.elementor-element-807cb76 .menu-wrappermidlle{text-align:inherit;}.elementor-11926 .elementor-element.elementor-element-807cb76 .menu-wrapperall{align-items:flex-start;}.elementor-11926 .elementor-element.elementor-element-807cb76 .menu-img{width:200px;align-items:flex-start;}.elementor-11926 .elementor-element.elementor-element-807cb76 .menu-img img{height:123px;border-radius:10px;object-fit:cover;}.elementor-11926 .elementor-element.elementor-element-807cb76 .ue_price_list_image_spacing{width:20px;}.elementor-11926 .elementor-element.elementor-element-807cb76 .ue_price_list_seperator{border-style:dashed;border-bottom-width:1px;border-color:#E55D42;margin-left:10px;margin-right:10px;margin-top:10px;margin-bottom:10px;}.elementor-11926 .elementor-element.elementor-element-807cb76 .menu-title{color:#000000;font-family:"Cormorant", Sans-serif;font-size:28px;font-weight:600;letter-spacing:-0.6px;}.elementor-11926 .elementor-element.elementor-element-807cb76 .menu-price{align-self:center;background-color:#FFFFFF00;padding:10px 10px 10px 10px;color:#E55D42;font-family:"Jost", Sans-serif;font-size:21px;font-weight:500;border-radius:0px;}.elementor-11926 .elementor-element.elementor-element-807cb76 .menu-price-spacing{width:0px;height:0px;}.elementor-11926 .elementor-element.elementor-element-807cb76 .menu-text{color:#4C4C4C;font-family:"DM Sans", Sans-serif;font-size:17px;margin-top:0px;}.elementor-11926 .elementor-element.elementor-element-807cb76 .ue_price_list_badge_container{margin-bottom:0px;text-align:inherit;}.elementor-11926 .elementor-element.elementor-element-807cb76 .ue_price_list_badge{background-color:#5800ff;color:#ffffff;padding:5px 5px 5px 5px;border-radius:5px;}.elementor-11926 .elementor-element.elementor-element-807cb76 > .elementor-widget-container{margin:20px 0px 0px 0px;}.elementor-11926 .elementor-element.elementor-element-b87bbee > .elementor-container{max-width:1200px;}.elementor-11926 .elementor-element.elementor-element-b87bbee{margin-top:20px;margin-bottom:0px;}.elementor-11926 .elementor-element.elementor-element-25bcf9c > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute){margin-bottom:0px;}.elementor-11926 .elementor-element.elementor-element-25bcf9c:not(.elementor-motion-effects-element-type-background) > .elementor-widget-wrap, .elementor-11926 .elementor-element.elementor-element-25bcf9c > .elementor-widget-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#FFFFFF;}.elementor-11926 .elementor-element.elementor-element-25bcf9c > .elementor-element-populated, .elementor-11926 .elementor-element.elementor-element-25bcf9c > .elementor-element-populated > .elementor-background-overlay, .elementor-11926 .elementor-element.elementor-element-25bcf9c > .elementor-background-slideshow{border-radius:0px 0px 0px 0px;}.elementor-11926 .elementor-element.elementor-element-25bcf9c > .elementor-element-populated{box-shadow:1px 1px 0px 0px #000000;transition:background 0.5s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin:10px 20px 10px 10px;--e-column-margin-right:20px;--e-column-margin-left:10px;padding:30px 30px 30px 30px;}.elementor-11926 .elementor-element.elementor-element-25bcf9c > .elementor-element-populated > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-11926 .elementor-element.elementor-element-d43ce69{text-align:left;color:#000000;font-family:"Cormorant", Sans-serif;font-size:46px;font-weight:600;line-height:1.1em;letter-spacing:-0.6px;}.elementor-11926 .elementor-element.elementor-element-d43ce69 > .elementor-widget-container{margin:0px 0px 5px 0px;}.elementor-11926 .elementor-element.elementor-element-50c2574 .ue_price_list_item{flex-direction:row;margin:0px 0px 8px 0px;border-radius:0px;}.elementor-11926 .elementor-element.elementor-element-50c2574 .menu-list{grid-template-columns:repeat(1, 1fr);grid-gap:0px;}.elementor-11926 .elementor-element.elementor-element-50c2574 .menu-wrappermidlle{text-align:inherit;}.elementor-11926 .elementor-element.elementor-element-50c2574 .menu-wrapperall{align-items:flex-start;}.elementor-11926 .elementor-element.elementor-element-50c2574 .menu-img{width:200px;align-items:flex-start;}.elementor-11926 .elementor-element.elementor-element-50c2574 .menu-img img{height:123px;border-radius:10px;object-fit:cover;}.elementor-11926 .elementor-element.elementor-element-50c2574 .ue_price_list_image_spacing{width:20px;}.elementor-11926 .elementor-element.elementor-element-50c2574 .ue_price_list_seperator{border-style:dashed;border-bottom-width:1px;border-color:#E55D42;margin-left:10px;margin-right:10px;margin-top:10px;margin-bottom:10px;}.elementor-11926 .elementor-element.elementor-element-50c2574 .menu-title{color:#000000;font-family:"Cormorant", Sans-serif;font-size:28px;font-weight:600;letter-spacing:-0.6px;}.elementor-11926 .elementor-element.elementor-element-50c2574 .menu-price{align-self:center;background-color:#FFFFFF00;padding:10px 10px 10px 10px;color:#E55D42;font-family:"Jost", Sans-serif;font-size:21px;font-weight:500;border-radius:0px;}.elementor-11926 .elementor-element.elementor-element-50c2574 .menu-price-spacing{width:0px;height:0px;}.elementor-11926 .elementor-element.elementor-element-50c2574 .menu-text{color:#4C4C4C;font-family:"DM Sans", Sans-serif;font-size:17px;margin-top:0px;}.elementor-11926 .elementor-element.elementor-element-50c2574 .ue_price_list_badge_container{margin-bottom:0px;text-align:inherit;}.elementor-11926 .elementor-element.elementor-element-50c2574 .ue_price_list_badge{background-color:#5800ff;color:#ffffff;padding:5px 5px 5px 5px;border-radius:5px;}.elementor-11926 .elementor-element.elementor-element-50c2574 > .elementor-widget-container{margin:20px 0px 0px 0px;}.elementor-11926 .elementor-element.elementor-element-b211886 > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute){margin-bottom:0px;}.elementor-11926 .elementor-element.elementor-element-b211886:not(.elementor-motion-effects-element-type-background) > .elementor-widget-wrap, .elementor-11926 .elementor-element.elementor-element-b211886 > .elementor-widget-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#FFFFFF;}.elementor-11926 .elementor-element.elementor-element-b211886 > .elementor-element-populated, .elementor-11926 .elementor-element.elementor-element-b211886 > .elementor-element-populated > .elementor-background-overlay, .elementor-11926 .elementor-element.elementor-element-b211886 > .elementor-background-slideshow{border-radius:0px 0px 0px 0px;}.elementor-11926 .elementor-element.elementor-element-b211886 > .elementor-element-populated{box-shadow:1px 1px 0px 0px #000000;transition:background 0.5s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin:10px 10px 10px 20px;--e-column-margin-right:10px;--e-column-margin-left:20px;padding:30px 30px 30px 30px;}.elementor-11926 .elementor-element.elementor-element-b211886 > .elementor-element-populated > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-11926 .elementor-element.elementor-element-8b628ed{text-align:left;color:#000000;font-family:"Cormorant", Sans-serif;font-size:46px;font-weight:600;line-height:1.1em;letter-spacing:-0.6px;}.elementor-11926 .elementor-element.elementor-element-8b628ed > .elementor-widget-container{margin:0px 0px 5px 0px;}.elementor-11926 .elementor-element.elementor-element-ccd699e .ue_price_list_item{flex-direction:row;margin:0px 0px 8px 0px;border-radius:0px;}.elementor-11926 .elementor-element.elementor-element-ccd699e .menu-list{grid-template-columns:repeat(1, 1fr);grid-gap:0px;}.elementor-11926 .elementor-element.elementor-element-ccd699e .menu-wrappermidlle{text-align:inherit;}.elementor-11926 .elementor-element.elementor-element-ccd699e .menu-wrapperall{align-items:flex-start;}.elementor-11926 .elementor-element.elementor-element-ccd699e .menu-img{width:200px;align-items:flex-start;}.elementor-11926 .elementor-element.elementor-element-ccd699e .menu-img img{height:123px;border-radius:10px;object-fit:cover;}.elementor-11926 .elementor-element.elementor-element-ccd699e .ue_price_list_image_spacing{width:20px;}.elementor-11926 .elementor-element.elementor-element-ccd699e .ue_price_list_seperator{border-style:dashed;border-bottom-width:1px;border-color:#E55D42;margin-left:10px;margin-right:10px;margin-top:10px;margin-bottom:10px;}.elementor-11926 .elementor-element.elementor-element-ccd699e .menu-title{color:#000000;font-family:"Cormorant", Sans-serif;font-size:28px;font-weight:600;letter-spacing:-0.6px;}.elementor-11926 .elementor-element.elementor-element-ccd699e .menu-price{align-self:center;background-color:#FFFFFF00;padding:10px 10px 10px 10px;color:#E55D42;font-family:"Jost", Sans-serif;font-size:21px;font-weight:500;border-radius:0px;}.elementor-11926 .elementor-element.elementor-element-ccd699e .menu-price-spacing{width:0px;height:0px;}.elementor-11926 .elementor-element.elementor-element-ccd699e .menu-text{color:#4C4C4C;font-family:"DM Sans", Sans-serif;font-size:17px;margin-top:0px;}.elementor-11926 .elementor-element.elementor-element-ccd699e .ue_price_list_badge_container{margin-bottom:0px;text-align:inherit;}.elementor-11926 .elementor-element.elementor-element-ccd699e .ue_price_list_badge{background-color:#5800ff;color:#ffffff;padding:5px 5px 5px 5px;border-radius:5px;}.elementor-11926 .elementor-element.elementor-element-ccd699e > .elementor-widget-container{margin:20px 0px 0px 0px;}.elementor-11926 .elementor-element.elementor-element-6a824dc img{width:75px;}.elementor-11926 .elementor-element.elementor-element-6a824dc{width:auto;max-width:auto;top:21px;}body:not(.rtl) .elementor-11926 .elementor-element.elementor-element-6a824dc{right:72.4px;}body.rtl .elementor-11926 .elementor-element.elementor-element-6a824dc{left:72.4px;}.elementor-11926 .elementor-element.elementor-element-9449c9d:not(.elementor-motion-effects-element-type-background), .elementor-11926 .elementor-element.elementor-element-9449c9d > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-image:url("{{ asset('vendor/nails/luxana/wp-content/uploads/2023/02/i4uthg4.png') }}");background-position:center center;background-repeat:no-repeat;background-size:cover;}.elementor-11926 .elementor-element.elementor-element-9449c9d > .elementor-background-overlay{background-image:url("{{ asset('vendor/nails/luxana/wp-content/uploads/2023/02/3fyhr.png') }}");background-position:bottom center;background-repeat:no-repeat;background-size:cover;opacity:0.4;transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-11926 .elementor-element.elementor-element-9449c9d{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin-top:0px;margin-bottom:0px;padding:0px 0px 0px 0px;}.elementor-11926 .elementor-element.elementor-element-263486f:not(.elementor-motion-effects-element-type-background) > .elementor-widget-wrap, .elementor-11926 .elementor-element.elementor-element-263486f > .elementor-widget-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-image:url("{{ asset('vendor/nails/luxana/wp-content/uploads/2023/02/2f3f@400x.png') }}");background-position:10% 40px;background-repeat:no-repeat;background-size:200px auto;}.elementor-11926 .elementor-element.elementor-element-263486f > .elementor-element-populated{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin:0px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:0px 0px 0px 0px;}.elementor-11926 .elementor-element.elementor-element-263486f > .elementor-element-populated > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-11926 .elementor-element.elementor-element-5426d5c > .elementor-container{max-width:920px;}.elementor-11926 .elementor-element.elementor-element-5426d5c{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:100px 0px 100px 0px;}.elementor-11926 .elementor-element.elementor-element-5426d5c > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-bc-flex-widget .elementor-11926 .elementor-element.elementor-element-226b72a.elementor-column .elementor-widget-wrap{align-items:center;}.elementor-11926 .elementor-element.elementor-element-226b72a.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center;}.elementor-11926 .elementor-element.elementor-element-226b72a > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute){margin-bottom:0px;}.elementor-11926 .elementor-element.elementor-element-226b72a > .elementor-element-populated{margin:0px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;}.elementor-11926 .elementor-element.elementor-element-933e79c{text-align:center;color:#E55D42;font-family:"Jost", Sans-serif;font-size:18px;font-weight:500;text-transform:uppercase;line-height:1.2em;letter-spacing:2px;}.elementor-11926 .elementor-element.elementor-element-933e79c > .elementor-widget-container{margin:0px 0px 10px 0px;padding:0px 0px 0px 0px;}.elementor-11926 .elementor-element.elementor-element-d0b298c{text-align:center;color:#000000;font-family:"Cormorant", Sans-serif;font-size:102px;font-weight:500;line-height:0.9em;letter-spacing:-0.9px;}.elementor-11926 .elementor-element.elementor-element-d0b298c > .elementor-widget-container{margin:0px 0px 20px 0px;}.elementor-11926 .elementor-element.elementor-element-8937c39{text-align:center;color:#444444;font-family:"Jost", Sans-serif;font-size:20px;font-weight:400;line-height:1.6em;}.elementor-11926 .elementor-element.elementor-element-8937c39 > .elementor-widget-container{margin:0px 0px 30px 0px;}.elementor-11926 .elementor-element.elementor-element-56d5ea1 .elementor-button .elementor-align-icon-right{margin-left:0px;}.elementor-11926 .elementor-element.elementor-element-56d5ea1 .elementor-button .elementor-align-icon-left{margin-right:0px;}.elementor-11926 .elementor-element.elementor-element-56d5ea1 .elementor-button{font-family:"Jost", Sans-serif;font-size:22px;font-weight:400;letter-spacing:0px;fill:#FFFFFF;color:#FFFFFF;background-color:#EC7B54;border-style:solid;border-width:2px 2px 2px 2px;border-color:#EC7B54;border-radius:0px 0px 0px 0px;box-shadow:0px 0px 0px 0px #000000;padding:15px 25px 15px 25px;}.elementor-11926 .elementor-element.elementor-element-56d5ea1 > .elementor-widget-container{margin:10px 0px 0px 0px;}@media(max-width:1024px) and (min-width:768px){.elementor-11926 .elementor-element.elementor-element-d6f32da{width:100%;}.elementor-11926 .elementor-element.elementor-element-f1036a6{width:100%;}.elementor-11926 .elementor-element.elementor-element-36e8abe{width:100%;}.elementor-11926 .elementor-element.elementor-element-25bcf9c{width:100%;}.elementor-11926 .elementor-element.elementor-element-b211886{width:100%;}.elementor-11926 .elementor-element.elementor-element-226b72a{width:100%;}}@media(max-width:1024px){.elementor-11926 .elementor-element.elementor-element-18afafb > .elementor-container{max-width:562px;}.elementor-11926 .elementor-element.elementor-element-18afafb:not(.elementor-motion-effects-element-type-background), .elementor-11926 .elementor-element.elementor-element-18afafb > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-position:top center;background-size:cover;}.elementor-11926 .elementor-element.elementor-element-18afafb{padding:40px 0px 40px 0px;}.elementor-11926 .elementor-element.elementor-element-315fb23{padding:0px 0px 0px 0px;}.elementor-11926 .elementor-element.elementor-element-d6f32da > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute){margin-bottom:0px;}.elementor-11926 .elementor-element.elementor-element-d6f32da > .elementor-element-populated{margin:0px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;}.elementor-11926 .elementor-element.elementor-element-90cce5b{text-align:center;font-size:72px;}.elementor-11926 .elementor-element.elementor-element-c4759d9{text-align:center;}.elementor-11926 .elementor-element.elementor-element-0100f32 > .elementor-container{max-width:562px;}.elementor-11926 .elementor-element.elementor-element-0100f32 > .elementor-background-overlay{background-size:cover;}.elementor-11926 .elementor-element.elementor-element-0100f32{padding:20px 0px 60px 0px;}.elementor-11926 .elementor-element.elementor-element-716ce85 > .elementor-element-populated{margin:0px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:10px 10px 10px 10px;}.elementor-11926 .elementor-element.elementor-element-f1036a6 > .elementor-element-populated{margin:10px 10px 20px 10px;--e-column-margin-right:10px;--e-column-margin-left:10px;}.elementor-11926 .elementor-element.elementor-element-d6cf7ad{text-align:left;}.elementor-11926 .elementor-element.elementor-element-36e8abe > .elementor-element-populated{margin:10px 10px 20px 10px;--e-column-margin-right:10px;--e-column-margin-left:10px;}.elementor-11926 .elementor-element.elementor-element-2da1de4{text-align:left;}.elementor-11926 .elementor-element.elementor-element-b87bbee{margin-top:0px;margin-bottom:0px;}.elementor-11926 .elementor-element.elementor-element-25bcf9c > .elementor-element-populated{margin:10px 10px 20px 10px;--e-column-margin-right:10px;--e-column-margin-left:10px;}.elementor-11926 .elementor-element.elementor-element-d43ce69{text-align:left;}.elementor-11926 .elementor-element.elementor-element-8b628ed{text-align:left;}.elementor-11926 .elementor-element.elementor-element-9449c9d:not(.elementor-motion-effects-element-type-background), .elementor-11926 .elementor-element.elementor-element-9449c9d > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-position:top center;background-size:cover;}.elementor-11926 .elementor-element.elementor-element-9449c9d > .elementor-background-overlay{background-size:cover;}.elementor-11926 .elementor-element.elementor-element-9449c9d{padding:80px 0px 80px 0px;}.elementor-11926 .elementor-element.elementor-element-263486f:not(.elementor-motion-effects-element-type-background) > .elementor-widget-wrap, .elementor-11926 .elementor-element.elementor-element-263486f > .elementor-widget-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-position:0% 0px;}.elementor-11926 .elementor-element.elementor-element-5426d5c > .elementor-container{max-width:596px;}.elementor-11926 .elementor-element.elementor-element-5426d5c{padding:0px 0px 0px 0px;}.elementor-11926 .elementor-element.elementor-element-226b72a > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute){margin-bottom:0px;}.elementor-11926 .elementor-element.elementor-element-226b72a > .elementor-element-populated{margin:0px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;}.elementor-11926 .elementor-element.elementor-element-d0b298c{text-align:center;font-size:72px;}.elementor-11926 .elementor-element.elementor-element-8937c39{text-align:center;}}@media(max-width:767px){.elementor-11926 .elementor-element.elementor-element-18afafb:not(.elementor-motion-effects-element-type-background), .elementor-11926 .elementor-element.elementor-element-18afafb > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-position:top center;background-size:cover;}.elementor-11926 .elementor-element.elementor-element-18afafb{padding:30px 10px 30px 10px;}.elementor-11926 .elementor-element.elementor-element-315fb23{padding:0px 20px 0px 20px;}.elementor-11926 .elementor-element.elementor-element-d6f32da > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute){margin-bottom:0px;}.elementor-11926 .elementor-element.elementor-element-d6f32da > .elementor-element-populated{margin:0px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:0px 0px 0px 0px;}.elementor-11926 .elementor-element.elementor-element-90cce5b{font-size:46px;}.elementor-11926 .elementor-element.elementor-element-90cce5b > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 20px 0px;}.elementor-11926 .elementor-element.elementor-element-c4759d9{font-size:16px;}.elementor-11926 .elementor-element.elementor-element-c4759d9 > .elementor-widget-container{padding:0px 0px 20px 0px;}.elementor-11926 .elementor-element.elementor-element-0100f32{padding:0px 10px 20px 10px;}.elementor-11926 .elementor-element.elementor-element-f1036a6 > .elementor-element-populated{padding:20px 20px 20px 20px;}body:not(.rtl) .elementor-11926 .elementor-element.elementor-element-c2b0981{right:10.4px;}body.rtl .elementor-11926 .elementor-element.elementor-element-c2b0981{left:10.4px;}.elementor-11926 .elementor-element.elementor-element-d6cf7ad{font-size:32px;}.elementor-11926 .elementor-element.elementor-element-d6cf7ad > .elementor-widget-container{margin:0px 0px 10px 0px;}.elementor-11926 .elementor-element.elementor-element-d8f7f28 .ue_price_list_item{margin:0px 0px 0px 0px;}.elementor-11926 .elementor-element.elementor-element-d8f7f28 .menu-img{width:46px;align-items:flex-start;}.elementor-11926 .elementor-element.elementor-element-d8f7f28 .menu-img img{height:58px;}.elementor-11926 .elementor-element.elementor-element-d8f7f28 .ue_price_list_image_spacing{width:16px;}.elementor-11926 .elementor-element.elementor-element-d8f7f28 .menu-title{font-size:20px;}.elementor-11926 .elementor-element.elementor-element-d8f7f28 .menu-price{font-size:17px;}.elementor-11926 .elementor-element.elementor-element-d8f7f28 .menu-text{font-size:14px;}.elementor-11926 .elementor-element.elementor-element-36e8abe > .elementor-element-populated{padding:20px 20px 20px 20px;}.elementor-11926 .elementor-element.elementor-element-2da1de4{font-size:32px;}.elementor-11926 .elementor-element.elementor-element-2da1de4 > .elementor-widget-container{margin:0px 0px 10px 0px;}.elementor-11926 .elementor-element.elementor-element-807cb76 .ue_price_list_item{margin:0px 0px 0px 0px;}.elementor-11926 .elementor-element.elementor-element-807cb76 .menu-img{width:46px;align-items:flex-start;}.elementor-11926 .elementor-element.elementor-element-807cb76 .menu-img img{height:58px;}.elementor-11926 .elementor-element.elementor-element-807cb76 .ue_price_list_image_spacing{width:16px;}.elementor-11926 .elementor-element.elementor-element-807cb76 .menu-title{font-size:20px;}.elementor-11926 .elementor-element.elementor-element-807cb76 .menu-price{font-size:17px;}.elementor-11926 .elementor-element.elementor-element-807cb76 .menu-text{font-size:14px;}.elementor-11926 .elementor-element.elementor-element-b87bbee{margin-top:0px;margin-bottom:0px;}.elementor-11926 .elementor-element.elementor-element-25bcf9c > .elementor-element-populated{padding:20px 20px 20px 20px;}.elementor-11926 .elementor-element.elementor-element-d43ce69{font-size:32px;}.elementor-11926 .elementor-element.elementor-element-d43ce69 > .elementor-widget-container{margin:0px 0px 10px 0px;}.elementor-11926 .elementor-element.elementor-element-50c2574 .ue_price_list_item{margin:0px 0px 0px 0px;}.elementor-11926 .elementor-element.elementor-element-50c2574 .menu-img{width:46px;align-items:flex-start;}.elementor-11926 .elementor-element.elementor-element-50c2574 .menu-img img{height:58px;}.elementor-11926 .elementor-element.elementor-element-50c2574 .ue_price_list_image_spacing{width:16px;}.elementor-11926 .elementor-element.elementor-element-50c2574 .menu-title{font-size:20px;}.elementor-11926 .elementor-element.elementor-element-50c2574 .menu-price{font-size:17px;}.elementor-11926 .elementor-element.elementor-element-50c2574 .menu-text{font-size:14px;}.elementor-11926 .elementor-element.elementor-element-b211886 > .elementor-element-populated{padding:20px 20px 20px 20px;}.elementor-11926 .elementor-element.elementor-element-8b628ed{font-size:32px;}.elementor-11926 .elementor-element.elementor-element-8b628ed > .elementor-widget-container{margin:0px 0px 10px 0px;}.elementor-11926 .elementor-element.elementor-element-ccd699e .ue_price_list_item{margin:0px 0px 0px 0px;}.elementor-11926 .elementor-element.elementor-element-ccd699e .menu-img{width:46px;align-items:flex-start;}.elementor-11926 .elementor-element.elementor-element-ccd699e .menu-img img{height:58px;}.elementor-11926 .elementor-element.elementor-element-ccd699e .ue_price_list_image_spacing{width:16px;}.elementor-11926 .elementor-element.elementor-element-ccd699e .menu-title{font-size:20px;}.elementor-11926 .elementor-element.elementor-element-ccd699e .menu-price{font-size:17px;}.elementor-11926 .elementor-element.elementor-element-ccd699e .menu-text{font-size:14px;}.elementor-11926 .elementor-element.elementor-element-6a824dc img{width:65px;}body:not(.rtl) .elementor-11926 .elementor-element.elementor-element-6a824dc{right:10.4px;}body.rtl .elementor-11926 .elementor-element.elementor-element-6a824dc{left:10.4px;}.elementor-11926 .elementor-element.elementor-element-6a824dc{top:-10px;}.elementor-11926 .elementor-element.elementor-element-9449c9d:not(.elementor-motion-effects-element-type-background), .elementor-11926 .elementor-element.elementor-element-9449c9d > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-position:top center;background-size:cover;}.elementor-11926 .elementor-element.elementor-element-9449c9d{padding:20px 10px 40px 10px;}.elementor-11926 .elementor-element.elementor-element-263486f:not(.elementor-motion-effects-element-type-background) > .elementor-widget-wrap, .elementor-11926 .elementor-element.elementor-element-263486f > .elementor-widget-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-position:0% 0px;background-size:71px auto;}.elementor-11926 .elementor-element.elementor-element-5426d5c{padding:20px 0px 0px 0px;}.elementor-11926 .elementor-element.elementor-element-226b72a > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute){margin-bottom:0px;}.elementor-11926 .elementor-element.elementor-element-226b72a > .elementor-element-populated{margin:0px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;}.elementor-11926 .elementor-element.elementor-element-d0b298c{font-size:46px;}.elementor-11926 .elementor-element.elementor-element-d0b298c > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 20px 0px;}.elementor-11926 .elementor-element.elementor-element-8937c39{font-size:16px;}.elementor-11926 .elementor-element.elementor-element-8937c39 > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 20px 0px;}}
</style>
@endsection

@section('content')
<article class="post-11926 page type-page status-publish hentry" id="post-11926">
	<div class="post-inner">
		<header class="entry-header header-group">
			<div class="entry-header-inner">
			</div>
			<!-- .entry-header-inner -->
		</header>
		<!-- .entry-header -->
		<div class="entry-content clearfix">
			<div data-elementor-type="wp-page" data-elementor-id="11926" class="elementor elementor-11926">
				<section class="elementor-section elementor-top-section elementor-element elementor-element-18afafb elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="18afafb" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-background-overlay"></div>
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-36bbf4e" data-id="36bbf4e" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-315fb23 elementor-reverse-tablet elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="315fb23" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
									<div class="elementor-container elementor-column-gap-default">
										<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-d6f32da elementor-invisible" data-id="d6f32da" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:100}">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-9d1a40f elementor-widget elementor-widget-text-editor" data-id="9d1a40f" data-element_type="widget" data-widget_type="text-editor.default">
													<div class="elementor-widget-container">
														<style>/*! elementor - v3.18.0 - 20-12-2023 */
															.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#69727d;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#69727d;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}
														</style>
														Pricing						
													</div>
												</div>
												<div class="elementor-element elementor-element-90cce5b elementor-widget elementor-widget-text-editor" data-id="90cce5b" data-element_type="widget" data-widget_type="text-editor.default">
													<div class="elementor-widget-container">
														Nail treatments pricing
													</div>
												</div>
												<div class="elementor-element elementor-element-c4759d9 elementor-widget elementor-widget-text-editor" data-id="c4759d9" data-element_type="widget" data-widget_type="text-editor.default">
													<div class="elementor-widget-container">
														There are many nail treatments to choose from, all of which will leave you with a radiant smile on your face as well as healthy and fabulous nails.						
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
				</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-0100f32 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0100f32" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-background-overlay"></div>
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-716ce85" data-id="716ce85" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-6ef1bd5 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6ef1bd5" data-element_type="section">
									<div class="elementor-container elementor-column-gap-default">
										<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f1036a6" data-id="f1036a6" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-c2b0981 elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-image" data-id="c2b0981" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
													<div class="elementor-widget-container">
														<style>/*! elementor - v3.18.0 - 20-12-2023 */
															.elementor-widget-image{text-align:center}.elementor-widget-image a{display:inline-block}.elementor-widget-image a img[src$=".svg"]{width:48px}.elementor-widget-image img{vertical-align:middle;display:inline-block}
														</style>
														<img fetchpriority="high" decoding="async" width="400" height="296" src="{{ asset('vendor/nails/luxana/wp-content/uploads/2023/02/5tg5t.png') }}" class="attachment-large size-large wp-image-27816" alt=""  sizes="(max-width: 400px) 100vw, 400px" />															
													</div>
												</div>
												<div class="elementor-element elementor-element-d6cf7ad elementor-widget elementor-widget-text-editor" data-id="d6cf7ad" data-element_type="widget" data-widget_type="text-editor.default">
													<div class="elementor-widget-container">
														Manicures						
													</div>
												</div>
												<div class="elementor-element elementor-element-d8f7f28 elementor-invisible elementor-widget elementor-widget-ucaddon_price_list" data-id="d8f7f28" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}" data-widget_type="ucaddon_price_list.default">
													<div class="elementor-widget-container">
														<!-- start Price List -->
														<style type="text/css">/* widget: Price List */
															#uc_price_list_elementor_d8f7f28  *{
															box-sizing:border-box;
															}
															#uc_price_list_elementor_d8f7f28 li
															{
															list-style:none;
															}
															#uc_price_list_elementor_d8f7f28 .menu-list
															{
															padding: 0px;
															display:grid;
															}
															#uc_price_list_elementor_d8f7f28 .menu-img{
															flex-grow:0;
															flex-shrink:0;
															display:flex;
															overflow:hidden;
															}
															#uc_price_list_elementor_d8f7f28 .menu-img img
															{
															width:100%;
															display:block;
															transition:0.3s;
															}
															#uc_price_list_elementor_d8f7f28 .ue_price_list_item{
															display: flex;
															overflow:hidden;
															}
															#uc_price_list_elementor_d8f7f28 .menu-items:last-child
															{
															border-bottom:none;
															}
															#uc_price_list_elementor_d8f7f28 .menu-wrappertitle{
															display: flex;
															align-items:center;
															}
															#uc_price_list_elementor_d8f7f28 .menu-wrapperall{
															flex-grow:1;
															}
															#uc_price_list_elementor_d8f7f28 .menu-text-separator{
															align-self: center;
															flex-grow:1;
															}
															#uc_price_list_elementor_d8f7f28 .ue_price_list_seperator
															{
															border-top-width: 0;
															border-right-width: 0;
															border-left-width: 0;
															}
															#uc_price_list_elementor_d8f7f28 .menu-text {
															}
															#uc_price_list_elementor_d8f7f28 .menu-price{
															flex-grow:0;
															flex-shrink:0;
															display: flex;
															justify-content: center;
															align-content: center;
															flex-direction: column;
															}
															#uc_price_list_elementor_d8f7f28 .menu-title{
															}
															#uc_price_list_elementor_d8f7f28 .menu-wrapperall
															{
															display:flex;
															width:100%;
															}
															#uc_price_list_elementor_d8f7f28 .menu-wrappermidlle
															{
															width:100%;
															}
															#uc_price_list_elementor_d8f7f28 .ue_price_list_image_spacing
															{
															flex-grow:0;
															flex-shrink:0;
															}
															#uc_price_list_elementor_d8f7f28 li.menu-items:last-child .ue_price_list_item_seperator
															{
															display:none;
															}
															#uc_price_list_elementor_d8f7f28 .ue_price_list_badge
															{
															display:inline-block;
															}
															.ue_price_list_badge
															{
															font-size:10px;
															}
															#uc_price_list_elementor_d8f7f28 a
															{
															text-decoration:none;
															}
															#uc_price_list_elementor_d8f7f28 .menu-price-spacing
															{
															flex-grow:0;
															flex-shrink:0;
															}
														</style>
														<div id="uc_price_list_elementor_d8f7f28" class="" >
															<ul class="menu-list uc-items-wrapper">
																<li class="menu-items">
																	<div class="ue_price_list_item">
																		<div class="menu-wrapperall">
																			<div class="menu-wrappermidlle">
																				<div class="menu-wrappertitle">
																					<div class="menu-title">  Shape & paint hands </div>
																					<div class="menu-text-separator">
																						<div class="ue_price_list_seperator"></div>
																					</div>
																					<div class="menu-price-spacing"></div>
																					<div class="menu-price">$30</div>
																				</div>
																				<div class="menu-text">  </div>
																			</div>
																		</div>
																	</div>
																</li>
																<li class="menu-items">
																	<div class="ue_price_list_item">
																		<div class="menu-wrapperall">
																			<div class="menu-wrappermidlle">
																				<div class="menu-wrappertitle">
																					<div class="menu-title"> Classic manicure </div>
																					<div class="menu-text-separator">
																						<div class="ue_price_list_seperator"></div>
																					</div>
																					<div class="menu-price-spacing"></div>
																					<div class="menu-price">$37</div>
																				</div>
																				<div class="menu-text">  </div>
																			</div>
																		</div>
																	</div>
																</li>
																<li class="menu-items">
																	<div class="ue_price_list_item">
																		<div class="menu-wrapperall">
																			<div class="menu-wrappermidlle">
																				<div class="menu-wrappertitle">
																					<div class="menu-title"> Luxury manicure </div>
																					<div class="menu-text-separator">
																						<div class="ue_price_list_seperator"></div>
																					</div>
																					<div class="menu-price-spacing"></div>
																					<div class="menu-price">$90</div>
																				</div>
																				<div class="menu-text">  </div>
																			</div>
																		</div>
																	</div>
																</li>
																<li class="menu-items">
																	<div class="ue_price_list_item">
																		<div class="menu-wrapperall">
																			<div class="menu-wrappermidlle">
																				<div class="menu-wrappertitle">
																					<div class="menu-title"> Mens manicure </div>
																					<div class="menu-text-separator">
																						<div class="ue_price_list_seperator"></div>
																					</div>
																					<div class="menu-price-spacing"></div>
																					<div class="menu-price">$35</div>
																				</div>
																				<div class="menu-text">  </div>
																			</div>
																		</div>
																	</div>
																</li>
																<li class="menu-items">
																	<div class="ue_price_list_item">
																		<div class="menu-wrapperall">
																			<div class="menu-wrappermidlle">
																				<div class="menu-wrappertitle">
																					<div class="menu-title"> Gel manicure </div>
																					<div class="menu-text-separator">
																						<div class="ue_price_list_seperator"></div>
																					</div>
																					<div class="menu-price-spacing"></div>
																					<div class="menu-price">$35</div>
																				</div>
																				<div class="menu-text">  </div>
																			</div>
																		</div>
																	</div>
																</li>
																<li class="menu-items">
																	<div class="ue_price_list_item">
																		<div class="menu-wrapperall">
																			<div class="menu-wrappermidlle">
																				<div class="menu-wrappertitle">
																					<div class="menu-title"> Nail art </div>
																					<div class="menu-text-separator">
																						<div class="ue_price_list_seperator"></div>
																					</div>
																					<div class="menu-price-spacing"></div>
																					<div class="menu-price">$100</div>
																				</div>
																				<div class="menu-text">  </div>
																			</div>
																		</div>
																	</div>
																</li>
																<li class="menu-items">
																	<div class="ue_price_list_item">
																		<div class="menu-wrapperall">
																			<div class="menu-wrappermidlle">
																				<div class="menu-wrappertitle">
																					<div class="menu-title"> Gel removal </div>
																					<div class="menu-text-separator">
																						<div class="ue_price_list_seperator"></div>
																					</div>
																					<div class="menu-price-spacing"></div>
																					<div class="menu-price">$20</div>
																				</div>
																				<div class="menu-text">  </div>
																			</div>
																		</div>
																	</div>
																</li>
															</ul>
														</div>
														<script type="text/javascript"  id="ue_script_price_list" >
															/* Price List scripts: */ 
															
															
															
															
																		
														</script>
														<!-- end Price List -->		
													</div>
												</div>
											</div>
										</div>
										<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-36e8abe" data-id="36e8abe" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-2da1de4 elementor-widget elementor-widget-text-editor" data-id="2da1de4" data-element_type="widget" data-widget_type="text-editor.default">
													<div class="elementor-widget-container">
														Pedicures						
													</div>
												</div>
												<div class="elementor-element elementor-element-807cb76 elementor-invisible elementor-widget elementor-widget-ucaddon_price_list" data-id="807cb76" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}" data-widget_type="ucaddon_price_list.default">
													<div class="elementor-widget-container">
														<!-- start Price List -->
														<style type="text/css">/* widget: Price List */
															#uc_price_list_elementor_807cb76  *{
															box-sizing:border-box;
															}
															#uc_price_list_elementor_807cb76 li
															{
															list-style:none;
															}
															#uc_price_list_elementor_807cb76 .menu-list
															{
															padding: 0px;
															display:grid;
															}
															#uc_price_list_elementor_807cb76 .menu-img{
															flex-grow:0;
															flex-shrink:0;
															display:flex;
															overflow:hidden;
															}
															#uc_price_list_elementor_807cb76 .menu-img img
															{
															width:100%;
															display:block;
															transition:0.3s;
															}
															#uc_price_list_elementor_807cb76 .ue_price_list_item{
															display: flex;
															overflow:hidden;
															}
															#uc_price_list_elementor_807cb76 .menu-items:last-child
															{
															border-bottom:none;
															}
															#uc_price_list_elementor_807cb76 .menu-wrappertitle{
															display: flex;
															align-items:center;
															}
															#uc_price_list_elementor_807cb76 .menu-wrapperall{
															flex-grow:1;
															}
															#uc_price_list_elementor_807cb76 .menu-text-separator{
															align-self: center;
															flex-grow:1;
															}
															#uc_price_list_elementor_807cb76 .ue_price_list_seperator
															{
															border-top-width: 0;
															border-right-width: 0;
															border-left-width: 0;
															}
															#uc_price_list_elementor_807cb76 .menu-text {
															}
															#uc_price_list_elementor_807cb76 .menu-price{
															flex-grow:0;
															flex-shrink:0;
															display: flex;
															justify-content: center;
															align-content: center;
															flex-direction: column;
															}
															#uc_price_list_elementor_807cb76 .menu-title{
															}
															#uc_price_list_elementor_807cb76 .menu-wrapperall
															{
															display:flex;
															width:100%;
															}
															#uc_price_list_elementor_807cb76 .menu-wrappermidlle
															{
															width:100%;
															}
															#uc_price_list_elementor_807cb76 .ue_price_list_image_spacing
															{
															flex-grow:0;
															flex-shrink:0;
															}
															#uc_price_list_elementor_807cb76 li.menu-items:last-child .ue_price_list_item_seperator
															{
															display:none;
															}
															#uc_price_list_elementor_807cb76 .ue_price_list_badge
															{
															display:inline-block;
															}
															.ue_price_list_badge
															{
															font-size:10px;
															}
															#uc_price_list_elementor_807cb76 a
															{
															text-decoration:none;
															}
															#uc_price_list_elementor_807cb76 .menu-price-spacing
															{
															flex-grow:0;
															flex-shrink:0;
															}
														</style>
														<div id="uc_price_list_elementor_807cb76" class="" >
															<ul class="menu-list uc-items-wrapper">
																<li class="menu-items">
																	<div class="ue_price_list_item">
																		<div class="menu-wrapperall">
																			<div class="menu-wrappermidlle">
																				<div class="menu-wrappertitle">
																					<div class="menu-title">  Shape & paint fleet </div>
																					<div class="menu-text-separator">
																						<div class="ue_price_list_seperator"></div>
																					</div>
																					<div class="menu-price-spacing"></div>
																					<div class="menu-price">$30</div>
																				</div>
																				<div class="menu-text">  </div>
																			</div>
																		</div>
																	</div>
																</li>
																<li class="menu-items">
																	<div class="ue_price_list_item">
																		<div class="menu-wrapperall">
																			<div class="menu-wrappermidlle">
																				<div class="menu-wrappertitle">
																					<div class="menu-title"> Classic pedicure </div>
																					<div class="menu-text-separator">
																						<div class="ue_price_list_seperator"></div>
																					</div>
																					<div class="menu-price-spacing"></div>
																					<div class="menu-price">$37</div>
																				</div>
																				<div class="menu-text">  </div>
																			</div>
																		</div>
																	</div>
																</li>
																<li class="menu-items">
																	<div class="ue_price_list_item">
																		<div class="menu-wrapperall">
																			<div class="menu-wrappermidlle">
																				<div class="menu-wrappertitle">
																					<div class="menu-title"> Luxury pedicure </div>
																					<div class="menu-text-separator">
																						<div class="ue_price_list_seperator"></div>
																					</div>
																					<div class="menu-price-spacing"></div>
																					<div class="menu-price">$90</div>
																				</div>
																				<div class="menu-text">  </div>
																			</div>
																		</div>
																	</div>
																</li>
																<li class="menu-items">
																	<div class="ue_price_list_item">
																		<div class="menu-wrapperall">
																			<div class="menu-wrappermidlle">
																				<div class="menu-wrappertitle">
																					<div class="menu-title"> Mens pedicure </div>
																					<div class="menu-text-separator">
																						<div class="ue_price_list_seperator"></div>
																					</div>
																					<div class="menu-price-spacing"></div>
																					<div class="menu-price">$35</div>
																				</div>
																				<div class="menu-text">  </div>
																			</div>
																		</div>
																	</div>
																</li>
																<li class="menu-items">
																	<div class="ue_price_list_item">
																		<div class="menu-wrapperall">
																			<div class="menu-wrappermidlle">
																				<div class="menu-wrappertitle">
																					<div class="menu-title"> Gel pedicure </div>
																					<div class="menu-text-separator">
																						<div class="ue_price_list_seperator"></div>
																					</div>
																					<div class="menu-price-spacing"></div>
																					<div class="menu-price">$35</div>
																				</div>
																				<div class="menu-text">  </div>
																			</div>
																		</div>
																	</div>
																</li>
																<li class="menu-items">
																	<div class="ue_price_list_item">
																		<div class="menu-wrapperall">
																			<div class="menu-wrappermidlle">
																				<div class="menu-wrappertitle">
																					<div class="menu-title"> Luxury pedicure (gel) </div>
																					<div class="menu-text-separator">
																						<div class="ue_price_list_seperator"></div>
																					</div>
																					<div class="menu-price-spacing"></div>
																					<div class="menu-price">$100</div>
																				</div>
																				<div class="menu-text">  </div>
																			</div>
																		</div>
																	</div>
																</li>
																<li class="menu-items">
																	<div class="ue_price_list_item">
																		<div class="menu-wrapperall">
																			<div class="menu-wrappermidlle">
																				<div class="menu-wrappertitle">
																					<div class="menu-title"> Gel removal </div>
																					<div class="menu-text-separator">
																						<div class="ue_price_list_seperator"></div>
																					</div>
																					<div class="menu-price-spacing"></div>
																					<div class="menu-price">$30</div>
																				</div>
																				<div class="menu-text">  </div>
																			</div>
																		</div>
																	</div>
																</li>
															</ul>
														</div>
														<script type="text/javascript"  id="ue_script_price_list2" >
															/* Price List scripts: */ 
															
															
															
															
																		
														</script>
														<!-- end Price List -->		
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-b87bbee elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b87bbee" data-element_type="section">
									<div class="elementor-container elementor-column-gap-default">
										<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-25bcf9c" data-id="25bcf9c" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-d43ce69 elementor-widget elementor-widget-text-editor" data-id="d43ce69" data-element_type="widget" data-widget_type="text-editor.default">
													<div class="elementor-widget-container">
														Nail extensions
													</div>
												</div>
												<div class="elementor-element elementor-element-50c2574 elementor-invisible elementor-widget elementor-widget-ucaddon_price_list" data-id="50c2574" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}" data-widget_type="ucaddon_price_list.default">
													<div class="elementor-widget-container">
														<!-- start Price List -->
														<style type="text/css">/* widget: Price List */
															#uc_price_list_elementor_50c2574  *{
															box-sizing:border-box;
															}
															#uc_price_list_elementor_50c2574 li
															{
															list-style:none;
															}
															#uc_price_list_elementor_50c2574 .menu-list
															{
															padding: 0px;
															display:grid;
															}
															#uc_price_list_elementor_50c2574 .menu-img{
															flex-grow:0;
															flex-shrink:0;
															display:flex;
															overflow:hidden;
															}
															#uc_price_list_elementor_50c2574 .menu-img img
															{
															width:100%;
															display:block;
															transition:0.3s;
															}
															#uc_price_list_elementor_50c2574 .ue_price_list_item{
															display: flex;
															overflow:hidden;
															}
															#uc_price_list_elementor_50c2574 .menu-items:last-child
															{
															border-bottom:none;
															}
															#uc_price_list_elementor_50c2574 .menu-wrappertitle{
															display: flex;
															align-items:center;
															}
															#uc_price_list_elementor_50c2574 .menu-wrapperall{
															flex-grow:1;
															}
															#uc_price_list_elementor_50c2574 .menu-text-separator{
															align-self: center;
															flex-grow:1;
															}
															#uc_price_list_elementor_50c2574 .ue_price_list_seperator
															{
															border-top-width: 0;
															border-right-width: 0;
															border-left-width: 0;
															}
															#uc_price_list_elementor_50c2574 .menu-text {
															}
															#uc_price_list_elementor_50c2574 .menu-price{
															flex-grow:0;
															flex-shrink:0;
															display: flex;
															justify-content: center;
															align-content: center;
															flex-direction: column;
															}
															#uc_price_list_elementor_50c2574 .menu-title{
															}
															#uc_price_list_elementor_50c2574 .menu-wrapperall
															{
															display:flex;
															width:100%;
															}
															#uc_price_list_elementor_50c2574 .menu-wrappermidlle
															{
															width:100%;
															}
															#uc_price_list_elementor_50c2574 .ue_price_list_image_spacing
															{
															flex-grow:0;
															flex-shrink:0;
															}
															#uc_price_list_elementor_50c2574 li.menu-items:last-child .ue_price_list_item_seperator
															{
															display:none;
															}
															#uc_price_list_elementor_50c2574 .ue_price_list_badge
															{
															display:inline-block;
															}
															.ue_price_list_badge
															{
															font-size:10px;
															}
															#uc_price_list_elementor_50c2574 a
															{
															text-decoration:none;
															}
															#uc_price_list_elementor_50c2574 .menu-price-spacing
															{
															flex-grow:0;
															flex-shrink:0;
															}
														</style>
														<div id="uc_price_list_elementor_50c2574" class="" >
															<ul class="menu-list uc-items-wrapper">
																<li class="menu-items">
																	<div class="ue_price_list_item">
																		<div class="menu-wrapperall">
																			<div class="menu-wrappermidlle">
																				<div class="menu-wrappertitle">
																					<div class="menu-title">  Full cover soft gel extensions </div>
																					<div class="menu-text-separator">
																						<div class="ue_price_list_seperator"></div>
																					</div>
																					<div class="menu-price-spacing"></div>
																					<div class="menu-price">$70</div>
																				</div>
																				<div class="menu-text">  </div>
																			</div>
																		</div>
																	</div>
																</li>
																<li class="menu-items">
																	<div class="ue_price_list_item">
																		<div class="menu-wrapperall">
																			<div class="menu-wrappermidlle">
																				<div class="menu-wrappertitle">
																					<div class="menu-title"> Acrylic infill </div>
																					<div class="menu-text-separator">
																						<div class="ue_price_list_seperator"></div>
																					</div>
																					<div class="menu-price-spacing"></div>
																					<div class="menu-price">$77</div>
																				</div>
																				<div class="menu-text">  </div>
																			</div>
																		</div>
																	</div>
																</li>
																<li class="menu-items">
																	<div class="ue_price_list_item">
																		<div class="menu-wrapperall">
																			<div class="menu-wrappermidlle">
																				<div class="menu-wrappertitle">
																					<div class="menu-title"> Acrylic full set </div>
																					<div class="menu-text-separator">
																						<div class="ue_price_list_seperator"></div>
																					</div>
																					<div class="menu-price-spacing"></div>
																					<div class="menu-price">$120</div>
																				</div>
																				<div class="menu-text">  </div>
																			</div>
																		</div>
																	</div>
																</li>
															</ul>
														</div>
														<script type="text/javascript"  id="ue_script_price_list3" >
															/* Price List scripts: */ 
															
															
															
															
																		
														</script>
														<!-- end Price List -->		
													</div>
												</div>
											</div>
										</div>
										<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-b211886" data-id="b211886" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-8b628ed elementor-widget elementor-widget-text-editor" data-id="8b628ed" data-element_type="widget" data-widget_type="text-editor.default">
													<div class="elementor-widget-container">
														Removal services						
													</div>
												</div>
												<div class="elementor-element elementor-element-ccd699e elementor-invisible elementor-widget elementor-widget-ucaddon_price_list" data-id="ccd699e" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}" data-widget_type="ucaddon_price_list.default">
													<div class="elementor-widget-container">
														<!-- start Price List -->
														<style type="text/css">/* widget: Price List */
															#uc_price_list_elementor_ccd699e  *{
															box-sizing:border-box;
															}
															#uc_price_list_elementor_ccd699e li
															{
															list-style:none;
															}
															#uc_price_list_elementor_ccd699e .menu-list
															{
															padding: 0px;
															display:grid;
															}
															#uc_price_list_elementor_ccd699e .menu-img{
															flex-grow:0;
															flex-shrink:0;
															display:flex;
															overflow:hidden;
															}
															#uc_price_list_elementor_ccd699e .menu-img img
															{
															width:100%;
															display:block;
															transition:0.3s;
															}
															#uc_price_list_elementor_ccd699e .ue_price_list_item{
															display: flex;
															overflow:hidden;
															}
															#uc_price_list_elementor_ccd699e .menu-items:last-child
															{
															border-bottom:none;
															}
															#uc_price_list_elementor_ccd699e .menu-wrappertitle{
															display: flex;
															align-items:center;
															}
															#uc_price_list_elementor_ccd699e .menu-wrapperall{
															flex-grow:1;
															}
															#uc_price_list_elementor_ccd699e .menu-text-separator{
															align-self: center;
															flex-grow:1;
															}
															#uc_price_list_elementor_ccd699e .ue_price_list_seperator
															{
															border-top-width: 0;
															border-right-width: 0;
															border-left-width: 0;
															}
															#uc_price_list_elementor_ccd699e .menu-text {
															}
															#uc_price_list_elementor_ccd699e .menu-price{
															flex-grow:0;
															flex-shrink:0;
															display: flex;
															justify-content: center;
															align-content: center;
															flex-direction: column;
															}
															#uc_price_list_elementor_ccd699e .menu-title{
															}
															#uc_price_list_elementor_ccd699e .menu-wrapperall
															{
															display:flex;
															width:100%;
															}
															#uc_price_list_elementor_ccd699e .menu-wrappermidlle
															{
															width:100%;
															}
															#uc_price_list_elementor_ccd699e .ue_price_list_image_spacing
															{
															flex-grow:0;
															flex-shrink:0;
															}
															#uc_price_list_elementor_ccd699e li.menu-items:last-child .ue_price_list_item_seperator
															{
															display:none;
															}
															#uc_price_list_elementor_ccd699e .ue_price_list_badge
															{
															display:inline-block;
															}
															.ue_price_list_badge
															{
															font-size:10px;
															}
															#uc_price_list_elementor_ccd699e a
															{
															text-decoration:none;
															}
															#uc_price_list_elementor_ccd699e .menu-price-spacing
															{
															flex-grow:0;
															flex-shrink:0;
															}
														</style>
														<div id="uc_price_list_elementor_ccd699e" class="" >
															<ul class="menu-list uc-items-wrapper">
																<li class="menu-items">
																	<div class="ue_price_list_item">
																		<div class="menu-wrapperall">
																			<div class="menu-wrappermidlle">
																				<div class="menu-wrappertitle">
																					<div class="menu-title">  Gel removal  </div>
																					<div class="menu-text-separator">
																						<div class="ue_price_list_seperator"></div>
																					</div>
																					<div class="menu-price-spacing"></div>
																					<div class="menu-price">$30</div>
																				</div>
																				<div class="menu-text">  </div>
																			</div>
																		</div>
																	</div>
																</li>
																<li class="menu-items">
																	<div class="ue_price_list_item">
																		<div class="menu-wrapperall">
																			<div class="menu-wrappermidlle">
																				<div class="menu-wrappertitle">
																					<div class="menu-title"> Removal only </div>
																					<div class="menu-text-separator">
																						<div class="ue_price_list_seperator"></div>
																					</div>
																					<div class="menu-price-spacing"></div>
																					<div class="menu-price">$17</div>
																				</div>
																				<div class="menu-text">  </div>
																			</div>
																		</div>
																	</div>
																</li>
																<li class="menu-items">
																	<div class="ue_price_list_item">
																		<div class="menu-wrapperall">
																			<div class="menu-wrappermidlle">
																				<div class="menu-wrappertitle">
																					<div class="menu-title"> Nail repair (per nail) </div>
																					<div class="menu-text-separator">
																						<div class="ue_price_list_seperator"></div>
																					</div>
																					<div class="menu-price-spacing"></div>
																					<div class="menu-price">$8</div>
																				</div>
																				<div class="menu-text">  </div>
																			</div>
																		</div>
																	</div>
																</li>
															</ul>
														</div>
														<script type="text/javascript"  id="ue_script_price_list4" >
															/* Price List scripts: */ 
															
															
															
															
																		
														</script>
														<!-- end Price List -->		
													</div>
												</div>
												<div class="elementor-element elementor-element-6a824dc elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-image" data-id="6a824dc" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
													<div class="elementor-widget-container">
														<img decoding="async" width="400" height="162" src="{{ asset('vendor/nails/luxana/wp-content/uploads/2023/02/5tgh5t.png') }}" class="attachment-large size-large wp-image-27831" alt=""  sizes="(max-width: 400px) 100vw, 400px" />															
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
				</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-9449c9d elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="9449c9d" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-background-overlay"></div>
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-263486f" data-id="263486f" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-5426d5c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5426d5c" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
									<div class="elementor-container elementor-column-gap-default">
										<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-226b72a elementor-invisible" data-id="226b72a" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:100}">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-933e79c elementor-widget elementor-widget-text-editor" data-id="933e79c" data-element_type="widget" data-widget_type="text-editor.default">
													<div class="elementor-widget-container">
														Book your visit						
													</div>
												</div>
												<div class="elementor-element elementor-element-d0b298c elementor-widget elementor-widget-text-editor" data-id="d0b298c" data-element_type="widget" data-widget_type="text-editor.default">
													<div class="elementor-widget-container">
														Finding a nail salon near me						
													</div>
												</div>
												<div class="elementor-element elementor-element-8937c39 elementor-widget elementor-widget-text-editor" data-id="8937c39" data-element_type="widget" data-widget_type="text-editor.default">
													<div class="elementor-widget-container">
														There are many nail treatments to choose from, all of which will leave you with a radiant smile on your face as well as healthy and fabulous nails. 						
													</div>
												</div>
												<div class="elementor-element elementor-element-56d5ea1 elementor-tablet-align-center elementor-align-center elementor-widget elementor-widget-button" data-id="56d5ea1" data-element_type="widget" data-widget_type="button.default">
													<div class="elementor-widget-container">
														<div class="elementor-button-wrapper">
															<a class="elementor-button elementor-button-link elementor-size-xl elementor-animation-float" href="/contact-us">
															<span class="elementor-button-content-wrapper">
															<span class="elementor-button-text">Get directions</span>
															</span>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
		<!-- .entry-content -->
	</div>
	<!-- .post-inner -->
	<div class="section-inner clearfix"></div>
	<!-- .section-inner -->
</article>   
@endsection