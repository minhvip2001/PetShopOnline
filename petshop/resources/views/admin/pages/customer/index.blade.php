@extends('admin.layouts.master')
@section('title')
Khách hàng
@endsection
@section('content')
<main id="AppFrameMain" class="ui-app-frame__main">
    <div class="wrapper" id="wrapper">
        <div id="body" class="page-content clearfix" data-tg-refresh="body">
            <div id="content">
                <style type="text/css">
                    .dropdown--customer.display-from-bottom,
                    .next-dropdown.display-from-bottom,
                    .display-from-bottom.sp-container {
                        top: auto;
                        bottom: 100%;
                        margin-bottom: 8px;
                    }

                    .dropdown--customer.left-aligned,
                    .dropdown.sp-container,
                    .next-dropdown.left-aligned,
                    .sp-container {
                        right: auto;
                        left: 0px;
                    }

                    .dropdown--customer {
                        width: 300px;
                        z-index: 225;
                        color: #31373d;
                    }

                    .dropdown--customer {
                        line-height: 18px;
                        right: 0;
                        text-align: left;
                        min-width: 175px;
                        font-size: 0;
                    }

                    .dropdown--customer,
                    .next-dropdown,
                    .sp-container {
                        z-index: 225;
                        display: none;
                        position: absolute;
                        top: 100%;
                        margin-top: 11px;
                        border: 1px solid #c0c0c0;
                        background: white;
                        box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.25);
                        border-radius: 3px;
                    }

                    .has-dropdown .dropdown-header {
                        background: #fafcfc;
                        border-bottom: solid 1px #e9eff3;
                        border-radius: 3px 3px 0 0;
                        padding: 5px 10px 20px;
                        font-size: 13px;
                    }

                    .dropdown-header-title {
                        float: left;
                        font-weight: 700;
                    }

                    .dropdown-header-title a {
                        text-decoration: none;
                    }

                    .dropdown--customer .ico-list {
                        margin: 10px 0;
                        padding-left: 10px;
                    }

                    .ico-list {
                        list-style: none;
                        margin: 0;
                    }

                    .dropdown--customer li {
                        text-transform: none;
                        list-style-type: none;
                        margin: 0;
                        padding: 0;
                        font-size: 13px;
                        font-weight: 400;
                    }

                    .ico-list-14>li,
                    .ico-list-14 .ico-list-item {
                        min-height: 14px;
                        margin: 0 0 4.66667px 0;
                    }

                    .ico-list>li,
                    .ico-list .ico-list-item {
                        position: relative;
                    }

                    .ico-list-14 .ico-list-content {
                        margin-left: 28px;
                    }

                    .has-dropdown {
                        display: inline-block;
                        position: relative;
                    }

                    .dropdown--customer.is-visible,
                    .next-dropdown.is-visible,
                    .is-visible.sp-container {
                        -webkit-animation: reveal 0.2s ease-out;
                        animation: reveal 0.2s ease-out;
                    }

                    .dropdown--customer.is-visible,
                    .next-dropdown.is-visible,
                    .is-visible.sp-container {
                        -webkit-animation: reveal 0.2s ease-out;
                        animation: reveal 0.2s ease-out;
                    }

                    .dropdown--customer.is-visible,
                    .next-dropdown.is-visible,
                    .is-visible.sp-container {
                        display: block;
                    }

                    .ico-list li>.ico,
                    .ico-list li>.store-setup__ico--checkbox,
                    .ico-list .ico-list-item>.ico,
                    .ico-list .ico-list-item>.store-setup__ico--checkbox {
                        position: absolute;
                        top: 1px;
                        left: 0;
                        line-height: unset;
                        text-indent: unset;
                    }

                    .dropdown--customer:after,
                    .dropdown--customer:before,
                    .next-dropdown:after,
                    .sp-container:after,
                    .next-dropdown:before,
                    .sp-container:before {
                        position: absolute;
                        right: 10px;
                        content: "";
                        width: 0;
                        height: 0;
                        border-top: none;
                        border-right: 8px solid transparent;
                        border-left: 8px solid transparent;
                    }

                    .dropdown--customer.display-from-bottom:after,
                    .next-dropdown.display-from-bottom:after,
                    .display-from-bottom.sp-container:after {
                        margin-top: -1px;
                        border-top: 7px solid white;
                    }

                    .dropdown--customer.display-from-bottom:before,
                    .dropdown--customer.display-from-bottom:after,
                    .next-dropdown.display-from-bottom:before,
                    .display-from-bottom.sp-container:before,
                    .next-dropdown.display-from-bottom:after,
                    .display-from-bottom.sp-container:after {
                        top: 100%;
                        left: 10px;
                        border-bottom: none;
                        border-right: 8px solid transparent;
                        border-left: 8px solid transparent;
                    }

                    .dropdown--customer.display-from-bottom:before,
                    .next-dropdown.display-from-bottom:before,
                    .display-from-bottom.sp-container:before {
                        border-top: 7px solid #c2c2c2;
                    }

                    .customer-detail {
                        display: flex;
                        align-items: center;
                    }

                    .customer-info {
                        padding-left: 10px;
                        color: #637381;
                    }

                    .customer-info a span {
                        display: none;
                    }

                    .customer-info a span:first-child {
                        display: block;
                    }

                    .customer-detail .statistics {
                        font-size: 13px;
                    }
                </style>


                <script type="text/javascript">
                    Page();

                    $(window).scroll(function () {
                        scrollPaggingMobile('.customers');
                    });
                </script>
                <form id="frmBulkActions" method="get">
                    <input type="hidden" name="SelectedAll" value="false">
                </form>

                <div id="pages-index" class="page default has-contextual-help customers-page">
                    <header class="ui-title-bar-container   ui-title-bar-container--full-width">
                        <div class="ui-title-bar ">
                            <div class="ui-title-bar__main-group">
                                <div class="ui-title-bar__heading-group">
                                    <span class="ui-title-bar__icon">
                                        <svg class="next-icon next-icon--color-slate-lighter next-icon--size-20">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xlink:href="#next-discounts"></use>
                                        </svg>
                                    </span>
                                    <h1 class="ui-title-bar__title">Khách hàng</h1>
                                </div>
                                <div define="{titleBarActions: new Bizweb.TitleBarActions(this)}" class="action-bar">
                                    <div class="ui-title-bar__mobile-primary-actions">
                                        <div class="ui-title-bar__actions">
                                            <a href="/admin/customers/create"
                                                class="ui-button ui-button--primary ui-title-bar__action">Thêm khách
                                                hàng</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ui-title-bar__actions-group">
                                <div class="ui-title-bar__actions">
                                    <a href="/admin/customers/create"
                                        class="ui-button ui-button--primary ui-title-bar__action">Thêm khách hàng</a>
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
                                    <section class="ui-card">
                                        <div id="filterAndSavedSearch"
                                            define="{filterer: new Bizweb.FilterAndSavedSearch(this, {&quot;type_filter&quot;:&quot;customers&quot;})}"
                                            context="filterer">
                                            <div class="next-tab__container ">
                                                <ul class="next-tab__list filter-tab-list" id="filter-tab-list"
                                                    role="tablist" data-has-next-tab-controller="true">
                                                    <li class="filter-tab-item" data-tab-index="1">
                                                        <a href="/admin/customers"
                                                            class="filter-tab filter-tab-active show-all-items next-tab next-tab--is-active">Tất
                                                            cả khách hàng</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="next-card__section next-card__section--no-bottom-spacing">
                                                <div class="obj-filter hide-when-printing table-filter-container">
                                                    <div class="next-input-wrapper">
                                                        <div class="next-field__connected-wrapper">
                                                            <div class="next-field--connected--no-flex">
                                                                <div class="ui-popover__container">
                                                                    <button class="ui-button ui-btn-filter"
                                                                        type="button" name="button" id="ui-btn-filter">
                                                                        Lọc <span class="btn__text--deprioritize"
                                                                            id="btn__text--deprioritize-filter">khách
                                                                            hàng</span>
                                                                        <svg class="next-icon next-icon--size-20"
                                                                            id="svg-filter">
                                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                xlink:href="#next-disclosure"></use>
                                                                        </svg>
                                                                    </button>
                                                                    <div
                                                                        class="ui-popover ui-popover--align-edge dropdown-menu margin-10 dropdown-filter">
                                                                        <div class="ui-popover__tooltip"
                                                                            style="left: 75px;"></div>
                                                                        <div class="ui-popover__content-wrapper">
                                                                            <div class="ui-popover__content"
                                                                                style="max-height: 272px; width: 205px;">
                                                                                <div class="ui-popover__section">
                                                                                    <div class="add-filters">
                                                                                        <form
                                                                                            bind-event-submit="submit(event)"
                                                                                            class="clearfix">
                                                                                            <p class="filter-heading">
                                                                                                Hiển thị khách hàng
                                                                                                theo:</p>
                                                                                            <div class="filter-builder">
                                                                                                <div
                                                                                                    class="next-input-wrapper--half-spacing">
                                                                                                    <div
                                                                                                        class="next-input-wrapper">
                                                                                                        <label
                                                                                                            class="next-label helper--visually-hidden"
                                                                                                            for="filter-select-1">Chọn
                                                                                                            điều kiện
                                                                                                            lọc</label>
                                                                                                        <div
                                                                                                            class="ui-select__wrapper">
                                                                                                            <select
                                                                                                                name="filter-select-1"
                                                                                                                bind="filterKey"
                                                                                                                bind-event-change="resetFilter()"
                                                                                                                id="filter-conditions"
                                                                                                                class="ui-select">
                                                                                                                <option
                                                                                                                    value="">
                                                                                                                    Chọn
                                                                                                                    điều
                                                                                                                    kiện
                                                                                                                    lọc...
                                                                                                                </option>
                                                                                                                <option
                                                                                                                    value="TotalSpent">
                                                                                                                    Tổng
                                                                                                                    chi
                                                                                                                    tiêu
                                                                                                                </option>
                                                                                                                <option
                                                                                                                    value="OrdersCount">
                                                                                                                    Tổng
                                                                                                                    đơn
                                                                                                                    hàng
                                                                                                                </option>
                                                                                                                <option
                                                                                                                    value="CreatedOn">
                                                                                                                    Ngày
                                                                                                                    tạo
                                                                                                                </option>
                                                                                                                <option
                                                                                                                    value="AcceptsMarketing">
                                                                                                                    Nhận
                                                                                                                    tiếp
                                                                                                                    thị
                                                                                                                </option>
                                                                                                                <option
                                                                                                                    value="State">
                                                                                                                    Trạng
                                                                                                                    thái
                                                                                                                </option>
                                                                                                                <option
                                                                                                                    value="Tag">
                                                                                                                    Đã
                                                                                                                    được
                                                                                                                    tag
                                                                                                                    với
                                                                                                                </option>
                                                                                                                <option
                                                                                                                    value="Address">
                                                                                                                    Địa
                                                                                                                    chỉ
                                                                                                                </option>
                                                                                                            </select>
                                                                                                            <svg
                                                                                                                class="next-icon next-icon--size-16">
                                                                                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                                    xlink:href="#select-chevron">
                                                                                                                </use>
                                                                                                            </svg>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div bind-show="filterKey == 'TotalSpent'"
                                                                                                    class="hide">
                                                                                                    <div
                                                                                                        class="next-input-wrapper--half-spacing">
                                                                                                        <div
                                                                                                            class="next-input-wrapper">
                                                                                                            <label
                                                                                                                class="next-label helper--visually-hidden"
                                                                                                                for="filter-select-2">Chọn
                                                                                                                điều
                                                                                                                kiện
                                                                                                                lọc</label>
                                                                                                            <div
                                                                                                                class="ui-select__wrapper">
                                                                                                                <select
                                                                                                                    bind="option"
                                                                                                                    class="ui-select filter-select"
                                                                                                                    name="filter-select-2">
                                                                                                                    <option
                                                                                                                        value="">
                                                                                                                        Chọn
                                                                                                                        điều
                                                                                                                        kiện
                                                                                                                        lọc...
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="equals">
                                                                                                                        bằng
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="not_equals">
                                                                                                                        không
                                                                                                                        bằng
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="less_than">
                                                                                                                        nhỏ
                                                                                                                        hơn
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="greater_than">
                                                                                                                        lớn
                                                                                                                        hơn
                                                                                                                    </option>
                                                                                                                </select>
                                                                                                                <svg
                                                                                                                    class="next-icon next-icon--size-16">
                                                                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                                        xlink:href="#select-chevron">
                                                                                                                    </use>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="next-input-wrapper--half-spacing">
                                                                                                            <div
                                                                                                                class="next-input-wrapper">
                                                                                                                <label
                                                                                                                    class="next-label helper--visually-hidden"
                                                                                                                    for="filter-input-0">Filter-input-0</label>
                                                                                                                <input
                                                                                                                    type="text"
                                                                                                                    name="filter-input-0"
                                                                                                                    id="filter-input-0"
                                                                                                                    data-bind="value"
                                                                                                                    data-bind-class="{error: isValid}"
                                                                                                                    data-bind-show="optionSelected()"
                                                                                                                    class="next-input next-input--no-stylized hide">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="next-input-wrapper--vertical-block">
                                                                                                        <button
                                                                                                            class="ui-button btn-slim add-filter filtering-complete"
                                                                                                            type="button"
                                                                                                            bind-event-click="submitFilter(this)"
                                                                                                            name="button">Lọc</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div bind-show="filterKey == 'OrdersCount'"
                                                                                                    class="hide">
                                                                                                    <div
                                                                                                        class="next-input-wrapper--half-spacing">
                                                                                                        <div
                                                                                                            class="next-input-wrapper">
                                                                                                            <label
                                                                                                                class="next-label helper--visually-hidden"
                                                                                                                for="filter-select-3">Chọn
                                                                                                                điều
                                                                                                                kiện
                                                                                                                lọc</label>
                                                                                                            <div
                                                                                                                class="ui-select__wrapper">
                                                                                                                <select
                                                                                                                    bind="option"
                                                                                                                    class="ui-select filter-select"
                                                                                                                    name="filter-select-3"
                                                                                                                    id="filter-select-3">
                                                                                                                    <option
                                                                                                                        value="">
                                                                                                                        Chọn
                                                                                                                        điều
                                                                                                                        kiện
                                                                                                                        lọc...
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="equals">
                                                                                                                        bằng
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="not_equals">
                                                                                                                        không
                                                                                                                        bằng
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="less_than">
                                                                                                                        nhỏ
                                                                                                                        hơn
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="greater_than">
                                                                                                                        lớn
                                                                                                                        hơn
                                                                                                                    </option>
                                                                                                                </select>
                                                                                                                <svg
                                                                                                                    class="next-icon next-icon--size-16">
                                                                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                                        xlink:href="#select-chevron">
                                                                                                                    </use>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="next-input-wrapper--half-spacing">
                                                                                                            <div
                                                                                                                class="next-input-wrapper">
                                                                                                                <label
                                                                                                                    class="next-label helper--visually-hidden"
                                                                                                                    for="filter-input-1">Filter-input-1</label>
                                                                                                                <input
                                                                                                                    type="text"
                                                                                                                    name="filter-input-1"
                                                                                                                    id="filter-input-1"
                                                                                                                    data-bind="value"
                                                                                                                    data-bind-class="{error: isValid}"
                                                                                                                    data-bind-show="optionSelected()"
                                                                                                                    class="next-input next-input--no-stylized hide">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="next-input-wrapper--vertical-block">
                                                                                                        <button
                                                                                                            class="ui-button btn-slim add-filter filtering-complete"
                                                                                                            type="button"
                                                                                                            bind-event-click="submitFilter(this)"
                                                                                                            name="button">Lọc</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div bind-show="filterKey == 'CreatedOn'"
                                                                                                    class="hide">
                                                                                                    <div
                                                                                                        class="next-input-wrapper--half-spacing">
                                                                                                        <div
                                                                                                            class="next-input-wrapper">
                                                                                                            <label
                                                                                                                class="next-label helper--visually-hidden"
                                                                                                                for="filter-select-4">Chọn
                                                                                                                điều
                                                                                                                kiện
                                                                                                                lọc</label>
                                                                                                            <div
                                                                                                                class="ui-select__wrapper">
                                                                                                                <select
                                                                                                                    name="filter-select-4"
                                                                                                                    id="filter-select-4"
                                                                                                                    bind="option"
                                                                                                                    class="ui-select filter-select">
                                                                                                                    <option
                                                                                                                        value="">
                                                                                                                        Chọn
                                                                                                                        điều
                                                                                                                        kiện
                                                                                                                        lọc...
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="less_than">
                                                                                                                        Từ
                                                                                                                        ngày
                                                                                                                        này
                                                                                                                        về
                                                                                                                        trước
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="greater_than">
                                                                                                                        Từ
                                                                                                                        ngày
                                                                                                                    </option>
                                                                                                                </select>
                                                                                                                <svg
                                                                                                                    class="next-icon next-icon--size-16">
                                                                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                                        xlink:href="#select-chevron">
                                                                                                                    </use>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="next-input-wrapper--half-spacing hide"
                                                                                                        bind-show="optionRequiresValue()">
                                                                                                        <div
                                                                                                            class="next-input-wrapper">
                                                                                                            <label
                                                                                                                for="filter_date"
                                                                                                                class="next-label">Ngày</label>
                                                                                                            <div
                                                                                                                class="next-input--stylized">
                                                                                                                <span
                                                                                                                    class="next-input__add-on next-input__add-on--before">
                                                                                                                    <svg
                                                                                                                        class="next-icon next-icon--size-16">
                                                                                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                                            xlink:href="#next-calendar">
                                                                                                                        </use>
                                                                                                                    </svg>
                                                                                                                </span>
                                                                                                                <input
                                                                                                                    type="text"
                                                                                                                    name="filter-date-1"
                                                                                                                    id="filter-date-1"
                                                                                                                    class="next-input next-input--invisible input-date hasDatepicker"
                                                                                                                    data-rel="datepicker"
                                                                                                                    bind="value"
                                                                                                                    bind-class="{error: isValid}"
                                                                                                                    placeholder="DD-MM-YYYY">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="next-input-wrapper--vertical-block">
                                                                                                        <button
                                                                                                            class="ui-button btn-slim add-filter filtering-complete"
                                                                                                            type="button"
                                                                                                            bind-event-click="submitFilter(this)"
                                                                                                            name="button">Lọc</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div bind-show="filterKey == 'AcceptsMarketing'"
                                                                                                    class="hide">
                                                                                                    <div
                                                                                                        class="next-input-wrapper--half-spacing">
                                                                                                        <div
                                                                                                            class="next-input-wrapper">
                                                                                                            <label
                                                                                                                class="next-label helper--visually-hidden"
                                                                                                                for="filter-select-5">Chọn
                                                                                                                điều
                                                                                                                kiện
                                                                                                                lọc</label>
                                                                                                            <div
                                                                                                                class="ui-select__wrapper">
                                                                                                                <select
                                                                                                                    bind="option"
                                                                                                                    class="ui-select filter-select"
                                                                                                                    name="filter-select-5">
                                                                                                                    <option
                                                                                                                        value="">
                                                                                                                        Chọn
                                                                                                                        điều
                                                                                                                        kiện
                                                                                                                        lọc...
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="false">
                                                                                                                        không
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="true">
                                                                                                                        có
                                                                                                                    </option>
                                                                                                                </select><svg
                                                                                                                    class="next-icon next-icon--size-16">
                                                                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                                        xlink:href="#select-chevron">
                                                                                                                    </use>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="next-input-wrapper--vertical-block">
                                                                                                        <button
                                                                                                            class="ui-button btn-slim add-filter filtering-complete"
                                                                                                            type="button"
                                                                                                            bind-event-click="submitFilter(this)"
                                                                                                            name="button">Lọc</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div bind-show="filterKey == 'State'"
                                                                                                    class="hide">
                                                                                                    <div
                                                                                                        class="next-input-wrapper--half-spacing">
                                                                                                        <div
                                                                                                            class="next-input-wrapper">
                                                                                                            <label
                                                                                                                class="next-label helper--visually-hidden"
                                                                                                                for="filter-select-6">Chọn
                                                                                                                điều
                                                                                                                kiện
                                                                                                                lọc</label>
                                                                                                            <div
                                                                                                                class="ui-select__wrapper">
                                                                                                                <select
                                                                                                                    bind="option"
                                                                                                                    class="ui-select filter-select"
                                                                                                                    name="filter-select-6">
                                                                                                                    <option
                                                                                                                        value="">
                                                                                                                        Chọn
                                                                                                                        điều
                                                                                                                        kiện
                                                                                                                        lọc...
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="enabled">
                                                                                                                        Có
                                                                                                                        tài
                                                                                                                        khoản
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="disabled">
                                                                                                                        Chưa
                                                                                                                        đăng
                                                                                                                        ký
                                                                                                                    </option>
                                                                                                                </select><svg
                                                                                                                    class="next-icon next-icon--size-16">
                                                                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                                        xlink:href="#select-chevron">
                                                                                                                    </use>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="next-input-wrapper--vertical-block">
                                                                                                        <button
                                                                                                            class="ui-button btn-slim add-filter filtering-complete"
                                                                                                            type="button"
                                                                                                            bind-event-click="submitFilter(this)"
                                                                                                            name="button">Lọc</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div bind-show="filterKey == 'Tag'"
                                                                                                    class="hide">
                                                                                                    <div
                                                                                                        class="next-input-wrapper--half-spacing">
                                                                                                        <div
                                                                                                            class="next-input-wrapper">
                                                                                                            <label
                                                                                                                class="next-label helper--visually-hidden"
                                                                                                                for="filter-input-4">Filter-input-4</label>
                                                                                                            <input
                                                                                                                type="text"
                                                                                                                name="filter-input-4"
                                                                                                                id="filter-input-4"
                                                                                                                data-bind="value"
                                                                                                                bind-class="{error: isValid}"
                                                                                                                class="next-input next-input--no-stylized">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="next-input-wrapper--vertical-block">
                                                                                                        <button
                                                                                                            class="ui-button btn-slim add-filter filtering-complete"
                                                                                                            type="button"
                                                                                                            bind-event-click="submitFilter(this)"
                                                                                                            name="button">Lọc</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div bind-show="filterKey == 'Email'"
                                                                                                    class="hide">
                                                                                                    <div
                                                                                                        class="next-input-wrapper--half-spacing">
                                                                                                        <div
                                                                                                            class="next-input-wrapper">
                                                                                                            <input
                                                                                                                type="text"
                                                                                                                name="email"
                                                                                                                id="email"
                                                                                                                data-bind="value"
                                                                                                                bind-class="{error: isValid}"
                                                                                                                class="next-input">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="next-input-wrapper--vertical-block">
                                                                                                        <button
                                                                                                            class="ui-button btn-slim add-filter filtering-complete"
                                                                                                            type="button"
                                                                                                            bind-event-click="submitFilter(this)"
                                                                                                            name="button">Lọc</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div bind-show="filterKey == 'Phone'"
                                                                                                    class="hide">
                                                                                                    <div
                                                                                                        class="next-input-wrapper--half-spacing">
                                                                                                        <div
                                                                                                            class="next-input-wrapper">
                                                                                                            <input
                                                                                                                type="text"
                                                                                                                name="phone"
                                                                                                                id="phone"
                                                                                                                data-bind="value"
                                                                                                                bind-class="{error: isValid}"
                                                                                                                class="next-input">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="next-input-wrapper--vertical-block">
                                                                                                        <button
                                                                                                            class="ui-button btn-slim add-filter filtering-complete"
                                                                                                            type="button"
                                                                                                            bind-event-click="submitFilter(this)"
                                                                                                            name="button">Lọc</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div bind-show="filterKey == 'Address'"
                                                                                                    class="hide">
                                                                                                    <div
                                                                                                        class="next-input-wrapper--half-spacing">
                                                                                                        <div
                                                                                                            class="next-input-wrapper">
                                                                                                            <label
                                                                                                                class="next-label helper--visually-hidden"
                                                                                                                for="filter-select-5">Chọn
                                                                                                                điều
                                                                                                                kiện
                                                                                                                lọc</label>
                                                                                                            <div
                                                                                                                class="ui-select__wrapper">
                                                                                                                <select
                                                                                                                    bind="provinceCode"
                                                                                                                    class="ui-select filter-select province-result"
                                                                                                                    name="filter-select-5"
                                                                                                                    data-bind-event-change="provinceChanged()">
                                                                                                                    <option
                                                                                                                        value="">
                                                                                                                        Chọn
                                                                                                                        tỉnh
                                                                                                                        thành
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="1">
                                                                                                                        Hà
                                                                                                                        Nội
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="2">
                                                                                                                        TP
                                                                                                                        Hồ
                                                                                                                        Chí
                                                                                                                        Minh
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="3">
                                                                                                                        An
                                                                                                                        Giang
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="4">
                                                                                                                        Bà
                                                                                                                        Rịa-Vũng
                                                                                                                        Tàu
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="5">
                                                                                                                        Bắc
                                                                                                                        Giang
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="6">
                                                                                                                        Bắc
                                                                                                                        Kạn
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="7">
                                                                                                                        Bạc
                                                                                                                        Liêu
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="8">
                                                                                                                        Bắc
                                                                                                                        Ninh
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="9">
                                                                                                                        Bến
                                                                                                                        Tre
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="10">
                                                                                                                        Bình
                                                                                                                        Dương
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="11">
                                                                                                                        Bình
                                                                                                                        Định
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="12">
                                                                                                                        Bình
                                                                                                                        Phước
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="13">
                                                                                                                        Bình
                                                                                                                        Thuận
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="14">
                                                                                                                        Cà
                                                                                                                        Mau
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="15">
                                                                                                                        Cao
                                                                                                                        Bằng
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="16">
                                                                                                                        Cần
                                                                                                                        Thơ
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="17">
                                                                                                                        Đà
                                                                                                                        Nẵng
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="18">
                                                                                                                        Đắk
                                                                                                                        Lắk
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="19">
                                                                                                                        Đắk
                                                                                                                        Nông
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="20">
                                                                                                                        Điện
                                                                                                                        Biên
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="21">
                                                                                                                        Đồng
                                                                                                                        Nai
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="22">
                                                                                                                        Đồng
                                                                                                                        Tháp
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="23">
                                                                                                                        Gia
                                                                                                                        Lai
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="24">
                                                                                                                        Hà
                                                                                                                        Giang
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="25">
                                                                                                                        Hà
                                                                                                                        Nam
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="26">
                                                                                                                        Hà
                                                                                                                        Tĩnh
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="27">
                                                                                                                        Hải
                                                                                                                        Dương
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="28">
                                                                                                                        Hải
                                                                                                                        Phòng
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="29">
                                                                                                                        Hậu
                                                                                                                        Giang
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="30">
                                                                                                                        Hòa
                                                                                                                        Bình
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="31">
                                                                                                                        Hưng
                                                                                                                        Yên
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="32">
                                                                                                                        Khánh
                                                                                                                        Hòa
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="33">
                                                                                                                        Kiên
                                                                                                                        Giang
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="34">
                                                                                                                        Kon
                                                                                                                        Tum
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="35">
                                                                                                                        Lai
                                                                                                                        Châu
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="36">
                                                                                                                        Lâm
                                                                                                                        Đồng
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="37">
                                                                                                                        Lạng
                                                                                                                        Sơn
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="38">
                                                                                                                        Lào
                                                                                                                        Cai
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="39">
                                                                                                                        Long
                                                                                                                        An
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="40">
                                                                                                                        Nam
                                                                                                                        Định
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="41">
                                                                                                                        Nghệ
                                                                                                                        An
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="42">
                                                                                                                        Ninh
                                                                                                                        Bình
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="43">
                                                                                                                        Ninh
                                                                                                                        Thuận
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="44">
                                                                                                                        Phú
                                                                                                                        Thọ
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="45">
                                                                                                                        Phú
                                                                                                                        Yên
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="46">
                                                                                                                        Quảng
                                                                                                                        Bình
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="47">
                                                                                                                        Quảng
                                                                                                                        Nam
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="48">
                                                                                                                        Quảng
                                                                                                                        Ngãi
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="49">
                                                                                                                        Quảng
                                                                                                                        Ninh
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="50">
                                                                                                                        Quảng
                                                                                                                        Trị
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="51">
                                                                                                                        Sóc
                                                                                                                        Trăng
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="52">
                                                                                                                        Sơn
                                                                                                                        La
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="53">
                                                                                                                        Tây
                                                                                                                        Ninh
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="54">
                                                                                                                        Thái
                                                                                                                        Bình
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="55">
                                                                                                                        Thái
                                                                                                                        Nguyên
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="56">
                                                                                                                        Thanh
                                                                                                                        Hóa
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="57">
                                                                                                                        Thừa
                                                                                                                        Thiên
                                                                                                                        Huế
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="58">
                                                                                                                        Tiền
                                                                                                                        Giang
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="59">
                                                                                                                        Trà
                                                                                                                        Vinh
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="60">
                                                                                                                        Tuyên
                                                                                                                        Quang
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="61">
                                                                                                                        Vĩnh
                                                                                                                        Long
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="62">
                                                                                                                        Vĩnh
                                                                                                                        Phúc
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="63">
                                                                                                                        Yên
                                                                                                                        Bái
                                                                                                                    </option>
                                                                                                                </select><svg
                                                                                                                    class="next-icon next-icon--size-16">
                                                                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                                        xlink:href="#select-chevron">
                                                                                                                    </use>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="next-input-wrapper--half-spacing">
                                                                                                        <div
                                                                                                            class="next-input-wrapper">
                                                                                                            <label
                                                                                                                class="next-label helper--visually-hidden"
                                                                                                                for="filter-select-6">Chọn
                                                                                                                điều
                                                                                                                kiện
                                                                                                                lọc</label>
                                                                                                            <div
                                                                                                                class="ui-select__wrapper">
                                                                                                                <select
                                                                                                                    bind="districtCode"
                                                                                                                    class="ui-select filter-select district-result"
                                                                                                                    name="filter-select-6">
                                                                                                                    <option
                                                                                                                        value="">
                                                                                                                        Chọn
                                                                                                                        quận
                                                                                                                        huyện
                                                                                                                    </option>
                                                                                                                </select><svg
                                                                                                                    class="next-icon next-icon--size-16">
                                                                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                                        xlink:href="#select-chevron">
                                                                                                                    </use>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="next-input-wrapper--vertical-block">
                                                                                                        <button
                                                                                                            class="ui-button btn-slim add-filter filtering-complete"
                                                                                                            type="button"
                                                                                                            bind-event-click="submitFilter(this)"
                                                                                                            name="button">Lọc</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="has--actions" data-tg-refresh-always="true"
                                                                class=""></div>
                                                            <form action="/admin/customers"
                                                                bind-event-submit="submitQuery()"
                                                                class="next-form next-form--full-width next-field--connected--no-border-radius"
                                                                method="get"> <label
                                                                    class="next-label helper--visually-hidden"
                                                                    for="query">Query</label>
                                                                <div class="next-input--stylized next-field--connected">
                                                                    <span
                                                                        class="next-input__add-on next-input__add-on--before">
                                                                        <svg
                                                                            class="next-icon next-icon--color-slate-lightest next-icon--size-16">
                                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                xlink:href="#next-search-reverse"></use>
                                                                        </svg>
                                                                    </span>
                                                                    <input type="text" name="query" id="query"
                                                                        placeholder="Tìm kiếm khách hàng" bind="query"
                                                                        bind-event-input="submitQuery()" value=""
                                                                        class="next-input next-input--invisible">
                                                                </div>
                                                            </form>
                                                            <div id="saved-search-actions-next"
                                                                class="saved-search-actions-next"
                                                                data-tg-refresh="saved-search-actions-next">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ui-card__section has-bulk-actions customers" refresh="customers"
                                            id="customers-refresh">
                                            <div class="ui-type-container clearfix">
                                                <div class="table-wrapper"
                                                    define="{bulkActions: new Bizweb.BulkActions(this,{&quot;type&quot;:&quot;khách hàng&quot;})}"
                                                    context="bulkActions">
                                                    <table id="price-rule-table"
                                                        class="table-hover bulk-action-context expanded">
                                                        <thead>
                                                            <tr>
                                                                <th class="select">
                                                                    <span>
                                                                        <div
                                                                            class="tooltip tooltip-left-align tooltip-bottom bulk-actions__select-all-tooltip">
                                                                            <div class="next-input-wrapper bulk-actions__select-all btn--select-all"
                                                                                bind-class="{'bulk-actions__select-all--has-selected-items': selectedItems.length > 0}"
                                                                                style="left: auto;">
                                                                                <label
                                                                                    class="next-label next-label--switch btn btn-slim bulk-actions__select-all-btn"
                                                                                    for="bulk-actions__select-all"
                                                                                    bind-class="{'btn btn-slim bulk-actions__select-all-btn': selectedItems.length == 0, 'helper--visually-hidden': selectedItems.length > 0}">
                                                                                    <span
                                                                                        class="helper--visually-hidden">Select
                                                                                        all customers</span>
                                                                                </label>
                                                                                <input type="checkbox"
                                                                                    name="bulk-actions__select-all"
                                                                                    id="bulk-actions__select-all"
                                                                                    bind-event-change="addOrRemoveAllBulkActionItems(this)"
                                                                                    class="next-checkbox js-no-dirty bulk-actions__select-all-checkbox all-bulk-action">
                                                                                <span class="next-checkbox--styled">
                                                                                    <svg
                                                                                        class="next-icon next-icon--size-10 checkmark">
                                                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                            xlink:href="#next-checkmark-thick">
                                                                                        </use>
                                                                                    </svg>
                                                                                    <svg
                                                                                        class="next-icon next-icon--size-10 indeterminate">
                                                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                            xlink:href="#next-minus">
                                                                                        </use>
                                                                                    </svg>
                                                                                </span>
                                                                            </div>
                                                                            <div class="tooltip-container"
                                                                                bind-class="{'hide': selectedItems.length > 0}">
                                                                                <span class="tooltip-label">Chọn tất cả
                                                                                    khách hàng</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="bulk-actions"
                                                                            bind-class="{'bulk-actions--is-visible': selectedItems.length > 0}"
                                                                            all-items="3" items-page="50"
                                                                            total-records="3" style="width: 983px;">
                                                                            <ul
                                                                                class="bulk-actions__main-bar segmented">
                                                                                <li>
                                                                                    <a
                                                                                        class="btn btn-slim btn-disabled btn--selection">
                                                                                        <span
                                                                                            class="selection-count bulk-action-items-count"
                                                                                            selected-bulk-action-items="0">
                                                                                            <span><span
                                                                                                    class="hidden-xs">Đã
                                                                                                    chọn</span> <span
                                                                                                    class="display-bulk-action-items-count"></span>
                                                                                                khách hàng</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="ui-popover__container">
                                                                                        <button
                                                                                            class="ui-button ui-button--size-small btn-dropdown-bulkaction"
                                                                                            id="btn-dropdown-bulkaction"
                                                                                            type="button" name="button">
                                                                                            <span class="hidden-xs">Chọn
                                                                                                thao tác</span><span
                                                                                                class="hidden-lg hidden-md hidden-sm">Thao
                                                                                                tác</span> <svg
                                                                                                class="next-icon next-icon--size-20"
                                                                                                id="svg-bulkaction">
                                                                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                    xlink:href="#next-disclosure">
                                                                                                </use>
                                                                                            </svg>
                                                                                        </button>
                                                                                        <div
                                                                                            class="dropdown-menu margin-10 dropdown-bulkaction">
                                                                                            <div
                                                                                                class="ui-popover__tooltip">
                                                                                            </div>
                                                                                            <div
                                                                                                class="ui-popover__pane">
                                                                                                <div
                                                                                                    class="ui-popover__section ui-popover__section--no-padding">
                                                                                                    <ul
                                                                                                        class="next-list next-list--compact">
                                                                                                        <li><a define="{urlBulkActionDelete:'/admin/customers/bulkdeletes'}"
                                                                                                                class="next-list__item"
                                                                                                                href="javascript:void(0);"
                                                                                                                bind-event-click="showDeleteItemsModal()">Xóa
                                                                                                                khách
                                                                                                                hàng</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="ui-popover__section ui-popover__section--no-padding">
                                                                                                    <ul
                                                                                                        class="next-list next-list--compact">
                                                                                                        <li><a class="next-list__item"
                                                                                                                href="#"
                                                                                                                define="{urlBulkActionAddTag:'/admin/customers/bulkaddtags'}"
                                                                                                                bind-event-click="addTags()">Thêm
                                                                                                                tags</a>
                                                                                                        </li>
                                                                                                        <li><a class="next-list__item"
                                                                                                                href=""
                                                                                                                define="{urlBulkActionRemoveTag:'/admin/customers/bulkremovetags'}"
                                                                                                                bind-event-click="removeTags()">Xóa
                                                                                                                tags</a>
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
                                                                <th><span>Thông tin</span></th>
                                                                <th class="tc hidden-xs"><span>Email</span></th>
                                                                <th class="tc hidden-xs"><span>Điện thoại</span></th>
                                                                <th class="tc hidden-xs"><span>Đơn hàng</span></th>
                                                                <th class="tc hidden-xs" style="min-width: 85px;">
                                                                    <span>Đơn hàng gần nhất</span>
                                                                </th>
                                                                <th class="tr hidden-xs"><span>Tổng chi tiêu</span></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($customers as $customer)
                                                            <tr>
                                                                <td class="select">
                                                                    <div class="next-input-wrapper">

                                                                        <input type="checkbox" value="{{$customer->customer_id}}"
                                                                            name="ids"
                                                                            bind-event-change="addOrRemoveBulkActionItem({{$customer->customer_id}},this)"
                                                                            id="bulk-action-{{$customer->customer_id}}"
                                                                            class="bulk-action-item next-checkbox">
                                                                        <span class="next-checkbox--styled"><svg
                                                                                class="next-icon next-icon--size-10 checkmark">
                                                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    xlink:href="#next-checkmark-thick">
                                                                                </use>
                                                                            </svg></span>
                                                                    </div>
                                                                </td>
                                                                <td class="name no-wrap">
                                                                    <div class="customer-detail">
                                                                        <div class="avatar">
                                                                            <span
                                                                                class="user-avatar user-avatar--style-2">
                                                                                <span class="user-avatar__initials">

                                                                                    <img class="profile-pic img-circle"
                                                                                        data-name="{{$customer->customer_name}}"
                                                                                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHBvaW50ZXItZXZlbnRzPSJub25lIiB3aWR0aD0iNDYiIGhlaWdodD0iNDYiIHN0eWxlPSJiYWNrZ3JvdW5kLWNvbG9yOiByZ2IoMjMwLCAxMjYsIDM0KTsgd2lkdGg6IDQ2cHg7IGhlaWdodDogNDZweDsgYm9yZGVyLXJhZGl1czogMHB4OyI+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeT0iNTAlIiB4PSI1MCUiIGR5PSIwLjM1ZW0iIHBvaW50ZXItZXZlbnRzPSJhdXRvIiBmaWxsPSIjZmZmZmZmIiBmb250LWZhbWlseT0iSGVsdmV0aWNhTmV1ZS1MaWdodCxIZWx2ZXRpY2EgTmV1ZSBMaWdodCxIZWx2ZXRpY2EgTmV1ZSxIZWx2ZXRpY2EsIEFyaWFsLEx1Y2lkYSBHcmFuZGUsIHNhbnMtc2VyaWYiIHN0eWxlPSJmb250LXdlaWdodDogNDAwOyBmb250LXNpemU6IDIwcHg7Ij5UPC90ZXh0Pjwvc3ZnPg==">
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                        <div class="customer-info">
                                                                            <a id="customer-{{$customer->customer_id}}"
                                                                                href="{{route('customer.edit', $customer->customer_id)}}"
                                                                                data-nested-link-target="true">
                                                                                <span>{{$customer->customer_name}}</span>
                                                                                <span>{{$customer->customer_email}}</span>
                                                                            </a>
                                                                            <div
                                                                                class="hidden-lg visible-xs statistics">
                                                                                <span>0 đơn hàng</span> <br>
                                                                                <span>0₫ chi tiêu</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="email tc hidden-xs">
                                                                    {{$customer->email ? $customer->email : '---'}}
                                                                </td>
                                                                <td class="phone tc hidden-xs">
                                                                    {{$customer->customer_phone}}
                                                                </td>
                                                                <td class="orders tc hidden-xs">0</td>
                                                                <td class="last_order tc hidden-xs">
                                                                    <span>---</span>
                                                                </td>
                                                                <td class="money_spent tr hidden-xs">0₫</td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>

                                                </div>
                                                <div class="t-grid-pager-boder">
                                                    <div class="t-pager t-reset clearfix fix-margin-pager">
                                                        <div class="col-md-6 col-lg-6 hidden-xs hidden-sm no-padding">
                                                            <div class="t-status-text dataTables_info">Hiển thị kết quả
                                                                từ 1 - 3 trên tổng 3 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{$customers->links()}}

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
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#next-help-circle"></use>
                                            </svg>
                                        </div>
                                        <div>
                                            Bạn có thể xem thêm hướng dẫn về quản lý khách hàng <a target="_blank"
                                                rel="noreferrer noopener" title="Hướng dẫn quản lý khách hàng"
                                                href="https://support.sapo.vn/tim-hieu-ve-khach-hang">tại đây</a>
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
</main>
@endsection