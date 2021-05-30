@extends('admin.layouts.master')
@section('title')
Thêm mới
@endsection
@section('content')
<main id="AppFrameMain" class="ui-app-frame__main">
    <div class="wrapper" id="wrapper">
        <div id="body" class="page-content clearfix" data-tg-refresh="body">
            <div id="content">
                <script type="text/javascript">
                    Page();
                </script>
                <div class="page" id="users-new">
                    <form data-url="{{route('user.store')}}" autocomplete="off" class="new_user"
                       
                        define="{ form: new Bizweb.Forms(this, { disabledUntilDirty: true, disableContextBar: false }) }"
                        id="form-add" method="post" data-context-create-name="Tài khoản">
                        <!-- Token -->
                        {{ csrf_field() }}
                        <header class="ui-title-bar-container">
                            <div class="ui-title-bar">
                                <div class="ui-title-bar__navigation">
                                    <div class="ui-breadcrumbs">
                                        <a href="{{route('user.list')}}"
                                            class="ui-button ui-button--transparent ui-breadcrumb">
                                            <svg class="next-icon next-icon--size-20 next-icon--no-nudge">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#chevron-left-thinner"></use>
                                            </svg>
                                            <span class="ui-breadcrumb__item">Nhân viên</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="ui-title-bar__main-group">
                                    <div class="ui-title-bar__heading-group">
                                        <span class="ui-title-bar__icon">
                                            <svg class="next-icon next-icon--color-slate-lighter next-icon--size-20">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#next-account"></use>
                                            </svg>
                                        </span>
                                        <h1 class="ui-title-bar__title">Thêm tài khoản quản trị</h1>
                                    </div>
                                    <div data-define="{titleBarActions: new Bizweb.TitleBarActions(this)}"
                                        class="action-bar">
                                        <div class="ui-title-bar__mobile-primary-actions">
                                            <div class="ui-title-bar__actions">
                                                <button class="ui-button ui-button--primary js-btn-primary btn-primary"
                                                    type="submit" name="button" disabled="disabled">Lưu</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ui-title-bar__actions-group hide">
                                    <div class="ui-title-bar__actions">
                                        <button class="ui-button ui-button--primary js-btn-primary btn-primary"
                                            type="submit" name="button" disabled="disabled">Lưu</button>
                                    </div>
                                </div>
                            </div>
                            <div class="collapsible-header">
                                <div class="collapsible-header__heading"></div>
                            </div>
                        </header>

                        <section class="ui-annotated-section-container">
                            <div class="ui-annotated-section">
                                <div class="ui-annotated-section__annotation">
                                    <div class="ui-annotated-section__title">
                                        <h2 class="ui-heading">Tài khoản quản trị</h2>
                                    </div>
                                    <div class="ui-annotated-section__description">
                                        <p>Tất cả thông tin liên quan đến tài khoản, bao gồm cả Quyền truy cập các tính
                                            năng trong trang quản trị.</p>
                                    </div>
                                </div>
                                <div class="ui-annotated-section__content">
                                    <section class="ui-card">
                                        <div class="ui-card__section">
                                            <div class="ui-type-container">
                                                <div class="ui-form__section">
                                                    <div class="ui-form__group">
                                                        <div class="next-input-wrapper">
                                                            <label class="next-label" for="LastName">Họ</label>
                                                            <input class="next-input" size="50" type="text"
                                                                name="LastName" placeholder="Nhập Họ"
                                                                id="user_last_name" maxlength="50">
                                                        </div>
                                                        <div class="next-input-wrapper">
                                                            <label class="next-label" for="FirstName">Tên</label>
                                                            <input class="next-input" size="50" type="text"
                                                                name="FirstName" placeholder="Nhập Tên"
                                                                id="user_first_name" maxlength="50" required="">
                                                        </div>
                                                    </div>
                                                    <div class="ui-form__group">
                                                        <div class="next-input-wrapper">
                                                            <label class="next-label" for="Email">
                                                                Email
                                                            </label>
                                                            <input class="next-input" size="128" type="email"
                                                                name="Email" placeholder="Nhập Email" id="user_email"
                                                                maxlength="128" required="">
                                                        </div>
                                                        <div class="next-input-wrapper">
                                                            <label class="next-label" for="PhoneNumber">Điện thoại <span
                                                                    class="text-muted">(tùy chọn)</span></label>
                                                            <input class="next-input" size="15" type="text"
                                                                name="PhoneNumber" placeholder="Nhập Số điện thoại"
                                                                id="user_phone_number" maxlength="15">


                                                        </div>
                                                    </div>
                                                    <div class="ui-form__group">
                                                        <div class="next-input-wrapper">
                                                            <label class="next-label" for="Password">Mật khẩu</label>
                                                            <input class="next-input" size="50" type="password" value=""
                                                                name="Password" placeholder="Nhập Mật khẩu"
                                                                id="user_password" minlength="6" maxlength="50"
                                                                required="">
                                                        </div>
                                                        <div class="next-input-wrapper">
                                                            <label class="next-label" for="ConfirmPassword">Xác nhận mật
                                                                khẩu</label>
                                                            <input class="next-input" size="50" type="password" value=""
                                                                name="ConfirmPassword" placeholder="Nhập lại Mật khẩu"
                                                                id="user_confirm_password" minlength="6" maxlength="50"
                                                                required="">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="ui-card__section">
                                            <div class="ui-type-container">
                                                <div class="ui-form__section">
                                                    <div class="ui-form__element">
                                                        <div class="next-input-wrapper">
                                                            <label class="next-label next-label--switch">
                                                                <input bind="isLimitAccess" class="next-checkbox"
                                                                    id="LimitedAccess" name="LimitedAccess"
                                                                    type="checkbox" value="true">
                                                                <span class="next-checkbox--styled">
                                                                    <svg class="next-icon next-icon--size-10 checkmark">
                                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            xlink:href="#next-checkmark-thick"></use>
                                                                    </svg>
                                                                </span>
                                                                Giới hạn quyền truy cập
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="ui-form__element hide" data-bind-show="isLimitAccess">
                                                        <strong>Chọn các chức năng tài khoản này có thể sử
                                                            dụng.</strong>
                                                    </div>
                                                    <style>
                                                        .select2-container .select2-selection--multiple {
                                                            height: 40px;
                                                        }

                                                        .select2-selection__rendered {
                                                            padding: 0px 10px !important;
                                                        }

                                                        .select2-search__field {
                                                            width: 178px !important;
                                                        }

                                                        .select2-selection__choice {
                                                            background-color: yellow !important;
                                                        }
                                                    </style>
                                                    <div class="ui-form__element hide" data-bind-show="isLimitAccess" style="width:50%">
                                                        <div class="next-input-wrapper">
                                                        <label class="next-label">Vai trò</label>
                                                        <select name="role_id[]" class="next-input select-all"
                                                        multiple="multiple">
                                                        <option value="">Nhập danh mục</option>
                                                        @foreach($roles as $role)
                                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                                        @endforeach
                                                        </select>
                                                        </div>
                                                    </div>
                                                    <script>
                                                        $(document).ready(function () {

                                                            $(".select-all").select2(
                                                                {
                                                                    placeholder: "Nhập danh mục",
                                                                }
                                                            );

                                                        });

                                                    </script>

                                                    <div class="ui-form__group hide" data-bind-show="isLimitAccess">
                                                        <div class="ui-form__element">
                                                            <div class="ui-form__element">
                                                                <fieldset class="ui-choice-list">
                                                                    <legend class="ui-choice-list__title">Cửa hàng
                                                                    </legend>
                                                                    <ul>
                                                                        <li>
                                                                            <div class="next-input-wrapper">
                                                                                <label
                                                                                    class="next-label next-label--switch">
                                                                                    <input class="next-checkbox"
                                                                                        type="checkbox"
                                                                                        name="permissions"
                                                                                        value="dashboard">
                                                                                    <span class="next-checkbox--styled">
                                                                                        <svg
                                                                                            class="next-icon next-icon--size-10 checkmark">
                                                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                xlink:href="#next-checkmark-thick">
                                                                                            </use>
                                                                                        </svg>
                                                                                    </span>
                                                                                    Tổng quan
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="next-input-wrapper">
                                                                                <label
                                                                                    class="next-label next-label--switch">
                                                                                    <input class="next-checkbox"
                                                                                        type="checkbox"
                                                                                        name="permissions"
                                                                                        value="products">
                                                                                    <span class="next-checkbox--styled">
                                                                                        <svg
                                                                                            class="next-icon next-icon--size-10 checkmark">
                                                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                xlink:href="#next-checkmark-thick">
                                                                                            </use>
                                                                                        </svg>
                                                                                    </span>
                                                                                    Sản phẩm, danh mục và kho hàng
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="next-input-wrapper">
                                                                                <label
                                                                                    class="next-label next-label--switch">
                                                                                    <input class="next-checkbox"
                                                                                        type="checkbox"
                                                                                        name="permissions"
                                                                                        value="orders">
                                                                                    <span class="next-checkbox--styled">
                                                                                        <svg
                                                                                            class="next-icon next-icon--size-10 checkmark">
                                                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                xlink:href="#next-checkmark-thick">
                                                                                            </use>
                                                                                        </svg>
                                                                                    </span>
                                                                                    Đơn hàng
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="next-input-wrapper">
                                                                                <label
                                                                                    class="next-label next-label--switch">
                                                                                    <input class="next-checkbox"
                                                                                        type="checkbox"
                                                                                        name="permissions"
                                                                                        value="draft_orders">
                                                                                    <span class="next-checkbox--styled">
                                                                                        <svg
                                                                                            class="next-icon next-icon--size-10 checkmark">
                                                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                xlink:href="#next-checkmark-thick">
                                                                                            </use>
                                                                                        </svg>
                                                                                    </span>
                                                                                    Đơn hàng nháp
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="next-input-wrapper">
                                                                                <label
                                                                                    class="next-label next-label--switch">
                                                                                    <input class="next-checkbox"
                                                                                        type="checkbox"
                                                                                        name="permissions"
                                                                                        value="customers">
                                                                                    <span class="next-checkbox--styled">
                                                                                        <svg
                                                                                            class="next-icon next-icon--size-10 checkmark">
                                                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                xlink:href="#next-checkmark-thick">
                                                                                            </use>
                                                                                        </svg>
                                                                                    </span>
                                                                                    Khách hàng
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="next-input-wrapper">
                                                                                <label
                                                                                    class="next-label next-label--switch">
                                                                                    <input class="next-checkbox"
                                                                                        type="checkbox"
                                                                                        name="permissions"
                                                                                        value="marketing">
                                                                                    <span class="next-checkbox--styled">
                                                                                        <svg
                                                                                            class="next-icon next-icon--size-10 checkmark">
                                                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                xlink:href="#next-checkmark-thick">
                                                                                            </use>
                                                                                        </svg>
                                                                                    </span>
                                                                                    Khuyến mãi
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="next-input-wrapper">
                                                                                <label
                                                                                    class="next-label next-label--switch">
                                                                                    <input class="next-checkbox"
                                                                                        type="checkbox"
                                                                                        name="permissions"
                                                                                        value="reports">
                                                                                    <span class="next-checkbox--styled">
                                                                                        <svg
                                                                                            class="next-icon next-icon--size-10 checkmark">
                                                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                xlink:href="#next-checkmark-thick">
                                                                                            </use>
                                                                                        </svg>
                                                                                    </span>
                                                                                    Báo cáo
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                        <div class="ui-form__element">
                                                            <div class="ui-form__element">
                                                                <fieldset class="ui-choice-list">
                                                                    <legend class="ui-choice-list__title">Nội dung
                                                                    </legend>
                                                                    <ul>
                                                                        <li>
                                                                            <div class="next-input-wrapper">
                                                                                <label
                                                                                    class="next-label next-label--switch">
                                                                                    <input class="next-checkbox"
                                                                                        type="checkbox"
                                                                                        name="permissions"
                                                                                        value="pages">
                                                                                    <span class="next-checkbox--styled">
                                                                                        <svg
                                                                                            class="next-icon next-icon--size-10 checkmark">
                                                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                xlink:href="#next-checkmark-thick">
                                                                                            </use>
                                                                                        </svg>
                                                                                    </span>
                                                                                    Blog và trang nội dung
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="next-input-wrapper">
                                                                                <label
                                                                                    class="next-label next-label--switch">
                                                                                    <input class="next-checkbox"
                                                                                        type="checkbox"
                                                                                        name="permissions"
                                                                                        value="links">
                                                                                    <span class="next-checkbox--styled">
                                                                                        <svg
                                                                                            class="next-icon next-icon--size-10 checkmark">
                                                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                xlink:href="#next-checkmark-thick">
                                                                                            </use>
                                                                                        </svg>
                                                                                    </span>
                                                                                    Menu
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="next-input-wrapper">
                                                                                <label
                                                                                    class="next-label next-label--switch">
                                                                                    <input class="next-checkbox"
                                                                                        type="checkbox"
                                                                                        name="permissions"
                                                                                        value="themes">
                                                                                    <span class="next-checkbox--styled">
                                                                                        <svg
                                                                                            class="next-icon next-icon--size-10 checkmark">
                                                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                xlink:href="#next-checkmark-thick">
                                                                                            </use>
                                                                                        </svg>
                                                                                    </span>
                                                                                    Giao diện
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </fieldset>
                                                            </div>
                                                            <div class="ui-form__element">
                                                                <fieldset class="ui-choice-list">
                                                                    <legend class="ui-choice-list__title">Cấu hình
                                                                    </legend>
                                                                    <ul>
                                                                        <li>
                                                                            <div class="next-input-wrapper">
                                                                                <label
                                                                                    class="next-label next-label--switch">
                                                                                    <input class="next-checkbox"
                                                                                        type="checkbox"
                                                                                        name="permissions"
                                                                                        value="applications">
                                                                                    <span class="next-checkbox--styled">
                                                                                        <svg
                                                                                            class="next-icon next-icon--size-10 checkmark">
                                                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                xlink:href="#next-checkmark-thick">
                                                                                            </use>
                                                                                        </svg>
                                                                                    </span>
                                                                                    Quản lý ứng dụng
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="next-input-wrapper">
                                                                                <label
                                                                                    class="next-label next-label--switch">
                                                                                    <input class="next-checkbox"
                                                                                        type="checkbox"
                                                                                        name="permissions"
                                                                                        value="preferences">
                                                                                    <span class="next-checkbox--styled">
                                                                                        <svg
                                                                                            class="next-icon next-icon--size-10 checkmark">
                                                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                xlink:href="#next-checkmark-thick">
                                                                                            </use>
                                                                                        </svg>
                                                                                    </span>
                                                                                    Cấu hình hệ thống
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="next-input-wrapper">
                                                                                <label
                                                                                    class="next-label next-label--switch">
                                                                                    <input class="next-checkbox"
                                                                                        type="checkbox"
                                                                                        name="permissions"
                                                                                        value="domains">
                                                                                    <span class="next-checkbox--styled">
                                                                                        <svg
                                                                                            class="next-icon next-icon--size-10 checkmark">
                                                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                xlink:href="#next-checkmark-thick">
                                                                                            </use>
                                                                                        </svg>
                                                                                    </span>
                                                                                    Tên miền
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </section>

                        <div class="ui-page-actions">
                            <div class="ui-page-actions__container">
                                <div class="ui-page-actions__actions ui-page-actions__actions--primary">
                                    <div class="ui-page-actions__button-group">
                                        <a href="/admin/settings/account" class="ui-button">Hủy</a>
                                        <button class="ui-button ui-button--primary js-btn-primary btn-primary"
                                            type="submit" name="commit" disabled="disabled">Lưu</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <script>
                        $(document).ready(function () {
                            $('#form-add').submit(function (e) {
                                e.preventDefault();
                                var formData = new FormData(jQuery('#form-add')[0])
                                // console.log(formData)
                                var url = $(this).attr('data-url');
                                $.ajax({
                                    type: 'post',
                                    url: url,
                                    data: formData,
                                    contentType: false,
                                    processData: false,
                                    dataType: 'JSON',
                                    success: function (respone) {
                                        if (respone) {
                                            var url = '{{route ("user.edit", ":user_slug")}}';
                                            url = url.replace(':user_slug', respone.user_slug);
                                            window.location.href = url

                                           
                                        }

                                    },
                                    error: function (jqXHR, textStatus, errorThrown) {

                                    }
                                })
                            })

                        })
                    </script>
                    <div class="ui-footer-help">
                        <div class="ui-footer-help__content">
                            <div class="ui-footer-help__icon">
                                <svg class="next-icon next-icon--size-24 next-icon--no-nudge" role="img"
                                    aria-labelledby="next-help-circle-title">
                                    <title id="next-help-circle-title">Help</title>
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#next-help-circle">
                                    </use>
                                </svg>
                            </div>
                            <div>
                                Bạn có thể xem thêm hướng dẫn <a target="_blank" rel="noreferrer noopener"
                                    title="Hướng dẫn" href="https://support.sapo.vn/them-va-xoa-tai-khoan-nhan-vien">tại
                                    đây</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection