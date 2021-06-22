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

        <form id="frmRemoveSavedSearch" method="post">
          <input type="hidden" name="AuthenticityToken"
            value="Dj8aCGHm33kRtk0wsdAdTtpDXvbKCQvBfGzC+7z/RhA2FpJdraOWMQKrMgtzycKOfEHNOntMfSMWPXiGSJlKWA==">
          <input type="hidden" name="returnUrl" value="/admin/orders">
          <input type="hidden" name="savedSearchId" value="">
        </form>

        <form id="frmFilter" method="get">
          <input type="hidden" name="Query" value="">

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
            <div class="ui-layout__sections">
              <div class="ui-layout__section">
                <div class="ui-layout__item">
                  <section class="ui-card ">
                    <div class="" id="filterAndSavedSearch"
                      define="{filterer: new Bizweb.OrderFilterAndSavedSearch(this,{&quot;customer&quot;:{&quot;isLoaded&quot;:false},&quot;product&quot;:{&quot;isLoaded&quot;:false}, &quot;type_filter&quot;: &quot;orders&quot;})}"
                      context="filterer">
                      <div class="next-tab__container ">
                        <ul class="next-tab__list filter-tab-list" id="filter-tab-list" role="tablist"
                          data-has-next-tab-controller="true">
                          <li class="filter-tab-item" data-tab-index="1">
                            <a href="/admin/orders"
                              class="filter-tab filter-tab-active show-all-items next-tab next-tab--is-active">Tất
                              cả đơn hàng</a>
                          </li>
                          <li class="filter-tab-item" data-tab-index="3" data-tab-id="3054998"
                            data-tab-name="Chưa thanh toán">
                            <a href="orders?savedSearchId=3054998" class="filter-tab next-tab"
                              bind-event-click="openSavedSearch(3054998);">Chưa thanh toán</a>
                          </li>
                          <li class="filter-tab-item" data-tab-index="4" data-tab-id="3054999"
                            data-tab-name="Chưa giao hàng">
                            <a href="orders?savedSearchId=3054999" class="filter-tab next-tab"
                              bind-event-click="openSavedSearch(3054999);">Chưa giao hàng</a>
                          </li>

                          <li class="next-tab__list__disclosure-item dropdown-container" id="hidden-search"
                            style="display:none">
                            <span class="next-tab next-tab--disclosure filter-tab" id="more-savedsearch" tabindex="-1"
                              aria-selected="true" aria-label="dropdown item" aria-expanded="false" role="button">
                              <svg class="next-icon next-icon--size-16 next-icon--no-nudge" id="svg-msaved">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#next-ellipsis"></use>
                              </svg>
                            </span>
                            <ul class="dropdown-menu arrow-style dropdown-hidden-search dropdown-menu-right pull-right"
                              role="tablist" id="dropdown-hidden-search"></ul>
                          </li>
                        </ul>
                      </div>
                      <div class="next-card__section next-card__section--no-bottom-spacing">
                        <div class="obj-filter hide-when-printing table-filter-container">
                          <div class="next-input-wrapper">
                            <div class="next-field__connected-wrapper">
                              <div id="has--actions" data-tg-refresh-always="true" class=""></div>
                              <form action="/admin/orders" bind-event-submit="submitQuery()"
                                class="next-form next-form--full-width next-field--connected--no-border-radius"
                                method="get"> <label class="next-label helper--visually-hidden"
                                  for="query">Query</label>
                                <div class="next-input--stylized next-field--connected"
                                  style="border-top-right-radius: 0; border-bottom-right-radius: 0">
                                  <span class="next-input__add-on next-input__add-on--before">
                                    <svg class="next-icon next-icon--color-slate-lightest next-icon--size-16">
                                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#next-search-reverse">
                                      </use>
                                    </svg>
                                  </span>
                                  <input type="text" name="query" id="query" placeholder="Tìm kiếm đơn hàng"
                                    bind="query" bind-event-input="submitQuery()" value=""
                                    class="next-input next-input--invisible">
                                </div>
                              </form>

                              <div id="root_sort_by">
                                <div class="ui-popover__container" style="padding-left: 5px">
                                  <button class="ui-button ui-btn-filter" type="button" name="button"
                                    style="border-radius: 5%">
                                    <svg class="next-icon next-icon--size-20" id="svg-filter">
                                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#sort-by"></use>
                                    </svg>
                                  </button>
                                  <div
                                    class="ui-popover ui-popover--align-edge dropdown-menu margin-10 dropdown-filter">
                                    <div class="ui-popover__content-wrapper">
                                      <div class="ui-popover__content auto_max_height">
                                        <div class="ui-popover__section">
                                          <div class="add-filters">
                                            <form class="clearfix">
                                              <ul class="unstyled" data-bind-event-change="requestSortBy()">
                                                <li>
                                                  <div class="next-input-wrapper">
                                                    <label class="next-label next-label--switch"
                                                      for="sort_by_order_number_asc">Mã đơn (A-Z)</label>
                                                    <input class="next-radio fl" id="sort_by_order_number_asc"
                                                      type="radio" data-bind="sortByValue" value="name.keyword:asc"
                                                      data-bind-checked="false">
                                                    <span class="next-radio--styled"></span>
                                                  </div>
                                                </li>
                                                <li>
                                                  <div class="next-input-wrapper">
                                                    <label class="next-label next-label--switch"
                                                      for="sort_by_order_name_desc">Mã đơn (Z-A)</label>
                                                    <input class="next-radio fl" id="sort_by_order_name_desc"
                                                      type="radio" data-bind="sortByValue" value="name.keyword:desc"
                                                      data-bind-checked="false">
                                                    <span class="next-radio--styled"></span>
                                                  </div>
                                                </li>
                                                <li>
                                                  <div class="next-input-wrapper">
                                                    <label class="next-label next-label--switch"
                                                      for="sort_by_create_date_desc">Ngày đặt (Mới - Cũ)</label>
                                                    <input class="next-radio fl" id="sort_by_create_date_desc"
                                                      type="radio" data-bind="sortByValue" value="created_on:desc"
                                                      data-bind-checked="false">
                                                    <span class="next-radio--styled"></span>
                                                  </div>
                                                </li>
                                                <li>
                                                  <div class="next-input-wrapper">
                                                    <label class="next-label next-label--switch"
                                                      for="sort_by_create_date_asc">Ngày đặt (Cũ - Mới)</label>
                                                    <input class="next-radio fl" id="sort_by_create_date_asc"
                                                      type="radio" data-bind="sortByValue" value="created_on:asc"
                                                      data-bind-checked="false">
                                                    <span class="next-radio--styled"></span>
                                                  </div>
                                                </li>
                                                <li>
                                                  <div class="next-input-wrapper">
                                                    <label class="next-label next-label--switch"
                                                      for="sort_by_customer_name_asc">Tên khách hàng (A-Z)</label>
                                                    <input class="next-radio fl" id="sort_by_customer_name_asc"
                                                      type="radio" data-bind="sortByValue"
                                                      value="customer.name.keyword:asc" data-bind-checked="false">
                                                    <span class="next-radio--styled"></span>
                                                  </div>
                                                </li>
                                                <li>
                                                  <div class="next-input-wrapper">
                                                    <label class="next-label next-label--switch"
                                                      for="sort_by_customer_name_desc">Tên khách hàng (Z-A)</label>
                                                    <input class="next-radio fl" id="sort_by_customer_name_desc"
                                                      type="radio" data-bind="sortByValue"
                                                      value="customer.name.keyword:desc" data-bind-checked="false">
                                                    <span class="next-radio--styled"></span>
                                                  </div>
                                                </li>
                                                <li>
                                                  <div class="next-input-wrapper">
                                                    <label class="next-label next-label--switch"
                                                      for="sort_by_price_desc">Tổng tiền (Cao - Thấp)</label>
                                                    <input class="next-radio fl" id="sort_by_price_desc" type="radio"
                                                      data-bind="sortByValue" value="total_price:desc"
                                                      data-bind-checked="false">
                                                    <span class="next-radio--styled"></span>
                                                  </div>
                                                </li>
                                                <li>
                                                  <div class="next-input-wrapper">
                                                    <label class="next-label next-label--switch"
                                                      for="sort_by_price_asc">Tổng tiền (Thấp - Cao)</label>
                                                    <input class="next-radio fl" id="sort_by_price_asc" type="radio"
                                                      data-bind="sortByValue" value="total_price:asc"
                                                      data-bind-checked="false">
                                                    <span class="next-radio--styled"></span>
                                                  </div>
                                                </li>
                                              </ul>
                                            </form>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="ui-card__section has-bulk-actions orders " refresh="orders" id="orders-refresh">
                      <div class="ui-type-container">
                        <div class="table-wrapper orderContext"
                          define="{bulkActions: new Bizweb.OrderBulkActions(this, {&quot;type&quot;:&quot;đơn hàng&quot;})}"
                          context="bulkActions">
                          <table id="order-table" class="table-hover quick-view-order bulk-action-context expanded">
                            <thead>
                              <tr>
                                <th class="select">
                                  <span style="padding-left:30px;">
                                    <div
                                      class="tooltip tooltip-left-align tooltip-bottom bulk-actions__select-all-tooltip">
                                      <div class="next-input-wrapper bulk-actions__select-all btn--select-all"
                                        bind-class="{'bulk-actions__select-all--has-selected-items': selectedItems.length > 0}">
                                        <label
                                          class="next-label next-label--switch btn btn-slim bulk-actions__select-all-btn"
                                          for="bulk-actions__select-all"
                                          bind-class="{'btn btn-slim bulk-actions__select-all-btn': selectedItems.length == 0, 'helper--visually-hidden': selectedItems.length > 0}">
                                          <span class="helper--visually-hidden">Select all orders</span>
                                        </label>
                                        <input type="checkbox" name="bulk-actions__select-all"
                                          id="bulk-actions__select-all"
                                          bind-event-change="addOrRemoveAllBulkActionItems(this)"
                                          class="next-checkbox js-no-dirty bulk-actions__select-all-checkbox all-bulk-action">
                                        <span class="next-checkbox--styled">
                                          <svg class="next-icon next-icon--size-10 checkmark">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                              xlink:href="#next-checkmark-thick"></use>
                                          </svg>
                                          <svg class="next-icon next-icon--size-10 indeterminate">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#next-minus">
                                            </use>
                                          </svg>
                                        </span>
                                      </div>
                                      <div class="tooltip-container" bind-class="{'hide': selectedItems.length > 0}">
                                        <span class="tooltip-label">Chọn tất cả đơn hàng</span>
                                      </div>
                                    </div>

                                    <div class="bulk-actions"
                                      bind-class="{'bulk-actions--is-visible': selectedItems.length > 0}" all-items="1"
                                      items-page="50" total-records="1" style="width: 1097px;">
                                      <ul class="bulk-actions__main-bar segmented">
                                        <li>
                                          <a class="btn btn-slim btn-disabled btn--selection">
                                            <span class="selection-count bulk-action-items-count"
                                              selected-bulk-action-items="0">
                                              <span><span class="hidden-xs">Đã chọn</span> <span
                                                  class="display-bulk-action-items-count"></span> đơn hàng</span>
                                            </span>
                                          </a>
                                        </li>
                                        <li>
                                          <div class="ui-popover__container">
                                            <button class="ui-button ui-button--size-small btn-dropdown-bulkaction"
                                              id="btn-dropdown-bulkaction" type="button" name="button">
                                              <span class="hidden-xs">Chọn thao tác</span><span
                                                class="hidden-lg hidden-md hidden-sm">Thao tác</span> <svg
                                                class="next-icon next-icon--size-20" id="svg-bulkaction">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                  xlink:href="#next-disclosure"></use>
                                              </svg>
                                            </button>
                                            <div
                                              class="dropdown-menu margin-10 dropdown-bulkaction dropdown-bulkaction-order">
                                              <div class="ui-popover__tooltip" style="left:20%"></div>
                                              <div class="ui-popover__pane">
                                                <div class="ui-popover__section ui-popover__section--no-padding">
                                                  <ul class="next-list next-list--compact">
                                                    <li>
                                                      <a class="next-list__item" href="javascript: void(0);">Xóa sản phẩm</a>
                                                    </li>
                                                  </ul>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </li>
                                      </ul>
                                      <span class="bulk-select-all">
                                        <p class="bulk-action-all-selector"></p>
                                      </span>
                                    </div>
                                  </span>
                                </th>

                                <th><span>Đơn hàng</span></th>
                                <th><span>Ngày đặt</span></th>
                                <th style="width: 15%"><span>Khách hàng</span></th>
                                <th><span>Thanh toán</span></th>
                                <th><span>Trạng thái</span></th>
                                <th class="tr"><span>Tổng tiền</span></th>
                                <th><span>Xử lí</span></th>
                              </tr>
                            </thead>
                            <tbody>
                            
                            @foreach($orders as $order)
                              @php
                                $total = 0;
                              @endphp
                              @foreach($order->orderDetails as $item)
                                @if($order->order_id == $item->order_id)
                                  @php
                                    $total += $item->price * $item->quantity;
                                  @endphp
                                @endif  
                              @endforeach    
                              <tr id="parent-quick-view-{{$order->order_id}}" class="ui-nested-link-container parent-quick-view"
                                data-define="{nestedLinkContainer: new Bizweb.NestedLinkContainer(this)}">
                                <td class="select">
                                  <div class="next-input-wrapper" style="float:right;margin-right:50px;">
                                    <label class="next-label helper--visually-hidden next-label--switch"
                                      for="order_ids_{{$order->order_id}}">Select order, #{{$order->order_id}}</label>
                                    <input type="checkbox" name="order_ids_{{$order->order_id}}" value="{{$order->order_id}}"
                                      bind-event-change="addOrRemoveBulkActionItem({{$order->order_id}},this)"
                                      id="bulk-action-{{$order->order_id}}" class="bulk-action-item next-checkbox">
                                    <span class="next-checkbox--styled"><svg
                                        class="next-icon next-icon--size-10 checkmark">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                          xlink:href="#next-checkmark-thick"></use>
                                      </svg></span>
                                  </div>
                                </td>
                                <td class="no-wrap">
                                  <a href="{{route('order.edit', $order->order_id)}}" data-nested-link-target="true">#{{$order->order_id}}</a>
                                </td>
                                <td class="no-wrap next-table__cell--full-width-when-condensed">
                                  <span>{{$order->created_at->format('d/m/Y H:i')}}</span>
                                </td>
                                <td class="next-table__cell--full-width-when-condensed" width="250">
                                  <div class="ui-stack ui-stack--alignment-center ui-stack--spacing-tight">
                                    <div class="ui-stack-item" style="max-width:90%">{{$order->customer->customer_name}} {{$order->customer->customer_surname}}</div>
                                    <a href="{{route('customer.edit', $order->customer->customer_id)}}" class="customer-link tooltip tooltip-top">
                                      <div class="tooltip-container">
                                        <span class="tooltip-label">Xem khách hàng</span>
                                      </div>
                                      <div class="customer-link__icon">
                                        <svg
                                          class="next-icon next-icon--color-white next-icon--size-12 next-icon--no-nudge">
                                          <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xlink:href="#next-chevron-nav"></use>
                                        </svg>
                                      </div>
                                    </a>
                                  </div>
                                </td>

                                <td class="no-wrap" id="payment-status-{{$order->order_id}}">

                                  <span class="badge badge--status-warning badge--progress-incomplete">Chưa thanh toán</span>
                                </td>

                                <td class="no-wrap" id="fulfill-status-{{$order->order_id}}">
                                @if($order->status == 0)
                                  <span class="badge badge--status-attention badge--progress-incomplete" style="background: #8cff1a">
                                    Chưa xử lí
                                  </span>
                                @elseif($order->status == 1)
                                  <span class="badge badge--status-attention badge--progress-incomplete" style="background: pink">
                                    Đã nhận đơn
                                  </span>
                                @elseif($order->status == 2)
                                  <span class="badge badge--status-attention badge--progress-incomplete" style="background: green">
                                    Đã hoàn thành
                                  </span>
                                @else
                                  <span class="badge badge--status-attention badge--progress-incomplete" style="background: red">
                                    Đã hủy
                                  </span>  
                                @endif  
                                </td>
                               
                                <td class="type--right total next-table__cell--top-right-when-condensed">
                                  {{number_format($total, 0, ',', '.')}}₫
                                </td>
                                <td class="no-wrap" id="fulfill-status-{{$order->order_id}}">
                                  @if($order->status == 0)
                                    <span class="badge badge--status-attention badge--progress-incomplete" style="background: white; border:1px solid red; color: red">
                                      Nhận đơn
                                    </span>
                                  @endif 
                                </td>
                             
                              </tr>
                            
                            @endforeach  
                            </tbody>
                          </table>
                        </div>
                        <div class="t-grid-pager-boder">
                          <div class="t-pager t-reset clearfix fix-margin-pager">
                            <div class="col-md-6 col-lg-6 hidden-xs hidden-sm no-padding">
                              <div class="t-status-text dataTables_info">Hiển thị kết quả từ 1 - 1 trên tổng 1
                              </div>
                            </div>
                          </div>
                        </div>
                      
                        <div define="{orders_match_current_search: 1}"></div>
                        <div class="modal" data-tg-refresh="modal" id="modal_container" style="display: none;"
                          aria-hidden="true" aria-labelledby="ModalTitle" tabindex="-1"></div>
                        <div class="modal-bg" data-tg-refresh="modal" id="modal_backdrop"></div>
                        <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
                      </div>
                    </div>
                  </section>
                </div>
                <div class="ui-footer-help">
                  <div class="ui-footer-help__content">
                    <div class="ui-footer-help__icon">
                      <svg class="next-icon next-icon--size-24 next-icon--no-nudge" role="img"
                        aria-labelledby="next-help-circle-title">
                        <title id="next-help-circle-title">Help</title>
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#next-help-circle"></use>
                      </svg>
                    </div>
                    <div>
                      Bạn có thể xem thêm hướng dẫn về quản lý đơn hàng <a target="_blank" rel="noreferrer noopener"
                        title="hướng dẫn về quản lý đơn hàng" href="https://support.sapo.vn/tim-hieu-ve-don-hang">tại
                        đây</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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