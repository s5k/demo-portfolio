@extends('nails::leonie.layout.default', ['themeMode' => 'light', 'menuActive' => 'booking'])

@section('head')
<link rel="stylesheet" id="elementor-post-3420-css" href="{{asset('vendor/nails/leonie/wp-content/uploads/elementor/css/post-3420.css')}}?ver=1626336009" type="text/css" media="all" />
<style id="leonie-style-inline-css" type="text/css">
#qodef-page-outer { margin-top: -126px;}#qodef-page-footer-top-area-inner { padding-top: 95px;}#qodef-page-footer-bottom-area-inner { padding-top: 0px;padding-bottom: 0px;}#qodef-page-inner { padding: 0px;}@media only screen and (max-width: 1024px) { #qodef-page-inner { padding: 0px;}}.qodef-header-sticky .qodef-header-sticky-inner { padding-left: 4%;padding-right: 4%;}#qodef-top-area { background-color: rgba(255,255,255,0);border-color: rgba(255,255,255,0.3);border-bottom-width: 1px;border-style: solid;}#qodef-top-area-inner { height: 30px;}.qodef-page-title { height: 510px;}.qodef-page-title .qodef-m-content { padding-top: 125px;}.qodef-page-title .qodef-m-title { color: #ffffff;}@media only screen and (max-width: 1024px) { .qodef-page-title { height: 350px;}}.qodef-header--divided #qodef-page-header { height: 95px;background-color: rgba(255,255,255,0);}.qodef-header--divided #qodef-page-header-inner { padding-left: 4%;padding-right: 4%;border-bottom-color: rgba(255,255,255,0);border-bottom-width: 1px;}.qodef-page-title.qodef-title--standard .qodef-m-subtitle { color: #ffffff;}
</style>
@endsection

