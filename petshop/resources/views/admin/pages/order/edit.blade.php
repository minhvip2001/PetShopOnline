@extends('admin.layouts.master')
@section('title')
Thêm mới đơn hàng
@endsection
@section('content')
<main id="AppFrameMain" class="ui-app-frame__main">
  <div class="wrapper" id="wrapper">
    <div id="body" class="page-content clearfix" data-tg-refresh="body">
      <div id="content">

        <style>
          ul,
          ol,
          dl {
            margin: 0;
            padding: 0;
          }

          .radio-filters {
            margin: 0;
            display: block;
            float: right;
            list-style: none;
          }

          .radio-filter {
            display: inline-block;
            margin-left: 15px;
          }

          .radio-filter-input {
            display: none;
          }

          .radio-filter-label {
            cursor: pointer;
            display: inline-block;
            margin: 0;
            vertical-align: middle;
            font-weight: normal;
            color: #798c9c;
          }

          .radio-filter-label:before {
            content: "";
            margin-top: -3px;
            vertical-align: middle;
            display: inline-block;
            width: 10px;
            height: 10px;
            border-radius: 10px;
            background: white;
            border: 1px solid #95a7b7;
            -webkit-transition: all 0.15s;
            transition: all 0.15s;
          }

          .radio-filter-input:checked+.radio-filter-all:before {
            background: #479ccf;
            border-color: #479ccf;
          }

          .radio-filter-input:checked+.radio-filter-fulfillment:before {
            background: #94c140;
            border-color: #94c140;
          }

          .radio-filter-input:checked+.radio-filter-transaction:before {
            background: #e49642;
            border-color: #e49642;
          }

          .next-icon--20 {
            height: 20px;
            width: 20px;
          }

          .next-icon--checkmark-green {
            background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2024%2024%22%20enable-background%3D%22new%200%200%2024%2024%22%3E%3Cstyle%20type%3D%22text%2Fcss%22%3Ecircle%2Cellipse%2Cline%2Cpath%2Cpolygon%2Cpolyline%2Crect%2Ctext%7Bfill%3A%2396bf48%20%21important%3B%20%7D%3C%2Fstyle%3E%3Cpath%20d%3D%22M23.6%205L22%203.4c-.5-.4-1.2-.4-1.7%200L8.5%2015l-4.8-4.7c-.5-.4-1.2-.4-1.7%200L.3%2011.9c-.5.4-.5%201.2%200%201.6l7.3%207.1c.5.4%201.2.4%201.7%200l14.3-14c.5-.4.5-1.1%200-1.6z%22%2F%3E%3C%2Fsvg%3E");
          }

          .next-icon {
            background-position: center center;
            background-repeat: no-repeat;
            background-size: contain;
          }

          .next-icon,
          .next-icon__text {
            display: inline-block;
          }

          .container-fluid-md table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
          }

          .container-fluid-md td {
            border-bottom: 1px solid #ebeef0;
            padding: 6px 10px;
            background: transparent;
          }

          .table--no-border tr {
            border: none;
          }

          .table--no-border td {
            border: none;
          }

          .table--divided td {
            border: 0;
          }

          .status-message .alert {
            margin-left: 20px;
            margin-right: 20px;
            position: relative;
            display: flex;
          }

          .status-message .alert .content-icon {
            display: flex;
            padding: 10px;
            padding-left: 15px;
          }

          .status-message .alert .title {
            font-size: 1.7rem;
            font-weight: 600;
          }

          .status-message .alert-warning {
            background-color: #f5d863;
          }

          .status-message .alert-danger {
            background-color: #f79b92;
            border-color: #de8e86;
            color: #fff;
          }

          .shipment--title a,
          .shipment--title a:visited,
          .shipment--title a:focus,
          .shipment--title a .next-heading {
            color: #479ccf;
          }

          .shipment--title.cancelled a,
          .shipment--title.cancelled a:visited,
          .shipment--title.cancelled a:focus,
          .shipment--title.cancelled a .next-heading {
            color: #8a8b8c;
          }

          .omni-banner-info:before {
            background-color: inherit !important;
          }

          .omini-icon-error {
            fill: #637381 !important;
          }

          @media (max-width:992px) {
            .mobile-width {
              padding-left: 0;
            }

            .mobile-left {
              text-align: left;
            }

            .container-fluid-md td {
              padding: 6px 6px;
            }
          }
        </style>

        <script type="text/javascript">
          Page(function () {
            autosize($('.ui-text-area'));
          });
        </script>
        <script src="https://bizweb.dktcdn.net/dev/admin/jsbarcode.min.js"></script>
        <form id="frmAction" method="post">
          <input type="hidden" name="AuthenticityToken"
            value="Dj8aCGHm33kRtk0wsdAdTn7pzOE785F5XvYi04Aw2eGgdetEeYYTNbfDAGosx8u0XHPr5pElLBwrh6DesajkQw==">
          <input type="hidden" name="returnUrl" value="/admin/orders/8486175">
          <input type="hidden" name="id" value="">
          <input type="hidden" name="orderId" value="8486175">
          <input type="hidden" name="shippingAddressId" value="0">
        </form>
        <div class="orderContext" id="orders-show" context="orderContext"
          define="{orderContext: new Bizweb.EditOrder(this, {&quot;id&quot;:8486175})}">
          <form define="{form: new Bizweb.Forms(this, {disabledUntilDirty: true})}" class="js-tags-form"
            id="edit_order_8486175" action="/admin/orders/8486175" accept-charset="UTF-8" method="post">
            <input type="hidden" name="AuthenticityToken"
              value="Dj8aCGHm33kRtk0wsdAdTn7pzOE785F5XvYi04Aw2eGgdetEeYYTNbfDAGosx8u0XHPr5pElLBwrh6DesajkQw==">
            <header class="ui-title-bar-container">
              <div class="ui-title-bar">
                <div class="ui-title-bar__navigation">
                  <div class="ui-breadcrumbs">
                    <a href="/admin/orders" class="ui-button ui-button--transparent ui-breadcrumb">
                      <svg class="next-icon next-icon--size-20 next-icon--no-nudge">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#chevron-left-thinner"></use>
                      </svg>
                      <span class="ui-breadcrumb__item">Đơn hàng</span>
                    </a>
                  </div>
                  <div class="ui-title-bar__pagination">
                    <ul class="segmented">
                      <li>
                        <a class="btn tooltip tooltip-bottom tooltip-right-align js-prev-btn disabled"
                          href="javascript: void(0);">
                          <span class="tooltip-container">
                            <span class="tooltip-label">Đơn hàng mới hơn</span>
                          </span>
                          <svg role="img" class="next-icon next-icon--rotate-270 next-icon--size-16"
                            aria-labelledby="arrow-detailed-05d178844429e1940fb590adf8abe863-title">
                            <title id="arrow-detailed-05d178844429e1940fb590adf8abe863-title">previous</title>
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-detailed"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a class="btn tooltip tooltip-bottom tooltip-right-align js-next-btn disabled"
                          href="javascript: void(0);">
                          <span class="tooltip-container">
                            <span class="tooltip-label">Đơn hàng cũ hơn</span>
                          </span>
                          <svg role="img" class="next-icon next-icon--rotate-90 next-icon--size-16"
                            aria-labelledby="arrow-detailed-296072e90a5b111c2fcae9e3f9b22b65-title">
                            <title id="arrow-detailed-296072e90a5b111c2fcae9e3f9b22b65-title">next</title>
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-detailed"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>

                  </div>
                </div>
                <div class="ui-title-bar__main-group">
                  <div class="ui-title-bar__heading-group">
                    <span class="ui-title-bar__icon"><svg
                        class="next-icon next-icon--color-slate-lighter next-icon--size-20">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#next-orders"></use>
                      </svg></span>
                    <h1 class="ui-title-bar__title">#1003</h1>
                    <span class="ui-title-bar__metadata">07/04/2021 23:08</span>
                  </div>
                  <div data-define="{titleBarActions: new Bizweb.TitleBarActions(this)}" class="action-bar">
                    <div class="action-bar__item action-bar__item--link-container" context="orderAction"
                      define="{orderAction: new Bizweb.OrderAction(this, {&quot;culture_code&quot;:&quot;vi-VN&quot;,&quot;order_id&quot;:8486175})}">

                      <div class="action-bar__more">
                        <div class="ui-popover__container">
                          <button class="ui-button ui-button--transparent" type="button" name="button"
                            id="ui-popover-activator--8" aria-expanded="false" aria-haspopup="true"
                            aria-owns="ui-popover--8" aria-controls="ui-popover--8">
                            <span data-singular-label="Thao tác" data-multiple-label="Thêm thao tác"
                              class="action-bar__more-label">Thêm thao tác</span>
                            <svg class="next-icon next-icon--size-20">
                              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#next-disclosure"></use>
                            </svg>
                          </button>
                          <div class="ui-popover ui-popover--align-edge ui-popover--is-positioned-beneath"
                            data-popover-css-vertical-margin="13" data-popover-css-horizontal-margin="16"
                            data-popover-css-max-height="300" data-popover-css-max-width="550" id="ui-popover--8"
                            aria-labelledby="ui-popover-activator--8" aria-expanded="false" role="dialog"
                            style="max-width: none; margin-right: 0px; margin-left: 0px; transform-origin: 60px -5px 0px; left: 0px;">
                            <div class="ui-popover__tooltip" style="left: 60px;"></div>
                            <div class="ui-popover__content-wrapper">
                              <div class="ui-popover__content" style="max-height: 217px;">
                                <div class="ui-popover__pane">
                                  <ul class="action-bar__popover-wrapper">
                                    <li>
                                      <ul class="ui-action-list">
                                        <li class="ui-action-list__item">
                                          <button class="ui-action-list-action action-bar__popover-hidden-item"
                                            data-popover-index="1" data-print="true" onclick="printOrder(8486175)"
                                            type="button" name="button">
                                            <span class="ui-action-list-action__text">
                                              <span class="action-bar__popover-icon-wrapper">
                                                <svg
                                                  class="next-icon next-icon--color-blue next-icon--size-16 action-bar__popover-icon">
                                                  <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#next-print-minor"></use>
                                                </svg>
                                              </span>
                                              In đơn hàng
                                            </span>
                                          </button>
                                        </li>
                                        <li class="ui-action-list__item">
                                          <a class="ui-action-list-action" data-popover-index="2"
                                            href="/admin/draft_orders/create?copyId=8486175" type="button"
                                            name="button">
                                            <span class="ui-action-list-action__text">
                                              <span class="action-bar__popover-icon-wrapper">
                                                <svg
                                                  class="next-icon next-icon--color-blue next-icon--size-16 action-bar__popover-icon">
                                                  <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#next-duplicate-minor"></use>
                                                </svg>
                                              </span>
                                              Đặt lại
                                            </span>
                                          </a>
                                        </li>
                                        <li class="ui-action-list__item">
                                          <button class="ui-action-list-action" data-popover-index="3"
                                            bind-event-click="cancelOrderModal.show()" type="button" name="button">
                                            <span class="ui-action-list-action__text">
                                              <span class="action-bar__popover-icon-wrapper">
                                                <svg
                                                  class="next-icon next-icon--color-blue next-icon--size-16 action-bar__popover-icon">
                                                  <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#next-cancel-minor"></use>
                                                </svg>
                                              </span>
                                              Hủy đơn hàng
                                            </span>
                                          </button>
                                          <a class="modal_source" type="text/html" style="display: none"
                                            href="/admin/orders/cancelorder/8486175"
                                            define="{cancelOrderModal: new Bizweb.Modal(this)}"></a>
                                        </li>
                                        <li class="ui-action-list__item">
                                          <a href="javascript: void(0);"
                                            bind-event-click="archiveOrder('/admin/orders/archive/8486175', true)"
                                            class="ui-action-list-action" data-popover-index="4">
                                            <span class="ui-action-list-action__text">
                                              <span class="action-bar__popover-icon-wrapper">
                                                <svg
                                                  class="next-icon next-icon--color-blue next-icon--size-16 action-bar__popover-icon">
                                                  <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#next-archive-minor"></use>
                                                </svg>
                                              </span>
                                              Lưu trữ
                                            </span>
                                          </a>
                                        </li>
                                      </ul>
                                    </li>

                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="ui-title-bar__mobile-primary-actions">
                      <div class="ui-title-bar__actions">
                        <button
                          class="ui-button ui-button--primary js-btn-loadable js-btn-primary ui-title-bar__action btn-primary has-loading"
                          type="submit" name="button" disabled="disabled">Save</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </header>

            <div class="ui-layout">
              <div class="ui-layout__sections">

                <div class="ui-layout__section ui-layout__section--primary">
                  <div class="ui-layout__item">
                    <section class="ui-card" id="order_card">
                      <header class="ui-card__header">
                        <div class="ui-stack ui-stack--wrap">
                          <div class="ui-stack-item ui-stack-item--fill">
                            <div class="ui-stack ui-stack--wrap ui-stack--alignment-center">
                              <h2 class="ui-heading">Chi tiết đơn hàng</h2>

                              <span class="badge badge--status-attention badge--progress-incomplete"><span
                                  class="badge__pip"></span>Chưa chuyển</span>
                            </div>
                          </div>
                          <div class="ui-stack-item">
                            <div class="ui-stack ui-stack--wrap">
                              <div class="ui-stack-item">
                                <div class="hide-when-printing">
                                  <p class="">
                                    <span class="text-emphasis-subdued">
                                      Nguồn
                                    </span>

                                    Website

                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </header>

                      <div id="order-line-items">
                        <div class="next-card__section hide-when-printing">
                          <h3 class="ui-subheading">Chưa giao</h3>
                        </div>
                        <div class="next-card__section next-card__section--no-vertical-spacing">
                         
                            <table class="table--no-side-padding table--divided">
                              <tbody>

                                <tr class="orders-line-item">
                                  <td class="orders-line-item__image hide-when-printing">
                                    <div class="aspect-ratio aspect-ratio--square aspect-ratio--square--50">
                                      <img title="Sổ ghi chép ván cờ" class="aspect-ratio__content"
                                        src="https://bizweb.dktcdn.net/thumb/small/100/307/433/products/smart-heart-power-pack-puppy-20kg.jpg?v=1612325911200">
                                    </div>
                                  </td>
                                  <td class="orders-line-item__description">
                                    <a href="/admin/products/20645415" target="_blank" rel="noreferrer noopener">Smart
                                      Heart Power Pack puppy 20kg phát triển cơ bắp dành cho cho con - CutePets</a>
                                  </td>
                                  <td class="orders-line-item__price">
                                    1.100.000₫
                                  </td>
                                  <td class="orders-line-item__times-sign">
                                    ×
                                  </td>
                                  <td class="orders-line-item__quantity">
                                    1
                                  </td>
                                  <td class="orders-line-item__total">
                                    1.100.000₫ </td>
                                </tr>
                              </tbody>
                            </table>
                          
                        </div>
                        
                      </div>
                      <div class="ui-card__section">
                        <div class="ui-stack ui-stack--wrap ui-stack--distribution-fill">
                          <div id="transaction_summary">
                            <table class="table--nested table--no-border type--right">
                              <tbody>

                                <tr>
                                  <td class="type--subdued">Giá</td>
                                  <td>1.100.000₫</td>
                                </tr>
                                <tr>
                                  <td class="type--subdued">
                                    <div>Vận chuyển</div>
                                    <div>Giao hàng tận nơi</div>
                                    <div>0.00 kg</div>
                                  </td>
                                  <td>
                                    <div>
                                      40.000₫
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td><strong>Tổng cộng</strong></td>
                                  <td><strong>1.140.000₫</strong></td>
                                </tr>

                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>

                      <div class="ui-card__section hide-when-printing" id="order-payment-callout">
                        <div class="ui-stack ui-stack--wrap ui-stack--distribution-trailing ui-stack--alignment-center">
                          <div class="ui-stack-item ui-stack-item--fill">
                            <div class="ui-stack ui-stack--alignment-center">
                              <div>
                                <svg class="next-icon next-icon--24 next-icon--color-blue next-icon--no-nudge">
                                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#next-credit-card">
                                  </use>
                                </svg>
                              </div>
                              <div class="ui-stack-item ui-stack-item--fill">
                                <h3 class="ui-subheading">
                                  Thanh toán khi giao hàng (COD) </h3>
                              </div>
                            </div>
                          </div>
                          <div class="ui-stack-item" context="paymentProcessing"
                            define="{paymentProcessing: new Bizweb.OrderPaymentProcessing(this, { orderId: 8486175, cultureCode: 'vi-VN' })}">
                            <script id="modal-mark-as-paid" class="modal_source"
                              define="{markAsPaidModal: new Bizweb.Modal(this)}" type="text/html">
                                          <form action="/admin/orders/markaspaid?OrderId=8486175&amp;Amount=90000.0000&amp;ParentId=9327098&amp;Kind=capture" method="post">
                                              <input type="hidden" name="AuthenticityToken" value="Dj8aCGHm33kRtk0wsdAdTn7pzOE785F5XvYi04Aw2eGgdetEeYYTNbfDAGosx8u068+dZrL8YzLjew49r0r0iw==" />
                                              <div class="modal-dialog">
                                                  <div class="modal-content">
                                                      <div class="ui-modal__header">
                                                          <div class="ui-modal__header-title">
                                                              <h2 class="ui-title">Xác nhận thanh toán</h2>
                                                          </div>
                                                          <div class="ui-modal__header-actions">
                                                              <div class="ui-modal__close-button">
                                                                  <button class="ui-button ui-button--transparent close-modal" data-dismiss="modal" aria-label="Close modal" type="button" name="button"><svg class="next-icon next-icon--color-ink-lighter next-icon--size-20"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#cancel-small-minor"></use> </svg></button>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="ui-modal__body">
                                                          <div class="ui-modal__section">
                                                              <div>

                                                                  <span>Xác nhận khách hàng đã thanh toán số tiền 90,000₫ qua phương thức thanh to&#225;n Thanh to&#225;n khi giao h&#224;ng (COD) cho đơn h&#224;ng n&#224;y</span>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="ui-modal__footer">
                                                          <div class="ui-modal__footer-actions">
                                                              <div class="ui-modal__secondary-actions">
                                                                  <div class="button-group">
                                                                      <button class="ui-button close-modal" data-dismiss="modal" type="button" name="button">Hủy</button>
                                                                  </div>
                                                              </div>
                                                              <div class="ui-modal__primary-actions">
                                                                  <div class="button-group button-group--right-aligned">
                                                                      <button class="ui-button ui-button--primary js-btn-loadable has-loading" type="submit">Xác nhận</button>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </form>
                                      </script>
                            <button class="ui-button btn-save" type="button"
                              bind-event-click="markAsPaidModal.show()">Xác nhận</button>
                          </div>
                        </div>
                      </div>


                      <div class="ui-card__section" id="shipping-label-card" refresh="order-actions">
                        <div class="ui-stack ui-stack--wrap ui-stack--alignment-center">

                          <div class="ui-stack-item">
                            <svg
                              class="next-icon next-icon--color-slate-lighter next-icon--size-20 next-icon--no-nudge">
                              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#next-shipping"></use>
                            </svg>
                          </div>
                          <div class="ui-stack-item ui-stack-item--fill">
                            <h3 class="ui-subheading">
                              Giao hàng
                            </h3>
                          </div>
                          <div class="ui-stack-item">

                            <a class="btn btn-primary" href="/admin/orders/8486175/fulfillments/create">Giao
                              hàng</a>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
                <div class="ui-layout__section ui-layout__section--secondary" id="order-sidebar">

                  <div class="ui-layout__item">
                    <section class="ui-card ">
                      <div class="ui-card__section hide-when-printing" id="order-notes" data-tg-refresh="order-notes">
                        <div class="ui-stack ui-stack--wrap ui-stack--vertical">
                          <div class="ui-stack-item">
                            <div class="ui-stack ui-stack--wrap ui-stack--alignment-baseline">
                              <div class="ui-stack-item ui-stack-item--fill">
                                <h2 class="ui-heading">Ghi chú</h2>
                              </div>
                              <div class="ui-stack-item">
                                <button class="ui-button btn--link hide-when-printing"
                                  data-bind-event-click="orderNotesModal.show()" type="button"
                                  name="button">Sửa</button>
                              </div>
                            </div>
                          </div>
                          <div class="ui-stack-item">
                            <p class="order-notes__default-text type--subdued">Không có ghi chú</p>
                          </div>
                        </div>
                        <script data-define="{orderNotesModal: new Bizweb.Modal(this)}" type="text/html"
                          class="modal_source">
      <div class="modal-dialog">
          <div class="modal-content">
              <form class="edit_order" id="order-note-edit-form" autocomplete="off" data-tg-refresh="order-notes-edit" data-tg-remote="patch" data-tg-refresh-on-success="order-notes order-title-bar modal" data-define="{orderNotesForm: new Bizweb.Forms(this, {
    disabledUntilDirty: true,
    disableContextBar: true
  })}" data-bind-event-success="Bizweb.Modal.hide()" action="/admin/orders/8486175" accept-charset="UTF-8" method="post">
                  <div class="ui-modal__header">
                      <div class="ui-modal__header-title">
                          <h2 class="ui-title">Sửa ghi chú</h2>
                      </div>
                      <div class="ui-modal__header-actions">
                          <div class="ui-modal__close-button">
                              <button class="ui-button ui-button--transparent close-modal" data-dismiss="modal" aria-label="Close modal" type="button" name="button">
                                  <svg class="next-icon next-icon--color-ink-lighter next-icon--size-20">
                                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#cancel-small-minor">
                                      </use>
                                  </svg>
                              </button>
                          </div>
                      </div>
                  </div>
                  <div class="ui-modal__body">
                      <div class="ui-modal__section">
                          <input type="hidden" name="_method" value="patch">
                          <input type="hidden" name="AuthenticityToken" value="Dj8aCGHm33kRtk0wsdAdTn7pzOE785F5XvYi04Aw2eGgdetEeYYTNbfDAGosx8u068+dZrL8YzLjew49r0r0iw==" />
                          <div>
                              <div class="next-input-wrapper">
                                  <label class="next-label" for="order_note">Ghi chú</label>
                                  <textarea maxlength="5000" class="ui-text-area" name="note" id="order_note"></textarea>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="ui-modal__footer">
                      <div class="ui-modal__footer-actions">
                          <div class="ui-modal__secondary-actions">
                              <div class="button-group">
                                  <button class="ui-button close-modal" data-dismiss="modal" type="button" name="button">Hủy</button>
                              </div>
                          </div>
                          <div class="ui-modal__primary-actions">
                              <div class="button-group button-group--right-aligned">
                                  <button class="ui-button btn-primary js-btn-primary js-btn-loadable" type="submit" name="button">Lưu</button>
                              </div>
                          </div>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </script>
                      </div>
                    </section>
                  </div>

                  <div class="ui-layout__item">
                    <section class="ui-card" id="customer-card" data-tg-refresh="customer-card">
                      <header class="ui-card__header">
                        <div class="ui-stack ui-stack--wrap">
                          <div class="ui-stack-item ui-stack-item--fill">
                            <h2 class="ui-heading">Khách hàng</h2>
                          </div>

                        </div>
                      </header>
                      <div class="ui-card__section">
                        <div class="ui-type-container ui-type-container--spacing-tight">
                          <div>
                            <p><a href="/admin/customers/11594289">Nguyễn Bình Minh</a></p>
                            <p><a href="/admin/orders?CustomerId=11594289">1 đơn hàng</a></p>
                          </div>
                        </div>
                      </div>
                      <div class="ui-card__section update-order-email">
                        <div class="ui-type-container">
                          <div class="ui-stack ui-stack--wrap ui-stack--alignment-baseline">
                            <div class="ui-stack-item ui-stack-item--fill">
                              <h3 class="ui-subheading">Liên hệ</h3>
                            </div>
                            <div class="ui-stack-item">
                              <script id="modal-edit-order-email" class="modal_source"
                                define="{editOrderEmailModal: new Bizweb.Modal(this)}" type="text/html">
                                      <form define="{updateEmail: new Bizweb.Form(this, {node_change: &quot;.update-order-email&quot;}) }" action="/admin/orders/updateorderemail" method="post">
                                          <input type="hidden" name="AuthenticityToken" value="Dj8aCGHm33kRtk0wsdAdTn7pzOE785F5XvYi04Aw2eGgdetEeYYTNbfDAGosx8u068+dZrL8YzLjew49r0r0iw==" />
                                          <div class="modal-dialog">
                                              <div class="modal-content order-email-error-refresh">
                                                  <div class="ui-modal__header">
                                                      <div class="ui-modal__header-title">
                                                          <h2 class="ui-title">Sửa email đơn hàng</h2>
                                                      </div>
                                                      <div class="ui-modal__header-actions">
                                                          <div class="ui-modal__close-button">
                                                              <button class="ui-button ui-button--transparent close-modal" data-dismiss="modal" aria-label="Close modal" type="button" name="button"><svg class="next-icon next-icon--color-ink-lighter next-icon--size-20"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#cancel-small-minor"></use> </svg></button>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="ui-modal__body">
                                                      <div class="ui-modal__section">
                                                          <div>
                                                              <span>Tất cả email thông báo đối với đơn hàng sẽ được gửi tới địa chỉ email này</span>
                                                              <div class="next-input-wrapper" style="margin:10px 0">
                                                                  <input type="hidden" name="Id" value="8486175" />
                                                                  <input type="hidden" name="CustomerId" value="11594289" />
                                                                  <label class="next-label label-strong" for="Email">Email</label>
                                                                  <input class="next-input" data-val="true" data-val-length="Email không được vượt quá 128 ký tự" data-val-length-max="128" id="order-email" name="Email" placeholder="Nhập Email" type="text" value="xuanduc1708@gmail.com" />
                                                                  <div class="has-error">
                                                                      <span class="help-block"><span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span></span>
                                                                  </div>
                                                              </div>
                                                              <input type="hidden" name="CustomerId" value="11594289" />
                                                                  <div class="next-input-wrapper">
                                                                      <label class="next-label" style="margin-left:25px; display:inline-block" for="updateProfile">Cập nhật thông tin khách hàng</label>
                                                                      <input class="next-checkbox" id="updateProfile" name="updateProfile" type="checkbox" value="true" /><input name="updateProfile" type="hidden" value="false" />
                                                                      <span class="next-checkbox--styled"><svg class="next-icon next-icon--size-10 checkmark"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#next-checkmark-thick"></use> </svg></span>
                                                                  </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="ui-modal__footer">
                                                      <div class="ui-modal__footer-actions">
                                                          <div class="ui-modal__secondary-actions">
                                                              <div class="button-group">
                                                                  <button class="ui-button close-modal" data-dismiss="modal" type="button" name="button">Hủy</button>
                                                              </div>
                                                          </div>
                                                          <div class="ui-modal__primary-actions">
                                                              <div class="button-group button-group--right-aligned">
                                                                  <button class="ui-button ui-button--primary js-btn-loadable has-loading" type="submit">Lưu</button>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </form>
                                  </script>
                              <button class="ui-button btn--link" bind-event-click="editOrderEmailModal.show()"
                                type="button" name="button">Sửa</button>
                            </div>
                          </div>
                          <div>
                            <div class="ui-type-container ui-type-container--spacing-extra-tight">
                              <p>
                                <span class="customer-email show-when-printing">minhdeptrai@gmail.com</span>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="ui-card__section">
                        <div class="ui-type-container">
                          <div class="hide">
                          </div>
                          <div class="ui-stack ui-stack--wrap ui-stack--alignment-baseline">
                            <div class="ui-stack-item ui-stack-item--fill">
                              <h3 class="ui-subheading">Địa chỉ giao hàng</h3>
                            </div>
                            <div class="ui-stack-item">

                              <script id="modal-edit-shipping-address" class="modal_source"
                                define="{editShippingAddressModal: new Bizweb.Modal(this)}" type="text/html">
<form define="{updateShippingAddress: new Bizweb.OldForm(this,'.order--account-info') }" action="/admin/orders/updateshippingaddress" method="post" id="formUpdateShippingAddress">
<input type="hidden" name="AuthenticityToken" value="Dj8aCGHm33kRtk0wsdAdTn7pzOE785F5XvYi04Aw2eGgdetEeYYTNbfDAGosx8u068+dZrL8YzLjew49r0r0iw==" />
<div class="modal-dialog" define="{customerAddressCreate: new Bizweb.CustomerAddress(this,{&quot;ward_slt&quot;:&quot;#wardSlt&quot;,&quot;district_slt&quot;:&quot;#districtSlt&quot;,&quot;province_slt&quot;:&quot;#provinceSlt&quot;,&quot;have_city&quot;:true,&quot;init_ward_code&quot;:&quot;22&quot;,&quot;init_ward_id&quot;:0})}" context="customerAddressCreate">
  <div class="modal-content shipping-address-error-refresh">
      <div class="ui-modal__header">
          <div class="ui-modal__header-title">
              <h2 class="ui-title">Sửa địa chỉ giao h&#224;ng</h2>
          </div>
          <div class="ui-modal__header-actions">
              <div class="ui-modal__close-button">
                  <button class="ui-button ui-button--transparent close-modal" data-dismiss="modal" aria-label="Close modal" type="button" name="button"><svg class="next-icon next-icon--color-ink-lighter next-icon--size-20"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#cancel-small-minor"></use> </svg></button>
              </div>
          </div>
      </div>
      <div class="ui-modal__body">
          <input type="hidden" name="OrderId" value="8486175" />
          <div class="ui-modal__section">
              <div>
                  <section class="next-card__section next-card__section--no-padding">
                          <div class="next-grid next-grid--no-outside-padding">
                              <div class="next-grid__cell">
                                  <div class="ui-popover-container-mod" style="width:100%;text-align:left;position:relative">
                                      <div class="next-input-wrapper">
                                          <div class="ui-select__wrapper">
                                              <button class="ui-select" bind-event-click="getAddresses(this,'11594289')" type="button" name="button" id="btn-select-address" aria-expanded="false" aria-haspopup="true" style="text-align:left">Chọn địa chỉ giao hàng</button>
                                              <svg class="next-icon next-icon--size-16"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use> </svg>
                                          </div>
                                      </div>
                                      <div class="ui-popover ui-popover--full-height" id="ui-popover-addresses" data-popover-css-vertical-margin="13" data-popover-css-horizontal-margin="16" data-popover-css-max-height="10000" data-popover-css-max-width="550" aria-expanded="false" role="dialog" style="max-width: none; margin-right: 0px; margin-left: 0px; transform-origin: 137px calc(100% + 5px) 0px;">
                                          <div class="ui-popover__tooltip" style="left: 137px;"></div>
                                          <div class="ui-popover__content-wrapper">
                                              <div class="ui-popover__content" style="max-height: 310px; width: 275px;" id="list_address">
                                                  <div class="ui-popover__pane ui-popover__pane--fixed">
                                                      <div class="next-grid next-grid--no-outside-padding next-grid--vertically-centered">
                                                          <div class="btn-create btn-loading">
                                                              <i class="btn-spinner icon icon-button-spinner"></i>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="next-grid__cell"></div>
                          </div>
                      <div class="next-grid next-grid--no-outside-padding">
                          <div class="next-grid__cell">
                              <div class="next-input-wrapper">
                                  <label class="next-label" for="Name">T&#234;n kh&#225;ch h&#224;ng</label>
                                  <input class="next-input customer-name" id="Name" name="Name" placeholder="Nhập Tên" type="text" value="Nguyễn Bình Minh" />
                                  <div>
                                      <span class="field-validation-valid" data-valmsg-for="Name" data-valmsg-replace="true"></span>
                                  </div>
                              </div>
                          </div>
                          <div class="next-grid__cell">
                              <div class="next-input-wrapper">
                                  <label class="next-label" for="Phone">Số điện thoại</label>
                                  <input class="next-input phone-number" id="Phone" name="Phone" placeholder="Nhập số điện thoại" type="text" value="0979988724" />
                                  <div>
                                      <span class="field-validation-valid" data-valmsg-for="Phone" data-valmsg-replace="true"></span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="next-grid next-grid--no-outside-padding">
                          <div class="next-grid__cell">
                              <div class="next-input-wrapper">
                                  <label class="next-label" for="Company">C&#244;ng ty</label>
                                  <input class="next-input customer-company" id="Company" name="Company" placeholder="Nhập Công ty" type="text" value="" />
                                  <div>
                                      <span class="field-validation-valid" data-valmsg-for="Company" data-valmsg-replace="true"></span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="next-grid next-grid--no-outside-padding">
                          <div class="next-grid__cell">
                              <div class="next-input-wrapper">
                                  <label class="next-label" for="Address1">Địa chỉ</label>
                                  <input class="next-input" id="Address1" name="Address1" placeholder="Nhập Địa chỉ" type="text" value="18 Lý Thái Tổ" />
                                  <div>
                                      <span class="field-validation-valid" data-valmsg-for="Address1" data-valmsg-replace="true"></span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="next-grid next-grid--no-outside-padding">
                          <div class="next-grid__cell">
                              <div class="next-input-wrapper">

                                  <label class="next-label" for="Country">Quốc gia</label>
                                  <div class="ui-select__wrapper">
                                      <select bind="country_id" bind-event-change="changeCountry()" class="ui-select js-country-select filter-dropdown" data-val="true" data-val-number="The field CountryId must be a number." id="CountryId" name="CountryId"><option value="1">Abkhazia</option>
<option value="2">Afghanistan</option>
<option value="3">Albania</option>
<option value="4">Algeria</option>
<option value="5">Andorra</option>
<option value="6">Angola</option>
<option value="7">Antigua and Barbuda</option>
<option value="8">Argentina</option>
<option value="9">Armenia</option>
<option value="10">Australia</option>
<option value="11">Austria</option>
<option value="12">Azerbaijan</option>
<option value="13">Bahamas</option>
<option value="14">Bahrain</option>
<option value="15">Bangladesh</option>
<option value="16">Barbados</option>
<option value="17">Belarus</option>
<option value="18">Belgium</option>
<option value="19">Belize</option>
<option value="20">Benin</option>
<option value="21">Bhutan</option>
<option value="22">Bolivia</option>
<option value="23">Bosnia and Herzegovina</option>
<option value="24">Botswana</option>
<option value="25">Brazil</option>
<option value="26">Brunei</option>
<option value="27">Bulgaria</option>
<option value="28">Burkina Faso</option>
<option value="29">Burundi</option>
<option value="30">Cambodia</option>
<option value="31">Cameroon</option>
<option value="32">Canada</option>
<option value="33">Cape Verde</option>
<option value="34">Central African Republic</option>
<option value="35">Chad</option>
<option value="36">Chile</option>
<option value="188">China</option>
<option value="37">Colombia</option>
<option value="38">Comoros</option>
<option value="39">Congo-Brazzaville</option>
<option value="40">Congo-Kinshasa</option>
<option value="41">Costa Rica</option>
<option value="42">C&#244;te d&#39;Ivoire</option>
<option value="43">Croatia</option>
<option value="44">Cuba</option>
<option value="45">Cyprus</option>
<option value="46">Czech Republic</option>
<option value="47">Denmark</option>
<option value="48">Djibouti</option>
<option value="49">Dominica</option>
<option value="50">Dominican Republic</option>
<option value="51">East Timor</option>
<option value="52">Ecuador</option>
<option value="53">Egypt</option>
<option value="54">El Salvador</option>
<option value="55">Equatorial Guinea</option>
<option value="56">Eritrea</option>
<option value="57">Estonia</option>
<option value="58">Ethiopia</option>
<option value="59">Fiji</option>
<option value="60">Finland</option>
<option value="61">France</option>
<option value="62">Gabon</option>
<option value="63">Gambia</option>
<option value="64">Georgia</option>
<option value="65">Germany</option>
<option value="66">Ghana</option>
<option value="67">Greece</option>
<option value="68">Grenada</option>
<option value="69">Guatemala</option>
<option value="70">Guinea</option>
<option value="71">Guinea-Bissau</option>
<option value="72">Guyana</option>
<option value="73">Haiti</option>
<option value="74">Honduras</option>
<option value="75">Hong Kong</option>
<option value="76">Hungary</option>
<option value="77">Iceland</option>
<option value="78">India</option>
<option value="79">Indonesia</option>
<option value="80">Iran</option>
<option value="81">Iraq</option>
<option value="82">Ireland</option>
<option value="83">Israel</option>
<option value="84">Italy</option>
<option value="85">Jamaica</option>
<option value="86">Japan (Nippon)</option>
<option value="87">Jordan</option>
<option value="88">Kazakhstan</option>
<option value="89">Kenya</option>
<option value="90">Kiribati</option>
<option value="91">Korea</option>
<option value="92">Kosovo</option>
<option value="93">Kuwait</option>
<option value="94">Kyrgyzstan</option>
<option value="95">Laos</option>
<option value="96">Latvia</option>
<option value="97">Lebanon</option>
<option value="98">Lesotho</option>
<option value="99">Liberia</option>
<option value="100">Libya</option>
<option value="101">Liechtenstein</option>
<option value="102">Lithuania</option>
<option value="103">Luxembourg</option>
<option value="104">Macedonia (FYROM)</option>
<option value="105">Madagascar</option>
<option value="106">Malawi</option>
<option value="107">Malaysia</option>
<option value="108">Maldives</option>
<option value="109">Mali</option>
<option value="110">Malta</option>
<option value="111">Marshall Islands</option>
<option value="112">Mauritania</option>
<option value="113">Mauritius</option>
<option value="114">Mexico</option>
<option value="115">Micronesia</option>
<option value="116">Moldova</option>
<option value="117">Monaco</option>
<option value="118">Mongolia</option>
<option value="119">Montenegro</option>
<option value="120">Morocco</option>
<option value="121">Mozambique</option>
<option value="122">Myanmar</option>
<option value="123">Nagorno-Karabakh</option>
<option value="124">Namibia</option>
<option value="125">Nauru</option>
<option value="126">Nepal</option>
<option value="127">Netherlands</option>
<option value="128">New Zealand</option>
<option value="129">Nicaragua</option>
<option value="130">Niger</option>
<option value="131">Nigeria</option>
<option value="132">North Korea</option>
<option value="133">Northern Cyprus</option>
<option value="134">Norway</option>
<option value="135">Oman</option>
<option value="136">Pakistan</option>
<option value="137">Palau</option>
<option value="138">Palestine</option>
<option value="139">Panama</option>
<option value="140">Papua New Guinea</option>
<option value="141">Paraguay</option>
<option value="142">Peru</option>
<option value="143">Philippines</option>
<option value="144">Poland</option>
<option value="145">Portugal</option>
<option value="146">Qatar</option>
<option value="147">Romania</option>
<option value="148">Russia</option>
<option value="149">Rwanda</option>
<option value="150">Saint Kitts and Nevis</option>
<option value="151">Saint Lucia</option>
<option value="152">Saint Vincent and the Grenadines</option>
<option value="153">Samoa</option>
<option value="154">San Marino</option>
<option value="155">Sao Tome and Principe</option>
<option value="156">Saudi Arabia</option>
<option value="157">Scotland</option>
<option value="158">Senegal</option>
<option value="159">Serbia</option>
<option value="160">Seychelles</option>
<option value="161">Sierra Leone</option>
<option value="162">Singapore</option>
<option value="163">Slovak Republic</option>
<option value="164">Slovakia</option>
<option value="165">Slovenia</option>
<option value="166">Solomon Islands</option>
<option value="167">Somalia</option>
<option value="168">Somaliland</option>
<option value="169">South Africa</option>
<option value="170">South Ossetia</option>
<option value="171">Spain</option>
<option value="172">Sri Lanka</option>
<option value="173">Sudan</option>
<option value="174">Suriname</option>
<option value="175">Swaziland</option>
<option value="176">Sweden</option>
<option value="177">Switzerland</option>
<option value="178">Syria</option>
<option value="179">Tajikistan</option>
<option value="180">Tanzania</option>
<option value="181">Thailand</option>
<option value="182">Togo</option>
<option value="183">Tonga</option>
<option value="184">Transnistria</option>
<option value="185">Trinidad and Tobago</option>
<option value="186">Tunisia</option>
<option value="187">Turkey</option>
<option value="189">Turkmenistan</option>
<option value="190">Tuvalu</option>
<option value="191">Uganda</option>
<option value="192">Ukraine</option>
<option value="193">United Arab Emirates</option>
<option value="194">United Kingdom</option>
<option value="195">United States</option>
<option value="196">Uruguay</option>
<option value="197">Uzbekistan</option>
<option value="198">Vanuatu</option>
<option value="199">Vatican City</option>
<option value="200">Venezuela</option>
<option selected="selected" value="201">Vietnam</option>
<option value="202">Wales</option>
<option value="203">Western Sahara</option>
<option value="204">Yemen</option>
<option value="205">Zambia</option>
<option value="206">Zimbabwe</option>
</select>
                                      <svg class="next-icon next-icon--size-16"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use> </svg>
                                  </div>
                                  <div>
                                      <span class="field-validation-valid" data-valmsg-for="CountryId" data-valmsg-replace="true"></span>
                                  </div>
                              </div>
                          </div>
                          <div class="next-grid__cell">
                              <div class="next-input-wrapper">
                                  <label class="next-label" for="Zip">Postal / Zip Code</label>
                                  <input class="next-input" id="Zip" name="Zip" placeholder="Nhập Postal / Zip Code" type="text" value="" />
                                  <div><span class="field-validation-valid" data-valmsg-for="Zip" data-valmsg-replace="true"></span></div>
                              </div>
                          </div>
                      </div>
                      <div class="next-grid next-grid--no-outside-padding">

                          <div class="next-grid__cell">
                              <div class="next-input-wrapper">
                                  <label class="next-label" for="City">Tỉnh / Th&#224;nh phố</label>
                                  <div class="ui-select__wrapper" bind-show="have_city">
                                      <select bind-disabled="!have_city" class="ui-select js-country-select filter-dropdown" id="provinceSlt" name="ProvinceId" style="width: 100%;" bind="province_id" bind-event-change="changeProvince()">
                                          <option value="0">--- Chọn tỉnh thành ---</option>
                                              <option value="1" selected>H&#224; Nội</option>
                                              <option value="2" >TP Hồ Ch&#237; Minh</option>
                                              <option value="3" >An Giang</option>
                                              <option value="4" >B&#224; Rịa-Vũng T&#224;u</option>
                                              <option value="5" >Bắc Giang</option>
                                              <option value="6" >Bắc Kạn</option>
                                              <option value="7" >Bạc Li&#234;u</option>
                                              <option value="8" >Bắc Ninh</option>
                                              <option value="9" >Bến Tre</option>
                                              <option value="10" >B&#236;nh Dương</option>
                                              <option value="11" >B&#236;nh Định</option>
                                              <option value="12" >B&#236;nh Phước</option>
                                              <option value="13" >B&#236;nh Thuận</option>
                                              <option value="14" >C&#224; Mau</option>
                                              <option value="15" >Cao Bằng</option>
                                              <option value="16" >Cần Thơ</option>
                                              <option value="17" >Đ&#224; Nẵng</option>
                                              <option value="18" >Đắk Lắk</option>
                                              <option value="19" >Đắk N&#244;ng</option>
                                              <option value="20" >Điện Bi&#234;n</option>
                                              <option value="21" >Đồng Nai</option>
                                              <option value="22" >Đồng Th&#225;p</option>
                                              <option value="23" >Gia Lai</option>
                                              <option value="24" >H&#224; Giang</option>
                                              <option value="25" >H&#224; Nam</option>
                                              <option value="26" >H&#224; Tĩnh</option>
                                              <option value="27" >Hải Dương</option>
                                              <option value="28" >Hải Ph&#242;ng</option>
                                              <option value="29" >Hậu Giang</option>
                                              <option value="30" >H&#242;a B&#236;nh</option>
                                              <option value="31" >Hưng Y&#234;n</option>
                                              <option value="32" >Kh&#225;nh H&#242;a</option>
                                              <option value="33" >Ki&#234;n Giang</option>
                                              <option value="34" >Kon Tum</option>
                                              <option value="35" >Lai Ch&#226;u</option>
                                              <option value="36" >L&#226;m Đồng</option>
                                              <option value="37" >Lạng Sơn</option>
                                              <option value="38" >L&#224;o Cai</option>
                                              <option value="39" >Long An</option>
                                              <option value="40" >Nam Định</option>
                                              <option value="41" >Nghệ An</option>
                                              <option value="42" >Ninh B&#236;nh</option>
                                              <option value="43" >Ninh Thuận</option>
                                              <option value="44" >Ph&#250; Thọ</option>
                                              <option value="45" >Ph&#250; Y&#234;n</option>
                                              <option value="46" >Quảng B&#236;nh</option>
                                              <option value="47" >Quảng Nam</option>
                                              <option value="48" >Quảng Ng&#227;i</option>
                                              <option value="49" >Quảng Ninh</option>
                                              <option value="50" >Quảng Trị</option>
                                              <option value="51" >S&#243;c Trăng</option>
                                              <option value="52" >Sơn La</option>
                                              <option value="53" >T&#226;y Ninh</option>
                                              <option value="54" >Th&#225;i B&#236;nh</option>
                                              <option value="55" >Th&#225;i Nguy&#234;n</option>
                                              <option value="56" >Thanh H&#243;a</option>
                                              <option value="57" >Thừa Thi&#234;n Huế</option>
                                              <option value="58" >Tiền Giang</option>
                                              <option value="59" >Tr&#224; Vinh</option>
                                              <option value="60" >Tuy&#234;n Quang</option>
                                              <option value="61" >Vĩnh Long</option>
                                              <option value="62" >Vĩnh Ph&#250;c</option>
                                              <option value="63" >Y&#234;n B&#225;i</option>
                                      </select>
                                      <svg class="next-icon next-icon--size-16"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use> </svg>
                                  </div>
                                  <input bind-disabled="have_city" bind-show="!have_city" class="next-input hide" id="City" name="City" placeholder="Nhập Tỉnh / Thành phố" type="text" value="Hà Nội" />
                                  <div><span class="field-validation-valid" data-valmsg-for="City" data-valmsg-replace="true"></span></div>
                              </div>
                          </div>
                          <div bind-show="have_city" class="next-grid__cell">
                              <div class="next-input-wrapper">
                                  <label class="next-label" for="DistrictId">Quận / huyện</label>
                                  <div class="ui-select__wrapper">
                                      <select bind-disabled="!have_city" class="ui-select js-country-select filter-dropdown" id="districtSlt" name="DistrictId" style="width: 100%;" bind="district_id" bind-event-change="changeDistrict()">
                                          <option value="0">--- Chọn quận huyện ---</option>
                                                  <option value="1">Thị x&#227; Sơn T&#226;y</option>
                                                  <option value="2">Quận Ba Đ&#236;nh</option>
                                                  <option value="3">Quận Cầu Giấy</option>
                                                  <option value="4">Quận Đống Đa</option>
                                                  <option value="5">Quận H&#224; Đ&#244;ng</option>
                                                  <option value="6">Quận Hai B&#224; Trưng</option>
                                                  <option value="7" selected>Quận Ho&#224;n Kiếm</option>
                                                  <option value="8">Quận Ho&#224;ng Mai</option>
                                                  <option value="9">Quận Long Bi&#234;n</option>
                                                  <option value="10">Quận T&#226;y Hồ</option>
                                                  <option value="11">Quận Thanh Xu&#226;n</option>
                                                  <option value="12">Huyện Ba V&#236;</option>
                                                  <option value="13">Huyện Chương Mỹ</option>
                                                  <option value="14">Huyện Đan Phượng</option>
                                                  <option value="15">Huyện Đ&#244;ng Anh</option>
                                                  <option value="16">Huyện Gia L&#226;m</option>
                                                  <option value="17">Huyện Ho&#224;i Đức</option>
                                                  <option value="18">Huyện M&#234; Linh</option>
                                                  <option value="19">Huyện Mỹ Đức</option>
                                                  <option value="20">Huyện Ph&#250; Xuy&#234;n</option>
                                                  <option value="21">Huyện Ph&#250;c Thọ</option>
                                                  <option value="22">Huyện Quốc Oai</option>
                                                  <option value="23">Huyện S&#243;c Sơn</option>
                                                  <option value="24">Huyện Thạch Thất</option>
                                                  <option value="25">Huyện Thanh Oai</option>
                                                  <option value="26">Huyện Thanh Tr&#236;</option>
                                                  <option value="27">Huyện Thường T&#237;n</option>
                                                  <option value="28">Quận Bắc Từ Li&#234;m</option>
                                                  <option value="29">Huyện Ứng H&#242;a</option>
                                                  <option value="688">Quận Nam Từ Li&#234;m</option>
                                      </select>
                                      <svg class="next-icon next-icon--size-16"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use> </svg>
                                  </div>
                              </div>
                              <div><span class="field-validation-valid" data-valmsg-for="DistrictId" data-valmsg-replace="true"></span></div>
                          </div>
                      </div>
                      <div class="next-grid next-grid--no-outside-padding" bind-show="have_city">
                          <div class="next-grid__cell">
                              <div class="next-input-wrapper">
                                  <label class="next-label" for="WardId">Phường / x&#227;</label>
                                  <div class="ui-select__wrapper">
                                      <select bind-disabled="!have_city" class="ui-select js-district-select filter-dropdown js-no-dirty" id="wardSlt" name="WardId" style="width: 100%;"><option value='0'>--- Chọn phường xã ---</option></select>
                                      <svg class="next-icon next-icon--size-16"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use> </svg>
                                  </div>
                              </div>
                              <div><span class="field-validation-valid" data-valmsg-for="WardId" data-valmsg-replace="true"></span></div>
                          </div>
                          <div class="next-grid__cell">
                          </div>
                      </div>
                  </section>
              </div>
          </div>
      </div>
      <div class="ui-modal__footer">
          <div class="ui-modal__footer-actions">
              <div class="ui-modal__secondary-actions">
                  <div class="button-group">
                      <button class="ui-button close-modal" data-dismiss="modal" type="button" name="button">Hủy</button>
                  </div>
              </div>
              <div class="ui-modal__primary-actions">
                  <div class="button-group button-group--right-aligned">
                      <button class="ui-button ui-button--primary js-btn-loadable has-loading" type="button" id="submitForm" name="commit" onclick="sumbitForm()">Lưu</button>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
</form>
</script>
                              <script type="text/javascript">
                                function sumbitForm() {
                                  var address = "";
                                  $('#submitForm').addClass('is-loading').addClass("disabled");
                                  var cusAddress = $('#Address1').val();
                                  if (cusAddress != null && cusAddress != "" && cusAddress != undefined) {
                                    address += cusAddress + ", ";
                                  }

                                  var provinceName = $("#provinceSlt").find(":selected").text();
                                  var districtName = $("#districtSlt").find(":selected").text();
                                  var countryName = $("#CountryId").find(":selected").text();

                                  if (districtName != null && districtName != "" && districtName != undefined) {
                                    address += districtName + ", ";
                                  }

                                  if (provinceName != null && provinceName != "" && provinceName != undefined) {
                                    address += provinceName + ", ";
                                  }

                                  if (countryName != null && countryName != "" && countryName != undefined) {
                                    address += countryName;
                                  }

                                  var $form = $("#formUpdateShippingAddress");
                                  var listAPIKey = 'AIzaSyDWReBlPxFt-i145Gsd502wOqRS0KXFHW4;AIzaSyAbtwApDToQWn7snVio3Y9PWFbcpdnOWdk;AIzaSyA5rJOu8wci0li24bnZ1WogMEH93p-DGlM';

                                  if (listAPIKey !== null && listAPIKey !== "" && listAPIKey !== 'undefined') {
                                    listAPIKey = listAPIKey.split(";");
                                    var apiKey = listAPIKey[Math.floor(Math.random() * listAPIKey.length)];
                                    var urlGoogleMapsApi = "https://maps.googleapis.com/maps/api/js?key=" + apiKey;

                                    loadScriptGoogleMapApi(urlGoogleMapsApi, function (resultLoadApi) {

                                      if (resultLoadApi === true) {
                                        getLatitudeLongitude(address, function (latlngResult) {
                                          if (latlngResult == false) {
                                            $form.submit();
                                          }
                                          else {
                                            $form.append('<input type="hidden" type="text" class="form-control" name="Latitude" value="' + latlngResult.geometry.location.lat() + '" />');
                                            $form.append('<input type="hidden" type="text" class="form-control" name="Longitude" value="' + latlngResult.geometry.location.lng() + '" />');
                                            $form.submit();
                                          }
                                        })
                                      }
                                      else {
                                        $form.submit();
                                      }
                                    })
                                  }
                                  else {
                                    $form.submit();
                                  }
                                }

                                function loadScriptGoogleMapApi(url, callback) {
                                  jQuery.ajax({
                                    url: url,
                                    dataType: 'script',
                                    async: true,
                                    success: function () {
                                      callback(true);
                                    },
                                    error: function () {
                                      callback(false);
                                    }
                                  });
                                }

                                function getLatitudeLongitude(address, callback) {
                                  // If adress is not supplied, use default value 'Ferrol, Galicia, Spain'
                                  address = address || '266 Đội Cấn, Ba Đình, Hà Nội';
                                  // Initialize the Geocoder
                                  if (typeof google !== 'undefined') {
                                    geocoder = new google.maps.Geocoder();
                                    if (geocoder && geocoder.geocode) {
                                      geocoder.geocode({
                                        'address': address
                                      }, function (results, status) {
                                        if (status == google.maps.GeocoderStatus.OK) {
                                          callback(results[0]);
                                        }
                                        else {
                                          callback(false);
                                        }
                                      });
                                    }
                                    else {
                                      callback(false);
                                    }
                                  }
                                  else {
                                    callback(false);
                                  }
                                }
                              </script>
                              <button class="ui-button btn--link" type="button"
                                bind-event-click="editShippingAddressModal.show()">Sửa</button>

                            </div>
                          </div>
                          <p class="type--subdued word_break__content">
                            Nguyễn Bình Minh<br>
                            0979988724<br>
                            18 Lý Thái Tổ<br>
                            Phường Lý Thái Tổ<br>
                            Quận Hoàn Kiếm<br>
                            Hà Nội <br>
                            Vietnam<br>
                          </p>
                        </div>
                      </div>
                      <div class="ui-card__section">
                        <div class="ui-type-container">
                          <p class="type--subdued">Phương thức vận chuyển: <span class="bold">Giao hàng tận
                              nơi</span></p>
                        </div>
                      </div>
                    </section>
                  </div>



                </div>
              </div>
            </div>

            <div id="delete-order">
              <div class="ui-page-actions ">
                <div class="ui-page-actions__container">
                  <div class="ui-page-actions__actions ui-page-actions__actions--primary">
                    <div class="ui-page-actions__button-group">
                      <button
                        class="ui-button ui-button--primary js-btn-loadable js-btn-primary btn-primary has-loading"
                        type="submit" name="commit" disabled="disabled">Lưu</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </form>
          <div class="modal" data-tg-refresh="modal" id="modal_container" style="display: none;" aria-hidden="true"
            aria-labelledby="ModalTitle" tabindex="-1"></div>
          <div class="modal-bg" data-tg-refresh="modal" id="modal_backdrop"></div>
          <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
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
              Bạn có thể xem thêm hướng dẫn <a target="_blank" rel="noreferrer noopener"
                title="Hướng dẫn về xử lý đơn hàng" href="https://support.sapo.vn/xac-nhan-don-hang">tại đây</a>
            </div>
          </div>
        </div>
        <script>
          function addTopTag(e) {
            var ele = $(e);
            if (!ele.hasClass("disabled")) {
              $('.order-detail-info').find('input[name="Tags"]').tagsinput('add', ele.text());
            }
          }

          function printProcess(data, htmlNode) {
            var printwindow = window.frames["print_frame"];
            printwindow.document.body.innerHTML = !!htmlNode["0"] ? htmlNode["0"].innerHTML : data.content;
            setTimeout(function () { // wait until all resources loaded
              printwindow.document.close(); // necessary for IE >= 10
              printwindow.focus(); // necessary for IE >= 10
              printwindow.print(); // change window to winPrint
              printwindow.close(); // change window to winPrint
            }, 250);
          }

          function printOrder(id) {
            $.ajax({
              url: '/admin/orders/printorder/8486175',
              dataType: 'json',
              type: 'post',
              success: function (data) {
                var htmlNode = $('<div>' + data.content + '</div>');
                htmlNode.find(".print_barcode").each(function () {
                  var barcode = $(this).attr("val");
                  $(this).JsBarcode(barcode, {
                    width: 1,
                    height: 37,
                    quite: 0,
                    margin: 0,
                    format: "CODE128",
                    displayValue: false,
                    font: "monospace",
                    textAlign: "center",
                    lineColor: "#000"
                  })
                });
                var logo_store = htmlNode.find(".logo_store");
                if (!!logo_store["0"]) {
                  var image = $(logo_store).attr("val");
                  toDataURL(
                    image,
                    function (dataUrl) {
                      $(logo_store).attr("src", dataUrl);
                      printProcess(data, htmlNode);
                    }
                  )
                } else {
                  printProcess(data, htmlNode);
                }
              },
              error: function (error) {
                if (422 == error.status && !!error.responseJSON) {
                  Bizweb.Flash.error(!!error.responseJSON.message ? error.responseJSON.message : "In đơn hàng không thành công");
                } else {
                  Bizweb.Flash.error("In đơn hàng không thành công");
                }
              }
            });
          }
        </script>


      </div>
    </div>
  </div>
</main>

@endsection