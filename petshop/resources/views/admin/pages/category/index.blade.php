@extends('admin.layouts.master')
@section('title')
Danh mục
@endsection
@section('content')
<main id="AppFrameMain" class="ui-app-frame__main">
    <div class="wrapper" id="wrapper">
        <div id="body" class="page-content clearfix" data-tg-refresh="body">
            <div id="content">
                <style type="text/css">
                    .note {
                        list-style: outside none none;
                        color: #798c9c;
                        font-weight: normal;
                        text-transform: none;
                        padding-bottom: 3px;
                    }

                    .unstyled {
                        padding: 0;
                        margin: 0;
                    }
                </style>
                <script type="text/javascript">
                    Page();
                </script>
                <div class="modal" data-tg-refresh="modal" id="modal_container" style="display: none;"
                    aria-hidden="true" aria-labelledby="ModalTitle" tabindex="-1"></div>
                <div class="modal-bg" data-tg-refresh="modal" id="modal_backdrop"></div>
                <form id="frmFilter" method="get">
                    <input type="hidden" name="Query" value="">

                </form>
                <form id="frmBulkActions" method="get"><input type="hidden" name="SelectedAll" value="false"></form>
                <div id="pages-index" class="page default has-contextual-help discounts-page">
                    <header class="ui-title-bar-container   ui-title-bar-container--full-width">
                        <div class="ui-title-bar ">
                            <div class="ui-title-bar__navigation">
                                <div class="ui-breadcrumbs">
                                    <a href="/admin/products" class="ui-button ui-button--transparent ui-breadcrumb">
                                        <svg class="next-icon next-icon--size-20 next-icon--no-nudge">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xlink:href="#chevron-left-thinner"></use>
                                        </svg>
                                        <span class="ui-breadcrumb__item">Sản phẩm</span>
                                    </a>
                                </div>
                            </div>
                            <div class="ui-title-bar__main-group">
                                <div class="ui-title-bar__heading-group">
                                    <span class="ui-title-bar__icon">
                                        <svg class="next-icon next-icon--color-slate-lighter next-icon--size-20">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xlink:href="#next-discounts"></use>
                                        </svg>
                                    </span>
                                    <h1 class="ui-title-bar__title">Danh mục</h1>
                                </div>
                                <div class="action-bar" define="{titleBarActions: new Bizweb.TitleBarActions(this)}">
                                    <div class="action-bar__item action-bar__item--link-container">
                                        <div class="action-bar__more action-bar__more--has-many hide">
                                            <div class="ui-popover__container">
                                                <button class="ui-button ui-button--transparent" type="button"
                                                    name="button">
                                                    <span data-singular-label="Chọn thao tác"
                                                        data-multiple-label="Chọn thao tác"
                                                        class="action-bar__more-label">Chọn thao tác</span>
                                                    <svg class="next-icon next-icon--size-20">
                                                        <use xlink:href="#next-disclosure"></use>
                                                    </svg>
                                                </button>
                                                <div class="ui-popover ui-popover--align-edge">
                                                    <div class="ui-popover__tooltip"></div>
                                                    <div class="ui-popover__content-wrapper">
                                                        <div class="ui-popover__content">
                                                            <div class="ui-popover__pane">
                                                                <ul class="action-bar__popover-wrapper">

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
                                            <a href="{{route('category.create')}}"
                                                class="ui-button ui-button--primary ui-title-bar__action">Tạo danh
                                                mục</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ui-title-bar__actions-group">
                                <div class="ui-title-bar__actions">
                                    <a href="{{route('category.create')}"
                                        class="ui-button ui-button--primary ui-title-bar__action">Tạo danh mục</a>
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
                                @include('admin.components.category.index')
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
                                            Bạn có thể xem thêm hướng dẫn về quản lý danh mục sản phẩm <a
                                                target="_blank" rel="noreferrer noopener"
                                                title="quản lý danh mục sản phẩm"
                                                href="https://support.sapo.vn/tim-hieu-ve-danh-muc-san-pham">tại đây</a>
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