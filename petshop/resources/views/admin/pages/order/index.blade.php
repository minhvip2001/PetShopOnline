@extends('admin.layouts.master')
@section('title')
Đơn hàng
@endsection
@section('content')
<main id="AppFrameMain" class="ui-app-frame__main">
  <div class="wrapper" id="wrapper">
    <div id="body" class="page-content clearfix" data-tg-refresh="body">
      <div id="content">

        <style type="text/css">
          .dropdown-backdrop {
            z-index: 1 !important;
            position: unset !important;
          }

          .filter-select {
            text-overflow: ellipsis;
          }

          .dropdown {
            width: 100%;
          }

          .dropdown.product-dropdown {
            width: auto;
          }

          .dropdown.customer-dropdown {
            width: auto;
          }

          .ui-form__group align_item_center filter-item {
            flex-direction: initial !important;
          }

          .next-filter-selector {
            display: flex !important;
            flex: initial !important;
            flex-wrap: nowrap;
            flex-direction: row !important;
            align-items: center;
            min-width: 246px !important;
          }

          .form_filter_tag {
            width: auto;
            flex-wrap: nowrap;
            flex-direction: initial;
          }

          .no_border_radius {
            border-radius: 0 !important;
            border-left: 0px;
          }

          .remove-item-filter {
            color: black;
            padding-left: 5px;
          }

          .ui-select__wrapper.limit_max_with,
          .next-input--stylized.limit_max_width {
            max-width: 204px;
            min-width: 204px;
            flex: initial;
          }

          .ui-form__group>.next-input-wrapper.limit_max_with {
            max-width: 220px;
            min-width: 220px;
            flex: initial;
          }

          .auto_max_width {
            max-height: initial !important;
            max-width: max-content !important;
            width: 100% !important;
          }

          .auto_max_height {
            max-height: none !important;
          }

          .align_item_center {
            align-items: center;
          }

          .btn_filter_disabled {
            pointer-events: none;
            overflow: hidden;
            text-overflow: ellipsis;
          }

          .stop-propagation {
            z-index: 999 !important;
          }

          .filter-item {
            display: none;
          }

          ul,
          li {
            list-style-type: none;
          }

          .single-query {
            border: none;
            padding: 4px 4px 4px 11px;
            height: 28px;
            border-bottom: 1px solid #e6e6e6;
            border-color: #c0c0c0 #c0c0c0 #e6e6e6;
            border-radius: 3px 3px 0 0;
            width: 100%;
          }

          .single-suggest-result {
            width: 320px;
          }

          .single-suggest-result li.single-suggest-select {
            padding: 3px;
          }

          .dropdown-menu .break-top {
            border-top: 1px solid #e6e6e6;
            margin-top: 5px;
            padding-top: 5px;
          }

          .order-list .label.label-warning,
          .order-list .label.label-default {
            font-weight: normal;
            padding: 3px 8px;
            font-size: 11px;
          }

          .grid-order-item .is-archived,
          .grid-order-item .is-archived a {
            color: #c3cfd8;
          }

          .grid-order-item .is-cancelled,
          .grid-order-item .is-cancelled a {
            color: #d83e3e;
          }

          .grid-order-item .is-cancelled .total {
            text-decoration: line-through;
          }

          .grid-order-item .is-archived .next-icon {
            color: #c3cfd8 !important;
            fill: #c3cfd8 !important;
          }

          .grid-order-item .is-cancelled .next-icon {
            color: #d83e3e !important;
            fill: #d83e3e !important;
          }

          /*fix css order*/
          .replace-background-filter .filter-container {
            padding: 20px 20px 20px 20px;
          }

          .is-transitioning {
            display: table-row !important;
            visibility: visible !important;
          }

          @media(min-width:768px) {
            .popover_filter_status {
              width: 100% !important;
            }
          }

          @media(max-width:1200px) {
            .div_filter_fulfillment_status {
              display: none !important;
            }
          }

          @media(max-width:960px) {
            .div_filter_financial_status {
              display: none !important;
            }
          }

          @media(max-width:841px) {
            .div_filter_status {
              display: none !important;
            }

            .align_item_center {
              flex-wrap: wrap !important;
              flex-direction: initial;
            }

            .limit_max_with {
              flex: auto !important;
            }

            .next-input-wrapper.limit_max_with {
              min-width: 220px !important;
            }

            .ui-form__group align_item_center filter-item {
              flex-wrap: wrap !important;
              flex-direction: initial !important;
            }
          }

          @media(min-width:841px) {
            .auto_max_width {
              width: auto !important;
            }
          }

          .banner-dashboard {
            position: relative;
            padding: 0 10px;
          }

          .banner-dashboard img {
            width: 100%;
          }

          .banner-dashboard img:not(.img-fullhd) {
            display: none;
          }

          .banner-dashboard__close {
            border-radius: 50%;
            width: 1.563vw;
            height: 1.563vw;
            position: absolute;
            top: 0.260vw;
            right: 14.95%;
            cursor: pointer;
            z-index: 3;
            font-size: 1.563vw;
            line-height: 1.302vw;
            text-align: center;
          }

          @media(max-width: 1366px) {
            .banner-dashboard img:not(.img-fullhd) {
              display: block;
            }

            .banner-dashboard img.img-fullhd {
              display: none;
            }

            .banner-dashboard__close {
              top: 0.385vw;
              right: 6.2%;
            }
          }

          @media(max-width: 1280px) {
            #BannerEvent {
              display: none;
            }
          }
        </style>

        <div class="modal fade" id="bizweb-modal" data-width="" tabindex="-1" role="dialog"></div>
        <div class="modal" data-tg-refresh="modal" id="modal_container" style="display: none;" aria-hidden="true"
          aria-labelledby="ModalTitle" tabindex="-1"></div>
        <div class="modal-bg" data-tg-refresh="modal" id="modal_backdrop"></div>

        <form id="frmAction" method="post">
          <input type="hidden" name="AuthenticityToken"
            value="Dj8aCGHm33kRtk0wsdAdTtpDXvbKCQvBfGzC+7z/RhA2FpJdraOWMQKrMgtzycKOfEHNOntMfSMWPXiGSJlKWA==">
          <input type="hidden" name="returnUrl" value="/admin/orders">
          <input type="hidden" name="id" value="">
        </form>

        <form id="frmBulkActions" method="get"></form>

        <script type="text/javascript">
          Page(function () {
            $('.stop-propagation').on('click touchstart', function (e) {
              e.stopPropagation();
            });
          });
        </script>

        <div id="pages-index" class="page default has-contextual-help page-order"
          define="{ordersExport:new Bizweb.OrdersExport(this, {'orders_match_current_search':1})}"
          context="ordersExport">
          <header class="ui-title-bar-container   ui-title-bar-container--full-width">
            <div class="ui-title-bar ">
              <div class="ui-title-bar__main-group">
                <div class="ui-title-bar__heading-group">
                  <span class="ui-title-bar__icon">
                    <svg class="next-icon next-icon--color-slate-lighter next-icon--size-20">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#next-discounts"></use>
                    </svg>
                  </span>
                  <h1 class="ui-title-bar__title">Đơn hàng</h1>
                </div>
                <div define="{titleBarActions: new Bizweb.TitleBarActions(this)}" class="action-bar">
                  <div class="action-bar__item action-bar__item--link-container">


                  </div>
                  <div class="ui-title-bar__mobile-primary-actions">
                    <div class="ui-title-bar__actions">
                      <a href="/admin/draft_orders/create" class="ui-button ui-button--primary ui-title-bar__action">Tạo
                        đơn hàng</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ui-title-bar__actions-group">
                <div class="ui-title-bar__actions">
                  <a href="/admin/draft_orders/create" class="ui-button ui-button--primary ui-title-bar__action">Tạo
                    đơn hàng</a>
                </div>
              </div>
            </div>
            <div class="collapsible-header">
              <div class="collapsible-header__heading"></div>
            </div>
          </header>

          <div class="ui-layout ui-layout--full-width">
            <form id="process" data-url="{{route('order.process')}}" method="post">
              {{ csrf_field() }}
              <div class="ui-layout__sections">
                <div class="ui-layout__section" id="ui-layout__section">
                  @include('admin.pages.order.component.all')
                </div>
              </div>
            </form>  
          </div>
          <script type="text/javascript">
            if (typeof scrollPaggingMobile === 'undefined') {
              $(window).scroll(function () {
                scrollPaggingMobile();
              });

              function scrollPaggingMobile() {
                var lastTableElement = $('.orders table tbody tr.parent-quick-view:last');
                if (lastTableElement.length == 0) return false;
                var top = $(window).scrollTop();
                var bottom_top = lastTableElement.offset().top - 600;
                if (top < bottom_top) {
                  $('.show-when-scroll').css({
                    "position": "fixed",
                    "bottom": "0px",
                    "padding-top": "5px",
                    "width": "100%"
                  }).addClass('display-pagging-mobile');
                } else {
                  $('.show-when-scroll').css({
                    "position": "relative",
                    "top": "",
                    "width": "",
                    "padding-top": "25px"
                  }).removeClass('display-pagging-mobile');
                }

                if (top == 0) {
                  $('.show-when-scroll').css({
                    "position": "relative",
                    "top": "",
                    "width": "",
                    "padding-top": "25px"
                  }).removeClass('display-pagging-mobile');
                }
              }
            }
          </script>
        </div>

      </div>
    </div>
  </div>
</main>
@endsection
