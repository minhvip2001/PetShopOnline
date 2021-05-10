@extends('admin.layouts.master')
@section('title')
Thêm mới danh mục
@endsection
@section('content')
<main id="AppFrameMain" class="ui-app-frame__main">
    <div class="wrapper" id="wrapper">
        <div id="body" class="page-content clearfix" data-tg-refresh="body">
            <div id="content">
                <div class="editCollection">
                    <div class="modal" data-tg-refresh="modal" id="modal_container" style="display: none;"
                        aria-hidden="true" aria-labelledby="ModalTitle" tabindex="-1"></div>
                    <div class="modal-bg" data-tg-refresh="modal" id="modal_backdrop" tabindex="-1"></div>
                    @include('admin.components.category.add')
                </div>
                <div class="modal" data-tg-refresh="modal" id="modal_container" style="display: none;"
                    aria-hidden="true" aria-labelledby="ModalTitle" tabindex="-1"></div>
                <div class="modal-bg" data-tg-refresh="modal" id="modal_backdrop"></div>
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
                                <a rel="noreferrer noopener" target="_blank"
                                    href="https://support.sapo.vn/tao-danh-muc-san-pham-thu-cong">tại đây</a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
@endsection