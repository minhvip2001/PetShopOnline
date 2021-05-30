@extends('admin.layouts.master')
@section('title')
{{$user->name}} {{$user->surname}}
@endsection
@section('content')
<main id="AppFrameMain" class="ui-app-frame__main">
    <div class="wrapper" id="wrapper">
        <div id="body" class="page-content clearfix" data-tg-refresh="body">
            <div id="content">

                <script type="text/javascript">
                    Page();
                </script>

                <div id="account-show">

                    <form class="edit_user" data-url="{{route('user.update', $user->id)}}" id="form-edit" method="post">
                        {{ csrf_field() }}
                        <header class="ui-title-bar-container">
                            <div class="ui-title-bar ui-title-bar--separator">
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
                                        <span class="ui-title-bar__icon"><svg
                                                class="next-icon next-icon--color-slate-lighter next-icon--size-20">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#next-account"></use>
                                            </svg></span>
                                        <h1 class="ui-title-bar__title">{{$user->name}} {{$user->surname}}</h1>
                                    </div>
                        <!-- Edit sucess -->
                        <?php if(session()->get('editsuccess')): ?>
                        <div class="ui-layout__section" id="load-content-success" style="margin-top: 5px">

                            <div class="ui-banner ui-banner--status-success hide-when-printing" tabindex="-1"
                                role="alert" data-notice-announced="true">
                                <div class="ui-banner__ribbon"><svg
                                        class="next-icon next-icon--size-20 next-icon--no-nudge">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#checkmark-circle">
                                        </use>
                                    </svg></div>
                                <div class="ui-banner__content">
                                    <h2 class="ui-banner__title type--breakall">{{session()->get('editsuccess')}} đã
                                        được chỉnh sửa.
                                    </h2>
                                    <div class="ui-type-container ui-type-container--spacing-tight">
                                        <p>
                                            <a data-allow-default="1" class="ui-button btn"
                                                href="{{route('user.create')}}">Thêm nhân viên khác</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            setTimeout(function () {
                                <?php session()->forget('editsuccess') ?>
                            }, 1000);
                        </script>
                        <?php endif ?>
                        <!-- Add sucess -->
                        <?php if(session()->get('success')): ?>
                        <div class="ui-layout__section" id="load-content-success" style="margin-top: 5px">

                            <div class="ui-banner ui-banner--status-success hide-when-printing" tabindex="-1"
                                role="alert" data-notice-announced="true">
                                <div class="ui-banner__ribbon"><svg
                                        class="next-icon next-icon--size-20 next-icon--no-nudge">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#checkmark-circle">
                                        </use>
                                    </svg></div>
                                <div class="ui-banner__content">
                                    <h2 class="ui-banner__title type--breakall">{{session()->get('success')}} đã được
                                        tạo.
                                    </h2>
                                    <div class="ui-type-container ui-type-container--spacing-tight">
                                        <p>
                                            <a data-allow-default="1" class="ui-button btn"
                                                href="{{route('user.create')}}">Thêm nhân viên khác</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            setTimeout(function () {
                                <?php session()->forget('success') ?>
                            }, 1000);
                        </script>
                        <?php endif ?>
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
                            <h2 class="ui-heading">Thông tin tài khoản</h2>
                        </div>
                        <div class="ui-annotated-section__description">
                            <p>Tất cả thông tin liên quan đến tài khoản.</p>
                        </div>
                    </div>
                    <div class="ui-annotated-section__content">
                        <section class="ui-card">
                            <header class="ui-card__header">
                                <h2 class="ui-heading">Hồ sơ nhân viên</h2>
                            </header>

                            <div class="ui-card__section">
                                <div class="ui-form__section">
                                    <div class="ui-form__group">
                                        <div class="next-input-wrapper">
                                            <label class="next-label" for="LastName">Họ</label>
                                            <input class="next-input" data-val="true"
                                                data-val-length="Họ của người dùng tối đa 50 ký tự"
                                                data-val-length-max="50" id="LastName" name="LastName"
                                                placeholder="Nhập Họ" type="text" value="{{$user->surname}}">
                                        </div>
                                        <div class="next-input-wrapper">
                                            <label class="next-label" for="FirstName">Tên</label>
                                            <input class="next-input" data-val="true"
                                                data-val-length="Tên của người dùng tối đa 50 ký tự"
                                                data-val-length-max="50" data-val-required="Nhập vào tên của người dùng"
                                                id="FirstName" name="FirstName" placeholder="Nhập Tên" type="text"
                                                value="{{$user->name}}">
                                        </div>
                                    </div>
                                    <div class="ui-form__group" define="{isChangeEmail: false}">
                                        <div class="next-input-wrapper">
                                            <label class="next-label" for="Email">Email</label>
                                            <div class="">
                                                <span>{{$user->email}}</span>
                                                <br>
                                                <a href="#" class="ui-button btn--link">Đổi email</a>
                                            </div>
                                            <div class="hide">
                                                <input class="next-input" data-val="true"
                                                    data-val-email="Email không đúng định dạng"
                                                    data-val-length="Địa chỉ email tối đa 128 ký tự"
                                                    data-val-length-max="128" id="Email" name="Email"
                                                    placeholder="Nhập Email" type="text" value="{{$user->email}}">
                                            </div>
                                        </div>
                                        <div class="next-input-wrapper">
                                            <label class="next-label" for="PhoneNumber">Điện thoại (Tùy
                                                chọn)</label>
                                            <input class="next-input" data-val="true"
                                                data-val-length="Số điện thoại tối đa 15 ký tự" data-val-length-max="15"
                                                data-val-phone="Số điện thoại không đúng định dạng" id="PhoneNumber"
                                                name="PhoneNumber" placeholder="Nhập Số điện thoại" type="text"
                                                value="0395445571">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="ui-card__section">
                                <div class="ui-type-container">
                                    <div class="ui-stack ui-stack--wrap ui-stack--vertical">
                                        <div class="ui-stack-item">
                                            <h3 class="ui-subheading">Chi tiết</h3>
                                        </div>
                                        <div class="ui-stack-item">
                                            <div class="ui-form__section">
                                                <div class="next-input-wrapper">
                                                    <label class="next-label" for="Url">Thông tin giới thiệu
                                                        (Tùy chọn)</label>
                                                    <textarea class="ui-text-area ui-text-area--resize-vertical"
                                                        cols="20" data-val="true"
                                                        data-val-length="Thông tin giới thiệu tối đa 255 ký tự"
                                                        data-val-length-max="255" id="Description" name="Description"
                                                        placeholder="Nhập Thông tin giới thiệu"
                                                        rows="2">Ngõ 466 Số nhà 152, Ngô Gia Tự, Phường Đức Giang, Quận Long Biên, Hà Nội</textarea>
                                                </div>
                                                <div class="next-input-wrapper">
                                                    <label class="next-label" for="Url">Trang chủ (Tùy
                                                        chọn)</label>
                                                    <input class="next-input" data-val="true"
                                                        data-val-length="Trang chủ tối đa 128 ký tự"
                                                        data-val-length-max="128" id="Url" name="Url"
                                                        placeholder="Nhập Trang chủ" type="text" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="ui-card__section">
                                <div class="ui-type-container">
                                    <div class="ui-stack ui-stack--wrap ui-stack--vertical">
                                        <div class="ui-stack-item">
                                            <h3 class="ui-subheading">Đổi mật khẩu</h3>
                                        </div>
                                        <div class="ui-stack-item">
                                            <p>Đổi mật khẩu mà bạn sử dụng để đăng nhập vào tài khoản
                                                1938.passionlink@gmail.com.</p>
                                        </div>
                                        <div class="ui-stack-item">
                                            <button type="button" class="ui-button hide"
                                                bind-show="!enterUserPassword.showPasswordChange"
                                                bind-event-click="enterUserPassword.expandPasswordChange()">Đổi
                                                mật khẩu</button>
                                            <input type="hidden" class="js-no-dirty" name="IsChangePassword"
                                                bind="enterUserPassword.showPasswordChange" value="true">
                                            <div class="ui-form__section"
                                                bind-show="enterUserPassword.showPasswordChange">
                                                <div class="ui-form__group"
                                                    bind-show="enterUserPassword.showPasswordChange">
                                                    <div class="next-input-wrapper">
                                                        <label class="next-label" for="NewPassword">Mật khẩu
                                                            mới</label>
                                                        <input autocomplete="new-password" class="next-input"
                                                            data-val="true"
                                                            data-val-length="Mật khẩu dài từ 6 đến 50 ký tự"
                                                            data-val-length-max="50" data-val-length-min="6"
                                                            id="NewPassword" name="NewPassword"
                                                            placeholder="Nhập Mật khẩu mới" type="password">
                                                    </div>
                                                    <div class="next-input-wrapper">
                                                        <label class="next-label" for="ConfirmPassword">Xác
                                                            nhận mật khẩu mới</label>
                                                        <input autocomplete="new-password" class="next-input"
                                                            id="ConfirmPassword" name="ConfirmPassword"
                                                            placeholder="Nhập lại Mật khẩu" type="password">
                                                    </div>
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
        
            <div class="ui-page-actions  ui-page-actions--has-secondary">
                <div class="ui-page-actions__container">
                    <div class="ui-page-actions__actions ui-page-actions__actions--secondary">
                        <div class="ui-page-actions__button-group">
                            <a class="btn btn-destroy">Xóa danh mục</a>
                        </div>
                    </div>
                    <div class="ui-page-actions__actions ui-page-actions__actions--primary">
                        <div class="ui-page-actions__button-group">
                            <button class="ui-button js-btn-loadable js-btn-primary btn-primary has-loading"
                                type="submit" name="button">Lưu</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
            <script>
                $(document).ready(function () {
                    $('#form-edit').submit(function (e) {
                        e.preventDefault();
                        var url = $(this).attr('data-url');
                        console.log($(this).serialize());

                        $.ajax({
                            type: 'post',
                            url: url,
                            data: $(this).serialize(),
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
                    Bạn có thể xem thêm hướng dẫn <a target="_blank" rel="noreferrer noopener" title="Hướng dẫn"
                        href="https://support.sapo.vn/tai-khoan-cua-ban">tại đây</a>
                </div>
            </div>
        </div>

        <script>
            function getPassword2fa() {
                const password = document.getElementById("password").value;
                const id = setInterval(() => {
                    const passHiden = document.getElementById("confirm_2fa_password");
                    if (passHiden) {
                        passHiden.value = password;
                        clearInterval(id);
                    }
                }, 1000);
            }
        </script>
    </div>
    </div>
    </div>
</main>
@endsection