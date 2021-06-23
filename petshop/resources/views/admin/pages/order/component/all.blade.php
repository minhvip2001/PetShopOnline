<div class="ui-layout__item" id="ui-layout__item">
  <section class="ui-card ">
    <div class="" id="filterAndSavedSearch">
      <div class="next-tab__container ">
        <ul class="next-tab__list filter-tab-list" id="filter-tab-list" role="tablist"
          data-has-next-tab-controller="true">
          <li class="filter-tab-item" data-tab-index="1">
            <a href="/admin/orders" class="filter-tab filter-tab-active show-all-items next-tab next-tab--is-active">Tất
              cả đơn hàng</a>
          </li>
          <li class="filter-tab-item" data-tab-index="3" data-tab-id="3054998" data-tab-name="Chưa thanh toán">
            <a href="orders?savedSearchId=3054998" class="filter-tab next-tab"
              bind-event-click="openSavedSearch(3054998);">Chưa thanh toán</a>
          </li>
          <li class="filter-tab-item" data-tab-index="4" data-tab-id="3054999" data-tab-name="Chưa giao hàng">
            <a href="orders?savedSearchId=3054999" class="filter-tab next-tab"
              bind-event-click="openSavedSearch(3054999);">Chưa giao hàng</a>
          </li>

          <li class="next-tab__list__disclosure-item dropdown-container" id="hidden-search" style="display:none">
            <span class="next-tab next-tab--disclosure filter-tab" id="more-savedsearch" tabindex="-1"
              aria-selected="true" aria-label="dropdown item" aria-expanded="false" role="button">
              <svg class="next-icon next-icon--size-16 next-icon--no-nudge" id="svg-msaved">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#next-ellipsis"></use>
              </svg>
            </span>
            <ul class="dropdown-menu arrow-style dropdown-hidden-search dropdown-menu-right pull-right" role="tablist"
              id="dropdown-hidden-search"></ul>
          </li>
        </ul>
      </div>
      <div class="next-card__section next-card__section--no-bottom-spacing">
        <div class="obj-filter hide-when-printing table-filter-container">
          <div class="next-input-wrapper">
            <div class="next-field__connected-wrapper">
              <div id="has--actions" data-tg-refresh-always="true" class=""></div>
              <form action="/admin/orders"
                class="next-form next-form--full-width next-field--connected--no-border-radius" method="get"> <label
                  class="next-label helper--visually-hidden" for="query">Query</label>
                <div class="next-input--stylized next-field--connected"
                  style="border-top-right-radius: 0; border-bottom-right-radius: 0">
                  <span class="next-input__add-on next-input__add-on--before">
                    <svg class="next-icon next-icon--color-slate-lightest next-icon--size-16">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#next-search-reverse">
                      </use>
                    </svg>
                  </span>
                  <input type="text" name="query" id="query" placeholder="Tìm kiếm đơn hàng" value=""
                    class="next-input next-input--invisible">
                </div>
              </form>
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
                    <div class="tooltip tooltip-left-align tooltip-bottom bulk-actions__select-all-tooltip">
                      <div class="next-input-wrapper bulk-actions__select-all btn--select-all"
                        bind-class="{'bulk-actions__select-all--has-selected-items': selectedItems.length > 0}">
                        <label class="next-label next-label--switch btn btn-slim bulk-actions__select-all-btn"
                          for="bulk-actions__select-all"
                          bind-class="{'btn btn-slim bulk-actions__select-all-btn': selectedItems.length == 0, 'helper--visually-hidden': selectedItems.length > 0}">
                          <span class="helper--visually-hidden">Select all orders</span>
                        </label>
                        <input type="checkbox" name="bulk-actions__select-all" id="bulk-actions__select-all"
                          bind-event-change="addOrRemoveAllBulkActionItems(this)"
                          class="next-checkbox js-no-dirty bulk-actions__select-all-checkbox all-bulk-action">
                        <span class="next-checkbox--styled">
                          <svg class="next-icon next-icon--size-10 checkmark">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#next-checkmark-thick"></use>
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

                    <div class="bulk-actions" bind-class="{'bulk-actions--is-visible': selectedItems.length > 0}"
                      all-items="1" items-page="50" total-records="1" style="width: 1097px;">
                      <ul class="bulk-actions__main-bar segmented">
                        <li>
                          <a class="btn btn-slim btn-disabled btn--selection">
                            <span class="selection-count bulk-action-items-count" selected-bulk-action-items="0">
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
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#next-disclosure"></use>
                              </svg>
                            </button>
                            <div class="dropdown-menu margin-10 dropdown-bulkaction dropdown-bulkaction-order">
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

                    </div>
                  </span>
                </th>

                <th><span>Đơn hàng</span></th>
                <th><span>Ngày đặt</span></th>
                <th style="width: 16%"><span>Khách hàng</span></th>
                <th><span>Thanh toán</span></th>
                <th><span>Trạng thái</span></th>
                <th class="tr"><span>Tổng tiền</span></th>
                <th style="text-align: center"><span>Xử lí</span></th>
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
              <tr id="parent-quick-view-{{$order->order_id}}" class="ui-nested-link-container parent-quick-view">
                <td class="select">
                  <div class="next-input-wrapper" style="float:right;margin-right:50px;">
                    <label class="next-label helper--visually-hidden next-label--switch"
                      for="order_ids_{{$order->order_id}}">Select order, #{{$order->order_id}}</label>
                    <input type="checkbox" name="order_ids_{{$order->order_id}}" value="{{$order->order_id}}"
                      bind-event-change="addOrRemoveBulkActionItem({{$order->order_id}},this)"
                      id="bulk-action-{{$order->order_id}}" class="bulk-action-item next-checkbox">
                    <span class="next-checkbox--styled"><svg class="next-icon next-icon--size-10 checkmark">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#next-checkmark-thick"></use>
                      </svg></span>
                  </div>
                </td>
                <td class="no-wrap">
                  <a href="{{route('order.edit', $order->order_id)}}"
                    data-nested-link-target="true">#{{$order->order_id}}</a>
                </td>
                <td class="no-wrap next-table__cell--full-width-when-condensed">
                  <a href="{{route('order.edit', $order->order_id)}}" style="color: #212b35">
                    <span>{{$order->created_at->format('d/m/Y H:i')}}</span>
                  </a>
                </td>
                <td class="next-table__cell--full-width-when-condensed" width="250">
                  <div class="ui-stack ui-stack--alignment-center ui-stack--spacing-tight">
                    <a href="{{route('order.edit', $order->order_id)}}" style="color: #212b35; max-width:90%">
                      <div class="ui-stack-item">{{$order->customer->customer_name}}
                        {{$order->customer->customer_surname}}</div>
                    </a>
                    <a href="{{route('customer.edit', $order->customer->customer_id)}}"
                      class="customer-link tooltip tooltip-top">
                      <div class="tooltip-container">
                        <span class="tooltip-label">Xem khách hàng</span>
                      </div>
                      <div class="customer-link__icon">
                        <svg class="next-icon next-icon--color-white next-icon--size-12 next-icon--no-nudge">
                          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#next-chevron-nav"></use>
                        </svg>
                      </div>
                    </a>
                  </div>
                </td>

                <td class="no-wrap" id="payment-status-{{$order->order_id}}">
                  <a href="{{route('order.edit', $order->order_id)}}" style="color: #212b35">
                    <span class="badge badge--status-warning badge--progress-incomplete">Chưa thanh toán</span>
                  </a>
                </td>

                <td class="no-wrap" id="fulfill-status-{{$order->order_id}}">
                  <a href="{{route('order.edit', $order->order_id)}}" style="color: #212b35">
                    @if($order->order_status == 0)
                    <span class="badge badge--status-attention badge--progress-incomplete" style="background: #8cff1a">
                      Chưa xử lí
                    </span>
                    @elseif($order->order_status == 1)
                    <span class="badge badge--status-attention badge--progress-incomplete" style="background: pink">
                      Đã nhận đơn
                    </span>
                    @elseif($order->order_status == 2)
                    <span class="badge badge--status-attention badge--progress-incomplete" style="background: green">
                      Đã hoàn thành
                    </span>
                    @else
                    <span class="badge badge--status-attention badge--progress-incomplete" style="background: red">
                      Đã hủy
                    </span>
                    @endif
                  </a>
                </td>

                <td class="type--right total next-table__cell--top-right-when-condensed">
                  <a href="{{route('order.edit', $order->order_id)}}" style="color: #212b35">
                    {{number_format($total, 0, ',', '.')}}₫
                  </a>
                </td>
                <td style="text-align: center" class="no-wrap" id="fulfill-status-{{$order->order_id}}">
                  @if($order->order_status == 0)
                  <span class="badge badge--status-attention badge--progress-incomplete processing"
                    data-id="{{$order->order_id}}" style="background: white; border:1px solid red; color: red">
                    Nhận đơn
                  </span>
                  @else
                  <span class="badge badge--status-attention badge--progress-incomplete"
                    style="background: white; border:1px solid red; color: red">
                    {{$order->user->name}} {{$order->user->surname}}
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
        <div class="modal" data-tg-refresh="modal" id="modal_container" style="display: none;" aria-hidden="true"
          aria-labelledby="ModalTitle" tabindex="-1"></div>
        <div class="modal-bg" data-tg-refresh="modal" id="modal_backdrop"></div>
        <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
      </div>
    </div>
  </section>
</div>
<script>
  $(document).ready(function () {
    $('.processing').click(function (e) {
      e.preventDefault();
      var id = e.target.dataset.id;
      var url = $('#process').data('url')
      $.ajax({
        type: 'post',
        url: url,
        data: {
          _token: $("input[name=_token]").val(),
          id: id,
        },
        dataType: 'JSON',
        success: function (respone) {
          $('#ui-layout__section').html(respone.table)
        },
        error: function (jqXHR, textStatus, errorThrown) {

        }
      })
    })
  })
</script>