<div class="ui-layout__item">
    <section class="ui-card">
        <div id="filterAndSavedSearch"
            define="{filterer: new Bizweb.FilterAndSavedSearch(this, {&quot;type_filter&quot;:&quot;collections&quot;})}"
            context="filterer">
            <div class="next-tab__container ">
                <ul class="next-tab__list filter-tab-list" id="filter-tab-list" role="tablist"
                    data-has-next-tab-controller="true">
                    <li class="filter-tab-item" data-tab-index="1">
                        <a href="/admin/collections"
                            class="filter-tab filter-tab-active show-all-items next-tab next-tab--is-active">Tất
                            cả danh mục</a>
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
                            <div class="next-field--connected--no-flex">
                                <div class="ui-popover__container">
                                    <button class="ui-button ui-btn-filter" type="button" name="button"
                                        id="ui-btn-filter">
                                        Lọc <span class="btn__text--deprioritize"
                                            id="btn__text--deprioritize-filter">danh
                                            mục</span>
                                        <svg class="next-icon next-icon--size-20" id="svg-filter">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xlink:href="#next-disclosure"></use>
                                        </svg>
                                    </button>
                                    <div
                                        class="ui-popover ui-popover--align-edge dropdown-menu margin-10 dropdown-filter">
                                        <div class="ui-popover__tooltip" style="left: 75px;"></div>
                                        <div class="ui-popover__content-wrapper">
                                            <div class="ui-popover__content" style="max-height: 272px; width: 205px;">
                                                <div class="ui-popover__section">
                                                    <div class="add-filters">
                                                        <form bind-event-submit="submit(event)" class="clearfix">
                                                            <p class="filter-heading">
                                                                Hiển thị danh mục theo:
                                                            </p>
                                                            <div class="filter-builder">
                                                                <div class="next-input-wrapper--half-spacing">
                                                                    <div class="next-input-wrapper">
                                                                        <label
                                                                            class="next-label helper--visually-hidden"
                                                                            for="filter-select-1">Chọn
                                                                            điều kiện
                                                                            lọc</label>
                                                                        <div class="ui-select__wrapper">
                                                                            <select name="filter-select-1"
                                                                                bind="filterKey"
                                                                                bind-event-change="resetFilter()"
                                                                                id="filter-conditions"
                                                                                class="ui-select">
                                                                                <option value="">
                                                                                    Chọn
                                                                                    điều
                                                                                    kiện
                                                                                    lọc...
                                                                                </option>
                                                                                <option value="visibility">
                                                                                    Hiển
                                                                                    thị
                                                                                </option>
                                                                                <option value="collectionType">
                                                                                    Loại
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
                                                                <div bind-show="filterKey == 'visibility'" class="hide">
                                                                    <div class="next-input-wrapper--half-spacing">
                                                                        <div class="next-input-wrapper">
                                                                            <label
                                                                                class="next-label helper--visually-hidden"
                                                                                for="filter-1">Chọn
                                                                                điều
                                                                                kiện
                                                                                lọc</label>
                                                                            <div class="ui-select__wrapper">
                                                                                <select name="filter-1" id="filter-1"
                                                                                    bind="option"
                                                                                    class="ui-select filter-select">
                                                                                    <option value="">
                                                                                        Chọn
                                                                                        điều
                                                                                        kiện
                                                                                        lọc...
                                                                                    </option>
                                                                                    <option value="visibility">
                                                                                        Hiển
                                                                                        thị
                                                                                    </option>
                                                                                    <option value="hidden">
                                                                                        Ẩn
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
                                                                    <div class="next-input-wrapper--vertical-block">
                                                                        <button
                                                                            class="ui-button btn-slim add-filter filtering-complete"
                                                                            type="button"
                                                                            bind-event-click="submitFilter(this)"
                                                                            name="button">Lọc</button>
                                                                    </div>
                                                                </div>
                                                                <div bind-show="filterKey == 'collectionType'"
                                                                    class="hide">
                                                                    <div class="next-input-wrapper--half-spacing">
                                                                        <div class="next-input-wrapper">
                                                                            <label
                                                                                class="next-label helper--visually-hidden"
                                                                                for="filter-2">Chọn
                                                                                điều
                                                                                kiện
                                                                                lọc</label>
                                                                            <div class="ui-select__wrapper">
                                                                                <select name="filter-2" id="filter-2"
                                                                                    bind="option"
                                                                                    class="ui-select filter-select">
                                                                                    <option value="">
                                                                                        Chọn
                                                                                        điều
                                                                                        kiện
                                                                                        lọc...
                                                                                    </option>
                                                                                    <option value="smart">
                                                                                        Tự
                                                                                        động
                                                                                    </option>
                                                                                    <option value="custom">
                                                                                        Thường
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
                                                                    <div class="next-input-wrapper--vertical-block">
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
                            <div id="has--actions" data-tg-refresh-always="true" class=""></div>
                            <form action="/admin/collections" bind-event-submit="submitQuery()"
                                class="next-form next-form--full-width next-field--connected--no-border-radius"
                                method="get"> <label class="next-label helper--visually-hidden"
                                    for="query">Query</label>
                                <div class="next-input--stylized next-field--connected">
                                    <span class="next-input__add-on next-input__add-on--before">
                                        <svg class="next-icon next-icon--color-slate-lightest next-icon--size-16">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xlink:href="#next-search-reverse"></use>
                                        </svg>
                                    </span>
                                    <input type="text" name="query" id="query" placeholder="Tìm kiếm danh mục sản phẩm"
                                        bind="query" bind-event-input="submitQuery()" value=""
                                        class="next-input next-input--invisible">
                                </div>
                            </form>
                            <div id="saved-search-actions-next" class="saved-search-actions-next"
                                data-tg-refresh="saved-search-actions-next">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui-card__section has-bulk-actions collections" refresh="collections" id="collections-refresh">
            <div class="ui-type-container clearfix">
                <div class="table-wrapper"
                    define="{bulkActions: new Bizweb.BulkActions(this,{&quot;type&quot;:&quot;danh mục&quot;})}"
                    context="bulkActions">
                    <table id="price-rule-table" class="table-hover bulk-action-context expanded">
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
                                                    <span class="helper--visually-hidden">Select
                                                        all collections</span>
                                                </label>
                                                <input type="checkbox" name="bulk-actions__select-all"
                                                    id="bulk-actions__select-all"
                                                    bind-event-change="addOrRemoveAllBulkActionItems(this)"
                                                    class="next-checkbox js-no-dirty bulk-actions__select-all-checkbox all-bulk-action">
                                                <span class="next-checkbox--styled">
                                                    <svg class="next-icon next-icon--size-10 checkmark">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#next-checkmark-thick">
                                                        </use>
                                                    </svg>
                                                    <svg class="next-icon next-icon--size-10 indeterminate">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#next-minus">
                                                        </use>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="tooltip-container"
                                                bind-class="{'hide': selectedItems.length > 0}">
                                                <span class="tooltip-label">Chọn tất cả
                                                    danh mục</span>
                                            </div>
                                        </div>
                                        <div class="bulk-actions hide"
                                            bind-class="{'bulk-actions--is-visible': selectedItems.length > 0}"
                                            all-items="4" items-page="50" total-records="4" style="width: 1097px;">
                                            <ul class="bulk-actions__main-bar segmented">
                                                <li>
                                                    <a class="btn btn-slim btn-disabled btn--selection">
                                                        <span class="selection-count bulk-action-items-count"
                                                            selected-bulk-action-items="0">
                                                            <span><span class="hidden-xs">Đã
                                                                    chọn</span> <span
                                                                    class="display-bulk-action-items-count">1</span>
                                                                danh mục</span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="ui-popover__container">
                                                        <button
                                                            class="ui-button ui-button--size-small btn-dropdown-bulkaction"
                                                            id="btn-dropdown-bulkaction" type="button" name="button">
                                                            <span class="hidden-xs">Chọn
                                                                thao tác</span><span
                                                                class="hidden-lg hidden-md hidden-sm">Thao
                                                                tác</span> <svg class="next-icon next-icon--size-20"
                                                                id="svg-bulkaction">
                                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    xlink:href="#next-disclosure">
                                                                </use>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-menu margin-10 dropdown-bulkaction">
                                                            <div class="ui-popover__tooltip">
                                                            </div>
                                                            <div class="ui-popover__pane">
                                                                <ul class="next-list next-list--compact">
                                                                    <li><a class="next-list__item"
                                                                            href="javascript:void(0);"
                                                                            bind-event-click="publishItems()"
                                                                            define="{urlBulkActionPublish:'/admin/collections/bulkpublish'}">Hiển
                                                                            thị</a></li>
                                                                    <li><a class="next-list__item"
                                                                            href="javascript:void(0);"
                                                                            bind-event-click="unPublishItems()"
                                                                            define="{urlBulkActionUnPublish:'/admin/collections/bulkunpublish'}">Ẩn</a>
                                                                    </li>
                                                                    <li>
                                                                        <a define="{urlBulkActionDelete:'/admin/collections/bulkdelete'}"
                                                                            class="next-list__item"
                                                                            href="javascript:void(0);"
                                                                            bind-event-click="showDeleteItemsModal()">Xóa
                                                                            danh mục</a>
                                                                    </li>
                                                                </ul>
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
                                <th class="image"></th>
                                <th class="name">Danh mục</th>
                                <th class="conditions" style="width:25%"><span>Điều
                                        kiện</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category )
                            <tr class="">
                                <td class="select">
                                    <div class="next-input-wrapper">
                                        <label class="next-label helper--visually-hidden next-label--switch"
                                            for="collection_ids_2496772">Select
                                            collection, a</label>
                                        <input type="checkbox" name="collection_ids_2496772"
                                            bind-event-change="addOrRemoveBulkActionItem(2496772,this)"
                                            id="bulk-action-2496772" value="2496772"
                                            class="bulk-action-item next-checkbox">
                                        <span class="next-checkbox--styled"><svg
                                                class="next-icon next-icon--size-10 checkmark">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#next-checkmark-thick">
                                                </use>
                                            </svg></span>
                                    </div>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <a data-nested-link-target="true" 
                                        href="{{route('category.edit', $category->category_slug)}}">{{$category->category_name}}</a>
                                    <div>
                                    </div>
                                </td>
                                <td>
                                    <span>—</span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="t-grid-pager-boder">
                    <div class="t-pager t-reset clearfix fix-margin-pager">
                        <div class="col-md-6 col-lg-6 hidden-xs hidden-sm no-padding">
                            <div class="t-status-text dataTables_info">Hiển thị kết quả
                                từ 1 - 4 trên tổng 4 </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