@section('content')
<div id="qodef-page-outer">
   <div class="qodef-page-title qodef-m qodef-title--standard qodef-alignment--center qodef-vertical-alignment--header-bottom qodef--has-image qodef-image--parallax qodef-parallax">
      <div class="qodef-m-inner">
         <div class="qodef-parallax-img-holder">
            <div class="qodef-parallax-img-wrapper"><img width="1920" height="798" src="{{asset('vendor/nails/leonie/wp-content/uploads/2021/07/Booking-page-title-paralax-image-1.jpg')}}" class="qodef-parallax-img" alt="m" decoding="async" fetchpriority="high"  sizes="(max-width: 1920px) 100vw, 1920px" /></div>
         </div>
         <div class="qodef-m-content qodef-content-full-width qodef-parallax-content-holder">
            <p class="qodef-m-subtitle">Our salon</p>
            <h1 class="qodef-m-title entry-title">
               Booking Page 
            </h1>
         </div>
      </div>
   </div>
   <div id="qodef-page-inner" class="qodef-content-full-width">
      <main id="qodef-page-content" class="qodef-grid qodef-layout--template ">
         <div class="qodef-grid-inner clear">
            <div class="qodef-grid-item qodef-page-content-section qodef-col--12">
               <div data-elementor-type="wp-page" data-elementor-id="3420" class="elementor elementor-3420" data-elementor-settings="[]">
                  <div class="elementor-section-wrap">
                     <section class="elementor-section elementor-top-section elementor-element elementor-element-110d004 elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default" data-id="110d004" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                           <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7eeda69" data-id="7eeda69" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-2f17c28 elementor-widget elementor-widget-wp-widget-leonie_core_contact_form_7" data-id="2f17c28" data-element_type="widget" data-widget_type="wp-widget-leonie_core_contact_form_7.default">
                                    <div class="elementor-widget-container">
                                       <div class="qodef-contact-form-7">
                                          <div role="form" class="wpcf7" id="wpcf7-f6-p3420-o1" lang="en-US" dir="ltr">
                                             <div class="screen-reader-response">
                                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                <ul></ul>
                                             </div>
                                             <form action="/booking-page/#wpcf7-f6-p3420-o1" method="post" class="wpcf7-form init demo" novalidate="novalidate" data-status="init">
                                                <div style="display: none;">
                                                   <input type="hidden" name="_wpcf7" value="6" />
                                                   <input type="hidden" name="_wpcf7_version" value="5.4.2" />
                                                   <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                   <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f6-p3420-o1" />
                                                   <input type="hidden" name="_wpcf7_container_post" value="3420" />
                                                   <input type="hidden" name="_wpcf7_posted_data_hash" value />
                                                </div>
                                                <div class="custom-booking">
                                                   <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Name" /></span><span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email" /></span><span class="wpcf7-form-control-wrap your-phone"><input type="text" name="your-phone" value size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Phone" /></span><button type="submit" class="wpcf7-form-control wpcf7-submit qodef-button qodef-size--normal qodef-layout--filled qodef-m"><span class="qodef-m-border--top-left"></span><span class="qodef-m-border--bottom-right"></span><span class="qodef-m-text">Book appointment</span></button>
                                                </div>
                                                <p>*or give us a call <a href="tel:8882653556">(888) 265-3556</a></p>
                                                <div class="wpcf7-response-output" aria-hidden="true"></div>
                                             </form>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                     <section class="elementor-section elementor-top-section elementor-element elementor-element-3aeffc6 elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default" data-id="3aeffc6" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                           <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-34a34c0" data-id="34a34c0" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-ff9a9be elementor-widget__width-auto elementor-widget elementor-widget-leonie_core_image_with_text" data-id="ff9a9be" data-element_type="widget" data-widget_type="leonie_core_image_with_text.default">
                                    <div class="elementor-widget-container">
                                       <div class="qodef-shortcode qodef-m  qodef-image-with-text qodef-layout--text-over  qodef-content-align--center ">
                                          <div class="qodef-m-image">
                                             <div class="qodef-m-main-image">
                                                <img decoding="async" width="800" height="689" src="{{asset('vendor/nails/leonie/wp-content/uploads/2021/05/inner-2-img-1.jpg')}}" class="attachment-full size-full" alt="c"  sizes="(max-width: 800px) 100vw, 800px" /> 
                                             </div>
                                             <div class="qodef-m-overlay-first"></div>
                                             <div class="qodef-m-overlay-second"></div>
                                          </div>
                                          <div class="qodef-m-content">
                                             <div class="qodef-m-info">
                                                <span class="qodef-m-subtitle" style="margin-top: -38px;color: #FFFFFF">
                                                Our salon </span>
                                                <h2 class="qodef-m-title" style="color: #FFFFFF">
                                                   Manicure 
                                                </h2>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="elementor-element elementor-element-fcc7ed5 elementor-widget elementor-widget-leonie_core_pricing_list" data-id="fcc7ed5" data-element_type="widget" data-widget_type="leonie_core_pricing_list.default">
                                    <div class="elementor-widget-container">
                                       <div class="qodef-shortcode qodef-m  qodef-pricing-list ">
                                          <div class="qodef-m-items">
                                             <div class="qodef-m-item qodef-e">
                                                <div class="qodef-e-content">
                                                   <div class="qodef-e-heading">
                                                      <h5 class="qodef-e-title">Manicure </h5>
                                                      <span class="qodef-e-line"></span>
                                                      <span class="qodef-e-price">
                                                      <span class="qodef-e-price-label">$ 20.00</span>
                                                      <span class="qodef-e-price-value">$ 18.00</span>
                                                      </span>
                                                   </div>
                                                   <p class="qodef-e-text">Elementum tempus egestas </p>
                                                </div>
                                             </div>
                                             <div class="qodef-m-item qodef-e">
                                                <div class="qodef-e-content">
                                                   <div class="qodef-e-heading">
                                                      <h5 class="qodef-e-title">Hand/nail Moisturizer</h5>
                                                      <span class="qodef-e-line"></span>
                                                      <span class="qodef-e-price">
                                                      <span class="qodef-e-price-value">$ 50.00</span>
                                                      </span>
                                                   </div>
                                                   <p class="qodef-e-text">Scelerisque in dictum non consectetur</p>
                                                </div>
                                             </div>
                                             <div class="qodef-m-item qodef-e">
                                                <div class="qodef-e-content">
                                                   <div class="qodef-e-heading">
                                                      <h5 class="qodef-e-title">Nail Clippers</h5>
                                                      <span class="qodef-e-line"></span>
                                                      <span class="qodef-e-price">
                                                      <span class="qodef-e-price-value">$ 20.00</span>
                                                      </span>
                                                   </div>
                                                   <p class="qodef-e-text">Nisl suscipit adipiscing bibendum ultricies</p>
                                                </div>
                                             </div>
                                             <div class="qodef-m-item qodef-e">
                                                <div class="qodef-e-content">
                                                   <div class="qodef-e-heading">
                                                      <h5 class="qodef-e-title">Manicure &amp; Pedicure</h5>
                                                      <span class="qodef-e-line"></span>
                                                      <span class="qodef-e-price">
                                                      <span class="qodef-e-price-value">$ 30.00</span>
                                                      </span>
                                                   </div>
                                                   <p class="qodef-e-text">Aenean et tortor </p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4161e30" data-id="4161e30" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-afaa880 elementor-widget__width-auto elementor-widget elementor-widget-leonie_core_image_with_text" data-id="afaa880" data-element_type="widget" data-widget_type="leonie_core_image_with_text.default">
                                    <div class="elementor-widget-container">
                                       <div class="qodef-shortcode qodef-m  qodef-image-with-text qodef-layout--text-over  qodef-content-align--center ">
                                          <div class="qodef-m-image">
                                             <div class="qodef-m-main-image">
                                                <img decoding="async" width="800" height="689" src="{{asset('vendor/nails/leonie/wp-content/uploads/2021/05/inner-2-img-2.jpg')}}" class="attachment-full size-full" alt="c"  sizes="(max-width: 800px) 100vw, 800px" /> 
                                             </div>
                                             <div class="qodef-m-overlay-first"></div>
                                             <div class="qodef-m-overlay-second"></div>
                                          </div>
                                          <div class="qodef-m-content">
                                             <div class="qodef-m-info">
                                                <span class="qodef-m-subtitle" style="margin-top: -38px;color: #FFFFFF">
                                                Our salon </span>
                                                <h2 class="qodef-m-title" style="color: #FFFFFF">
                                                   Pedicure 
                                                </h2>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="elementor-element elementor-element-8903b0c elementor-widget elementor-widget-leonie_core_pricing_list" data-id="8903b0c" data-element_type="widget" data-widget_type="leonie_core_pricing_list.default">
                                    <div class="elementor-widget-container">
                                       <div class="qodef-shortcode qodef-m  qodef-pricing-list ">
                                          <div class="qodef-m-items">
                                             <div class="qodef-m-item qodef-e">
                                                <div class="qodef-e-content">
                                                   <div class="qodef-e-heading">
                                                      <h5 class="qodef-e-title">Manicure </h5>
                                                      <span class="qodef-e-line"></span>
                                                      <span class="qodef-e-price">
                                                      <span class="qodef-e-price-label">$ 20.00</span>
                                                      <span class="qodef-e-price-value">$ 18.00</span>
                                                      </span>
                                                   </div>
                                                   <p class="qodef-e-text">Elementum tempus egestas </p>
                                                </div>
                                             </div>
                                             <div class="qodef-m-item qodef-e">
                                                <div class="qodef-e-content">
                                                   <div class="qodef-e-heading">
                                                      <h5 class="qodef-e-title">Hand/nail Moisturizer</h5>
                                                      <span class="qodef-e-line"></span>
                                                      <span class="qodef-e-price">
                                                      <span class="qodef-e-price-value">$ 50.00</span>
                                                      </span>
                                                   </div>
                                                   <p class="qodef-e-text">Scelerisque in dictum non consectetur</p>
                                                </div>
                                             </div>
                                             <div class="qodef-m-item qodef-e">
                                                <div class="qodef-e-content">
                                                   <div class="qodef-e-heading">
                                                      <h5 class="qodef-e-title">Nail Clippers</h5>
                                                      <span class="qodef-e-line"></span>
                                                      <span class="qodef-e-price">
                                                      <span class="qodef-e-price-value">$ 20.00</span>
                                                      </span>
                                                   </div>
                                                   <p class="qodef-e-text">Nisl suscipit adipiscing bibendum ultricies</p>
                                                </div>
                                             </div>
                                             <div class="qodef-m-item qodef-e">
                                                <div class="qodef-e-content">
                                                   <div class="qodef-e-heading">
                                                      <h5 class="qodef-e-title">Manicure &amp; Pedicure</h5>
                                                      <span class="qodef-e-line"></span>
                                                      <span class="qodef-e-price">
                                                      <span class="qodef-e-price-value">$ 30.00</span>
                                                      </span>
                                                   </div>
                                                   <p class="qodef-e-text">Aenean et tortor </p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                     <section class="elementor-section elementor-top-section elementor-element elementor-element-083c6b6 elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default" data-id="083c6b6" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                           <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-8b776a7" data-id="8b776a7" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-2acab75 elementor-widget__width-auto elementor-widget elementor-widget-leonie_core_image_with_text" data-id="2acab75" data-element_type="widget" data-widget_type="leonie_core_image_with_text.default">
                                    <div class="elementor-widget-container">
                                       <div class="qodef-shortcode qodef-m  qodef-image-with-text qodef-layout--text-over  qodef-content-align--center ">
                                          <div class="qodef-m-image">
                                             <div class="qodef-m-main-image">
                                                <img decoding="async" width="800" height="689" src="{{asset('vendor/nails/leonie/wp-content/uploads/2021/05/inner-2-img-3.jpg')}}" class="attachment-full size-full" alt="c"  sizes="(max-width: 800px) 100vw, 800px" /> 
                                             </div>
                                             <div class="qodef-m-overlay-first"></div>
                                             <div class="qodef-m-overlay-second"></div>
                                          </div>
                                          <div class="qodef-m-content">
                                             <div class="qodef-m-info">
                                                <span class="qodef-m-subtitle" style="margin-top: -38px;color: #FFFFFF">
                                                Our salon </span>
                                                <h2 class="qodef-m-title" style="color: #FFFFFF">
                                                   Hydration 
                                                </h2>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="elementor-element elementor-element-8a83705 elementor-widget elementor-widget-leonie_core_pricing_list" data-id="8a83705" data-element_type="widget" data-widget_type="leonie_core_pricing_list.default">
                                    <div class="elementor-widget-container">
                                       <div class="qodef-shortcode qodef-m  qodef-pricing-list ">
                                          <div class="qodef-m-items">
                                             <div class="qodef-m-item qodef-e">
                                                <div class="qodef-e-content">
                                                   <div class="qodef-e-heading">
                                                      <h5 class="qodef-e-title">Manicure </h5>
                                                      <span class="qodef-e-line"></span>
                                                      <span class="qodef-e-price">
                                                      <span class="qodef-e-price-label">$ 20.00</span>
                                                      <span class="qodef-e-price-value">$ 18.00</span>
                                                      </span>
                                                   </div>
                                                   <p class="qodef-e-text">Elementum tempus egestas </p>
                                                </div>
                                             </div>
                                             <div class="qodef-m-item qodef-e">
                                                <div class="qodef-e-content">
                                                   <div class="qodef-e-heading">
                                                      <h5 class="qodef-e-title">Hand/nail Moisturizer</h5>
                                                      <span class="qodef-e-line"></span>
                                                      <span class="qodef-e-price">
                                                      <span class="qodef-e-price-value">$ 50.00</span>
                                                      </span>
                                                   </div>
                                                   <p class="qodef-e-text">Scelerisque in dictum non consectetur</p>
                                                </div>
                                             </div>
                                             <div class="qodef-m-item qodef-e">
                                                <div class="qodef-e-content">
                                                   <div class="qodef-e-heading">
                                                      <h5 class="qodef-e-title">Nail Clippers</h5>
                                                      <span class="qodef-e-line"></span>
                                                      <span class="qodef-e-price">
                                                      <span class="qodef-e-price-value">$ 20.00</span>
                                                      </span>
                                                   </div>
                                                   <p class="qodef-e-text">Nisl suscipit adipiscing bibendum ultricies</p>
                                                </div>
                                             </div>
                                             <div class="qodef-m-item qodef-e">
                                                <div class="qodef-e-content">
                                                   <div class="qodef-e-heading">
                                                      <h5 class="qodef-e-title">Manicure &amp; Pedicure</h5>
                                                      <span class="qodef-e-line"></span>
                                                      <span class="qodef-e-price">
                                                      <span class="qodef-e-price-value">$ 30.00</span>
                                                      </span>
                                                   </div>
                                                   <p class="qodef-e-text">Aenean et tortor </p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-77a1b3a" data-id="77a1b3a" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-5afb0f4 elementor-widget__width-auto elementor-widget elementor-widget-leonie_core_image_with_text" data-id="5afb0f4" data-element_type="widget" data-widget_type="leonie_core_image_with_text.default">
                                    <div class="elementor-widget-container">
                                       <div class="qodef-shortcode qodef-m  qodef-image-with-text qodef-layout--text-over  qodef-content-align--center ">
                                          <div class="qodef-m-image">
                                             <div class="qodef-m-main-image">
                                                <img decoding="async" width="800" height="689" src="{{asset('vendor/nails/leonie/wp-content/uploads/2021/05/inner-2-img-4.jpg')}}" class="attachment-full size-full" alt="c"  sizes="(max-width: 800px) 100vw, 800px" /> 
                                             </div>
                                             <div class="qodef-m-overlay-first"></div>
                                             <div class="qodef-m-overlay-second"></div>
                                          </div>
                                          <div class="qodef-m-content">
                                             <div class="qodef-m-info">
                                                <span class="qodef-m-subtitle" style="margin-top: -38px;color: #FFFFFF">
                                                Our salon </span>
                                                <h2 class="qodef-m-title" style="color: #FFFFFF">
                                                   Gel Package 
                                                </h2>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="elementor-element elementor-element-ce4b0bc elementor-widget elementor-widget-leonie_core_pricing_list" data-id="ce4b0bc" data-element_type="widget" data-widget_type="leonie_core_pricing_list.default">
                                    <div class="elementor-widget-container">
                                       <div class="qodef-shortcode qodef-m  qodef-pricing-list ">
                                          <div class="qodef-m-items">
                                             <div class="qodef-m-item qodef-e">
                                                <div class="qodef-e-content">
                                                   <div class="qodef-e-heading">
                                                      <h5 class="qodef-e-title">Manicure </h5>
                                                      <span class="qodef-e-line"></span>
                                                      <span class="qodef-e-price">
                                                      <span class="qodef-e-price-label">$ 20.00</span>
                                                      <span class="qodef-e-price-value">$ 18.00</span>
                                                      </span>
                                                   </div>
                                                   <p class="qodef-e-text">Elementum tempus egestas </p>
                                                </div>
                                             </div>
                                             <div class="qodef-m-item qodef-e">
                                                <div class="qodef-e-content">
                                                   <div class="qodef-e-heading">
                                                      <h5 class="qodef-e-title">Hand/nail Moisturizer</h5>
                                                      <span class="qodef-e-line"></span>
                                                      <span class="qodef-e-price">
                                                      <span class="qodef-e-price-value">$ 50.00</span>
                                                      </span>
                                                   </div>
                                                   <p class="qodef-e-text">Scelerisque in dictum non consectetur</p>
                                                </div>
                                             </div>
                                             <div class="qodef-m-item qodef-e">
                                                <div class="qodef-e-content">
                                                   <div class="qodef-e-heading">
                                                      <h5 class="qodef-e-title">Nail Clippers</h5>
                                                      <span class="qodef-e-line"></span>
                                                      <span class="qodef-e-price">
                                                      <span class="qodef-e-price-value">$ 20.00</span>
                                                      </span>
                                                   </div>
                                                   <p class="qodef-e-text">Nisl suscipit adipiscing bibendum ultricies</p>
                                                </div>
                                             </div>
                                             <div class="qodef-m-item qodef-e">
                                                <div class="qodef-e-content">
                                                   <div class="qodef-e-heading">
                                                      <h5 class="qodef-e-title">Manicure &amp; Pedicure</h5>
                                                      <span class="qodef-e-line"></span>
                                                      <span class="qodef-e-price">
                                                      <span class="qodef-e-price-value">$ 30.00</span>
                                                      </span>
                                                   </div>
                                                   <p class="qodef-e-text">Aenean et tortor </p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                     <section class="elementor-section elementor-top-section elementor-element elementor-element-433a1d1 elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default" data-id="433a1d1" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                           <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9191cb4" data-id="9191cb4" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-af8156f elementor-widget elementor-widget-leonie_core_clients_list" data-id="af8156f" data-element_type="widget" data-widget_type="leonie_core_clients_list.default">
                                    <div class="elementor-widget-container">
                                       <div class="qodef-shortcode qodef-m  qodef-clients-list qodef-grid qodef-layout--columns  qodef-gutter--normal qodef-col-num--4 qodef-item-layout--image-only qodef-responsive--custom qodef-col-num--1440--4 qodef-col-num--1366--4 qodef-col-num--1024--2 qodef-col-num--768--2 qodef-col-num--680--1 qodef-col-num--480--1 qodef-hover-animation--fade-in">
                                          <div class="qodef-grid-inner clear">
                                             <span class="qodef-e qodef-grid-item">
                                             <span class="qodef-e-inner">
                                             <span class="qodef-e-image">
                                             <a itemprop="url" href="#" target="_blank">
                                             <span class="qodef-e-logo">
                                             <img decoding="async" width="325" height="53" src="{{asset('vendor/nails/leonie/wp-content/uploads/2021/04/h2-klijenti-img-1.png')}}" class="attachment-full size-full" alt="c"  sizes="(max-width: 325px) 100vw, 325px" /> </span>
                                             <span class="qodef-e-hover-logo">
                                             <img decoding="async" width="325" height="53" src="{{asset('vendor/nails/leonie/wp-content/uploads/2021/04/klijenti-h2-img-1-hover.png')}}" class="attachment-full size-full" alt="c"  sizes="(max-width: 325px) 100vw, 325px" /> </span>
                                             </a>
                                             </span>
                                             </span>
                                             </span>
                                             <span class="qodef-e qodef-grid-item">
                                             <span class="qodef-e-inner">
                                             <span class="qodef-e-image">
                                             <a itemprop="url" href="#" target="_blank">
                                             <span class="qodef-e-logo">
                                             <img decoding="async" width="325" height="53" src="{{asset('vendor/nails/leonie/wp-content/uploads/2021/04/h2-klijenti-img-2-BEZ-@.png')}}" class="attachment-full size-full" alt="c"  sizes="(max-width: 325px) 100vw, 325px" /> </span>
                                             <span class="qodef-e-hover-logo">
                                             <img decoding="async" width="325" height="53" src="{{asset('vendor/nails/leonie/wp-content/uploads/2021/04/klijenti-h2-img-2-hover.png')}}" class="attachment-full size-full" alt="c"  sizes="(max-width: 325px) 100vw, 325px" /> </span>
                                             </a>
                                             </span>
                                             </span>
                                             </span>
                                             <span class="qodef-e qodef-grid-item">
                                             <span class="qodef-e-inner">
                                             <span class="qodef-e-image">
                                             <a itemprop="url" href="#" target="_blank">
                                             <span class="qodef-e-logo">
                                             <img decoding="async" width="325" height="53" src="{{asset('vendor/nails/leonie/wp-content/uploads/2021/04/h2-klijenti-img-3.png')}}" class="attachment-full size-full" alt="c"  sizes="(max-width: 325px) 100vw, 325px" /> </span>
                                             <span class="qodef-e-hover-logo">
                                             <img decoding="async" width="325" height="53" src="{{asset('vendor/nails/leonie/wp-content/uploads/2021/04/klijenti-h2-img-3-hover.png')}}" class="attachment-full size-full" alt="c"  sizes="(max-width: 325px) 100vw, 325px" /> </span>
                                             </a>
                                             </span>
                                             </span>
                                             </span>
                                             <span class="qodef-e qodef-grid-item">
                                             <span class="qodef-e-inner">
                                             <span class="qodef-e-image">
                                             <a itemprop="url" href="#" target="_blank">
                                             <span class="qodef-e-logo">
                                             <img decoding="async" width="325" height="53" src="{{asset('vendor/nails/leonie/wp-content/uploads/2021/04/h2-klijenti-img-4.png')}}" class="attachment-full size-full" alt="c"  sizes="(max-width: 325px) 100vw, 325px" /> </span>
                                             <span class="qodef-e-hover-logo">
                                             <img decoding="async" width="325" height="53" src="{{asset('vendor/nails/leonie/wp-content/uploads/2021/04/klijenti-h2-img-4-hover.png')}}" class="attachment-full size-full" alt="c" sizes="(max-width: 325px) 100vw, 325px" /> </span>
                                             </a>
                                             </span>
                                             </span>
                                             </span>
                                          </div>
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
@endsection