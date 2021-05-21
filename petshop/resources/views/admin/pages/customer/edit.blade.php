@extends('admin.layouts.master')
@section('title')
Nguyễn Thị Ánh Dương
@endsection
@section('content')
<main id="AppFrameMain" class="ui-app-frame__main">
  <div class="wrapper" id="wrapper">
    <div id="body" class="page-content clearfix" data-tg-refresh="body">
      <div id="content">

        <div id="customer-show" class="page">
          <script type="text/javascript">
            Page(function () {
              return {
                ordersCount: 1,
                state: 'disabled',
              }
            });
          </script>

          <form accept-charset="UTF-8" action="/admin/customers/11630207" autocomplete="off" class="edit_customer"
            data-id="edit_customer" data-tg-refresh="edit_customer" data-tg-refresh-on-error="edit_customer"
            data-tg-remote="true"
            define="{form: new Bizweb.Forms(this, {disabledUntilDirty: true, alertUnsavedChanges: true})}"
            id="edit_customer_11630207" method="post"><input type="hidden" name="AuthenticityToken"
              value="Dj8aCGHm33kRtk0wsdAdTgMBnck0VqiLvnp9fX4IgDCNQrEex5ymm42tkx4AGL5+eHNG/yxM9WvWKrmGekYPHw==">
            <header class="ui-title-bar-container" id="customer-header" data-tg-refresh="customer-header">
              <div class="ui-title-bar">
                <div class="ui-title-bar__navigation">
                  <div class="ui-breadcrumbs">
                    <a href="{{route('customer.list')}}" class="ui-button ui-button--transparent ui-breadcrumb">
                      <svg class="next-icon next-icon--size-20 next-icon--no-nudge">
                        <use xlink:href="#chevron-left-thinner"></use>
                      </svg>
                      <span class="ui-breadcrumb__item">Khách hàng</span>
                    </a>
                  </div>
                </div>
                <div class="ui-title-bar__main-group">
                  <div class="ui-title-bar__heading-group">
                    <span class="ui-title-bar__icon">
                      <svg class="next-icon next-icon--color-slate-lighter next-icon--size-20">
                        <use xlink:href="#next-customers"></use>
                      </svg>
                    </span>
                    <h1 class="ui-title-bar__title">Nguyễn Thị Ánh Dương</h1>
                  </div>
                  <div define="{titleBarActions: new Bizweb.TitleBarActions(this)}" class="action-bar">
                    <div class="action-bar__item action-bar__item--link-container">
                      <div class="action-bar__top-links">
                        <button class="ui-button ui-button--transparent action-bar__link"
                          bind-event-click="activeAccountModal.show()" data-popover-index="1" type="button"
                          name="button">
                          <i class="far fa-user-circle next-icon next-icon--size-20 action-bar__link-icon next-icon--no-nudge"> </i>
                          Kích hoạt tài khoản
                        </button>
                      </div>   
                    </div>
                  </div>
                </div>
                <div class="ui-title-bar__actions-group">
                  <div class="ui-title-bar__actions">
                    <button
                      class="ui-button ui-button--primary has-loading js-btn-loadable js-btn-primary ui-title-bar__action btn-primary"
                      type="submit" name="button" disabled="disabled">
                      Lưu
                    </button>
                  </div>
                </div>
              </div>
              <div class="collapsible-header">
                <div class="collapsible-header__heading">
                </div>
              </div>
            </header>
            <div class="ui-layout">
              <div class="ui-layout__sections">


                <div class="ui-layout__section ui-layout__section--primary">
                  <div class="ui-layout__item">
                    <div class="next-card">
                      <header class="next-card__header" id="customer-profile" refresh="customer-profile">
                        <div class="next-grid next-grid--no-outside-padding next-grid--vertically-centered">
                          <div class="next-grid__cell next-grid__cell--no-flex">
                            <span class="user-avatar user-avatar--style-custom-1">
                              <span class="user-avatar__initials">
                                <img class="profile-pic img-circle" data-name="Nguyễn Thị Ánh Dương"
                                  src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHBvaW50ZXItZXZlbnRzPSJub25lIiB3aWR0aD0iNDYiIGhlaWdodD0iNDYiIHN0eWxlPSJiYWNrZ3JvdW5kLWNvbG9yOiByZ2IoMjMwLCAxMjYsIDM0KTsgd2lkdGg6IDQ2cHg7IGhlaWdodDogNDZweDsgYm9yZGVyLXJhZGl1czogMHB4OyI+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeT0iNTAlIiB4PSI1MCUiIGR5PSIwLjM1ZW0iIHBvaW50ZXItZXZlbnRzPSJhdXRvIiBmaWxsPSIjZmZmZmZmIiBmb250LWZhbWlseT0iSGVsdmV0aWNhTmV1ZS1MaWdodCxIZWx2ZXRpY2EgTmV1ZSBMaWdodCxIZWx2ZXRpY2EgTmV1ZSxIZWx2ZXRpY2EsIEFyaWFsLEx1Y2lkYSBHcmFuZGUsIHNhbnMtc2VyaWYiIHN0eWxlPSJmb250LXdlaWdodDogNDAwOyBmb250LXNpemU6IDIwcHg7Ij5UPC90ZXh0Pjwvc3ZnPg==">
                              </span>
                              <img class="gravatar gravatar--size-medium"
                                srcset="https://scontent.fpnh22-3.fna.fbcdn.net/v/t1.6435-9/125182845_2613326742299676_7016425009928796749_n.jpg?_nc_cat=105&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=kB_tCv0EbTkAX-7aOR7&_nc_ht=scontent.fpnh22-3.fna&oh=4ccf9e226fe3bf555555db01e0dad886&oe=60AAB42C"
                                src="https://scontent.fpnh22-3.fna.fbcdn.net/v/t1.6435-9/125182845_2613326742299676_7016425009928796749_n.jpg?_nc_cat=105&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=kB_tCv0EbTkAX-7aOR7&_nc_ht=scontent.fpnh22-3.fna&oh=4ccf9e226fe3bf555555db01e0dad886&oe=60AAB42C"
                                alt="Avatar 80x80">
                            </span>
                          </div>
                          <div class="next-grid__cell">
                            <h3 class="next-heading next-heading--no-margin">
                              Nguyễn Thị Ánh Dương
                            </h3>
                            <p class="type--subdued">
                              18 Trần Khát Trân, Quận Hai Bà Trưng, Hà Nội, Vietnam
                            </p>
                          </div>
                        </div>
                      </header>
                      <section class="next-card__section">
                        <div class="ppt" id="customer-notes" refresh="notes">
                          <div class="next-input-wrapper">
                            <label class="next-label" for="Note">Ghi chú</label>
                            <textarea class="next-input next-resize-vertical" cols="20" data-val="true"
                              data-val-length="Ghi chú tối đa 255 ký tự" data-val-length-max="255" id="Note" name="Note"
                              placeholder="Nhập Ghi chú về khách hàng" rows="2"></textarea>
                          </div>
                        </div>
                      </section>
                      <section class="next-card__section">
                        <div class="ui-stack ui-stack--wrap ui-stack--distribution-fill">
                          <div class="type--centered">
                            <p class="type--subdued">
                              Đơn hàng mới nhất
                            </p>
                            <a class="next-heading next-heading--quarter-margin" href="/admin/orders/8533641">
                              #1004
                            </a>
                            <div class="hide-when-printing">
                              <p class="text-emphasis-subdued">
                                <span class="text-emphasis-subdued">
                                  Từ
                                </span>
                                Website
                              </p>
                            </div>
                          </div>

                          <div class="type--centered">
                            <p class="type--subdued">
                              Tổng chi tiêu
                            </p>
                            <h3 class="next-heading next-heading--quarter-margin">
                              0₫
                            </h3>
                            <p class="type--subdued">
                              1 đơn hàng
                            </p>
                          </div>
                          <div class="type--centered">
                            <p class="type--subdued">
                              Chi tiêu trung bình
                            </p>
                            <h3 class="next-heading next-heading--quarter-margin">
                              0₫
                            </h3>
                          </div>
                        </div>
                      </section>
                    </div>
                  </div>
                  <div class="ui-layout__item" id="recent-orders" refresh="recent-orders">
                    <section class="ui-card">
                      <header class="ui-card__header">
                        <div class="ui-type-container">
                          <div
                            class="ui-stack ui-stack--wrap ui-stack--distribution-trailing ui-stack--alignment-center">
                            <div class="ui-stack-item ui-stack-item--fill">
                              <h2 class="ui-heading">Đơn hàng gần đây</h2>
                            </div>
                            <a href="/admin/orders?CustomerId=11630207">Toàn bộ đơn hàng</a>
                          </div>
                        </div>
                      </header>
                      <div class="ui-card__section">
                        <div class="ui-type-container">
                          <div class="table-wrapper">
                            <table>
                              <tbody>
                                <tr class="unfulfilled ">
                                  <td class="ui-type-container ui-type-container--spacing-extra-tight">
                                    <div class="ui-stack ui-stack--wrap ui-stack--vertical ui-stack--spacing-none">
                                      <div class="ui-stack ui-stack--wrap">
                                        <div class="ui-stack-item ui-stack-item--fill">
                                          <a href="/admin/orders/8533641">Đơn hàng #1004</a>
                                        </div>

                                        <p class="type--subdued">
                                          20/04/2021
                                        </p>
                                      </div>
                                    </div>

                                    <div class="ui-stack ui-stack--wrap ui-stack--vertical ui-stack--spacing-none">
                                      <div class="ui-stack ui-stack--wrap">
                                        <div class="ui-stack-item ui-stack-item--fill">
                                          <p class="total">
                                            90,000₫
                                            <span class="text-emphasis-subdued">
                                              từ
                                            </span>
                                            Website
                                          </p>
                                        </div>
                                        <p class="type--subdued">
                                          02:44
                                        </p>
                                      </div>
                                    </div>
                                    <span class="badge badge--status-warning badge--progress-incomplete">Chưa thanh
                                      toán</span>
                                    <span class="badge badge--status-attention badge--progress-incomplete">Chưa
                                      chuyển</span>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
                <div class="ui-layout__section ui-layout__section--secondary">
                  <div class="ui-layout__item">
                    <aside class="next-card" id="customer-card" refresh="customer-card">
                      <header class="next-card__header">
                        <div class="next-grid next-grid--no-outside-padding next-grid--vertically-centered">
                          <div class="next-grid__cell">
                            <h3 class="next-heading">Liên hệ</h3>
                          </div>
                          <div class="next-grid__cell next-grid__cell--no-flex">
                            <button class="ui-button btn--link" bind-event-click="editOverviewModal.show()"
                              type="button" name="button">Sửa</button>
                          </div>
                        </div>
                      </header>
                      <section class="next-card__section">
                        <a href="mailto:duongsinhbook@gmail.com" class="text-gray">
                          duong@gmail.com
                        </a>
                        <ul class="unstyled type--subdued">

                          <li>Nguyễn Thị Ánh Dương</li>
                          <li>0395445571</li>
                          <li>
                            Chưa có tài khoản
                          </li>
                        </ul>
                      </section>
                      <section class="next-card__section">
                        <div class="next-grid next-grid--no-outside-padding">
                          <div class="next-grid__cell next-heading next-heading--small ">
                            Sổ địa chỉ
                          </div>
                          <div class="next-grid__cell next-grid__cell--no-flex">
                            <div class="ui-popover__container ui-popover__container--contains-active-popover">
                              <button class="ui-button btn--link" bind-event-click="false" type="button" name="button"
                                id="ui-popover-activator--8" aria-expanded="true" aria-haspopup="true"
                                aria-owns="ui-popover--8" aria-controls="ui-popover--8">Sửa</button>
                              <div class="ui-popover ui-popover--full-height">
                                <div class="ui-popover__tooltip"></div>
                                <div class="ui-popover__content-wrapper">
                                  <div class="ui-popover__content">
                                    <div class="ui-popover__pane ui-popover__pane--fixed">
                                      <div
                                        class="next-grid next-grid--no-outside-padding next-grid--vertically-centered">
                                        <div class="next-grid__cell">
                                          <h3 class="next-heading next-heading--no-margin">
                                            Thay đổi địa chỉ
                                          </h3>
                                        </div>
                                        <div class="next-grid__cell next-grid__cell--no-flex">
                                          <button class="ui-button btn--link" bind-event-click="addAddressModal.show()"
                                            type="button" name="button">Thêm địa chỉ mới</button>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="ui-popover__pane">
                                      <div class="ui-popover__section">
                                        <div class="next-grid next-grid--no-outside-padding">
                                          <div class="next-grid__cell">
                                            <h6
                                              class="next-heading--tiny next-heading--semi-bold next-heading--half-margin">
                                              Địa chỉ mặc định
                                            </h6>
                                            <p class="type--subdued word_break__content">Nguyễn Thị Ánh Dương</p>
                                            <p class="type--subdued word_break__content">0395445571</p>
                                            <p class="type--subdued word_break__content">18 Trần Khát Trân</p>
                                            <p class="type--subdued">Quận Hai Bà Trưng</p>
                                            <p class="type--subdued word_break__content">Hà Nội<span> </span></p>
                                            <p class="type--subdued">Vietnam</p>

                                            <div class="st">
                                              <button class="ui-button btn--link"
                                                bind-event-click="editAddressModal_18175089.show()" type="button"
                                                name="button">Sửa</button>
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
                        <p class="type--subdued word_break__content">Nguyễn Thị Ánh Dương</p>
                        <p class="type--subdued word_break__content">0395445571</p>
                        <p class="type--subdued word_break__content">Trần Khát Trân</p>
                        <p class="type--subdued">Quận Hai Bà Trưng</p>
                        <p class="type--subdued word_break__content">Hà Nội<span> </span></p>
                        <p class="type--subdued">Vietnam</p>
                      </section>
                    </aside>
                  </div>

                  <div class="ui-layout__item">
                    <div class="next-card next-card--aside">
                      <header class="next-card__header">
                        <div class="wrappable wrappable--half-spacing wrappable--vertically-centered">
                          <div class="wrappable__item">
                            <h3 class="ui-heading">
                              Tag
                            </h3>
                          </div>
                          <div class="wrappable__item wrappable__item--no-flex">
                            <button class="ui-button btn--link" bind-event-click="tagDisplay.showAllTagsModal.show()"
                              type="button" name="button">Toàn bộ tag</button>
                          </div>
                        </div>
                      </header>
                      <section class="next-card__section">
                        <div define="{tagDisplay: new Bizweb.TagDisplay(this)}" context="tagDisplay"
                          id="tags-event-bus">
                          <a href="/admin/customers/tags" data-define="{showAllTagsModal: new Bizweb.Modal(this)}"
                            type="text/html" class="modal_source" style="display: none"></a>
                          <div class="ui-popover__container ui-popover__container--full-width-container"
                            data-context="tagsAutocomplete"
                            data-define="{ 'tagsAutocomplete': new Bizweb.AutocompleteV2.TagsAutocomplete(this, &quot;\/admin\/customers\/tags&quot;, $node, {&quot;values&quot;:[],&quot;maxLengthError&quot;:&quot;Tag vượt quá 249 kí tự&quot;,&quot;maxLength&quot;:249,&quot;duplicateError&quot;:&quot;Bạn đã sử dụng tag \&quot;%s\&quot; rồi&quot;}) }">
                            <div>
                              <div class="">
                                <input class="next-input js-no-dirty" placeholder="VIP, thân thiết, quay lại" id="tags"
                                  data-bind="input" data-bind-event-keyup="inputChanged()" size="30" type="text"
                                  aria-expanded="false" aria-haspopup="false" aria-owns="popover-dropdown-14"
                                  aria-controls="popover-announce-selected" role="combobox" aria-autocomplete="list"
                                  aria-activedescendant="selected-option-11">
                              </div>

                              <div class="tooltip-error attached-to-bottom hide" data-bind-show="errorMessage">
                                <ul class="error-list">
                                  <li data-bind="errorMessage"></li>
                                </ul>
                              </div>
                            </div>

                            <div class="ui-popover ui-popover--full-width ui-popover--no-focus"
                              data-popover-horizontally-relative-to-closest=".next-card"
                              data-popover-css-vertical-margin="16.25" data-popover-css-horizontal-margin="0"
                              data-popover-css-max-height="300" data-popover-css-max-width="10000" id="ui-popover--7"
                              aria-labelledby="tags" aria-expanded="false" role="dialog"
                              data-popover-preferred-position="top" style="margin-right: 0px; margin-left: 0px;">
                              <div class="ui-popover__tooltip"></div>
                              <div class="ui-popover__content-wrapper">
                                <div class="ui-popover__content">
                                  <div class="ui-popover__pane">
                                    <ul
                                      class="js-autocomplete-suggestions next-list next-list--compact next-list--toggles"
                                      role="listbox" id="popover-dropdown-14"></ul>
                                    <div class="ui-popover__section hide" data-bind-show="loadingResults">
                                      <p class="type--subdued tc">
                                        <span class="next-spinner">
                                          <svg class="next-icon next-icon--size-16">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#next-spinner">
                                            </use>
                                          </svg>
                                        </span>
                                        Loading…
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <input type="hidden" name="Tags[]" bind-disabled="hasTags()">
                          <ul class="js-tag-list next-token-list st"></ul>
                        </div>
                      </section>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="ui-page-actions  ui-page-actions--has-secondary">
                <div class="ui-page-actions__container">
                    <div class="ui-page-actions__actions ui-page-actions__actions--secondary">
                        <div class="ui-page-actions__button-group">
                            <button class="ui-button btn-destroy" bind-event-click="deleteCustomerModal.show()" href="#" type="button" name="button">Xóa khách hàng</button>
                        </div>
                    </div>
                </div>
            </div>
          </form>
          <div class="ui-footer-help">
            <div class="ui-footer-help__content">
              <div class="ui-footer-help__icon">
                <svg class="next-icon next-icon--size-24 next-icon--no-nudge" role="img"
                  aria-labelledby="next-help-circle-title">
                  <title id="next-help-circle-title">Help</title>
                  <use xlink:href="#next-help-circle"></use>
                </svg>
              </div>
              <div>
                <p>
                  Bạn có thể xem thêm hướng dẫn
                  <a rel="noreferrer noopener" target="_blank" href="https://support.sapo.vn/thong-tin-khach-hang">tại
                    đây</a>
                </p>
              </div>
            </div>
          </div>
          <div class="modal" data-tg-refresh="modal" id="modal_container" style="display: none;" aria-hidden="true"
            aria-labelledby="ModalTitle" tabindex="-1"></div>
          <div class="modal-bg" data-tg-refresh="modal" id="modal_backdrop"></div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection