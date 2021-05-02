<div
    class="ui-top-bar__item ui-top-bar__item--separated ui-top-bar__item--bleed ui-top-bar__item--mobile-hidden ui-top-bar-acc">
    <div class="ui-popover__container ui-popover__container--full-width-container">
        <button name="button" type="button" class="top-bar-button top-bar-button--profile" id="AccountMenuActivator"
            data-tg-refresh="next-nav__avatar" aria-haspopup="true" aria-owns="ui-popover--1"
            aria-controls="ui-popover--1">
            <div class="top-bar-profile">
                <div class="top-bar-profile__avatar">
                    <span class="user-avatar user-avatar--style-2">
                        <span class="user-avatar__initials">
                            <img class="profile-pic img-circle" data-name="{{Auth::user()->name}}">
                        </span>
                        <img alt="" class="gravatar gravatar--size-thumb"
                            src="https://secure.gravatar.com/avatar/cb8f2c4f38a2fd98d0a1663076b9262d.jpg?s=45&amp;d=blank">
                    </span>

                </div>
                <div class="top-bar-profile__summary">
                    <p class="top-bar-profile__title">
                    {{Auth::user()->name}} {{Auth::user()->surname}}
                    </p>
                    <p class="top-bar-profile__description">
                        <span>
                            <span class="text-aqua bold">Cutepets</span>
                        </span>
                    </p>
                </div>
            </div>
        </button>
        <div class="ui-popover margin-10" role="dialog"
            style="max-width: none; margin-right: 0px; margin-left: 0px; transform-origin: 102px -5px 0px; left: -25px;">
            <div class="ui-popover__tooltip"></div>
            <div class="ui-popover__content-wrapper">
                <div class="ui-popover__content">
                    <div class="ui-popover__pane">
                        <ul class="ui-action-list">
                            <li class="ui-action-list__item">

                                <a href="/admin/settings/account/430766" class="ui-action-list-action"
                                    data-allow-default="1">
                                    <span class="ui-action-list-action__text">
                                        <div
                                            class="ui-stack ui-stack--wrap ui-stack--alignment-center ui-stack--spacing-tight">
                                            <div class="ui-stack-item">
                                                <svg role="img" class="next-icon next-icon--size-16"
                                                    aria-labelledby="account-3d4a92ab5af96f48bf19a083d207c987-title">
                                                    <title id="account-3d4a92ab5af96f48bf19a083d207c987-title">
                                                        Profile icon</title>
                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#account"></use>
                                                </svg>
                                            </div>
                                            <div class="ui-stack-item ui-stack-item--fill">
                                                <span>Tài khoản của bạn</span>
                                            </div>
                                        </div>
                                    </span>
                                </a>
                            </li>
                            <li class="ui-action-list__item">
                                <a href="/admin/settings/plans" class="ui-action-list-action" data-allow-default="1">
                                    <span class="ui-action-list-action__text">
                                        <div
                                            class="ui-stack ui-stack--wrap ui-stack--alignment-center ui-stack--spacing-tight">
                                            <div class="ui-stack-item">
                                                <svg class="next-icon next-icon--size-24" role="img"
                                                    style="margin-left: -4px; margin-right: -3px; margin-top: 2px;">
                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#payments-billing"></use>
                                                </svg>
                                            </div>
                                            <div class="ui-stack-item ui-stack-item--fill">
                                                <span>Gói dịch vụ</span>
                                            </div>
                                        </div>
                                    </span>
                                </a>
                            </li>
                            <li class="ui-action-list__item">
                                <a href="javascript:void(0)" class="ui-action-list-action" data-no-turbolink="true"
                                    id="btn-logout">
                                    <span class="ui-action-list-action__text">
                                        <div
                                            class="ui-stack ui-stack--wrap ui-stack--alignment-center ui-stack--spacing-tight">
                                            <div class="ui-stack-item">
                                                <svg role="img" class="next-icon next-icon--size-16"
                                                    aria-labelledby="minor-log-out-title">
                                                    <title id="minor-log-out-title">Log out icon</title>
                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#minor-log-out"></use>
                                                </svg>
                                            </div>
                                            <div class="ui-stack-item ui-stack-item--fill">
                                                <span>Đăng xuất</span>
                                            </div>
                                        </div>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <ul class="ui-action-list">
                            <li class="ui-action-list__item"><a href="https://support.sapo.vn/quy-dinh-su-dung"
                                    class="ui-action-list-action" target="_blank" rel="noopener noreferrer"><span
                                        class="ui-action-list-action__text">Điều
                                        khoản dịch vụ</span></a></li>
                            <li class="ui-action-list__item"><a href="https://support.sapo.vn/chinh-sach-bao-mat"
                                    class="ui-action-list-action" target="_blank" rel="noopener noreferrer"><span
                                        class="ui-action-list-action__text">Chính sách bảo mật</span></a>
                            </li>
                            <li class="ui-action-list__item"><a href="https://support.sapo.vn/" target="_blank"
                                    rel="noopener noreferrer" class="ui-action-list-action"><span
                                        class="ui-action-list-action__text">Hỗ trợ</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>