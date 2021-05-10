@extends('admin.layouts.master')
@section('title')
Dành cho chó
@endsection
@section('content')
<main id="AppFrameMain" class="ui-app-frame__main">
    <div class="wrapper" id="wrapper">
        <div id="body" class="page-content clearfix" data-tg-refresh="body">
            <div id="content">
                <form id="frmAction" method="post">
                    <input type="hidden" name="AuthenticityToken"
                        value="Dj8aCGHm33kRtk0wsdAdTvOnGVrQud87O59sJg9UZcKYldCnll/IvCaIhKt+SBdPUUokfnaj6TEDoQAvBNnphw==">
                    <input type="hidden" name="returnUrl" value="http://127.0.0.1:8000/admin/categories/thu-cung-1">
                    <input type="hidden" name="id" value="">
                </form>
                <div class="editCollection">
                    <div class="modal" data-tg-refresh="modal" id="modal_container" style="display: none;"
                        aria-hidden="true" aria-labelledby="ModalTitle" tabindex="-1"></div>
                    <div class="modal-bg" data-tg-refresh="modal" id="modal_backdrop"></div>
                    @include('admin.components.category.edit')
                </div>
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
                                    href="https://support.sapo.vn/chinh-sua-danh-muc-sapo-web">tại đây</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection