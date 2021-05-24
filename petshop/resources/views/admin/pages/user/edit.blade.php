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

                <div id="account-show">
                    <div class="modal" data-tg-refresh="modal" id="modal_container" style="display: none;"
                        aria-hidden="true" aria-labelledby="ModalTitle" tabindex="-1"></div>
                    <div class="modal-bg" data-tg-refresh="modal" id="modal_backdrop"></div>
                    <form class="edit_user"
                        data-context-bar-primary-attributes="{&quot;data-bind-event-click&quot;:&quot;enterUserPassword.showOrSubmitModal('False','False')&quot;,&quot;data-disable-submit&quot;:&quot;true&quot;}"
                        data-tg-refresh="user-form"
                        define="{ form: new Bizweb.UserFormNoImage(this, {disabledUntilDirty: true, alertUnsavedChanges: true}), enterUserPassword: new Bizweb.EnterUserPassword(this, enterPasswordModal), passwordRequired: false }"
                        id="edit_user_430766" method="post"><input type="hidden" name="AuthenticityToken"
                            value="Dj8aCGHm33kRtk0wsdAdTo04XQmD6xYcrNTeUqr8feDs4REcAxgdS2EwXogTVYYV5m1RGZ9LNSxdhbrofPY6zw==">
                        <input type="hidden" name="currentPassword" id="user_current_password">
                        <input type="hidden" name="revokeMobileAccessTokens" value="false"
                            id="user_revoke_mobile_access_tokens">
                        <input id="NoPass" name="NoPass" type="hidden" value="False">
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
                                        <h1 class="ui-title-bar__title">Bình Minh</h1>
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
                                                            placeholder="Nhập Họ" type="text" value="Bình">
                                                    </div>
                                                    <div class="next-input-wrapper">
                                                        <label class="next-label" for="FirstName">Tên</label>
                                                        <input class="next-input" data-val="true"
                                                            data-val-length="Tên của người dùng tối đa 50 ký tự"
                                                            data-val-length-max="50"
                                                            data-val-required="Nhập vào tên của người dùng"
                                                            id="FirstName" name="FirstName" placeholder="Nhập Tên"
                                                            type="text" value="Minh">
                                                    </div>
                                                </div>
                                                <div class="ui-form__group" define="{isChangeEmail: false}">
                                                    <div class="next-input-wrapper">
                                                        <label class="next-label" for="Email">Email</label>
                                                        <div class="">
                                                            <span>minh@gmail.com</span>
                                                            <br>
                                                            <a href="#" class="ui-button btn--link">Đổi email</a>
                                                        </div>
                                                        <div class="hide">
                                                            <input class="next-input" data-val="true"
                                                                data-val-email="Email không đúng định dạng"
                                                                data-val-length="Địa chỉ email tối đa 128 ký tự"
                                                                data-val-length-max="128" id="Email" name="Email"
                                                                placeholder="Nhập Email" type="text"
                                                                value="minh@gmail.com">
                                                        </div>
                                                    </div>
                                                    <div class="next-input-wrapper">
                                                        <label class="next-label" for="PhoneNumber">Điện thoại (Tùy
                                                            chọn)</label>
                                                        <input class="next-input" data-val="true"
                                                            data-val-length="Số điện thoại tối đa 15 ký tự"
                                                            data-val-length-max="15"
                                                            data-val-phone="Số điện thoại không đúng định dạng"
                                                            id="PhoneNumber" name="PhoneNumber"
                                                            placeholder="Nhập Số điện thoại" type="text"
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
                                                                <textarea
                                                                    class="ui-text-area ui-text-area--resize-vertical"
                                                                    cols="20" data-val="true"
                                                                    data-val-length="Thông tin giới thiệu tối đa 255 ký tự"
                                                                    data-val-length-max="255" id="Description"
                                                                    name="Description"
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
                                                                    <input autocomplete="new-password"
                                                                        class="next-input" data-val="true"
                                                                        data-val-length="Mật khẩu dài từ 6 đến 50 ký tự"
                                                                        data-val-length-max="50" data-val-length-min="6"
                                                                        id="NewPassword" name="NewPassword"
                                                                        placeholder="Nhập Mật khẩu mới" type="password">
                                                                </div>
                                                                <div class="next-input-wrapper">
                                                                    <label class="next-label" for="ConfirmPassword">Xác
                                                                        nhận mật khẩu mới</label>
                                                                    <input autocomplete="new-password"
                                                                        class="next-input" id="ConfirmPassword"
                                                                        name="ConfirmPassword"
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
                        <section class="ui-annotated-section-container">
                            <div class="ui-annotated-section">
                                <div class="ui-annotated-section__annotation">
                                    <div class="ui-annotated-section__title">
                                        <h2 class="ui-heading">Lịch sử đăng nhập</h2>
                                    </div>
                                    <div class="ui-annotated-section__description">
                                        <p>Truy cập từ ISP, địa điểm hoặc địa chỉ IP lạ có thể cho thấy tài khoản có thể
                                            bị xâm nhập và cần được xem xét thêm.</p>
                                    </div>
                                </div>
                                <div class="ui-annotated-section__content">
                                    <section class="ui-card">
                                        <div class="ui-card__section">
                                            <div class="table-wrapper">
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Ngày đăng nhập</th>
                                                            <th>IP</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>25/04/2021 13:08:26</td>
                                                            <td>100.103.177.198</td>
                                                            <td>
                                                                <div class="tooltip tooltip-right tooltip--no-decoration"
                                                                    data-placement="top">
                                                                    <svg class="next-icon next-icon--size-16"
                                                                        id="ui-popover-activator--2"
                                                                        aria-expanded="false" aria-haspopup="true"
                                                                        aria-owns="ui-popover--2"
                                                                        aria-controls="ui-popover--2">
                                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            xlink:href="#next-help-circle"></use>
                                                                    </svg>
                                                                    <div
                                                                        class="tooltip-container tooltip-right--inverse-arrow">
                                                                        <span class="tooltip-label">
                                                                            Chrome 90 trên Windows
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>25/04/2021 00:43:38</td>
                                                            <td>100.103.177.198</td>
                                                            <td>
                                                                <div class="tooltip tooltip-right tooltip--no-decoration"
                                                                    data-placement="top">
                                                                    <svg class="next-icon next-icon--size-16"
                                                                        id="ui-popover-activator--2"
                                                                        aria-expanded="false" aria-haspopup="true"
                                                                        aria-owns="ui-popover--2"
                                                                        aria-controls="ui-popover--2">
                                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            xlink:href="#next-help-circle"></use>
                                                                    </svg>
                                                                    <div
                                                                        class="tooltip-container tooltip-right--inverse-arrow">
                                                                        <span class="tooltip-label">
                                                                            Chrome 90 trên Windows
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>24/04/2021 15:51:11</td>
                                                            <td>118.70.120.235</td>
                                                            <td>
                                                                <div class="tooltip tooltip-right tooltip--no-decoration"
                                                                    data-placement="top">
                                                                    <svg class="next-icon next-icon--size-16"
                                                                        id="ui-popover-activator--2"
                                                                        aria-expanded="false" aria-haspopup="true"
                                                                        aria-owns="ui-popover--2"
                                                                        aria-controls="ui-popover--2">
                                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            xlink:href="#next-help-circle"></use>
                                                                    </svg>
                                                                    <div
                                                                        class="tooltip-container tooltip-right--inverse-arrow">
                                                                        <span class="tooltip-label">
                                                                            Chrome 89 trên Windows
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>23/04/2021 22:13:49</td>
                                                            <td>100.103.177.198</td>
                                                            <td>
                                                                <div class="tooltip tooltip-right tooltip--no-decoration"
                                                                    data-placement="top">
                                                                    <svg class="next-icon next-icon--size-16"
                                                                        id="ui-popover-activator--2"
                                                                        aria-expanded="false" aria-haspopup="true"
                                                                        aria-owns="ui-popover--2"
                                                                        aria-controls="ui-popover--2">
                                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            xlink:href="#next-help-circle"></use>
                                                                    </svg>
                                                                    <div
                                                                        class="tooltip-container tooltip-right--inverse-arrow">
                                                                        <span class="tooltip-label">
                                                                            Chrome 89 trên Windows
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>22/04/2021 18:53:58</td>
                                                            <td>100.103.177.198</td>
                                                            <td>
                                                                <div class="tooltip tooltip-right tooltip--no-decoration"
                                                                    data-placement="top">
                                                                    <svg class="next-icon next-icon--size-16"
                                                                        id="ui-popover-activator--2"
                                                                        aria-expanded="false" aria-haspopup="true"
                                                                        aria-owns="ui-popover--2"
                                                                        aria-controls="ui-popover--2">
                                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            xlink:href="#next-help-circle"></use>
                                                                    </svg>
                                                                    <div
                                                                        class="tooltip-container tooltip-right--inverse-arrow">
                                                                        <span class="tooltip-label">
                                                                            Chrome 89 trên Windows
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>22/04/2021 14:35:59</td>
                                                            <td>118.70.120.235</td>
                                                            <td>
                                                                <div class="tooltip tooltip-right tooltip--no-decoration"
                                                                    data-placement="top">
                                                                    <svg class="next-icon next-icon--size-16"
                                                                        id="ui-popover-activator--2"
                                                                        aria-expanded="false" aria-haspopup="true"
                                                                        aria-owns="ui-popover--2"
                                                                        aria-controls="ui-popover--2">
                                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            xlink:href="#next-help-circle"></use>
                                                                    </svg>
                                                                    <div
                                                                        class="tooltip-container tooltip-right--inverse-arrow">
                                                                        <span class="tooltip-label">
                                                                            Chrome 89 trên Windows
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>22/04/2021 10:49:17</td>
                                                            <td>100.103.177.198</td>
                                                            <td>
                                                                <div class="tooltip tooltip-right tooltip--no-decoration"
                                                                    data-placement="top">
                                                                    <svg class="next-icon next-icon--size-16"
                                                                        id="ui-popover-activator--2"
                                                                        aria-expanded="false" aria-haspopup="true"
                                                                        aria-owns="ui-popover--2"
                                                                        aria-controls="ui-popover--2">
                                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            xlink:href="#next-help-circle"></use>
                                                                    </svg>
                                                                    <div
                                                                        class="tooltip-container tooltip-right--inverse-arrow">
                                                                        <span class="tooltip-label">
                                                                            Chrome 89 trên Windows
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>21/04/2021 20:51:09</td>
                                                            <td>100.116.29.121</td>
                                                            <td>
                                                                <div class="tooltip tooltip-right tooltip--no-decoration"
                                                                    data-placement="top">
                                                                    <svg class="next-icon next-icon--size-16"
                                                                        id="ui-popover-activator--2"
                                                                        aria-expanded="false" aria-haspopup="true"
                                                                        aria-owns="ui-popover--2"
                                                                        aria-controls="ui-popover--2">
                                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            xlink:href="#next-help-circle"></use>
                                                                    </svg>
                                                                    <div
                                                                        class="tooltip-container tooltip-right--inverse-arrow">
                                                                        <span class="tooltip-label">
                                                                            Chrome 89 trên Windows
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>21/04/2021 15:17:05</td>
                                                            <td>100.116.29.121</td>
                                                            <td>
                                                                <div class="tooltip tooltip-right tooltip--no-decoration"
                                                                    data-placement="top">
                                                                    <svg class="next-icon next-icon--size-16"
                                                                        id="ui-popover-activator--2"
                                                                        aria-expanded="false" aria-haspopup="true"
                                                                        aria-owns="ui-popover--2"
                                                                        aria-controls="ui-popover--2">
                                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            xlink:href="#next-help-circle"></use>
                                                                    </svg>
                                                                    <div
                                                                        class="tooltip-container tooltip-right--inverse-arrow">
                                                                        <span class="tooltip-label">
                                                                            Chrome 89 trên Windows
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>21/04/2021 03:07:17</td>
                                                            <td>100.116.29.121</td>
                                                            <td>
                                                                <div class="tooltip tooltip-right tooltip--no-decoration"
                                                                    data-placement="top">
                                                                    <svg class="next-icon next-icon--size-16"
                                                                        id="ui-popover-activator--2"
                                                                        aria-expanded="false" aria-haspopup="true"
                                                                        aria-owns="ui-popover--2"
                                                                        aria-controls="ui-popover--2">
                                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            xlink:href="#next-help-circle"></use>
                                                                    </svg>
                                                                    <div
                                                                        class="tooltip-container tooltip-right--inverse-arrow">
                                                                        <span class="tooltip-label">
                                                                            Chrome 89 trên Windows
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </section>
                    </form>
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