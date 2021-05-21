@extends('admin.layouts.master')
@section('title')
Thêm mới khách hàng
@endsection
@section('content')
<main id="AppFrameMain" class="ui-app-frame__main">
    <div class="wrapper" id="wrapper">
        <div id="body" class="page-content clearfix" data-tg-refresh="body">
            <div id="content">
                <div id="customers-create" class="page">
                    <script type="text/javascript">
                        Page();
                    </script>
                    <form accept-charset="UTF-8" autocomplete="off" class="address-form" id="new_customer"
                        method="post">
                        <header class="ui-title-bar-container">
                            <div class="ui-title-bar">
                                <div class="ui-title-bar__navigation">
                                    <div class="ui-breadcrumbs">
                                        <a href="{{route('customer.list')}}"
                                            class="ui-button ui-button--transparent ui-breadcrumb">
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
                                        <h1 class="ui-title-bar__title">Thêm mới khách hàng</h1>
                                    </div>
                                    <div class="action-bar">
                                        <div class="ui-title-bar__mobile-primary-actions">
                                            <div class="ui-title-bar__actions">
                                                <button
                                                    class="ui-button ui-button--primary js-btn-loadable js-btn-primary ui-title-bar__action btn-primary has-loading"
                                                    type="submit" name="save-customer" value="Submit"
                                                    disabled="disabled">Lưu</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ui-title-bar__actions-group">
                                    <div class="ui-title-bar__actions">
                                        <button
                                            class="ui-button ui-button--primary js-btn-loadable js-btn-primary ui-title-bar__action btn-primary has-loading"
                                            type="submit" name="save-customer" value="Submit"
                                            disabled="disabled">Lưu</button>
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
                                    <div class="ui-layout__item" id="customer-overview">
                                        <section class="ui-card">
                                            <header class="ui-card__header">
                                                <h2 class="ui-heading">Thông tin cơ bản</h2>
                                            </header>
                                            <div class="ui-card__section">
                                                <div class="ui-type-container">
                                                    <div class="ui-form__section">
                                                        <div class="ui-form__group">
                                                            <div class="next-input-wrapper">
                                                                <label class="next-label" for="LastName">Họ</label>
                                                                <input bind="last_name" class="next-input" id="LastName"
                                                                    name="LastName" placeholder="Nhập Họ" size="30"
                                                                    type="text">
                                                            </div>
                                                            <div class="next-input-wrapper" id="ht-cus-name">
                                                                <label class="next-label" for="FirstName">Tên</label>
                                                                <input bind="first_name" class="next-input"
                                                                    id="FirstName" name="FirstName"
                                                                    placeholder="Nhập Tên" size="30" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="ui-form__group">
                                                            <div class="next-input-wrapper" id="ht-cus-email">
                                                                <label class="next-label" for="Email">Email</label>
                                                                <input class="next-input" id="Email" name="Email"
                                                                    placeholder="Nhập Email" type="email">
                                                            </div>
                                                            <div class="next-input-wrapper" id="ht-cus-email">
                                                                <label class="next-label" for="Phone">Điện thoại</label>
                                                                <input bind="phone" class="next-input" id="Phone"
                                                                    name="Phone" placeholder="Nhập điện thoại"
                                                                    type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="ui-layout__item">
                                        <section class="ui-card">
                                            <header class="ui-card__header">
                                                <h2 class="ui-heading">Địa chỉ</h2>
                                            </header>
                                            <div class="ui-card__section">
                                                <div class="ui-type-container">
                                                    <div class="ui-form__section">
                                                        <div class="ui-form__group">
                                                            <div class="next-input-wrapper">
                                                                <label class="next-label"
                                                                    for="Address_LastName">Họ</label>
                                                                <input bind="address_last_name"
                                                                    bind-placeholder="last_name" class="next-input"
                                                                    editable-placeholder="True" id="Address_LastName"
                                                                    name="Address.LastName" placeholder="" size="30"
                                                                    type="text">
                                                            </div>
                                                            <div class="next-input-wrapper">
                                                                <label class="next-label"
                                                                    for="Address_FirstName">Tên</label>
                                                                <input bind="address_first_name"
                                                                    bind-placeholder="first_name" class="next-input"
                                                                    editable-placeholder="True" id="Address_FirstName"
                                                                    name="Address.FirstName" placeholder="" size="30"
                                                                    type="text">
                                                            </div>
                                                        </div>
                                                        <div class="ui-form__group">
                                                            <div class="next-input-wrapper">
                                                                <label class="next-label" for="Address_Company">Công
                                                                    ty</label>
                                                                <input class="next-input" id="Address_Company"
                                                                    name="Address.Company" placeholder="Nhập Công ty"
                                                                    type="text">
                                                            </div>
                                                            <div class="next-input-wrapper">
                                                                <label class="next-label" for="Address_Phone">Điện
                                                                    thoại</label>
                                                                <input bind="address_phone" bind-placeholder="phone"
                                                                    class="next-input" id="Address_Phone"
                                                                    name="Address.Phone" placeholder=""
                                                                    editable-placeholder="True" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="next-input-wrapper" id="ht-cus-address">
                                                            <label class="next-label" for="Address_Address1">Địa
                                                                chỉ</label>
                                                            <input class="next-input" id="Address_Address1"
                                                                name="Address.Address1" placeholder="Nhập Địa chỉ"
                                                                type="text">
                                                        </div>
                                                        <div id="customer-address"
                                                            define="{customer_address: new Bizweb.CustomerAddress(this,{&quot;ward_slt&quot;:&quot;#wardSlt&quot;,&quot;district_slt&quot;:&quot;#districtSlt&quot;,&quot;province_slt&quot;:&quot;#provinceSlt&quot;,&quot;have_city&quot;:true,&quot;init_ward_id&quot;:0})}">
                                                            <div class="ui-form__group">
                                                                <div class="ui-form__element">
                                                                    <div class="next-input-wrapper">
                                                                        <label class="next-label"
                                                                            for="Address_CountryId">Quốc gia</label>
                                                                        <div
                                                                            class="ui-select__wrapper next-input--has-content">
                                                                            <select bind="customer_address.country_id"
                                                                                
                                                                                class="ui-select js-country-select filter-dropdown select2-hidden-accessible"
                                                                                data-val="true"
                                                                                data-val-number="The field Quốc gia must be a number."
                                                                                id="Address_CountryId"
                                                                                name="Address.CountryId"
                                                                                style="width: 100%;" tabindex="-1"
                                                                                aria-hidden="true">
                                                                                <option value="1">Abkhazia</option>
                                                                                <option value="2">Afghanistan</option>
                                                                                <option value="3">Albania</option>
                                                                                <option value="4">Algeria</option>
                                                                                <option value="5">Andorra</option>
                                                                                <option value="6">Angola</option>
                                                                                <option value="7">Antigua and Barbuda
                                                                                </option>
                                                                                <option value="8">Argentina</option>
                                                                                <option value="9">Armenia</option>
                                                                                <option value="10">Australia</option>
                                                                                <option value="11">Austria</option>
                                                                                <option value="12">Azerbaijan</option>
                                                                                <option value="13">Bahamas</option>
                                                                                <option value="14">Bahrain</option>
                                                                                <option value="15">Bangladesh</option>
                                                                                <option value="16">Barbados</option>
                                                                                <option value="17">Belarus</option>
                                                                                <option value="18">Belgium</option>
                                                                                <option value="19">Belize</option>
                                                                                <option value="20">Benin</option>
                                                                                <option value="21">Bhutan</option>
                                                                                <option value="22">Bolivia</option>
                                                                                <option value="23">Bosnia and
                                                                                    Herzegovina</option>
                                                                                <option value="24">Botswana</option>
                                                                                <option value="25">Brazil</option>
                                                                                <option value="26">Brunei</option>
                                                                                <option value="27">Bulgaria</option>
                                                                                <option value="28">Burkina Faso</option>
                                                                                <option value="29">Burundi</option>
                                                                                <option value="30">Cambodia</option>
                                                                                <option value="31">Cameroon</option>
                                                                                <option value="32">Canada</option>
                                                                                <option value="33">Cape Verde</option>
                                                                                <option value="34">Central African
                                                                                    Republic</option>
                                                                                <option value="35">Chad</option>
                                                                                <option value="36">Chile</option>
                                                                                <option value="188">China</option>
                                                                                <option value="37">Colombia</option>
                                                                                <option value="38">Comoros</option>
                                                                                <option value="39">Congo-Brazzaville
                                                                                </option>
                                                                                <option value="40">Congo-Kinshasa
                                                                                </option>
                                                                                <option value="41">Costa Rica</option>
                                                                                <option value="42">Côte d'Ivoire
                                                                                </option>
                                                                                <option value="43">Croatia</option>
                                                                                <option value="44">Cuba</option>
                                                                                <option value="45">Cyprus</option>
                                                                                <option value="46">Czech Republic
                                                                                </option>
                                                                                <option value="47">Denmark</option>
                                                                                <option value="48">Djibouti</option>
                                                                                <option value="49">Dominica</option>
                                                                                <option value="50">Dominican Republic
                                                                                </option>
                                                                                <option value="51">East Timor</option>
                                                                                <option value="52">Ecuador</option>
                                                                                <option value="53">Egypt</option>
                                                                                <option value="54">El Salvador</option>
                                                                                <option value="55">Equatorial Guinea
                                                                                </option>
                                                                                <option value="56">Eritrea</option>
                                                                                <option value="57">Estonia</option>
                                                                                <option value="58">Ethiopia</option>
                                                                                <option value="59">Fiji</option>
                                                                                <option value="60">Finland</option>
                                                                                <option value="61">France</option>
                                                                                <option value="62">Gabon</option>
                                                                                <option value="63">Gambia</option>
                                                                                <option value="64">Georgia</option>
                                                                                <option value="65">Germany</option>
                                                                                <option value="66">Ghana</option>
                                                                                <option value="67">Greece</option>
                                                                                <option value="68">Grenada</option>
                                                                                <option value="69">Guatemala</option>
                                                                                <option value="70">Guinea</option>
                                                                                <option value="71">Guinea-Bissau
                                                                                </option>
                                                                                <option value="72">Guyana</option>
                                                                                <option value="73">Haiti</option>
                                                                                <option value="74">Honduras</option>
                                                                                <option value="75">Hong Kong</option>
                                                                                <option value="76">Hungary</option>
                                                                                <option value="77">Iceland</option>
                                                                                <option value="78">India</option>
                                                                                <option value="79">Indonesia</option>
                                                                                <option value="80">Iran</option>
                                                                                <option value="81">Iraq</option>
                                                                                <option value="82">Ireland</option>
                                                                                <option value="83">Israel</option>
                                                                                <option value="84">Italy</option>
                                                                                <option value="85">Jamaica</option>
                                                                                <option value="86">Japan (Nippon)
                                                                                </option>
                                                                                <option value="87">Jordan</option>
                                                                                <option value="88">Kazakhstan</option>
                                                                                <option value="89">Kenya</option>
                                                                                <option value="90">Kiribati</option>
                                                                                <option value="91">Korea</option>
                                                                                <option value="92">Kosovo</option>
                                                                                <option value="93">Kuwait</option>
                                                                                <option value="94">Kyrgyzstan</option>
                                                                                <option value="95">Laos</option>
                                                                                <option value="96">Latvia</option>
                                                                                <option value="97">Lebanon</option>
                                                                                <option value="98">Lesotho</option>
                                                                                <option value="99">Liberia</option>
                                                                                <option value="100">Libya</option>
                                                                                <option value="101">Liechtenstein
                                                                                </option>
                                                                                <option value="102">Lithuania</option>
                                                                                <option value="103">Luxembourg</option>
                                                                                <option value="104">Macedonia (FYROM)
                                                                                </option>
                                                                                <option value="105">Madagascar</option>
                                                                                <option value="106">Malawi</option>
                                                                                <option value="107">Malaysia</option>
                                                                                <option value="108">Maldives</option>
                                                                                <option value="109">Mali</option>
                                                                                <option value="110">Malta</option>
                                                                                <option value="111">Marshall Islands
                                                                                </option>
                                                                                <option value="112">Mauritania</option>
                                                                                <option value="113">Mauritius</option>
                                                                                <option value="114">Mexico</option>
                                                                                <option value="115">Micronesia</option>
                                                                                <option value="116">Moldova</option>
                                                                                <option value="117">Monaco</option>
                                                                                <option value="118">Mongolia</option>
                                                                                <option value="119">Montenegro</option>
                                                                                <option value="120">Morocco</option>
                                                                                <option value="121">Mozambique</option>
                                                                                <option value="122">Myanmar</option>
                                                                                <option value="123">Nagorno-Karabakh
                                                                                </option>
                                                                                <option value="124">Namibia</option>
                                                                                <option value="125">Nauru</option>
                                                                                <option value="126">Nepal</option>
                                                                                <option value="127">Netherlands</option>
                                                                                <option value="128">New Zealand</option>
                                                                                <option value="129">Nicaragua</option>
                                                                                <option value="130">Niger</option>
                                                                                <option value="131">Nigeria</option>
                                                                                <option value="132">North Korea</option>
                                                                                <option value="133">Northern Cyprus
                                                                                </option>
                                                                                <option value="134">Norway</option>
                                                                                <option value="135">Oman</option>
                                                                                <option value="136">Pakistan</option>
                                                                                <option value="137">Palau</option>
                                                                                <option value="138">Palestine</option>
                                                                                <option value="139">Panama</option>
                                                                                <option value="140">Papua New Guinea
                                                                                </option>
                                                                                <option value="141">Paraguay</option>
                                                                                <option value="142">Peru</option>
                                                                                <option value="143">Philippines</option>
                                                                                <option value="144">Poland</option>
                                                                                <option value="145">Portugal</option>
                                                                                <option value="146">Qatar</option>
                                                                                <option value="147">Romania</option>
                                                                                <option value="148">Russia</option>
                                                                                <option value="149">Rwanda</option>
                                                                                <option value="150">Saint Kitts and
                                                                                    Nevis</option>
                                                                                <option value="151">Saint Lucia</option>
                                                                                <option value="152">Saint Vincent and
                                                                                    the Grenadines</option>
                                                                                <option value="153">Samoa</option>
                                                                                <option value="154">San Marino</option>
                                                                                <option value="155">Sao Tome and
                                                                                    Principe</option>
                                                                                <option value="156">Saudi Arabia
                                                                                </option>
                                                                                <option value="157">Scotland</option>
                                                                                <option value="158">Senegal</option>
                                                                                <option value="159">Serbia</option>
                                                                                <option value="160">Seychelles</option>
                                                                                <option value="161">Sierra Leone
                                                                                </option>
                                                                                <option value="162">Singapore</option>
                                                                                <option value="163">Slovak Republic
                                                                                </option>
                                                                                <option value="164">Slovakia</option>
                                                                                <option value="165">Slovenia</option>
                                                                                <option value="166">Solomon Islands
                                                                                </option>
                                                                                <option value="167">Somalia</option>
                                                                                <option value="168">Somaliland</option>
                                                                                <option value="169">South Africa
                                                                                </option>
                                                                                <option value="170">South Ossetia
                                                                                </option>
                                                                                <option value="171">Spain</option>
                                                                                <option value="172">Sri Lanka</option>
                                                                                <option value="173">Sudan</option>
                                                                                <option value="174">Suriname</option>
                                                                                <option value="175">Swaziland</option>
                                                                                <option value="176">Sweden</option>
                                                                                <option value="177">Switzerland</option>
                                                                                <option value="178">Syria</option>
                                                                                <option value="179">Tajikistan</option>
                                                                                <option value="180">Tanzania</option>
                                                                                <option value="181">Thailand</option>
                                                                                <option value="182">Togo</option>
                                                                                <option value="183">Tonga</option>
                                                                                <option value="184">Transnistria
                                                                                </option>
                                                                                <option value="185">Trinidad and Tobago
                                                                                </option>
                                                                                <option value="186">Tunisia</option>
                                                                                <option value="187">Turkey</option>
                                                                                <option value="189">Turkmenistan
                                                                                </option>
                                                                                <option value="190">Tuvalu</option>
                                                                                <option value="191">Uganda</option>
                                                                                <option value="192">Ukraine</option>
                                                                                <option value="193">United Arab Emirates
                                                                                </option>
                                                                                <option value="194">United Kingdom
                                                                                </option>
                                                                                <option value="195">United States
                                                                                </option>
                                                                                <option value="196">Uruguay</option>
                                                                                <option value="197">Uzbekistan</option>
                                                                                <option value="198">Vanuatu</option>
                                                                                <option value="199">Vatican City
                                                                                </option>
                                                                                <option value="200">Venezuela</option>
                                                                                <option selected="selected" value="201">
                                                                                    Vietnam</option>
                                                                                <option value="202">Wales</option>
                                                                                <option value="203">Western Sahara
                                                                                </option>
                                                                                <option value="204">Yemen</option>
                                                                                <option value="205">Zambia</option>
                                                                                <option value="206">Zimbabwe</option>
                                                                            </select>

                                                                            <svg class="next-icon next-icon--size-16">
                                                                                <use xlink:href="#select-chevron"></use>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ui-form__element">
                                                                    <div class="next-input-wrapper">
                                                                        <label class="next-label"
                                                                            for="Address_Zip">Postal / Zip Code</label>
                                                                        <input class="next-input" id="Address_Zip"
                                                                            name="Address.Zip"
                                                                            placeholder="Nhập Postal / Zip Code"
                                                                            type="text">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ui-form__group">
                                                                <div class="ui-form__element">
                                                                    <div class="next-input-wrapper">
                                                                        <label class="next-label"
                                                                            for="Address_City">Tỉnh / Thành phố</label>

                                                                        <div class="ui-select__wrapper next-input--has-content"
                                                                            bind-show="customer_address.have_city">
                                                                            <select
                                                                                bind-show="customer_address.have_city"
                                                                                bind-disabled="!customer_address.have_city"
                                                                                bind="customer_address.province_id"
                                                                                class="ui-select js-province-select filter-dropdown  select2-hidden-accessible"
                                                                                id="provinceSlt"
                                                                                name="Address.ProvinceId"
                                                                                style="width: 100%;"
                                                                                bind-event-change="customer_address.changeProvince()"
                                                                                tabindex="-1" aria-hidden="true">
                                                                                <option value="0">--- Chọn tỉnh thành
                                                                                    ---</option>
                                                                                <option value="1">Hà Nội</option>
                                                                                <option value="2">TP Hồ Chí Minh
                                                                                </option>
                                                                                <option value="3">An Giang</option>
                                                                                <option value="4">Bà Rịa-Vũng Tàu
                                                                                </option>
                                                                                <option value="5">Bắc Giang</option>
                                                                                <option value="6">Bắc Kạn</option>
                                                                                <option value="7">Bạc Liêu</option>
                                                                                <option value="8">Bắc Ninh</option>
                                                                                <option value="9">Bến Tre</option>
                                                                                <option value="10">Bình Dương</option>
                                                                                <option value="11">Bình Định</option>
                                                                                <option value="12">Bình Phước</option>
                                                                                <option value="13">Bình Thuận</option>
                                                                                <option value="14">Cà Mau</option>
                                                                                <option value="15">Cao Bằng</option>
                                                                                <option value="16">Cần Thơ</option>
                                                                                <option value="17">Đà Nẵng</option>
                                                                                <option value="18">Đắk Lắk</option>
                                                                                <option value="19">Đắk Nông</option>
                                                                                <option value="20">Điện Biên</option>
                                                                                <option value="21">Đồng Nai</option>
                                                                                <option value="22">Đồng Tháp</option>
                                                                                <option value="23">Gia Lai</option>
                                                                                <option value="24">Hà Giang</option>
                                                                                <option value="25">Hà Nam</option>
                                                                                <option value="26">Hà Tĩnh</option>
                                                                                <option value="27">Hải Dương</option>
                                                                                <option value="28">Hải Phòng</option>
                                                                                <option value="29">Hậu Giang</option>
                                                                                <option value="30">Hòa Bình</option>
                                                                                <option value="31">Hưng Yên</option>
                                                                                <option value="32">Khánh Hòa</option>
                                                                                <option value="33">Kiên Giang</option>
                                                                                <option value="34">Kon Tum</option>
                                                                                <option value="35">Lai Châu</option>
                                                                                <option value="36">Lâm Đồng</option>
                                                                                <option value="37">Lạng Sơn</option>
                                                                                <option value="38">Lào Cai</option>
                                                                                <option value="39">Long An</option>
                                                                                <option value="40">Nam Định</option>
                                                                                <option value="41">Nghệ An</option>
                                                                                <option value="42">Ninh Bình</option>
                                                                                <option value="43">Ninh Thuận</option>
                                                                                <option value="44">Phú Thọ</option>
                                                                                <option value="45">Phú Yên</option>
                                                                                <option value="46">Quảng Bình</option>
                                                                                <option value="47">Quảng Nam</option>
                                                                                <option value="48">Quảng Ngãi</option>
                                                                                <option value="49">Quảng Ninh</option>
                                                                                <option value="50">Quảng Trị</option>
                                                                                <option value="51">Sóc Trăng</option>
                                                                                <option value="52">Sơn La</option>
                                                                                <option value="53">Tây Ninh</option>
                                                                                <option value="54">Thái Bình</option>
                                                                                <option value="55">Thái Nguyên</option>
                                                                                <option value="56">Thanh Hóa</option>
                                                                                <option value="57">Thừa Thiên Huế
                                                                                </option>
                                                                                <option value="58">Tiền Giang</option>
                                                                                <option value="59">Trà Vinh</option>
                                                                                <option value="60">Tuyên Quang</option>
                                                                                <option value="61">Vĩnh Long</option>
                                                                                <option value="62">Vĩnh Phúc</option>
                                                                                <option value="63">Yên Bái</option>
                                                                            </select>
                                                                            <svg class="next-icon next-icon--size-16">
                                                                                <use xlink:href="#select-chevron"></use>
                                                                            </svg>
                                                                        </div>
                                                                        <input
                                                                            bind-disabled="customer_address.have_city"
                                                                            bind-show="!customer_address.have_city"
                                                                            class="next-input  hide" id="Address_City"
                                                                            name="Address.City"
                                                                            placeholder="Nhập Tỉnh / Thành phố"
                                                                            type="text" disabled="">
                                                                    </div>
                                                                </div>
                                                                <div class="ui-form__element"
                                                                    bind-show="customer_address.have_city">
                                                                    <div class="next-input-wrapper">
                                                                        <label class="next-label"
                                                                            for="Address_DistrictId">Quận huyện</label>
                                                                        <div
                                                                            class="ui-select__wrapper next-input--has-content">
                                                                            <select
                                                                                bind-disabled="!customer_address.have_city"
                                                                                class="ui-select js-district-select filter-dropdown select2-hidden-accessible"
                                                                                id="districtSlt"
                                                                                name="Address.DistrictId"
                                                                                style="width: 100%;"
                                                                                bind-event-change="customer_address.changeDistrict()"
                                                                                tabindex="-1" aria-hidden="true">
                                                                                <option value="0">--- Chọn quận huyện
                                                                                    ---</option>
                                                                            </select>
                                                                            <svg class="next-icon next-icon--size-16">
                                                                                <use xlink:href="#select-chevron"></use>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ui-form__element"
                                                                    bind-show="customer_address.have_city">
                                                                    <div class="next-input-wrapper">
                                                                        <label class="next-label"
                                                                            for="Address_WardId">Phường xã</label>
                                                                        <div
                                                                            class="ui-select__wrapper next-input--has-content">
                                                                            <select
                                                                                bind-disabled="!customer_address.have_city"
                                                                                class="ui-select js-district-select filter-dropdown js-no-dirty select2-hidden-accessible"
                                                                                id="wardSlt" name="Address.WardId"
                                                                                style="width: 100%;" tabindex="-1"
                                                                                aria-hidden="true">
                                                                                <option value="0">--- Chọn phường xã ---
                                                                                </option>
                                                                            </select>
                                                                            <svg class="next-icon next-icon--size-16">
                                                                                <use xlink:href="#select-chevron"></use>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ui-form__element">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                <div class="ui-layout__section ui-layout__section--secondary" id="customer-side-bar">
                                    <div class="ui-layout__item">
                                        <aside class="next-card">
                                            <section>
                                                <header class="next-card__header">
                                                    <div class="next-grid next-grid--no-outside-padding">
                                                        <div class="next-grid__cell">
                                                            <h3 class="next-heading">Ghi chú</h3>
                                                        </div>
                                                    </div>
                                                </header>
                                                <div class="next-card__section">
                                                    <div class="next-input-wrapper">
                                                        <textarea class="next-input next-resize-vertical" cols="20"
                                                            id="Note" name="Note"
                                                            placeholder="Nhập Ghi chú về khách hàng"
                                                            rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </section>
                                        </aside>
                                    </div>
                                    <div class="ui-layout__item" id="images-container">
                                        <div class="next-card">
                                            <header class="next-card__header">
                                                <div
                                                    class="next-grid next-grid--no-padding next-grid--vertically-centered">
                                                    <div class="next-grid__cell">
                                                        <h2 class="next-heading">Ảnh đại diện</h2>
                                                    </div>
                                                </div>
                                            </header>

                                            <div context="form" class="next-card__section">
                                                <div id="collection-image-drop">
                                                    <div>
                                                        <div
                                                            class="aspect-ratio aspect-ratio--dropzone aspect-ratio--square aspect-ratio--interactive">
                                                            <div class="aspect-ratio__content">
                                                                <div
                                                                    class="ui-stack ui-stack--wrap ui-stack--vertical type--centered">
                                                                    <i class="fal fa-image next-icon next-icon--size-24 next-upload-dropzone__icon"
                                                                        style="font-size: 100px; margin-bottom: 0!important;"></i>
                                                                    <div class="styled-file-input">
                                                                        <div class="btn btn-primary">
                                                                            <label for="collection-upload-image">Upload
                                                                                ảnh</label>
                                                                            <input type="file"
                                                                                id="collection-upload-image"
                                                                                accept="image/*">
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
                            </div>
                        </div>
                        <div class="ui-page-actions">
                            <div class="ui-page-actions__container">
                                <div class="ui-page-actions__actions ui-page-actions__actions--primary">
                                    <div class="ui-page-actions__button-group">
                                        <a class="btn" href="/admin/customers">Hủy</a>
                                        <button name="commit" type="submit" value="Submit"
                                            class="btn js-btn-primary js-btn-loadable btn-primary has-loading"
                                            disabled="disabled">
                                            Lưu
                                        </button>
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
                                    <a rel="noreferrer noopener" target="_blank"
                                        href="https://support.sapo.vn/them-moi-khach-hang">tại đây</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="modal" data-tg-refresh="modal" id="modal_container" style="display: none;"
                        aria-hidden="true" aria-labelledby="ModalTitle" tabindex="-1"></div>
                    <div class="modal-bg" data-tg-refresh="modal" id="modal_backdrop" tabindex="-1"></div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection