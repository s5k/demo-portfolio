@extends('nails::leonie.layout.default', ['themeMode' => 'dark', 'menuActive' => 'gallery'])

@section('head')
<style id="leonie-style-inline-css" type="text/css">
    #qodef-page-footer-top-area-inner {
        padding-top: 95px;
    }

    #qodef-page-footer-bottom-area-inner {
        padding-top: 0px;
        padding-bottom: 0px;
    }

    #qodef-page-inner {
        padding: 113px 0px 103px;
    }

    @media only screen and (max-width: 1024px) {
        #qodef-page-inner {
            padding: 113px 0px 103px;
        }
    }

    .qodef-header-sticky .qodef-header-sticky-inner {
        padding-left: 4%;
        padding-right: 4%;
    }

    #qodef-top-area {
        background-color: #ffffff;
        border-color: rgba(111,111,111,0.1);
        border-bottom-width: 1px;
        border-style: solid;
    }

    #qodef-top-area-inner {
        height: 30px;
    }

    .qodef-page-title {
        height: 180px;
    }

    @media only screen and (max-width: 1024px) {
        .qodef-page-title {
            height: 180px;
        }
    }

    .qodef-header--divided #qodef-page-header {
        height: 95px;
        background-color: #ffffff;
    }

    .qodef-header--divided #qodef-page-header-inner {
        padding-left: 4%;
        padding-right: 4%;
        border-bottom-color: rgba(255,255,255,0);
        border-bottom-width: 1px;
    }
</style>
@endsection


@section('content')
<div id="qodef-page-outer">
   <div class="qodef-page-title qodef-m qodef-title--standard-with-breadcrumbs qodef-alignment--left qodef-vertical-alignment--header-bottom">
      <div class="qodef-m-inner">
         <div class="qodef-m-content qodef-content-grid ">
            <h1 class="qodef-m-title entry-title">
               Portfolio Gallery 
            </h1>
            <div itemprop="breadcrumb" class="qodef-breadcrumbs"><a itemprop="url" class="qodef-breadcrumbs-link" href="{{ route('home', ['theme' => 'leonie']) }}"><span itemprop="title">Home</span></a><span class="qodef-breadcrumbs-separator"></span><span itemprop="title" class="qodef-breadcrumbs-current">Portfolio Gallery</span></div>
         </div>
      </div>
   </div>
   <div id="qodef-page-inner" class="qodef-content-full-width">
      <main id="qodef-page-content" class="qodef-grid qodef-layout--template ">
         <div class="qodef-grid-inner clear">
            <div class="qodef-grid-item qodef-page-content-section qodef-col--12">
               <div data-elementor-type="wp-page" data-elementor-id="966" class="elementor elementor-966" data-elementor-settings="[]">
                  <div class="elementor-section-wrap">
                     <section class="elementor-section elementor-top-section elementor-element elementor-element-e8eeb41 elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default" data-id="e8eeb41" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                           <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-bc7988a" data-id="bc7988a" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-430af66 elementor-widget elementor-widget-leonie_core_portfolio_list" data-id="430af66" data-element_type="widget" data-widget_type="leonie_core_portfolio_list.default">
                                    <div class="elementor-widget-container">
                                       <div class="qodef-shortcode qodef-m  qodef-portfolio-list qodef-item-layout--info-on-hover qodef-grid qodef-layout--columns  qodef-gutter--normal qodef-col-num--3 qodef-item-layout--info-on-hover qodef-filter--on qodef-pagination--on qodef-pagination-type--standard qodef-responsive--predefined qodef-hover-animation--fade-in" data-options="{&quot;plugin&quot;:&quot;leonie_core&quot;,&quot;module&quot;:&quot;post-types\/portfolio\/shortcodes&quot;,&quot;shortcode&quot;:&quot;portfolio-list&quot;,&quot;post_type&quot;:&quot;portfolio-item&quot;,&quot;next_page&quot;:&quot;2&quot;,&quot;max_pages_num&quot;:3,&quot;behavior&quot;:&quot;columns&quot;,&quot;images_proportion&quot;:&quot;full&quot;,&quot;columns&quot;:&quot;3&quot;,&quot;columns_responsive&quot;:&quot;predefined&quot;,&quot;space&quot;:&quot;normal&quot;,&quot;posts_per_page&quot;:&quot;9&quot;,&quot;orderby&quot;:&quot;date&quot;,&quot;order&quot;:&quot;ASC&quot;,&quot;additional_params&quot;:&quot;tax&quot;,&quot;tax&quot;:&quot;portfolio-category&quot;,&quot;tax_slug&quot;:&quot;nail-care&quot;,&quot;layout&quot;:&quot;info-on-hover&quot;,&quot;hover_animation_info-below&quot;:&quot;overlay&quot;,&quot;hover_animation_info-follow&quot;:&quot;follow&quot;,&quot;hover_animation_info-on-hover&quot;:&quot;fade-in&quot;,&quot;title_tag&quot;:&quot;h3&quot;,&quot;custom_padding&quot;:&quot;no&quot;,&quot;enable_filter&quot;:&quot;yes&quot;,&quot;pagination_type&quot;:&quot;standard&quot;,&quot;object_class_name&quot;:&quot;LeonieCore_Portfolio_List_Shortcode&quot;,&quot;taxonomy_filter&quot;:&quot;portfolio-category&quot;,&quot;unique&quot;:676,&quot;additional_query_args&quot;:{&quot;tax_query&quot;:[{&quot;taxonomy&quot;:&quot;portfolio-category&quot;,&quot;field&quot;:&quot;slug&quot;,&quot;terms&quot;:&quot;nail-care&quot;}]},&quot;space_value&quot;:15}">
                                          <div class="qodef-m-filter">
                                             <div class="qodef-m-filter-items">
                                                <a class="qodef-m-filter-item qodef--active" href="#" data-taxonomy="portfolio-category" data-filter="*">
                                                <span class="qodef-m-filter-item-name">All</span>
                                                </a>
                                                <a class="qodef-m-filter-item" href="#" data-taxonomy="portfolio-category" data-filter="art">
                                                <span class="qodef-m-filter-item-name">Art</span>
                                                </a>
                                                <a class="qodef-m-filter-item" href="#" data-taxonomy="portfolio-category" data-filter="cream">
                                                <span class="qodef-m-filter-item-name">Cream</span>
                                                </a>
                                                <a class="qodef-m-filter-item" href="#" data-taxonomy="portfolio-category" data-filter="feet">
                                                <span class="qodef-m-filter-item-name">Feet</span>
                                                </a>
                                                <a class="qodef-m-filter-item" href="#" data-taxonomy="portfolio-category" data-filter="nails">
                                                <span class="qodef-m-filter-item-name">Nails</span>
                                                </a>
                                             </div>
                                          </div>
                                          <div class="qodef-grid-inner clear">
                                             <article class="qodef-e qodef-grid-item qodef-item--full post-712 portfolio-item type-portfolio-item status-publish has-post-thumbnail hentry portfolio-category-nail-care portfolio-category-feet portfolio-tag-glossy portfolio-tag-nail-art">
                                                <div class="qodef-e-inner">
                                                   <div class="qodef-e-media-image qodef--background" style="background-image: url( {{asset('vendor/nails/leonie/wp-content/uploads/2021/04/port-list-st-img-1.jpg')}})">
                                                      <img fetchpriority="high" decoding="async" width="1300" height="1792" src="{{asset('vendor/nails/leonie/wp-content/uploads/2021/04/port-list-st-img-1.jpg')}}" class="attachment-full size-full wp-post-image" alt="c"  sizes="(max-width: 1300px) 100vw, 1300px" /> 
                                                   </div>
                                                   <div class="qodef-e-content">
                                                      <div class="qodef-e-info-holder">
                                                         <div class="qodef-e-top-holder">
                                                            <div class="qodef-e-info">
                                                               <a href="#" rel="tag">Care</a><span class="qodef-info-separator-single"></span><a href="#" rel="tag">Feet</a> 
                                                               <div class="qodef-info-separator-end"></div>
                                                            </div>
                                                         </div>
                                                         <div class="qodef-e-text">
                                                            <h3 itemprop="name" class="qodef-e-title entry-title">
                                                               <a itemprop="url" class="qodef-e-title-link" href="#">
                                                               Nail Coloring </a>
                                                            </h3>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <a itemprop="url" class="qodef-e-post-link" href="#"></a> 
                                                </div>
                                             </article>
                                             <article class="qodef-e qodef-grid-item qodef-item--full post-743 portfolio-item type-portfolio-item status-publish has-post-thumbnail hentry portfolio-category-art portfolio-category-nail-care portfolio-tag-laque portfolio-tag-mani">
                                                <div class="qodef-e-inner">
                                                   <div class="qodef-e-media-image qodef--background" style="background-image: url( {{asset('vendor/nails/leonie/wp-content/uploads/2021/04/port-list-st-img-2.jpg')}})">
                                                      <img decoding="async" width="1300" height="1792" src="{{asset('vendor/nails/leonie/wp-content/uploads/2021/04/port-list-st-img-2.jpg')}}" class="attachment-full size-full wp-post-image" alt="c"  sizes="(max-width: 1300px) 100vw, 1300px" /> 
                                                   </div>
                                                   <div class="qodef-e-content">
                                                      <div class="qodef-e-info-holder">
                                                         <div class="qodef-e-top-holder">
                                                            <div class="qodef-e-info">
                                                               <a href="#" rel="tag">Art</a><span class="qodef-info-separator-single"></span><a href="#" rel="tag">Care</a> 
                                                               <div class="qodef-info-separator-end"></div>
                                                            </div>
                                                         </div>
                                                         <div class="qodef-e-text">
                                                            <h3 itemprop="name" class="qodef-e-title entry-title">
                                                               <a itemprop="url" class="qodef-e-title-link" href="#">
                                                               Glowing Skin </a>
                                                            </h3>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <a itemprop="url" class="qodef-e-post-link" href="#"></a> 
                                                </div>
                                             </article>
                                             <article class="qodef-e qodef-grid-item qodef-item--full post-745 portfolio-item type-portfolio-item status-publish has-post-thumbnail hentry portfolio-category-nail-care portfolio-category-feet portfolio-tag-glossy portfolio-tag-nail-art">
                                                <div class="qodef-e-inner">
                                                   <div class="qodef-e-media-image qodef--background" style="background-image: url( {{asset('vendor/nails/leonie/wp-content/uploads/2021/04/port-list-st-img-3.jpg')}})">
                                                      <img decoding="async" width="1300" height="1792" src="{{asset('vendor/nails/leonie/wp-content/uploads/2021/04/port-list-st-img-3.jpg')}}" class="attachment-full size-full wp-post-image" alt="c"  sizes="(max-width: 1300px) 100vw, 1300px" /> 
                                                   </div>
                                                   <div class="qodef-e-content">
                                                      <div class="qodef-e-info-holder">
                                                         <div class="qodef-e-top-holder">
                                                            <div class="qodef-e-info">
                                                               <a href="#" rel="tag">Care</a><span class="qodef-info-separator-single"></span><a href="#" rel="tag">Feet</a> 
                                                               <div class="qodef-info-separator-end"></div>
                                                            </div>
                                                         </div>
                                                         <div class="qodef-e-text">
                                                            <h3 itemprop="name" class="qodef-e-title entry-title">
                                                               <a itemprop="url" class="qodef-e-title-link" href="#">
                                                               Love Quality </a>
                                                            </h3>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <a itemprop="url" class="qodef-e-post-link" href="#"></a> 
                                                </div>
                                             </article>
                                             <article class="qodef-e qodef-grid-item qodef-item--full post-806 portfolio-item type-portfolio-item status-publish has-post-thumbnail hentry portfolio-category-art portfolio-category-nail-care portfolio-tag-laque portfolio-tag-mani">
                                                <div class="qodef-e-inner">
                                                   <div class="qodef-e-media-image qodef--background" style="background-image: url( {{asset('vendor/nails/leonie/wp-content/uploads/2021/04/port-list-st-img-4.jpg')}})">
                                                      <img decoding="async" width="1300" height="1792" src="{{asset('vendor/nails/leonie/wp-content/uploads/2021/04/port-list-st-img-4.jpg')}}" class="attachment-full size-full wp-post-image" alt="c"  sizes="(max-width: 1300px) 100vw, 1300px" /> 
                                                   </div>
                                                   <div class="qodef-e-content">
                                                      <div class="qodef-e-info-holder">
                                                         <div class="qodef-e-top-holder">
                                                            <div class="qodef-e-info">
                                                               <a href="#" rel="tag">Art</a><span class="qodef-info-separator-single"></span><a href="#" rel="tag">Care</a> 
                                                               <div class="qodef-info-separator-end"></div>
                                                            </div>
                                                         </div>
                                                         <div class="qodef-e-text">
                                                            <h3 itemprop="name" class="qodef-e-title entry-title">
                                                               <a itemprop="url" class="qodef-e-title-link" href="#">
                                                               Fine Creams </a>
                                                            </h3>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <a itemprop="url" class="qodef-e-post-link" href="#"></a> 
                                                </div>
                                             </article>
                                             <article class="qodef-e qodef-grid-item qodef-item--full post-841 portfolio-item type-portfolio-item status-publish has-post-thumbnail hentry portfolio-category-art portfolio-category-nail-care portfolio-tag-mani portfolio-tag-nail-art">
                                                <div class="qodef-e-inner">
                                                   <div class="qodef-e-media-image qodef--background" style="background-image: url( {{asset('vendor/nails/leonie/wp-content/uploads/2021/04/port-list-st-img-5.jpg')}})">
                                                      <img decoding="async" width="1300" height="1792" src="{{asset('vendor/nails/leonie/wp-content/uploads/2021/04/port-list-st-img-5.jpg')}}" class="attachment-full size-full wp-post-image" alt="c"  sizes="(max-width: 1300px) 100vw, 1300px" /> 
                                                   </div>
                                                   <div class="qodef-e-content">
                                                      <div class="qodef-e-info-holder">
                                                         <div class="qodef-e-top-holder">
                                                            <div class="qodef-e-info">
                                                               <a href="#" rel="tag">Art</a><span class="qodef-info-separator-single"></span><a href="#" rel="tag">Care</a> 
                                                               <div class="qodef-info-separator-end"></div>
                                                            </div>
                                                         </div>
                                                         <div class="qodef-e-text">
                                                            <h3 itemprop="name" class="qodef-e-title entry-title">
                                                               <a itemprop="url" class="qodef-e-title-link" href="#">
                                                               Pure Skin </a>
                                                            </h3>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <a itemprop="url" class="qodef-e-post-link" href="#"></a> 
                                                </div>
                                             </article>
                                             <article class="qodef-e qodef-grid-item qodef-item--full post-899 portfolio-item type-portfolio-item status-publish has-post-thumbnail hentry portfolio-category-nail-care portfolio-category-feet portfolio-tag-laque portfolio-tag-mani">
                                                <div class="qodef-e-inner">
                                                   <div class="qodef-e-media-image qodef--background" style="background-image: url( {{asset('vendor/nails/leonie/wp-content/uploads/2021/04/port-list-st-img-6.jpg')}})">
                                                      <img decoding="async" width="1300" height="1792" src="{{asset('vendor/nails/leonie/wp-content/uploads/2021/04/port-list-st-img-6.jpg')}}" class="attachment-full size-full wp-post-image" alt="c"  sizes="(max-width: 1300px) 100vw, 1300px" /> 
                                                   </div>
                                                   <div class="qodef-e-content">
                                                      <div class="qodef-e-info-holder">
                                                         <div class="qodef-e-top-holder">
                                                            <div class="qodef-e-info">
                                                               <a href="#" rel="tag">Care</a><span class="qodef-info-separator-single"></span><a href="#" rel="tag">Feet</a> 
                                                               <div class="qodef-info-separator-end"></div>
                                                            </div>
                                                         </div>
                                                         <div class="qodef-e-text">
                                                            <h3 itemprop="name" class="qodef-e-title entry-title">
                                                               <a itemprop="url" class="qodef-e-title-link" href="#">
                                                               Skin Goals </a>
                                                            </h3>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <a itemprop="url" class="qodef-e-post-link" href="#"></a> 
                                                </div>
                                             </article>
                                             <article class="qodef-e qodef-grid-item qodef-item--full post-901 portfolio-item type-portfolio-item status-publish has-post-thumbnail hentry portfolio-category-art portfolio-category-nail-care portfolio-tag-glossy portfolio-tag-mani">
                                                <div class="qodef-e-inner">
                                                   <div class="qodef-e-media-image qodef--background" style="background-image: url( {{asset('vendor/nails/leonie/wp-content/uploads/2021/04/port-list-st-img-7.jpg')}})">
                                                      <img decoding="async" width="1300" height="1792" src="{{asset('vendor/nails/leonie/wp-content/uploads/2021/04/port-list-st-img-7.jpg')}}" class="attachment-full size-full wp-post-image" alt="c"  sizes="(max-width: 1300px) 100vw, 1300px" /> 
                                                   </div>
                                                   <div class="qodef-e-content">
                                                      <div class="qodef-e-info-holder">
                                                         <div class="qodef-e-top-holder">
                                                            <div class="qodef-e-info">
                                                               <a href="#" rel="tag">Art</a><span class="qodef-info-separator-single"></span><a href="#" rel="tag">Care</a> 
                                                               <div class="qodef-info-separator-end"></div>
                                                            </div>
                                                         </div>
                                                         <div class="qodef-e-text">
                                                            <h3 itemprop="name" class="qodef-e-title entry-title">
                                                               <a itemprop="url" class="qodef-e-title-link" href="#">
                                                               Your Style </a>
                                                            </h3>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <a itemprop="url" class="qodef-e-post-link" href="#"></a> 
                                                </div>
                                             </article>
                                             <article class="qodef-e qodef-grid-item qodef-item--full post-903 portfolio-item type-portfolio-item status-publish has-post-thumbnail hentry portfolio-category-art portfolio-category-nail-care portfolio-tag-mani portfolio-tag-nail-art">
                                                <div class="qodef-e-inner">
                                                   <div class="qodef-e-media-image qodef--background" style="background-image: url( {{asset('vendor/nails/leonie/wp-content/uploads/2021/04/port-list-st-img-8.jpg')}})">
                                                      <img decoding="async" width="1300" height="1792" src="{{asset('vendor/nails/leonie/wp-content/uploads/2021/04/port-list-st-img-8.jpg')}}" class="attachment-full size-full wp-post-image" alt="c"  sizes="(max-width: 1300px) 100vw, 1300px" /> 
                                                   </div>
                                                   <div class="qodef-e-content">
                                                      <div class="qodef-e-info-holder">
                                                         <div class="qodef-e-top-holder">
                                                            <div class="qodef-e-info">
                                                               <a href="#" rel="tag">Art</a><span class="qodef-info-separator-single"></span><a href="#" rel="tag">Care</a> 
                                                               <div class="qodef-info-separator-end"></div>
                                                            </div>
                                                         </div>
                                                         <div class="qodef-e-text">
                                                            <h3 itemprop="name" class="qodef-e-title entry-title">
                                                               <a itemprop="url" class="qodef-e-title-link" href="#">
                                                               Mix &#038; Match </a>
                                                            </h3>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <a itemprop="url" class="qodef-e-post-link" href="#"></a> 
                                                </div>
                                             </article>
                                             <article class="qodef-e qodef-grid-item qodef-item--full post-905 portfolio-item type-portfolio-item status-publish has-post-thumbnail hentry portfolio-category-nail-care portfolio-category-cream portfolio-tag-glossy portfolio-tag-mani">
                                                <div class="qodef-e-inner">
                                                   <div class="qodef-e-media-image qodef--background" style="background-image: url( {{asset('vendor/nails/leonie/wp-content/uploads/2021/04/port-list-st-img-9.jpg')}})">
                                                      <img decoding="async" width="1300" height="1792" src="{{asset('vendor/nails/leonie/wp-content/uploads/2021/04/port-list-st-img-9.jpg')}}" class="attachment-full size-full wp-post-image" alt="c"  sizes="(max-width: 1300px) 100vw, 1300px" /> 
                                                   </div>
                                                   <div class="qodef-e-content">
                                                      <div class="qodef-e-info-holder">
                                                         <div class="qodef-e-top-holder">
                                                            <div class="qodef-e-info">
                                                               <a href="#" rel="tag">Care</a><span class="qodef-info-separator-single"></span><a href="#" rel="tag">Cream</a> 
                                                               <div class="qodef-info-separator-end"></div>
                                                            </div>
                                                         </div>
                                                         <div class="qodef-e-text">
                                                            <h3 itemprop="name" class="qodef-e-title entry-title">
                                                               <a itemprop="url" class="qodef-e-title-link" href="#">
                                                               Elegant Nails </a>
                                                            </h3>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <a itemprop="url" class="qodef-e-post-link" href="#"></a> 
                                                </div>
                                             </article>
                                          </div>
                                          <div class="qodef-m-pagination qodef--standard">
                                             <div class="qodef-m-pagination-inner">
                                                <nav class="qodef-m-pagination-items">
                                                   <a class="qodef-m-pagination-item qodef--prev qodef--hide" href="#" data-paged="1">
                                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="7.75px" height="12.25px" viewBox="0 0 7.75 12.25" enable-background="new 0 0 7.75 12.25" xml:space="preserve">
                                                         <line fill="none" stroke="#363636" stroke-width="0.75" stroke-miterlimit="10" x1="6.703" y1="0.938" x2="1.125" y2="6.516" />
                                                         <line fill="none" stroke="#363636" stroke-width="0.75" stroke-miterlimit="10" x1="6.734" y1="11.609" x2="1.156" y2="6.031" />
                                                      </svg>
                                                   </a>
                                                   <a class="qodef-m-pagination-item qodef--number qodef--number-1 qodef--active qodef-prev--hidden" href="#" data-paged="1"> 1</a>
                                                   <a class="qodef-m-pagination-item qodef--number qodef--number-2 " href="#" data-paged="2"> 2</a>
                                                   <a class="qodef-m-pagination-item qodef--number qodef--number-3 " href="#" data-paged="3"> 3</a>
                                                   <a class="qodef-m-pagination-item qodef--next " href="#" data-paged="2">
                                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="7.75px" height="12.25px" viewBox="0 0 7.75 12.25" enable-background="new 0 0 7.75 12.25" xml:space="preserve">
                                                         <line fill="none" stroke="#363636" stroke-width="0.75" stroke-miterlimit="10" x1="1.156" y1="0.938" x2="6.734" y2="6.516" />
                                                         <line fill="none" stroke="#363636" stroke-width="0.75" stroke-miterlimit="10" x1="1.125" y1="11.609" x2="6.703" y2="6.031" />
                                                      </svg>
                                                   </a>
                                                </nav>
                                             </div>
                                          </div>
                                          <svg class="qodef-m-pagination-spinner" xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512">
                                             <path d="M304 48c0 26.51-21.49 48-48 48s-48-21.49-48-48 21.49-48 48-48 48 21.49 48 48zm-48 368c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zm208-208c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zM96 256c0-26.51-21.49-48-48-48S0 229.49 0 256s21.49 48 48 48 48-21.49 48-48zm12.922 99.078c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.491-48-48-48zm294.156 0c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.49-48-48-48zM108.922 60.922c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.491-48-48-48z"></path>
                                          </svg>
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
         </div>
      </main>
   </div>
</div>
<div id="qodef-content-bottom" style="background-color: #f8f8f8">
   <div id="qodef-content-bottom-inner" class="qodef-content-grid">
      <div class="qodef-grid-inner clear">
         <div id="custom_html-21" class="widget_text widget widget_custom_html" data-area="side-area">
            <div class="textwidget custom-html-widget">
               <div class="two_columns_50_50 clearfix">
                  <div style="padding: 20px 10% 20px 0;">
                     <div class="qodef-shortcode qodef-m  qodef-banner qodef-layout--link-button qodef-text-align--left qodef--separator  ">
                        <div class="qodef-m-image">
                           <img width="800" height="297" src="{{asset('vendor/nails/leonie/wp-content/uploads/2021/04/h1-banner-1-2.jpg')}}" class="attachment-full size-full" alt="c" decoding="async"  sizes="(max-width: 800px) 100vw, 800px" />
                        </div>
                        <div class="qodef-m-content">
                           <div class="qodef-m-content-inner qodef-banner-content-279" style="padding: 60px">
                              <div class="qodef-m-content-wrapper">
                                 <h4 class="qodef-m-title qodef-banner-title-186">
                                    Wicked Fierce 
                                 </h4>
                                 <p class="qodef-m-text" style="margin-top: 7px">
                                    duo chrome shimmer 
                                 </p>
                                 <div class="qodef-m-button">
                                    <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--textual  qodef-html--link" href="{{ route('booking', ['theme' => 'leonie']) }}" target="_self" rel="noopener"> <span class="qodef-m-text">Book now</span></a> 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div style="padding:6.9%;">
                     <div role="form" class="wpcf7" id="wpcf7-f7-o1" lang="en-US" dir="ltr">
                        <div class="screen-reader-response">
                           <p role="status" aria-live="polite" aria-atomic="true"></p>
                           <ul></ul>
                        </div>
                        <form action="/portfolio-gallery/#wpcf7-f7-o1" method="post" class="wpcf7-form init demo" novalidate="novalidate" data-status="init">
                           <div style="display: none;">
                              <input type="hidden" name="_wpcf7" value="7" />
                              <input type="hidden" name="_wpcf7_version" value="5.4.2" />
                              <input type="hidden" name="_wpcf7_locale" value="en_US" />
                              <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f7-o1" />
                              <input type="hidden" name="_wpcf7_container_post" value="0" />
                              <input type="hidden" name="_wpcf7_posted_data_hash" value />
                           </div>
                           <div class="custom-newsletter">
                              <h3>Contact Our Salon</h3>
                              <span>*or give us a call to schedule a treatment <a href="tel:8882653556;">(888) 265-3556</a></span>
                              <div><span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="E mail" /></span><button type="submit" class="wpcf7-form-control wpcf7-submit qodef-button qodef-size--normal qodef-layout--filled qodef-m"><span class="qodef-m-border--top-left"></span><span class="qodef-m-border--bottom-right"></span><span class="qodef-m-text">send</span></button></div>
                           </div>
                           <div class="wpcf7-response-output" aria-hidden="true"></div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection